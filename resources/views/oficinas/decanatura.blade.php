@extends('layouts.app')

@section('title', 'Decanatura - UNAMAD')

@section('content')
    <!-- Hero Section -->
    <div class="relative h-64 flex items-center justify-center overflow-hidden">
        <!-- Background Image -->
        <div class="absolute inset-0">
            <img src="{{ asset('img/presentacion/presentacionbackground.jpg') }}" alt="Decanatura UNAMAD" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-br from-[#db0455]/90 to-[#a00340]/80"></div>
        </div>
        
        <!-- Hero Content -->
        <div class="relative z-10 text-center text-white px-4">
            <h1 class="text-4xl font-bold mb-2 flex items-center justify-center">
                <svg class="w-8 h-8 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                </svg>
                Decanatura
            </h1>
            <p class="text-lg opacity-95">
                Máxima autoridad de gobierno de la Facultad
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
                            <span class="ml-1 text-sm font-medium text-[#db0455] md:ml-2">Decanatura</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-12">
        <!-- Decanatura Section -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden border-t-4 border-[#db0455]">
            <div class="bg-gradient-to-r from-[#db0455] to-[#ed145b] text-white p-6">
                <h2 class="text-3xl font-bold flex items-center">
                    <svg class="w-8 h-8 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                    Decanatura
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
                            Máxima Autoridad de la Facultad
                        </h3>
                        
                        <div class="space-y-4 text-gray-700 leading-relaxed">
                            <p>
                                El <strong>Decanato es la máxima autoridad de gobierno de la Facultad</strong>, representa a la Facultad ante la Asamblea Universitaria y Consejo Universitario conforme lo dispone la Ley Universitaria y el Estatuto de la UNAMAD.
                            </p>
                            <p>
                                Es elegido por un periodo de <strong>cuatro (4) años</strong> y <strong>no hay reelección inmediata</strong>.
                            </p>
                            <p>
                                Como máxima autoridad facultativa, el Decano tiene la responsabilidad de dirigir tanto administrativa como académicamente la Facultad, asegurando el cumplimiento de los objetivos institucionales y el desarrollo de la educación superior en su ámbito de competencia.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Funciones del Decanato -->
                <div class="mb-12">
                    <h3 class="text-2xl font-bold text-[#db0455] mb-6 flex items-center">
                        <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                        </svg>
                        Funciones de los Decanatos
                    </h3>

                    <div class="space-y-6">
                        <!-- Función 1 -->
                        <div class="bg-white border border-gray-200 rounded-lg p-6 shadow-sm hover:shadow-md transition-shadow">
                            <div class="flex items-start">
                                <div class="w-8 h-8 bg-[#db0455] text-white rounded-full flex items-center justify-center text-sm font-bold mr-4 flex-shrink-0 mt-1">
                                    1
                                </div>
                                <div>
                                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Presidir el Consejo de Facultad</h4>
                                    <p class="text-gray-700 text-sm">
                                        Dirigir y presidir las sesiones del Consejo de Facultad, órgano de gobierno de la unidad académica.
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
                                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Dirigir Administrativamente la Facultad</h4>
                                    <p class="text-gray-700 text-sm">
                                        Gestionar y supervisar todos los aspectos administrativos de la Facultad, garantizando su eficiente funcionamiento.
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
                                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Dirigir Académicamente la Facultad</h4>
                                    <p class="text-gray-700 text-sm">
                                        Dirigir académicamente la Facultad, a través de los Directores de los Departamentos Académicos, de las Escuelas Profesionales y Unidades de Posgrado.
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
                                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Representar la Facultad</h4>
                                    <p class="text-gray-700 text-sm">
                                        Representar a la Facultad ante la Asamblea Universitaria y ante el Consejo Universitario, en los términos que establece la Ley Universitaria y el Estatuto.
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
                                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Designar Autoridades</h4>
                                    <p class="text-gray-700 text-sm">
                                        Designar al Secretario Académico, a los Directores de las Escuelas Profesionales, Instituto de Investigación, las Unidades de Posgrado, centros de producción y demás unidades.
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
                                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Presentar Planes de Desarrollo</h4>
                                    <p class="text-gray-700 text-sm">
                                        Presentar al Consejo de Facultad, para su aprobación, el plan anual de funcionamiento y desarrollo de la Facultad y su Informe de Gestión.
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
                                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Aprobar Planes de Viaje</h4>
                                    <p class="text-gray-700 text-sm">
                                        Aprobar y autorizar los planes de viaje por estudios, investigaciones, eventos académicos a estudiantes y docentes de la UNAMAD.
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
                                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Proponer Vacantes de Admisión</h4>
                                    <p class="text-gray-700 text-sm">
                                        Proponer al Consejo de Facultad el número de vacantes para el Concurso de Admisión, en concordancia con el Plan de Desarrollo Institucional y el presupuesto asignado a la Facultad.
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
                                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Firmar Certificados y Diplomas</h4>
                                    <p class="text-gray-700 text-sm">
                                        Firmar certificados de estudios, constancias y documentos similares; así como los diplomas de grados académicos y títulos profesionales de los egresados de la Facultad y tramitarlos a las instancias superiores para su otorgamiento.
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
                                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Gestionar Prácticas Pre-profesionales</h4>
                                    <p class="text-gray-700 text-sm">
                                        Gestionar las prácticas pre-profesionales de acuerdo al reglamento correspondiente.
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
                                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Autorizar Permisos</h4>
                                    <p class="text-gray-700 text-sm">
                                        Autorizar los permisos solicitados por los docentes y personal administrativo de la facultad hasta por un máximo de cinco (05) días por semestre.
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
                                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Proponer Constitución de Comisiones</h4>
                                    <p class="text-gray-700 text-sm">
                                        Proponer al Consejo de Facultad la constitución de comisiones permanentes y otras que se establezcan en los reglamentos respectivos.
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
                                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Presentar Currículo de Estudios</h4>
                                    <p class="text-gray-700 text-sm">
                                        Presentar el Currículo de Estudios, ante el Consejo de Facultad a propuesta de las Escuelas Profesionales.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Función 14 -->
                        <div class="bg-white border border-gray-200 rounded-lg p-6 shadow-sm hover:shadow-md transition-shadow">
                            <div class="flex items-start">
                                <div class="w-8 h-8 bg-[#db0455] text-white rounded-full flex items-center justify-center text-sm font-bold mr-4 flex-shrink-0 mt-1">
                                    14
                                </div>
                                <div>
                                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Proponer Sanciones</h4>
                                    <p class="text-gray-700 text-sm">
                                        Proponer al Consejo de Facultad, sanciones a los docentes y estudiantes que incurran en omisión de funciones, faltas entre otros, conforme lo señalan los respectivos reglamentos, en concordancia con el Estatuto de la Universidad.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Función 15 -->
                        <div class="bg-white border border-gray-200 rounded-lg p-6 shadow-sm hover:shadow-md transition-shadow">
                            <div class="flex items-start">
                                <div class="w-8 h-8 bg-[#db0455] text-white rounded-full flex items-center justify-center text-sm font-bold mr-4 flex-shrink-0 mt-1">
                                    15
                                </div>
                                <div>
                                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Emitir Resoluciones</h4>
                                    <p class="text-gray-700 text-sm">
                                        Emitir Resoluciones de Decanatura para formalizar decisiones y disposiciones administrativas de la Facultad.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Función 16 -->
                        <div class="bg-white border border-gray-200 rounded-lg p-6 shadow-sm hover:shadow-md transition-shadow">
                            <div class="flex items-start">
                                <div class="w-8 h-8 bg-[#db0455] text-white rounded-full flex items-center justify-center text-sm font-bold mr-4 flex-shrink-0 mt-1">
                                    16
                                </div>
                                <div>
                                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Hacer Cumplir Acuerdos</h4>
                                    <p class="text-gray-700 text-sm">
                                        Hacer cumplir los acuerdos de Consejo de Facultad, garantizando la implementación de las decisiones tomadas.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Función 17 -->
                        <div class="bg-white border border-gray-200 rounded-lg p-6 shadow-sm hover:shadow-md transition-shadow">
                            <div class="flex items-start">
                                <div class="w-8 h-8 bg-[#db0455] text-white rounded-full flex items-center justify-center text-sm font-bold mr-4 flex-shrink-0 mt-1">
                                    17
                                </div>
                                <div>
                                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Autorizar Prácticas de Campo</h4>
                                    <p class="text-gray-700 text-sm">
                                        Autorizar las prácticas y salidas de campo que se encuentre dentro del sílabo de asignatura a propuesta del Director de Escuela.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Función 18 -->
                        <div class="bg-white border border-gray-200 rounded-lg p-6 shadow-sm hover:shadow-md transition-shadow">
                            <div class="flex items-start">
                                <div class="w-8 h-8 bg-[#db0455] text-white rounded-full flex items-center justify-center text-sm font-bold mr-4 flex-shrink-0 mt-1">
                                    18
                                </div>
                                <div>
                                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Otras Atribuciones</h4>
                                    <p class="text-gray-700 text-sm">
                                        Las demás atribuciones que le asignen la Ley, el Estatuto y los Reglamentos.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Áreas de Responsabilidad -->
                <div class="mb-12">
                    <h3 class="text-2xl font-bold text-[#db0455] mb-6 flex items-center">
                        <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                        </svg>
                        Áreas de Responsabilidad del Decanato
                    </h3>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Gestión Académica -->
                        <div class="bg-white border border-gray-200 rounded-lg p-6 shadow-sm hover:shadow-md transition-shadow">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-[#db0455]/10 rounded-full flex items-center justify-center">
                                    <svg class="w-6 h-6 text-[#db0455]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                    </svg>
                                </div>
                                <h4 class="text-lg font-semibold text-gray-800 ml-3">Gestión Académica</h4>
                            </div>
                            <p class="text-gray-600 text-sm">Dirección de escuelas profesionales, currículos de estudio, programas académicos y formación profesional.</p>
                        </div>

                        <!-- Gestión Administrativa -->
                        <div class="bg-white border border-gray-200 rounded-lg p-6 shadow-sm hover:shadow-md transition-shadow">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-[#db0455]/10 rounded-full flex items-center justify-center">
                                    <svg class="w-6 h-6 text-[#db0455]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                    </svg>
                                </div>
                                <h4 class="text-lg font-semibold text-gray-800 ml-3">Gestión Administrativa</h4>
                            </div>
                            <p class="text-gray-600 text-sm">Administración de la facultad, designación de autoridades, permisos y resoluciones decanales.</p>
                        </div>

                        <!-- Representación Institucional -->
                        <div class="bg-white border border-gray-200 rounded-lg p-6 shadow-sm hover:shadow-md transition-shadow">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-[#db0455]/10 rounded-full flex items-center justify-center">
                                    <svg class="w-6 h-6 text-[#db0455]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                    </svg>
                                </div>
                                <h4 class="text-lg font-semibold text-gray-800 ml-3">Representación</h4>
                            </div>
                            <p class="text-gray-600 text-sm">Representación ante Asamblea y Consejo Universitario, presidencia del Consejo de Facultad.</p>
                        </div>

                        <!-- Gestión Estudiantil -->
                        <div class="bg-white border border-gray-200 rounded-lg p-6 shadow-sm hover:shadow-md transition-shadow">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-[#db0455]/10 rounded-full flex items-center justify-center">
                                    <svg class="w-6 h-6 text-[#db0455]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                                    </svg>
                                </div>
                                <h4 class="text-lg font-semibold text-gray-800 ml-3">Gestión Estudiantil</h4>
                            </div>
                            <p class="text-gray-600 text-sm">Admisión, certificados, diplomas, prácticas pre-profesionales y actividades de campo.</p>
                        </div>

                        <!-- Planificación -->
                        <div class="bg-white border border-gray-200 rounded-lg p-6 shadow-sm hover:shadow-md transition-shadow">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-[#db0455]/10 rounded-full flex items-center justify-center">
                                    <svg class="w-6 h-6 text-[#db0455]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                    </svg>
                                </div>
                                <h4 class="text-lg font-semibold text-gray-800 ml-3">Planificación</h4>
                            </div>
                            <p class="text-gray-600 text-sm">Planes de desarrollo, informes de gestión, propuestas de vacantes y planificación estratégica.</p>
                        </div>

                        <!-- Control Disciplinario -->
                        <div class="bg-white border border-gray-200 rounded-lg p-6 shadow-sm hover:shadow-md transition-shadow">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-[#db0455]/10 rounded-full flex items-center justify-center">
                                    <svg class="w-6 h-6 text-[#db0455]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                    </svg>
                                </div>
                                <h4 class="text-lg font-semibold text-gray-800 ml-3">Control y Disciplina</h4>
                            </div>
                            <p class="text-gray-600 text-sm">Propuestas de sanciones, cumplimiento de acuerdos, comisiones de trabajo y control normativo.</p>
                        </div>
                    </div>
                </div>

                <!-- Periodo y Elección -->
                <div class="bg-gradient-to-r from-[#db0455] to-[#ed145b] rounded-lg p-8 text-white">
                    <div class="text-center">
                        <svg class="w-12 h-12 mx-auto mb-4 opacity-75" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                        </svg>
                        <h3 class="text-2xl font-bold mb-4">Elección y Mandato</h3>
                        <p class="text-lg mb-6 opacity-95">
                            El Decano es elegido democráticamente por la comunidad facultativa
                        </p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-2xl mx-auto">
                            <div class="bg-white/20 rounded-lg p-6">
                                <div class="flex items-center justify-center mb-3">
                                    <svg class="w-8 h-8 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span class="text-xl font-bold">4 años</span>
                                </div>
                                <p class="text-sm opacity-90">Periodo de mandato</p>
                            </div>
                            <div class="bg-white/20 rounded-lg p-6">
                                <div class="flex items-center justify-center mb-3">
                                    <svg class="w-8 h-8 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728L5.636 5.636m12.728 12.728L12 21l-6.364-6.364M5.636 5.636L12 3l6.364 6.364"></path>
                                    </svg>
                                    <span class="text-xl font-bold">Sin reelección</span>
                                </div>
                                <p class="text-sm opacity-90">Inmediata</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection