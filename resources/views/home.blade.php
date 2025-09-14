@extends('layouts.app')

@section('title', 'Inicio - Portal UNAMAD')

@section('content')

<!-- Hero Section con Slider - Portal Principal UNAMAD -->
<section class="hero-slider">
    <!-- Slider Container -->
    <div class="slider-container">
        <!-- Slide 1 -->
        <div class="slide active">
            <img src="/img/banners/1.jpg" alt="Universidad Nacional Amazónica de Madre de Dios">
        </div>
        <!-- Slide 2 -->
        <div class="slide">
            <img src="/img/banners/2.jpg" alt="Campus UNAMAD">
        </div>
        <!-- Slide 3 -->
        <div class="slide">
            <img src="/img/banners/3.jpg" alt="Estudiantes UNAMAD">
        </div>
        <!-- Slide 4 -->
        <div class="slide">
            <img src="/img/banners/4.jpg" alt="Investigación UNAMAD">
        </div>
        <!-- Slide 5 -->
        <div class="slide">
            <img src="/img/banners/5.jpg" alt="Amazonía y Biodiversidad">
        </div>
        <!-- Slide 6 -->
        <div class="slide">
            <img src="/img/banners/6.jpg" alt="Tecnología e Innovación">
        </div>
        <!-- Slide 7 -->
        <div class="slide">
            <img src="/img/banners/7.jpg" alt="Cultura y Tradición Amazónica">
        </div>
        <!-- Slide 8 -->
        <div class="slide">
            <img src="/img/banners/8.jpg" alt="Futuro y Desarrollo Sostenible">
        </div>
    </div>

    <!-- Content Card - Solo lado izquierdo -->
    <div class="absolute left-8 top-1/2 transform -translate-y-1/2 z-10">
        <div class="rounded-2xl shadow-2xl max-w-md border border-gray-200/20 relative overflow-hidden bg-white">
            <!-- Franja superior con imagen de hojas -->
            <div class="absolute top-0 left-0 right-0 h-16 rounded-t-2xl overflow-hidden" style="background-image: url('/img/banners/backgroundbanner/background_card.png'); background-size: cover; background-position: top center;">
                <div class="absolute inset-0 bg-gradient-to-b from-transparent to-white/80"></div>
            </div>
            
            <!-- Franja inferior con imagen de hojas -->
            <div class="absolute bottom-0 left-0 right-0 h-16 rounded-b-2xl overflow-hidden" style="background-image: url('/img/banners/backgroundbanner/background_card.png'); background-size: cover; background-position: bottom center;">
                <div class="absolute inset-0 bg-gradient-to-t from-transparent to-white/80"></div>
            </div>
            
            <!-- Contenido del card -->
            <div class="relative z-10 p-8">
                <!-- Logo centrado -->
                <div class="flex justify-center mb-6">
                    <img src="{{ asset('img/header/logounamad.png') }}" alt="UNAMAD" class="h-12 w-40">
                </div>
                
                <!-- Título principal conciso -->
                <h1 class="text-2xl font-bold text-gray-800 mb-4 leading-tight">
                    Universidad Nacional<br>
                    <span class="text-[#db0455]">Amazónica de Madre de Dios</span>
                </h1>
                
                <!-- Lema reducido -->
                <p class="text-gray-600 mb-6 text-sm leading-relaxed">
                    Formando profesionales comprometidos con el desarrollo sostenible de la Amazonía peruana.
                </p>
                
                <!-- Botones compactos -->
                <div class="space-y-3 mb-6">
                    <a href="https://admision.unamad.edu.pe/" target="_blank" class="block bg-[#db0455] hover:bg-[#a00340] text-white px-6 py-3 rounded-lg font-medium transition-all duration-300 text-center text-sm">
                        📚 Admisión 2025
                    </a>
                    <!-- <a href="#" class="block border-2 border-[#db0455] text-[#db0455] hover:bg-[#db0455] hover:text-white px-6 py-3 rounded-lg font-medium transition-all duration-300 text-center text-sm">
                        🌿 Conoce UNAMAD
                    </a> -->
                </div>
                
                <!-- Estadísticas compactas -->
                <div class="grid grid-cols-2 gap-4 text-center">
                    <div class="bg-gray-50 rounded-lg p-3">
                        <div class="text-xl font-bold text-[#db0455]">10+</div>
                        <div class="text-xs text-gray-600">Carreras</div>
                    </div>
                    <div class="bg-gray-50 rounded-lg p-3">
                        <div class="text-xl font-bold text-green-600">2K+</div>
                        <div class="text-xs text-gray-600">Estudiantes</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Indicadores de slide -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 flex space-x-3">
        <button class="indicator active w-4 h-4 rounded-full bg-white transition-all duration-300 shadow-lg" data-slide="0"></button>
        <button class="indicator w-4 h-4 rounded-full bg-white/50 transition-all duration-300 shadow-lg" data-slide="1"></button>
        <button class="indicator w-4 h-4 rounded-full bg-white/50 transition-all duration-300 shadow-lg" data-slide="2"></button>
        <button class="indicator w-4 h-4 rounded-full bg-white/50 transition-all duration-300 shadow-lg" data-slide="3"></button>
        <button class="indicator w-4 h-4 rounded-full bg-white/50 transition-all duration-300 shadow-lg" data-slide="4"></button>
        <button class="indicator w-4 h-4 rounded-full bg-white/50 transition-all duration-300 shadow-lg" data-slide="5"></button>
        <button class="indicator w-4 h-4 rounded-full bg-white/50 transition-all duration-300 shadow-lg" data-slide="6"></button>
        <button class="indicator w-4 h-4 rounded-full bg-white/50 transition-all duration-300 shadow-lg" data-slide="7"></button>
    </div>

    <!-- Controles de navegación -->
    <button class="absolute left-6 top-1/2 transform -translate-y-1/2 text-white hover:text-[#db0455] transition-all duration-300 bg-black/50 hover:bg-black/70 backdrop-blur-sm rounded-full p-4 shadow-2xl drop-shadow-2xl hover:shadow-[0_35px_60px_-15px_rgba(0,0,0,0.5)] hover:drop-shadow-[0_-25px_25px_rgba(0,0,0,0.3)] border border-white/20 hover:border-[#db0455]/50" onclick="prevSlide()">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
        </svg>
    </button>
    <button class="absolute right-6 top-1/2 transform -translate-y-1/2 text-white hover:text-[#db0455] transition-all duration-300 bg-black/50 hover:bg-black/70 backdrop-blur-sm rounded-full p-4 shadow-2xl drop-shadow-2xl hover:shadow-[0_35px_60px_-15px_rgba(0,0,0,0.5)] hover:drop-shadow-[0_-25px_25px_rgba(0,0,0,0.3)] border border-white/20 hover:border-[#db0455]/50" onclick="nextSlide()">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
        </svg>
    </button>

    <!-- Scroll indicator -->
    <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 animate-bounce">
        <svg class="w-6 h-6 text-white/60" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
        </svg>
    </div>
</section>


<!-- Sección Oficina -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <!-- Header con título y enlace -->
        <div class="flex justify-between items-center mb-8">
            <h2 class="text-2xl font-bold text-[#db0455]">Oficina</h2>
            <a href="{{ route('comunicados.index') }}" class="text-blue-600 hover:text-blue-800 font-medium flex items-center">
                Ver todos los comunicados
                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 items-stretch">
            @forelse($comunicadosOficina as $comunicado)
                <article class="bg-white p-6 shadow-md hover:shadow-lg transition-all duration-300 flex flex-col border-b-4 border-b-[#db0455] overflow-hidden hover:scale-105 cursor-pointer" style="box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06), 0 -4px 6px -1px rgba(0, 0, 0, 0.08);" onclick="window.location.href='{{ route('comunicado.ver', $comunicado) }}'">
                    <h3 class="text-blue-600 hover:text-blue-800 font-semibold mb-4 line-clamp-3">
                        {{ $comunicado->titulo }}
                    </h3>
                    <p class="text-gray-700 text-sm mb-6 font-bold">
                        {{ $comunicado->oficina ?? $comunicado->categoria->nombre ?? 'OFICINA' }}
                    </p>
                    <div class="text-sm text-gray-500 border-t pt-3 mt-auto">
                        <span>{{ $comunicado->created_at->format('d \d\e F \d\e Y - g:i a') }}</span>
                    </div>
                </article>
            @empty
                <!-- Mensaje cuando no hay comunicados -->
                <div class="col-span-full text-center py-12">
                    <svg class="w-16 h-16 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"></path>
                    </svg>
                    <p class="text-gray-500 text-lg">No hay comunicados disponibles en este momento</p>
                </div>
            @endforelse
        </div>
    </div>
