@extends('layouts.app')

@section('content')
<div class="bg-gray-50 min-h-screen">
    <!-- Hero Section -->
    <div class="relative text-white py-20" style="background-image: url('{{ asset('img/presentacion/presentacionbackground.jpg') }}'); background-size: cover; background-position: center; background-attachment: fixed;">
        <div class="absolute inset-0 bg-gradient-to-r from-[#db0455]/80 to-[#ed145b]/70"></div>
        <div class="relative z-10 container mx-auto px-4">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4 drop-shadow-lg">Objetivos Académicos</h1>
                <p class="text-xl md:text-2xl opacity-90 drop-shadow-md">Escuela Profesional de Biología - UNAMAD</p>
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
                            <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2">Biología</span>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
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
            <!-- Sidebar -->
            <div class="lg:col-span-1">
                @include('facultades.biologia.partials.navigation')
            </div>

            <!-- Main Content -->
            <div class="lg:col-span-2">
                <div class="bg-white rounded-lg shadow-lg p-8 border-t-4 border-[#db0455]">
                    <div class="flex items-start space-x-4 mb-8">
                        <div class="bg-gradient-to-r from-green-500 to-emerald-600 p-4 rounded-full">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-3xl font-bold text-gray-800 mb-4">Objetivos Académicos</h2>
                            <div class="w-20 h-1 bg-gradient-to-r from-green-500 to-emerald-600"></div>
                        </div>
                    </div>

                    <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed">
                        <p class="text-lg mb-8">
                            Los objetivos educacionales de la carrera de <strong>Biología</strong> están organizados en torno a las cuatro áreas de especialidad, orientando la formación hacia la investigación, la conservación y el desarrollo sostenible de la Amazonía.
                        </p>

                        <div class="space-y-6">
                            <!-- OE1 -->
                            <div class="bg-gradient-to-r from-green-50 to-emerald-50 rounded-lg p-6 border-l-4 border-green-500">
                                <div class="flex items-center mb-4">
                                    <div class="w-12 h-8 bg-green-600 rounded-full flex items-center justify-center mr-3 flex-shrink-0">
                                        <span class="text-white font-bold text-xs">OE1</span>
                                    </div>
                                    <h3 class="text-lg font-bold text-gray-800">Biodiversidad y Conservación</h3>
                                </div>
                                <p class="text-gray-700 leading-relaxed">
                                    Dirige proyectos de conservación de la biodiversidad y restauración de ecosistemas, integrando conocimientos científicos y promoviendo la sostenibilidad en articulación con la comunidad.
                                </p>
                            </div>

                            <!-- OE2 -->
                            <div class="bg-gradient-to-r from-emerald-50 to-teal-50 rounded-lg p-6 border-l-4 border-emerald-500">
                                <div class="flex items-center mb-4">
                                    <div class="w-12 h-8 bg-emerald-600 rounded-full flex items-center justify-center mr-3 flex-shrink-0">
                                        <span class="text-white font-bold text-xs">OE2</span>
                                    </div>
                                    <h3 class="text-lg font-bold text-gray-800">Ecología y Gestión Ambiental</h3>
                                </div>
                                <p class="text-gray-700 leading-relaxed">
                                    Diseña y ejecuta planes, estrategias y normativas ambientales, basadas en principios ecológicos para promover el equilibrio ecológico, contribuyendo al desarrollo sostenible y a la mitigación del impacto ambiental.
                                </p>
                            </div>

                            <!-- OE3 -->
                            <div class="bg-gradient-to-r from-teal-50 to-cyan-50 rounded-lg p-6 border-l-4 border-teal-500">
                                <div class="flex items-center mb-4">
                                    <div class="w-12 h-8 bg-teal-600 rounded-full flex items-center justify-center mr-3 flex-shrink-0">
                                        <span class="text-white font-bold text-xs">OE3</span>
                                    </div>
                                    <h3 class="text-lg font-bold text-gray-800">Microbiología y Biotecnología</h3>
                                </div>
                                <p class="text-gray-700 leading-relaxed">
                                    Desarrolla e implementa soluciones de salud y biotecnológicas innovadoras, para los ámbitos de la salud, la producción y la remediación ambiental, con estándares éticos y de bioseguridad.
                                </p>
                            </div>

                            <!-- OE4 -->
                            <div class="bg-gradient-to-r from-cyan-50 to-blue-50 rounded-lg p-6 border-l-4 border-cyan-500">
                                <div class="flex items-center mb-4">
                                    <div class="w-12 h-8 bg-cyan-600 rounded-full flex items-center justify-center mr-3 flex-shrink-0">
                                        <span class="text-white font-bold text-xs">OE4</span>
                                    </div>
                                    <h3 class="text-lg font-bold text-gray-800">Hidrobiología y Acuicultura</h3>
                                </div>
                                <p class="text-gray-700 leading-relaxed">
                                    Gestiona sistemas de control y monitoreo de ecosistemas acuáticos, con ética profesional para garantizar la conservación y el aprovechamiento sostenible del recurso hidrobiológico.
                                </p>
                            </div>

                            <!-- OE5 -->
                            <div class="bg-gradient-to-r from-green-50 to-emerald-50 rounded-lg p-6 border-l-4 border-green-600">
                                <div class="flex items-center mb-4">
                                    <div class="w-12 h-8 bg-green-700 rounded-full flex items-center justify-center mr-3 flex-shrink-0">
                                        <span class="text-white font-bold text-xs">OE5</span>
                                    </div>
                                    <h3 class="text-lg font-bold text-gray-800">Investigación Interdisciplinaria</h3>
                                </div>
                                <p class="text-gray-700 leading-relaxed">
                                    Elabora proyectos de investigación interdisciplinarios y colaborativos en temas de biodiversidad, salud pública y cambio climático, integrando la ética, el método científico y los saberes locales, con responsabilidad social y compromiso ambiental.
                                </p>
                            </div>
                        </div>

                        <!-- Plan de Estudios -->
                        <div class="mt-10 bg-white rounded-lg p-6 border border-gray-200">
                            <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                                <svg class="w-6 h-6 mr-2 text-[#db0455]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                </svg>
                                Plan de Estudios
                            </h3>
                            <p class="text-gray-700 leading-relaxed mb-6">
                                El régimen de estudios es semestral y consta de <strong>10 semestres académicos</strong> (2 por año), con 17 semanas lectivas cada uno. El plan de estudios es rígido y único hasta el VI semestre, a partir del cual se vuelve flexible y específico para cada una de las cuatro áreas de especialidad.
                            </p>
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                                <div class="text-center bg-green-50 rounded-lg p-4 border border-green-200">
                                    <p class="text-3xl font-bold text-green-600">10</p>
                                    <p class="text-gray-600 text-sm">Semestres</p>
                                </div>
                                <div class="text-center bg-emerald-50 rounded-lg p-4 border border-emerald-200">
                                    <p class="text-3xl font-bold text-emerald-600">62</p>
                                    <p class="text-gray-600 text-sm">Cursos mínimos</p>
                                </div>
                                <div class="text-center bg-teal-50 rounded-lg p-4 border border-teal-200">
                                    <p class="text-3xl font-bold text-teal-600">220</p>
                                    <p class="text-gray-600 text-sm">Créditos totales</p>
                                </div>
                                <div class="text-center bg-cyan-50 rounded-lg p-4 border border-cyan-200">
                                    <p class="text-3xl font-bold text-cyan-600">4</p>
                                    <p class="text-gray-600 text-sm">Áreas de especialidad</p>
                                </div>
                            </div>
                            <p class="text-gray-600 text-sm mt-4">
                                De los 62 cursos, 48 son obligatorios (172 créditos) y 14 son electivos (48 créditos), accesibles desde el sexto semestre.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
