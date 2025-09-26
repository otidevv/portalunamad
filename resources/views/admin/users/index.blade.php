@extends('admin.layouts.app')

@section('content')
<div class="p-6">
    <!-- Header -->
    <div class="flex justify-between items-center mb-6">
        <div>
            <h1 class="text-2xl font-bold text-gray-800">Gestión de Usuarios</h1>
            <p class="text-gray-600 text-sm mt-1">Administra los usuarios del sistema</p>
        </div>
        <button onclick="openUserModal()"
                class="flex items-center space-x-2 px-4 py-2 bg-gradient-to-r from-[#db0455] to-[#a00340] text-white rounded-lg hover:shadow-lg transform hover:scale-[1.02] transition-all duration-200">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
            </svg>
            <span>Nuevo Usuario</span>
        </button>
    </div>

    <!-- Filtros -->
    <div class="bg-white rounded-lg shadow-sm p-4 mb-6">
        <form method="GET" action="{{ route('admin.users.index') }}">
            <div class="grid grid-cols-1 md:grid-cols-5 gap-4">
                <input type="text"
                       name="buscar"
                       value="{{ request('buscar') }}"
                       placeholder="Buscar por nombre, email o documento..."
                       class="rounded-lg border-gray-300 focus:border-[#db0455] focus:ring-[#db0455]">

                <select name="rol" class="rounded-lg border-gray-300 focus:border-[#db0455] focus:ring-[#db0455]">
                    <option value="">Todos los roles</option>
                    <option value="admin" {{ request('rol') == 'admin' ? 'selected' : '' }}>Administrador</option>
                    <option value="editor" {{ request('rol') == 'editor' ? 'selected' : '' }}>Editor</option>
                    <option value="moderador" {{ request('rol') == 'moderador' ? 'selected' : '' }}>Moderador</option>
                    <option value="usuario" {{ request('rol') == 'usuario' ? 'selected' : '' }}>Usuario</option>
                </select>

                <select name="estado" class="rounded-lg border-gray-300 focus:border-[#db0455] focus:ring-[#db0455]">
                    <option value="">Todos los estados</option>
                    <option value="1" {{ request('estado') == '1' ? 'selected' : '' }}>Activo</option>
                    <option value="0" {{ request('estado') == '0' ? 'selected' : '' }}>Inactivo</option>
                </select>

                <select name="tipo_documento" class="rounded-lg border-gray-300 focus:border-[#db0455] focus:ring-[#db0455]">
                    <option value="">Todos los documentos</option>
                    <option value="dni" {{ request('tipo_documento') == 'dni' ? 'selected' : '' }}>DNI</option>
                    <option value="carnet_extranjeria" {{ request('tipo_documento') == 'carnet_extranjeria' ? 'selected' : '' }}>Carnet de Extranjería</option>
                    <option value="pasaporte" {{ request('tipo_documento') == 'pasaporte' ? 'selected' : '' }}>Pasaporte</option>
                    <option value="cedula" {{ request('tipo_documento') == 'cedula' ? 'selected' : '' }}>Cédula</option>
                </select>

                <button type="submit" class="px-4 py-2 bg-[#db0455] text-white rounded-lg hover:bg-[#a00340] transition-colors">
                    Filtrar
                </button>
            </div>
        </form>
    </div>

    <!-- Mensajes de éxito/error -->
    @if(session('success'))
        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded-lg">
            <div class="flex items-center">
                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                </svg>
                {{ session('success') }}
            </div>
        </div>
    @endif

    @if(session('error'))
        <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6 rounded-lg">
            <div class="flex items-center">
                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                </svg>
                {{ session('error') }}
            </div>
        </div>
    @endif

    <!-- Tabla de usuarios -->
    <div class="bg-white rounded-lg shadow-sm overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50 border-b border-gray-200">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Avatar / Usuario
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Documento
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Rol
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Estado
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Registro
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Acciones
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse($users as $user)
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <img src="{{ $user->avatar_url }}"
                                         alt="{{ $user->name }}"
                                         class="w-12 h-12 object-cover rounded-full mr-4">
                                    <div>
                                        <div class="text-sm font-medium text-gray-900">
                                            {{ trim($user->name . ' ' . $user->apellido_paterno . ' ' . $user->apellido_materno) }}
                                        </div>
                                        <div class="text-sm text-gray-500">
                                            {{ $user->email }}
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div>
                                    <div class="text-sm font-medium text-gray-900">
                                        {{ $user->tipo_documento_label }}
                                    </div>
                                    <div class="text-sm text-gray-500">
                                        {{ $user->numero_documento ?: 'No especificado' }}
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                @php
                                    $rolColors = [
                                        'admin' => 'bg-red-100 text-red-800',
                                        'editor' => 'bg-blue-100 text-blue-800',
                                        'moderador' => 'bg-purple-100 text-purple-800',
                                        'usuario' => 'bg-gray-100 text-gray-800',
                                    ];
                                @endphp
                                <span class="px-2 py-1 text-xs font-medium rounded-full {{ $rolColors[$user->rol] ?? 'bg-gray-100 text-gray-800' }}">
                                    {{ $user->rol_label }}
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <button onclick="toggleEstado('{{ $user->id }}', {{ $user->estado ? 'true' : 'false' }})"
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium {{ $user->estado ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                    {{ $user->estado ? 'Activo' : 'Inactivo' }}
                                </button>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $user->created_at->format('d/m/Y') }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <div class="flex items-center space-x-2">
                                    <button onclick="openUserModal({{ $user->id }})"
                                            class="text-blue-600 hover:text-blue-900" title="Editar">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                        </svg>
                                    </button>
                                    <button onclick="openPasswordModal({{ $user->id }}, '{{ $user->name }}')"
                                            class="text-green-600 hover:text-green-900" title="Cambiar Contraseña">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v-2L3.257 9.257a6 6 0 018.486-8.486L17 7"></path>
                                        </svg>
                                    </button>
                                    <form action="{{ route('admin.users.destroy', $user) }}"
                                          method="POST"
                                          class="inline-block"
                                          onsubmit="return confirm('¿Está seguro de eliminar este usuario?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-900" title="Eliminar">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-6 py-12 text-center text-gray-500">
                                <svg class="w-12 h-12 mx-auto mb-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                                </svg>
                                No hay usuarios registrados
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Paginación -->
        @if($users->hasPages())
            <div class="px-6 py-4 border-t border-gray-200">
                {{ $users->appends(request()->query())->links() }}
            </div>
        @endif
    </div>

    <!-- Modal para crear/editar usuario -->
    <div id="userModal" class="fixed inset-0 z-50 overflow-y-auto hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <!-- Modal panel -->
            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-2xl transform transition-all sm:my-8 sm:align-middle sm:max-w-4xl sm:w-full">
                <!-- Header -->
                <div class="bg-gradient-to-r from-[#db0455] to-[#a00340] px-6 py-4">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>
                            <div class="ml-3">
                                <h3 class="text-lg leading-6 font-medium text-white" id="modal-title">
                                    Crear Nuevo Usuario
                                </h3>
                                <p class="text-sm text-gray-100">
                                    Complete todos los campos para crear el usuario
                                </p>
                            </div>
                        </div>
                        <button onclick="closeUserModal()"
                                class="text-white hover:text-gray-200 focus:outline-none focus:text-gray-200 transition ease-in-out duration-150">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Form -->
                <form id="userForm" class="bg-white" enctype="multipart/form-data">
                    <div class="px-6 py-6 space-y-6 max-h-[70vh] overflow-y-auto">

                        <!-- Información Personal -->
                        <div class="bg-gradient-to-br from-gray-50 to-gray-100 rounded-xl p-5 border border-gray-200">
                            <h4 class="text-sm font-semibold text-gray-900 mb-4 flex items-center">
                                <svg class="w-5 h-5 mr-2 text-[#db0455]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                                Información Personal
                            </h4>

                            <div class="grid grid-cols-1 lg:grid-cols-2 gap-5">
                                <!-- Nombre -->
                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                                        Nombres <span class="text-red-500">*</span>
                                    </label>
                                    <input type="text"
                                           name="name"
                                           id="name"
                                           class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-[#db0455] focus:ring-4 focus:ring-[#db0455]/10 shadow-sm transition-all duration-200 placeholder-gray-400"
                                           placeholder="Ej: Juan Carlos" required>
                                    <div class="text-red-600 text-sm mt-1" id="error-name"></div>
                                </div>

                                <!-- Apellido Paterno -->
                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                                        Apellido Paterno
                                    </label>
                                    <input type="text"
                                           name="apellido_paterno"
                                           id="apellido_paterno"
                                           class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-[#db0455] focus:ring-4 focus:ring-[#db0455]/10 shadow-sm transition-all duration-200 placeholder-gray-400"
                                           placeholder="Ej: Pérez">
                                    <div class="text-red-600 text-sm mt-1" id="error-apellido_paterno"></div>
                                </div>

                                <!-- Apellido Materno -->
                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                                        Apellido Materno
                                    </label>
                                    <input type="text"
                                           name="apellido_materno"
                                           id="apellido_materno"
                                           class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-[#db0455] focus:ring-4 focus:ring-[#db0455]/10 shadow-sm transition-all duration-200 placeholder-gray-400"
                                           placeholder="Ej: García">
                                    <div class="text-red-600 text-sm mt-1" id="error-apellido_materno"></div>
                                </div>

                                <!-- Fecha de Nacimiento -->
                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                                        Fecha de Nacimiento
                                    </label>
                                    <input type="date"
                                           name="fecha_nacimiento"
                                           id="fecha_nacimiento"
                                           class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-[#db0455] focus:ring-4 focus:ring-[#db0455]/10 shadow-sm transition-all duration-200"
                                           placeholder="YYYY-MM-DD">
                                    <div class="text-red-600 text-sm mt-1" id="error-fecha_nacimiento"></div>
                                </div>

                                <!-- Email -->
                                <div class="lg:col-span-2">
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                                        Email <span class="text-red-500">*</span>
                                    </label>
                                    <input type="email"
                                           name="email"
                                           id="email"
                                           class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-[#db0455] focus:ring-4 focus:ring-[#db0455]/10 shadow-sm transition-all duration-200 placeholder-gray-400"
                                           placeholder="Ej: juan.perez@unamad.edu.pe" required>
                                    <div class="text-red-600 text-sm mt-1" id="error-email"></div>
                                </div>

                                <!-- Tipo de Documento -->
                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                                        Tipo de Documento <span class="text-red-500">*</span>
                                    </label>
                                    <select name="tipo_documento" id="tipo_documento"
                                            class="w-full appearance-none px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-[#db0455] focus:ring-4 focus:ring-[#db0455]/10 shadow-sm transition-all duration-200 bg-white" required>
                                        <option value="" disabled selected>Seleccione tipo</option>
                                        <option value="dni">DNI</option>
                                        <option value="carnet_extranjeria">Carnet de Extranjería</option>
                                        <option value="pasaporte">Pasaporte</option>
                                        <option value="cedula">Cédula de Identidad</option>
                                    </select>
                                    <div class="text-red-600 text-sm mt-1" id="error-tipo_documento"></div>
                                </div>

                                <!-- Número de Documento -->
                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                                        Número de Documento <span class="text-red-500">*</span>
                                    </label>
                                    <div class="relative">
                                        <input type="text"
                                               name="numero_documento"
                                               id="numero_documento"
                                               class="w-full px-4 py-3 pr-12 rounded-xl border-2 border-gray-200 focus:border-[#db0455] focus:ring-4 focus:ring-[#db0455]/10 shadow-sm transition-all duration-200 placeholder-gray-400"
                                               placeholder="Ej: 12345678"
                                               oninput="handleDocumentInput(this.value)"
                                               required>
                                        <div id="consulta-loading" class="absolute right-2 top-1/2 transform -translate-y-1/2 hidden">
                                            <div class="animate-spin rounded-full h-5 w-5 border-b-2 border-[#db0455]"></div>
                                        </div>
                                    </div>
                                    <div class="text-red-600 text-sm mt-1" id="error-numero_documento"></div>
                                    <div class="text-green-600 text-sm mt-1" id="success-consulta"></div>
                                </div>

                                <!-- Rol -->
                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                                        Rol <span class="text-red-500">*</span>
                                    </label>
                                    <select name="rol" id="rol"
                                            class="w-full appearance-none px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-[#db0455] focus:ring-4 focus:ring-[#db0455]/10 shadow-sm transition-all duration-200 bg-white" required>
                                        <option value="" disabled selected>Seleccione rol</option>
                                        <option value="admin">🔴 Administrador</option>
                                        <option value="editor">🔵 Editor</option>
                                        <option value="moderador">🟣 Moderador</option>
                                        <option value="usuario">⚪ Usuario</option>
                                    </select>
                                    <div class="text-red-600 text-sm mt-1" id="error-rol"></div>
                                </div>

                                <!-- Estado -->
                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                                        Estado
                                    </label>
                                    <div class="flex items-center">
                                        <input type="checkbox" name="estado" id="estado" value="1" checked
                                               class="w-5 h-5 rounded-md border-2 border-green-400 text-green-500 shadow-sm focus:border-green-500 focus:ring focus:ring-green-200 focus:ring-opacity-50">
                                        <label for="estado" class="ml-3 block text-sm font-semibold text-gray-700 cursor-pointer select-none">
                                            ✅ Usuario activo
                                        </label>
                                    </div>
                                    <p class="text-xs text-gray-600 mt-2 ml-8">
                                        Los usuarios inactivos no pueden acceder al sistema
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Contraseña (solo para crear) -->
                        <div id="password-section" class="bg-gradient-to-br from-gray-50 to-gray-100 rounded-xl p-5 border border-gray-200">
                            <h4 class="text-sm font-semibold text-gray-900 mb-4 flex items-center">
                                <svg class="w-5 h-5 mr-2 text-[#db0455]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v-2L3.257 9.257a6 6 0 018.486-8.486L17 7"></path>
                                </svg>
                                Contraseña
                            </h4>

                            <div class="grid grid-cols-1 lg:grid-cols-2 gap-5">
                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                                        Contraseña <span class="text-red-500">*</span>
                                    </label>
                                    <div class="relative">
                                        <input type="password"
                                               name="password"
                                               id="password"
                                               class="w-full px-4 py-3 pr-12 rounded-xl border-2 border-gray-200 focus:border-[#db0455] focus:ring-4 focus:ring-[#db0455]/10 shadow-sm transition-all duration-200 placeholder-gray-400"
                                               placeholder="Mínimo 8 caracteres"
                                               oninput="checkPasswordMatch()"
                                               required>
                                        <button type="button"
                                                onclick="togglePassword('password')"
                                                class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-gray-600">
                                            <svg id="password-eye-open" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                            </svg>
                                            <svg id="password-eye-closed" class="w-5 h-5 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.878 9.878L3 3m6.878 6.878L21 21"></path>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="text-red-600 text-sm mt-1" id="error-password"></div>
                                </div>

                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                                        Confirmar Contraseña <span class="text-red-500">*</span>
                                    </label>
                                    <div class="relative">
                                        <input type="password"
                                               name="password_confirmation"
                                               id="password_confirmation"
                                               class="w-full px-4 py-3 pr-12 rounded-xl border-2 border-gray-200 focus:border-[#db0455] focus:ring-4 focus:ring-[#db0455]/10 shadow-sm transition-all duration-200 placeholder-gray-400"
                                               placeholder="Repita la contraseña"
                                               oninput="checkPasswordMatch()"
                                               required>
                                        <button type="button"
                                                onclick="togglePassword('password_confirmation')"
                                                class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-gray-600">
                                            <svg id="password_confirmation-eye-open" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                            </svg>
                                            <svg id="password_confirmation-eye-closed" class="w-5 h-5 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.878 9.878L3 3m6.878 6.878L21 21"></path>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="text-red-600 text-sm mt-1" id="error-password_confirmation"></div>
                                    <div class="text-green-600 text-sm mt-1" id="password-match-success"></div>
                                </div>
                            </div>
                        </div>

                        <!-- Avatar -->
                        <div class="bg-gradient-to-br from-gray-50 to-gray-100 rounded-xl p-5 border border-gray-200">
                            <h4 class="text-sm font-semibold text-gray-900 mb-4 flex items-center">
                                <svg class="w-5 h-5 mr-2 text-[#db0455]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                                Avatar
                            </h4>

                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">
                                    Seleccionar Avatar <span class="text-gray-400 font-normal">(Opcional)</span>
                                </label>
                                <div class="relative">
                                    <input type="file" name="avatar" id="avatar" accept="image/*"
                                           class="w-full px-4 py-3 border-2 border-dashed border-gray-300 rounded-xl hover:border-[#db0455] transition-colors duration-200 text-sm text-gray-600 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-gradient-to-r file:from-[#db0455] file:to-[#a00340] file:text-white hover:file:shadow-lg file:cursor-pointer">
                                </div>
                                <div class="text-red-600 text-sm mt-1" id="error-avatar"></div>
                                <p class="text-xs text-gray-500 mt-2 flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    JPG, PNG, GIF • Máximo 2MB • Si no se selecciona, se generará automáticamente
                                </p>

                                <!-- Preview del avatar actual (solo en modo editar) -->
                                <div id="current-avatar-preview" class="hidden mt-3">
                                    <p class="text-xs text-gray-600 mb-2">Avatar actual:</p>
                                    <img id="current-avatar-img" src="" alt="Avatar actual" class="w-20 h-20 object-cover rounded-full">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Footer -->
                    <div class="bg-gray-50 px-6 py-4 flex justify-between items-center">
                        <div class="text-sm text-gray-500">
                            Los campos marcados con * son obligatorios
                        </div>
                        <div class="flex space-x-3">
                            <button type="button" onclick="closeUserModal()"
                                    class="px-4 py-2 border border-gray-300 rounded-lg text-sm font-medium text-gray-700 hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800 transition duration-150 ease-in-out">
                                Cancelar
                            </button>
                            <button type="submit" id="submitBtn"
                                    class="inline-flex items-center px-4 py-2 border border-transparent rounded-lg text-sm font-medium text-white bg-gradient-to-r from-[#db0455] to-[#a00340] hover:shadow-lg transform hover:scale-[1.02] transition-all duration-200 focus:outline-none focus:shadow-outline disabled:opacity-50">
                                <span id="submitText" class="inline-flex items-center">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    Crear Usuario
                                </span>
                                <span id="loadingText" class="hidden flex items-center">
                                    <svg class="animate-spin -ml-1 mr-2 h-4 w-4 text-white" fill="none" viewBox="0 0 24 24">
                                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                    </svg>
                                    Guardando...
                                </span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal para cambiar contraseña -->
    <div id="passwordModal" class="fixed inset-0 z-50 overflow-y-auto hidden" aria-labelledby="password-modal-title" role="dialog" aria-modal="true">
        <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-2xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                <!-- Header -->
                <div class="bg-gradient-to-r from-green-500 to-green-600 px-6 py-4">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <svg class="h-6 w-6 text-white mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v-2L3.257 9.257a6 6 0 018.486-8.486L17 7"></path>
                            </svg>
                            <h3 class="text-lg leading-6 font-medium text-white" id="password-modal-title">
                                Cambiar Contraseña
                            </h3>
                        </div>
                        <button onclick="closePasswordModal()"
                                class="text-white hover:text-gray-200 focus:outline-none focus:text-gray-200 transition ease-in-out duration-150">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Form -->
                <form id="passwordForm" class="bg-white p-6">
                    <div class="space-y-4">
                        <p class="text-sm text-gray-600">
                            Cambiar contraseña para: <strong id="password-user-name"></strong>
                        </p>

                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">
                                Nueva Contraseña <span class="text-red-500">*</span>
                            </label>
                            <div class="relative">
                                <input type="password"
                                       name="password"
                                       id="new_password"
                                       class="w-full px-4 py-3 pr-12 rounded-xl border-2 border-gray-200 focus:border-green-500 focus:ring-4 focus:ring-green-500/10 shadow-sm transition-all duration-200 placeholder-gray-400"
                                       placeholder="Mínimo 8 caracteres"
                                       oninput="checkNewPasswordMatch()"
                                       required>
                                <button type="button"
                                        onclick="togglePassword('new_password')"
                                        class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-gray-600">
                                    <svg id="new_password-eye-open" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                    </svg>
                                    <svg id="new_password-eye-closed" class="w-5 h-5 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.878 9.878L3 3m6.878 6.878L21 21"></path>
                                    </svg>
                                </button>
                            </div>
                            <div class="text-red-600 text-sm mt-1" id="error-new_password"></div>
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">
                                Confirmar Nueva Contraseña <span class="text-red-500">*</span>
                            </label>
                            <div class="relative">
                                <input type="password"
                                       name="password_confirmation"
                                       id="new_password_confirmation"
                                       class="w-full px-4 py-3 pr-12 rounded-xl border-2 border-gray-200 focus:border-green-500 focus:ring-4 focus:ring-green-500/10 shadow-sm transition-all duration-200 placeholder-gray-400"
                                       placeholder="Repita la nueva contraseña"
                                       oninput="checkNewPasswordMatch()"
                                       required>
                                <button type="button"
                                        onclick="togglePassword('new_password_confirmation')"
                                        class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-gray-600">
                                    <svg id="new_password_confirmation-eye-open" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                    </svg>
                                    <svg id="new_password_confirmation-eye-closed" class="w-5 h-5 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.878 9.878L3 3m6.878 6.878L21 21"></path>
                                    </svg>
                                </button>
                            </div>
                            <div class="text-red-600 text-sm mt-1" id="error-new_password_confirmation"></div>
                            <div class="text-green-600 text-sm mt-1" id="new-password-match-success"></div>
                        </div>
                    </div>

                    <div class="flex justify-end space-x-3 mt-6">
                        <button type="button" onclick="closePasswordModal()"
                                class="px-4 py-2 border border-gray-300 rounded-lg text-sm font-medium text-gray-700 hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800 transition duration-150 ease-in-out">
                            Cancelar
                        </button>
                        <button type="submit" id="passwordSubmitBtn"
                                class="inline-flex items-center px-4 py-2 border border-transparent rounded-lg text-sm font-medium text-white bg-gradient-to-r from-green-500 to-green-600 hover:shadow-lg transform hover:scale-[1.02] transition-all duration-200 focus:outline-none focus:shadow-outline disabled:opacity-50">
                            <span id="passwordSubmitText" class="inline-flex items-center">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Cambiar Contraseña
                            </span>
                            <span id="passwordLoadingText" class="hidden flex items-center">
                                <svg class="animate-spin -ml-1 mr-2 h-4 w-4 text-white" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                </svg>
                                Actualizando...
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
// Modal state variables
let currentUserId = null;
let isEditMode = false;

// Toggle estado function
function toggleEstado(userId, estadoActual) {
    fetch(`/admin/users/${userId}/estado`, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            toastr.success(data.message);
            setTimeout(() => {
                window.location.reload();
            }, 1000);
        } else {
            toastr.error(data.message || 'Error al cambiar el estado');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        toastr.error('Error al procesar la solicitud');
    });
}

// Modal functions
function openUserModal(userId = null) {
    currentUserId = userId;
    isEditMode = userId !== null;

    // Show modal
    document.getElementById('userModal').classList.remove('hidden');

    // Update modal title and button text
    const modalTitle = document.getElementById('modal-title');
    const submitText = document.getElementById('submitText');
    const passwordSection = document.getElementById('password-section');

    if (isEditMode) {
        modalTitle.textContent = 'Editar Usuario';
        modalTitle.nextElementSibling.textContent = 'Modifique los campos necesarios para actualizar el usuario';
        submitText.innerHTML = `
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            Actualizar Usuario
        `;
        // Hide password section in edit mode
        passwordSection.style.display = 'none';
        // Remove required attribute from password fields
        document.getElementById('password').required = false;
        document.getElementById('password_confirmation').required = false;
        // Load user data
        loadUserData(userId);
    } else {
        modalTitle.textContent = 'Crear Nuevo Usuario';
        modalTitle.nextElementSibling.textContent = 'Complete todos los campos para crear el usuario';
        submitText.innerHTML = `
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            Crear Usuario
        `;
        // Show password section in create mode
        passwordSection.style.display = 'block';
        // Add required attribute to password fields
        document.getElementById('password').required = true;
        document.getElementById('password_confirmation').required = true;
        // Reset form for create mode
        resetFormForCreate();
    }
}

function resetFormForCreate() {
    document.getElementById('userForm').reset();
    document.getElementById('estado').checked = true;
    document.getElementById('current-avatar-preview').classList.add('hidden');
    clearErrors();
}

// Load user data for editing
function loadUserData(userId) {
    fetch(`/admin/users/${userId}`, {
        method: 'GET',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            'Accept': 'application/json'
        }
    })
    .then(response => response.json())
    .then(data => {
        if (data.success && data.user) {
            const user = data.user;

            // Populate form fields
            document.getElementById('name').value = user.name || '';
            document.getElementById('apellido_paterno').value = user.apellido_paterno || '';
            document.getElementById('apellido_materno').value = user.apellido_materno || '';
            document.getElementById('email').value = user.email || '';
            document.getElementById('tipo_documento').value = user.tipo_documento || '';
            document.getElementById('numero_documento').value = user.numero_documento || '';
            document.getElementById('fecha_nacimiento').value = user.fecha_nacimiento || '';
            document.getElementById('rol').value = user.rol || '';
            document.getElementById('estado').checked = user.estado || false;

            // Show current avatar if exists
            if (user.avatar_url) {
                const avatarPreview = document.getElementById('current-avatar-preview');
                const avatarImg = document.getElementById('current-avatar-img');
                avatarImg.src = user.avatar_url;
                avatarPreview.classList.remove('hidden');
            }

            clearErrors();
        }
    })
    .catch(error => {
        console.error('Error loading user data:', error);
        toastr.error('Error al cargar los datos del usuario');
    });
}

function closeUserModal() {
    document.getElementById('userModal').classList.add('hidden');
}

// Password modal functions
function openPasswordModal(userId, userName) {
    document.getElementById('password-user-name').textContent = userName;
    document.getElementById('passwordModal').classList.remove('hidden');

    // Store user ID for password change
    document.getElementById('passwordForm').dataset.userId = userId;

    // Reset password form
    document.getElementById('passwordForm').reset();
    clearPasswordErrors();
}

function closePasswordModal() {
    document.getElementById('passwordModal').classList.add('hidden');
}

// Clear validation errors
function clearErrors() {
    document.querySelectorAll('[id^="error-"]').forEach(el => {
        if (!el.id.startsWith('error-new_')) {
            el.textContent = '';
        }
    });
}

function clearPasswordErrors() {
    document.querySelectorAll('[id^="error-new_"]').forEach(el => {
        el.textContent = '';
    });
}

// Show validation errors
function showErrors(errors) {
    clearErrors();
    for (const [field, messages] of Object.entries(errors)) {
        const errorElement = document.getElementById(`error-${field}`);
        if (errorElement) {
            errorElement.textContent = messages[0];
        }
    }
}

function showPasswordErrors(errors) {
    clearPasswordErrors();
    for (const [field, messages] of Object.entries(errors)) {
        const errorElement = document.getElementById(`error-new_${field}`);
        if (errorElement) {
            errorElement.textContent = messages[0];
        }
    }
}

// Form submission
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('userForm');
    if (form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();

            // Show loading state
            const submitBtn = document.getElementById('submitBtn');
            const submitText = document.getElementById('submitText');
            const loadingText = document.getElementById('loadingText');

            submitBtn.disabled = true;
            submitText.classList.add('hidden');
            loadingText.classList.remove('hidden');

            clearErrors();

            const formData = new FormData(form);

            // Determine URL and method based on mode
            let url = '/admin/users';
            let method = 'POST';

            if (isEditMode && currentUserId) {
                url = `/admin/users/${currentUserId}`;
                method = 'POST'; // We'll use POST with _method override
                formData.append('_method', 'PUT');
            }

            fetch(url, {
                method: method,
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    'Accept': 'application/json'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    const message = isEditMode ? 'Usuario actualizado exitosamente' : 'Usuario creado exitosamente';
                    toastr.success(data.message || message);
                    closeUserModal();
                    setTimeout(() => {
                        window.location.reload();
                    }, 1500);
                } else if (data.errors) {
                    toastr.error('Por favor, corrija los errores en el formulario');
                    showErrors(data.errors);
                    resetButtonState();
                } else {
                    const errorMessage = isEditMode ? 'Error al actualizar el usuario' : 'Error al crear el usuario';
                    toastr.error(data.message || errorMessage);
                    resetButtonState();
                }
            })
            .catch(error => {
                console.error('Error:', error);
                toastr.error('Error al procesar la solicitud');
                resetButtonState();
            });

            function resetButtonState() {
                submitBtn.disabled = false;
                submitText.classList.remove('hidden');
                loadingText.classList.add('hidden');
            }
        });
    }

    // Password form submission
    const passwordForm = document.getElementById('passwordForm');
    if (passwordForm) {
        passwordForm.addEventListener('submit', function(e) {
            e.preventDefault();

            const userId = passwordForm.dataset.userId;
            if (!userId) return;

            // Show loading state
            const submitBtn = document.getElementById('passwordSubmitBtn');
            const submitText = document.getElementById('passwordSubmitText');
            const loadingText = document.getElementById('passwordLoadingText');

            submitBtn.disabled = true;
            submitText.classList.add('hidden');
            loadingText.classList.remove('hidden');

            clearPasswordErrors();

            const formData = new FormData(passwordForm);

            fetch(`/admin/users/${userId}/password`, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    'Accept': 'application/json'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    toastr.success(data.message || 'Contraseña actualizada exitosamente');
                    closePasswordModal();
                } else if (data.errors) {
                    toastr.error('Por favor, corrija los errores en el formulario');
                    showPasswordErrors(data.errors);
                    resetPasswordButtonState();
                } else {
                    toastr.error(data.message || 'Error al cambiar la contraseña');
                    resetPasswordButtonState();
                }
            })
            .catch(error => {
                console.error('Error:', error);
                toastr.error('Error al procesar la solicitud');
                resetPasswordButtonState();
            });

            function resetPasswordButtonState() {
                submitBtn.disabled = false;
                submitText.classList.remove('hidden');
                loadingText.classList.add('hidden');
            }
        });
    }
});

// API integration with automatic DNI consultation
let consultaTimeout;
let lastConsultedDocument = '';

function handleDocumentInput(value) {
    const numeroDocumento = value.trim();
    const tipoDocumento = document.getElementById('tipo_documento').value;

    // Clear previous messages and timeout
    clearTimeout(consultaTimeout);
    document.getElementById('error-numero_documento').textContent = '';
    document.getElementById('success-consulta').textContent = '';

    // Clear API-filled data if document number changes
    if (numeroDocumento !== lastConsultedDocument) {
        clearApiFields();
    }

    console.log('Documento ingresado:', numeroDocumento, 'Tipo:', tipoDocumento, 'Longitud:', numeroDocumento.length);

    // Only auto-consult for DNI with 8 or more digits
    if (tipoDocumento === 'dni' && numeroDocumento.length >= 8) {
        console.log('Iniciando consulta automática para DNI:', numeroDocumento);
        // Debounce the API call - wait 500ms after user stops typing
        consultaTimeout = setTimeout(() => {
            consultarDNI(numeroDocumento);
        }, 500);
    }
}

// Add listener for document type changes to trigger consultation if document is already filled
document.addEventListener('DOMContentLoaded', function() {
    const tipoDocumentoSelect = document.getElementById('tipo_documento');
    const numeroDocumentoInput = document.getElementById('numero_documento');

    if (tipoDocumentoSelect) {
        tipoDocumentoSelect.addEventListener('change', function() {
            const numeroDocumento = numeroDocumentoInput.value.trim();
            if (this.value === 'dni' && numeroDocumento.length >= 8) {
                console.log('Tipo documento cambiado a DNI, consultando:', numeroDocumento);
                setTimeout(() => {
                    consultarDNI(numeroDocumento);
                }, 500);
            }
        });
    }
});

function consultarDNI(numeroDocumento) {
    // Skip if already consulted this document
    if (numeroDocumento === lastConsultedDocument) {
        return;
    }

    // Show loading state
    const loadingDiv = document.getElementById('consulta-loading');
    loadingDiv.classList.remove('hidden');

    fetch(`https://apidatos.unamad.edu.pe/api/consulta/${numeroDocumento}`)
        .then(response => {
            if (!response.ok) {
                throw new Error('No se encontraron datos para este DNI');
            }
            return response.json();
        })
        .then(data => {
            if (data.NOMBRES && data.AP_PAT) {
                // Only fill empty fields to avoid overwriting user input
                const nameField = document.getElementById('name');
                const apellidoPaternoField = document.getElementById('apellido_paterno');
                const apellidoMaternoField = document.getElementById('apellido_materno');
                const fechaNacimientoField = document.getElementById('fecha_nacimiento');

                if (!nameField.value && data.NOMBRES) {
                    nameField.value = data.NOMBRES;
                    nameField.classList.add('border-green-300', 'bg-green-50');
                }

                if (!apellidoPaternoField.value && data.AP_PAT) {
                    apellidoPaternoField.value = data.AP_PAT;
                    apellidoPaternoField.classList.add('border-green-300', 'bg-green-50');
                }

                if (!apellidoMaternoField.value && data.AP_MAT) {
                    apellidoMaternoField.value = data.AP_MAT;
                    apellidoMaternoField.classList.add('border-green-300', 'bg-green-50');
                }

                if (!fechaNacimientoField.value && data.FECHA_NAC) {
                    fechaNacimientoField.value = data.FECHA_NAC;
                    fechaNacimientoField.classList.add('border-green-300', 'bg-green-50');
                }

                document.getElementById('success-consulta').textContent = 'Datos obtenidos automáticamente de la API';
                lastConsultedDocument = numeroDocumento;

                // Remove visual feedback after 3 seconds
                setTimeout(() => {
                    ['name', 'apellido_paterno', 'apellido_materno', 'fecha_nacimiento'].forEach(fieldId => {
                        const field = document.getElementById(fieldId);
                        field.classList.remove('border-green-300', 'bg-green-50');
                    });
                }, 3000);
            } else {
                throw new Error('Datos incompletos recibidos de la API');
            }
        })
        .catch(error => {
            console.error('Error consulting API:', error);
            // Only show error if it's not a simple "not found" case
            if (!error.message.includes('No se encontraron datos')) {
                document.getElementById('error-numero_documento').textContent = 'Error al consultar la API';
            }
        })
        .finally(() => {
            // Hide loading state
            loadingDiv.classList.add('hidden');
        });
}

function clearApiFields() {
    document.getElementById('success-consulta').textContent = '';
    ['name', 'apellido_paterno', 'apellido_materno', 'fecha_nacimiento'].forEach(fieldId => {
        const field = document.getElementById(fieldId);
        field.classList.remove('border-green-300', 'bg-green-50');
    });
    lastConsultedDocument = '';
}

// Password visibility toggle
function togglePassword(fieldId) {
    const field = document.getElementById(fieldId);
    const eyeOpen = document.getElementById(fieldId + '-eye-open');
    const eyeClosed = document.getElementById(fieldId + '-eye-closed');

    if (field.type === 'password') {
        field.type = 'text';
        eyeOpen.classList.add('hidden');
        eyeClosed.classList.remove('hidden');
    } else {
        field.type = 'password';
        eyeOpen.classList.remove('hidden');
        eyeClosed.classList.add('hidden');
    }
}

// Password match validation for main form
function checkPasswordMatch() {
    const password = document.getElementById('password');
    const passwordConfirmation = document.getElementById('password_confirmation');
    const matchSuccess = document.getElementById('password-match-success');
    const errorDiv = document.getElementById('error-password_confirmation');

    if (!password || !passwordConfirmation || !matchSuccess) return;

    const passwordValue = password.value;
    const confirmationValue = passwordConfirmation.value;

    // Clear previous messages
    matchSuccess.textContent = '';
    errorDiv.textContent = '';

    if (passwordValue && confirmationValue) {
        if (passwordValue === confirmationValue) {
            matchSuccess.textContent = '✓ Las contraseñas coinciden';
            passwordConfirmation.classList.remove('border-red-300', 'focus:border-red-500');
            passwordConfirmation.classList.add('border-green-300', 'focus:border-green-500');
        } else {
            errorDiv.textContent = 'Las contraseñas no coinciden';
            passwordConfirmation.classList.remove('border-green-300', 'focus:border-green-500');
            passwordConfirmation.classList.add('border-red-300', 'focus:border-red-500');
        }
    } else {
        // Reset to default styling if either field is empty
        passwordConfirmation.classList.remove('border-red-300', 'focus:border-red-500', 'border-green-300', 'focus:border-green-500');
    }
}

// Password match validation for password change modal
function checkNewPasswordMatch() {
    const newPassword = document.getElementById('new_password');
    const newPasswordConfirmation = document.getElementById('new_password_confirmation');
    const matchSuccess = document.getElementById('new-password-match-success');
    const errorDiv = document.getElementById('error-new_password_confirmation');

    if (!newPassword || !newPasswordConfirmation || !matchSuccess) return;

    const passwordValue = newPassword.value;
    const confirmationValue = newPasswordConfirmation.value;

    // Clear previous messages
    matchSuccess.textContent = '';
    errorDiv.textContent = '';

    if (passwordValue && confirmationValue) {
        if (passwordValue === confirmationValue) {
            matchSuccess.textContent = '✓ Las contraseñas coinciden';
            newPasswordConfirmation.classList.remove('border-red-300', 'focus:border-red-500');
            newPasswordConfirmation.classList.add('border-green-300', 'focus:border-green-500');
        } else {
            errorDiv.textContent = 'Las contraseñas no coinciden';
            newPasswordConfirmation.classList.remove('border-green-300', 'focus:border-green-500');
            newPasswordConfirmation.classList.add('border-red-300', 'focus:border-red-500');
        }
    } else {
        // Reset to default styling if either field is empty
        newPasswordConfirmation.classList.remove('border-red-300', 'focus:border-red-500', 'border-green-300', 'focus:border-green-500');
    }
}

// Close modals on ESC key
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        const userModal = document.getElementById('userModal');
        const passwordModal = document.getElementById('passwordModal');

        if (!userModal.classList.contains('hidden')) {
            closeUserModal();
        }
        if (!passwordModal.classList.contains('hidden')) {
            closePasswordModal();
        }
    }
});
</script>
@endpush
@endsection