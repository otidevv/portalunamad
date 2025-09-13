@extends('layouts.app')

@section('title', 'Incubadora de Empresas - UNAMAD')

@section('content')
<!-- Hero Section -->
<div class="relative bg-gradient-to-r from-[#db0455] to-[#ed145b] py-20">
    <div class="absolute inset-0 bg-gradient-to-r from-[#db0455]/80 to-[#ed145b]/70"></div>
    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center text-white">
            <h1 class="text-4xl font-bold mb-4">Incubadora de Empresas</h1>
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
            <span class="text-[#db0455] font-medium">Incubadora de Empresas</span>
        </nav>
    </div>
</div>

<!-- Main Content -->
<div class="py-8 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Sidebar Navigation -->
            @include('oficinas.incubadora.partials.navigation')

            <!-- Content Area -->
            <div class="lg:col-span-2 space-y-8">
                <!-- Descripción General -->
                <div class="bg-white rounded-lg shadow-lg p-8">
                    <div class="mb-6">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-gradient-to-r from-cyan-500 to-teal-600 rounded-full flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-800">Incubadora de Empresas</h2>
                        </div>
                        <p class="text-gray-600 leading-relaxed mb-4">
                            La Dirección de Incubadoras de Empresas es el órgano de línea responsable de estimular la creación y el fortalecimiento de empresas innovadoras en base a ciencia y tecnología o en base al conocimiento tradicional para los estudiantes de últimos semestres y graduados. Ofrecer toda la capacitación, asistencia técnica y gerencial para lograr con éxito su constitución.
                        </p>
                        <p class="text-gray-600 leading-relaxed">
                            Corresponden a ambientes planeados para transformar ideas y proyectos en productos y servicios estimulando la creación y el fortalecimiento de empresas innovadoras y brindando además las condiciones para que las empresas reciban capacitación y asistencia técnica de modo que puedan superar barreras burocráticas en los primeros años de su constitución. En esencia es la unidad de investigación encargada de promover y gestionar la generación de la micro y pequeña empresa en la que los estudiantes son propietarios.
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
                            <h3 class="text-xl font-bold text-gray-800">Funciones de la Dirección de Incubadoras de Empresas</h3>
                        </div>
                        <div class="text-gray-600">
                            <p class="mb-4">Son funciones de la Dirección de Incubadoras de Empresas, las siguientes:</p>
                            <ul class="space-y-3">
                                <li class="flex items-start">
                                    <div class="w-2 h-2 bg-cyan-500 rounded-full mt-2 mr-3 flex-shrink-0"></div>
                                    <span>Formular y proponer lineamientos y políticas respecto a la metodología de emprendimiento e incubación de empresas en la universidad.</span>
                                </li>
                                <li class="flex items-start">
                                    <div class="w-2 h-2 bg-cyan-500 rounded-full mt-2 mr-3 flex-shrink-0"></div>
                                    <span>Promover la iniciativa de los estudiantes para la creación de pequeñas y microempresas de propiedad de los estudiantes.</span>
                                </li>
                                <li class="flex items-start">
                                    <div class="w-2 h-2 bg-cyan-500 rounded-full mt-2 mr-3 flex-shrink-0"></div>
                                    <span>Realizar las convocatorias a fondos concursables de emprendimiento, así como su seguimiento, monitoreo y evaluación.</span>
                                </li>
                                <li class="flex items-start">
                                    <div class="w-2 h-2 bg-cyan-500 rounded-full mt-2 mr-3 flex-shrink-0"></div>
                                    <span>Difundir las actividades de emprendimiento empresarial desarrolladas por los estudiantes de la universidad.</span>
                                </li>
                                <li class="flex items-start">
                                    <div class="w-2 h-2 bg-cyan-500 rounded-full mt-2 mr-3 flex-shrink-0"></div>
                                    <span>Desarrollar los planes de competitividad en lo que se refiere a la innovación empresarial, mejorar de la gestión y formación de las personas.</span>
                                </li>
                                <li class="flex items-start">
                                    <div class="w-2 h-2 bg-cyan-500 rounded-full mt-2 mr-3 flex-shrink-0"></div>
                                    <span>Gestionar el acceso a financiamiento con fondos de cooperación nacional y/o internacional para el desarrollo de propuestas o ideas de negocio.</span>
                                </li>
                                <li class="flex items-start">
                                    <div class="w-2 h-2 bg-cyan-500 rounded-full mt-2 mr-3 flex-shrink-0"></div>
                                    <span>Brindar asesoría técnica especializada para la generación, desarrollo y consolidación de empresas en innovación y desarrollo empresarial.</span>
                                </li>
                                <li class="flex items-start">
                                    <div class="w-2 h-2 bg-cyan-500 rounded-full mt-2 mr-3 flex-shrink-0"></div>
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