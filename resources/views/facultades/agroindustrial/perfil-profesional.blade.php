@extends('layouts.app')

@section('content')
<div class="bg-gray-50 min-h-screen">
    <!-- Hero Section -->
    <div class="relative text-white py-20" style="background-image: url('{{ asset('img/presentacion/presentacionbackground.jpg') }}'); background-size: cover; background-position: center; background-attachment: fixed;">
        <div class="absolute inset-0 bg-gradient-to-r from-[#db0455]/80 to-[#ed145b]/70"></div>
        <div class="relative z-10 container mx-auto px-4">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4 drop-shadow-lg">Perfil Profesional</h1>
                <p class="text-xl md:text-2xl opacity-90 drop-shadow-md">Ingeniería Agroindustrial - UNAMAD</p>
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
                    <li>
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2">Ingeniería Agroindustrial</span>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="ml-1 text-sm font-medium text-[#db0455] md:ml-2">Perfil Profesional</span>
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
                @include('facultades.agroindustrial.partials.navigation')
            </div>

            <!-- Main Content -->
            <div class="lg:col-span-2">
                <div class="bg-white rounded-lg shadow-lg p-8 border-t-4 border-[#db0455]">
                    <div class="flex items-start space-x-4 mb-8">
                        <div class="bg-gradient-to-r from-[#db0455] to-[#ed145b] p-4 rounded-full">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-3xl font-bold text-gray-800 mb-4">Perfil Profesional</h2>
                            <div class="w-20 h-1 bg-gradient-to-r from-[#db0455] to-[#ed145b]"></div>
                        </div>
                    </div>

                    <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed">
                        <p class="text-lg mb-8">
                            El profesional egresado de <strong>Ingeniería Agroindustrial</strong> de la UNAMAD posee una sólida formación técnica y científica que le permite desenvolverse exitosamente en el sector agroindustrial, basada en los siguientes conocimientos fundamentales:
                        </p>

                        <!-- Áreas de Conocimiento -->
                        <div class="space-y-6">
                            <!-- Fenómenos de Transporte y Termodinámica -->
                            <div class="bg-gradient-to-r from-[#db0455]/5 to-[#ed145b]/5 rounded-lg p-6 border-l-4 border-[#db0455]">
                                <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                                    <svg class="w-6 h-6 mr-2 text-[#db0455]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                    </svg>
                                    Fundamentos de Ingeniería
                                </h3>
                                <div class="bg-white rounded-lg p-6 border border-gray-200">
                                    <p class="text-gray-700 leading-relaxed mb-4">
                                        <strong>Poseer conocimientos de fenómenos de transporte, termodinámica, transferencia de calor y masa</strong>, tanto en sus fundamentos teóricos como en sus aplicaciones y de balances de materia y energía.
                                    </p>
                                    
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <div class="flex items-start space-x-3">
                                            <div class="bg-gradient-to-r from-[#db0455] to-[#ed145b] p-2 rounded-full">
                                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-1.447-.894L15 9m0 8V9m0 0V7"></path>
                                                </svg>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-gray-800">Fenómenos de Transporte</h4>
                                                <p class="text-gray-600 text-sm">Teoría y aplicaciones prácticas</p>
                                            </div>
                                        </div>

                                        <div class="flex items-start space-x-3">
                                            <div class="bg-gradient-to-r from-[#db0455] to-[#ed145b] p-2 rounded-full">
                                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z"></path>
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z"></path>
                                                </svg>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-gray-800">Termodinámica</h4>
                                                <p class="text-gray-600 text-sm">Fundamentos teóricos y aplicados</p>
                                            </div>
                                        </div>

                                        <div class="flex items-start space-x-3">
                                            <div class="bg-gradient-to-r from-[#db0455] to-[#ed145b] p-2 rounded-full">
                                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                                </svg>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-gray-800">Transferencia de Calor y Masa</h4>
                                                <p class="text-gray-600 text-sm">Procesos industriales</p>
                                            </div>
                                        </div>

                                        <div class="flex items-start space-x-3">
                                            <div class="bg-gradient-to-r from-[#db0455] to-[#ed145b] p-2 rounded-full">
                                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                                </svg>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-gray-800">Balances de Materia y Energía</h4>
                                                <p class="text-gray-600 text-sm">Cálculos de procesos</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Tecnologías Agroindustriales -->
                            <div class="bg-gradient-to-r from-[#ed145b]/5 to-[#db0455]/5 rounded-lg p-6 border-l-4 border-[#ed145b]">
                                <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                                    <svg class="w-6 h-6 mr-2 text-[#ed145b]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                                    </svg>
                                    Tecnologías y Optimización
                                </h3>
                                <div class="bg-white rounded-lg p-6 border border-gray-200">
                                    <p class="text-gray-700 leading-relaxed mb-4">
                                        <strong>Poseer conocimientos de las diferentes tecnologías agroindustriales</strong>, optimización en sistemas de ingeniería, gestión tecnológica y diseño de proceso.
                                    </p>
                                    
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <div class="flex items-start space-x-3">
                                            <div class="bg-gradient-to-r from-[#ed145b] to-[#db0455] p-2 rounded-full">
                                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                                                </svg>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-gray-800">Tecnologías Agroindustriales</h4>
                                                <p class="text-gray-600 text-sm">Procesos y equipos especializados</p>
                                            </div>
                                        </div>

                                        <div class="flex items-start space-x-3">
                                            <div class="bg-gradient-to-r from-[#ed145b] to-[#db0455] p-2 rounded-full">
                                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                                </svg>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-gray-800">Optimización de Sistemas</h4>
                                                <p class="text-gray-600 text-sm">Mejora de procesos industriales</p>
                                            </div>
                                        </div>

                                        <div class="flex items-start space-x-3">
                                            <div class="bg-gradient-to-r from-[#ed145b] to-[#db0455] p-2 rounded-full">
                                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                                </svg>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-gray-800">Gestión Tecnológica</h4>
                                                <p class="text-gray-600 text-sm">Administración de la innovación</p>
                                            </div>
                                        </div>

                                        <div class="flex items-start space-x-3">
                                            <div class="bg-gradient-to-r from-[#ed145b] to-[#db0455] p-2 rounded-full">
                                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 011-1h1a2 2 0 100-4H7a1 1 0 01-1-1V7a1 1 0 011-1h3a1 1 0 001-1V4z"></path>
                                                </svg>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-gray-800">Diseño de Proceso</h4>
                                                <p class="text-gray-600 text-sm">Desarrollo de sistemas productivos</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Administración e Ingeniería -->
                            <div class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-lg p-6 border-l-4 border-blue-500">
                                <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                                    <svg class="w-6 h-6 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                    </svg>
                                    Gestión y Administración
                                </h3>
                                <div class="bg-white rounded-lg p-6 border border-gray-200">
                                    <p class="text-gray-700 leading-relaxed mb-4">
                                        <strong>Tener conocimiento de administración</strong>, planificación y control de producción, y de la ingeniería.
                                    </p>
                                    
                                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                        <div class="text-center bg-blue-50 rounded-lg p-4 border border-blue-200">
                                            <div class="bg-gradient-to-r from-blue-500 to-blue-600 p-3 rounded-full mx-auto mb-3 w-fit">
                                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 515.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 919.288 0M15 7a3 3 0 11-6 0 3 3 0 616 0zm6 3a2 2 0 11-4 0 2 2 0 414 0zM7 10a2 2 0 11-4 0 2 2 0 414 0z"></path>
                                                </svg>
                                            </div>
                                            <h4 class="font-semibold text-gray-800 mb-2">Administración</h4>
                                            <p class="text-gray-600 text-sm">Gestión empresarial y recursos</p>
                                        </div>

                                        <div class="text-center bg-blue-50 rounded-lg p-4 border border-blue-200">
                                            <div class="bg-gradient-to-r from-blue-500 to-blue-600 p-3 rounded-full mx-auto mb-3 w-fit">
                                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                                </svg>
                                            </div>
                                            <h4 class="font-semibold text-gray-800 mb-2">Planificación</h4>
                                            <p class="text-gray-600 text-sm">Estrategias y programación</p>
                                        </div>

                                        <div class="text-center bg-blue-50 rounded-lg p-4 border border-blue-200">
                                            <div class="bg-gradient-to-r from-blue-500 to-blue-600 p-3 rounded-full mx-auto mb-3 w-fit">
                                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                                </svg>
                                            </div>
                                            <h4 class="font-semibold text-gray-800 mb-2">Control de Producción</h4>
                                            <p class="text-gray-600 text-sm">Supervisión y calidad</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Resumen del Perfil -->
                        <div class="mt-8 p-6 bg-gradient-to-r from-gray-50 to-gray-100 rounded-lg border border-gray-200">
                            <p class="text-gray-700 text-center font-medium">
                                Este perfil integral permite al ingeniero agroindustrial desarrollarse exitosamente en el sector, combinando <strong>conocimientos técnicos sólidos</strong> con <strong>habilidades de gestión</strong> para liderar procesos de transformación e innovación en la industria agroalimentaria.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection