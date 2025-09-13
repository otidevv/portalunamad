@extends('layouts.app')

@section('content')
<div class="bg-gradient-to-br from-blue-50 to-indigo-50 min-h-screen">
    <div class="bg-gradient-to-r from-blue-600 to-indigo-600 text-white py-16">
        <div class="container mx-auto px-4">
            <div class="flex items-center mb-4">
                <svg class="w-8 h-8 mr-3" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12,1L3,5V11C3,16.55 6.84,21.74 12,23C17.16,21.74 21,16.55 21,11V5L12,1M12,7C13.11,7 14,7.89 14,9C14,10.11 13.11,11 12,11C10.89,11 10,10.11 10,9C10,7.89 10.89,7 12,7M18,9C18,12.32 15.79,15.22 12.71,16.71C12.49,16.81 12.26,16.9 12,16.9C11.74,16.9 11.51,16.81 11.29,16.71C8.21,15.22 6,12.32 6,9C6,5.69 8.69,3 12,3C15.31,3 18,5.69 18,9Z"/>
                </svg>
                <h1 class="text-4xl font-bold">Transparencia Universitaria</h1>
            </div>
            <p class="text-xl text-blue-100">
                Artículo 11 - Información pública de la universidad
            </p>
        </div>
    </div>

    <div class="container mx-auto px-4 py-8">
        <nav class="text-sm text-gray-600 mb-8">
            <a href="/" class="hover:text-blue-600">Inicio</a>
            <span class="mx-2">›</span>
            <span class="text-gray-800">Transparencia - Artículo 11</span>
        </nav>

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
            <div class="lg:col-span-3">
                <div class="bg-white rounded-lg shadow-md p-8">
                    <div class="mb-8">
                        <h2 class="text-2xl font-bold text-blue-800 mb-4 flex items-center">
                            <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12,1L3,5V11C3,16.55 6.84,21.74 12,23C17.16,21.74 21,16.55 21,11V5L12,1M12,7C13.11,7 14,7.89 14,9C14,10.11 13.11,11 12,11C10.89,11 10,10.11 10,9C10,7.89 10.89,7 12,7M18,9C18,12.32 15.79,15.22 12.71,16.71C12.49,16.81 12.26,16.9 12,16.9C11.74,16.9 11.51,16.81 11.29,16.71C8.21,15.22 6,12.32 6,9C6,5.69 8.69,3 12,3C15.31,3 18,5.69 18,9Z"/>
                            </svg>
                            Transparencia Universitaria - Artículo 11
                        </h2>
                        <p class="text-gray-700 mb-6">
                            En cumplimiento del Artículo 11 de la Ley Universitaria N° 30220, la Universidad Nacional 
                            Amazónica de Madre de Dios pone a disposición de la ciudadanía la siguiente información 
                            institucional para garantizar la transparencia en la gestión universitaria.
                        </p>
                    </div>

                    <div class="space-y-6">
                        <!-- Estatuto -->
                        <div class="border-l-4 border-blue-500 pl-6 py-4 bg-blue-50">
                            <h3 class="text-xl font-semibold text-blue-800 mb-3">Estatuto</h3>
                            <div class="flex items-center justify-between p-4 bg-white rounded-lg border border-blue-200 hover:bg-blue-50 transition-colors">
                                <div class="flex items-center">
                                    <svg class="w-5 h-5 text-red-600 mr-3" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                    </svg>
                                    <div>
                                        <h4 class="font-medium text-gray-900">Estatuto UNAMAD</h4>
                                        <p class="text-sm text-gray-600">Marco normativo institucional</p>
                                    </div>
                                </div>
                                <a href="https://www.gob.pe/institucion/unamad/colecciones/12821-estatuto" 
                                   target="_blank" 
                                   rel="noopener noreferrer"
                                   class="text-blue-600 hover:text-blue-800 font-medium">
                                    Ver documento →
                                </a>
                            </div>
                        </div>

                        <!-- TUPA -->
                        <div class="border-l-4 border-blue-500 pl-6 py-4 bg-blue-50">
                            <h3 class="text-xl font-semibold text-blue-800 mb-3">Texto Único de Procedimientos Administrativos - TUPA</h3>
                            <div class="flex items-center justify-between p-4 bg-white rounded-lg border border-blue-200 hover:bg-blue-50 transition-colors">
                                <div class="flex items-center">
                                    <svg class="w-5 h-5 text-green-600 mr-3" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20M12,12H15V16H12V12M8,12H11V18H8V12Z"/>
                                    </svg>
                                    <div>
                                        <h4 class="font-medium text-gray-900">TUPA 2022</h4>
                                        <p class="text-sm text-gray-600">Procedimientos administrativos actualizados</p>
                                    </div>
                                </div>
                                <a href="https://www.gob.pe/institucion/unamad/informes-publicaciones/5790232-texto-unico-de-procedimientos-administrativos-tupa-2022" 
                                   target="_blank" 
                                   rel="noopener noreferrer"
                                   class="text-blue-600 hover:text-blue-800 font-medium">
                                    Ver TUPA →
                                </a>
                            </div>
                        </div>

                        <!-- Proceso Presupuestario -->
                        <div class="border-l-4 border-blue-500 pl-6 py-4 bg-blue-50">
                            <h3 class="text-xl font-semibold text-blue-800 mb-3">Proceso Presupuestario del Año 2019</h3>
                            <div class="flex items-center justify-between p-4 bg-white rounded-lg border border-blue-200 hover:bg-blue-50 transition-colors">
                                <div class="flex items-center">
                                    <svg class="w-5 h-5 text-purple-600 mr-3" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M7,15H9C9,16.08 10.37,17 12,17C13.63,17 15,16.08 15,15C15,13.9 13.96,13.5 11.76,12.97C9.64,12.44 7,11.78 7,9C7,7.21 8.47,5.69 10.5,5.18V3H13.5V5.18C15.53,5.69 17,7.21 17,9H15C15,7.92 13.63,7 12,7C10.37,7 9,7.92 9,9C9,10.1 10.04,10.5 12.24,11.03C14.36,11.56 17,12.22 17,15C17,16.79 15.53,18.31 13.5,18.82V21H10.5V18.82C8.47,18.31 7,16.79 7,15Z"/>
                                    </svg>
                                    <div>
                                        <h4 class="font-medium text-gray-900">Presupuesto Institucional y Ejecución Presupuestal</h4>
                                        <p class="text-sm text-gray-600">Año Fiscal 2019</p>
                                    </div>
                                </div>
                                <a href="https://unamad.edu.pe/descargas/send/206-planificacion/18708-presupuesto-institucional.html" 
                                   target="_blank" 
                                   rel="noopener noreferrer"
                                   class="text-blue-600 hover:text-blue-800 font-medium">
                                    Ver presupuesto →
                                </a>
                            </div>
                        </div>

                        <!-- Actas -->
                        <div class="border-l-4 border-blue-500 pl-6 py-4 bg-blue-50">
                            <h3 class="text-xl font-semibold text-blue-800 mb-3">Actas de Consejo de Facultad, Consejo Universitario y Asamblea Universitaria</h3>
                            <div class="space-y-3">
                                <div class="flex items-center justify-between p-4 bg-white rounded-lg border border-blue-200 hover:bg-blue-50 transition-colors">
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5 text-blue-600 mr-3" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                        </svg>
                                        <div>
                                            <h4 class="font-medium text-gray-900">Actas de Facultad</h4>
                                            <p class="text-sm text-gray-600">Sesiones de consejos de facultad</p>
                                        </div>
                                    </div>
                                    <a href="https://www.gob.pe/institucion/unamad/informes-publicaciones/tipos/30-acta" 
                                       target="_blank" 
                                       rel="noopener noreferrer"
                                       class="text-blue-600 hover:text-blue-800 font-medium">
                                        Ver actas →
                                    </a>
                                </div>

                                <div class="flex items-center justify-between p-4 bg-white rounded-lg border border-blue-200 hover:bg-blue-50 transition-colors">
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5 text-orange-600 mr-3" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                        </svg>
                                        <div>
                                            <h4 class="font-medium text-gray-900">Actas de Asamblea Universitaria</h4>
                                            <p class="text-sm text-gray-600">Sesiones del máximo órgano de gobierno</p>
                                        </div>
                                    </div>
                                    <a href="https://www.gob.pe/institucion/unamad/colecciones/13181-acta-de-asamblea-universitaria" 
                                       target="_blank" 
                                       rel="noopener noreferrer"
                                       class="text-blue-600 hover:text-blue-800 font-medium">
                                        Ver actas →
                                    </a>
                                </div>

                                <div class="flex items-center justify-between p-4 bg-white rounded-lg border border-blue-200 hover:bg-blue-50 transition-colors">
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5 text-teal-600 mr-3" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                        </svg>
                                        <div>
                                            <h4 class="font-medium text-gray-900">Actas de Consejo Universitario</h4>
                                            <p class="text-sm text-gray-600">Sesiones del órgano de dirección académica</p>
                                        </div>
                                    </div>
                                    <a href="https://www.gob.pe/institucion/unamad/colecciones/12884-acta-de-consejo-universitario" 
                                       target="_blank" 
                                       rel="noopener noreferrer"
                                       class="text-blue-600 hover:text-blue-800 font-medium">
                                        Ver actas →
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Inversiones -->
                        <div class="border-l-4 border-blue-500 pl-6 py-4 bg-blue-50">
                            <h3 class="text-xl font-semibold text-blue-800 mb-3">Inversiones, Reinversiones, Donaciones, Obras de Infraestructura</h3>
                            <div class="flex items-center justify-between p-4 bg-white rounded-lg border border-blue-200 hover:bg-blue-50 transition-colors">
                                <div class="flex items-center">
                                    <svg class="w-5 h-5 text-yellow-600 mr-3" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12,3L2,12H5V20H19V12H22L12,3M12,8.75A2.25,2.25 0 0,1 14.25,11A2.25,2.25 0 0,1 12,13.25A2.25,2.25 0 0,1 9.75,11A2.25,2.25 0 0,1 12,8.75M12,15C13.5,15 16.5,15.75 16.5,17.25V18H7.5V17.25C7.5,15.75 10.5,15 12,15Z"/>
                                    </svg>
                                    <div>
                                        <h4 class="font-medium text-gray-900">Proyectos de Inversión y su Ejecución</h4>
                                        <p class="text-sm text-gray-600">Año Fiscal 2019</p>
                                    </div>
                                </div>
                                <a href="https://unamad.edu.pe/descargas/send/206-planificacion/18709-reporte-de-inversiones-ano-fiscal-2019.html" 
                                   target="_blank" 
                                   rel="noopener noreferrer"
                                   class="text-blue-600 hover:text-blue-800 font-medium">
                                    Ver reportes →
                                </a>
                            </div>
                        </div>

                        <!-- Proyectos de Investigación -->
                        <div class="border-l-4 border-blue-500 pl-6 py-4 bg-blue-50">
                            <h3 class="text-xl font-semibold text-blue-800 mb-3">Proyectos de Investigación y los Gastos que Genere</h3>
                            <div class="flex items-center justify-between p-4 bg-white rounded-lg border border-blue-200 hover:bg-blue-50 transition-colors">
                                <div class="flex items-center">
                                    <svg class="w-5 h-5 text-green-600 mr-3" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M9.5,3A6.5,6.5 0 0,1 16,9.5C16,11.11 15.41,12.59 14.44,13.73L14.71,14H15.5L20.5,19L19,20.5L14,15.5V14.71L13.73,14.44C12.59,15.41 11.11,16 9.5,16A6.5,6.5 0 0,1 3,9.5A6.5,6.5 0 0,1 9.5,3M9.5,5C7,5 5,7 5,9.5C5,12 7,14 9.5,14C12,14 14,12 14,9.5C14,7 12,5 9.5,5Z"/>
                                    </svg>
                                    <div>
                                        <h4 class="font-medium text-gray-900">Proyectos de Investigación</h4>
                                        <p class="text-sm text-gray-600">Reportes de proyectos y gastos asociados</p>
                                    </div>
                                </div>
                                <a href="https://unamad.edu.pe/proyectos-de-investigacion.html" 
                                   target="_blank" 
                                   rel="noopener noreferrer"
                                   class="text-blue-600 hover:text-blue-800 font-medium">
                                    Ver reportes →
                                </a>
                            </div>
                        </div>

                        <!-- Egresados -->
                        <div class="border-l-4 border-blue-500 pl-6 py-4 bg-blue-50">
                            <h3 class="text-xl font-semibold text-blue-800 mb-3">Número de Egresados de Pregrado</h3>
                            <div class="flex items-center justify-between p-4 bg-white rounded-lg border border-blue-200 hover:bg-blue-50 transition-colors">
                                <div class="flex items-center">
                                    <svg class="w-5 h-5 text-indigo-600 mr-3" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12,3L1,9L12,15L21,10.09V17H23V9M5,13.18V17.18L12,21L19,17.18V13.18L12,17L5,13.18Z"/>
                                    </svg>
                                    <div>
                                        <h4 class="font-medium text-gray-900">Estadísticas de Egresados</h4>
                                        <p class="text-sm text-gray-600">Egresados por carrera profesional</p>
                                    </div>
                                </div>
                                <a href="http://academico.unamad.edu.pe/indicadores/index.php?id=egresados&menu=egresadosCarrera" 
                                   target="_blank" 
                                   rel="noopener noreferrer"
                                   class="text-blue-600 hover:text-blue-800 font-medium">
                                    Ver estadísticas →
                                </a>
                            </div>
                        </div>

                        <!-- Concursos Docentes -->
                        <div class="border-l-4 border-blue-500 pl-6 py-4 bg-blue-50">
                            <h3 class="text-xl font-semibold text-blue-800 mb-3">Vacantes y Fechas de Concurso de Selección para Docentes</h3>
                            <div class="flex items-center justify-between p-4 bg-white rounded-lg border border-blue-200 hover:bg-blue-50 transition-colors">
                                <div class="flex items-center">
                                    <svg class="w-5 h-5 text-red-600 mr-3" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12,2A3,3 0 0,1 15,5V7H19A2,2 0 0,1 21,9V19A2,2 0 0,1 19,21H5A2,2 0 0,1 3,19V9A2,2 0 0,1 5,7H9V5A3,3 0 0,1 12,2M12,4A1,1 0 0,0 11,5V7H13V5A1,1 0 0,0 12,4Z"/>
                                    </svg>
                                    <div>
                                        <h4 class="font-medium text-gray-900">Proceso de Selección de Docentes</h4>
                                        <p class="text-sm text-gray-600">Período 2014-2019</p>
                                    </div>
                                </div>
                                <a href="https://unamad.edu.pe/descargas/send/442-2019/17408-proceso-de-seleccion-de-docentes-2014-2019.html" 
                                   target="_blank" 
                                   rel="noopener noreferrer"
                                   class="text-blue-600 hover:text-blue-800 font-medium">
                                    Ver proceso →
                                </a>
                            </div>
                        </div>

                        <!-- Remuneraciones Docentes -->
                        <div class="border-l-4 border-blue-500 pl-6 py-4 bg-blue-50">
                            <h3 class="text-xl font-semibold text-blue-800 mb-3">Remuneraciones, Bonificación y Estímulos a Docentes</h3>
                            <div class="flex items-center justify-between p-4 bg-white rounded-lg border border-blue-200 hover:bg-blue-50 transition-colors">
                                <div class="flex items-center">
                                    <svg class="w-5 h-5 text-green-600 mr-3" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M5,6H23V18H5V6M14,9A3,3 0 0,1 17,12A3,3 0 0,1 14,15A3,3 0 0,1 11,12A3,3 0 0,1 14,9M9,8A2,2 0 0,1 7,10V14A2,2 0 0,1 9,16H19A2,2 0 0,1 21,14V10A2,2 0 0,1 19,8H9Z"/>
                                    </svg>
                                    <div>
                                        <h4 class="font-medium text-gray-900">Remuneraciones y Bonificaciones</h4>
                                        <p class="text-sm text-gray-600">Reporte de pagos al personal docente</p>
                                    </div>
                                </div>
                                <a href="https://unamad.edu.pe/remuneracion-bonificacion-y-estimulos-a-docentes.html" 
                                   target="_blank" 
                                   rel="noopener noreferrer"
                                   class="text-blue-600 hover:text-blue-800 font-medium">
                                    Verificar reporte →
                                </a>
                            </div>
                        </div>

                        <!-- ROF -->
                        <div class="border-l-4 border-blue-500 pl-6 py-4 bg-blue-50">
                            <h3 class="text-xl font-semibold text-blue-800 mb-3">Reglamento de Organización y Funciones - ROF</h3>
                            <div class="flex items-center justify-between p-4 bg-white rounded-lg border border-blue-200 hover:bg-blue-50 transition-colors">
                                <div class="flex items-center">
                                    <svg class="w-5 h-5 text-purple-600 mr-3" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                    </svg>
                                    <div>
                                        <h4 class="font-medium text-gray-900">ROF Institucional</h4>
                                        <p class="text-sm text-gray-600">Estructura organizacional y funciones</p>
                                    </div>
                                </div>
                                <a href="https://www.gob.pe/institucion/unamad/normas-legales/3243916-218-2022-r" 
                                   target="_blank" 
                                   rel="noopener noreferrer"
                                   class="text-blue-600 hover:text-blue-800 font-medium">
                                    Ver ROF →
                                </a>
                            </div>
                        </div>

                        <!-- POI -->
                        <div class="border-l-4 border-blue-500 pl-6 py-4 bg-blue-50">
                            <h3 class="text-xl font-semibold text-blue-800 mb-3">Plan Operativo Institucional</h3>
                            <div class="flex items-center justify-between p-4 bg-white rounded-lg border border-blue-200 hover:bg-blue-50 transition-colors">
                                <div class="flex items-center">
                                    <svg class="w-5 h-5 text-teal-600 mr-3" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                    </svg>
                                    <div>
                                        <h4 class="font-medium text-gray-900">POI 2024</h4>
                                        <p class="text-sm text-gray-600">Informe de evaluación del Plan Operativo Institucional</p>
                                    </div>
                                </div>
                                <a href="https://www.gob.pe/institucion/unamad/informes-publicaciones/6126108-informe-de-evaluacion-del-plan-operativo-institucional-2024-unamad" 
                                   target="_blank" 
                                   rel="noopener noreferrer"
                                   class="text-blue-600 hover:text-blue-800 font-medium">
                                    Ver POI →
                                </a>
                            </div>
                        </div>

                        <!-- Estudiantes Matriculados -->
                        <div class="border-l-4 border-blue-500 pl-6 py-4 bg-blue-50">
                            <h3 class="text-xl font-semibold text-blue-800 mb-3">Número de Estudiantes de Pregrado Matriculados por Facultades y Programas de Estudio</h3>
                            <div class="flex items-center justify-between p-4 bg-white rounded-lg border border-gray-300 hover:bg-gray-50 transition-colors">
                                <div class="flex items-center">
                                    <svg class="w-5 h-5 text-gray-500 mr-3" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M16,8A8,8 0 0,1 8,16H16M16,16A8,8 0 0,1 8,8V16M8,8A8,8 0 0,1 16,16V8"/>
                                    </svg>
                                    <div>
                                        <h4 class="font-medium text-gray-500">Estadísticas de Matrícula</h4>
                                        <p class="text-sm text-gray-400">Enlace no disponible temporalmente</p>
                                    </div>
                                </div>
                                <span class="text-gray-400 font-medium">No disponible</span>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 p-6 bg-blue-50 rounded-lg border border-blue-200">
                        <h3 class="text-lg font-semibold text-blue-800 mb-3 flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M13,9H11V7H13M13,17H11V11H13M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"/>
                            </svg>
                            Marco Legal
                        </h3>
                        <ul class="text-sm text-blue-700 space-y-2">
                            <li class="flex items-start">
                                <span class="text-blue-600 mr-2">•</span>
                                Esta información se publica en cumplimiento del Artículo 11 de la Ley Universitaria N° 30220
                            </li>
                            <li class="flex items-start">
                                <span class="text-blue-600 mr-2">•</span>
                                Garantiza la transparencia y el acceso a la información pública universitaria
                            </li>
                            <li class="flex items-start">
                                <span class="text-blue-600 mr-2">•</span>
                                Los documentos se actualizan periódicamente según la normativa vigente
                            </li>
                            <li class="flex items-start">
                                <span class="text-blue-600 mr-2">•</span>
                                Para consultas específicas, contacte con la Oficina de Transparencia Universitaria
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-1">
                <div class="sticky top-8">
                    @include('transparencia.articulo-11.partials.navigation')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection