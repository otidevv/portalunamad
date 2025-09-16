<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Cookie;

class SessionCleanupController extends Controller
{
    /**
     * Limpiar todas las sesiones y cookies del usuario
     */
    public function clearSession(Request $request)
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

            // Limpiar todas las cookies
            $this->clearAllCookies();

            // Si es una solicitud AJAX
            if ($request->expectsJson()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Sesión limpiada correctamente',
                    'redirect' => route('login')
                ]);
            }

            // Redirigir al login con mensaje de éxito
            return redirect()->route('login')
                ->with('success', 'Tu sesión ha sido limpiada correctamente. Puedes iniciar sesión nuevamente.');

        } catch (\Exception $e) {
            \Log::error('Error en limpieza de sesión: ' . $e->getMessage());

            if ($request->expectsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Error al limpiar la sesión',
                    'redirect' => route('login')
                ], 500);
            }

            return redirect()->route('login')
                ->with('error', 'Hubo un problema al limpiar la sesión, pero puedes intentar iniciar sesión.');
        }
    }

    /**
     * Forzar limpieza completa de sesión (ruta de emergencia)
     */
    public function forceCleanup(Request $request)
    {
        // Headers para prevenir cache
        header('Cache-Control: no-cache, no-store, must-revalidate');
        header('Pragma: no-cache');
        header('Expires: 0');

        // Destruir sesión PHP nativa
        if (session_status() === PHP_SESSION_ACTIVE) {
            session_destroy();
        }

        // Limpiar todas las cookies posibles
        $this->clearAllCookies();

        // Script JavaScript para limpieza adicional en el cliente
        $script = '
        <html>
        <head>
            <title>Limpiando sesión...</title>
            <meta charset="UTF-8">
            <style>
                body {
                    font-family: Arial, sans-serif;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    height: 100vh;
                    margin: 0;
                    background: #f5f5f5;
                }
                .container {
                    text-align: center;
                    padding: 40px;
                    background: white;
                    border-radius: 10px;
                    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
                }
                .spinner {
                    border: 4px solid #f3f3f3;
                    border-top: 4px solid #3498db;
                    border-radius: 50%;
                    width: 40px;
                    height: 40px;
                    animation: spin 1s linear infinite;
                    margin: 20px auto;
                }
                @keyframes spin {
                    0% { transform: rotate(0deg); }
                    100% { transform: rotate(360deg); }
                }
            </style>
        </head>
        <body>
            <div class="container">
                <h2>Limpiando sesión y caché...</h2>
                <div class="spinner"></div>
                <p>Por favor espera mientras limpiamos tu sesión</p>
            </div>
            <script>
                // Limpiar localStorage
                try {
                    localStorage.clear();
                } catch(e) {}

                // Limpiar sessionStorage
                try {
                    sessionStorage.clear();
                } catch(e) {}

                // Limpiar todas las cookies del dominio
                document.cookie.split(";").forEach(function(c) {
                    document.cookie = c.replace(/^ +/, "").replace(/=.*/, "=;expires=" + new Date().toUTCString() + ";path=/");
                });

                // Limpiar caché del navegador si es posible
                if ("caches" in window) {
                    caches.keys().then(function(names) {
                        names.forEach(function(name) {
                            caches.delete(name);
                        });
                    });
                }

                // Redirigir al login después de 2 segundos
                setTimeout(function() {
                    window.location.href = "' . route('login') . '?cleared=1";
                }, 2000);
            </script>
        </body>
        </html>';

        return response($script)->header('Content-Type', 'text/html');
    }

    /**
     * Limpiar todas las cookies
     */
    private function clearAllCookies()
    {
        $cookies = [
            config('session.cookie'),
            'XSRF-TOKEN',
            'laravel_session',
            'remember_web_' . sha1(config('app.name')),
        ];

        foreach ($cookies as $cookie) {
            // Limpiar cookie en raíz
            Cookie::queue(Cookie::forget($cookie));
            Cookie::queue(Cookie::forget($cookie, '/'));

            // Limpiar con setcookie nativo también
            if (isset($_COOKIE[$cookie])) {
                unset($_COOKIE[$cookie]);
                setcookie($cookie, '', time() - 3600, '/');
                setcookie($cookie, '', time() - 3600, '/', request()->getHost());
            }
        }
    }
}