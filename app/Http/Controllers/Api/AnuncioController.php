<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Anuncio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AnuncioController extends Controller
{
    public function index(Request $request)
    {
        $query = Anuncio::with('user');
        
        // DataTables parameters
        $draw = $request->get('draw');
        $start = $request->get('start');
        $length = $request->get('length');
        $searchValue = $request->get('search')['value'] ?? '';
        
        // Apply search
        if (!empty($searchValue)) {
            $query->where(function($q) use ($searchValue) {
                $q->where('titulo', 'like', "%{$searchValue}%")
                  ->orWhere('descripcion', 'like', "%{$searchValue}%")
                  ->orWhere('categoria', 'like', "%{$searchValue}%");
            });
        }
        
        // Apply filters
        if ($request->has('categoria') && $request->categoria != '') {
            $query->where('categoria', $request->categoria);
        }
        
        if ($request->has('estado') && $request->estado != '') {
            $query->where('estado', $request->estado);
        }
        
        if ($request->has('destacado') && $request->destacado != '') {
            $query->where('destacado', $request->destacado);
        }
        
        $recordsTotal = Anuncio::count();
        $recordsFiltered = $query->count();
        
        // Apply pagination
        if ($length != -1) {
            $query->offset($start)->limit($length);
        }
        
        // Apply ordering
        $orderColumn = $request->get('order')[0]['column'] ?? 0;
        $orderDir = $request->get('order')[0]['dir'] ?? 'desc';
        $columns = ['id', 'imagen_principal', 'titulo', 'categoria', 'estado', 'destacado', 'vistas', 'created_at'];
        
        if (isset($columns[$orderColumn])) {
            $query->orderBy($columns[$orderColumn], $orderDir);
        } else {
            $query->orderBy('created_at', 'desc');
        }
        
        $anuncios = $query->get();
        
        $data = [];
        foreach ($anuncios as $anuncio) {
            $data[] = [
                'id' => $anuncio->id,
                'imagen' => $anuncio->imagen_principal ? asset('storage/' . $anuncio->imagen_principal) : null,
                'titulo' => $anuncio->titulo,
                'descripcion' => \Str::limit($anuncio->descripcion, 100),
                'categoria' => $anuncio->categoria,
                'estado' => $anuncio->estado,
                'destacado' => $anuncio->destacado,
                'vistas' => $anuncio->vistas,
                'user' => $anuncio->user->name ?? 'N/A',
                'created_at' => $anuncio->created_at->format('d/m/Y H:i'),
                'fecha_publicacion' => $anuncio->fecha_publicacion?->format('d/m/Y'),
                'fecha_expiracion' => $anuncio->fecha_expiracion?->format('d/m/Y')
            ];
        }
        
        return response()->json([
            'draw' => intval($draw),
            'recordsTotal' => $recordsTotal,
            'recordsFiltered' => $recordsFiltered,
            'data' => $data
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'titulo' => 'required|string|min:3|max:255',
            'descripcion' => 'nullable|string',
            'imagen_principal' => 'nullable|image|max:5120',
            'imagenes_adicionales.*' => 'nullable|image|max:5120',
            'categoria' => 'required|in:noticia,evento,comunicado,convocatoria,otro',
            'estado' => 'required|in:borrador,publicado,archivado',
            'destacado' => 'boolean',
            'fecha_publicacion' => 'nullable|date',
            'fecha_expiracion' => 'nullable|date|after:fecha_publicacion',
            'enlaces' => 'nullable|array',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $anuncio = new Anuncio();
        $anuncio->titulo = $request->titulo;
        $anuncio->descripcion = $request->descripcion ?: null;
        $anuncio->categoria = $request->categoria;
        $anuncio->estado = $request->estado;
        $anuncio->destacado = $request->boolean('destacado');
        $anuncio->fecha_publicacion = $request->fecha_publicacion ?: null;
        $anuncio->fecha_expiracion = $request->fecha_expiracion ?: null;
        $anuncio->user_id = Auth::id();
        $anuncio->vistas = 0;

        if ($request->hasFile('imagen_principal')) {
            $anuncio->imagen_principal = $request->file('imagen_principal')->store('anuncios', 'public');
        }

        if ($request->hasFile('imagenes_adicionales')) {
            $imagenesAdicionales = [];
            foreach ($request->file('imagenes_adicionales') as $imagen) {
                $imagenesAdicionales[] = $imagen->store('anuncios', 'public');
            }
            $anuncio->imagenes_adicionales = $imagenesAdicionales;
        }

        if ($request->has('enlaces')) {
            $enlacesFiltrados = array_filter($request->enlaces ?? [], function($enlace) {
                return !empty($enlace['titulo']) && !empty($enlace['url']);
            });
            $anuncio->enlaces = array_values($enlacesFiltrados);
        }

        $anuncio->save();

        return response()->json([
            'success' => true,
            'message' => 'Anuncio creado exitosamente',
            'data' => $anuncio
        ]);
    }

    public function show(Anuncio $anuncio)
    {
        return response()->json(['data' => $anuncio->load('user')]);
    }

    public function update(Request $request, Anuncio $anuncio)
    {
        $validator = Validator::make($request->all(), [
            'titulo' => 'required|string|min:3|max:255',
            'descripcion' => 'nullable|string',
            'imagen_principal' => 'nullable|image|max:5120',
            'imagenes_adicionales.*' => 'nullable|image|max:5120',
            'categoria' => 'required|in:noticia,evento,comunicado,convocatoria,otro',
            'estado' => 'required|in:borrador,publicado,archivado',
            'destacado' => 'boolean',
            'fecha_publicacion' => 'nullable|date',
            'fecha_expiracion' => 'nullable|date|after:fecha_publicacion',
            'enlaces' => 'nullable|array',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $anuncio->titulo = $request->titulo;
        $anuncio->descripcion = $request->descripcion ?: null;
        $anuncio->categoria = $request->categoria;
        $anuncio->estado = $request->estado;
        $anuncio->destacado = $request->boolean('destacado');
        $anuncio->fecha_publicacion = $request->fecha_publicacion ?: null;
        $anuncio->fecha_expiracion = $request->fecha_expiracion ?: null;

        if ($request->hasFile('imagen_principal')) {
            // Delete old image
            if ($anuncio->imagen_principal) {
                Storage::disk('public')->delete($anuncio->imagen_principal);
            }
            $anuncio->imagen_principal = $request->file('imagen_principal')->store('anuncios', 'public');
        }

        if ($request->hasFile('imagenes_adicionales')) {
            // Delete old additional images
            if ($anuncio->imagenes_adicionales) {
                foreach ($anuncio->imagenes_adicionales as $imagen) {
                    Storage::disk('public')->delete($imagen);
                }
            }
            
            $imagenesAdicionales = [];
            foreach ($request->file('imagenes_adicionales') as $imagen) {
                $imagenesAdicionales[] = $imagen->store('anuncios', 'public');
            }
            $anuncio->imagenes_adicionales = $imagenesAdicionales;
        }

        if ($request->has('enlaces')) {
            $enlacesFiltrados = array_filter($request->enlaces ?? [], function($enlace) {
                return !empty($enlace['titulo']) && !empty($enlace['url']);
            });
            $anuncio->enlaces = array_values($enlacesFiltrados);
        }

        $anuncio->save();

        return response()->json([
            'success' => true,
            'message' => 'Anuncio actualizado exitosamente',
            'data' => $anuncio
        ]);
    }

    public function destroy(Anuncio $anuncio)
    {
        // Delete associated images
        if ($anuncio->imagen_principal) {
            Storage::disk('public')->delete($anuncio->imagen_principal);
        }
        
        if ($anuncio->imagenes_adicionales) {
            foreach ($anuncio->imagenes_adicionales as $imagen) {
                Storage::disk('public')->delete($imagen);
            }
        }

        $anuncio->delete();

        return response()->json([
            'success' => true,
            'message' => 'Anuncio eliminado exitosamente'
        ]);
    }

    public function updateEstado(Request $request, Anuncio $anuncio)
    {
        $request->validate([
            'estado' => 'required|in:borrador,publicado,archivado'
        ]);

        $anuncio->estado = $request->estado;
        $anuncio->save();

        return response()->json([
            'success' => true,
            'message' => 'Estado actualizado exitosamente'
        ]);
    }

    public function toggleDestacado(Anuncio $anuncio)
    {
        $anuncio->destacado = !$anuncio->destacado;
        $anuncio->save();

        return response()->json([
            'success' => true,
            'destacado' => $anuncio->destacado,
            'message' => 'Estado destacado actualizado exitosamente'
        ]);
    }
}
