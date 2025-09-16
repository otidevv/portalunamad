<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        // Middleware global para todas las rutas web
        $middleware->web(append: [
            \App\Http\Middleware\ValidateSession::class,
            \App\Http\Middleware\PreventCacheHeaders::class,
            \App\Http\Middleware\HandleForbiddenErrors::class,
        ]);

        // Alias para uso en grupos de rutas específicos
        $middleware->alias([
            'validate.session' => \App\Http\Middleware\ValidateSession::class,
            'no.cache' => \App\Http\Middleware\PreventCacheHeaders::class,
            'handle.403' => \App\Http\Middleware\HandleForbiddenErrors::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        // Manejar errores 403 de manera personalizada
        $exceptions->render(function (\Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException $e, $request) {
            if (!$request->expectsJson()) {
                // Limpiar sesión y redirigir al login
                $request->session()->invalidate();
                $request->session()->regenerateToken();

                return redirect()->route('login')
                    ->with('error', 'Acceso denegado. Por favor, inicia sesión nuevamente.');
            }

            return response()->json([
                'message' => 'Acceso denegado',
                'redirect' => route('login')
            ], 401);
        });

        // Manejar errores de autorización
        $exceptions->render(function (\Illuminate\Auth\Access\AuthorizationException $e, $request) {
            if (!$request->expectsJson()) {
                return redirect()->route('login')
                    ->with('error', 'No tienes autorización. Por favor, inicia sesión con las credenciales apropiadas.');
            }

            return response()->json([
                'message' => 'No autorizado',
                'redirect' => route('login')
            ], 401);
        });
    })->create();
