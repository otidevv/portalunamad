@extends('layouts.app')

@section('title', 'Bienestar Universitario - UNAMAD')

@section('content')
<!-- Hero Section -->
<div class="relative bg-gradient-to-r from-[#db0455] to-[#ed145b] py-20">
    <div class="absolute inset-0 bg-gradient-to-r from-[#db0455]/80 to-[#ed145b]/70"></div>
    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center text-white">
            <h1 class="text-4xl font-bold mb-4">Bienestar Universitario</h1>
            <p class="text-xl opacity-90">Vicerrectorado Académico - UNAMAD</p>
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
            <span class="text-[#db0455] font-medium">Bienestar Universitario</span>
        </nav>
    </div>
</div>

<!-- Main Content -->
<div class="py-8 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Sidebar Navigation -->
            @include('oficinas.bienestar.partials.navigation')

            <!-- Content Area -->
            <div class="lg:col-span-2 space-y-8">
                <!-- Descripción General -->
                <div class="bg-white rounded-lg shadow-lg p-8">
                    <div class="mb-6">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-gradient-to-r from-orange-500 to-amber-600 rounded-full flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                </svg>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-800">Dirección Universitaria de Bienestar Universitario</h2>
                        </div>
                        <p class="text-gray-600 leading-relaxed mb-4">
                            La Dirección Universitaria de Bienestar Universitario, brinda a la población estudiantil programas de asistencia social en alimentación, orientación social familiar, atención de la salud, psicología, psicopedagogía y fomento cultural y artístico a través del trabajo conjunto de sus unidades y áreas que la conforman tales como:
                        </p>

                        <ul class="space-y-2 mb-4">
                            <li class="flex items-start">
                                <div class="w-2 h-2 bg-orange-500 rounded-full mt-2 mr-3 flex-shrink-0"></div>
                                <span class="text-gray-600">Unidad de Servicios de Salud – USS</span>
                            </li>
                            <li class="flex items-start">
                                <div class="w-2 h-2 bg-orange-500 rounded-full mt-2 mr-3 flex-shrink-0"></div>
                                <span class="text-gray-600">Unidad de Bienestar Estudiantil – UBE</span>
                            </li>
                            <li class="flex items-start">
                                <div class="w-2 h-2 bg-orange-500 rounded-full mt-2 mr-3 flex-shrink-0"></div>
                                <span class="text-gray-600">Unidad de Servicios Alimentarios – USA</span>
                            </li>
                            <li class="flex items-start">
                                <div class="w-2 h-2 bg-orange-500 rounded-full mt-2 mr-3 flex-shrink-0"></div>
                                <span class="text-gray-600">Área Psicopedagógico</span>
                            </li>
                            <li class="flex items-start">
                                <div class="w-2 h-2 bg-orange-500 rounded-full mt-2 mr-3 flex-shrink-0"></div>
                                <span class="text-gray-600">Unidad de Servicio de Deporte</span>
                            </li>
                        </ul>

                        <p class="text-gray-600 leading-relaxed">
                            La DUBU, durante el periodo 2017 ha desarrollado un conjunto de actividades acordes a la naturaleza de sus funciones, las mismas que son consideradas en la programación del Plan Operativo Institucional anual y cumplidas aún a pesar de las dificultades de presupuesto, equipos y personal de apoyo.
                        </p>
                    </div>
                </div>

                <!-- Finalidad -->
                <div class="bg-white rounded-lg shadow-lg p-8">
                    <div class="mb-6">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-gradient-to-r from-indigo-500 to-blue-600 rounded-full flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800">Finalidad</h3>
                        </div>
                        <p class="text-gray-600 leading-relaxed">
                            Es la de contribuir al bienestar integral de los estudiantes con la participación multidisciplinaria del equipo que la conforma, valiéndose también de estrategias y políticas sociales de nuestro medio. Su labor asistencial ocupa temas de salud integral, académica, social y familiar. Su labor de investigación se basa en el estudio socioeconómico de la población estudiantil, detectando casos de vulnerabilidad social que le permite plantear su acción y beneficios como la gestión y/o el otorgamiento de becas integrales y parciales sea para estudios, capacitación, atención alimentaria y apoyo administrativo en reinicios de estudio y retiros de semestre de conformidad al Reglamento Académico General.
                        </p>
                    </div>
                </div>

                <!-- Objetivo -->
                <div class="bg-white rounded-lg shadow-lg p-8">
                    <div class="mb-6">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-gradient-to-r from-green-500 to-emerald-600 rounded-full flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800">Objetivo</h3>
                        </div>
                        <p class="text-gray-600 leading-relaxed">
                            Contribuir en el bienestar integral de los estudiantes universitarios con actividades de orientación, integración y participación activa en programas sociales, educativos, recreativos y culturales organizados por la Oficina Universitaria de Bienestar Universitario.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection