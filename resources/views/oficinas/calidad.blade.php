@extends('layouts.app')

@section('content')
<div class="bg-gray-50 min-h-screen">
    <!-- Hero Section -->
    <div class="relative text-white py-20" style="background-image: url('{{ asset('img/presentacion/presentacionbackground.jpg') }}'); background-size: cover; background-position: center; background-attachment: fixed;">
        <div class="absolute inset-0 bg-gradient-to-r from-[#db0455]/80 to-[#ed145b]/70"></div>
        <div class="relative z-10 container mx-auto px-4">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4 drop-shadow-lg">Gestión de la Calidad</h1>
                <p class="text-xl md:text-2xl opacity-90 drop-shadow-md">Universidad Nacional Amazónica de Madre de Dios</p>
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
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="ml-1 text-sm font-medium text-[#db0455] md:ml-2">Gestión de la Calidad</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-12">
        <div class="flex gap-8">
            <!-- Sidebar Navigation -->
            <div class="w-80 flex-shrink-0">
                <!-- Navigation Card -->
                <div class="bg-white rounded-lg shadow-xl mb-8 overflow-hidden border-t-4 border-[#db0455]">
                    <div class="bg-gradient-to-r from-[#db0455] to-[#ed145b] text-white p-6">
                        <div class="flex items-center space-x-3">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                            <h3 class="text-xl font-bold">Navegación</h3>
                        </div>
                    </div>
                    <div class="p-3">
                        <nav class="space-y-1">
                            <a href="#inicio" class="calidad-nav-link active" data-section="inicio">
                                <div class="flex items-center space-x-3">
                                    <div class="flex-shrink-0">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                                        </svg>
                                    </div>
                                    <span class="flex-1 text-sm font-medium">Inicio</span>
                                    <svg class="w-3 h-3 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </div>
                            </a>
                            <div class="calidad-nav-link-disabled">
                                <div class="flex items-center space-x-3">
                                    <div class="flex-shrink-0">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                                        </svg>
                                    </div>
                                    <span class="flex-1 text-sm font-medium">Estructura Orgánica</span>
                                    <span class="text-xs bg-gray-200 text-gray-500 px-2 py-1 rounded-full">Próximamente</span>
                                </div>
                            </div>
                            <div class="calidad-nav-link-disabled">
                                <div class="flex items-center space-x-3">
                                    <div class="flex-shrink-0">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                                        </svg>
                                    </div>
                                    <span class="flex-1 text-sm font-medium">Personal Administrativo</span>
                                    <span class="text-xs bg-gray-200 text-gray-500 px-2 py-1 rounded-full">Próximamente</span>
                                </div>
                            </div>
                            <div class="calidad-nav-link-disabled">
                                <div class="flex items-center space-x-3">
                                    <div class="flex-shrink-0">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                        </svg>
                                    </div>
                                    <span class="flex-1 text-sm font-medium">Directorio</span>
                                    <span class="text-xs bg-gray-200 text-gray-500 px-2 py-1 rounded-full">Próximamente</span>
                                </div>
                            </div>
                            <div class="calidad-nav-link-disabled">
                                <div class="flex items-center space-x-3">
                                    <div class="flex-shrink-0">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                        </svg>
                                    </div>
                                    <span class="flex-1 text-sm font-medium">SINC</span>
                                    <span class="text-xs bg-gray-200 text-gray-500 px-2 py-1 rounded-full">Próximamente</span>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>

                <!-- Contact Information Card -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="bg-gradient-to-r from-[#db0455] to-[#ed145b] text-white p-4">
                        <h3 class="text-lg font-bold">Datos de contacto</h3>
                    </div>
                    <div class="p-6">
                        <div class="space-y-4">
                            <div class="flex items-center space-x-3">
                                <svg class="w-5 h-5 text-[#db0455]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                                <div>
                                    <p class="text-sm text-gray-600">Teléfono:</p>
                                    <p class="font-semibold">+51 975 845 152</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-3">
                                <svg class="w-5 h-5 text-[#db0455]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                                <div>
                                    <p class="text-sm text-gray-600">Correo:</p>
                                    <p class="font-semibold">dugc@unamad.edu.pe</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-3">
                                <svg class="w-5 h-5 text-[#db0455]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                <div>
                                    <p class="text-sm text-gray-600">Dirección:</p>
                                    <p class="font-semibold">Av. Jorge Chávez N°1160 – 4to piso, Pabellón A</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Content Area -->
            <div class="flex-1">
                <!-- Inicio Section -->
                <div id="inicio" class="content-section active">
                    <!-- Welcome Banner -->
                    <div class="bg-gradient-to-r from-[#db0455] to-[#ed145b] text-white rounded-lg p-8 mb-8 shadow-lg">
                        <div class="flex items-center justify-between">
                            <div>
                                <h2 class="text-3xl font-bold mb-2">Bienvenido a la Oficina de Gestión de la Calidad</h2>
                                <p class="text-lg opacity-90">Comprometidos con la excelencia académica y la mejora continua</p>
                            </div>
                            <div class="hidden md:block">
                                <svg class="w-20 h-20 opacity-80" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>


                    <!-- Main Description -->
                    <div class="bg-white rounded-lg shadow-lg mb-8 overflow-hidden border-t-4 border-[#db0455]">
                        <div class="bg-gradient-to-r from-[#db0455] to-[#ed145b] text-white p-6">
                            <h2 class="text-2xl font-bold flex items-center">
                                <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Acerca de Nosotros
                            </h2>
                        </div>
                        
                        <div class="p-8">
                            <div class="prose max-w-none">
                                <p class="text-lg text-gray-700 leading-relaxed mb-6">
                                    La Oficina de Gestión de la Calidad es el órgano de asesoramiento responsable de planificar, monitorear, supervisar y evaluar los procesos de mejora de la calidad para el licenciamiento, acreditación y excelencia académica de la UNAMAD; asimismo, elaborar y ejecutar el Plan de Gestión de la Calidad Institucional; así como, gestionar, monitorear y asegurar el proceso de evaluación periódica de los docentes.
                                </p>
                                
                                <!-- Mission and Vision -->
                                <div class="grid md:grid-cols-2 gap-8 mt-8">
                                    <div class="bg-gradient-to-br from-blue-50 to-blue-100 p-6 rounded-lg">
                                        <h4 class="text-xl font-bold text-blue-800 mb-4 flex items-center">
                                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                            </svg>
                                            Misión
                                        </h4>
                                        <p class="text-gray-700">
                                            Promover y asegurar la calidad académica y administrativa de la UNAMAD a través de la implementación de sistemas de gestión de calidad eficaces y procesos de mejora continua.
                                        </p>
                                    </div>
                                    
                                    <div class="bg-gradient-to-br from-green-50 to-green-100 p-6 rounded-lg">
                                        <h4 class="text-xl font-bold text-green-800 mb-4 flex items-center">
                                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                            </svg>
                                            Visión
                                        </h4>
                                        <p class="text-gray-700">
                                            Ser reconocidos como una oficina líder en gestión de calidad universitaria, contribuyendo al posicionamiento de la UNAMAD como una institución de excelencia académica en la región amazónica.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Functions Section -->
                    <div class="bg-white rounded-lg shadow-lg mb-8 overflow-hidden border-t-4 border-[#db0455]">
                        <div class="bg-gradient-to-r from-[#db0455] to-[#ed145b] text-white p-6">
                            <h2 class="text-2xl font-bold flex items-center">
                                <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                                </svg>
                                Funciones Principales
                            </h2>
                        </div>
                        
                        <div class="p-8">
                            <div class="grid md:grid-cols-2 gap-6">
                                <div class="space-y-4">
                                    <div class="flex items-start space-x-4 p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors">
                                        <div class="flex-shrink-0 w-10 h-10 bg-[#db0455] text-white rounded-full flex items-center justify-center font-bold">
                                            1
                                        </div>
                                        <p class="text-gray-700 flex-1 text-sm">
                                            Gestionar, monitorear y evaluar lineamientos de política, programas, proyectos y acciones de aseguramiento de la calidad institucional.
                                        </p>
                                    </div>

                                    <div class="flex items-start space-x-4 p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors">
                                        <div class="flex-shrink-0 w-10 h-10 bg-[#db0455] text-white rounded-full flex items-center justify-center font-bold">
                                            2
                                        </div>
                                        <p class="text-gray-700 flex-1 text-sm">
                                            Diseñar, proponer, gestionar y asegurar la gestión efectiva del Sistema de Gestión de la Calidad Institucional.
                                        </p>
                                    </div>

                                    <div class="flex items-start space-x-4 p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors">
                                        <div class="flex-shrink-0 w-10 h-10 bg-[#db0455] text-white rounded-full flex items-center justify-center font-bold">
                                            3
                                        </div>
                                        <p class="text-gray-700 flex-1 text-sm">
                                            Monitorear los sistemas y procesos trasversales de autoevaluación, licenciamiento y acreditación institucional.
                                        </p>
                                    </div>

                                    <div class="flex items-start space-x-4 p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors">
                                        <div class="flex-shrink-0 w-10 h-10 bg-[#db0455] text-white rounded-full flex items-center justify-center font-bold">
                                            4
                                        </div>
                                        <p class="text-gray-700 flex-1 text-sm">
                                            Fomentar el fortalecimiento de las capacidades de los miembros de la comunidad universitaria.
                                        </p>
                                    </div>

                                    <div class="flex items-start space-x-4 p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors">
                                        <div class="flex-shrink-0 w-10 h-10 bg-[#db0455] text-white rounded-full flex items-center justify-center font-bold">
                                            5
                                        </div>
                                        <p class="text-gray-700 flex-1 text-sm">
                                            Difundir los resultados o niveles de calidad que alcance la universidad.
                                        </p>
                                    </div>
                                </div>

                                <div class="space-y-4">
                                    <div class="flex items-start space-x-4 p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors">
                                        <div class="flex-shrink-0 w-10 h-10 bg-[#db0455] text-white rounded-full flex items-center justify-center font-bold">
                                            6
                                        </div>
                                        <p class="text-gray-700 flex-1 text-sm">
                                            Emitir opiniones técnicas en materia de su competencia.
                                        </p>
                                    </div>

                                    <div class="flex items-start space-x-4 p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors">
                                        <div class="flex-shrink-0 w-10 h-10 bg-[#db0455] text-white rounded-full flex items-center justify-center font-bold">
                                            7
                                        </div>
                                        <p class="text-gray-700 flex-1 text-sm">
                                            Capacitar a los miembros de la comunidad universitaria sobre sistema de gestión de la calidad.
                                        </p>
                                    </div>

                                    <div class="flex items-start space-x-4 p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors">
                                        <div class="flex-shrink-0 w-10 h-10 bg-[#db0455] text-white rounded-full flex items-center justify-center font-bold">
                                            8
                                        </div>
                                        <p class="text-gray-700 flex-1 text-sm">
                                            Brindar asesoramiento y apoyo a los procesos de acreditación institucional.
                                        </p>
                                    </div>

                                    <div class="flex items-start space-x-4 p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors">
                                        <div class="flex-shrink-0 w-10 h-10 bg-[#db0455] text-white rounded-full flex items-center justify-center font-bold">
                                            9
                                        </div>
                                        <p class="text-gray-700 flex-1 text-sm">
                                            Las demás funciones asignadas por el Rectorado, o aquellas que sean otorgadas por norma expresa.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Estructura Orgánica Section -->
                <div id="estructura" class="content-section hidden">
                    <div class="bg-white rounded-lg shadow-lg mb-12 overflow-hidden border-t-4 border-[#db0455]">
                        <div class="bg-gradient-to-r from-[#db0455] to-[#ed145b] text-white p-6">
                            <h2 class="text-3xl font-bold flex items-center">
                                <svg class="w-8 h-8 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                                </svg>
                                ESTRUCTURA ORGÁNICA
                            </h2>
                        </div>
                        <div class="p-8">
                            <!-- Organigrama -->
                            <div class="mb-8">
                                <h3 class="text-xl font-bold text-gray-800 mb-6 text-center">Organigrama de la Oficina de Gestión de la Calidad</h3>
                                
                                <div class="flex flex-col items-center space-y-6">
                                    <!-- Director General -->
                                    <div class="bg-[#db0455] text-white px-6 py-4 rounded-lg shadow-lg">
                                        <div class="text-center">
                                            <h4 class="font-bold">DIRECTOR(A) GENERAL</h4>
                                            <p class="text-sm opacity-90">Gestión de la Calidad</p>
                                        </div>
                                    </div>
                                    
                                    <!-- Línea conectora -->
                                    <div class="w-px h-8 bg-gray-400"></div>
                                    
                                    <!-- Subdivisiones -->
                                    <div class="grid md:grid-cols-3 gap-8 w-full">
                                        <div class="bg-blue-500 text-white px-4 py-3 rounded-lg shadow-lg text-center">
                                            <h5 class="font-bold text-sm">UNIDAD DE</h5>
                                            <h5 class="font-bold text-sm">LICENCIAMIENTO</h5>
                                        </div>
                                        
                                        <div class="bg-green-500 text-white px-4 py-3 rounded-lg shadow-lg text-center">
                                            <h5 class="font-bold text-sm">UNIDAD DE</h5>
                                            <h5 class="font-bold text-sm">ACREDITACIÓN</h5>
                                        </div>
                                        
                                        <div class="bg-purple-500 text-white px-4 py-3 rounded-lg shadow-lg text-center">
                                            <h5 class="font-bold text-sm">UNIDAD DE</h5>
                                            <h5 class="font-bold text-sm">EVALUACIÓN</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Descripción de las unidades -->
                            <div class="grid md:grid-cols-3 gap-6">
                                <div class="bg-blue-50 p-6 rounded-lg">
                                    <h4 class="font-bold text-blue-800 mb-3">Unidad de Licenciamiento</h4>
                                    <p class="text-gray-700 text-sm">
                                        Responsable de gestionar los procesos de licenciamiento institucional y el cumplimiento de condiciones básicas de calidad.
                                    </p>
                                </div>
                                
                                <div class="bg-green-50 p-6 rounded-lg">
                                    <h4 class="font-bold text-green-800 mb-3">Unidad de Acreditación</h4>
                                    <p class="text-gray-700 text-sm">
                                        Encargada de los procesos de acreditación de programas académicos y la implementación de mejoras continuas.
                                    </p>
                                </div>
                                
                                <div class="bg-purple-50 p-6 rounded-lg">
                                    <h4 class="font-bold text-purple-800 mb-3">Unidad de Evaluación</h4>
                                    <p class="text-gray-700 text-sm">
                                        Realiza evaluaciones periódicas de docentes y procesos académicos para garantizar la calidad educativa.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Personal Administrativo Section -->
                <div id="personal" class="content-section hidden">
                    <div class="bg-white rounded-lg shadow-lg mb-12 overflow-hidden border-t-4 border-[#db0455]">
                        <div class="bg-gradient-to-r from-[#db0455] to-[#ed145b] text-white p-6">
                            <h2 class="text-3xl font-bold flex items-center">
                                <svg class="w-8 h-8 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                                </svg>
                                PERSONAL ADMINISTRATIVO
                            </h2>
                        </div>
                        <div class="p-8">
                            <div class="grid md:grid-cols-2 gap-8">
                                <!-- Director General -->
                                <div class="bg-gradient-to-r from-[#db0455]/10 to-[#ed145b]/10 p-6 rounded-lg border border-[#db0455]/20">
                                    <div class="flex items-center space-x-4">
                                        <div class="w-16 h-16 bg-[#db0455] rounded-full flex items-center justify-center">
                                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                            </svg>
                                        </div>
                                        <div>
                                            <h3 class="text-lg font-bold text-gray-800">Director(a) General</h3>
                                            <p class="text-sm text-gray-600">Gestión de la Calidad</p>
                                            <p class="text-sm text-[#db0455] font-semibold">dugc@unamad.edu.pe</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Coordinadores -->
                                <div class="space-y-4">
                                    <div class="bg-blue-50 p-4 rounded-lg border border-blue-200">
                                        <h4 class="font-bold text-blue-800">Coordinador de Licenciamiento</h4>
                                        <p class="text-sm text-gray-600">Gestión de procesos de licenciamiento</p>
                                    </div>
                                    
                                    <div class="bg-green-50 p-4 rounded-lg border border-green-200">
                                        <h4 class="font-bold text-green-800">Coordinador de Acreditación</h4>
                                        <p class="text-sm text-gray-600">Gestión de procesos de acreditación</p>
                                    </div>
                                    
                                    <div class="bg-purple-50 p-4 rounded-lg border border-purple-200">
                                        <h4 class="font-bold text-purple-800">Coordinador de Evaluación</h4>
                                        <p class="text-sm text-gray-600">Evaluación docente y académica</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Personal de Apoyo -->
                            <div class="mt-8">
                                <h3 class="text-xl font-bold text-gray-800 mb-6">Personal de Apoyo</h3>
                                <div class="grid md:grid-cols-3 gap-6">
                                    <div class="bg-gray-50 p-4 rounded-lg">
                                        <h4 class="font-semibold text-gray-800">Especialista en Calidad</h4>
                                        <p class="text-sm text-gray-600">Análisis y mejora de procesos</p>
                                    </div>
                                    
                                    <div class="bg-gray-50 p-4 rounded-lg">
                                        <h4 class="font-semibold text-gray-800">Asistente Administrativo</h4>
                                        <p class="text-sm text-gray-600">Apoyo en gestión documental</p>
                                    </div>
                                    
                                    <div class="bg-gray-50 p-4 rounded-lg">
                                        <h4 class="font-semibold text-gray-800">Técnico en Sistemas</h4>
                                        <p class="text-sm text-gray-600">Soporte tecnológico</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Directorio Section -->
                <div id="directorio" class="content-section hidden">
                    <div class="bg-white rounded-lg shadow-lg mb-12 overflow-hidden border-t-4 border-[#db0455]">
                        <div class="bg-gradient-to-r from-[#db0455] to-[#ed145b] text-white p-6">
                            <h2 class="text-3xl font-bold flex items-center">
                                <svg class="w-8 h-8 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                </svg>
                                DIRECTORIO DE CONTACTOS
                            </h2>
                        </div>
                        <div class="p-8">
                            <!-- Información Principal -->
                            <div class="bg-gradient-to-r from-[#db0455]/10 to-[#ed145b]/10 p-6 rounded-lg mb-8">
                                <h3 class="text-xl font-bold text-[#db0455] mb-4">Información General</h3>
                                <div class="grid md:grid-cols-2 gap-6">
                                    <div>
                                        <p class="font-semibold">Oficina Principal:</p>
                                        <p class="text-gray-700">Av. Jorge Chávez N°1160 – 4to piso, Pabellón A</p>
                                        <p class="text-gray-700">Ciudad Universitaria, Puerto Maldonado</p>
                                    </div>
                                    <div>
                                        <p class="font-semibold">Horario de Atención:</p>
                                        <p class="text-gray-700">Lunes a Viernes: 8:00 AM - 5:00 PM</p>
                                        <p class="text-gray-700">Sábados: 8:00 AM - 12:00 PM</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Contactos por Área -->
                            <div class="grid md:grid-cols-2 gap-8">
                                <div>
                                    <h3 class="text-lg font-bold text-gray-800 mb-4">Contactos por Área</h3>
                                    
                                    <div class="space-y-4">
                                        <div class="border-l-4 border-[#db0455] pl-4">
                                            <h4 class="font-semibold text-[#db0455]">Dirección General</h4>
                                            <p class="text-sm text-gray-600">📞 +51 975 845 152</p>
                                            <p class="text-sm text-gray-600">📧 dugc@unamad.edu.pe</p>
                                        </div>
                                        
                                        <div class="border-l-4 border-blue-500 pl-4">
                                            <h4 class="font-semibold text-blue-600">Licenciamiento</h4>
                                            <p class="text-sm text-gray-600">📞 +51 975 845 153</p>
                                            <p class="text-sm text-gray-600">📧 licenciamiento@unamad.edu.pe</p>
                                        </div>
                                        
                                        <div class="border-l-4 border-green-500 pl-4">
                                            <h4 class="font-semibold text-green-600">Acreditación</h4>
                                            <p class="text-sm text-gray-600">📞 +51 975 845 154</p>
                                            <p class="text-sm text-gray-600">📧 acreditacion@unamad.edu.pe</p>
                                        </div>
                                        
                                        <div class="border-l-4 border-purple-500 pl-4">
                                            <h4 class="font-semibold text-purple-600">Evaluación Docente</h4>
                                            <p class="text-sm text-gray-600">📞 +51 975 845 155</p>
                                            <p class="text-sm text-gray-600">📧 evaluacion@unamad.edu.pe</p>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <h3 class="text-lg font-bold text-gray-800 mb-4">Enlaces Útiles</h3>
                                    
                                    <div class="space-y-3">
                                        <a href="#" class="block p-3 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors">
                                            <div class="flex items-center space-x-3">
                                                <svg class="w-5 h-5 text-[#db0455]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                                </svg>
                                                <span class="text-sm font-medium">Manual de Calidad</span>
                                            </div>
                                        </a>
                                        
                                        <a href="#" class="block p-3 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors">
                                            <div class="flex items-center space-x-3">
                                                <svg class="w-5 h-5 text-[#db0455]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                                                </svg>
                                                <span class="text-sm font-medium">Formularios de Evaluación</span>
                                            </div>
                                        </a>
                                        
                                        <a href="#" class="block p-3 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors">
                                            <div class="flex items-center space-x-3">
                                                <svg class="w-5 h-5 text-[#db0455]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                </svg>
                                                <span class="text-sm font-medium">Preguntas Frecuentes</span>
                                            </div>
                                        </a>
                                        
                                        <a href="#" class="block p-3 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors">
                                            <div class="flex items-center space-x-3">
                                                <svg class="w-5 h-5 text-[#db0455]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                                </svg>
                                                <span class="text-sm font-medium">Biblioteca de Recursos</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SINC Section -->
                <div id="sinc" class="content-section hidden">
                    <div class="bg-white rounded-lg shadow-lg mb-12 overflow-hidden border-t-4 border-[#db0455]">
                        <div class="bg-gradient-to-r from-[#db0455] to-[#ed145b] text-white p-6">
                            <h2 class="text-3xl font-bold flex items-center">
                                <svg class="w-8 h-8 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                                SISTEMA INTEGRADO DE NORMALIZACIÓN Y CONTROL
                            </h2>
                        </div>
                        <div class="p-8">
                            <!-- Descripción del SINC -->
                            <div class="bg-gradient-to-r from-blue-50 to-indigo-100 p-6 rounded-lg mb-8">
                                <h3 class="text-xl font-bold text-indigo-800 mb-4">¿Qué es el SINC?</h3>
                                <p class="text-gray-700 mb-4">
                                    El Sistema Integrado de Normalización y Control (SINC) es una plataforma tecnológica que permite la gestión integral de los procesos de calidad en la Universidad Nacional Amazónica de Madre de Dios, facilitando el monitoreo, control y mejora continua de todos los aspectos académicos y administrativos.
                                </p>
                            </div>

                            <!-- Módulos del Sistema -->
                            <div class="grid md:grid-cols-2 gap-8 mb-8">
                                <div>
                                    <h3 class="text-lg font-bold text-gray-800 mb-6">Módulos del Sistema</h3>
                                    
                                    <div class="space-y-4">
                                        <div class="bg-gradient-to-r from-[#db0455]/10 to-[#ed145b]/10 p-4 rounded-lg border border-[#db0455]/20">
                                            <h4 class="font-bold text-[#db0455] mb-2">Gestión Documental</h4>
                                            <p class="text-sm text-gray-700">Control y seguimiento de documentos institucionales</p>
                                        </div>
                                        
                                        <div class="bg-gradient-to-r from-blue-50 to-blue-100 p-4 rounded-lg border border-blue-200">
                                            <h4 class="font-bold text-blue-800 mb-2">Evaluación Docente</h4>
                                            <p class="text-sm text-gray-700">Sistema automatizado de evaluación del desempeño docente</p>
                                        </div>
                                        
                                        <div class="bg-gradient-to-r from-green-50 to-green-100 p-4 rounded-lg border border-green-200">
                                            <h4 class="font-bold text-green-800 mb-2">Seguimiento Académico</h4>
                                            <p class="text-sm text-gray-700">Monitoreo de indicadores de calidad académica</p>
                                        </div>
                                        
                                        <div class="bg-gradient-to-r from-purple-50 to-purple-100 p-4 rounded-lg border border-purple-200">
                                            <h4 class="font-bold text-purple-800 mb-2">Reportes y Analítica</h4>
                                            <p class="text-sm text-gray-700">Generación automática de reportes e indicadores</p>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <h3 class="text-lg font-bold text-gray-800 mb-6">Beneficios</h3>
                                    
                                    <div class="space-y-4">
                                        <div class="flex items-start space-x-3">
                                            <svg class="w-5 h-5 text-green-600 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                            <div>
                                                <h4 class="font-semibold text-gray-800">Automatización de Procesos</h4>
                                                <p class="text-sm text-gray-600">Reducción significativa de tiempos en trámites administrativos</p>
                                            </div>
                                        </div>
                                        
                                        <div class="flex items-start space-x-3">
                                            <svg class="w-5 h-5 text-green-600 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                            <div>
                                                <h4 class="font-semibold text-gray-800">Trazabilidad Completa</h4>
                                                <p class="text-sm text-gray-600">Seguimiento detallado de todos los procesos institucionales</p>
                                            </div>
                                        </div>
                                        
                                        <div class="flex items-start space-x-3">
                                            <svg class="w-5 h-5 text-green-600 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                            <div>
                                                <h4 class="font-semibold text-gray-800">Mejora Continua</h4>
                                                <p class="text-sm text-gray-600">Identificación proactiva de oportunidades de mejora</p>
                                            </div>
                                        </div>
                                        
                                        <div class="flex items-start space-x-3">
                                            <svg class="w-5 h-5 text-green-600 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                            <div>
                                                <h4 class="font-semibold text-gray-800">Transparencia</h4>
                                                <p class="text-sm text-gray-600">Acceso transparente a información y procesos</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Acceso al Sistema -->
                            <div class="bg-gradient-to-r from-gray-50 to-gray-100 p-6 rounded-lg">
                                <h3 class="text-lg font-bold text-gray-800 mb-4">Acceso al Sistema</h3>
                                <div class="grid md:grid-cols-2 gap-6">
                                    <div>
                                        <h4 class="font-semibold text-gray-800 mb-2">Para Docentes:</h4>
                                        <p class="text-sm text-gray-600 mb-3">Accede al módulo de evaluación docente y seguimiento académico</p>
                                        <button class="bg-[#db0455] text-white px-4 py-2 rounded-lg hover:bg-[#ed145b] transition-colors">
                                            Acceder como Docente
                                        </button>
                                    </div>
                                    
                                    <div>
                                        <h4 class="font-semibold text-gray-800 mb-2">Para Administradores:</h4>
                                        <p class="text-sm text-gray-600 mb-3">Panel completo de administración y reportes del sistema</p>
                                        <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors">
                                            Panel Administrativo
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.calidad-nav-link {
    @apply block px-4 py-3 text-gray-700 hover:bg-gradient-to-r hover:from-[#db0455]/5 hover:to-[#ed145b]/5 hover:text-[#db0455] rounded-lg transition-all duration-300 border border-transparent hover:border-[#db0455]/20 cursor-pointer hover:shadow-sm transform hover:translate-x-1;
}

.calidad-nav-link.active {
    @apply bg-gradient-to-r from-[#db0455] to-[#ed145b] text-white border-[#db0455]/30 shadow-lg translate-x-1;
}

.calidad-nav-link.active svg {
    @apply text-white;
}

.calidad-nav-link:hover svg:last-child {
    @apply transform rotate-90 text-[#db0455];
}

.calidad-nav-link.active svg:last-child {
    @apply transform rotate-90 text-white;
}

.calidad-nav-link span {
    @apply text-sm;
}

.calidad-nav-link-disabled {
    @apply block px-4 py-3 text-gray-400 rounded-lg border border-transparent cursor-not-allowed opacity-60;
}

.content-section {
    @apply transition-all duration-300;
}

.content-section.hidden {
    @apply hidden;
}

.content-section.active {
    @apply block;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const navLinks = document.querySelectorAll('.calidad-nav-link');
    const contentSections = document.querySelectorAll('.content-section');

    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetSection = this.getAttribute('data-section');
            
            // Remove active class from all nav links
            navLinks.forEach(nav => nav.classList.remove('active'));
            
            // Add active class to clicked nav link
            this.classList.add('active');
            
            // Hide all content sections
            contentSections.forEach(section => {
                section.classList.remove('active');
                section.classList.add('hidden');
            });
            
            // Show target content section
            const targetElement = document.getElementById(targetSection);
            if (targetElement) {
                targetElement.classList.remove('hidden');
                targetElement.classList.add('active');
            }
        });
    });
});
</script>

@endsection