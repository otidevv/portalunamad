<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anuncio;
use App\Models\Comunicado;
use App\Models\ComunicadoCategoria;

class HomeController extends Controller
{
    /**
     * Mostrar la página de inicio con anuncios destacados
     */
    public function index()
    {
        // Obtener anuncios publicados y destacados (máximo 6)
        $anunciosDestacados = Anuncio::publicado()
            ->destacado()
            ->with('user')
            ->orderBy('created_at', 'desc')
            ->take(6)
            ->get();

        // Obtener anuncios recientes (máximo 8) excluyendo los destacados
        $anunciosRecientes = Anuncio::publicado()
            ->with('user')
            ->when($anunciosDestacados->isNotEmpty(), function($query) use ($anunciosDestacados) {
                $query->whereNotIn('id', $anunciosDestacados->pluck('id'));
            })
            ->orderBy('created_at', 'desc')
            ->take(8)
            ->get();

        // Obtener comunicados recientes para la sección "Oficina" (12 últimos)
        $comunicadosOficina = Comunicado::with(['categoria'])
            ->orderBy('created_at', 'desc')
            ->take(12)
            ->get();

        return view('home', compact('anunciosDestacados', 'anunciosRecientes', 'comunicadosOficina'));
    }

    /**
     * Obtener detalles de un anuncio para el modal (AJAX)
     */
    public function verAnuncio(Anuncio $anuncio)
    {
        // Verificar que el anuncio esté publicado y activo
        if (!$anuncio->esta_activo) {
            abort(404);
        }

        // Incrementar vistas
        $anuncio->incrementarVistas();

        // Cargar relación del usuario
        $anuncio->load('user');

        return response()->json([
            'success' => true,
            'anuncio' => [
                'id' => $anuncio->id,
                'titulo' => $anuncio->titulo,
                'descripcion' => $anuncio->descripcion,
                'imagen_principal_url' => $anuncio->imagen_principal_url,
                'imagenes_adicionales_urls' => $anuncio->imagenes_adicionales_urls,
                'enlaces' => $anuncio->enlaces ?? [],
                'categoria' => $anuncio->categoria,
                'fecha_publicacion' => $anuncio->fecha_publicacion ? $anuncio->fecha_publicacion->format('d/m/Y') : $anuncio->created_at->format('d/m/Y'),
                'vistas' => $anuncio->vistas,
                'autor' => $anuncio->user->name,
                'created_at_human' => $anuncio->created_at->diffForHumans(),
            ]
        ]);
    }

    /**
     * Mostrar lista de todos los comunicados con búsqueda
     */
    public function listarComunicados(Request $request)
    {
        $search = $request->get('buscar');
        $categoria_id = $request->get('categoria');
        
        $query = Comunicado::with(['categoria', 'user'])
                          ->where('estado', 1)
                          ->orderBy('created_at', 'desc');
        
        // Aplicar búsqueda si existe
        if ($search) {
            $query->where(function($q) use ($search) {
                $q->where('titulo', 'like', '%' . $search . '%')
                  ->orWhere('contenido', 'like', '%' . $search . '%');
            });
        }
        
        // Filtrar por categoría si se especifica
        if ($categoria_id) {
            $query->where('comunicado_categoria_id', $categoria_id);
        }
        
        $comunicados = $query->paginate(12);
        
        // Obtener todas las categorías para el filtro
        $categorias = ComunicadoCategoria::where('estado', 1)
                                         ->orderBy('nombre')
                                         ->get();
        
        return view('comunicados', compact('comunicados', 'categorias', 'search', 'categoria_id'));
    }

    /**
     * Mostrar un comunicado específico
     */
    public function verComunicado(Comunicado $comunicado)
    {
        // Verificar que el comunicado esté activo
        if (!$comunicado->estado) {
            abort(404);
        }

        // Cargar relación de categoría
        $comunicado->load('categoria', 'user');

        return view('comunicado', compact('comunicado'));
    }

    /**
     * Obtener lista de anuncios por categoría (AJAX)
     */
    public function anunciosPorCategoria(Request $request)
    {
        $categoria = $request->get('categoria', 'all');
        $limite = $request->get('limite', 12);

        $query = Anuncio::publicado()->with('user');

        if ($categoria !== 'all') {
            $query->where('categoria', $categoria);
        }

        $anuncios = $query->orderBy('created_at', 'desc')
                         ->take($limite)
                         ->get()
                         ->map(function($anuncio) {
                             return [
                                 'id' => $anuncio->id,
                                 'titulo' => $anuncio->titulo,
                                 'descripcion' => \Str::limit($anuncio->descripcion, 100),
                                 'imagen_principal_url' => $anuncio->imagen_principal_url,
                                 'categoria' => $anuncio->categoria,
                                 'destacado' => $anuncio->destacado,
                                 'fecha_publicacion' => $anuncio->fecha_publicacion ? $anuncio->fecha_publicacion->format('d/m/Y') : $anuncio->created_at->format('d/m/Y'),
                                 'vistas' => $anuncio->vistas,
                                 'created_at_human' => $anuncio->created_at->diffForHumans(),
                             ];
                         });

        return response()->json([
            'success' => true,
            'anuncios' => $anuncios
        ]);
    }
}