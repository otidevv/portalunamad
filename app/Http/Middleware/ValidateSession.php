<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class ValidateSession
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Verificar si la sesión existe y es válida
        if (!$this->isValidSession($request)) {
            // Limpiar cualquier sesión corrupta
            $this->clearInvalidSession($request);

            // Si es una solicitud AJAX, retornar JSON
            if ($request->expectsJson()) {
                return response()->json([
                    'message' => 'Sesión inválida o expirada',
                    'redirect' => route('login')
                ], 401);
            }

            // Redirigir al login con mensaje
            return redirect()->route('login')
                ->with('error', 'Tu sesión ha expirado o es inválida. Por favor, inicia sesión nuevamente.');
        }

        // Regenerar ID de sesión periódicamente para seguridad
        if ($this->shouldRegenerateSession()) {
            Session::regenerate();
        }

        // Actualizar última actividad
        Session::put('last_activity', time());

        return $next($request);
    }

    /**
     * Verificar si la sesión es válida
     */
    private function isValidSession(Request $request): bool
    {
        // Si no hay sesión iniciada
        if (!Session::has('_token')) {
            return true; // Permitir continuar para rutas públicas
        }

        // Verificar que el token de sesión coincida
        $sessionToken = Session::token();
        $requestToken = $request->session()->token();

        if ($sessionToken !== $requestToken) {
            return false;
        }

        // Verificar tiempo de expiración personalizado
        if (Session::has('last_activity')) {
            $lastActivity = Session::get('last_activity');
            $maxLifetime = config('session.lifetime') * 60; // Convertir a segundos

            if (time() - $lastActivity > $maxLifetime) {
                return false;
            }
        }

        // Verificar integridad de datos de usuario si está autenticado
        if (Auth::check()) {
            try {
                $user = Auth::user();
                if (!$user || !$user->exists) {
                    return false;
                }
            } catch (\Exception $e) {
                return false;
            }
        }

        return true;
    }

    /**
     * Limpiar sesión inválida
     */
    private function clearInvalidSession(Request $request): void
    {
        try {
            // Cerrar sesión si hay usuario autenticado
            if (Auth::check()) {
                Auth::logout();
            }

            // Invalidar la sesión actual
            $request->session()->invalidate();

            // Regenerar token CSRF
            $request->session()->regenerateToken();

            // Limpiar todas las cookies de sesión
            $this->clearSessionCookies();

        } catch (\Exception $e) {
            // Log del error pero continuar
            \Log::error('Error limpiando sesión inválida: ' . $e->getMessage());
        }
    }

    /**
     * Determinar si se debe regenerar la sesión
     */
    private function shouldRegenerateSession(): bool
    {
        $lastRegeneration = Session::get('last_regeneration', 0);
        $regenerationInterval = 300; // 5 minutos

        return (time() - $lastRegeneration) > $regenerationInterval;
    }

    /**
     * Limpiar cookies de sesión
     */
    private function clearSessionCookies(): void
    {
        $cookieName = config('session.cookie');
        setcookie($cookieName, '', time() - 3600, '/');

        // Limpiar también cookies de Laravel
        setcookie('XSRF-TOKEN', '', time() - 3600, '/');
        setcookie('laravel_session', '', time() - 3600, '/');
    }
}