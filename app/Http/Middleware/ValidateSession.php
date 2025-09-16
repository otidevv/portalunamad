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
     * Rutas que NO deben validar sesiones (rutas públicas)
     */
    protected $excludedPaths = [
        '/',
        'login',
        'register',
        'password/*',
        'anuncio/*',
        'comunicados',
        'comunicado/*',
        'api/anuncios/*',
        'transparencia/*',
        'universidad/*',
        'oficinas/*',
        'facultades/*',
        'session/*',
    ];

    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Si es una ruta pública, solo limpiar cookies problemáticas si existen
        if ($this->isPublicRoute($request)) {
            $this->cleanProblematicCookiesIfNeeded($request);
            return $next($request);
        }

        // Para rutas protegidas, validar la sesión
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
            Session::put('last_regeneration', time());
        }

        // Actualizar última actividad
        Session::put('last_activity', time());

        return $next($request);
    }

    /**
     * Verificar si es una ruta pública
     */
    private function isPublicRoute(Request $request): bool
    {
        $path = $request->path();

        // Verificar si la ruta actual está en las rutas excluidas
        foreach ($this->excludedPaths as $excludedPath) {
            if ($path === $excludedPath ||
                (str_ends_with($excludedPath, '*') &&
                 str_starts_with($path, rtrim($excludedPath, '*')))) {
                return true;
            }
        }

        // También verificar si NO hay usuario autenticado y NO es una ruta admin
        if (!Auth::check() && !str_starts_with($path, 'admin')) {
            return true;
        }

        return false;
    }

    /**
     * Limpiar cookies problemáticas en rutas públicas si son inválidas
     */
    private function cleanProblematicCookiesIfNeeded(Request $request): void
    {
        try {
            // Si hay cookies de sesión pero son inválidas
            if ($request->hasCookie(config('session.cookie')) ||
                $request->hasCookie('laravel_session') ||
                $request->hasCookie('XSRF-TOKEN')) {

                // Intentar verificar si la sesión es válida
                $hasValidSession = false;

                if (Session::has('_token')) {
                    $sessionToken = Session::token();
                    $requestToken = $request->session()->token();

                    if ($sessionToken === $requestToken) {
                        $hasValidSession = true;
                    }
                }

                // Si no hay sesión válida, limpiar cookies silenciosamente
                if (!$hasValidSession) {
                    $this->clearSessionCookiesSilently();
                }
            }
        } catch (\Exception $e) {
            // En caso de cualquier error, limpiar cookies para estar seguros
            $this->clearSessionCookiesSilently();
        }
    }

    /**
     * Verificar si la sesión es válida
     */
    private function isValidSession(Request $request): bool
    {
        // Si no hay sesión iniciada
        if (!Session::has('_token')) {
            return true; // Permitir continuar
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
        setcookie($cookieName, '', time() - 3600, '/', '', true, true);

        // Limpiar también cookies de Laravel
        setcookie('XSRF-TOKEN', '', time() - 3600, '/', '', true, true);
        setcookie('laravel_session', '', time() - 3600, '/', '', true, true);
        setcookie('portal_unamad_session', '', time() - 3600, '/', '', true, true);
    }

    /**
     * Limpiar cookies silenciosamente (sin afectar la respuesta)
     */
    private function clearSessionCookiesSilently(): void
    {
        // Limpiar cookies con JavaScript en el cliente
        if (!headers_sent()) {
            setcookie('clear_old_cookies', '1', time() + 60, '/', '', true, false);
        }
    }
}