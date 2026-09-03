@extends('layouts.app')

@section('title', 'Medicina Humana - UNAMAD')

@section('content')
<div class="bg-gray-50 min-h-screen">
    <!-- Hero Section -->
    <div class="relative text-white py-20" style="background-image: url('{{ asset('img/presentacion/presentacionbackground.jpg') }}'); background-size: cover; background-position: center; background-attachment: fixed;">
        <div class="absolute inset-0 bg-black/50"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-[#db0455]/80 to-[#ed145b]/70"></div>
        <div class="relative z-10 container mx-auto px-4">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4 drop-shadow-lg">Medicina Humana</h1>
                <p class="text-xl md:text-2xl drop-shadow-md">Universidad Nacional Amazónica de Madre de Dios</p>
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
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg aria-hidden="true" focusable="false" class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="ml-1 text-sm font-medium text-[#db0455] md:ml-2">Medicina Humana</span>
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
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-3xl font-bold text-gray-800 mb-4">Escuela Profesional de Medicina Humana</h2>
                            <div class="w-20 h-1 bg-gradient-to-r from-blue-500 to-cyan-600"></div>
                        </div>
                    </div>

                    <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed">
                        <p class="text-lg mb-6">
                            La <strong>Carrera Profesional de Medicina Humana</strong> de la Universidad Nacional Amazónica de Madre de Dios (UNAMAD) tiene como propósito formar <strong>médicos cirujanos</strong> con sólida preparación científica, tecnológica, ética y humanística, capaces de responder a las necesidades de salud de la población mediante acciones de promoción, prevención, recuperación y rehabilitación de la salud, con énfasis en la realidad amazónica y el desarrollo sostenible.
                        </p>

                        <p class="mb-6">
                            Su naturaleza corresponde al área de las <strong>ciencias de la salud</strong>, orientada al estudio integral del ser humano, los procesos de salud-enfermedad y los factores biológicos, psicológicos, sociales, culturales y ambientales que influyen en el bienestar individual y colectivo, con un enfoque intercultural centrado en la persona, la familia y la comunidad.
                        </p>

                        <!-- Pilares de la Carrera -->
                        <div class="bg-gradient-to-r from-blue-50 to-cyan-50 rounded-lg p-6 mb-8 border-l-4 border-blue-500">
                            <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                                <svg aria-hidden="true" focusable="false" class="w-6 h-6 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                </svg>
                                Pilares de Nuestra Formación
                            </h3>
                            <ul class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <li class="flex items-start space-x-3">
                                    <div class="bg-gradient-to-r from-blue-500 to-cyan-600 p-2 rounded-full">
                                        <svg aria-hidden="true" focusable="false" class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-800">Formación Científica</h4>
                                        <p class="text-gray-600 text-sm">Comprensión profunda del binomio salud-enfermedad</p>
                                    </div>
                                </li>
                                <li class="flex items-start space-x-3">
                                    <div class="bg-gradient-to-r from-blue-500 to-cyan-600 p-2 rounded-full">
                                        <svg aria-hidden="true" focusable="false" class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-800">Compromiso Humanístico</h4>
                                        <p class="text-gray-600 text-sm">Atención de calidad con calidez humana</p>
                                    </div>
                                </li>
                                <li class="flex items-start space-x-3">
                                    <div class="bg-gradient-to-r from-blue-500 to-cyan-600 p-2 rounded-full">
                                        <svg aria-hidden="true" focusable="false" class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-800">Investigación</h4>
                                        <p class="text-gray-600 text-sm">Solución a los problemas de salud prioritarios</p>
                                    </div>
                                </li>
                                <li class="flex items-start space-x-3">
                                    <div class="bg-gradient-to-r from-blue-500 to-cyan-600 p-2 rounded-full">
                                        <svg aria-hidden="true" focusable="false" class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-800">Enfoque Intercultural</h4>
                                        <p class="text-gray-600 text-sm">Respeto al conocimiento de los pueblos amazónicos</p>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <!-- Campos en que contribuye -->
                        <div class="bg-white rounded-lg p-6 border border-gray-200 mb-8">
                            <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                                <svg aria-hidden="true" focusable="false" class="w-6 h-6 mr-2 text-[#db0455]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                                </svg>
                                Campos en los que Contribuye
                            </h3>
                            <p class="text-gray-700 leading-relaxed mb-4">
                                La formación integra las ciencias básicas, clínicas, quirúrgicas, de salud pública, investigación científica y gestión sanitaria, contribuyendo a diversos campos del desarrollo regional y nacional:
                            </p>
                            <ul class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <li class="text-center p-4 bg-blue-50 rounded-lg border border-blue-200">
                                    <p class="font-semibold text-gray-800 text-sm">Atención Integral de la Salud</p>
                                </li>
                                <li class="text-center p-4 bg-cyan-50 rounded-lg border border-cyan-200">
                                    <p class="font-semibold text-gray-800 text-sm">Promoción y Prevención</p>
                                </li>
                                <li class="text-center p-4 bg-sky-50 rounded-lg border border-sky-200">
                                    <p class="font-semibold text-gray-800 text-sm">Investigación Biomédica y Clínica</p>
                                </li>
                                <li class="text-center p-4 bg-indigo-50 rounded-lg border border-indigo-200">
                                    <p class="font-semibold text-gray-800 text-sm">Gestión de Servicios de Salud</p>
                                </li>
                            </ul>
                        </div>

                        <!-- Call to Action -->
                        <div class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-lg p-4 border-l-4 border-blue-500">
                            <p class="text-gray-700">
                                Para conocer más sobre nuestra <strong>Reseña Histórica, Visión, Misión, Perfil Profesional</strong> y otros aspectos académicos, utiliza el menú <a href="#navegacion-carrera" class="underline font-medium text-[#db0455]">«Secciones de la carrera»</a> de esta página.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar: visualmente primero (order-first); en el DOM va tras el contenido para mantener la jerarquía de encabezados -->
            <div class="lg:col-span-1 order-first">
                @include('facultades.medicina-humana.partials.navigation')
            </div>
        </div>
    </div>
</div>
@endsection
