@extends('layouts.app')

@section('title', 'Objetivos Académicos - Psicología - UNAMAD')

@section('content')
<div class="bg-gray-50 min-h-screen">
    <!-- Hero Section -->
    <div class="relative text-white py-20" style="background-image: url('{{ asset('img/presentacion/presentacionbackground.jpg') }}'); background-size: cover; background-position: center; background-attachment: fixed;">
        <div class="absolute inset-0 bg-gradient-to-r from-[#db0455]/80 to-[#ed145b]/70"></div>
        <div class="relative z-10 container mx-auto px-4">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4 drop-shadow-lg">Objetivos Académicos</h1>
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
                            <span class="ml-1 text-sm font-medium text-[#db0455] md:ml-2">Objetivos Académicos</span>
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
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-3xl font-bold text-gray-800 mb-4">Objetivos Académicos</h2>
                            <div class="w-20 h-1 bg-gradient-to-r from-blue-500 to-cyan-600"></div>
                        </div>
                    </div>

                    <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed">
                        <p class="text-lg mb-8">
                            El programa de estudios de <strong>Psicología</strong> de la UNAMAD orienta su formación hacia el desarrollo de profesionales competentes y comprometidos con la salud mental de la región amazónica y el país. Son objetivos académicos del programa de estudios:
                        </p>

                        <ol class="space-y-6">
                            <!-- OA1 -->
                            <li class="bg-gradient-to-r from-blue-50 to-cyan-50 rounded-lg p-6 border-l-4 border-blue-500">
                                <div class="flex items-center mb-4">
                                    <div class="w-16 h-8 bg-blue-600 rounded-full flex items-center justify-center mr-3 flex-shrink-0">
                                        <span class="text-white font-bold text-xs">OA1</span>
                                    </div>
                                    <h3 class="text-lg font-bold text-gray-800">Formación Profesional</h3>
                                </div>
                                <p class="text-gray-700 leading-relaxed">
                                    Formar profesionales competentes en intervenciones psicológicas éticas y basadas en evidencia, con enfoque humanista y comunitario.
                                </p>
                            </li>

                            <!-- OA2 -->
                            <li class="bg-gradient-to-r from-cyan-50 to-sky-50 rounded-lg p-6 border-l-4 border-cyan-500">
                                <div class="flex items-center mb-4">
                                    <div class="w-16 h-8 bg-cyan-600 rounded-full flex items-center justify-center mr-3 flex-shrink-0">
                                        <span class="text-white font-bold text-xs">OA2</span>
                                    </div>
                                    <h3 class="text-lg font-bold text-gray-800">Investigación e Innovación</h3>
                                </div>
                                <p class="text-gray-700 leading-relaxed">
                                    Fomentar la investigación e innovación para abordar problemáticas de salud mental en la Amazonía y otros contextos.
                                </p>
                            </li>

                            <!-- OA3 -->
                            <li class="bg-gradient-to-r from-sky-50 to-indigo-50 rounded-lg p-6 border-l-4 border-sky-500">
                                <div class="flex items-center mb-4">
                                    <div class="w-16 h-8 bg-sky-600 rounded-full flex items-center justify-center mr-3 flex-shrink-0">
                                        <span class="text-white font-bold text-xs">OA3</span>
                                    </div>
                                    <h3 class="text-lg font-bold text-gray-800">Compromiso Social y Diversidad Cultural</h3>
                                </div>
                                <p class="text-gray-700 leading-relaxed">
                                    Promover el compromiso social y el respeto a la diversidad cultural a través de acciones de extensión y responsabilidad social.
                                </p>
                            </li>

                            <!-- OA4 -->
                            <li class="bg-gradient-to-r from-indigo-50 to-blue-50 rounded-lg p-6 border-l-4 border-indigo-500">
                                <div class="flex items-center mb-4">
                                    <div class="w-16 h-8 bg-indigo-600 rounded-full flex items-center justify-center mr-3 flex-shrink-0">
                                        <span class="text-white font-bold text-xs">OA4</span>
                                    </div>
                                    <h3 class="text-lg font-bold text-gray-800">Gestión en Salud Mental</h3>
                                </div>
                                <p class="text-gray-700 leading-relaxed">
                                    Desarrollar capacidades de gestión en salud mental, con enfoque en calidad y mejora continua.
                                </p>
                            </li>

                            <!-- OA5 -->
                            <li class="bg-gradient-to-r from-blue-50 to-cyan-50 rounded-lg p-6 border-l-4 border-blue-600">
                                <div class="flex items-center mb-4">
                                    <div class="w-16 h-8 bg-blue-700 rounded-full flex items-center justify-center mr-3 flex-shrink-0">
                                        <span class="text-white font-bold text-xs">OA5</span>
                                    </div>
                                    <h3 class="text-lg font-bold text-gray-800">Atención Psicosocial en Emergencias</h3>
                                </div>
                                <p class="text-gray-700 leading-relaxed">
                                    Capacitar para la atención psicosocial en situaciones de riesgo y desastre, fortaleciendo la resiliencia comunitaria.
                                </p>
                            </li>
                        </ol>

                        <!-- Marco Legal -->
                        <div class="mt-10 bg-white rounded-lg p-6 border border-gray-200">
                            <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                                <svg aria-hidden="true" focusable="false" class="w-6 h-6 mr-2 text-[#db0455]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                                Marco Legal y Normativo
                            </h3>
                            <p class="text-gray-700 leading-relaxed">
                                La Carrera Profesional de Psicología fue creada en el marco de la <strong>Ley N.º 32247</strong>, formalizando su incorporación a la oferta académica de la Universidad Nacional Amazónica de Madre de Dios.
                            </p>
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
