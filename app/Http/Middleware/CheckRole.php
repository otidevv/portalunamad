<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Verifica que el usuario tenga uno de los roles permitidos.
     * Uso: middleware('role:admin,editor')
     *
     * Roles disponibles: admin, editor, moderador, usuario
     */
    public function handle(Request $request, Closure $next, string ...$roles): Response
    {
        $user = $request->user();

        if (!$user) {
            return redirect()->route('login')
                ->with('error', 'Debe iniciar sesión para acceder.');
        }

        // Verificar si la cuenta está activa
        if (!$user->isActive()) {
            auth()->logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return redirect()->route('login')
                ->with('error', 'Su cuenta ha sido desactivada. Contacte al administrador.');
        }

        // Verificar si el usuario tiene uno de los roles permitidos
        if (!in_array($user->rol, $roles)) {
            abort(403, 'No tiene permisos para acceder a esta sección.');
        }

        return $next($request);
    }
}
