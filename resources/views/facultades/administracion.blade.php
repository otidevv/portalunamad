@extends('layouts.app')

@section('title', 'Administración y Negocios Internacionales - UNAMAD')

@section('content')
    <!-- Hero Section -->
    <div class="relative h-64 sm:h-80 lg:h-96 overflow-hidden bg-gradient-to-r from-indigo-600 via-purple-500 to-blue-600">
        <div class="absolute inset-0 bg-black/20"></div>
        <img src="{{ asset('img/presentacion/presentacionbackground.jpg') }}" 
             alt="Facultad de Administración y Negocios Internacionales" 
             class="absolute inset-0 w-full h-full object-cover mix-blend-overlay opacity-30">
        <div class="relative h-full flex items-center justify-center px-6">
            <div class="text-center text-white max-w-4xl mx-auto">
                <div class="w-20 h-20 bg-white/10 backdrop-blur-sm rounded-full flex items-center justify-center mx-auto mb-4 border border-white/20">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold mb-4 drop-shadow-lg">
                    Administración y Negocios Internacionales
                </h1>
                <p class="text-lg sm:text-xl opacity-90 max-w-2xl mx-auto leading-relaxed">
                    Formando líderes empresariales para el mercado global
                </p>
            </div>
        </div>
    </div>

    <!-- Breadcrumb -->
    <div class="bg-gradient-to-r from-gray-50 to-gray-100 border-b">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
            <nav class="flex items-center space-x-2 text-sm">
                <a href="/" class="text-gray-600 hover:text-indigo-600 transition-colors font-medium">Inicio</a>
                <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                </svg>
                <a href="/facultades" class="text-gray-600 hover:text-indigo-600 transition-colors font-medium">Facultades</a>
                <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                </svg>
                <span class="text-indigo-600 font-semibold">Administración y Negocios Internacionales</span>
            </nav>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Main Content Area -->
            <div class="lg:col-span-2">
                <!-- Presentación -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden border-t-4 border-indigo-500 mb-8">
                    <div class="p-8">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-gradient-to-r from-indigo-500 to-purple-500 rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-800">Carrera Profesional de Administración y Negocios Internacionales</h2>
                        </div>

                        <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed space-y-6">
                            <p>
                                La Carrera Profesional de Administración y Negocios Internacionales proporciona los conocimientos teóricos y prácticos requeridos para formar profesionales especializados en la gestión de los negocios internacionales, y en el manejo de los modernos mecanismos de financiamiento y de los nuevos instrumentos comerciales que el mercado global exige.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Especialización Integral -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden border-t-4 border-purple-500 mb-8">
                    <div class="p-8">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-gradient-to-r from-purple-500 to-blue-500 rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9v-9m0-9v9m0 9c-5 0-9-4-9-9s4-9 9-9"></path>
                                </svg>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-800">Especialización y Enfoque Internacional</h2>
                        </div>

                        <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed space-y-6">
                            <p>
                                La Carrera Profesional de AyNI busca especializar a los estudiantes que la elijan como carrera o profesión en las áreas tanto de gestión como de negociación internacional, de forma integrada y completa. El nombre de la carrera es ese y por tanto lo que el estudiante busca es una profesión orientada tanto a los negocios como al dominio del entorno internacional.
                            </p>
                            
                            <p>
                                Proponer otra orientación a la Carrera Profesional sería incurrir en costos de oportunidad innecesarios.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Competitividad y Plan de Estudios -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden border-t-4 border-blue-500">
                    <div class="p-8">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-indigo-600 rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                </svg>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-800">Ventaja Competitiva y Formación Integral</h2>
                        </div>

                        <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed space-y-6">
                            <p>
                                El egresado de la Carrera Profesional de AyNI procurará desarrollar sus fortalezas y aprovechar las oportunidades que el mercado va a brindarle en comparación a las debilidades de otras carreras profesionales de administración de otros centros de estudio y así afrontar las amenazas locales, regionales, nacionales y globales que pudieran atentar contra la eficiencia y eficacia de la ciencia administrativa.
                            </p>
                            
                            <p>
                                Esto se logrará con un Plan de Estudios acorde a la competitividad que se desea lograr del egresado de la Carrera Profesional de Administración y Negocios Internacionales.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="lg:col-span-1">
                @include('facultades.administracion.partials.navigation')
            </div>
        </div>
    </div>
@endsection