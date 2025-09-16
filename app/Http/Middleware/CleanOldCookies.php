<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CleanOldCookies
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        // Solo aplicar en rutas públicas
        if (!auth()->check()) {
            // Inyectar script de limpieza de cookies antiguas en el HTML
            if ($response->headers->get('Content-Type') === 'text/html' ||
                str_contains($response->headers->get('Content-Type', ''), 'text/html')) {

                $content = $response->getContent();

                // Script para limpiar cookies y caché antiguos
                $cleanupScript = '
<script>
(function() {
    // Verificar si necesitamos limpiar cookies
    if (document.cookie.indexOf("clear_old_cookies=1") !== -1 ||
        document.cookie.indexOf("portal_session") !== -1 ||
        document.cookie.indexOf("old_session") !== -1) {

        // Limpiar todas las cookies del dominio
        document.cookie.split(";").forEach(function(c) {
            var cookie = c.trim();
            var eqPos = cookie.indexOf("=");
            var name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;

            // Limpiar cookie en diferentes paths
            document.cookie = name + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT;path=/";
            document.cookie = name + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT;path=/;domain=" + window.location.hostname;
            document.cookie = name + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT;path=/;domain=." + window.location.hostname;

            // Para subdominios
            var parts = window.location.hostname.split(".");
            if (parts.length >= 2) {
                var domain = parts.slice(-2).join(".");
                document.cookie = name + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT;path=/;domain=." + domain;
            }
        });

        // Limpiar localStorage y sessionStorage
        try {
            if (typeof(Storage) !== "undefined") {
                // Solo limpiar items relacionados con sesiones antiguas
                var keysToRemove = [];
                for (var i = 0; i < localStorage.length; i++) {
                    var key = localStorage.key(i);
                    if (key && (key.indexOf("session") !== -1 ||
                               key.indexOf("token") !== -1 ||
                               key.indexOf("auth") !== -1)) {
                        keysToRemove.push(key);
                    }
                }
                keysToRemove.forEach(function(key) {
                    localStorage.removeItem(key);
                });

                // Limpiar sessionStorage completamente
                sessionStorage.clear();
            }
        } catch(e) {}

        // Recargar la página una vez para aplicar cambios (solo si hay parámetro)
        if (window.location.search.indexOf("cleaned=1") === -1) {
            var separator = window.location.search ? "&" : "?";
            window.location.href = window.location.href + separator + "cleaned=1";
        }
    }

    // Remover el parámetro cleaned de la URL si existe
    if (window.location.search.indexOf("cleaned=1") !== -1) {
        var url = window.location.href.replace(/[\?&]cleaned=1/, "");
        window.history.replaceState({}, document.title, url);
    }
})();
</script>
';

                // Inyectar el script antes del cierre del body
                if (str_contains($content, '</body>')) {
                    $content = str_replace('</body>', $cleanupScript . '</body>', $content);
                } else if (str_contains($content, '</html>')) {
                    $content = str_replace('</html>', $cleanupScript . '</html>', $content);
                } else {
                    // Si no hay etiquetas de cierre, agregar al final
                    $content .= $cleanupScript;
                }

                $response->setContent($content);
            }
        }

        return $response;
    }
}