<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Illuminate\Auth\Access\AuthorizationException;

class HandleForbiddenErrors
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        try {
            $response = $next($request);

            // Si la respuesta es 403, manejarla apropiadamente
            if ($response->getStatusCode() === 403) {
                return $this->handleForbiddenResponse($request);
            }

            return $response;
        } catch (AccessDeniedHttpException $e) {
            return $this->handleForbiddenResponse($request);
        } catch (AuthorizationException $e) {
            return $this->handleForbiddenResponse($request);
        }
    }

    /**
     * Manejar respuestas 403
     */
    private function handleForbiddenResponse(Request $request): Response
    {
        // Limpiar sesión potencialmente corrupta
        if ($request->hasSession()) {
            $request->session()->invalidate();
            $request->session()->regenerateToken();
        }

        // Si es una solicitud AJAX
        if ($request->expectsJson()) {
            return response()->json([
                'message' => 'Acceso denegado. Por favor, inicia sesión nuevamente.',
                'redirect' => route('login')
            ], 401);
        }

        // Redirigir al login con mensaje explicativo
        return redirect()->route('login')
            ->with('warning', 'Tu sesión ha expirado o no tienes permisos para acceder. Por favor, inicia sesión nuevamente.');
    }
}