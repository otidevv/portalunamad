@extends('admin.layouts.app')

@section('content')
<div class="p-6">
    <!-- Header -->
    <div class="flex justify-between items-center mb-6">
        <div>
            <h1 class="text-2xl font-bold text-gray-800">Detalle del Anuncio</h1>
            <p class="text-gray-600 text-sm mt-1">Vista completa del anuncio #{{ $anuncio->id }}</p>
        </div>
        <div class="flex space-x-3">
            <a href="{{ route('admin.anuncios.edit', $anuncio) }}" 
               class="flex items-center space-x-2 px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                          d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                </svg>
                <span>Editar</span>
            </a>
            <a href="{{ route('admin.anuncios.index') }}" 
               class="flex items-center space-x-2 px-4 py-2 bg-gray-600 text-white rounded-lg hover:bg-gray-700 transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                          d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                <span>Volver</span>
            </a>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Main Content -->
        <div class="lg:col-span-2 space-y-6">
            <!-- Basic Info Card -->
            <div class="bg-white rounded-lg shadow-sm p-6">
                <h2 class="text-xl font-bold text-gray-800 mb-4">{{ $anuncio->titulo }}</h2>
                
                @if($anuncio->imagen_principal)
                    <img src="{{ asset('storage/' . $anuncio->imagen_principal) }}" 
                         alt="{{ $anuncio->titulo }}"
                         class="w-full rounded-lg mb-4">
                @endif
                
                @if($anuncio->descripcion)
                    <div class="prose max-w-none">
                        <p class="text-gray-700">{{ $anuncio->descripcion }}</p>
                    </div>
                @else
                    <p class="text-gray-500 italic">Sin descripción</p>
                @endif
            </div>

            <!-- Enlaces Relacionados -->
            @if($anuncio->enlaces && count($anuncio->enlaces) > 0)
                <div class="bg-white rounded-lg shadow-sm p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4 flex items-center">
                        <svg class="w-5 h-5 mr-2 text-[#db0455]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                  d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path>
                        </svg>
                        Enlaces Relacionados
                    </h3>
                    <div class="space-y-3">
                        @foreach($anuncio->enlaces as $enlace)
                            <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors">
                                <div class="flex-1">
                                    <h4 class="font-medium text-gray-800">{{ $enlace['titulo'] ?? 'Sin título' }}</h4>
                                    <a href="{{ $enlace['url'] }}" target="_blank" 
                                       class="text-blue-600 hover:text-blue-800 text-sm">
                                        {{ $enlace['url'] }}
                                    </a>
                                </div>
                                <a href="{{ $enlace['url'] }}" target="_blank" 
                                   class="ml-4 p-2 text-gray-600 hover:text-gray-800">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                              d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                    </svg>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>

        <!-- Sidebar -->
        <div class="space-y-6">
            <!-- Status Card -->
            <div class="bg-white rounded-lg shadow-sm p-6">
                <h3 class="text-lg font-semibold text-gray-800 mb-4">Estado y Configuración</h3>
                
                <div class="space-y-3">
                    <!-- Estado -->
                    <div>
                        <span class="text-sm text-gray-600">Estado:</span>
                        @php
                            $estadoColors = [
                                'publicado' => 'bg-green-100 text-green-800',
                                'borrador' => 'bg-gray-100 text-gray-800',
                                'archivado' => 'bg-red-100 text-red-800',
                            ];
                        @endphp
                        <span class="ml-2 px-2 py-1 text-xs font-medium rounded-full {{ $estadoColors[$anuncio->estado] }}">
                            {{ ucfirst($anuncio->estado) }}
                        </span>
                    </div>

                    <!-- Categoría -->
                    <div>
                        <span class="text-sm text-gray-600">Categoría:</span>
                        @php
                            $categoriaColors = [
                                'noticia' => 'bg-blue-100 text-blue-800',
                                'evento' => 'bg-purple-100 text-purple-800',
                                'comunicado' => 'bg-yellow-100 text-yellow-800',
                                'convocatoria' => 'bg-green-100 text-green-800',
                                'otro' => 'bg-gray-100 text-gray-800',
                            ];
                        @endphp
                        <span class="ml-2 px-2 py-1 text-xs font-medium rounded-full {{ $categoriaColors[$anuncio->categoria] }}">
                            {{ ucfirst($anuncio->categoria) }}
                        </span>
                    </div>

                    <!-- Destacado -->
                    <div class="flex items-center">
                        <span class="text-sm text-gray-600">Destacado:</span>
                        @if($anuncio->destacado)
                            <svg class="w-5 h-5 text-yellow-500 ml-2" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                        @else
                            <span class="ml-2 text-gray-500">No</span>
                        @endif
                    </div>

                    <!-- Vistas -->
                    <div class="flex items-center">
                        <span class="text-sm text-gray-600">Vistas:</span>
                        <span class="ml-2 font-semibold">{{ number_format($anuncio->vistas) }}</span>
                    </div>
                </div>
            </div>

            <!-- Dates Card -->
            <div class="bg-white rounded-lg shadow-sm p-6">
                <h3 class="text-lg font-semibold text-gray-800 mb-4">Fechas</h3>
                
                <div class="space-y-3">
                    <div>
                        <span class="text-sm text-gray-600">Creado:</span>
                        <p class="font-medium">{{ $anuncio->created_at->format('d/m/Y H:i') }}</p>
                    </div>
                    
                    @if($anuncio->fecha_publicacion)
                        <div>
                            <span class="text-sm text-gray-600">Publicación:</span>
                            <p class="font-medium">{{ $anuncio->fecha_publicacion->format('d/m/Y') }}</p>
                        </div>
                    @endif
                    
                    @if($anuncio->fecha_expiracion)
                        <div>
                            <span class="text-sm text-gray-600">Expiración:</span>
                            <p class="font-medium">{{ $anuncio->fecha_expiracion->format('d/m/Y') }}</p>
                        </div>
                    @endif
                </div>
            </div>

            <!-- Author Card -->
            <div class="bg-white rounded-lg shadow-sm p-6">
                <h3 class="text-lg font-semibold text-gray-800 mb-4">Autor</h3>
                <p class="text-gray-700">{{ $anuncio->user->name ?? 'Usuario desconocido' }}</p>
                <p class="text-sm text-gray-500">{{ $anuncio->user->email ?? '' }}</p>
            </div>
        </div>
    </div>
</div>
@endsection