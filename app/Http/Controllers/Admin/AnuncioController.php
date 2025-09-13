<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Anuncio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class AnuncioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $anuncios = Anuncio::with('user')
            ->orderBy('created_at', 'desc')
            ->paginate(10);
            
        return view('admin.anuncios.index', compact('anuncios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.anuncios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'categoria' => 'required|in:noticia,evento,comunicado,convocatoria,otro',
            'estado' => 'required|in:borrador,publicado,archivado',
            'destacado' => 'boolean',
            'fecha_publicacion' => 'nullable|date',
            'fecha_expiracion' => 'nullable|date|after:fecha_publicacion',
            'imagen_principal' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
            'imagenes_adicionales.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
            'enlaces' => 'nullable|array',
            'enlaces.*.titulo' => 'required_with:enlaces|string|max:255',
            'enlaces.*.url' => 'required_with:enlaces|url',
        ], [
            'titulo.required' => 'El título es obligatorio.',
            'descripcion.required' => 'La descripción es obligatoria.',
            'categoria.required' => 'La categoría es obligatoria.',
            'imagen_principal.image' => 'El archivo debe ser una imagen.',
            'imagen_principal.max' => 'La imagen no debe superar los 5MB.',
            'fecha_expiracion.after' => 'La fecha de expiración debe ser posterior a la fecha de publicación.',
        ]);

        $anuncio = new Anuncio($validated);
        $anuncio->user_id = Auth::id();

        // Procesar imagen principal
        if ($request->hasFile('imagen_principal')) {
            $path = $request->file('imagen_principal')->store('anuncios', 'public');
            $anuncio->imagen_principal = $path;
        }

        // Procesar imágenes adicionales
        if ($request->hasFile('imagenes_adicionales')) {
            $imagenes = [];
            foreach ($request->file('imagenes_adicionales') as $imagen) {
                $path = $imagen->store('anuncios/adicionales', 'public');
                $imagenes[] = $path;
            }
            $anuncio->imagenes_adicionales = $imagenes;
        }

        // Procesar enlaces
        if ($request->has('enlaces')) {
            $anuncio->enlaces = $request->enlaces;
        }

        $anuncio->save();

        return redirect()->route('admin.anuncios.index')
            ->with('success', 'Anuncio creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Anuncio $anuncio)
    {
        return view('admin.anuncios.show', compact('anuncio'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Anuncio $anuncio)
    {
        return view('admin.anuncios.edit', compact('anuncio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Anuncio $anuncio)
    {
        $validated = $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'categoria' => 'required|in:noticia,evento,comunicado,convocatoria,otro',
            'estado' => 'required|in:borrador,publicado,archivado',
            'destacado' => 'boolean',
            'fecha_publicacion' => 'nullable|date',
            'fecha_expiracion' => 'nullable|date|after:fecha_publicacion',
            'imagen_principal' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
            'imagenes_adicionales.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
            'enlaces' => 'nullable|array',
            'enlaces.*.titulo' => 'required_with:enlaces|string|max:255',
            'enlaces.*.url' => 'required_with:enlaces|url',
            'eliminar_imagen_principal' => 'boolean',
            'eliminar_imagenes' => 'array',
        ]);

        $anuncio->fill($validated);

        // Eliminar imagen principal si se solicita
        if ($request->get('eliminar_imagen_principal')) {
            if ($anuncio->imagen_principal) {
                Storage::disk('public')->delete($anuncio->imagen_principal);
                $anuncio->imagen_principal = null;
            }
        }

        // Procesar nueva imagen principal
        if ($request->hasFile('imagen_principal')) {
            // Eliminar imagen anterior si existe
            if ($anuncio->imagen_principal) {
                Storage::disk('public')->delete($anuncio->imagen_principal);
            }
            $path = $request->file('imagen_principal')->store('anuncios', 'public');
            $anuncio->imagen_principal = $path;
        }

        // Eliminar imágenes adicionales seleccionadas
        if ($request->has('eliminar_imagenes')) {
            $imagenesActuales = $anuncio->imagenes_adicionales ?? [];
            foreach ($request->eliminar_imagenes as $indice) {
                if (isset($imagenesActuales[$indice])) {
                    Storage::disk('public')->delete($imagenesActuales[$indice]);
                    unset($imagenesActuales[$indice]);
                }
            }
            $anuncio->imagenes_adicionales = array_values($imagenesActuales);
        }

        // Agregar nuevas imágenes adicionales
        if ($request->hasFile('imagenes_adicionales')) {
            $imagenesActuales = $anuncio->imagenes_adicionales ?? [];
            foreach ($request->file('imagenes_adicionales') as $imagen) {
                $path = $imagen->store('anuncios/adicionales', 'public');
                $imagenesActuales[] = $path;
            }
            $anuncio->imagenes_adicionales = $imagenesActuales;
        }

        // Actualizar enlaces
        if ($request->has('enlaces')) {
            $anuncio->enlaces = array_values(array_filter($request->enlaces, function($enlace) {
                return !empty($enlace['titulo']) && !empty($enlace['url']);
            }));
        }

        $anuncio->save();

        return redirect()->route('admin.anuncios.index')
            ->with('success', 'Anuncio actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Anuncio $anuncio)
    {
        // Eliminar imagen principal
        if ($anuncio->imagen_principal) {
            Storage::disk('public')->delete($anuncio->imagen_principal);
        }

        // Eliminar imágenes adicionales
        if ($anuncio->imagenes_adicionales) {
            foreach ($anuncio->imagenes_adicionales as $imagen) {
                Storage::disk('public')->delete($imagen);
            }
        }

        $anuncio->delete();

        return redirect()->route('admin.anuncios.index')
            ->with('success', 'Anuncio eliminado exitosamente.');
    }

    /**
     * Cambiar estado del anuncio
     */
    public function cambiarEstado(Request $request, Anuncio $anuncio)
    {
        $request->validate([
            'estado' => 'required|in:borrador,publicado,archivado'
        ]);

        $anuncio->estado = $request->estado;
        $anuncio->save();

        return response()->json([
            'success' => true,
            'message' => 'Estado actualizado exitosamente.'
        ]);
    }

    /**
     * Cambiar destacado del anuncio
     */
    public function toggleDestacado(Anuncio $anuncio)
    {
        $anuncio->destacado = !$anuncio->destacado;
        $anuncio->save();

        return response()->json([
            'success' => true,
            'destacado' => $anuncio->destacado,
            'message' => $anuncio->destacado ? 'Anuncio destacado.' : 'Anuncio ya no está destacado.'
        ]);
    }
}