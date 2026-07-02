@extends('layouts.app')

@section('content')
<div class="bg-gray-50 min-h-screen">
    <!-- Hero Section -->
    <div class="relative text-white py-20" style="background-image: url('{{ asset('img/presentacion/presentacionbackground.jpg') }}'); background-size: cover; background-position: center; background-attachment: fixed;">
        <div class="absolute inset-0 bg-gradient-to-r from-[#db0455]/80 to-[#ed145b]/70"></div>
        <div class="relative z-10 container mx-auto px-4">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4 drop-shadow-lg">Perfil Profesional</h1>
                <p class="text-xl md:text-2xl opacity-90 drop-shadow-md">Escuela Profesional de Medicina Humana - UNAMAD</p>
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
                            <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2">Medicina Humana</span>
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
                @include('facultades.medicina-humana.partials.navigation')
            </div>

            <!-- Main Content -->
            <div class="lg:col-span-2">
                <div class="bg-white rounded-lg shadow-lg p-8 border-t-4 border-[#db0455]">
                    <div class="flex items-start space-x-4 mb-8">
                        <div class="bg-gradient-to-r from-blue-500 to-cyan-600 p-4 rounded-full">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-3xl font-bold text-gray-800 mb-4">Perfil Profesional del Egresado</h2>
                            <div class="w-20 h-1 bg-gradient-to-r from-blue-500 to-cyan-600"></div>
                        </div>
                    </div>

                    <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed">
                        <p class="text-lg mb-8">
                            El egresado del programa de estudios de <strong>Medicina Humana</strong> de la UNAMAD es un profesional líder, innovador e investigador con una sólida formación académica y una actitud de autoaprendizaje continuo; actúa con principios éticos, equidad y eficiencia, brindando una atención de calidad caracterizada por su <strong>calidez humana</strong>. Posee una comprensión profunda del binomio salud-enfermedad y es capaz de diseñar, implementar y evaluar estrategias de promoción, prevención, recuperación y rehabilitación de la salud en los niveles individual, familiar y comunitario. Valora y respeta el conocimiento ancestral de los pueblos originarios y promueve la responsabilidad social y el cuidado del medio ambiente.
                        </p>

                        <!-- Competencias Genéricas -->
                        <h3 class="text-xl font-bold text-gray-800 mb-6 flex items-center">
                            <svg class="w-6 h-6 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Competencias Genéricas
                        </h3>
                        <div class="space-y-4 mb-10">
                            <div class="bg-gradient-to-r from-blue-50 to-cyan-50 rounded-lg p-5 border-l-4 border-blue-500">
                                <div class="flex items-start space-x-3">
                                    <span class="bg-blue-600 text-white font-bold text-xs px-3 py-1 rounded-full flex-shrink-0">CG1</span>
                                    <p class="text-gray-700">Trabaja en equipo, es creativo e innovador para generar propuestas de emprendimiento.</p>
                                </div>
                            </div>
                            <div class="bg-gradient-to-r from-blue-50 to-cyan-50 rounded-lg p-5 border-l-4 border-blue-500">
                                <div class="flex items-start space-x-3">
                                    <span class="bg-blue-600 text-white font-bold text-xs px-3 py-1 rounded-full flex-shrink-0">CG2</span>
                                    <p class="text-gray-700">Argumenta ideas en forma oral y escrita para una adecuada comunicación.</p>
                                </div>
                            </div>
                            <div class="bg-gradient-to-r from-blue-50 to-cyan-50 rounded-lg p-5 border-l-4 border-blue-500">
                                <div class="flex items-start space-x-3">
                                    <span class="bg-blue-600 text-white font-bold text-xs px-3 py-1 rounded-full flex-shrink-0">CG3</span>
                                    <p class="text-gray-700">Utiliza saberes y/o razonamiento matemático para la resolución de problemas.</p>
                                </div>
                            </div>
                            <div class="bg-gradient-to-r from-blue-50 to-cyan-50 rounded-lg p-5 border-l-4 border-blue-500">
                                <div class="flex items-start space-x-3">
                                    <span class="bg-blue-600 text-white font-bold text-xs px-3 py-1 rounded-full flex-shrink-0">CG4</span>
                                    <p class="text-gray-700">Valora el comportamiento ético en el ejercicio de una profesión para el desarrollo de una cultura de paz en la sociedad.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Competencias Específicas -->
                        <h3 class="text-xl font-bold text-gray-800 mb-6 flex items-center">
                            <svg class="w-6 h-6 mr-2 text-[#db0455]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                            </svg>
                            Competencias Específicas
                        </h3>
                        <div class="space-y-6">
                            <!-- CE1 -->
                            <div class="bg-white rounded-lg p-6 border border-gray-200 hover:shadow-lg transition-shadow">
                                <div class="flex items-start space-x-4">
                                    <div class="bg-gradient-to-r from-blue-500 to-cyan-600 p-3 rounded-full flex-shrink-0">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="flex items-center flex-wrap gap-2 mb-2">
                                            <span class="bg-blue-600 text-white font-bold text-xs px-3 py-1 rounded-full">CE1</span>
                                            <h4 class="text-lg font-bold text-gray-800">Área: Acto Médico</h4>
                                        </div>
                                        <p class="text-gray-700">Realiza la evaluación clínica y epidemiológica durante la práctica médica, aplicando el método académico-científico y actuando con ética y profesionalismo, para proporcionar un tratamiento integral y eficiente.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- CE2 -->
                            <div class="bg-white rounded-lg p-6 border border-gray-200 hover:shadow-lg transition-shadow">
                                <div class="flex items-start space-x-4">
                                    <div class="bg-gradient-to-r from-cyan-500 to-sky-600 p-3 rounded-full flex-shrink-0">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="flex items-center flex-wrap gap-2 mb-2">
                                            <span class="bg-cyan-600 text-white font-bold text-xs px-3 py-1 rounded-full">CE2</span>
                                            <h4 class="text-lg font-bold text-gray-800">Área: Salud Pública</h4>
                                        </div>
                                        <p class="text-gray-700">Promueve cambios sostenibles en el comportamiento individual y colectivo mediante la implementación del modelo de atención integral de salud, que incorpore la responsabilidad social y el respeto al medio ambiente, para mejorar la calidad de vida y contribuir al bienestar social y ambiental.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- CE3 -->
                            <div class="bg-white rounded-lg p-6 border border-gray-200 hover:shadow-lg transition-shadow">
                                <div class="flex items-start space-x-4">
                                    <div class="bg-gradient-to-r from-sky-500 to-indigo-600 p-3 rounded-full flex-shrink-0">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="flex items-center flex-wrap gap-2 mb-2">
                                            <span class="bg-sky-600 text-white font-bold text-xs px-3 py-1 rounded-full">CE3</span>
                                            <h4 class="text-lg font-bold text-gray-800">Área: Gestión y Administración de los Servicios de Salud</h4>
                                        </div>
                                        <p class="text-gray-700">Gestiona y administra establecimientos y servicios de salud, con liderazgo, ética y en conformidad con las normativas vigentes, para garantizar el acceso universal a los servicios de salud con calidad y eficiencia.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- CE4 -->
                            <div class="bg-white rounded-lg p-6 border border-gray-200 hover:shadow-lg transition-shadow">
                                <div class="flex items-start space-x-4">
                                    <div class="bg-gradient-to-r from-indigo-500 to-blue-600 p-3 rounded-full flex-shrink-0">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="flex items-center flex-wrap gap-2 mb-2">
                                            <span class="bg-indigo-600 text-white font-bold text-xs px-3 py-1 rounded-full">CE4</span>
                                            <h4 class="text-lg font-bold text-gray-800">Área: Docencia e Investigación</h4>
                                        </div>
                                        <p class="text-gray-700">Investiga los problemas de salud prioritarios y prevalentes de la región amazónica y del país, con rigor científico y ética, utilizando herramientas tecnológicas avanzadas, para proponer soluciones innovadoras que contribuyan al desarrollo de la medicina y mejoren la calidad de vida de la población.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Resumen del Perfil -->
                        <div class="mt-8 p-6 bg-gradient-to-r from-gray-50 to-gray-100 rounded-lg border border-gray-200">
                            <p class="text-gray-700 text-center font-medium">
                                El egresado de Medicina Humana de la UNAMAD integra <strong>sólidos conocimientos científicos</strong>, valores éticos y compromiso social, con capacidad de comunicación efectiva y pensamiento lógico para analizar y resolver problemas complejos en la práctica médica.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
