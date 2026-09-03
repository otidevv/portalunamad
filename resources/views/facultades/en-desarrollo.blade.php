@extends('layouts.app')

@section('title', ($carrera ?? 'Carrera') . ' - UNAMAD')

@section('content')
    <!-- Hero Section -->
    <div class="relative h-64 sm:h-80 lg:h-96 overflow-hidden bg-gradient-to-r from-[#ed145b] via-[#db0455] to-rose-700">
        <div class="absolute inset-0 bg-black/20"></div>
        <img src="{{ asset('img/presentacion/presentacionbackground.jpg') }}"
             alt=""
             class="absolute inset-0 w-full h-full object-cover mix-blend-overlay opacity-30">
        <div class="relative h-full flex items-center justify-center px-6">
            <div class="text-center text-white max-w-4xl mx-auto">
                <div class="w-20 h-20 bg-white/10 backdrop-blur-sm rounded-full flex items-center justify-center mx-auto mb-4 border border-white/20">
                    <svg aria-hidden="true" focusable="false" class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                    </svg>
                </div>
                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold mb-4 drop-shadow-lg">
                    {{ $carrera ?? 'Carrera Profesional' }}
                </h1>
                <p class="text-lg sm:text-xl opacity-90 max-w-2xl mx-auto leading-relaxed">
                    {{ $facultad ?? 'Facultad de Ciencias de la Salud y Biológicas' }}
                </p>
            </div>
        </div>
    </div>

    <!-- Breadcrumb -->
    <div class="bg-gradient-to-r from-gray-50 to-gray-100 border-b">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
            <nav class="flex items-center space-x-2 text-sm">
                <a href="/" class="text-gray-600 hover:text-[#ed145b] transition-colors font-medium">Inicio</a>
                <svg aria-hidden="true" focusable="false" class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                </svg>
                <span class="text-[#ed145b] font-semibold">{{ $carrera ?? 'Carrera Profesional' }}</span>
            </nav>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-24">
        <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden text-center">
            <div class="h-2 bg-gradient-to-r from-[#ed145b] to-[#db0455]"></div>
            <div class="p-8 sm:p-14">
                <!-- Ícono animado -->
                <div class="relative w-24 h-24 mx-auto mb-8">
                    <span class="absolute inset-0 rounded-full bg-[#ed145b]/10 animate-ping"></span>
                    <div class="relative w-24 h-24 rounded-full bg-gradient-to-br from-[#ed145b] to-[#db0455] flex items-center justify-center shadow-lg">
                        <svg aria-hidden="true" focusable="false" class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z"></path>
                        </svg>
                    </div>
                </div>

                <span class="inline-block bg-[#ed145b]/10 text-[#db0455] text-xs font-bold uppercase tracking-wider px-4 py-1.5 rounded-full mb-5">
                    En desarrollo
                </span>

                <h2 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4">
                    Contenido en construcción
                </h2>
                <p class="text-gray-600 text-base sm:text-lg leading-relaxed max-w-xl mx-auto mb-8">
                    La información de la carrera profesional de
                    <span class="font-semibold text-gray-800">{{ $carrera ?? 'esta carrera' }}</span>
                    se encuentra en proceso de elaboración. Muy pronto estará disponible toda la información
                    académica, plan de estudios, perfil profesional y campo ocupacional.
                </p>

                <div class="flex flex-col sm:flex-row items-center justify-center gap-3">
                    <a href="/"
                        class="inline-flex items-center justify-center px-6 py-3 rounded-lg bg-gradient-to-r from-[#ed145b] to-[#db0455] text-white font-semibold shadow-md hover:shadow-lg transition-all">
                        <svg aria-hidden="true" focusable="false" class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                        Volver al inicio
                    </a>
                    <a href="https://www.unamad.edu.pe" target="_blank" rel="noopener noreferrer"
                        class="inline-flex items-center justify-center px-6 py-3 rounded-lg border border-gray-300 text-gray-700 font-semibold hover:border-[#ed145b] hover:text-[#ed145b] transition-all">
                        Portal UNAMAD
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
