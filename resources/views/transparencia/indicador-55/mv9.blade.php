@extends('layouts.app')

@section('content')
<div class="bg-gradient-to-br from-teal-50 to-emerald-50 min-h-screen">
    <div class="bg-gradient-to-r from-teal-600 to-emerald-600 text-white py-16">
        <div class="container mx-auto px-4">
            <div class="flex items-center mb-4">
                <svg class="w-8 h-8 mr-3" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M9.5,3A6.5,6.5 0 0,1 16,9.5C16,11.11 15.41,12.59 14.44,13.73L14.71,14H15.5L20.5,19L19,20.5L14,15.5V14.71L13.73,14.44C12.59,15.41 11.11,16 9.5,16A6.5,6.5 0 0,1 3,9.5A6.5,6.5 0 0,1 9.5,3M9.5,5C7,5 5,7 5,9.5C5,12 7,14 9.5,14C12,14 14,12 14,9.5C14,7 12,5 9.5,5Z"/>
                </svg>
                <h1 class="text-4xl font-bold">MV9: Proyectos de Investigación</h1>
            </div>
            <p class="text-xl text-teal-100">
                Títulos de proyectos de investigación actualizados por semestre académico
            </p>
        </div>
    </div>

    <div class="container mx-auto px-4 py-8">
        <nav class="text-sm text-gray-600 mb-8">
            <a href="/" class="hover:text-teal-600">Inicio</a>
            <span class="mx-2">›</span>
            <a href="/transparencia/indicador-55" class="hover:text-teal-600">Transparencia - Indicador 55</a>
            <span class="mx-2">›</span>
            <span class="text-gray-800">MV9: Proyectos de Investigación</span>
        </nav>

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
            <div class="lg:col-span-3">
                <div class="bg-white rounded-lg shadow-md p-8">
                    <div class="mb-8">
                        <h2 class="text-2xl font-bold text-teal-800 mb-4 flex items-center">
                            <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M9.5,3A6.5,6.5 0 0,1 16,9.5C16,11.11 15.41,12.59 14.44,13.73L14.71,14H15.5L20.5,19L19,20.5L14,15.5V14.71L13.73,14.44C12.59,15.41 11.11,16 9.5,16A6.5,6.5 0 0,1 3,9.5A6.5,6.5 0 0,1 9.5,3M9.5,5C7,5 5,7 5,9.5C5,12 7,14 9.5,14C12,14 14,12 14,9.5C14,7 12,5 9.5,5Z"/>
                            </svg>
                            Título de los Proyectos de Investigación
                        </h2>
                        <p class="text-gray-700 mb-6">
                            La Universidad Nacional Amazónica de Madre de Dios presenta los títulos de proyectos 
                            de investigación desarrollados por la comunidad académica, actualizados al último semestre académico.
                        </p>
                    </div>

                    <div class="space-y-6">
                        <div class="border-l-4 border-teal-500 pl-6 py-4 bg-teal-50">
                            <h3 class="text-xl font-semibold text-teal-800 mb-3">2024</h3>
                            <div class="space-y-2">
                                <div class="flex items-center justify-between p-4 bg-white rounded-lg border border-teal-200 hover:bg-teal-50 transition-colors">
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5 text-red-600 mr-3" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                        </svg>
                                        <div>
                                            <h4 class="font-medium text-gray-900">Proyectos de Investigación 2024</h4>
                                            <p class="text-sm text-gray-600">Títulos actualizados al último semestre académico</p>
                                        </div>
                                    </div>
                                    <a href="https://sinc.unamad.edu.pe:8000/media/pdf/55_-_2024.pdf" 
                                       target="_blank" 
                                       rel="noopener noreferrer"
                                       class="text-teal-600 hover:text-teal-800 font-medium">
                                        Ver documento →
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="border-l-4 border-teal-500 pl-6 py-4 bg-teal-50">
                            <h3 class="text-xl font-semibold text-teal-800 mb-3">2023</h3>
                            <div class="space-y-2">
                                <div class="flex items-center justify-between p-4 bg-white rounded-lg border border-teal-200 hover:bg-teal-50 transition-colors">
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5 text-red-600 mr-3" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                        </svg>
                                        <div>
                                            <h4 class="font-medium text-gray-900">Proyectos de Investigación 2023</h4>
                                            <p class="text-sm text-gray-600">Compendio de títulos de investigaciones del año</p>
                                        </div>
                                    </div>
                                    <a href="https://sinc.unamad.edu.pe:8000/media/pdf/55_-_2023_lfPzjAE.pdf" 
                                       target="_blank" 
                                       rel="noopener noreferrer"
                                       class="text-teal-600 hover:text-teal-800 font-medium">
                                        Ver documento →
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="border-l-4 border-teal-500 pl-6 py-4 bg-teal-50">
                            <h3 class="text-xl font-semibold text-teal-800 mb-3">2022</h3>
                            <div class="space-y-2">
                                <div class="flex items-center justify-between p-4 bg-white rounded-lg border border-teal-200 hover:bg-teal-50 transition-colors">
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5 text-red-600 mr-3" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                        </svg>
                                        <div>
                                            <h4 class="font-medium text-gray-900">Proyectos de Investigación 2022</h4>
                                            <p class="text-sm text-gray-600">Registro de investigaciones desarrolladas</p>
                                        </div>
                                    </div>
                                    <a href="https://sinc.unamad.edu.pe:8000/media/pdf/55_-_2022_3sRgbUe.pdf" 
                                       target="_blank" 
                                       rel="noopener noreferrer"
                                       class="text-teal-600 hover:text-teal-800 font-medium">
                                        Ver documento →
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="border-l-4 border-teal-500 pl-6 py-4 bg-teal-50">
                            <h3 class="text-xl font-semibold text-teal-800 mb-3">2021</h3>
                            <div class="space-y-2">
                                <div class="flex items-center justify-between p-4 bg-white rounded-lg border border-teal-200 hover:bg-teal-50 transition-colors">
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5 text-red-600 mr-3" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                        </svg>
                                        <div>
                                            <h4 class="font-medium text-gray-900">Proyectos de Investigación 2021</h4>
                                            <p class="text-sm text-gray-600">Listado de títulos de proyectos académicos</p>
                                        </div>
                                    </div>
                                    <a href="https://sinc.unamad.edu.pe:8000/media/pdf/55_-_2021_w2ck8Wk.pdf" 
                                       target="_blank" 
                                       rel="noopener noreferrer"
                                       class="text-teal-600 hover:text-teal-800 font-medium">
                                        Ver documento →
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="border-l-4 border-teal-500 pl-6 py-4 bg-teal-50">
                            <h3 class="text-xl font-semibold text-teal-800 mb-3">2020</h3>
                            <div class="space-y-2">
                                <div class="flex items-center justify-between p-4 bg-white rounded-lg border border-teal-200 hover:bg-teal-50 transition-colors">
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5 text-red-600 mr-3" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                        </svg>
                                        <div>
                                            <h4 class="font-medium text-gray-900">Proyectos de Investigación 2020</h4>
                                            <p class="text-sm text-gray-600">Investigaciones desarrolladas durante el año</p>
                                        </div>
                                    </div>
                                    <a href="https://sinc.unamad.edu.pe:8000/media/pdf/55_-2020_OcatDDB.pdf" 
                                       target="_blank" 
                                       rel="noopener noreferrer"
                                       class="text-teal-600 hover:text-teal-800 font-medium">
                                        Ver documento →
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="border-l-4 border-teal-500 pl-6 py-4 bg-teal-50">
                            <h3 class="text-xl font-semibold text-teal-800 mb-3">2019</h3>
                            <div class="space-y-2">
                                <div class="flex items-center justify-between p-4 bg-white rounded-lg border border-teal-200 hover:bg-teal-50 transition-colors">
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5 text-red-600 mr-3" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                        </svg>
                                        <div>
                                            <h4 class="font-medium text-gray-900">Proyectos de Investigación 2019</h4>
                                            <p class="text-sm text-gray-600">Compendio de títulos de investigaciones</p>
                                        </div>
                                    </div>
                                    <a href="https://sinc.unamad.edu.pe:8000/media/pdf/55_-_2019_1gfGjhf.pdf" 
                                       target="_blank" 
                                       rel="noopener noreferrer"
                                       class="text-teal-600 hover:text-teal-800 font-medium">
                                        Ver documento →
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
                                Los documentos contienen únicamente los títulos de los proyectos de investigación
                            </li>
                            <li class="flex items-start">
                                <span class="text-teal-600 mr-2">•</span>
                                La información está actualizada al último semestre académico de cada año
                            </li>
                            <li class="flex items-start">
                                <span class="text-teal-600 mr-2">•</span>
                                Los proyectos incluyen investigaciones de docentes y estudiantes de todas las facultades
                            </li>
                            <li class="flex items-start">
                                <span class="text-teal-600 mr-2">•</span>
                                Esta información forma parte del compromiso de transparencia en investigación
                            </li>
                            <li class="flex items-start">
                                <span class="text-teal-600 mr-2">•</span>
                                Para mayor detalle sobre proyectos específicos, consulte con el Vicerrectorado de Investigación
                            </li>
                        </ul>
                    </div>

                    <div class="mt-6 p-4 bg-emerald-50 rounded-lg border border-emerald-200">
                        <div class="flex items-start">
                            <svg class="w-5 h-5 text-emerald-600 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12,2L13.09,8.26L22,9L17,14L18.18,22L12,19L5.82,22L7,14L2,9L10.91,8.26L12,2Z"/>
                            </svg>
                            <div>
                                <h4 class="font-medium text-emerald-800 mb-1">Actividad Investigativa</h4>
                                <p class="text-sm text-emerald-700">
                                    UNAMAD mantiene un activo programa de investigación que contribuye al desarrollo 
                                    científico y tecnológico de la región amazónica, con proyectos que abordan 
                                    temáticas relevantes para la biodiversidad y sostenibilidad ambiental.
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