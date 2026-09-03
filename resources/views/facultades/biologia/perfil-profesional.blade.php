@extends('layouts.app')

@section('content')
<div class="bg-gray-50 min-h-screen">
    <!-- Hero Section -->
    <div class="relative text-white py-20" style="background-image: url('{{ asset('img/presentacion/presentacionbackground.jpg') }}'); background-size: cover; background-position: center; background-attachment: fixed;">
        <div class="absolute inset-0 bg-gradient-to-r from-[#db0455]/80 to-[#db0455]/70"></div>
        <div class="relative z-10 container mx-auto px-4">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4 drop-shadow-lg">Perfil Profesional</h1>
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
                @include('facultades.biologia.partials.navigation')
            </div>

            <!-- Main Content -->
            <div class="lg:col-span-2">
                <div class="bg-white rounded-lg shadow-lg p-8 border-t-4 border-[#db0455]">
                    <div class="flex items-start space-x-4 mb-8">
                        <div class="bg-gradient-to-r from-green-500 to-emerald-600 p-4 rounded-full">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-3xl font-bold text-gray-800 mb-4">Perfil Profesional del Egresado</h2>
                            <div class="w-20 h-1 bg-gradient-to-r from-green-500 to-emerald-600"></div>
                        </div>
                    </div>

                    <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed">
                        <p class="text-lg mb-8">
                            El egresado de la carrera profesional de <strong>Biología</strong> está formado con sólido conocimiento científico, ético y humanístico, para evaluar la diversidad biológica, promover su conservación y el manejo sostenible de los recursos naturales, así como para investigar, innovar y transferir conocimientos en beneficio de la sociedad y el ambiente.
                        </p>

                        <h3 class="text-xl font-bold text-gray-800 mb-6 flex items-center">
                            <svg class="w-6 h-6 mr-2 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            El biólogo egresado de la UNAMAD está capacitado para:
                        </h3>

                        <!-- Capacidades -->
                        <div class="space-y-4">
                            <div class="bg-gradient-to-r from-green-50 to-emerald-50 rounded-lg p-6 border-l-4 border-green-500 hover:shadow-lg transition-shadow">
                                <div class="flex items-start space-x-4">
                                    <div class="bg-gradient-to-r from-green-500 to-emerald-600 p-3 rounded-full flex-shrink-0">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="text-lg font-bold text-gray-800 mb-2">Investigar y Gestionar Recursos Biológicos</h4>
                                        <p class="text-gray-700">En la Amazonía, con un enfoque en la sostenibilidad y conservación.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-gradient-to-r from-emerald-50 to-teal-50 rounded-lg p-6 border-l-4 border-emerald-500 hover:shadow-lg transition-shadow">
                                <div class="flex items-start space-x-4">
                                    <div class="bg-gradient-to-r from-emerald-500 to-teal-600 p-3 rounded-full flex-shrink-0">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="text-lg font-bold text-gray-800 mb-2">Desarrollar Proyectos de Investigación</h4>
                                        <p class="text-gray-700">En diversas áreas como hidrobiología, microbiología, ecología y biotecnología.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-gradient-to-r from-teal-50 to-cyan-50 rounded-lg p-6 border-l-4 border-teal-500 hover:shadow-lg transition-shadow">
                                <div class="flex items-start space-x-4">
                                    <div class="bg-gradient-to-r from-teal-500 to-cyan-600 p-3 rounded-full flex-shrink-0">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="text-lg font-bold text-gray-800 mb-2">Asesorar en Políticas Públicas Ambientales</h4>
                                        <p class="text-gray-700">Colaborando con organismos gubernamentales y no gubernamentales en la conservación de la biodiversidad y salubridad humana.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-gradient-to-r from-green-50 to-emerald-50 rounded-lg p-6 border-l-4 border-green-600 hover:shadow-lg transition-shadow">
                                <div class="flex items-start space-x-4">
                                    <div class="bg-gradient-to-r from-green-600 to-emerald-700 p-3 rounded-full flex-shrink-0">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="text-lg font-bold text-gray-800 mb-2">Dirigir Proyectos Productivos</h4>
                                        <p class="text-gray-700">Que involucren el uso de biotecnología y el manejo sostenible de recursos naturales.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-gradient-to-r from-emerald-50 to-green-50 rounded-lg p-6 border-l-4 border-emerald-600 hover:shadow-lg transition-shadow">
                                <div class="flex items-start space-x-4">
                                    <div class="bg-gradient-to-r from-emerald-600 to-green-700 p-3 rounded-full flex-shrink-0">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="text-lg font-bold text-gray-800 mb-2">Impartir Educación Ambiental</h4>
                                        <p class="text-gray-700">Contribuyendo a la sensibilización sobre la importancia de la biodiversidad amazónica.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Resumen del Perfil -->
                        <div class="mt-8 p-6 bg-gradient-to-r from-gray-50 to-gray-100 rounded-lg border border-gray-200">
                            <p class="text-gray-700 text-center font-medium">
                                Este perfil integral permite al biólogo de la UNAMAD desenvolverse con <strong>sólidos conocimientos científicos</strong>, valores éticos y compromiso ambiental, liderando procesos de investigación, conservación y desarrollo sostenible de la Amazonía.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
