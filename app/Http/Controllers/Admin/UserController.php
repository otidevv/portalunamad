<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $query = User::query();

        // Aplicar filtros
        if ($request->filled('rol')) {
            $query->where('rol', $request->rol);
        }

        if ($request->filled('estado')) {
            $query->where('estado', $request->estado);
        }

        if ($request->filled('tipo_documento')) {
            $query->where('tipo_documento', $request->tipo_documento);
        }

        if ($request->filled('buscar')) {
            $search = $request->buscar;
            $query->where(function($q) use ($search) {
                $q->where('name', 'like', '%' . $search . '%')
                  ->orWhere('email', 'like', '%' . $search . '%')
                  ->orWhere('numero_documento', 'like', '%' . $search . '%');
            });
        }

        $users = $query->orderBy('created_at', 'desc')->paginate(10);

        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'apellido_paterno' => 'nullable|string|max:255',
                'apellido_materno' => 'nullable|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:8|confirmed',
                'tipo_documento' => 'required|in:dni,carnet_extranjeria,pasaporte,cedula',
                'numero_documento' => 'required|string|max:20|unique:users',
                'fecha_nacimiento' => 'nullable|date',
                'rol' => 'required|in:admin,editor,usuario,moderador',
                'estado' => 'boolean',
                'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            ], [
                'name.required' => 'El nombre es obligatorio.',
                'email.required' => 'El email es obligatorio.',
                'email.unique' => 'Este email ya está registrado.',
                'email.email' => 'Debe ser un email válido.',
                'password.required' => 'La contraseña es obligatoria.',
                'password.min' => 'La contraseña debe tener al menos 8 caracteres.',
                'password.confirmed' => 'Las contraseñas no coinciden.',
                'tipo_documento.required' => 'El tipo de documento es obligatorio.',
                'numero_documento.required' => 'El número de documento es obligatorio.',
                'numero_documento.unique' => 'Este número de documento ya está registrado.',
                'fecha_nacimiento.date' => 'La fecha de nacimiento debe ser una fecha válida.',
                'rol.required' => 'El rol es obligatorio.',
                'avatar.image' => 'El archivo debe ser una imagen.',
                'avatar.max' => 'La imagen no debe superar los 2MB.',
            ]);

            $user = new User();
            $user->name = $validated['name'];
            $user->apellido_paterno = $validated['apellido_paterno'];
            $user->apellido_materno = $validated['apellido_materno'];
            $user->email = $validated['email'];
            $user->password = Hash::make($validated['password']);
            $user->tipo_documento = $validated['tipo_documento'];
            $user->numero_documento = $validated['numero_documento'];
            $user->fecha_nacimiento = $validated['fecha_nacimiento'];
            $user->rol = $validated['rol'];
            $user->estado = $request->boolean('estado', true);

            // Procesar avatar
            if ($request->hasFile('avatar')) {
                $path = $request->file('avatar')->store('avatars', 'public');
                $user->avatar = $path;
            }

            $user->save();

            // Si es una petición AJAX, devolver JSON
            if ($request->expectsJson()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Usuario creado exitosamente.',
                    'data' => $user
                ]);
            }

            return redirect()->route('admin.users.index')
                ->with('success', 'Usuario creado exitosamente.');

        } catch (\Illuminate\Validation\ValidationException $e) {
            if ($request->expectsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Error de validación',
                    'errors' => $e->errors()
                ], 422);
            }
            throw $e;
        } catch (\Exception $e) {
            if ($request->expectsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Error al crear el usuario: ' . $e->getMessage()
                ], 500);
            }
            return back()->with('error', 'Error al crear el usuario: ' . $e->getMessage());
        }
    }

    public function show(User $user)
    {
        // Si es una petición AJAX, devolver JSON
        if (request()->expectsJson()) {
            return response()->json([
                'success' => true,
                'user' => $user
            ]);
        }

        return view('admin.users.show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'apellido_paterno' => 'nullable|string|max:255',
                'apellido_materno' => 'nullable|string|max:255',
                'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
                'tipo_documento' => 'required|in:dni,carnet_extranjeria,pasaporte,cedula',
                'numero_documento' => ['required', 'string', 'max:20', Rule::unique('users')->ignore($user->id)],
                'fecha_nacimiento' => 'nullable|date',
                'rol' => 'required|in:admin,editor,usuario,moderador',
                'estado' => 'boolean',
                'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                'eliminar_avatar' => 'boolean',
            ], [
                'name.required' => 'El nombre es obligatorio.',
                'email.required' => 'El email es obligatorio.',
                'email.unique' => 'Este email ya está registrado.',
                'email.email' => 'Debe ser un email válido.',
                'tipo_documento.required' => 'El tipo de documento es obligatorio.',
                'numero_documento.required' => 'El número de documento es obligatorio.',
                'numero_documento.unique' => 'Este número de documento ya está registrado.',
                'fecha_nacimiento.date' => 'La fecha de nacimiento debe ser una fecha válida.',
                'rol.required' => 'El rol es obligatorio.',
                'avatar.image' => 'El archivo debe ser una imagen.',
                'avatar.max' => 'La imagen no debe superar los 2MB.',
            ]);

            $user->name = $validated['name'];
            $user->apellido_paterno = $validated['apellido_paterno'];
            $user->apellido_materno = $validated['apellido_materno'];
            $user->email = $validated['email'];
            $user->tipo_documento = $validated['tipo_documento'];
            $user->numero_documento = $validated['numero_documento'];
            $user->fecha_nacimiento = $validated['fecha_nacimiento'];
            $user->rol = $validated['rol'];
            $user->estado = $request->boolean('estado', true);

            // Eliminar avatar actual si se solicita
            if ($request->get('eliminar_avatar')) {
                if ($user->avatar) {
                    Storage::disk('public')->delete($user->avatar);
                    $user->avatar = null;
                }
            }

            // Procesar nuevo avatar
            if ($request->hasFile('avatar')) {
                // Eliminar avatar anterior si existe
                if ($user->avatar) {
                    Storage::disk('public')->delete($user->avatar);
                }
                $path = $request->file('avatar')->store('avatars', 'public');
                $user->avatar = $path;
            }

            $user->save();

            // Si es una petición AJAX, devolver JSON
            if ($request->expectsJson()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Usuario actualizado exitosamente.',
                    'data' => $user
                ]);
            }

            return redirect()->route('admin.users.index')
                ->with('success', 'Usuario actualizado exitosamente.');

        } catch (\Illuminate\Validation\ValidationException $e) {
            if ($request->expectsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Error de validación',
                    'errors' => $e->errors()
                ], 422);
            }
            throw $e;
        } catch (\Exception $e) {
            if ($request->expectsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Error al actualizar el usuario: ' . $e->getMessage()
                ], 500);
            }
            return back()->with('error', 'Error al actualizar el usuario: ' . $e->getMessage());
        }
    }

    public function destroy(User $user)
    {
        try {
            // No permitir eliminar el último administrador
            if ($user->rol === 'admin') {
                $adminCount = User::where('rol', 'admin')->count();
                if ($adminCount <= 1) {
                    return back()->with('error', 'No se puede eliminar el último administrador del sistema.');
                }
            }

            // Eliminar avatar si existe
            if ($user->avatar) {
                Storage::disk('public')->delete($user->avatar);
            }

            $user->delete();

            return redirect()->route('admin.users.index')
                ->with('success', 'Usuario eliminado exitosamente.');

        } catch (\Exception $e) {
            return back()->with('error', 'Error al eliminar el usuario: ' . $e->getMessage());
        }
    }

    public function toggleEstado(User $user)
    {
        // No permitir desactivar el último administrador activo
        if ($user->rol === 'admin' && $user->estado) {
            $activeAdminCount = User::where('rol', 'admin')->where('estado', true)->count();
            if ($activeAdminCount <= 1) {
                return response()->json([
                    'success' => false,
                    'message' => 'No se puede desactivar el último administrador activo del sistema.'
                ], 400);
            }
        }

        $user->estado = !$user->estado;
        $user->save();

        return response()->json([
            'success' => true,
            'estado' => $user->estado,
            'message' => $user->estado ? 'Usuario activado.' : 'Usuario desactivado.'
        ]);
    }

    public function changePassword(Request $request, User $user)
    {
        try {
            $validated = $request->validate([
                'password' => 'required|string|min:8|confirmed',
            ], [
                'password.required' => 'La nueva contraseña es obligatoria.',
                'password.min' => 'La contraseña debe tener al menos 8 caracteres.',
                'password.confirmed' => 'Las contraseñas no coinciden.',
            ]);

            $user->password = Hash::make($validated['password']);
            $user->save();

            if ($request->expectsJson()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Contraseña actualizada exitosamente.'
                ]);
            }

            return back()->with('success', 'Contraseña actualizada exitosamente.');

        } catch (\Illuminate\Validation\ValidationException $e) {
            if ($request->expectsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Error de validación',
                    'errors' => $e->errors()
                ], 422);
            }
            throw $e;
        } catch (\Exception $e) {
            if ($request->expectsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Error al cambiar la contraseña: ' . $e->getMessage()
                ], 500);
            }
            return back()->with('error', 'Error al cambiar la contraseña: ' . $e->getMessage());
        }
    }
}