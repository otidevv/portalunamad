@extends('layouts.app')

@section('title', 'MV2: Reglamento y Calendario de Admisión - Indicador 55 UNAMAD')

@section('content')
    <!-- Hero Section -->
    <div class="relative h-64 sm:h-80 lg:h-96 overflow-hidden bg-gradient-to-r from-gray-700 via-slate-600 to-gray-800">
        <div class="absolute inset-0 bg-black/20"></div>
        <img src="{{ asset('img/presentacion/presentacionbackground.jpg') }}" 
             alt="MV2 Reglamento y Calendario de Admisión" 
             class="absolute inset-0 w-full h-full object-cover mix-blend-overlay opacity-30">
        <div class="relative h-full flex items-center justify-center px-6">
            <div class="text-center text-white max-w-4xl mx-auto">
                <div class="w-20 h-20 bg-white/10 backdrop-blur-sm rounded-full flex items-center justify-center mx-auto mb-4 border border-white/20">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3a2 2 0 012-2h4a2 2 0 012 2v4m-6 0V6a2 2 0 012-2h2a2 2 0 012 2v1M8 7h8m-8 0l-4 12h16L16 7M8 7V6a2 2 0 012-2h2a2 2 0 012 2v1"></path>
                    </svg>
                </div>
                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold mb-4 drop-shadow-lg">
                    MV2: Reglamento y Calendario de Admisión
                </h1>
                <p class="text-lg sm:text-xl opacity-90 max-w-2xl mx-auto leading-relaxed">
                    Normativas y cronogramas oficiales del proceso de admisión universitaria
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
                <span class="text-gray-800 font-semibold">MV2: Reglamento de Admisión</span>
            </nav>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Main Content Area -->
            <div class="lg:col-span-2">
                <!-- Introducción -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden border-t-4 border-indigo-600 mb-8">
                    <div class="p-8">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-gradient-to-r from-indigo-600 to-purple-600 rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3a2 2 0 012-2h4a2 2 0 012 2v4m-6 0V6a2 2 0 012-2h2a2 2 0 012 2v1M8 7h8m-8 0l-4 12h16L16 7M8 7V6a2 2 0 012-2h2a2 2 0 012 2v1"></path>
                                </svg>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-800">Reglamento y Calendario de Admisión</h2>
                        </div>

                        <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed space-y-4">
                            <p>
                                El proceso de admisión de la Universidad Nacional Amazónica de Madre de Dios se rige por <strong>reglamentos</strong> actualizados periódicamente que establecen los procedimientos, requisitos y criterios para el ingreso a la universidad.
                            </p>
                            <p>
                                Complementariamente, los <strong>calendarios de admisión</strong> definen las fechas específicas, cronogramas y plazos para cada etapa del proceso de admisión, garantizando transparencia y oportunidad para todos los postulantes.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Documentos por Año -->
                <div class="space-y-8">
                    <!-- 2024 -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden border-t-4 border-green-600">
                        <div class="p-6">
                            <div class="flex items-center mb-4">
                                <div class="w-10 h-10 bg-green-600 rounded-full flex items-center justify-center mr-3">
                                    <span class="text-white font-bold text-lg">24</span>
                                </div>
                                <h3 class="text-xl font-bold text-gray-800">2024</h3>
                            </div>
                            
                            <div class="grid gap-3">
                                <a href="https://www.gob.pe/institucion/unamad/normas-legales/5384832-126-2024-unamad-cu" 
                                   target="_blank" 
                                   rel="noopener noreferrer"
                                   class="flex items-center p-3 bg-green-50 rounded-lg border border-green-200 hover:bg-green-100 transition-colors duration-200 group">
                                    <div class="flex items-center justify-center w-8 h-8 rounded-full bg-green-100 group-hover:bg-green-200 flex-shrink-0 mr-3">
                                        <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <span class="font-semibold text-gray-800">Reglamento de Admisión v8.0</span>
                                        <p class="text-xs text-gray-600">Resolución 126-2024-UNAMAD-CU</p>
                                    </div>
                                    <svg class="w-4 h-4 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                    </svg>
                                </a>

                                <a href="https://www.gob.pe/institucion/unamad/normas-legales/6006448-396-2024-unamad-cu" 
                                   target="_blank" 
                                   rel="noopener noreferrer"
                                   class="flex items-center p-3 bg-green-50 rounded-lg border border-green-200 hover:bg-green-100 transition-colors duration-200 group">
                                    <div class="flex items-center justify-center w-8 h-8 rounded-full bg-green-100 group-hover:bg-green-200 flex-shrink-0 mr-3">
                                        <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <span class="font-semibold text-gray-800">Reglamento de Admisión v9.0</span>
                                        <p class="text-xs text-gray-600">Resolución 396-2024-UNAMAD-CU</p>
                                    </div>
                                    <svg class="w-4 h-4 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                    </svg>
                                </a>

                                <a href="https://www.gob.pe/institucion/unamad/normas-legales/5250634-003-2024-unamad-cu" 
                                   target="_blank" 
                                   rel="noopener noreferrer"
                                   class="flex items-center p-3 bg-blue-50 rounded-lg border border-blue-200 hover:bg-blue-100 transition-colors duration-200 group">
                                    <div class="flex items-center justify-center w-8 h-8 rounded-full bg-blue-100 group-hover:bg-blue-200 flex-shrink-0 mr-3">
                                        <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3a2 2 0 012-2h4a2 2 0 012 2v4m-6 0V6a2 2 0 012-2h2a2 2 0 012 2v1M8 7h8m-8 0l-4 12h16L16 7M8 7V6a2 2 0 012-2h2a2 2 0 012 2v1"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <span class="font-semibold text-gray-800">Calendario de Admisión</span>
                                        <p class="text-xs text-gray-600">Resolución 003-2024-UNAMAD-CU</p>
                                    </div>
                                    <svg class="w-4 h-4 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                    </svg>
                                </a>
                            </div>
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
                                <a href="https://www.gob.pe/institucion/unamad/normas-legales/4286994-119-2023-unamad-cu" 
                                   target="_blank" 
                                   rel="noopener noreferrer"
                                   class="flex items-center p-3 bg-green-50 rounded-lg border border-green-200 hover:bg-green-100 transition-colors duration-200 group">
                                    <div class="flex items-center justify-center w-8 h-8 rounded-full bg-green-100 group-hover:bg-green-200 flex-shrink-0 mr-3">
                                        <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <span class="font-semibold text-gray-800">Reglamento de Admisión v6.0</span>
                                        <p class="text-xs text-gray-600">Resolución 119-2023-UNAMAD-CU</p>
                                    </div>
                                    <svg class="w-4 h-4 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                    </svg>
                                </a>

                                <a href="https://www.gob.pe/institucion/unamad/normas-legales/4709053-431-2023-unamad-cu" 
                                   target="_blank" 
                                   rel="noopener noreferrer"
                                   class="flex items-center p-3 bg-green-50 rounded-lg border border-green-200 hover:bg-green-100 transition-colors duration-200 group">
                                    <div class="flex items-center justify-center w-8 h-8 rounded-full bg-green-100 group-hover:bg-green-200 flex-shrink-0 mr-3">
                                        <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <span class="font-semibold text-gray-800">Reglamento de Admisión v7.0</span>
                                        <p class="text-xs text-gray-600">Resolución 431-2023-UNAMAD-CU</p>
                                    </div>
                                    <svg class="w-4 h-4 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                    </svg>
                                </a>

                                <a href="https://www.gob.pe/institucion/unamad/normas-legales/4484481-390-2023-unamad-cu" 
                                   target="_blank" 
                                   rel="noopener noreferrer"
                                   class="flex items-center p-3 bg-blue-50 rounded-lg border border-blue-200 hover:bg-blue-100 transition-colors duration-200 group">
                                    <div class="flex items-center justify-center w-8 h-8 rounded-full bg-blue-100 group-hover:bg-blue-200 flex-shrink-0 mr-3">
                                        <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3a2 2 0 012-2h4a2 2 0 012 2v4m-6 0V6a2 2 0 012-2h2a2 2 0 012 2v1M8 7h8m-8 0l-4 12h16L16 7M8 7V6a2 2 0 012-2h2a2 2 0 012 2v1"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <span class="font-semibold text-gray-800">Calendario de Admisión</span>
                                        <p class="text-xs text-gray-600">Resolución 390-2023-UNAMAD-CU</p>
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
                                <a href="https://www.gob.pe/institucion/unamad/normas-legales/3478342-086-2022-unamad-cu" 
                                   target="_blank" 
                                   rel="noopener noreferrer"
                                   class="flex items-center p-3 bg-green-50 rounded-lg border border-green-200 hover:bg-green-100 transition-colors duration-200 group">
                                    <div class="flex items-center justify-center w-8 h-8 rounded-full bg-green-100 group-hover:bg-green-200 flex-shrink-0 mr-3">
                                        <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <span class="font-semibold text-gray-800">Reglamento de Admisión v4.0</span>
                                        <p class="text-xs text-gray-600">Resolución 086-2022-UNAMAD-CU</p>
                                    </div>
                                    <svg class="w-4 h-4 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                    </svg>
                                </a>

                                <a href="https://www.gob.pe/institucion/unamad/normas-legales/3478870-342-2022-unamad-cu" 
                                   target="_blank" 
                                   rel="noopener noreferrer"
                                   class="flex items-center p-3 bg-green-50 rounded-lg border border-green-200 hover:bg-green-100 transition-colors duration-200 group">
                                    <div class="flex items-center justify-center w-8 h-8 rounded-full bg-green-100 group-hover:bg-green-200 flex-shrink-0 mr-3">
                                        <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <span class="font-semibold text-gray-800">Reglamento de Admisión v5.0</span>
                                        <p class="text-xs text-gray-600">Resolución 342-2022-UNAMAD-CU</p>
                                    </div>
                                    <svg class="w-4 h-4 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                    </svg>
                                </a>

                                <a href="https://www.gob.pe/institucion/unamad/normas-legales/3478255-025-2022-unamad-cu" 
                                   target="_blank" 
                                   rel="noopener noreferrer"
                                   class="flex items-center p-3 bg-blue-50 rounded-lg border border-blue-200 hover:bg-blue-100 transition-colors duration-200 group">
                                    <div class="flex items-center justify-center w-8 h-8 rounded-full bg-blue-100 group-hover:bg-blue-200 flex-shrink-0 mr-3">
                                        <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3a2 2 0 012-2h4a2 2 0 012 2v4m-6 0V6a2 2 0 012-2h2a2 2 0 012 2v1M8 7h8m-8 0l-4 12h16L16 7M8 7V6a2 2 0 012-2h2a2 2 0 012 2v1"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <span class="font-semibold text-gray-800">Calendario de Admisión</span>
                                        <p class="text-xs text-gray-600">Resolución 025-2022-UNAMAD-CU</p>
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
                                <a href="https://www.gob.pe/institucion/unamad/normas-legales/3611217-211-2019-unamad-r-his" 
                                   target="_blank" 
                                   rel="noopener noreferrer"
                                   class="flex items-center p-3 bg-green-50 rounded-lg border border-green-200 hover:bg-green-100 transition-colors duration-200 group">
                                    <div class="flex items-center justify-center w-8 h-8 rounded-full bg-green-100 group-hover:bg-green-200 flex-shrink-0 mr-3">
                                        <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <span class="font-semibold text-gray-800">Reglamento de Admisión</span>
                                        <p class="text-xs text-gray-600">Resolución 211-2019-UNAMAD-R-HIS</p>
                                    </div>
                                    <svg class="w-4 h-4 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                    </svg>
                                </a>

                                <a href="https://www.gob.pe/institucion/unamad/normas-legales/3478836-326-2021-unamad-cu" 
                                   target="_blank" 
                                   rel="noopener noreferrer"
                                   class="flex items-center p-3 bg-blue-50 rounded-lg border border-blue-200 hover:bg-blue-100 transition-colors duration-200 group">
                                    <div class="flex items-center justify-center w-8 h-8 rounded-full bg-blue-100 group-hover:bg-blue-200 flex-shrink-0 mr-3">
                                        <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3a2 2 0 012-2h4a2 2 0 012 2v4m-6 0V6a2 2 0 012-2h2a2 2 0 012 2v1M8 7h8m-8 0l-4 12h16L16 7M8 7V6a2 2 0 012-2h2a2 2 0 012 2v1"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <span class="font-semibold text-gray-800">Calendario de Admisión</span>
                                        <p class="text-xs text-gray-600">Resolución 326-2021-UNAMAD-CU</p>
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
                                <a href="https://www.gob.pe/institucion/unamad/normas-legales/3611217-211-2019-unamad-r-his" 
                                   target="_blank" 
                                   rel="noopener noreferrer"
                                   class="flex items-center p-3 bg-green-50 rounded-lg border border-green-200 hover:bg-green-100 transition-colors duration-200 group">
                                    <div class="flex items-center justify-center w-8 h-8 rounded-full bg-green-100 group-hover:bg-green-200 flex-shrink-0 mr-3">
                                        <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <span class="font-semibold text-gray-800">Reglamento de Admisión</span>
                                        <p class="text-xs text-gray-600">Resolución 211-2019-UNAMAD-R-HIS</p>
                                    </div>
                                    <svg class="w-4 h-4 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                    </svg>
                                </a>

                                <a href="https://www.gob.pe/institucion/unamad/normas-legales/3468060-240-2020-unamad-cu" 
                                   target="_blank" 
                                   rel="noopener noreferrer"
                                   class="flex items-center p-3 bg-blue-50 rounded-lg border border-blue-200 hover:bg-blue-100 transition-colors duration-200 group">
                                    <div class="flex items-center justify-center w-8 h-8 rounded-full bg-blue-100 group-hover:bg-blue-200 flex-shrink-0 mr-3">
                                        <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3a2 2 0 012-2h4a2 2 0 012 2v4m-6 0V6a2 2 0 012-2h2a2 2 0 012 2v1M8 7h8m-8 0l-4 12h16L16 7M8 7V6a2 2 0 012-2h2a2 2 0 012 2v1"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <span class="font-semibold text-gray-800">Calendario de Admisión</span>
                                        <p class="text-xs text-gray-600">Resolución 240-2020-UNAMAD-CU</p>
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
                                <a href="https://www.gob.pe/institucion/unamad/normas-legales/3468336-280-2018-unamad-cu" 
                                   target="_blank" 
                                   rel="noopener noreferrer"
                                   class="flex items-center p-3 bg-green-50 rounded-lg border border-green-200 hover:bg-green-100 transition-colors duration-200 group">
                                    <div class="flex items-center justify-center w-8 h-8 rounded-full bg-green-100 group-hover:bg-green-200 flex-shrink-0 mr-3">
                                        <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <span class="font-semibold text-gray-800">Reglamento de Admisión</span>
                                        <p class="text-xs text-gray-600">Resolución 280-2018-UNAMAD-CU</p>
                                    </div>
                                    <svg class="w-4 h-4 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                    </svg>
                                </a>

                                <a href="https://www.gob.pe/institucion/unamad/normas-legales/3469102-008-2019-unamad-cu" 
                                   target="_blank" 
                                   rel="noopener noreferrer"
                                   class="flex items-center p-3 bg-blue-50 rounded-lg border border-blue-200 hover:bg-blue-100 transition-colors duration-200 group">
                                    <div class="flex items-center justify-center w-8 h-8 rounded-full bg-blue-100 group-hover:bg-blue-200 flex-shrink-0 mr-3">
                                        <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3a2 2 0 012-2h4a2 2 0 012 2v4m-6 0V6a2 2 0 012-2h2a2 2 0 012 2v1M8 7h8m-8 0l-4 12h16L16 7M8 7V6a2 2 0 012-2h2a2 2 0 012 2v1"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <span class="font-semibold text-gray-800">Calendario de Admisión</span>
                                        <p class="text-xs text-gray-600">Resolución 008-2019-UNAMAD-CU</p>
                                    </div>
                                    <svg class="w-4 h-4 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                    </svg>
                                </a>
                            </div>
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