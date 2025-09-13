@extends('layouts.app')

@section('content')
<div class="bg-gradient-to-br from-sky-50 to-blue-50 min-h-screen">
    <div class="bg-gradient-to-r from-sky-600 to-blue-600 text-white py-16">
        <div class="container mx-auto px-4">
            <div class="flex items-center mb-4">
                <svg class="w-8 h-8 mr-3" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2M12,8A4,4 0 0,0 8,12A4,4 0 0,0 12,16A4,4 0 0,0 16,12A4,4 0 0,0 12,8Z"/>
                </svg>
                <h1 class="text-4xl font-bold">MV8: Espacios y Servicios</h1>
            </div>
            <p class="text-xl text-sky-100">
                Ambientes y espacios destinados a brindar servicios sociales, deportivos y culturales
            </p>
        </div>
    </div>

    <div class="container mx-auto px-4 py-8">
        <nav class="text-sm text-gray-600 mb-8">
            <a href="/" class="hover:text-sky-600">Inicio</a>
            <span class="mx-2">›</span>
            <a href="/transparencia/indicador-55" class="hover:text-sky-600">Transparencia - Indicador 55</a>
            <span class="mx-2">›</span>
            <span class="text-gray-800">MV8: Espacios y Servicios</span>
        </nav>

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
            <div class="lg:col-span-3">
                <div class="bg-white rounded-lg shadow-md p-8">
                    <div class="mb-8">
                        <h2 class="text-2xl font-bold text-sky-800 mb-4 flex items-center">
                            <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2M12,8A4,4 0 0,0 8,12A4,4 0 0,0 12,16A4,4 0 0,0 16,12A4,4 0 0,0 12,8Z"/>
                            </svg>
                            Ambientes o Espacios Destinados a Brindar Servicios
                        </h2>
                        <p class="text-gray-700 mb-6">
                            La Universidad Nacional Amazónica de Madre de Dios cuenta con diversos espacios e instalaciones 
                            para el desarrollo de actividades sociales, deportivas y culturales de la comunidad universitaria.
                        </p>
                    </div>

                    <div class="space-y-8">
                        <div class="border-l-4 border-sky-500 pl-6 py-4 bg-sky-50">
                            <h3 class="text-xl font-semibold text-sky-800 mb-4 flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M17,12C17,13.8 15.8,15.3 14.2,15.8L14.8,18H15.5C15.8,18 16,18.2 16,18.5V19.5C16,19.8 15.8,20 15.5,20H8.5C8.2,20 8,19.8 8,19.5V18.5C8,18.2 8.2,18 8.5,18H9.2L9.8,15.8C8.2,15.3 7,13.8 7,12C7,9.8 8.8,8 11,8H13C15.2,8 17,9.8 17,12M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9Z"/>
                                </svg>
                                Unidad de Asistencia Social, Alimentaria y Deporte
                            </h3>
                            <p class="text-gray-700 mb-4">
                                Espacios especializados para el desarrollo de actividades deportivas y recreativas 
                                de la comunidad universitaria.
                            </p>
                            <div class="space-y-3">
                                <div class="flex items-center justify-between p-4 bg-white rounded-lg border border-sky-200 hover:bg-sky-50 transition-colors">
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5 text-red-600 mr-3" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                        </svg>
                                        <div>
                                            <h4 class="font-medium text-gray-900">Espacios Destinados a Servicios Deportivos</h4>
                                            <p class="text-sm text-gray-600">Listado de instalaciones deportivas disponibles</p>
                                        </div>
                                    </div>
                                    <a href="https://sinc.unamad.edu.pe:8000/media/pdf/AMBIENTES_O_ESPACIOS_DESTINADOS_A_BRINDAR_SERVICIOS_DEPORTIVOS_GBhdEAL.pdf" 
                                       target="_blank" 
                                       rel="noopener noreferrer"
                                       class="text-sky-600 hover:text-sky-800 font-medium">
                                        Ver documento →
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="border-l-4 border-blue-500 pl-6 py-4 bg-blue-50">
                            <h3 class="text-xl font-semibold text-blue-800 mb-4 flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12,3C13.75,3 16.25,3 18,5H22V7H20V19A2,2 0 0,1 18,21H6A2,2 0 0,1 4,19V7H2V5H6C7.75,3 10.25,3 12,3M12,5A2,2 0 0,0 10,7H14A2,2 0 0,0 12,5M6,9V19H18V9H6Z"/>
                                </svg>
                                Dirección de Proyección Social y Extensión Cultural
                            </h3>
                            <p class="text-gray-700 mb-4">
                                Espacios dedicados a actividades de proyección social y desarrollo cultural 
                                de la universidad hacia la comunidad.
                            </p>
                            <div class="space-y-3">
                                <div class="flex items-center justify-between p-4 bg-white rounded-lg border border-blue-200 hover:bg-blue-50 transition-colors">
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5 text-red-600 mr-3" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                        </svg>
                                        <div>
                                            <h4 class="font-medium text-gray-900">Lista de Espacios 2024 - II</h4>
                                            <p class="text-sm text-gray-600">Inventario actualizado de espacios culturales y sociales</p>
                                        </div>
                                    </div>
                                    <a href="https://sinc.unamad.edu.pe:8000/media/pdf/2024-II_5bqTdZ8.pdf" 
                                       target="_blank" 
                                       rel="noopener noreferrer"
                                       class="text-blue-600 hover:text-blue-800 font-medium">
                                        Ver documento →
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="border-l-4 border-emerald-500 pl-6 py-4 bg-emerald-50">
                            <h3 class="text-xl font-semibold text-emerald-800 mb-4 flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M4,6H20V16H4M20,18A2,2 0 0,0 22,16V6C22,4.89 21.1,4 20,4H4C2.89,4 2,4.89 2,6V16A2,2 0 0,0 4,18H0V20H24V18H20Z"/>
                                </svg>
                                Galerías de Espacios Universitarios
                            </h3>
                            <p class="text-gray-700 mb-4">
                                Explora visualmente los diferentes tipos de espacios disponibles en UNAMAD 
                                para actividades académicas, culturales y deportivas.
                            </p>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <button class="group p-6 bg-white rounded-lg border border-emerald-200 hover:bg-emerald-50 hover:border-emerald-300 transition-all duration-200 text-left">
                                    <div class="flex items-center mb-3">
                                        <svg class="w-6 h-6 text-purple-600 mr-3 group-hover:scale-110 transition-transform" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M12,3C13.75,3 16.25,3 18,5H22V7H20V19A2,2 0 0,1 18,21H6A2,2 0 0,1 4,19V7H2V5H6C7.75,3 10.25,3 12,3M12,5A2,2 0 0,0 10,7H14A2,2 0 0,0 12,5M6,9V19H18V9H6Z"/>
                                        </svg>
                                        <h4 class="font-semibold text-emerald-800 group-hover:text-emerald-900">Espacios Culturales</h4>
                                    </div>
                                    <p class="text-sm text-gray-600 group-hover:text-gray-700">
                                        Auditorios, teatros y salas de eventos culturales
                                    </p>
                                    <div class="mt-3 text-emerald-600 group-hover:text-emerald-700 text-sm font-medium">
                                        Ver galería →
                                    </div>
                                </button>

                                <button class="group p-6 bg-white rounded-lg border border-emerald-200 hover:bg-emerald-50 hover:border-emerald-300 transition-all duration-200 text-left">
                                    <div class="flex items-center mb-3">
                                        <svg class="w-6 h-6 text-orange-600 mr-3 group-hover:scale-110 transition-transform" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M17,12C17,13.8 15.8,15.3 14.2,15.8L14.8,18H15.5C15.8,18 16,18.2 16,18.5V19.5C16,19.8 15.8,20 15.5,20H8.5C8.2,20 8,19.8 8,19.5V18.5C8,18.2 8.2,18 8.5,18H9.2L9.8,15.8C8.2,15.3 7,13.8 7,12C7,9.8 8.8,8 11,8H13C15.2,8 17,9.8 17,12M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9Z"/>
                                        </svg>
                                        <h4 class="font-semibold text-emerald-800 group-hover:text-emerald-900">Espacios Deportivos</h4>
                                    </div>
                                    <p class="text-sm text-gray-600 group-hover:text-gray-700">
                                        Canchas, gimnasios y áreas recreativas
                                    </p>
                                    <div class="mt-3 text-emerald-600 group-hover:text-emerald-700 text-sm font-medium">
                                        Ver galería →
                                    </div>
                                </button>

                                <button class="group p-6 bg-white rounded-lg border border-emerald-200 hover:bg-emerald-50 hover:border-emerald-300 transition-all duration-200 text-left">
                                    <div class="flex items-center mb-3">
                                        <svg class="w-6 h-6 text-green-600 mr-3 group-hover:scale-110 transition-transform" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M16,4C18.11,4 20,5.89 20,8A4,4 0 0,1 16,12A4,4 0 0,1 12,8A4,4 0 0,1 16,4M16,6A2,2 0 0,0 14,8A2,2 0 0,0 16,10A2,2 0 0,0 18,8A2,2 0 0,0 16,6M8,4C10.11,4 12,5.89 12,8A4,4 0 0,1 8,12A4,4 0 0,1 4,8A4,4 0 0,1 8,4M8,6A2,2 0 0,0 6,8A2,2 0 0,0 8,10A2,2 0 0,0 10,8A2,2 0 0,0 8,6M16,13C18.67,13 24,14.33 24,17V20H8V17C8,14.33 13.33,13 16,13M8,13C8.22,13 8.48,13 8.75,13.03C7.67,13.62 7,14.74 7,16V20H1V17C1,14.33 6.33,13 8,13Z"/>
                                        </svg>
                                        <h4 class="font-semibold text-emerald-800 group-hover:text-emerald-900">Espacios Sociales</h4>
                                    </div>
                                    <p class="text-sm text-gray-600 group-hover:text-gray-700">
                                        Áreas de reunión y actividades estudiantiles
                                    </p>
                                    <div class="mt-3 text-emerald-600 group-hover:text-emerald-700 text-sm font-medium">
                                        Ver galería →
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 p-6 bg-sky-50 rounded-lg border border-sky-200">
                        <h3 class="text-lg font-semibold text-sky-800 mb-3 flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M13,9H11V7H13M13,17H11V11H13M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"/>
                            </svg>
                            Información Importante
                        </h3>
                        <ul class="text-sm text-sky-700 space-y-2">
                            <li class="flex items-start">
                                <span class="text-sky-600 mr-2">•</span>
                                Los espacios están disponibles para uso de toda la comunidad universitaria
                            </li>
                            <li class="flex items-start">
                                <span class="text-sky-600 mr-2">•</span>
                                Se requiere coordinación previa con las unidades correspondientes
                            </li>
                            <li class="flex items-start">
                                <span class="text-sky-600 mr-2">•</span>
                                Los horarios y disponibilidad pueden variar según el periodo académico
                            </li>
                            <li class="flex items-start">
                                <span class="text-sky-600 mr-2">•</span>
                                Las galerías fotográficas muestran el estado actual de las instalaciones
                            </li>
                            <li class="flex items-start">
                                <span class="text-sky-600 mr-2">•</span>
                                Para más información, consulte directamente con cada unidad responsable
                            </li>
                        </ul>
                    </div>

                    <div class="mt-6 p-4 bg-blue-50 rounded-lg border border-blue-200">
                        <div class="flex items-start">
                            <svg class="w-5 h-5 text-blue-600 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12,2L13.09,8.26L22,9L17,14L18.18,22L12,19L5.82,22L7,14L2,9L10.91,8.26L12,2Z"/>
                            </svg>
                            <div>
                                <h4 class="font-medium text-blue-800 mb-1">Acceso a Espacios</h4>
                                <p class="text-sm text-blue-700">
                                    Para el uso de espacios deportivos, culturales o sociales, contacte previamente 
                                    con la Unidad de Asistencia Social, Alimentaria y Deporte o la Dirección de 
                                    Proyección Social y Extensión Cultural según corresponda.
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