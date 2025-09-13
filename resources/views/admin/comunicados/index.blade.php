@extends('admin.layouts.app')

@section('content')
<div class="p-6">
    <!-- Header -->
    <div class="flex justify-between items-center mb-6">
        <div>
            <h1 class="text-2xl font-bold text-gray-800">Gestión de Comunicados</h1>
            <p class="text-gray-600 text-sm mt-1">Administra los comunicados del portal</p>
        </div>
        <button onclick="openComunicadoModal()" 
                class="flex items-center space-x-2 px-4 py-2 bg-gradient-to-r from-[#db0455] to-[#a00340] text-white rounded-lg hover:shadow-lg transform hover:scale-[1.02] transition-all duration-200">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
            </svg>
            <span>Nuevo Comunicado</span>
        </button>
    </div>

    <!-- Filtros -->
    <div class="bg-white rounded-lg shadow-sm p-4 mb-6">
        <form method="GET" action="{{ route('admin.comunicados.index') }}">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <select name="categoria" class="rounded-lg border-gray-300 focus:border-[#db0455] focus:ring-[#db0455]">
                    <option value="">Todas las categorías</option>
                    @foreach($categorias as $cat)
                        <option value="{{ $cat->id }}" {{ request('categoria') == $cat->id ? 'selected' : '' }}>
                            {{ $cat->nombre }}
                        </option>
                    @endforeach
                </select>
                
                <select name="estado" class="rounded-lg border-gray-300 focus:border-[#db0455] focus:ring-[#db0455]">
                    <option value="">Todos los estados</option>
                    <option value="1" {{ request('estado') == '1' ? 'selected' : '' }}>Activo</option>
                    <option value="0" {{ request('estado') == '0' ? 'selected' : '' }}>Inactivo</option>
                </select>
                
                <select name="vigencia" class="rounded-lg border-gray-300 focus:border-[#db0455] focus:ring-[#db0455]">
                    <option value="">Todas las vigencias</option>
                    <option value="vigente" {{ request('vigencia') == 'vigente' ? 'selected' : '' }}>Vigentes</option>
                    <option value="vencido" {{ request('vigencia') == 'vencido' ? 'selected' : '' }}>Vencidos</option>
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

    <!-- Tabla de comunicados -->
    <div class="bg-white rounded-lg shadow-sm overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50 border-b border-gray-200">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Imagen
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Título / Detalles
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Categoría
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Estado
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Vigencia
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Acciones
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse($comunicados as $comunicado)
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-4 whitespace-nowrap">
                                @if($comunicado->imagen)
                                    <img src="{{ $comunicado->imagen_url }}" 
                                         alt="{{ $comunicado->titulo }}"
                                         class="w-16 h-16 object-cover rounded-lg">
                                @else
                                    <div class="w-16 h-16 bg-gray-200 rounded-lg flex items-center justify-center">
                                        <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                                  d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                        </svg>
                                    </div>
                                @endif
                            </td>
                            <td class="px-6 py-4">
                                <div>
                                    <div class="text-sm font-medium text-gray-900">
                                        {{ Str::limit($comunicado->titulo, 50) }}
                                    </div>
                                    <div class="text-xs text-gray-500 mt-1">
                                        Por: {{ $comunicado->user->name ?? 'N/A' }} • {{ $comunicado->created_at->format('d/m/Y H:i') }}
                                    </div>
                                    @if($comunicado->duracion)
                                        <div class="text-xs text-gray-500 mt-1">
                                            <span class="inline-flex items-center">
                                                <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                                          d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                </svg>
                                                Duración: {{ $comunicado->duracion }} días
                                            </span>
                                        </div>
                                    @endif
                                    @if($comunicado->fecha_fin)
                                        <div class="text-xs text-gray-500 mt-1">
                                            <span class="inline-flex items-center">
                                                <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                                          d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                                </svg>
                                                Expira: {{ $comunicado->fecha_fin->format('d/m/Y H:i') }}
                                            </span>
                                        </div>
                                    @endif
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 py-1 text-xs font-medium rounded-full bg-blue-100 text-blue-800">
                                    {{ $comunicado->categoria->nombre ?? 'Sin categoría' }}
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <button onclick="toggleEstado('{{ $comunicado->id }}', {{ $comunicado->estado ? 'true' : 'false' }})"
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium {{ $comunicado->estado ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                    {{ $comunicado->estado ? 'Activo' : 'Inactivo' }}
                                </button>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                @if($comunicado->fecha_fin && $comunicado->fecha_fin <= now())
                                    <span class="px-2 py-1 text-xs font-medium rounded-full bg-red-100 text-red-800">
                                        Vencido
                                    </span>
                                @else
                                    <span class="px-2 py-1 text-xs font-medium rounded-full bg-green-100 text-green-800">
                                        Vigente
                                    </span>
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <div class="flex items-center space-x-2">
                                    <a href="{{ route('admin.comunicados.show', $comunicado) }}" 
                                       class="text-gray-600 hover:text-gray-900" title="Ver">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                                  d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                                  d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                        </svg>
                                    </a>
                                    <a href="{{ route('admin.comunicados.edit', $comunicado) }}" 
                                       class="text-blue-600 hover:text-blue-900" title="Editar">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                                  d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                        </svg>
                                    </a>
                                    <form action="{{ route('admin.comunicados.destroy', $comunicado) }}" 
                                          method="POST" 
                                          class="inline-block"
                                          onsubmit="return confirm('¿Está seguro de eliminar este comunicado?');">
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
                                          d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"></path>
                                </svg>
                                No hay comunicados registrados
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        
        <!-- Paginación -->
        @if($comunicados->hasPages())
            <div class="px-6 py-4 border-t border-gray-200">
                {{ $comunicados->appends(request()->query())->links() }}
            </div>
        @endif
    </div>

    <!-- Modal para crear/editar comunicado -->
    <div id="comunicadoModal" class="fixed inset-0 z-50 overflow-y-auto hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <!-- Modal panel (sin overlay de fondo) -->
            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-2xl transform transition-all sm:my-8 sm:align-middle sm:max-w-5xl sm:w-full">
                <!-- Header -->
                <div class="bg-gradient-to-r from-[#db0455] to-[#a00340] px-6 py-4">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"></path>
                                </svg>
                            </div>
                            <div class="ml-3">
                                <h3 class="text-lg leading-6 font-medium text-white" id="modal-title">
                                    Crear Nuevo Comunicado
                                </h3>
                                <p class="text-sm text-gray-100">
                                    Complete todos los campos para crear el comunicado
                                </p>
                            </div>
                        </div>
                        <button onclick="closeComunicadoModal()" 
                                class="text-white hover:text-gray-200 focus:outline-none focus:text-gray-200 transition ease-in-out duration-150">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Form -->
                <form id="comunicadoForm" class="bg-white" enctype="multipart/form-data">
                    <div class="px-6 py-6 space-y-6 max-h-[70vh] overflow-y-auto">
                        
                        <!-- Información básica -->
                        <div class="bg-gradient-to-br from-gray-50 to-gray-100 rounded-xl p-5 border border-gray-200">
                            <h4 class="text-sm font-semibold text-gray-900 mb-4 flex items-center">
                                <svg class="w-5 h-5 mr-2 text-[#db0455]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                          d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Información Básica
                            </h4>
                            
                            <div class="grid grid-cols-1 lg:grid-cols-2 gap-5">
                                <!-- Título -->
                                <div class="lg:col-span-2">
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                                        Título del Comunicado <span class="text-red-500">*</span>
                                    </label>
                                    <div class="relative">
                                        <input type="text" 
                                               name="titulo"
                                               id="titulo"
                                               class="w-full pl-4 pr-10 py-3 rounded-xl border-2 border-gray-200 focus:border-[#db0455] focus:ring-4 focus:ring-[#db0455]/10 shadow-sm transition-all duration-200 placeholder-gray-400"
                                               placeholder="Ej: Comunicado Importante sobre Exámenes Finales" required>
                                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="text-red-600 text-sm mt-1" id="error-titulo"></div>
                                </div>

                                <!-- Categoría -->
                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                                        Categoría <span class="text-red-500">*</span>
                                    </label>
                                    <div class="relative">
                                        <select name="categoria_id" id="categoria_id" 
                                                class="w-full appearance-none pl-4 pr-10 py-3 rounded-xl border-2 border-gray-200 focus:border-[#db0455] focus:ring-4 focus:ring-[#db0455]/10 shadow-sm transition-all duration-200 bg-white" required>
                                            <option value="" disabled selected>Seleccione una categoría</option>
                                            @foreach($categorias ?? [] as $categoria)
                                                <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                                            @endforeach
                                        </select>
                                        <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="text-red-600 text-sm mt-1" id="error-categoria_id"></div>
                                </div>

                                <!-- Duración -->
                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                                        Duración (días) <span class="text-red-500">*</span>
                                    </label>
                                    <div class="relative">
                                        <input type="number" 
                                               name="duracion"
                                               id="duracion"
                                               min="1"
                                               max="365"
                                               class="w-full pl-4 pr-10 py-3 rounded-xl border-2 border-gray-200 focus:border-[#db0455] focus:ring-4 focus:ring-[#db0455]/10 shadow-sm transition-all duration-200 placeholder-gray-400"
                                               placeholder="Ej: 30" required>
                                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="text-red-600 text-sm mt-1" id="error-duracion"></div>
                                </div>

                                <!-- Contenido -->
                                <div class="lg:col-span-2">
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                                        Contenido del Comunicado <span class="text-red-500">*</span>
                                    </label>
                                    
                                    <!-- Editor Toolbar -->
                                    <div class="border-2 border-gray-200 rounded-t-xl bg-gray-50 px-3 py-2 flex flex-wrap gap-1 items-center">
                                        <div class="flex items-center gap-1 pr-2 border-r border-gray-300">
                                            <button type="button" onclick="formatText('bold')" class="p-2 hover:bg-gray-200 rounded transition-colors" title="Negrita">
                                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                                    <path d="M15.6 10.79c.97-.67 1.65-1.77 1.65-2.79 0-2.26-1.75-4-4-4H7v14h7.04c2.09 0 3.71-1.7 3.71-3.79 0-1.52-.86-2.82-2.15-3.42zM10 6.5h3c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5h-3v-3zm3.5 9H10v-3h3.5c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5z"/>
                                                </svg>
                                            </button>
                                            <button type="button" onclick="formatText('italic')" class="p-2 hover:bg-gray-200 rounded transition-colors" title="Cursiva">
                                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                                    <path d="M10 4v3h2.21l-3.42 8H6v3h8v-3h-2.21l3.42-8H18V4z"/>
                                                </svg>
                                            </button>
                                            <button type="button" onclick="formatText('underline')" class="p-2 hover:bg-gray-200 rounded transition-colors" title="Subrayado">
                                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                                    <path d="M12 17c3.31 0 6-2.69 6-6V3h-2.5v8c0 1.93-1.57 3.5-3.5 3.5S8.5 12.93 8.5 11V3H6v8c0 3.31 2.69 6 6 6zm-7 2v2h14v-2H5z"/>
                                                </svg>
                                            </button>
                                        </div>
                                        
                                        <div class="flex items-center gap-1 px-2 border-r border-gray-300">
                                            <button type="button" onclick="formatText('insertUnorderedList')" class="p-2 hover:bg-gray-200 rounded transition-colors" title="Lista">
                                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                                    <path d="M4 10.5c-.83 0-1.5.67-1.5 1.5s.67 1.5 1.5 1.5 1.5-.67 1.5-1.5-.67-1.5-1.5-1.5zm0-6c-.83 0-1.5.67-1.5 1.5S3.17 7.5 4 7.5 5.5 6.83 5.5 6 4.83 4.5 4 4.5zm0 12c-.83 0-1.5.68-1.5 1.5s.68 1.5 1.5 1.5 1.5-.68 1.5-1.5-.67-1.5-1.5-1.5zM7 19h14v-2H7v2zm0-6h14v-2H7v2zm0-8v2h14V5H7z"/>
                                                </svg>
                                            </button>
                                            <button type="button" onclick="formatText('insertOrderedList')" class="p-2 hover:bg-gray-200 rounded transition-colors" title="Lista numerada">
                                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                                    <path d="M2 17h2v.5H3v1h1v.5H2v1h3v-4H2v1zm1-9h1V4H2v1h1v3zm-1 3h1.8L2 13.1v.9h3v-1H3.2L5 10.9V10H2v1zm5-6v2h14V5H7zm0 14h14v-2H7v2zm0-6h14v-2H7v2z"/>
                                                </svg>
                                            </button>
                                        </div>
                                        
                                        <div class="flex items-center gap-1 px-2 border-r border-gray-300">
                                            <button type="button" onclick="formatText('justifyLeft')" class="p-2 hover:bg-gray-200 rounded transition-colors" title="Alinear izquierda">
                                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                                    <path d="M15 15H3v2h12v-2zm0-8H3v2h12V7zM3 13h18v-2H3v2zm0 8h18v-2H3v2zM3 3v2h18V3H3z"/>
                                                </svg>
                                            </button>
                                            <button type="button" onclick="formatText('justifyCenter')" class="p-2 hover:bg-gray-200 rounded transition-colors" title="Centrar">
                                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                                    <path d="M7 15v2h10v-2H7zm-4 6h18v-2H3v2zm0-8h18v-2H3v2zm4-6v2h10V7H7zM3 3v2h18V3H3z"/>
                                                </svg>
                                            </button>
                                            <button type="button" onclick="formatText('justifyRight')" class="p-2 hover:bg-gray-200 rounded transition-colors" title="Alinear derecha">
                                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                                    <path d="M3 21h18v-2H3v2zm6-4h12v-2H9v2zm-6-4h18v-2H3v2zm6-4h12V7H9v2zM3 3v2h18V3H3z"/>
                                                </svg>
                                            </button>
                                        </div>
                                        
                                        <div class="flex items-center gap-1 px-2">
                                            <button type="button" onclick="insertLink()" class="p-2 hover:bg-gray-200 rounded transition-colors" title="Insertar enlace">
                                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                                    <path d="M3.9 12c0-1.71 1.39-3.1 3.1-3.1h4V7H7c-2.76 0-5 2.24-5 5s2.24 5 5 5h4v-1.9H7c-1.71 0-3.1-1.39-3.1-3.1zM8 13h8v-2H8v2zm9-6h-4v1.9h4c1.71 0 3.1 1.39 3.1 3.1s-1.39 3.1-3.1 3.1h-4V17h4c2.76 0 5-2.24 5-5s-2.24-5-5-5z"/>
                                                </svg>
                                            </button>
                                            <button type="button" onclick="formatText('removeFormat')" class="p-2 hover:bg-gray-200 rounded transition-colors" title="Limpiar formato">
                                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                                    <path d="M3.27 5L2 6.27l6.97 6.97L6.5 19h3l1.57-3.66L16.73 21 18 19.73 3.55 5.27 3.27 5zM6 5v.18L8.82 8h2.4l-.72 1.68 2.1 2.1L14.21 8H20V5H6z"/>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    
                                    <!-- Editor Content -->
                                    <div id="editor-content" 
                                         contenteditable="true"
                                         class="w-full min-h-[200px] px-4 py-3 rounded-b-xl border-2 border-t-0 border-gray-200 focus:border-[#db0455] focus:ring-4 focus:ring-[#db0455]/10 shadow-sm transition-all duration-200 bg-white"
                                         placeholder="Escriba el contenido del comunicado aquí..."></div>
                                    <input type="hidden" name="contenido" id="contenido">
                                    <div class="text-red-600 text-sm mt-1" id="error-contenido"></div>
                                    <p class="text-xs text-gray-500 mt-2">Use la barra de herramientas para dar formato al texto</p>
                                </div>
                            </div>
                        </div>

                        <!-- Imagen -->
                        <div class="bg-gradient-to-br from-gray-50 to-gray-100 rounded-xl p-5 border border-gray-200">
                            <h4 class="text-sm font-semibold text-gray-900 mb-4 flex items-center">
                                <svg class="w-5 h-5 mr-2 text-[#db0455]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                          d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                                Imagen del Comunicado
                            </h4>
                            
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">
                                    Seleccionar Imagen <span class="text-gray-400 font-normal">(Opcional)</span>
                                </label>
                                <div class="relative">
                                    <input type="file" name="imagen" id="imagen" accept="image/*"
                                           class="w-full px-4 py-3 border-2 border-dashed border-gray-300 rounded-xl hover:border-[#db0455] transition-colors duration-200 text-sm text-gray-600 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-gradient-to-r file:from-[#db0455] file:to-[#a00340] file:text-white hover:file:shadow-lg file:cursor-pointer">
                                    <div class="absolute inset-y-0 right-3 flex items-center pointer-events-none">
                                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="text-red-600 text-sm mt-1" id="error-imagen"></div>
                                <p class="text-xs text-gray-500 mt-2 flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    Formatos: JPG, PNG, GIF • Máximo 5MB
                                </p>
                            </div>
                        </div>

                        <!-- Configuración adicional -->
                        <div class="bg-gradient-to-br from-gray-50 to-gray-100 rounded-xl p-5 border border-gray-200">
                            <h4 class="text-sm font-semibold text-gray-900 mb-4 flex items-center">
                                <svg class="w-5 h-5 mr-2 text-[#db0455]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                          d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                Estado del Comunicado
                            </h4>
                            
                            <div class="flex items-center">
                                <input type="checkbox" name="estado" id="estado" value="1" checked
                                       class="w-5 h-5 rounded-md border-2 border-green-400 text-green-500 shadow-sm focus:border-green-500 focus:ring focus:ring-green-200 focus:ring-opacity-50">
                                <label for="estado" class="ml-3 block text-sm font-semibold text-gray-700 cursor-pointer select-none">
                                    ✅ Activar comunicado inmediatamente
                                </label>
                            </div>
                            <p class="text-xs text-gray-600 mt-2 ml-8">
                                El comunicado será visible en el portal al momento de guardarlo
                            </p>
                        </div>
                    </div>

                    <!-- Footer -->
                    <div class="bg-gray-50 px-6 py-4 flex justify-between items-center">
                        <div class="text-sm text-gray-500">
                            Los campos marcados con * son obligatorios
                        </div>
                        <div class="flex space-x-3">
                            <button type="button" onclick="closeComunicadoModal()"
                                    class="px-4 py-2 border border-gray-300 rounded-lg text-sm font-medium text-gray-700 hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800 transition duration-150 ease-in-out">
                                Cancelar
                            </button>
                            <button type="submit" id="submitBtn"
                                    class="inline-flex items-center px-4 py-2 border border-transparent rounded-lg text-sm font-medium text-white bg-gradient-to-r from-[#db0455] to-[#a00340] hover:shadow-lg transform hover:scale-[1.02] transition-all duration-200 focus:outline-none focus:shadow-outline disabled:opacity-50">
                                <span id="submitText" class="inline-flex items-center">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    Crear Comunicado
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
</div>

@push('scripts')
<script>
// Toggle estado function
function toggleEstado(comunicadoId, estadoActual) {
    fetch(`/admin/comunicados/${comunicadoId}/estado`, {
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
            toastr.error('Error al cambiar el estado');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        toastr.error('Error al procesar la solicitud');
    });
}

// Modal functions
function openComunicadoModal() {
    document.getElementById('comunicadoModal').classList.remove('hidden');
    document.getElementById('comunicadoForm').reset();
    document.getElementById('editor-content').innerHTML = '';
    document.getElementById('estado').checked = true;
    clearErrors();
}

function closeComunicadoModal() {
    document.getElementById('comunicadoModal').classList.add('hidden');
}

// Clear validation errors
function clearErrors() {
    document.querySelectorAll('[id^="error-"]').forEach(el => {
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

// Rich Text Editor Functions
function formatText(command, value = null) {
    document.execCommand(command, false, value);
    document.getElementById('editor-content').focus();
}

function insertLink() {
    // Obtener el texto seleccionado
    const selection = window.getSelection();
    const selectedText = selection.toString().trim();
    
    if (selectedText) {
        // Si hay texto seleccionado, solo pedir la URL
        const url = prompt('Ingrese la URL para el texto seleccionado:', 'https://');
        if (url && url !== 'https://') {
            formatText('createLink', url);
        }
    } else {
        // Si no hay texto seleccionado, crear un diálogo personalizado
        const modalHtml = `
            <div id="linkModal" class="fixed inset-0 z-[60] flex items-center justify-center p-4">
                <div class="bg-white rounded-xl shadow-2xl max-w-md w-full p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Insertar Enlace</h3>
                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Texto del enlace</label>
                            <input type="text" id="linkTextInput" 
                                   class="w-full px-3 py-2 rounded-lg border-2 border-gray-200 focus:border-[#db0455] focus:ring-2 focus:ring-[#db0455]/10"
                                   placeholder="Ej: Haz clic aquí" autofocus>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">URL del enlace</label>
                            <input type="url" id="linkUrlInput" 
                                   class="w-full px-3 py-2 rounded-lg border-2 border-gray-200 focus:border-[#db0455] focus:ring-2 focus:ring-[#db0455]/10"
                                   placeholder="https://ejemplo.com" value="https://">
                        </div>
                    </div>
                    <div class="flex justify-end gap-3 mt-6">
                        <button onclick="closeLinkModal()" 
                                class="px-4 py-2 text-gray-700 bg-gray-100 hover:bg-gray-200 rounded-lg transition-colors">
                            Cancelar
                        </button>
                        <button onclick="insertLinkFromModal()" 
                                class="px-4 py-2 bg-gradient-to-r from-[#db0455] to-[#a00340] text-white rounded-lg hover:shadow-lg transition-all">
                            Insertar
                        </button>
                    </div>
                </div>
            </div>
        `;
        
        // Crear el modal
        const modalDiv = document.createElement('div');
        modalDiv.innerHTML = modalHtml;
        document.body.appendChild(modalDiv);
        
        // Debug
        console.log('Modal de enlace creado');
        
        // Focus en el primer input
        setTimeout(() => {
            document.getElementById('linkTextInput').focus();
        }, 100);
        
        // Agregar evento para Enter
        document.getElementById('linkTextInput').addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                document.getElementById('linkUrlInput').focus();
            }
        });
        
        document.getElementById('linkUrlInput').addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                insertLinkFromModal();
            }
        });
    }
}

function closeLinkModal() {
    const modal = document.getElementById('linkModal');
    if (modal) {
        modal.parentElement.remove();
    }
}

function insertLinkFromModal() {
    const linkText = document.getElementById('linkTextInput').value.trim();
    const linkUrl = document.getElementById('linkUrlInput').value.trim();
    
    console.log('Insertando enlace:', linkText, linkUrl); // Debug
    
    if (!linkText || !linkUrl || linkUrl === 'https://') {
        alert('Por favor, complete tanto el texto como la URL del enlace.');
        return;
    }
    
    const editor = document.getElementById('editor-content');
    
    // Limpiar placeholder si existe
    if (editor.textContent.trim() === 'Escriba el contenido del comunicado aquí...') {
        editor.innerHTML = '';
        editor.classList.remove('text-gray-400');
    }
    
    // Cerrar modal
    closeLinkModal();
    
    // Enfocar el editor
    editor.focus();
    
    // Crear el enlace
    const link = `<a href="${linkUrl}" target="_blank" class="text-blue-600 underline hover:text-blue-800">${linkText}</a>&nbsp;`;
    
    // Insertar usando execCommand (más compatible)
    try {
        document.execCommand('insertHTML', false, link);
        console.log('Enlace insertado con execCommand'); // Debug
    } catch (e) {
        // Fallback: insertar directamente
        console.log('Fallback: insertando directamente'); // Debug
        const currentContent = editor.innerHTML;
        editor.innerHTML = currentContent + link;
    }
}

// Add placeholder text behavior for contenteditable
document.addEventListener('DOMContentLoaded', function() {
    const editor = document.getElementById('editor-content');
    const placeholderText = 'Escriba el contenido del comunicado aquí...';
    
    // Show placeholder when empty
    editor.addEventListener('focus', function() {
        if (this.textContent.trim() === placeholderText) {
            this.textContent = '';
            this.classList.remove('text-gray-400');
        }
    });
    
    editor.addEventListener('blur', function() {
        if (this.textContent.trim() === '') {
            this.textContent = placeholderText;
            this.classList.add('text-gray-400');
        }
    });
    
    // Initialize placeholder
    if (editor.textContent.trim() === '') {
        editor.textContent = placeholderText;
        editor.classList.add('text-gray-400');
    }
    
    // Prevent placeholder from being submitted
    editor.addEventListener('input', function() {
        if (this.textContent.trim() === placeholderText) {
            this.classList.add('text-gray-400');
        } else {
            this.classList.remove('text-gray-400');
        }
    });

    // Form submission
    const form = document.getElementById('comunicadoForm');
    if (form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get editor content
            const editorContent = document.getElementById('editor-content');
            let content = editorContent.innerHTML;
            
            // Remove placeholder if present
            if (editorContent.textContent.trim() === placeholderText) {
                content = '';
            }
            
            // Set content to hidden input
            document.getElementById('contenido').value = content;
            
            // Show loading state
            const submitBtn = document.getElementById('submitBtn');
            const submitText = document.getElementById('submitText');
            const loadingText = document.getElementById('loadingText');
            
            submitBtn.disabled = true;
            submitText.classList.add('hidden');
            loadingText.classList.remove('hidden');
            
            clearErrors();
            
            const formData = new FormData(form);
            
            fetch('/admin/comunicados', {
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
                    toastr.success(data.message || 'Comunicado creado exitosamente');
                    closeComunicadoModal();
                    setTimeout(() => {
                        window.location.reload();
                    }, 1500);
                } else if (data.errors) {
                    toastr.error('Por favor, corrija los errores en el formulario');
                    showErrors(data.errors);
                    // Reset button state
                    submitBtn.disabled = false;
                    submitText.classList.remove('hidden');
                    loadingText.classList.add('hidden');
                } else {
                    toastr.error(data.message || 'Error al crear el comunicado');
                    // Reset button state
                    submitBtn.disabled = false;
                    submitText.classList.remove('hidden');
                    loadingText.classList.add('hidden');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                toastr.error('Error al procesar la solicitud');
                // Reset button state
                submitBtn.disabled = false;
                submitText.classList.remove('hidden');
                loadingText.classList.add('hidden');
            });
        });
    }
    
    // Add keyboard shortcuts for formatting
    document.getElementById('editor-content').addEventListener('keydown', function(e) {
        if (e.ctrlKey || e.metaKey) {
            switch(e.key) {
                case 'b':
                    e.preventDefault();
                    formatText('bold');
                    break;
                case 'i':
                    e.preventDefault();
                    formatText('italic');
                    break;
                case 'u':
                    e.preventDefault();
                    formatText('underline');
                    break;
            }
        }
    });
});

// Close modal on ESC key
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        const modal = document.getElementById('comunicadoModal');
        if (!modal.classList.contains('hidden')) {
            closeComunicadoModal();
        }
    }
});
</script>
@endpush
@endsection