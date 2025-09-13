@extends('layouts.app')

@section('title', 'MV3: Temarios de Exámenes de Admisión - Indicador 55 UNAMAD')

@section('content')
    <!-- Hero Section -->
    <div class="relative h-64 sm:h-80 lg:h-96 overflow-hidden bg-gradient-to-r from-gray-700 via-slate-600 to-gray-800">
        <div class="absolute inset-0 bg-black/20"></div>
        <img src="{{ asset('img/presentacion/presentacionbackground.jpg') }}" 
             alt="MV3 Temarios de Exámenes de Admisión" 
             class="absolute inset-0 w-full h-full object-cover mix-blend-overlay opacity-30">
        <div class="relative h-full flex items-center justify-center px-6">
            <div class="text-center text-white max-w-4xl mx-auto">
                <div class="w-20 h-20 bg-white/10 backdrop-blur-sm rounded-full flex items-center justify-center mx-auto mb-4 border border-white/20">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                    </svg>
                </div>
                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold mb-4 drop-shadow-lg">
                    MV3: Temarios de Exámenes de Admisión
                </h1>
                <p class="text-lg sm:text-xl opacity-90 max-w-2xl mx-auto leading-relaxed">
                    Contenido temático y guías de estudio para los exámenes de ingreso universitario
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
                <span class="text-gray-800 font-semibold">MV3: Temarios de Exámenes</span>
            </nav>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Main Content Area -->
            <div class="lg:col-span-2">
                <!-- Introducción -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden border-t-4 border-amber-600 mb-8">
                    <div class="p-8">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-gradient-to-r from-amber-600 to-orange-600 rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                                </svg>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-800">Temarios de Exámenes de Admisión</h2>
                        </div>

                        <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed space-y-4">
                            <p>
                                Los <strong>temarios de exámenes de admisión</strong> proporcionan a los postulantes la información detallada sobre los contenidos, materias y temas específicos que serán evaluados en los exámenes de ingreso a la Universidad Nacional Amazónica de Madre de Dios.
                            </p>
                            <p>
                                Estos documentos oficiales incluyen las <strong>áreas de conocimiento</strong>, subtemas, bibliografía recomendada y estructura del examen, permitiendo a los aspirantes prepararse de manera adecuada y transparente para el proceso de admisión.
                            </p>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-8">
                            <div class="text-center p-4 bg-amber-50 rounded-lg border border-amber-200">
                                <div class="w-12 h-12 bg-amber-600 rounded-full flex items-center justify-center mx-auto mb-3">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                    </svg>
                                </div>
                                <h3 class="font-semibold text-amber-800 text-sm">Contenido Detallado</h3>
                                <p class="text-xs text-amber-700 mt-1">Materias y temas específicos</p>
                            </div>

                            <div class="text-center p-4 bg-amber-50 rounded-lg border border-amber-200">
                                <div class="w-12 h-12 bg-amber-600 rounded-full flex items-center justify-center mx-auto mb-3">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                                    </svg>
                                </div>
                                <h3 class="font-semibold text-amber-800 text-sm">Guía de Preparación</h3>
                                <p class="text-xs text-amber-700 mt-1">Orientación para el estudio</p>
                            </div>

                            <div class="text-center p-4 bg-amber-50 rounded-lg border border-amber-200">
                                <div class="w-12 h-12 bg-amber-600 rounded-full flex items-center justify-center mx-auto mb-3">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                    </svg>
                                </div>
                                <h3 class="font-semibold text-amber-800 text-sm">Transparencia</h3>
                                <p class="text-xs text-amber-700 mt-1">Proceso justo y equitativo</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Temarios por Año -->
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
                            
                            <a href="https://sinc.unamad.edu.pe:8000/media/pdf/TEMARIO_2024_Ycd4OKV.pdf" 
                               target="_blank" 
                               rel="noopener noreferrer"
                               class="flex items-center p-4 bg-emerald-50 rounded-lg border border-emerald-200 hover:bg-emerald-100 transition-colors duration-200 group">
                                <div class="flex items-center justify-center w-12 h-12 rounded-full bg-emerald-100 group-hover:bg-emerald-200 flex-shrink-0 mr-4">
                                    <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <h4 class="font-semibold text-gray-800 group-hover:text-gray-900">Temario de Examen de Admisión 2024</h4>
                                    <p class="text-sm text-gray-600 mt-1">Contenido actualizado para el proceso de admisión 2024</p>
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
                            
                            <a href="https://sinc.unamad.edu.pe:8000/media/pdf/TEMARIO_2023_jR2ojw3.pdf" 
                               target="_blank" 
                               rel="noopener noreferrer"
                               class="flex items-center p-4 bg-blue-50 rounded-lg border border-blue-200 hover:bg-blue-100 transition-colors duration-200 group">
                                <div class="flex items-center justify-center w-12 h-12 rounded-full bg-blue-100 group-hover:bg-blue-200 flex-shrink-0 mr-4">
                                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <h4 class="font-semibold text-gray-800 group-hover:text-gray-900">Temario de Examen de Admisión 2023</h4>
                                    <p class="text-sm text-gray-600 mt-1">Guía de contenidos para el examen de ingreso 2023</p>
                                    <div class="flex items-center mt-2 text-xs text-blue-600">
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
                                <a href="https://sinc.unamad.edu.pe:8000/media/pdf/TEMARIO_2022-1_hkHVRNB.pdf" 
                                   target="_blank" 
                                   rel="noopener noreferrer"
                                   class="flex items-center p-4 bg-purple-50 rounded-lg border border-purple-200 hover:bg-purple-100 transition-colors duration-200 group">
                                    <div class="flex items-center justify-center w-12 h-12 rounded-full bg-purple-100 group-hover:bg-purple-200 flex-shrink-0 mr-4">
                                        <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="font-semibold text-gray-800 group-hover:text-gray-900">Temario de Examen de Admisión 2022-1</h4>
                                        <p class="text-sm text-gray-600 mt-1">Primer proceso de admisión del año 2022</p>
                                        <div class="flex items-center mt-2 text-xs text-purple-600">
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

                                <a href="https://sinc.unamad.edu.pe:8000/media/pdf/TEMARIO_2022-2_FNyZz9k.pdf" 
                                   target="_blank" 
                                   rel="noopener noreferrer"
                                   class="flex items-center p-4 bg-purple-50 rounded-lg border border-purple-200 hover:bg-purple-100 transition-colors duration-200 group">
                                    <div class="flex items-center justify-center w-12 h-12 rounded-full bg-purple-100 group-hover:bg-purple-200 flex-shrink-0 mr-4">
                                        <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="font-semibold text-gray-800 group-hover:text-gray-900">Temario de Examen de Admisión 2022-2</h4>
                                        <p class="text-sm text-gray-600 mt-1">Segundo proceso de admisión del año 2022</p>
                                        <div class="flex items-center mt-2 text-xs text-purple-600">
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
                            
                            <a href="https://sinc.unamad.edu.pe:8000/media/pdf/TEMARIO_2019.pdf" 
                               target="_blank" 
                               rel="noopener noreferrer"
                               class="flex items-center p-4 bg-teal-50 rounded-lg border border-teal-200 hover:bg-teal-100 transition-colors duration-200 group">
                                <div class="flex items-center justify-center w-12 h-12 rounded-full bg-teal-100 group-hover:bg-teal-200 flex-shrink-0 mr-4">
                                    <svg class="w-6 h-6 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <h4 class="font-semibold text-gray-800 group-hover:text-gray-900">Temario de Examen de Admisión 2019</h4>
                                    <p class="text-sm text-gray-600 mt-1">Contenidos de referencia histórica del proceso de admisión</p>
                                    <div class="flex items-center mt-2 text-xs text-teal-600">
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
                </div>

                <!-- Información Importante -->
                <div class="bg-gradient-to-r from-amber-50 to-orange-50 rounded-xl shadow-lg overflow-hidden border border-amber-200 mt-8">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="w-10 h-10 bg-amber-600 rounded-full flex items-center justify-center mr-3">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold text-amber-800">Información Importante</h3>
                        </div>
                        
                        <div class="text-amber-700 space-y-2 text-sm">
                            <p><strong>• Revisión constante:</strong> Los temarios pueden ser actualizados según las necesidades académicas</p>
                            <p><strong>• Preparación integral:</strong> Se recomienda estudiar todos los contenidos indicados en el temario oficial</p>
                            <p><strong>• Consultas oficiales:</strong> Para dudas específicas, contactar directamente con la oficina de admisión</p>
                            <p><strong>• Documentos oficiales:</strong> Solo los temarios publicados en el sistema oficial son válidos</p>
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