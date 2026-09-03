@extends('layouts.app')

@section('title', $variable->titulo_completo . ' - Indicador 55 UNAMAD')

@section('content')
<div class="bg-gradient-to-br from-{{ $variable->bg_light }} to-{{ str_replace('-50', '-100', $variable->bg_light) }} min-h-screen">
    <!-- Hero Section -->
    <div class="bg-gradient-to-r from-{{ $variable->gradiente_from }} to-{{ $variable->gradiente_to }} text-white py-16">
        <div class="container mx-auto px-4">
            <div class="flex items-center mb-4">
                <svg aria-hidden="true" focusable="false" class="w-8 h-8 mr-3" fill="currentColor" viewBox="0 0 24 24">
                    <path d="{{ $variable->icono }}"/>
                </svg>
                <h1 class="text-4xl font-bold">{{ $variable->titulo_completo }}</h1>
            </div>
            <p class="text-xl opacity-90">
                {{ $variable->descripcion }}
            </p>
        </div>
    </div>

    <div class="container mx-auto px-4 py-8">
        <!-- Breadcrumb -->
        <nav aria-label="Ruta de navegación" class="text-sm text-gray-600 mb-8">
            <a href="/" class="hover:text-{{ explode('-', $variable->gradiente_from)[0] }}-600">Inicio</a>
            <span class="mx-2" aria-hidden="true">&rsaquo;</span>
            <a href="/transparencia/indicador-55" class="hover:text-{{ explode('-', $variable->gradiente_from)[0] }}-600">Transparencia - Indicador 55</a>
            <span class="mx-2" aria-hidden="true">&rsaquo;</span>
            <span class="text-gray-800">{{ $variable->titulo_completo }}</span>
        </nav>

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
            <!-- Contenido Principal -->
            <div class="lg:col-span-3">
                <div class="bg-white rounded-lg shadow-md p-8">
                    <!-- Contenido HTML dinámico -->
                    @if($variable->contenido)
                        <div class="prose max-w-none mb-8">
                            {!! \App\Helpers\HtmlSanitizer::clean($variable->contenido) !!}
                        </div>
                    @endif

                    <!-- Documentos -->
                    @php
                        $documentos = $variable->documentos;
                        if (is_string($documentos)) {
                            $documentos = json_decode($documentos, true) ?? [];
                        }
                        $documentos = $documentos ?? [];
                    @endphp
                    @if(is_array($documentos) && count($documentos) > 0)
                        <div class="space-y-8">
                            @php
                                $documentosPorAnio = [];
                                $documentosPorSeccion = [];
                                $documentosSimples = [];

                                foreach ($documentos as $doc) {
                                    if (isset($doc['anio'])) {
                                        $documentosPorAnio[$doc['anio']][] = $doc;
                                    } elseif (isset($doc['seccion'])) {
                                        $documentosPorSeccion[] = $doc;
                                    } else {
                                        $documentosSimples[] = $doc;
                                    }
                                }

                                // Ordenar años de mayor a menor
                                krsort($documentosPorAnio);
                            @endphp

                            {{-- Documentos organizados por año --}}
                            @foreach($documentosPorAnio as $anio => $docs)
                                <div class="border-l-4 border-{{ explode('-', $variable->gradiente_from)[0] }}-500 pl-6 py-4 bg-{{ $variable->bg_light }}">
                                    <h2 class="text-xl font-semibold text-{{ explode('-', $variable->gradiente_from)[0] }}-800 mb-4">{{ $anio }}</h2>

                                    <div class="space-y-3">
                                        @foreach($docs as $doc)
                                            @if(isset($doc['departamento']))
                                                {{-- Documento con departamento (como MV11) --}}
                                                <div class="bg-white rounded-lg border border-{{ explode('-', $variable->gradiente_from)[0] }}-200 p-4">
                                                    <h3 class="font-medium text-gray-900 mb-2">{{ $doc['departamento'] }}</h3>
                                                    @if(isset($doc['items']))
                                                        <div class="flex flex-wrap gap-3">
                                                            @foreach($doc['items'] as $item)
                                                                <a href="{{ $item['url'] }}"
                                                                   target="_blank" rel="noopener noreferrer"
                                                                   class="inline-flex items-center px-3 py-1
                                                                          @if(($item['tipo'] ?? 'pdf') == 'pdf') bg-red-50 text-red-700 hover:bg-red-100
                                                                          @elseif(($item['tipo'] ?? '') == 'excel') bg-green-50 text-green-700 hover:bg-green-100
                                                                          @elseif(($item['tipo'] ?? '') == 'resolucion') bg-blue-50 text-blue-700 hover:bg-blue-100
                                                                          @else bg-gray-50 text-gray-700 hover:bg-gray-100
                                                                          @endif
                                                                          rounded-md text-sm">
                                                                    <svg aria-hidden="true" focusable="false" class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                                                        <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                                                    </svg>
                                                                    {{ $item['titulo'] }}
                                                                </a>
                                                            @endforeach
                                                        </div>
                                                    @endif
                                                </div>
                                            @elseif(isset($doc['items']))
                                                {{-- Documento con items (como MV12 mallas curriculares) --}}
                                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                                    @foreach($doc['items'] as $item)
                                                        <div class="bg-white rounded-lg border border-{{ explode('-', $variable->gradiente_from)[0] }}-200 p-4">
                                                            <h3 class="font-medium text-gray-900 mb-2">{{ $item['titulo'] }}</h3>
                                                            <a href="{{ $item['url'] }}"
                                                               target="_blank" rel="noopener noreferrer"
                                                               class="inline-flex items-center px-3 py-1 bg-red-50 text-red-700 rounded-md hover:bg-red-100 text-sm">
                                                                <svg aria-hidden="true" focusable="false" class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                                                    <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                                                </svg>
                                                                Ver documento<span class="sr-only">: {{ $item['titulo'] }}</span>
                                                            </a>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            @else
                                                {{-- Documento simple con año --}}
                                                <div class="flex items-center justify-between p-4 bg-white rounded-lg border border-{{ explode('-', $variable->gradiente_from)[0] }}-200 hover:bg-{{ $variable->bg_light }} transition-colors">
                                                    <div class="flex items-center">
                                                        <svg aria-hidden="true" focusable="false" class="w-5 h-5 text-{{ explode('-', $variable->gradiente_from)[0] }}-600 mr-3" fill="currentColor" viewBox="0 0 24 24">
                                                            <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                                        </svg>
                                                        <div>
                                                            <h3 class="font-medium text-gray-900">{{ $doc['titulo'] }}</h3>
                                                            @if(isset($doc['descripcion']))
                                                                <p class="text-sm text-gray-600">{{ $doc['descripcion'] }}</p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <a href="{{ $doc['url'] }}"
                                                       target="_blank"
                                                       rel="noopener noreferrer"
                                                       class="text-{{ explode('-', $variable->gradiente_from)[0] }}-600 hover:text-{{ explode('-', $variable->gradiente_from)[0] }}-800 font-medium">
                                                        Ver documento<span class="sr-only">: {{ $doc['titulo'] }}</span> <span aria-hidden="true">&rarr;</span>
                                                    </a>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach

                            {{-- Documentos organizados por sección --}}
                            @foreach($documentosPorSeccion as $seccion)
                                <div class="border-l-4 border-{{ explode('-', $variable->gradiente_from)[0] }}-500 pl-6 py-4 bg-{{ $variable->bg_light }} @if(isset($seccion['vigente']) && $seccion['vigente']) ring-2 ring-green-400 @endif">
                                    <div class="flex items-center justify-between mb-2">
                                        <h2 class="text-xl font-semibold text-{{ explode('-', $variable->gradiente_from)[0] }}-800">{{ $seccion['seccion'] }}</h2>
                                        @if(isset($seccion['vigente']) && $seccion['vigente'])
                                            <span class="px-3 py-1 bg-green-100 text-green-800 text-sm font-medium rounded-full">VIGENTE</span>
                                        @endif
                                    </div>
                                    @if(isset($seccion['descripcion']))
                                        <p class="text-gray-600 mb-4">{{ $seccion['descripcion'] }}</p>
                                    @endif

                                    @if(isset($seccion['items']))
                                        <div class="space-y-3">
                                            @foreach($seccion['items'] as $item)
                                                <div class="flex items-center justify-between p-4 bg-white rounded-lg border border-{{ explode('-', $variable->gradiente_from)[0] }}-200 hover:bg-{{ $variable->bg_light }} transition-colors">
                                                    <div class="flex items-center">
                                                        <svg aria-hidden="true" focusable="false" class="w-5 h-5 text-{{ explode('-', $variable->gradiente_from)[0] }}-600 mr-3" fill="currentColor" viewBox="0 0 24 24">
                                                            <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                                        </svg>
                                                        <div>
                                                            <h3 class="font-medium text-gray-900">{{ $item['titulo'] }}</h3>
                                                            @if(isset($item['descripcion']))
                                                                <p class="text-sm text-gray-600">{{ $item['descripcion'] }}</p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <a href="{{ $item['url'] }}"
                                                       target="_blank"
                                                       rel="noopener noreferrer"
                                                       class="inline-flex items-center px-3 py-1
                                                              @if(($item['tipo'] ?? 'pdf') == 'resolucion') bg-blue-50 text-blue-700 hover:bg-blue-100
                                                              @else bg-red-50 text-red-700 hover:bg-red-100
                                                              @endif
                                                              rounded-md text-sm">
                                                        <svg aria-hidden="true" focusable="false" class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                                            <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                                        </svg>
                                                        {{ ($item['tipo'] ?? 'pdf') == 'resolucion' ? 'Ver Resolución' : 'Ver PDF' }}<span class="sr-only">: {{ $item['titulo'] }}</span>
                                                    </a>
                                                </div>
                                            @endforeach
                                        </div>
                                    @endif
                                </div>
                            @endforeach

                            {{-- Documentos simples (sin año ni sección) --}}
                            @if(count($documentosSimples) > 0)
                                <div class="space-y-3">
                                    @foreach($documentosSimples as $doc)
                                        <div class="flex items-center justify-between p-4 bg-white rounded-lg border border-{{ explode('-', $variable->gradiente_from)[0] }}-200 hover:bg-{{ $variable->bg_light }} transition-colors">
                                            <div class="flex items-center">
                                                <svg aria-hidden="true" focusable="false" class="w-5 h-5 text-{{ explode('-', $variable->gradiente_from)[0] }}-600 mr-3" fill="currentColor" viewBox="0 0 24 24">
                                                    <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                                </svg>
                                                <div>
                                                    <h2 class="font-medium text-gray-900">{{ $doc['titulo'] }}</h2>
                                                    @if(isset($doc['descripcion']))
                                                        <p class="text-sm text-gray-600">{{ $doc['descripcion'] }}</p>
                                                    @endif
                                                </div>
                                            </div>
                                            <a href="{{ $doc['url'] }}"
                                               target="_blank"
                                               rel="noopener noreferrer"
                                               class="text-{{ explode('-', $variable->gradiente_from)[0] }}-600 hover:text-{{ explode('-', $variable->gradiente_from)[0] }}-800 font-medium">
                                                Ver documento<span class="sr-only">: {{ $doc['titulo'] }}</span> <span aria-hidden="true">&rarr;</span>
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    @endif

                    <!-- Información adicional -->
                    <div class="mt-8 p-6 bg-{{ $variable->bg_light }} rounded-lg border border-{{ explode('-', $variable->gradiente_from)[0] }}-200">
                        <h2 class="text-lg font-semibold text-{{ explode('-', $variable->gradiente_from)[0] }}-800 mb-3 flex items-center">
                            <svg aria-hidden="true" focusable="false" class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M13,9H11V7H13M13,17H11V11H13M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"/>
                            </svg>
                            Transparencia Universitaria
                        </h2>
                        <p class="text-sm text-{{ explode('-', $variable->gradiente_from)[0] }}-700">
                            Esta información se publica en cumplimiento del Indicador 55 de Transparencia Universitaria,
                            garantizando el acceso público a información institucional relevante.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Sidebar con navegación -->
            <div class="lg:col-span-1">
                <div class="sticky top-8">
                    @include('transparencia.indicador-55.partials.navigation-dynamic', ['variables' => $variables, 'currentCodigo' => $variable->codigo])
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
