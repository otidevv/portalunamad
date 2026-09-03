@extends('layouts.app')

@section('title', 'Reseña Histórica - Biología - UNAMAD')

@section('content')
<div class="bg-gray-50 min-h-screen">
    <!-- Hero Section -->
    <div class="relative text-white py-20" style="background-image: url('{{ asset('img/presentacion/presentacionbackground.jpg') }}'); background-size: cover; background-position: center; background-attachment: fixed;">
        <div class="absolute inset-0 bg-gradient-to-r from-[#db0455]/80 to-[#ed145b]/70"></div>
        <div class="relative z-10 container mx-auto px-4">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4 drop-shadow-lg">Reseña Histórica</h1>
                <p class="text-xl md:text-2xl opacity-90 drop-shadow-md">Escuela Profesional de Biología - UNAMAD</p>
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
                            <a href="/facultades/biologia" class="ml-1 text-sm font-medium text-gray-700 hover:text-[#db0455] md:ml-2">Biología</a>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg aria-hidden="true" focusable="false" class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="ml-1 text-sm font-medium text-[#db0455] md:ml-2">Reseña Histórica</span>
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
                        <div class="bg-gradient-to-r from-green-500 to-emerald-600 p-4 rounded-full">
                            <svg aria-hidden="true" focusable="false" class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-3xl font-bold text-gray-800 mb-4">Reseña Histórica</h2>
                            <div class="w-20 h-1 bg-gradient-to-r from-green-500 to-emerald-600"></div>
                        </div>
                    </div>

                    <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed">
                        <!-- Origen y Propósito -->
                        <div class="bg-gradient-to-r from-green-50 to-emerald-50 rounded-lg p-6 mb-8 border-l-4 border-green-500">
                            <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                                <svg aria-hidden="true" focusable="false" class="w-6 h-6 mr-2 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                </svg>
                                Origen y Propósito de la Carrera
                            </h3>
                            <p class="text-gray-700 leading-relaxed mb-4">
                                La <strong>Escuela Profesional de Biología</strong> de la Universidad Nacional Amazónica de Madre de Dios surge como una respuesta a la necesidad de formar profesionales especializados en el estudio, conservación y aprovechamiento sostenible de la biodiversidad amazónica, contribuyendo al desarrollo científico, tecnológico y ambiental de la región Madre de Dios y del país.
                            </p>
                            <p class="text-gray-700 leading-relaxed">
                                Esta decisión respondió a la creciente demanda de profesionales capacitados para investigar, gestionar y conservar los recursos biológicos de una de las regiones con mayor diversidad biológica del mundo.
                            </p>
                        </div>

                        <!-- Línea de Tiempo Institucional -->
                        <div class="mb-8">
                            <h3 class="text-xl font-bold text-gray-800 mb-6 flex items-center">
                                <svg aria-hidden="true" focusable="false" class="w-6 h-6 mr-2 text-[#db0455]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                                </svg>
                                Hitos de su Consolidación Institucional
                            </h3>

                            <ol class="space-y-6">
                                <!-- Hito 1 -->
                                <li class="bg-white rounded-lg p-6 border border-gray-200 hover:shadow-lg transition-shadow">
                                    <div class="flex items-start space-x-4">
                                        <div class="bg-gradient-to-r from-green-500 to-emerald-600 p-3 rounded-full flex-shrink-0">
                                            <svg aria-hidden="true" focusable="false" class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold text-gray-800 mb-2">Resolución de Asamblea Universitaria N°001-2025-AU-UNAMAD</h4>
                                            <p class="text-gray-600 text-sm">Aprobó la creación y funcionamiento de la Escuela Profesional de Biología dentro de la estructura académica de la universidad.</p>
                                        </div>
                                    </div>
                                </li>

                                <!-- Hito 2 -->
                                <li class="bg-white rounded-lg p-6 border border-gray-200 hover:shadow-lg transition-shadow">
                                    <div class="flex items-start space-x-4">
                                        <div class="bg-gradient-to-r from-emerald-500 to-teal-600 p-3 rounded-full flex-shrink-0">
                                            <svg aria-hidden="true" focusable="false" class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold text-gray-800 mb-2">Resolución Rectoral N°085-2025-R-UNAMAD</h4>
                                            <p class="text-gray-600 text-sm">Conformó los grupos de interés y la comisión técnica encargados de elaborar el diseño curricular de la carrera, garantizando los estándares de calidad y la pertinencia con el entorno amazónico.</p>
                                        </div>
                                    </div>
                                </li>

                                <!-- Hito 3 -->
                                <li class="bg-white rounded-lg p-6 border border-gray-200 hover:shadow-lg transition-shadow">
                                    <div class="flex items-start space-x-4">
                                        <div class="bg-gradient-to-r from-teal-500 to-cyan-600 p-3 rounded-full flex-shrink-0">
                                            <svg aria-hidden="true" focusable="false" class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold text-gray-800 mb-2">Resolución N°657-2025-CU-UNAMAD — 10 de noviembre de 2025</h4>
                                            <p class="text-gray-600 text-sm">El Consejo Universitario ratificó la aprobación del Diseño Curricular del Programa de Estudios de Biología, instrumento académico fundamental que establece competencias, perfiles profesionales, planes de estudio y estrategias de enseñanza.</p>
                                        </div>
                                    </div>
                                </li>
                            </ol>
                        </div>

                        <!-- Reconocimiento ante SUNEDU -->
                        <div class="bg-white rounded-lg p-6 border border-gray-200 mb-8">
                            <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                                <svg aria-hidden="true" focusable="false" class="w-6 h-6 mr-2 text-[#db0455]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                </svg>
                                Reconocimiento y Validación Institucional
                            </h3>
                            <p class="text-gray-700 leading-relaxed">
                                Asimismo, se dispuso la realización de los trámites correspondientes ante la <strong>SUNEDU</strong> para su reconocimiento y validación institucional, garantizando que la formación profesional cumpla con la legislación universitaria vigente.
                            </p>
                        </div>

                        <!-- Compromiso -->
                        <div class="bg-gradient-to-r from-green-50 to-emerald-50 rounded-lg p-6 border-l-4 border-green-500">
                            <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                                <svg aria-hidden="true" focusable="false" class="w-6 h-6 mr-2 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                </svg>
                                Nuestro Compromiso
                            </h3>
                            <p class="text-gray-700 leading-relaxed">
                                De esta manera, la Escuela Profesional de Biología de la UNAMAD inicia sus actividades académicas con el compromiso de formar profesionales altamente competentes, éticos y comprometidos con la investigación, la protección de los ecosistemas amazónicos y la generación de conocimiento científico que contribuya al desarrollo sostenible de la región y del Perú.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar: visualmente primero (order-first); en el DOM va tras el contenido para mantener la jerarquía de encabezados -->
            <div class="lg:col-span-1 order-first">
                @include('facultades.biologia.partials.navigation')
            </div>
        </div>
    </div>
</div>
@endsection
