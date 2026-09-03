@extends('layouts.app')

@section('title', 'MV6: Número de Estudiantes por Facultades - Indicador 55 UNAMAD')

@section('content')
<div class="bg-gradient-to-br from-green-50 to-teal-50 min-h-screen">
    <div class="bg-gradient-to-r from-green-600 to-teal-600 text-white py-16">
        <div class="container mx-auto px-4">
            <div class="flex items-center mb-4">
                <svg aria-hidden="true" focusable="false" class="w-8 h-8 mr-3" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 14l9-5-9-5-9 5 9 5z"/>
                    <path d="m12 14 6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"/>
                </svg>
                <h1 class="text-4xl font-bold">MV6: Número de Estudiantes por Facultades</h1>
            </div>
            <p class="text-xl text-green-100">
                Estadísticas oficiales de matrícula estudiantil por facultades y programas de estudio de UNAMAD
            </p>
        </div>
    </div>

    <div class="container mx-auto px-4 py-8">
        <nav aria-label="Ruta de navegación" class="text-sm text-gray-600 mb-8">
            <a href="/" class="hover:text-green-600">Inicio</a>
            <span class="mx-2" aria-hidden="true">›</span>
            <a href="/transparencia/indicador-55" class="hover:text-green-600">Transparencia - Indicador 55</a>
            <span class="mx-2" aria-hidden="true">›</span>
            <span class="text-gray-800">MV6: Número de Estudiantes por Facultades</span>
        </nav>

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
            <div class="lg:col-span-3">
                <div class="bg-white rounded-lg shadow-md p-8">
                    <div class="mb-8">
                        <h2 class="text-2xl font-bold text-green-800 mb-4 flex items-center">
                            <svg aria-hidden="true" focusable="false" class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 14l9-5-9-5-9 5 9 5z"/>
                                <path d="m12 14 6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"/>
                            </svg>
                            Número de Estudiantes por Facultades y Programas de Estudio
                        </h2>
                        <p class="text-gray-700 mb-6">
                            La Universidad Nacional Amazónica de Madre de Dios presenta de manera transparente las estadísticas 
                            de matrícula estudiantil por facultades y programas de estudio, organizadas por períodos académicos.
                        </p>
                    </div>

                    <!-- Documentos desde Base de Datos -->
                    @php
                        $docs = $documentos ?? [];
                        if (is_string($docs)) {
                            $docs = json_decode($docs, true) ?? [];
                        }

                        // Agrupar documentos por año
                        $docsPorAnio = [];
                        foreach ($docs as $doc) {
                            $anio = $doc['anio'] ?? 'Sin año';
                            $docsPorAnio[$anio][] = $doc;
                        }
                        // Ordenar por año descendente
                        krsort($docsPorAnio);

                        // Colores por año
                        $colores = [
                            '2025' => 'emerald',
                            '2024' => 'green',
                            '2023' => 'teal',
                            '2022' => 'cyan',
                            '2021' => 'blue',
                            '2020' => 'indigo',
                            '2019' => 'purple',
                            'default' => 'gray'
                        ];
                    @endphp

                    @if(count($docsPorAnio) > 0)
                    <div class="space-y-6 mb-8">
                        <h3 class="text-lg font-semibold text-green-800 flex items-center">
                            <svg aria-hidden="true" focusable="false" class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"/>
                            </svg>
                            Documentos Actualizados
                        </h3>
                        @foreach($docsPorAnio as $anio => $docsAnio)
                            @php
                                $color = $colores[$anio] ?? $colores['default'];
                            @endphp
                            <div class="border-l-4 border-{{ $color }}-500 pl-6 py-4 bg-{{ $color }}-50">
                                <h3 class="text-xl font-semibold text-{{ $color }}-800 mb-3">{{ $anio }}</h3>
                                <div class="space-y-2">
                                    @foreach($docsAnio as $doc)
                                    <div class="flex items-center justify-between p-4 bg-white rounded-lg border border-{{ $color }}-200 hover:bg-{{ $color }}-50 transition-colors">
                                        <div class="flex items-center">
                                            <svg aria-hidden="true" focusable="false" class="w-5 h-5 text-red-600 mr-3" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                            </svg>
                                            <div>
                                                <h4 class="font-medium text-gray-900">{{ $doc['titulo'] ?? 'Documento' }}</h4>
                                                @if(isset($doc['descripcion']))
                                                    <p class="text-sm text-gray-600">{{ $doc['descripcion'] }}</p>
                                                @endif
                                            </div>
                                        </div>
                                        <a @if(!empty($doc['url'])) href="{{ $doc['url'] }}" target="_blank" rel="noopener noreferrer" @endif
                                           class="text-{{ $color }}-600 hover:text-{{ $color }}-800 font-medium">
                                            Ver documento<span class="sr-only">: {{ $doc['titulo'] ?? 'Documento' }}</span> <span aria-hidden="true">→</span>
                                        </a>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                    @else
                    <!-- Contenido Histórico (solo si no hay datos de BD) -->
                    <div class="space-y-6">
                        <div class="border-l-4 border-green-500 pl-6 py-4 bg-green-50">
                            <h3 class="text-xl font-semibold text-green-800 mb-3">2024</h3>
                            <div class="space-y-2">
                                <div class="flex items-center justify-between p-4 bg-white rounded-lg border border-green-200 hover:bg-green-50 transition-colors">
                                    <div class="flex items-center">
                                        <svg aria-hidden="true" focusable="false" class="w-5 h-5 text-red-600 mr-3" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                        </svg>
                                        <div>
                                            <h4 class="font-medium text-gray-900">2024 (Período I)</h4>
                                            <p class="text-sm text-gray-600">Estadísticas de matrícula - Primer semestre</p>
                                        </div>
                                    </div>
                                    <a href="https://sinc.unamad.edu.pe:8000/media/pdf/NUMERO_DE_ESTUDIANTES_POR_FACULTADES_Y_PROGRAMAS_DE_ESTUDIO_2024-1.pdf" 
                                       target="_blank" 
                                       rel="noopener noreferrer"
                                       class="text-green-600 hover:text-green-800 font-medium">
                                        Ver documento<span class="sr-only">: 2024 (Período I) (PDF)</span> <span aria-hidden="true">→</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="border-l-4 border-green-500 pl-6 py-4 bg-green-50">
                            <h3 class="text-xl font-semibold text-green-800 mb-3">2023</h3>
                            <div class="space-y-2">
                                <div class="flex items-center justify-between p-4 bg-white rounded-lg border border-green-200 hover:bg-green-50 transition-colors">
                                    <div class="flex items-center">
                                        <svg aria-hidden="true" focusable="false" class="w-5 h-5 text-red-600 mr-3" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                        </svg>
                                        <div>
                                            <h4 class="font-medium text-gray-900">2023 (Períodos I y II)</h4>
                                            <p class="text-sm text-gray-600">Estadísticas de matrícula - Ambos semestres</p>
                                        </div>
                                    </div>
                                    <a href="https://sinc.unamad.edu.pe:8000/media/pdf/NUMERO_DE_ESTUDIANTES_POR_FACULTADES_Y_PROGRAMAS_DE_ESTUDIO_2023.pdf" 
                                       target="_blank" 
                                       rel="noopener noreferrer"
                                       class="text-green-600 hover:text-green-800 font-medium">
                                        Ver documento<span class="sr-only">: 2023 (Períodos I y II) (PDF)</span> <span aria-hidden="true">→</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="border-l-4 border-green-500 pl-6 py-4 bg-green-50">
                            <h3 class="text-xl font-semibold text-green-800 mb-3">2022</h3>
                            <div class="space-y-2">
                                <div class="flex items-center justify-between p-4 bg-white rounded-lg border border-green-200 hover:bg-green-50 transition-colors">
                                    <div class="flex items-center">
                                        <svg aria-hidden="true" focusable="false" class="w-5 h-5 text-red-600 mr-3" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                        </svg>
                                        <div>
                                            <h4 class="font-medium text-gray-900">2022 (Períodos I y II)</h4>
                                            <p class="text-sm text-gray-600">Estadísticas de matrícula - Ambos semestres</p>
                                        </div>
                                    </div>
                                    <a href="https://sinc.unamad.edu.pe:8000/media/pdf/NUMERO_DE_ESTUDIANTES_POR_FACULTADES_Y_PROGRAMAS_DE_ESTUDIO_2022.pdf" 
                                       target="_blank" 
                                       rel="noopener noreferrer"
                                       class="text-green-600 hover:text-green-800 font-medium">
                                        Ver documento<span class="sr-only">: 2022 (Períodos I y II) (PDF)</span> <span aria-hidden="true">→</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="border-l-4 border-green-500 pl-6 py-4 bg-green-50">
                            <h3 class="text-xl font-semibold text-green-800 mb-3">2021</h3>
                            <div class="space-y-2">
                                <div class="flex items-center justify-between p-4 bg-white rounded-lg border border-green-200 hover:bg-green-50 transition-colors">
                                    <div class="flex items-center">
                                        <svg aria-hidden="true" focusable="false" class="w-5 h-5 text-red-600 mr-3" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                        </svg>
                                        <div>
                                            <h4 class="font-medium text-gray-900">2021 (Períodos I y II)</h4>
                                            <p class="text-sm text-gray-600">Estadísticas de matrícula - Ambos semestres</p>
                                        </div>
                                    </div>
                                    <a href="https://sinc.unamad.edu.pe:8000/media/pdf/NUMERO_DE_ESTUDIANTES_POR_FACULTADES_Y_PROGRAMAS_DE_ESTUDIO_2021.pdf" 
                                       target="_blank" 
                                       rel="noopener noreferrer"
                                       class="text-green-600 hover:text-green-800 font-medium">
                                        Ver documento<span class="sr-only">: 2021 (Períodos I y II) (PDF)</span> <span aria-hidden="true">→</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="border-l-4 border-green-500 pl-6 py-4 bg-green-50">
                            <h3 class="text-xl font-semibold text-green-800 mb-3">2020</h3>
                            <div class="space-y-2">
                                <div class="flex items-center justify-between p-4 bg-white rounded-lg border border-green-200 hover:bg-green-50 transition-colors">
                                    <div class="flex items-center">
                                        <svg aria-hidden="true" focusable="false" class="w-5 h-5 text-red-600 mr-3" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                        </svg>
                                        <div>
                                            <h4 class="font-medium text-gray-900">2020 (Períodos I y II)</h4>
                                            <p class="text-sm text-gray-600">Estadísticas de matrícula - Ambos semestres</p>
                                        </div>
                                    </div>
                                    <a href="https://sinc.unamad.edu.pe:8000/media/pdf/NUMERO_DE_ESTUDIANTES_POR_FACULTADES_Y_PROGRAMAS_DE_ESTUDIO_2020.pdf" 
                                       target="_blank" 
                                       rel="noopener noreferrer"
                                       class="text-green-600 hover:text-green-800 font-medium">
                                        Ver documento<span class="sr-only">: 2020 (Períodos I y II) (PDF)</span> <span aria-hidden="true">→</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="border-l-4 border-green-500 pl-6 py-4 bg-green-50">
                            <h3 class="text-xl font-semibold text-green-800 mb-3">2019</h3>
                            <div class="space-y-2">
                                <div class="flex items-center justify-between p-4 bg-white rounded-lg border border-green-200 hover:bg-green-50 transition-colors">
                                    <div class="flex items-center">
                                        <svg aria-hidden="true" focusable="false" class="w-5 h-5 text-red-600 mr-3" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                        </svg>
                                        <div>
                                            <h4 class="font-medium text-gray-900">2019 (Períodos I y II)</h4>
                                            <p class="text-sm text-gray-600">Estadísticas de matrícula - Ambos semestres</p>
                                        </div>
                                    </div>
                                    <a href="https://sinc.unamad.edu.pe:8000/media/pdf/NUMERO_DE_ESTUDIANTES_POR_FACULTADES_Y_PROGRAMAS_DE_ESTUDIO_2019.pdf" 
                                       target="_blank" 
                                       rel="noopener noreferrer"
                                       class="text-green-600 hover:text-green-800 font-medium">
                                        Ver documento<span class="sr-only">: 2019 (Períodos I y II) (PDF)</span> <span aria-hidden="true">→</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif

                    <div class="mt-8 p-6 bg-green-50 rounded-lg border border-green-200">
                        <h3 class="text-lg font-semibold text-green-800 mb-3 flex items-center">
                            <svg aria-hidden="true" focusable="false" class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M13,9H11V7H13M13,17H11V11H13M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"/>
                            </svg>
                            Información Importante
                        </h3>
                        <ul role="list" class="text-sm text-green-700 space-y-2">
                            <li class="flex items-start">
                                <span class="text-green-600 mr-2" aria-hidden="true">•</span>
                                Los documentos contienen estadísticas detalladas de matrícula por cada facultad y programa de estudio
                            </li>
                            <li class="flex items-start">
                                <span class="text-green-600 mr-2" aria-hidden="true">•</span>
                                Las estadísticas incluyen datos de ambos períodos académicos (I y II) cuando están disponibles
                            </li>
                            <li class="flex items-start">
                                <span class="text-green-600 mr-2" aria-hidden="true">•</span>
                                Los reportes son elaborados por la Oficina de Registro Académico de UNAMAD
                            </li>
                            <li class="flex items-start">
                                <span class="text-green-600 mr-2" aria-hidden="true">•</span>
                                Esta información forma parte del compromiso de transparencia universitaria
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-1">
                <div class="sticky top-8">
                    @include('transparencia.indicador-55.partials.navigation-dynamic', ['variables' => $variables ?? collect(), 'currentCodigo' => 'mv6'])
                </div>
            </div>
        </div>
    </div>
</div>
@endsection