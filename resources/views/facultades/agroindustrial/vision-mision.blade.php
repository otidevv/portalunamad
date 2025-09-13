@extends('layouts.app')

@section('content')
<div class="bg-gray-50 min-h-screen">
    <!-- Hero Section -->
    <div class="relative text-white py-20" style="background-image: url('{{ asset('img/presentacion/presentacionbackground.jpg') }}'); background-size: cover; background-position: center; background-attachment: fixed;">
        <div class="absolute inset-0 bg-gradient-to-r from-[#db0455]/80 to-[#ed145b]/70"></div>
        <div class="relative z-10 container mx-auto px-4">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4 drop-shadow-lg">Visión y Misión</h1>
                <p class="text-xl md:text-2xl opacity-90 drop-shadow-md">Ingeniería Agroindustrial - UNAMAD</p>
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
                            <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2">Ingeniería Agroindustrial</span>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
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
            <!-- Sidebar -->
            <div class="lg:col-span-1">
                @include('facultades.agroindustrial.partials.navigation')
            </div>

            <!-- Main Content -->
            <div class="lg:col-span-2 space-y-8">
                <!-- Visión -->
                <div class="bg-white rounded-lg shadow-lg p-8 border-t-4 border-[#db0455]">
                    <div class="flex items-start space-x-4 mb-8">
                        <div class="bg-gradient-to-r from-[#db0455] to-[#ed145b] p-4 rounded-full">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 616 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-3xl font-bold text-gray-800 mb-4">Nuestra Visión</h2>
                            <div class="w-20 h-1 bg-gradient-to-r from-[#db0455] to-[#ed145b]"></div>
                        </div>
                    </div>

                    <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed">
                        <div class="bg-gradient-to-r from-[#db0455]/5 to-[#ed145b]/5 rounded-lg p-8 border-l-4 border-[#db0455]">
                            <p class="text-lg mb-6 font-medium text-gray-800">
                                A 2021, el <strong>Programa Educativo en Ingeniería Agroindustrial</strong>, es reconocido por formar profesionales integrales capacitados para vincular la cadena producción-consumo del sector agropecuario, con calidad, actitud de superación continua, valores e ideales universales, con alto sentido de respeto al medio ambiente.
                            </p>
                            <p class="text-lg text-gray-700">
                                Dando respuesta a los retos científicos y tecnológicos, así como a las necesidades sociales y económicas del país, es un programa acreditado, con cuerpos académicos consolidados y con profesores reconocidos a nivel regional, nacional e internacional.
                            </p>
                        </div>

                        <!-- Elementos Clave de la Visión -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-8">
                            <div class="bg-white rounded-lg p-4 border border-gray-200">
                                <div class="flex items-start space-x-3">
                                    <div class="bg-gradient-to-r from-[#db0455] to-[#ed145b] p-2 rounded-full">
                                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-800">Profesionales Integrales</h4>
                                        <p class="text-gray-600 text-sm">Capacitados para vincular la cadena producción-consumo</p>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-white rounded-lg p-4 border border-gray-200">
                                <div class="flex items-start space-x-3">
                                    <div class="bg-gradient-to-r from-[#db0455] to-[#ed145b] p-2 rounded-full">
                                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 713.138-3.138z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-800">Calidad y Valores</h4>
                                        <p class="text-gray-600 text-sm">Superación continua e ideales universales</p>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-white rounded-lg p-4 border border-gray-200">
                                <div class="flex items-start space-x-3">
                                    <div class="bg-gradient-to-r from-[#db0455] to-[#ed145b] p-2 rounded-full">
                                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-800">Respeto Ambiental</h4>
                                        <p class="text-gray-600 text-sm">Alto sentido de cuidado del medio ambiente</p>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-white rounded-lg p-4 border border-gray-200">
                                <div class="flex items-start space-x-3">
                                    <div class="bg-gradient-to-r from-[#db0455] to-[#ed145b] p-2 rounded-full">
                                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-800">Reconocimiento</h4>
                                        <p class="text-gray-600 text-sm">Regional, nacional e internacional</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Misión -->
                <div class="bg-white rounded-lg shadow-lg p-8 border-t-4 border-[#ed145b]">
                    <div class="flex items-start space-x-4 mb-8">
                        <div class="bg-gradient-to-r from-[#ed145b] to-[#db0455] p-4 rounded-full">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-3xl font-bold text-gray-800 mb-4">Nuestra Misión</h2>
                            <div class="w-20 h-1 bg-gradient-to-r from-[#ed145b] to-[#db0455]"></div>
                        </div>
                    </div>

                    <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed">
                        <div class="bg-gradient-to-r from-[#ed145b]/5 to-[#db0455]/5 rounded-lg p-8 border-l-4 border-[#ed145b]">
                            <p class="text-lg mb-4 font-medium text-gray-800">
                                Formar <strong>profesionistas agroindustriales emprendedores, responsables y honestos</strong>, capaces de generar, innovar, aplicar y transferir tecnologías con la finalidad de vincular y consolidar la cadena producción-consumo del sector agropecuario.
                            </p>
                            <p class="text-lg text-gray-700">
                                Así como, formular proyectos que contribuyan al desarrollo de la agroindustria, para satisfacer las necesidades de la misma a nivel nacional e internacional.
                            </p>
                        </div>

                        <!-- Componentes de la Misión -->
                        <div class="space-y-4 mt-8">
                            <div class="bg-white rounded-lg p-6 border border-gray-200 hover:shadow-lg transition-shadow">
                                <div class="flex items-start space-x-4">
                                    <div class="bg-gradient-to-r from-[#ed145b] to-[#db0455] p-3 rounded-full flex-shrink-0">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="text-xl font-bold text-gray-800 mb-2">Formación de Profesionales</h4>
                                        <p class="text-gray-700">Emprendedores, responsables y honestos en el campo agroindustrial</p>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-white rounded-lg p-6 border border-gray-200 hover:shadow-lg transition-shadow">
                                <div class="flex items-start space-x-4">
                                    <div class="bg-gradient-to-r from-[#ed145b] to-[#db0455] p-3 rounded-full flex-shrink-0">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="text-xl font-bold text-gray-800 mb-2">Innovación Tecnológica</h4>
                                        <p class="text-gray-700">Generar, innovar, aplicar y transferir tecnologías del sector agropecuario</p>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-white rounded-lg p-6 border border-gray-200 hover:shadow-lg transition-shadow">
                                <div class="flex items-start space-x-4">
                                    <div class="bg-gradient-to-r from-[#ed145b] to-[#db0455] p-3 rounded-full flex-shrink-0">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="text-xl font-bold text-gray-800 mb-2">Cadena Producción-Consumo</h4>
                                        <p class="text-gray-700">Vincular y consolidar todos los eslabones del sector agropecuario</p>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-white rounded-lg p-6 border border-gray-200 hover:shadow-lg transition-shadow">
                                <div class="flex items-start space-x-4">
                                    <div class="bg-gradient-to-r from-[#ed145b] to-[#db0455] p-3 rounded-full flex-shrink-0">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="text-xl font-bold text-gray-800 mb-2">Desarrollo Agroindustrial</h4>
                                        <p class="text-gray-700">Formular proyectos a nivel nacional e internacional</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection