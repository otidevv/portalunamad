@extends('layouts.app')

@section('title', 'Estación Geológica - UNAMAD')

@section('content')
    <!-- Hero Section -->
    <div class="relative h-64 sm:h-80 lg:h-96 overflow-hidden bg-gradient-to-r from-orange-600 via-amber-600 to-yellow-600">
        <div class="absolute inset-0 bg-black/20"></div>
        <img src="{{ asset('img/presentacion/presentacionbackground.jpg') }}" 
             alt="Estación Geológica UNAMAD" 
             class="absolute inset-0 w-full h-full object-cover mix-blend-overlay opacity-30">
        <div class="relative h-full flex items-center justify-center px-6">
            <div class="text-center text-white max-w-4xl mx-auto">
                <div class="w-20 h-20 bg-white/10 backdrop-blur-sm rounded-full flex items-center justify-center mx-auto mb-4 border border-white/20">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold mb-4 drop-shadow-lg">
                    Estación Geológica
                </h1>
                <p class="text-lg sm:text-xl opacity-90 max-w-2xl mx-auto leading-relaxed">
                    Centro de investigación en Ciencias de la Tierra de la región amazónica
                </p>
            </div>
        </div>
    </div>

    <!-- Breadcrumb -->
    <div class="bg-gradient-to-r from-gray-50 to-gray-100 border-b">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
            <nav class="flex items-center space-x-2 text-sm">
                <a href="/" class="text-gray-600 hover:text-orange-600 transition-colors font-medium">Inicio</a>
                <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                </svg>
                <a href="/proyectos" class="text-gray-600 hover:text-orange-600 transition-colors font-medium">Proyectos</a>
                <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                </svg>
                <span class="text-orange-600 font-semibold">Estación Geológica</span>
            </nav>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Main Content Area -->
            <div class="lg:col-span-2">
                <!-- Presentación Principal -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden border-t-4 border-orange-600 mb-8">
                    <div class="p-8">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-gradient-to-r from-orange-600 to-amber-600 rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-800">Estación Geológica</h2>
                        </div>

                        <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed space-y-6">
                            <p>
                                Dentro de las <strong>Ciencias de la Tierra</strong> la Geología es una de las ramas fundamentales que estudia la composición química, física, mineralógica, petrológica, estratigráfica, estructural, tectónica, que controlan la dinámica interna y externa del planeta; dichos estudios conducen a la localización de sustancias minerales y energéticas necesarias para el desarrollo y sustento de la especie humana.
                            </p>
                            
                            <p>
                                La Geología como cualquier ciencia está en constante desarrollo, cada vez cuenta con mayores datos del planeta, nuevos y mayor eficiencia de los equipos analíticos, mayor disponibilidad de la información científica gracias al avance de las comunicaciones (publicaciones, revistas científicas en la web).
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Áreas de Estudio -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden border-t-4 border-amber-600">
                    <div class="p-8">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-gradient-to-r from-amber-600 to-yellow-600 rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                                </svg>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-800">Áreas de Investigación</h2>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="p-4 bg-orange-50 rounded-lg border border-orange-200">
                                <h3 class="text-lg font-semibold text-orange-800 mb-2">Composición del Planeta</h3>
                                <p class="text-sm text-orange-700">Análisis químico, físico, mineralógico y petrológico de materiales terrestres</p>
                            </div>

                            <div class="p-4 bg-amber-50 rounded-lg border border-amber-200">
                                <h3 class="text-lg font-semibold text-amber-800 mb-2">Dinámica Terrestre</h3>
                                <p class="text-sm text-amber-700">Estudio de procesos internos y externos que modelan la superficie terrestre</p>
                            </div>

                            <div class="p-4 bg-yellow-50 rounded-lg border border-yellow-200">
                                <h3 class="text-lg font-semibold text-yellow-800 mb-2">Recursos Minerales</h3>
                                <p class="text-sm text-yellow-700">Localización de sustancias minerales y energéticas para el desarrollo humano</p>
                            </div>

                            <div class="p-4 bg-orange-50 rounded-lg border border-orange-200">
                                <h3 class="text-lg font-semibold text-orange-800 mb-2">Investigación Avanzada</h3>
                                <p class="text-sm text-orange-700">Equipos analíticos modernos y acceso a información científica global</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="lg:col-span-1">
                @include('proyectos.estacion.partials.navigation')
            </div>
        </div>
    </div>
@endsection