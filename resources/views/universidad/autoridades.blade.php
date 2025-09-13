@extends('layouts.app')

@section('content')
<div class="bg-gray-50 min-h-screen">
    <!-- Hero Section -->
    <div class="relative text-white py-20" style="background-image: url('{{ asset('img/presentacion/presentacionbackground.jpg') }}'); background-size: cover; background-position: center; background-attachment: fixed;">
        <div class="absolute inset-0 bg-gradient-to-r from-[#db0455]/80 to-[#ed145b]/70"></div>
        <div class="relative z-10 container mx-auto px-4">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4 drop-shadow-lg">Autoridades</h1>
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
                            <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2">Universidad</span>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="ml-1 text-sm font-medium text-[#db0455] md:ml-2">Autoridades</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-12">
        <!-- Rector Section -->
        <div class="bg-white rounded-lg shadow-lg mb-12 overflow-hidden border-t-4 border-[#db0455]">
            <div class="bg-gradient-to-r from-[#db0455] to-[#ed145b] text-white p-6">
                <h2 class="text-3xl font-bold flex items-center">
                    <svg class="w-8 h-8 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                    RECTOR(E) / VICERRECTOR ACADÉMICO
                </h2>
            </div>
            
            <div class="p-8">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <!-- Foto y datos básicos -->
                    <div class="lg:col-span-1">
                        <div class="text-center">
                            <div class="relative mb-6">
                                <div class="w-48 h-48 mx-auto rounded-lg overflow-hidden border-4 border-[#db0455] shadow-xl">
                                    <img src="{{ asset('img/presentacion/rector.jpeg') }}" alt="Dr. Joab Maquera Ramírez" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                                </div>
                                <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 bg-[#db0455] text-white px-4 py-1 rounded-full text-xs font-semibold shadow-lg">
                                    RECTOR(E)
                                </div>
                            </div>
                            
                            <h3 class="text-2xl font-bold text-gray-800 mb-2">Dr. Joab Maquera Ramírez</h3>
                            <p class="text-gray-600 mb-4">Rector(E) / Vicerrector Académico</p>
                            
                            <div class="bg-gray-50 rounded-lg p-4">
                                <div class="flex items-center justify-center mb-2">
                                    <svg class="w-4 h-4 mr-2 text-[#db0455]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 012 2z"/>
                                    </svg>
                                    <a href="mailto:jmaquera@unamad.edu.pe" class="text-sm text-[#db0455] hover:text-[#ed145b] transition-colors font-medium">
                                        jmaquera@unamad.edu.pe
                                    </a>
                                </div>
                                <div class="flex items-center justify-center">
                                    <svg class="w-4 h-4 mr-2 text-[#db0455]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9v-9m0-9v9"/>
                                    </svg>
                                    <a href="https://ctivitae.concytec.gob.pe/appDirectorioCTI/VerDatosInvestigador.do?id_investigador=23590" target="_blank" class="text-sm text-[#db0455] hover:text-[#ed145b] transition-colors font-medium">
                                        Web Info
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Datos académicos y experiencia -->
                    <div class="lg:col-span-2">
                        <!-- Datos Académicos -->
                        <div class="mb-8">
                            <h4 class="text-xl font-bold text-[#db0455] mb-4 flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                </svg>
                                DATOS ACADÉMICOS
                            </h4>
                            <div class="overflow-x-auto">
                                <table class="w-full text-sm border-collapse border border-gray-300">
                                    <thead>
                                        <tr class="bg-gray-100">
                                            <th class="border border-gray-300 px-4 py-2 text-left font-semibold">GRADO</th>
                                            <th class="border border-gray-300 px-4 py-2 text-left font-semibold">TÍTULO</th>
                                            <th class="border border-gray-300 px-4 py-2 text-left font-semibold">CENTRO DE ESTUDIOS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">BACHILLER</td>
                                            <td class="border border-gray-300 px-4 py-2">BACHILLER EN CIENCIAS DE LA INGENIERÍA DE SISTEMAS</td>
                                            <td class="border border-gray-300 px-4 py-2">UNIVERSIDAD NACIONAL DEL ALTIPLANO</td>
                                        </tr>
                                        <tr class="bg-gray-50">
                                            <td class="border border-gray-300 px-4 py-2">DOCTORADO</td>
                                            <td class="border border-gray-300 px-4 py-2">DOCTOR EN CIENCIAS DE LA EDUCACIÓN</td>
                                            <td class="border border-gray-300 px-4 py-2">UNIVERSIDAD NACIONAL DE EDUCACIÓN ENRIQUE GUZMÁN Y VALLE</td>
                                        </tr>
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">MAGISTER</td>
                                            <td class="border border-gray-300 px-4 py-2">MAGISTER SCIENTIAE EN CONTABILIDAD Y ADMINISTRACIÓN</td>
                                            <td class="border border-gray-300 px-4 py-2">UNIVERSIDAD NACIONAL DEL ALTIPLANO</td>
                                        </tr>
                                        <tr class="bg-gray-50">
                                            <td class="border border-gray-300 px-4 py-2">LICENCIADO / TÍTULO</td>
                                            <td class="border border-gray-300 px-4 py-2">INGENIERO DE SISTEMAS</td>
                                            <td class="border border-gray-300 px-4 py-2">UNIVERSIDAD NACIONAL DEL ALTIPLANO</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- Experiencia Laboral -->
                        <div class="mb-8">
                            <h4 class="text-xl font-bold text-[#db0455] mb-4 flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0V6a2 2 0 012 2v6a2 2 0 01-2 2H6a2 2 0 01-2-2V8a2 2 0 012-2V6"></path>
                                </svg>
                                EXPERIENCIA LABORAL
                            </h4>
                            <div class="overflow-x-auto">
                                <table class="w-full text-sm border-collapse border border-gray-300">
                                    <thead>
                                        <tr class="bg-gray-100">
                                            <th class="border border-gray-300 px-4 py-2 text-left font-semibold">PERIODO</th>
                                            <th class="border border-gray-300 px-4 py-2 text-left font-semibold">CARGO</th>
                                            <th class="border border-gray-300 px-4 py-2 text-left font-semibold">INSTITUCIÓN</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">2005-2021</td>
                                            <td class="border border-gray-300 px-4 py-2">DOCENTE (ORDINARIO – PRINCIPAL)</td>
                                            <td class="border border-gray-300 px-4 py-2">UNAMAD</td>
                                        </tr>
                                        <tr class="bg-gray-50">
                                            <td class="border border-gray-300 px-4 py-2">2021-ACTUALIDAD</td>
                                            <td class="border border-gray-300 px-4 py-2">VICERRECTOR ACADÉMICO</td>
                                            <td class="border border-gray-300 px-4 py-2">UNAMAD</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- Producción Científica -->
                        <div>
                            <h4 class="text-xl font-bold text-[#db0455] mb-4 flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                                PRODUCCIÓN CIENTÍFICA Y/O DE INVESTIGACIÓN
                            </h4>
                            <div class="overflow-x-auto">
                                <table class="w-full text-sm border-collapse border border-gray-300">
                                    <thead>
                                        <tr class="bg-gray-100">
                                            <th class="border border-gray-300 px-4 py-2 text-left font-semibold">TIPO PRODUCCIÓN</th>
                                            <th class="border border-gray-300 px-4 py-2 text-left font-semibold">TÍTULO</th>
                                            <th class="border border-gray-300 px-4 py-2 text-left font-semibold">FECHA</th>
                                            <th class="border border-gray-300 px-4 py-2 text-left font-semibold">FUENTE</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">TESIS DOCTORAL</td>
                                            <td class="border border-gray-300 px-4 py-2">Incidencia del recurso didáctico sistema e-learning personalizado en el proceso integral de enseñanza aprendizaje de los estudiantes de Ingeniería de Sistemas e Informática de la Universidad Nacional Amazónica de Madre de Dios, 2015</td>
                                            <td class="border border-gray-300 px-4 py-2">2017</td>
                                            <td class="border border-gray-300 px-4 py-2">ALICIA</td>
                                        </tr>
                                        <tr class="bg-gray-50">
                                            <td class="border border-gray-300 px-4 py-2">MasterThesis</td>
                                            <td class="border border-gray-300 px-4 py-2">Comercio electrónico y la comercialización de la castaña en el Departamento de Madre de Dios</td>
                                            <td class="border border-gray-300 px-4 py-2">2011</td>
                                            <td class="border border-gray-300 px-4 py-2">ALICIA</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Vicerrectora de Investigación Section -->
        <div class="bg-white rounded-lg shadow-lg mb-12 overflow-hidden border-t-4 border-[#db0455]">
            <div class="bg-gradient-to-r from-[#db0455] to-[#ed145b] text-white p-6">
                <h2 class="text-3xl font-bold flex items-center">
                    <svg class="w-8 h-8 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                    VICERRECTORA DE INVESTIGACIÓN
                </h2>
            </div>
            
            <div class="p-8">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <!-- Foto y datos básicos -->
                    <div class="lg:col-span-1">
                        <div class="text-center">
                            <div class="relative mb-6">
                                <div class="w-48 h-48 mx-auto rounded-lg overflow-hidden border-4 border-[#db0455] shadow-xl">
                                    <img src="{{ asset('img/autoridades/luzmarina.jpg') }}" alt="Dra. Luz Marina Almanza Huamán" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                                </div>
                                <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 bg-[#db0455] text-white px-4 py-1 rounded-full text-xs font-semibold shadow-lg">
                                    VICERRECTORA
                                </div>
                            </div>
                            
                            <h3 class="text-2xl font-bold text-gray-800 mb-2">Dra. Luz Marina Almanza Huamán</h3>
                            <p class="text-gray-600 mb-4">Vicerrectora de Investigación</p>
                            
                            <div class="bg-gray-50 rounded-lg p-4">
                                <div class="flex items-center justify-center mb-2">
                                    <svg class="w-4 h-4 mr-2 text-[#db0455]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 012 2z"/>
                                    </svg>
                                    <a href="mailto:lalmanza@unamad.edu.pe" class="text-sm text-[#db0455] hover:text-[#ed145b] transition-colors font-medium">
                                        lalmanza@unamad.edu.pe
                                    </a>
                                </div>
                                <div class="flex items-center justify-center">
                                    <svg class="w-4 h-4 mr-2 text-[#db0455]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9v-9m0-9v9"/>
                                    </svg>
                                    <a href="https://dina.concytec.gob.pe/appDirectorioCTI/VerDatosInvestigador.do;jsessionid=826642570f15c1f72462218ecdde?id_investigador=86686" target="_blank" class="text-sm text-[#db0455] hover:text-[#ed145b] transition-colors font-medium">
                                        Web Info
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Datos académicos y experiencia -->
                    <div class="lg:col-span-2">
                        <!-- Datos Académicos -->
                        <div class="mb-8">
                            <h4 class="text-xl font-bold text-[#db0455] mb-4 flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                </svg>
                                DATOS ACADÉMICOS
                            </h4>
                            <div class="overflow-x-auto">
                                <table class="w-full text-sm border-collapse border border-gray-300">
                                    <thead>
                                        <tr class="bg-gray-100">
                                            <th class="border border-gray-300 px-4 py-2 text-left font-semibold">GRADO</th>
                                            <th class="border border-gray-300 px-4 py-2 text-left font-semibold">TÍTULO</th>
                                            <th class="border border-gray-300 px-4 py-2 text-left font-semibold">CENTRO DE ESTUDIOS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">LICENCIADO / TÍTULO</td>
                                            <td class="border border-gray-300 px-4 py-2">ABOGADO</td>
                                            <td class="border border-gray-300 px-4 py-2">UNIVERSIDAD NACIONAL DE SAN ANTONIO ABAD DEL CUSCO</td>
                                        </tr>
                                        <tr class="bg-gray-50">
                                            <td class="border border-gray-300 px-4 py-2">BACHILLER</td>
                                            <td class="border border-gray-300 px-4 py-2">BACHILLER EN DERECHO</td>
                                            <td class="border border-gray-300 px-4 py-2">UNIVERSIDAD NACIONAL DE SAN ANTONIO ABAD DEL CUSCO</td>
                                        </tr>
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">LICENCIADO / TÍTULO</td>
                                            <td class="border border-gray-300 px-4 py-2">TÍTULO DE ABOGADO</td>
                                            <td class="border border-gray-300 px-4 py-2">UNIVERSIDAD NACIONAL DE SAN ANTONIO ABAD DEL CUSCO</td>
                                        </tr>
                                        <tr class="bg-gray-50">
                                            <td class="border border-gray-300 px-4 py-2">DOCTORADO</td>
                                            <td class="border border-gray-300 px-4 py-2">DOCTOR EN CIENCIAS DE LA EDUCACIÓN</td>
                                            <td class="border border-gray-300 px-4 py-2">UNIVERSIDAD NACIONAL DE EDUCACIÓN ENRIQUE GUZMÁN Y VALLE</td>
                                        </tr>
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">MAGISTER</td>
                                            <td class="border border-gray-300 px-4 py-2">MAGISTER EN CIENCIAS DE LA EDUCACIÓN, ESPECIALIDAD: EDUCACIÓN AMBIENTAL Y DESARROLLO SOSTENIBLE</td>
                                            <td class="border border-gray-300 px-4 py-2">UNIVERSIDAD NACIONAL DE EDUCACIÓN ENRIQUE GUZMÁN Y VALLE</td>
                                        </tr>
                                        <tr class="bg-gray-50">
                                            <td class="border border-gray-300 px-4 py-2">ESPECIALIDAD</td>
                                            <td class="border border-gray-300 px-4 py-2">SEGUNDA ESPECIALIDAD EN EDUCACIÓN SUPERIOR Y ANDRAGOGÍA</td>
                                            <td class="border border-gray-300 px-4 py-2">UNIVERSIDAD JOSÉ CARLOS MARIÁTEGUI</td>
                                        </tr>
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">MAGISTER</td>
                                            <td class="border border-gray-300 px-4 py-2">MAESTRO EN DERECHO CON MENCIÓN EN CIENCIAS PENALES</td>
                                            <td class="border border-gray-300 px-4 py-2">UNIVERSIDAD JOSÉ CARLOS MARIÁTEGUI</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- Experiencia Laboral -->
                        <div class="mb-8">
                            <h4 class="text-xl font-bold text-[#db0455] mb-4 flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0V6a2 2 0 012 2v6a2 2 0 01-2 2H6a2 2 0 01-2-2V8a2 2 0 012-2V6"></path>
                                </svg>
                                EXPERIENCIA LABORAL
                            </h4>
                            <div class="overflow-x-auto">
                                <table class="w-full text-sm border-collapse border border-gray-300">
                                    <thead>
                                        <tr class="bg-gray-100">
                                            <th class="border border-gray-300 px-4 py-2 text-left font-semibold">PERIODO</th>
                                            <th class="border border-gray-300 px-4 py-2 text-left font-semibold">CARGO</th>
                                            <th class="border border-gray-300 px-4 py-2 text-left font-semibold">INSTITUCIÓN</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">2005-2021</td>
                                            <td class="border border-gray-300 px-4 py-2">DOCENTE (ORDINARIO – PRINCIPAL)</td>
                                            <td class="border border-gray-300 px-4 py-2">UNAMAD</td>
                                        </tr>
                                        <tr class="bg-gray-50">
                                            <td class="border border-gray-300 px-4 py-2">2021 - Actualidad</td>
                                            <td class="border border-gray-300 px-4 py-2">VICERRECTORA DE INVESTIGACIÓN</td>
                                            <td class="border border-gray-300 px-4 py-2">UNAMAD</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- Producción Científica -->
                        <div>
                            <h4 class="text-xl font-bold text-[#db0455] mb-4 flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                                PRODUCCIÓN CIENTÍFICA Y/O DE INVESTIGACIÓN
                            </h4>
                            <div class="overflow-x-auto">
                                <table class="w-full text-sm border-collapse border border-gray-300">
                                    <thead>
                                        <tr class="bg-gray-100">
                                            <th class="border border-gray-300 px-4 py-2 text-left font-semibold">TIPO PRODUCCIÓN</th>
                                            <th class="border border-gray-300 px-4 py-2 text-left font-semibold">TÍTULO</th>
                                            <th class="border border-gray-300 px-4 py-2 text-left font-semibold">FECHA</th>
                                            <th class="border border-gray-300 px-4 py-2 text-left font-semibold">FUENTE</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">INVESTIGACIÓN</td>
                                            <td class="border border-gray-300 px-4 py-2">CONDUCCIÓN EN ESTADO DE EBRIEDAD Y LAS TRANSGRESIONES A LA LEY PENAL - CIUDAD DE PUERTO MALDONADO</td>
                                            <td class="border border-gray-300 px-4 py-2">2019</td>
                                            <td class="border border-gray-300 px-4 py-2">ORCID</td>
                                        </tr>
                                        <tr class="bg-gray-50">
                                            <td class="border border-gray-300 px-4 py-2">INVESTIGACIÓN</td>
                                            <td class="border border-gray-300 px-4 py-2">LOS CONTRATOS DE LOCACIÓN DE SERVICIO Y SU DESNATURALIZACIÓN Y LA FORMACIÓN DE UN NUEVO CONTRATO EN LA UNIVERSIDAD NACIONAL AMAZÓNICA DE MADRE DE DIOS PERIODO 1 ENERO DEL 2017 AL 31 DE DICIEMBRE 2018</td>
                                            <td class="border border-gray-300 px-4 py-2">2019</td>
                                            <td class="border border-gray-300 px-4 py-2">ORCID</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection