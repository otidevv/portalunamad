<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anuncio;
use App\Models\Comunicado;
use App\Models\ComunicadoCategoria;
use App\Services\CampanasGobPeService;
use App\Services\NoticiasGobPeService;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Mostrar la página de inicio con anuncios destacados
     */
    public function index(Request $request, NoticiasGobPeService $noticiasService, CampanasGobPeService $campanasService)
    {
        try {
            // Verificar si venimos de una limpieza móvil
            if ($request->has('mobile_cleaned')) {
                // Limpiar cualquier rastro de sesión problemática
                $this->clearProblematicSession($request);
            }

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

            $noticiasGobPe = $noticiasService->obtener(8);
            $noticiasGobPeFuente = $noticiasService->fuenteUrl();
            $campanasGobPe = $campanasService->obtener(9);
            $campanasGobPeFuente = $campanasService->fuenteUrl();

            return view('home', compact(
                'anunciosDestacados',
                'anunciosRecientes',
                'comunicadosOficina',
                'noticiasGobPe',
                'noticiasGobPeFuente',
                'campanasGobPe',
                'campanasGobPeFuente'
            ));

        } catch (\Exception $e) {
            // Si hay cualquier error (incluyendo problemas de sesión), manejar de forma segura
            \Log::error('Error en página principal: ' . $e->getMessage());

            // Limpiar sesión problemática
            $this->clearProblematicSession($request);

            // Intentar cargar la página con datos vacíos si es necesario
            try {
                $anunciosDestacados = collect();
                $anunciosRecientes = collect();
                $comunicadosOficina = collect();
                $noticiasGobPe = [];
                $noticiasGobPeFuente = $noticiasService->fuenteUrl();
                $campanasGobPe = [];
                $campanasGobPeFuente = $campanasService->fuenteUrl();

                return view('home', compact(
                    'anunciosDestacados',
                    'anunciosRecientes',
                    'comunicadosOficina',
                    'noticiasGobPe',
                    'noticiasGobPeFuente',
                    'campanasGobPe',
                    'campanasGobPeFuente'
                ));
            } catch (\Exception $e2) {
                // Si todo falla, mostrar página de recuperación
                return $this->recoveryPage($request);
            }
        }
    }

    /**
     * Limpiar sesión problemática
     */
    private function clearProblematicSession(Request $request)
    {
        try {
            if ($request->hasSession()) {
                $request->session()->invalidate();
                $request->session()->regenerateToken();
            }
        } catch (\Exception $e) {
            // Ignorar errores de sesión
        }
    }

    /**
     * Página de recuperación cuando todo falla
     */
    private function recoveryPage(Request $request)
    {
        $html = '<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal UNAMAD</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 20px; background: #f5f5f5; }
        .container { max-width: 800px; margin: 0 auto; background: white; padding: 40px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); text-align: center; }
        .logo { width: 100px; height: 100px; margin: 0 auto 20px; background: #ed145b; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 24px; }
        h1 { color: #ed145b; }
        .btn { display: inline-block; padding: 12px 24px; background: #ed145b; color: white; text-decoration: none; border-radius: 5px; margin: 10px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">🏛️</div>
        <h1>Portal UNAMAD</h1>
        <h2>Universidad Nacional Amazónica de Madre de Dios</h2>
        <p>Estamos preparando el portal para ti...</p>
        <a href="/session/force-cleanup" class="btn">Limpiar y Continuar</a>
        <br><br>
        <small>Si continúas teniendo problemas, contacta al administrador del sistema.</small>
    </div>
    <script>
        setTimeout(function() {
            window.location.reload();
        }, 5000);
    </script>
</body>
</html>';

        return response($html)->header('Content-Type', 'text/html');
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
                'created_at_human' => $anuncio->created_at->locale('es')->diffForHumans(),
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

        // Cargar relación de categoría, autor y archivos adjuntos
        $comunicado->load('categoria', 'user', 'archivos');

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
                                 'created_at_human' => $anuncio->created_at->locale('es')->diffForHumans(),
                             ];
                         });

        return response()->json([
            'success' => true,
            'anuncios' => $anuncios
        ]);
    }
}