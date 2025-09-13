<?php

namespace App\Http\Controllers;

use App\Models\Documento;
use App\Models\DocumentoCarpeta;
use Illuminate\Http\Request;

class DocumentosPublicosController extends Controller
{
    public function index(Request $request)
    {
        $carpetaId = $request->get('carpeta_id');
        $search = $request->get('search');
        
        // Si es una búsqueda
        if ($search) {
            return $this->buscarDocumentos($search);
        }
        
        // Si es petición AJAX para cargar carpeta
        if ($request->expectsJson() && $carpetaId) {
            return $this->cargarCarpetaAjax($carpetaId);
        }
        
        $carpetaActual = null;
        
        if ($carpetaId) {
            $carpetaActual = DocumentoCarpeta::where('id', $carpetaId)
                ->activos()
                ->first();
            
            if (!$carpetaActual) {
                abort(404, 'Carpeta no encontrada');
            }
        }
        
        // Obtener carpetas del nivel actual (solo activas)
        $carpetas = DocumentoCarpeta::query()
            ->when($carpetaId, function ($query, $carpetaId) {
                return $query->where('carpeta_padre_id', $carpetaId);
            }, function ($query) {
                return $query->raiz();
            })
            ->activos()
            ->ordenados()
            ->withCount(['hijos', 'documentos'])
            ->get();
        
        // Obtener documentos del nivel actual (solo activos)
        $documentos = collect();
        if ($carpetaId) {
            $documentos = Documento::where('carpeta_id', $carpetaId)
                ->activos()
                ->vigentes()
                ->ordenados()
                ->get();
        }
        
        // Breadcrumb para navegación
        $breadcrumb = collect([
            ['nombre' => 'Inicio', 'url' => route('documentos.publicos')]
        ]);
        
        if ($carpetaActual) {
            $rutaCarpeta = $carpetaActual->getRutaCompleta();
            foreach ($rutaCarpeta as $carpeta) {
                $breadcrumb->push([
                    'nombre' => $carpeta->nombre,
                    'url' => route('documentos.publicos', ['carpeta_id' => $carpeta->id])
                ]);
            }
        }
        
        return view('documentos.publicos.index', compact(
            'carpetas', 
            'documentos', 
            'carpetaActual', 
            'breadcrumb'
        ));
    }

    private function buscarDocumentos($query)
    {
        $documentos = Documento::where('activo', true)
            ->where(function($q) use ($query) {
                $q->where('titulo', 'LIKE', "%{$query}%")
                  ->orWhere('descripcion', 'LIKE', "%{$query}%")
                  ->orWhere('tipo_documento', 'LIKE', "%{$query}%");
            })
            ->with('carpeta')
            ->vigentes()
            ->orderBy('destacado', 'desc')
            ->orderBy('titulo')
            ->take(50)
            ->get();

        $results = $documentos->map(function($documento) {
            return [
                'titulo' => $documento->titulo,
                'ruta' => $this->generarRutaDocumento($documento),
                'icono' => $documento->icono_completo,
                'url' => route('documentos.publicos.acceder', $documento),
                'externo' => $documento->esEnlaceExterno(),
                'tipo_enlace' => $documento->tipo_enlace
            ];
        });

        return response()->json(['results' => $results]);
    }

    private function cargarCarpetaAjax($carpetaId)
    {
        $carpeta = DocumentoCarpeta::where('id', $carpetaId)
            ->activos()
            ->first();

        if (!$carpeta) {
            return response()->json(['error' => 'Carpeta no encontrada'], 404);
        }

        $carpetas = DocumentoCarpeta::where('carpeta_padre_id', $carpetaId)
            ->activos()
            ->ordenados()
            ->withCount(['hijos', 'documentos'])
            ->get()
            ->map(function($carpeta) {
                return [
                    'id' => $carpeta->id,
                    'nombre' => $carpeta->nombre,
                    'icono' => $carpeta->icono,
                    'color' => $carpeta->color,
                    'elementos_count' => ($carpeta->hijos_count ?? 0) + ($carpeta->documentos_count ?? 0)
                ];
            });

        $documentos = Documento::where('carpeta_id', $carpetaId)
            ->activos()
            ->vigentes()
            ->ordenados()
            ->get()
            ->map(function($documento) {
                return [
                    'titulo' => $documento->titulo,
                    'icono' => $documento->icono_completo,
                    'tipo_documento' => $documento->tipo_documento,
                    'url' => route('documentos.publicos.acceder', $documento),
                    'externo' => $documento->esEnlaceExterno(),
                    'tipo_enlace' => $documento->tipo_enlace
                ];
            });

        return response()->json([
            'carpetas' => $carpetas,
            'documentos' => $documentos
        ]);
    }

    private function generarRutaDocumento($documento)
    {
        $ruta = collect();
        
        if ($documento->carpeta) {
            $rutaCarpetas = $documento->carpeta->getRutaCompleta();
            $ruta = $rutaCarpetas->pluck('nombre');
        }
        
        return $ruta->isEmpty() ? 'Raíz' : $ruta->join(' > ');
    }

    public function acceder(Documento $documento)
    {
        // Solo mostrar documentos activos y vigentes
        if (!$documento->activo || $documento->estaVencido()) {
            abort(404, 'Documento no disponible');
        }
        
        $documento->incrementarVistas();
        
        if ($documento->tipo_enlace === 'archivo') {
            $documento->incrementarDescargas();
        }

        return redirect($documento->url_completo);
    }
}
