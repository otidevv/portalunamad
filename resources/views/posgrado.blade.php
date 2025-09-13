@extends('layouts.app')

@section('title', 'Escuela de Posgrado - UNAMAD')

@section('content')
    <!-- Hero Section -->
    <div class="relative h-64 sm:h-80 lg:h-96 overflow-hidden bg-gradient-to-r from-purple-800 via-indigo-700 to-blue-800">
        <div class="absolute inset-0 bg-black/20"></div>
        <img src="{{ asset('img/presentacion/presentacionbackground.jpg') }}" 
             alt="Escuela de Posgrado" 
             class="absolute inset-0 w-full h-full object-cover mix-blend-overlay opacity-30">
        <div class="relative h-full flex items-center justify-center px-6">
            <div class="text-center text-white max-w-4xl mx-auto">
                <div class="w-20 h-20 bg-white/10 backdrop-blur-sm rounded-full flex items-center justify-center mx-auto mb-4 border border-white/20">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                    </svg>
                </div>
                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold mb-4 drop-shadow-lg">
                    Escuela de Posgrado
                </h1>
                <p class="text-lg sm:text-xl opacity-90 max-w-2xl mx-auto leading-relaxed">
                    Formación académica del más alto nivel en investigación y docencia universitaria
                </p>
            </div>
        </div>
    </div>

    <!-- Breadcrumb -->
    <div class="bg-gradient-to-r from-gray-50 to-gray-100 border-b">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
            <nav class="flex items-center space-x-2 text-sm">
                <a href="/" class="text-gray-600 hover:text-purple-600 transition-colors font-medium">Inicio</a>
                <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                </svg>
                <a href="/programas" class="text-gray-600 hover:text-purple-600 transition-colors font-medium">Programas</a>
                <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                </svg>
                <span class="text-purple-600 font-semibold">Escuela de Posgrado</span>
            </nav>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Main Content Area -->
            <div class="lg:col-span-2">
                <!-- Presentación -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden border-t-4 border-purple-600 mb-8">
                    <div class="p-8">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-gradient-to-r from-purple-600 to-indigo-600 rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                                </svg>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-800">Sobre la Escuela de Posgrado</h2>
                        </div>

                        <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed space-y-6">
                            <p>
                                La escuela de Posgrado es el órgano de línea responsable de la formación académica de investigadores y docentes universitarios del más alto nivel que desarrolla programas de: Doctorado, Maestría, Diplomados de Posgrado, para aplicar, ampliar, profundizar e innovar el conocimiento en áreas específicas de la ciencia, la técnica, las humanidades y las artes.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Funciones de la Escuela de Posgrado -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden border-t-4 border-indigo-600">
                    <div class="p-8">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-gradient-to-r from-indigo-600 to-blue-600 rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                                </svg>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-800">Funciones de la Escuela de Posgrado</h2>
                        </div>

                        <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed">
                            <p class="mb-4">Son funciones de la Escuela de Posgrado, las siguientes:</p>
                            
                            <ol class="space-y-3">
                                <li class="flex items-start">
                                    <span class="font-semibold text-purple-600 mr-2">1.</span>
                                    <span>Dirigir, supervisar y controlar la actividad académica y administrativa de la Escuela de Posgrado, en coordinación con las Unidades de Posgrado de las Facultades.</span>
                                </li>
                                
                                <li class="flex items-start">
                                    <span class="font-semibold text-purple-600 mr-2">2.</span>
                                    <span>Elaborar y elevar para su aprobación el plan anual de funcionamiento y desarrollo de la Escuela, su informe de gestión anual, reglamentos y manuales internos.</span>
                                </li>
                                
                                <li class="flex items-start">
                                    <span class="font-semibold text-purple-600 mr-2">3.</span>
                                    <span>Refrendar los diplomas de grados académicos de los Programas a su cargo.</span>
                                </li>
                                
                                <li class="flex items-start">
                                    <span class="font-semibold text-purple-600 mr-2">4.</span>
                                    <span>Desarrollar los procedimientos y actividades de autoevaluación en cada programa de Posgrado, en coordinación con la Oficina de Gestión de la Calidad.</span>
                                </li>
                                
                                <li class="flex items-start">
                                    <span class="font-semibold text-purple-600 mr-2">5.</span>
                                    <span>Elaborar y difundir las publicaciones de los programas de Posgrado de la universidad.</span>
                                </li>
                                
                                <li class="flex items-start">
                                    <span class="font-semibold text-purple-600 mr-2">6.</span>
                                    <span>Proponer al Consejo Universitario el número de vacantes en los programas de maestría y doctorado en cada proceso de admisión, en coordinación con las Unidades de Posgrado.</span>
                                </li>
                                
                                <li class="flex items-start">
                                    <span class="font-semibold text-purple-600 mr-2">7.</span>
                                    <span>Aprobar y proponer al consejo universitario los grados de maestrías y doctorados para su otorgamiento respectivo.</span>
                                </li>
                                
                                <li class="flex items-start">
                                    <span class="font-semibold text-purple-600 mr-2">8.</span>
                                    <span>Elaborar y proponer al Consejo Universitario nuevos programas de maestrías y doctorados con sus respectivas asignaturas y créditos correspondientes en coordinación con las facultades y las unidades de posgrado.</span>
                                </li>
                                
                                <li class="flex items-start">
                                    <span class="font-semibold text-purple-600 mr-2">9.</span>
                                    <span>Las demás funciones asignadas por el Rectorado, o aquellas que sean otorgadas por norma expresa.</span>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="lg:col-span-1">
                @include('posgrado.partials.navigation')
            </div>
        </div>
    </div>
@endsection