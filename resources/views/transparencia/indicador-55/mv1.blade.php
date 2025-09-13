@extends('layouts.app')

@section('title', 'MV1: Misión y Visión - Indicador 55 UNAMAD')

@section('content')
    <!-- Hero Section -->
    <div class="relative h-64 sm:h-80 lg:h-96 overflow-hidden bg-gradient-to-r from-gray-700 via-slate-600 to-gray-800">
        <div class="absolute inset-0 bg-black/20"></div>
        <img src="{{ asset('img/presentacion/presentacionbackground.jpg') }}" 
             alt="MV1 Misión y Visión" 
             class="absolute inset-0 w-full h-full object-cover mix-blend-overlay opacity-30">
        <div class="relative h-full flex items-center justify-center px-6">
            <div class="text-center text-white max-w-4xl mx-auto">
                <div class="w-20 h-20 bg-white/10 backdrop-blur-sm rounded-full flex items-center justify-center mx-auto mb-4 border border-white/20">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                    </svg>
                </div>
                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold mb-4 drop-shadow-lg">
                    MV1: Misión y Visión
                </h1>
                <p class="text-lg sm:text-xl opacity-90 max-w-2xl mx-auto leading-relaxed">
                    Declaración institucional de propósito y aspiraciones universitarias
                </p>
            </div>
        </div>
    </div>

    <!-- Breadcrumb -->
    <div class="bg-gradient-to-r from-gray-50 to-gray-100 border-b">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
            <nav class="flex items-center space-x-2 text-sm">
                <a href="/" class="text-gray-600 hover:text-gray-800 transition-colors font-medium">Inicio</a>
                <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                </svg>
                <a href="/transparencia" class="text-gray-600 hover:text-gray-800 transition-colors font-medium">Transparencia</a>
                <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                </svg>
                <a href="/transparencia/indicador-55" class="text-gray-600 hover:text-gray-800 transition-colors font-medium">Indicador 55</a>
                <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                </svg>
                <span class="text-gray-800 font-semibold">MV1: Misión y Visión</span>
            </nav>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Main Content Area -->
            <div class="lg:col-span-2">
                <!-- Misión -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden border-t-4 border-blue-600 mb-8">
                    <div class="p-8">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-gradient-to-r from-blue-600 to-indigo-600 rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-800">MISIÓN</h2>
                        </div>

                        <div class="bg-blue-50 border-l-4 border-blue-500 p-6 rounded-r-lg mb-6">
                            <p class="text-lg text-blue-900 font-medium leading-relaxed italic">
                                "Formar Profesionales líderes, investigadores e innovadores con orientación humanística, científica y tecnológica, que contribuyan al desarrollo sostenible de la Amazonía y competitividad del país con identidad cultural, espíritu emprendedor y responsabilidad social".
                            </p>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-8">
                            <div class="text-center p-4 bg-blue-50 rounded-lg border border-blue-200">
                                <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center mx-auto mb-3">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                    </svg>
                                </div>
                                <h3 class="font-semibold text-blue-800 text-sm">Formación Integral</h3>
                                <p class="text-xs text-blue-700 mt-1">Líderes, investigadores e innovadores</p>
                            </div>

                            <div class="text-center p-4 bg-blue-50 rounded-lg border border-blue-200">
                                <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center mx-auto mb-3">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9v-9m0-9v9m0 9c-5 0-9-4-9-9s4-9 9-9"></path>
                                    </svg>
                                </div>
                                <h3 class="font-semibold text-blue-800 text-sm">Desarrollo Sostenible</h3>
                                <p class="text-xs text-blue-700 mt-1">Amazonía y competitividad nacional</p>
                            </div>

                            <div class="text-center p-4 bg-blue-50 rounded-lg border border-blue-200">
                                <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center mx-auto mb-3">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                    </svg>
                                </div>
                                <h3 class="font-semibold text-blue-800 text-sm">Responsabilidad Social</h3>
                                <p class="text-xs text-blue-700 mt-1">Identidad cultural y emprendimiento</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Visión -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden border-t-4 border-emerald-600 mb-8">
                    <div class="p-8">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-gradient-to-r from-emerald-600 to-green-600 rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                </svg>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-800">VISIÓN</h2>
                        </div>

                        <div class="bg-emerald-50 border-l-4 border-emerald-500 p-6 rounded-r-lg mb-6">
                            <p class="text-lg text-emerald-900 font-medium leading-relaxed italic">
                                "Ser la Universidad líder en la Región Amazónica, holística, humanística, democrática, innovadora, con vocación de servicio, comprometida con la solución de los problemas de nuestra sociedad pluricultural, de la biodiversidad y del medio ambiente, orientada al desarrollo sostenible a través de principios y valores éticos, en el marco de una gestión eficiente, eficaz y transparente".
                            </p>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-8">
                            <div class="text-center p-4 bg-emerald-50 rounded-lg border border-emerald-200">
                                <div class="w-12 h-12 bg-emerald-600 rounded-full flex items-center justify-center mx-auto mb-3">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                                    </svg>
                                </div>
                                <h3 class="font-semibold text-emerald-800 text-sm">Liderazgo Regional</h3>
                                <p class="text-xs text-emerald-700 mt-1">Universidad líder amazónica</p>
                            </div>

                            <div class="text-center p-4 bg-emerald-50 rounded-lg border border-emerald-200">
                                <div class="w-12 h-12 bg-emerald-600 rounded-full flex items-center justify-center mx-auto mb-3">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                    </svg>
                                </div>
                                <h3 class="font-semibold text-emerald-800 text-sm">Sociedad Pluricultural</h3>
                                <p class="text-xs text-emerald-700 mt-1">Soluciones sociales integrales</p>
                            </div>

                            <div class="text-center p-4 bg-emerald-50 rounded-lg border border-emerald-200">
                                <div class="w-12 h-12 bg-emerald-600 rounded-full flex items-center justify-center mx-auto mb-3">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                    </svg>
                                </div>
                                <h3 class="font-semibold text-emerald-800 text-sm">Biodiversidad</h3>
                                <p class="text-xs text-emerald-700 mt-1">Medio ambiente sostenible</p>
                            </div>

                            <div class="text-center p-4 bg-emerald-50 rounded-lg border border-emerald-200">
                                <div class="w-12 h-12 bg-emerald-600 rounded-full flex items-center justify-center mx-auto mb-3">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                    </svg>
                                </div>
                                <h3 class="font-semibold text-emerald-800 text-sm">Valores Éticos</h3>
                                <p class="text-xs text-emerald-700 mt-1">Principios institucionales</p>
                            </div>

                            <div class="text-center p-4 bg-emerald-50 rounded-lg border border-emerald-200">
                                <div class="w-12 h-12 bg-emerald-600 rounded-full flex items-center justify-center mx-auto mb-3">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                    </svg>
                                </div>
                                <h3 class="font-semibold text-emerald-800 text-sm">Gestión Eficiente</h3>
                                <p class="text-xs text-emerald-700 mt-1">Eficaz y transparente</p>
                            </div>

                            <div class="text-center p-4 bg-emerald-50 rounded-lg border border-emerald-200">
                                <div class="w-12 h-12 bg-emerald-600 rounded-full flex items-center justify-center mx-auto mb-3">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                                    </svg>
                                </div>
                                <h3 class="font-semibold text-emerald-800 text-sm">Innovación</h3>
                                <p class="text-xs text-emerald-700 mt-1">Holística y humanística</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Documentos de Respaldo -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden border-t-4 border-gray-600">
                    <div class="p-8">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-gradient-to-r from-gray-600 to-slate-600 rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-800">Documentos de Respaldo Legal</h2>
                        </div>

                        <div class="space-y-4">
                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/3606406-183-2018-unamad-r" 
                               target="_blank" 
                               rel="noopener noreferrer"
                               class="flex items-center p-4 bg-gray-50 rounded-lg border border-gray-200 hover:bg-gray-100 transition-colors duration-200 group">
                                <div class="flex items-center justify-center w-10 h-10 rounded-full bg-gray-100 group-hover:bg-gray-200 flex-shrink-0 mr-4">
                                    <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-800 group-hover:text-gray-900">Resolución 183-2018-UNAMAD-R</h3>
                                    <p class="text-sm text-gray-600 mt-1">Documento legal que establece la Misión y Visión institucional</p>
                                </div>
                                <svg class="w-5 h-5 text-gray-400 ml-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                </svg>
                            </a>

                            <a href="https://sinc.unamad.edu.pe:8000/media/pdf/RESOLUCI%C3%93N_N_277-2021-UNAMAD-R.pdf_WfxTkAB.pdf" 
                               target="_blank" 
                               rel="noopener noreferrer"
                               class="flex items-center p-4 bg-gray-50 rounded-lg border border-gray-200 hover:bg-gray-100 transition-colors duration-200 group">
                                <div class="flex items-center justify-center w-10 h-10 rounded-full bg-gray-100 group-hover:bg-gray-200 flex-shrink-0 mr-4">
                                    <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-800 group-hover:text-gray-900">Resolución 277-2021-UNAMAD-R</h3>
                                    <p class="text-sm text-gray-600 mt-1">Actualización y ratificación de la Misión y Visión universitaria</p>
                                </div>
                                <svg class="w-5 h-5 text-gray-400 ml-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="lg:col-span-1">
                @include('transparencia.indicador-55.partials.navigation')
            </div>
        </div>
    </div>
@endsection