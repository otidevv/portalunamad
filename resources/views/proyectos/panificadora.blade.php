@extends('layouts.app')

@section('title', 'Panificadora UNAMAD - UNAMAD')

@section('content')
    <!-- Hero Section -->
    <div class="relative h-64 sm:h-80 lg:h-96 overflow-hidden bg-gradient-to-r from-yellow-600 via-orange-500 to-amber-600">
        <div class="absolute inset-0 bg-black/20"></div>
        <img src="{{ asset('img/presentacion/presentacionbackground.jpg') }}" 
             alt="Panificadora UNAMAD" 
             class="absolute inset-0 w-full h-full object-cover mix-blend-overlay opacity-30">
        <div class="relative h-full flex items-center justify-center px-6">
            <div class="text-center text-white max-w-4xl mx-auto">
                <div class="w-20 h-20 bg-white/10 backdrop-blur-sm rounded-full flex items-center justify-center mx-auto mb-4 border border-white/20">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 15.546c-.523 0-1.046.151-1.5.454a2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.701 2.701 0 00-1.5-.454M9 6v2m3-2v2m3-2v2M9 3h.01M12 3h.01M15 3h.01M21 21v-7a2 2 0 00-2-2H5a2 2 0 00-2 2v7h18zM3 9h18v10a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path>
                    </svg>
                </div>
                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold mb-4 drop-shadow-lg">
                    Panificadora UNAMAD
                </h1>
                <p class="text-lg sm:text-xl opacity-90 max-w-2xl mx-auto leading-relaxed">
                    Centro de investigación, capacitación y producción especializado en panadería y pastelería
                </p>
            </div>
        </div>
    </div>

    <!-- Breadcrumb -->
    <div class="bg-gradient-to-r from-gray-50 to-gray-100 border-b">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
            <nav class="flex items-center space-x-2 text-sm">
                <a href="/" class="text-gray-600 hover:text-yellow-600 transition-colors font-medium">Inicio</a>
                <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                </svg>
                <a href="/proyectos" class="text-gray-600 hover:text-yellow-600 transition-colors font-medium">Proyectos</a>
                <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                </svg>
                <span class="text-yellow-600 font-semibold">Panificadora UNAMAD</span>
            </nav>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Main Content Area -->
            <div class="lg:col-span-2">
                <!-- Presentación -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden border-t-4 border-yellow-500 mb-8">
                    <div class="p-8">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-gradient-to-r from-yellow-500 to-orange-500 rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 15.546c-.523 0-1.046.151-1.5.454a2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.701 2.701 0 00-1.5-.454M9 6v2m3-2v2m3-2v2M9 3h.01M12 3h.01M15 3h.01M21 21v-7a2 2 0 00-2-2H5a2 2 0 00-2 2v7h18zM3 9h18v10a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path>
                                </svg>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-800">Programa de Investigación y Producción</h2>
                        </div>

                        <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed space-y-6">
                            <p>
                                Crear un programa de investigación, capacitación, asesoría técnica y producción a nivel universitario especializados en la línea de panadería y pastelería, cumpliendo los estándares de calidad, mediante el mejoramiento continuo de todos los procesos, a fin de contribuir en la formación profesional a través de cursos de capacitación e investigación.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Objetivos -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden border-t-4 border-orange-500">
                    <div class="p-8">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-gradient-to-r from-orange-500 to-amber-500 rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                                </svg>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-800">Objetivos</h2>
                        </div>

                        <div class="space-y-6">
                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0">
                                    <div class="w-8 h-8 bg-yellow-100 rounded-full flex items-center justify-center">
                                        <span class="text-yellow-600 font-bold text-sm">1</span>
                                    </div>
                                </div>
                                <p class="text-gray-700 text-sm leading-relaxed">
                                    Realizar trabajos de investigación y desarrollo de productos de panadería y pastelería.
                                </p>
                            </div>

                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0">
                                    <div class="w-8 h-8 bg-orange-100 rounded-full flex items-center justify-center">
                                        <span class="text-orange-600 font-bold text-sm">2</span>
                                    </div>
                                </div>
                                <p class="text-gray-700 text-sm leading-relaxed">
                                    Apoyar a la enseñanza a través de las prácticas pre-profesionales, y a cursos de pre y postgrado y tesistas.
                                </p>
                            </div>

                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0">
                                    <div class="w-8 h-8 bg-amber-100 rounded-full flex items-center justify-center">
                                        <span class="text-amber-600 font-bold text-sm">3</span>
                                    </div>
                                </div>
                                <p class="text-gray-700 text-sm leading-relaxed">
                                    Brindar cursos de extensión y proyección social a la comunidad.
                                </p>
                            </div>

                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0">
                                    <div class="w-8 h-8 bg-yellow-100 rounded-full flex items-center justify-center">
                                        <span class="text-yellow-600 font-bold text-sm">4</span>
                                    </div>
                                </div>
                                <p class="text-gray-700 text-sm leading-relaxed">
                                    Mejorar la gestión administrativa a través de la capacitación del recurso humano para la mejora continua de los procesos productivos y administrativos. Así como la implementación de equipos y maquinarias con tecnología de punta.
                                </p>
                            </div>

                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0">
                                    <div class="w-8 h-8 bg-orange-100 rounded-full flex items-center justify-center">
                                        <span class="text-orange-600 font-bold text-sm">5</span>
                                    </div>
                                </div>
                                <p class="text-gray-700 text-sm leading-relaxed">
                                    Mejorar el sistema de ventas y comercialización de los productos para su auto sostenimiento.
                                </p>
                            </div>

                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0">
                                    <div class="w-8 h-8 bg-amber-100 rounded-full flex items-center justify-center">
                                        <span class="text-amber-600 font-bold text-sm">6</span>
                                    </div>
                                </div>
                                <p class="text-gray-700 text-sm leading-relaxed">
                                    Ofrecer productos de panificación de calidad y nutritivos para satisfacer a los clientes.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="lg:col-span-1">
                @include('proyectos.panificadora.partials.navigation')
            </div>
        </div>
    </div>
@endsection