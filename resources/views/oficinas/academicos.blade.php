@extends('layouts.app')

@section('title', 'Oficina de Asuntos Académicos - UNAMAD')

@section('content')
<!-- Hero Section -->
<div class="relative bg-gradient-to-r from-[#db0455] to-[#ed145b] py-20">
    <div class="absolute inset-0 bg-gradient-to-r from-[#db0455]/80 to-[#ed145b]/70"></div>
    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center text-white">
            <h1 class="text-4xl font-bold mb-4">Oficina de Asuntos Académicos</h1>
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
            <span class="text-[#db0455] font-medium">Oficina de Asuntos Académicos</span>
        </nav>
    </div>
</div>

<!-- Main Content -->
<div class="py-8 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Sidebar Navigation -->
            @include('oficinas.academicos.partials.navigation')

            <!-- Content Area -->
            <div class="lg:col-span-2 space-y-8">
                <!-- Descripción General -->
                <div class="bg-white rounded-lg shadow-lg p-8">
                    <div class="mb-6">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-gradient-to-r from-green-500 to-emerald-600 rounded-full flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                </svg>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-800">Oficina de Asuntos Académicos</h2>
                        </div>
                        <p class="text-gray-600 leading-relaxed">
                            La Dirección de Asuntos Académicos es el órgano de línea responsable de organizar el proceso de matrícula, actas de evaluación, archivos académicos, certificados; así como registrar y custodiar la información académica de la Universidad, Además, de mantener vinculación permanente con sus egresados para que participen y se enriquezcan de la actividad académica, de investigación y sociocultural; así como establecer vínculos con entidades del sector público y privado a fin de retroalimentar y conocer la inserción de sus egresados en el mercado laboral.
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
                            <h3 class="text-xl font-bold text-gray-800">Funciones de la Dirección de Asuntos Académicos</h3>
                        </div>
                        <div class="text-gray-600">
                            <p class="mb-4">Son funciones de la Dirección de Asuntos Académicos, las siguientes:</p>
                            <ul class="space-y-3">
                                <li class="flex items-start">
                                    <div class="w-2 h-2 bg-green-500 rounded-full mt-2 mr-3 flex-shrink-0"></div>
                                    <span>Organizar y sistematizar la información académica de las facultades y programas académicos.</span>
                                </li>
                                <li class="flex items-start">
                                    <div class="w-2 h-2 bg-green-500 rounded-full mt-2 mr-3 flex-shrink-0"></div>
                                    <span>Coordinar y ejecutar las acciones de matrícula, registro, estadística y otras relacionadas con el funcionamiento académico de la universidad.</span>
                                </li>
                                <li class="flex items-start">
                                    <div class="w-2 h-2 bg-green-500 rounded-full mt-2 mr-3 flex-shrink-0"></div>
                                    <span>Organizar y conducir el archivo general de historiales académicos de los estudiantes regulares y egresados, registrar y archivar las actas de evaluación académica.</span>
                                </li>
                                <li class="flex items-start">
                                    <div class="w-2 h-2 bg-green-500 rounded-full mt-2 mr-3 flex-shrink-0"></div>
                                    <span>Procesar y preservar la información académica en los sistemas informáticos y físicos para la emisión de informes académicos.</span>
                                </li>
                                <li class="flex items-start">
                                    <div class="w-2 h-2 bg-green-500 rounded-full mt-2 mr-3 flex-shrink-0"></div>
                                    <span>Mantener y actualizar el registro de planes de estudios de las especialidades de la universidad para la emisión de informes.</span>
                                </li>
                                <li class="flex items-start">
                                    <div class="w-2 h-2 bg-green-500 rounded-full mt-2 mr-3 flex-shrink-0"></div>
                                    <span>Diseñar, proponer, gestionar y asegurar la gestión efectiva del Sistema de Seguimiento al Graduado.</span>
                                </li>
                                <li class="flex items-start">
                                    <div class="w-2 h-2 bg-green-500 rounded-full mt-2 mr-3 flex-shrink-0"></div>
                                    <span>Gestionar el seguimiento de los graduados por carrera profesional, para proponer su inserción en el mercado laboral.</span>
                                </li>
                                <li class="flex items-start">
                                    <div class="w-2 h-2 bg-green-500 rounded-full mt-2 mr-3 flex-shrink-0"></div>
                                    <span>Proponer documentos, protocolos, directivas, manuales, entre otros, para la administración y funcionamiento de los servicios que se brinda al estudiante.</span>
                                </li>
                                <li class="flex items-start">
                                    <div class="w-2 h-2 bg-green-500 rounded-full mt-2 mr-3 flex-shrink-0"></div>
                                    <span>Elaborar y proponer al Vicerrectorado Académico el calendario académico de la universidad.</span>
                                </li>
                                <li class="flex items-start">
                                    <div class="w-2 h-2 bg-green-500 rounded-full mt-2 mr-3 flex-shrink-0"></div>
                                    <span>Proponer normas generales de evaluación pedagógica para estudiantes y docentes de la Universidad.</span>
                                </li>
                                <li class="flex items-start">
                                    <div class="w-2 h-2 bg-green-500 rounded-full mt-2 mr-3 flex-shrink-0"></div>
                                    <span>Las demás funciones asignadas por el Vicerrectorado Académico, o aquellas que sean otorgadas por norma expresa.</span>
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