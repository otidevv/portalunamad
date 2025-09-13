@extends('layouts.app')

@section('title', 'Asamblea Universitaria - UNAMAD')

@section('content')
    <!-- Hero Section -->
    <div class="relative h-64 flex items-center justify-center overflow-hidden">
        <!-- Background Image -->
        <div class="absolute inset-0">
            <img src="{{ asset('img/presentacion/presentacionbackground.jpg') }}" alt="Asamblea Universitaria UNAMAD" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-br from-[#db0455]/90 to-[#a00340]/80"></div>
        </div>
        
        <!-- Hero Content -->
        <div class="relative z-10 text-center text-white px-4">
            <h1 class="text-4xl font-bold mb-2 flex items-center justify-center">
                <svg class="w-8 h-8 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                </svg>
                Asamblea Universitaria
            </h1>
            <p class="text-lg opacity-95">
                Máximo órgano de gobierno de la UNAMAD
            </p>
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
                            <span class="ml-1 text-sm font-medium text-[#db0455] md:ml-2">Asamblea Universitaria</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-12">
        <!-- Asamblea Universitaria Section -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden border-t-4 border-[#db0455]">
            <div class="bg-gradient-to-r from-[#db0455] to-[#ed145b] text-white p-6">
                <h2 class="text-3xl font-bold flex items-center">
                    <svg class="w-8 h-8 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                    Asamblea Universitaria
                </h2>
            </div>
            
            <div class="p-8">
                <!-- Descripción Principal -->
                <div class="mb-12">
                    <div class="bg-gradient-to-br from-[#db0455]/5 to-[#ed145b]/5 rounded-lg p-6 border border-[#db0455]/20 shadow-sm">
                        <h3 class="text-2xl font-bold text-[#db0455] mb-6 flex items-center">
                            <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                            </svg>
                            Máximo Órgano de Gobierno
                        </h3>
                        
                        <div class="space-y-4 text-gray-700 leading-relaxed">
                            <p>
                                La <strong>Asamblea Universitaria es el máximo órgano de gobierno de la UNAMAD</strong>, representa a la comunidad universitaria y se encarga de dictar las políticas generales de la universidad.
                            </p>
                            <p>
                                Su actuación se rige por lo dispuesto en la <strong>Ley Universitaria</strong>, el <strong>Estatuto de la UNAMAD</strong> y demás normas conexas; así como, por las políticas nacionales, sectoriales y los lineamientos normativos establecidos por el Ministerio de Educación.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Funciones de la Asamblea -->
                <div class="mb-12">
                    <h3 class="text-2xl font-bold text-[#db0455] mb-6 flex items-center">
                        <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                        </svg>
                        Funciones de la Asamblea Universitaria
                    </h3>

                    <div class="space-y-6">
                        <!-- Función 1 -->
                        <div class="bg-white border border-gray-200 rounded-lg p-6 shadow-sm hover:shadow-md transition-shadow">
                            <div class="flex items-start">
                                <div class="w-8 h-8 bg-[#db0455] text-white rounded-full flex items-center justify-center text-sm font-bold mr-4 flex-shrink-0 mt-1">
                                    1
                                </div>
                                <div>
                                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Reforma del Estatuto</h4>
                                    <p class="text-gray-700 text-sm">
                                        Reformar el Estatuto de la UNAMAD, con la aprobación de por lo menos dos tercios del número de miembros y remitir el nuevo Estatuto a la SUNEDU.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Función 2 -->
                        <div class="bg-white border border-gray-200 rounded-lg p-6 shadow-sm hover:shadow-md transition-shadow">
                            <div class="flex items-start">
                                <div class="w-8 h-8 bg-[#db0455] text-white rounded-full flex items-center justify-center text-sm font-bold mr-4 flex-shrink-0 mt-1">
                                    2
                                </div>
                                <div>
                                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Velar por el Cumplimiento de Instrumentos de Planeamiento</h4>
                                    <p class="text-gray-700 text-sm">
                                        Velar por el adecuado cumplimiento de los instrumentos de planeamiento de la universidad, aprobados por el Consejo Universitario.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Función 3 -->
                        <div class="bg-white border border-gray-200 rounded-lg p-6 shadow-sm hover:shadow-md transition-shadow">
                            <div class="flex items-start">
                                <div class="w-8 h-8 bg-[#db0455] text-white rounded-full flex items-center justify-center text-sm font-bold mr-4 flex-shrink-0 mt-1">
                                    3
                                </div>
                                <div>
                                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Declarar Vacancia del Rector o Vicerrectores</h4>
                                    <p class="text-gray-700 text-sm">
                                        Declarar la vacancia del Rector o Vicerrectores, de acuerdo a las causales expresamente señaladas en la Ley y el Estatuto, a través de una votación calificada de dos tercios (2/3) del número legal de miembros.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Función 4 -->
                        <div class="bg-white border border-gray-200 rounded-lg p-6 shadow-sm hover:shadow-md transition-shadow">
                            <div class="flex items-start">
                                <div class="w-8 h-8 bg-[#db0455] text-white rounded-full flex items-center justify-center text-sm font-bold mr-4 flex-shrink-0 mt-1">
                                    4
                                </div>
                                <div>
                                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Declarar Vacancia de Representantes</h4>
                                    <p class="text-gray-700 text-sm">
                                        Declarar la vacancia de los representantes docentes y estudiantes ante la Asamblea. Informando al Comité Electoral Universitario a fin de cubrir sus reemplazos de acuerdo al Estatuto.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Función 5 -->
                        <div class="bg-white border border-gray-200 rounded-lg p-6 shadow-sm hover:shadow-md transition-shadow">
                            <div class="flex items-start">
                                <div class="w-8 h-8 bg-[#db0455] text-white rounded-full flex items-center justify-center text-sm font-bold mr-4 flex-shrink-0 mt-1">
                                    5
                                </div>
                                <div>
                                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Elegir Integrantes de Comités</h4>
                                    <p class="text-gray-700 text-sm">
                                        Elegir a los integrantes del Comité Electoral Universitario y del Tribunal de Honor Universitario, como también, aceptar o rechazar la renuncia de sus miembros y declarar la vacancia de sus cargos por las causales previstas en el Estatuto.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Función 6 -->
                        <div class="bg-white border border-gray-200 rounded-lg p-6 shadow-sm hover:shadow-md transition-shadow">
                            <div class="flex items-start">
                                <div class="w-8 h-8 bg-[#db0455] text-white rounded-full flex items-center justify-center text-sm font-bold mr-4 flex-shrink-0 mt-1">
                                    6
                                </div>
                                <div>
                                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Designar Comisión Permanente</h4>
                                    <p class="text-gray-700 text-sm">
                                        Designar anualmente entre sus miembros, a los integrantes de la Comisión Permanente encargada de fiscalizar la gestión de la universidad. Los resultados de dicha fiscalización se informan a la Contraloría General de la República y a la SUNEDU.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Función 7 -->
                        <div class="bg-white border border-gray-200 rounded-lg p-6 shadow-sm hover:shadow-md transition-shadow">
                            <div class="flex items-start">
                                <div class="w-8 h-8 bg-[#db0455] text-white rounded-full flex items-center justify-center text-sm font-bold mr-4 flex-shrink-0 mt-1">
                                    7
                                </div>
                                <div>
                                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Evaluar y Aprobar Informes</h4>
                                    <p class="text-gray-700 text-sm">
                                        Evaluar y aprobar la memoria anual, el informe semestral de gestión del Rector y el informe de rendición de cuentas del presupuesto anual ejecutado.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Función 8 -->
                        <div class="bg-white border border-gray-200 rounded-lg p-6 shadow-sm hover:shadow-md transition-shadow">
                            <div class="flex items-start">
                                <div class="w-8 h-8 bg-[#db0455] text-white rounded-full flex items-center justify-center text-sm font-bold mr-4 flex-shrink-0 mt-1">
                                    8
                                </div>
                                <div>
                                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Constitución y Reorganización de Unidades</h4>
                                    <p class="text-gray-700 text-sm">
                                        Acordar la constitución, fusión, reorganización, separación y supresión de Facultades, Escuelas y Unidades de Posgrado, Escuelas Profesionales, Departamentos Académicos, Centros de Investigación y Producción, y de los Institutos, a propuesta del Consejo Universitario.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Función 9 -->
                        <div class="bg-white border border-gray-200 rounded-lg p-6 shadow-sm hover:shadow-md transition-shadow">
                            <div class="flex items-start">
                                <div class="w-8 h-8 bg-[#db0455] text-white rounded-full flex items-center justify-center text-sm font-bold mr-4 flex-shrink-0 mt-1">
                                    9
                                </div>
                                <div>
                                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Declarar Receso Temporal</h4>
                                    <p class="text-gray-700 text-sm">
                                        Declarar en receso temporal a la universidad o a cualquiera de sus unidades académicas, cuando las circunstancias lo requieran, con cargo a informar a la SUNEDU.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Función 10 -->
                        <div class="bg-white border border-gray-200 rounded-lg p-6 shadow-sm hover:shadow-md transition-shadow">
                            <div class="flex items-start">
                                <div class="w-8 h-8 bg-[#db0455] text-white rounded-full flex items-center justify-center text-sm font-bold mr-4 flex-shrink-0 mt-1">
                                    10
                                </div>
                                <div>
                                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Pronunciarse sobre Temas de Interés Público</h4>
                                    <p class="text-gray-700 text-sm">
                                        Pronunciarse sobre temas de interés público del quehacer internacional, nacional regional y local.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Función 11 -->
                        <div class="bg-white border border-gray-200 rounded-lg p-6 shadow-sm hover:shadow-md transition-shadow">
                            <div class="flex items-start">
                                <div class="w-8 h-8 bg-[#db0455] text-white rounded-full flex items-center justify-center text-sm font-bold mr-4 flex-shrink-0 mt-1">
                                    11
                                </div>
                                <div>
                                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Ratificar Plan Anual de Desarrollo</h4>
                                    <p class="text-gray-700 text-sm">
                                        Ratificar el Plan Anual de Desarrollo de la universidad, aprobado por el Consejo Universitario, y velar por su cumplimiento.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Función 12 -->
                        <div class="bg-white border border-gray-200 rounded-lg p-6 shadow-sm hover:shadow-md transition-shadow">
                            <div class="flex items-start">
                                <div class="w-8 h-8 bg-[#db0455] text-white rounded-full flex items-center justify-center text-sm font-bold mr-4 flex-shrink-0 mt-1">
                                    12
                                </div>
                                <div>
                                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Aprobar Reglamento Propio</h4>
                                    <p class="text-gray-700 text-sm">
                                        Aprobar y regirse por su propio reglamento.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Función 13 -->
                        <div class="bg-white border border-gray-200 rounded-lg p-6 shadow-sm hover:shadow-md transition-shadow">
                            <div class="flex items-start">
                                <div class="w-8 h-8 bg-[#db0455] text-white rounded-full flex items-center justify-center text-sm font-bold mr-4 flex-shrink-0 mt-1">
                                    13
                                </div>
                                <div>
                                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Otras Atribuciones</h4>
                                    <p class="text-gray-700 text-sm">
                                        Las demás atribuciones que le otorgan la Ley Universitaria y el Estatuto de la Universidad.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Marco Legal -->
                <div class="bg-gradient-to-r from-[#db0455] to-[#ed145b] rounded-lg p-8 text-white">
                    <div class="text-center">
                        <svg class="w-12 h-12 mx-auto mb-4 opacity-75" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8s0 0 0 0l-6-6s0 0 0 0zM10.5 18.5h3v-3h-3v3zm0-4.5h3v-3h-3v3zm5-6.5L15 4.5 13.5 6l1.5 1.5L16.5 6z"/>
                        </svg>
                        <h3 class="text-2xl font-bold mb-4">Marco Legal de la Asamblea Universitaria</h3>
                        <p class="text-lg mb-6 opacity-95">
                            La Asamblea Universitaria se rige por un sólido marco normativo que garantiza la gobernanza universitaria
                        </p>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 max-w-4xl mx-auto">
                            <div class="bg-white/20 rounded-lg p-4">
                                <div class="flex items-center justify-center mb-2">
                                    <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                    </svg>
                                    <span class="font-semibold">Ley Universitaria</span>
                                </div>
                                <p class="text-sm opacity-90">Marco legal nacional</p>
                            </div>
                            <div class="bg-white/20 rounded-lg p-4">
                                <div class="flex items-center justify-center mb-2">
                                    <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                    </svg>
                                    <span class="font-semibold">Estatuto UNAMAD</span>
                                </div>
                                <p class="text-sm opacity-90">Normativa institucional</p>
                            </div>
                            <div class="bg-white/20 rounded-lg p-4">
                                <div class="flex items-center justify-center mb-2">
                                    <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                    </svg>
                                    <span class="font-semibold">Políticas MINEDU</span>
                                </div>
                                <p class="text-sm opacity-90">Lineamientos sectoriales</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection