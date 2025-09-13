@extends('layouts.app')

@section('title', 'MV4: Postulantes e Ingresantes - Indicador 55 UNAMAD')

@section('content')
    <!-- Hero Section -->
    <div class="relative h-64 sm:h-80 lg:h-96 overflow-hidden bg-gradient-to-r from-gray-700 via-slate-600 to-gray-800">
        <div class="absolute inset-0 bg-black/20"></div>
        <img src="{{ asset('img/presentacion/presentacionbackground.jpg') }}" 
             alt="MV4 Postulantes e Ingresantes" 
             class="absolute inset-0 w-full h-full object-cover mix-blend-overlay opacity-30">
        <div class="relative h-full flex items-center justify-center px-6">
            <div class="text-center text-white max-w-4xl mx-auto">
                <div class="w-20 h-20 bg-white/10 backdrop-blur-sm rounded-full flex items-center justify-center mx-auto mb-4 border border-white/20">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold mb-4 drop-shadow-lg">
                    MV4: Postulantes e Ingresantes
                </h1>
                <p class="text-lg sm:text-xl opacity-90 max-w-2xl mx-auto leading-relaxed">
                    Estadísticas oficiales del proceso de admisión universitaria
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
                <span class="text-gray-800 font-semibold">MV4: Postulantes e Ingresantes</span>
            </nav>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Main Content Area -->
            <div class="lg:col-span-2">
                <!-- Introducción -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden border-t-4 border-cyan-600 mb-8">
                    <div class="p-8">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-gradient-to-r from-cyan-600 to-blue-600 rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-800">Postulantes e Ingresantes</h2>
                        </div>

                        <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed space-y-4">
                            <p>
                                Los <strong>reportes de postulantes e ingresantes</strong> proporcionan información estadística oficial sobre la demanda académica y los resultados de los procesos de admisión de la Universidad Nacional Amazónica de Madre de Dios.
                            </p>
                            <p>
                                Estos documentos incluyen datos desagregados por <strong>facultades, carreras profesionales</strong>, modalidades de ingreso y procesos semestrales, garantizando transparencia en el acceso a la educación superior universitaria.
                            </p>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-8">
                            <div class="text-center p-4 bg-cyan-50 rounded-lg border border-cyan-200">
                                <div class="w-12 h-12 bg-cyan-600 rounded-full flex items-center justify-center mx-auto mb-3">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                    </svg>
                                </div>
                                <h3 class="font-semibold text-cyan-800 text-sm">Datos Estadísticos</h3>
                                <p class="text-xs text-cyan-700 mt-1">Información cuantitativa oficial</p>
                            </div>

                            <div class="text-center p-4 bg-cyan-50 rounded-lg border border-cyan-200">
                                <div class="w-12 h-12 bg-cyan-600 rounded-full flex items-center justify-center mx-auto mb-3">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                    </svg>
                                </div>
                                <h3 class="font-semibold text-cyan-800 text-sm">Demanda Académica</h3>
                                <p class="text-xs text-cyan-700 mt-1">Postulantes por carrera</p>
                            </div>

                            <div class="text-center p-4 bg-cyan-50 rounded-lg border border-cyan-200">
                                <div class="w-12 h-12 bg-cyan-600 rounded-full flex items-center justify-center mx-auto mb-3">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                    </svg>
                                </div>
                                <h3 class="font-semibold text-cyan-800 text-sm">Transparencia</h3>
                                <p class="text-xs text-cyan-700 mt-1">Acceso público a resultados</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Reportes por Año -->
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
                            
                            <div class="grid gap-3">
                                <a href="https://sinc.unamad.edu.pe:8000/media/pdf/POSTULANTES_E_INGRESANTES_2024-1_Gv5FJNO.pdf" 
                                   target="_blank" 
                                   rel="noopener noreferrer"
                                   class="flex items-center p-4 bg-emerald-50 rounded-lg border border-emerald-200 hover:bg-emerald-100 transition-colors duration-200 group">
                                    <div class="flex items-center justify-center w-12 h-12 rounded-full bg-emerald-100 group-hover:bg-emerald-200 flex-shrink-0 mr-4">
                                        <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="font-semibold text-gray-800 group-hover:text-gray-900">Postulantes e Ingresantes 2024-1</h4>
                                        <p class="text-sm text-gray-600 mt-1">Primer proceso de admisión 2024</p>
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

                                <a href="https://sinc.unamad.edu.pe:8000/media/pdf/POSTULANTES_E_INGRESANTES_2024-2_bvy2Ho7.pdf" 
                                   target="_blank" 
                                   rel="noopener noreferrer"
                                   class="flex items-center p-4 bg-emerald-50 rounded-lg border border-emerald-200 hover:bg-emerald-100 transition-colors duration-200 group">
                                    <div class="flex items-center justify-center w-12 h-12 rounded-full bg-emerald-100 group-hover:bg-emerald-200 flex-shrink-0 mr-4">
                                        <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="font-semibold text-gray-800 group-hover:text-gray-900">Postulantes e Ingresantes 2024-2</h4>
                                        <p class="text-sm text-gray-600 mt-1">Segundo proceso de admisión 2024</p>
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
                                <a href="https://sinc.unamad.edu.pe:8000/media/pdf/POSTULANTES_E_INGRESANTES_2023-1_0U6pHM7.pdf" 
                                   target="_blank" 
                                   rel="noopener noreferrer"
                                   class="flex items-center p-4 bg-blue-50 rounded-lg border border-blue-200 hover:bg-blue-100 transition-colors duration-200 group">
                                    <div class="flex items-center justify-center w-12 h-12 rounded-full bg-blue-100 group-hover:bg-blue-200 flex-shrink-0 mr-4">
                                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="font-semibold text-gray-800 group-hover:text-gray-900">Postulantes e Ingresantes 2023-1</h4>
                                        <p class="text-sm text-gray-600 mt-1">Primer proceso de admisión 2023</p>
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

                                <a href="https://sinc.unamad.edu.pe:8000/media/pdf/POSTULANTES_E_INGRESANTES_2023-2_h0JRmdI.pdf" 
                                   target="_blank" 
                                   rel="noopener noreferrer"
                                   class="flex items-center p-4 bg-blue-50 rounded-lg border border-blue-200 hover:bg-blue-100 transition-colors duration-200 group">
                                    <div class="flex items-center justify-center w-12 h-12 rounded-full bg-blue-100 group-hover:bg-blue-200 flex-shrink-0 mr-4">
                                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="font-semibold text-gray-800 group-hover:text-gray-900">Postulantes e Ingresantes 2023-2</h4>
                                        <p class="text-sm text-gray-600 mt-1">Segundo proceso de admisión 2023</p>
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
                                <a href="https://sinc.unamad.edu.pe:8000/media/pdf/POSTULANTES_E_INGRESANTES_2022-1_JwZIUUd.pdf" 
                                   target="_blank" 
                                   rel="noopener noreferrer"
                                   class="flex items-center p-4 bg-purple-50 rounded-lg border border-purple-200 hover:bg-purple-100 transition-colors duration-200 group">
                                    <div class="flex items-center justify-center w-12 h-12 rounded-full bg-purple-100 group-hover:bg-purple-200 flex-shrink-0 mr-4">
                                        <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="font-semibold text-gray-800 group-hover:text-gray-900">Postulantes e Ingresantes 2022-1</h4>
                                        <p class="text-sm text-gray-600 mt-1">Primer proceso de admisión 2022</p>
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

                                <a href="https://sinc.unamad.edu.pe:8000/media/pdf/POSTULANTES_E_INGRESANTES_2022-2_HZbKbLI.pdf" 
                                   target="_blank" 
                                   rel="noopener noreferrer"
                                   class="flex items-center p-4 bg-purple-50 rounded-lg border border-purple-200 hover:bg-purple-100 transition-colors duration-200 group">
                                    <div class="flex items-center justify-center w-12 h-12 rounded-full bg-purple-100 group-hover:bg-purple-200 flex-shrink-0 mr-4">
                                        <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="font-semibold text-gray-800 group-hover:text-gray-900">Postulantes e Ingresantes 2022-2</h4>
                                        <p class="text-sm text-gray-600 mt-1">Segundo proceso de admisión 2022</p>
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
                                <a href="https://sinc.unamad.edu.pe:8000/media/pdf/POSTULANTES_E_INGRESANTES_2021-1_CFF8fqb.pdf" 
                                   target="_blank" 
                                   rel="noopener noreferrer"
                                   class="flex items-center p-4 bg-orange-50 rounded-lg border border-orange-200 hover:bg-orange-100 transition-colors duration-200 group">
                                    <div class="flex items-center justify-center w-12 h-12 rounded-full bg-orange-100 group-hover:bg-orange-200 flex-shrink-0 mr-4">
                                        <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="font-semibold text-gray-800 group-hover:text-gray-900">Postulantes e Ingresantes 2021-1</h4>
                                        <p class="text-sm text-gray-600 mt-1">Primer proceso de admisión 2021</p>
                                        <div class="flex items-center mt-2 text-xs text-orange-600">
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

                                <a href="https://sinc.unamad.edu.pe:8000/media/pdf/POSTULANTES_E_INGRESANTES_2021-2_DJfuIel.pdf" 
                                   target="_blank" 
                                   rel="noopener noreferrer"
                                   class="flex items-center p-4 bg-orange-50 rounded-lg border border-orange-200 hover:bg-orange-100 transition-colors duration-200 group">
                                    <div class="flex items-center justify-center w-12 h-12 rounded-full bg-orange-100 group-hover:bg-orange-200 flex-shrink-0 mr-4">
                                        <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="font-semibold text-gray-800 group-hover:text-gray-900">Postulantes e Ingresantes 2021-2</h4>
                                        <p class="text-sm text-gray-600 mt-1">Segundo proceso de admisión 2021</p>
                                        <div class="flex items-center mt-2 text-xs text-orange-600">
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
                                <a href="https://sinc.unamad.edu.pe:8000/media/pdf/POSTULANTES_E_INGRESANTES_2020-1_P6KVbiP.pdf" 
                                   target="_blank" 
                                   rel="noopener noreferrer"
                                   class="flex items-center p-4 bg-red-50 rounded-lg border border-red-200 hover:bg-red-100 transition-colors duration-200 group">
                                    <div class="flex items-center justify-center w-12 h-12 rounded-full bg-red-100 group-hover:bg-red-200 flex-shrink-0 mr-4">
                                        <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="font-semibold text-gray-800 group-hover:text-gray-900">Postulantes e Ingresantes 2020-1</h4>
                                        <p class="text-sm text-gray-600 mt-1">Primer proceso de admisión 2020</p>
                                        <div class="flex items-center mt-2 text-xs text-red-600">
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

                                <a href="https://sinc.unamad.edu.pe:8000/media/pdf/POSTULANTES_E_INGRESANTES_2020-2_A8eIS0y.pdf" 
                                   target="_blank" 
                                   rel="noopener noreferrer"
                                   class="flex items-center p-4 bg-red-50 rounded-lg border border-red-200 hover:bg-red-100 transition-colors duration-200 group">
                                    <div class="flex items-center justify-center w-12 h-12 rounded-full bg-red-100 group-hover:bg-red-200 flex-shrink-0 mr-4">
                                        <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="font-semibold text-gray-800 group-hover:text-gray-900">Postulantes e Ingresantes 2020-2</h4>
                                        <p class="text-sm text-gray-600 mt-1">Segundo proceso de admisión 2020</p>
                                        <div class="flex items-center mt-2 text-xs text-red-600">
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
                            
                            <div class="grid gap-3">
                                <a href="https://sinc.unamad.edu.pe:8000/media/pdf/POSTULANTES_E_INGRESANTES_2019-1_uApuwh2.pdf" 
                                   target="_blank" 
                                   rel="noopener noreferrer"
                                   class="flex items-center p-4 bg-teal-50 rounded-lg border border-teal-200 hover:bg-teal-100 transition-colors duration-200 group">
                                    <div class="flex items-center justify-center w-12 h-12 rounded-full bg-teal-100 group-hover:bg-teal-200 flex-shrink-0 mr-4">
                                        <svg class="w-6 h-6 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="font-semibold text-gray-800 group-hover:text-gray-900">Postulantes e Ingresantes 2019-1</h4>
                                        <p class="text-sm text-gray-600 mt-1">Primer proceso de admisión 2019</p>
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

                                <a href="https://sinc.unamad.edu.pe:8000/media/pdf/POSTULANTES_E_INGRESANTES_2019-2_RTs5D1Z.pdf" 
                                   target="_blank" 
                                   rel="noopener noreferrer"
                                   class="flex items-center p-4 bg-teal-50 rounded-lg border border-teal-200 hover:bg-teal-100 transition-colors duration-200 group">
                                    <div class="flex items-center justify-center w-12 h-12 rounded-full bg-teal-100 group-hover:bg-teal-200 flex-shrink-0 mr-4">
                                        <svg class="w-6 h-6 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="font-semibold text-gray-800 group-hover:text-gray-900">Postulantes e Ingresantes 2019-2</h4>
                                        <p class="text-sm text-gray-600 mt-1">Segundo proceso de admisión 2019</p>
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
                </div>

                <!-- Información Importante -->
                <div class="bg-gradient-to-r from-cyan-50 to-blue-50 rounded-xl shadow-lg overflow-hidden border border-cyan-200 mt-8">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="w-10 h-10 bg-cyan-600 rounded-full flex items-center justify-center mr-3">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold text-cyan-800">Información de los Reportes</h3>
                        </div>
                        
                        <div class="text-cyan-700 space-y-2 text-sm">
                            <p><strong>• Doble convocatoria:</strong> UNAMAD realiza dos procesos de admisión por año académico (2019-1, 2019-2, etc.)</p>
                            <p><strong>• Datos desagregados:</strong> Los reportes incluyen estadísticas por facultades y carreras profesionales</p>
                            <p><strong>• Modalidades de ingreso:</strong> Información sobre diferentes vías de acceso a la universidad</p>
                            <p><strong>• Transparencia estadística:</strong> Datos oficiales para análisis de demanda y cobertura educativa</p>
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