@extends('layouts.app')

@section('content')
<div class="bg-gradient-to-br from-purple-50 to-violet-50 min-h-screen">
    <div class="bg-gradient-to-r from-purple-600 to-violet-600 text-white py-16">
        <div class="container mx-auto px-4">
            <div class="flex items-center mb-4">
                <svg class="w-8 h-8 mr-3" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                </svg>
                <h1 class="text-4xl font-bold">MV7: Reglamento de Estudiantes</h1>
            </div>
            <p class="text-xl text-purple-100">
                Marco normativo académico que regula la vida estudiantil en UNAMAD
            </p>
        </div>
    </div>

    <div class="container mx-auto px-4 py-8">
        <nav class="text-sm text-gray-600 mb-8">
            <a href="/" class="hover:text-purple-600">Inicio</a>
            <span class="mx-2">›</span>
            <a href="/transparencia/indicador-55" class="hover:text-purple-600">Transparencia - Indicador 55</a>
            <span class="mx-2">›</span>
            <span class="text-gray-800">MV7: Reglamento de Estudiantes</span>
        </nav>

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
            <div class="lg:col-span-3">
                <div class="bg-white rounded-lg shadow-md p-8">
                    <div class="mb-8">
                        <h2 class="text-2xl font-bold text-purple-800 mb-4 flex items-center">
                            <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                            </svg>
                            Reglamento de Estudiantes
                        </h2>
                        <p class="text-gray-700 mb-6">
                            La Universidad Nacional Amazónica de Madre de Dios presenta el marco normativo académico 
                            que establece los derechos, deberes y procedimientos que rigen la vida estudiantil universitaria.
                        </p>
                    </div>

                    <div class="space-y-8">
                        <div class="border-l-4 border-purple-500 pl-6 py-4 bg-purple-50">
                            <h3 class="text-xl font-semibold text-purple-800 mb-4">Reglamento Académico General v3.0 (Febrero 2023)</h3>
                            <p class="text-gray-700 mb-4">
                                Versión actualizada del reglamento académico que incorpora las últimas disposiciones 
                                y mejoras en los procesos académicos universitarios.
                            </p>
                            <div class="space-y-3">
                                <div class="flex items-center justify-between p-4 bg-white rounded-lg border border-purple-200 hover:bg-purple-50 transition-colors">
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5 text-red-600 mr-3" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                        </svg>
                                        <div>
                                            <h4 class="font-medium text-gray-900">Reglamento Académico General v3.0</h4>
                                            <p class="text-sm text-gray-600">Documento completo del reglamento</p>
                                        </div>
                                    </div>
                                    <a href="https://sinc.unamad.edu.pe:8000/media/pdf/Reglamento_acad%C3%A9mico_general_VERSI%C3%93N_3.0_u6ppaDu.pdf" 
                                       target="_blank" 
                                       rel="noopener noreferrer"
                                       class="text-purple-600 hover:text-purple-800 font-medium">
                                        Ver documento →
                                    </a>
                                </div>
                                <div class="flex items-center justify-between p-4 bg-white rounded-lg border border-purple-200 hover:bg-purple-50 transition-colors">
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5 text-blue-600 mr-3" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M9,12L11,14L15,10M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2Z"/>
                                        </svg>
                                        <div>
                                            <h4 class="font-medium text-gray-900">Resolución N° 100-2023-UNAMAD-CU</h4>
                                            <p class="text-sm text-gray-600">Resolución de aprobación oficial</p>
                                        </div>
                                    </div>
                                    <a href="https://www.gob.pe/institucion/unamad/normas-legales/4286387-100-2023-unamad-cu" 
                                       target="_blank" 
                                       rel="noopener noreferrer"
                                       class="text-purple-600 hover:text-purple-800 font-medium">
                                        Ver resolución →
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="border-l-4 border-purple-400 pl-6 py-4 bg-purple-50/70">
                            <h3 class="text-xl font-semibold text-purple-700 mb-4">Reglamento Académico General v1.0 (Octubre 2017)</h3>
                            <p class="text-gray-700 mb-4">
                                Primera versión del reglamento académico general de UNAMAD, estableciendo las bases 
                                normativas para la gestión académica universitaria.
                            </p>
                            <div class="space-y-3">
                                <div class="flex items-center justify-between p-4 bg-white rounded-lg border border-purple-200 hover:bg-purple-50 transition-colors">
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5 text-blue-600 mr-3" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M9,12L11,14L15,10M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2Z"/>
                                        </svg>
                                        <div>
                                            <h4 class="font-medium text-gray-900">Resolución N° 503-2017-UNAMAD-CU</h4>
                                            <p class="text-sm text-gray-600">Resolución de aprobación original</p>
                                        </div>
                                    </div>
                                    <a href="https://www.gob.pe/institucion/unamad/normas-legales/3476296-503-2017-unamad-cu" 
                                       target="_blank" 
                                       rel="noopener noreferrer"
                                       class="text-purple-600 hover:text-purple-800 font-medium">
                                        Ver resolución →
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 p-6 bg-purple-50 rounded-lg border border-purple-200">
                        <h3 class="text-lg font-semibold text-purple-800 mb-3 flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M13,9H11V7H13M13,17H11V11H13M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"/>
                            </svg>
                            Información Importante
                        </h3>
                        <ul class="text-sm text-purple-700 space-y-2">
                            <li class="flex items-start">
                                <span class="text-purple-600 mr-2">•</span>
                                El Reglamento Académico General v3.0 es la versión vigente y actualizada
                            </li>
                            <li class="flex items-start">
                                <span class="text-purple-600 mr-2">•</span>
                                Los reglamentos establecen los derechos, deberes y procedimientos académicos
                            </li>
                            <li class="flex items-start">
                                <span class="text-purple-600 mr-2">•</span>
                                Las resoluciones del Consejo Universitario tienen carácter oficial y vinculante
                            </li>
                            <li class="flex items-start">
                                <span class="text-purple-600 mr-2">•</span>
                                Estos documentos son fundamentales para la vida académica universitaria
                            </li>
                            <li class="flex items-start">
                                <span class="text-purple-600 mr-2">•</span>
                                Se recomienda revisar la versión más reciente para información actualizada
                            </li>
                        </ul>
                    </div>

                    <div class="mt-6 p-4 bg-amber-50 rounded-lg border border-amber-200">
                        <div class="flex items-start">
                            <svg class="w-5 h-5 text-amber-600 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12,2L13.09,8.26L22,9L17,14L18.18,22L12,19L5.82,22L7,14L2,9L10.91,8.26L12,2Z"/>
                            </svg>
                            <div>
                                <h4 class="font-medium text-amber-800 mb-1">Versión Vigente</h4>
                                <p class="text-sm text-amber-700">
                                    La versión 3.0 (Febrero 2023) es la normativa académica actualmente vigente en UNAMAD. 
                                    Se recomienda consultar esta versión para información actualizada.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-1">
                <div class="sticky top-8">
                    @include('transparencia.indicador-55.partials.navigation')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection