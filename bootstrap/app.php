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
            \App\Http\Middleware\CleanOldCookies::class,  // Primero limpiar cookies antiguas
            \App\Http\Middleware\HandleForbiddenErrors::class,  // Manejar errores 403
        ]);

        // Middleware para rutas autenticadas
        $middleware->group('auth', [
            \App\Http\Middleware\ValidateSession::class,
            \App\Http\Middleware\PreventCacheHeaders::class,
        ]);

        // Alias para uso en grupos de rutas específicos
        $middleware->alias([
            'validate.session' => \App\Http\Middleware\ValidateSession::class,
            'no.cache' => \App\Http\Middleware\PreventCacheHeaders::class,
            'handle.403' => \App\Http\Middleware\HandleForbiddenErrors::class,
            'clean.cookies' => \App\Http\Middleware\CleanOldCookies::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        // Manejar errores 403 de manera personalizada
        $exceptions->render(function (\Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException $e, $request) {
            // Para rutas públicas, intentar limpiar y permitir acceso
            $publicRoutes = ['/', 'anuncio', 'comunicados', 'transparencia', 'universidad', 'oficinas', 'facultades'];
            $isPublicRoute = false;

            foreach ($publicRoutes as $route) {
                if ($request->is($route) || $request->is($route . '/*')) {
                    $isPublicRoute = true;
                    break;
                }
            }

            if ($isPublicRoute) {
                // Limpiar sesión corrupta y permitir acceso
                try {
                    $request->session()->invalidate();
                    $request->session()->regenerateToken();
                } catch (\Exception $ex) {
                    // Ignorar errores de sesión
                }

                // Redirigir a la misma página limpia
                return redirect($request->path())
                    ->withCookie(cookie('clear_old_cookies', '1', 1));
            }

            // Para rutas protegidas, redirigir al login
            if (!$request->expectsJson()) {
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
