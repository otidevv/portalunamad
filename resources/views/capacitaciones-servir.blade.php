@extends('layouts.app')

@section('title', 'Videos de Capacitación SERVIR - UNAMAD')

@section('content')
    <!-- Hero Section -->
    <div class="relative h-64 sm:h-80 lg:h-96 overflow-hidden bg-gradient-to-r from-red-600 via-red-700 to-red-800">
        <div class="absolute inset-0 bg-black/20"></div>
        <img src="{{ asset('img/presentacion/presentacionbackground.jpg') }}"
             alt="Videos de Capacitación SERVIR"
             class="absolute inset-0 w-full h-full object-cover mix-blend-overlay opacity-30">
        <div class="relative h-full flex items-center justify-center px-6">
            <div class="text-center text-white max-w-4xl mx-auto">
                <div class="w-20 h-20 bg-white/10 backdrop-blur-sm rounded-full flex items-center justify-center mx-auto mb-4 border border-white/20">
                    <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M8 5v14l11-7z"/>
                    </svg>
                </div>
                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold mb-4 drop-shadow-lg">
                    Videos de Capacitación SERVIR
                </h1>
                <p class="text-lg sm:text-xl opacity-90 max-w-2xl mx-auto leading-relaxed">
                    Material audiovisual de capacitación para servidores públicos
                </p>
            </div>
        </div>
    </div>

    <!-- Breadcrumb -->
    <div class="bg-gradient-to-r from-gray-50 to-gray-100 border-b">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
            <nav class="flex items-center space-x-2 text-sm">
                <a href="/" class="text-gray-600 hover:text-red-600 transition-colors font-medium">Inicio</a>
                <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                </svg>
                <span class="text-red-600 font-semibold">Videos de Capacitación SERVIR</span>
            </nav>
        </div>
    </div>

    <!-- Encabezado informativo -->
    <div class="bg-white border-b">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="bg-gradient-to-r from-red-50 to-orange-50 rounded-xl p-6 border border-red-100">
                <div class="flex items-start space-x-4">
                    <div class="flex-shrink-0">
                        <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500 mb-1">"Decenio de la Igualdad de Oportunidades para Mujeres y Hombres"</p>
                        <p class="text-sm text-gray-500 mb-3">"Año de la recuperación y consolidación de la economía peruana"</p>
                        <h2 class="text-xl font-bold text-gray-800 mb-2">Cultura de Aprendizaje - SERVIR</h2>
                        <p class="text-gray-600">Difusión de material audiovisual para la sensibilización sobre la cultura de aprendizaje en el marco del proceso de capacitación del Sistema Administrativo de Gestión de Recursos Humanos.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="bg-gray-50 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Sección: Oficina de Recursos Humanos -->
            <div class="mb-12">
                <div class="flex items-center mb-6">
                    <div class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center mr-3">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                    <h2 class="text-2xl font-bold text-gray-800">Oficina de Recursos Humanos</h2>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <!-- Video 1 -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                        <div class="relative">
                            <img src="https://img.youtube.com/vi/1mMzMEXEzy0/maxresdefault.jpg"
                                 alt="Más que gestión, es transformación"
                                 class="w-full h-48 object-cover"
                                 onerror="this.src='https://img.youtube.com/vi/1mMzMEXEzy0/hqdefault.jpg'">
                            <div class="absolute inset-0 bg-black/30 flex items-center justify-center opacity-0 hover:opacity-100 transition-opacity">
                                <a href="https://www.youtube.com/watch?v=1mMzMEXEzy0" target="_blank" class="w-16 h-16 bg-red-600 rounded-full flex items-center justify-center hover:bg-red-700 transition-colors">
                                    <svg class="w-8 h-8 text-white ml-1" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M8 5v14l11-7z"/>
                                    </svg>
                                </a>
                            </div>
                            <span class="absolute top-3 left-3 bg-blue-600 text-white text-xs font-semibold px-3 py-1 rounded-full">
                                Video 1
                            </span>
                        </div>
                        <div class="p-5">
                            <h3 class="text-lg font-bold text-gray-800 mb-2 line-clamp-2">Más que gestión, es transformación: El rol de las Oficinas de Recursos Humanos</h3>
                            <p class="text-sm text-gray-500 mb-4">
                                <span class="inline-flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    </svg>
                                    Oficina de Recursos Humanos
                                </span>
                            </p>
                            <div class="flex flex-wrap gap-2">
                                <a href="https://www.youtube.com/watch?v=1mMzMEXEzy0" target="_blank"
                                   class="inline-flex items-center px-4 py-2 bg-red-600 text-white text-sm font-medium rounded-lg hover:bg-red-700 transition-colors">
                                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/>
                                    </svg>
                                    Ver en YouTube
                                </a>
                                <a href="https://cutt.ly/crV0YrRY" target="_blank"
                                   class="inline-flex items-center px-4 py-2 bg-gray-100 text-gray-700 text-sm font-medium rounded-lg hover:bg-gray-200 transition-colors">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                                    </svg>
                                    Descargar
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sección: Directivos y Mandos Medios -->
            <div class="mb-12">
                <div class="flex items-center mb-6">
                    <div class="w-10 h-10 bg-purple-600 rounded-lg flex items-center justify-center mr-3">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                        </svg>
                    </div>
                    <h2 class="text-2xl font-bold text-gray-800">Directivos y Mandos Medios</h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Video 2 -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                        <div class="relative">
                            <img src="https://img.youtube.com/vi/qLFlbYLgqRk/maxresdefault.jpg"
                                 alt="Brechas de capacitación en el Estado"
                                 class="w-full h-48 object-cover"
                                 onerror="this.src='https://img.youtube.com/vi/qLFlbYLgqRk/hqdefault.jpg'">
                            <div class="absolute inset-0 bg-black/30 flex items-center justify-center opacity-0 hover:opacity-100 transition-opacity">
                                <a href="https://www.youtube.com/watch?v=qLFlbYLgqRk" target="_blank" class="w-16 h-16 bg-red-600 rounded-full flex items-center justify-center hover:bg-red-700 transition-colors">
                                    <svg class="w-8 h-8 text-white ml-1" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M8 5v14l11-7z"/>
                                    </svg>
                                </a>
                            </div>
                            <span class="absolute top-3 left-3 bg-purple-600 text-white text-xs font-semibold px-3 py-1 rounded-full">
                                Video 2
                            </span>
                        </div>
                        <div class="p-5">
                            <h3 class="text-lg font-bold text-gray-800 mb-2 line-clamp-2">Brechas de capacitación en el Estado: El Rol Clave de los Directivos</h3>
                            <p class="text-sm text-gray-500 mb-4">
                                <span class="inline-flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5"/>
                                    </svg>
                                    Directivos y mandos medios
                                </span>
                            </p>
                            <div class="flex flex-wrap gap-2">
                                <a href="https://www.youtube.com/watch?v=qLFlbYLgqRk" target="_blank"
                                   class="inline-flex items-center px-3 py-2 bg-red-600 text-white text-sm font-medium rounded-lg hover:bg-red-700 transition-colors">
                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/>
                                    </svg>
                                    YouTube
                                </a>
                                <a href="https://cutt.ly/jrV09s9P" target="_blank"
                                   class="inline-flex items-center px-3 py-2 bg-gray-100 text-gray-700 text-sm font-medium rounded-lg hover:bg-gray-200 transition-colors">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                                    </svg>
                                    Descargar
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Video 3 -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                        <div class="relative">
                            <img src="https://img.youtube.com/vi/FG609uRqMpE/maxresdefault.jpg"
                                 alt="El rol del directivo en una capacitación efectiva"
                                 class="w-full h-48 object-cover"
                                 onerror="this.src='https://img.youtube.com/vi/FG609uRqMpE/hqdefault.jpg'">
                            <div class="absolute inset-0 bg-black/30 flex items-center justify-center opacity-0 hover:opacity-100 transition-opacity">
                                <a href="https://www.youtube.com/watch?v=FG609uRqMpE" target="_blank" class="w-16 h-16 bg-red-600 rounded-full flex items-center justify-center hover:bg-red-700 transition-colors">
                                    <svg class="w-8 h-8 text-white ml-1" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M8 5v14l11-7z"/>
                                    </svg>
                                </a>
                            </div>
                            <span class="absolute top-3 left-3 bg-purple-600 text-white text-xs font-semibold px-3 py-1 rounded-full">
                                Video 3
                            </span>
                        </div>
                        <div class="p-5">
                            <h3 class="text-lg font-bold text-gray-800 mb-2 line-clamp-2">El rol del directivo en una capacitación efectiva: liderar es también formar</h3>
                            <p class="text-sm text-gray-500 mb-4">
                                <span class="inline-flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5"/>
                                    </svg>
                                    Directivos y mandos medios
                                </span>
                            </p>
                            <div class="flex flex-wrap gap-2">
                                <a href="https://www.youtube.com/watch?v=FG609uRqMpE" target="_blank"
                                   class="inline-flex items-center px-3 py-2 bg-red-600 text-white text-sm font-medium rounded-lg hover:bg-red-700 transition-colors">
                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/>
                                    </svg>
                                    YouTube
                                </a>
                                <a href="https://cutt.ly/OrV03nEy" target="_blank"
                                   class="inline-flex items-center px-3 py-2 bg-gray-100 text-gray-700 text-sm font-medium rounded-lg hover:bg-gray-200 transition-colors">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                                    </svg>
                                    Descargar
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Video 4 -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                        <div class="relative">
                            <img src="https://img.youtube.com/vi/R0Bvaftc9E/maxresdefault.jpg"
                                 alt="Cuando lideras, dejas aprender"
                                 class="w-full h-48 object-cover"
                                 onerror="this.src='https://img.youtube.com/vi/R0Bvaftc9E/hqdefault.jpg'">
                            <div class="absolute inset-0 bg-black/30 flex items-center justify-center opacity-0 hover:opacity-100 transition-opacity">
                                <a href="https://www.youtube.com/watch?v=R0Bvaftc9E" target="_blank" class="w-16 h-16 bg-red-600 rounded-full flex items-center justify-center hover:bg-red-700 transition-colors">
                                    <svg class="w-8 h-8 text-white ml-1" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M8 5v14l11-7z"/>
                                    </svg>
                                </a>
                            </div>
                            <span class="absolute top-3 left-3 bg-purple-600 text-white text-xs font-semibold px-3 py-1 rounded-full">
                                Video 4
                            </span>
                        </div>
                        <div class="p-5">
                            <h3 class="text-lg font-bold text-gray-800 mb-2 line-clamp-2">Cuando lideras, dejas aprender: el impacto del directivo en la capacitación</h3>
                            <p class="text-sm text-gray-500 mb-4">
                                <span class="inline-flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5"/>
                                    </svg>
                                    Directivos y mandos medios
                                </span>
                            </p>
                            <div class="flex flex-wrap gap-2">
                                <a href="https://www.youtube.com/watch?v=R0Bvaftc9E" target="_blank"
                                   class="inline-flex items-center px-3 py-2 bg-red-600 text-white text-sm font-medium rounded-lg hover:bg-red-700 transition-colors">
                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/>
                                    </svg>
                                    YouTube
                                </a>
                                <a href="https://cutt.ly/xrV039Hu" target="_blank"
                                   class="inline-flex items-center px-3 py-2 bg-gray-100 text-gray-700 text-sm font-medium rounded-lg hover:bg-gray-200 transition-colors">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                                    </svg>
                                    Descargar
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sección: Servidores Civiles en General -->
            <div class="mb-12">
                <div class="flex items-center mb-6">
                    <div class="w-10 h-10 bg-green-600 rounded-lg flex items-center justify-center mr-3">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"/>
                        </svg>
                    </div>
                    <h2 class="text-2xl font-bold text-gray-800">Servidores Civiles en General</h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Video 5 -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                        <div class="relative">
                            <img src="https://img.youtube.com/vi/XL8MA-Tz7Cg/maxresdefault.jpg"
                                 alt="Beneficios de la capacitación para servidores públicos"
                                 class="w-full h-48 object-cover"
                                 onerror="this.src='https://img.youtube.com/vi/XL8MA-Tz7Cg/hqdefault.jpg'">
                            <div class="absolute inset-0 bg-black/30 flex items-center justify-center opacity-0 hover:opacity-100 transition-opacity">
                                <a href="https://www.youtube.com/watch?v=XL8MA-Tz7Cg" target="_blank" class="w-16 h-16 bg-red-600 rounded-full flex items-center justify-center hover:bg-red-700 transition-colors">
                                    <svg class="w-8 h-8 text-white ml-1" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M8 5v14l11-7z"/>
                                    </svg>
                                </a>
                            </div>
                            <span class="absolute top-3 left-3 bg-green-600 text-white text-xs font-semibold px-3 py-1 rounded-full">
                                Video 5
                            </span>
                        </div>
                        <div class="p-5">
                            <h3 class="text-lg font-bold text-gray-800 mb-2 line-clamp-2">Beneficios de la capacitación para servidores públicos</h3>
                            <p class="text-sm text-gray-500 mb-4">
                                <span class="inline-flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197"/>
                                    </svg>
                                    Servidores civiles en general
                                </span>
                            </p>
                            <div class="flex flex-wrap gap-2">
                                <a href="https://www.youtube.com/watch?v=XL8MA-Tz7Cg" target="_blank"
                                   class="inline-flex items-center px-3 py-2 bg-red-600 text-white text-sm font-medium rounded-lg hover:bg-red-700 transition-colors">
                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/>
                                    </svg>
                                    YouTube
                                </a>
                                <a href="https://cutt.ly/urV0E6AF" target="_blank"
                                   class="inline-flex items-center px-3 py-2 bg-gray-100 text-gray-700 text-sm font-medium rounded-lg hover:bg-gray-200 transition-colors">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                                    </svg>
                                    Descargar
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Video 6 -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                        <div class="relative">
                            <img src="https://img.youtube.com/vi/I4ccjU9cRrw/maxresdefault.jpg"
                                 alt="3 Pasos clave después de culminar tu capacitación"
                                 class="w-full h-48 object-cover"
                                 onerror="this.src='https://img.youtube.com/vi/I4ccjU9cRrw/hqdefault.jpg'">
                            <div class="absolute inset-0 bg-black/30 flex items-center justify-center opacity-0 hover:opacity-100 transition-opacity">
                                <a href="https://www.youtube.com/watch?v=I4ccjU9cRrw" target="_blank" class="w-16 h-16 bg-red-600 rounded-full flex items-center justify-center hover:bg-red-700 transition-colors">
                                    <svg class="w-8 h-8 text-white ml-1" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M8 5v14l11-7z"/>
                                    </svg>
                                </a>
                            </div>
                            <span class="absolute top-3 left-3 bg-green-600 text-white text-xs font-semibold px-3 py-1 rounded-full">
                                Video 6
                            </span>
                        </div>
                        <div class="p-5">
                            <h3 class="text-lg font-bold text-gray-800 mb-2 line-clamp-2">Capacitación en el Estado: 3 Pasos clave después de culminar tu capacitación</h3>
                            <p class="text-sm text-gray-500 mb-4">
                                <span class="inline-flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197"/>
                                    </svg>
                                    Servidores civiles en general
                                </span>
                            </p>
                            <div class="flex flex-wrap gap-2">
                                <a href="https://www.youtube.com/watch?v=I4ccjU9cRrw" target="_blank"
                                   class="inline-flex items-center px-3 py-2 bg-red-600 text-white text-sm font-medium rounded-lg hover:bg-red-700 transition-colors">
                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/>
                                    </svg>
                                    YouTube
                                </a>
                                <a href="https://cutt.ly/8rV099dg" target="_blank"
                                   class="inline-flex items-center px-3 py-2 bg-gray-100 text-gray-700 text-sm font-medium rounded-lg hover:bg-gray-200 transition-colors">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                                    </svg>
                                    Descargar
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Video 7 -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                        <div class="relative">
                            <img src="https://img.youtube.com/vi/TlJxyaLkd4I/maxresdefault.jpg"
                                 alt="¿Cómo aplicar tu aprendizaje en el trabajo?"
                                 class="w-full h-48 object-cover"
                                 onerror="this.src='https://img.youtube.com/vi/TlJxyaLkd4I/hqdefault.jpg'">
                            <div class="absolute inset-0 bg-black/30 flex items-center justify-center opacity-0 hover:opacity-100 transition-opacity">
                                <a href="https://www.youtube.com/watch?v=TlJxyaLkd4I" target="_blank" class="w-16 h-16 bg-red-600 rounded-full flex items-center justify-center hover:bg-red-700 transition-colors">
                                    <svg class="w-8 h-8 text-white ml-1" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M8 5v14l11-7z"/>
                                    </svg>
                                </a>
                            </div>
                            <span class="absolute top-3 left-3 bg-green-600 text-white text-xs font-semibold px-3 py-1 rounded-full">
                                Video 7
                            </span>
                        </div>
                        <div class="p-5">
                            <h3 class="text-lg font-bold text-gray-800 mb-2 line-clamp-2">¿Cómo aplicar tu aprendizaje en el trabajo?</h3>
                            <p class="text-sm text-gray-500 mb-4">
                                <span class="inline-flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197"/>
                                    </svg>
                                    Servidores civiles en general
                                </span>
                            </p>
                            <div class="flex flex-wrap gap-2">
                                <a href="https://www.youtube.com/watch?v=TlJxyaLkd4I" target="_blank"
                                   class="inline-flex items-center px-3 py-2 bg-red-600 text-white text-sm font-medium rounded-lg hover:bg-red-700 transition-colors">
                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/>
                                    </svg>
                                    YouTube
                                </a>
                                <a href="https://cutt.ly/IrV0Rn9q" target="_blank"
                                   class="inline-flex items-center px-3 py-2 bg-gray-100 text-gray-700 text-sm font-medium rounded-lg hover:bg-gray-200 transition-colors">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                                    </svg>
                                    Descargar
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Separador -->
            <div class="my-16 border-t-2 border-gray-200 relative">
                <div class="absolute left-1/2 -translate-x-1/2 -top-4 bg-gray-50 px-6">
                    <span class="text-gray-400 text-sm font-medium">Nueva Sección</span>
                </div>
            </div>

            <!-- Encabezado MCP -->
            <div class="bg-gradient-to-r from-orange-50 to-amber-50 rounded-xl p-6 border border-orange-100 mb-12">
                <div class="flex items-start space-x-4">
                    <div class="flex-shrink-0">
                        <div class="w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                            </svg>
                        </div>
                    </div>
                    <div>
                        <h2 class="text-xl font-bold text-gray-800 mb-2">Materias de Capacitación Prioritarias (MCP) - Ciclo 2024-2026</h2>
                        <p class="text-gray-600">Difusión de videos informativos sobre los criterios considerados en la definición de las "Materias de Capacitación Prioritarias para el desarrollo del Servicio Civil".</p>
                    </div>
                </div>
            </div>

            <!-- Sección: Materias de Capacitación Prioritarias -->
            <div class="mb-12">
                <div class="flex items-center mb-6">
                    <div class="w-10 h-10 bg-orange-600 rounded-lg flex items-center justify-center mr-3">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"/>
                        </svg>
                    </div>
                    <h2 class="text-2xl font-bold text-gray-800">¿Cómo se definieron las "MCP"?</h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Video MCP 1 -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                        <div class="relative">
                            <img src="https://img.youtube.com/vi/nt89n4PAnrY/maxresdefault.jpg"
                                 alt="Brechas de capacitación de los servidores civiles"
                                 class="w-full h-48 object-cover"
                                 onerror="this.src='https://img.youtube.com/vi/nt89n4PAnrY/hqdefault.jpg'">
                            <div class="absolute inset-0 bg-black/30 flex items-center justify-center opacity-0 hover:opacity-100 transition-opacity">
                                <a href="https://youtube.com/shorts/nt89n4PAnrY" target="_blank" class="w-16 h-16 bg-red-600 rounded-full flex items-center justify-center hover:bg-red-700 transition-colors">
                                    <svg class="w-8 h-8 text-white ml-1" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M8 5v14l11-7z"/>
                                    </svg>
                                </a>
                            </div>
                            <span class="absolute top-3 left-3 bg-orange-600 text-white text-xs font-semibold px-3 py-1 rounded-full">
                                Short 1
                            </span>
                        </div>
                        <div class="p-5">
                            <h3 class="text-base font-bold text-gray-800 mb-2 line-clamp-3">Brechas de capacitación de los servidores civiles</h3>
                            <div class="flex flex-wrap gap-2">
                                <a href="https://youtube.com/shorts/nt89n4PAnrY" target="_blank"
                                   class="inline-flex items-center px-3 py-2 bg-red-600 text-white text-xs font-medium rounded-lg hover:bg-red-700 transition-colors">
                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/>
                                    </svg>
                                    Ver
                                </a>
                                <a href="https://cutt.ly/XrMuhLcJ" target="_blank"
                                   class="inline-flex items-center px-3 py-2 bg-gray-100 text-gray-700 text-xs font-medium rounded-lg hover:bg-gray-200 transition-colors">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                                    </svg>
                                    Descargar
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Video MCP 2 -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                        <div class="relative">
                            <img src="https://img.youtube.com/vi/ialDfhO-yPw/maxresdefault.jpg"
                                 alt="Necesidades organizacionales"
                                 class="w-full h-48 object-cover"
                                 onerror="this.src='https://img.youtube.com/vi/ialDfhO-yPw/hqdefault.jpg'">
                            <div class="absolute inset-0 bg-black/30 flex items-center justify-center opacity-0 hover:opacity-100 transition-opacity">
                                <a href="https://youtube.com/shorts/ialDfhO-yPw" target="_blank" class="w-16 h-16 bg-red-600 rounded-full flex items-center justify-center hover:bg-red-700 transition-colors">
                                    <svg class="w-8 h-8 text-white ml-1" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M8 5v14l11-7z"/>
                                    </svg>
                                </a>
                            </div>
                            <span class="absolute top-3 left-3 bg-orange-600 text-white text-xs font-semibold px-3 py-1 rounded-full">
                                Short 2
                            </span>
                        </div>
                        <div class="p-5">
                            <h3 class="text-base font-bold text-gray-800 mb-2 line-clamp-3">Necesidades organizacionales para el buen desempeño de la administración pública</h3>
                            <div class="flex flex-wrap gap-2">
                                <a href="https://youtube.com/shorts/ialDfhO-yPw" target="_blank"
                                   class="inline-flex items-center px-3 py-2 bg-red-600 text-white text-xs font-medium rounded-lg hover:bg-red-700 transition-colors">
                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/>
                                    </svg>
                                    Ver
                                </a>
                                <a href="https://cutt.ly/WrMuzhhH" target="_blank"
                                   class="inline-flex items-center px-3 py-2 bg-gray-100 text-gray-700 text-xs font-medium rounded-lg hover:bg-gray-200 transition-colors">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                                    </svg>
                                    Descargar
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Video MCP 3 -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                        <div class="relative">
                            <img src="https://img.youtube.com/vi/zaKkPC6cpNo/maxresdefault.jpg"
                                 alt="Análisis de la inversión en capacitación"
                                 class="w-full h-48 object-cover"
                                 onerror="this.src='https://img.youtube.com/vi/zaKkPC6cpNo/hqdefault.jpg'">
                            <div class="absolute inset-0 bg-black/30 flex items-center justify-center opacity-0 hover:opacity-100 transition-opacity">
                                <a href="https://youtube.com/shorts/zaKkPC6cpNo" target="_blank" class="w-16 h-16 bg-red-600 rounded-full flex items-center justify-center hover:bg-red-700 transition-colors">
                                    <svg class="w-8 h-8 text-white ml-1" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M8 5v14l11-7z"/>
                                    </svg>
                                </a>
                            </div>
                            <span class="absolute top-3 left-3 bg-orange-600 text-white text-xs font-semibold px-3 py-1 rounded-full">
                                Short 3
                            </span>
                        </div>
                        <div class="p-5">
                            <h3 class="text-base font-bold text-gray-800 mb-2 line-clamp-3">Análisis de la inversión en capacitación</h3>
                            <div class="flex flex-wrap gap-2">
                                <a href="https://youtube.com/shorts/zaKkPC6cpNo" target="_blank"
                                   class="inline-flex items-center px-3 py-2 bg-red-600 text-white text-xs font-medium rounded-lg hover:bg-red-700 transition-colors">
                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/>
                                    </svg>
                                    Ver
                                </a>
                                <a href="https://cutt.ly/trMuzK4F" target="_blank"
                                   class="inline-flex items-center px-3 py-2 bg-gray-100 text-gray-700 text-xs font-medium rounded-lg hover:bg-gray-200 transition-colors">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                                    </svg>
                                    Descargar
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Video MCP 4 -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                        <div class="relative">
                            <img src="https://img.youtube.com/vi/5QusdOShehY/maxresdefault.jpg"
                                 alt="Importancia de priorización de cada materia"
                                 class="w-full h-48 object-cover"
                                 onerror="this.src='https://img.youtube.com/vi/5QusdOShehY/hqdefault.jpg'">
                            <div class="absolute inset-0 bg-black/30 flex items-center justify-center opacity-0 hover:opacity-100 transition-opacity">
                                <a href="https://youtube.com/shorts/5QusdOShehY" target="_blank" class="w-16 h-16 bg-red-600 rounded-full flex items-center justify-center hover:bg-red-700 transition-colors">
                                    <svg class="w-8 h-8 text-white ml-1" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M8 5v14l11-7z"/>
                                    </svg>
                                </a>
                            </div>
                            <span class="absolute top-3 left-3 bg-orange-600 text-white text-xs font-semibold px-3 py-1 rounded-full">
                                Short 4
                            </span>
                        </div>
                        <div class="p-5">
                            <h3 class="text-base font-bold text-gray-800 mb-2 line-clamp-3">Importancia de priorización de cada materia</h3>
                            <div class="flex flex-wrap gap-2">
                                <a href="https://youtube.com/shorts/5QusdOShehY" target="_blank"
                                   class="inline-flex items-center px-3 py-2 bg-red-600 text-white text-xs font-medium rounded-lg hover:bg-red-700 transition-colors">
                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/>
                                    </svg>
                                    Ver
                                </a>
                                <a href="https://cutt.ly/qrMuYUQx" target="_blank"
                                   class="inline-flex items-center px-3 py-2 bg-gray-100 text-gray-700 text-xs font-medium rounded-lg hover:bg-gray-200 transition-colors">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                                    </svg>
                                    Descargar
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ============================================================
                 SECCIÓN: Videos de las Matrices MCP (Excel - Tabla 1)
                 Para agregar un video nuevo, añade un elemento al arreglo $videosMatrices.
                 ============================================================ -->
            @php
                $videosMatrices = [
                    [
                        'id' => '0sE6Unt8dtE',
                        'titulo' => 'Matrices de contenidos de las Materias de Capacitación Prioritarias (MCP)',
                        'youtube' => 'https://youtube.com/shorts/0sE6Unt8dtE?feature=share',
                        'descarga' => 'https://cutt.ly/ntGqcuiG',
                        'pieza' => 'https://cutt.ly/CtGgkwlY',
                    ],
                    [
                        'id' => 'LyWyLX24f4M',
                        'titulo' => 'Conoce más sobre las matrices de las Materias de Capacitación Prioritarias (MCP) 2024–2026',
                        'youtube' => 'https://youtube.com/shorts/LyWyLX24f4M?feature=share',
                        'descarga' => 'https://cutt.ly/JtGqv8qO',
                        'pieza' => 'https://cutt.ly/GtGgl0dm',
                    ],
                    [
                        'id' => 'P36Oanc6lBs',
                        'titulo' => '¿Qué deben aprender los servidores civiles respecto a cada Materia de Capacitación Prioritaria (MCP)?',
                        'youtube' => 'https://www.youtube.com/shorts/P36Oanc6lBs',
                        'descarga' => 'https://cutt.ly/btGh9llp',
                        'pieza' => 'https://cutt.ly/ztGqznJC',
                    ],
                    [
                        'id' => 'ZJG_3XaLCdc',
                        'titulo' => 'Conoce los lineamientos para el uso de las matrices de las Materias de Capacitación Prioritarias (MCP)',
                        'youtube' => 'https://youtube.com/shorts/ZJG_3XaLCdc?si=YEVHAqv4ok9Qa-Jx',
                        'descarga' => 'https://cutt.ly/8tGqnfCJ',
                        'pieza' => 'https://cutt.ly/7tGqzVVP',
                    ],
                ];
            @endphp

            <div class="mb-12">
                <div class="flex items-center mb-6">
                    <div class="w-10 h-10 bg-orange-600 rounded-lg flex items-center justify-center mr-3">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <h2 class="text-2xl font-bold text-gray-800">Conoce las Matrices de las MCP</h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    @foreach ($videosMatrices as $i => $video)
                        <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                            <div class="relative">
                                <img src="https://img.youtube.com/vi/{{ $video['id'] }}/maxresdefault.jpg"
                                     alt="{{ $video['titulo'] }}"
                                     class="w-full h-48 object-cover"
                                     onerror="this.src='https://img.youtube.com/vi/{{ $video['id'] }}/hqdefault.jpg'">
                                <div class="absolute inset-0 bg-black/30 flex items-center justify-center opacity-0 hover:opacity-100 transition-opacity">
                                    <a href="{{ $video['youtube'] }}" target="_blank" class="w-16 h-16 bg-red-600 rounded-full flex items-center justify-center hover:bg-red-700 transition-colors">
                                        <svg class="w-8 h-8 text-white ml-1" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M8 5v14l11-7z"/>
                                        </svg>
                                    </a>
                                </div>
                                <span class="absolute top-3 left-3 bg-orange-600 text-white text-xs font-semibold px-3 py-1 rounded-full">
                                    Video {{ $i + 1 }}
                                </span>
                            </div>
                            <div class="p-5">
                                <h3 class="text-base font-bold text-gray-800 mb-3 line-clamp-3">{{ $video['titulo'] }}</h3>
                                <div class="flex flex-wrap gap-2">
                                    <a href="{{ $video['youtube'] }}" target="_blank"
                                       class="inline-flex items-center px-3 py-2 bg-red-600 text-white text-xs font-medium rounded-lg hover:bg-red-700 transition-colors">
                                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/>
                                        </svg>
                                        Ver
                                    </a>
                                    <a href="{{ $video['descarga'] }}" target="_blank"
                                       class="inline-flex items-center px-3 py-2 bg-gray-100 text-gray-700 text-xs font-medium rounded-lg hover:bg-gray-200 transition-colors">
                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                                        </svg>
                                        Descargar
                                    </a>
                                    <a href="{{ $video['pieza'] }}" target="_blank"
                                       class="inline-flex items-center px-3 py-2 bg-amber-100 text-amber-700 text-xs font-medium rounded-lg hover:bg-amber-200 transition-colors">
                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                        </svg>
                                        Pieza gráfica
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- ============================================================
                 SECCIÓN: Piezas gráficas / Matrices MCP (Excel - Tabla 2)
                 Para agregar una matriz nueva, añade un elemento al arreglo $matricesMcp.
                 ============================================================ -->
            @php
                $matricesMcp = [
                    [
                        'titulo' => 'Modernización de la Gestión Pública',
                        'descarga' => 'https://cutt.ly/rtK62gK4',
                        'matriz' => 'https://cdn.www.gob.pe/uploads/document/file/7833914/6607641-matriz-de-materia-de-capacitacion-prioritaria-2024-2026_modernizacion-de-la-gestion-publica.pdf?v=1743017715',
                    ],
                    [
                        'titulo' => 'Gestión de Recursos Humanos',
                        'descarga' => 'https://cutt.ly/htK69JaL',
                        'matriz' => 'https://cdn.www.gob.pe/uploads/document/file/7833916/6607641-matriz-de-materia-de-capacitacion-prioritaria-2024-2026_gestion-de-recursos-humanos-_1_.pdf?v=1743017846',
                    ],
                    [
                        'titulo' => 'Planeamiento Estratégico',
                        'descarga' => 'https://cutt.ly/ztK63sRT',
                        'matriz' => 'https://cdn.www.gob.pe/uploads/document/file/7833913/6607641-matriz-de-materia-de-capacitacion-prioritaria-2024-2026_planeamiento-estrategico.pdf?v=1743017714',
                    ],
                    [
                        'titulo' => 'Presupuesto Público',
                        'descarga' => 'https://cutt.ly/TtK63v6y',
                        'matriz' => 'https://cdn.www.gob.pe/uploads/document/file/7833912/6607641-matriz-de-materia-de-capacitacion-prioritaria-2024-2026_presupuesto-publico-_1_.pdf?v=1743017846',
                    ],
                    [
                        'titulo' => 'Gobierno y Transformación Digital',
                        'descarga' => 'https://cutt.ly/XtK63Fq6',
                        'matriz' => 'https://cdn.www.gob.pe/uploads/document/file/7833915/6607641-matriz-de-materia-de-capacitacion-prioritaria-2024-2026_gobierno-y-transformacion-digital.pdf?v=1743017716',
                    ],
                    [
                        'titulo' => 'Integridad',
                        'descarga' => 'https://cutt.ly/XtK636Gu',
                        'matriz' => 'https://cdn.www.gob.pe/uploads/document/file/7833930/6607641-matriz-de-materia-de-capacitacion-prioritaria-2024-2026_integridad.pdf?v=1743017772',
                    ],
                ];
            @endphp

            <!-- Encabezado Piezas gráficas -->
            <div class="bg-gradient-to-r from-orange-50 to-amber-50 rounded-xl p-6 border border-orange-100 mb-8">
                <div class="flex items-start space-x-4">
                    <div class="flex-shrink-0">
                        <div class="w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                        </div>
                    </div>
                    <div>
                        <h2 class="text-xl font-bold text-gray-800 mb-2">Matrices de las Materias de Capacitación Prioritarias (MCP)</h2>
                        <p class="text-gray-600">Descarga las piezas gráficas de difusión y accede a las matrices oficiales de cada Materia de Capacitación Prioritaria 2024-2026.</p>
                    </div>
                </div>
            </div>

            <div class="mb-12">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ($matricesMcp as $i => $matriz)
                        <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 border-t-4 border-orange-500">
                            <div class="p-6">
                                <div class="flex items-center mb-4">
                                    <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center mr-3 flex-shrink-0">
                                        <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                        </svg>
                                    </div>
                                    <span class="text-xs font-semibold text-orange-600 uppercase tracking-wide">Matriz MCP {{ $i + 1 }}</span>
                                </div>
                                <h3 class="text-lg font-bold text-gray-800 mb-4 line-clamp-2">{{ $matriz['titulo'] }}</h3>
                                <div class="flex flex-wrap gap-2">
                                    <a href="{{ $matriz['matriz'] }}" target="_blank"
                                       class="inline-flex items-center px-4 py-2 bg-orange-600 text-white text-sm font-medium rounded-lg hover:bg-orange-700 transition-colors">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                                        </svg>
                                        Ver Matriz (PDF)
                                    </a>
                                    <a href="{{ $matriz['descarga'] }}" target="_blank"
                                       class="inline-flex items-center px-4 py-2 bg-gray-100 text-gray-700 text-sm font-medium rounded-lg hover:bg-gray-200 transition-colors">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                                        </svg>
                                        Pieza gráfica
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Botón de regreso -->
            <div class="text-center mt-12">
                <a href="/" class="inline-flex items-center px-6 py-3 bg-gray-800 text-white font-medium rounded-lg hover:bg-gray-900 transition-colors">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                    </svg>
                    Volver al Inicio
                </a>
            </div>
        </div>
    </div>
@endsection
