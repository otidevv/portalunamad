@extends('layouts.app')

@section('title', 'Perfil Profesional - Psicología - UNAMAD')

@section('content')
<div class="bg-gray-50 min-h-screen">
    <!-- Hero Section -->
    <div class="relative text-white py-20" style="background-image: url('{{ asset('img/presentacion/presentacionbackground.jpg') }}'); background-size: cover; background-position: center; background-attachment: fixed;">
        <div class="absolute inset-0 bg-gradient-to-r from-[#db0455]/80 to-[#ed145b]/70"></div>
        <div class="relative z-10 container mx-auto px-4">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4 drop-shadow-lg">Perfil Profesional</h1>
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
            <!-- Main Content -->
            <div class="lg:col-span-2">
                <div class="bg-white rounded-lg shadow-lg p-8 border-t-4 border-[#db0455]">
                    <div class="flex items-start space-x-4 mb-8">
                        <div class="bg-gradient-to-r from-blue-500 to-cyan-600 p-4 rounded-full">
                            <svg aria-hidden="true" focusable="false" class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
                            El egresado de la Carrera Profesional de <strong>Psicología</strong> de la UNAMAD ha desarrollado las bases fundamentales de las competencias generales y específicas de su formación, así como las habilidades para <strong>reflexionar críticamente</strong> sobre su entorno y afrontar con solvencia los desafíos de su ejercicio profesional.
                        </p>

                        <!-- Competencias Genéricas -->
                        <h3 class="text-xl font-bold text-gray-800 mb-6 flex items-center">
                            <svg aria-hidden="true" focusable="false" class="w-6 h-6 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Competencias Genéricas
                        </h3>
                        <ol class="space-y-4 mb-10">
                            <li class="bg-gradient-to-r from-blue-50 to-cyan-50 rounded-lg p-5 border-l-4 border-blue-500">
                                <div class="flex items-start space-x-3">
                                    <span class="bg-blue-600 text-white font-bold text-xs px-3 py-1 rounded-full flex-shrink-0">CG1</span>
                                    <p class="text-gray-700">Colabora en equipos multidisciplinarios, demostrando creatividad e innovación para diseñar y desarrollar propuestas de emprendimiento sostenibles que generen impacto positivo en la comunidad.</p>
                                </div>
                            </li>
                            <li class="bg-gradient-to-r from-blue-50 to-cyan-50 rounded-lg p-5 border-l-4 border-blue-500">
                                <div class="flex items-start space-x-3">
                                    <span class="bg-blue-600 text-white font-bold text-xs px-3 py-1 rounded-full flex-shrink-0">CG2</span>
                                    <p class="text-gray-700">Comunica ideas en forma oral y escrita de manera efectiva, adaptando el mensaje a diversas audiencias y contextos para garantizar su claridad y comprensión.</p>
                                </div>
                            </li>
                            <li class="bg-gradient-to-r from-blue-50 to-cyan-50 rounded-lg p-5 border-l-4 border-blue-500">
                                <div class="flex items-start space-x-3">
                                    <span class="bg-blue-600 text-white font-bold text-xs px-3 py-1 rounded-full flex-shrink-0">CG3</span>
                                    <p class="text-gray-700">Aplica conocimientos matemáticos, estadísticos y científicos mediante el uso de herramientas y razonamiento lógico en la resolución de problemas, para proponer soluciones efectivas, analizando fenómenos naturales basados en evidencia.</p>
                                </div>
                            </li>
                            <li class="bg-gradient-to-r from-blue-50 to-cyan-50 rounded-lg p-5 border-l-4 border-blue-500">
                                <div class="flex items-start space-x-3">
                                    <span class="bg-blue-600 text-white font-bold text-xs px-3 py-1 rounded-full flex-shrink-0">CG4</span>
                                    <p class="text-gray-700">Aplica principios éticos en la promoción de la paz y la justicia social, integrando conocimientos sobre ecología y diversidad cultural, para contribuir al desarrollo sostenible de la región amazónica.</p>
                                </div>
                            </li>
                        </ol>

                        <!-- Competencias Específicas -->
                        <h3 class="text-xl font-bold text-gray-800 mb-6 flex items-center">
                            <svg aria-hidden="true" focusable="false" class="w-6 h-6 mr-2 text-[#db0455]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                            </svg>
                            Competencias Específicas y de Especialidad
                        </h3>
                        <ol class="space-y-6">
                            <!-- CE1 -->
                            <li class="bg-white rounded-lg p-6 border border-gray-200 hover:shadow-lg transition-shadow">
                                <div class="flex items-start space-x-4">
                                    <div class="bg-gradient-to-r from-blue-500 to-cyan-600 p-3 rounded-full flex-shrink-0">
                                        <svg aria-hidden="true" focusable="false" class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="flex items-center flex-wrap gap-2 mb-2">
                                            <span class="bg-blue-600 text-white font-bold text-xs px-3 py-1 rounded-full">CE1</span>
                                            <h4 class="text-lg font-bold text-gray-800">Evaluación, Diagnóstico y Tratamiento</h4>
                                        </div>
                                        <p class="text-gray-700">Realiza la evaluación, diagnóstico, tratamiento integral y seguimiento postratamiento psicológico a personas (por curso de vida), grupos familiares o poblaciones específicas, aplicando ciencia y tecnología, teorías psicológicas y enfoques de derecho, género e interculturalidad en el ámbito bio-psico-social y espiritual, de acuerdo con el modelo de cuidado integral de salud y el modelo comunitario de salud mental, actuando con ética y profesionalismo para afrontar situaciones de riesgo o recaídas y mantener los logros del tratamiento.</p>
                                    </div>
                                </div>
                            </li>

                            <!-- CE2 -->
                            <li class="bg-white rounded-lg p-6 border border-gray-200 hover:shadow-lg transition-shadow">
                                <div class="flex items-start space-x-4">
                                    <div class="bg-gradient-to-r from-cyan-500 to-sky-600 p-3 rounded-full flex-shrink-0">
                                        <svg aria-hidden="true" focusable="false" class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="flex items-center flex-wrap gap-2 mb-2">
                                            <span class="bg-cyan-600 text-white font-bold text-xs px-3 py-1 rounded-full">CE2</span>
                                            <h4 class="text-lg font-bold text-gray-800">Rehabilitación Psicosocial</h4>
                                        </div>
                                        <p class="text-gray-700">Realiza acciones que contribuyan a la rehabilitación psicosocial de la persona, a fin de lograr niveles de funcionalidad en su desempeño y adaptación familiar y social, considerando el modelo de cuidado integral de salud.</p>
                                    </div>
                                </div>
                            </li>

                            <!-- CE3 -->
                            <li class="bg-white rounded-lg p-6 border border-gray-200 hover:shadow-lg transition-shadow">
                                <div class="flex items-start space-x-4">
                                    <div class="bg-gradient-to-r from-sky-500 to-indigo-600 p-3 rounded-full flex-shrink-0">
                                        <svg aria-hidden="true" focusable="false" class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="flex items-center flex-wrap gap-2 mb-2">
                                            <span class="bg-sky-600 text-white font-bold text-xs px-3 py-1 rounded-full">CE3</span>
                                            <h4 class="text-lg font-bold text-gray-800">Educación y Promoción de la Salud</h4>
                                        </div>
                                        <p class="text-gray-700">Promueve cambios en el comportamiento individual, colectivo y del entorno a través de la educación para la salud y la difusión de conocimientos psicológicos, para la generación de condiciones que conserven y mejoren la salud y fomenten el bienestar de la persona, familia y comunidad, considerando el modelo de cuidado integral de salud.</p>
                                    </div>
                                </div>
                            </li>

                            <!-- CE4 -->
                            <li class="bg-white rounded-lg p-6 border border-gray-200 hover:shadow-lg transition-shadow">
                                <div class="flex items-start space-x-4">
                                    <div class="bg-gradient-to-r from-indigo-500 to-blue-600 p-3 rounded-full flex-shrink-0">
                                        <svg aria-hidden="true" focusable="false" class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="flex items-center flex-wrap gap-2 mb-2">
                                            <span class="bg-indigo-600 text-white font-bold text-xs px-3 py-1 rounded-full">CE4</span>
                                            <h4 class="text-lg font-bold text-gray-800">Prevención en Psicología</h4>
                                        </div>
                                        <p class="text-gray-700">Desarrolla acciones de prevención en psicología para disminuir los riesgos y daños relacionados con la salud mental y problemas psicosociales que afectan la salud individual y pública en ámbitos poblacionales, ambientales y ocupacionales, para contribuir al desarrollo sostenible y al bienestar de la comunidad, considerando el modelo de cuidado integral de salud.</p>
                                    </div>
                                </div>
                            </li>

                            <!-- CE5 -->
                            <li class="bg-white rounded-lg p-6 border border-gray-200 hover:shadow-lg transition-shadow">
                                <div class="flex items-start space-x-4">
                                    <div class="bg-gradient-to-r from-blue-600 to-cyan-500 p-3 rounded-full flex-shrink-0">
                                        <svg aria-hidden="true" focusable="false" class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="flex items-center flex-wrap gap-2 mb-2">
                                            <span class="bg-blue-700 text-white font-bold text-xs px-3 py-1 rounded-full">CE5</span>
                                            <h4 class="text-lg font-bold text-gray-800">Ejercicio Profesional en el Sistema de Salud</h4>
                                        </div>
                                        <p class="text-gray-700">Ejerce su profesión en concordancia con el sistema de salud del Perú y el modelo de cuidado integral de salud, asumiendo un rol transformador y facilitador del acceso equitativo a los servicios de salud, reconociendo la salud como derecho inalienable e inherente a todo ser humano, e integrando la investigación, el desarrollo y la innovación para optimizar y generar soluciones en su práctica profesional.</p>
                                    </div>
                                </div>
                            </li>
                        </ol>

                        <!-- Resumen del Perfil -->
                        <div class="mt-8 p-6 bg-gradient-to-r from-gray-50 to-gray-100 rounded-lg border border-gray-200">
                            <p class="text-gray-700 text-center font-medium">
                                El egresado de Psicología de la UNAMAD integra <strong>sólidos conocimientos científicos</strong>, valores éticos y compromiso social, con un enfoque humanista, comunitario e intercultural para promover la salud mental y el bienestar de las personas, familias y comunidades.
                            </p>
                        </div>
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