</section>


<!-- Sección Nuestros Servicios y Documentos -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <!-- Título Principal de la Sección -->
        <div class="text-center mb-12">
            <p class="text-sm font-medium text-gray-600 mb-2">CONOCE TODOS</p>
            <h2 class="text-3xl font-bold text-[#db0455]">Nuestros Servicios</h2>
        </div>
        
        <div class="grid grid-cols-1 lg:grid-cols-5 gap-8">
            <!-- Columna IZQUIERDA - Servicios (80%) -->
            <div class="lg:col-span-4">
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <!-- Campus Virtual -->
            <a href="https://campus.unamad.edu.pe/" target="_blank" class="flex bg-white rounded-lg shadow-lg border-l-4 min-h-[180px] border-[#db0455] overflow-hidden hover:shadow-xl transition-all duration-300 group min-h-[180px]">
                <div class="p-4 text-center flex flex-col items-center justify-center w-full h-full">
                    <div class="bg-[#db0455] rounded-lg p-4 w-16 h-16 mx-auto mb-4 group-hover:bg-[#a00340] transition-colors duration-300">
                        <svg class="w-8 h-8 text-white mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                        </svg>
                    </div>
                    <h3 class="text-base font-bold text-[#0056ac] group-hover:text-[#003d7a] text-center leading-tight min-h-[3rem] flex items-center justify-center">Campus Virtual</h3>
                </div>
            </a>

            <!-- Biblioteca Virtual -->
            <a href="https://elibro.net/es/lc/unamad/login_usuario/" target="_blank" class="flex bg-white rounded-lg shadow-lg border-l-4 min-h-[180px] border-green-600 overflow-hidden hover:shadow-xl transition-all duration-300 group">
                <div class="p-4 text-center flex flex-col items-center justify-center w-full h-full">
                    <div class="bg-green-600 rounded-lg p-4 w-16 h-16 mx-auto mb-4 group-hover:bg-green-700 transition-colors duration-300">
                        <svg class="w-8 h-8 text-white mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                        </svg>
                    </div>
                    <h3 class="text-base font-bold text-[#0056ac] group-hover:text-[#003d7a] text-center leading-tight min-h-[3rem] flex items-center justify-center">Biblioteca Virtual</h3>
                </div>
            </a>

            <!-- Centro de Idiomas -->
            <a href="https://cidiomas.unamad.edu.pe/" target="_blank" class="flex bg-white rounded-lg shadow-lg border-l-4 min-h-[180px] border-blue-600 overflow-hidden hover:shadow-xl transition-all duration-300 group">
                <div class="p-4 text-center flex flex-col items-center justify-center w-full h-full">
                    <div class="bg-blue-600 rounded-lg p-4 w-16 h-16 mx-auto mb-4 group-hover:bg-blue-700 transition-colors duration-300">
                        <svg class="w-8 h-8 text-white mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9v-9m0-9v9"></path>
                        </svg>
                    </div>
                    <h3 class="text-base font-bold text-[#0056ac] group-hover:text-[#003d7a] text-center leading-tight min-h-[3rem] flex items-center justify-center">Centro de Idiomas</h3>
                </div>
            </a>

            <!-- Centro Pre Universitario -->
            <a href="https://cepre.unamad.edu.pe/" target="_blank" class="flex bg-white rounded-lg shadow-lg border-l-4 min-h-[180px] border-purple-600 overflow-hidden hover:shadow-xl transition-all duration-300 group">
                <div class="p-4 text-center flex flex-col items-center justify-center w-full h-full">
                    <div class="bg-purple-600 rounded-lg p-4 w-16 h-16 mx-auto mb-4 group-hover:bg-purple-700 transition-colors duration-300">
                        <svg class="w-8 h-8 text-white mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                        </svg>
                    </div>
                    <h3 class="text-base font-bold text-[#0056ac] group-hover:text-[#003d7a] text-center leading-tight min-h-[3rem] flex items-center justify-center">Centro Pre Universitario</h3>
                </div>
            </a>

            <!-- Centro de Informática -->
            <a href="https://ceinfo.unamad.edu.pe/" target="_blank" class="flex bg-white rounded-lg shadow-lg border-l-4 min-h-[180px] border-orange-600 overflow-hidden hover:shadow-xl transition-all duration-300 group">
                <div class="p-4 text-center flex flex-col items-center justify-center w-full h-full">
                    <div class="bg-orange-600 rounded-lg p-4 w-16 h-16 mx-auto mb-4 group-hover:bg-orange-700 transition-colors duration-300">
                        <svg class="w-8 h-8 text-white mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-base font-bold text-[#0056ac] group-hover:text-[#003d7a] text-center leading-tight min-h-[3rem] flex items-center justify-center">Centro de Informática</h3>
                </div>
            </a>

            <!-- Talleres Artísticos y Culturales -->
            <a href="https://proyeccionsocial.unamad.edu.pe" target="_blank" class="flex bg-white rounded-lg shadow-lg border-l-4 min-h-[180px] border-teal-600 overflow-hidden hover:shadow-xl transition-all duration-300 group">
                <div class="p-4 text-center flex flex-col items-center justify-center w-full h-full">
                    <div class="bg-teal-600 rounded-lg p-4 w-16 h-16 mx-auto mb-4 group-hover:bg-teal-700 transition-colors duration-300">
                        <svg class="w-8 h-8 text-white mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4V2a1 1 0 011-1h8a1 1 0 011 1v2m-9 0h10m-10 0l1 16h8l1-16M10 8v8m4-8v8"></path>
                        </svg>
                    </div>
                    <h3 class="text-base font-bold text-[#0056ac] group-hover:text-[#003d7a] text-center leading-tight min-h-[3rem] flex items-center justify-center">Talleres Artísticos y Culturales</h3>
                </div>
            </a>

            <!-- Portal de Admisión -->
            <a href="https://admision.unamad.edu.pe/" target="_blank" class="flex bg-white rounded-lg shadow-lg border-l-4 min-h-[180px] border-indigo-600 overflow-hidden hover:shadow-xl transition-all duration-300 group">
                <div class="p-4 text-center flex flex-col items-center justify-center w-full h-full">
                    <div class="bg-indigo-600 rounded-lg p-4 w-16 h-16 mx-auto mb-4 group-hover:bg-indigo-700 transition-colors duration-300">
                        <svg class="w-8 h-8 text-white mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-base font-bold text-[#0056ac] group-hover:text-[#003d7a] text-center leading-tight min-h-[3rem] flex items-center justify-center">Portal de Admisión</h3>
                </div>
            </a>

            <!-- Cooperación y Relaciones Internacionales -->
            <a href="/oficinas/cooperacion" class="flex bg-white rounded-lg shadow-lg border-l-4 min-h-[180px] border-pink-600 overflow-hidden hover:shadow-xl transition-all duration-300 group">
                <div class="p-4 text-center flex flex-col items-center justify-center w-full h-full">
                    <div class="bg-pink-600 rounded-lg p-4 w-16 h-16 mx-auto mb-4 group-hover:bg-pink-700 transition-colors duration-300">
                        <svg class="w-8 h-8 text-white mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-base font-bold text-[#0056ac] group-hover:text-[#003d7a] text-center leading-tight min-h-[3rem] flex items-center justify-center">Cooperación y Relaciones Internacionales</h3>
                </div>
            </a>

            <!-- Libro de Reclamaciones Digital -->
            <a href="https://reclamos.servicios.gob.pe/?institution_id=224" target="_blank" class="flex bg-white rounded-lg shadow-lg border-l-4 min-h-[180px] border-red-600 overflow-hidden hover:shadow-xl transition-all duration-300 group">
                <div class="p-4 text-center flex flex-col items-center justify-center w-full h-full">
                    <div class="bg-red-600 rounded-lg p-4 w-16 h-16 mx-auto mb-4 group-hover:bg-red-700 transition-colors duration-300">
                        <svg class="w-8 h-8 text-white mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                        </svg>
                    </div>
                    <h3 class="text-base font-bold text-[#0056ac] group-hover:text-[#003d7a] text-center leading-tight min-h-[3rem] flex items-center justify-center">Libro de Reclamaciones Digital</h3>
                </div>
            </a>

            <!-- Oficina de Gestión de la Calidad -->
            <a href="https://portal.unamad.edu.pe/oficinas/calidad" target="_blank" class="flex bg-white rounded-lg shadow-lg border-l-4 min-h-[180px] border-yellow-600 overflow-hidden hover:shadow-xl transition-all duration-300 group">
                <div class="p-4 text-center flex flex-col items-center justify-center w-full h-full">
                    <div class="bg-yellow-600 rounded-lg p-4 w-16 h-16 mx-auto mb-4 group-hover:bg-yellow-700 transition-colors duration-300">
                        <svg class="w-8 h-8 text-white mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                        </svg>
                    </div>
                    <h3 class="text-base font-bold text-[#0056ac] group-hover:text-[#003d7a] text-center leading-tight min-h-[3rem] flex items-center justify-center">Oficina de Gestión de la Calidad</h3>
                </div>
            </a>

            <!-- Defensoría Universitaria -->
            <a href="https://denuncias.unamad.edu.pe/" target="_blank" class="flex bg-white rounded-lg shadow-lg border-l-4 min-h-[180px] border-gray-600 overflow-hidden hover:shadow-xl transition-all duration-300 group">
                <div class="p-4 text-center flex flex-col items-center justify-center w-full h-full">
                    <div class="bg-gray-600 rounded-lg p-4 w-16 h-16 mx-auto mb-4 group-hover:bg-gray-700 transition-colors duration-300">
                        <svg class="w-8 h-8 text-white mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                        </svg>
                    </div>
                    <h3 class="text-base font-bold text-[#0056ac] group-hover:text-[#003d7a] text-center leading-tight min-h-[3rem] flex items-center justify-center">Defensoría Universitaria</h3>
                </div>
            </a>

            <!-- Planta Piloto de Tecnología de la Madera -->
            <a href="https://portal.unamad.edu.pe/facultades/forestal" target="_blank" class="flex bg-white rounded-lg shadow-lg border-l-4 min-h-[180px] border-emerald-600 overflow-hidden hover:shadow-xl transition-all duration-300 group">
                <div class="p-4 text-center flex flex-col items-center justify-center w-full h-full">
                    <div class="bg-emerald-600 rounded-lg p-4 w-16 h-16 mx-auto mb-4 group-hover:bg-emerald-700 transition-colors duration-300">
                        <svg class="w-8 h-8 text-white mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 7.172V5L8 4z"></path>
                        </svg>
                    </div>
                    <h3 class="text-base font-bold text-[#0056ac] group-hover:text-[#003d7a] text-center leading-tight min-h-[3rem] flex items-center justify-center">Planta Piloto de Tecnología de la Madera - PPTM</h3>
                </div>
            </a>
                </div>
            </div>

            <!-- Columna DERECHA - Documentos (20%) -->
            <div class="lg:col-span-1">
                <div class="bg-yellow-400 rounded-lg shadow-xl p-6">
                    <div class="text-center mb-6">
                        <div class="bg-white rounded-full p-3 w-16 h-16 mx-auto mb-4">
                            <svg class="w-10 h-10 text-yellow-600 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                        </div>
                        <h2 class="text-xl font-bold text-gray-800 mb-4">Documentos Normativos y de Gestión</h2>
                    </div>

                    <div class="space-y-3 mb-6">
                        <!-- Resoluciones Rectorales -->
                        <a href="https://www.gob.pe/institucion/unamad/normas-legales/tipos/237-resolucion-rectoral" target="_blank" class="block bg-white/90 hover:bg-white rounded-lg p-3 text-sm transition-all duration-300 group">
                            <div class="flex items-center justify-between">
                                <span class="font-medium text-gray-700 group-hover:text-gray-900">Resoluciones Rectorales</span>
                                <svg class="w-4 h-4 text-gray-500 group-hover:text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </div>
                        </a>

                        <!-- Resoluciones de Consejo Universitario -->
                        <a href="https://www.gob.pe/institucion/unamad/colecciones/10080-resolucion-de-consejo-universitario" target="_blank" class="block bg-white/90 hover:bg-white rounded-lg p-3 text-sm transition-all duration-300 group">
                            <div class="flex items-center justify-between">
                                <span class="font-medium text-gray-700 group-hover:text-gray-900">Resoluciones de Consejo Universitario</span>
                                <svg class="w-4 h-4 text-gray-500 group-hover:text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </div>
                        </a>

                        <!-- Resoluciones de Vicerectorado Académico -->
                        <a href="https://www.gob.pe/institucion/unamad/colecciones/10013-resolucion-de-vicerrectorado-academico" target="_blank" class="block bg-white/90 hover:bg-white rounded-lg p-3 text-sm transition-all duration-300 group">
                            <div class="flex items-center justify-between">
                                <span class="font-medium text-gray-700 group-hover:text-gray-900">Resoluciones de Vicerectorado Académico</span>
                                <svg class="w-4 h-4 text-gray-500 group-hover:text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </div>
                        </a>

                        <!-- Resoluciones de Vicerectorado de Investigación -->
                        <a href="https://www.gob.pe/institucion/unamad/colecciones/10418-resolucion-de-vicerrectorado-de-investigacion" target="_blank" class="block bg-white/90 hover:bg-white rounded-lg p-3 text-sm transition-all duration-300 group">
                            <div class="flex items-center justify-between">
                                <span class="font-medium text-gray-700 group-hover:text-gray-900">Resoluciones de Vicerectorado de Investigación</span>
                                <svg class="w-4 h-4 text-gray-500 group-hover:text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </div>
                        </a>

                        <!-- Reglamentos -->
                        <a href="https://www.gob.pe/institucion/unamad/informes-publicaciones/tipos/168-reglamento" target="_blank" class="block bg-white/90 hover:bg-white rounded-lg p-3 text-sm transition-all duration-300 group">
                            <div class="flex items-center justify-between">
                                <span class="font-medium text-gray-700 group-hover:text-gray-900">Reglamentos</span>
                                <svg class="w-4 h-4 text-gray-500 group-hover:text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </div>
                        </a>

                        <!-- Directivas -->
                        <a href="https://www.gob.pe/institucion/unamad/normas-legales/tipos/28-directiva" target="_blank" class="block bg-white/90 hover:bg-white rounded-lg p-3 text-sm transition-all duration-300 group">
                            <div class="flex items-center justify-between">
                                <span class="font-medium text-gray-700 group-hover:text-gray-900">Directivas</span>
                                <svg class="w-4 h-4 text-gray-500 group-hover:text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </div>
                        </a>

                        <!-- Convenios Institucionales -->
                        <a href="https://www.gob.pe/institucion/unamad/colecciones/16884-convenios-institucionales" target="_blank" class="block bg-white/90 hover:bg-white rounded-lg p-3 text-sm transition-all duration-300 group">
                            <div class="flex items-center justify-between">
                                <span class="font-medium text-gray-700 group-hover:text-gray-900">Convenios Institucionales</span>
                                <svg class="w-4 h-4 text-gray-500 group-hover:text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </div>
                        </a>

                        <!-- Resolución de Tribunal de Honor Universitario -->
                        <a href="https://www.gob.pe/institucion/unamad/informes-publicaciones/4990906-resolucion-de-tribunal-de-honor" target="_blank" class="block bg-white/90 hover:bg-white rounded-lg p-3 text-sm transition-all duration-300 group">
                            <div class="flex items-center justify-between">
                                <span class="font-medium text-gray-700 group-hover:text-gray-900">Resolución de Tribunal de Honor Universitario</span>
                                <svg class="w-4 h-4 text-gray-500 group-hover:text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </div>
                        </a>
                    </div>

                    <!-- Botón Ver más documentos -->
                    <a href="{{ url('transparencia/documentos') }}" class="block bg-gray-800 hover:bg-gray-900 text-white text-center py-3 px-4 rounded-lg font-medium transition-colors duration-300">
                        Ver más documentos
                        <svg class="w-4 h-4 ml-2 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sección La UNAMAD en cifras con efecto de ola -->
