@extends('layouts.app')

@section('title', 'Campo Ocupacional - Psicología - UNAMAD')

@section('content')
<div class="bg-gray-50 min-h-screen">
    <!-- Hero Section -->
    <div class="relative text-white py-20" style="background-image: url('{{ asset('img/presentacion/presentacionbackground.jpg') }}'); background-size: cover; background-position: center; background-attachment: fixed;">
        <div class="absolute inset-0 bg-gradient-to-r from-[#db0455]/80 to-[#ed145b]/70"></div>
        <div class="relative z-10 container mx-auto px-4">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4 drop-shadow-lg">Campo Ocupacional</h1>
                <p class="text-xl md:text-2xl opacity-90 drop-shadow-md">Escuela Profesional de Psicología - UNAMAD</p>
            </div>
        </div>
    </div>

    <!-- Navigation Breadcrumb -->
    <div class="bg-white border-b border-gray-200">
        <div class="container mx-auto px-4 py-4">
            <nav class="flex" aria-label="Migas de pan">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="/" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-[#db0455]">
                            <svg aria-hidden="true" focusable="false" class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                            </svg>
                            Inicio
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg aria-hidden="true" focusable="false" class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2">Facultades</span>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg aria-hidden="true" focusable="false" class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <a href="/facultades/psicologia" class="ml-1 text-sm font-medium text-gray-700 hover:text-[#db0455] md:ml-2">Psicología</a>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg aria-hidden="true" focusable="false" class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
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
            <!-- Main Content -->
            <div class="lg:col-span-2">
                <div class="bg-white rounded-lg shadow-lg p-8 border-t-4 border-[#db0455]">
                    <div class="flex items-start space-x-4 mb-8">
                        <div class="bg-gradient-to-r from-blue-500 to-cyan-600 p-4 rounded-full">
                            <svg aria-hidden="true" focusable="false" class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m8 0H8m8 0v2a2 2 0 01-2 2H10a2 2 0 01-2-2V6m8 0H8"></path>
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-3xl font-bold text-gray-800 mb-4">Campo Ocupacional y Ámbitos de Desempeño</h2>
                            <div class="w-20 h-1 bg-gradient-to-r from-blue-500 to-cyan-600"></div>
                        </div>
                    </div>

                    <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed">
                        <p class="text-lg mb-8">
                            El <strong>psicólogo</strong> egresado de la UNAMAD está preparado para desempeñarse en diversos campos de la psicología, aportando su formación al bienestar de las personas, familias y comunidades en instituciones públicas, privadas y comunitarias.
                        </p>

                        <!-- Campos de la Psicología -->
                        <ul class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-8">
                            <li class="bg-gradient-to-r from-blue-50 to-cyan-50 rounded-lg p-5 border border-blue-200 flex items-start space-x-3">
                                <div class="bg-gradient-to-r from-blue-500 to-cyan-600 p-2 rounded-full flex-shrink-0">
                                    <svg aria-hidden="true" focusable="false" class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path></svg>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-800">Psicología Educativa</h3>
                                    <p class="text-gray-600 text-sm">Acompañamiento en procesos de enseñanza-aprendizaje y desarrollo educativo</p>
                                </div>
                            </li>
                            <li class="bg-gradient-to-r from-cyan-50 to-sky-50 rounded-lg p-5 border border-cyan-200 flex items-start space-x-3">
                                <div class="bg-gradient-to-r from-cyan-500 to-sky-600 p-2 rounded-full flex-shrink-0">
                                    <svg aria-hidden="true" focusable="false" class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-800">Psicología Industrial-Organizacional</h3>
                                    <p class="text-gray-600 text-sm">Gestión del talento humano y bienestar en las organizaciones</p>
                                </div>
                            </li>
                            <li class="bg-gradient-to-r from-sky-50 to-indigo-50 rounded-lg p-5 border border-sky-200 flex items-start space-x-3">
                                <div class="bg-gradient-to-r from-sky-500 to-indigo-600 p-2 rounded-full flex-shrink-0">
                                    <svg aria-hidden="true" focusable="false" class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-800">Psicología Clínica</h3>
                                    <p class="text-gray-600 text-sm">Evaluación, diagnóstico y tratamiento psicológico integral</p>
                                </div>
                            </li>
                            <li class="bg-gradient-to-r from-indigo-50 to-blue-50 rounded-lg p-5 border border-indigo-200 flex items-start space-x-3">
                                <div class="bg-gradient-to-r from-indigo-500 to-blue-600 p-2 rounded-full flex-shrink-0">
                                    <svg aria-hidden="true" focusable="false" class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-800">Psicología Social</h3>
                                    <p class="text-gray-600 text-sm">Intervención en la convivencia social y el desarrollo comunitario</p>
                                </div>
                            </li>
                            <li class="bg-gradient-to-r from-blue-50 to-cyan-50 rounded-lg p-5 border border-blue-200 flex items-start space-x-3">
                                <div class="bg-gradient-to-r from-blue-500 to-cyan-600 p-2 rounded-full flex-shrink-0">
                                    <svg aria-hidden="true" focusable="false" class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-800">Psicología de la Salud Mental</h3>
                                    <p class="text-gray-600 text-sm">Prevención, promoción y recuperación de la salud mental</p>
                                </div>
                            </li>
                            <li class="bg-gradient-to-r from-cyan-50 to-sky-50 rounded-lg p-5 border border-cyan-200 flex items-start space-x-3">
                                <div class="bg-gradient-to-r from-cyan-500 to-sky-600 p-2 rounded-full flex-shrink-0">
                                    <svg aria-hidden="true" focusable="false" class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-800">Psicología del Desarrollo</h3>
                                    <p class="text-gray-600 text-sm">Acompañamiento del desarrollo humano a lo largo del curso de vida</p>
                                </div>
                            </li>
                        </ul>

                        <!-- Relevancia Regional -->
                        <div class="bg-gradient-to-r from-blue-50 to-cyan-50 rounded-lg p-6 border-l-4 border-blue-500 mb-8">
                            <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                                <svg aria-hidden="true" focusable="false" class="w-6 h-6 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                Relevancia en Madre de Dios
                            </h3>
                            <p class="text-gray-700 leading-relaxed">
                                La creación y consolidación del Programa de Estudios de Psicología responde a la necesidad de formar profesionales capaces de enfrentar los retos actuales en <strong>salud mental, convivencia social y desarrollo comunitario</strong>, en un contexto caracterizado por su diversidad cultural, étnica y lingüística.
                            </p>
                        </div>

                        <!-- Demanda del Sector -->
                        <div class="bg-white rounded-lg p-6 border border-gray-200">
                            <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                                <svg aria-hidden="true" focusable="false" class="w-6 h-6 mr-2 text-[#db0455]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                </svg>
                                Alta Demanda del Sector Profesional
                            </h3>
                            <p class="text-gray-700 leading-relaxed mb-4">
                                Los resultados de los estudios de demanda destacan que los profesionales de la Psicología son requeridos en mayor cantidad, reflejando el reconocimiento por parte de las empresas e instituciones de la importancia de contar con estos profesionales.
                            </p>
                            <div class="flex items-center justify-center">
                                <div class="text-center bg-gradient-to-r from-blue-50 to-cyan-50 rounded-lg p-6 border border-blue-200">
                                    <p><span class="block text-4xl font-bold text-[#db0455] mb-1">15.00%</span>
                                    <span class="block text-gray-600 text-sm">de la demanda de profesionales corresponde a Psicólogos</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar: visualmente primero (order-first); en el DOM va tras el contenido para mantener la jerarquía de encabezados -->
            <div class="lg:col-span-1 order-first">
                @include('facultades.psicologia.partials.navigation')
            </div>
        </div>
    </div>
</div>
@endsection
