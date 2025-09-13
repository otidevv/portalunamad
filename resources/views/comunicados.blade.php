@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <!-- Breadcrumb -->
    <nav class="flex mb-8" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
            <li class="inline-flex items-center">
                <a href="{{ route('home') }}" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-[#db0455]">
                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                    </svg>
                    Inicio
                </a>
            </li>
            <li aria-current="page">
                <div class="flex items-center">
                    <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2">Comunicados</span>
                </div>
            </li>
        </ol>
    </nav>

    <!-- Header -->
    <div class="mb-8">
        <h1 class="text-4xl font-bold text-gray-900 mb-2">Todos los Comunicados</h1>
        <p class="text-gray-600">Encuentra toda la información oficial y comunicados de la universidad</p>
    </div>

    <!-- Buscador y Filtros -->
    <div class="bg-white rounded-lg shadow-md p-6 mb-8">
        <form method="GET" action="{{ route('comunicados.index') }}" class="space-y-4 md:space-y-0 md:flex md:gap-4">
            <!-- Campo de búsqueda -->
            <div class="flex-1">
                <div class="relative">
                    <input type="text" 
                           name="buscar" 
                           value="{{ $search }}"
                           placeholder="Buscar comunicados..." 
                           class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-[#db0455] focus:ring-1 focus:ring-[#db0455]">
                    <svg class="absolute left-3 top-3.5 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
            </div>

            <!-- Filtro por categoría -->
            <div class="md:w-64">
                <select name="categoria" 
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-[#db0455] focus:ring-1 focus:ring-[#db0455]">
                    <option value="">Todas las categorías</option>
                    @foreach($categorias as $categoria)
                        <option value="{{ $categoria->id }}" {{ $categoria_id == $categoria->id ? 'selected' : '' }}>
                            {{ $categoria->nombre }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Botón buscar -->
            <div>
                <button type="submit" 
                        class="w-full md:w-auto px-6 py-3 bg-[#db0455] text-white font-semibold rounded-lg hover:bg-[#a00340] transition-colors">
                    <svg class="w-5 h-5 inline-block mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                    Buscar
                </button>
            </div>

            @if($search || $categoria_id)
                <div>
                    <a href="{{ route('comunicados.index') }}" 
                       class="w-full md:w-auto px-6 py-3 bg-gray-500 text-white font-semibold rounded-lg hover:bg-gray-600 transition-colors inline-block text-center">
                        Limpiar filtros
                    </a>
                </div>
            @endif
        </form>

        @if($search)
            <div class="mt-4 text-sm text-gray-600">
                Resultados para: <span class="font-semibold">{{ $search }}</span>
            </div>
        @endif
    </div>

    <!-- Lista de Comunicados -->
    @if($comunicados->count() > 0)
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($comunicados as $comunicado)
                <article class="bg-white rounded-lg shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden group cursor-pointer"
                         onclick="window.location.href='{{ route('comunicado.ver', $comunicado) }}'">
                    <!-- Imagen -->
                    @if($comunicado->imagen)
                        <div class="aspect-w-16 aspect-h-9 overflow-hidden">
                            <img src="{{ $comunicado->imagen_url }}" 
                                 alt="{{ $comunicado->titulo }}"
                                 class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300">
                        </div>
                    @else
                        <div class="w-full h-48 bg-gradient-to-br from-[#db0455] to-[#a00340] flex items-center justify-center">
                            <svg class="w-16 h-16 text-white opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                        </div>
                    @endif

                    <!-- Contenido -->
                    <div class="p-6">
                        <!-- Oficina -->
                        <div class="flex items-center gap-2 mb-3">
                            <span class="px-3 py-1 text-xs font-medium rounded-full bg-blue-100 text-blue-800">
                                {{ $comunicado->oficina ?? $comunicado->categoria->nombre ?? 'OFICINA' }}
                            </span>
                        </div>

                        <!-- Título -->
                        <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-[#db0455] transition-colors line-clamp-2">
                            {{ $comunicado->titulo }}
                        </h3>

                        <!-- Contenido preview -->
                        @if($comunicado->contenido)
                            <p class="text-gray-600 text-sm mb-4 line-clamp-3">
                                {{ strip_tags($comunicado->contenido) }}
                            </p>
                        @endif

                        <!-- Footer -->
                        <div class="flex items-center justify-between text-sm text-gray-500 pt-4 border-t">
                            <div class="flex items-center">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                                {{ $comunicado->created_at->format('d/m/Y') }}
                            </div>
                            <span class="text-[#db0455] font-medium group-hover:underline">
                                Leer más →
                            </span>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>

        <!-- Paginación -->
        <div class="mt-8">
            {{ $comunicados->appends(['buscar' => $search, 'categoria' => $categoria_id])->links() }}
        </div>
    @else
        <!-- No hay resultados -->
        <div class="bg-white rounded-lg shadow-md p-12 text-center">
            <svg class="w-24 h-24 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            <h3 class="text-xl font-semibold text-gray-900 mb-2">No se encontraron comunicados</h3>
            @if($search || $categoria_id)
                <p class="text-gray-600 mb-6">No hay comunicados que coincidan con tu búsqueda.</p>
                <a href="{{ route('comunicados.index') }}" 
                   class="inline-flex items-center px-4 py-2 bg-[#db0455] text-white rounded-lg hover:bg-[#a00340] transition-colors">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                    </svg>
                    Ver todos los comunicados
                </a>
            @else
                <p class="text-gray-600">No hay comunicados disponibles en este momento.</p>
            @endif
        </div>
    @endif
</div>

@push('styles')
<style>
    /* Line clamp utilities */
    .line-clamp-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    .line-clamp-3 {
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    
    /* Custom pagination styles */
    .pagination {
        display: flex;
        justify-content: center;
        gap: 0.5rem;
    }
    
    .pagination .page-link {
        padding: 0.5rem 1rem;
        border: 1px solid #e5e7eb;
        border-radius: 0.375rem;
        color: #374151;
        text-decoration: none;
        transition: all 0.2s;
    }
    
    .pagination .page-link:hover {
        background-color: #f3f4f6;
        border-color: #db0455;
        color: #db0455;
    }
    
    .pagination .page-item.active .page-link {
        background-color: #db0455;
        border-color: #db0455;
        color: white;
    }
    
    .pagination .page-item.disabled .page-link {
        color: #9ca3af;
        cursor: not-allowed;
    }
</style>
@endpush
@endsection