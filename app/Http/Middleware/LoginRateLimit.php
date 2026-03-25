<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Symfony\Component\HttpFoundation\Response;

class LoginRateLimit
{
    /**
     * Limita intentos de login a 5 por minuto por IP.
     * Previene ataques de fuerza bruta incluso con reCAPTCHA.
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->isMethod('POST')) {
            $key = 'login_attempts_' . $request->ip();
            $attempts = Cache::get($key, 0);

            if ($attempts >= 5) {
                $ttl = Cache::get($key . '_ttl', 60);
                return back()
                    ->withInput($request->only('email'))
                    ->withErrors([
                        'email' => 'Demasiados intentos de inicio de sesión. Espere ' . $ttl . ' segundos antes de intentar de nuevo.',
                    ]);
            }

            // Incrementar intentos
            Cache::put($key, $attempts + 1, 60); // expira en 60 segundos
            Cache::put($key . '_ttl', 60, 60);

            $response = $next($request);

            // Si login exitoso (redirect, no error), limpiar intentos
            if ($response->getStatusCode() === 302 && !session()->has('errors')) {
                Cache::forget($key);
                Cache::forget($key . '_ttl');
            }

            return $response;
        }

        return $next($request);
    }
}