<!-- Primera sección - Ola superior -->
<section class="wave-section" style="margin-bottom: -1px;">
    <div style="height: 150px; overflow: hidden;">
        <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
            <path d="M-0.00,49.85 C150.00,149.60 349.20,-49.85 500.00,49.85 L507.56,166.82 L-8.23,167.80 Z" style="stroke: none; fill: #db0455;"></path>
        </svg>
    </div>
</section>

<!-- Segunda sección - Contenido con fondo amarillo -->
<section class="bg-[#db0455] py-16">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold text-white mb-2">LA UNAMAD EN CIFRAS:</h2>
        
        <div class="grid grid-cols-2 md:grid-cols-5 gap-8 mt-12">
            <!-- Cifra 1 - Docentes Investigadores -->
            <div class="text-center">
                <div class="mb-4">
                    <img src="/img/sectioncifras/investigadores.svg" alt="Investigadores" class="w-16 h-16 mx-auto">
                </div>
                <div class="text-4xl md:text-5xl font-bold text-white mb-2">24</div>
                <div class="bg-[#0056ac] text-white px-3 py-1 rounded text-sm font-semibold">
                    DOCENTES<br>INVESTIGADORES
                </div>
            </div>

            <!-- Cifra 2 - Años de Fundación -->
            <div class="text-center">
                <div class="mb-4">
                    <img src="/img/sectioncifras/fundacion.svg" alt="Fundación" class="w-16 h-16 mx-auto">
                </div>
                <div class="text-4xl md:text-5xl font-bold text-white mb-2">25</div>
                <div class="bg-[#0056ac] text-white px-3 py-1 rounded text-sm font-semibold">
                    AÑOS DE<br>FUNDACIÓN<br>INSTITUCIONAL
                </div>
            </div>

            <!-- Cifra 3 - Estudiantes Matriculados -->
            <div class="text-center">
                <div class="mb-4">
                    <img src="/img/sectioncifras/estudiantes.svg" alt="Estudiantes" class="w-16 h-16 mx-auto">
                </div>
                <div class="text-4xl md:text-5xl font-bold text-white mb-2">3917</div>
                <div class="bg-[#0056ac] text-white px-3 py-1 rounded text-sm font-semibold">
                    ESTUDIANTES<br>MATRICULADOS
                </div>
            </div>

            <!-- Cifra 4 - Escuelas Profesionales -->
            <div class="text-center">
                <div class="mb-4">
                    <img src="/img/sectioncifras/escuelas.svg" alt="Escuelas" class="w-16 h-16 mx-auto">
                </div>
                <div class="text-4xl md:text-5xl font-bold text-white mb-2">10</div>
                <div class="bg-[#0056ac] text-white px-3 py-1 rounded text-sm font-semibold">
                    ESCUELAS<br>PROFESIONALES
                </div>
            </div>

            <!-- Cifra 5 - Convenios Institucionales -->
            <div class="text-center">
                <div class="mb-4">
                    <img src="/img/sectioncifras/convenio.svg" alt="Convenios" class="w-16 h-16 mx-auto">
                </div>
                <div class="text-4xl md:text-5xl font-bold text-white mb-2">139</div>
                <div class="bg-[#0056ac] text-white px-3 py-1 rounded text-sm font-semibold">
                    CONVENIOS<br>INSTITUCIONALES
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Tercera sección - Ola inferior -->
<section class="wave-section" style="margin-top: -1px;">
    <div style="height: 150px; overflow: hidden;">
        <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
            <path d="M-0.00,49.85 C150.00,149.60 271.37,-49.85 500.00,49.85 L500.00,0.00 L-0.00,0.00 Z" style="stroke: none; fill: #db0455;"></path>
        </svg>
    </div>
</section>

<!-- Sección Otros enlaces -->
<section class="py-16 bg-gray-100">
    <div class="container mx-auto px-4">
        <p class="text-sm font-medium text-gray-600 text-center mb-2">También te puede interesar</p>
        <h2 class="text-3xl font-bold text-center text-[#db0455] mb-12">Otros enlaces</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Directorio de Funcionarios -->
            <a href="https://www.gob.pe/institucion/unamad/funcionarios" target="_blank" class="block bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow duration-300 group">
                <div class="flex items-center">
                    <div class="bg-blue-100 rounded-lg p-3 mr-4 group-hover:bg-blue-200 transition-colors">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800 group-hover:text-blue-600">Directorio de Funcionarios</h3>
                        <p class="text-gray-600 text-sm">Datos de contacto e información del personal de la UNAMAD</p>
                    </div>
                </div>
            </a>

            <!-- Repositorio Institucional -->
            <a href="https://repositorio.unamad.edu.pe/" target="_blank" class="block bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow duration-300 group">
                <div class="flex items-center">
                    <div class="bg-green-100 rounded-lg p-3 mr-4 group-hover:bg-green-200 transition-colors">
                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800 group-hover:text-green-600">Repositorio Institucional</h3>
                        <p class="text-gray-600 text-sm">Información intelectual producida y compilada por la comunidad universitaria</p>
                    </div>
                </div>
            </a>

            <!-- Convocatorias (tarjeta amarilla) -->
            <a href="https://www.gob.pe/institucion/unamad/informes-publicaciones/tipos/80-convocatorias-de-trabajo" target="_blank" class="block bg-yellow-400 rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow duration-300 group">
                <div class="flex items-center">
                    <div class="bg-yellow-600 rounded-lg p-3 mr-4 group-hover:bg-yellow-700 transition-colors">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800 group-hover:text-gray-900">Convocatorias</h3>
                        <p class="text-gray-700 text-sm">Convocatorias a procesos de selección de personal administrativo y docente</p>
                    </div>
                </div>
            </a>

            <!-- Mesa de Partes Virtual -->
            <a href="https://sgd.unamad.edu.pe/mesa-de-partes" target="_blank" class="block bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow duration-300 group">
                <div class="flex items-center">
                    <div class="bg-purple-100 rounded-lg p-3 mr-4 group-hover:bg-purple-200 transition-colors">
                        <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800 group-hover:text-purple-600">Mesa de Partes Virtual</h3>
                    </div>
                </div>
            </a>

            <!-- Ruta GPS Bus -->
            <a href="{{ url('proyectos/bus') }}" class="block bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow duration-300 group">
                <div class="flex items-center">
                    <div class="bg-orange-100 rounded-lg p-3 mr-4 group-hover:bg-orange-200 transition-colors">
                        <svg class="w-6 h-6 text-orange-600" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M18 11H6V6h12m-1.5 11a1.5 1.5 0 0 1-1.5-1.5 1.5 1.5 0 0 1 1.5-1.5 1.5 1.5 0 0 1 1.5 1.5 1.5 1.5 0 0 1-1.5 1.5m-9 0A1.5 1.5 0 0 1 7 15.5 1.5 1.5 0 0 1 8.5 14 1.5 1.5 0 0 1 10 15.5 1.5 1.5 0 0 1 8.5 17M4 16c0 .88.39 1.67 1 2.22V20a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1v-1h8v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1v-1.78c.61-.55 1-1.34 1-2.22V6c0-3.5-3.58-4-8-4s-8 .5-8 4v10Z"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800 group-hover:text-orange-600">Ruta - GPS Bus</h3>
                    </div>
                </div>
            </a>

            <!-- Observatorio Parque Científico -->
            <a href="{{ url('proyectos/aldea') }}" class="block bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow duration-300 group">
                <div class="flex items-center">
                    <div class="bg-indigo-100 rounded-lg p-3 mr-4 group-hover:bg-indigo-200 transition-colors">
                        <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 7.172V5L8 4z"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800 group-hover:text-indigo-600">Observatorio Parque Científico</h3>
                    </div>
                </div>
            </a>

            <!-- Directorio Telefónico Institucional -->
            <a href="https://sgd.unamad.edu.pe/consultas/directorio" target="_blank" class="block bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow duration-300 group">
                <div class="flex items-center">
                    <div class="bg-teal-100 rounded-lg p-3 mr-4 group-hover:bg-teal-200 transition-colors">
                        <svg class="w-6 h-6 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800 group-hover:text-teal-600">Directorio Telefónico Institucional</h3>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>

