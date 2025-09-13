@extends('layouts.app')

@section('content')
<div class="bg-gray-50 min-h-screen">
    <!-- Hero Section -->
    <div class="relative text-white py-20" style="background-image: url('{{ asset('img/presentacion/presentacionbackground.jpg') }}'); background-size: cover; background-position: center; background-attachment: fixed;">
        <div class="absolute inset-0 bg-gradient-to-r from-[#db0455]/80 to-[#ed145b]/70"></div>
        <div class="relative z-10 container mx-auto px-4">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4 drop-shadow-lg">Dirección de Administración</h1>
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
                            <span class="ml-1 text-sm font-medium text-[#db0455] md:ml-2">Dirección de Administración</span>
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
                @include('oficinas.administracion.partials.navigation')
            </div>

            <!-- Main Content -->
            <div class="lg:col-span-2">
                <div class="bg-white rounded-lg shadow-lg p-8 border-t-4 border-[#db0455]">
                    <div class="flex items-start space-x-4 mb-8">
                        <div class="bg-gradient-to-r from-[#db0455] to-[#ed145b] p-4 rounded-full">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-3xl font-bold text-gray-800 mb-4">Dirección General de Administración</h2>
                            <div class="w-20 h-1 bg-gradient-to-r from-[#db0455] to-[#ed145b]"></div>
                        </div>
                    </div>

                    <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed">
                        <p class="text-lg mb-8">
                            La <strong>Dirección General de Administración</strong> es el órgano de apoyo responsable de conducir los procesos de administración de los recursos humanos, materiales, infraestructuras y financieros que garanticen servicios de calidad, equidad, pertinencia y satisfacer las necesidades de las unidades de organización de la universidad, en el marco normativo de los sistemas administrativos que dirige.
                        </p>

                        <!-- Funciones -->
                        <div class="bg-gradient-to-r from-[#db0455]/5 to-[#ed145b]/5 rounded-lg p-6 mb-8 border-l-4 border-[#db0455]">
                            <h3 class="text-xl font-bold text-gray-800 mb-6 flex items-center">
                                <svg class="w-6 h-6 mr-2 text-[#db0455]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2H9z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5a2 2 0 012 2v6a2 2 0 01-2 2h-2a2 2 0 01-2-2V7a2 2 0 012-2h2z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                Funciones de la Dirección General de Administración
                            </h3>
                            
                            <div class="space-y-4 text-gray-700">
                                <div class="flex items-start space-x-3">
                                    <div class="bg-gradient-to-r from-[#db0455] to-[#ed145b] p-1 rounded-full mt-1 flex-shrink-0">
                                        <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <p>Organizar, planificar, coordinar y supervisar las actividades administrativas de la UNAMAD en función de los requerimientos académicos.</p>
                                </div>
                                
                                <div class="flex items-start space-x-3">
                                    <div class="bg-gradient-to-r from-[#db0455] to-[#ed145b] p-1 rounded-full mt-1 flex-shrink-0">
                                        <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <p>Gestionar, administrar, conducir y supervisar, el eficiente y buen uso de los recursos humanos, económicos, financieros y patrimoniales de la UNAMAD.</p>
                                </div>
                                
                                <div class="flex items-start space-x-3">
                                    <div class="bg-gradient-to-r from-[#db0455] to-[#ed145b] p-1 rounded-full mt-1 flex-shrink-0">
                                        <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <p>Coordinar la elaboración del presupuesto general de la UNAMAD.</p>
                                </div>
                                
                                <div class="flex items-start space-x-3">
                                    <div class="bg-gradient-to-r from-[#db0455] to-[#ed145b] p-1 rounded-full mt-1 flex-shrink-0">
                                        <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <p>Proponer al Rector las políticas y normas internas de carácter administrativo.</p>
                                </div>
                                
                                <div class="flex items-start space-x-3">
                                    <div class="bg-gradient-to-r from-[#db0455] to-[#ed145b] p-1 rounded-full mt-1 flex-shrink-0">
                                        <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <p>Promover la capacitación y el perfeccionamiento de los servidores no docentes de la universidad.</p>
                                </div>
                                
                                <div class="flex items-start space-x-3">
                                    <div class="bg-gradient-to-r from-[#db0455] to-[#ed145b] p-1 rounded-full mt-1 flex-shrink-0">
                                        <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <p>Conducir y evaluar los sistemas administrativos de contabilidad, tesorería, abastecimiento, gestión de recursos humanos; así como la ejecución de las inversiones, servicios generales, mantenimiento y patrimonio.</p>
                                </div>
                                
                                <div class="flex items-start space-x-3">
                                    <div class="bg-gradient-to-r from-[#db0455] to-[#ed145b] p-1 rounded-full mt-1 flex-shrink-0">
                                        <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <p>Emitir opinión técnica en materia de su competencia.</p>
                                </div>
                                
                                <div class="flex items-start space-x-3">
                                    <div class="bg-gradient-to-r from-[#db0455] to-[#ed145b] p-1 rounded-full mt-1 flex-shrink-0">
                                        <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <p>Formular y proponer documentos normativos para la implementación de los sistemas administrativos en la institución.</p>
                                </div>
                                
                                <div class="flex items-start space-x-3">
                                    <div class="bg-gradient-to-r from-[#db0455] to-[#ed145b] p-1 rounded-full mt-1 flex-shrink-0">
                                        <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <p>Establecer y mantener el Sistema de Control Interno conforme a las normas legales vigentes.</p>
                                </div>
                                
                                <div class="flex items-start space-x-3">
                                    <div class="bg-gradient-to-r from-[#db0455] to-[#ed145b] p-1 rounded-full mt-1 flex-shrink-0">
                                        <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <p>Conducir la ejecución de operaciones orientadas a la gestión de los fondos que administran, de acuerdo con la normativa vigente.</p>
                                </div>
                                
                                <div class="flex items-start space-x-3">
                                    <div class="bg-gradient-to-r from-[#db0455] to-[#ed145b] p-1 rounded-full mt-1 flex-shrink-0">
                                        <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <p>Promover la capacitación profesional y la especialización de los servidores administrativos de la institución.</p>
                                </div>
                                
                                <div class="flex items-start space-x-3">
                                    <div class="bg-gradient-to-r from-[#db0455] to-[#ed145b] p-1 rounded-full mt-1 flex-shrink-0">
                                        <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <p>Planificar, dirigir, ejecutar, controlar y evaluar las actividades de mantenimiento y servicios generales de la universidad.</p>
                                </div>
                                
                                <div class="flex items-start space-x-3">
                                    <div class="bg-gradient-to-r from-[#db0455] to-[#ed145b] p-1 rounded-full mt-1 flex-shrink-0">
                                        <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <p>Emitir resoluciones dentro del ámbito de su competencia.</p>
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
                                    Para consultas administrativas, gestión de recursos humanos, financieros y patrimoniales, contacte con nuestra dirección.
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