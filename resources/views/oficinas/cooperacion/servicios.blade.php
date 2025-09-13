@extends('layouts.app')

@section('content')
<div class="bg-gray-50 min-h-screen">
    <!-- Hero Section -->
    <div class="relative text-white py-20" style="background-image: url('{{ asset('img/presentacion/presentacionbackground.jpg') }}'); background-size: cover; background-position: center; background-attachment: fixed;">
        <div class="absolute inset-0 bg-gradient-to-r from-[#db0455]/80 to-[#ed145b]/70"></div>
        <div class="relative z-10 container mx-auto px-4">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4 drop-shadow-lg">Servicios</h1>
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
                            <span class="ml-1 text-sm font-medium text-[#db0455] md:ml-2">Servicios</span>
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
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0H8m8 0v2a2 2 0 01-2 2H10a2 2 0 01-2-2V6m8 0H8"></path>
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-3xl font-bold text-gray-800 mb-4">Servicios</h2>
                            <div class="w-20 h-1 bg-gradient-to-r from-[#db0455] to-[#ed145b]"></div>
                        </div>
                    </div>

                    <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed">
                        <p class="text-lg mb-8">
                            Los servicios que brinda la Oficina de Cooperación y Relaciones Internacionales de la Universidad Nacional Amazónica de Madre de Dios son:
                        </p>

                        <!-- Services Grid -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                            <!-- Asistencia Técnica y Capacitación -->
                            <div class="bg-gradient-to-r from-[#db0455]/5 to-[#ed145b]/5 rounded-xl p-6 border border-gray-200 hover:shadow-lg transition-shadow">
                                <div class="flex items-start space-x-4">
                                    <div class="bg-gradient-to-r from-[#db0455] to-[#ed145b] p-3 rounded-full flex-shrink-0">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="text-xl font-bold text-gray-800 mb-3">Asistencia Técnica y Capacitación</h3>
                                        <p class="text-gray-600 text-sm leading-relaxed">
                                            Brindamos apoyo técnico especializado y programas de capacitación para fortalecer las competencias del personal académico y administrativo en temas de cooperación internacional y gestión de proyectos.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Asesoría y Consultoría -->
                            <div class="bg-gradient-to-r from-[#ed145b]/5 to-[#db0455]/5 rounded-xl p-6 border border-gray-200 hover:shadow-lg transition-shadow">
                                <div class="flex items-start space-x-4">
                                    <div class="bg-gradient-to-r from-[#ed145b] to-[#db0455] p-3 rounded-full flex-shrink-0">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="text-xl font-bold text-gray-800 mb-3">Asesoría y Consultoría</h3>
                                        <p class="text-gray-600 text-sm leading-relaxed">
                                            Ofrecemos asesoramiento especializado en formulación de proyectos, búsqueda de financiamiento internacional, y consultoría en temas de cooperación académica y científica.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Convenios -->
                            <div class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-xl p-6 border border-blue-200 hover:shadow-lg transition-shadow">
                                <div class="flex items-start space-x-4">
                                    <div class="bg-gradient-to-r from-blue-500 to-indigo-600 p-3 rounded-full flex-shrink-0">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="text-xl font-bold text-gray-800 mb-3">Convenios</h3>
                                        <p class="text-gray-600 text-sm leading-relaxed">
                                            Gestionamos la suscripción, seguimiento y renovación de convenios interinstitucionales con universidades, organizaciones y entidades nacionales e internacionales para el desarrollo de actividades académicas y de investigación.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Programas de Movilidad -->
                            <div class="bg-gradient-to-r from-green-50 to-emerald-50 rounded-xl p-6 border border-green-200 hover:shadow-lg transition-shadow">
                                <div class="flex items-start space-x-4">
                                    <div class="bg-gradient-to-r from-green-500 to-emerald-600 p-3 rounded-full flex-shrink-0">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 616 0z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="text-xl font-bold text-gray-800 mb-3">Programas de Movilidad</h3>
                                        <p class="text-gray-600 text-sm leading-relaxed">
                                            Coordinamos programas de intercambio académico, movilidad estudiantil y docente, becas de estudio, y oportunidades de investigación en instituciones nacionales e internacionales.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Eventos Académicos -->
                            <div class="bg-gradient-to-r from-purple-50 to-violet-50 rounded-xl p-6 border border-purple-200 hover:shadow-lg transition-shadow md:col-span-2">
                                <div class="flex items-start space-x-4">
                                    <div class="bg-gradient-to-r from-purple-500 to-violet-600 p-3 rounded-full flex-shrink-0">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="text-xl font-bold text-gray-800 mb-3">Eventos Académicos</h3>
                                        <p class="text-gray-600 text-sm leading-relaxed">
                                            Organizamos y facilitamos la participación en conferencias, seminarios, talleres, simposios y otros eventos académicos de carácter nacional e internacional que fortalezcan el intercambio de conocimientos y la colaboración científica.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Additional Information -->
                        <div class="bg-gradient-to-r from-[#db0455]/5 to-[#ed145b]/5 rounded-lg p-6 border-l-4 border-[#db0455]">
                            <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                                <svg class="w-6 h-6 mr-2 text-[#db0455]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                ¿Cómo acceder a nuestros servicios?
                            </h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="bg-white rounded-lg p-4 border border-gray-200">
                                    <h4 class="font-semibold text-gray-800 mb-2 flex items-center">
                                        <svg class="w-4 h-4 mr-2 text-[#db0455]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        Horario de Atención
                                    </h4>
                                    <p class="text-sm text-gray-600">Lunes a Viernes<br>7:00 AM - 4:00 PM</p>
                                </div>
                                <div class="bg-white rounded-lg p-4 border border-gray-200">
                                    <h4 class="font-semibold text-gray-800 mb-2 flex items-center">
                                        <svg class="w-4 h-4 mr-2 text-[#db0455]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                        </svg>
                                        Contacto
                                    </h4>
                                    <p class="text-sm text-gray-600">ocri@unamad.edu.pe<br>+51 975 845 006</p>
                                </div>
                            </div>
                            <div class="mt-4 pt-4 border-t border-gray-200">
                                <p class="text-sm text-gray-600">
                                    Para solicitar cualquiera de nuestros servicios, puede contactarnos directamente o visitar nuestras oficinas ubicadas en el 2do piso de la Biblioteca Central de la Ciudad Universitaria.
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