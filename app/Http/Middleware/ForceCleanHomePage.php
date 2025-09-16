<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class ForceCleanHomePage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Solo aplicar en la página principal
        if ($request->path() !== '/') {
            return $next($request);
        }

        // Si ya fue limpiado, no hacer nada más (evitar loops)
        if ($request->has('mobile_cleaned') || $request->has('cleaned')) {
            $response = $next($request);
            // Agregar headers anti-cache
            $response->headers->set('Cache-Control', 'no-cache, no-store, max-age=0, must-revalidate, private');
            $response->headers->set('Pragma', 'no-cache');
            $response->headers->set('Expires', 'Sat, 01 Jan 2000 00:00:00 GMT');
            return $response;
        }

        // Detectar si es dispositivo móvil
        $isMobile = $this->isMobileDevice($request);

        // Verificar si hay cookies problemáticas (más restrictivo)
        $hasProblematicCookies = $this->hasProblematicCookies($request);

        // Si hay cookies problemáticas, forzar limpieza UNA SOLA VEZ
        if ($hasProblematicCookies && !$request->hasCookie('cleanup_attempted')) {
            // Marcar que ya intentamos limpiar para evitar loops
            setcookie('cleanup_attempted', '1', time() + 300, '/'); // 5 minutos

            // Limpiar todas las cookies del servidor inmediatamente
            $this->clearAllServerCookies();

            // Invalidar sesión si existe
            try {
                if ($request->hasSession()) {
                    $request->session()->invalidate();
                    $request->session()->regenerateToken();
                }
            } catch (\Exception $e) {
                // Ignorar errores de sesión
            }

            // Para móviles, ser más agresivo
            if ($isMobile) {
                return $this->mobileCleanupResponse($request);
            } else {
                // Para desktop, redirigir con limpieza
                return $this->desktopCleanupResponse($request);
            }
        }

        // Proceder normalmente
        $response = $next($request);

        // Agregar headers anti-cache para la página principal
        $response->headers->set('Cache-Control', 'no-cache, no-store, max-age=0, must-revalidate, private');
        $response->headers->set('Pragma', 'no-cache');
        $response->headers->set('Expires', 'Sat, 01 Jan 2000 00:00:00 GMT');
        $response->headers->set('X-Content-Type-Options', 'nosniff');

        return $response;
    }

    /**
     * Detectar si es dispositivo móvil
     */
    private function isMobileDevice(Request $request): bool
    {
        $userAgent = $request->userAgent();

        $mobileAgents = [
            'Mobile', 'Android', 'iPhone', 'iPad', 'iPod', 'BlackBerry',
            'Windows Phone', 'webOS', 'Opera Mini', 'IEMobile'
        ];

        foreach ($mobileAgents as $agent) {
            if (stripos($userAgent, $agent) !== false) {
                return true;
            }
        }

        return false;
    }

    /**
     * Verificar si hay cookies problemáticas (más restrictivo)
     */
    private function hasProblematicCookies(Request $request): bool
    {
        // Solo detectar cookies específicamente problemáticas del portal anterior
        $problematicCookies = [
            'portal_session',  // Cookie del portal anterior
            'old_session',     // Sesión antigua
            'PHPSESSID'        // Solo si no tenemos sesión Laravel válida
        ];

        // Verificar cookies específicamente problemáticas
        foreach (['portal_session', 'old_session'] as $cookieName) {
            if (isset($_COOKIE[$cookieName]) && !empty($_COOKIE[$cookieName])) {
                return true;
            }
        }

        // Solo considerar PHPSESSID problemático si no hay sesión Laravel válida
        if (isset($_COOKIE['PHPSESSID']) && !empty($_COOKIE['PHPSESSID'])) {
            // Si no hay sesión Laravel activa, PHPSESSID puede ser problemático
            try {
                if (!$request->hasSession() || !Session::has('_token')) {
                    return true;
                }
            } catch (\Exception $e) {
                return true;
            }
        }

        return false;
    }

    /**
     * Limpiar todas las cookies del servidor
     */
    private function clearAllServerCookies(): void
    {
        $cookiesToClear = [
            'portal_session',
            'old_session',
            'PHPSESSID',
            'laravel_session',
            'XSRF-TOKEN',
            config('session.cookie'),
        ];

        foreach ($cookiesToClear as $cookieName) {
            if (isset($_COOKIE[$cookieName])) {
                unset($_COOKIE[$cookieName]);
                setcookie($cookieName, '', time() - 3600, '/');
                setcookie($cookieName, '', time() - 3600, '/', $_SERVER['HTTP_HOST'] ?? '');
                setcookie($cookieName, '', time() - 3600, '/', '.' . ($_SERVER['HTTP_HOST'] ?? ''));
            }
        }
    }

    /**
     * Respuesta de limpieza para móviles
     */
    private function mobileCleanupResponse(Request $request): Response
    {
        $cleanupHtml = '<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal UNAMAD - Cargando...</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background: linear-gradient(135deg, #ed145b 0%, #d91250 100%);
            color: white;
        }
        .logo {
            width: 80px;
            height: 80px;
            background: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
            animation: pulse 2s infinite;
        }
        .spinner {
            border: 3px solid rgba(255,255,255,0.3);
            border-top: 3px solid white;
            border-radius: 50%;
            width: 30px;
            height: 30px;
            animation: spin 1s linear infinite;
            margin-bottom: 20px;
        }
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.1); }
        }
        .text {
            text-align: center;
            max-width: 300px;
            padding: 0 20px;
        }
    </style>
</head>
<body>
    <div class="logo">🏛️</div>
    <div class="spinner"></div>
    <div class="text">
        <h2>Portal UNAMAD</h2>
        <p>Preparando el portal para móviles...</p>
        <p><small>Limpiando datos antiguos</small></p>
    </div>

    <script>
    (function() {
        console.log("Limpieza forzada para móviles iniciada");

        // Función para eliminar cookies de forma agresiva
        function deleteCookieAggressive(name) {
            var domains = [
                window.location.hostname,
                "." + window.location.hostname,
                ".unamad.edu.pe",
                "portal.unamad.edu.pe"
            ];

            var paths = ["/", "", "/portal", "/admin"];

            domains.forEach(function(domain) {
                paths.forEach(function(path) {
                    document.cookie = name + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT;path=" + path + ";domain=" + domain;
                    document.cookie = name + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT;path=" + path;
                });
            });
        }

        // Lista de cookies problemáticas
        var problematicCookies = [
            "portal_session", "old_session", "PHPSESSID", "laravel_session",
            "XSRF-TOKEN", "remember_web_", "session_id", "csrf_token"
        ];

        // Limpiar cookies específicas
        problematicCookies.forEach(function(cookieName) {
            deleteCookieAggressive(cookieName);
        });

        // Limpiar TODAS las cookies existentes
        document.cookie.split(";").forEach(function(c) {
            var cookie = c.trim();
            var eqPos = cookie.indexOf("=");
            var name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
            if (name) {
                deleteCookieAggressive(name);
            }
        });

        // Limpiar almacenamiento local
        try {
            localStorage.clear();
            sessionStorage.clear();
        } catch(e) {}

        // Limpiar caché si es posible
        if ("caches" in window) {
            caches.keys().then(function(names) {
                names.forEach(function(name) {
                    caches.delete(name);
                });
            });
        }

        // Esperar un momento y redirigir (solo si no se ha intentado antes)
        setTimeout(function() {
            if (!window.location.search.includes("mobile_cleaned=1")) {
                window.location.href = "/?mobile_cleaned=1";
            }
        }, 2000);
    })();
    </script>
</body>
</html>';

        return response($cleanupHtml)
            ->header('Content-Type', 'text/html')
            ->header('Cache-Control', 'no-cache, no-store, must-revalidate')
            ->header('Pragma', 'no-cache')
            ->header('Expires', '0');
    }

    /**
     * Respuesta de limpieza para desktop
     */
    private function desktopCleanupResponse(Request $request): Response
    {
        return redirect('/')
            ->withCookie(cookie('force_clean', '1', 1))
            ->with('info', 'Limpiando sesión anterior...');
    }
}