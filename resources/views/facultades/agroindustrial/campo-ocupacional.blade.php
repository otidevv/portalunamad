@extends('layouts.app')

@section('content')
<div class="bg-gray-50 min-h-screen">
    <!-- Hero Section -->
    <div class="relative text-white py-20" style="background-image: url('{{ asset('img/presentacion/presentacionbackground.jpg') }}'); background-size: cover; background-position: center; background-attachment: fixed;">
        <div class="absolute inset-0 bg-gradient-to-r from-[#db0455]/80 to-[#ed145b]/70"></div>
        <div class="relative z-10 container mx-auto px-4">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4 drop-shadow-lg">Campo Ocupacional</h1>
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
                            <span class="ml-1 text-sm font-medium text-[#db0455] md:ml-2">Campo Ocupacional</span>
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
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0H8m8 0v2a2 2 0 01-2 2H10a2 2 0 01-2-2V6m8 0H8"></path>
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-3xl font-bold text-gray-800 mb-4">Campo Ocupacional</h2>
                            <div class="w-20 h-1 bg-gradient-to-r from-[#db0455] to-[#ed145b]"></div>
                        </div>
                    </div>

                    <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed">
                        <p class="text-lg mb-8">
                            El <strong>Ingeniero Agroindustrial</strong> de la UNAMAD cuenta con una formación integral que le permite desempeñarse en diversos campos laborales, aplicando sus conocimientos especializados para transformar la industria agroalimentaria y contribuir al desarrollo económico sostenible.
                        </p>

                        <!-- Áreas de Desempeño Profesional -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                            <!-- Sector Industrial -->
                            <div class="bg-gradient-to-r from-[#db0455]/5 to-[#ed145b]/5 rounded-lg p-6 border-l-4 border-[#db0455] hover:shadow-lg transition-shadow">
                                <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                                    <svg class="w-6 h-6 mr-2 text-[#db0455]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                    </svg>
                                    Sector Industrial
                                </h3>
                                <ul class="space-y-2">
                                    <li class="flex items-start space-x-2">
                                        <svg class="w-4 h-4 text-[#db0455] mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span class="text-sm">Plantas procesadoras de alimentos</span>
                                    </li>
                                    <li class="flex items-start space-x-2">
                                        <svg class="w-4 h-4 text-[#db0455] mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span class="text-sm">Industrias de conservas y enlatados</span>
                                    </li>
                                    <li class="flex items-start space-x-2">
                                        <svg class="w-4 h-4 text-[#db0455] mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span class="text-sm">Empresas de productos lácteos</span>
                                    </li>
                                    <li class="flex items-start space-x-2">
                                        <svg class="w-4 h-4 text-[#db0455] mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span class="text-sm">Industrias cárnicas y embutidos</span>
                                    </li>
                                </ul>
                            </div>

                            <!-- Sector Empresarial -->
                            <div class="bg-gradient-to-r from-[#ed145b]/5 to-[#db0455]/5 rounded-lg p-6 border-l-4 border-[#ed145b] hover:shadow-lg transition-shadow">
                                <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                                    <svg class="w-6 h-6 mr-2 text-[#ed145b]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16l7-3 7 3z"></path>
                                    </svg>
                                    Sector Empresarial
                                </h3>
                                <ul class="space-y-2">
                                    <li class="flex items-start space-x-2">
                                        <svg class="w-4 h-4 text-[#ed145b] mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span class="text-sm">Emprendimiento agroindustrial</span>
                                    </li>
                                    <li class="flex items-start space-x-2">
                                        <svg class="w-4 h-4 text-[#ed145b] mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span class="text-sm">Consultoría especializada</span>
                                    </li>
                                    <li class="flex items-start space-x-2">
                                        <svg class="w-4 h-4 text-[#ed145b] mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span class="text-sm">Gestión de proyectos agroindustriales</span>
                                    </li>
                                    <li class="flex items-start space-x-2">
                                        <svg class="w-4 h-4 text-[#ed145b] mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span class="text-sm">Desarrollo de productos alimentarios</span>
                                    </li>
                                </ul>
                            </div>

                            <!-- Sector Público -->
                            <div class="bg-gradient-to-r from-green-50 to-emerald-50 rounded-lg p-6 border-l-4 border-green-500 hover:shadow-lg transition-shadow">
                                <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                                    <svg class="w-6 h-6 mr-2 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                    </svg>
                                    Sector Público
                                </h3>
                                <ul class="space-y-2">
                                    <li class="flex items-start space-x-2">
                                        <svg class="w-4 h-4 text-green-600 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span class="text-sm">Ministerio de Agricultura</span>
                                    </li>
                                    <li class="flex items-start space-x-2">
                                        <svg class="w-4 h-4 text-green-600 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span class="text-sm">SENASA - Inspección sanitaria</span>
                                    </li>
                                    <li class="flex items-start space-x-2">
                                        <svg class="w-4 h-4 text-green-600 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span class="text-sm">DIGESA - Control de calidad</span>
                                    </li>
                                    <li class="flex items-start space-x-2">
                                        <svg class="w-4 h-4 text-green-600 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span class="text-sm">Gobiernos regionales y locales</span>
                                    </li>
                                </ul>
                            </div>

                            <!-- Sector Académico -->
                            <div class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-lg p-6 border-l-4 border-blue-500 hover:shadow-lg transition-shadow">
                                <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                                    <svg class="w-6 h-6 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                    </svg>
                                    Sector Académico
                                </h3>
                                <ul class="space-y-2">
                                    <li class="flex items-start space-x-2">
                                        <svg class="w-4 h-4 text-blue-600 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span class="text-sm">Docencia universitaria</span>
                                    </li>
                                    <li class="flex items-start space-x-2">
                                        <svg class="w-4 h-4 text-blue-600 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span class="text-sm">Investigación y desarrollo</span>
                                    </li>
                                    <li class="flex items-start space-x-2">
                                        <svg class="w-4 h-4 text-blue-600 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span class="text-sm">Centros de investigación agraria</span>
                                    </li>
                                    <li class="flex items-start space-x-2">
                                        <svg class="w-4 h-4 text-blue-600 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span class="text-sm">Institutos tecnológicos</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Competencias Aplicables -->
                        <div class="bg-gradient-to-r from-gray-50 to-gray-100 rounded-lg p-8 border border-gray-200 mb-8">
                            <h3 class="text-2xl font-bold text-gray-800 mb-6 text-center">Competencias Aplicables en el Campo Laboral</h3>
                            
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                                <!-- Conocimientos Técnicos -->
                                <div class="text-center">
                                    <div class="bg-gradient-to-r from-[#db0455] to-[#ed145b] p-4 rounded-full mx-auto mb-4 w-fit">
                                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                        </svg>
                                    </div>
                                    <h4 class="text-lg font-bold text-gray-800 mb-3">Fundamentos Técnicos</h4>
                                    <p class="text-gray-600 text-sm mb-3">Fenómenos de transporte, termodinámica, transferencia de calor y masa, balances de materia y energía</p>
                                    <div class="w-16 h-0.5 bg-[#db0455] mx-auto"></div>
                                </div>

                                <!-- Tecnologías Especializadas -->
                                <div class="text-center">
                                    <div class="bg-gradient-to-r from-[#ed145b] to-[#db0455] p-4 rounded-full mx-auto mb-4 w-fit">
                                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                                        </svg>
                                    </div>
                                    <h4 class="text-lg font-bold text-gray-800 mb-3">Tecnologías Avanzadas</h4>
                                    <p class="text-gray-600 text-sm mb-3">Tecnologías agroindustriales, optimización de sistemas, gestión tecnológica y diseño de procesos</p>
                                    <div class="w-16 h-0.5 bg-[#ed145b] mx-auto"></div>
                                </div>

                                <!-- Gestión Empresarial -->
                                <div class="text-center">
                                    <div class="bg-gradient-to-r from-blue-500 to-blue-600 p-4 rounded-full mx-auto mb-4 w-fit">
                                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                        </svg>
                                    </div>
                                    <h4 class="text-lg font-bold text-gray-800 mb-3">Gestión Integral</h4>
                                    <p class="text-gray-600 text-sm mb-3">Administración, planificación, control de producción y gestión de la ingeniería</p>
                                    <div class="w-16 h-0.5 bg-blue-500 mx-auto"></div>
                                </div>
                            </div>
                        </div>

                        <!-- Oportunidades Laborales -->
                        <div class="bg-gradient-to-r from-[#db0455]/5 to-[#ed145b]/5 rounded-lg p-6 border-l-4 border-[#db0455]">
                            <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                                <svg class="w-6 h-6 mr-2 text-[#db0455]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                </svg>
                                Perspectivas Laborales
                            </h3>
                            <p class="text-gray-700 leading-relaxed">
                                El campo ocupacional del <strong>Ingeniero Agroindustrial</strong> es amplio y dinámico, con crecientes oportunidades en el sector agroexportador peruano, desarrollo de productos orgánicos, tecnologías de conservación, biotecnología alimentaria y gestión de la cadena productiva agroindustrial, especialmente en regiones amazónicas como Madre de Dios donde el potencial agroindustrial es enorme.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection