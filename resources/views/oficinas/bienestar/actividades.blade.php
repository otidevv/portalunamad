@extends('layouts.app')

@section('title', 'Actividades - Bienestar Universitario - UNAMAD')

@section('content')
<!-- Hero Section -->
<div class="relative bg-gradient-to-r from-[#db0455] to-[#ed145b] py-20">
    <div class="absolute inset-0 bg-gradient-to-r from-[#db0455]/80 to-[#ed145b]/70"></div>
    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center text-white">
            <h1 class="text-4xl font-bold mb-4">Actividades</h1>
            <p class="text-xl opacity-90">Bienestar Universitario - UNAMAD</p>
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
            <a href="/oficinas/bienestar" class="text-gray-500 hover:text-[#db0455] transition-colors">Bienestar Universitario</a>
            <svg class="w-3 h-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
            <span class="text-[#db0455] font-medium">Actividades</span>
        </nav>
    </div>
</div>

<!-- Main Content -->
<div class="py-8 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Sidebar Navigation -->
            @include('oficinas.bienestar.partials.navigation')

            <!-- Content Area -->
            <div class="lg:col-span-2">
                <!-- Mensaje de Página en Construcción -->
                <div class="bg-white rounded-lg shadow-lg p-12">
                    <div class="text-center">
                        <div class="w-24 h-24 bg-gradient-to-r from-orange-500 to-amber-600 rounded-full flex items-center justify-center mx-auto mb-6">
                            <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                            </svg>
                        </div>
                        <h2 class="text-3xl font-bold text-gray-800 mb-4">Página en Construcción</h2>
                        <p class="text-lg text-gray-600 mb-6">
                            Estamos trabajando para traerte información sobre las actividades de Bienestar Universitario.
                        </p>
                        <p class="text-gray-500">
                            Pronto encontrarás aquí información detallada sobre los programas, eventos y actividades organizadas por la Dirección Universitaria de Bienestar Universitario.
                        </p>
                        <div class="mt-8">
                            <a href="/oficinas/bienestar" class="inline-flex items-center px-6 py-3 bg-orange-500 text-white font-medium rounded-lg hover:bg-orange-600 transition-colors">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                                </svg>
                                Volver al Inicio
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection