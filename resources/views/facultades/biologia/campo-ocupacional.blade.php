@extends('layouts.app')

@section('title', 'Campo Ocupacional - Biología - UNAMAD')

@section('content')
<div class="bg-gray-50 min-h-screen">
    <!-- Hero Section -->
    <div class="relative text-white py-20" style="background-image: url('{{ asset('img/presentacion/presentacionbackground.jpg') }}'); background-size: cover; background-position: center; background-attachment: fixed;">
        <div class="absolute inset-0 bg-gradient-to-r from-[#db0455]/80 to-[#ed145b]/70"></div>
        <div class="relative z-10 container mx-auto px-4">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4 drop-shadow-lg">Campo Ocupacional</h1>
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
                            <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2">Biología</span>
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
                        <div class="bg-gradient-to-r from-green-500 to-emerald-600 p-4 rounded-full">
                            <svg aria-hidden="true" focusable="false" class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0H8m8 0v2a2 2 0 01-2 2H10a2 2 0 01-2-2V6m8 0H8"></path>
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-3xl font-bold text-gray-800 mb-4">Campo Ocupacional y Ámbitos de Desempeño</h2>
                            <div class="w-20 h-1 bg-gradient-to-r from-green-500 to-emerald-600"></div>
                        </div>
                    </div>

                    <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed">
                        <p class="text-lg mb-8">
                            El <strong>biólogo</strong> encuentra oportunidades en una variedad de sectores, tanto públicos como privados, aplicando sus conocimientos para la conservación, investigación y aprovechamiento sostenible de la biodiversidad.
                        </p>

                        <!-- Sectores -->
                        <div class="space-y-6 mb-8">
                            <!-- Sector Ambiental y Conservación -->
                            <div class="bg-gradient-to-r from-green-50 to-emerald-50 rounded-lg p-6 border-l-4 border-green-500">
                                <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                                    <svg aria-hidden="true" focusable="false" class="w-6 h-6 mr-2 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>
                                    </svg>
                                    Sector Ambiental y Conservación
                                </h3>
                                <ul class="space-y-2">
                                    <li class="flex items-start space-x-2">
                                        <svg aria-hidden="true" focusable="false" class="w-4 h-4 text-green-600 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                        <span class="text-sm"><strong>Evaluación y Gestión Ambiental:</strong> Estudios de Impacto Ambiental (EIA), PAMA, SSOMA, monitoreos ambientales, fiscalización y auditoría. Instituciones como OEFA, SUNASS y ANA.</span>
                                    </li>
                                    <li class="flex items-start space-x-2">
                                        <svg aria-hidden="true" focusable="false" class="w-4 h-4 text-green-600 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                        <span class="text-sm"><strong>Conservación de la Biodiversidad:</strong> Áreas naturales protegidas (SERNANP), gestión de fauna y flora silvestre, restauración ecológica. SERFOR, MINAM, OSINFOR.</span>
                                    </li>
                                    <li class="flex items-start space-x-2">
                                        <svg aria-hidden="true" focusable="false" class="w-4 h-4 text-green-600 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                        <span class="text-sm"><strong>Consultoría Ambiental:</strong> Cumplimiento de normativas ambientales y sistemas integrados de gestión (SIG).</span>
                                    </li>
                                </ul>
                            </div>

                            <!-- Sector Salud y Biotecnología -->
                            <div class="bg-gradient-to-r from-teal-50 to-cyan-50 rounded-lg p-6 border-l-4 border-teal-500">
                                <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                                    <svg aria-hidden="true" focusable="false" class="w-6 h-6 mr-2 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                                    </svg>
                                    Sector Salud y Biotecnología
                                </h3>
                                <ul class="space-y-2">
                                    <li class="flex items-start space-x-2">
                                        <svg aria-hidden="true" focusable="false" class="w-4 h-4 text-teal-600 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                        <span class="text-sm"><strong>Laboratorios Clínicos y de Salud Pública:</strong> Análisis microbiológicos, moleculares, epidemiológicos, control de calidad, bioseguridad, vigilancia genómica y biología forense.</span>
                                    </li>
                                    <li class="flex items-start space-x-2">
                                        <svg aria-hidden="true" focusable="false" class="w-4 h-4 text-teal-600 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                        <span class="text-sm"><strong>Biotecnología:</strong> Investigación y desarrollo en biotecnología agrícola, industrial, médica y ambiental.</span>
                                    </li>
                                    <li class="flex items-start space-x-2">
                                        <svg aria-hidden="true" focusable="false" class="w-4 h-4 text-teal-600 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                        <span class="text-sm"><strong>Farmacología y Toxicología:</strong> Desarrollo de nuevos fármacos y evaluación de toxicidad de sustancias.</span>
                                    </li>
                                </ul>
                            </div>

                            <!-- Sector Agropecuario y Agroindustrial -->
                            <div class="bg-gradient-to-r from-emerald-50 to-green-50 rounded-lg p-6 border-l-4 border-emerald-500">
                                <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                                    <svg aria-hidden="true" focusable="false" class="w-6 h-6 mr-2 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path>
                                    </svg>
                                    Sector Agropecuario y Agroindustrial
                                </h3>
                                <ul class="space-y-2">
                                    <li class="flex items-start space-x-2">
                                        <svg aria-hidden="true" focusable="false" class="w-4 h-4 text-emerald-600 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                        <span class="text-sm"><strong>Control de Calidad y Seguridad Alimentaria:</strong> Microbiología alimentaria e inocuidad. Instituciones como el SENASA.</span>
                                    </li>
                                    <li class="flex items-start space-x-2">
                                        <svg aria-hidden="true" focusable="false" class="w-4 h-4 text-emerald-600 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                        <span class="text-sm"><strong>Mejora Genética y Biotecnología Agrícola:</strong> Desarrollo de cultivos más resistentes o productivos.</span>
                                    </li>
                                    <li class="flex items-start space-x-2">
                                        <svg aria-hidden="true" focusable="false" class="w-4 h-4 text-emerald-600 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                        <span class="text-sm"><strong>Manejo de Cultivos y Plagas:</strong> Asesoramiento técnico en el manejo integrado de plagas y enfermedades.</span>
                                    </li>
                                </ul>
                            </div>

                            <!-- Sector Investigación y Docencia -->
                            <div class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-lg p-6 border-l-4 border-blue-500">
                                <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                                    <svg aria-hidden="true" focusable="false" class="w-6 h-6 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                    </svg>
                                    Sector Investigación y Docencia
                                </h3>
                                <ul class="space-y-2">
                                    <li class="flex items-start space-x-2">
                                        <svg aria-hidden="true" focusable="false" class="w-4 h-4 text-blue-600 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                        <span class="text-sm"><strong>Universidades e Institutos:</strong> Investigación científica en botánica, zoología, ecología, microbiología y genética, y formación de nuevas generaciones.</span>
                                    </li>
                                    <li class="flex items-start space-x-2">
                                        <svg aria-hidden="true" focusable="false" class="w-4 h-4 text-blue-600 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                        <span class="text-sm"><strong>Centros de Investigación:</strong> INS, IIAP, INIA y el Centro Internacional de la Papa (CIP).</span>
                                    </li>
                                    <li class="flex items-start space-x-2">
                                        <svg aria-hidden="true" focusable="false" class="w-4 h-4 text-blue-600 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                        <span class="text-sm"><strong>Otros sectores:</strong> Acuicultura y pesquería, industria (minería, petróleo), divulgación científica y educación ambiental.</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Tendencias y Desafíos -->
                        <div class="bg-gradient-to-r from-gray-50 to-gray-100 rounded-lg p-8 border border-gray-200 mb-8">
                            <h3 class="text-2xl font-bold text-gray-800 mb-6 text-center">Tendencias y Desafíos</h3>
                            <ul class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <li class="bg-white rounded-lg p-5 border border-gray-200">
                                    <h4 class="font-bold text-gray-800 mb-2">Crecimiento del Sector Ambiental</h4>
                                    <p class="text-gray-600 text-sm">La mayor conciencia ambiental y la regulación impulsan la demanda en consultoría y gestión ambiental.</p>
                                </li>
                                <li class="bg-white rounded-lg p-5 border border-gray-200">
                                    <h4 class="font-bold text-gray-800 mb-2">Potencial en Biotecnología</h4>
                                    <p class="text-gray-600 text-sm">Gran potencial de crecimiento, aunque la inserción laboral puede requerir especialización y experiencia.</p>
                                </li>
                                <li class="bg-white rounded-lg p-5 border border-gray-200">
                                    <h4 class="font-bold text-gray-800 mb-2">Necesidad de Especialización</h4>
                                    <p class="text-gray-600 text-sm">El mercado valora cada vez más biólogos con especializaciones: biología molecular, ecología aplicada, microbiología clínica y genética.</p>
                                </li>
                                <li class="bg-white rounded-lg p-5 border border-gray-200">
                                    <h4 class="font-bold text-gray-800 mb-2">Habilidades Complementarias</h4>
                                    <p class="text-gray-600 text-sm">Comunicación, trabajo en equipo, liderazgo y dominio de herramientas digitales (SIG, estadística, bases de datos).</p>
                                </li>
                            </ul>
                            <div class="mt-6 bg-gradient-to-r from-green-500 to-emerald-600 rounded-lg p-5 text-white text-center">
                                <p class="font-medium">Los salarios pueden alcanzar hasta <strong>S/ 10 mil soles o más</strong> para profesionales con experiencia, con convocatorias estatales competitivas para especialistas.</p>
                            </div>
                        </div>

                        <!-- Relevancia Regional -->
                        <div class="bg-gradient-to-r from-green-50 to-emerald-50 rounded-lg p-6 border-l-4 border-green-500">
                            <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                                <svg aria-hidden="true" focusable="false" class="w-6 h-6 mr-2 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                Relevancia en Madre de Dios
                            </h3>
                            <p class="text-gray-700 leading-relaxed">
                                En una región caracterizada por su extraordinaria biodiversidad y crecientes desafíos socioambientales —extracción ilegal de recursos, contaminación por mercurio, pérdida de cobertura forestal y cambio climático— el programa de Biología posee una <strong>alta pertinencia regional</strong>. Las instituciones públicas, ONGs, centros de investigación, gobiernos locales y áreas naturales protegidas requieren cada vez más biólogos especializados en gestión ambiental, monitoreo ecológico, restauración de ecosistemas y educación científica.
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
