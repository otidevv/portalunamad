@extends('layouts.app')

@section('content')
<div class="bg-gradient-to-br from-orange-50 to-amber-50 min-h-screen">
    <div class="bg-gradient-to-r from-orange-600 to-amber-600 text-white py-16">
        <div class="container mx-auto px-4">
            <div class="flex items-center mb-4">
                <svg class="w-8 h-8 mr-3" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M7,15H9C9,16.08 10.37,17 12,17C13.63,17 15,16.08 15,15C15,13.9 13.96,13.5 11.76,12.97C9.64,12.44 7,11.78 7,9C7,7.21 8.47,5.69 10.5,5.18V3H13.5V5.18C15.53,5.69 17,7.21 17,9H15C15,7.92 13.63,7 12,7C10.37,7 9,7.92 9,9C9,10.1 10.04,10.5 12.24,11.03C14.36,11.56 17,12.22 17,15C17,16.79 15.53,18.31 13.5,18.82V21H10.5V18.82C8.47,18.31 7,16.79 7,15Z"/>
                </svg>
                <h1 class="text-4xl font-bold">MV10: Tarifas de Servicios</h1>
            </div>
            <p class="text-xl text-orange-100">
                Tarifas de servicios prestados: matrículas, pensiones, constancias, certificados y otros
            </p>
        </div>
    </div>

    <div class="container mx-auto px-4 py-8">
        <nav class="text-sm text-gray-600 mb-8">
            <a href="/" class="hover:text-orange-600">Inicio</a>
            <span class="mx-2">›</span>
            <a href="/transparencia/indicador-55" class="hover:text-orange-600">Transparencia - Indicador 55</a>
            <span class="mx-2">›</span>
            <span class="text-gray-800">MV10: Tarifas de Servicios</span>
        </nav>

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
            <div class="lg:col-span-3">
                <div class="bg-white rounded-lg shadow-md p-8">
                    <div class="mb-8">
                        <h2 class="text-2xl font-bold text-orange-800 mb-4 flex items-center">
                            <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M7,15H9C9,16.08 10.37,17 12,17C13.63,17 15,16.08 15,15C15,13.9 13.96,13.5 11.76,12.97C9.64,12.44 7,11.78 7,9C7,7.21 8.47,5.69 10.5,5.18V3H13.5V5.18C15.53,5.69 17,7.21 17,9H15C15,7.92 13.63,7 12,7C10.37,7 9,7.92 9,9C9,10.1 10.04,10.5 12.24,11.03C14.36,11.56 17,12.22 17,15C17,16.79 15.53,18.31 13.5,18.82V21H10.5V18.82C8.47,18.31 7,16.79 7,15Z"/>
                            </svg>
                            Tarifas de los Servicios Prestados por Toda Índole
                        </h2>
                        <p class="text-gray-700 mb-6">
                            La Universidad Nacional Amazónica de Madre de Dios presenta el Texto Único de Procedimientos 
                            Administrativos (TUPA) que establece las tarifas oficiales para todos los servicios universitarios.
                        </p>
                    </div>

                    <div class="space-y-8">
                        <div class="border-l-4 border-orange-500 pl-6 py-4 bg-orange-50">
                            <h3 class="text-xl font-semibold text-orange-800 mb-4 flex items-center">
                                <svg class="w-5 h-5 mr-2 text-green-600" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12,2L13.09,8.26L22,9L17,14L18.18,22L12,19L5.82,22L7,14L2,9L10.91,8.26L12,2Z"/>
                                </svg>
                                TUPA 2022 (Modificado - 2024) - VIGENTE
                            </h3>
                            <p class="text-gray-700 mb-4">
                                Versión actualizada y vigente del TUPA con las tarifas de servicios administrativos 
                                y académicos más recientes de la universidad.
                            </p>
                            <div class="space-y-3">
                                <div class="flex items-center justify-between p-4 bg-white rounded-lg border border-orange-200 hover:bg-orange-50 transition-colors">
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5 text-red-600 mr-3" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                        </svg>
                                        <div>
                                            <h4 class="font-medium text-gray-900">TUPA 2022 Digital Actualizado</h4>
                                            <p class="text-sm text-gray-600">Documento con tarifas vigentes - 2024</p>
                                        </div>
                                    </div>
                                    <a href="https://sinc.unamad.edu.pe:8000/media/pdf/5707962-tupa-2022-digital-actualizado-vigente.pdf" 
                                       target="_blank" 
                                       rel="noopener noreferrer"
                                       class="text-orange-600 hover:text-orange-800 font-medium">
                                        Ver documento →
                                    </a>
                                </div>
                                <div class="flex items-center justify-between p-4 bg-white rounded-lg border border-orange-200 hover:bg-orange-50 transition-colors">
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5 text-blue-600 mr-3" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M9,12L11,14L15,10M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2Z"/>
                                        </svg>
                                        <div>
                                            <h4 class="font-medium text-gray-900">Resolución N° 107-2024-UNAMAD-R</h4>
                                            <p class="text-sm text-gray-600">Resolución de aprobación - 2024</p>
                                        </div>
                                    </div>
                                    <a href="https://www.gob.pe/institucion/unamad/normas-legales/5707962-107-2024-unamad-r" 
                                       target="_blank" 
                                       rel="noopener noreferrer"
                                       class="text-orange-600 hover:text-orange-800 font-medium">
                                        Ver resolución →
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="border-l-4 border-amber-500 pl-6 py-4 bg-amber-50">
                            <h3 class="text-xl font-semibold text-amber-800 mb-4">TUPA 2022 (Modificado - 2023)</h3>
                            <p class="text-gray-700 mb-4">
                                Versión modificada del TUPA 2022 con actualizaciones realizadas durante el año 2023.
                            </p>
                            <div class="space-y-3">
                                <div class="flex items-center justify-between p-4 bg-white rounded-lg border border-amber-200 hover:bg-amber-50 transition-colors">
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5 text-red-600 mr-3" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                        </svg>
                                        <div>
                                            <h4 class="font-medium text-gray-900">TUPA 2022 Digital</h4>
                                            <p class="text-sm text-gray-600">Documento modificado - 2023</p>
                                        </div>
                                    </div>
                                    <a href="https://sinc.unamad.edu.pe:8000/media/pdf/5522593-tupa-2022-digital.pdf" 
                                       target="_blank" 
                                       rel="noopener noreferrer"
                                       class="text-amber-600 hover:text-amber-800 font-medium">
                                        Ver documento →
                                    </a>
                                </div>
                                <div class="flex items-center justify-between p-4 bg-white rounded-lg border border-amber-200 hover:bg-amber-50 transition-colors">
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5 text-blue-600 mr-3" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M9,12L11,14L15,10M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2Z"/>
                                        </svg>
                                        <div>
                                            <h4 class="font-medium text-gray-900">Resolución N° 281-2023-UNAMAD-R</h4>
                                            <p class="text-sm text-gray-600">Resolución de modificación - 2023</p>
                                        </div>
                                    </div>
                                    <a href="https://www.gob.pe/institucion/unamad/normas-legales/5522593-281-2023-unamad-r" 
                                       target="_blank" 
                                       rel="noopener noreferrer"
                                       class="text-amber-600 hover:text-amber-800 font-medium">
                                        Ver resolución →
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="border-l-4 border-yellow-500 pl-6 py-4 bg-yellow-50">
                            <h3 class="text-xl font-semibold text-yellow-800 mb-4">TUPA 2022 (Versiones Adicionales)</h3>
                            <p class="text-gray-700 mb-4">
                                Versión adicional del TUPA 2022 con complementos y especificaciones particulares.
                            </p>
                            <div class="space-y-3">
                                <div class="flex items-center justify-between p-4 bg-white rounded-lg border border-yellow-200 hover:bg-yellow-50 transition-colors">
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5 text-red-600 mr-3" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                        </svg>
                                        <div>
                                            <h4 class="font-medium text-gray-900">TUPA 2022 I</h4>
                                            <p class="text-sm text-gray-600">Versión complementaria del TUPA</p>
                                        </div>
                                    </div>
                                    <a href="https://sinc.unamad.edu.pe:8000/media/pdf/TUPA_2022_I.pdf" 
                                       target="_blank" 
                                       rel="noopener noreferrer"
                                       class="text-yellow-600 hover:text-yellow-800 font-medium">
                                        Ver documento →
                                    </a>
                                </div>
                                <div class="flex items-center justify-between p-4 bg-white rounded-lg border border-yellow-200 hover:bg-yellow-50 transition-colors">
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5 text-blue-600 mr-3" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M9,12L11,14L15,10M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2Z"/>
                                        </svg>
                                        <div>
                                            <h4 class="font-medium text-gray-900">Resolución N° 149-2023-UNAMAD-R</h4>
                                            <p class="text-sm text-gray-600">Resolución de aprobación</p>
                                        </div>
                                    </div>
                                    <a href="https://www.gob.pe/institucion/unamad/normas-legales/4193283-149-2023-unamad-r" 
                                       target="_blank" 
                                       rel="noopener noreferrer"
                                       class="text-yellow-600 hover:text-yellow-800 font-medium">
                                        Ver resolución →
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="border-l-4 border-orange-400 pl-6 py-4 bg-orange-50/70">
                            <h3 class="text-xl font-semibold text-orange-700 mb-4">TUPA 2022</h3>
                            <p class="text-gray-700 mb-4">
                                Versión original del TUPA 2022 que estableció las nuevas tarifas y procedimientos administrativos.
                            </p>
                            <div class="space-y-3">
                                <div class="flex items-center justify-between p-4 bg-white rounded-lg border border-orange-200 hover:bg-orange-50 transition-colors">
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5 text-red-600 mr-3" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                        </svg>
                                        <div>
                                            <h4 class="font-medium text-gray-900">TUPA 2022</h4>
                                            <p class="text-sm text-gray-600">Documento original TUPA</p>
                                        </div>
                                    </div>
                                    <a href="https://sinc.unamad.edu.pe:8000/media/pdf/TUPA_2022.pdf.pdf" 
                                       target="_blank" 
                                       rel="noopener noreferrer"
                                       class="text-orange-600 hover:text-orange-800 font-medium">
                                        Ver documento →
                                    </a>
                                </div>
                                <div class="flex items-center justify-between p-4 bg-white rounded-lg border border-orange-200 hover:bg-orange-50 transition-colors">
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5 text-blue-600 mr-3" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M9,12L11,14L15,10M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2Z"/>
                                        </svg>
                                        <div>
                                            <h4 class="font-medium text-gray-900">Resolución N° 625-2022-UNAMAD-CU</h4>
                                            <p class="text-sm text-gray-600">Resolución de aprobación original</p>
                                        </div>
                                    </div>
                                    <a href="https://www.gob.pe/institucion/unamad/normas-legales/3664816-625-2022-unamad-cu" 
                                       target="_blank" 
                                       rel="noopener noreferrer"
                                       class="text-orange-600 hover:text-orange-800 font-medium">
                                        Ver resolución →
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="border-l-4 border-amber-400 pl-6 py-4 bg-amber-50/70">
                            <h3 class="text-xl font-semibold text-amber-700 mb-4">TUPA 2018</h3>
                            <p class="text-gray-700 mb-4">
                                Primera versión del TUPA que estableció las bases del sistema de tarifas universitarias en UNAMAD.
                            </p>
                            <div class="space-y-3">
                                <div class="flex items-center justify-between p-4 bg-white rounded-lg border border-amber-200 hover:bg-amber-50 transition-colors">
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5 text-red-600 mr-3" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                        </svg>
                                        <div>
                                            <h4 class="font-medium text-gray-900">TUPA UNAMAD 2018</h4>
                                            <p class="text-sm text-gray-600">Documento fundacional del TUPA</p>
                                        </div>
                                    </div>
                                    <a href="https://sinc.unamad.edu.pe:8000/media/pdf/TUPA_UNAMAD.pdf" 
                                       target="_blank" 
                                       rel="noopener noreferrer"
                                       class="text-amber-600 hover:text-amber-800 font-medium">
                                        Ver documento →
                                    </a>
                                </div>
                                <div class="flex items-center justify-between p-4 bg-white rounded-lg border border-amber-200 hover:bg-amber-50 transition-colors">
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5 text-blue-600 mr-3" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M9,12L11,14L15,10M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2Z"/>
                                        </svg>
                                        <div>
                                            <h4 class="font-medium text-gray-900">Resolución N° 005-2018-UNAMAD-CU</h4>
                                            <p class="text-sm text-gray-600">Resolución de creación del TUPA</p>
                                        </div>
                                    </div>
                                    <a href="https://www.gob.pe/institucion/unamad/normas-legales/3469083-005-2018-unamad-cu" 
                                       target="_blank" 
                                       rel="noopener noreferrer"
                                       class="text-amber-600 hover:text-amber-800 font-medium">
                                        Ver resolución →
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 p-6 bg-orange-50 rounded-lg border border-orange-200">
                        <h3 class="text-lg font-semibold text-orange-800 mb-3 flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M13,9H11V7H13M13,17H11V11H13M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"/>
                            </svg>
                            Información Importante
                        </h3>
                        <ul class="text-sm text-orange-700 space-y-2">
                            <li class="flex items-start">
                                <span class="text-orange-600 mr-2">•</span>
                                El TUPA establece las tarifas oficiales para todos los servicios universitarios
                            </li>
                            <li class="flex items-start">
                                <span class="text-orange-600 mr-2">•</span>
                                Incluye costos de matrículas, pensiones, constancias, certificados y trámites diversos
                            </li>
                            <li class="flex items-start">
                                <span class="text-orange-600 mr-2">•</span>
                                Las tarifas son aprobadas mediante resolución del Consejo Universitario o Rectorado
                            </li>
                            <li class="flex items-start">
                                <span class="text-orange-600 mr-2">•</span>
                                Se actualizan periódicamente para reflejar cambios en costos administrativos
                            </li>
                            <li class="flex items-start">
                                <span class="text-orange-600 mr-2">•</span>
                                Para consultas específicas, dirigirse a la Oficina de Servicios Académicos
                            </li>
                        </ul>
                    </div>

                    <div class="mt-6 p-4 bg-green-50 rounded-lg border border-green-200">
                        <div class="flex items-start">
                            <svg class="w-5 h-5 text-green-600 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12,2L13.09,8.26L22,9L17,14L18.18,22L12,19L5.82,22L7,14L2,9L10.91,8.26L12,2Z"/>
                            </svg>
                            <div>
                                <h4 class="font-medium text-green-800 mb-1">TUPA Vigente - 2024</h4>
                                <p class="text-sm text-green-700">
                                    La versión TUPA 2022 (Modificado - 2024) es la normativa de tarifas actualmente vigente. 
                                    Consulte esta versión para conocer los costos actuales de todos los servicios universitarios.
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