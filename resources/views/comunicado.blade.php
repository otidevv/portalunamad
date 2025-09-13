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
            <li>
                <div class="flex items-center">
                    <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2">Oficina</span>
                </div>
            </li>
            <li aria-current="page">
                <div class="flex items-center">
                    <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2">{{ Str::limit($comunicado->titulo, 50) }}</span>
                </div>
            </li>
        </ol>
    </nav>

    <!-- Contenido Principal -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Contenido del Comunicado -->
        <div class="lg:col-span-2">
            <article class="bg-white rounded-lg shadow-lg p-8">
                <!-- Header -->
                <header class="mb-6">
                    <div class="flex items-center gap-2 mb-4">
                        <span class="px-3 py-1 text-xs font-medium rounded-full bg-blue-100 text-blue-800">
                            {{ $comunicado->oficina ?? $comunicado->categoria->nombre ?? 'OFICINA' }}
                        </span>
                        @if($comunicado->estado)
                            <span class="px-3 py-1 text-xs font-medium rounded-full bg-green-100 text-green-800">
                                Activo
                            </span>
                        @endif
                    </div>
                    
                    <h1 class="text-3xl font-bold text-gray-900 mb-4">{{ $comunicado->titulo }}</h1>
                    
                    <div class="flex items-center text-sm text-gray-600 gap-4">
                        <div class="flex items-center">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3a1 1 0 011-1h6a1 1 0 011 1v4h3a1 1 0 011 1v8a3 3 0 01-3 3H6a3 3 0 01-3-3V8a1 1 0 011-1h3z"></path>
                            </svg>
                            {{ $comunicado->created_at->format('d/m/Y H:i') }}
                        </div>
                        
                        @if($comunicado->user)
                            <div class="flex items-center">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                                {{ $comunicado->user->name }}
                            </div>
                        @endif
                    </div>
                </header>

                <!-- Imagen -->
                @if($comunicado->imagen)
                    <div class="mb-8">
                        <img src="{{ $comunicado->imagen_url }}" 
                             alt="{{ $comunicado->titulo }}"
                             class="w-full rounded-lg shadow-md">
                    </div>
                @endif

                <!-- Contenido -->
                @if($comunicado->contenido)
                    <div class="comunicado-content">
                        {!! $comunicado->contenido !!}
                    </div>
                @else
                    <p class="text-gray-600 italic">Este comunicado no tiene contenido adicional.</p>
                @endif
            </article>
        </div>

        <!-- Sidebar -->
        <div class="lg:col-span-1">
            <div class="sticky top-4 space-y-6">
                <!-- Información del Comunicado -->
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Información del Comunicado</h3>
                    
                    <div class="space-y-3">
                        <div>
                            <span class="text-sm text-gray-600">Oficina:</span>
                            <p class="font-medium">{{ $comunicado->oficina ?? $comunicado->categoria->nombre ?? 'Sin oficina' }}</p>
                        </div>
                        
                        <div>
                            <span class="text-sm text-gray-600">Fecha de publicación:</span>
                            <p class="font-medium">{{ $comunicado->created_at->format('d/m/Y') }}</p>
                        </div>
                        
                        @if($comunicado->fecha_fin)
                            <div>
                                <span class="text-sm text-gray-600">Vigente hasta:</span>
                                <p class="font-medium">{{ $comunicado->fecha_fin->format('d/m/Y') }}</p>
                            </div>
                        @endif
                        
                        @if($comunicado->duracion)
                            <div>
                                <span class="text-sm text-gray-600">Duración:</span>
                                <p class="font-medium">{{ $comunicado->duracion }} días</p>
                            </div>
                        @endif
                    </div>
                </div>

                <!-- Botones de Acción -->
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Acciones</h3>
                    
                    <div class="space-y-3">
                        <button onclick="window.print()" 
                                class="w-full flex items-center justify-center px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"></path>
                            </svg>
                            Imprimir
                        </button>
                        
                        <button onclick="compartir()" 
                                class="w-full flex items-center justify-center px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition-colors">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.367 2.684 3 3 0 00-5.367-2.684z"></path>
                            </svg>
                            Compartir
                        </button>
                        
                        <a href="{{ route('home') }}" 
                           class="w-full flex items-center justify-center px-4 py-2 bg-gray-600 text-white rounded-lg hover:bg-gray-700 transition-colors">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                            </svg>
                            Volver al inicio
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('styles')
<style>
/* Estilos para el contenido del comunicado */
.comunicado-content {
    font-size: 1rem;
    line-height: 1.75;
    color: #374151;
}

.comunicado-content p {
    margin-bottom: 1rem;
    line-height: 1.75;
}

/* ESTILOS PARA TODOS LOS ENLACES */
.comunicado-content a,
.comunicado-content a[href] {
    color: #0066cc !important;
    text-decoration: underline !important;
    font-weight: 700 !important;
    background-color: #e6f2ff !important;
    padding: 3px 8px !important;
    border-radius: 4px !important;
    transition: all 0.2s ease !important;
    display: inline-block !important;
    border: 1px solid #b3d9ff !important;
}

.comunicado-content a:hover,
.comunicado-content a[href]:hover {
    color: #ffffff !important;
    background-color: #0066cc !important;
    text-decoration: none !important;
    border-color: #0066cc !important;
    box-shadow: 0 2px 4px rgba(0, 102, 204, 0.3) !important;
}

.comunicado-content a:visited {
    color: #663399 !important;
}

.comunicado-content ul, .comunicado-content ol {
    margin: 1rem 0;
    padding-left: 2rem;
}

.comunicado-content li {
    margin-bottom: 0.5rem;
}

.comunicado-content strong {
    font-weight: 700;
    color: #1f2937;
}

.comunicado-content em {
    font-style: italic;
}

.comunicado-content h1, .comunicado-content h2, .comunicado-content h3, 
.comunicado-content h4, .comunicado-content h5, .comunicado-content h6 {
    font-weight: 700;
    margin: 1.5rem 0 1rem 0;
    color: #1f2937;
}

.comunicado-content img {
    max-width: 100%;
    height: auto;
    border-radius: 0.5rem;
    margin: 1rem 0;
}

.comunicado-content blockquote {
    border-left: 4px solid #db0455;
    padding-left: 1rem;
    margin: 1rem 0;
    font-style: italic;
    color: #4b5563;
}

.comunicado-content table {
    width: 100%;
    border-collapse: collapse;
    margin: 1rem 0;
}

.comunicado-content table th,
.comunicado-content table td {
    border: 1px solid #e5e7eb;
    padding: 0.5rem;
    text-align: left;
}

.comunicado-content table th {
    background-color: #f3f4f6;
    font-weight: 600;
}
</style>
@endpush

@push('scripts')
<script>
function compartir() {
    if (navigator.share) {
        navigator.share({
            title: '{{ $comunicado->titulo }}',
            text: 'Revisa este comunicado de UNAMAD',
            url: window.location.href
        });
    } else {
        // Fallback para navegadores que no soportan Web Share API
        const url = window.location.href;
        navigator.clipboard.writeText(url).then(() => {
            alert('Enlace copiado al portapapeles');
        });
    }
}
</script>
@endpush
@endsection