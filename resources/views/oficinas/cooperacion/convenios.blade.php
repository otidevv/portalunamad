@extends('layouts.app')

@section('content')
    <div class="bg-gray-50 min-h-screen">
        <!-- Hero Section -->
        <div class="relative text-white py-20"
            style="background-image: url('{{ asset('img/presentacion/presentacionbackground.jpg') }}'); background-size: cover; background-position: center; background-attachment: fixed;">
            <div class="absolute inset-0 bg-gradient-to-r from-[#db0455]/80 to-[#ed145b]/70"></div>
            <div class="relative z-10 container mx-auto px-4">
                <div class="text-center">
                    <h1 class="text-4xl md:text-5xl font-bold mb-4 drop-shadow-lg">Convenios</h1>
                    <p class="text-xl md:text-2xl opacity-90 drop-shadow-md">Oficina de Cooperación y Relaciones
                        Internacionales</p>
                </div>
            </div>
        </div>

        <!-- Navigation Breadcrumb -->
        <div class="bg-white border-b border-gray-200">
            <div class="container mx-auto px-4 py-4">
                <nav class="flex" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-3">
                        <li class="inline-flex items-center">
                            <a href="/"
                                class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-[#db0455]">
                                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                                    </path>
                                </svg>
                                Inicio
                            </a>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2">Oficinas</span>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2">Cooperación y Relaciones
                                    Internacionales</span>
                            </div>
                        </li>
                        <li aria-current="page">
                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="ml-1 text-sm font-medium text-[#db0455] md:ml-2">Convenios</span>
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
                    @include('oficinas.cooperacion.partials.navigation')
                </div>

                <!-- Main Content -->
                <div class="lg:col-span-2">
                    <div class="bg-white rounded-lg shadow-lg p-8 border-t-4 border-[#db0455]">
                        <div class="flex items-start space-x-4 mb-8">
                            <div class="bg-gradient-to-r from-[#db0455] to-[#ed145b] p-4 rounded-full">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h2 class="text-3xl font-bold text-gray-800 mb-4">Información sobre Convenios</h2>
                                <div class="w-20 h-1 bg-gradient-to-r from-[#db0455] to-[#ed145b]"></div>
                            </div>
                        </div>

                        <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed">
                            <!-- ¿Qué es un convenio? -->
                            <div
                                class="bg-gradient-to-r from-[#db0455]/5 to-[#ed145b]/5 rounded-lg p-6 border-l-4 border-[#db0455] mb-8">
                                <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                                    <svg class="w-6 h-6 mr-2 text-[#db0455]" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                        </path>
                                    </svg>
                                    ¿Qué es un Convenio o Acuerdo de Cooperación?
                                </h3>
                                <p class="text-gray-700 leading-relaxed mb-4">
                                    También conocido como <strong>convenio marco o general</strong>, es un instrumento de
                                    cooperación suscrito entre dos o más instituciones dedicadas a la enseñanza de la
                                    educación universitaria superior o a la investigación, sin implicaciones financieras
                                    directas, que permiten la cooperación promoviendo el desarrollo de investigaciones u
                                    otras actividades académicas y culturales.
                                </p>
                                <p class="text-gray-700 leading-relaxed">
                                    Estos convenios tienen como propósito fomentar programas de intercambios académicos;
                                    promover las investigaciones conjuntas; efectuar proyectos de desarrollo; establecer
                                    convenios para prácticas pre profesionales a favor de nuestros estudiantes, realizar
                                    transferencia de donaciones, desarrollar prestaciones o contrataciones de servicios
                                    educativos y establecer directivas para la cooperación interinstitucional, entre otros.
                                </p>
                            </div>

                            <!-- Convenios Específicos -->
                            <div class="bg-blue-50 rounded-lg p-6 border-l-4 border-blue-500 mb-8">
                                <p class="text-gray-700 leading-relaxed">
                                    Un convenio de cooperación funciona, en conjunto, mediante <strong>Convenios
                                        Específicos</strong>, los cuales promueven la cooperación en áreas de interés común,
                                    y tienen la función de implementar y efectuar las modalidades de cooperación mencionadas
                                    anteriormente, definiendo así las actividades y el plan de trabajo a ser ejecutados.
                                </p>
                            </div>

                            <!-- Modalidades de Cooperación -->
                            <div class="mb-8">
                                <h3 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                                    <svg class="w-7 h-7 mr-2 text-[#db0455]" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                                        </path>
                                    </svg>
                                    Principales Modalidades de Cooperación
                                </h3>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <!-- Programa de Intercambio Académico -->
                                    <div
                                        class="bg-white rounded-lg p-6 border border-gray-200 hover:shadow-lg transition-shadow">
                                        <h4 class="text-lg font-bold text-gray-800 mb-3 flex items-center">
                                            <span
                                                class="bg-[#db0455] text-white rounded-full w-6 h-6 flex items-center justify-center text-sm font-bold mr-2">A</span>
                                            Programa de Intercambio Académico
                                        </h4>
                                        <ul class="space-y-2 text-sm text-gray-700">
                                            <li class="flex items-start space-x-2">
                                                <span
                                                    class="w-1.5 h-1.5 bg-[#db0455] rounded-full mt-2 flex-shrink-0"></span>
                                                <span>Intercambio de estudiantes</span>
                                            </li>
                                            <li class="flex items-start space-x-2">
                                                <span
                                                    class="w-1.5 h-1.5 bg-[#db0455] rounded-full mt-2 flex-shrink-0"></span>
                                                <span>Intercambio de docentes, investigadores y staff profesional</span>
                                            </li>
                                            <li class="flex items-start space-x-2">
                                                <span
                                                    class="w-1.5 h-1.5 bg-[#db0455] rounded-full mt-2 flex-shrink-0"></span>
                                                <span>Intercambio de publicaciones académicas y de información
                                                    estudiantil</span>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- Proyectos para Investigaciones Conjuntas -->
                                    <div
                                        class="bg-white rounded-lg p-6 border border-gray-200 hover:shadow-lg transition-shadow">
                                        <h4 class="text-lg font-bold text-gray-800 mb-3 flex items-center">
                                            <span
                                                class="bg-blue-500 text-white rounded-full w-6 h-6 flex items-center justify-center text-sm font-bold mr-2">B</span>
                                            Proyectos para Investigaciones Conjuntas
                                        </h4>
                                        <p class="text-sm text-gray-700">
                                            Desarrollo colaborativo de proyectos de investigación entre instituciones para
                                            el avance del conocimiento científico y académico.
                                        </p>
                                    </div>

                                    <!-- Proyectos de Desarrollo -->
                                    <div
                                        class="bg-white rounded-lg p-6 border border-gray-200 hover:shadow-lg transition-shadow">
                                        <h4 class="text-lg font-bold text-gray-800 mb-3 flex items-center">
                                            <span
                                                class="bg-green-500 text-white rounded-full w-6 h-6 flex items-center justify-center text-sm font-bold mr-2">C</span>
                                            Proyectos de Desarrollo
                                        </h4>
                                        <p class="text-sm text-gray-700">
                                            Iniciativas orientadas al desarrollo institucional, académico y comunitario a
                                            través de la cooperación interinstitucional.
                                        </p>
                                    </div>

                                    <!-- Prácticas Pre Profesionales -->
                                    <div
                                        class="bg-white rounded-lg p-6 border border-gray-200 hover:shadow-lg transition-shadow">
                                        <h4 class="text-lg font-bold text-gray-800 mb-3 flex items-center">
                                            <span
                                                class="bg-purple-500 text-white rounded-full w-6 h-6 flex items-center justify-center text-sm font-bold mr-2">D</span>
                                            Prácticas Pre Profesionales
                                        </h4>
                                        <p class="text-sm text-gray-700">
                                            Oportunidades de experiencia laboral y formación práctica para estudiantes en
                                            instituciones aliadas.
                                        </p>
                                    </div>

                                    <!-- Donaciones -->
                                    <div
                                        class="bg-white rounded-lg p-6 border border-gray-200 hover:shadow-lg transition-shadow">
                                        <h4 class="text-lg font-bold text-gray-800 mb-3 flex items-center">
                                            <span
                                                class="bg-orange-500 text-white rounded-full w-6 h-6 flex items-center justify-center text-sm font-bold mr-2">E</span>
                                            Donaciones
                                        </h4>
                                        <p class="text-sm text-gray-700">
                                            Transferencia de recursos, equipos, materiales o conocimientos entre
                                            instituciones para fortalecer capacidades.
                                        </p>
                                    </div>

                                    <!-- Capacitación y Extensión -->
                                    <div
                                        class="bg-white rounded-lg p-6 border border-gray-200 hover:shadow-lg transition-shadow">
                                        <h4 class="text-lg font-bold text-gray-800 mb-3 flex items-center">
                                            <span
                                                class="bg-indigo-500 text-white rounded-full w-6 h-6 flex items-center justify-center text-sm font-bold mr-2">F</span>
                                            Capacitación y Extensión
                                        </h4>
                                        <p class="text-sm text-gray-700">
                                            Actividades de capacitación y programas de extensión con instituciones privadas
                                            dirigidas al público en general.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Modelos de Convenios -->
                            <div
                                class="bg-gradient-to-r from-green-50 to-emerald-50 rounded-lg p-6 border-l-4 border-green-500 mb-8">
                                <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                                    <svg class="w-6 h-6 mr-2 text-green-500" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                        </path>
                                    </svg>
                                    Modelos de Convenios
                                </h3>
                                <p class="text-gray-700 mb-4">Descargue los modelos de convenios: Marco, Específicos e
                                    Intercambios</p>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div class="bg-white rounded-lg p-4 border border-gray-200">
                                        <h4 class="font-semibold text-gray-800 mb-2">Convenio Marco</h4>
                                        <div class="space-y-2">
                                            <a href="#"
                                                class="inline-flex items-center text-sm text-[#db0455] hover:text-[#ed145b] transition-colors">
                                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                                    </path>
                                                </svg>
                                                Español
                                            </a>
                                            <br>
                                            <a href="#"
                                                class="inline-flex items-center text-sm text-[#db0455] hover:text-[#ed145b] transition-colors">
                                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                                    </path>
                                                </svg>
                                                Inglés
                                            </a>
                                        </div>
                                    </div>
                                    <div class="bg-white rounded-lg p-4 border border-gray-200">
                                        <h4 class="font-semibold text-gray-800 mb-2">Convenio Específico</h4>
                                        <div class="space-y-2">
                                            <a href="#"
                                                class="inline-flex items-center text-sm text-[#db0455] hover:text-[#ed145b] transition-colors">
                                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                                    </path>
                                                </svg>
                                                Español
                                            </a>
                                            <br>
                                            <a href="#"
                                                class="inline-flex items-center text-sm text-[#db0455] hover:text-[#ed145b] transition-colors">
                                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                                    </path>
                                                </svg>
                                                Inglés
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Procedimiento de Suscripción -->
                            <div class="mb-8">
                                <h3 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                                    <svg class="w-7 h-7 mr-2 text-[#db0455]" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2">
                                        </path>
                                    </svg>
                                    Suscripción de Convenios - Procedimiento
                                </h3>

                                <div class="space-y-4 mb-6">
                                    <div class="flex items-start space-x-4 p-4 bg-white rounded-lg border border-gray-200">
                                        <div
                                            class="bg-[#db0455] text-white rounded-full w-8 h-8 flex items-center justify-center text-sm font-bold flex-shrink-0">
                                            A</div>
                                        <div>
                                            <p class="text-gray-700">
                                                Los proyectos de convenio serán presentados ante el
                                                <strong>Rectorado</strong>, quien lo remitirá a la oficina de cooperación -
                                                <strong>OCRI</strong> para su revisión y opinión.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="flex items-start space-x-4 p-4 bg-white rounded-lg border border-gray-200">
                                        <div
                                            class="bg-blue-500 text-white rounded-full w-8 h-8 flex items-center justify-center text-sm font-bold flex-shrink-0">
                                            B</div>
                                        <div>
                                            <p class="text-gray-700">
                                                La <strong>OCRI</strong> solicitará un informe a la oficina de asesoría
                                                legal - <strong>OAL</strong> sobre los aspectos legales del proyecto de
                                                convenio, cuidando salvaguardar los intereses de la universidad. En caso no
                                                se hagan observaciones, el documento será elevado al rectorado para ser
                                                aprobado en el consejo universitario.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="flex items-start space-x-4 p-4 bg-white rounded-lg border border-gray-200">
                                        <div
                                            class="bg-green-500 text-white rounded-full w-8 h-8 flex items-center justify-center text-sm font-bold flex-shrink-0">
                                            C</div>
                                        <div>
                                            <p class="text-gray-700">
                                                En caso de existir observaciones en el texto del convenio, se procederá a
                                                las correcciones correspondientes antes de aprobar la suscripción del
                                                convenio.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Flujograma -->
                            <div
                                class="bg-gradient-to-r from-[#db0455]/5 to-[#ed145b]/5 rounded-lg p-6 border-l-4 border-[#db0455] mb-8">
                                <h3 class="text-xl font-bold text-gray-800 mb-6 flex items-center">
                                    <svg class="w-6 h-6 mr-2 text-[#db0455]" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
                                        </path>
                                    </svg>
                                    Flujograma de Suscripción
                                </h3>

                                <div class="flex justify-center mb-6">
                                    <img src="{{ asset('img/section/cooperacionrelacionesinternacionales/flujogramasuscripcion.png') }}"
                                        alt="Flujograma de Suscripción de Convenios"
                                        class="max-w-full h-auto rounded-lg shadow-lg border border-gray-200">
                                </div>

                                <div class="text-center text-sm text-gray-600">
                                    <p class="italic">Proceso de suscripción de convenios - OCRI UNAMAD</p>
                                </div>
                            </div>

                            <!-- Convenios Institucionales -->
                            <div
                                class="bg-gradient-to-r from-indigo-50 to-blue-50 rounded-lg p-6 border-l-4 border-indigo-500">
                                <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                                    <svg class="w-6 h-6 mr-2 text-indigo-500" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                                        </path>
                                    </svg>
                                    Convenios Institucionales
                                </h3>
                                <p class="text-gray-700 mb-4">
                                    Acceda a la lista completa de convenios institucionales vigentes de la Universidad
                                    Nacional Amazónica de Madre de Dios.
                                </p>
                                <a href="https://www.gob.pe/institucion/unamad/colecciones/16884-convenios-institucionales"
                                    target="_blank"
                                    class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-[#db0455] to-[#ed145b] text-white font-semibold rounded-lg hover:shadow-lg transform hover:scale-105 transition-all duration-200">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14">
                                        </path>
                                    </svg>
                                    Ver Convenios Institucionales
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
