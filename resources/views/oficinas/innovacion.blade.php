@extends('layouts.app')

@section('title', 'Innovación y Transferencia Tecnológica - UNAMAD')

@section('content')
<!-- Hero Section -->
<div class="relative bg-gradient-to-r from-[#db0455] to-[#ed145b] py-20">
    <div class="absolute inset-0 bg-gradient-to-r from-[#db0455]/80 to-[#ed145b]/70"></div>
    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center text-white">
            <h1 class="text-4xl font-bold mb-4">Innovación y Transferencia Tecnológica</h1>
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
            <span class="text-[#db0455] font-medium">Innovación y Transferencia Tecnológica</span>
        </nav>
    </div>
</div>

<!-- Main Content -->
<div class="py-8 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Sidebar Navigation -->
            @include('oficinas.innovacion.partials.navigation')

            <!-- Content Area -->
            <div class="lg:col-span-2 space-y-8">
                <!-- Descripción General -->
                <div class="bg-white rounded-lg shadow-lg p-8">
                    <div class="mb-6">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-gradient-to-r from-violet-500 to-purple-600 rounded-full flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                                </svg>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-800">Innovación y Transferencia Tecnológica</h2>
                        </div>
                        <p class="text-gray-600 leading-relaxed mb-4">
                            La Dirección de Innovación y Transferencia Tecnología es el órgano de línea responsable de dirigir, coordinar y promover la innovación y transferencia tecnológica en el marco de los objetivos del Sistema Nacional de Ciencia, Tecnología e Innovación (SINACTI). En la UNAMAD, promueve y gestiona la protección intelectual y registro de patentes como resultado de las actividades de investigación e innovación.
                        </p>
                        <p class="text-gray-600 leading-relaxed">
                            La Dirección de Innovación y Transferencia Tecnología establece canales de comunicación entre la universidad, empresa y el estado para gestionar fondos públicos y privados que financien el desarrollo de actividades de innovación y transferencia tecnológica. También gestiona, coordina y supervisa el repositorio institucional, los centros de innovación, centros de extensión y transferencia tecnológica de la UNAMAD.
                        </p>
                    </div>
                </div>

                <!-- Funciones -->
                <div class="bg-white rounded-lg shadow-lg p-8">
                    <div class="mb-6">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-gradient-to-r from-indigo-500 to-blue-600 rounded-full flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2H9z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5a2 2 0 012 2v6a2 2 0 01-2 2H9a2 2 0 01-2-2V7a2 2 0 012-2h4z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800">Funciones de la Dirección de Innovación y Transferencia Tecnológica</h3>
                        </div>
                        <div class="text-gray-600">
                            <p class="mb-4">Son funciones de la Dirección de Innovación y Transferencia Tecnológica, las siguientes:</p>
                            <ul class="space-y-3">
                                <li class="flex items-start">
                                    <div class="w-2 h-2 bg-violet-500 rounded-full mt-2 mr-3 flex-shrink-0"></div>
                                    <span>Promover, gestionar y ejecutar acciones de innovación en el marco de los objetivos del Sistema Nacional de Ciencia, Tecnología e Innovación (SINACTI)</span>
                                </li>
                                <li class="flex items-start">
                                    <div class="w-2 h-2 bg-violet-500 rounded-full mt-2 mr-3 flex-shrink-0"></div>
                                    <span>Promover, gestionar y ejecutar acciones de transferencia tecnológica en el marco de los objetivos del Sistema Nacional de Ciencia, Tecnología e Innovación (SINACTI).</span>
                                </li>
                                <li class="flex items-start">
                                    <div class="w-2 h-2 bg-violet-500 rounded-full mt-2 mr-3 flex-shrink-0"></div>
                                    <span>Diseñar y proponer al Vicerrectorado de Investigación las normas, reglamentos y directivas para el desarrollo de la innovación y transferencia tecnológica dirigidas a la sociedad civil, empresas y el estado.</span>
                                </li>
                                <li class="flex items-start">
                                    <div class="w-2 h-2 bg-violet-500 rounded-full mt-2 mr-3 flex-shrink-0"></div>
                                    <span>Generar capacidades para la innovación y transferencia tecnológica; orientadas a la atención de las necesidades y oportunidades del sector productivo de la región y del país.</span>
                                </li>
                                <li class="flex items-start">
                                    <div class="w-2 h-2 bg-violet-500 rounded-full mt-2 mr-3 flex-shrink-0"></div>
                                    <span>Promover y gestionar relaciones entre la universidad, la empresa, comunidades e instituciones científicas públicas o privadas, para el financiamiento de actividades de innovación a través de contratos, prestaciones de servicios y asesorías.</span>
                                </li>
                                <li class="flex items-start">
                                    <div class="w-2 h-2 bg-violet-500 rounded-full mt-2 mr-3 flex-shrink-0"></div>
                                    <span>Promover la protección del conocimiento generado en el proceso científico, tecnológico y de innovación, a través del registro de la propiedad intelectual y trámite de patentes.</span>
                                </li>
                                <li class="flex items-start">
                                    <div class="w-2 h-2 bg-violet-500 rounded-full mt-2 mr-3 flex-shrink-0"></div>
                                    <span>Diseñar, elaborar y difundir las políticas, programas e instrumentos para la transferencia tecnológica e innovación.</span>
                                </li>
                                <li class="flex items-start">
                                    <div class="w-2 h-2 bg-violet-500 rounded-full mt-2 mr-3 flex-shrink-0"></div>
                                    <span>Mapear, sistematizar y analizar las experiencias como las buenas prácticas en el diseño y ejecución de políticas, programas e instrumentos para la promoción de la transferencia tecnológica e innovación.</span>
                                </li>
                                <li class="flex items-start">
                                    <div class="w-2 h-2 bg-violet-500 rounded-full mt-2 mr-3 flex-shrink-0"></div>
                                    <span>Diseñar, implementar y evaluar programas de incentivos para el desarrollo de innovación y transferencia tecnológica.</span>
                                </li>
                                <li class="flex items-start">
                                    <div class="w-2 h-2 bg-violet-500 rounded-full mt-2 mr-3 flex-shrink-0"></div>
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