@extends('layouts.app')

@section('title', 'Inicio - Portal UNAMAD')

@section('content')

    <!-- Hero Section con Slider - Portal Principal UNAMAD -->
    <section class="hero-slider" aria-roledescription="carrusel" aria-label="Banners destacados de la UNAMAD">
        <!-- Slider Container -->
        <div class="slider-container" id="hero-slides" aria-live="off">
            <!-- Slide 1 (LCP - carga prioritaria) -->
            <div class="slide active" role="group" aria-roledescription="diapositiva" aria-label="1 de 8">
                <picture>
                    <source srcset="/img/banners/1.webp" type="image/webp">
                    <img src="/img/banners/1.jpg" alt="Banner institucional de la Universidad Nacional Amazónica de Madre de Dios" fetchpriority="high" width="1920" height="1080" decoding="async">
                </picture>
            </div>
            <!-- Slide 2 -->
            <div class="slide" role="group" aria-roledescription="diapositiva" aria-label="2 de 8" aria-hidden="true">
                <picture>
                    <source srcset="/img/banners/2.webp" type="image/webp">
                    <img src="/img/banners/2.jpg" alt="Campus de la UNAMAD en Puerto Maldonado" loading="lazy" width="1920" height="1080" decoding="async">
                </picture>
            </div>
            <!-- Slide 3 -->
            <div class="slide" role="group" aria-roledescription="diapositiva" aria-label="3 de 8" aria-hidden="true">
                <picture>
                    <source srcset="/img/banners/3.webp" type="image/webp">
                    <img src="/img/banners/3.jpg" alt="Estudiantes de la UNAMAD en el campus universitario" loading="lazy" width="1920" height="1080" decoding="async">
                </picture>
            </div>
            <!-- Slide 4 -->
            <div class="slide" role="group" aria-roledescription="diapositiva" aria-label="4 de 8" aria-hidden="true">
                <picture>
                    <source srcset="/img/banners/4.webp" type="image/webp">
                    <img src="/img/banners/4.jpg" alt="Investigadores de la UNAMAD realizando trabajo científico en laboratorio" loading="lazy" width="1920" height="1080" decoding="async">
                </picture>
            </div>
            <!-- Slide 5 -->
            <div class="slide" role="group" aria-roledescription="diapositiva" aria-label="5 de 8" aria-hidden="true">
                <picture>
                    <source srcset="/img/banners/5.webp" type="image/webp">
                    <img src="/img/banners/5.jpg" alt="Paisaje de la Amazonía y biodiversidad de Madre de Dios" loading="lazy" width="1920" height="1080" decoding="async">
                </picture>
            </div>
            <!-- Slide 6 -->
            <div class="slide" role="group" aria-roledescription="diapositiva" aria-label="6 de 8" aria-hidden="true">
                <picture>
                    <source srcset="/img/banners/6.webp" type="image/webp">
                    <img src="/img/banners/6.jpg" alt="Tecnología e innovación en la UNAMAD" loading="lazy" width="1920" height="1080" decoding="async">
                </picture>
            </div>
            <!-- Slide 7 -->
            <div class="slide" role="group" aria-roledescription="diapositiva" aria-label="7 de 8" aria-hidden="true">
                <picture>
                    <source srcset="/img/banners/7.webp" type="image/webp">
                    <img src="/img/banners/7.jpg" alt="Cultura y tradición amazónica de Madre de Dios" loading="lazy" width="1920" height="1080" decoding="async">
                </picture>
            </div>
            <!-- Slide 8 -->
            <div class="slide" role="group" aria-roledescription="diapositiva" aria-label="8 de 8" aria-hidden="true">
                <picture>
                    <source srcset="/img/banners/8.webp" type="image/webp">
                    <img src="/img/banners/8.jpg" alt="Futuro y desarrollo sostenible de la Amazonía" loading="lazy" width="1920" height="1080" decoding="async">
                </picture>
            </div>
        </div>

        <!-- Content Card - Responsive -->
        <div class="absolute left-2 sm:left-4 md:left-8 top-1/2 transform -translate-y-1/2 z-10 w-[calc(100%-1rem)] sm:w-[calc(100%-2rem)] md:w-auto">
            <div
                class="rounded-xl sm:rounded-2xl shadow-2xl max-w-[280px] sm:max-w-xs md:max-w-md mx-auto md:mx-0 border border-gray-200/20 relative overflow-hidden bg-white">
                <!-- Franja superior con imagen de hojas -->
                <div class="absolute top-0 left-0 right-0 h-6 sm:h-10 md:h-12 rounded-t-xl sm:rounded-t-2xl overflow-hidden"
                    style="background-image: url('/img/banners/backgroundbanner/background_card.webp'); background-size: cover; background-position: top center;">
                    <div class="absolute inset-0 bg-gradient-to-b from-transparent to-white/80"></div>
                </div>

                <!-- Franja inferior con imagen de hojas -->
                <div class="absolute bottom-0 left-0 right-0 h-6 sm:h-10 md:h-12 rounded-b-xl sm:rounded-b-2xl overflow-hidden"
                    style="background-image: url('/img/banners/backgroundbanner/background_card.webp'); background-size: cover; background-position: bottom center;">
                    <div class="absolute inset-0 bg-gradient-to-t from-transparent to-white/80"></div>
                </div>

                <!-- Contenido del card -->
                <div class="relative z-10 px-3 sm:px-4 md:px-6 pt-2 sm:pt-3 md:pt-5 pb-0">
                    <!-- Logo centrado -->
                    <div class="flex justify-center mb-1 sm:mb-2 md:mb-3">
                        <img src="{{ asset('img/header/logounamad.png') }}" alt="Logotipo de la Universidad Nacional Amazónica de Madre de Dios" class="h-5 w-16 sm:h-7 sm:w-24 md:h-10 md:w-36" width="160" height="48">
                    </div>

                    <!-- Título principal conciso -->
                    <h1
                        class="text-xs sm:text-base md:text-xl font-bold text-gray-800 mb-1 sm:mb-2 md:mb-3 leading-tight text-center md:text-left">
                        Universidad Nacional<br>
                        <span class="text-[#db0455]">Amazónica de Madre de Dios</span>
                    </h1>

                    <!-- Lema reducido -->
                    <p class="text-gray-600 mb-1 text-[10px] sm:text-xs md:text-sm leading-snug text-center md:text-left">
                        Formando profesionales comprometidos con el desarrollo sostenible de la Amazonía peruana.
                    </p>

                    <!-- Botón Admisión 2026 con Mascota -->
                    <div class="flex items-stretch gap-1">
                        <div class="flex items-center">
                            <a href="https://admision.unamad.edu.pe/" target="_blank" rel="noopener noreferrer"
                                class="bg-[#db0455] hover:bg-[#a00340] text-white px-2.5 py-1.5 sm:px-4 sm:py-2.5 md:px-5 md:py-3 rounded-lg font-semibold transition-all duration-300 text-center text-[10px] sm:text-xs md:text-sm inline-block">
                                Admisión 2026
                            </a>
                        </div>
                        <div>
                            <picture>
                                <source srcset="{{ asset('img/mascota/mascota.webp') }}" type="image/webp">
                                <img loading="lazy" src="{{ asset('img/mascota/mascota.png') }}" alt="" class="h-24 sm:h-36 md:h-48 lg:h-56 w-auto object-contain" width="215" height="320">
                            </picture>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Indicadores de slide -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 flex space-x-3" role="group" aria-label="Seleccionar diapositiva">
            <button type="button" class="indicator active w-4 h-4 rounded-full bg-white ring-2 ring-[#db0455] ring-offset-1 transition-all duration-300 shadow-lg"
                data-slide="0" aria-label="Ir a la diapositiva 1 de 8" aria-current="true"></button>
            <button type="button" class="indicator w-4 h-4 rounded-full bg-white/70 transition-all duration-300 shadow-lg"
                data-slide="1" aria-label="Ir a la diapositiva 2 de 8" aria-current="false"></button>
            <button type="button" class="indicator w-4 h-4 rounded-full bg-white/70 transition-all duration-300 shadow-lg"
                data-slide="2" aria-label="Ir a la diapositiva 3 de 8" aria-current="false"></button>
            <button type="button" class="indicator w-4 h-4 rounded-full bg-white/70 transition-all duration-300 shadow-lg"
                data-slide="3" aria-label="Ir a la diapositiva 4 de 8" aria-current="false"></button>
            <button type="button" class="indicator w-4 h-4 rounded-full bg-white/70 transition-all duration-300 shadow-lg"
                data-slide="4" aria-label="Ir a la diapositiva 5 de 8" aria-current="false"></button>
            <button type="button" class="indicator w-4 h-4 rounded-full bg-white/70 transition-all duration-300 shadow-lg"
                data-slide="5" aria-label="Ir a la diapositiva 6 de 8" aria-current="false"></button>
            <button type="button" class="indicator w-4 h-4 rounded-full bg-white/70 transition-all duration-300 shadow-lg"
                data-slide="6" aria-label="Ir a la diapositiva 7 de 8" aria-current="false"></button>
            <button type="button" class="indicator w-4 h-4 rounded-full bg-white/70 transition-all duration-300 shadow-lg"
                data-slide="7" aria-label="Ir a la diapositiva 8 de 8" aria-current="false"></button>
        </div>

        <!-- Controles de navegación -->
        <button
            class="absolute left-6 top-1/2 transform -translate-y-1/2 text-white hover:text-[#db0455] transition-all duration-300 bg-black/50 hover:bg-black/70 backdrop-blur-sm rounded-full p-4 shadow-2xl drop-shadow-2xl hover:shadow-[0_35px_60px_-15px_rgba(0,0,0,0.5)] hover:drop-shadow-[0_-25px_25px_rgba(0,0,0,0.3)] border border-white/20 hover:border-[#db0455]/50"
            type="button" onclick="prevSlide()" aria-label="Diapositiva anterior">
            <svg class="w-6 h-6" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" >
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
        </button>
        <button
            class="absolute right-6 top-1/2 transform -translate-y-1/2 text-white hover:text-[#db0455] transition-all duration-300 bg-black/50 hover:bg-black/70 backdrop-blur-sm rounded-full p-4 shadow-2xl drop-shadow-2xl hover:shadow-[0_35px_60px_-15px_rgba(0,0,0,0.5)] hover:drop-shadow-[0_-25px_25px_rgba(0,0,0,0.3)] border border-white/20 hover:border-[#db0455]/50"
            type="button" onclick="nextSlide()" aria-label="Diapositiva siguiente">
            <svg class="w-6 h-6" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" >
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </button>

        <!-- Pausar / reanudar el avance automático (WCAG 2.2.2) -->
        <button type="button" id="hero-pause" onclick="toggleHeroAutoplay()" aria-pressed="false" aria-label="Pausar el avance automático del carrusel"
            class="absolute right-6 bottom-8 z-20 text-white bg-black/50 hover:bg-black/70 backdrop-blur-sm rounded-full p-3 shadow-2xl border border-white/20 hover:border-[#db0455]/50 transition-all duration-300">
            <svg id="hero-pause-icon" class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                <path d="M6 19h4V5H6v14zm8-14v14h4V5h-4z" />
            </svg>
            <svg id="hero-play-icon" class="w-5 h-5 hidden" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                <path d="M8 5v14l11-7z" />
            </svg>
        </button>

        <!-- Scroll indicator -->
        <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 animate-bounce" aria-hidden="true">
            <svg class="w-6 h-6 text-white/60" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
            </svg>
        </div>
    </section>


    <!-- Sección Noticias (gob.pe/unamad) -->
    @if (!empty($noticiasGobPe))
    <section class="py-16 bg-white" aria-labelledby="noticias-gobpe-label">
        <div class="container mx-auto px-4">
            <p class="text-sm font-medium text-gray-600 text-center mb-2">Información oficial publicada en gob.pe</p>
            <h2 id="noticias-gobpe-label" class="text-2xl sm:text-3xl font-bold text-center text-[#db0455]">Noticias</h2>
            <div class="w-20 h-1 mx-auto rounded-full mt-4 mb-8 sm:mb-12" style="background:linear-gradient(to right,#ed145b,#db0455);"></div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">
                @foreach ($noticiasGobPe as $noticia)
                    <a href="{{ $noticia['enlace'] }}" target="_blank" rel="noopener noreferrer"
                        class="group bg-white border border-gray-200 rounded-lg overflow-hidden shadow-sm hover:shadow-lg hover:border-[#ed145b]/40 transition-all duration-300 flex flex-col">
                        @if (!empty($noticia['imagen']))
                            <div class="aspect-[16/10] bg-gray-100 overflow-hidden">
                                <img src="{{ $noticia['imagen'] }}" alt=""
                                    loading="lazy" referrerpolicy="no-referrer"
                                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                            </div>
                        @else
                            <div class="aspect-[16/10] bg-gradient-to-br from-[#ed145b]/10 to-[#db0455]/10 flex items-center justify-center">
                                <svg class="w-12 h-12 text-[#ed145b]/40" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10l4 4v10a2 2 0 01-2 2z"></path>
                                </svg>
                            </div>
                        @endif
                        <div class="p-4 flex flex-col flex-1">
                            @if (!empty($noticia['fecha_texto']))
                                <time @if (!empty($noticia['fecha_iso'])) datetime="{{ $noticia['fecha_iso'] }}" @endif
                                    class="block text-xs text-gray-500 mb-2">{{ $noticia['fecha_texto'] }}</time>
                            @endif
                            <h3 class="text-sm font-semibold text-gray-800 group-hover:text-[#db0455] line-clamp-3 mb-3 flex-1">
                                {{ $noticia['titulo'] }}
                            </h3>
                            <span class="text-xs font-medium text-[#db0455] inline-flex items-center mt-auto">
                                Leer en gob.pe
                                <svg class="w-3 h-3 ml-1" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </span>
                        </div>
                    </a>
                @endforeach
            </div>

            <div class="text-center mt-8 sm:mt-10">
                <a href="{{ $noticiasGobPeFuente }}" target="_blank" rel="noopener noreferrer"
                    class="inline-flex items-center px-6 py-3 bg-[#db0455] text-white font-semibold rounded-lg hover:bg-[#a00340] transition-colors">
                    Ver todas las noticias en gob.pe
                    <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>
    @endif


    <!-- Sección Nuestros Servicios y Documentos -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <!-- Título Principal de la Sección -->
            <div class="text-center mb-12">
                <p class="text-sm font-medium text-gray-600 mb-2" aria-hidden="true">CONOCE TODOS</p>
                <h2 class="text-2xl sm:text-3xl font-bold text-[#db0455]"><span class="sr-only">Conoce todos </span>Nuestros Servicios</h2>
                <div class="w-20 h-1 mx-auto rounded-full mt-4" style="background:linear-gradient(to right,#ed145b,#db0455);"></div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-5 gap-8">
                <!-- Columna IZQUIERDA - Servicios (80%) -->
                <div class="lg:col-span-4">

                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                        <!-- Plataforma de Servicios Digitales -->
                        <a href="https://sgd.unamad.edu.pe/" target="_blank" rel="noopener noreferrer"
                            class="flex bg-white rounded-lg shadow-lg border-l-4 min-h-[180px] border-cyan-600 overflow-hidden hover:shadow-xl transition-all duration-300 group">
                            <div class="p-4 text-center flex flex-col items-center justify-center w-full h-full">
                                <div
                                    class="bg-cyan-600 rounded-lg p-4 w-16 h-16 mx-auto mb-4 group-hover:bg-cyan-700 transition-colors duration-300">
                                    <svg class="w-8 h-8 text-white mx-auto" aria-hidden="true" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M2.25 7.125C2.25 6.504 2.754 6 3.375 6h6c.621 0 1.125.504 1.125 1.125v3.75c0 .621-.504 1.125-1.125 1.125h-6a1.125 1.125 0 01-1.125-1.125v-3.75zM14.25 8.625c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v8.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 01-1.125-1.125v-8.25zM3.75 16.125c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v2.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 01-1.125-1.125v-2.25z">
                                        </path>
                                    </svg>
                                </div>
                                <h3
                                    class="text-base font-bold text-[#0056ac] group-hover:text-[#003d7a] text-center leading-tight min-h-[3rem] flex items-center justify-center">
                                    Plataforma de Servicios Digitales</h3>
                            </div>
                        </a>

                        <!-- Campus Virtual -->
                        <a href="https://campus.unamad.edu.pe/" target="_blank" rel="noopener noreferrer"
                            class="flex bg-white rounded-lg shadow-lg border-l-4 min-h-[180px] border-[#db0455] overflow-hidden hover:shadow-xl transition-all duration-300 group min-h-[180px]">
                            <div class="p-4 text-center flex flex-col items-center justify-center w-full h-full">
                                <div
                                    class="bg-[#db0455] rounded-lg p-4 w-16 h-16 mx-auto mb-4 group-hover:bg-[#a00340] transition-colors duration-300">
                                    <svg class="w-8 h-8 text-white mx-auto" aria-hidden="true" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 14l9-5-9-5-9 5 9 5z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
                                        </path>
                                    </svg>
                                </div>
                                <h3
                                    class="text-base font-bold text-[#0056ac] group-hover:text-[#003d7a] text-center leading-tight min-h-[3rem] flex items-center justify-center">
                                    Campus Virtual</h3>
                            </div>
                        </a>

                        <!-- Biblioteca Virtual -->
                        <a href="https://elibro.net/es/lc/unamad/login_usuario/" target="_blank" rel="noopener noreferrer"
                            class="flex bg-white rounded-lg shadow-lg border-l-4 min-h-[180px] border-green-600 overflow-hidden hover:shadow-xl transition-all duration-300 group">
                            <div class="p-4 text-center flex flex-col items-center justify-center w-full h-full">
                                <div
                                    class="bg-green-600 rounded-lg p-4 w-16 h-16 mx-auto mb-4 group-hover:bg-green-700 transition-colors duration-300">
                                    <svg class="w-8 h-8 text-white mx-auto" aria-hidden="true" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                                        </path>
                                    </svg>
                                </div>
                                <h3
                                    class="text-base font-bold text-[#0056ac] group-hover:text-[#003d7a] text-center leading-tight min-h-[3rem] flex items-center justify-center">
                                    Biblioteca Virtual</h3>
                            </div>
                        </a>

                        <!-- Biblioteca UNAMAD -->
                        <a href="https://biblioteca.unamad.edu.pe/" target="_blank" rel="noopener noreferrer"
                            class="flex bg-white rounded-lg shadow-lg border-l-4 min-h-[180px] border-emerald-600 overflow-hidden hover:shadow-xl transition-all duration-300 group">
                            <div class="p-4 text-center flex flex-col items-center justify-center w-full h-full">
                                <div
                                    class="bg-emerald-600 rounded-lg p-4 w-16 h-16 mx-auto mb-4 group-hover:bg-emerald-700 transition-colors duration-300">
                                    <svg class="w-8 h-8 text-white mx-auto" aria-hidden="true" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 6h16M4 10h16M4 14h10M4 18h10M18 14l3 3-3 3m3-3h-7">
                                        </path>
                                    </svg>
                                </div>
                                <h3
                                    class="text-base font-bold text-[#0056ac] group-hover:text-[#003d7a] text-center leading-tight min-h-[3rem] flex items-center justify-center">
                                    Biblioteca UNAMAD</h3>
                            </div>
                        </a>

                        <!-- Centro de Idiomas -->
                        <a href="https://cidiomas.unamad.edu.pe/" target="_blank" rel="noopener noreferrer"
                            class="flex bg-white rounded-lg shadow-lg border-l-4 min-h-[180px] border-blue-600 overflow-hidden hover:shadow-xl transition-all duration-300 group">
                            <div class="p-4 text-center flex flex-col items-center justify-center w-full h-full">
                                <div
                                    class="bg-blue-600 rounded-lg p-4 w-16 h-16 mx-auto mb-4 group-hover:bg-blue-700 transition-colors duration-300">
                                    <svg class="w-8 h-8 text-white mx-auto" aria-hidden="true" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9v-9m0-9v9"></path>
                                    </svg>
                                </div>
                                <h3
                                    class="text-base font-bold text-[#0056ac] group-hover:text-[#003d7a] text-center leading-tight min-h-[3rem] flex items-center justify-center">
                                    Centro de Idiomas</h3>
                            </div>
                        </a>

                        <!-- Centro Pre Universitario -->
                        <a href="https://cepre.unamad.edu.pe/" target="_blank" rel="noopener noreferrer"
                            class="flex bg-white rounded-lg shadow-lg border-l-4 min-h-[180px] border-purple-600 overflow-hidden hover:shadow-xl transition-all duration-300 group">
                            <div class="p-4 text-center flex flex-col items-center justify-center w-full h-full">
                                <div
                                    class="bg-purple-600 rounded-lg p-4 w-16 h-16 mx-auto mb-4 group-hover:bg-purple-700 transition-colors duration-300">
                                    <svg class="w-8 h-8 text-white mx-auto" aria-hidden="true" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                                        </path>
                                    </svg>
                                </div>
                                <h3
                                    class="text-base font-bold text-[#0056ac] group-hover:text-[#003d7a] text-center leading-tight min-h-[3rem] flex items-center justify-center">
                                    Centro Pre Universitario</h3>
                            </div>
                        </a>

                        <!-- Centro de Informática -->
                        <a href="https://ceinfo.unamad.edu.pe/" target="_blank" rel="noopener noreferrer"
                            class="flex bg-white rounded-lg shadow-lg border-l-4 min-h-[180px] border-orange-600 overflow-hidden hover:shadow-xl transition-all duration-300 group">
                            <div class="p-4 text-center flex flex-col items-center justify-center w-full h-full">
                                <div
                                    class="bg-orange-600 rounded-lg p-4 w-16 h-16 mx-auto mb-4 group-hover:bg-orange-700 transition-colors duration-300">
                                    <svg class="w-8 h-8 text-white mx-auto" aria-hidden="true" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                        </path>
                                    </svg>
                                </div>
                                <h3
                                    class="text-base font-bold text-[#0056ac] group-hover:text-[#003d7a] text-center leading-tight min-h-[3rem] flex items-center justify-center">
                                    Centro de Informática</h3>
                            </div>
                        </a>

                        <!-- Talleres Artísticos y Culturales -->
                        <a href="https://proyeccionsocial.unamad.edu.pe" target="_blank" rel="noopener noreferrer"
                            class="flex bg-white rounded-lg shadow-lg border-l-4 min-h-[180px] border-teal-600 overflow-hidden hover:shadow-xl transition-all duration-300 group">
                            <div class="p-4 text-center flex flex-col items-center justify-center w-full h-full">
                                <div
                                    class="bg-teal-600 rounded-lg p-4 w-16 h-16 mx-auto mb-4 group-hover:bg-teal-700 transition-colors duration-300">
                                    <svg class="w-8 h-8 text-white mx-auto" aria-hidden="true" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M7 4V2a1 1 0 011-1h8a1 1 0 011 1v2m-9 0h10m-10 0l1 16h8l1-16M10 8v8m4-8v8">
                                        </path>
                                    </svg>
                                </div>
                                <h3
                                    class="text-base font-bold text-[#0056ac] group-hover:text-[#003d7a] text-center leading-tight min-h-[3rem] flex items-center justify-center">
                                    Talleres Artísticos y Culturales</h3>
                            </div>
                        </a>

                        <!-- Portal de Admisión -->
                        <a href="https://admision.unamad.edu.pe/" target="_blank" rel="noopener noreferrer"
                            class="flex bg-white rounded-lg shadow-lg border-l-4 min-h-[180px] border-indigo-600 overflow-hidden hover:shadow-xl transition-all duration-300 group">
                            <div class="p-4 text-center flex flex-col items-center justify-center w-full h-full">
                                <div
                                    class="bg-indigo-600 rounded-lg p-4 w-16 h-16 mx-auto mb-4 group-hover:bg-indigo-700 transition-colors duration-300">
                                    <svg class="w-8 h-8 text-white mx-auto" aria-hidden="true" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                    </svg>
                                </div>
                                <h3
                                    class="text-base font-bold text-[#0056ac] group-hover:text-[#003d7a] text-center leading-tight min-h-[3rem] flex items-center justify-center">
                                    Portal de Admisión</h3>
                            </div>
                        </a>

                        <!-- Cooperación y Relaciones Internacionales -->
                        <a href="/oficinas/cooperacion"
                            class="flex bg-white rounded-lg shadow-lg border-l-4 min-h-[180px] border-pink-600 overflow-hidden hover:shadow-xl transition-all duration-300 group">
                            <div class="p-4 text-center flex flex-col items-center justify-center w-full h-full">
                                <div
                                    class="bg-pink-600 rounded-lg p-4 w-16 h-16 mx-auto mb-4 group-hover:bg-pink-700 transition-colors duration-300">
                                    <svg class="w-8 h-8 text-white mx-auto" aria-hidden="true" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                        </path>
                                    </svg>
                                </div>
                                <h3
                                    class="text-base font-bold text-[#0056ac] group-hover:text-[#003d7a] text-center leading-tight min-h-[3rem] flex items-center justify-center">
                                    Cooperación y Relaciones Internacionales</h3>
                            </div>
                        </a>

                        <!-- Libro de Reclamaciones Digital -->
                        <a href="https://reclamos.servicios.gob.pe/?institution_id=224" target="_blank" rel="noopener noreferrer"
                            class="flex bg-white rounded-lg shadow-lg border-l-4 min-h-[180px] border-red-600 overflow-hidden hover:shadow-xl transition-all duration-300 group">
                            <div class="p-4 text-center flex flex-col items-center justify-center w-full h-full">
                                <div
                                    class="bg-red-600 rounded-lg p-4 w-16 h-16 mx-auto mb-4 group-hover:bg-red-700 transition-colors duration-300">
                                    <svg class="w-8 h-8 text-white mx-auto" aria-hidden="true" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01">
                                        </path>
                                    </svg>
                                </div>
                                <h3
                                    class="text-base font-bold text-[#0056ac] group-hover:text-[#003d7a] text-center leading-tight min-h-[3rem] flex items-center justify-center">
                                    Libro de Reclamaciones Digital</h3>
                            </div>
                        </a>

                        <!-- Oficina de Gestión de la Calidad -->
                        <a href="{{ url('oficinas/calidad') }}"
                            class="flex bg-white rounded-lg shadow-lg border-l-4 min-h-[180px] border-yellow-600 overflow-hidden hover:shadow-xl transition-all duration-300 group">
                            <div class="p-4 text-center flex flex-col items-center justify-center w-full h-full">
                                <div
                                    class="bg-yellow-600 rounded-lg p-4 w-16 h-16 mx-auto mb-4 group-hover:bg-yellow-700 transition-colors duration-300">
                                    <svg class="w-8 h-8 text-white mx-auto" aria-hidden="true" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z">
                                        </path>
                                    </svg>
                                </div>
                                <h3
                                    class="text-base font-bold text-[#0056ac] group-hover:text-[#003d7a] text-center leading-tight min-h-[3rem] flex items-center justify-center">
                                    Oficina de Gestión de la Calidad</h3>
                            </div>
                        </a>

                        <!-- Defensoría Universitaria -->
                        <a href="https://denuncia.unamad.edu.pe/" target="_blank" rel="noopener noreferrer"
                            class="flex bg-white rounded-lg shadow-lg border-l-4 min-h-[180px] border-gray-600 overflow-hidden hover:shadow-xl transition-all duration-300 group">
                            <div class="p-4 text-center flex flex-col items-center justify-center w-full h-full">
                                <div
                                    class="bg-gray-600 rounded-lg p-4 w-16 h-16 mx-auto mb-4 group-hover:bg-gray-700 transition-colors duration-300">
                                    <svg class="w-8 h-8 text-white mx-auto" aria-hidden="true" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z">
                                        </path>
                                    </svg>
                                </div>
                                <h3
                                    class="text-base font-bold text-[#0056ac] group-hover:text-[#003d7a] text-center leading-tight min-h-[3rem] flex items-center justify-center">
                                    Defensoría Universitaria</h3>
                            </div>
                        </a>

                        <!-- Planta Piloto de Tecnología de la Madera -->
                        <a href="{{ url('facultades/forestal') }}"
                            class="flex bg-white rounded-lg shadow-lg border-l-4 min-h-[180px] border-emerald-600 overflow-hidden hover:shadow-xl transition-all duration-300 group">
                            <div class="p-4 text-center flex flex-col items-center justify-center w-full h-full">
                                <div
                                    class="bg-emerald-600 rounded-lg p-4 w-16 h-16 mx-auto mb-4 group-hover:bg-emerald-700 transition-colors duration-300">
                                    <svg class="w-8 h-8 text-white mx-auto" aria-hidden="true" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 7.172V5L8 4z">
                                        </path>
                                    </svg>
                                </div>
                                <h3
                                    class="text-base font-bold text-[#0056ac] group-hover:text-[#003d7a] text-center leading-tight min-h-[3rem] flex items-center justify-center">
                                    Planta Piloto de Tecnología de la Madera - PPTM</h3>
                            </div>
                        </a>

                        <!-- Comité Electoral -->
                        <a href="https://www.gob.pe/institucion/unamad/colecciones/10084-resolucion-de-comite-electoral-universitario"
                            target="_blank" rel="noopener noreferrer"
                            class="flex bg-white rounded-lg shadow-lg border-l-4 min-h-[180px] border-indigo-600 overflow-hidden hover:shadow-xl transition-all duration-300 group">
                            <div class="p-4 text-center flex flex-col items-center justify-center w-full h-full">
                                <div
                                    class="bg-indigo-600 rounded-lg p-4 w-16 h-16 mx-auto mb-4 group-hover:bg-indigo-700 transition-colors duration-300">
                                    <svg class="w-8 h-8 text-white mx-auto" aria-hidden="true" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4">
                                        </path>
                                    </svg>
                                </div>
                                <h3
                                    class="text-base font-bold text-[#0056ac] group-hover:text-[#003d7a] text-center leading-tight min-h-[3rem] flex items-center justify-center">
                                    Comité Electoral</h3>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Columna DERECHA - Documentos (20%) -->
                <div class="lg:col-span-1">
                    <div class="bg-yellow-400 rounded-lg shadow-xl p-6">
                        <div class="text-center mb-6">
                            <div class="bg-white rounded-full p-3 w-16 h-16 mx-auto mb-4">
                                <svg class="w-10 h-10 text-yellow-600 mx-auto" aria-hidden="true" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                    </path>
                                </svg>
                            </div>
                            <h2 class="text-xl font-bold text-gray-800 mb-4">Documentos Normativos y de Gestión</h2>
                        </div>

                        <div class="space-y-3 mb-6">
                            @forelse($enlacesNormativos as $enlace)
                                <a href="{{ $enlace->url }}"
                                    target="_blank" rel="noopener noreferrer"
                                    class="block bg-white/90 hover:bg-white rounded-lg p-3 text-sm transition-all duration-300 group">
                                    <div class="flex items-center justify-between">
                                        <span class="font-medium text-gray-700 group-hover:text-gray-900">{{ $enlace->titulo }}</span>
                                        <svg class="w-4 h-4 text-gray-500 group-hover:text-gray-700" aria-hidden="true" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </div>
                                </a>
                            @empty
                                <p class="text-center text-gray-600 text-sm py-2">No hay enlaces disponibles por el momento.</p>
                            @endforelse
                        </div>

                        <!-- Botón Ver más documentos -->
                        <a href="{{ url('transparencia/documentos') }}"
                            class="block bg-gray-800 hover:bg-gray-900 text-white text-center py-3 px-4 rounded-lg font-medium transition-colors duration-300">
                            Ver más documentos
                            <svg class="w-4 h-4 ml-2 inline" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                </path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección Comunicados -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <!-- Header con título y enlace -->
            <div class="flex justify-between items-center mb-8">
                <div>
                    <h2 class="text-2xl font-bold text-[#db0455]">Comunicados</h2>
                    <div class="w-16 h-1 rounded-full mt-2" style="background:linear-gradient(to right,#ed145b,#db0455);"></div>
                </div>
                <a href="{{ route('comunicados.index') }}"
                    class="text-blue-600 hover:text-blue-800 font-medium flex items-center">
                    Ver todos los comunicados
                    <svg class="w-4 h-4 ml-1" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 items-stretch">
                @forelse($comunicadosOficina as $comunicado)
                    <article
                        class="relative bg-white p-6 shadow-md hover:shadow-lg transition-all duration-300 flex flex-col border-b-4 border-b-[#db0455] overflow-hidden hover:scale-105"
                        style="box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06), 0 -4px 6px -1px rgba(0, 0, 0, 0.08);">
                        <h3 class="font-semibold mb-4 line-clamp-3">
                            {{-- Enlace "extendido": el pseudoelemento cubre toda la tarjeta para conservar el clic en cualquier punto --}}
                            <a href="{{ route('comunicado.ver', $comunicado) }}"
                               class="text-blue-600 hover:text-blue-800 after:absolute after:inset-0 after:content-['']">
                                {{ $comunicado->titulo }}
                            </a>
                        </h3>
                        <p class="text-gray-700 text-sm mb-6 font-bold">
                            {{ $comunicado->oficina ?? ($comunicado->categoria->nombre ?? 'OFICINA') }}
                        </p>
                        <div class="text-sm text-gray-500 border-t pt-3 mt-auto">
                            <span>{{ $comunicado->created_at->translatedFormat('d \d\e F \d\e Y - g:i a') }}</span>
                        </div>
                    </article>
                @empty
                    <!-- Mensaje cuando no hay comunicados -->
                    <div class="col-span-full text-center py-12">
                        <svg class="w-16 h-16 text-gray-400 mx-auto mb-4" aria-hidden="true" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z">
                            </path>
                        </svg>
                        <p class="text-gray-500 text-lg">No hay comunicados disponibles en este momento</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <!-- Sección Campañas y eventos (gob.pe/unamad) -->
    @if (!empty($campanasGobPe))
    <section class="py-16 bg-gray-50" aria-labelledby="campanas-gobpe-label">
        <div class="container mx-auto px-4">
            <p class="text-sm font-medium text-gray-600 text-center mb-2">Convocatorias y actividades publicadas en gob.pe</p>
            <h2 id="campanas-gobpe-label" class="text-2xl sm:text-3xl font-bold text-center text-[#db0455]">Campañas y eventos</h2>
            <div class="w-20 h-1 mx-auto rounded-full mt-4 mb-8 sm:mb-12" style="background:linear-gradient(to right,#ed145b,#db0455);"></div>

            <div class="grid grid-cols-1 lg:grid-cols-5 gap-8">
                <!-- Columna IZQUIERDA - Campañas (80%) -->
                <div class="lg:col-span-4">
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6">
                        @foreach ($campanasGobPe as $campana)
                            <a href="{{ $campana['enlace'] }}" target="_blank" rel="noopener noreferrer"
                                class="group bg-white border border-gray-200 rounded-lg overflow-hidden shadow-sm hover:shadow-lg hover:border-[#ed145b]/40 transition-all duration-300 flex flex-col">
                                @if (!empty($campana['imagen']))
                                    <div class="aspect-[16/10] bg-gray-100 overflow-hidden">
                                        <img src="{{ $campana['imagen'] }}" alt=""
                                            loading="lazy" referrerpolicy="no-referrer"
                                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                                    </div>
                                @else
                                    <div class="aspect-[16/10] bg-gradient-to-br from-[#ed145b]/10 to-[#db0455]/10 flex items-center justify-center">
                                        <svg class="w-12 h-12 text-[#ed145b]/40" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"></path>
                                        </svg>
                                    </div>
                                @endif
                                <div class="p-4 flex flex-col flex-1">
                                    @if (!empty($campana['fecha_texto']))
                                        <time @if (!empty($campana['fecha_iso'])) datetime="{{ $campana['fecha_iso'] }}" @endif
                                            class="block text-xs text-gray-500 mb-2">{{ $campana['fecha_texto'] }}</time>
                                    @endif
                                    <h3 class="text-sm font-semibold text-gray-800 group-hover:text-[#db0455] line-clamp-3 mb-3 flex-1">
                                        {{ $campana['titulo'] }}
                                    </h3>
                                    <span class="text-xs font-medium text-[#db0455] inline-flex items-center mt-auto">
                                        Ver detalle en gob.pe
                                        <svg class="w-3 h-3 ml-1" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                        </svg>
                                    </span>
                                </div>
                            </a>
                        @endforeach
                    </div>

                    <div class="text-center mt-8 sm:mt-10">
                        <a href="{{ $campanasGobPeFuente }}" target="_blank" rel="noopener noreferrer"
                            class="inline-flex items-center px-6 py-3 bg-[#db0455] text-white font-semibold rounded-lg hover:bg-[#a00340] transition-colors">
                            Ver todas las campañas y eventos
                            <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Columna DERECHA - Facebook (20%) -->
                <div class="lg:col-span-1">
                    <div class="bg-white rounded-lg shadow-xl overflow-hidden">
                        <!-- Cabecera con marca Facebook -->
                        <div class="text-white p-6 text-center" style="background-color:#1565c0;">
                            <svg class="w-12 h-12 mx-auto mb-3" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                            </svg>
                            <h3 class="text-xl font-bold leading-tight">Conéctate con nosotros</h3>
                            <p class="text-sm mt-1">@unamad.oficial</p>
                        </div>

                        <!-- Cuerpo -->
                        <div class="p-5">
                            <p class="text-sm text-gray-700 mb-5 leading-relaxed text-center">
                                Mantente al día con las noticias, eventos y actividades oficiales de la UNAMAD.
                            </p>

                            <ul class="space-y-3 mb-6 text-sm text-gray-700">
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 mr-2 mt-0.5 flex-shrink-0" aria-hidden="true"
                                        style="color:#1877F2;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    Notas de prensa institucionales
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 mr-2 mt-0.5 flex-shrink-0" aria-hidden="true"
                                        style="color:#1877F2;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    Convocatorias y eventos
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 mr-2 mt-0.5 flex-shrink-0" aria-hidden="true"
                                        style="color:#1877F2;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    Comunicados oficiales
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 mr-2 mt-0.5 flex-shrink-0" aria-hidden="true"
                                        style="color:#1877F2;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    Transmisiones en vivo
                                </li>
                            </ul>

                            <a href="https://www.facebook.com/unamad.oficial/?locale=es_LA"
                                target="_blank" rel="noopener noreferrer"
                                class="block w-full text-center text-white font-bold py-3 px-4 rounded-lg shadow-md hover:shadow-lg transition-shadow"
                                style="background-color:#1565c0;">
                                <span class="inline-flex items-center justify-center">
                                    <svg class="w-5 h-5 mr-2" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                                    </svg>
                                    Seguir en Facebook
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif

    <!-- Sección La UNAMAD en cifras con efecto de ola -->
    <!-- Primera sección - Ola superior -->
    <div class="wave-section" aria-hidden="true" style="margin-bottom: -1px;">
        <div style="height: 150px; overflow: hidden;">
            <svg aria-hidden="true" viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                <path d="M-0.00,49.85 C150.00,149.60 349.20,-49.85 500.00,49.85 L507.56,166.82 L-8.23,167.80 Z"
                    style="stroke: none; fill: #db0455;"></path>
            </svg>
        </div>
    </div>

    <!-- Segunda sección - Contenido con fondo amarillo -->
    <section class="bg-[#db0455] py-16">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-2xl sm:text-3xl font-bold text-white mb-2 uppercase">La UNAMAD en cifras</h2>

            <ul class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-4 sm:gap-8 mt-12 list-none m-0 p-0">
                <!-- Cifra 1 - Docentes Investigadores -->
                <li class="text-center">
                    <div class="mb-4">
                        <img width="64" height="64" loading="lazy" src="/img/sectioncifras/investigadores.svg" alt="" class="w-16 h-16 mx-auto">
                    </div>
                    <div class="text-4xl md:text-5xl font-bold text-white mb-2">24</div>
                    <div class="bg-[#0056ac] text-white px-3 py-1 rounded text-sm font-semibold">
                        DOCENTES<br>INVESTIGADORES
                    </div>
                </li>

                <!-- Cifra 2 - Años de Fundación -->
                <li class="text-center">
                    <div class="mb-4">
                        <img width="64" height="64" loading="lazy" src="/img/sectioncifras/fundacion.svg" alt="" class="w-16 h-16 mx-auto">
                    </div>
                    <div class="text-4xl md:text-5xl font-bold text-white mb-2">25</div>
                    <div class="bg-[#0056ac] text-white px-3 py-1 rounded text-sm font-semibold">
                        AÑOS DE<br>FUNDACIÓN<br>INSTITUCIONAL
                    </div>
                </li>

                <!-- Cifra 3 - Estudiantes Matriculados -->
                <li class="text-center">
                    <div class="mb-4">
                        <img width="64" height="64" loading="lazy" src="/img/sectioncifras/estudiantes.svg" alt="" class="w-16 h-16 mx-auto">
                    </div>
                    <div class="text-4xl md:text-5xl font-bold text-white mb-2">3917</div>
                    <div class="bg-[#0056ac] text-white px-3 py-1 rounded text-sm font-semibold">
                        ESTUDIANTES<br>MATRICULADOS
                    </div>
                </li>

                <!-- Cifra 4 - Escuelas Profesionales -->
                <li class="text-center">
                    <div class="mb-4">
                        <img width="64" height="64" loading="lazy" src="/img/sectioncifras/escuelas.svg" alt="" class="w-16 h-16 mx-auto">
                    </div>
                    <div class="text-4xl md:text-5xl font-bold text-white mb-2">10</div>
                    <div class="bg-[#0056ac] text-white px-3 py-1 rounded text-sm font-semibold">
                        ESCUELAS<br>PROFESIONALES
                    </div>
                </li>

                <!-- Cifra 5 - Convenios Institucionales -->
                <li class="text-center">
                    <div class="mb-4">
                        <img width="64" height="64" loading="lazy" src="/img/sectioncifras/convenio.svg" alt="" class="w-16 h-16 mx-auto">
                    </div>
                    <div class="text-4xl md:text-5xl font-bold text-white mb-2">139</div>
                    <div class="bg-[#0056ac] text-white px-3 py-1 rounded text-sm font-semibold">
                        CONVENIOS<br>INSTITUCIONALES
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <!-- Tercera sección - Ola inferior -->
    <div class="wave-section" aria-hidden="true" style="margin-top: -1px;">
        <div style="height: 150px; overflow: hidden;">
            <svg aria-hidden="true" viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                <path d="M-0.00,49.85 C150.00,149.60 271.37,-49.85 500.00,49.85 L500.00,0.00 L-0.00,0.00 Z"
                    style="stroke: none; fill: #db0455;"></path>
            </svg>
        </div>
    </div>

    <!-- Sección Otros enlaces -->
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-4">
            <p class="text-sm font-medium text-gray-600 text-center mb-2">También te puede interesar</p>
            <h2 class="text-2xl sm:text-3xl font-bold text-center text-[#db0455]">Otros enlaces</h2>
            <div class="w-20 h-1 mx-auto rounded-full mt-4 mb-8 sm:mb-12" style="background:linear-gradient(to right,#ed145b,#db0455);"></div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6">
                <!-- Directorio de Funcionarios -->
                <a href="https://www.gob.pe/institucion/unamad/funcionarios" target="_blank" rel="noopener noreferrer"
                    class="block bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow duration-300 group">
                    <div class="flex items-center">
                        <div class="bg-blue-100 rounded-lg p-3 mr-4 group-hover:bg-blue-200 transition-colors">
                            <svg class="w-6 h-6 text-blue-600" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800 group-hover:text-blue-600">Directorio de
                                Funcionarios</h3>
                            <p class="text-gray-600 text-sm">Datos de contacto e información del personal de la UNAMAD</p>
                        </div>
                    </div>
                </a>

                <!-- Repositorio Institucional -->
                <a href="https://repositorio.unamad.edu.pe/" target="_blank" rel="noopener noreferrer"
                    class="block bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow duration-300 group">
                    <div class="flex items-center">
                        <div class="bg-green-100 rounded-lg p-3 mr-4 group-hover:bg-green-200 transition-colors">
                            <svg class="w-6 h-6 text-green-600" aria-hidden="true" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800 group-hover:text-green-600">Repositorio
                                Institucional</h3>
                            <p class="text-gray-600 text-sm">Información intelectual producida y compilada por la comunidad
                                universitaria</p>
                        </div>
                    </div>
                </a>

                <!-- Convocatorias (tarjeta amarilla) -->
                <a href="https://www.gob.pe/institucion/unamad/informes-publicaciones/tipos/80-convocatorias-de-trabajo"
                    target="_blank" rel="noopener noreferrer"
                    class="block bg-yellow-400 rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow duration-300 group">
                    <div class="flex items-center">
                        <div class="bg-yellow-600 rounded-lg p-3 mr-4 group-hover:bg-yellow-700 transition-colors">
                            <svg class="w-6 h-6 text-white" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800 group-hover:text-gray-900">Convocatorias</h3>
                            <p class="text-gray-700 text-sm">Convocatorias a procesos de selección de personal
                                administrativo y docente</p>
                        </div>
                    </div>
                </a>

                <!-- Mesa de Partes Virtual -->
                <a href="https://sgd.unamad.edu.pe/mesa-de-partes" target="_blank" rel="noopener noreferrer"
                    class="block bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow duration-300 group">
                    <div class="flex items-center">
                        <div class="bg-purple-100 rounded-lg p-3 mr-4 group-hover:bg-purple-200 transition-colors">
                            <svg class="w-6 h-6 text-purple-600" aria-hidden="true" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800 group-hover:text-purple-600">Mesa de Partes
                                Virtual</h3>
                        </div>
                    </div>
                </a>

                <!-- Ruta GPS Bus -->
                <a href="{{ url('proyectos/bus') }}"
                    class="block bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow duration-300 group">
                    <div class="flex items-center">
                        <div class="bg-orange-100 rounded-lg p-3 mr-4 group-hover:bg-orange-200 transition-colors">
                            <svg class="w-6 h-6 text-orange-600" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M18 11H6V6h12m-1.5 11a1.5 1.5 0 0 1-1.5-1.5 1.5 1.5 0 0 1 1.5-1.5 1.5 1.5 0 0 1 1.5 1.5 1.5 1.5 0 0 1-1.5 1.5m-9 0A1.5 1.5 0 0 1 7 15.5 1.5 1.5 0 0 1 8.5 14 1.5 1.5 0 0 1 10 15.5 1.5 1.5 0 0 1 8.5 17M4 16c0 .88.39 1.67 1 2.22V20a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1v-1h8v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1v-1.78c.61-.55 1-1.34 1-2.22V6c0-3.5-3.58-4-8-4s-8 .5-8 4v10Z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800 group-hover:text-orange-600">Ruta - GPS Bus</h3>
                        </div>
                    </div>
                </a>

                <!-- Observatorio Parque Científico -->
                <a href="{{ url('proyectos/aldea') }}"
                    class="block bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow duration-300 group">
                    <div class="flex items-center">
                        <div class="bg-indigo-100 rounded-lg p-3 mr-4 group-hover:bg-indigo-200 transition-colors">
                            <svg class="w-6 h-6 text-indigo-600" aria-hidden="true" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 7.172V5L8 4z">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800 group-hover:text-indigo-600">Observatorio Parque
                                Científico</h3>
                        </div>
                    </div>
                </a>

                <!-- Directorio Telefónico Institucional -->
                <a href="https://sgd.unamad.edu.pe/consultas/directorio" target="_blank" rel="noopener noreferrer"
                    class="block bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow duration-300 group">
                    <div class="flex items-center">
                        <div class="bg-teal-100 rounded-lg p-3 mr-4 group-hover:bg-teal-200 transition-colors">
                            <svg class="w-6 h-6 text-teal-600" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800 group-hover:text-teal-600">Directorio Telefónico
                                Institucional</h3>
                        </div>
                    </div>
                </a>

                <!-- Videos de Capacitación SERVIR -->
                <a href="{{ url('capacitaciones-servir') }}"
                    class="block bg-gradient-to-r from-red-600 to-red-700 rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow duration-300 group">
                    <div class="flex items-center">
                        <div class="bg-white/20 rounded-lg p-3 mr-4 group-hover:bg-white/30 transition-colors">
                            <svg class="w-6 h-6 text-white" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M8 5v14l11-7z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-white">Videos de Capacitación SERVIR</h3>
                            <p class="text-white text-sm">Material audiovisual de capacitación para servidores públicos</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Sección Actividades -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl sm:text-3xl font-bold text-center text-gray-800">Actividades</h2>
            <div class="w-20 h-1 mx-auto rounded-full mt-4 mb-8 sm:mb-12" style="background:linear-gradient(to right,#ed145b,#db0455);"></div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 sm:gap-8">
                <!-- Columna Izquierda - Video YouTube (50%) -->
                <div class="w-full">
                    <div class="aspect-w-16 aspect-h-9 rounded-lg overflow-hidden shadow-xl">
                        <iframe data-src="https://www.youtube.com/embed/videoseries?list=PLne5X_hwjWd5pL7WveLwUSqbMplFft-II"
                            title="YouTube video playlist" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen class="w-full h-full youtube-lazy" loading="lazy" style="min-height: 250px;">
                        </iframe>
                    </div>
                </div>

                <!-- Columna Derecha - Enlaces y Redes Sociales (50%) -->
                <div class="w-full">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <!-- Sub-columna 1: Notas de Prensa, Facebook, Instagram -->
                        <div class="space-y-4">
                            <!-- Notas de Prensa -->
                            <a href="https://www.gob.pe/institucion/unamad/noticias" target="_blank" rel="noopener noreferrer"
                                class="block bg-red-600 hover:bg-red-700 rounded-lg shadow-lg p-6 transition-all duration-300">
                                <div class="flex items-center text-white">
                                    <div class="mr-4">
                                        <svg class="w-8 h-8" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="text-lg font-bold">Notas de Prensa</h3>
                                        <p class="text-sm">Listado de las últimas noticias publicadas en la
                                            UNAMAD</p>
                                    </div>
                                </div>
                            </a>

                            <!-- Facebook -->
                            <a href="https://www.facebook.com/unamad.oficial/" target="_blank" rel="noopener noreferrer"
                                class="block bg-blue-600 hover:bg-blue-700 rounded-lg shadow-lg p-6 transition-all duration-300">
                                <div class="flex items-center text-white">
                                    <div class="mr-4">
                                        <svg class="w-8 h-8" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="text-lg font-bold">Facebook</h3>
                                        <p class="text-sm">Página oficial de la UNAMAD en Facebook</p>
                                    </div>
                                </div>
                            </a>

                            <!-- Instagram -->
                            <a href="https://www.instagram.com/unamad_oficial/" target="_blank" rel="noopener noreferrer"
                                class="block bg-gradient-to-r from-purple-700 via-pink-700 to-orange-700 hover:from-purple-800 hover:via-pink-800 hover:to-orange-800 rounded-lg shadow-lg p-6 transition-all duration-300">
                                <div class="flex items-center text-white">
                                    <div class="mr-4">
                                        <svg class="w-8 h-8" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zM5.838 12a6.162 6.162 0 1112.324 0 6.162 6.162 0 01-12.324 0zM12 16a4 4 0 110-8 4 4 0 010 8zm4.965-10.405a1.44 1.44 0 112.881.001 1.44 1.44 0 01-2.881-.001z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="text-lg font-bold">Instagram</h3>
                                        <p class="text-sm">Cuenta oficial de la UNAMAD en Instagram</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Sub-columna 2: Boletín Digital -->
                        <div>
                            <!-- Boletín Digital UNAMAD AL DÍA - Estructura especial -->
                            <div class="space-y-0">
                                <!-- Imagen superior clickeable -->
                                <a href="https://heyzine.com/flip-book/ec58c00b66.html" target="_blank" rel="noopener noreferrer" class="block" tabindex="-1" aria-hidden="true">
                                    <img loading="lazy" src="{{ asset('img/boletin/boletin2025.JPG') }}" alt="Portada del Boletín Digital UNAMAD al Día 2025: Felices Bodas de Plata, 25 años impulsando el desarrollo en la Amazonía"
                                        class="w-full rounded-t-lg shadow-lg hover:opacity-95 transition-opacity duration-300">
                                </a>
                                <!-- Tarjeta inferior -->
                                <a href="https://heyzine.com/flip-book/ec58c00b66.html" target="_blank" rel="noopener noreferrer"
                                    class="block bg-red-600 hover:bg-red-700 rounded-b-lg shadow-lg p-6 transition-all duration-300">
                                    <div class="text-white">
                                        <h3 class="text-lg font-bold mb-2">Boletín Digital "UNAMAD AL DÍA"</h3>
                                        <p class="text-sm">¡FELICES BODAS DE PLATA UNAMAD!
                                            25 AÑOS IMPULSANDO EL DESARROLLO EN LA AMAZONÍA
                                            SE CELEBRÓ XXV ANIVERSARIO
                                            CON SESIÓN SOLEMNE E INVITADOS DE HONOR</p>
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
            <h2 class="text-2xl sm:text-3xl font-bold text-center text-[#db0455]">Enlaces Externos</h2>
            <div class="w-20 h-1 mx-auto rounded-full mt-4 mb-8 sm:mb-12" style="background:linear-gradient(to right,#ed145b,#db0455);"></div>

            <!-- Slider Container -->
            <div class="relative overflow-hidden" role="region" aria-roledescription="carrusel" aria-label="Logotipos de entidades externas">
                <ul class="enlaces-slider flex list-none m-0 p-0" id="enlacesSlider">
                    <!-- Items individuales para desplazamiento continuo -->
                    <li class="flex-shrink-0"><a href="https://www.sunedu.gob.pe/" target="_blank" rel="noopener noreferrer"
                        class="block p-6 mx-4 text-center group">
                        <img width="160" height="112" loading="lazy" src="/img/enlacesexternos/logo-sunedu.png" alt=""
                            class="w-28 h-20 sm:w-40 sm:h-28 object-contain mx-auto mb-3 group-hover:scale-110 transition-transform duration-300 filter grayscale hover:grayscale-0">
                        <h3
                            class="text-sm font-semibold text-gray-700 group-hover:text-gray-900 transition-colors duration-300">
                            SUNEDU</h3>
                    </a></li>
                    <li class="flex-shrink-0"><a href="https://www.pronabec.gob.pe/" target="_blank" rel="noopener noreferrer"
                        class="block p-6 mx-4 text-center group">
                        <img width="160" height="112" loading="lazy" src="/img/enlacesexternos/logoPronabec_hd.png" alt=""
                            class="w-28 h-20 sm:w-40 sm:h-28 object-contain mx-auto mb-3 group-hover:scale-110 transition-transform duration-300 filter grayscale hover:grayscale-0">
                        <h3
                            class="text-sm font-semibold text-gray-700 group-hover:text-gray-900 transition-colors duration-300">
                            PRONABEC</h3>
                    </a></li>
                    <li class="flex-shrink-0"><a href="https://www.prociencia.gob.pe/" target="_blank" rel="noopener noreferrer"
                        class="block p-6 mx-4 text-center group">
                        <img width="160" height="112" loading="lazy" src="/img/enlacesexternos/prociencia.png" alt=""
                            class="w-28 h-20 sm:w-40 sm:h-28 object-contain mx-auto mb-3 group-hover:scale-110 transition-transform duration-300 filter grayscale hover:grayscale-0">
                        <h3
                            class="text-sm font-semibold text-gray-700 group-hover:text-gray-900 transition-colors duration-300">
                            PROCIENCIA</h3>
                    </a></li>
                    <li class="flex-shrink-0"><a href="https://portal.rnssc.gob.pe/" target="_blank" rel="noopener noreferrer"
                        class="block p-6 mx-4 text-center group">
                        <img width="160" height="112" loading="lazy" src="/img/enlacesexternos/rnssc.png" alt=""
                            class="w-28 h-20 sm:w-40 sm:h-28 object-contain mx-auto mb-3 group-hover:scale-110 transition-transform duration-300 filter grayscale hover:grayscale-0">
                        <h3
                            class="text-sm font-semibold text-gray-700 group-hover:text-gray-900 transition-colors duration-300">
                            RNSSC</h3>
                    </a></li>
                    <li class="flex-shrink-0"><a href="https://www.rpu.edu.pe/" target="_blank" rel="noopener noreferrer" class="block p-6 mx-4 text-center group">
                        <img width="160" height="112" loading="lazy" src="/img/enlacesexternos/rpu.png" alt=""
                            class="w-28 h-20 sm:w-40 sm:h-28 object-contain mx-auto mb-3 group-hover:scale-110 transition-transform duration-300 filter grayscale hover:grayscale-0">
                        <h3
                            class="text-sm font-semibold text-gray-700 group-hover:text-gray-900 transition-colors duration-300">
                            RPU</h3>
                    </a></li>
                    <li class="flex-shrink-0"><a href="https://www.scopus.com/" target="_blank" rel="noopener noreferrer" class="block p-6 mx-4 text-center group">
                        <img width="160" height="112" loading="lazy" src="/img/enlacesexternos/scopus.png" alt=""
                            class="w-28 h-20 sm:w-40 sm:h-28 object-contain mx-auto mb-3 group-hover:scale-110 transition-transform duration-300 filter grayscale hover:grayscale-0">
                        <h3
                            class="text-sm font-semibold text-gray-700 group-hover:text-gray-900 transition-colors duration-300">
                            SCOPUS</h3>
                    </a></li>

                    <!-- Duplicado para bucle infinito -->
                    <li class="flex-shrink-0" aria-hidden="true"><a tabindex="-1" href="https://www.sunedu.gob.pe/" target="_blank" rel="noopener noreferrer"
                        class="block p-6 mx-4 text-center group">
                        <img width="160" height="112" loading="lazy" src="/img/enlacesexternos/logo-sunedu.png" alt=""
                            class="w-28 h-20 sm:w-40 sm:h-28 object-contain mx-auto mb-3 group-hover:scale-110 transition-transform duration-300 filter grayscale hover:grayscale-0">
                        <h3
                            class="text-sm font-semibold text-gray-700 group-hover:text-gray-900 transition-colors duration-300">
                            SUNEDU</h3>
                    </a></li>
                    <li class="flex-shrink-0" aria-hidden="true"><a tabindex="-1" href="https://www.pronabec.gob.pe/" target="_blank" rel="noopener noreferrer"
                        class="block p-6 mx-4 text-center group">
                        <img width="160" height="112" loading="lazy" src="/img/enlacesexternos/logoPronabec_hd.png" alt=""
                            class="w-28 h-20 sm:w-40 sm:h-28 object-contain mx-auto mb-3 group-hover:scale-110 transition-transform duration-300 filter grayscale hover:grayscale-0">
                        <h3
                            class="text-sm font-semibold text-gray-700 group-hover:text-gray-900 transition-colors duration-300">
                            PRONABEC</h3>
                    </a></li>
                    <li class="flex-shrink-0" aria-hidden="true"><a tabindex="-1" href="https://www.prociencia.gob.pe/" target="_blank" rel="noopener noreferrer"
                        class="block p-6 mx-4 text-center group">
                        <img width="160" height="112" loading="lazy" src="/img/enlacesexternos/prociencia.png" alt=""
                            class="w-28 h-20 sm:w-40 sm:h-28 object-contain mx-auto mb-3 group-hover:scale-110 transition-transform duration-300 filter grayscale hover:grayscale-0">
                        <h3
                            class="text-sm font-semibold text-gray-700 group-hover:text-gray-900 transition-colors duration-300">
                            PROCIENCIA</h3>
                    </a></li>
                    <li class="flex-shrink-0" aria-hidden="true"><a tabindex="-1" href="https://portal.rnssc.gob.pe/" target="_blank" rel="noopener noreferrer"
                        class="block p-6 mx-4 text-center group">
                        <img width="160" height="112" loading="lazy" src="/img/enlacesexternos/rnssc.png" alt=""
                            class="w-28 h-20 sm:w-40 sm:h-28 object-contain mx-auto mb-3 group-hover:scale-110 transition-transform duration-300 filter grayscale hover:grayscale-0">
                        <h3
                            class="text-sm font-semibold text-gray-700 group-hover:text-gray-900 transition-colors duration-300">
                            RNSSC</h3>
                    </a></li>
                    <li class="flex-shrink-0" aria-hidden="true"><a tabindex="-1" href="https://www.rpu.edu.pe/" target="_blank" rel="noopener noreferrer" class="block p-6 mx-4 text-center group">
                        <img width="160" height="112" loading="lazy" src="/img/enlacesexternos/rpu.png" alt=""
                            class="w-28 h-20 sm:w-40 sm:h-28 object-contain mx-auto mb-3 group-hover:scale-110 transition-transform duration-300 filter grayscale hover:grayscale-0">
                        <h3
                            class="text-sm font-semibold text-gray-700 group-hover:text-gray-900 transition-colors duration-300">
                            RPU</h3>
                    </a></li>
                    <li class="flex-shrink-0" aria-hidden="true"><a tabindex="-1" href="https://www.scopus.com/" target="_blank" rel="noopener noreferrer" class="block p-6 mx-4 text-center group">
                        <img width="160" height="112" loading="lazy" src="/img/enlacesexternos/scopus.png" alt=""
                            class="w-28 h-20 sm:w-40 sm:h-28 object-contain mx-auto mb-3 group-hover:scale-110 transition-transform duration-300 filter grayscale hover:grayscale-0">
                        <h3
                            class="text-sm font-semibold text-gray-700 group-hover:text-gray-900 transition-colors duration-300">
                            SCOPUS</h3>
                    </a></li>
                </ul>
            </div>
            <div class="text-center mt-6">
                <button type="button" id="enlaces-pause" onclick="toggleEnlacesSlider()" aria-pressed="false" aria-controls="enlacesSlider"
                    class="inline-flex items-center gap-2 px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 transition-colors">
                    <svg id="enlaces-pause-icon" class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24"><path d="M6 19h4V5H6v14zm8-14v14h4V5h-4z" /></svg>
                    <svg id="enlaces-play-icon" class="w-4 h-4 hidden" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z" /></svg>
                    <span id="enlaces-pause-text">Pausar el desplazamiento</span>
                </button>
            </div>
        </div>
    </section>

    <!-- Modal Flotante de Anuncios -->
    <div id="modal-anuncios"
        class="fixed inset-0 bg-transparent bg-opacity-50 z-[9999] hidden items-center justify-center p-4 backdrop-blur-sm"
        role="dialog" aria-modal="true" aria-labelledby="modal-titulo">
        <div class="bg-white rounded-2xl sm:rounded-3xl max-w-2xl w-full max-h-[95vh] overflow-hidden shadow-2xl transform transition-all duration-500 scale-95 animate-pulse-glow"
            id="modal-contenido">

            <!-- Header del Modal con navegación -->
            <div class="relative bg-gradient-to-r from-[#db0455] to-[#a00340] text-white p-6">
                <!-- Botón Cerrar -->
                <button type="button" id="modal-cerrar" onclick="cerrarModalAnuncios()" aria-label="Cerrar anuncios"
                    class="absolute top-4 right-4 w-12 h-12 rounded-full bg-white/20 hover:bg-white/30 flex items-center justify-center transition-all duration-300 hover:scale-110 group">
                    <svg class="w-6 h-6 group-hover:rotate-90 transition-transform duration-300" aria-hidden="true" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>

                <!-- Controles de navegación -->
                <div id="controles-navegacion" class="absolute top-4 left-4 flex items-center space-x-2">
                    <button type="button" onclick="anuncioAnterior()" id="btn-anterior" aria-label="Anuncio anterior"
                        class="w-10 h-10 rounded-full bg-white/20 hover:bg-white/30 flex items-center justify-center transition-all duration-300 hover:scale-110">
                        <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" >
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                            </path>
                        </svg>
                    </button>
                    <button type="button" onclick="anuncioSiguiente()" id="btn-siguiente" aria-label="Anuncio siguiente"
                        class="w-10 h-10 rounded-full bg-white/20 hover:bg-white/30 flex items-center justify-center transition-all duration-300 hover:scale-110">
                        <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" >
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                            </path>
                        </svg>
                    </button>

                    <!-- Indicador de posición -->
                    <div class="text-white text-sm font-medium ml-2" aria-live="polite">
                        <span class="sr-only">Anuncio </span><span id="anuncio-actual">1</span> <span aria-hidden="true">/</span><span class="sr-only">de</span> <span id="total-anuncios">1</span>
                    </div>
                </div>

                <!-- Información del anuncio -->
                <div class="mt-8">
                    <div id="modal-categoria"
                        class="inline-block px-3 py-1 bg-white/20 rounded-full text-sm font-bold mb-3"></div>
                    <h2 id="modal-titulo" class="text-2xl font-bold leading-tight mb-2 focus:outline-none" tabindex="-1"></h2>
                    <div class="flex items-center space-x-4 text-white text-sm">
                        <div class="flex items-center">
                            <svg class="w-4 h-4 mr-1" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                            <span id="modal-autor"></span>
                        </div>
                        <div class="flex items-center">
                            <svg class="w-4 h-4 mr-1" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                </path>
                            </svg>
                            <span id="modal-fecha"></span>
                        </div>
                        <div class="flex items-center">
                            <svg class="w-4 h-4 mr-1" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                </path>
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
                    <button type="button" id="modal-imagen-btn" class="block w-full rounded-xl focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-[#db0455] focus-visible:ring-offset-2" aria-label="Ampliar la imagen principal del anuncio">
                        <img id="modal-imagen" class="w-full max-h-80 object-cover rounded-xl shadow-lg" alt="Imagen principal del anuncio">
                    </button>
                </div>

                <!-- Descripción -->
                <div class="mb-6">
                    <div id="modal-descripcion" class="text-gray-700 leading-relaxed text-base"></div>
                </div>

                <!-- Imágenes adicionales -->
                <div id="modal-imagenes-adicionales-container" class="mb-6 hidden">
                    <h3 class="text-lg font-semibold text-gray-800 mb-3 flex items-center">
                        <span aria-hidden="true">🖼️</span> Más imágenes
                    </h3>
                    <div id="modal-imagenes-adicionales" class="grid grid-cols-2 gap-3"></div>
                </div>

                <!-- Enlaces relacionados -->
                <div id="modal-enlaces-container" class="hidden">
                    <h3 class="text-lg font-semibold text-gray-800 mb-3 flex items-center">
                        <span aria-hidden="true">🔗</span> Enlaces relacionados
                    </h3>
                    <div id="modal-enlaces" class="space-y-2"></div>
                </div>
            </div>

            <!-- Footer -->
            <div class="bg-gray-50 px-6 py-4 flex justify-between items-center border-t">
                <div class="text-sm text-gray-500" id="modal-tiempo"></div>
                <div class="flex items-center space-x-3">
                    <button type="button" onclick="cerrarModalAnuncios()"
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

            0%,
            100% {
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
    <div id="lightbox-modal" class="fixed inset-0 bg-black/90 z-[10000] hidden items-center justify-center p-4"
        onclick="cerrarLightbox()" role="dialog" aria-modal="true" aria-label="Visualización de imagen">
        <div class="relative max-w-7xl max-h-full w-full h-full flex items-center justify-center"
            onclick="event.stopPropagation()">
            <!-- Botón cerrar -->
            <button type="button" id="lightbox-cerrar" onclick="cerrarLightbox()" aria-label="Cerrar imagen"
                class="absolute top-4 right-4 w-12 h-12 rounded-full bg-black/50 hover:bg-black/70 text-white flex items-center justify-center transition-all duration-300 hover:scale-110 z-10">
                <svg class="w-6 h-6" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" >
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
            </button>

            <!-- Imagen en tamaño completo -->
            <img id="lightbox-imagen" class="max-w-full max-h-full object-contain rounded-lg shadow-2xl" alt="Imagen ampliada del anuncio"
                onclick="event.stopPropagation()">

            <!-- Botones de navegación (si hay múltiples imágenes) -->
            <button type="button" id="lightbox-prev" onclick="imagenAnteriorLightbox()" aria-label="Imagen anterior"
                class="absolute left-4 top-1/2 transform -translate-y-1/2 w-12 h-12 rounded-full bg-black/50 hover:bg-black/70 text-white flex items-center justify-center transition-all duration-300 hover:scale-110 hidden">
                <svg class="w-6 h-6" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" >
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
            </button>

            <button type="button" id="lightbox-next" onclick="imagenSiguienteLightbox()" aria-label="Imagen siguiente"
                class="absolute right-4 top-1/2 transform -translate-y-1/2 w-12 h-12 rounded-full bg-black/50 hover:bg-black/70 text-white flex items-center justify-center transition-all duration-300 hover:scale-110 hidden">
                <svg class="w-6 h-6" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" >
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </button>

            <!-- Indicador de imagen actual -->
            <div id="lightbox-counter" aria-live="polite"
                class="absolute bottom-4 left-1/2 transform -translate-x-1/2 bg-black/50 text-white px-4 py-2 rounded-full text-sm hidden">
                <span class="sr-only">Imagen </span><span id="imagen-actual-lightbox">1</span> <span aria-hidden="true">/</span><span class="sr-only">de</span> <span id="total-imagenes-lightbox">1</span>
            </div>
        </div>
    </div>

    <!-- Reproductor de Audio Himno UNAMAD - Desktop -->
    <div id="audioPlayer"
        class="fixed bottom-4 left-4 z-50 bg-white rounded-2xl shadow-2xl p-4 items-center gap-4 border border-gray-200 transition-all duration-500 hover:shadow-3xl hidden lg:flex"
        role="region" aria-label="Reproductor de audio - Himno UNAMAD"
        style="max-width: min(380px, calc(100vw - 2rem));">
        <!-- Icono de música animado -->
        <div class="relative">
            <div
                class="w-20 h-20 bg-gradient-to-br from-[#db0455] to-[#a00340] rounded-full flex items-center justify-center shadow-lg">
                <svg id="musicIcon" class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M12 3v10.55c-.59-.34-1.27-.55-2-.55-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4V7h4V3h-6z" />
                </svg>
                <!-- Ondas de sonido animadas (ocultas por defecto) -->
                <div id="soundWaves" class="absolute inset-0 pointer-events-none hidden">
                    <div class="absolute inset-0 rounded-full border-2 border-[#db0455] opacity-20 animate-ping"></div>
                    <div class="absolute inset-0 rounded-full border-2 border-[#db0455] opacity-20 animate-ping"
                        style="animation-delay: 0.5s;"></div>
                    <div class="absolute inset-0 rounded-full border-2 border-[#db0455] opacity-20 animate-ping"
                        style="animation-delay: 1s;"></div>
                </div>
            </div>
        </div>

        <!-- Información y controles -->
        <div class="flex-1">
            <div class="flex items-center justify-between mb-3">
                <div>
                    <h2 class="text-base font-bold text-gray-800">Himno UNAMAD</h2>
                    <p class="text-sm text-gray-500">Universidad Nacional Amazónica de Madre de Dios</p>
                </div>
                <!-- Botón de minimizar -->
                <button type="button" onclick="togglePlayerSize()" class="text-gray-600 hover:text-gray-800 transition-colors" aria-label="Minimizar reproductor" aria-expanded="true" aria-controls="audioPlayer">
                    <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" >
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
            </div>

            <!-- Barra de progreso -->
            <div id="progressSlider" class="relative w-full h-2 bg-gray-200 rounded-full mb-4 cursor-pointer focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-[#db0455] focus-visible:ring-offset-2" onclick="seekAudio(event)" onkeydown="teclasProgreso(event)" role="slider" aria-label="Progreso del himno" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" aria-valuetext="0:00 de 0:00" tabindex="0">
                <div id="progressBar"
                    class="absolute h-full bg-gradient-to-r from-[#db0455] to-[#a00340] rounded-full transition-all duration-300"
                    style="width: 0%"></div>
                <div id="progressHandle"
                    class="absolute top-1/2 transform -translate-y-1/2 w-4 h-4 bg-[#db0455] rounded-full shadow-md transition-all duration-300"
                    style="left: 0%"></div>
            </div>

            <!-- Controles -->
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <!-- Botón Play/Pause -->
                    <button type="button" id="playPauseBtn" onclick="togglePlay()"
                        class="bg-gradient-to-r from-[#db0455] to-[#a00340] text-white rounded-full p-2.5 hover:shadow-lg transition-all duration-300 hover:scale-110"
                        aria-label="Reproducir himno">
                        <svg id="playIcon" class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M8 5v14l11-7z" />
                        </svg>
                        <svg id="pauseIcon" class="w-6 h-6 hidden" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M6 19h4V5H6v14zm8-14v14h4V5h-4z" />
                        </svg>
                    </button>

                    <!-- Control de volumen -->
                    <div class="flex items-center gap-2">
                        <button type="button" id="muteBtn" onclick="toggleMute()" class="text-gray-600 hover:text-[#db0455] transition-colors" aria-label="Silenciar" aria-pressed="false">
                            <svg id="volumeIcon" class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path
                                    d="M3 9v6h4l5 5V4L7 9H3zm13.5 3c0-1.77-1.02-3.29-2.5-4.03v8.05c1.48-.73 2.5-2.25 2.5-4.02zM14 3.23v2.06c2.89.86 5 3.54 5 6.71s-2.11 5.85-5 6.71v2.06c4.01-.91 7-4.49 7-8.77s-2.99-7.86-7-8.77z" />
                            </svg>
                            <svg id="muteIcon" class="w-6 h-6 hidden" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path
                                    d="M16.5 12c0-1.77-1.02-3.29-2.5-4.03v2.21l2.45 2.45c.03-.2.05-.41.05-.63zm2.5 0c0 .94-.2 1.82-.54 2.64l1.51 1.51C20.63 14.91 21 13.5 21 12c0-4.28-2.99-7.86-7-8.77v2.06c2.89.86 5 3.54 5 6.71zM4.27 3L3 4.27 7.73 9H3v6h4l5 5v-6.73l4.25 4.25c-.67.52-1.42.93-2.25 1.18v2.06c1.38-.31 2.63-.95 3.69-1.81L19.73 21 21 19.73l-9-9L4.27 3zM12 4L9.91 6.09 12 8.18V4z" />
                            </svg>
                        </button>
                        <input type="range" id="volumeSlider" min="0" max="100" value="70"
                            onchange="changeVolume(this.value)" oninput="changeVolume(this.value)"
                            aria-label="Volumen"
                            class="w-24 h-1.5 bg-gray-200 rounded-lg appearance-none cursor-pointer slider">
                    </div>
                </div>

                <!-- Tiempo -->
                <div class="text-sm text-gray-500 font-medium">
                    <span id="currentTime">0:00</span> <span aria-hidden="true">/</span><span class="sr-only">de</span> <span id="duration">0:00</span>
                </div>
            </div>
        </div>

        <!-- Audio element (oculto) -->
        <audio id="himnoAudio" src="{{ asset('audio/HimnoUnamad.mp3') }}" preload="metadata"></audio>
    </div>

    <!-- Reproductor minimizado (escritorio): permite restaurar el reproductor completo -->
    <div id="audioPlayerMini" class="fixed bottom-4 left-4 z-50 hidden">
        <button type="button" onclick="togglePlayerSize()" aria-label="Mostrar el reproductor del himno" aria-expanded="false" aria-controls="audioPlayer"
            class="bg-gradient-to-br from-[#db0455] to-[#a00340] text-white rounded-full p-3 shadow-lg hover:shadow-xl transition-shadow">
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path d="M12 3v10.55c-.59-.34-1.27-.55-2-.55-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4V7h4V3h-6z" />
            </svg>
        </button>
    </div>

    <!-- Reproductor Móvil - Solo botón flotante -->
    <div id="audioPlayerMobile" class="fixed bottom-4 left-4 z-50 lg:hidden" role="region" aria-label="Reproductor de audio móvil">
        <button type="button" id="playPauseBtnMobile" onclick="togglePlayMobile()"
            aria-label="Reproducir himno UNAMAD"
            class="relative bg-gradient-to-br from-[#db0455] to-[#a00340] text-white rounded-full p-3 shadow-lg active:scale-95 transition-transform">
            <!-- Ondas de sonido móvil -->
            <div id="soundWavesMobile" class="absolute inset-0 pointer-events-none hidden">
                <div class="absolute inset-0 rounded-full border-2 border-[#db0455] opacity-30 animate-ping"></div>
                <div class="absolute inset-0 rounded-full border-2 border-[#db0455] opacity-20 animate-ping"
                    style="animation-delay: 0.5s;"></div>
            </div>
            <svg id="playIconMobile" class="w-6 h-6 relative z-10" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path d="M8 5v14l11-7z" />
            </svg>
            <svg id="pauseIconMobile" class="w-6 h-6 relative z-10 hidden" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path d="M6 19h4V5H6v14zm8-14v14h4V5h-4z" />
            </svg>
        </button>
        <!-- Mini info móvil -->
        <div id="mobileInfo" role="status"
            class="absolute bottom-full left-0 mb-2 bg-white rounded-lg shadow-lg p-2 text-xs hidden">
            <span class="font-bold text-[#db0455]">Himno UNAMAD</span>
        </div>
    </div>

    <script>
        let audio = document.getElementById('himnoAudio');
        let isPlaying = false;
        let progressBar = document.getElementById('progressBar');
        let progressHandle = document.getElementById('progressHandle');
        let currentTimeSpan = document.getElementById('currentTime');
        let durationSpan = document.getElementById('duration');
        let playIcon = document.getElementById('playIcon');
        let pauseIcon = document.getElementById('pauseIcon');
        let playIconMobile = document.getElementById('playIconMobile');
        let pauseIconMobile = document.getElementById('pauseIconMobile');
        let volumeIcon = document.getElementById('volumeIcon');
        let muteIcon = document.getElementById('muteIcon');
        let soundWaves = document.getElementById('soundWaves');
        let soundWavesMobile = document.getElementById('soundWavesMobile');
        let musicIcon = document.getElementById('musicIcon');
        let volumeSlider = document.getElementById('volumeSlider');
        let audioPlayer = document.getElementById('audioPlayer');
        let audioPlayerMini = document.getElementById('audioPlayerMini');
        let mobileInfo = document.getElementById('mobileInfo');
        let progressSlider = document.getElementById('progressSlider');
        let playPauseBtn = document.getElementById('playPauseBtn');
        let playPauseBtnMobile = document.getElementById('playPauseBtnMobile');
        let muteBtn = document.getElementById('muteBtn');

        // Sincroniza el nombre accesible de los botones de reproducción con el estado real (WCAG 4.1.2)
        function actualizarEstadoReproduccion() {
            if (playPauseBtn) playPauseBtn.setAttribute('aria-label', isPlaying ? 'Pausar himno' : 'Reproducir himno');
            if (playPauseBtnMobile) playPauseBtnMobile.setAttribute('aria-label', isPlaying ? 'Pausar himno UNAMAD' : 'Reproducir himno UNAMAD');
        }

        // Detectar zoom del navegador y cambiar a modo compacto (solo icono)
        function detectZoomAndAdapt() {
            const zoomLevel = Math.round(window.devicePixelRatio * 100);
            const viewportWidth = window.innerWidth;

            // Si el zoom es >= 150% O el viewport efectivo es <= 800px, modo compacto
            if (zoomLevel >= 150 || viewportWidth <= 800) {
                // Ocultar reproductor completo desktop
                if (audioPlayer) {
                    audioPlayer.classList.add('!hidden');
                    audioPlayer.classList.remove('lg:flex');
                }
                // Mostrar solo el botón compacto (móvil) en todas las resoluciones
                if (document.getElementById('audioPlayerMobile')) {
                    document.getElementById('audioPlayerMobile').classList.remove('lg:hidden');
                }
            } else {
                // Restaurar comportamiento normal
                if (audioPlayer) {
                    audioPlayer.classList.remove('!hidden');
                    audioPlayer.classList.add('lg:flex');
                }
                if (document.getElementById('audioPlayerMobile')) {
                    document.getElementById('audioPlayerMobile').classList.add('lg:hidden');
                }
            }
        }

        // Ejecutar al cargar y al cambiar zoom/resize
        detectZoomAndAdapt();
        window.addEventListener('resize', detectZoomAndAdapt);

        // Inicializar volumen
        audio.volume = 0.7;

        // Función para alternar reproducción (Desktop)
        function togglePlay() {
            if (isPlaying) {
                audio.pause();
                playIcon.classList.remove('hidden');
                pauseIcon.classList.add('hidden');
                playIconMobile.classList.remove('hidden');
                pauseIconMobile.classList.add('hidden');
                soundWaves.classList.add('hidden');
                soundWavesMobile.classList.add('hidden');
                musicIcon.classList.remove('playing-animation');
            } else {
                audio.play();
                playIcon.classList.add('hidden');
                pauseIcon.classList.remove('hidden');
                playIconMobile.classList.add('hidden');
                pauseIconMobile.classList.remove('hidden');
                soundWaves.classList.remove('hidden');
                soundWavesMobile.classList.remove('hidden');
                musicIcon.classList.add('playing-animation');
            }
            isPlaying = !isPlaying;
            actualizarEstadoReproduccion();
        }

        // Función para alternar reproducción (Móvil)
        function togglePlayMobile() {
            if (isPlaying) {
                audio.pause();
                playIconMobile.classList.remove('hidden');
                pauseIconMobile.classList.add('hidden');
                playIcon.classList.remove('hidden');
                pauseIcon.classList.add('hidden');
                soundWavesMobile.classList.add('hidden');
                soundWaves.classList.add('hidden');
                mobileInfo.classList.add('hidden');
            } else {
                audio.play();
                playIconMobile.classList.add('hidden');
                pauseIconMobile.classList.remove('hidden');
                playIcon.classList.add('hidden');
                pauseIcon.classList.remove('hidden');
                soundWavesMobile.classList.remove('hidden');
                soundWaves.classList.remove('hidden');
                // Mostrar info brevemente
                mobileInfo.classList.remove('hidden');
                setTimeout(() => {
                    mobileInfo.classList.add('hidden');
                }, 3000);
            }
            isPlaying = !isPlaying;
            actualizarEstadoReproduccion();
        }

        // Función para cambiar volumen
        function changeVolume(value) {
            audio.volume = value / 100;
            if (value == 0) {
                volumeIcon.classList.add('hidden');
                muteIcon.classList.remove('hidden');
            } else {
                volumeIcon.classList.remove('hidden');
                muteIcon.classList.add('hidden');
            }
        }

        // Función para mutear/desmutear
        function toggleMute() {
            if (audio.muted) {
                audio.muted = false;
                volumeIcon.classList.remove('hidden');
                muteIcon.classList.add('hidden');
                volumeSlider.value = audio.volume * 100;
            } else {
                audio.muted = true;
                volumeIcon.classList.add('hidden');
                muteIcon.classList.remove('hidden');
                volumeSlider.value = 0;
            }
            if (muteBtn) {
                muteBtn.setAttribute('aria-pressed', audio.muted ? 'true' : 'false');
                muteBtn.setAttribute('aria-label', audio.muted ? 'Activar sonido' : 'Silenciar');
            }
        }

        // Función para buscar en el audio
        function seekAudio(event) {
            let rect = event.currentTarget.getBoundingClientRect();
            let x = event.clientX - rect.left;
            let percentage = (x / rect.width) * 100;
            audio.currentTime = (percentage / 100) * audio.duration;
        }

        // Manejo por teclado de la barra de progreso (WCAG 2.1.1): flechas ±5 s, Re Pág/Av Pág ±30 s, Inicio/Fin
        function teclasProgreso(event) {
            if (!audio.duration) return;
            let nuevo = null;
            switch (event.key) {
                case 'ArrowRight':
                case 'ArrowUp':
                    nuevo = Math.min(audio.duration, audio.currentTime + 5);
                    break;
                case 'ArrowLeft':
                case 'ArrowDown':
                    nuevo = Math.max(0, audio.currentTime - 5);
                    break;
                case 'PageUp':
                    nuevo = Math.min(audio.duration, audio.currentTime + 30);
                    break;
                case 'PageDown':
                    nuevo = Math.max(0, audio.currentTime - 30);
                    break;
                case 'Home':
                    nuevo = 0;
                    break;
                case 'End':
                    nuevo = audio.duration;
                    break;
                default:
                    return;
            }
            event.preventDefault();
            audio.currentTime = nuevo;
            actualizarProgreso();
        }

        // Función para minimizar/maximizar el reproductor
        function togglePlayerSize() {
            const minimizar = !audioPlayer.classList.contains('!hidden');
            const btnMinimizar = audioPlayer.querySelector('[aria-controls="audioPlayer"]');
            const btnRestaurar = audioPlayerMini ? audioPlayerMini.querySelector('button') : null;
            if (minimizar) {
                audioPlayer.classList.add('!hidden');
                if (audioPlayerMini) audioPlayerMini.classList.remove('hidden');
                if (btnMinimizar) btnMinimizar.setAttribute('aria-expanded', 'false');
                if (btnRestaurar) btnRestaurar.focus();
            } else {
                audioPlayer.classList.remove('!hidden');
                if (audioPlayerMini) audioPlayerMini.classList.add('hidden');
                if (btnMinimizar) {
                    btnMinimizar.setAttribute('aria-expanded', 'true');
                    btnMinimizar.focus();
                }
            }
        }

        // Actualizar barra de progreso (visual y valores ARIA del slider)
        function actualizarProgreso() {
            if (audio.duration) {
                let percentage = (audio.currentTime / audio.duration) * 100;
                progressBar.style.width = percentage + '%';
                progressHandle.style.left = percentage + '%';
                currentTimeSpan.textContent = formatTime(audio.currentTime);
                if (progressSlider) {
                    progressSlider.setAttribute('aria-valuenow', Math.round(percentage));
                    progressSlider.setAttribute('aria-valuetext', formatTime(audio.currentTime) + ' de ' + formatTime(audio.duration));
                }
            }
        }
        audio.addEventListener('timeupdate', actualizarProgreso);

        // Cargar duración
        audio.addEventListener('loadedmetadata', function() {
            durationSpan.textContent = formatTime(audio.duration);
            if (progressSlider) progressSlider.setAttribute('aria-valuetext', '0:00 de ' + formatTime(audio.duration));
        });

        // Cuando termina la canción
        audio.addEventListener('ended', function() {
            isPlaying = false;
            playIcon.classList.remove('hidden');
            pauseIcon.classList.add('hidden');
            playIconMobile.classList.remove('hidden');
            pauseIconMobile.classList.add('hidden');
            soundWaves.classList.add('hidden');
            soundWavesMobile.classList.add('hidden');
            musicIcon.classList.remove('playing-animation');
            progressBar.style.width = '0%';
            progressHandle.style.left = '0%';
            if (progressSlider) {
                progressSlider.setAttribute('aria-valuenow', '0');
                progressSlider.setAttribute('aria-valuetext', '0:00 de ' + formatTime(audio.duration));
            }
            actualizarEstadoReproduccion();
        });

        // Función para formatear tiempo
        function formatTime(seconds) {
            let minutes = Math.floor(seconds / 60);
            let secs = Math.floor(seconds % 60);
            return minutes + ':' + (secs < 10 ? '0' : '') + secs;
        }
    </script>

    <!-- Video emergente administrable (Panel -> Videos Destacados) -->
    @include("partials.video-destacado")

@endsection

@push('scripts')
    <script>
        // Hero Slider JavaScript
        let currentSlide = 0;
        const totalSlides = 8;
        let slideInterval;
        // Pausa explícita del usuario (botón) o por preferencia de movimiento reducido (WCAG 2.2.2 / 2.3.3)
        const prefiereMenosMovimiento = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
        let heroPausadoPorUsuario = prefiereMenosMovimiento;

        // Initialize slider
        document.addEventListener('DOMContentLoaded', function() {
            actualizarBotonPausaHero();
            if (!heroPausadoPorUsuario) {
                startAutoSlider();
            }

            // Add click events to indicators
            const indicators = document.querySelectorAll('.indicator');
            indicators.forEach((indicator, index) => {
                indicator.addEventListener('click', () => goToSlide(index));
            });

            // Pause auto-slider on hover / keyboard focus
            const heroSlider = document.querySelector('.hero-slider');
            heroSlider.addEventListener('mouseenter', stopAutoSlider);
            heroSlider.addEventListener('mouseleave', reanudarSiNoPausado);
            heroSlider.addEventListener('focusin', stopAutoSlider);
            heroSlider.addEventListener('focusout', function(e) {
                if (!heroSlider.contains(e.relatedTarget)) reanudarSiNoPausado();
            });
        });

        function reanudarSiNoPausado() {
            if (!heroPausadoPorUsuario) startAutoSlider();
        }

        function toggleHeroAutoplay() {
            heroPausadoPorUsuario = !heroPausadoPorUsuario;
            if (heroPausadoPorUsuario) {
                stopAutoSlider();
            } else {
                startAutoSlider();
            }
            actualizarBotonPausaHero();
        }

        function actualizarBotonPausaHero() {
            const btn = document.getElementById('hero-pause');
            const contenedor = document.getElementById('hero-slides');
            if (!btn) return;
            btn.setAttribute('aria-pressed', heroPausadoPorUsuario ? 'true' : 'false');
            btn.setAttribute('aria-label', heroPausadoPorUsuario ? 'Reanudar el avance automático del carrusel' : 'Pausar el avance automático del carrusel');
            document.getElementById('hero-pause-icon').classList.toggle('hidden', heroPausadoPorUsuario);
            document.getElementById('hero-play-icon').classList.toggle('hidden', !heroPausadoPorUsuario);
            // Con el carrusel detenido se anuncian los cambios de diapositiva; en automático no, para no interrumpir
            if (contenedor) contenedor.setAttribute('aria-live', heroPausadoPorUsuario ? 'polite' : 'off');
        }

        function goToSlide(slideIndex) {
            const slides = document.querySelectorAll('.slide');
            const indicators = document.querySelectorAll('.indicator');

            // Hide current slide
            slides[currentSlide].classList.remove('active');
            slides[currentSlide].style.opacity = '0';
            slides[currentSlide].setAttribute('aria-hidden', 'true');
            indicators[currentSlide].classList.remove('active', 'bg-white', 'ring-2', 'ring-[#db0455]', 'ring-offset-1');
            indicators[currentSlide].classList.add('bg-white/70');
            indicators[currentSlide].setAttribute('aria-current', 'false');

            // Show new slide
            currentSlide = slideIndex;
            slides[currentSlide].classList.add('active');
            slides[currentSlide].style.opacity = '1';
            slides[currentSlide].removeAttribute('aria-hidden');
            indicators[currentSlide].classList.add('active', 'bg-white', 'ring-2', 'ring-[#db0455]', 'ring-offset-1');
            indicators[currentSlide].classList.remove('bg-white/70');
            indicators[currentSlide].setAttribute('aria-current', 'true');
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
            stopAutoSlider();
            slideInterval = setInterval(nextSlide, 4000); // Change slide every 4 seconds
        }

        function stopAutoSlider() {
            if (slideInterval) {
                clearInterval(slideInterval);
            }
        }

        // Enlaces Externos Slider JavaScript - Desplazamiento continuo con pausa accesible
        let enlaceSlideInterval;
        let currentEnlacePosition = 0;
        let isMoving = true;
        // Pausa explícita (botón) o por preferencia de movimiento reducido (WCAG 2.2.2 / 2.3.3)
        let enlacesPausadoPorUsuario = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;

        // Initialize enlaces slider
        document.addEventListener('DOMContentLoaded', function() {
            actualizarBotonPausaEnlaces();
            if (!enlacesPausadoPorUsuario) {
                startContinuousEnlaceSlider();
            }

            // Pause auto-slider on hover / keyboard focus
            const enlacesSlider = document.querySelector('#enlacesSlider');
            if (enlacesSlider) {
                enlacesSlider.addEventListener('mouseenter', stopEnlaceAutoSlider);
                enlacesSlider.addEventListener('mouseleave', reanudarEnlacesSiNoPausado);
                enlacesSlider.addEventListener('focusin', stopEnlaceAutoSlider);
                enlacesSlider.addEventListener('focusout', function(e) {
                    if (!enlacesSlider.contains(e.relatedTarget)) reanudarEnlacesSiNoPausado();
                });
            }
        });

        function reanudarEnlacesSiNoPausado() {
            if (!enlacesPausadoPorUsuario) startContinuousEnlaceSlider();
        }

        function toggleEnlacesSlider() {
            enlacesPausadoPorUsuario = !enlacesPausadoPorUsuario;
            if (enlacesPausadoPorUsuario) {
                stopEnlaceAutoSlider();
            } else {
                startContinuousEnlaceSlider();
            }
            actualizarBotonPausaEnlaces();
        }

        function actualizarBotonPausaEnlaces() {
            const btn = document.getElementById('enlaces-pause');
            if (!btn) return;
            btn.setAttribute('aria-pressed', enlacesPausadoPorUsuario ? 'true' : 'false');
            document.getElementById('enlaces-pause-text').textContent = enlacesPausadoPorUsuario ? 'Reanudar el desplazamiento' : 'Pausar el desplazamiento';
            document.getElementById('enlaces-pause-icon').classList.toggle('hidden', enlacesPausadoPorUsuario);
            document.getElementById('enlaces-play-icon').classList.toggle('hidden', !enlacesPausadoPorUsuario);
        }

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
        let modalOpener = null; // elemento que tenía el foco antes de abrir el diálogo

        // Mantiene el foco dentro del diálogo (trampa de foco) mientras está abierto (WCAG 2.4.3)
        function atraparFocoEn(contenedor, e) {
            const focusables = contenedor.querySelectorAll(
                'a[href], button:not([disabled]), input:not([disabled]), select:not([disabled]), textarea:not([disabled]), [tabindex]:not([tabindex="-1"])'
            );
            const visibles = Array.from(focusables).filter(el => el.offsetParent !== null);
            if (!visibles.length) return;
            const primero = visibles[0];
            const ultimo = visibles[visibles.length - 1];
            if (e.shiftKey && (document.activeElement === primero || !contenedor.contains(document.activeElement))) {
                e.preventDefault();
                ultimo.focus();
            } else if (!e.shiftKey && document.activeElement === ultimo) {
                e.preventDefault();
                primero.focus();
            }
        }

        // Inicializar modal después de que la página esté completamente cargada (no bloquea LCP)
        window.addEventListener('load', function() {
            // Usar requestIdleCallback para no interferir con métricas de rendimiento
            const loadAnuncios = () => setTimeout(() => cargarAnunciosParaModal(), 3000);
            if ('requestIdleCallback' in window) {
                requestIdleCallback(loadAnuncios);
            } else {
                loadAnuncios();
            }
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
            modalOpener = document.activeElement;
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

            // Gestión de foco: al abrir, el foco pasa al botón de cierre del diálogo (WCAG 4.1.2 / 2.4.3)
            const btnCerrar = document.getElementById('modal-cerrar');
            if (btnCerrar) btnCerrar.focus();
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
                imagenElement.alt = 'Imagen principal del anuncio: ' + anuncio.titulo;
                imagenContainer.classList.remove('hidden');

                // El botón que envuelve la imagen abre el lightbox (operable con teclado)
                const imagenBtn = document.getElementById('modal-imagen-btn');
                imagenBtn.title = 'Ver en tamaño completo';
                imagenBtn.onclick = function() {
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
                const totalAdicionales = anuncio.imagenes_adicionales_urls.length;
                anuncio.imagenes_adicionales_urls.forEach((url, idx) => {
                    if (url && url.includes('/storage/')) {
                        const img = document.createElement('img');
                        img.src = url;
                        img.alt = anuncio.titulo + ' – imagen adicional ' + (idx + 1) + ' de ' + totalAdicionales;
                        img.className =
                            'w-full h-24 object-cover rounded-lg shadow-md hover:shadow-lg transition-shadow';
                        // Botón envolvente para que la ampliación sea operable con teclado (WCAG 2.1.1)
                        const btn = document.createElement('button');
                        btn.type = 'button';
                        btn.className = 'block w-full rounded-lg focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-[#db0455] focus-visible:ring-offset-2';
                        btn.setAttribute('aria-label', 'Ampliar imagen adicional ' + (idx + 1) + ' de ' + totalAdicionales);
                        btn.title = 'Ver en tamaño completo';
                        btn.onclick = () => abrirLightbox(url, anuncio.titulo);
                        btn.appendChild(img);
                        imagenesAdicionalesElement.appendChild(btn);
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
                        enlaceDiv.className =
                            'flex items-center p-3 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors border border-blue-200';
                        enlaceDiv.innerHTML = `
                    <svg class="w-5 h-5 text-[#db0455] mr-3 flex-shrink-0" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                    </svg>
                    <a href="${enlace.url}" target="_blank" rel="noopener noreferrer"
                       class="text-[#db0455] hover:text-[#a00340] font-semibold flex-1 hover:underline">
                        ${enlace.titulo}
                    </a>
                    <svg class="w-4 h-4 text-gray-400 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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

                // Habilitar/deshabilitar botones (estado real, no solo opacidad)
                const btnAnterior = document.getElementById('btn-anterior');
                const btnSiguiente = document.getElementById('btn-siguiente');
                btnAnterior.disabled = !(indiceActual > 0);
                btnSiguiente.disabled = !(indiceActual < totalAnuncios - 1);
                btnAnterior.style.opacity = btnAnterior.disabled ? '0.5' : '1';
                btnSiguiente.style.opacity = btnSiguiente.disabled ? '0.5' : '1';
            } else {
                controles.classList.add('hidden');
            }
        }

        // Tras cambiar de anuncio, llevar el foco al título para que se anuncie el nuevo contenido (WCAG 4.1.3)
        function enfocarTituloModal() {
            const titulo = document.getElementById('modal-titulo');
            if (titulo) titulo.focus();
        }

        // Navegar al anuncio anterior
        async function anuncioAnterior() {
            if (indiceActual > 0) {
                indiceActual--;
                await cargarDetalleAnuncio(anunciosDisponibles[indiceActual].id);
                actualizarControlesNavegacion();
                enfocarTituloModal();
            }
        }

        // Navegar al siguiente anuncio
        async function anuncioSiguiente() {
            if (indiceActual < anunciosDisponibles.length - 1) {
                indiceActual++;
                await cargarDetalleAnuncio(anunciosDisponibles[indiceActual].id);
                actualizarControlesNavegacion();
                enfocarTituloModal();
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
                // Devolver el foco al elemento que abrió el diálogo (WCAG 2.4.3)
                if (modalOpener && typeof modalOpener.focus === 'function' && document.body.contains(modalOpener) && modalOpener !== document.body) {
                    modalOpener.focus();
                } else {
                    const principal = document.getElementById('contenido-principal');
                    if (principal) {
                        if (!principal.hasAttribute('tabindex')) principal.setAttribute('tabindex', '-1');
                        principal.focus();
                    }
                }
                modalOpener = null;
            }, 300);
        }


        // Abrir imagen en lightbox
        function abrirImagenLightbox(url, titulo) {
            const lightbox = document.createElement('div');
            lightbox.className = 'fixed inset-0 bg-black/90 z-[10000] flex items-center justify-center p-4';
            lightbox.setAttribute('role', 'dialog');
            lightbox.setAttribute('aria-modal', 'true');
            lightbox.setAttribute('aria-label', 'Imagen ampliada: ' + titulo);
            lightbox.onclick = () => lightbox.remove();

            lightbox.innerHTML = `
        <div class="relative max-w-6xl max-h-[95vh] flex items-center justify-center">
            <img src="${url}" alt="${titulo}" class="max-w-full max-h-full object-contain rounded-xl shadow-2xl">
            <button type="button" aria-label="Cerrar imagen" onclick="event.stopPropagation(); this.parentElement.parentElement.remove()"
                    class="absolute top-4 right-4 w-12 h-12 rounded-full bg-black/50 hover:bg-black/70 flex items-center justify-center text-white transition-all">
                <svg class="w-6 h-6" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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

            // No interferir con el lightbox abierto encima del modal
            const lightboxAbierto = !document.getElementById('lightbox-modal').classList.contains('hidden');
            if (lightboxAbierto) return;

            switch (e.key) {
                case 'Tab':
                    atraparFocoEn(document.getElementById('modal-contenido'), e);
                    break;
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
                btn.setAttribute('aria-pressed', 'false');
            });

            event.target.classList.add('active', 'bg-[#db0455]', 'text-white');
            event.target.classList.remove('bg-gray-200', 'text-gray-700');
            event.target.setAttribute('aria-pressed', 'true');

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
                <svg class="w-16 h-16 mx-auto mb-4 text-gray-400" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
        <article class="anuncio-item relative bg-white rounded-lg shadow-md overflow-hidden border-b-4 border-[#db0455] hover:shadow-xl transition-all duration-300"
                 data-categoria="${anuncio.categoria}">

            ${anuncio.imagen_principal_url && anuncio.imagen_principal_url.includes('/storage/') ? `
                            <div class="h-32 overflow-hidden">
                                <img src="${anuncio.imagen_principal_url}"
                                     alt=""
                                     class="w-full h-full object-cover hover:scale-110 transition-transform duration-300">
                            </div>
                        ` : ''}

            <div class="p-4">
                <div class="mb-2">
                    <span class="text-xs px-2 py-1 rounded-full font-medium ${categoriaColors[anuncio.categoria]}">
                        ${categoriaLabels[anuncio.categoria]}
                    </span>
                    ${anuncio.destacado ? '<span class="text-xs px-2 py-1 rounded-full font-medium bg-yellow-100 text-yellow-800 ml-1"><span aria-hidden="true">⭐</span> Destacado</span>' : ''}
                </div>

                <h3 class="text-base font-bold text-gray-800 mb-2 line-clamp-2 hover:text-[#db0455] transition-colors">
                    <button type="button" onclick="abrirAnuncioEspecifico(${anuncio.id})"
                            class="text-left after:absolute after:inset-0 after:content-['']"
                            aria-label="Abrir anuncio: ${anuncio.titulo.replace(/"/g, '&quot;')}">
                        ${anuncio.titulo.length > 60 ? anuncio.titulo.substring(0, 60) + '...' : anuncio.titulo}
                    </button>
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
        let lightboxOpener = null;

        // Abrir lightbox con una imagen
        function abrirLightbox(urlImagen, alt) {
            imagenesLightbox = [urlImagen];
            indiceImagenActual = 0;
            lightboxOpener = document.activeElement;
            if (alt) document.getElementById('lightbox-imagen').alt = 'Imagen ampliada: ' + alt;
            mostrarImagenLightbox();
            // Gestión de foco: al abrir, foco al botón de cierre (WCAG 4.1.2 / 2.4.3)
            const btnCerrar = document.getElementById('lightbox-cerrar');
            if (btnCerrar) btnCerrar.focus();
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
            // Devolver el foco al elemento que abrió el lightbox
            if (lightboxOpener && typeof lightboxOpener.focus === 'function' && document.body.contains(lightboxOpener)) {
                lightboxOpener.focus();
            }
            lightboxOpener = null;
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
                switch (e.key) {
                    case 'Tab':
                        atraparFocoEn(lightboxModal, e);
                        break;
                    case 'Escape':
                        e.stopPropagation();
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
            anunciosDisponibles = [{
                id: anuncioId
            }];
            indiceActual = 0;
            await abrirModalAnuncios();
        }
        // Lazy load YouTube iframe cuando sea visible
        const ytObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const iframe = entry.target;
                    if (iframe.dataset.src) {
                        iframe.src = iframe.dataset.src;
                        delete iframe.dataset.src;
                        iframe.classList.remove('youtube-lazy');
                    }
                    ytObserver.unobserve(iframe);
                }
            });
        }, { rootMargin: '200px' });

        document.querySelectorAll('.youtube-lazy').forEach(iframe => {
            ytObserver.observe(iframe);
        });
    </script>
@endpush
