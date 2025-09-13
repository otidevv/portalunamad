@extends('layouts.app')

@section('title', 'Consejo Universitario - UNAMAD')

@section('content')
    <!-- Hero Section -->
    <div class="relative h-64 flex items-center justify-center overflow-hidden">
        <!-- Background Image -->
        <div class="absolute inset-0">
            <img src="{{ asset('img/presentacion/presentacionbackground.jpg') }}" alt="Consejo Universitario UNAMAD" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-br from-[#db0455]/90 to-[#a00340]/80"></div>
        </div>
        
        <!-- Hero Content -->
        <div class="relative z-10 text-center text-white px-4">
            <h1 class="text-4xl font-bold mb-2 flex items-center justify-center">
                <svg class="w-8 h-8 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                </svg>
                Consejo Universitario
            </h1>
            <p class="text-lg opacity-95">
                Máximo órgano de gestión, dirección y ejecución académica y administrativa
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
                            <span class="ml-1 text-sm font-medium text-[#db0455] md:ml-2">Consejo Universitario</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-12">
        <!-- Consejo Universitario Section -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden border-t-4 border-[#db0455]">
            <div class="bg-gradient-to-r from-[#db0455] to-[#ed145b] text-white p-6">
                <h2 class="text-3xl font-bold flex items-center">
                    <svg class="w-8 h-8 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                    </svg>
                    Consejo Universitario
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
                            Máximo Órgano de Gestión y Dirección
                        </h3>
                        
                        <div class="space-y-4 text-gray-700 leading-relaxed">
                            <p>
                                El <strong>Consejo Universitario es el máximo órgano de gestión, dirección y ejecución académica y administrativa de la UNAMAD</strong>.
                            </p>
                            <p>
                                Como órgano ejecutivo principal, el Consejo Universitario tiene la responsabilidad de implementar las políticas y directrices establecidas por la Asamblea Universitaria, garantizando el correcto funcionamiento de todas las actividades académicas, administrativas y de investigación de la universidad.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Funciones del Consejo -->
                <div class="mb-12">
                    <h3 class="text-2xl font-bold text-[#db0455] mb-6 flex items-center">
                        <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                        </svg>
                        Funciones del Consejo Universitario
                    </h3>

                    <div class="space-y-6">
                        <!-- Función 1 -->
                        <div class="bg-white border border-gray-200 rounded-lg p-6 shadow-sm hover:shadow-md transition-shadow">
                            <div class="flex items-start">
                                <div class="w-8 h-8 bg-[#db0455] text-white rounded-full flex items-center justify-center text-sm font-bold mr-4 flex-shrink-0 mt-1">
                                    1
                                </div>
                                <div>
                                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Aprobar Instrumentos de Planeamiento</h4>
                                    <p class="text-gray-700 text-sm">
                                        Aprobar a propuesta del Rector, los instrumentos de planeamiento, Plan de Desarrollo y los documentos de gestión de la universidad de la UNAMAD.
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
                                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Dictar Reglamentos</h4>
                                    <p class="text-gray-700 text-sm">
                                        Dictar el reglamento general de la universidad, el reglamento de elecciones y otros reglamentos internos especiales, así como vigilar su cumplimiento.
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
                                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Aprobar Presupuesto General</h4>
                                    <p class="text-gray-700 text-sm">
                                        Aprobar el presupuesto general de la UNAMAD, el plan anual de adquisiciones de bienes y servicios, autorizar los actos y contratos que atañen a la universidad y resolver todo lo pertinente a su economía.
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
                                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Proponer Creación de Unidades</h4>
                                    <p class="text-gray-700 text-sm">
                                        Proponer a la Asamblea Universitaria la creación, fusión, supresión o reorganización de unidades académicas, administrativas e institutos de investigación, de los centros de producción y en general de cualquier unidad de organización de la UNAMAD.
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
                                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Ratificar Planes de Estudios</h4>
                                    <p class="text-gray-700 text-sm">
                                        Concordar y ratificar los planes de estudios y de gestión propuestos por las unidades académicas de la UNAMAD.
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
                                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Nombrar Directores Generales</h4>
                                    <p class="text-gray-700 text-sm">
                                        Nombrar al Director General de Administración y al Secretario General, a propuesta del Rector.
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
                                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Gestión de Personal Docente</h4>
                                    <p class="text-gray-700 text-sm">
                                        Nombrar, contratar, ratificar, promover y remover a los docentes, a propuesta de los Consejos de Facultad y previo procedimiento correspondiente.
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
                                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Gestión de Personal No Docente</h4>
                                    <p class="text-gray-700 text-sm">
                                        Nombrar, designar, contratar, promover y remover al personal no docente, a propuesta de la respectiva unidad.
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
                                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Conferir Grados y Títulos</h4>
                                    <p class="text-gray-700 text-sm">
                                        Conferir los grados académicos y los títulos profesionales aprobados por las Facultades y Escuela de Posgrado, así como otorgar distinciones honoríficas y reconocer y revalidar los estudios, grados y títulos de universidades extranjeras a propuesta de las instancias correspondientes, cuando la UNAMAD está autorizada por la SUNEDU.
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
                                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Aprobar Modalidades de Ingreso</h4>
                                    <p class="text-gray-700 text-sm">
                                        Aprobar las modalidades de ingreso e incorporación a la UNAMAD, así como el número de vacantes para los procesos de admisión a nivel de pre y posgrado en sus diferentes modalidades, previa propuesta de las Facultades y de conformidad al presupuesto y planes de desarrollo de la UNAMAD.
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
                                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Fijar Remuneraciones</h4>
                                    <p class="text-gray-700 text-sm">
                                        Fijar las remuneraciones y todo concepto de ingresos de las autoridades, docentes y no docentes de acuerdo a ley.
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
                                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Ejercer Poder Disciplinario</h4>
                                    <p class="text-gray-700 text-sm">
                                        Ejercer en instancia revisora, el poder disciplinario sobre los docentes, estudiantes y personal administrativo, en la forma y grado que lo determinen los reglamentos sobre la materia.
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
                                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Celebrar Convenios</h4>
                                    <p class="text-gray-700 text-sm">
                                        Celebrar convenios con universidades nacionales, extranjeras, organismos gubernamentales, internacionales u otros sobre investigación científica y tecnológica, así como otros asuntos relacionados con las actividades de la UNAMAD.
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
                                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Aprobar Calendario Académico</h4>
                                    <p class="text-gray-700 text-sm">
                                        Aprobar el Calendario Académico, elevado por el Vicerrectorado Académico.
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
                                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Autorizar Licencias</h4>
                                    <p class="text-gray-700 text-sm">
                                        Autorizar, ratificar o suspender las licencias con o sin goce de haber, para las autoridades, docentes y personal no docente, cuando esta fuera superior a tres (03) meses, previo cumplimiento de las disposiciones y requisitos exigidos por los reglamentos correspondientes.
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
                                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Aceptar Donaciones y Legados</h4>
                                    <p class="text-gray-700 text-sm">
                                        Aceptar donaciones y legados, de acuerdo a la legislación.
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
                                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Aprobar Endeudamiento</h4>
                                    <p class="text-gray-700 text-sm">
                                        Aprobar el endeudamiento de la UNAMAD, como autorizar el gravamen y enajenación de sus bienes, con cargo de dar cuenta a la Asamblea Universitaria para su ratificación.
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
                                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Autorizar Viajes en Comisión</h4>
                                    <p class="text-gray-700 text-sm">
                                        Autorizar, ratificar o suspender los viajes nacionales e internacionales en comisión de servicios para las autoridades, docentes y personal no docente de la UNAMAD, previo cumplimiento de las disposiciones y requisitos exigidos por ley y los reglamentos correspondientes.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Función 19 -->
                        <div class="bg-white border border-gray-200 rounded-lg p-6 shadow-sm hover:shadow-md transition-shadow">
                            <div class="flex items-start">
                                <div class="w-8 h-8 bg-[#db0455] text-white rounded-full flex items-center justify-center text-sm font-bold mr-4 flex-shrink-0 mt-1">
                                    19
                                </div>
                                <div>
                                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Aprobar el Margesí</h4>
                                    <p class="text-gray-700 text-sm">
                                        Aprobar el margesí de la UNAMAD.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Función 20 -->
                        <div class="bg-white border border-gray-200 rounded-lg p-6 shadow-sm hover:shadow-md transition-shadow">
                            <div class="flex items-start">
                                <div class="w-8 h-8 bg-[#db0455] text-white rounded-full flex items-center justify-center text-sm font-bold mr-4 flex-shrink-0 mt-1">
                                    20
                                </div>
                                <div>
                                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Resolver Situaciones de Emergencia</h4>
                                    <p class="text-gray-700 text-sm">
                                        Resolver todas aquellas circunstancias que impidan el normal desarrollo de las actividades académicas, de investigación y administrativas, cumpliendo con la Ley, el Estatuto y otras normas vigentes.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Función 21 -->
                        <div class="bg-white border border-gray-200 rounded-lg p-6 shadow-sm hover:shadow-md transition-shadow">
                            <div class="flex items-start">
                                <div class="w-8 h-8 bg-[#db0455] text-white rounded-full flex items-center justify-center text-sm font-bold mr-4 flex-shrink-0 mt-1">
                                    21
                                </div>
                                <div>
                                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Autorizar Ingreso de Autoridades</h4>
                                    <p class="text-gray-700 text-sm">
                                        Tomar conocimiento de parte del Rector de la petición de ingreso de la Policía Nacional y el Ministerio Público, al campus universitario, en caso se haya declarado el estado de emergencia, se produzca un delito flagrante o haya peligro inminente de su perpetración.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Función 22 -->
                        <div class="bg-white border border-gray-200 rounded-lg p-6 shadow-sm hover:shadow-md transition-shadow">
                            <div class="flex items-start">
                                <div class="w-8 h-8 bg-[#db0455] text-white rounded-full flex items-center justify-center text-sm font-bold mr-4 flex-shrink-0 mt-1">
                                    22
                                </div>
                                <div>
                                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Conformar Comisiones</h4>
                                    <p class="text-gray-700 text-sm">
                                        Conformar o ratificar (de ser el caso) comisiones investigadoras, de trabajo, y de cualquier otra índole.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Función 23 -->
                        <div class="bg-white border border-gray-200 rounded-lg p-6 shadow-sm hover:shadow-md transition-shadow">
                            <div class="flex items-start">
                                <div class="w-8 h-8 bg-[#db0455] text-white rounded-full flex items-center justify-center text-sm font-bold mr-4 flex-shrink-0 mt-1">
                                    23
                                </div>
                                <div>
                                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Resolver Otros Asuntos</h4>
                                    <p class="text-gray-700 text-sm">
                                        Conocer y resolver todos los demás asuntos que no están encomendados a otras autoridades universitarias.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Función 24 -->
                        <div class="bg-white border border-gray-200 rounded-lg p-6 shadow-sm hover:shadow-md transition-shadow">
                            <div class="flex items-start">
                                <div class="w-8 h-8 bg-[#db0455] text-white rounded-full flex items-center justify-center text-sm font-bold mr-4 flex-shrink-0 mt-1">
                                    24
                                </div>
                                <div>
                                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Conferir Licencias por Año Sabático</h4>
                                    <p class="text-gray-700 text-sm">
                                        Conferir licencias por año sabático a los docentes que reúnan los requisitos previstos por la Ley Universitaria, el Estatuto y el Reglamento de Año Sabático a propuesta de las Facultades.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Función 25 -->
                        <div class="bg-white border border-gray-200 rounded-lg p-6 shadow-sm hover:shadow-md transition-shadow">
                            <div class="flex items-start">
                                <div class="w-8 h-8 bg-[#db0455] text-white rounded-full flex items-center justify-center text-sm font-bold mr-4 flex-shrink-0 mt-1">
                                    25
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

                <!-- Áreas de Responsabilidad -->
                <div class="mb-12">
                    <h3 class="text-2xl font-bold text-[#db0455] mb-6 flex items-center">
                        <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                        </svg>
                        Áreas de Responsabilidad
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
                            <p class="text-gray-600 text-sm">Planes de estudio, calendario académico, admisión, grados y títulos profesionales.</p>
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
                            <p class="text-gray-600 text-sm">Presupuesto, personal, reglamentos, contratos y recursos institucionales.</p>
                        </div>

                        <!-- Gestión Financiera -->
                        <div class="bg-white border border-gray-200 rounded-lg p-6 shadow-sm hover:shadow-md transition-shadow">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-[#db0455]/10 rounded-full flex items-center justify-center">
                                    <svg class="w-6 h-6 text-[#db0455]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <h4 class="text-lg font-semibold text-gray-800 ml-3">Gestión Financiera</h4>
                            </div>
                            <p class="text-gray-600 text-sm">Presupuesto, endeudamiento, donaciones, remuneraciones y economía universitaria.</p>
                        </div>

                        <!-- Gestión de Personal -->
                        <div class="bg-white border border-gray-200 rounded-lg p-6 shadow-sm hover:shadow-md transition-shadow">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-[#db0455]/10 rounded-full flex items-center justify-center">
                                    <svg class="w-6 h-6 text-[#db0455]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                    </svg>
                                </div>
                                <h4 class="text-lg font-semibold text-gray-800 ml-3">Gestión de Personal</h4>
                            </div>
                            <p class="text-gray-600 text-sm">Nombramiento, contratación, promoción de docentes y personal administrativo.</p>
                        </div>

                        <!-- Relaciones Institucionales -->
                        <div class="bg-white border border-gray-200 rounded-lg p-6 shadow-sm hover:shadow-md transition-shadow">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-[#db0455]/10 rounded-full flex items-center justify-center">
                                    <svg class="w-6 h-6 text-[#db0455]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9v-9m0-9v9"></path>
                                    </svg>
                                </div>
                                <h4 class="text-lg font-semibold text-gray-800 ml-3">Relaciones Institucionales</h4>
                            </div>
                            <p class="text-gray-600 text-sm">Convenios, cooperación internacional y vinculación interinstitucional.</p>
                        </div>

                        <!-- Control y Disciplina -->
                        <div class="bg-white border border-gray-200 rounded-lg p-6 shadow-sm hover:shadow-md transition-shadow">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-[#db0455]/10 rounded-full flex items-center justify-center">
                                    <svg class="w-6 h-6 text-[#db0455]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                    </svg>
                                </div>
                                <h4 class="text-lg font-semibold text-gray-800 ml-3">Control y Disciplina</h4>
                            </div>
                            <p class="text-gray-600 text-sm">Poder disciplinario, comisiones investigadoras y control del orden interno.</p>
                        </div>
                    </div>
                </div>

                <!-- Marco Legal -->
                <div class="bg-gradient-to-r from-[#db0455] to-[#ed145b] rounded-lg p-8 text-white">
                    <div class="text-center">
                        <svg class="w-12 h-12 mx-auto mb-4 opacity-75" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8s0 0 0 0l-6-6s0 0 0 0zM10.5 18.5h3v-3h-3v3zm0-4.5h3v-3h-3v3zm5-6.5L15 4.5 13.5 6l1.5 1.5L16.5 6z"/>
                        </svg>
                        <h3 class="text-2xl font-bold mb-4">Estructura Ejecutiva</h3>
                        <p class="text-lg mb-6 opacity-95">
                            El Consejo Universitario actúa como el órgano ejecutivo que materializa las decisiones de gobierno universitario
                        </p>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 max-w-4xl mx-auto">
                            <div class="bg-white/20 rounded-lg p-4">
                                <div class="flex items-center justify-center mb-2">
                                    <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                                    </svg>
                                    <span class="font-semibold">Gestión</span>
                                </div>
                                <p class="text-sm opacity-90">Administración y dirección</p>
                            </div>
                            <div class="bg-white/20 rounded-lg p-4">
                                <div class="flex items-center justify-center mb-2">
                                    <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                    </svg>
                                    <span class="font-semibold">Academia</span>
                                </div>
                                <p class="text-sm opacity-90">Dirección académica</p>
                            </div>
                            <div class="bg-white/20 rounded-lg p-4">
                                <div class="flex items-center justify-center mb-2">
                                    <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                    </svg>
                                    <span class="font-semibold">Administración</span>
                                </div>
                                <p class="text-sm opacity-90">Ejecución administrativa</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection