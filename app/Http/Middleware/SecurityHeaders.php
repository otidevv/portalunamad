<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SecurityHeaders
{
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        // Prevenir clickjacking (iframes maliciosos)
        $response->headers->set('X-Frame-Options', 'SAMEORIGIN');

        // Prevenir MIME type sniffing (evita que archivos subidos se ejecuten como PHP/JS)
        $response->headers->set('X-Content-Type-Options', 'nosniff');

        // Protección XSS del navegador
        $response->headers->set('X-XSS-Protection', '1; mode=block');

        // Referrer policy
        $response->headers->set('Referrer-Policy', 'strict-origin-when-cross-origin');

        // Prevenir que la página sea embebida en sitios de apuestas/spam
        $response->headers->set('X-Permitted-Cross-Domain-Policies', 'none');

        // Content Security Policy - previene inyección de scripts/iframes de terceros
        $response->headers->set('Content-Security-Policy',
            "default-src 'self'; " .
            "script-src 'self' 'unsafe-inline' 'unsafe-eval' https://www.google.com https://www.gstatic.com https://www.youtube.com https://s.ytimg.com; " .
            "style-src 'self' 'unsafe-inline' https://fonts.googleapis.com; " .
            "img-src 'self' data: https: blob:; " .
            "font-src 'self' https://fonts.gstatic.com; " .
            "frame-src 'self' https://www.google.com https://www.youtube.com https://maps.googleapis.com https://www.google.com/maps/; " .
            "connect-src 'self'; " .
            "object-src 'none'; " .
            "base-uri 'self'; " .
            "form-action 'self';"
        );

        // Permissions Policy - deshabilitar funciones que no se usan
        $response->headers->set('Permissions-Policy', 'camera=(), microphone=(), geolocation=(), payment=()');

        return $response;
    }
}