<!-- Sección Actividades -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Actividades</h2>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Columna Izquierda - Video YouTube (50%) -->
            <div class="w-full">
                <div class="aspect-w-16 aspect-h-9 rounded-lg overflow-hidden shadow-xl">
                    <iframe 
                        src="https://www.youtube.com/embed/videoseries?list=PLne5X_hwjWd5pL7WveLwUSqbMplFft-II" 
                        title="YouTube video playlist"
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        allowfullscreen
                        class="w-full h-full"
                        style="min-height: 400px;">
                    </iframe>
                </div>
            </div>

            <!-- Columna Derecha - Enlaces y Redes Sociales (50%) -->
            <div class="w-full">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <!-- Sub-columna 1: Notas de Prensa, Facebook, Instagram -->
                    <div class="space-y-4">
                        <!-- Notas de Prensa -->
                        <a href="https://www.gob.pe/institucion/unamad/noticias" target="_blank" class="block bg-red-600 hover:bg-red-700 rounded-lg shadow-lg p-6 transition-all duration-300">
                            <div class="flex items-center text-white">
                                <div class="mr-4">
                                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold">Notas de Prensa</h3>
                                    <p class="text-sm opacity-90">Listado de las últimas noticias publicadas en la UNAMAD</p>
                                </div>
                            </div>
                        </a>

                        <!-- Facebook -->
                        <a href="https://www.facebook.com/unamad.oficial/" target="_blank" class="block bg-blue-600 hover:bg-blue-700 rounded-lg shadow-lg p-6 transition-all duration-300">
                            <div class="flex items-center text-white">
                                <div class="mr-4">
                                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold">Facebook</h3>
                                    <p class="text-sm opacity-90">Página oficial de la UNAMAD en Facebook</p>
                                </div>
                            </div>
                        </a>

                        <!-- Instagram -->
                        <a href="https://www.instagram.com/unamad_oficial/" target="_blank" class="block bg-gradient-to-r from-purple-600 via-pink-600 to-orange-500 hover:from-purple-700 hover:via-pink-700 hover:to-orange-600 rounded-lg shadow-lg p-6 transition-all duration-300">
                            <div class="flex items-center text-white">
                                <div class="mr-4">
                                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zM5.838 12a6.162 6.162 0 1112.324 0 6.162 6.162 0 01-12.324 0zM12 16a4 4 0 110-8 4 4 0 010 8zm4.965-10.405a1.44 1.44 0 112.881.001 1.44 1.44 0 01-2.881-.001z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold">Instagram</h3>
                                    <p class="text-sm opacity-90">Cuenta oficial de la UNAMAD en Instagram</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Sub-columna 2: Boletín Digital -->
                    <div>
                        <!-- Boletín Digital UNAMAD AL DÍA - Estructura especial -->
                        <div class="space-y-0">
                            <!-- Imagen superior clickeable -->
                            <a href="https://heyzine.com/flip-book/2915c9cb36.html" target="_blank" class="block">
                                <img src="https://portal.unamad.edu.pe/img/boletin_unamad.png" 
                                     alt="Boletín UNAMAD" 
                                     class="w-full rounded-t-lg shadow-lg hover:opacity-95 transition-opacity duration-300">
                            </a>
                            <!-- Tarjeta inferior -->
                            <a href="https://heyzine.com/flip-book/2915c9cb36.html" target="_blank" class="block bg-red-600 hover:bg-red-700 rounded-b-lg shadow-lg p-6 transition-all duration-300">
                                <div class="text-white">
                                    <h3 class="text-lg font-bold mb-2">Boletín Digital "UNAMAD AL DÍA"</h3>
                                    <p class="text-sm opacity-90">Periodo septiembre-diciembre de 2024! 🎉 Este boletín es el reflejo...</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sección Enlaces Externos -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center text-[#db0455] mb-12">Enlaces Externos</h2>
        
        <!-- Slider Container -->
        <div class="relative overflow-hidden">
            <div class="enlaces-slider flex" id="enlacesSlider">
                <!-- Items individuales para desplazamiento continuo -->
                <a href="https://www.sunedu.gob.pe/" target="_blank" class="flex-shrink-0 p-6 mx-4 text-center group">
                    <img src="/img/enlacesexternos/logo-sunedu.png" alt="SUNEDU" class="w-40 h-28 object-contain mx-auto mb-3 group-hover:scale-110 transition-transform duration-300 filter grayscale hover:grayscale-0">
                    <h3 class="text-sm font-semibold text-gray-700 group-hover:text-gray-900 transition-colors duration-300">SUNEDU</h3>
                </a>
                <a href="https://www.pronabec.gob.pe/" target="_blank" class="flex-shrink-0 p-6 mx-4 text-center group">
                    <img src="/img/enlacesexternos/logoPronabec_hd.png" alt="PRONABEC" class="w-40 h-28 object-contain mx-auto mb-3 group-hover:scale-110 transition-transform duration-300 filter grayscale hover:grayscale-0">
                    <h3 class="text-sm font-semibold text-gray-700 group-hover:text-gray-900 transition-colors duration-300">PRONABEC</h3>
                </a>
                <a href="https://www.prociencia.gob.pe/" target="_blank" class="flex-shrink-0 p-6 mx-4 text-center group">
                    <img src="/img/enlacesexternos/prociencia.png" alt="PROCIENCIA" class="w-40 h-28 object-contain mx-auto mb-3 group-hover:scale-110 transition-transform duration-300 filter grayscale hover:grayscale-0">
                    <h3 class="text-sm font-semibold text-gray-700 group-hover:text-gray-900 transition-colors duration-300">PROCIENCIA</h3>
                </a>
                <a href="https://portal.rnssc.gob.pe/" target="_blank" class="flex-shrink-0 p-6 mx-4 text-center group">
                    <img src="/img/enlacesexternos/rnssc.png" alt="RNSSC" class="w-40 h-28 object-contain mx-auto mb-3 group-hover:scale-110 transition-transform duration-300 filter grayscale hover:grayscale-0">
                    <h3 class="text-sm font-semibold text-gray-700 group-hover:text-gray-900 transition-colors duration-300">RNSSC</h3>
                </a>
                <a href="https://www.rpu.edu.pe/" target="_blank" class="flex-shrink-0 p-6 mx-4 text-center group">
                    <img src="/img/enlacesexternos/rpu.png" alt="RPU" class="w-40 h-28 object-contain mx-auto mb-3 group-hover:scale-110 transition-transform duration-300 filter grayscale hover:grayscale-0">
                    <h3 class="text-sm font-semibold text-gray-700 group-hover:text-gray-900 transition-colors duration-300">RPU</h3>
                </a>
                <a href="https://www.scopus.com/" target="_blank" class="flex-shrink-0 p-6 mx-4 text-center group">
                    <img src="/img/enlacesexternos/scopus.png" alt="SCOPUS" class="w-40 h-28 object-contain mx-auto mb-3 group-hover:scale-110 transition-transform duration-300 filter grayscale hover:grayscale-0">
                    <h3 class="text-sm font-semibold text-gray-700 group-hover:text-gray-900 transition-colors duration-300">SCOPUS</h3>
                </a>
                
                <!-- Duplicado para bucle infinito -->
                <a href="https://www.sunedu.gob.pe/" target="_blank" class="flex-shrink-0 p-6 mx-4 text-center group">
                    <img src="/img/enlacesexternos/logo-sunedu.png" alt="SUNEDU" class="w-40 h-28 object-contain mx-auto mb-3 group-hover:scale-110 transition-transform duration-300 filter grayscale hover:grayscale-0">
                    <h3 class="text-sm font-semibold text-gray-700 group-hover:text-gray-900 transition-colors duration-300">SUNEDU</h3>
                </a>
                <a href="https://www.pronabec.gob.pe/" target="_blank" class="flex-shrink-0 p-6 mx-4 text-center group">
                    <img src="/img/enlacesexternos/logoPronabec_hd.png" alt="PRONABEC" class="w-40 h-28 object-contain mx-auto mb-3 group-hover:scale-110 transition-transform duration-300 filter grayscale hover:grayscale-0">
                    <h3 class="text-sm font-semibold text-gray-700 group-hover:text-gray-900 transition-colors duration-300">PRONABEC</h3>
                </a>
                <a href="https://www.prociencia.gob.pe/" target="_blank" class="flex-shrink-0 p-6 mx-4 text-center group">
                    <img src="/img/enlacesexternos/prociencia.png" alt="PROCIENCIA" class="w-40 h-28 object-contain mx-auto mb-3 group-hover:scale-110 transition-transform duration-300 filter grayscale hover:grayscale-0">
                    <h3 class="text-sm font-semibold text-gray-700 group-hover:text-gray-900 transition-colors duration-300">PROCIENCIA</h3>
                </a>
                <a href="https://portal.rnssc.gob.pe/" target="_blank" class="flex-shrink-0 p-6 mx-4 text-center group">
                    <img src="/img/enlacesexternos/rnssc.png" alt="RNSSC" class="w-40 h-28 object-contain mx-auto mb-3 group-hover:scale-110 transition-transform duration-300 filter grayscale hover:grayscale-0">
                    <h3 class="text-sm font-semibold text-gray-700 group-hover:text-gray-900 transition-colors duration-300">RNSSC</h3>
                </a>
                <a href="https://www.rpu.edu.pe/" target="_blank" class="flex-shrink-0 p-6 mx-4 text-center group">
                    <img src="/img/enlacesexternos/rpu.png" alt="RPU" class="w-40 h-28 object-contain mx-auto mb-3 group-hover:scale-110 transition-transform duration-300 filter grayscale hover:grayscale-0">
                    <h3 class="text-sm font-semibold text-gray-700 group-hover:text-gray-900 transition-colors duration-300">RPU</h3>
                </a>
                <a href="https://www.scopus.com/" target="_blank" class="flex-shrink-0 p-6 mx-4 text-center group">
                    <img src="/img/enlacesexternos/scopus.png" alt="SCOPUS" class="w-40 h-28 object-contain mx-auto mb-3 group-hover:scale-110 transition-transform duration-300 filter grayscale hover:grayscale-0">
                    <h3 class="text-sm font-semibold text-gray-700 group-hover:text-gray-900 transition-colors duration-300">SCOPUS</h3>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Modal Flotante de Anuncios -->
<div id="modal-anuncios" class="fixed inset-0 bg-transparent bg-opacity-50 z-[9999] hidden items-center justify-center p-4 backdrop-blur-sm">
    <div class="bg-white rounded-3xl max-w-2xl w-full max-h-[95vh] overflow-hidden shadow-2xl transform transition-all duration-500 scale-95 animate-pulse-glow" id="modal-contenido">
        
        <!-- Header del Modal con navegación -->
        <div class="relative bg-gradient-to-r from-[#db0455] to-[#a00340] text-white p-6">
            <!-- Botón Cerrar -->
            <button onclick="cerrarModalAnuncios()" 
                    class="absolute top-4 right-4 w-12 h-12 rounded-full bg-white/20 hover:bg-white/30 flex items-center justify-center transition-all duration-300 hover:scale-110 group">
                <svg class="w-6 h-6 group-hover:rotate-90 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
            
            <!-- Controles de navegación -->
            <div id="controles-navegacion" class="absolute top-4 left-4 flex items-center space-x-2">
                <button onclick="anuncioAnterior()" id="btn-anterior"
                        class="w-10 h-10 rounded-full bg-white/20 hover:bg-white/30 flex items-center justify-center transition-all duration-300 hover:scale-110">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </button>
                <button onclick="anuncioSiguiente()" id="btn-siguiente"
                        class="w-10 h-10 rounded-full bg-white/20 hover:bg-white/30 flex items-center justify-center transition-all duration-300 hover:scale-110">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>
                
                <!-- Indicador de posición -->
                <div class="text-white/90 text-sm font-medium ml-2">
                    <span id="anuncio-actual">1</span> / <span id="total-anuncios">1</span>
                </div>
            </div>
            
            <!-- Información del anuncio -->
            <div class="mt-8">
                <div id="modal-categoria" class="inline-block px-3 py-1 bg-white/20 rounded-full text-sm font-bold mb-3"></div>
                <h2 id="modal-titulo" class="text-2xl font-bold leading-tight mb-2"></h2>
                <div class="flex items-center space-x-4 text-white/90 text-sm">
                    <div class="flex items-center">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                  d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                        <span id="modal-autor"></span>
                    </div>
                    <div class="flex items-center">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                  d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        <span id="modal-fecha"></span>
                    </div>
                    <div class="flex items-center">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                  d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                  d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                        </svg>
                        <span id="modal-vistas"></span>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Contenido Scrolleable -->
        <div class="p-6 overflow-y-auto" style="max-height: calc(95vh - 200px);">
            <!-- Imagen principal -->
            <div id="modal-imagen-container" class="mb-6 hidden">
                <img id="modal-imagen" class="w-full max-h-80 object-cover rounded-xl shadow-lg" alt="">
            </div>
            
            <!-- Descripción -->
            <div class="mb-6">
                <div id="modal-descripcion" class="text-gray-700 leading-relaxed text-base"></div>
            </div>
            
            <!-- Imágenes adicionales -->
            <div id="modal-imagenes-adicionales-container" class="mb-6 hidden">
                <h3 class="text-lg font-semibold text-gray-800 mb-3 flex items-center">
                    🖼️ Más Imágenes
                </h3>
                <div id="modal-imagenes-adicionales" class="grid grid-cols-2 gap-3"></div>
            </div>
            
            <!-- Enlaces relacionados -->
            <div id="modal-enlaces-container" class="hidden">
                <h3 class="text-lg font-semibold text-gray-800 mb-3 flex items-center">
                    🔗 Enlaces Relacionados
                </h3>
                <div id="modal-enlaces" class="space-y-2"></div>
            </div>
        </div>
        
        <!-- Footer -->
        <div class="bg-gray-50 px-6 py-4 flex justify-between items-center border-t">
            <div class="text-sm text-gray-500" id="modal-tiempo"></div>
            <div class="flex items-center space-x-3">
                <button onclick="cerrarModalAnuncios()" 
                        class="px-6 py-2 bg-[#db0455] hover:bg-[#a00340] text-white rounded-lg transition-all duration-300 transform hover:scale-105">
                    Cerrar
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Estilos CSS adicionales -->
<style>
@keyframes pulse-glow {
    0%, 100% { 
        box-shadow: 0 25px 50px -12px rgba(219, 4, 85, 0.25);
    }
    50% { 
        box-shadow: 0 25px 50px -12px rgba(219, 4, 85, 0.4);
    }
}

.animate-pulse-glow {
    animation: pulse-glow 3s ease-in-out infinite;
}

#modal-anuncios .backdrop-blur-sm {
    backdrop-filter: blur(4px);
}
</style>

