@extends('layouts.app')

@section('title', 'Sedes - UNAMAD')

@section('content')
    <!-- Hero Section -->
    <div class="relative h-64 flex items-center justify-center overflow-hidden">
        <!-- Background Image -->
        <div class="absolute inset-0">
            <img src="{{ asset('img/presentacion/presentacionbackground.jpg') }}" alt="Sedes UNAMAD" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-br from-[#ed145b]/90 to-[#a00340]/80"></div>
        </div>
        
        <!-- Hero Content -->
        <div class="relative z-10 text-center text-white px-4">
            <h1 class="text-4xl font-bold mb-2 flex items-center justify-center">
                <svg class="w-8 h-8 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
                Sedes
            </h1>
            <p class="text-lg opacity-95">
                Ubicaciones y campus universitarios
            </p>
        </div>
    </div>

    <!-- Navigation Breadcrumb -->
    <div class="bg-white border-b border-gray-200">
        <div class="container mx-auto px-4 py-4">
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="/" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-[#ed145b]">
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
                            <span class="ml-1 text-sm font-medium text-[#ed145b] md:ml-2">Sedes</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-12">
        <!-- Sedes Section -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden border-t-4 border-[#ed145b]">
            <div class="bg-gradient-to-r from-[#ed145b] to-[#ed145b] text-white p-6">
                <h2 class="text-3xl font-bold flex items-center">
                    <svg class="w-8 h-8 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    Sedes de la Universidad Nacional Amazónica de Madre de Dios
                </h2>
            </div>
            
            <div class="p-8">
                <!-- Sede Principal -->
                <div class="mb-12">
                    <div class="bg-gradient-to-br from-[#ed145b]/5 to-[#ed145b]/5 rounded-lg p-6 border border-[#ed145b]/20 shadow-sm">
                        <h3 class="text-2xl font-bold text-[#ed145b] mb-4 flex items-center">
                            <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                            </svg>
                            Sede Principal - Puerto Maldonado
                        </h3>
                        
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                            <!-- Información de contacto -->
                            <div>
                                <h4 class="text-lg font-semibold text-gray-800 mb-4">Información de Contacto</h4>
                                <div class="space-y-3">
                                    <div class="flex items-start">
                                        <svg class="w-5 h-5 text-[#ed145b] mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        </svg>
                                        <div>
                                            <p class="font-medium text-gray-800">Dirección:</p>
                                            <p class="text-gray-700">Av. Jorge Chávez 1160, Puerto Maldonado, Madre de Dios</p>
                                        </div>
                                    </div>
                                    
                                    <div class="flex items-start">
                                        <svg class="w-5 h-5 text-[#ed145b] mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                        </svg>
                                        <div>
                                            <p class="font-medium text-gray-800">Email:</p>
                                            <p class="text-gray-700">info@unamad.edu.pe</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Servicios disponibles -->
                            <div>
                                <h4 class="text-lg font-semibold text-gray-800 mb-4">Servicios Disponibles</h4>
                                <ul class="space-y-2">
                                    <li class="flex items-center">
                                        <div class="w-2 h-2 bg-[#ed145b] rounded-full mr-3"></div>
                                        <span class="text-gray-700">Facultades y Escuelas Profesionales</span>
                                    </li>
                                    <li class="flex items-center">
                                        <div class="w-2 h-2 bg-[#ed145b] rounded-full mr-3"></div>
                                        <span class="text-gray-700">Biblioteca Central</span>
                                    </li>
                                    <li class="flex items-center">
                                        <div class="w-2 h-2 bg-[#ed145b] rounded-full mr-3"></div>
                                        <span class="text-gray-700">Laboratorios de Investigación</span>
                                    </li>
                                    <li class="flex items-center">
                                        <div class="w-2 h-2 bg-[#ed145b] rounded-full mr-3"></div>
                                        <span class="text-gray-700">Centro de Idiomas</span>
                                    </li>
                                    <li class="flex items-center">
                                        <div class="w-2 h-2 bg-[#ed145b] rounded-full mr-3"></div>
                                        <span class="text-gray-700">Centro Preuniversitario</span>
                                    </li>
                                    <li class="flex items-center">
                                        <div class="w-2 h-2 bg-[#ed145b] rounded-full mr-3"></div>
                                        <span class="text-gray-700">Servicios Administrativos</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Mapa o información adicional -->
                <div class="bg-gray-50 rounded-lg p-6 border border-gray-200">
                    <h3 class="text-xl font-bold text-[#ed145b] mb-4 flex items-center">
                        <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-1.447-.894L15 4m0 13V4m-6 3l6-3"></path>
                        </svg>
                        Cómo Llegar
                    </h3>
                    <div class="text-gray-700 space-y-3">
                        <p>
                            <strong>Desde el Aeropuerto:</strong> La sede principal se encuentra a aproximadamente 15 minutos del Aeropuerto Internacional Padre Aldamiz.
                        </p>
                        <p>
                            <strong>Transporte Público:</strong> Accesible mediante transporte público local, mototaxis y taxi convencional.
                        </p>
                        <p>
                            <strong>Referencias:</strong> Ubicada en la Av. Jorge Chávez, cerca del centro de Puerto Maldonado.
                        </p>
                    </div>
                </div>

                <!-- Horarios de atención -->
                <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="bg-white border border-gray-200 rounded-lg p-6 shadow-sm">
                        <h4 class="text-lg font-semibold text-[#ed145b] mb-4 flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Horarios de Atención
                        </h4>
                        <div class="space-y-2 text-sm">
                            <div class="flex justify-between">
                                <span class="font-medium">Lunes - Viernes:</span>
                                <span>7:00 AM - 4:00 PM</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="font-medium">Sábados:</span>
                                <span>Cerrado</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="font-medium">Domingos:</span>
                                <span>Cerrado</span>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white border border-gray-200 rounded-lg p-6 shadow-sm">
                        <h4 class="text-lg font-semibold text-[#ed145b] mb-4 flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Información Importante
                        </h4>
                        <div class="space-y-2 text-sm text-gray-700">
                            <p>• Se requiere identificación para el ingreso</p>
                            <p>• Estacionamiento disponible</p>
                            <p>• Acceso para personas con discapacidad</p>
                            <p>• Wi-Fi gratuito en áreas comunes</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection