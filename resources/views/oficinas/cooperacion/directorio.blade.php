@extends('layouts.app')

@section('content')
<div class="bg-gray-50 min-h-screen">
    <!-- Hero Section -->
    <div class="relative text-white py-20" style="background-image: url('{{ asset('img/presentacion/presentacionbackground.jpg') }}'); background-size: cover; background-position: center; background-attachment: fixed;">
        <div class="absolute inset-0 bg-gradient-to-r from-[#db0455]/80 to-[#ed145b]/70"></div>
        <div class="relative z-10 container mx-auto px-4">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4 drop-shadow-lg">Directorio</h1>
                <p class="text-xl md:text-2xl opacity-90 drop-shadow-md">Oficina de Cooperación y Relaciones Internacionales</p>
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
                            <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2">Oficinas</span>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2">Cooperación y Relaciones Internacionales</span>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="ml-1 text-sm font-medium text-[#db0455] md:ml-2">Directorio</span>
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
                @include('oficinas.cooperacion.partials.navigation')
            </div>

            <!-- Main Content -->
            <div class="lg:col-span-2">
                <div class="bg-white rounded-lg shadow-lg p-8 border-t-4 border-[#db0455]">
                    <div class="flex items-start space-x-4 mb-8">
                        <div class="bg-gradient-to-r from-[#db0455] to-[#ed145b] p-4 rounded-full">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-3xl font-bold text-gray-800 mb-4">Directorio OCRI</h2>
                            <div class="w-20 h-1 bg-gradient-to-r from-[#db0455] to-[#ed145b]"></div>
                        </div>
                    </div>

                    <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed">
                        <p class="text-lg mb-8">
                            A continuación, usted podrá encontrar datos del personal directivo de la Oficina de Cooperación y Relaciones Interinstitucionales de la Universidad Nacional Amazónica de Madre de Dios:
                        </p>

                        <!-- Director Profile -->
                        <div class="bg-gradient-to-r from-[#db0455]/5 to-[#ed145b]/5 rounded-xl p-8 border border-gray-200 mb-8 hover:shadow-xl transition-shadow">
                            <div class="flex flex-col lg:flex-row items-start lg:items-center space-y-6 lg:space-y-0 lg:space-x-8">
                                <!-- Profile Image Placeholder -->
                                <div class="flex-shrink-0">
                                    <div class="w-32 h-32 bg-gradient-to-r from-[#db0455] to-[#ed145b] rounded-full flex items-center justify-center">
                                        <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                        </svg>
                                    </div>
                                </div>

                                <!-- Profile Information -->
                                <div class="flex-1">
                                    <div class="mb-4">
                                        <h3 class="text-2xl font-bold text-gray-800 mb-2">M.Sc. Federico Kuaquira Huallpa</h3>
                                        <div class="flex items-center space-x-2 mb-3">
                                            <svg class="w-5 h-5 text-[#db0455]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0H8m8 0v2a2 2 0 01-2 2H10a2 2 0 01-2-2V6m8 0H8"></path>
                                            </svg>
                                            <span class="text-lg font-semibold text-[#db0455]">Jefe de la Oficina de Cooperación y Relaciones Interinstitucionales – OCRI</span>
                                        </div>
                                    </div>

                                    <!-- Responsibilities -->
                                    <div class="bg-white rounded-lg p-4 border border-gray-200 mb-4">
                                        <h4 class="font-semibold text-gray-800 mb-2 flex items-center">
                                            <svg class="w-4 h-4 mr-2 text-[#db0455]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                                            </svg>
                                            Responsabilidades
                                        </h4>
                                        <p class="text-gray-700 text-sm">
                                            Responsable de construir comunicaciones internas y externas, y desarrollar relaciones estratégicas con aliados nacionales e internacionales para la realización de actividades de cooperación internacional, investigación y de intercambio académico.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Experience and Education -->
                            <div class="mt-6 pt-6 border-t border-gray-200">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <!-- Experience -->
                                    <div class="bg-white rounded-lg p-4 border border-gray-200">
                                        <h4 class="font-semibold text-gray-800 mb-3 flex items-center">
                                            <svg class="w-4 h-4 mr-2 text-[#db0455]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0H8m8 0v2a2 2 0 01-2 2H10a2 2 0 01-2-2V6m8 0H8"></path>
                                            </svg>
                                            Experiencia Profesional
                                        </h4>
                                        <ul class="space-y-2 text-sm text-gray-700">
                                            <li class="flex items-start space-x-2">
                                                <span class="w-1.5 h-1.5 bg-[#db0455] rounded-full mt-2 flex-shrink-0"></span>
                                                <span><strong>Docente Asociado</strong> - Facultad de Ingeniería</span>
                                            </li>
                                            <li class="flex items-start space-x-2">
                                                <span class="w-1.5 h-1.5 bg-[#db0455] rounded-full mt-2 flex-shrink-0"></span>
                                                <span>Adscrito al Departamento Académico de Ciencias Básicas</span>
                                            </li>
                                            <li class="flex items-start space-x-2">
                                                <span class="w-1.5 h-1.5 bg-[#db0455] rounded-full mt-2 flex-shrink-0"></span>
                                                <span><strong>17 años</strong> de experiencia en docencia universitaria</span>
                                            </li>
                                            <li class="flex items-start space-x-2">
                                                <span class="w-1.5 h-1.5 bg-[#db0455] rounded-full mt-2 flex-shrink-0"></span>
                                                <span>Experiencia laboral diversa</span>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- Education -->
                                    <div class="bg-white rounded-lg p-4 border border-gray-200">
                                        <h4 class="font-semibold text-gray-800 mb-3 flex items-center">
                                            <svg class="w-4 h-4 mr-2 text-[#db0455]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path>
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                                            </svg>
                                            Formación Académica
                                        </h4>
                                        <ul class="space-y-2 text-sm text-gray-700">
                                            <li class="flex items-start space-x-2">
                                                <span class="w-1.5 h-1.5 bg-[#db0455] rounded-full mt-2 flex-shrink-0"></span>
                                                <span><strong>Maestro en Ciencias de la Educación</strong> con mención Gestión Educacional - UNE – EGyV</span>
                                            </li>
                                            <li class="flex items-start space-x-2">
                                                <span class="w-1.5 h-1.5 bg-[#db0455] rounded-full mt-2 flex-shrink-0"></span>
                                                <span><strong>Licenciado en Matemática</strong> - UNSAAC</span>
                                            </li>
                                            <li class="flex items-start space-x-2">
                                                <span class="w-1.5 h-1.5 bg-[#db0455] rounded-full mt-2 flex-shrink-0"></span>
                                                <span><strong>Bachiller en Matemática</strong> - UNSAAC</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Additional Information -->
                        <div class="bg-blue-50 rounded-lg p-6 border-l-4 border-blue-500">
                            <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                                <svg class="w-6 h-6 mr-2 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Información de Contacto
                            </h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-gray-700">
                                <div>
                                    <p class="font-semibold mb-2">Horario de Atención</p>
                                    <p class="text-sm">Lunes a Viernes: 7:00 AM - 4:00 PM</p>
                                </div>
                                <div>
                                    <p class="font-semibold mb-2">Oficina</p>
                                    <p class="text-sm">Av. Jorge Chávez N°1160 - 2do piso<br>Biblioteca Central de la Ciudad Universitaria</p>
                                </div>
                            </div>
                            <div class="mt-4 pt-4 border-t border-blue-200">
                                <p class="text-sm text-gray-600">
                                    Para coordinaciones sobre cooperación internacional, convenios institucionales, programas de intercambio académico o proyectos de investigación colaborativa, puede contactar directamente con la dirección de la OCRI.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection