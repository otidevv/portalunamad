@extends('layouts.app')

@section('content')
<div class="bg-gray-50 min-h-screen">
    <!-- Hero Section -->
    <div class="relative text-white py-20" style="background-image: url('{{ asset('img/presentacion/presentacionbackground.jpg') }}'); background-size: cover; background-position: center; background-attachment: fixed;">
        <div class="absolute inset-0 bg-gradient-to-r from-[#db0455]/80 to-[#ed145b]/70"></div>
        <div class="relative z-10 container mx-auto px-4">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4 drop-shadow-lg">Secretaría General</h1>
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
                            <span class="ml-1 text-sm font-medium text-[#db0455] md:ml-2">Secretaría General</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-12">
        <!-- Main Section with border -->
        <div class="bg-white rounded-lg shadow-lg mb-12 overflow-hidden border-t-4 border-[#db0455]">
            <div class="bg-gradient-to-r from-[#db0455] to-[#ed145b] text-white p-6">
                <h2 class="text-3xl font-bold flex items-center">
                    <svg class="w-8 h-8 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                    SECRETARÍA GENERAL
                </h2>
            </div>
            
            <div class="p-8">
                <!-- Description -->
                <div class="mb-8">
                    <div class="prose max-w-none">
                        <p class="text-lg text-gray-700 leading-relaxed mb-6">
                            La Secretaría General es el órgano de apoyo responsable de certificar los documentos oficiales de la universidad en su calidad de fedatario; asimismo, conducir y administrar los procesos resolutivos de la Asamblea Universitaria, Consejo Universitario y Rectorado; así como, dirigir la emisión y otorgamiento de grados académicos y títulos universitarios, preservar el acervo documentario institucional y dirigir y supervisar los procesos de trámite documentario.
                        </p>
                    </div>
                </div>

                <!-- Functions Section -->
                <div>
                    <h4 class="text-xl font-bold text-[#db0455] mb-6 flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                        </svg>
                        FUNCIONES DE LA SECRETARÍA GENERAL
                    </h4>
                    
                    <div class="space-y-4">
                        <div class="flex items-start space-x-4 p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors">
                            <div class="flex-shrink-0 w-10 h-10 bg-[#db0455] text-white rounded-full flex items-center justify-center font-bold">
                                1
                            </div>
                            <p class="text-gray-700 flex-1">
                                Planificar, organizar y conducir la agenda y acuerdos de las sesiones de los órganos de gobierno, y de la Alta Dirección de la universidad.
                            </p>
                        </div>

                        <div class="flex items-start space-x-4 p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors">
                            <div class="flex-shrink-0 w-10 h-10 bg-[#db0455] text-white rounded-full flex items-center justify-center font-bold">
                                2
                            </div>
                            <p class="text-gray-700 flex-1">
                                Formular actas y/o resoluciones conforme a los acuerdos de las sesiones de los órganos de gobierno, y de la Alta Dirección de la universidad. Asimismo, realizar las respectivas publicaciones en el portal web de las citadas actas y resoluciones.
                            </p>
                        </div>

                        <div class="flex items-start space-x-4 p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors">
                            <div class="flex-shrink-0 w-10 h-10 bg-[#db0455] text-white rounded-full flex items-center justify-center font-bold">
                                3
                            </div>
                            <p class="text-gray-700 flex-1">
                                Dirigir y supervisar los procesos de trámite documentario, archivo y registro de grados académicos y títulos de la universidad.
                            </p>
                        </div>

                        <div class="flex items-start space-x-4 p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors">
                            <div class="flex-shrink-0 w-10 h-10 bg-[#db0455] text-white rounded-full flex items-center justify-center font-bold">
                                4
                            </div>
                            <p class="text-gray-700 flex-1">
                                Certificar las copias de documentos oficiales expedidos por las dependencias autorizadas de la UNAMAD.
                            </p>
                        </div>

                        <div class="flex items-start space-x-4 p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors">
                            <div class="flex-shrink-0 w-10 h-10 bg-[#db0455] text-white rounded-full flex items-center justify-center font-bold">
                                5
                            </div>
                            <p class="text-gray-700 flex-1">
                                Fomentar y sensibilizar sobre las normas de transparencia y acceso a la información pública conforme a la normatividad.
                            </p>
                        </div>

                        <div class="flex items-start space-x-4 p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors">
                            <div class="flex-shrink-0 w-10 h-10 bg-[#db0455] text-white rounded-full flex items-center justify-center font-bold">
                                6
                            </div>
                            <p class="text-gray-700 flex-1">
                                Gestionar la atención de las solicitudes y proporcionar la información requerida en aplicación de la Ley de Transparencia y Acceso a la Información Pública.
                            </p>
                        </div>

                        <div class="flex items-start space-x-4 p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors">
                            <div class="flex-shrink-0 w-10 h-10 bg-[#db0455] text-white rounded-full flex items-center justify-center font-bold">
                                7
                            </div>
                            <p class="text-gray-700 flex-1">
                                Conducir la expedición de diplomas de grados académicos y títulos profesionales; así como distinciones honoríficas.
                            </p>
                        </div>

                        <div class="flex items-start space-x-4 p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors">
                            <div class="flex-shrink-0 w-10 h-10 bg-[#db0455] text-white rounded-full flex items-center justify-center font-bold">
                                8
                            </div>
                            <p class="text-gray-700 flex-1">
                                Administrar el archivo centralizado de la universidad.
                            </p>
                        </div>

                        <div class="flex items-start space-x-4 p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors">
                            <div class="flex-shrink-0 w-10 h-10 bg-[#db0455] text-white rounded-full flex items-center justify-center font-bold">
                                9
                            </div>
                            <p class="text-gray-700 flex-1">
                                Las demás funciones asignadas por el Rectorado, o aquellas que sean otorgadas por norma expresa.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection