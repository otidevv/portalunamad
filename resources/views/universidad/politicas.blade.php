@extends('layouts.app')

@section('title', 'Política Institucional - UNAMAD')

@section('content')
    <!-- Hero Section -->
    <div class="relative h-64 flex items-center justify-center overflow-hidden">
        <!-- Background Image -->
        <div class="absolute inset-0">
            <img src="{{ asset('img/presentacion/presentacionbackground.jpg') }}" alt="Política Institucional UNAMAD" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-br from-[#db0455]/90 to-[#a00340]/80"></div>
        </div>
        
        <!-- Hero Content -->
        <div class="relative z-10 text-center text-white px-4">
            <h1 class="text-4xl font-bold mb-2 flex items-center justify-center">
                <svg class="w-8 h-8 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                </svg>
                Política Institucional
            </h1>
            <p class="text-lg opacity-95">
                Normativas, reglamentos y políticas universitarias
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
                            <span class="ml-1 text-sm font-medium text-[#db0455] md:ml-2">Política Institucional</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-12">
        <!-- Política Institucional Section -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden border-t-4 border-[#db0455]">
            <div class="bg-gradient-to-r from-[#db0455] to-[#ed145b] text-white p-6">
                <h2 class="text-3xl font-bold flex items-center">
                    <svg class="w-8 h-8 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                    Política Institucional UNAMAD
                </h2>
            </div>
            
            <div class="p-8">
                <!-- Marco Normativo -->
                <div class="mb-12">
                    <h3 class="text-2xl font-bold text-[#db0455] mb-6 flex items-center">
                        <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                        </svg>
                        Marco Normativo
                    </h3>
                    
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                        <!-- Documentos Institucionales -->
                        <div class="bg-gradient-to-br from-gray-50 to-white rounded-lg p-6 border border-gray-200 shadow-sm">
                            <h4 class="text-lg font-semibold text-gray-800 mb-4 flex items-center">
                                <svg class="w-5 h-5 mr-2 text-[#db0455]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                                Documentos Institucionales
                            </h4>
                            <ul class="space-y-3">
                                <li class="flex items-start">
                                    <div class="w-2 h-2 bg-[#db0455] rounded-full mr-3 mt-2"></div>
                                    <div>
                                        <p class="font-medium text-gray-800">Estatuto Universitario</p>
                                        <p class="text-sm text-gray-600">Documento fundamental que rige la organización</p>
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <div class="w-2 h-2 bg-[#db0455] rounded-full mr-3 mt-2"></div>
                                    <div>
                                        <p class="font-medium text-gray-800">Reglamento General</p>
                                        <p class="text-sm text-gray-600">Normas generales de funcionamiento</p>
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <div class="w-2 h-2 bg-[#db0455] rounded-full mr-3 mt-2"></div>
                                    <div>
                                        <p class="font-medium text-gray-800">Plan Estratégico Institucional</p>
                                        <p class="text-sm text-gray-600">Planificación estratégica a mediano y largo plazo</p>
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <div class="w-2 h-2 bg-[#db0455] rounded-full mr-3 mt-2"></div>
                                    <div>
                                        <p class="font-medium text-gray-800">Código de Ética</p>
                                        <p class="text-sm text-gray-600">Principios éticos y conductuales</p>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <!-- Reglamentos Académicos -->
                        <div class="bg-gradient-to-br from-[#db0455]/5 to-[#ed145b]/5 rounded-lg p-6 border border-[#db0455]/20 shadow-sm">
                            <h4 class="text-lg font-semibold text-gray-800 mb-4 flex items-center">
                                <svg class="w-5 h-5 mr-2 text-[#db0455]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                </svg>
                                Reglamentos Académicos
                            </h4>
                            <ul class="space-y-3">
                                <li class="flex items-start">
                                    <div class="w-2 h-2 bg-[#db0455] rounded-full mr-3 mt-2"></div>
                                    <div>
                                        <p class="font-medium text-gray-800">Reglamento de Estudios</p>
                                        <p class="text-sm text-gray-600">Normas para estudiantes de pregrado</p>
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <div class="w-2 h-2 bg-[#db0455] rounded-full mr-3 mt-2"></div>
                                    <div>
                                        <p class="font-medium text-gray-800">Reglamento de Investigación</p>
                                        <p class="text-sm text-gray-600">Marco normativo para la investigación</p>
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <div class="w-2 h-2 bg-[#db0455] rounded-full mr-3 mt-2"></div>
                                    <div>
                                        <p class="font-medium text-gray-800">Reglamento de Posgrado</p>
                                        <p class="text-sm text-gray-600">Normas para estudios de posgrado</p>
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <div class="w-2 h-2 bg-[#db0455] rounded-full mr-3 mt-2"></div>
                                    <div>
                                        <p class="font-medium text-gray-800">Reglamento de Grados y Títulos</p>
                                        <p class="text-sm text-gray-600">Procedimientos para obtención de grados</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Políticas Específicas -->
                <div class="mb-12">
                    <h3 class="text-2xl font-bold text-[#db0455] mb-6 flex items-center">
                        <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                        </svg>
                        Políticas Específicas
                    </h3>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Política de Calidad -->
                        <div class="bg-white border border-gray-200 rounded-lg p-6 shadow-sm hover:shadow-md transition-shadow">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-[#db0455]/10 rounded-full flex items-center justify-center">
                                    <svg class="w-6 h-6 text-[#db0455]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <h4 class="text-lg font-semibold text-gray-800 ml-3">Política de Calidad</h4>
                            </div>
                            <p class="text-gray-600 text-sm">Compromiso con la excelencia académica y mejora continua en todos los procesos institucionales.</p>
                        </div>

                        <!-- Política de Investigación -->
                        <div class="bg-white border border-gray-200 rounded-lg p-6 shadow-sm hover:shadow-md transition-shadow">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-[#db0455]/10 rounded-full flex items-center justify-center">
                                    <svg class="w-6 h-6 text-[#db0455]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                    </svg>
                                </div>
                                <h4 class="text-lg font-semibold text-gray-800 ml-3">Política de Investigación</h4>
                            </div>
                            <p class="text-gray-600 text-sm">Promoción y desarrollo de la investigación científica, tecnológica e innovación en áreas prioritarias.</p>
                        </div>

                        <!-- Política Ambiental -->
                        <div class="bg-white border border-gray-200 rounded-lg p-6 shadow-sm hover:shadow-md transition-shadow">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-[#db0455]/10 rounded-full flex items-center justify-center">
                                    <svg class="w-6 h-6 text-[#db0455]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <h4 class="text-lg font-semibold text-gray-800 ml-3">Política Ambiental</h4>
                            </div>
                            <p class="text-gray-600 text-sm">Conservación y protección del medio ambiente amazónico a través de prácticas sostenibles.</p>
                        </div>

                        <!-- Política de Inclusión -->
                        <div class="bg-white border border-gray-200 rounded-lg p-6 shadow-sm hover:shadow-md transition-shadow">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-[#db0455]/10 rounded-full flex items-center justify-center">
                                    <svg class="w-6 h-6 text-[#db0455]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                    </svg>
                                </div>
                                <h4 class="text-lg font-semibold text-gray-800 ml-3">Política de Inclusión</h4>
                            </div>
                            <p class="text-gray-600 text-sm">Promoción de la diversidad, equidad e inclusión en toda la comunidad universitaria.</p>
                        </div>

                        <!-- Política de Transparencia -->
                        <div class="bg-white border border-gray-200 rounded-lg p-6 shadow-sm hover:shadow-md transition-shadow">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-[#db0455]/10 rounded-full flex items-center justify-center">
                                    <svg class="w-6 h-6 text-[#db0455]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                    </svg>
                                </div>
                                <h4 class="text-lg font-semibold text-gray-800 ml-3">Política de Transparencia</h4>
                            </div>
                            <p class="text-gray-600 text-sm">Garantía del acceso a la información pública y rendición de cuentas a la sociedad.</p>
                        </div>

                        <!-- Política de Seguridad -->
                        <div class="bg-white border border-gray-200 rounded-lg p-6 shadow-sm hover:shadow-md transition-shadow">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-[#db0455]/10 rounded-full flex items-center justify-center">
                                    <svg class="w-6 h-6 text-[#db0455]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                    </svg>
                                </div>
                                <h4 class="text-lg font-semibold text-gray-800 ml-3">Política de Seguridad</h4>
                            </div>
                            <p class="text-gray-600 text-sm">Protección y seguridad de la comunidad universitaria, información y activos institucionales.</p>
                        </div>
                    </div>
                </div>

                <!-- Acceso a Documentos -->
                <div class="bg-gradient-to-r from-[#db0455] to-[#ed145b] rounded-lg p-8 text-white">
                    <div class="text-center">
                        <svg class="w-12 h-12 mx-auto mb-4 opacity-75" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8s0 0 0 0l-6-6s0 0 0 0zM10.5 18.5h3v-3h-3v3zm0-4.5h3v-3h-3v3zm5-6.5L15 4.5 13.5 6l1.5 1.5L16.5 6z"/>
                        </svg>
                        <h3 class="text-2xl font-bold mb-4">Acceso a Documentos Normativos</h3>
                        <p class="text-lg mb-6 opacity-95">
                            Para acceder a los documentos completos de nuestra política institucional, contáctanos a través de los siguientes medios:
                        </p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 max-w-md mx-auto">
                            <div class="bg-white/20 rounded-lg p-4 opacity-50 cursor-not-allowed">
                                <div class="flex items-center justify-center">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                    Email
                                </div>
                            </div>
                            <div class="bg-white/20 rounded-lg p-4 opacity-50 cursor-not-allowed">
                                <div class="flex items-center justify-center">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                    </svg>
                                    Teléfono
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection