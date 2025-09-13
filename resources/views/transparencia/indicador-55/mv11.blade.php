@extends('layouts.app')

@section('content')
<div class="bg-gradient-to-br from-indigo-50 to-blue-50 min-h-screen">
    <div class="bg-gradient-to-r from-indigo-600 to-blue-600 text-white py-16">
        <div class="container mx-auto px-4">
            <div class="flex items-center mb-4">
                <svg class="w-8 h-8 mr-3" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M16,8C16,10.21 14.21,12 12,12C9.79,12 8,10.21 8,8L8.11,7.06L5.5,5.5L3.77,8.71C2.73,8.3 2,7.25 2,6A2,2 0 0,1 4,4H6L7.5,2L8.5,3L9.44,2.06C9.92,2.03 10.42,2 10.92,2C12.11,2 13.27,2.16 14.37,2.44L18.5,3.5L21,5V7L19.04,6.24L18.5,7.5L17.5,6.5L16.5,7.5L15.41,6.41C15.78,7.03 16,7.76 16,8M12,14C16.42,14 20,15.79 20,18V20H4V18C4,15.79 7.58,14 12,14Z"/>
                </svg>
                <h1 class="text-4xl font-bold">MV11: Plana Docente</h1>
            </div>
            <p class="text-xl text-indigo-100">
                Plana docente y docentes investigadores por departamentos académicos
            </p>
        </div>
    </div>

    <div class="container mx-auto px-4 py-8">
        <nav class="text-sm text-gray-600 mb-8">
            <a href="/" class="hover:text-indigo-600">Inicio</a>
            <span class="mx-2">›</span>
            <a href="/transparencia/indicador-55" class="hover:text-indigo-600">Transparencia - Indicador 55</a>
            <span class="mx-2">›</span>
            <span class="text-gray-800">MV11: Plana Docente</span>
        </nav>

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
            <div class="lg:col-span-3">
                <div class="bg-white rounded-lg shadow-md p-8">
                    <div class="mb-8">
                        <h2 class="text-2xl font-bold text-indigo-800 mb-4 flex items-center">
                            <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M16,8C16,10.21 14.21,12 12,12C9.79,12 8,10.21 8,8L8.11,7.06L5.5,5.5L3.77,8.71C2.73,8.3 2,7.25 2,6A2,2 0 0,1 4,4H6L7.5,2L8.5,3L9.44,2.06C9.92,2.03 10.42,2 10.92,2C12.11,2 13.27,2.16 14.37,2.44L18.5,3.5L21,5V7L19.04,6.24L18.5,7.5L17.5,6.5L16.5,7.5L15.41,6.41C15.78,7.03 16,7.76 16,8M12,14C16.42,14 20,15.79 20,18V20H4V18C4,15.79 7.58,14 12,14Z"/>
                            </svg>
                            Plana Docente y Docentes Investigadores
                        </h2>
                        <p class="text-gray-700 mb-6">
                            La Universidad Nacional Amazónica de Madre de Dios presenta la relación completa de su plana docente 
                            y docentes investigadores, organizados por departamentos académicos y años.
                        </p>
                    </div>

                    <div class="space-y-8">
                        <!-- 2024 Section -->
                        <div class="border-l-4 border-indigo-500 pl-6 py-4 bg-indigo-50">
                            <h3 class="text-xl font-semibold text-indigo-800 mb-4">2024</h3>
                            
                            <div class="mb-6">
                                <div class="flex items-center justify-between p-4 bg-white rounded-lg border border-indigo-200 hover:bg-indigo-50 transition-colors mb-4">
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5 text-purple-600 mr-3" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M9.5,3A6.5,6.5 0 0,1 16,9.5C16,11.11 15.41,12.59 14.44,13.73L14.71,14H15.5L20.5,19L19,20.5L14,15.5V14.71L13.73,14.44C12.59,15.41 11.11,16 9.5,16A6.5,6.5 0 0,1 3,9.5A6.5,6.5 0 0,1 9.5,3M9.5,5C7,5 5,7 5,9.5C5,12 7,14 9.5,14C12,14 14,12 14,9.5C14,7 12,5 9.5,5Z"/>
                                        </svg>
                                        <div>
                                            <h4 class="font-medium text-gray-900">Docentes Investigadores 2024</h4>
                                            <p class="text-sm text-gray-600">Registro de docentes con actividad investigativa</p>
                                        </div>
                                    </div>
                                    <a href="https://sinc.unamad.edu.pe:8000/media/pdf/55_-_2024_-_MV_11.pdf" 
                                       target="_blank" 
                                       rel="noopener noreferrer"
                                       class="text-indigo-600 hover:text-indigo-800 font-medium">
                                        Ver documento →
                                    </a>
                                </div>
                            </div>

                            <h4 class="text-lg font-semibold text-indigo-700 mb-3">Plana Docente por Departamento Académico:</h4>
                            
                            <div class="space-y-3">
                                <!-- D.A. Administración y Contabilidad 2024 -->
                                <div class="bg-white rounded-lg border border-indigo-200 p-4">
                                    <h5 class="font-medium text-gray-900 mb-2">D.A. Administración y Contabilidad</h5>
                                    <div class="flex flex-wrap gap-3">
                                        <a href="https://sinc.unamad.edu.pe:8000/media/pdf/RELACION_DE_DOCENTES_NOMBRADOS_Y_CONTRATADOS_2024.pdf" 
                                           target="_blank" rel="noopener noreferrer"
                                           class="inline-flex items-center px-3 py-1 bg-red-50 text-red-700 rounded-md hover:bg-red-100 text-sm">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                            </svg>
                                            PDF
                                        </a>
                                        <a href="https://sinc.unamad.edu.pe:8000/media/pdf/RELACION_DOCENTES_NOMBRADOS_Y_CONTRATADOS_2024.xlsx" 
                                           target="_blank" rel="noopener noreferrer"
                                           class="inline-flex items-center px-3 py-1 bg-green-50 text-green-700 rounded-md hover:bg-green-100 text-sm">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20M12,12H15V16H12V12M8,12H11V18H8V12Z"/>
                                            </svg>
                                            Excel
                                        </a>
                                    </div>
                                </div>

                                <!-- D.A. Ciencias Básicas 2024 -->
                                <div class="bg-white rounded-lg border border-indigo-200 p-4">
                                    <h5 class="font-medium text-gray-900 mb-2">D.A. Ciencias Básicas</h5>
                                    <div class="flex flex-wrap gap-3">
                                        <a href="https://sinc.unamad.edu.pe:8000/media/pdf/RELACION_DE_DOCENTES_ORDINARIOS_2024.pdf" 
                                           target="_blank" rel="noopener noreferrer"
                                           class="inline-flex items-center px-3 py-1 bg-red-50 text-red-700 rounded-md hover:bg-red-100 text-sm">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                            </svg>
                                            Ordinarios
                                        </a>
                                        <a href="https://sinc.unamad.edu.pe:8000/media/pdf/RELACIÓN_DE_DOCENTES_CONTRATADOS_2024.pdf" 
                                           target="_blank" rel="noopener noreferrer"
                                           class="inline-flex items-center px-3 py-1 bg-orange-50 text-orange-700 rounded-md hover:bg-orange-100 text-sm">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                            </svg>
                                            Contratados
                                        </a>
                                    </div>
                                </div>

                                <!-- Continue with other departments for 2024... -->
                                <div class="bg-white rounded-lg border border-indigo-200 p-4">
                                    <h5 class="font-medium text-gray-900 mb-2">D.A. Derecho y Ciencias Políticas</h5>
                                    <div class="flex flex-wrap gap-3">
                                        <a href="https://sinc.unamad.edu.pe:8000/media/pdf/RELACION_DE_DOCENTES_2024.pdf" 
                                           target="_blank" rel="noopener noreferrer"
                                           class="inline-flex items-center px-3 py-1 bg-red-50 text-red-700 rounded-md hover:bg-red-100 text-sm">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                            </svg>
                                            PDF
                                        </a>
                                        <a href="https://www.gob.pe/institucion/unamad/normas-legales/5628265-282-2024-unamad-cu" 
                                           target="_blank" rel="noopener noreferrer"
                                           class="inline-flex items-center px-3 py-1 bg-blue-50 text-blue-700 rounded-md hover:bg-blue-100 text-sm">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M9,12L11,14L15,10M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2Z"/>
                                            </svg>
                                            Resolución
                                        </a>
                                    </div>
                                </div>

                                <!-- Add more departments for 2024... -->
                                <div class="bg-white rounded-lg border border-indigo-200 p-4">
                                    <h5 class="font-medium text-gray-900 mb-2">D.A. Ecoturismo</h5>
                                    <div class="flex flex-wrap gap-3">
                                        <a href="https://sinc.unamad.edu.pe:8000/media/pdf/PLANA_DE_DOCENTES_2024_-_DDA_ECOT.pdf" 
                                           target="_blank" rel="noopener noreferrer"
                                           class="inline-flex items-center px-3 py-1 bg-red-50 text-red-700 rounded-md hover:bg-red-100 text-sm">PDF</a>
                                        <a href="https://sinc.unamad.edu.pe:8000/media/pdf/PLANA_DE_DOCENTES_2024_-_DDA_ECOT_gXN32jP.xlsx" 
                                           target="_blank" rel="noopener noreferrer"
                                           class="inline-flex items-center px-3 py-1 bg-green-50 text-green-700 rounded-md hover:bg-green-100 text-sm">Excel</a>
                                        <a href="https://www.gob.pe/institucion/unamad/normas-legales/5389432-143-2024-unamad-cu" 
                                           target="_blank" rel="noopener noreferrer"
                                           class="inline-flex items-center px-3 py-1 bg-blue-50 text-blue-700 rounded-md hover:bg-blue-100 text-sm">Resolución</a>
                                    </div>
                                </div>

                                <!-- Continue pattern for all departments 2024... -->
                            </div>

                            <!-- All departments visible by default -->
                            <div class="mt-4 space-y-3">
                                <!-- D.A. Educación y Humanidades -->
                                <div class="bg-white rounded-lg border border-indigo-200 p-4">
                                    <h5 class="font-medium text-gray-900 mb-2">D.A. Educación y Humanidades</h5>
                                    <div class="flex flex-wrap gap-3 mb-3">
                                        <a href="https://sinc.unamad.edu.pe:8000/media/pdf/RELACION_DE_DOCENTES_DEL_DPTO_DE_EDUCACION_Y_HUMANIDADES_2024.pdf" 
                                           target="_blank" rel="noopener noreferrer"
                                           class="inline-flex items-center px-3 py-1 bg-red-50 text-red-700 rounded-md hover:bg-red-100 text-sm">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                            </svg>
                                            Ver Relación
                                        </a>
                                    </div>
                                    <div class="text-xs text-gray-600">
                                        <p class="mb-2 font-medium">Resoluciones:</p>
                                        <div class="grid grid-cols-2 gap-2">
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/5628184-278-2024-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">278-2024</a>
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/5628101-277-2024-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">277-2024</a>
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/5627844-263-2024-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">263-2024</a>
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/5627742-248-2024-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">248-2024</a>
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/5613941-238-2024-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">238-2024</a>
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/5474315-189-2024-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">189-2024</a>
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/5389447-144-2024-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">144-2024</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- D.A. Enfermería -->
                                <div class="bg-white rounded-lg border border-indigo-200 p-4">
                                    <h5 class="font-medium text-gray-900 mb-2">D.A. Enfermería</h5>
                                    <div class="flex flex-wrap gap-3 mb-3">
                                        <a href="https://sinc.unamad.edu.pe:8000/media/pdf/PLANA_DOCENTE_2024.pdf" 
                                           target="_blank" rel="noopener noreferrer"
                                           class="inline-flex items-center px-3 py-1 bg-red-50 text-red-700 rounded-md hover:bg-red-100 text-sm">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                            </svg>
                                            Ver Relación
                                        </a>
                                    </div>
                                    <div class="text-xs text-gray-600">
                                        <p class="mb-1 font-medium">Resoluciones:</p>
                                        <div class="flex flex-wrap gap-2">
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/6006729-410-2024-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">410-2024</a>
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/6131333-544-2024-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">544-2024</a>
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/5613941-238-2024-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">238-2024</a>
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/5474315-189-2024-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">189-2024</a>
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/5389447-144-2024-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">144-2024</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- D.A. Ingeniería Agroindustrial -->
                                <div class="bg-white rounded-lg border border-indigo-200 p-4">
                                    <h5 class="font-medium text-gray-900 mb-2">D.A. Ingeniería Agroindustrial</h5>
                                    <div class="flex flex-wrap gap-3">
                                        <a href="https://sinc.unamad.edu.pe:8000/media/pdf/RELACION_DE_DOCENTES_DEL_DEPARTAMENTO_ACADEMICO_DE__INGENIERIA__AGROINDUSTRIAL_2024.docx" 
                                           target="_blank" rel="noopener noreferrer"
                                           class="inline-flex items-center px-3 py-1 bg-blue-50 text-blue-700 rounded-md hover:bg-blue-100 text-sm">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                            </svg>
                                            Descargar
                                        </a>
                                    </div>
                                </div>

                                <!-- D.A. Ingeniería de Sistemas e Informática -->
                                <div class="bg-white rounded-lg border border-indigo-200 p-4">
                                    <h5 class="font-medium text-gray-900 mb-2">D.A. Ingeniería de Sistemas e Informática</h5>
                                    <div class="flex flex-wrap gap-3">
                                        <a href="https://sinc.unamad.edu.pe:8000/media/pdf/INDICADOR_55_AÑO_2024.xlsx" 
                                           target="_blank" rel="noopener noreferrer"
                                           class="inline-flex items-center px-3 py-1 bg-green-50 text-green-700 rounded-md hover:bg-green-100 text-sm">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20M12,12H15V16H12V12M8,12H11V18H8V12Z"/>
                                            </svg>
                                            Descargar
                                        </a>
                                    </div>
                                </div>

                                <!-- D.A. Ingeniería Forestal y Medio Ambiente -->
                                <div class="bg-white rounded-lg border border-indigo-200 p-4">
                                    <h5 class="font-medium text-gray-900 mb-2">D.A. Ingeniería Forestal y Medio Ambiente</h5>
                                    <div class="flex flex-wrap gap-3 mb-3">
                                        <a href="https://sinc.unamad.edu.pe:8000/media/pdf/PLANA_DOCENTE_2024_FS5Jd12.pdf" 
                                           target="_blank" rel="noopener noreferrer"
                                           class="inline-flex items-center px-3 py-1 bg-red-50 text-red-700 rounded-md hover:bg-red-100 text-sm">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                            </svg>
                                            Ver Relación
                                        </a>
                                        <a href="https://sinc.unamad.edu.pe:8000/media/pdf/2024_DOCENTES_NOMBRADOS_Y_CONTRATADOS.xlsx" 
                                           target="_blank" rel="noopener noreferrer"
                                           class="inline-flex items-center px-3 py-1 bg-green-50 text-green-700 rounded-md hover:bg-green-100 text-sm">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20M12,12H15V16H12V12M8,12H11V18H8V12Z"/>
                                            </svg>
                                            Descargar
                                        </a>
                                    </div>
                                    <div class="text-xs text-gray-600">
                                        <p class="mb-1 font-medium">Resoluciones:</p>
                                        <div class="flex flex-wrap gap-2">
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/5614023-240-2024-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">240-2024</a>
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/5394526-142-2024-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">142-2024</a>
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/5614093-243-2024-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">243-2024</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- D.A. Medicina Veterinaria - Zootecnia -->
                                <div class="bg-white rounded-lg border border-indigo-200 p-4">
                                    <h5 class="font-medium text-gray-900 mb-2">D.A. Medicina Veterinaria - Zootecnia</h5>
                                    <div class="flex flex-wrap gap-3 mb-3">
                                        <a href="https://sinc.unamad.edu.pe:8000/media/pdf/Relación_de_docentes_2024.pdf" 
                                           target="_blank" rel="noopener noreferrer"
                                           class="inline-flex items-center px-3 py-1 bg-red-50 text-red-700 rounded-md hover:bg-red-100 text-sm">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                            </svg>
                                            Ver Relación
                                        </a>
                                    </div>
                                    <div class="text-xs text-gray-600">
                                        <p class="mb-1 font-medium">Resoluciones CU:</p>
                                        <div class="flex flex-wrap gap-2">
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/6016806-473-2024-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">473-2024</a>
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/5394526-142-2024-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">142-2024</a>
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/5614093-243-2024-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">243-2024</a>
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/5614023-240-2024-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">240-2024</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 2023 Section -->
                        <div class="border-l-4 border-indigo-500 pl-6 py-4 bg-indigo-50">
                            <h3 class="text-xl font-semibold text-indigo-800 mb-4">2023</h3>
                            
                            <div class="mb-6">
                                <div class="flex items-center justify-between p-4 bg-white rounded-lg border border-indigo-200 hover:bg-indigo-50 transition-colors mb-4">
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5 text-purple-600 mr-3" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M9.5,3A6.5,6.5 0 0,1 16,9.5C16,11.11 15.41,12.59 14.44,13.73L14.71,14H15.5L20.5,19L19,20.5L14,15.5V14.71L13.73,14.44C12.59,15.41 11.11,16 9.5,16A6.5,6.5 0 0,1 3,9.5A6.5,6.5 0 0,1 9.5,3M9.5,5C7,5 5,7 5,9.5C5,12 7,14 9.5,14C12,14 14,12 14,9.5C14,7 12,5 9.5,5Z"/>
                                        </svg>
                                        <div>
                                            <h4 class="font-medium text-gray-900">Docentes Investigadores 2023</h4>
                                            <p class="text-sm text-gray-600">Registro de docentes con actividad investigativa</p>
                                        </div>
                                    </div>
                                    <a href="https://sinc.unamad.edu.pe:8000/media/pdf/55_-_2023_-_MV_11.pdf" 
                                       target="_blank" 
                                       rel="noopener noreferrer"
                                       class="text-indigo-600 hover:text-indigo-800 font-medium">
                                        Ver documento →
                                    </a>
                                </div>
                            </div>

                            <h4 class="text-lg font-semibold text-indigo-700 mb-3">Plana Docente por Departamento Académico:</h4>
                            
                            <div class="space-y-3">
                                <!-- D.A. Administración y Contabilidad -->
                                <div class="bg-white rounded-lg border border-indigo-200 p-4">
                                    <h5 class="font-medium text-gray-900 mb-2">D.A. Administración y Contabilidad</h5>
                                    <div class="flex flex-wrap gap-3">
                                        <a href="https://sinc.unamad.edu.pe:8000/media/pdf/RELACION_DE_DOCENTES_NOMBRADOS_Y_CONTRATADOS_2023.pdf" 
                                           target="_blank" rel="noopener noreferrer"
                                           class="inline-flex items-center px-3 py-1 bg-red-50 text-red-700 rounded-md hover:bg-red-100 text-sm">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                            </svg>
                                            Ver Relación
                                        </a>
                                        <a href="https://sinc.unamad.edu.pe:8000/media/pdf/RELACION_DOCENTES_NOMBRADOS_Y_CONTRATADOS_2023.xlsx" 
                                           target="_blank" rel="noopener noreferrer"
                                           class="inline-flex items-center px-3 py-1 bg-green-50 text-green-700 rounded-md hover:bg-green-100 text-sm">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20M12,12H15V16H12V12M8,12H11V18H8V12Z"/>
                                            </svg>
                                            Descargar
                                        </a>
                                    </div>
                                </div>

                                <!-- D.A. Ciencias Básicas -->
                                <div class="bg-white rounded-lg border border-indigo-200 p-4">
                                    <h5 class="font-medium text-gray-900 mb-2">D.A. Ciencias Básicas</h5>
                                    <div class="flex flex-wrap gap-3">
                                        <a href="https://sinc.unamad.edu.pe:8000/media/pdf/RELACION_DE_DOCENTES_ORDINARIOS_2023.pdf" 
                                           target="_blank" rel="noopener noreferrer"
                                           class="inline-flex items-center px-3 py-1 bg-red-50 text-red-700 rounded-md hover:bg-red-100 text-sm">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                            </svg>
                                            Ordinarios
                                        </a>
                                        <a href="https://sinc.unamad.edu.pe:8000/media/pdf/RELACIÓN_DE_DOCENTES_CONTRATADOS_2023.pdf" 
                                           target="_blank" rel="noopener noreferrer"
                                           class="inline-flex items-center px-3 py-1 bg-orange-50 text-orange-700 rounded-md hover:bg-orange-100 text-sm">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                            </svg>
                                            Contratados
                                        </a>
                                    </div>
                                </div>

                                <!-- D.A. Derecho y Ciencias Políticas -->
                                <div class="bg-white rounded-lg border border-indigo-200 p-4">
                                    <h5 class="font-medium text-gray-900 mb-2">D.A. Derecho y Ciencias Políticas</h5>
                                    <div class="flex flex-wrap gap-3">
                                        <a href="https://sinc.unamad.edu.pe:8000/media/pdf/RELACION_DE_DOCENTES_2023.pdf" 
                                           target="_blank" rel="noopener noreferrer"
                                           class="inline-flex items-center px-3 py-1 bg-red-50 text-red-700 rounded-md hover:bg-red-100 text-sm">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                            </svg>
                                            Ver Relación
                                        </a>
                                    </div>
                                </div>

                                <!-- D.A. Ecoturismo -->
                                <div class="bg-white rounded-lg border border-indigo-200 p-4">
                                    <h5 class="font-medium text-gray-900 mb-2">D.A. Ecoturismo</h5>
                                    <div class="flex flex-wrap gap-3 mb-3">
                                        <a href="https://sinc.unamad.edu.pe:8000/media/pdf/PLANA_DE_DOCENTES_2023_DDA_ECOT.pdf" 
                                           target="_blank" rel="noopener noreferrer"
                                           class="inline-flex items-center px-3 py-1 bg-red-50 text-red-700 rounded-md hover:bg-red-100 text-sm">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                            </svg>
                                            Ver Relación
                                        </a>
                                        <a href="https://sinc.unamad.edu.pe:8000/media/pdf/PLANA_DE_DOCENTES_2023_DDA_ECOT.xlsx" 
                                           target="_blank" rel="noopener noreferrer"
                                           class="inline-flex items-center px-3 py-1 bg-green-50 text-green-700 rounded-md hover:bg-green-100 text-sm">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20M12,12H15V16H12V12M8,12H11V18H8V12Z"/>
                                            </svg>
                                            Descargar
                                        </a>
                                    </div>
                                    <div class="text-xs text-gray-600">
                                        <p class="mb-1 font-medium">Resolución:</p>
                                        <a href="https://www.gob.pe/institucion/unamad/normas-legales/4286921-113-2023-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">113-2023</a>
                                    </div>
                                </div>

                                <!-- D.A. Educación y Humanidades -->
                                <div class="bg-white rounded-lg border border-indigo-200 p-4">
                                    <h5 class="font-medium text-gray-900 mb-2">D.A. Educación y Humanidades</h5>
                                    <div class="flex flex-wrap gap-3 mb-3">
                                        <a href="https://sinc.unamad.edu.pe:8000/media/pdf/RELACION_DE_DOCENTES_DEL_DPTO_DE_EDUCACION_Y_HUMANIDADES_2023.pdf" 
                                           target="_blank" rel="noopener noreferrer"
                                           class="inline-flex items-center px-3 py-1 bg-red-50 text-red-700 rounded-md hover:bg-red-100 text-sm">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                            </svg>
                                            Ver Relación
                                        </a>
                                    </div>
                                    <div class="text-xs text-gray-600">
                                        <p class="mb-1 font-medium">Resoluciones:</p>
                                        <div class="grid grid-cols-2 sm:grid-cols-3 gap-1 text-xs">
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/6568033-736-2022-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">736-2022</a>
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/4865899-580-2023-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">580-2023</a>
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/4729481-517-2023-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">517-2023</a>
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/4723478-488-2023-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">488-2023</a>
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/4484392-381-2023-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">381-2023</a>
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/4412212-357-2023-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">357-2023</a>
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/4296518-231-2023-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">231-2023</a>
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/4296498-229-2023-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">229-2023</a>
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/4293300-171-2023-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">171-2023</a>
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/4286929-114-2023-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">114-2023</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- D.A. Enfermería -->
                                <div class="bg-white rounded-lg border border-indigo-200 p-4">
                                    <h5 class="font-medium text-gray-900 mb-2">D.A. Enfermería</h5>
                                    <div class="flex flex-wrap gap-3 mb-3">
                                        <a href="https://sinc.unamad.edu.pe:8000/media/pdf/PLANA_DOCENTE_2023.pdf" 
                                           target="_blank" rel="noopener noreferrer"
                                           class="inline-flex items-center px-3 py-1 bg-red-50 text-red-700 rounded-md hover:bg-red-100 text-sm">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                            </svg>
                                            Ver Relación
                                        </a>
                                    </div>
                                    <div class="text-xs text-gray-600">
                                        <p class="mb-1 font-medium">Resoluciones:</p>
                                        <div class="flex flex-wrap gap-2">
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/4412118-353-2023-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">353-2023</a>
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/4302938-293-2023-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">293-2023</a>
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/4302927-292-2023-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">292-2023</a>
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/4293300-171-2023-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">171-2023</a>
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/4286929-114-2023-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">114-2023</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- D.A. Ingeniería Agroindustrial -->
                                <div class="bg-white rounded-lg border border-indigo-200 p-4">
                                    <h5 class="font-medium text-gray-900 mb-2">D.A. Ingeniería Agroindustrial</h5>
                                    <div class="flex flex-wrap gap-3">
                                        <a href="https://sinc.unamad.edu.pe:8000/media/pdf/RELACION_DE_DOCENTES_DEL_DEPARTAMENTO_ACADEMICO_DE__INGENIERIA__AGROINDUSTRIAL__2023.xlsx" 
                                           target="_blank" rel="noopener noreferrer"
                                           class="inline-flex items-center px-3 py-1 bg-green-50 text-green-700 rounded-md hover:bg-green-100 text-sm">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20M12,12H15V16H12V12M8,12H11V18H8V12Z"/>
                                            </svg>
                                            Descargar Excel
                                        </a>
                                    </div>
                                </div>

                                <!-- D.A. Ingeniería de Sistemas e Informática -->
                                <div class="bg-white rounded-lg border border-indigo-200 p-4">
                                    <h5 class="font-medium text-gray-900 mb-2">D.A. Ingeniería de Sistemas e Informática</h5>
                                    <div class="flex flex-wrap gap-3">
                                        <a href="https://sinc.unamad.edu.pe:8000/media/pdf/INDICADOR_55_AÑO_2023.xlsx" 
                                           target="_blank" rel="noopener noreferrer"
                                           class="inline-flex items-center px-3 py-1 bg-green-50 text-green-700 rounded-md hover:bg-green-100 text-sm">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20M12,12H15V16H12V12M8,12H11V18H8V12Z"/>
                                            </svg>
                                            Descargar Excel
                                        </a>
                                    </div>
                                </div>

                                <!-- D.A. Ingeniería Forestal y Medio Ambiente -->
                                <div class="bg-white rounded-lg border border-indigo-200 p-4">
                                    <h5 class="font-medium text-gray-900 mb-2">D.A. Ingeniería Forestal y Medio Ambiente</h5>
                                    <div class="flex flex-wrap gap-3 mb-3">
                                        <a href="https://sinc.unamad.edu.pe:8000/media/pdf/PLANA_DOCENTE_2023_MbNQxBG.pdf" 
                                           target="_blank" rel="noopener noreferrer"
                                           class="inline-flex items-center px-3 py-1 bg-red-50 text-red-700 rounded-md hover:bg-red-100 text-sm">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                            </svg>
                                            Ver Relación
                                        </a>
                                        <a href="https://sinc.unamad.edu.pe:8000/media/pdf/2023_DOCENTES_NOMBRADOS_Y_CONTRATADOS.xlsx" 
                                           target="_blank" rel="noopener noreferrer"
                                           class="inline-flex items-center px-3 py-1 bg-green-50 text-green-700 rounded-md hover:bg-green-100 text-sm">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20M12,12H15V16H12V12M8,12H11V18H8V12Z"/>
                                            </svg>
                                            Descargar
                                        </a>
                                    </div>
                                    <div class="text-xs text-gray-600">
                                        <p class="mb-1 font-medium">Resoluciones:</p>
                                        <div class="flex flex-wrap gap-2">
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/4296494-228-2023-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">228-2023</a>
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/4296489-227-2023-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">227-2023</a>
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/4728803-505-2023-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">505-2023</a>
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/4728822-506-2023-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">506-2023</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- D.A. Medicina Veterinaria - Zootecnia -->
                                <div class="bg-white rounded-lg border border-indigo-200 p-4">
                                    <h5 class="font-medium text-gray-900 mb-2">D.A. Medicina Veterinaria - Zootecnia</h5>
                                    <div class="flex flex-wrap gap-3 mb-3">
                                        <a href="https://sinc.unamad.edu.pe:8000/media/pdf/Relación_de_docentes_2023.pdf" 
                                           target="_blank" rel="noopener noreferrer"
                                           class="inline-flex items-center px-3 py-1 bg-red-50 text-red-700 rounded-md hover:bg-red-100 text-sm">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                            </svg>
                                            Ver Relación
                                        </a>
                                    </div>
                                    <div class="text-xs text-gray-600">
                                        <p class="mb-1 font-medium">Resolución de Consejo de Facultad:</p>
                                        <div class="mb-2">
                                            <a href="https://sinc.unamad.edu.pe:8000/media/pdf/4846932-resolucion-de-consejo-de-facultad-de-ingenieria-n-019-2023-unamad-cfi.pdf" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800 text-xs block">N° 019-2023-UNAMAD-CF</a>
                                        </div>
                                        <p class="mb-1 font-medium">Resoluciones CU:</p>
                                        <div class="flex flex-wrap gap-2">
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/4296494-228-2023-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">228-2023</a>
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/4286916-112-2023-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">112-2023</a>
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/4296489-227-2023-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">227-2023</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 2022 Section -->
                        <div class="border-l-4 border-indigo-500 pl-6 py-4 bg-indigo-50">
                            <h3 class="text-xl font-semibold text-indigo-800 mb-4">2022</h3>
                            
                            <div class="mb-6">
                                <div class="flex items-center justify-between p-4 bg-white rounded-lg border border-indigo-200 hover:bg-indigo-50 transition-colors mb-4">
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5 text-purple-600 mr-3" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M9.5,3A6.5,6.5 0 0,1 16,9.5C16,11.11 15.41,12.59 14.44,13.73L14.71,14H15.5L20.5,19L19,20.5L14,15.5V14.71L13.73,14.44C12.59,15.41 11.11,16 9.5,16A6.5,6.5 0 0,1 3,9.5A6.5,6.5 0 0,1 9.5,3M9.5,5C7,5 5,7 5,9.5C5,12 7,14 9.5,14C12,14 14,12 14,9.5C14,7 12,5 9.5,5Z"/>
                                        </svg>
                                        <div>
                                            <h4 class="font-medium text-gray-900">Docentes Investigadores 2022</h4>
                                            <p class="text-sm text-gray-600">Registro de docentes con actividad investigativa</p>
                                        </div>
                                    </div>
                                    <a href="https://sinc.unamad.edu.pe:8000/media/pdf/55_-_2022_-_MV_11.pdf" 
                                       target="_blank" 
                                       rel="noopener noreferrer"
                                       class="text-indigo-600 hover:text-indigo-800 font-medium">
                                        Ver documento →
                                    </a>
                                </div>
                            </div>

                            <h4 class="text-lg font-semibold text-indigo-700 mb-3">Plana Docente por Departamento Académico:</h4>
                            
                            <div class="space-y-3">
                                <!-- D.A. Administración y Contabilidad -->
                                <div class="bg-white rounded-lg border border-indigo-200 p-4">
                                    <h5 class="font-medium text-gray-900 mb-2">D.A. Administración y Contabilidad</h5>
                                    <div class="flex flex-wrap gap-3">
                                        <a href="https://sinc.unamad.edu.pe:8000/media/pdf/RELACION_DE_DOCENTES_NOMBRADOS_Y_CONTRATADOS_2022.pdf" 
                                           target="_blank" rel="noopener noreferrer"
                                           class="inline-flex items-center px-3 py-1 bg-red-50 text-red-700 rounded-md hover:bg-red-100 text-sm">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                            </svg>
                                            Ver Relación
                                        </a>
                                        <a href="https://sinc.unamad.edu.pe:8000/media/pdf/RELACION_DOCENTES_NOMBRADOS_Y_CONTRATADOS_2022.xlsx" 
                                           target="_blank" rel="noopener noreferrer"
                                           class="inline-flex items-center px-3 py-1 bg-green-50 text-green-700 rounded-md hover:bg-green-100 text-sm">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20M12,12H15V16H12V12M8,12H11V18H8V12Z"/>
                                            </svg>
                                            Descargar
                                        </a>
                                    </div>
                                </div>

                                <!-- D.A. Ciencias Básicas -->
                                <div class="bg-white rounded-lg border border-indigo-200 p-4">
                                    <h5 class="font-medium text-gray-900 mb-2">D.A. Ciencias Básicas</h5>
                                    <div class="flex flex-wrap gap-3">
                                        <a href="https://sinc.unamad.edu.pe:8000/media/pdf/RELACION_DE_DOCENTES_ORDINARIOS_2022.pdf" 
                                           target="_blank" rel="noopener noreferrer"
                                           class="inline-flex items-center px-3 py-1 bg-red-50 text-red-700 rounded-md hover:bg-red-100 text-sm">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                            </svg>
                                            Ordinarios
                                        </a>
                                        <a href="https://sinc.unamad.edu.pe:8000/media/pdf/RELACIÓN_DE_DOCENTES_CONTRATADOS_2022.pdf" 
                                           target="_blank" rel="noopener noreferrer"
                                           class="inline-flex items-center px-3 py-1 bg-orange-50 text-orange-700 rounded-md hover:bg-orange-100 text-sm">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                            </svg>
                                            Contratados
                                        </a>
                                    </div>
                                </div>

                                <!-- D.A. Derecho y Ciencias Políticas -->
                                <div class="bg-white rounded-lg border border-indigo-200 p-4">
                                    <h5 class="font-medium text-gray-900 mb-2">D.A. Derecho y Ciencias Políticas</h5>
                                    <div class="flex flex-wrap gap-3">
                                        <a href="https://sinc.unamad.edu.pe:8000/media/pdf/RELACION_DE_DOCENTES_2022.pdf" 
                                           target="_blank" rel="noopener noreferrer"
                                           class="inline-flex items-center px-3 py-1 bg-red-50 text-red-700 rounded-md hover:bg-red-100 text-sm">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                            </svg>
                                            Ver Relación
                                        </a>
                                    </div>
                                </div>

                                <!-- D.A. Ecoturismo -->
                                <div class="bg-white rounded-lg border border-indigo-200 p-4">
                                    <h5 class="font-medium text-gray-900 mb-2">D.A. Ecoturismo</h5>
                                    <div class="flex flex-wrap gap-3 mb-3">
                                        <a href="https://sinc.unamad.edu.pe:8000/media/pdf/PLANA_DE_DOCENTES_2022_DDA_ECOT.pdf" 
                                           target="_blank" rel="noopener noreferrer"
                                           class="inline-flex items-center px-3 py-1 bg-red-50 text-red-700 rounded-md hover:bg-red-100 text-sm">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                            </svg>
                                            Ver Relación
                                        </a>
                                        <a href="https://sinc.unamad.edu.pe:8000/media/pdf/PLANA_DE_DOCENTES_2022_DDA_ECOT.xlsx" 
                                           target="_blank" rel="noopener noreferrer"
                                           class="inline-flex items-center px-3 py-1 bg-green-50 text-green-700 rounded-md hover:bg-green-100 text-sm">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20M12,12H15V16H12V12M8,12H11V18H8V12Z"/>
                                            </svg>
                                            Descargar
                                        </a>
                                    </div>
                                    <div class="text-xs text-gray-600">
                                        <p class="mb-1 font-medium">Resolución:</p>
                                        <a href="https://www.gob.pe/institucion/unamad/normas-legales/3478397-129-2022-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">129-2022</a>
                                    </div>
                                </div>

                                <!-- D.A. Educación y Humanidades -->
                                <div class="bg-white rounded-lg border border-indigo-200 p-4">
                                    <h5 class="font-medium text-gray-900 mb-2">D.A. Educación y Humanidades</h5>
                                    <div class="flex flex-wrap gap-3 mb-3">
                                        <a href="https://sinc.unamad.edu.pe:8000/media/pdf/RELACION_DE_DOCENTES_DEL_DPTO_DE_EDUCACION_Y_HUMANIDADES_2022.pdf" 
                                           target="_blank" rel="noopener noreferrer"
                                           class="inline-flex items-center px-3 py-1 bg-red-50 text-red-700 rounded-md hover:bg-red-100 text-sm">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                            </svg>
                                            Ver Relación
                                        </a>
                                    </div>
                                    <div class="text-xs text-gray-600">
                                        <p class="mb-1 font-medium">Resoluciones:</p>
                                        <div class="grid grid-cols-2 sm:grid-cols-3 gap-1 text-xs">
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/3478400-130-2022-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">130-2022</a>
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/3478510-182-2022-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">182-2022</a>
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/3478592-222-2022-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">222-2022</a>
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/3478636-244-2022-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">244-2022</a>
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/3478717-284-2022-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">284-2022</a>
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/3478719-285-2022-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">285-2022</a>
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/3478988-400-2022-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">400-2022</a>
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/3670602-416-2022-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">416-2022</a>
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/3675424-513-2022-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">513-2022</a>
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/3479106-517-2021-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">517-2021</a>
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/6568033-736-2022-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">736-2022</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- D.A. Enfermería -->
                                <div class="bg-white rounded-lg border border-indigo-200 p-4">
                                    <h5 class="font-medium text-gray-900 mb-2">D.A. Enfermería</h5>
                                    <div class="flex flex-wrap gap-3 mb-3">
                                        <a href="https://sinc.unamad.edu.pe:8000/media/pdf/PLANA_DOCENTE_2022.pdf" 
                                           target="_blank" rel="noopener noreferrer"
                                           class="inline-flex items-center px-3 py-1 bg-red-50 text-red-700 rounded-md hover:bg-red-100 text-sm">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                            </svg>
                                            Ver Relación
                                        </a>
                                    </div>
                                    <div class="text-xs text-gray-600">
                                        <p class="mb-1 font-medium">Resoluciones:</p>
                                        <div class="flex flex-wrap gap-2">
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/3478592-222-2022-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">222-2022</a>
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/3478510-182-2022-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">182-2022</a>
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/3478400-130-2022-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">130-2022</a>
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/3675393-586-2022-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">586-2022</a>
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/3478636-244-2022-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">244-2022</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- D.A. Ingeniería Agroindustrial -->
                                <div class="bg-white rounded-lg border border-indigo-200 p-4">
                                    <h5 class="font-medium text-gray-900 mb-2">D.A. Ingeniería Agroindustrial</h5>
                                    <div class="flex flex-wrap gap-3">
                                        <a href="https://sinc.unamad.edu.pe:8000/media/pdf/RELACION_DE_DOCENTES_DEL_DEPARTAMENTO_ACADEMICO_DE__INGENIERIA__AGROINDUSTRIAL_2022.docx" 
                                           target="_blank" rel="noopener noreferrer"
                                           class="inline-flex items-center px-3 py-1 bg-blue-50 text-blue-700 rounded-md hover:bg-blue-100 text-sm">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                            </svg>
                                            Descargar DOCX
                                        </a>
                                    </div>
                                </div>

                                <!-- D.A. Ingeniería de Sistemas e Informática -->
                                <div class="bg-white rounded-lg border border-indigo-200 p-4">
                                    <h5 class="font-medium text-gray-900 mb-2">D.A. Ingeniería de Sistemas e Informática</h5>
                                    <div class="flex flex-wrap gap-3">
                                        <a href="https://sinc.unamad.edu.pe:8000/media/pdf/INDICADOR_55_AÑO_2022.xlsx" 
                                           target="_blank" rel="noopener noreferrer"
                                           class="inline-flex items-center px-3 py-1 bg-green-50 text-green-700 rounded-md hover:bg-green-100 text-sm">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20M12,12H15V16H12V12M8,12H11V18H8V12Z"/>
                                            </svg>
                                            Descargar Excel
                                        </a>
                                    </div>
                                </div>

                                <!-- D.A. Ingeniería Forestal y Medio Ambiente -->
                                <div class="bg-white rounded-lg border border-indigo-200 p-4">
                                    <h5 class="font-medium text-gray-900 mb-2">D.A. Ingeniería Forestal y Medio Ambiente</h5>
                                    <div class="flex flex-wrap gap-3 mb-3">
                                        <a href="https://sinc.unamad.edu.pe:8000/media/pdf/PLANA_DOCENTE_2022_LLo5UQ1.pdf" 
                                           target="_blank" rel="noopener noreferrer"
                                           class="inline-flex items-center px-3 py-1 bg-red-50 text-red-700 rounded-md hover:bg-red-100 text-sm">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                            </svg>
                                            Ver Relación
                                        </a>
                                        <a href="https://sinc.unamad.edu.pe:8000/media/pdf/2022_DOCENTES_NOMBRADOS_Y_CONTRATADOS.xlsx" 
                                           target="_blank" rel="noopener noreferrer"
                                           class="inline-flex items-center px-3 py-1 bg-green-50 text-green-700 rounded-md hover:bg-green-100 text-sm">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20M12,12H15V16H12V12M8,12H11V18H8V12Z"/>
                                            </svg>
                                            Descargar
                                        </a>
                                    </div>
                                    <div class="text-xs text-gray-600">
                                        <p class="mb-1 font-medium">Resoluciones:</p>
                                        <div class="flex flex-wrap gap-2">
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/3468568-362-2020-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">362-2020</a>
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/3675408-588-2022-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">588-2022</a>
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/3675050-576-2022-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">576-2022</a>
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/3478395-128-2022-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">128-2022</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- D.A. Medicina Veterinaria - Zootecnia -->
                                <div class="bg-white rounded-lg border border-indigo-200 p-4">
                                    <h5 class="font-medium text-gray-900 mb-2">D.A. Medicina Veterinaria - Zootecnia</h5>
                                    <div class="flex flex-wrap gap-3 mb-3">
                                        <a href="https://sinc.unamad.edu.pe:8000/media/pdf/Relación_de_docentes_2022.pdf" 
                                           target="_blank" rel="noopener noreferrer"
                                           class="inline-flex items-center px-3 py-1 bg-red-50 text-red-700 rounded-md hover:bg-red-100 text-sm">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                            </svg>
                                            Ver Relación
                                        </a>
                                    </div>
                                    <div class="text-xs text-gray-600">
                                        <p class="mb-1 font-medium">Resoluciones de Consejo de Facultad:</p>
                                        <div class="space-y-1 mb-2">
                                            <a href="https://sinc.unamad.edu.pe:8000/media/pdf/RESOL._CON_FAC._019_-_Aprobar_informe_final_del_concurso_docente_2022_III_convocator_ODZb4A8.pdf" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800 text-xs block">N° 019-2022-UNAMAD-CF</a>
                                            <a href="https://sinc.unamad.edu.pe:8000/media/pdf/RESOl._CON_FAC._026_-_Contrato_por_necesidad_institucional.pdf.pdf" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800 text-xs block">N° 026-2022-UNAMAD-CFI</a>
                                        </div>
                                        <p class="mb-1 font-medium">Resoluciones CU:</p>
                                        <div class="flex flex-wrap gap-2">
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/3478395-128-2022-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">128-2022</a>
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/3478504-180-2022-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">180-2022</a>
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/3478632-242-2022-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">242-2022</a>
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/3478988-400-2022-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">400-2022</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 2021 Section -->
                        <div class="border-l-4 border-indigo-500 pl-6 py-4 bg-indigo-50">
                            <h3 class="text-xl font-semibold text-indigo-800 mb-4">2021</h3>
                            
                            <div class="mb-6">
                                <div class="flex items-center justify-between p-4 bg-white rounded-lg border border-indigo-200 hover:bg-indigo-50 transition-colors mb-4">
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5 text-purple-600 mr-3" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M9.5,3A6.5,6.5 0 0,1 16,9.5C16,11.11 15.41,12.59 14.44,13.73L14.71,14H15.5L20.5,19L19,20.5L14,15.5V14.71L13.73,14.44C12.59,15.41 11.11,16 9.5,16A6.5,6.5 0 0,1 3,9.5A6.5,6.5 0 0,1 9.5,3M9.5,5C7,5 5,7 5,9.5C5,12 7,14 9.5,14C12,14 14,12 14,9.5C14,7 12,5 9.5,5Z"/>
                                        </svg>
                                        <div>
                                            <h4 class="font-medium text-gray-900">Docentes Investigadores 2021</h4>
                                            <p class="text-sm text-gray-600">Registro de docentes con actividad investigativa</p>
                                        </div>
                                    </div>
                                    <a href="https://sinc.unamad.edu.pe:8000/media/pdf/55_-_2021_-_MV_11.pdf" 
                                       target="_blank" 
                                       rel="noopener noreferrer"
                                       class="text-indigo-600 hover:text-indigo-800 font-medium">
                                        Ver documento →
                                    </a>
                                </div>
                            </div>

                            <h4 class="text-lg font-semibold text-indigo-700 mb-3">Plana Docente por Departamento Académico:</h4>
                            
                            <div class="space-y-3">
                                <!-- D.A. Administración y Contabilidad -->
                                <div class="bg-white rounded-lg border border-indigo-200 p-4">
                                    <h5 class="font-medium text-gray-900 mb-2">D.A. Administración y Contabilidad</h5>
                                    <div class="flex flex-wrap gap-3">
                                        <a href="https://sinc.unamad.edu.pe:8000/media/pdf/RELACION_DOCENTES_NOMBRADOS_Y_CONTRATADOS_2021.pdf" 
                                           target="_blank" rel="noopener noreferrer"
                                           class="inline-flex items-center px-3 py-1 bg-red-50 text-red-700 rounded-md hover:bg-red-100 text-sm">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                            </svg>
                                            Ver Relación
                                        </a>
                                        <a href="https://sinc.unamad.edu.pe:8000/media/pdf/RELACION_DE_DOCENTE_NOMBRADOS_Y_CONTRATADOS_2021.xlsx" 
                                           target="_blank" rel="noopener noreferrer"
                                           class="inline-flex items-center px-3 py-1 bg-green-50 text-green-700 rounded-md hover:bg-green-100 text-sm">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20M12,12H15V16H12V12M8,12H11V18H8V12Z"/>
                                            </svg>
                                            Descargar
                                        </a>
                                    </div>
                                </div>

                                <!-- D.A. Ciencias Básicas -->
                                <div class="bg-white rounded-lg border border-indigo-200 p-4">
                                    <h5 class="font-medium text-gray-900 mb-2">D.A. Ciencias Básicas</h5>
                                    <div class="flex flex-wrap gap-3">
                                        <a href="https://sinc.unamad.edu.pe:8000/media/pdf/RELACION_DE_DOCENTES_ORDINARIOS_2021.pdf" 
                                           target="_blank" rel="noopener noreferrer"
                                           class="inline-flex items-center px-3 py-1 bg-red-50 text-red-700 rounded-md hover:bg-red-100 text-sm">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                            </svg>
                                            Ordinarios
                                        </a>
                                        <a href="https://sinc.unamad.edu.pe:8000/media/pdf/RELACIÓN_DE_DOCENTES_CONTRATADOS_2021.pdf" 
                                           target="_blank" rel="noopener noreferrer"
                                           class="inline-flex items-center px-3 py-1 bg-orange-50 text-orange-700 rounded-md hover:bg-orange-100 text-sm">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                            </svg>
                                            Contratados
                                        </a>
                                    </div>
                                </div>

                                <!-- D.A. Derecho y Ciencias Políticas -->
                                <div class="bg-white rounded-lg border border-indigo-200 p-4">
                                    <h5 class="font-medium text-gray-900 mb-2">D.A. Derecho y Ciencias Políticas</h5>
                                    <div class="flex flex-wrap gap-3 mb-3">
                                        <a href="https://sinc.unamad.edu.pe:8000/media/pdf/RELACION_DE_DOCENTES_2021.pdf" 
                                           target="_blank" rel="noopener noreferrer"
                                           class="inline-flex items-center px-3 py-1 bg-red-50 text-red-700 rounded-md hover:bg-red-100 text-sm">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                            </svg>
                                            Ver Relación
                                        </a>
                                    </div>
                                    <div class="text-xs text-gray-600">
                                        <p class="mb-1 font-medium">Resolución:</p>
                                        <a href="https://www.gob.pe/institucion/unamad/normas-legales/3479075-487-2021-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">487-2021</a>
                                    </div>
                                </div>

                                <!-- D.A. Ecoturismo -->
                                <div class="bg-white rounded-lg border border-indigo-200 p-4">
                                    <h5 class="font-medium text-gray-900 mb-2">D.A. Ecoturismo</h5>
                                    <div class="flex flex-wrap gap-3">
                                        <a href="https://sinc.unamad.edu.pe:8000/media/pdf/PLANA_DE_DOCENTES_2021_DDA_ECOT.pdf" 
                                           target="_blank" rel="noopener noreferrer"
                                           class="inline-flex items-center px-3 py-1 bg-red-50 text-red-700 rounded-md hover:bg-red-100 text-sm">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                            </svg>
                                            Ver Relación
                                        </a>
                                        <a href="https://sinc.unamad.edu.pe:8000/media/pdf/PLANA_DE_DOCENTES_2021_DDA_ECOT.xlsx" 
                                           target="_blank" rel="noopener noreferrer"
                                           class="inline-flex items-center px-3 py-1 bg-green-50 text-green-700 rounded-md hover:bg-green-100 text-sm">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20M12,12H15V16H12V12M8,12H11V18H8V12Z"/>
                                            </svg>
                                            Descargar
                                        </a>
                                    </div>
                                </div>

                                <!-- D.A. Educación y Humanidades -->
                                <div class="bg-white rounded-lg border border-indigo-200 p-4">
                                    <h5 class="font-medium text-gray-900 mb-2">D.A. Educación y Humanidades</h5>
                                    <div class="flex flex-wrap gap-3 mb-3">
                                        <a href="https://sinc.unamad.edu.pe:8000/media/pdf/RELACION_DE_DOCENTES_DEL_DPTO_DE_EDUCACION_Y_HUMANIDADES_2021.pdf" 
                                           target="_blank" rel="noopener noreferrer"
                                           class="inline-flex items-center px-3 py-1 bg-red-50 text-red-700 rounded-md hover:bg-red-100 text-sm">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                            </svg>
                                            Ver Relación
                                        </a>
                                    </div>
                                    <div class="text-xs text-gray-600">
                                        <p class="mb-1 font-medium">Resoluciones:</p>
                                        <div class="flex flex-wrap gap-2">
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/3468171-125-2021-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">125-2021</a>
                                            <a href="https://sinc.unamad.edu.pe:8000/media/pdf/RESOLUCI%C3%93N_N_152-2021-UNAMAD-CU.pdf" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">152-2021</a>
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/3478616-234-2021-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">234-2021</a>
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/3478620-236-2021-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">236-2021</a>
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/3479081-493-2021-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">493-2021</a>
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/3479106-517-2021-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">517-2021</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- D.A. Enfermería -->
                                <div class="bg-white rounded-lg border border-indigo-200 p-4">
                                    <h5 class="font-medium text-gray-900 mb-2">D.A. Enfermería</h5>
                                    <div class="flex flex-wrap gap-3 mb-3">
                                        <a href="https://sinc.unamad.edu.pe:8000/media/pdf/PLANA_DOCENTE_2021.pdf" 
                                           target="_blank" rel="noopener noreferrer"
                                           class="inline-flex items-center px-3 py-1 bg-red-50 text-red-700 rounded-md hover:bg-red-100 text-sm">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                            </svg>
                                            Ver Relación
                                        </a>
                                    </div>
                                    <div class="text-xs text-gray-600">
                                        <p class="mb-1 font-medium">Resolución:</p>
                                        <a href="https://www.gob.pe/institucion/unamad/normas-legales/3468171-125-2021-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">125-2021</a>
                                    </div>
                                </div>

                                <!-- D.A. Ingeniería Agroindustrial -->
                                <div class="bg-white rounded-lg border border-indigo-200 p-4">
                                    <h5 class="font-medium text-gray-900 mb-2">D.A. Ingeniería Agroindustrial</h5>
                                    <div class="flex flex-wrap gap-3">
                                        <a href="https://sinc.unamad.edu.pe:8000/media/pdf/RELACION_DE_DOCENTES_DEL_DEPARTAMENTO_ACADEMICO_DE__INGENIERIA__AGROINDUSTRIAL_2021.docx" 
                                           target="_blank" rel="noopener noreferrer"
                                           class="inline-flex items-center px-3 py-1 bg-blue-50 text-blue-700 rounded-md hover:bg-blue-100 text-sm">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                            </svg>
                                            Descargar DOCX
                                        </a>
                                    </div>
                                </div>

                                <!-- D.A. Ingeniería de Sistemas e Informática -->
                                <div class="bg-white rounded-lg border border-indigo-200 p-4">
                                    <h5 class="font-medium text-gray-900 mb-2">D.A. Ingeniería de Sistemas e Informática</h5>
                                    <div class="flex flex-wrap gap-3">
                                        <a href="https://sinc.unamad.edu.pe:8000/media/pdf/INDICADOR_55_AÑO_2021.xlsx" 
                                           target="_blank" rel="noopener noreferrer"
                                           class="inline-flex items-center px-3 py-1 bg-green-50 text-green-700 rounded-md hover:bg-green-100 text-sm">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20M12,12H15V16H12V12M8,12H11V18H8V12Z"/>
                                            </svg>
                                            Descargar Excel
                                        </a>
                                    </div>
                                </div>

                                <!-- D.A. Ingeniería Forestal y Medio Ambiente -->
                                <div class="bg-white rounded-lg border border-indigo-200 p-4">
                                    <h5 class="font-medium text-gray-900 mb-2">D.A. Ingeniería Forestal y Medio Ambiente</h5>
                                    <div class="flex flex-wrap gap-3 mb-3">
                                        <a href="https://sinc.unamad.edu.pe:8000/media/pdf/PLANA_DOCENTE_2021_UrGGyOm.pdf" 
                                           target="_blank" rel="noopener noreferrer"
                                           class="inline-flex items-center px-3 py-1 bg-red-50 text-red-700 rounded-md hover:bg-red-100 text-sm">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                            </svg>
                                            Ver Relación
                                        </a>
                                        <a href="https://sinc.unamad.edu.pe:8000/media/pdf/2021_DOCENTES_NOMBRADOS_Y_CONTRATADOS_-_copia_-_copia.xlsx" 
                                           target="_blank" rel="noopener noreferrer"
                                           class="inline-flex items-center px-3 py-1 bg-green-50 text-green-700 rounded-md hover:bg-green-100 text-sm">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20M12,12H15V16H12V12M8,12H11V18H8V12Z"/>
                                            </svg>
                                            Descargar
                                        </a>
                                    </div>
                                    <div class="text-xs text-gray-600">
                                        <p class="mb-1 font-medium">Resolución:</p>
                                        <a href="https://www.gob.pe/institucion/unamad/normas-legales/3468568-362-2020-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">362-2020</a>
                                    </div>
                                </div>

                                <!-- D.A. Medicina Veterinaria - Zootecnia -->
                                <div class="bg-white rounded-lg border border-indigo-200 p-4">
                                    <h5 class="font-medium text-gray-900 mb-2">D.A. Medicina Veterinaria - Zootecnia</h5>
                                    <div class="flex flex-wrap gap-3 mb-3">
                                        <a href="https://sinc.unamad.edu.pe:8000/media/pdf/Relación_de_docentes_2021.pdf" 
                                           target="_blank" rel="noopener noreferrer"
                                           class="inline-flex items-center px-3 py-1 bg-red-50 text-red-700 rounded-md hover:bg-red-100 text-sm">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                            </svg>
                                            Ver Relación
                                        </a>
                                    </div>
                                    <div class="text-xs text-gray-600">
                                        <p class="mb-1 font-medium">Resoluciones:</p>
                                        <div class="flex flex-wrap gap-2">
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/3468568-362-2020-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">362-2020</a>
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/3468598-393-2020-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">393-2020</a>
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/3468168-122-2021-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">122-2021</a>
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/3478507-181-2021-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">181-2021</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 2020 Section -->
                        <div class="border-l-4 border-indigo-500 pl-6 py-4 bg-indigo-50">
                            <h3 class="text-xl font-semibold text-indigo-800 mb-4">2020</h3>
                            
                            <div class="mb-6">
                                <div class="flex items-center justify-between p-4 bg-white rounded-lg border border-indigo-200 hover:bg-indigo-50 transition-colors mb-4">
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5 text-purple-600 mr-3" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M9.5,3A6.5,6.5 0 0,1 16,9.5C16,11.11 15.41,12.59 14.44,13.73L14.71,14H15.5L20.5,19L19,20.5L14,15.5V14.71L13.73,14.44C12.59,15.41 11.11,16 9.5,16A6.5,6.5 0 0,1 3,9.5A6.5,6.5 0 0,1 9.5,3M9.5,5C7,5 5,7 5,9.5C5,12 7,14 9.5,14C12,14 14,12 14,9.5C14,7 12,5 9.5,5Z"/>
                                        </svg>
                                        <div>
                                            <h4 class="font-medium text-gray-900">Docentes Investigadores 2020</h4>
                                            <p class="text-sm text-gray-600">Registro de docentes con actividad investigativa</p>
                                        </div>
                                    </div>
                                    <a href="https://sinc.unamad.edu.pe:8000/media/pdf/55_-_2020_-_MV_11.pdf" 
                                       target="_blank" 
                                       rel="noopener noreferrer"
                                       class="text-indigo-600 hover:text-indigo-800 font-medium">
                                        Ver documento →
                                    </a>
                                </div>
                            </div>

                            <h4 class="text-lg font-semibold text-indigo-700 mb-3">Plana Docente por Departamento Académico:</h4>
                            
                            <div class="space-y-3">
                                <!-- D.A. Administración y Contabilidad -->
                                <div class="bg-white rounded-lg border border-indigo-200 p-4">
                                    <h5 class="font-medium text-gray-900 mb-2">D.A. Administración y Contabilidad</h5>
                                    <div class="flex flex-wrap gap-3">
                                        <a href="https://sinc.unamad.edu.pe:8000/media/pdf/RELACION_DOCENTE_NOMBRADOS_Y_CONTRATADOS_2020.pdf" 
                                           target="_blank" rel="noopener noreferrer"
                                           class="inline-flex items-center px-3 py-1 bg-red-50 text-red-700 rounded-md hover:bg-red-100 text-sm">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                            </svg>
                                            Ver Relación
                                        </a>
                                        <a href="https://sinc.unamad.edu.pe:8000/media/pdf/RELACION_DE_DOCENTES_NOMBRADOS_Y_CONTRATADOS_2020.xlsx" 
                                           target="_blank" rel="noopener noreferrer"
                                           class="inline-flex items-center px-3 py-1 bg-green-50 text-green-700 rounded-md hover:bg-green-100 text-sm">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20M12,12H15V16H12V12M8,12H11V18H8V12Z"/>
                                            </svg>
                                            Descargar
                                        </a>
                                    </div>
                                </div>

                                <!-- D.A. Ciencias Básicas -->
                                <div class="bg-white rounded-lg border border-indigo-200 p-4">
                                    <h5 class="font-medium text-gray-900 mb-2">D.A. Ciencias Básicas</h5>
                                    <div class="flex flex-wrap gap-3">
                                        <a href="https://sinc.unamad.edu.pe:8000/media/pdf/RELACION_DE_DOCENTES_ORDINARIOS_2020.pdf" 
                                           target="_blank" rel="noopener noreferrer"
                                           class="inline-flex items-center px-3 py-1 bg-red-50 text-red-700 rounded-md hover:bg-red-100 text-sm">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                            </svg>
                                            Ordinarios
                                        </a>
                                        <a href="https://sinc.unamad.edu.pe:8000/media/pdf/RELACI%C3%93N_DE_DOCENTES_CONTRATADOS_2020.pdf" 
                                           target="_blank" rel="noopener noreferrer"
                                           class="inline-flex items-center px-3 py-1 bg-orange-50 text-orange-700 rounded-md hover:bg-orange-100 text-sm">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                            </svg>
                                            Contratados
                                        </a>
                                    </div>
                                </div>

                                <!-- D.A. Derecho y Ciencias Políticas -->
                                <div class="bg-white rounded-lg border border-indigo-200 p-4">
                                    <h5 class="font-medium text-gray-900 mb-2">D.A. Derecho y Ciencias Políticas</h5>
                                    <div class="flex flex-wrap gap-3">
                                        <a href="https://sinc.unamad.edu.pe:8000/media/pdf/RELACION_DE_DOCENTES_2020.pdf" 
                                           target="_blank" rel="noopener noreferrer"
                                           class="inline-flex items-center px-3 py-1 bg-red-50 text-red-700 rounded-md hover:bg-red-100 text-sm">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                            </svg>
                                            Ver Relación
                                        </a>
                                    </div>
                                </div>

                                <!-- D.A. Ecoturismo -->
                                <div class="bg-white rounded-lg border border-indigo-200 p-4">
                                    <h5 class="font-medium text-gray-900 mb-2">D.A. Ecoturismo</h5>
                                    <div class="flex flex-wrap gap-3">
                                        <a href="https://sinc.unamad.edu.pe:8000/media/pdf/PLANA_DE_DOCENTES_2020_-_DDA_ECOT.pdf" 
                                           target="_blank" rel="noopener noreferrer"
                                           class="inline-flex items-center px-3 py-1 bg-red-50 text-red-700 rounded-md hover:bg-red-100 text-sm">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                            </svg>
                                            Ver Relación
                                        </a>
                                        <a href="https://sinc.unamad.edu.pe:8000/media/pdf/PLANA_DE_DOCENTES_2020_-_DDA_ECOT.xlsx" 
                                           target="_blank" rel="noopener noreferrer"
                                           class="inline-flex items-center px-3 py-1 bg-green-50 text-green-700 rounded-md hover:bg-green-100 text-sm">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20M12,12H15V16H12V12M8,12H11V18H8V12Z"/>
                                            </svg>
                                            Descargar
                                        </a>
                                    </div>
                                </div>

                                <!-- D.A. Educación y Humanidades -->
                                <div class="bg-white rounded-lg border border-indigo-200 p-4">
                                    <h5 class="font-medium text-gray-900 mb-2">D.A. Educación y Humanidades</h5>
                                    <div class="flex flex-wrap gap-3 mb-3">
                                        <a href="https://sinc.unamad.edu.pe:8000/media/pdf/RELACION_DE_DOCENTES_DEL_DPTO_DE_EDUCACION_Y_HUMANIDADES_2020.pdf" 
                                           target="_blank" rel="noopener noreferrer"
                                           class="inline-flex items-center px-3 py-1 bg-red-50 text-red-700 rounded-md hover:bg-red-100 text-sm">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                            </svg>
                                            Ver Relación
                                        </a>
                                    </div>
                                    <div class="text-xs text-gray-600">
                                        <p class="mb-1 font-medium">Resoluciones:</p>
                                        <div class="flex flex-wrap gap-2">
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/3477598-529-2019-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">529-2019</a>
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/3469197-023-2020-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">023-2020</a>
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/3469423-068-2020-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">068-2020</a>
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/3468152-102-2020-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">102-2020</a>
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/3479989-113-2020-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">113-2020</a>
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/3479995-123-2020-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">123-2020</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- D.A. Enfermería -->
                                <div class="bg-white rounded-lg border border-indigo-200 p-4">
                                    <h5 class="font-medium text-gray-900 mb-2">D.A. Enfermería</h5>
                                    <div class="flex flex-wrap gap-3 mb-3">
                                        <a href="https://sinc.unamad.edu.pe:8000/media/pdf/PLANA_DOCENTE_2020.pdf" 
                                           target="_blank" rel="noopener noreferrer"
                                           class="inline-flex items-center px-3 py-1 bg-red-50 text-red-700 rounded-md hover:bg-red-100 text-sm">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                            </svg>
                                            Ver Relación
                                        </a>
                                    </div>
                                    <div class="text-xs text-gray-600">
                                        <p class="mb-1 font-medium">Resoluciones:</p>
                                        <div class="flex flex-wrap gap-2">
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/3469197-023-2020-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">023-2020</a>
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/3468569-363-2020-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">363-2020</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- D.A. Ingeniería Agroindustrial -->
                                <div class="bg-white rounded-lg border border-indigo-200 p-4">
                                    <h5 class="font-medium text-gray-900 mb-2">D.A. Ingeniería Agroindustrial</h5>
                                    <div class="flex flex-wrap gap-3">
                                        <a href="https://sinc.unamad.edu.pe:8000/media/pdf/RELACION_DE_DOCENTES_DEL_DEPARTAMENTO_ACADEMICO_DE__INGENIERIA__AGROINDUSTRIAL_2020.docx" 
                                           target="_blank" rel="noopener noreferrer"
                                           class="inline-flex items-center px-3 py-1 bg-blue-50 text-blue-700 rounded-md hover:bg-blue-100 text-sm">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                            </svg>
                                            Descargar DOCX
                                        </a>
                                    </div>
                                </div>

                                <!-- D.A. Ingeniería de Sistemas e Informática -->
                                <div class="bg-white rounded-lg border border-indigo-200 p-4">
                                    <h5 class="font-medium text-gray-900 mb-2">D.A. Ingeniería de Sistemas e Informática</h5>
                                    <div class="flex flex-wrap gap-3">
                                        <a href="https://sinc.unamad.edu.pe:8000/media/pdf/INDICADOR_55_AÑO_2020.xlsx" 
                                           target="_blank" rel="noopener noreferrer"
                                           class="inline-flex items-center px-3 py-1 bg-green-50 text-green-700 rounded-md hover:bg-green-100 text-sm">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20M12,12H15V16H12V12M8,12H11V18H8V12Z"/>
                                            </svg>
                                            Descargar Excel
                                        </a>
                                    </div>
                                </div>

                                <!-- D.A. Ingeniería Forestal y Medio Ambiente -->
                                <div class="bg-white rounded-lg border border-indigo-200 p-4">
                                    <h5 class="font-medium text-gray-900 mb-2">D.A. Ingeniería Forestal y Medio Ambiente</h5>
                                    <div class="flex flex-wrap gap-3">
                                        <a href="https://sinc.unamad.edu.pe:8000/media/pdf/PLANA_DOCENTE_2020_TMsdGDD.pdf" 
                                           target="_blank" rel="noopener noreferrer"
                                           class="inline-flex items-center px-3 py-1 bg-red-50 text-red-700 rounded-md hover:bg-red-100 text-sm">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                            </svg>
                                            Ver Relación
                                        </a>
                                        <a href="https://sinc.unamad.edu.pe:8000/media/pdf/2020_DOCENTES_NOMBRADOS_Y_CONTRATADOS_-_copia.xlsx" 
                                           target="_blank" rel="noopener noreferrer"
                                           class="inline-flex items-center px-3 py-1 bg-green-50 text-green-700 rounded-md hover:bg-green-100 text-sm">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20M12,12H15V16H12V12M8,12H11V18H8V12Z"/>
                                            </svg>
                                            Descargar
                                        </a>
                                    </div>
                                </div>

                                <!-- D.A. Medicina Veterinaria - Zootecnia -->
                                <div class="bg-white rounded-lg border border-indigo-200 p-4">
                                    <h5 class="font-medium text-gray-900 mb-2">D.A. Medicina Veterinaria - Zootecnia</h5>
                                    <div class="flex flex-wrap gap-3 mb-3">
                                        <a href="https://sinc.unamad.edu.pe:8000/media/pdf/Relaci%C3%B3n_de_docentes_2020.pdf" 
                                           target="_blank" rel="noopener noreferrer"
                                           class="inline-flex items-center px-3 py-1 bg-red-50 text-red-700 rounded-md hover:bg-red-100 text-sm">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                            </svg>
                                            Ver Relación
                                        </a>
                                    </div>
                                    <div class="text-xs text-gray-600">
                                        <p class="mb-1 font-medium">Resoluciones:</p>
                                        <div class="flex flex-wrap gap-2">
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/3475431-397-2019-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">397-2019</a>
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/3476330-507-2019-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">507-2019</a>
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/3469165-018-2020-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">018-2020</a>
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/3469418-067-2020-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">067-2020</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 2019 Section - Expanded -->
                        <div class="border-l-4 border-indigo-500 pl-6 py-4 bg-indigo-50">
                            <h3 class="text-xl font-semibold text-indigo-800 mb-4">2019</h3>
                            
                            <div class="mb-6">
                                <div class="flex items-center justify-between p-4 bg-white rounded-lg border border-indigo-200 hover:bg-indigo-50 transition-colors mb-4">
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5 text-purple-600 mr-3" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M9.5,3A6.5,6.5 0 0,1 16,9.5C16,11.11 15.41,12.59 14.44,13.73L14.71,14H15.5L20.5,19L19,20.5L14,15.5V14.71L13.73,14.44C12.59,15.41 11.11,16 9.5,16A6.5,6.5 0 0,1 3,9.5A6.5,6.5 0 0,1 9.5,3M9.5,5C7,5 5,7 5,9.5C5,12 7,14 9.5,14C12,14 14,12 14,9.5C14,7 12,5 9.5,5Z"/>
                                        </svg>
                                        <div>
                                            <h4 class="font-medium text-gray-900">Docentes Investigadores 2019</h4>
                                            <p class="text-sm text-gray-600">Registro de docentes con actividad investigativa</p>
                                        </div>
                                    </div>
                                    <a href="https://sinc.unamad.edu.pe:8000/media/pdf/55_-_2019_-_MV_11.pdf" 
                                       target="_blank" 
                                       rel="noopener noreferrer"
                                       class="text-indigo-600 hover:text-indigo-800 font-medium">
                                        Ver documento →
                                    </a>
                                </div>
                            </div>

                            <h4 class="text-lg font-semibold text-indigo-700 mb-3">Plana Docente por Departamento Académico:</h4>
                            
                            <div class="space-y-3">
                                <!-- D.A. Administración y Contabilidad -->
                                <div class="bg-white rounded-lg border border-indigo-200 p-4">
                                    <h5 class="font-medium text-gray-900 mb-2">D.A. Administración y Contabilidad</h5>
                                    <div class="flex flex-wrap gap-3">
                                        <a href="https://sinc.unamad.edu.pe:8000/media/pdf/RELACION_DE_DOCENTES_NOMBRADOS_Y_CONTRATADOS_2019.pdf" 
                                           target="_blank" rel="noopener noreferrer"
                                           class="inline-flex items-center px-3 py-1 bg-red-50 text-red-700 rounded-md hover:bg-red-100 text-sm">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                            </svg>
                                            Ver Relación
                                        </a>
                                        <a href="https://sinc.unamad.edu.pe:8000/media/pdf/RELACION_DE_DOCENTES_NOMBRADOS_Y_CONTRATADOS_2019.xlsx" 
                                           target="_blank" rel="noopener noreferrer"
                                           class="inline-flex items-center px-3 py-1 bg-green-50 text-green-700 rounded-md hover:bg-green-100 text-sm">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20M12,12H15V16H12V12M8,12H11V18H8V12Z"/>
                                            </svg>
                                            Descargar
                                        </a>
                                    </div>
                                </div>

                                <!-- D.A. Ciencias Básicas - Sin enlaces según el archivo -->
                                <div class="bg-white rounded-lg border border-gray-200 p-4 opacity-60">
                                    <h5 class="font-medium text-gray-900 mb-2">D.A. Ciencias Básicas</h5>
                                    <span class="text-sm text-gray-500 italic">(Sin enlaces disponibles)</span>
                                </div>

                                <!-- D.A. Derecho y Ciencias Políticas -->
                                <div class="bg-white rounded-lg border border-indigo-200 p-4">
                                    <h5 class="font-medium text-gray-900 mb-2">D.A. Derecho y Ciencias Políticas</h5>
                                    <div class="flex flex-wrap gap-3">
                                        <a href="https://sinc.unamad.edu.pe:8000/media/pdf/RELACION_DE_DOCENTES_2019.pdf" 
                                           target="_blank" rel="noopener noreferrer"
                                           class="inline-flex items-center px-3 py-1 bg-red-50 text-red-700 rounded-md hover:bg-red-100 text-sm">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                            </svg>
                                            Ver Relación
                                        </a>
                                        <a href="https://www.gob.pe/institucion/unamad/normas-legales/3604780-133-2013-unamad-r" 
                                           target="_blank" rel="noopener noreferrer"
                                           class="inline-flex items-center px-3 py-1 bg-blue-50 text-blue-700 rounded-md hover:bg-blue-100 text-sm">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M9,12L11,14L15,10M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2Z"/>
                                            </svg>
                                            Resolución N.° 133-2019
                                        </a>
                                    </div>
                                </div>

                                <!-- D.A. Ecoturismo -->
                                <div class="bg-white rounded-lg border border-indigo-200 p-4">
                                    <h5 class="font-medium text-gray-900 mb-2">D.A. Ecoturismo</h5>
                                    <div class="flex flex-wrap gap-3">
                                        <a href="https://sinc.unamad.edu.pe:8000/media/pdf/PLANA_DE_DOCENTES_2019_-_DDA_-_ECOTURISMO.pdf" 
                                           target="_blank" rel="noopener noreferrer"
                                           class="inline-flex items-center px-3 py-1 bg-red-50 text-red-700 rounded-md hover:bg-red-100 text-sm">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                            </svg>
                                            Ver Relación
                                        </a>
                                        <a href="https://sinc.unamad.edu.pe:8000/media/pdf/PLANA_DE_DOCENTES_2019_-_DDA_-_ECOTURISMO.xlsx" 
                                           target="_blank" rel="noopener noreferrer"
                                           class="inline-flex items-center px-3 py-1 bg-green-50 text-green-700 rounded-md hover:bg-green-100 text-sm">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20M12,12H15V16H12V12M8,12H11V18H8V12Z"/>
                                            </svg>
                                            Descargar
                                        </a>
                                    </div>
                                </div>

                                <!-- D.A. Educación y Humanidades -->
                                <div class="bg-white rounded-lg border border-indigo-200 p-4">
                                    <h5 class="font-medium text-gray-900 mb-2">D.A. Educación y Humanidades</h5>
                                    <div class="flex flex-wrap gap-3 mb-3">
                                        <a href="https://sinc.unamad.edu.pe:8000/media/pdf/RELACION_DE_DOCENTES_DEL_DPTO_DE_EDUCACION_Y_HUMANIDADES_2019.pdf" 
                                           target="_blank" rel="noopener noreferrer"
                                           class="inline-flex items-center px-3 py-1 bg-red-50 text-red-700 rounded-md hover:bg-red-100 text-sm">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                            </svg>
                                            Ver Relación
                                        </a>
                                    </div>
                                    <div class="text-xs text-gray-600">
                                        <p class="mb-1 font-medium">Resoluciones:</p>
                                        <div class="flex flex-wrap gap-2">
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/3470912-120-2019-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">120-2019</a>
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/3471033-151-2019-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">151-2019</a>
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/3471126-175-2019-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">175-2019</a>
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/3471133-177-2019-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">177-2019</a>
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/3471307-221-2019-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">221-2019</a>
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/3472929-256-2019-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">256-2019</a>
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/3474262-382-2019-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">382-2019</a>
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/3475489-411-2019-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">411-2019</a>
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/3475558-427-2019-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">427-2019</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- D.A. Enfermería -->
                                <div class="bg-white rounded-lg border border-indigo-200 p-4">
                                    <h5 class="font-medium text-gray-900 mb-2">D.A. Enfermería</h5>
                                    <div class="flex flex-wrap gap-3 mb-3">
                                        <a href="https://sinc.unamad.edu.pe:8000/media/pdf/PLANA_DOCENTE_2019.pdf" 
                                           target="_blank" rel="noopener noreferrer"
                                           class="inline-flex items-center px-3 py-1 bg-red-50 text-red-700 rounded-md hover:bg-red-100 text-sm">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                            </svg>
                                            Ver Relación
                                        </a>
                                    </div>
                                    <div class="text-xs text-gray-600">
                                        <p class="mb-1 font-medium">Resoluciones:</p>
                                        <div class="flex flex-wrap gap-2">
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/3611126-117-2019-unamad-r-his" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">117-2019-R</a>
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/3470912-120-2019-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">120-2019-CU</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- D.A. Ingeniería Agroindustrial -->
                                <div class="bg-white rounded-lg border border-indigo-200 p-4">
                                    <h5 class="font-medium text-gray-900 mb-2">D.A. Ingeniería Agroindustrial</h5>
                                    <div class="flex flex-wrap gap-3 mb-3">
                                        <a href="https://sinc.unamad.edu.pe:8000/media/pdf/RELACION_DE_DOCENTES_DEL_DEPARTAMENTO_ACADEMICO_DE__INGENIERIA__AGROINDUSTRIAL_2019.docx" 
                                           target="_blank" rel="noopener noreferrer"
                                           class="inline-flex items-center px-3 py-1 bg-blue-50 text-blue-700 rounded-md hover:bg-blue-100 text-sm">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                            </svg>
                                            Descargar DOCX
                                        </a>
                                    </div>
                                    <div class="text-xs text-gray-600">
                                        <p class="mb-1 font-medium">Resolución:</p>
                                        <a href="https://www.gob.pe/institucion/unamad/normas-legales/3469565-098-2019-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">N.° 098-2019-UNAMAD-R</a>
                                    </div>
                                </div>

                                <!-- D.A. Ingeniería de Sistemas e Informática -->
                                <div class="bg-white rounded-lg border border-indigo-200 p-4">
                                    <h5 class="font-medium text-gray-900 mb-2">D.A. Ingeniería de Sistemas e Informática</h5>
                                    <div class="flex flex-wrap gap-3 mb-3">
                                        <a href="https://sinc.unamad.edu.pe:8000/media/pdf/INDICADOR_55_AÑO_2019.xlsx" 
                                           target="_blank" rel="noopener noreferrer"
                                           class="inline-flex items-center px-3 py-1 bg-green-50 text-green-700 rounded-md hover:bg-green-100 text-sm">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20M12,12H15V16H12V12M8,12H11V18H8V12Z"/>
                                            </svg>
                                            Descargar Excel
                                        </a>
                                    </div>
                                    <div class="text-xs text-gray-600">
                                        <p class="mb-1 font-medium">Resolución:</p>
                                        <a href="https://www.gob.pe/institucion/unamad/normas-legales/3469565-098-2019-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">N.° 098-2019-UNAMAD-R</a>
                                    </div>
                                </div>

                                <!-- D.A. Ingeniería Forestal y Medio Ambiente -->
                                <div class="bg-white rounded-lg border border-indigo-200 p-4">
                                    <h5 class="font-medium text-gray-900 mb-2">D.A. Ingeniería Forestal y Medio Ambiente</h5>
                                    <div class="flex flex-wrap gap-3 mb-3">
                                        <a href="https://sinc.unamad.edu.pe:8000/media/pdf/PLANA_DOCENTE_2019_mfOb0hW.pdf" 
                                           target="_blank" rel="noopener noreferrer"
                                           class="inline-flex items-center px-3 py-1 bg-red-50 text-red-700 rounded-md hover:bg-red-100 text-sm">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                            </svg>
                                            Ver Relación
                                        </a>
                                        <a href="https://sinc.unamad.edu.pe:8000/media/pdf/2019_DOCENTES_NOMBRADOS_Y_CONTRATADOS.xlsx" 
                                           target="_blank" rel="noopener noreferrer"
                                           class="inline-flex items-center px-3 py-1 bg-green-50 text-green-700 rounded-md hover:bg-green-100 text-sm">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20M12,12H15V16H12V12M8,12H11V18H8V12Z"/>
                                            </svg>
                                            Descargar
                                        </a>
                                    </div>
                                    <div class="text-xs text-gray-600">
                                        <p class="mb-1 font-medium">Resolución:</p>
                                        <a href="https://www.gob.pe/institucion/unamad/normas-legales/3469565-098-2019-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">N.° 098-2019-UNAMAD-R</a>
                                    </div>
                                </div>

                                <!-- D.A. Medicina Veterinaria - Zootecnia -->
                                <div class="bg-white rounded-lg border border-indigo-200 p-4">
                                    <h5 class="font-medium text-gray-900 mb-2">D.A. Medicina Veterinaria - Zootecnia</h5>
                                    <div class="flex flex-wrap gap-3 mb-3">
                                        <a href="https://sinc.unamad.edu.pe:8000/media/pdf/Relacion_de_docentes_2019.pdf" 
                                           target="_blank" rel="noopener noreferrer"
                                           class="inline-flex items-center px-3 py-1 bg-red-50 text-red-700 rounded-md hover:bg-red-100 text-sm">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                            </svg>
                                            Ver Relación
                                        </a>
                                    </div>
                                    <div class="text-xs text-gray-600">
                                        <p class="mb-1 font-medium">Resoluciones:</p>
                                        <div class="flex flex-wrap gap-2">
                                            <a href="https://www.gob.pe/institucion/unamad/normas-legales/3469565-098-2019-unamad-cu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">098-2019-R</a>
                                            <a href="https://sinc.unamad.edu.pe:8000/media/pdf/CamScanner_03-04-2025_09.16.pdf" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">028-2019-CFI</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 p-6 bg-indigo-50 rounded-lg border border-indigo-200">
                        <h3 class="text-lg font-semibold text-indigo-800 mb-3 flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M13,9H11V7H13M13,17H11V11H13M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"/>
                            </svg>
                            Información Importante
                        </h3>
                        <ul class="text-sm text-indigo-700 space-y-2">
                            <li class="flex items-start">
                                <span class="text-indigo-600 mr-2">•</span>
                                Los documentos incluyen información de docentes nombrados y contratados por departamento
                            </li>
                            <li class="flex items-start">
                                <span class="text-indigo-600 mr-2">•</span>
                                Los archivos están disponibles en múltiples formatos (PDF, Excel, DOCX)
                            </li>
                            <li class="flex items-start">
                                <span class="text-indigo-600 mr-2">•</span>
                                Incluye resoluciones oficiales de aprobación y nombramiento
                            </li>
                            <li class="flex items-start">
                                <span class="text-indigo-600 mr-2">•</span>
                                Los docentes investigadores se registran anualmente de manera separada
                            </li>
                            <li class="flex items-start">
                                <span class="text-indigo-600 mr-2">•</span>
                                Para información detallada por departamento, consulte los años 2019-2024
                            </li>
                        </ul>
                    </div>

                    <div class="mt-6 p-4 bg-blue-50 rounded-lg border border-blue-200">
                        <div class="flex items-start">
                            <svg class="w-5 h-5 text-blue-600 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12,2L13.09,8.26L22,9L17,14L18.18,22L12,19L5.82,22L7,14L2,9L10.91,8.26L12,2Z"/>
                            </svg>
                            <div>
                                <h4 class="font-medium text-blue-800 mb-1">Transparencia Académica Completa</h4>
                                <p class="text-sm text-blue-700">
                                    UNAMAD mantiene un registro público exhaustivo de su plana docente desde 2019, 
                                    incluyendo todos los departamentos académicos con documentación detallada por 
                                    categorías docentes y resoluciones de nombramiento correspondientes.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-1">
                <div class="sticky top-8">
                    @include('transparencia.indicador-55.partials.navigation')
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function toggleSection(sectionId) {
    const section = document.getElementById(sectionId);
    const toggle = document.getElementById('toggle-' + sectionId.split('-')[1]);
    
    if (section.classList.contains('hidden')) {
        section.classList.remove('hidden');
        toggle.textContent = 'Ocultar departamentos ↑';
    } else {
        section.classList.add('hidden');
        toggle.textContent = 'Ver todos los departamentos →';
    }
}
</script>
@endsection