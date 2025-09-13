@extends('layouts.app')

@section('content')
<div class="bg-gray-50 min-h-screen">
    <!-- Hero Section -->
    <div class="relative text-white py-20" style="background-image: url('{{ asset('img/presentacion/presentacionbackground.jpg') }}'); background-size: cover; background-position: center; background-attachment: fixed;">
        <div class="absolute inset-0 bg-gradient-to-r from-[#db0455]/80 to-[#ed145b]/70"></div>
        <div class="relative z-10 container mx-auto px-4">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4 drop-shadow-lg">Planeamiento y Presupuesto</h1>
                <p class="text-xl md:text-2xl opacity-90 drop-shadow-md">Universidad Nacional Amazónica de Madre de Dios</p>
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
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="ml-1 text-sm font-medium text-[#db0455] md:ml-2">Planeamiento y Presupuesto</span>
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
                @include('oficinas.planeamiento.partials.navigation')
            </div>

            <!-- Main Content -->
            <div class="lg:col-span-2">
                <div class="bg-white rounded-lg shadow-lg p-8 border-t-4 border-[#db0455]">
                    <div class="flex items-start space-x-4 mb-8">
                        <div class="bg-gradient-to-r from-[#db0455] to-[#ed145b] p-4 rounded-full">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-3xl font-bold text-gray-800 mb-4">Oficina de Planeamiento y Presupuesto</h2>
                            <div class="w-20 h-1 bg-gradient-to-r from-[#db0455] to-[#ed145b]"></div>
                        </div>
                    </div>

                    <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed">
                        <p class="text-lg mb-8">
                            La <strong>Oficina de Planeamiento y Presupuesto</strong> es el órgano de asesoramiento responsable de asesorar en asuntos de formulación, ejecución y evaluación de los planes estratégicos institucionales, planes operativos, programa de inversiones, presupuesto y modernización de la gestión de la entidad; así como, en los procesos de organización de la UNAMAD.
                        </p>

                        <!-- Funciones -->
                        <div class="bg-gradient-to-r from-[#db0455]/5 to-[#ed145b]/5 rounded-lg p-6 mb-8 border-l-4 border-[#db0455]">
                            <h3 class="text-xl font-bold text-gray-800 mb-6 flex items-center">
                                <svg class="w-6 h-6 mr-2 text-[#db0455]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                </svg>
                                Funciones de la Oficina de Planeamiento y Presupuesto
                            </h3>
                            
                            <div class="space-y-4 text-gray-700">
                                <div class="flex items-start space-x-3">
                                    <div class="bg-gradient-to-r from-[#db0455] to-[#ed145b] p-1 rounded-full mt-1 flex-shrink-0">
                                        <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <p>Formular, monitorear y evaluar el Plan Estratégico Institucional, Plan de Desarrollo Institucional y el Plan Operativo Institucional de la UNAMAD.</p>
                                </div>
                                
                                <div class="flex items-start space-x-3">
                                    <div class="bg-gradient-to-r from-[#db0455] to-[#ed145b] p-1 rounded-full mt-1 flex-shrink-0">
                                        <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <p>Coordinar, preparar, elaborar y presentar el proyecto anual de presupuesto institucional en el marco de las normas vigentes y sustentarlo ante las instancias correspondientes.</p>
                                </div>
                                
                                <div class="flex items-start space-x-3">
                                    <div class="bg-gradient-to-r from-[#db0455] to-[#ed145b] p-1 rounded-full mt-1 flex-shrink-0">
                                        <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <p>Conducir el proceso de la gestión presupuestaria de la universidad en las fases de Programación Multianual, Formulación, Aprobación, Ejecución y Evaluación Presupuestaria; así como, realizar el seguimiento presupuestal, en el marco de las disposiciones vigentes que emite el Sistema Nacional de Presupuesto Público.</p>
                                </div>
                                
                                <div class="flex items-start space-x-3">
                                    <div class="bg-gradient-to-r from-[#db0455] to-[#ed145b] p-1 rounded-full mt-1 flex-shrink-0">
                                        <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <p>Conducir, articular, promover el proceso de formulación y actualización de los documentos de gestión institucional de la universidad.</p>
                                </div>
                                
                                <div class="flex items-start space-x-3">
                                    <div class="bg-gradient-to-r from-[#db0455] to-[#ed145b] p-1 rounded-full mt-1 flex-shrink-0">
                                        <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <p>Implementar el proceso de modernización institucional de la universidad, de acuerdo a las normas y lineamientos existentes sobre la materia.</p>
                                </div>
                                
                                <div class="flex items-start space-x-3">
                                    <div class="bg-gradient-to-r from-[#db0455] to-[#ed145b] p-1 rounded-full mt-1 flex-shrink-0">
                                        <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <p>Proponer la mejora y actualización de los procesos y procedimientos internos en el marco de la implementación de la gestión por proceso en la universidad.</p>
                                </div>
                                
                                <div class="flex items-start space-x-3">
                                    <div class="bg-gradient-to-r from-[#db0455] to-[#ed145b] p-1 rounded-full mt-1 flex-shrink-0">
                                        <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <p>Consolidar y elaborar la Memoria Anual Institucional, en coordinación con las distintas unidades de organización de la universidad.</p>
                                </div>
                                
                                <div class="flex items-start space-x-3">
                                    <div class="bg-gradient-to-r from-[#db0455] to-[#ed145b] p-1 rounded-full mt-1 flex-shrink-0">
                                        <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <p>Brindar asistencia técnica especializada a las distintas unidades de organización de la universidad.</p>
                                </div>
                                
                                <div class="flex items-start space-x-3">
                                    <div class="bg-gradient-to-r from-[#db0455] to-[#ed145b] p-1 rounded-full mt-1 flex-shrink-0">
                                        <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <p>Emitir opinión técnica previa en lo referente a políticas, planes, presupuesto, modernización de la gestión de la universidad y otros temas vinculadas al ámbito de su competencia.</p>
                                </div>
                                
                                <div class="flex items-start space-x-3">
                                    <div class="bg-gradient-to-r from-[#db0455] to-[#ed145b] p-1 rounded-full mt-1 flex-shrink-0">
                                        <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <p>Asegurar la aplicación de las normas del Sistema Nacional de Gestión de Inversiones.</p>
                                </div>
                                
                                <div class="flex items-start space-x-3">
                                    <div class="bg-gradient-to-r from-[#db0455] to-[#ed145b] p-1 rounded-full mt-1 flex-shrink-0">
                                        <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <p>Mantener actualizada la información registrada en los aplicativos informáticos de los sistemas administrativos o funcionales que conduce.</p>
                                </div>
                                
                                <div class="flex items-start space-x-3">
                                    <div class="bg-gradient-to-r from-[#db0455] to-[#ed145b] p-1 rounded-full mt-1 flex-shrink-0">
                                        <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <p>Proponer directivas, lineamientos o herramientas internas que coadyuven al ordenamiento de los procesos y actividades de la universidad, en el marco de las normas generales emitidas por los organismos rectores de los sistemas administrativos y del Ministerio de Educación, los cuales estén vinculados al ámbito de su competencia.</p>
                                </div>
                                
                                <div class="flex items-start space-x-3">
                                    <div class="bg-gradient-to-r from-[#db0455] to-[#ed145b] p-1 rounded-full mt-1 flex-shrink-0">
                                        <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <p>Programar, recolectar, validar, procesar, analizar y difundir la información estadística de la universidad.</p>
                                </div>
                                
                                <div class="flex items-start space-x-3">
                                    <div class="bg-gradient-to-r from-[#db0455] to-[#ed145b] p-1 rounded-full mt-1 flex-shrink-0">
                                        <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <p>Las demás funciones asignadas por el Rectorado, o aquellas que sean otorgadas por norma expresa.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Información Adicional -->
                        <div class="bg-white rounded-lg p-6 border border-gray-200">
                            <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                                <svg class="w-6 h-6 mr-2 text-[#db0455]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Información de Contacto
                            </h3>
                            <div class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-lg p-4 border-l-4 border-blue-500">
                                <p class="text-gray-700 mb-2">
                                    <strong>Horario de Atención:</strong> Lunes a Viernes de 7:00 AM a 4:00 PM
                                </p>
                                <p class="text-gray-700 mb-2">
                                    <strong>Ubicación:</strong> Ciudad Universitaria - UNAMAD
                                </p>
                                <p class="text-gray-700">
                                    Para consultas sobre planeamiento estratégico, presupuesto institucional y modernización de la gestión, contacte con nuestra oficina.
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