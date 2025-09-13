@extends('layouts.app')

@section('title', 'Dirección de Admisión - UNAMAD')

@section('content')
<!-- Hero Section -->
<div class="relative bg-gradient-to-r from-[#db0455] to-[#ed145b] py-20">
    <div class="absolute inset-0 bg-gradient-to-r from-[#db0455]/80 to-[#ed145b]/70"></div>
    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center text-white">
            <h1 class="text-4xl font-bold mb-4">Dirección de Admisión</h1>
            <p class="text-xl opacity-90">Vicerrectorado Académico - UNAMAD</p>
        </div>
    </div>
</div>

<!-- Breadcrumb -->
<div class="bg-white py-4 border-b">
    <div class="container mx-auto px-4">
        <nav class="flex items-center space-x-2 text-sm">
            <a href="/" class="text-gray-500 hover:text-[#db0455] transition-colors">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z"></path>
                </svg>
            </a>
            <svg class="w-3 h-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
            <a href="/oficinas" class="text-gray-500 hover:text-[#db0455] transition-colors">Oficinas</a>
            <svg class="w-3 h-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
            <span class="text-[#db0455] font-medium">Dirección de Admisión</span>
        </nav>
    </div>
</div>

<!-- Main Content -->
<div class="py-8 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Sidebar Navigation -->
            @include('oficinas.admision.partials.navigation')

            <!-- Content Area -->
            <div class="lg:col-span-2">
                <!-- Construction Message -->
                <div class="bg-white rounded-lg shadow-lg p-8 text-center">
                    <div class="mb-6">
                        <div class="w-20 h-20 bg-gradient-to-r from-amber-400 to-orange-500 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                            </svg>
                        </div>
                        <h2 class="text-2xl font-bold text-gray-800 mb-4">Página en Construcción</h2>
                        <p class="text-gray-600 mb-6">
                            Estamos trabajando para mejorar nuestros servicios digitales. La información de la Dirección de Admisión estará disponible próximamente.
                        </p>
                    </div>

                    <!-- Temporary Info -->
                    <div class="border-t border-gray-200 pt-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="text-center">
                                <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-3">
                                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                                <h3 class="text-sm font-semibold text-gray-800 mb-2">Información Temporal</h3>
                                <p class="text-xs text-gray-600">Para consultas sobre admisión, visite el portal principal de admisiones</p>
                            </div>
                            <div class="text-center">
                                <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-3">
                                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <h3 class="text-sm font-semibold text-gray-800 mb-2">Próximamente</h3>
                                <p class="text-xs text-gray-600">Nueva interfaz con información completa y servicios en línea</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection