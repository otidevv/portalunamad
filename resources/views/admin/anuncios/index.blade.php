@extends('admin.layouts.app')

@section('title', 'Anuncios')
@section('header', 'Gestión de Anuncios')

@section('content')
<div class="p-6">
    <!-- Header -->
    <div class="flex justify-between items-center mb-6">
        <div>
            <h2 class="text-2xl font-bold text-gray-800">Gestión de Anuncios</h2>
            <p class="text-gray-600 text-sm mt-1">Administra las publicaciones y anuncios del portal</p>
        </div>
        <button onclick="openAnuncioModal()" 
                class="flex items-center space-x-2 px-4 py-2 bg-gradient-to-r from-[#db0455] to-[#a00340] text-white rounded-lg hover:shadow-lg transform hover:scale-[1.02] transition-all duration-200">
            <svg aria-hidden="true" focusable="false" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
            </svg>
            <span>Nuevo Anuncio</span>
        </button>
    </div>

    <!-- Filtros -->
    <div class="bg-white rounded-lg shadow-sm p-4 mb-6">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
            <select id="filtro-categoria" aria-label="Filtrar por categoría" class="rounded-lg border-gray-300 focus:border-[#db0455] focus:ring-[#db0455]">
                <option value="">Todas las categorías</option>
                <option value="noticia">Noticias</option>
                <option value="evento">Eventos</option>
                <option value="comunicado">Comunicados</option>
                <option value="convocatoria">Convocatorias</option>
                <option value="otro">Otros</option>
            </select>
            
            <select id="filtro-estado" aria-label="Filtrar por estado" class="rounded-lg border-gray-300 focus:border-[#db0455] focus:ring-[#db0455]">
                <option value="">Todos los estados</option>
                <option value="publicado">Publicado</option>
                <option value="borrador">Borrador</option>
                <option value="archivado">Archivado</option>
            </select>
            
            <select id="filtro-destacado" aria-label="Filtrar por destacado" class="rounded-lg border-gray-300 focus:border-[#db0455] focus:ring-[#db0455]">
                <option value="">Todos</option>
                <option value="1">Destacados</option>
                <option value="0">No destacados</option>
            </select>
            
            <button onclick="aplicarFiltros()" class="px-4 py-2 bg-[#db0455] text-white rounded-lg hover:bg-[#a00340] transition-colors">
                Filtrar
            </button>
        </div>
    </div>

    <!-- Mensajes de éxito/error -->
    @if(session('success'))
        <div role="status" class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded-lg">
            <div class="flex items-center">
                <svg aria-hidden="true" focusable="false" class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                </svg>
                {{ session('success') }}
            </div>
        </div>
    @endif

    <!-- Tabla de anuncios -->
    <div class="bg-white rounded-lg shadow-sm overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full">
                    <caption class="sr-only">Listado de anuncios</caption>
                <thead class="bg-gray-50 border-b border-gray-200">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Imagen
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Título / Detalles
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Categoría
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Estado
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Destacado
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Vistas
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Acciones
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse($anuncios as $anuncio)
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-4 whitespace-nowrap">
                                @if($anuncio->imagen_principal)
                                    <img src="{{ $anuncio->imagen_principal_url }}"
                                         alt=""
                                         class="w-16 h-16 object-cover rounded-lg">
                                @else
                                    <div class="w-16 h-16 bg-gray-200 rounded-lg flex items-center justify-center">
                                        <svg aria-hidden="true" focusable="false" class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                                  d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                        </svg>
                                    </div>
                                @endif
                            </td>
                            <td class="px-6 py-4">
                                <div>
                                    <div class="text-sm font-medium text-gray-900">
                                        {{ Str::limit($anuncio->titulo, 50) }}
                                    </div>
                                    <div class="text-xs text-gray-500 mt-1">
                                        Por: {{ $anuncio->user->name }} • {{ $anuncio->created_at->format('d/m/Y H:i') }}
                                    </div>
                                    @if($anuncio->fecha_publicacion || $anuncio->fecha_expiracion)
                                        <div class="text-xs text-gray-500 mt-1">
                                            @if($anuncio->fecha_publicacion)
                                                <span class="inline-flex items-center">
                                                    <svg aria-hidden="true" focusable="false" class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                                              d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                                    </svg>
                                                    Publicar: {{ $anuncio->fecha_publicacion->format('d/m/Y') }}
                                                </span>
                                            @endif
                                            @if($anuncio->fecha_expiracion)
                                                <span class="inline-flex items-center ml-2">
                                                    <svg aria-hidden="true" focusable="false" class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                                              d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                    </svg>
                                                    Expira: {{ $anuncio->fecha_expiracion->format('d/m/Y') }}
                                                </span>
                                            @endif
                                        </div>
                                    @endif
                                    @if($anuncio->enlaces && count($anuncio->enlaces) > 0)
                                        <div class="text-xs text-gray-500 mt-1">
                                            <span class="inline-flex items-center">
                                                <svg aria-hidden="true" focusable="false" class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                                          d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path>
                                                </svg>
                                                {{ count($anuncio->enlaces) }} enlace{{ count($anuncio->enlaces) > 1 ? 's' : '' }}
                                            </span>
                                        </div>
                                    @endif
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                @php
                                    $categoriaColors = [
                                        'noticia' => 'bg-blue-100 text-blue-800',
                                        'evento' => 'bg-purple-100 text-purple-800',
                                        'comunicado' => 'bg-yellow-100 text-yellow-800',
                                        'convocatoria' => 'bg-green-100 text-green-800',
                                        'otro' => 'bg-gray-100 text-gray-800',
                                    ];
                                    $categoriaLabels = [
                                        'noticia' => 'Noticia',
                                        'evento' => 'Evento',
                                        'comunicado' => 'Comunicado',
                                        'convocatoria' => 'Convocatoria',
                                        'otro' => 'Otro',
                                    ];
                                @endphp
                                <span class="px-2 py-1 text-xs font-medium rounded-full {{ $categoriaColors[$anuncio->categoria] }}">
                                    {{ $categoriaLabels[$anuncio->categoria] }}
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                @php
                                    $estadoColors = [
                                        'publicado' => 'bg-green-100 text-green-800',
                                        'borrador' => 'bg-gray-100 text-gray-800',
                                        'archivado' => 'bg-red-100 text-red-800',
                                    ];
                                    $estadoLabels = [
                                        'publicado' => 'Publicado',
                                        'borrador' => 'Borrador',
                                        'archivado' => 'Archivado',
                                    ];
                                @endphp
                                <span class="px-2 py-1 text-xs font-medium rounded-full {{ $estadoColors[$anuncio->estado] }}">
                                    {{ $estadoLabels[$anuncio->estado] }}
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                @if($anuncio->destacado)
                                    <svg aria-hidden="true" focusable="false" class="w-6 h-6 text-yellow-500 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                    <span class="sr-only">Destacado</span>
                                @else
                                    <svg aria-hidden="true" focusable="false" class="w-6 h-6 text-gray-400 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                              d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                    </svg>
                                    <span class="sr-only">No destacado</span>
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                <div class="flex items-center">
                                    <svg aria-hidden="true" focusable="false" class="w-4 h-4 mr-1 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                              d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                              d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                    </svg>
                                    {{ number_format($anuncio->vistas) }}
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <div class="flex items-center space-x-2">
                                    <a href="{{ route('admin.anuncios.show', $anuncio) }}" 
                                       class="text-gray-600 hover:text-gray-900" title="Ver" aria-label="Ver anuncio {{ $anuncio->titulo }}">
                                        <svg aria-hidden="true" focusable="false" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                                  d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                                  d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                        </svg>
                                    </a>
                                    <button onclick="openAnuncioModal({{ $anuncio->id }})"
                                            class="text-blue-600 hover:text-blue-900" title="Editar" aria-label="Editar anuncio {{ $anuncio->titulo }}">
                                        <svg aria-hidden="true" focusable="false" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                        </svg>
                                    </button>
                                    <form action="{{ route('admin.anuncios.destroy', $anuncio) }}" 
                                          method="POST" 
                                          class="inline-block"
                                          onsubmit="return confirm('¿Está seguro de eliminar este anuncio?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-900" title="Eliminar" aria-label="Eliminar anuncio {{ $anuncio->titulo }}">
                                            <svg aria-hidden="true" focusable="false" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
                            <td colspan="7" class="px-6 py-12 text-center text-gray-500">
                                <svg aria-hidden="true" focusable="false" class="w-12 h-12 mx-auto mb-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                          d="M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                                No hay anuncios registrados
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        
        <!-- Paginación -->
        @if($anuncios->hasPages())
            <div class="px-6 py-4 border-t border-gray-200">
                {{ $anuncios->links() }}
            </div>
        @endif
    </div>

    <!-- Modal para crear/editar anuncio -->
    <div id="anuncioModal" class="fixed inset-0 z-50 overflow-y-auto hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <!-- Modal panel (sin overlay de fondo) -->
            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-2xl transform transition-all sm:my-8 sm:align-middle sm:max-w-4xl sm:w-full">
                <!-- Header -->
                <div class="bg-gradient-to-r from-[#db0455] to-[#a00340] px-6 py-4">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <svg aria-hidden="true" focusable="false" class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                            </div>
                            <div class="ml-3">
                                <h3 class="text-lg leading-6 font-medium text-white" id="modal-title">
                                    Crear Nuevo Anuncio
                                </h3>
                                <p class="text-sm text-gray-100">
                                    Complete todos los campos para crear el anuncio
                                </p>
                            </div>
                        </div>
                        <button onclick="closeAnuncioModal()"
                                aria-label="Cerrar"
                                class="text-white hover:text-gray-200 focus:outline-none focus:text-gray-200 transition ease-in-out duration-150">
                            <svg aria-hidden="true" focusable="false" class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Form -->
                <form id="anuncioForm" class="bg-white" enctype="multipart/form-data">
                    <div class="px-6 py-6 space-y-6 max-h-[70vh] overflow-y-auto">
                        
                        <!-- Información básica -->
                        <div class="bg-gradient-to-br from-gray-50 to-gray-100 rounded-xl p-5 border border-gray-200">
                            <h4 class="text-sm font-semibold text-gray-900 mb-4 flex items-center">
                                <svg aria-hidden="true" focusable="false" class="w-5 h-5 mr-2 text-[#db0455]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                          d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Información Básica
                            </h4>
                            
                            <div class="grid grid-cols-1 lg:grid-cols-2 gap-5">
                                <!-- Título -->
                                <div class="lg:col-span-2">
                                    <label for="titulo" class="block text-sm font-semibold text-gray-700 mb-2">
                                        Título del Anuncio <span class="text-red-500" aria-hidden="true">*</span>
                                    </label>
                                    <div class="relative">
                                        <input type="text"
                                               name="titulo"
                                               id="titulo"
                                               aria-describedby="error-titulo"
                                               class="w-full pl-4 pr-10 py-3 rounded-xl border-2 border-gray-200 focus:border-[#db0455] focus:ring-4 focus:ring-[#db0455]/10 shadow-sm transition-all duration-200 placeholder-gray-400"
                                               placeholder="Ej: Convocatoria Docente 2025 - Facultad de Ingeniería" required aria-required="true">
                                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                            <svg aria-hidden="true" focusable="false" class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="text-red-600 text-sm mt-1" id="error-titulo" aria-live="polite"></div>
                                </div>

                                <!-- Categoría -->
                                <div>
                                    <label for="categoria" class="block text-sm font-semibold text-gray-700 mb-2">
                                        Categoría <span class="text-red-500" aria-hidden="true">*</span>
                                    </label>
                                    <div class="relative">
                                        <select name="categoria" id="categoria" aria-describedby="error-categoria" 
                                                class="w-full appearance-none pl-4 pr-10 py-3 rounded-xl border-2 border-gray-200 focus:border-[#db0455] focus:ring-4 focus:ring-[#db0455]/10 shadow-sm transition-all duration-200 bg-white" required aria-required="true">
                                            <option value="" disabled selected>Seleccione una categoría</option>
                                            <option value="noticia">Noticia</option>
                                            <option value="evento">Evento</option>
                                            <option value="comunicado">Comunicado</option>
                                            <option value="convocatoria">Convocatoria</option>
                                            <option value="otro">Otro</option>
                                        </select>
                                        <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                            <svg aria-hidden="true" focusable="false" class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="text-red-600 text-sm mt-1" id="error-categoria" aria-live="polite"></div>
                                </div>

                                <!-- Estado -->
                                <div>
                                    <label for="estado" class="block text-sm font-semibold text-gray-700 mb-2">
                                        Estado <span class="text-red-500" aria-hidden="true">*</span>
                                    </label>
                                    <div class="relative">
                                        <select name="estado" id="estado" aria-describedby="error-estado" 
                                                class="w-full appearance-none pl-4 pr-10 py-3 rounded-xl border-2 border-gray-200 focus:border-[#db0455] focus:ring-4 focus:ring-[#db0455]/10 shadow-sm transition-all duration-200 bg-white" required aria-required="true">
                                            <option value="publicado" selected>Publicado</option>
                                            <option value="borrador">Borrador</option>
                                            <option value="archivado">Archivado</option>
                                        </select>
                                        <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                            <svg aria-hidden="true" focusable="false" class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="text-red-600 text-sm mt-1" id="error-estado" aria-live="polite"></div>
                                </div>

                                <!-- Descripción -->
                                <div class="lg:col-span-2">
                                    <label for="descripcion" class="block text-sm font-semibold text-gray-700 mb-2">
                                        Descripción <span class="text-gray-400 font-normal">(Opcional)</span>
                                    </label>
                                    <div class="relative">
                                        <textarea name="descripcion" id="descripcion" rows="4" maxlength="500" aria-describedby="descripcion-help error-descripcion" 
                                                  class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-[#db0455] focus:ring-4 focus:ring-[#db0455]/10 shadow-sm transition-all duration-200 placeholder-gray-400 resize-none"
                                                  placeholder="Escriba una descripción detallada del anuncio..."></textarea>
                                        <div class="absolute bottom-3 right-3">
                                            <span id="descripcion-help" class="text-xs text-gray-400">Máx. 500 caracteres</span>
                                        </div>
                                    </div>
                                    <div class="text-red-600 text-sm mt-1" id="error-descripcion" aria-live="polite"></div>
                                </div>
                            </div>
                        </div>

                        <!-- Imagen Principal -->
                        <div class="bg-gradient-to-br from-gray-50 to-gray-100 rounded-xl p-5 border border-gray-200">
                            <h4 class="text-sm font-semibold text-gray-900 mb-4 flex items-center">
                                <svg aria-hidden="true" focusable="false" class="w-5 h-5 mr-2 text-[#db0455]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                          d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                                Imagen Principal
                            </h4>
                            
                            <div>
                                <label for="imagen_principal" class="block text-sm font-semibold text-gray-700 mb-2">
                                    Seleccionar Imagen <span class="text-gray-400 font-normal">(Opcional)</span>
                                </label>
                                <div class="relative">
                                    <input type="file" name="imagen_principal" id="imagen_principal" accept="image/*" aria-describedby="imagen_principal-help error-imagen_principal"
                                           class="w-full px-4 py-3 border-2 border-dashed border-gray-300 rounded-xl hover:border-[#db0455] transition-colors duration-200 text-sm text-gray-600 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-gradient-to-r file:from-[#db0455] file:to-[#a00340] file:text-white hover:file:shadow-lg file:cursor-pointer">
                                    <div class="absolute inset-y-0 right-3 flex items-center pointer-events-none">
                                        <svg aria-hidden="true" focusable="false" class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="text-red-600 text-sm mt-1" id="error-imagen_principal" aria-live="polite"></div>
                                <p id="imagen_principal-help" class="text-xs text-gray-500 mt-2 flex items-center">
                                    <svg aria-hidden="true" focusable="false" class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    Formatos: JPG, PNG, GIF • Máximo 5MB
                                </p>
                            </div>
                        </div>

                        <!-- Enlaces Relacionados -->
                        <div class="bg-gradient-to-br from-gray-50 to-gray-100 rounded-xl p-5 border border-gray-200">
                            <h4 class="text-sm font-semibold text-gray-900 mb-4 flex items-center">
                                <svg aria-hidden="true" focusable="false" class="w-5 h-5 mr-2 text-[#db0455]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                          d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path>
                                </svg>
                                Enlaces Relacionados
                            </h4>
                            
                            <div id="enlaces-container" class="space-y-3">
                                <div class="enlace-item">
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                                        <input type="text" name="enlaces[0][titulo]" aria-label="Título del enlace 1" 
                                               class="px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-[#db0455] focus:ring-4 focus:ring-[#db0455]/10 shadow-sm transition-all duration-200 placeholder-gray-400"
                                               placeholder="Título del enlace">
                                        <div class="flex gap-2">
                                            <input type="url" name="enlaces[0][url]" aria-label="URL del enlace 1" 
                                                   class="flex-1 px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-[#db0455] focus:ring-4 focus:ring-[#db0455]/10 shadow-sm transition-all duration-200 placeholder-gray-400"
                                                   placeholder="https://ejemplo.com">
                                            <button type="button" onclick="addEnlace()" aria-label="Agregar otro enlace" 
                                                    class="px-4 py-3 bg-gradient-to-r from-green-500 to-green-600 text-white rounded-xl hover:shadow-lg transform hover:scale-105 transition-all duration-200">
                                                <svg aria-hidden="true" focusable="false" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="text-xs text-gray-500 mt-3 flex items-center">
                                <svg aria-hidden="true" focusable="false" class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Añade enlaces a documentos PDF, sitios web o recursos relacionados
                            </p>
                        </div>

                        <!-- Configuración adicional -->
                        <div class="bg-gradient-to-br from-gray-50 to-gray-100 rounded-xl p-5 border border-gray-200">
                            <h4 class="text-sm font-semibold text-gray-900 mb-4 flex items-center">
                                <svg aria-hidden="true" focusable="false" class="w-5 h-5 mr-2 text-[#db0455]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                          d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                Configuración Adicional
                            </h4>
                            
                            <div class="grid grid-cols-1 lg:grid-cols-2 gap-5">
                                <!-- Fecha de publicación -->
                                <div>
                                    <label for="fecha_publicacion" class="block text-sm font-semibold text-gray-700 mb-2">
                                        <span aria-hidden="true">📅</span> Fecha de Publicación
                                    </label>
                                    <input type="datetime-local" name="fecha_publicacion" id="fecha_publicacion" aria-describedby="fecha_publicacion-help error-fecha_publicacion"
                                           class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-[#db0455] focus:ring-4 focus:ring-[#db0455]/10 shadow-sm transition-all duration-200">
                                    <div class="text-red-600 text-sm mt-1" id="error-fecha_publicacion" aria-live="polite"></div>
                                    <p id="fecha_publicacion-help" class="text-xs text-gray-500 mt-2 flex items-center">
                                        <svg aria-hidden="true" focusable="false" class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
                                        </svg>
                                        Dejar vacío para publicar inmediatamente
                                    </p>
                                </div>

                                <!-- Fecha de expiración -->
                                <div>
                                    <label for="fecha_expiracion" class="block text-sm font-semibold text-gray-700 mb-2">
                                        <span aria-hidden="true">⏰</span> Fecha de Expiración
                                    </label>
                                    <input type="datetime-local" name="fecha_expiracion" id="fecha_expiracion" aria-describedby="fecha_expiracion-help error-fecha_expiracion"
                                           class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-[#db0455] focus:ring-4 focus:ring-[#db0455]/10 shadow-sm transition-all duration-200">
                                    <div class="text-red-600 text-sm mt-1" id="error-fecha_expiracion" aria-live="polite"></div>
                                    <p id="fecha_expiracion-help" class="text-xs text-gray-500 mt-2 flex items-center">
                                        <svg aria-hidden="true" focusable="false" class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
                                        </svg>
                                        El anuncio se ocultará automáticamente
                                    </p>
                                </div>

                                <!-- Destacado -->
                                <div class="lg:col-span-2">
                                    <div class="bg-gradient-to-r from-yellow-50 to-orange-50 rounded-xl p-4 border-2 border-yellow-200">
                                        <div class="flex items-center">
                                            <input type="checkbox" name="destacado" id="destacado" value="1" checked
                                                   class="w-5 h-5 rounded-md border-2 border-yellow-400 text-yellow-500 shadow-sm focus:border-yellow-500 focus:ring focus:ring-yellow-200 focus:ring-opacity-50">
                                            <label for="destacado" class="ml-3 block text-sm font-semibold text-gray-700 cursor-pointer select-none">
                                                <span aria-hidden="true">⭐</span> Marcar como anuncio destacado
                                            </label>
                                        </div>
                                        <p class="text-xs text-gray-600 mt-2 ml-8 flex items-center">
                                            <svg aria-hidden="true" focusable="false" class="w-4 h-4 mr-1 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                            </svg>
                                            Los anuncios destacados aparecerán en la página principal con mayor visibilidad
                                        </p>
                                    </div>
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
                            <button type="button" onclick="closeAnuncioModal()"
                                    class="px-4 py-2 border border-gray-300 rounded-lg text-sm font-medium text-gray-700 hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800 transition duration-150 ease-in-out">
                                Cancelar
                            </button>
                            <button type="submit" id="submitBtn"
                                    class="inline-flex items-center px-4 py-2 border border-transparent rounded-lg text-sm font-medium text-white bg-gradient-to-r from-[#db0455] to-[#a00340] hover:shadow-lg transform hover:scale-[1.02] transition-all duration-200 focus:outline-none focus:shadow-outline disabled:opacity-50">
                                <span id="submitText">
                                    <svg aria-hidden="true" focusable="false" class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    Crear Anuncio
                                </span>
                                <span id="loadingText" role="status" class="hidden flex items-center">
                                    <svg aria-hidden="true" focusable="false" class="animate-spin -ml-1 mr-2 h-4 w-4 text-white" fill="none" viewBox="0 0 24 24">
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
// Modal state variables
let enlaceIndex = 0;
let currentAnuncioId = null;
let isEditMode = false;

function openAnuncioModal(anuncioId = null) {
    currentAnuncioId = anuncioId;
    isEditMode = anuncioId !== null;

    // Show modal
    document.getElementById('anuncioModal').classList.remove('hidden');

    // Update modal title and button text
    const modalTitle = document.getElementById('modal-title');
    const submitText = document.getElementById('submitText');
    const submitBtn = document.getElementById('submitBtn');

    if (isEditMode) {
        modalTitle.textContent = 'Editar Anuncio';
        modalTitle.nextElementSibling.textContent = 'Modifique los campos necesarios para actualizar el anuncio';
        submitText.innerHTML = `
            <svg aria-hidden="true" focusable="false" class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            Actualizar Anuncio
        `;
        // Load announcement data
        loadAnuncioData(anuncioId);
    } else {
        modalTitle.textContent = 'Crear Nuevo Anuncio';
        modalTitle.nextElementSibling.textContent = 'Complete todos los campos para crear el anuncio';
        submitText.innerHTML = `
            <svg aria-hidden="true" focusable="false" class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            Crear Anuncio
        `;
        // Reset form for create mode
        resetFormForCreate();
    }
}

function resetFormForCreate() {
    document.getElementById('anuncioForm').reset();
    // Reset enlaces to just one input
    enlaceIndex = 0;
    document.getElementById('enlaces-container').innerHTML = `
        <div class="enlace-item">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                <input type="text" name="enlaces[0][titulo]" aria-label="Título del enlace 1"
                       class="px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-[#db0455] focus:ring-4 focus:ring-[#db0455]/10 shadow-sm transition-all duration-200 placeholder-gray-400"
                       placeholder="Título del enlace">
                <div class="flex gap-2">
                    <input type="url" name="enlaces[0][url]" aria-label="URL del enlace 1"
                           class="flex-1 px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-[#db0455] focus:ring-4 focus:ring-[#db0455]/10 shadow-sm transition-all duration-200 placeholder-gray-400"
                           placeholder="https://ejemplo.com">
                    <button type="button" onclick="addEnlace()" aria-label="Agregar otro enlace"
                            class="px-4 py-3 bg-gradient-to-r from-green-500 to-green-600 text-white rounded-xl hover:shadow-lg transform hover:scale-105 transition-all duration-200">
                        <svg aria-hidden="true" focusable="false" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    `;
    clearErrors();
}

function closeAnuncioModal() {
    document.getElementById('anuncioModal').classList.add('hidden');
}

// Add new enlace input
function addEnlace() {
    enlaceIndex++;
    const container = document.getElementById('enlaces-container');
    const newEnlace = document.createElement('div');
    newEnlace.className = 'enlace-item';
    newEnlace.innerHTML = `
        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
            <input type="text" name="enlaces[${enlaceIndex}][titulo]" aria-label="Título del enlace ${enlaceIndex + 1}"
                   class="px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-[#db0455] focus:ring-4 focus:ring-[#db0455]/10 shadow-sm transition-all duration-200 placeholder-gray-400"
                   placeholder="Título del enlace">
            <div class="flex gap-2">
                <input type="url" name="enlaces[${enlaceIndex}][url]" aria-label="URL del enlace ${enlaceIndex + 1}" 
                       class="flex-1 px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-[#db0455] focus:ring-4 focus:ring-[#db0455]/10 shadow-sm transition-all duration-200 placeholder-gray-400"
                       placeholder="https://ejemplo.com">
                <button type="button" onclick="removeEnlace(this)" aria-label="Eliminar este enlace" 
                        class="px-4 py-3 bg-gradient-to-r from-red-500 to-red-600 text-white rounded-xl hover:shadow-lg transform hover:scale-105 transition-all duration-200">
                    <svg aria-hidden="true" focusable="false" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>
    `;
    container.appendChild(newEnlace);
    newEnlace.querySelector('input').focus();
}

// Remove enlace input
function removeEnlace(button) {
    const item = button.closest('.enlace-item');
    const previo = item.previousElementSibling;
    item.remove();
    const destino = previo ? previo.querySelector('input') : document.querySelector('#enlaces-container input');
    if (destino) destino.focus();
}

// Clear all validation errors
function clearErrors() {
    document.querySelectorAll('[id^="error-"]').forEach(el => {
        el.textContent = '';
    });
    document.querySelectorAll('#anuncioForm [aria-invalid="true"]').forEach(el => {
        el.removeAttribute('aria-invalid');
    });
}

// Show validation errors
function showErrors(errors) {
    clearErrors();
    let primero = null;
    for (const [field, messages] of Object.entries(errors)) {
        const errorElement = document.getElementById(`error-${field}`);
        if (errorElement) {
            errorElement.textContent = messages[0];
        }
        const control = document.getElementById(field) || document.querySelector(`#anuncioForm [name="${field}"]`);
        if (control) {
            control.setAttribute('aria-invalid', 'true');
            if (!primero) primero = control;
        }
    }
    if (primero) primero.focus();
}

// Load announcement data for editing
function loadAnuncioData(anuncioId) {
    fetch(`/admin/api/anuncios/${anuncioId}`, {
        method: 'GET',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
    })
    .then(response => response.json())
    .then(data => {
        if (data.data) {
            const anuncio = data.data;

            // Populate form fields
            document.getElementById('titulo').value = anuncio.titulo || '';
            document.getElementById('descripcion').value = anuncio.descripcion || '';
            document.getElementById('categoria').value = anuncio.categoria || '';
            document.getElementById('estado').value = anuncio.estado || '';
            document.getElementById('destacado').checked = anuncio.destacado || false;

            // Format dates for datetime-local inputs
            if (anuncio.fecha_publicacion) {
                const fechaPub = new Date(anuncio.fecha_publicacion);
                document.getElementById('fecha_publicacion').value = fechaPub.toISOString().slice(0, 16);
            }
            if (anuncio.fecha_expiracion) {
                const fechaExp = new Date(anuncio.fecha_expiracion);
                document.getElementById('fecha_expiracion').value = fechaExp.toISOString().slice(0, 16);
            }

            // Load enlaces
            loadEnlaces(anuncio.enlaces || []);
        }
    })
    .catch(error => {
        console.error('Error loading anuncio data:', error);
        toastr.error('Error al cargar los datos del anuncio');
    });
}

// Load enlaces into the form
function loadEnlaces(enlaces) {
    const container = document.getElementById('enlaces-container');
    container.innerHTML = '';
    enlaceIndex = 0;

    if (enlaces.length === 0) {
        // Add default empty enlace
        addDefaultEnlace();
    } else {
        enlaces.forEach((enlace, index) => {
            addEnlaceWithData(enlace.titulo, enlace.url, index === 0);
        });
        enlaceIndex = enlaces.length - 1;
    }
}

function addDefaultEnlace() {
    const container = document.getElementById('enlaces-container');
    const enlaceDiv = document.createElement('div');
    enlaceDiv.className = 'enlace-item';
    enlaceDiv.innerHTML = `
        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
            <input type="text" name="enlaces[0][titulo]" aria-label="Título del enlace 1"
                   class="px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-[#db0455] focus:ring-4 focus:ring-[#db0455]/10 shadow-sm transition-all duration-200 placeholder-gray-400"
                   placeholder="Título del enlace">
            <div class="flex gap-2">
                <input type="url" name="enlaces[0][url]" aria-label="URL del enlace 1"
                       class="flex-1 px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-[#db0455] focus:ring-4 focus:ring-[#db0455]/10 shadow-sm transition-all duration-200 placeholder-gray-400"
                       placeholder="https://ejemplo.com">
                <button type="button" onclick="addEnlace()" aria-label="Agregar otro enlace"
                        class="px-4 py-3 bg-gradient-to-r from-green-500 to-green-600 text-white rounded-xl hover:shadow-lg transform hover:scale-105 transition-all duration-200">
                    <svg aria-hidden="true" focusable="false" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                    </svg>
                </button>
            </div>
        </div>
    `;
    container.appendChild(enlaceDiv);
}

function addEnlaceWithData(titulo, url, isFirst) {
    const container = document.getElementById('enlaces-container');
    const enlaceDiv = document.createElement('div');
    enlaceDiv.className = 'enlace-item';

    const buttonHtml = isFirst ? `
        <button type="button" onclick="addEnlace()" aria-label="Agregar otro enlace"
                class="px-4 py-3 bg-gradient-to-r from-green-500 to-green-600 text-white rounded-xl hover:shadow-lg transform hover:scale-105 transition-all duration-200">
            <svg aria-hidden="true" focusable="false" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
            </svg>
        </button>
    ` : `
        <button type="button" onclick="removeEnlace(this)" aria-label="Eliminar este enlace"
                class="px-4 py-3 bg-gradient-to-r from-red-500 to-red-600 text-white rounded-xl hover:shadow-lg transform hover:scale-105 transition-all duration-200">
            <svg aria-hidden="true" focusable="false" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
    `;

    enlaceDiv.innerHTML = `
        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
            <input type="text" name="enlaces[${container.children.length}][titulo]" aria-label="Título del enlace ${container.children.length + 1}"
                   value="${titulo}"
                   class="px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-[#db0455] focus:ring-4 focus:ring-[#db0455]/10 shadow-sm transition-all duration-200 placeholder-gray-400"
                   placeholder="Título del enlace">
            <div class="flex gap-2">
                <input type="url" name="enlaces[${container.children.length}][url]" aria-label="URL del enlace ${container.children.length + 1}"
                       value="${url}"
                       class="flex-1 px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-[#db0455] focus:ring-4 focus:ring-[#db0455]/10 shadow-sm transition-all duration-200 placeholder-gray-400"
                       placeholder="https://ejemplo.com">
                ${buttonHtml}
            </div>
        </div>
    `;
    container.appendChild(enlaceDiv);
}

// Form submission
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('anuncioForm');
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
            let url = '/admin/api/anuncios';
            let method = 'POST';

            if (isEditMode && currentAnuncioId) {
                url = `/admin/api/anuncios/${currentAnuncioId}`;
                method = 'POST'; // We'll use POST with _method override
                formData.append('_method', 'PUT');
            }

            fetch(url, {
                method: method,
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    const message = isEditMode ? 'Anuncio actualizado exitosamente' : 'Anuncio creado exitosamente';
                    toastr.success(data.message || message);
                    closeAnuncioModal();
                    setTimeout(() => {
                        window.location.reload();
                    }, 1500);
                } else if (data.errors) {
                    toastr.error('Por favor, corrija los errores en el formulario');
                    showErrors(data.errors);
                    resetButtonState();
                } else {
                    const errorMessage = isEditMode ? 'Error al actualizar el anuncio' : 'Error al crear el anuncio';
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
});

// Apply filters
function aplicarFiltros() {
    const categoria = document.getElementById('filtro-categoria').value;
    const estado = document.getElementById('filtro-estado').value;
    const destacado = document.getElementById('filtro-destacado').value;
    
    let url = new URL(window.location.href);
    
    if (categoria) url.searchParams.set('categoria', categoria);
    else url.searchParams.delete('categoria');
    
    if (estado) url.searchParams.set('estado', estado);
    else url.searchParams.delete('estado');
    
    if (destacado) url.searchParams.set('destacado', destacado);
    else url.searchParams.delete('destacado');
    
    window.location.href = url.toString();
}
</script>
@endpush
@endsection