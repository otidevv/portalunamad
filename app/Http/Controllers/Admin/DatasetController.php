<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Dataset;
use App\Models\DatasetRecord;
use Illuminate\Database\UniqueConstraintViolationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class DatasetController extends Controller
{
    /**
     * Catálogo de datasets del Plan de Apertura de Datos, con filtros por área y estado.
     */
    public function index(Request $request)
    {
        $area = $request->query('area');
        $estado = $request->query('estado');

        $datasets = Dataset::with('user')
            ->withCount('registros')
            ->deArea($area)
            ->conEstado($estado)
            // Primero los que tienen fecha de publicación comprometida (las más próximas arriba).
            ->orderByRaw('fecha_publicacion IS NULL, fecha_publicacion asc')
            ->orderBy('created_at', 'desc')
            ->paginate(10)
            ->withQueryString();

        $stats = [
            'total' => Dataset::count(),
            'publicados' => Dataset::where('estado_publicacion', 'publicado')->count(),
            'en_plan' => Dataset::whereIn('estado_publicacion', ['planificado', 'en_preparacion'])->count(),
            'desfasados' => Dataset::where('estado_publicacion', '!=', 'publicado')
                ->whereNotNull('fecha_publicacion')
                ->whereDate('fecha_publicacion', '<', now())
                ->count(),
        ];

        return view('admin.datasets.index', [
            'datasets' => $datasets,
            'stats' => $stats,
            'areas' => Dataset::AREAS,
            'estados' => Dataset::ESTADOS_PUBLICACION,
            'filtroArea' => $area,
            'filtroEstado' => $estado,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.datasets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * El CSV es opcional: un dataset puede registrarse en el plan (con sus
     * metadatos) antes de que existan los datos a publicar.
     */
    public function store(Request $request)
    {
        $validated = $this->validarMetadatos($request, [
            'archivo' => 'nullable|file|mimes:csv,txt|max:51200', // 50 MB
            'separador' => 'nullable|in:auto,coma,puntoycoma,tab',
            'slug' => 'nullable|string|max:255|alpha_dash',
        ]);

        try {
            $dataset = $this->crearDataset($request, $validated);
        } catch (\Throwable $e) {
            Log::error('Error al crear dataset: '.$e->getMessage());

            return back()
                ->withInput()
                ->with('error', 'No se pudo procesar el dataset: '.$e->getMessage());
        }

        $msg = $dataset->tieneDatos()
            ? "Dataset «{$dataset->nombre}» creado con {$dataset->total_filas} filas."
            : "Dataset «{$dataset->nombre}» registrado en el plan. Sube el CSV cuando los datos estén listos.";

        return redirect()
            ->route('admin.datasets.show', $dataset)
            ->with('success', $msg);
    }

    /**
     * Crea el dataset (y sus filas, si vino un CSV) en una transacción, reintentando
     * si dos cargas concurrentes generan el mismo slug (colisión de la constraint UNIQUE).
     */
    private function crearDataset(Request $request, array $validated): Dataset
    {
        $intentos = 0;
        $tieneCsv = $request->hasFile('archivo');

        while (true) {
            try {
                return DB::transaction(function () use ($request, $validated, $tieneCsv) {
                    $base = $validated['slug'] ?? $validated['nombre'];

                    $dataset = new Dataset($this->atributosMetadatos($request, $validated));
                    $dataset->slug = $this->slugUnico($base);
                    $dataset->origen = 'manual';
                    $dataset->user_id = Auth::id();
                    $dataset->estado_sync = $tieneCsv ? 'completado' : 'pendiente';
                    $dataset->ultima_sincronizacion = $tieneCsv ? now() : null;
                    $dataset->save();

                    if ($tieneCsv) {
                        $resumen = $this->importarCsv(
                            $dataset,
                            $request->file('archivo')->getRealPath(),
                            $validated['separador'] ?? 'auto'
                        );
                        $dataset->columnas = $resumen['columnas'];
                        $dataset->total_filas = $resumen['total'];
                        $dataset->save();
                    }

                    return $dataset;
                });
            } catch (UniqueConstraintViolationException $e) {
                if (++$intentos >= 3) {
                    throw $e;
                }
                // Reintentar: slugUnico() recalculará evitando el slug ya tomado.
            }
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Dataset $dataset)
    {
        $dataset->loadCount('registros');
        $muestra = $dataset->tieneDatos()
            ? $dataset->registros()->orderBy('fila')->limit(50)->get()
            : collect();

        return view('admin.datasets.show', compact('dataset', 'muestra'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dataset $dataset)
    {
        $dataset->loadCount('registros');

        return view('admin.datasets.edit', compact('dataset'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dataset $dataset)
    {
        $validated = $this->validarMetadatos($request, [
            'archivo' => 'nullable|file|mimes:csv,txt|max:51200',
            'separador' => 'nullable|in:auto,coma,puntoycoma,tab',
            'columnas' => 'nullable|array',
        ]);

        try {
            DB::transaction(function () use ($request, $validated, $dataset) {
                $dataset->fill($this->atributosMetadatos($request, $validated));

                if ($request->hasFile('archivo')) {
                    // Reemplazar los datos: el CSV redefine también el diccionario de columnas.
                    $dataset->registros()->delete();
                    $resumen = $this->importarCsv(
                        $dataset,
                        $request->file('archivo')->getRealPath(),
                        $validated['separador'] ?? 'auto'
                    );
                    $dataset->columnas = $resumen['columnas'];
                    $dataset->total_filas = $resumen['total'];
                    $dataset->estado_sync = 'completado';
                    $dataset->ultima_sincronizacion = now();
                } elseif ($request->filled('columnas')) {
                    // Sin CSV nuevo: se editó el diccionario de datos a mano.
                    $dataset->columnas = $this->reconstruirColumnas($request->input('columnas', []));
                }

                $dataset->save();
            });
        } catch (\Throwable $e) {
            Log::error('Error al actualizar dataset: '.$e->getMessage());

            return back()
                ->withInput()
                ->with('error', 'No se pudo actualizar el dataset: '.$e->getMessage());
        }

        return redirect()
            ->route('admin.datasets.show', $dataset)
            ->with('success', 'Dataset actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dataset $dataset)
    {
        $dataset->delete(); // las filas se eliminan en cascada

        return redirect()
            ->route('admin.datasets.index')
            ->with('success', 'Dataset eliminado correctamente.');
    }

    /**
     * Activar/desactivar el dataset (acción AJAX).
     */
    public function toggleEstado(Dataset $dataset)
    {
        $dataset->update(['activo' => ! $dataset->activo]);

        return response()->json([
            'success' => true,
            'message' => $dataset->activo ? 'Dataset activado.' : 'Dataset desactivado.',
            'activo' => $dataset->activo,
        ]);
    }

    /**
     * Datos agregados para la previsualización del gráfico en el admin.
     */
    public function datos(Request $request, Dataset $dataset)
    {
        return response()->json($dataset->serie(
            $request->query('x'),
            $request->query('y'),
            $request->query('agg', 'sum')
        ));
    }

    /**
     * Descarga una plantilla CSV vacía construida a partir del diccionario de datos:
     * cabeceras = campos del diccionario, más una fila de ejemplo. Pensada para que
     * cada área llene sus datos con el formato correcto antes de cargarlos.
     */
    public function plantilla(Dataset $dataset)
    {
        $columnas = $dataset->columnas ?? [];
        abort_if(empty($columnas), 404, 'Este dataset todavía no tiene un diccionario de columnas definido.');

        $cabeceras = array_map(fn ($c) => $c['label'] ?? $c['key'] ?? '', $columnas);
        $ejemplo = array_map(fn ($c) => (string) ($c['ejemplo'] ?? ''), $columnas);
        $hayEjemplo = count(array_filter($ejemplo, fn ($v) => trim($v) !== '')) > 0;

        $nombreArchivo = ($dataset->slug ?: 'dataset').'_plantilla.csv';

        // Neutralizar inyección de fórmulas CSV: si una celda empieza por = + - @ (o TAB/CR),
        // Excel/LibreOffice la interpretaría como fórmula al abrir el archivo.
        $sanear = static fn ($v) => preg_match('/^[=+\-@\t\r]/', (string) $v) === 1 ? "'".$v : (string) $v;

        return response()->streamDownload(function () use ($cabeceras, $ejemplo, $hayEjemplo, $sanear) {
            $out = fopen('php://output', 'w');
            fwrite($out, "\xEF\xBB\xBF"); // BOM UTF-8 para que Excel respete los acentos
            fputcsv($out, array_map($sanear, $cabeceras), ';');
            if ($hayEjemplo) {
                fputcsv($out, array_map($sanear, $ejemplo), ';');
            }
            fclose($out);
        }, $nombreArchivo, [
            'Content-Type' => 'text/csv; charset=UTF-8',
        ]);
    }

    // ---------------------------------------------------------------------
    // Validación y armado de metadatos (compartido por store y update)
    // ---------------------------------------------------------------------

    /**
     * Reglas comunes de los metadatos del plan + las reglas extra propias de cada acción.
     */
    private function validarMetadatos(Request $request, array $extra): array
    {
        $reglas = array_merge([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'area_responsable' => 'nullable|string|max:255',
            'categoria' => 'nullable|string|max:100',
            'frecuencia_actualizacion' => 'nullable|string|max:50',
            'licencia' => 'nullable|string|max:100',
            'fecha_corte' => 'nullable|date',
            'fecha_publicacion' => 'nullable|date',
            'estado_publicacion' => ['nullable', Rule::in(array_keys(Dataset::ESTADOS_PUBLICACION))],
            'observaciones' => 'nullable|string',
            'fuente_url' => 'nullable|url|max:500',
            'activo' => 'nullable|boolean',
        ], $extra);

        return $request->validate($reglas, [
            'nombre.required' => 'El nombre es obligatorio.',
            'archivo.mimes' => 'El archivo debe ser CSV (.csv o .txt).',
            'archivo.max' => 'El archivo no debe superar los 50 MB.',
            'fuente_url.url' => 'La fuente debe ser una URL válida.',
            'slug.alpha_dash' => 'El identificador solo admite letras, números, guiones y guiones bajos.',
        ]);
    }

    /**
     * Atributos de metadatos listos para fill()/new (no incluye slug, origen ni datos).
     */
    private function atributosMetadatos(Request $request, array $validated): array
    {
        return [
            'nombre' => $validated['nombre'],
            'descripcion' => $validated['descripcion'] ?? null,
            'area_responsable' => $validated['area_responsable'] ?? null,
            'categoria' => $validated['categoria'] ?? null,
            'frecuencia_actualizacion' => $validated['frecuencia_actualizacion'] ?? null,
            'licencia' => $validated['licencia'] ?? null,
            'fecha_corte' => $validated['fecha_corte'] ?? null,
            'fecha_publicacion' => $validated['fecha_publicacion'] ?? null,
            'estado_publicacion' => $validated['estado_publicacion'] ?? 'planificado',
            'observaciones' => $validated['observaciones'] ?? null,
            'fuente_url' => $validated['fuente_url'] ?? null,
            'activo' => $request->boolean('activo'),
        ];
    }

    // ---------------------------------------------------------------------
    // Helpers de importación CSV / diccionario de columnas
    // ---------------------------------------------------------------------

    private function slugUnico(string $base): string
    {
        $base = Str::slug($base) ?: 'dataset';
        $slug = $base;
        $i = 1;
        while (Dataset::where('slug', $slug)->exists()) {
            $slug = $base.'-'.(++$i);
        }

        return $slug;
    }

    /**
     * Reconstruye el array `columnas` a partir de las filas del editor de diccionario.
     * Conserva la key existente cuando viene, genera una nueva (única) a partir del
     * label cuando no, y descarta filas sin nombre de campo.
     *
     * @param  array<int,array<string,mixed>>  $filas
     */
    private function reconstruirColumnas(array $filas): array
    {
        $columnas = [];
        $usadas = [];
        $n = 0;

        foreach ($filas as $fila) {
            $label = trim((string) ($fila['label'] ?? ''));
            if ($label === '') {
                continue; // sin nombre de campo no es una columna válida
            }

            $key = trim((string) ($fila['key'] ?? ''));
            if ($key === '') {
                $key = Str::slug($label, '_') ?: 'col';
            }

            // Garantizar unicidad de la key dentro del diccionario.
            $original = $key;
            $j = 1;
            while (in_array($key, $usadas, true)) {
                $key = $original.'_'.(++$j);
            }
            $usadas[] = $key;

            $tipo = (string) ($fila['tipo'] ?? 'texto');
            if (! array_key_exists($tipo, Dataset::TIPOS_COLUMNA)) {
                $tipo = 'texto';
            }

            $columnas[] = [
                'numero' => ++$n,
                'key' => $key,
                'label' => $label,
                'tipo' => $tipo,
                'formato' => trim((string) ($fila['formato'] ?? '')) ?: null,
                'descripcion' => trim((string) ($fila['descripcion'] ?? '')) ?: null,
                'ejemplo' => trim((string) ($fila['ejemplo'] ?? '')) ?: null,
            ];
        }

        return $columnas;
    }

    /**
     * Lee el CSV, infiere el tipo de cada columna e inserta las filas por lotes.
     *
     * @return array{columnas:array, total:int}
     */
    private function importarCsv(Dataset $dataset, string $ruta, string $separador): array
    {
        $delimitador = $this->resolverDelimitador($ruta, $separador);

        $handle = fopen($ruta, 'r');
        if ($handle === false) {
            throw new \RuntimeException('No se pudo abrir el archivo.');
        }

        $muestra = [];
        $keys = [];
        $labels = [];
        $fila = 0;

        try {
            $cabeceras = fgetcsv($handle, 0, $delimitador, '"', '');
            if ($cabeceras === false || $cabeceras === [null]) {
                throw new \RuntimeException('El CSV está vacío o no tiene cabeceras.');
            }

            // Normalizar cabeceras a UTF-8 (aUtf8() también elimina el BOM inicial de cada celda).
            $cabeceras = array_map(fn ($c) => $this->aUtf8($c), $cabeceras);

            [$keys, $labels] = $this->normalizarCabeceras($cabeceras);

            $lote = [];
            $maxMuestra = 200;
            $tamLote = 500;

            while (($valores = fgetcsv($handle, 0, $delimitador, '"', '')) !== false) {
                if ($valores === [null]) {
                    continue; // línea en blanco
                }

                $registro = [];
                foreach ($keys as $i => $key) {
                    $registro[$key] = isset($valores[$i]) ? trim($this->aUtf8($valores[$i]) ?? '') : null;
                }

                $lote[] = [
                    'dataset_id' => $dataset->id,
                    'fila' => $fila,
                    'datos' => json_encode($registro, JSON_UNESCAPED_UNICODE),
                ];

                if (count($muestra) < $maxMuestra) {
                    $muestra[] = $registro;
                }

                $fila++;

                if (count($lote) >= $tamLote) {
                    DatasetRecord::insert($lote);
                    $lote = [];
                }
            }

            if (! empty($lote)) {
                DatasetRecord::insert($lote);
            }
        } finally {
            fclose($handle);
        }

        if ($fila === 0) {
            throw new \RuntimeException('El CSV no contiene filas de datos. Revisa que el separador sea el correcto y que haya datos bajo las cabeceras.');
        }

        // Conservar la descripción/formato/ejemplo del diccionario previo (si existía) al re-importar.
        $previas = collect($dataset->columnas ?? [])->keyBy('key');

        $columnas = [];
        foreach ($keys as $i => $key) {
            $prev = $previas->get($key, []);
            $columnas[] = [
                'numero' => $i + 1,
                'key' => $key,
                'label' => $labels[$i],
                'tipo' => $this->inferirTipo(array_column($muestra, $key)),
                'formato' => $prev['formato'] ?? null,
                'descripcion' => $prev['descripcion'] ?? null,
                'ejemplo' => $prev['ejemplo'] ?? null,
            ];
        }

        return ['columnas' => $columnas, 'total' => $fila];
    }

    private function resolverDelimitador(string $ruta, string $separador): string
    {
        $mapa = ['coma' => ',', 'puntoycoma' => ';', 'tab' => "\t"];
        if (isset($mapa[$separador])) {
            return $mapa[$separador];
        }

        // auto: olfatear la primera línea contando separadores candidatos.
        $handle = fopen($ruta, 'r');
        $linea = $handle ? (fgets($handle) ?: '') : '';
        if ($handle) {
            fclose($handle);
        }

        $conteos = [
            ',' => substr_count($linea, ','),
            ';' => substr_count($linea, ';'),
            "\t" => substr_count($linea, "\t"),
        ];
        arsort($conteos);
        $mejor = array_key_first($conteos);

        return $conteos[$mejor] > 0 ? $mejor : ',';
    }

    /**
     * Convierte las cabeceras en keys únicas (slug con guion bajo) + etiquetas legibles.
     *
     * @return array{0: array<int,string>, 1: array<int,string>} [keys, labels]
     */
    private function normalizarCabeceras(array $cabeceras): array
    {
        $keys = [];
        $labels = [];
        $usadas = [];

        foreach ($cabeceras as $i => $cabecera) {
            $label = trim((string) $cabecera);
            if ($label === '') {
                $label = 'Columna '.($i + 1);
            }
            $key = Str::slug($label, '_') ?: 'col_'.($i + 1);

            $original = $key;
            $n = 1;
            while (in_array($key, $usadas, true)) {
                $key = $original.'_'.(++$n);
            }
            $usadas[] = $key;

            $keys[] = $key;
            $labels[] = $label;
        }

        return [$keys, $labels];
    }

    /**
     * Infiere el tipo de una columna a partir de una muestra de sus valores.
     */
    private function inferirTipo(array $valores): string
    {
        $valores = array_values(array_filter(
            $valores,
            fn ($v) => $v !== null && trim((string) $v) !== ''
        ));

        if (empty($valores)) {
            return 'texto';
        }

        $todoNumero = true;
        $todoFecha = true;

        foreach ($valores as $valor) {
            $v = trim((string) $valor);

            $numerico = Dataset::normalizarNumero($v);
            if ($numerico === null || ! is_numeric($numerico)) {
                $todoNumero = false;
            }

            if (! preg_match('/^\d{4}-\d{2}-\d{2}/', $v) && ! preg_match('#^\d{1,2}/\d{1,2}/\d{2,4}$#', $v)) {
                $todoFecha = false;
            }

            if (! $todoNumero && ! $todoFecha) {
                break;
            }
        }

        return $todoNumero ? 'numero' : ($todoFecha ? 'fecha' : 'texto');
    }

    private function aUtf8(?string $valor): ?string
    {
        if ($valor === null || $valor === '') {
            return $valor;
        }

        // Quitar el BOM UTF-8 si aparece al inicio de la celda (Excel/exports lo agregan).
        $valor = preg_replace('/^\xEF\xBB\xBF/', '', $valor);

        $enc = mb_detect_encoding($valor, ['UTF-8', 'ISO-8859-1', 'Windows-1252'], true);
        if ($enc && $enc !== 'UTF-8') {
            return mb_convert_encoding($valor, 'UTF-8', $enc);
        }

        return $valor;
    }
}
