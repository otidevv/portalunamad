@extends('layouts.app')

@section('content')
<div class="bg-gray-50 min-h-screen">
    <!-- Hero Section -->
    <div class="relative text-white py-20" style="background-image: url('{{ asset('img/presentacion/presentacionbackground.jpg') }}'); background-size: cover; background-position: center; background-attachment: fixed;">
        <div class="absolute inset-0 bg-gradient-to-r from-[#db0455]/80 to-[#ed145b]/70"></div>
        <div class="relative z-10 container mx-auto px-4">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4 drop-shadow-lg">Educación: Especialidad Matemática y Computación</h1>
                <p class="text-xl md:text-2xl opacity-90 drop-shadow-md">UNAMAD</p>
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
                            <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2">Facultades</span>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="ml-1 text-sm font-medium text-[#db0455] md:ml-2">Educación Matemática</span>
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
                @include('facultades.matematica.partials.navigation')
            </div>

            <!-- Main Content -->
            <div class="lg:col-span-2">
                <div class="bg-white rounded-lg shadow-lg p-8 border-t-4 border-[#db0455]">
                    <div class="flex items-start space-x-4 mb-8">
                        <div class="bg-gradient-to-r from-violet-500 to-purple-600 p-4 rounded-full">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-3xl font-bold text-gray-800 mb-4">Educación: Especialidad Matemática y Computación</h2>
                            <div class="w-20 h-1 bg-gradient-to-r from-violet-500 to-purple-600"></div>
                        </div>
                    </div>

                    <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed">
                        <p class="text-lg mb-8">
                            La <strong>Carrera de Profesional de Educación</strong> tiene 16 años (2001-2016) de funcionamiento en la Facultad de Educación de la Universidad Nacional Amazónica de Madre de Dios, iniciando con la <strong>Especialidad de Educación: Especialidad Matemática y Computación</strong>.
                        </p>

                        <!-- Evolución Histórica -->
                        <div class="bg-gradient-to-r from-violet-50 to-purple-50 rounded-lg p-6 border-l-4 border-violet-500 mb-8">
                            <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                                <svg class="w-6 h-6 mr-2 text-violet-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Evolución de la Carrera Profesional
                            </h3>
                            <div class="space-y-4">
                                <div class="flex items-start space-x-4">
                                    <div class="w-12 h-12 bg-violet-500 rounded-full flex items-center justify-center flex-shrink-0">
                                        <span class="text-white font-bold text-sm">2001</span>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-800">Inicio de la Carrera</h4>
                                        <p class="text-gray-600 text-sm">Especialidad Matemática y Computación</p>
                                    </div>
                                </div>
                                
                                <div class="flex items-start space-x-4">
                                    <div class="w-12 h-12 bg-purple-500 rounded-full flex items-center justify-center flex-shrink-0">
                                        <span class="text-white font-bold text-sm">2009</span>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-800">Expansión de Especialidades</h4>
                                        <p class="text-gray-600 text-sm">Creación de Inicial y Especial + Primaria e Informática</p>
                                    </div>
                                </div>
                                
                                <div class="flex items-start space-x-4">
                                    <div class="w-12 h-12 bg-indigo-500 rounded-full flex items-center justify-center flex-shrink-0">
                                        <span class="text-white font-bold text-sm">2016</span>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-800">Consolidación</h4>
                                        <p class="text-gray-600 text-sm">Egresados en las tres especialidades</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Especialidades Actuales -->
                        <div class="bg-gradient-to-r from-indigo-50 to-blue-50 rounded-lg p-6 border-l-4 border-indigo-500 mb-8">
                            <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                                <svg class="w-6 h-6 mr-2 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                                </svg>
                                Especialidades de la Facultad de Educación
                            </h3>
                            
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <div class="bg-white p-4 rounded-lg shadow-sm border border-violet-200">
                                    <div class="w-10 h-10 bg-violet-500 rounded-full flex items-center justify-center mb-3">
                                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                        </svg>
                                    </div>
                                    <h4 class="font-semibold text-gray-800 text-sm mb-1">Matemática y Computación</h4>
                                    <p class="text-gray-600 text-xs">Especialidad pionera (2001)</p>
                                </div>
                                
                                <div class="bg-white p-4 rounded-lg shadow-sm border border-purple-200">
                                    <div class="w-10 h-10 bg-purple-500 rounded-full flex items-center justify-center mb-3">
                                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                        </svg>
                                    </div>
                                    <h4 class="font-semibold text-gray-800 text-sm mb-1">Inicial y Especial</h4>
                                    <p class="text-gray-600 text-xs">Creada en 2009</p>
                                </div>
                                
                                <div class="bg-white p-4 rounded-lg shadow-sm border border-indigo-200">
                                    <div class="w-10 h-10 bg-indigo-500 rounded-full flex items-center justify-center mb-3">
                                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                        </svg>
                                    </div>
                                    <h4 class="font-semibold text-gray-800 text-sm mb-1">Primaria e Informática</h4>
                                    <p class="text-gray-600 text-xs">Creada en 2009</p>
                                </div>
                            </div>
                        </div>

                        <!-- Crecimiento y Complejidad -->
                        <div class="bg-gradient-to-r from-amber-50 to-orange-50 rounded-lg p-6 border-l-4 border-amber-500 mb-8">
                            <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                                <svg class="w-6 h-6 mr-2 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                </svg>
                                Crecimiento y Desarrollo Institucional
                            </h3>
                            <p class="text-gray-700 leading-relaxed mb-4">
                                El trayecto transcurrido hasta el momento, da cuenta de la <strong>complejidad del contexto de la carrera</strong>, que no solo ha crecido en número de docentes y estudiantes, sino que han aumentado las variables desde el aspecto del currículo.
                            </p>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="flex items-center space-x-3">
                                    <div class="w-8 h-8 bg-amber-500 rounded-full flex items-center justify-center">
                                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                        </svg>
                                    </div>
                                    <span class="text-gray-700 font-medium">Crecimiento en docentes</span>
                                </div>
                                
                                <div class="flex items-center space-x-3">
                                    <div class="w-8 h-8 bg-orange-500 rounded-full flex items-center justify-center">
                                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                        </svg>
                                    </div>
                                    <span class="text-gray-700 font-medium">Aumento de estudiantes</span>
                                </div>
                                
                                <div class="flex items-center space-x-3">
                                    <div class="w-8 h-8 bg-yellow-500 rounded-full flex items-center justify-center">
                                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                        </svg>
                                    </div>
                                    <span class="text-gray-700 font-medium">Complejidad curricular</span>
                                </div>
                                
                                <div class="flex items-center space-x-3">
                                    <div class="w-8 h-8 bg-red-500 rounded-full flex items-center justify-center">
                                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                        </svg>
                                    </div>
                                    <span class="text-gray-700 font-medium">Variables múltiples</span>
                                </div>
                            </div>
                        </div>

                        <!-- Evaluación y Mejora -->
                        <div class="bg-gradient-to-r from-[#db0455]/5 to-[#ed145b]/5 rounded-lg p-6 border-l-4 border-[#db0455]">
                            <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                                <svg class="w-6 h-6 mr-2 text-[#db0455]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                                </svg>
                                Proceso de Evaluación y Mejoramiento
                            </h3>
                            <p class="text-gray-700 leading-relaxed mb-4">
                                De acuerdo con este escenario, se hace <strong>propicio y necesario realizar una evaluación</strong> sobre el funcionamiento real de la Carrera Profesional de Educación en pos de poder expresar las debilidades y fortalezas.
                            </p>
                            <div class="bg-white p-4 rounded-lg border border-[#db0455]/20">
                                <h4 class="font-semibold text-gray-800 mb-2">Objetivos de la Evaluación:</h4>
                                <ul class="space-y-1 text-sm text-gray-700">
                                    <li class="flex items-center space-x-2">
                                        <div class="w-1.5 h-1.5 bg-[#db0455] rounded-full"></div>
                                        <span>Identificar debilidades y fortalezas actuales</span>
                                    </li>
                                    <li class="flex items-center space-x-2">
                                        <div class="w-1.5 h-1.5 bg-[#db0455] rounded-full"></div>
                                        <span>Iniciar acciones de mejoramiento integral</span>
                                    </li>
                                    <li class="flex items-center space-x-2">
                                        <div class="w-1.5 h-1.5 bg-[#db0455] rounded-full"></div>
                                        <span>Optimizar todos los aspectos educativos</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection