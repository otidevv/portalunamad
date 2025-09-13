@extends('layouts.app')

@section('content')
<div class="bg-gradient-to-br from-teal-50 to-emerald-50 min-h-screen">
    <div class="bg-gradient-to-r from-teal-600 to-emerald-600 text-white py-16">
        <div class="container mx-auto px-4">
            <div class="flex items-center mb-4">
                <svg class="w-8 h-8 mr-3" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M19,3H5C3.89,3 3,3.89 3,5V19A3,3 0 0,0 6,22H18A3,3 0 0,0 21,19V5C21,3.89 20.1,3 19,3M19,5V19A1,1 0 0,1 18,20H6A1,1 0 0,1 5,19V5H19M7,7V9H17V7H7M7,11V13H17V11H7M7,15V17H17V15H7Z"/>
                </svg>
                <h1 class="text-4xl font-bold">MV12: Malla Curricular</h1>
            </div>
            <p class="text-xl text-teal-100">
                Diseños curriculares de todos los programas de estudios de la universidad
            </p>
        </div>
    </div>

    <div class="container mx-auto px-4 py-8">
        <nav class="text-sm text-gray-600 mb-8">
            <a href="/" class="hover:text-teal-600">Inicio</a>
            <span class="mx-2">›</span>
            <a href="/transparencia/indicador-55" class="hover:text-teal-600">Transparencia - Indicador 55</a>
            <span class="mx-2">›</span>
            <span class="text-gray-800">MV12: Malla Curricular</span>
        </nav>

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
            <div class="lg:col-span-3">
                <div class="bg-white rounded-lg shadow-md p-8">
                    <div class="mb-8">
                        <h2 class="text-2xl font-bold text-teal-800 mb-4 flex items-center">
                            <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19,3H5C3.89,3 3,3.89 3,5V19A3,3 0 0,0 6,22H18A3,3 0 0,0 21,19V5C21,3.89 20.1,3 19,3M19,5V19A1,1 0 0,1 18,20H6A1,1 0 0,1 5,19V5H19M7,7V9H17V7H7M7,11V13H17V11H7M7,15V17H17V15H7Z"/>
                            </svg>
                            Mallas Curriculares de Programas de Estudios
                        </h2>
                        <p class="text-gray-700 mb-6">
                            La Universidad Nacional Amazónica de Madre de Dios presenta los diseños curriculares 
                            actualizados de todos los programas de estudios, organizados por año académico para facilitar 
                            el acceso a la información curricular.
                        </p>
                    </div>

                    <div class="space-y-8">
                        <!-- 2024 Section -->
                        <div class="border-l-4 border-teal-500 pl-6 py-4 bg-teal-50">
                            <h3 class="text-xl font-semibold text-teal-800 mb-4">Diseño Curricular 2024</h3>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <!-- Administración y Negocios Internacionales -->
                                <div class="bg-white rounded-lg border border-teal-200 p-4">
                                    <h4 class="font-medium text-gray-900 mb-2">Administración y Negocios Internacionales</h4>
                                    <a href="https://sinc.unamad.edu.pe:8000/media/pdf/DISEÑO_CURRICULAR_DE_ADMINISTRACION_Y_NEGOCIOS_INTERNACIONALES.pdf" 
                                       target="_blank" rel="noopener noreferrer"
                                       class="inline-flex items-center px-3 py-1 bg-red-50 text-red-700 rounded-md hover:bg-red-100 text-sm">
                                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                        </svg>
                                        Ver Diseño Curricular
                                    </a>
                                </div>

                                <!-- Contabilidad y Finanzas -->
                                <div class="bg-white rounded-lg border border-teal-200 p-4">
                                    <h4 class="font-medium text-gray-900 mb-2">Contabilidad y Finanzas</h4>
                                    <a href="https://sinc.unamad.edu.pe:8000/media/pdf/DISEÑO_CURRICULAR_DE_CONTABILIDAD_Y_FINANZAS__UNAMAD_...pdf" 
                                       target="_blank" rel="noopener noreferrer"
                                       class="inline-flex items-center px-3 py-1 bg-red-50 text-red-700 rounded-md hover:bg-red-100 text-sm">
                                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                        </svg>
                                        Ver Diseño Curricular
                                    </a>
                                </div>

                                <!-- Ecoturismo -->
                                <div class="bg-white rounded-lg border border-teal-200 p-4">
                                    <h4 class="font-medium text-gray-900 mb-2">Ecoturismo</h4>
                                    <a href="https://sinc.unamad.edu.pe:8000/media/pdf/DISEÑO_CURRICULAR_DE_ECOTURISMO.pdf" 
                                       target="_blank" rel="noopener noreferrer"
                                       class="inline-flex items-center px-3 py-1 bg-red-50 text-red-700 rounded-md hover:bg-red-100 text-sm">
                                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                        </svg>
                                        Ver Diseño Curricular
                                    </a>
                                </div>

                                <!-- Derecho y Ciencias Políticas -->
                                <div class="bg-white rounded-lg border border-teal-200 p-4">
                                    <h4 class="font-medium text-gray-900 mb-2">Derecho y Ciencias Políticas</h4>
                                    <a href="https://sinc.unamad.edu.pe:8000/media/pdf/DISEÑO_CURRICULAR_DE_DERECHO_Y_CIENCIAS_POLITICAS.pdf" 
                                       target="_blank" rel="noopener noreferrer"
                                       class="inline-flex items-center px-3 py-1 bg-red-50 text-red-700 rounded-md hover:bg-red-100 text-sm">
                                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                        </svg>
                                        Ver Diseño Curricular
                                    </a>
                                </div>

                                <!-- Enfermería -->
                                <div class="bg-white rounded-lg border border-teal-200 p-4">
                                    <h4 class="font-medium text-gray-900 mb-2">Enfermería</h4>
                                    <a href="https://sinc.unamad.edu.pe:8000/media/pdf/DISEÑO_CURRICULAR_DE_ENFERMERIA.pdf" 
                                       target="_blank" rel="noopener noreferrer"
                                       class="inline-flex items-center px-3 py-1 bg-red-50 text-red-700 rounded-md hover:bg-red-100 text-sm">
                                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                        </svg>
                                        Ver Diseño Curricular
                                    </a>
                                </div>

                                <!-- Educación: Inicial y Especial -->
                                <div class="bg-white rounded-lg border border-teal-200 p-4">
                                    <h4 class="font-medium text-gray-900 mb-2">Educación: Especialidad Inicial y Especial</h4>
                                    <a href="https://sinc.unamad.edu.pe:8000/media/pdf/DISEÑO_CURRICULAR_DE_EDUCACION_ESPECIALIDAD_INICIAL_Y_ESPECIAL_baXj1V7.pdf" 
                                       target="_blank" rel="noopener noreferrer"
                                       class="inline-flex items-center px-3 py-1 bg-red-50 text-red-700 rounded-md hover:bg-red-100 text-sm">
                                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                        </svg>
                                        Ver Diseño Curricular
                                    </a>
                                </div>

                                <!-- Educación: Matemática y Computación -->
                                <div class="bg-white rounded-lg border border-teal-200 p-4">
                                    <h4 class="font-medium text-gray-900 mb-2">Educación: Especialidad Matemática y Computación</h4>
                                    <a href="https://sinc.unamad.edu.pe:8000/media/pdf/DISEÑO_CURRICULAR_DE_EDUCACION_ESPECIALIDAD_MATEMATICA_Y_COMPUTACION.pdf" 
                                       target="_blank" rel="noopener noreferrer"
                                       class="inline-flex items-center px-3 py-1 bg-red-50 text-red-700 rounded-md hover:bg-red-100 text-sm">
                                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                        </svg>
                                        Ver Diseño Curricular
                                    </a>
                                </div>

                                <!-- Educación: Primaria e Informática -->
                                <div class="bg-white rounded-lg border border-teal-200 p-4">
                                    <h4 class="font-medium text-gray-900 mb-2">Educación: Especialidad Primaria e Informática</h4>
                                    <a href="https://sinc.unamad.edu.pe:8000/media/pdf/DISEÑO_CURRICULAR_CARRERA_PROFESIONAL_DE_EDUCACIÓN_ESPECIALIDAD_PRIMARIA_E_INFORMÁTICA.pdf" 
                                       target="_blank" rel="noopener noreferrer"
                                       class="inline-flex items-center px-3 py-1 bg-red-50 text-red-700 rounded-md hover:bg-red-100 text-sm">
                                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                        </svg>
                                        Ver Diseño Curricular
                                    </a>
                                </div>

                                <!-- Ingeniería Agroindustrial -->
                                <div class="bg-white rounded-lg border border-teal-200 p-4">
                                    <h4 class="font-medium text-gray-900 mb-2">Ingeniería Agroindustrial</h4>
                                    <a href="https://sinc.unamad.edu.pe:8000/media/pdf/DISEÑO_CURRICULAR_DE_INGENIERIA_AGROINDUSTRIAL.pdf" 
                                       target="_blank" rel="noopener noreferrer"
                                       class="inline-flex items-center px-3 py-1 bg-red-50 text-red-700 rounded-md hover:bg-red-100 text-sm">
                                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                        </svg>
                                        Ver Diseño Curricular
                                    </a>
                                </div>

                                <!-- Ingeniería Forestal y Medio Ambiente -->
                                <div class="bg-white rounded-lg border border-teal-200 p-4">
                                    <h4 class="font-medium text-gray-900 mb-2">Ingeniería Forestal y Medio Ambiente</h4>
                                    <a href="https://sinc.unamad.edu.pe:8000/media/pdf/DISEÑO_CURRICULAR_DE_INGENIERIA_FORESTAL_Y_MEDIO_AMBIENTE.pdf" 
                                       target="_blank" rel="noopener noreferrer"
                                       class="inline-flex items-center px-3 py-1 bg-red-50 text-red-700 rounded-md hover:bg-red-100 text-sm">
                                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                        </svg>
                                        Ver Diseño Curricular
                                    </a>
                                </div>

                                <!-- Ingeniería de Sistemas e Informática -->
                                <div class="bg-white rounded-lg border border-teal-200 p-4">
                                    <h4 class="font-medium text-gray-900 mb-2">Ingeniería de Sistemas e Informática</h4>
                                    <a href="https://sinc.unamad.edu.pe:8000/media/pdf/DISEÑO_CURRICULAR_INGENIERIA_DE_SISTEMAS_E_INFORMATICA_L9cRoLi.pdf" 
                                       target="_blank" rel="noopener noreferrer"
                                       class="inline-flex items-center px-3 py-1 bg-red-50 text-red-700 rounded-md hover:bg-red-100 text-sm">
                                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                        </svg>
                                        Ver Diseño Curricular
                                    </a>
                                </div>

                                <!-- Medicina Veterinaria Zootecnia -->
                                <div class="bg-white rounded-lg border border-teal-200 p-4">
                                    <h4 class="font-medium text-gray-900 mb-2">Medicina Veterinaria Zootecnia</h4>
                                    <a href="https://sinc.unamad.edu.pe:8000/media/pdf/DISEÑO_CURRICULAR_DE_MEDICINA_VETERINARIA-ZOOTECNIA.pdf" 
                                       target="_blank" rel="noopener noreferrer"
                                       class="inline-flex items-center px-3 py-1 bg-red-50 text-red-700 rounded-md hover:bg-red-100 text-sm">
                                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                        </svg>
                                        Ver Diseño Curricular
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- 2023 Section -->
                        <div class="border-l-4 border-teal-500 pl-6 py-4 bg-teal-50">
                            <h3 class="text-xl font-semibold text-teal-800 mb-4">Malla Curricular 2023</h3>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <!-- Administración y Negocios Internacionales -->
                                <div class="bg-white rounded-lg border border-teal-200 p-4">
                                    <h4 class="font-medium text-gray-900 mb-2">Administración y Negocios Internacionales</h4>
                                    <a href="https://sinc.unamad.edu.pe:8000/media/pdf/DISEÑO_CURRICULAR_DE_ADMINISTRACION_Y_NEGOCIOS_INTERNACIONALES.pdf" 
                                       target="_blank" rel="noopener noreferrer"
                                       class="inline-flex items-center px-3 py-1 bg-red-50 text-red-700 rounded-md hover:bg-red-100 text-sm">
                                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                        </svg>
                                        Ver Malla Curricular
                                    </a>
                                </div>

                                <!-- Contabilidad y Finanzas -->
                                <div class="bg-white rounded-lg border border-teal-200 p-4">
                                    <h4 class="font-medium text-gray-900 mb-2">Contabilidad y Finanzas</h4>
                                    <a href="https://sinc.unamad.edu.pe:8000/media/pdf/DISEÑO_CURRICULAR_DE_CONTABILIDAD_Y_FINANZAS__UNAMAD_...pdf" 
                                       target="_blank" rel="noopener noreferrer"
                                       class="inline-flex items-center px-3 py-1 bg-red-50 text-red-700 rounded-md hover:bg-red-100 text-sm">
                                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                        </svg>
                                        Ver Malla Curricular
                                    </a>
                                </div>

                                <!-- Ecoturismo -->
                                <div class="bg-white rounded-lg border border-teal-200 p-4">
                                    <h4 class="font-medium text-gray-900 mb-2">Ecoturismo</h4>
                                    <a href="https://sinc.unamad.edu.pe:8000/media/pdf/DISEÑO_CURRICULAR_DE_ECOTURISMO.pdf" 
                                       target="_blank" rel="noopener noreferrer"
                                       class="inline-flex items-center px-3 py-1 bg-red-50 text-red-700 rounded-md hover:bg-red-100 text-sm">
                                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                        </svg>
                                        Ver Malla Curricular
                                    </a>
                                </div>

                                <!-- Derecho y Ciencias Políticas -->
                                <div class="bg-white rounded-lg border border-teal-200 p-4">
                                    <h4 class="font-medium text-gray-900 mb-2">Derecho y Ciencias Políticas</h4>
                                    <a href="https://sinc.unamad.edu.pe:8000/media/pdf/DISEÑO_CURRICULAR_DE_DERECHO_Y_CIENCIAS_POLITICAS.pdf" 
                                       target="_blank" rel="noopener noreferrer"
                                       class="inline-flex items-center px-3 py-1 bg-red-50 text-red-700 rounded-md hover:bg-red-100 text-sm">
                                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                        </svg>
                                        Ver Malla Curricular
                                    </a>
                                </div>

                                <!-- Enfermería -->
                                <div class="bg-white rounded-lg border border-teal-200 p-4">
                                    <h4 class="font-medium text-gray-900 mb-2">Enfermería</h4>
                                    <a href="https://sinc.unamad.edu.pe:8000/media/pdf/DISEÑO_CURRICULAR_DE_ENFERMERIA.pdf" 
                                       target="_blank" rel="noopener noreferrer"
                                       class="inline-flex items-center px-3 py-1 bg-red-50 text-red-700 rounded-md hover:bg-red-100 text-sm">
                                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                        </svg>
                                        Ver Malla Curricular
                                    </a>
                                </div>

                                <!-- Educación: Inicial y Especial -->
                                <div class="bg-white rounded-lg border border-teal-200 p-4">
                                    <h4 class="font-medium text-gray-900 mb-2">Educación: Especialidad Inicial y Especial</h4>
                                    <a href="https://sinc.unamad.edu.pe:8000/media/pdf/DISEÑO_CURRICULAR_DE_EDUCACION_ESPECIALIDAD_INICIAL_Y_ESPECIAL_baXj1V7.pdf" 
                                       target="_blank" rel="noopener noreferrer"
                                       class="inline-flex items-center px-3 py-1 bg-red-50 text-red-700 rounded-md hover:bg-red-100 text-sm">
                                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                        </svg>
                                        Ver Malla Curricular
                                    </a>
                                </div>

                                <!-- Educación: Matemática y Computación -->
                                <div class="bg-white rounded-lg border border-teal-200 p-4">
                                    <h4 class="font-medium text-gray-900 mb-2">Educación: Especialidad Matemática y Computación</h4>
                                    <a href="https://sinc.unamad.edu.pe:8000/media/pdf/DISEÑO_CURRICULAR_DE_EDUCACION_ESPECIALIDAD_MATEMATICA_Y_COMPUTACION.pdf" 
                                       target="_blank" rel="noopener noreferrer"
                                       class="inline-flex items-center px-3 py-1 bg-red-50 text-red-700 rounded-md hover:bg-red-100 text-sm">
                                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                        </svg>
                                        Ver Malla Curricular
                                    </a>
                                </div>

                                <!-- Educación: Primaria e Informática -->
                                <div class="bg-white rounded-lg border border-teal-200 p-4">
                                    <h4 class="font-medium text-gray-900 mb-2">Educación: Especialidad Primaria e Informática</h4>
                                    <a href="https://sinc.unamad.edu.pe:8000/media/pdf/DISEÑO_CURRICULAR_CARRERA_PROFESIONAL_DE_EDUCACIÓN_ESPECIALIDAD_PRIMARIA_E_INFORMÁTICA.pdf" 
                                       target="_blank" rel="noopener noreferrer"
                                       class="inline-flex items-center px-3 py-1 bg-red-50 text-red-700 rounded-md hover:bg-red-100 text-sm">
                                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                        </svg>
                                        Ver Malla Curricular
                                    </a>
                                </div>

                                <!-- Ingeniería Agroindustrial -->
                                <div class="bg-white rounded-lg border border-teal-200 p-4">
                                    <h4 class="font-medium text-gray-900 mb-2">Ingeniería Agroindustrial</h4>
                                    <a href="https://sinc.unamad.edu.pe:8000/media/pdf/DISEÑO_CURRICULAR_DE_INGENIERIA_AGROINDUSTRIAL.pdf" 
                                       target="_blank" rel="noopener noreferrer"
                                       class="inline-flex items-center px-3 py-1 bg-red-50 text-red-700 rounded-md hover:bg-red-100 text-sm">
                                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                        </svg>
                                        Ver Malla Curricular
                                    </a>
                                </div>

                                <!-- Ingeniería Forestal y Medio Ambiente -->
                                <div class="bg-white rounded-lg border border-teal-200 p-4">
                                    <h4 class="font-medium text-gray-900 mb-2">Ingeniería Forestal y Medio Ambiente</h4>
                                    <a href="https://sinc.unamad.edu.pe:8000/media/pdf/DISEÑO_CURRICULAR_DE_INGENIERIA_FORESTAL_Y_MEDIO_AMBIENTE.pdf" 
                                       target="_blank" rel="noopener noreferrer"
                                       class="inline-flex items-center px-3 py-1 bg-red-50 text-red-700 rounded-md hover:bg-red-100 text-sm">
                                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                        </svg>
                                        Ver Malla Curricular
                                    </a>
                                </div>

                                <!-- Ingeniería de Sistemas e Informática -->
                                <div class="bg-white rounded-lg border border-teal-200 p-4">
                                    <h4 class="font-medium text-gray-900 mb-2">Ingeniería de Sistemas e Informática</h4>
                                    <a href="https://sinc.unamad.edu.pe:8000/media/pdf/DISEÑO_CURRICULAR_INGENIERIA_DE_SISTEMAS_E_INFORMATICA_L9cRoLi.pdf" 
                                       target="_blank" rel="noopener noreferrer"
                                       class="inline-flex items-center px-3 py-1 bg-red-50 text-red-700 rounded-md hover:bg-red-100 text-sm">
                                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                        </svg>
                                        Ver Malla Curricular
                                    </a>
                                </div>

                                <!-- Medicina Veterinaria Zootecnia -->
                                <div class="bg-white rounded-lg border border-teal-200 p-4">
                                    <h4 class="font-medium text-gray-900 mb-2">Medicina Veterinaria Zootecnia</h4>
                                    <a href="https://sinc.unamad.edu.pe:8000/media/pdf/DISEÑO_CURRICULAR_DE_MEDICINA_VETERINARIA-ZOOTECNIA.pdf" 
                                       target="_blank" rel="noopener noreferrer"
                                       class="inline-flex items-center px-3 py-1 bg-red-50 text-red-700 rounded-md hover:bg-red-100 text-sm">
                                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                        </svg>
                                        Ver Malla Curricular
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 p-6 bg-teal-50 rounded-lg border border-teal-200">
                        <h3 class="text-lg font-semibold text-teal-800 mb-3 flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M13,9H11V7H13M13,17H11V11H13M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"/>
                            </svg>
                            Información Importante
                        </h3>
                        <ul class="text-sm text-teal-700 space-y-2">
                            <li class="flex items-start">
                                <span class="text-teal-600 mr-2">•</span>
                                Los diseños curriculares están actualizados según las normativas vigentes
                            </li>
                            <li class="flex items-start">
                                <span class="text-teal-600 mr-2">•</span>
                                Cada programa de estudios cuenta con su malla curricular específica
                            </li>
                            <li class="flex items-start">
                                <span class="text-teal-600 mr-2">•</span>
                                Los documentos incluyen plan de estudios, competencias y perfil profesional
                            </li>
                            <li class="flex items-start">
                                <span class="text-teal-600 mr-2">•</span>
                                Para consultas específicas sobre cursos, contacte con la Dirección Académica correspondiente
                            </li>
                        </ul>
                    </div>

                    <div class="mt-6 p-4 bg-emerald-50 rounded-lg border border-emerald-200">
                        <div class="flex items-start">
                            <svg class="w-5 h-5 text-emerald-600 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12,2L13.09,8.26L22,9L17,14L18.18,22L12,19L5.82,22L7,14L2,9L10.91,8.26L12,2Z"/>
                            </svg>
                            <div>
                                <h4 class="font-medium text-emerald-800 mb-1">Excelencia Académica</h4>
                                <p class="text-sm text-emerald-700">
                                    UNAMAD ofrece programas de estudios actualizados y alineados con las necesidades 
                                    del mercado laboral y el desarrollo sostenible de la región amazónica, formando 
                                    profesionales competentes y comprometidos con la investigación e innovación.
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
@endsection