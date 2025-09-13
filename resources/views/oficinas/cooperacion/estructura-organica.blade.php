@extends('layouts.app')

@section('content')
<div class="bg-gray-50 min-h-screen">
    <!-- Hero Section -->
    <div class="relative text-white py-20" style="background-image: url('{{ asset('img/presentacion/presentacionbackground.jpg') }}'); background-size: cover; background-position: center; background-attachment: fixed;">
        <div class="absolute inset-0 bg-gradient-to-r from-[#db0455]/80 to-[#ed145b]/70"></div>
        <div class="relative z-10 container mx-auto px-4">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4 drop-shadow-lg">Estructura Orgánica</h1>
                <p class="text-xl md:text-2xl opacity-90 drop-shadow-md">Oficina de Cooperación y Relaciones Internacionales</p>
            </div>
        </div>
    </div>

    <!-- Navigation Breadcrumb -->
    <div class="bg-white border-b border-gray-200">
        <div class="container mx-auto px-4 py-4">
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="/" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-[#db0455]">
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
                            <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2">Oficinas</span>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2">Cooperación y Relaciones Internacionales</span>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="ml-1 text-sm font-medium text-[#db0455] md:ml-2">Estructura Orgánica</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Sidebar -->
            <div class="lg:col-span-1">
                @include('oficinas.cooperacion.partials.navigation')
            </div>

            <!-- Main Content -->
            <div class="lg:col-span-2">
                <div class="bg-white rounded-lg shadow-lg p-8 border-t-4 border-[#db0455]">
                    <div class="flex items-start space-x-4 mb-8">
                        <div class="bg-gradient-to-r from-[#db0455] to-[#ed145b] p-4 rounded-full">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-3xl font-bold text-gray-800 mb-4">Estructura Orgánica</h2>
                            <div class="w-20 h-1 bg-gradient-to-r from-[#db0455] to-[#ed145b]"></div>
                        </div>
                    </div>

                    <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed">
                        <p class="text-lg mb-8">
                            La Oficina de Cooperación y Relaciones Internacionales se encuentra dentro de la estructura organizacional de la Universidad Nacional Amazónica de Madre de Dios, dependiendo directamente del Rectorado.
                        </p>

                        <!-- Organigrama -->
                        <div class="bg-gradient-to-r from-[#db0455]/5 to-[#ed145b]/5 rounded-lg p-6 border-l-4 border-[#db0455] mb-8">
                            <h3 class="text-xl font-bold text-gray-800 mb-6 flex items-center">
                                <svg class="w-6 h-6 mr-2 text-[#db0455]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                </svg>
                                Organigrama Institucional
                            </h3>
                            
                            <div class="flex justify-center mb-6">
                                <img src="{{ asset('img/section/cooperacionrelacionesinternacionales/estructuraorganica.png') }}" 
                                     alt="Estructura Orgánica - Oficina de Cooperación y Relaciones Internacionales" 
                                     class="max-w-full h-auto rounded-lg shadow-lg border border-gray-200">
                            </div>
                            
                            <div class="text-center text-sm text-gray-600">
                                <p class="italic">Estructura Organizacional - UNAMAD</p>
                            </div>
                        </div>

                        <!-- Descripción de la Estructura -->
                        <div class="bg-white rounded-lg p-6 border border-gray-200 mb-8">
                            <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                                <svg class="w-6 h-6 mr-2 text-[#db0455]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Descripción de la Estructura
                            </h3>
                            
                            <div class="space-y-4">
                                <div class="flex items-start space-x-3">
                                    <div class="w-8 h-8 bg-[#1e3a8a] rounded-lg flex items-center justify-center flex-shrink-0">
                                        <span class="text-white text-xs font-bold">1°</span>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-800">Primer Nivel - Rectorado</h4>
                                        <p class="text-gray-600 text-sm">Máxima autoridad ejecutiva de la universidad, responsable de la dirección académica, administrativa y de gobierno de la institución.</p>
                                    </div>
                                </div>
                                
                                <div class="flex items-start space-x-3">
                                    <div class="w-8 h-8 bg-[#2563eb] rounded-lg flex items-center justify-center flex-shrink-0">
                                        <span class="text-white text-xs font-bold">2°</span>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-800">Segundo Nivel - Oficina de Cooperación y Relaciones Internacionales</h4>
                                        <p class="text-gray-600 text-sm">Órgano de asesoramiento especializado que depende directamente del Rectorado, encargado de gestionar la cooperación nacional e internacional de la universidad.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Nivel de Dependencia -->
                        <div class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-lg p-6 border-l-4 border-blue-500">
                            <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                                <svg class="w-6 h-6 mr-2 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.367 2.684 3 3 0 00-5.367-2.684z"></path>
                                </svg>
                                Relación Organizacional
                            </h3>
                            <ul class="space-y-2 text-gray-700">
                                <li class="flex items-start space-x-2">
                                    <span class="w-2 h-2 bg-blue-500 rounded-full mt-2 flex-shrink-0"></span>
                                    <span><strong>Dependencia:</strong> Directa del Rectorado</span>
                                </li>
                                <li class="flex items-start space-x-2">
                                    <span class="w-2 h-2 bg-blue-500 rounded-full mt-2 flex-shrink-0"></span>
                                    <span><strong>Nivel Jerárquico:</strong> Segundo nivel organizacional</span>
                                </li>
                                <li class="flex items-start space-x-2">
                                    <span class="w-2 h-2 bg-blue-500 rounded-full mt-2 flex-shrink-0"></span>
                                    <span><strong>Función:</strong> Órgano de asesoramiento especializado</span>
                                </li>
                                <li class="flex items-start space-x-2">
                                    <span class="w-2 h-2 bg-blue-500 rounded-full mt-2 flex-shrink-0"></span>
                                    <span><strong>Designación:</strong> El Jefe es designado por el Consejo Universitario a propuesta del Rector</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection