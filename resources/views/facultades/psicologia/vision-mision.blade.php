@extends('layouts.app')

@section('title', 'Visión y Misión - Psicología - UNAMAD')

@section('content')
<div class="bg-gray-50 min-h-screen">
    <!-- Hero Section -->
    <div class="relative text-white py-20" style="background-image: url('{{ asset('img/presentacion/presentacionbackground.jpg') }}'); background-size: cover; background-position: center; background-attachment: fixed;">
        <div class="absolute inset-0 bg-gradient-to-r from-[#db0455]/80 to-[#ed145b]/70"></div>
        <div class="relative z-10 container mx-auto px-4">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4 drop-shadow-lg">Visión y Misión</h1>
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
                            <span class="ml-1 text-sm font-medium text-[#db0455] md:ml-2">Visión y Misión</span>
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
            <div class="lg:col-span-2 space-y-8">
                <!-- Misión -->
                <div class="bg-white rounded-lg shadow-lg p-8 border-t-4 border-blue-500">
                    <div class="flex items-start space-x-4 mb-8">
                        <div class="bg-gradient-to-r from-blue-500 to-cyan-600 p-4 rounded-full">
                            <svg aria-hidden="true" focusable="false" class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-3xl font-bold text-gray-800 mb-4">Nuestra Misión</h2>
                            <div class="w-20 h-1 bg-gradient-to-r from-blue-500 to-cyan-600"></div>
                        </div>
                    </div>

                    <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed">
                        <div class="bg-gradient-to-r from-blue-50 to-cyan-50 rounded-lg p-8 border-l-4 border-blue-500">
                            <p class="text-lg text-gray-800 font-medium">
                                Formar <strong>psicólogos con sólidos principios éticos y profesionales</strong>, capaces de contribuir a la prevención, promoción, mantenimiento y recuperación de la salud mental de individuos, familias y comunidades, mediante intervenciones basadas en evidencia y en el marco de la atención primaria de salud.
                            </p>
                        </div>

                        <!-- Componentes de la Misión -->
                        <ul class="space-y-4 mt-8">
                            <li class="bg-white rounded-lg p-6 border border-gray-200 hover:shadow-lg transition-shadow">
                                <div class="flex items-start space-x-4">
                                    <div class="bg-gradient-to-r from-blue-500 to-cyan-600 p-3 rounded-full flex-shrink-0">
                                        <svg aria-hidden="true" focusable="false" class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="text-xl font-bold text-gray-800 mb-2">Principios Éticos y Profesionales</h3>
                                        <p class="text-gray-700">Psicólogos con sólidos principios éticos y profesionales al servicio de la sociedad</p>
                                    </div>
                                </div>
                            </li>

                            <li class="bg-white rounded-lg p-6 border border-gray-200 hover:shadow-lg transition-shadow">
                                <div class="flex items-start space-x-4">
                                    <div class="bg-gradient-to-r from-blue-500 to-cyan-600 p-3 rounded-full flex-shrink-0">
                                        <svg aria-hidden="true" focusable="false" class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="text-xl font-bold text-gray-800 mb-2">Salud Mental de Individuos, Familias y Comunidades</h3>
                                        <p class="text-gray-700">Contribuir a la prevención, promoción, mantenimiento y recuperación de la salud mental</p>
                                    </div>
                                </div>
                            </li>

                            <li class="bg-white rounded-lg p-6 border border-gray-200 hover:shadow-lg transition-shadow">
                                <div class="flex items-start space-x-4">
                                    <div class="bg-gradient-to-r from-blue-500 to-cyan-600 p-3 rounded-full flex-shrink-0">
                                        <svg aria-hidden="true" focusable="false" class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="text-xl font-bold text-gray-800 mb-2">Intervenciones Basadas en Evidencia</h3>
                                        <p class="text-gray-700">En el marco de la atención primaria de salud</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Visión -->
                <div class="bg-white rounded-lg shadow-lg p-8 border-t-4 border-cyan-600">
                    <div class="flex items-start space-x-4 mb-8">
                        <div class="bg-gradient-to-r from-cyan-600 to-sky-600 p-4 rounded-full">
                            <svg aria-hidden="true" focusable="false" class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-3xl font-bold text-gray-800 mb-4">Nuestra Visión</h2>
                            <div class="w-20 h-1 bg-gradient-to-r from-cyan-600 to-sky-600"></div>
                        </div>
                    </div>

                    <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed">
                        <div class="bg-gradient-to-r from-cyan-50 to-sky-50 rounded-lg p-8 border-l-4 border-cyan-600">
                            <p class="text-lg text-gray-800 font-medium">
                                Ser un programa de estudios que forma <strong>psicólogos agentes de cambio</strong>, capaces de liderar la transformación de la salud mental en la región amazónica y el país, impulsando el bienestar y la calidad de vida a través de intervenciones innovadoras y la aplicación rigurosa de principios éticos y científicos en cada acción.
                            </p>
                        </div>

                        <!-- Elementos Clave de la Visión -->
                        <ul class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-8">
                            <li class="bg-white rounded-lg p-4 border border-gray-200">
                                <div class="flex items-start space-x-3">
                                    <div class="bg-gradient-to-r from-cyan-600 to-sky-600 p-2 rounded-full">
                                        <svg aria-hidden="true" focusable="false" class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-gray-800">Agentes de Cambio</h3>
                                        <p class="text-gray-600 text-sm">Psicólogos que lideran la transformación de la salud mental</p>
                                    </div>
                                </div>
                            </li>

                            <li class="bg-white rounded-lg p-4 border border-gray-200">
                                <div class="flex items-start space-x-3">
                                    <div class="bg-gradient-to-r from-cyan-600 to-sky-600 p-2 rounded-full">
                                        <svg aria-hidden="true" focusable="false" class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-gray-800">Intervenciones Innovadoras</h3>
                                        <p class="text-gray-600 text-sm">Que impulsan el bienestar y la calidad de vida</p>
                                    </div>
                                </div>
                            </li>

                            <li class="bg-white rounded-lg p-4 border border-gray-200">
                                <div class="flex items-start space-x-3">
                                    <div class="bg-gradient-to-r from-cyan-600 to-sky-600 p-2 rounded-full">
                                        <svg aria-hidden="true" focusable="false" class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-gray-800">Impacto Regional y Nacional</h3>
                                        <p class="text-gray-600 text-sm">Transformación de la salud mental en la Amazonía y el país</p>
                                    </div>
                                </div>
                            </li>

                            <li class="bg-white rounded-lg p-4 border border-gray-200">
                                <div class="flex items-start space-x-3">
                                    <div class="bg-gradient-to-r from-cyan-600 to-sky-600 p-2 rounded-full">
                                        <svg aria-hidden="true" focusable="false" class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-gray-800">Principios Éticos y Científicos</h3>
                                        <p class="text-gray-600 text-sm">Aplicación rigurosa en cada acción profesional</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
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
