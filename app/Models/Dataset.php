<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Dataset extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'slug',
        'descripcion',
        'area_responsable',
        'categoria',
        'frecuencia_actualizacion',
        'licencia',
        'fecha_corte',
        'fecha_publicacion',
        'estado_publicacion',
        'observaciones',
        'origen',
        'fuente_url',
        'ckan_package_id',
        'ckan_resource_id',
        'columnas',
        'total_filas',
        'ultima_sincronizacion',
        'estado_sync',
        'mensaje_sync',
        'activo',
        'user_id',
    ];

    protected $casts = [
        'columnas' => 'array',
        'total_filas' => 'integer',
        'fecha_corte' => 'date',
        'fecha_publicacion' => 'date',
        'ultima_sincronizacion' => 'datetime',
        'activo' => 'boolean',
    ];

    /**
     * Áreas responsables del Plan de Apertura de Datos (PNDA) de la UNAMAD.
     * Es una lista sugerida: el formulario permite escribir otra si hace falta.
     */
    public const AREAS = [
        'Dirección de Asuntos Académicos',
        'Oficina de Recursos Humanos',
        'Dirección de Admisión',
        'Vicerrectorado de Investigación',
        'Dir. de Administración (Abastecimiento)',
        'Servicios Generales (Comisión Ambientes)',
        'Dirección de Bienestar Universitario',
        'Oficina de Tecnologías de la Información',
    ];

    /**
     * Categorías temáticas usadas por datosabiertos.gob.pe.
     */
    public const CATEGORIAS = [
        'Educación',
        'Población',
        'Economía y Finanzas',
        'Ciencia y Tecnología',
        'Gobernabilidad',
        'Ambiente',
        'Infraestructura',
        'Salud',
        'Otros',
    ];

    public const FRECUENCIAS = [
        'Anual',
        'Semestral',
        'Cuatrimestral',
        'Trimestral',
        'Mensual',
        'Eventual',
        'No aplica',
    ];

    public const LICENCIAS = [
        'CC BY 4.0',
        'CC BY-SA 4.0',
        'CC0 1.0 (Dominio público)',
        'ODC-ODbL',
        'Open Data Commons Attribution (ODC-By)',
    ];

    /**
     * Estados del ciclo de vida dentro del plan (clave => etiqueta legible).
     */
    public const ESTADOS_PUBLICACION = [
        'planificado' => 'Planificado',
        'en_preparacion' => 'En preparación',
        'publicado' => 'Publicado',
        'desfasado' => 'Desfasado',
    ];

    /**
     * Tipos de dato que admite el diccionario de columnas.
     */
    public const TIPOS_COLUMNA = [
        'texto' => 'Texto',
        'numero' => 'Número',
        'fecha' => 'Fecha',
    ];

    /**
     * El admin enlaza por id; las rutas públicas declaran {dataset:slug} de forma explícita.
     */
    public function getRouteKeyName(): string
    {
        return 'id';
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function registros(): HasMany
    {
        return $this->hasMany(DatasetRecord::class);
    }

    public function scopeActivos($query)
    {
        return $query->where('activo', true);
    }

    public function scopeDeArea($query, ?string $area)
    {
        return $area ? $query->where('area_responsable', $area) : $query;
    }

    public function scopeConEstado($query, ?string $estado)
    {
        return $estado ? $query->where('estado_publicacion', $estado) : $query;
    }

    /**
     * ¿Ya tiene filas de datos cargadas? (los datasets planificados aún no las tienen).
     */
    public function tieneDatos(): bool
    {
        return $this->total_filas > 0;
    }

    /**
     * Etiqueta legible del estado de publicación.
     */
    public function getEstadoPublicacionLabelAttribute(): string
    {
        return self::ESTADOS_PUBLICACION[$this->estado_publicacion] ?? ucfirst((string) $this->estado_publicacion);
    }

    /**
     * Clases de color (Tailwind) para el badge de estado de publicación.
     */
    public function getEstadoPublicacionColorAttribute(): string
    {
        return match ($this->estado_publicacion) {
            'publicado' => 'bg-green-100 text-green-800',
            'en_preparacion' => 'bg-amber-100 text-amber-800',
            'desfasado' => 'bg-red-100 text-red-800',
            default => 'bg-gray-100 text-gray-700',
        };
    }

    /**
     * ¿La fecha comprometida de publicación ya pasó sin haberse publicado?
     */
    public function estaDesfasado(): bool
    {
        return $this->estado_publicacion !== 'publicado'
            && $this->fecha_publicacion !== null
            && $this->fecha_publicacion->isPast();
    }

    /**
     * Columnas aptas como eje X (categóricas o de tiempo).
     */
    public function getColumnasEjeAttribute(): array
    {
        return collect($this->columnas ?? [])
            ->whereIn('tipo', ['texto', 'fecha'])
            ->values()
            ->all();
    }

    /**
     * Columnas numéricas (posibles valores a agregar en el eje Y).
     */
    public function getColumnasNumericasAttribute(): array
    {
        return collect($this->columnas ?? [])
            ->where('tipo', 'numero')
            ->values()
            ->all();
    }

    /**
     * Construye una serie agregada lista para graficar (agrupando por el eje X).
     *
     * @return array{ejeX:?string, ejeY:?string, agregacion:string, labels:array, values:array, truncado:bool}
     */
    public function serie(?string $ejeX = null, ?string $ejeY = null, string $agg = 'sum', int $limite = 50): array
    {
        $columnas = collect($this->columnas ?? []);

        // Resolver eje X: el solicitado, o la primera columna fecha/texto, o la primera disponible.
        $ejeX = $ejeX
            ?: data_get($columnas->firstWhere('tipo', 'fecha'), 'key')
            ?: data_get($columnas->firstWhere('tipo', 'texto'), 'key')
            ?: data_get($columnas->first(), 'key');

        // Resolver eje Y: el solicitado (si existe), o la primera columna numérica.
        $colY = $ejeY
            ? $columnas->firstWhere('key', $ejeY)
            : $columnas->firstWhere('tipo', 'numero');
        $ejeY = data_get($colY, 'key');

        $agg = in_array($agg, ['sum', 'avg', 'count'], true) ? $agg : 'sum';
        if ($ejeY === null) {
            $agg = 'count'; // sin columna numérica solo se puede contar filas
        }

        $grupos = [];
        $this->registros()
            ->select('datos')
            ->orderBy('fila')
            ->chunk(1000, function ($chunk) use (&$grupos, $ejeX, $ejeY) {
                foreach ($chunk as $registro) {
                    $datos = $registro->datos ?? [];
                    $clave = $ejeX !== null ? (string) ($datos[$ejeX] ?? 'Sin dato') : 'Total';

                    if (! isset($grupos[$clave])) {
                        $grupos[$clave] = ['suma' => 0.0, 'conteo' => 0];
                    }

                    if ($ejeY !== null) {
                        $valor = self::normalizarNumero($datos[$ejeY] ?? null);
                        $grupos[$clave]['suma'] += is_numeric($valor) ? (float) $valor : 0.0;
                    }

                    $grupos[$clave]['conteo']++;
                }
            });

        $labels = array_keys($grupos);
        natcasesort($labels); // orden natural (años, nombres, etc.)
        $labels = array_values($labels);

        $values = array_map(function ($label) use ($grupos, $agg) {
            $g = $grupos[$label];

            return match ($agg) {
                'count' => $g['conteo'],
                'avg' => $g['conteo'] > 0 ? round($g['suma'] / $g['conteo'], 2) : 0,
                default => round($g['suma'], 2),
            };
        }, $labels);

        $truncado = false;
        if (count($labels) > $limite) {
            // Conservar las categorías de mayor valor...
            $combinado = array_combine($labels, $values);
            arsort($combinado);
            $combinado = array_slice($combinado, 0, $limite, true);
            // ...pero volver a ordenarlas de forma natural para que el eje X sea legible.
            uksort($combinado, 'strnatcasecmp');
            $labels = array_keys($combinado);
            $values = array_values($combinado);
            $truncado = true;
        }

        return [
            'ejeX' => $ejeX,
            'ejeY' => $ejeY,
            'agregacion' => $agg,
            'labels' => $labels,
            'values' => $values,
            'truncado' => $truncado,
        ];
    }

    /**
     * Normaliza un número con posibles separadores de miles/decimal
     * (formatos "1,234.56", "1.234,56", "1 234,5") a una cadena apta para is_numeric().
     * Devuelve null si está vacío. Se usa tanto al inferir tipos como al agregar.
     */
    public static function normalizarNumero($valor): ?string
    {
        if ($valor === null) {
            return null;
        }

        $v = str_replace(' ', '', trim((string) $valor)); // quitar espacios (separador de miles)
        if ($v === '') {
            return null;
        }

        $tieneComa = str_contains($v, ',');
        $tienePunto = str_contains($v, '.');

        if ($tieneComa && $tienePunto) {
            // El último separador que aparece es el decimal; el otro son los miles.
            if (strrpos($v, ',') > strrpos($v, '.')) {
                $v = str_replace(['.', ','], ['', '.'], $v); // 1.234,56 -> 1234.56
            } else {
                $v = str_replace(',', '', $v);               // 1,234.56 -> 1234.56
            }
        } elseif ($tieneComa) {
            $v = str_replace(',', '.', $v);                  // 12,5 -> 12.5 (decimal europeo)
        }

        return $v;
    }
}