<!-- Modal Lightbox para imágenes en tamaño completo -->
<div id="lightbox-modal" class="fixed inset-0 bg-black bg-opacity-90 z-[10000] hidden items-center justify-center p-4" onclick="cerrarLightbox()">
    <div class="relative max-w-7xl max-h-full w-full h-full flex items-center justify-center" onclick="event.stopPropagation()">
        <!-- Botón cerrar -->
        <button onclick="cerrarLightbox()"
                class="absolute top-4 right-4 w-12 h-12 rounded-full bg-black/50 hover:bg-black/70 text-white flex items-center justify-center transition-all duration-300 hover:scale-110 z-10">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>

        <!-- Imagen en tamaño completo -->
        <img id="lightbox-imagen" class="max-w-full max-h-full object-contain rounded-lg shadow-2xl" alt="" onclick="event.stopPropagation()">

        <!-- Botones de navegación (si hay múltiples imágenes) -->
        <button id="lightbox-prev" onclick="imagenAnteriorLightbox()"
                class="absolute left-4 top-1/2 transform -translate-y-1/2 w-12 h-12 rounded-full bg-black/50 hover:bg-black/70 text-white flex items-center justify-center transition-all duration-300 hover:scale-110 hidden">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
        </button>

        <button id="lightbox-next" onclick="imagenSiguienteLightbox()"
                class="absolute right-4 top-1/2 transform -translate-y-1/2 w-12 h-12 rounded-full bg-black/50 hover:bg-black/70 text-white flex items-center justify-center transition-all duration-300 hover:scale-110 hidden">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </button>

        <!-- Indicador de imagen actual -->
        <div id="lightbox-counter" class="absolute bottom-4 left-1/2 transform -translate-x-1/2 bg-black/50 text-white px-4 py-2 rounded-full text-sm hidden">
            <span id="imagen-actual-lightbox">1</span> / <span id="total-imagenes-lightbox">1</span>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
// Hero Slider JavaScript
let currentSlide = 0;
const totalSlides = 8;
let slideInterval;

// Initialize slider
document.addEventListener('DOMContentLoaded', function() {
    startAutoSlider();
    
    // Add click events to indicators
    const indicators = document.querySelectorAll('.indicator');
    indicators.forEach((indicator, index) => {
        indicator.addEventListener('click', () => goToSlide(index));
    });

    // Pause auto-slider on hover
    const heroSlider = document.querySelector('.hero-slider');
    heroSlider.addEventListener('mouseenter', stopAutoSlider);
    heroSlider.addEventListener('mouseleave', startAutoSlider);
});

function goToSlide(slideIndex) {
    const slides = document.querySelectorAll('.slide');
    const indicators = document.querySelectorAll('.indicator');

    // Hide current slide
    slides[currentSlide].classList.remove('active');
    slides[currentSlide].style.opacity = '0';
    indicators[currentSlide].classList.remove('active');
    indicators[currentSlide].classList.add('bg-white/50');
    indicators[currentSlide].classList.remove('bg-white');

    // Show new slide
    currentSlide = slideIndex;
    slides[currentSlide].classList.add('active');
    slides[currentSlide].style.opacity = '1';
    indicators[currentSlide].classList.add('active');
    indicators[currentSlide].classList.remove('bg-white/50');
    indicators[currentSlide].classList.add('bg-white');
}

function nextSlide() {
    const nextIndex = (currentSlide + 1) % totalSlides;
    goToSlide(nextIndex);
}

function prevSlide() {
    const prevIndex = (currentSlide - 1 + totalSlides) % totalSlides;
    goToSlide(prevIndex);
}

function startAutoSlider() {
    slideInterval = setInterval(nextSlide, 4000); // Change slide every 4 seconds
}

function stopAutoSlider() {
    if (slideInterval) {
        clearInterval(slideInterval);
    }
}

// Enlaces Externos Slider JavaScript - Desplazamiento continuo sin pausas
let enlaceSlideInterval;
let currentEnlacePosition = 0;
let isMoving = true;

// Initialize enlaces slider
document.addEventListener('DOMContentLoaded', function() {
    startContinuousEnlaceSlider();
    
    // Pause auto-slider on hover
    const enlacesSlider = document.querySelector('#enlacesSlider');
    if (enlacesSlider) {
        enlacesSlider.addEventListener('mouseenter', stopEnlaceAutoSlider);
        enlacesSlider.addEventListener('mouseleave', startContinuousEnlaceSlider);
    }
});

function startContinuousEnlaceSlider() {
    const slider = document.getElementById('enlacesSlider');
    if (slider) {
        // Solo iniciar la animación si no existe ya
        if (!slider.style.animation || slider.style.animation === 'none') {
            slider.style.animation = 'slideEnlaces 30s linear infinite';
        } else {
            // Reanudar la animación pausada
            slider.style.animationPlayState = 'running';
        }
    }
}

function stopEnlaceAutoSlider() {
    const slider = document.getElementById('enlacesSlider');
    if (slider) {
        slider.style.animationPlayState = 'paused';
    }
}

// Agregar CSS keyframes para animación continua
const enlaceStyle = document.createElement('style');
enlaceStyle.textContent = `
@keyframes slideEnlaces {
    0% { transform: translateX(0); }
    100% { transform: translateX(-50%); }
}
`;
document.head.appendChild(enlaceStyle);

// ============= MODAL FLOTANTE DE ANUNCIOS =============

// Variables globales para el modal
let anunciosDisponibles = [];
let indiceActual = 0;
let modalVisible = false;

// Inicializar modal al cargar la página
document.addEventListener('DOMContentLoaded', function() {
    
    // Cargar y mostrar anuncios después de 2 segundos
    setTimeout(() => {
        cargarAnunciosParaModal();
    }, 2000);
});

// Cargar anuncios destacados para el modal
async function cargarAnunciosParaModal() {
    try {
        const response = await fetch('/api/anuncios/categoria?categoria=all&limite=10');
        const data = await response.json();
        
        if (data.success && data.anuncios.length > 0) {
            // Filtrar solo los más importantes (destacados primero)
            anunciosDisponibles = data.anuncios.sort((a, b) => {
                if (a.destacado && !b.destacado) return -1;
                if (!a.destacado && b.destacado) return 1;
                return 0;
            });
            
            indiceActual = 0;
            abrirModalAnuncios();
        }
    } catch (error) {
        console.error('Error cargando anuncios:', error);
    }
}

// Abrir modal flotante
async function abrirModalAnuncios() {
    if (anunciosDisponibles.length === 0) return;
    
    const modal = document.getElementById('modal-anuncios');
    modal.classList.remove('hidden');
    modal.classList.add('flex');
    
    // Cargar detalles del primer anuncio
    await cargarDetalleAnuncio(anunciosDisponibles[indiceActual].id);
    
    // Animación de entrada
    setTimeout(() => {
        document.getElementById('modal-contenido').classList.remove('scale-95');
        document.getElementById('modal-contenido').classList.add('scale-100');
    }, 100);
    
    modalVisible = true;
    actualizarControlesNavegacion();
}

// Cargar detalles de un anuncio específico
async function cargarDetalleAnuncio(anuncioId) {
    try {
        const response = await fetch(`/anuncio/${anuncioId}`);
        const data = await response.json();
        
        if (data.success) {
            llenarModalConAnuncio(data.anuncio);
        }
    } catch (error) {
        console.error('Error cargando detalles:', error);
    }
}

// Llenar modal con datos del anuncio
function llenarModalConAnuncio(anuncio) {
    const categoriaLabels = {
        'noticia': 'NOTICIA',
        'evento': 'EVENTO', 
        'comunicado': 'COMUNICADO',
        'convocatoria': 'CONVOCATORIA',
        'otro': 'ANUNCIO'
    };
    
    // Información básica
    document.getElementById('modal-categoria').textContent = categoriaLabels[anuncio.categoria] || 'ANUNCIO';
    document.getElementById('modal-titulo').textContent = anuncio.titulo;
    document.getElementById('modal-autor').textContent = anuncio.autor;
    document.getElementById('modal-fecha').textContent = anuncio.fecha_publicacion;
    document.getElementById('modal-vistas').textContent = anuncio.vistas;
    document.getElementById('modal-tiempo').textContent = anuncio.created_at_human;
    
    // Descripción
    document.getElementById('modal-descripcion').innerHTML = anuncio.descripcion.replace(/\n/g, '<br>');
    
    // Imagen principal
    const imagenContainer = document.getElementById('modal-imagen-container');
    const imagenElement = document.getElementById('modal-imagen');
    
    if (anuncio.imagen_principal_url && anuncio.imagen_principal_url.includes('/storage/')) {
        imagenElement.src = anuncio.imagen_principal_url;
        imagenElement.alt = anuncio.titulo;
        imagenContainer.classList.remove('hidden');

        // Agregar cursor pointer y funcionalidad de click para mostrar en lightbox
        imagenElement.style.cursor = 'pointer';
        imagenElement.title = 'Clic para ver en tamaño completo';
        imagenElement.onclick = function() {
            abrirLightbox(anuncio.imagen_principal_url, anuncio.titulo);
        };
    } else {
        imagenContainer.classList.add('hidden');
    }
    
    // Imágenes adicionales
    const imagenesAdicionalesContainer = document.getElementById('modal-imagenes-adicionales-container');
    const imagenesAdicionalesElement = document.getElementById('modal-imagenes-adicionales');
    
    if (anuncio.imagenes_adicionales_urls && anuncio.imagenes_adicionales_urls.length > 0) {
        imagenesAdicionalesElement.innerHTML = '';
        anuncio.imagenes_adicionales_urls.forEach(url => {
            if (url && url.includes('/storage/')) {
                const img = document.createElement('img');
                img.src = url;
                img.alt = anuncio.titulo;
                img.className = 'w-full h-24 object-cover rounded-lg shadow-md cursor-pointer hover:shadow-lg transition-shadow';
                img.title = 'Clic para ver en tamaño completo';
                img.onclick = () => abrirLightbox(url, anuncio.titulo);
                imagenesAdicionalesElement.appendChild(img);
            }
        });
        imagenesAdicionalesContainer.classList.remove('hidden');
    } else {
        imagenesAdicionalesContainer.classList.add('hidden');
    }
    
    // Enlaces relacionados
    const enlacesContainer = document.getElementById('modal-enlaces-container');
    const enlacesElement = document.getElementById('modal-enlaces');
    
    if (anuncio.enlaces && anuncio.enlaces.length > 0) {
        enlacesElement.innerHTML = '';
        anuncio.enlaces.forEach(enlace => {
            if (enlace.titulo && enlace.url) {
                const enlaceDiv = document.createElement('div');
                enlaceDiv.className = 'flex items-center p-3 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors border border-blue-200';
                enlaceDiv.innerHTML = `
                    <svg class="w-5 h-5 text-[#db0455] mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                              d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                    </svg>
                    <a href="${enlace.url}" target="_blank" 
                       class="text-[#db0455] hover:text-[#a00340] font-semibold flex-1 hover:underline">
                        ${enlace.titulo}
                    </a>
                    <svg class="w-4 h-4 text-gray-400 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                    </svg>
                `;
                enlacesElement.appendChild(enlaceDiv);
            }
        });
        enlacesContainer.classList.remove('hidden');
    } else {
        enlacesContainer.classList.add('hidden');
    }
}

// Actualizar controles de navegación
function actualizarControlesNavegacion() {
    const totalAnuncios = anunciosDisponibles.length;
    document.getElementById('anuncio-actual').textContent = indiceActual + 1;
    document.getElementById('total-anuncios').textContent = totalAnuncios;
    
    // Mostrar/ocultar controles según cantidad de anuncios
    const controles = document.getElementById('controles-navegacion');
    if (totalAnuncios > 1) {
        controles.classList.remove('hidden');
        
        // Habilitar/deshabilitar botones
        document.getElementById('btn-anterior').style.opacity = indiceActual > 0 ? '1' : '0.5';
        document.getElementById('btn-siguiente').style.opacity = indiceActual < totalAnuncios - 1 ? '1' : '0.5';
    } else {
        controles.classList.add('hidden');
    }
}

// Navegar al anuncio anterior
async function anuncioAnterior() {
    if (indiceActual > 0) {
        indiceActual--;
        await cargarDetalleAnuncio(anunciosDisponibles[indiceActual].id);
        actualizarControlesNavegacion();
    }
}

// Navegar al siguiente anuncio
async function anuncioSiguiente() {
    if (indiceActual < anunciosDisponibles.length - 1) {
        indiceActual++;
        await cargarDetalleAnuncio(anunciosDisponibles[indiceActual].id);
        actualizarControlesNavegacion();
    }
}

// Cerrar modal de anuncios
function cerrarModalAnuncios() {
    const modal = document.getElementById('modal-anuncios');
    const modalContent = document.getElementById('modal-contenido');
    
    // Animación de salida
    modalContent.classList.remove('scale-100');
    modalContent.classList.add('scale-95');
    
    setTimeout(() => {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
        modalVisible = false;
    }, 300);
}


// Abrir imagen en lightbox
function abrirImagenLightbox(url, titulo) {
    const lightbox = document.createElement('div');
    lightbox.className = 'fixed inset-0 bg-black bg-opacity-90 z-[10000] flex items-center justify-center p-4';
    lightbox.onclick = () => lightbox.remove();
    
    lightbox.innerHTML = `
        <div class="relative max-w-6xl max-h-[95vh] flex items-center justify-center">
            <img src="${url}" alt="${titulo}" class="max-w-full max-h-full object-contain rounded-xl shadow-2xl">
            <button onclick="event.stopPropagation(); this.parentElement.parentElement.remove()" 
                    class="absolute top-4 right-4 w-12 h-12 rounded-full bg-black bg-opacity-50 hover:bg-opacity-70 flex items-center justify-center text-white transition-all">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
    `;
    
    document.body.appendChild(lightbox);
}

// Controles de teclado
document.addEventListener('keydown', function(e) {
    if (!modalVisible) return;
    
    switch(e.key) {
        case 'Escape':
            cerrarModalAnuncios();
            break;
        case 'ArrowLeft':
            anuncioAnterior();
            break;
        case 'ArrowRight':
            anuncioSiguiente();
            break;
    }
});

// Cerrar modal al hacer clic fuera
document.addEventListener('click', function(e) {
    const modal = document.getElementById('modal-anuncios');
    if (e.target === modal && modalVisible) {
        cerrarModalAnuncios();
    }
});

// ============= FUNCIONALIDAD DE FILTROS EN PÁGINA =============

// Mantener funcionalidad de filtros existente
async function filtrarCategoria(categoria) {
    const contenedor = document.getElementById('contenedor-anuncios');
    const loading = document.getElementById('loading-anuncios');
    const botones = document.querySelectorAll('.filtro-categoria');
    
    // Actualizar botones activos
    botones.forEach(btn => {
        btn.classList.remove('active', 'bg-[#db0455]', 'text-white');
        btn.classList.add('bg-gray-200', 'text-gray-700');
    });
    
    event.target.classList.add('active', 'bg-[#db0455]', 'text-white');
    event.target.classList.remove('bg-gray-200', 'text-gray-700');
    
    // Mostrar loading
    contenedor.classList.add('hidden');
    loading.classList.remove('hidden');
    
    try {
        const response = await fetch(`/api/anuncios/categoria?categoria=${categoria}&limite=12`);
        const data = await response.json();
        
        if (data.success) {
            mostrarAnuncios(data.anuncios);
        }
    } catch (error) {
        console.error('Error:', error);
    } finally {
        loading.classList.add('hidden');
        contenedor.classList.remove('hidden');
    }
}

// Mostrar anuncios en página (no modal)
function mostrarAnuncios(anuncios) {
    const contenedor = document.getElementById('contenedor-anuncios');
    
    if (anuncios.length === 0) {
        contenedor.innerHTML = `
            <div class="col-span-full text-center py-12">
                <svg class="w-16 h-16 mx-auto mb-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                          d="M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                </svg>
                <p class="text-gray-500 text-lg">No hay anuncios en esta categoría</p>
            </div>
        `;
        return;
    }
    
    const categoriaColors = {
        'noticia': 'bg-blue-100 text-blue-800',
        'evento': 'bg-purple-100 text-purple-800',
        'comunicado': 'bg-yellow-100 text-yellow-800',
        'convocatoria': 'bg-green-100 text-green-800',
        'otro': 'bg-gray-100 text-gray-800',
    };
    
    const categoriaLabels = {
        'noticia': 'Noticia',
        'evento': 'Evento',
        'comunicado': 'Comunicado',
        'convocatoria': 'Convocatoria',
        'otro': 'Otro',
    };
    
    contenedor.innerHTML = anuncios.map(anuncio => `
        <article class="anuncio-item bg-white rounded-lg shadow-md overflow-hidden border-b-4 border-[#db0455] hover:shadow-xl transition-all duration-300 cursor-pointer"
                 data-categoria="${anuncio.categoria}"
                 onclick="abrirAnuncioEspecifico(${anuncio.id})">
            
            ${anuncio.imagen_principal_url && anuncio.imagen_principal_url.includes('/storage/') ? `
                <div class="h-32 overflow-hidden">
                    <img src="${anuncio.imagen_principal_url}" 
                         alt="${anuncio.titulo}"
                         class="w-full h-full object-cover hover:scale-110 transition-transform duration-300">
                </div>
            ` : ''}
            
            <div class="p-4">
                <div class="mb-2">
                    <span class="text-xs px-2 py-1 rounded-full font-medium ${categoriaColors[anuncio.categoria]}">
                        ${categoriaLabels[anuncio.categoria]}
                    </span>
                    ${anuncio.destacado ? '<span class="text-xs px-2 py-1 rounded-full font-medium bg-yellow-100 text-yellow-800 ml-1">⭐ Destacado</span>' : ''}
                </div>
                
                <h3 class="text-base font-bold text-gray-800 mb-2 line-clamp-2 hover:text-[#db0455] transition-colors">
                    ${anuncio.titulo.length > 60 ? anuncio.titulo.substring(0, 60) + '...' : anuncio.titulo}
                </h3>
                
                <p class="text-gray-600 text-sm mb-3 line-clamp-2">
                    ${anuncio.descripcion}
                </p>
                
                <div class="flex items-center justify-between text-xs text-gray-500 border-t border-gray-200 pt-3">
                    <span>${anuncio.fecha_publicacion}</span>
                    <span>${anuncio.vistas} vistas</span>
                </div>
            </div>
        </article>
    `).join('');
}

// ============= FUNCIONES DEL LIGHTBOX =============
let imagenesLightbox = [];
let indiceImagenActual = 0;

// Abrir lightbox con una imagen
function abrirLightbox(urlImagen, alt) {
    imagenesLightbox = [urlImagen];
    indiceImagenActual = 0;
    mostrarImagenLightbox();
}

// Mostrar imagen en el lightbox
function mostrarImagenLightbox() {
    const modal = document.getElementById('lightbox-modal');
    const imagen = document.getElementById('lightbox-imagen');

    modal.classList.remove('hidden');
    modal.classList.add('flex');
    imagen.src = imagenesLightbox[indiceImagenActual];

    // Mostrar/ocultar controles de navegación
    const btnPrev = document.getElementById('lightbox-prev');
    const btnNext = document.getElementById('lightbox-next');
    const counter = document.getElementById('lightbox-counter');

    if (imagenesLightbox.length > 1) {
        btnPrev.classList.remove('hidden');
        btnNext.classList.remove('hidden');
        counter.classList.remove('hidden');
        document.getElementById('imagen-actual-lightbox').textContent = indiceImagenActual + 1;
        document.getElementById('total-imagenes-lightbox').textContent = imagenesLightbox.length;
    } else {
        btnPrev.classList.add('hidden');
        btnNext.classList.add('hidden');
        counter.classList.add('hidden');
    }
}

// Cerrar lightbox
function cerrarLightbox() {
    const modal = document.getElementById('lightbox-modal');
    modal.classList.add('hidden');
    modal.classList.remove('flex');
}

// Navegación en lightbox
function imagenAnteriorLightbox() {
    if (indiceImagenActual > 0) {
        indiceImagenActual--;
        mostrarImagenLightbox();
    }
}

function imagenSiguienteLightbox() {
    if (indiceImagenActual < imagenesLightbox.length - 1) {
        indiceImagenActual++;
        mostrarImagenLightbox();
    }
}

// Cerrar lightbox con ESC y navegación con flechas
document.addEventListener('keydown', function(e) {
    const lightboxModal = document.getElementById('lightbox-modal');
    if (!lightboxModal.classList.contains('hidden')) {
        switch(e.key) {
            case 'Escape':
                cerrarLightbox();
                break;
            case 'ArrowLeft':
                imagenAnteriorLightbox();
                break;
            case 'ArrowRight':
                imagenSiguienteLightbox();
                break;
        }
    }
});

// El cierre por clic en fondo negro está manejado directamente en el HTML con onclick

// Abrir anuncio específico desde la página (no desde el modal automático)
async function abrirAnuncioEspecifico(anuncioId) {
    // Encontrar el anuncio y configurar el modal para mostrarlo
    anunciosDisponibles = [{id: anuncioId}];
    indiceActual = 0;
    await abrirModalAnuncios();
}
</script>
@endpush
