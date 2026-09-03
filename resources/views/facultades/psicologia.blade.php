@extends('layouts.app')

@section('content')
<div class="bg-gray-50 min-h-screen">
    <!-- Hero Section -->
    <div class="relative text-white py-20" style="background-image: url('{{ asset('img/presentacion/presentacionbackground.jpg') }}'); background-size: cover; background-position: center; background-attachment: fixed;">
        <div class="absolute inset-0 bg-gradient-to-r from-[#db0455]/80 to-[#ed145b]/70"></div>
        <div class="relative z-10 container mx-auto px-4">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4 drop-shadow-lg">Psicología</h1>
                <p class="text-xl md:text-2xl opacity-90 drop-shadow-md">Universidad Nacional Amazónica de Madre de Dios</p>
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
                            <span class="ml-1 text-sm font-medium text-[#db0455] md:ml-2">Psicología</span>
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
                @include('facultades.psicologia.partials.navigation')
            </div>

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
                            <h2 class="text-3xl font-bold text-gray-800 mb-4">Escuela Profesional de Psicología</h2>
                            <div class="w-20 h-1 bg-gradient-to-r from-blue-500 to-cyan-600"></div>
                        </div>
                    </div>

                    <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed">
                        <p class="text-lg mb-6">
                            La <strong>Carrera Profesional de Psicología</strong> de la Universidad Nacional Amazónica de Madre de Dios (UNAMAD) tiene como propósito formar <strong>psicólogos</strong> con sólidos principios éticos y profesionales, capaces de contribuir a la prevención, promoción, mantenimiento y recuperación de la salud mental de individuos, familias y comunidades, mediante intervenciones basadas en evidencia y en el marco de la atención primaria de salud.
                        </p>

                        <p class="mb-6">
                            Su formación combina <strong>sólidos fundamentos teóricos y prácticos</strong> con el desarrollo de competencias investigativas y éticas, que lo capacitan para trabajar de manera interdisciplinaria junto con profesionales de la salud, la educación, el derecho y el trabajo social, en instituciones públicas, privadas y comunitarias.
                        </p>

                        <!-- Pilares de la Carrera -->
                        <div class="bg-gradient-to-r from-blue-50 to-cyan-50 rounded-lg p-6 mb-8 border-l-4 border-blue-500">
                            <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                                <svg aria-hidden="true" focusable="false" class="w-6 h-6 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                </svg>
                                Pilares de Nuestra Formación
                            </h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="flex items-start space-x-3">
                                    <div class="bg-gradient-to-r from-blue-500 to-cyan-600 p-2 rounded-full">
                                        <svg aria-hidden="true" focusable="false" class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-800">Intervención Basada en Evidencia</h4>
                                        <p class="text-gray-600 text-sm">Prevención, promoción y recuperación de la salud mental</p>
                                    </div>
                                </div>
                                <div class="flex items-start space-x-3">
                                    <div class="bg-gradient-to-r from-blue-500 to-cyan-600 p-2 rounded-full">
                                        <svg aria-hidden="true" focusable="false" class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-800">Compromiso Ético y Social</h4>
                                        <p class="text-gray-600 text-sm">Profundo compromiso con el bienestar humano</p>
                                    </div>
                                </div>
                                <div class="flex items-start space-x-3">
                                    <div class="bg-gradient-to-r from-blue-500 to-cyan-600 p-2 rounded-full">
                                        <svg aria-hidden="true" focusable="false" class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-800">Investigación e Innovación</h4>
                                        <p class="text-gray-600 text-sm">Abordaje de las problemáticas de salud mental amazónica</p>
                                    </div>
                                </div>
                                <div class="flex items-start space-x-3">
                                    <div class="bg-gradient-to-r from-blue-500 to-cyan-600 p-2 rounded-full">
                                        <svg aria-hidden="true" focusable="false" class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-800">Enfoque Comunitario e Intercultural</h4>
                                        <p class="text-gray-600 text-sm">Respeto a la diversidad cultural, étnica y lingüística</p>
                                    </div>
                                </div>
                            </div>
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
                                La Carrera Profesional de Psicología se compromete con la formación de recursos humanos con responsabilidad social, orientados a la promoción de la salud mental y al fortalecimiento de los procesos de desarrollo humano sostenible en Madre de Dios, el Perú y el mundo:
                            </p>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="text-center p-4 bg-blue-50 rounded-lg border border-blue-200">
                                    <h4 class="font-semibold text-gray-800 text-sm">Salud Mental y Bienestar</h4>
                                </div>
                                <div class="text-center p-4 bg-cyan-50 rounded-lg border border-cyan-200">
                                    <h4 class="font-semibold text-gray-800 text-sm">Desarrollo Humano Sostenible</h4>
                                </div>
                                <div class="text-center p-4 bg-sky-50 rounded-lg border border-sky-200">
                                    <h4 class="font-semibold text-gray-800 text-sm">Convivencia Social y Comunitaria</h4>
                                </div>
                                <div class="text-center p-4 bg-indigo-50 rounded-lg border border-indigo-200">
                                    <h4 class="font-semibold text-gray-800 text-sm">Investigación en Psicología</h4>
                                </div>
                            </div>
                        </div>

                        <!-- Call to Action -->
                        <div class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-lg p-4 border-l-4 border-blue-500">
                            <p class="text-gray-700">
                                Para conocer más sobre nuestra <strong>Reseña Histórica, Visión, Misión, Perfil Profesional</strong> y otros aspectos académicos, utiliza el menú de navegación de la izquierda.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
