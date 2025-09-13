<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comunicado;
use App\Models\ComunicadoCategoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class ComunicadoController extends Controller
{
    public function index(Request $request)
    {
        $query = Comunicado::with(['categoria', 'user']);
        
        // Aplicar filtros
        if ($request->filled('categoria')) {
            $query->where('comunicado_categoria_id', $request->categoria);
        }
        
        if ($request->filled('estado')) {
            $query->where('estado', $request->estado);
        }
        
        if ($request->filled('vigencia')) {
            if ($request->vigencia === 'vigente') {
                $query->vigentes();
            } elseif ($request->vigencia === 'vencido') {
                $query->where('fecha_fin', '<=', now());
            }
        }
        
        $comunicados = $query->orderBy('created_at', 'desc')->paginate(10);
        $categorias = ComunicadoCategoria::activos()->orderBy('nombre')->get();
        
        return view('admin.comunicados.index', compact('comunicados', 'categorias'));
    }

    public function create()
    {
        $categorias = ComunicadoCategoria::activos()->orderBy('nombre')->get();
        return view('admin.comunicados.create', compact('categorias'));
    }

    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'categoria_id' => 'required|exists:comunicado_categorias,id',
                'titulo' => 'required|string|max:255',
                'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
                'contenido' => 'required|string',
                'duracion' => 'required|integer|min:1|max:365',
                'estado' => 'boolean'
            ], [
                'categoria_id.required' => 'La categoría es obligatoria.',
                'categoria_id.exists' => 'La categoría seleccionada no es válida.',
                'titulo.required' => 'El título es obligatorio.',
                'contenido.required' => 'El contenido es obligatorio.',
                'duracion.required' => 'La duración es obligatoria.',
                'duracion.min' => 'La duración debe ser al menos 1 día.',
                'duracion.max' => 'La duración no puede superar 365 días.',
                'imagen.image' => 'El archivo debe ser una imagen.',
                'imagen.max' => 'La imagen no debe superar los 5MB.',
            ]);

            $comunicado = new Comunicado();
            $comunicado->comunicado_categoria_id = $validated['categoria_id'];
            $comunicado->titulo = $validated['titulo'];
            $comunicado->contenido = $validated['contenido'];
            $comunicado->duracion = (int) $validated['duracion'];
            $comunicado->estado = $request->boolean('estado', true);
            $comunicado->user_id = Auth::id();
            $comunicado->oficina = $request->input('oficina', null);
            
            // Calcular fecha_fin basada en duración
            if ($validated['duracion']) {
                $comunicado->fecha_fin = now()->addDays((int) $validated['duracion']);
            }

            // Procesar imagen
            if ($request->hasFile('imagen')) {
                $path = $request->file('imagen')->store('comunicados', 'public');
                $comunicado->imagen = $path;
            }

            $comunicado->save();

            // Si es una petición AJAX, devolver JSON
            if ($request->expectsJson()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Comunicado creado exitosamente.',
                    'data' => $comunicado
                ]);
            }

            return redirect()->route('admin.comunicados.index')
                ->with('success', 'Comunicado creado exitosamente.');
                
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
                    'message' => 'Error al crear el comunicado: ' . $e->getMessage()
                ], 500);
            }
            return back()->with('error', 'Error al crear el comunicado: ' . $e->getMessage());
        }
    }

    public function show(Comunicado $comunicado)
    {
        $comunicado->load(['categoria', 'user']);
        return view('admin.comunicados.show', compact('comunicado'));
    }

    public function edit(Comunicado $comunicado)
    {
        $categorias = ComunicadoCategoria::activos()->orderBy('nombre')->get();
        return view('admin.comunicados.edit', compact('comunicado', 'categorias'));
    }

    public function update(Request $request, Comunicado $comunicado)
    {
        $validated = $request->validate([
            'comunicado_categoria_id' => 'required|exists:comunicado_categorias,id',
            'titulo' => 'required|string|max:255',
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
            'contenido' => 'nullable|string',
            'duracion' => 'nullable|integer|min:1',
            'fecha_fin' => 'nullable|date|after:now',
            'estado' => 'boolean',
            'eliminar_imagen' => 'boolean'
        ], [
            'comunicado_categoria_id.required' => 'La categoría es obligatoria.',
            'titulo.required' => 'El título es obligatorio.',
            'imagen.image' => 'El archivo debe ser una imagen.',
            'imagen.max' => 'La imagen no debe superar los 5MB.',
            'fecha_fin.after' => 'La fecha de fin debe ser posterior a la fecha actual.',
        ]);

        $comunicado->fill($validated);

        // Eliminar imagen actual si se solicita
        if ($request->get('eliminar_imagen')) {
            if ($comunicado->imagen) {
                Storage::disk('public')->delete($comunicado->imagen);
                $comunicado->imagen = null;
            }
        }

        // Procesar nueva imagen
        if ($request->hasFile('imagen')) {
            // Eliminar imagen anterior si existe
            if ($comunicado->imagen) {
                Storage::disk('public')->delete($comunicado->imagen);
            }
            $path = $request->file('imagen')->store('comunicados', 'public');
            $comunicado->imagen = $path;
        }

        $comunicado->save();

        return redirect()->route('admin.comunicados.index')
            ->with('success', 'Comunicado actualizado exitosamente.');
    }

    public function destroy(Comunicado $comunicado)
    {
        // Eliminar imagen
        if ($comunicado->imagen) {
            Storage::disk('public')->delete($comunicado->imagen);
        }

        $comunicado->delete();

        return redirect()->route('admin.comunicados.index')
            ->with('success', 'Comunicado eliminado exitosamente.');
    }

    public function toggleEstado(Comunicado $comunicado)
    {
        $comunicado->estado = !$comunicado->estado;
        $comunicado->save();

        return response()->json([
            'success' => true,
            'estado' => $comunicado->estado,
            'message' => $comunicado->estado ? 'Comunicado activado.' : 'Comunicado desactivado.'
        ]);
    }
}