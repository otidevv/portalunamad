@extends('layouts.app')

@section('title', 'Historia - UNAMAD')

@section('content')
    <!-- Hero Section -->
    <div class="relative h-64 flex items-center justify-center overflow-hidden">
        <!-- Background Image -->
        <div class="absolute inset-0">
            <img src="{{ asset('img/presentacion/presentacionbackground.jpg') }}" alt="Historia UNAMAD" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-br from-[#db0455]/90 to-[#a00340]/80"></div>
        </div>
        
        <!-- Hero Content -->
        <div class="relative z-10 text-center text-white px-4">
            <h1 class="text-4xl font-bold mb-2 flex items-center justify-center">
                <svg class="w-8 h-8 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                </svg>
                Historia
            </h1>
            <p class="text-lg opacity-95">
                Trayectoria y evolución de nuestra institución
            </p>
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
                            <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2">Universidad</span>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="ml-1 text-sm font-medium text-[#db0455] md:ml-2">Historia</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-12">
        <!-- Historia Section -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden border-t-4 border-[#db0455]">
            <div class="bg-gradient-to-r from-[#db0455] to-[#ed145b] text-white p-6">
                <h2 class="text-3xl font-bold flex items-center">
                    <svg class="w-8 h-8 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                    Historia de la Universidad Nacional Amazónica de Madre de Dios
                </h2>
            </div>
            
            <div class="p-8">
                <!-- Timeline -->
                <div class="space-y-8">
                    <!-- Año 2000 -->
                    <div class="relative">
                        <div class="flex items-start">
                            <div class="flex-shrink-0 w-20 h-20 bg-[#db0455] rounded-full flex items-center justify-center text-white font-bold text-lg shadow-lg">
                                2000
                            </div>
                            <div class="ml-6 flex-1">
                                <div class="bg-gray-50 rounded-lg p-6 border-l-4 border-[#db0455]">
                                    <h3 class="text-xl font-bold text-gray-800 mb-3">Creación de la Universidad</h3>
                                    <p class="text-gray-700 leading-relaxed">
                                        La Universidad Nacional Amazónica de Madre de Dios fue <strong>creada mediante la LEY Nº 27297 el 5 de julio del año 2000</strong>, marcando el inicio de una nueva era en la educación superior de la región amazónica.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Año 2001 -->
                    <div class="relative">
                        <div class="flex items-start">
                            <div class="flex-shrink-0 w-20 h-20 bg-[#ed145b] rounded-full flex items-center justify-center text-white font-bold text-lg shadow-lg">
                                2001
                            </div>
                            <div class="ml-6 flex-1">
                                <div class="bg-gray-50 rounded-lg p-6 border-l-4 border-[#ed145b]">
                                    <h3 class="text-xl font-bold text-gray-800 mb-3">Autorización de Funcionamiento</h3>
                                    <div class="space-y-3 text-gray-700">
                                        <p class="leading-relaxed">
                                            <strong>Se autoriza su funcionamiento mediante la Resolución Nº 060-2001-CONAFU.</strong>
                                        </p>
                                        <p class="leading-relaxed">
                                            La Primera Comisión Organizadora se forma con la <strong>Resolución Nº 062-2001-CONAFU del 19 de marzo</strong> y la <strong>Resolución Nº 076-2001-CONAFU del 6 de abril</strong>.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Año 2009 -->
                    <div class="relative">
                        <div class="flex items-start">
                            <div class="flex-shrink-0 w-20 h-20 bg-[#a00340] rounded-full flex items-center justify-center text-white font-bold text-lg shadow-lg">
                                2009
                            </div>
                            <div class="ml-6 flex-1">
                                <div class="bg-gray-50 rounded-lg p-6 border-l-4 border-[#a00340]">
                                    <h3 class="text-xl font-bold text-gray-800 mb-3">Autorización Definitiva</h3>
                                    <p class="text-gray-700 leading-relaxed">
                                        El <strong>27 de noviembre de 2009, mediante la Resolución Nº 626-2009-CONAFU</strong>, se otorga la <strong>Autorización Definitiva de Funcionamiento</strong> a la Universidad Nacional Amazónica de Madre de Dios, bajo la Ley Nº 23733 y sus modificatorias y complementarias.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Servicios y Centros -->
                <div class="mt-12 grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <!-- Centros de Prestación de Servicios -->
                    <div class="bg-gradient-to-br from-gray-50 to-white rounded-lg p-6 border border-gray-200 shadow-sm">
                        <h3 class="text-xl font-bold text-[#db0455] mb-4 flex items-center">
                            <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                            </svg>
                            Centros de Prestación de Servicios
                        </h3>
                        <ul class="space-y-3 text-gray-700">
                            <li class="flex items-center">
                                <div class="w-2 h-2 bg-[#db0455] rounded-full mr-3"></div>
                                Centro Preuniversitario
                            </li>
                            <li class="flex items-center">
                                <div class="w-2 h-2 bg-[#db0455] rounded-full mr-3"></div>
                                Centro de Idiomas
                            </li>
                            <li class="flex items-center">
                                <div class="w-2 h-2 bg-[#db0455] rounded-full mr-3"></div>
                                Instituto de Informática
                            </li>
                            <li class="flex items-center">
                                <div class="w-2 h-2 bg-[#db0455] rounded-full mr-3"></div>
                                Centros de Producción
                            </li>
                        </ul>
                    </div>

                    <!-- Compromiso y Misión -->
                    <div class="bg-gradient-to-br from-[#db0455]/5 to-[#ed145b]/5 rounded-lg p-6 border border-[#db0455]/20 shadow-sm">
                        <h3 class="text-xl font-bold text-[#db0455] mb-4 flex items-center">
                            <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                            </svg>
                            Compromiso Institucional
                        </h3>
                        <div class="space-y-4 text-gray-700 text-sm leading-relaxed">
                            <p>
                                Como <strong>alma Mater de la Región Madre de Dios</strong>, se espera que sea un modelo en la Educación Superior universitaria y contribuya al cambio y desarrollo regional y nacional.
                            </p>
                            <p>
                                Existe un compromiso por parte de todos los involucrados para asegurar una <strong>excelente preparación académica, profesional, humanística y ética</strong> de los estudiantes.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Quote final -->
                <div class="mt-12 text-center">
                    <div class="bg-gradient-to-r from-[#db0455] to-[#ed145b] rounded-lg p-8 text-white">
                        <svg class="w-12 h-12 mx-auto mb-4 opacity-75" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h4v10h-10z"/>
                        </svg>
                        <p class="text-xl font-medium mb-4 italic">
                            "Formando profesionales comprometidos con el desarrollo amazónico y nacional"
                        </p>
                        <div class="w-24 h-0.5 bg-white/60 mx-auto"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection