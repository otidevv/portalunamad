@extends('layouts.app')

@section('title', 'Instituto de Investigación - UNAMAD')

@section('content')
<!-- Hero Section -->
<div class="relative bg-gradient-to-r from-[#db0455] to-[#ed145b] py-20">
    <div class="absolute inset-0 bg-gradient-to-r from-[#db0455]/80 to-[#ed145b]/70"></div>
    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center text-white">
            <h1 class="text-4xl font-bold mb-4">Instituto de Investigación</h1>
            <p class="text-xl opacity-90">Vicerrectorado de Investigación - UNAMAD</p>
        </div>
    </div>
</div>

<!-- Breadcrumb -->
<div class="bg-white py-4 border-b">
    <div class="container mx-auto px-4">
        <nav class="flex items-center space-x-2 text-sm">
            <a href="/" class="text-gray-500 hover:text-[#db0455] transition-colors">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z"></path>
                </svg>
            </a>
            <svg class="w-3 h-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
            <a href="/oficinas" class="text-gray-500 hover:text-[#db0455] transition-colors">Oficinas</a>
            <svg class="w-3 h-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
            <span class="text-[#db0455] font-medium">Instituto de Investigación</span>
        </nav>
    </div>
</div>

<!-- Main Content -->
<div class="py-8 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Sidebar Navigation -->
            @include('oficinas.investigacion.partials.navigation')

            <!-- Content Area -->
            <div class="lg:col-span-2 space-y-8">
                <!-- Descripción General -->
                <div class="bg-white rounded-lg shadow-lg p-8">
                    <div class="mb-6">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-gradient-to-r from-indigo-500 to-purple-600 rounded-full flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2H9z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5a2 2 0 012 2v6a2 2 0 01-2 2H9a2 2 0 01-2-2V7a2 2 0 012-2h4z"></path>
                                </svg>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-800">Instituto de Investigación</h2>
                        </div>
                        <p class="text-gray-600 leading-relaxed mb-4">
                            El Instituto de Investigación, es el órgano de línea responsable de gestionar, organizar, asesorar, promover y supervisar el desarrollo de las actividades de investigación científica y desarrollo tecnológico (I+D) en el ámbito de la ciencia, tecnología, creación de grupos, redes y semilleros de investigación, acordes con la política institucional y líneas de investigación de la UNAMAD.
                        </p>
                        <p class="text-gray-600 leading-relaxed">
                            El Instituto de Investigación gestiona fondos públicos y privados para el desarrollo de actividades de I+D. El Instituto de Investigación gestiona, coordina y supervisa el fondo editorial, institutos, laboratorios y centros de investigación de la UNAMAD.
                        </p>
                    </div>
                </div>

                <!-- Funciones -->
                <div class="bg-white rounded-lg shadow-lg p-8">
                    <div class="mb-6">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-cyan-600 rounded-full flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800">Funciones del Instituto de Investigación</h3>
                        </div>
                        <div class="text-gray-600">
                            <p class="mb-4">Son funciones del Instituto de Investigación, las siguientes:</p>
                            <ul class="space-y-3">
                                <li class="flex items-start">
                                    <div class="w-2 h-2 bg-indigo-500 rounded-full mt-2 mr-3 flex-shrink-0"></div>
                                    <span>Promover el desarrollo de proyectos de investigación de acuerdo a la política dictada por el Vicerrectorado de Investigación.</span>
                                </li>
                                <li class="flex items-start">
                                    <div class="w-2 h-2 bg-indigo-500 rounded-full mt-2 mr-3 flex-shrink-0"></div>
                                    <span>Promover, coordinar, supervisar, ejecutar actividades de investigación y desarrollo (I+D) de acuerdo a la política dictada por el Vicerrectorado de Investigación.</span>
                                </li>
                                <li class="flex items-start">
                                    <div class="w-2 h-2 bg-indigo-500 rounded-full mt-2 mr-3 flex-shrink-0"></div>
                                    <span>Identificar, actualizar y promover las líneas de investigación de la UNAMAD en coordinación con las unidades de investigación de las facultades.</span>
                                </li>
                                <li class="flex items-start">
                                    <div class="w-2 h-2 bg-indigo-500 rounded-full mt-2 mr-3 flex-shrink-0"></div>
                                    <span>Formular y ejecutar planes de trabajo para gestionar el financiamiento de convocatorias a fondos concursables de la UNAMAD, o externos en el marco de las líneas de investigación, a fin de viabilizar su ejecución y resultados, previa opinión favorable de la Oficina de Planeamiento y Presupuesto.</span>
                                </li>
                                <li class="flex items-start">
                                    <div class="w-2 h-2 bg-indigo-500 rounded-full mt-2 mr-3 flex-shrink-0"></div>
                                    <span>Formular y actualizar documentos normativos institucionales (reglamentos, directivas, otros) para mejorar la gestión de la I+D, en el marco de la política general de investigación de la UNAMAD.</span>
                                </li>
                                <li class="flex items-start">
                                    <div class="w-2 h-2 bg-indigo-500 rounded-full mt-2 mr-3 flex-shrink-0"></div>
                                    <span>Gestionar el portafolio de proyectos de investigación durante todo el ciclo de vida (convocatoria, planificación, ejecución, monitoreo y control, cierre).</span>
                                </li>
                                <li class="flex items-start">
                                    <div class="w-2 h-2 bg-indigo-500 rounded-full mt-2 mr-3 flex-shrink-0"></div>
                                    <span>Promover relaciones de cooperación entre los diferentes proyectos y programas de investigación en los diferentes niveles de formación de la universidad.</span>
                                </li>
                                <li class="flex items-start">
                                    <div class="w-2 h-2 bg-indigo-500 rounded-full mt-2 mr-3 flex-shrink-0"></div>
                                    <span>Diseñar, implementar y evaluar programas de incentivos para el desarrollo de investigación.</span>
                                </li>
                                <li class="flex items-start">
                                    <div class="w-2 h-2 bg-indigo-500 rounded-full mt-2 mr-3 flex-shrink-0"></div>
                                    <span>Lanzar convocatorias de publicación científica de los resultados de las investigaciones desarrolladas en la UNAMAD.</span>
                                </li>
                                <li class="flex items-start">
                                    <div class="w-2 h-2 bg-indigo-500 rounded-full mt-2 mr-3 flex-shrink-0"></div>
                                    <span>Realizar el seguimiento y evaluación de los productos entregables de proyectos de investigación de la UNAMAD.</span>
                                </li>
                                <li class="flex items-start">
                                    <div class="w-2 h-2 bg-indigo-500 rounded-full mt-2 mr-3 flex-shrink-0"></div>
                                    <span>Administrar y mantener actualizados los sistemas informáticos y bases de datos de investigadores que ejecutan proyectos de investigación y desarrollo (I+D).</span>
                                </li>
                                <li class="flex items-start">
                                    <div class="w-2 h-2 bg-indigo-500 rounded-full mt-2 mr-3 flex-shrink-0"></div>
                                    <span>Fomentar, supervisar y brindar asistencia técnica para creación y reconocimiento de grupos, redes y semilleros de investigación en la UNAMAD.</span>
                                </li>
                                <li class="flex items-start">
                                    <div class="w-2 h-2 bg-indigo-500 rounded-full mt-2 mr-3 flex-shrink-0"></div>
                                    <span>Las demás funciones asignadas por el Vicerrectorado de Investigación, o aquellas que sean otorgadas por norma expresa.</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection