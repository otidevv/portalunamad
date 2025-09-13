<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Documento;
use App\Models\DocumentoCarpeta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DocumentoController extends Controller
{
    public function index(Request $request)
    {
        $carpetaId = $request->get('carpeta_id');
        $carpetaActual = null;
        
        if ($carpetaId) {
            $carpetaActual = DocumentoCarpeta::findOrFail($carpetaId);
        }
        
        // Obtener carpetas del nivel actual
        $carpetas = DocumentoCarpeta::query()
            ->when($carpetaId, function ($query, $carpetaId) {
                return $query->where('carpeta_padre_id', $carpetaId);
            }, function ($query) {
                return $query->raiz();
            })
            ->activos()
            ->ordenados()
            ->get();
        
        // Obtener documentos del nivel actual
        $documentos = collect();
        if ($carpetaId) {
            $documentos = Documento::where('carpeta_id', $carpetaId)
                ->activos()
                ->ordenados()
                ->get();
        }
        
        // Breadcrumb
        $breadcrumb = collect();
        if ($carpetaActual) {
            $breadcrumb = $carpetaActual->getRutaCompleta();
        }
        
        return view('admin.documentos.index', compact(
            'carpetas', 
            'documentos', 
            'carpetaActual', 
            'breadcrumb'
        ));
    }

    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'tipo' => 'required|in:carpeta,documento',
                'carpeta_id' => 'nullable|exists:documentos_carpetas,id',
                'orden' => 'required|integer|min:1',
                
                // Para carpetas
                'nombre' => 'required_if:tipo,carpeta|string|max:255',
                'descripcion_carpeta' => 'nullable|string',
                'icono' => 'nullable|string',
                'color' => 'nullable|string',
                
                // Para documentos
                'titulo' => 'required_if:tipo,documento|string|max:255',
                'descripcion' => 'nullable|string',
                'enlace' => 'required_if:tipo,documento|string|max:2000',
                'tipo_enlace' => 'required_if:tipo,documento|in:url,archivo,interno',
                'tipo_documento' => 'required_if:tipo,documento|string',
                'destacado' => 'boolean'
            ], [
                'tipo.required' => 'El tipo es obligatorio',
                'orden.required' => 'El orden es obligatorio',
                'orden.integer' => 'El orden debe ser un número entero',
                'orden.min' => 'El orden debe ser mayor a 0',
                'nombre.required_if' => 'El nombre de la carpeta es obligatorio',
                'titulo.required_if' => 'El título del documento es obligatorio',
                'enlace.required_if' => 'El enlace es obligatorio',
                'enlace.max' => 'El enlace es demasiado largo (máximo 2000 caracteres)',
                'tipo_enlace.required_if' => 'El tipo de enlace es obligatorio'
            ]);

            if ($validated['tipo'] === 'carpeta') {
                // Crear carpeta
                $carpeta = DocumentoCarpeta::create([
                    'nombre' => $validated['nombre'],
                    'descripcion' => $validated['descripcion_carpeta'],
                    'carpeta_padre_id' => $validated['carpeta_id'],
                    'icono' => $validated['icono'] ?? 'folder',
                    'color' => $validated['color'] ?? '#3B82F6',
                    'orden' => $validated['orden'],
                    'user_id' => Auth::id()
                ]);

                if ($request->expectsJson()) {
                    return response()->json([
                        'success' => true,
                        'message' => 'Carpeta creada exitosamente',
                        'data' => $carpeta
                    ]);
                }

                return redirect()->route('admin.documentos.index', ['carpeta_id' => $validated['carpeta_id']])
                    ->with('success', 'Carpeta creada exitosamente');
            } else {
                // Crear documento
                $documento = Documento::create([
                    'titulo' => $validated['titulo'],
                    'descripcion' => $validated['descripcion'],
                    'enlace' => $validated['enlace'],
                    'tipo_enlace' => $validated['tipo_enlace'],
                    'tipo_documento' => $validated['tipo_documento'],
                    'destacado' => $request->boolean('destacado', false),
                    'orden' => $validated['orden'],
                    'carpeta_id' => $validated['carpeta_id'],
                    'user_id' => Auth::id()
                ]);

                if ($request->expectsJson()) {
                    return response()->json([
                        'success' => true,
                        'message' => 'Documento creado exitosamente',
                        'data' => $documento
                    ]);
                }

                return redirect()->route('admin.documentos.index', ['carpeta_id' => $validated['carpeta_id']])
                    ->with('success', 'Documento creado exitosamente');
            }
        } catch (\Illuminate\Validation\ValidationException $e) {
            if ($request->expectsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Error de validación',
                    'errors' => $e->errors()
                ], 422);
            }
            throw $e;
        } catch (\Exception $e) {
            if ($request->expectsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Error al crear: ' . $e->getMessage()
                ], 500);
            }
            return back()->with('error', 'Error al crear: ' . $e->getMessage());
        }
    }

    public function show(Documento $documento)
    {
        $documento->load(['carpeta', 'user']);
        $documento->incrementarVistas();
        
        return view('admin.documentos.show', compact('documento'));
    }

    public function edit(Documento $documento)
    {
        if (request()->expectsJson() || request()->ajax() || request()->header('Accept') === 'application/json') {
            return response()->json([
                'success' => true,
                'documento' => $documento
            ]);
        }
        
        $carpetas = DocumentoCarpeta::activos()->ordenados()->get();
        return view('admin.documentos.edit', compact('documento', 'carpetas'));
    }

    public function update(Request $request, Documento $documento)
    {
        $validated = $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'enlace' => 'required|string|max:2000',
            'tipo_enlace' => 'required|in:url,archivo,interno',
            'tipo_documento' => 'required|string',
            'destacado' => 'boolean',
            'orden' => 'required|integer|min:1',
            'activo' => 'boolean',
            'carpeta_id' => 'nullable|exists:documentos_carpetas,id'
        ], [
            'enlace.max' => 'El enlace es demasiado largo (máximo 2000 caracteres)'
        ]);

        $documento->update($validated);

        if ($request->expectsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Documento actualizado exitosamente'
            ]);
        }

        return redirect()->route('admin.documentos.index', ['carpeta_id' => $documento->carpeta_id])
            ->with('success', 'Documento actualizado exitosamente');
    }

    public function destroy(Documento $documento)
    {
        $carpetaId = $documento->carpeta_id;
        $documento->delete();

        return redirect()->route('admin.documentos.index', ['carpeta_id' => $carpetaId])
            ->with('success', 'Documento eliminado exitosamente');
    }

    // Métodos adicionales para carpetas
    public function destroyCarpeta(DocumentoCarpeta $carpeta)
    {
        $carpetaPadreId = $carpeta->carpeta_padre_id;
        
        // Verificar si tiene contenido
        if ($carpeta->tieneHijos()) {
            return back()->with('error', 'No se puede eliminar una carpeta que contiene elementos');
        }
        
        $carpeta->delete();

        return redirect()->route('admin.documentos.index', ['carpeta_id' => $carpetaPadreId])
            ->with('success', 'Carpeta eliminada exitosamente');
    }

    public function toggleEstado(Documento $documento)
    {
        $documento->update(['activo' => !$documento->activo]);

        if (request()->expectsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Estado actualizado exitosamente',
                'nuevo_estado' => $documento->activo
            ]);
        }

        return back()->with('success', 'Estado actualizado exitosamente');
    }

    // Método para descargar/acceder a documento
    public function acceder(Documento $documento)
    {
        $documento->incrementarVistas();
        
        if ($documento->tipo_enlace === 'archivo') {
            $documento->incrementarDescargas();
        }

        return redirect($documento->url_completo);
    }

    // Métodos para ordenamiento de carpetas
    public function subirOrdenCarpeta(DocumentoCarpeta $carpeta)
    {
        $carpetaAnterior = DocumentoCarpeta::where('carpeta_padre_id', $carpeta->carpeta_padre_id)
            ->where('orden', '<', $carpeta->orden)
            ->orderBy('orden', 'desc')
            ->first();

        if ($carpetaAnterior) {
            $ordenTemporal = $carpeta->orden;
            $carpeta->update(['orden' => $carpetaAnterior->orden]);
            $carpetaAnterior->update(['orden' => $ordenTemporal]);
        }

        return response()->json(['success' => true]);
    }

    public function bajarOrdenCarpeta(DocumentoCarpeta $carpeta)
    {
        $carpetaSiguiente = DocumentoCarpeta::where('carpeta_padre_id', $carpeta->carpeta_padre_id)
            ->where('orden', '>', $carpeta->orden)
            ->orderBy('orden', 'asc')
            ->first();

        if ($carpetaSiguiente) {
            $ordenTemporal = $carpeta->orden;
            $carpeta->update(['orden' => $carpetaSiguiente->orden]);
            $carpetaSiguiente->update(['orden' => $ordenTemporal]);
        }

        return response()->json(['success' => true]);
    }

    // Métodos para ordenamiento de documentos
    public function subirOrdenDocumento(Documento $documento)
    {
        $documentoAnterior = Documento::where('carpeta_id', $documento->carpeta_id)
            ->where('orden', '<', $documento->orden)
            ->orderBy('orden', 'desc')
            ->first();

        if ($documentoAnterior) {
            $ordenTemporal = $documento->orden;
            $documento->update(['orden' => $documentoAnterior->orden]);
            $documentoAnterior->update(['orden' => $ordenTemporal]);
        }

        return response()->json(['success' => true]);
    }

    public function bajarOrdenDocumento(Documento $documento)
    {
        $documentoSiguiente = Documento::where('carpeta_id', $documento->carpeta_id)
            ->where('orden', '>', $documento->orden)
            ->orderBy('orden', 'asc')
            ->first();

        if ($documentoSiguiente) {
            $ordenTemporal = $documento->orden;
            $documento->update(['orden' => $documentoSiguiente->orden]);
            $documentoSiguiente->update(['orden' => $ordenTemporal]);
        }

        return response()->json(['success' => true]);
    }

    // Métodos para edición de carpetas
    public function editCarpeta(DocumentoCarpeta $carpeta)
    {
        if (request()->expectsJson() || request()->ajax() || request()->header('Accept') === 'application/json') {
            return response()->json([
                'success' => true,
                'carpeta' => $carpeta
            ]);
        }
        
        return view('admin.documentos.edit-carpeta', compact('carpeta'));
    }

    public function updateCarpeta(Request $request, DocumentoCarpeta $carpeta)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'icono' => 'nullable|string',
            'color' => 'nullable|string',
            'orden' => 'required|integer|min:1'
        ]);

        $carpeta->update($validated);

        if ($request->expectsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Carpeta actualizada exitosamente'
            ]);
        }

        return redirect()->route('admin.documentos.index', ['carpeta_id' => $carpeta->carpeta_padre_id])
            ->with('success', 'Carpeta actualizada exitosamente');
    }
}