<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CacheStaticAssets
{
    /**
     * Agrega headers de cache y compresión para mejorar rendimiento.
     * Solo aplica a rutas públicas (no autenticadas).
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        // No cachear rutas autenticadas ni API
        if (auth()->check() || $request->is('api/*') || $request->is('admin/*')) {
            return $response;
        }

        // Cache para páginas públicas (5 minutos)
        if ($request->isMethod('GET') && !$request->ajax()) {
            $response->headers->set('Cache-Control', 'public, max-age=300, s-maxage=600');
            $response->headers->set('Vary', 'Accept-Encoding');
        }

        return $response;
    }
}
