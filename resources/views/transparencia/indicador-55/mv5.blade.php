@extends('layouts.app')

@section('title', 'MV5: Concursos de Selección para Docentes - Indicador 55 UNAMAD')

@section('content')
    <!-- Hero Section -->
    <div class="relative h-64 sm:h-80 lg:h-96 overflow-hidden bg-gradient-to-r from-gray-700 via-slate-600 to-gray-800">
        <div class="absolute inset-0 bg-black/20"></div>
        <img src="{{ asset('img/presentacion/presentacionbackground.jpg') }}" 
             alt="MV5 Concursos de Selección para Docentes" 
             class="absolute inset-0 w-full h-full object-cover mix-blend-overlay opacity-30">
        <div class="relative h-full flex items-center justify-center px-6">
            <div class="text-center text-white max-w-4xl mx-auto">
                <div class="w-20 h-20 bg-white/10 backdrop-blur-sm rounded-full flex items-center justify-center mx-auto mb-4 border border-white/20">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0V5a2 2 0 00-2-2H10a2 2 0 00-2 2v1m8 0h2a2 2 0 012 2v10a2 2 0 01-2 2H4a2 2 0 01-2-2V8a2 2 0 012-2h2"></path>
                    </svg>
                </div>
                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold mb-4 drop-shadow-lg">
                    MV5: Concursos de Selección para Docentes
                </h1>
                <p class="text-lg sm:text-xl opacity-90 max-w-2xl mx-auto leading-relaxed">
                    Bases y convocatorias para la contratación del cuerpo docente universitario
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
                <span class="text-gray-800 font-semibold">MV5: Concursos Docentes</span>
            </nav>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Main Content Area -->
            <div class="lg:col-span-2">
                <!-- Introducción -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden border-t-4 border-rose-600 mb-8">
                    <div class="p-8">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-gradient-to-r from-rose-600 to-pink-600 rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0V5a2 2 0 00-2-2H10a2 2 0 00-2 2v1m8 0h2a2 2 0 012 2v10a2 2 0 01-2 2H4a2 2 0 01-2-2V8a2 2 0 012-2h2"></path>
                                </svg>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-800">Concursos de Selección para Docentes</h2>
                        </div>

                        <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed space-y-4">
                            <p>
                                Los <strong>concursos de selección para docentes</strong> establecen los procedimientos, requisitos y criterios para la contratación de personal académico en la Universidad Nacional Amazónica de Madre de Dios, garantizando transparencia y meritocracia en la selección del cuerpo docente.
                            </p>
                            <p>
                                Las bases de cada convocatoria incluyen <strong>perfiles requeridos</strong>, cronogramas, procedimientos de evaluación, escalas remunerativas y condiciones contractuales para docentes y jefes de práctica en las diferentes facultades y escuelas profesionales.
                            </p>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-8">
                            <div class="text-center p-4 bg-rose-50 rounded-lg border border-rose-200">
                                <div class="w-12 h-12 bg-rose-600 rounded-full flex items-center justify-center mx-auto mb-3">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                    </svg>
                                </div>
                                <h3 class="font-semibold text-rose-800 text-sm">Proceso Transparente</h3>
                                <p class="text-xs text-rose-700 mt-1">Selección por mérito y competencias</p>
                            </div>

                            <div class="text-center p-4 bg-rose-50 rounded-lg border border-rose-200">
                                <div class="w-12 h-12 bg-rose-600 rounded-full flex items-center justify-center mx-auto mb-3">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                    </svg>
                                </div>
                                <h3 class="font-semibold text-rose-800 text-sm">Calidad Docente</h3>
                                <p class="text-xs text-rose-700 mt-1">Profesionales calificados</p>
                            </div>

                            <div class="text-center p-4 bg-rose-50 rounded-lg border border-rose-200">
                                <div class="w-12 h-12 bg-rose-600 rounded-full flex items-center justify-center mx-auto mb-3">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                                    </svg>
                                </div>
                                <h3 class="font-semibold text-rose-800 text-sm">Normativa Clara</h3>
                                <p class="text-xs text-rose-700 mt-1">Bases y procedimientos definidos</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Convocatorias por Año -->
                <div class="space-y-8">
                    <!-- 2024 -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden border-t-4 border-emerald-600">
                        <div class="p-6">
                            <div class="flex items-center mb-4">
                                <div class="w-10 h-10 bg-emerald-600 rounded-full flex items-center justify-center mr-3">
                                    <span class="text-white font-bold text-lg">24</span>
                                </div>
                                <h3 class="text-xl font-bold text-gray-800">2024</h3>
                            </div>
                            
                            <a href="https://sinc.unamad.edu.pe:8000/media/pdf/1._BASES_PARA_EL_I_CONCURSO_PUBLICO_CONTRATACION_DOCENTES_Y_JEFES_DE_PRACTICA_2" 
                               target="_blank" 
                               rel="noopener noreferrer"
                               class="flex items-center p-4 bg-emerald-50 rounded-lg border border-emerald-200 hover:bg-emerald-100 transition-colors duration-200 group">
                                <div class="flex items-center justify-center w-12 h-12 rounded-full bg-emerald-100 group-hover:bg-emerald-200 flex-shrink-0 mr-4">
                                    <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <h4 class="font-semibold text-gray-800 group-hover:text-gray-900">Bases de la I Convocatoria</h4>
                                    <p class="text-sm text-gray-600 mt-1">Primera convocatoria para contratación de docentes y jefes de práctica 2024</p>
                                    <div class="flex items-center mt-2 text-xs text-emerald-600">
                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                        </svg>
                                        Documento PDF
                                    </div>
                                </div>
                                <svg class="w-5 h-5 text-gray-400 ml-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- 2023 -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden border-t-4 border-blue-600">
                        <div class="p-6">
                            <div class="flex items-center mb-4">
                                <div class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center mr-3">
                                    <span class="text-white font-bold text-lg">23</span>
                                </div>
                                <h3 class="text-xl font-bold text-gray-800">2023</h3>
                            </div>
                            
                            <div class="grid gap-3">
                                <a href="https://sinc.unamad.edu.pe:8000/media/pdf/1._BASES_DEL_I_CONCURSO_P%C3%9ABLICO_DE_MERITOS_PARA_CONTRATACI%C3%93N_DE_DOCENTES__Y_JP_2023.pdf" 
                                   target="_blank" 
                                   rel="noopener noreferrer"
                                   class="flex items-center p-3 bg-blue-50 rounded-lg border border-blue-200 hover:bg-blue-100 transition-colors duration-200 group">
                                    <div class="flex items-center justify-center w-10 h-10 rounded-full bg-blue-100 group-hover:bg-blue-200 flex-shrink-0 mr-3">
                                        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <span class="font-semibold text-gray-800">Bases de la I Convocatoria</span>
                                        <p class="text-xs text-gray-600">Concurso público de méritos para contratación</p>
                                    </div>
                                    <svg class="w-4 h-4 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                    </svg>
                                </a>

                                <a href="https://www.gob.pe/institucion/unamad/normas-legales/4287007-120-2023-unamad-cu" 
                                   target="_blank" 
                                   rel="noopener noreferrer"
                                   class="flex items-center p-3 bg-blue-50 rounded-lg border border-blue-200 hover:bg-blue-100 transition-colors duration-200 group">
                                    <div class="flex items-center justify-center w-10 h-10 rounded-full bg-blue-100 group-hover:bg-blue-200 flex-shrink-0 mr-3">
                                        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <span class="font-semibold text-gray-800">Bases de la II Convocatoria</span>
                                        <p class="text-xs text-gray-600">Resolución 120-2023-UNAMAD-CU</p>
                                    </div>
                                    <svg class="w-4 h-4 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                    </svg>
                                </a>

                                <a href="https://www.gob.pe/institucion/unamad/normas-legales/4293353-resolucion-n-174-2023-unamad-cu" 
                                   target="_blank" 
                                   rel="noopener noreferrer"
                                   class="flex items-center p-3 bg-blue-50 rounded-lg border border-blue-200 hover:bg-blue-100 transition-colors duration-200 group">
                                    <div class="flex items-center justify-center w-10 h-10 rounded-full bg-blue-100 group-hover:bg-blue-200 flex-shrink-0 mr-3">
                                        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <span class="font-semibold text-gray-800">Bases de la III Convocatoria</span>
                                        <p class="text-xs text-gray-600">Resolución 174-2023-UNAMAD-CU</p>
                                    </div>
                                    <svg class="w-4 h-4 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- 2022 -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden border-t-4 border-purple-600">
                        <div class="p-6">
                            <div class="flex items-center mb-4">
                                <div class="w-10 h-10 bg-purple-600 rounded-full flex items-center justify-center mr-3">
                                    <span class="text-white font-bold text-lg">22</span>
                                </div>
                                <h3 class="text-xl font-bold text-gray-800">2022</h3>
                            </div>
                            
                            <div class="grid gap-3">
                                <a href="https://sinc.unamad.edu.pe:8000/media/pdf/1._BASES_DEL_I_CONCURSO_PUBLICO_VIRTUAL_CONTRATACI%C3%93N_DE_DOCENTES_2022_RESOLUCI%C3%93N_083-2022-CU.pdf" 
                                   target="_blank" 
                                   rel="noopener noreferrer"
                                   class="flex items-center p-3 bg-purple-50 rounded-lg border border-purple-200 hover:bg-purple-100 transition-colors duration-200 group">
                                    <div class="flex items-center justify-center w-10 h-10 rounded-full bg-purple-100 group-hover:bg-purple-200 flex-shrink-0 mr-3">
                                        <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <span class="font-semibold text-gray-800">Bases de la I Convocatoria</span>
                                        <p class="text-xs text-gray-600">Concurso público virtual - Resolución 083-2022-CU</p>
                                    </div>
                                    <svg class="w-4 h-4 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                    </svg>
                                </a>

                                <a href="https://www.gob.pe/institucion/unamad/normas-legales/3478352-092-2022-unamad-cu" 
                                   target="_blank" 
                                   rel="noopener noreferrer"
                                   class="flex items-center p-3 bg-purple-50 rounded-lg border border-purple-200 hover:bg-purple-100 transition-colors duration-200 group">
                                    <div class="flex items-center justify-center w-10 h-10 rounded-full bg-purple-100 group-hover:bg-purple-200 flex-shrink-0 mr-3">
                                        <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <span class="font-semibold text-gray-800">Actualización de Bases I Convocatoria</span>
                                        <p class="text-xs text-gray-600">Resolución 092-2022-UNAMAD-CU</p>
                                    </div>
                                    <svg class="w-4 h-4 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                    </svg>
                                </a>

                                <a href="https://www.gob.pe/institucion/unamad/normas-legales/3478430-145-2022-unamad-cu" 
                                   target="_blank" 
                                   rel="noopener noreferrer"
                                   class="flex items-center p-3 bg-purple-50 rounded-lg border border-purple-200 hover:bg-purple-100 transition-colors duration-200 group">
                                    <div class="flex items-center justify-center w-10 h-10 rounded-full bg-purple-100 group-hover:bg-purple-200 flex-shrink-0 mr-3">
                                        <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <span class="font-semibold text-gray-800">Bases de la II Convocatoria</span>
                                        <p class="text-xs text-gray-600">Resolución 145-2022-UNAMAD-CU</p>
                                    </div>
                                    <svg class="w-4 h-4 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                    </svg>
                                </a>

                                <a href="https://sinc.unamad.edu.pe:8000/media/pdf/3._BASES_DEL_III_CONCURSO_PUBLICO_VIRTUAL_CONTRATACI%C3%93N_DE_DOCENTES_2022.pdf" 
                                   target="_blank" 
                                   rel="noopener noreferrer"
                                   class="flex items-center p-3 bg-purple-50 rounded-lg border border-purple-200 hover:bg-purple-100 transition-colors duration-200 group">
                                    <div class="flex items-center justify-center w-10 h-10 rounded-full bg-purple-100 group-hover:bg-purple-200 flex-shrink-0 mr-3">
                                        <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <span class="font-semibold text-gray-800">Bases de la III Convocatoria</span>
                                        <p class="text-xs text-gray-600">Concurso público virtual de docentes 2022</p>
                                    </div>
                                    <svg class="w-4 h-4 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- 2021 -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden border-t-4 border-orange-600">
                        <div class="p-6">
                            <div class="flex items-center mb-4">
                                <div class="w-10 h-10 bg-orange-600 rounded-full flex items-center justify-center mr-3">
                                    <span class="text-white font-bold text-lg">21</span>
                                </div>
                                <h3 class="text-xl font-bold text-gray-800">2021</h3>
                            </div>
                            
                            <div class="grid gap-3">
                                <a href="https://www.gob.pe/institucion/unamad/normas-legales/3468130-058-2021-unamad-cu" 
                                   target="_blank" 
                                   rel="noopener noreferrer"
                                   class="flex items-center p-3 bg-orange-50 rounded-lg border border-orange-200 hover:bg-orange-100 transition-colors duration-200 group">
                                    <div class="flex items-center justify-center w-10 h-10 rounded-full bg-orange-100 group-hover:bg-orange-200 flex-shrink-0 mr-3">
                                        <svg class="w-5 h-5 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <span class="font-semibold text-gray-800">Bases de la I Convocatoria</span>
                                        <p class="text-xs text-gray-600">Resolución 058-2021-UNAMAD-CU</p>
                                    </div>
                                    <svg class="w-4 h-4 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                    </svg>
                                </a>

                                <a href="https://www.gob.pe/institucion/unamad/normas-legales/3648105-097-2021-unamad-cu" 
                                   target="_blank" 
                                   rel="noopener noreferrer"
                                   class="flex items-center p-3 bg-orange-50 rounded-lg border border-orange-200 hover:bg-orange-100 transition-colors duration-200 group">
                                    <div class="flex items-center justify-center w-10 h-10 rounded-full bg-orange-100 group-hover:bg-orange-200 flex-shrink-0 mr-3">
                                        <svg class="w-5 h-5 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <span class="font-semibold text-gray-800">Bases de la II Convocatoria</span>
                                        <p class="text-xs text-gray-600">Resolución 097-2021-UNAMAD-CU</p>
                                    </div>
                                    <svg class="w-4 h-4 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                    </svg>
                                </a>

                                <a href="https://www.gob.pe/institucion/unamad/normas-legales/3478394-128-2021-unamad-cu" 
                                   target="_blank" 
                                   rel="noopener noreferrer"
                                   class="flex items-center p-3 bg-orange-50 rounded-lg border border-orange-200 hover:bg-orange-100 transition-colors duration-200 group">
                                    <div class="flex items-center justify-center w-10 h-10 rounded-full bg-orange-100 group-hover:bg-orange-200 flex-shrink-0 mr-3">
                                        <svg class="w-5 h-5 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <span class="font-semibold text-gray-800">Bases de la III Convocatoria</span>
                                        <p class="text-xs text-gray-600">Resolución 128-2021-UNAMAD-CU</p>
                                    </div>
                                    <svg class="w-4 h-4 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- 2020 -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden border-t-4 border-red-600">
                        <div class="p-6">
                            <div class="flex items-center mb-4">
                                <div class="w-10 h-10 bg-red-600 rounded-full flex items-center justify-center mr-3">
                                    <span class="text-white font-bold text-lg">20</span>
                                </div>
                                <h3 class="text-xl font-bold text-gray-800">2020</h3>
                            </div>
                            
                            <div class="grid gap-3">
                                <a href="https://www.gob.pe/institucion/unamad/normas-legales/3477590-527-2019-unamad-cu" 
                                   target="_blank" 
                                   rel="noopener noreferrer"
                                   class="flex items-center p-3 bg-red-50 rounded-lg border border-red-200 hover:bg-red-100 transition-colors duration-200 group">
                                    <div class="flex items-center justify-center w-10 h-10 rounded-full bg-red-100 group-hover:bg-red-200 flex-shrink-0 mr-3">
                                        <svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <span class="font-semibold text-gray-800">Bases de la I Convocatoria</span>
                                        <p class="text-xs text-gray-600">Resolución 527-2019-UNAMAD-CU</p>
                                    </div>
                                    <svg class="w-4 h-4 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                    </svg>
                                </a>

                                <a href="https://www.gob.pe/institucion/unamad/normas-legales/3469127-012-2020-unamad-cu" 
                                   target="_blank" 
                                   rel="noopener noreferrer"
                                   class="flex items-center p-3 bg-red-50 rounded-lg border border-red-200 hover:bg-red-100 transition-colors duration-200 group">
                                    <div class="flex items-center justify-center w-10 h-10 rounded-full bg-red-100 group-hover:bg-red-200 flex-shrink-0 mr-3">
                                        <svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <span class="font-semibold text-gray-800">Bases de la II Convocatoria</span>
                                        <p class="text-xs text-gray-600">Resolución 012-2020-UNAMAD-CU</p>
                                    </div>
                                    <svg class="w-4 h-4 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                    </svg>
                                </a>

                                <a href="https://sinc.unamad.edu.pe:8000/media/pdf/4._Bases_de_la_III_Convocatoria_de_Contrato_de_Docentes_y_Jefes_de_Pr%C3%A1cticas_RESOLUC_jCd8hNt.pdf" 
                                   target="_blank" 
                                   rel="noopener noreferrer"
                                   class="flex items-center p-3 bg-red-50 rounded-lg border border-red-200 hover:bg-red-100 transition-colors duration-200 group">
                                    <div class="flex items-center justify-center w-10 h-10 rounded-full bg-red-100 group-hover:bg-red-200 flex-shrink-0 mr-3">
                                        <svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <span class="font-semibold text-gray-800">Bases de la III Convocatoria</span>
                                        <p class="text-xs text-gray-600">Contrato de docentes y jefes de prácticas</p>
                                    </div>
                                    <svg class="w-4 h-4 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                    </svg>
                                </a>

                                <a href="https://www.gob.pe/institucion/unamad/normas-legales/3479985-100-2020-unamad-cu" 
                                   target="_blank" 
                                   rel="noopener noreferrer"
                                   class="flex items-center p-3 bg-red-50 rounded-lg border border-red-200 hover:bg-red-100 transition-colors duration-200 group">
                                    <div class="flex items-center justify-center w-10 h-10 rounded-full bg-red-100 group-hover:bg-red-200 flex-shrink-0 mr-3">
                                        <svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <span class="font-semibold text-gray-800">Bases de la IV Convocatoria</span>
                                        <p class="text-xs text-gray-600">Resolución 100-2020-UNAMAD-CU</p>
                                    </div>
                                    <svg class="w-4 h-4 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                    </svg>
                                </a>

                                <a href="https://www.gob.pe/institucion/unamad/normas-legales/3468273-247-2020-unamad-cu" 
                                   target="_blank" 
                                   rel="noopener noreferrer"
                                   class="flex items-center p-3 bg-red-50 rounded-lg border border-red-200 hover:bg-red-100 transition-colors duration-200 group">
                                    <div class="flex items-center justify-center w-10 h-10 rounded-full bg-red-100 group-hover:bg-red-200 flex-shrink-0 mr-3">
                                        <svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <span class="font-semibold text-gray-800">Bases de la V Convocatoria</span>
                                        <p class="text-xs text-gray-600">Resolución 247-2020-UNAMAD-CU</p>
                                    </div>
                                    <svg class="w-4 h-4 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- 2019 -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden border-t-4 border-teal-600">
                        <div class="p-6">
                            <div class="flex items-center mb-4">
                                <div class="w-10 h-10 bg-teal-600 rounded-full flex items-center justify-center mr-3">
                                    <span class="text-white font-bold text-lg">19</span>
                                </div>
                                <h3 class="text-xl font-bold text-gray-800">2019</h3>
                            </div>
                            
                            <div class="grid gap-3">
                                <a href="https://www.gob.pe/institucion/unamad/normas-legales/3476175-489-2018-unamad-cu" 
                                   target="_blank" 
                                   rel="noopener noreferrer"
                                   class="flex items-center p-3 bg-teal-50 rounded-lg border border-teal-200 hover:bg-teal-100 transition-colors duration-200 group">
                                    <div class="flex items-center justify-center w-10 h-10 rounded-full bg-teal-100 group-hover:bg-teal-200 flex-shrink-0 mr-3">
                                        <svg class="w-5 h-5 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <span class="font-semibold text-gray-800">Bases de la I Convocatoria</span>
                                        <p class="text-xs text-gray-600">Resolución 489-2018-UNAMAD-CU</p>
                                    </div>
                                    <svg class="w-4 h-4 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                    </svg>
                                </a>

                                <a href="https://www.gob.pe/institucion/unamad/normas-legales/3469544-093-2019-unamad-cu" 
                                   target="_blank" 
                                   rel="noopener noreferrer"
                                   class="flex items-center p-3 bg-teal-50 rounded-lg border border-teal-200 hover:bg-teal-100 transition-colors duration-200 group">
                                    <div class="flex items-center justify-center w-10 h-10 rounded-full bg-teal-100 group-hover:bg-teal-200 flex-shrink-0 mr-3">
                                        <svg class="w-5 h-5 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <span class="font-semibold text-gray-800">Bases de la II Convocatoria</span>
                                        <p class="text-xs text-gray-600">Resolución 093-2019-UNAMAD-CU</p>
                                    </div>
                                    <svg class="w-4 h-4 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                    </svg>
                                </a>

                                <a href="https://www.gob.pe/institucion/unamad/normas-legales/3470951-130-2019-unamad-cu" 
                                   target="_blank" 
                                   rel="noopener noreferrer"
                                   class="flex items-center p-3 bg-teal-50 rounded-lg border border-teal-200 hover:bg-teal-100 transition-colors duration-200 group">
                                    <div class="flex items-center justify-center w-10 h-10 rounded-full bg-teal-100 group-hover:bg-teal-200 flex-shrink-0 mr-3">
                                        <svg class="w-5 h-5 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <span class="font-semibold text-gray-800">Bases de la III Convocatoria</span>
                                        <p class="text-xs text-gray-600">Resolución 130-2019-UNAMAD-CU</p>
                                    </div>
                                    <svg class="w-4 h-4 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Información Importante -->
                <div class="bg-gradient-to-r from-rose-50 to-pink-50 rounded-xl shadow-lg overflow-hidden border border-rose-200 mt-8">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="w-10 h-10 bg-rose-600 rounded-full flex items-center justify-center mr-3">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold text-rose-800">Información sobre los Concursos</h3>
                        </div>
                        
                        <div class="text-rose-700 space-y-2 text-sm">
                            <p><strong>• Múltiples convocatorias:</strong> UNAMAD realiza varias convocatorias anuales para cubrir necesidades docentes</p>
                            <p><strong>• Modalidades virtuales:</strong> Desde 2022 se implementaron concursos públicos virtuales</p>
                            <p><strong>• Cargos disponibles:</strong> Contratación de docentes y jefes de prácticas para diferentes facultades</p>
                            <p><strong>• Base legal:</strong> Todas las convocatorias se sustentan en resoluciones del Consejo Universitario</p>
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