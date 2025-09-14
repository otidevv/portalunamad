<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Portal UNAMAD - Universidad Nacional Amazónica de Madre de Dios')</title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('img/iconweb/favicon_unamad.ico') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/iconweb/favicon_unamad.ico') }}">
    <link rel="apple-touch-icon" href="{{ asset('img/iconweb/favicon_unamad.ico') }}">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .loading-dots span {
            animation: loading 1.4s infinite ease-in-out both;
            font-size: 3.5rem;
            font-weight: bold;
        }
        .loading-dots span:nth-child(1) {
            animation-delay: -0.32s;
        }
        .loading-dots span:nth-child(2) {
            animation-delay: -0.16s;
        }
        @keyframes loading {
            0%, 80%, 100% {
                opacity: 0.3;
                transform: scale(0.8);
            }
            40% {
                opacity: 1;
                transform: scale(1);
            }
        }
    </style>
    @stack('styles')
</head>

<body class="font-sans antialiased">
    <!-- Loading Screen -->
    <div id="loading-screen" class="fixed inset-0 bg-white flex items-center justify-center z-[9999]">
        <div class="text-center">
            <div class="mb-0">
                <img src="{{ asset('img/logo/logo.png') }}" alt="Logo UNAMAD" class="w-16 h-22 mx-auto animate-pulse">
                <div style="color: #ed145b; line-height: 1;">
                    <span class="loading-dots">
                        <span>.</span><span>.</span><span>.</span>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <!-- Header -->
    <header class="bg-white shadow-sm sticky top-0 z-50">
        <!-- Barra superior con enlaces rápidos -->
        <div class="bg-gray-800 text-white text-sm">
            <div class="container mx-auto px-4">
                <div class="flex justify-between items-center py-2">
                    <div class="flex space-x-4">
                        <a href="https://sgd.unamad.edu.pe/mesa-de-partes" target="_blank" class="hover:text-[#ed145b] transition-colors">Mesa de Partes Virtual</a>
                        <a href="mailto:tramite-documentario@unamad.edu.pe" class="hover:text-[#ed145b] transition-colors">Correo Institucional</a>
                        <a href="https://elibro.net/es/lc/unamad/login_usuario/" target="_blank" class="hover:text-[#ed145b] transition-colors">Biblioteca Virtual</a>
                    </div>
                    <div class="flex items-center space-x-3">
                        <!-- Redes sociales pequeñas -->
                        <a href="https://www.facebook.com/unamad.oficial/" target="_blank" class="hover:text-[#ed145b] transition-colors">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                            </svg>
                        </a>
                        <a href="https://twitter.com/unamad_oficial" target="_blank" class="hover:text-[#ed145b] transition-colors">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                            </svg>
                        </a>
                        <a href="https://www.youtube.com/channel/UCUNGgRNunGECIxEd_-qv_oA" target="_blank" class="hover:text-[#ed145b] transition-colors">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                            </svg>
                        </a>
                        
                        <!-- Separador vertical -->
                        <div class="w-px h-4 bg-gray-600"></div>
                        
                        <!-- Icono de Login/Admin discreto -->
                        @auth
                            <a href="{{ route('admin.dashboard') }}" class="hover:text-[#ed145b] transition-colors" title="Panel Admin">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                          d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                                </svg>
                            </a>
                        @else
                            <a href="{{ route('login') }}" class="hover:text-[#ed145b] transition-colors" title="Iniciar Sesión">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                          d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </a>
                        @endauth
                    </div>
                </div>
            </div>
        </div>

        <!-- Barra principal con logo y navegación -->
        <div class="w-full h-20">
            <div class="flex items-center justify-between h-full px-4">
                <!-- Logo UNAMAD al extremo izquierdo -->
                <div class="flex items-center">
                    <a href="/" class="flex items-center">
                        <img src="{{ asset('img/header/logounamad.png') }}" alt="Logo UNAMAD" class="h-10">
                    </a>
                </div>

                <!-- Menú de navegación principal centrado -->
                <nav class="hidden lg:flex items-center space-x-8 h-full">
                    <a href="/"
                        class="nav-link {{ request()->is('/') ? 'active' : '' }} h-full flex items-center">
                        Inicio
                    </a>

                    <!-- Universidad -->
                    <div class="relative group h-full">
                        <a href="#" class="nav-link flex items-center h-full {{ request()->is('universidad*') ? 'text-[#ed145b] border-b-2 border-[#ed145b]' : '' }}">
                            Universidad
                            <svg class="w-3 h-3 ml-1 transition-transform duration-200 group-hover:rotate-180"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </a>
                        <!-- Mega Dropdown Menu para Universidad -->
                        <div class="mega-dropdown-menu">
                            <div class="flex">
                                <!-- Imagen a la izquierda -->
                                <div class="w-80 flex-shrink-0">
                                    <div class="h-full relative rounded-l-lg overflow-hidden">
                                        <img src="{{ asset('img/header/universidad/logouniversidad.jpg') }}"
                                            alt="Universidad UNAMAD" class="w-full h-full object-cover">
                                        <div
                                            class="absolute inset-0 bg-gradient-to-br from-[#ed145b]/80 to-[#a00340]/90 flex flex-col items-center justify-center p-8 text-white">
                                            <div class="text-center">
                                                <h4 class="font-bold text-xl mb-2">UNAMAD</h4>
                                                <p class="text-sm opacity-95 mb-2">Universidad Nacional</p>
                                                <p class="text-sm opacity-95">Amazónica de Madre de Dios</p>
                                                <div class="w-16 h-0.5 bg-white/60 mx-auto mt-4"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Enlaces organizados -->
                                <div class="flex-1 p-8">
                                    <h3 class="text-xl font-bold text-gray-800 mb-6 pb-2 border-b border-gray-200">La
                                        Universidad</h3>

                                    <div class="grid grid-cols-1 gap-y-4">
                                        <a href="/universidad/presentacion" class="mega-dropdown-link {{ request()->is('universidad/presentacion') ? 'bg-[#ed145b]/5 border-l-4 border-[#ed145b]' : '' }}">
                                            <div
                                                class="flex items-center justify-center w-10 h-10 rounded-full bg-[#ed145b]/10 flex-shrink-0">
                                                <svg class="w-5 h-5 text-[#ed145b]" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div>
                                                <span class="font-semibold {{ request()->is('universidad/presentacion') ? 'text-[#ed145b]' : 'text-gray-800' }}">Presentación</span>
                                                <p class="text-xs text-gray-600 mt-1">Conoce nuestra misión, visión y
                                                    valores institucionales</p>
                                            </div>
                                        </a>

                                        <a href="/universidad/autoridades" class="mega-dropdown-link {{ request()->is('universidad/autoridades') ? 'bg-[#ed145b]/5 border-l-4 border-[#ed145b]' : '' }}">
                                            <div
                                                class="flex items-center justify-center w-10 h-10 rounded-full bg-[#ed145b]/10 flex-shrink-0">
                                                <svg class="w-5 h-5 text-[#ed145b]" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div>
                                                <span class="font-semibold {{ request()->is('universidad/autoridades') ? 'text-[#ed145b]' : 'text-gray-800' }}">Autoridades</span>
                                                <p class="text-xs text-gray-600 mt-1">Rectorado y equipo directivo de la
                                                    universidad</p>
                                            </div>
                                        </a>

                                        <a href="/universidad/historia" class="mega-dropdown-link {{ request()->is('universidad/historia') ? 'bg-[#ed145b]/5 border-l-4 border-[#ed145b]' : '' }}">
                                            <div
                                                class="flex items-center justify-center w-10 h-10 rounded-full bg-[#ed145b]/10 flex-shrink-0">
                                                <svg class="w-5 h-5 text-[#ed145b]" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div>
                                                <span class="font-semibold {{ request()->is('universidad/historia') ? 'text-[#ed145b]' : 'text-gray-800' }}">Historia</span>
                                                <p class="text-xs text-gray-600 mt-1">Trayectoria y evolución de
                                                    nuestra institución</p>
                                            </div>
                                        </a>

                                        <a href="/universidad/sedes" class="mega-dropdown-link {{ request()->is('universidad/sedes') ? 'bg-[#ed145b]/5 border-l-4 border-[#ed145b]' : '' }}">
                                            <div
                                                class="flex items-center justify-center w-10 h-10 rounded-full bg-[#ed145b]/10 flex-shrink-0">
                                                <svg class="w-5 h-5 text-[#ed145b]" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                                    </path>
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                </svg>
                                            </div>
                                            <div>
                                                <span class="font-semibold {{ request()->is('universidad/sedes') ? 'text-[#ed145b]' : 'text-gray-800' }}">Sedes</span>
                                                <p class="text-xs text-gray-600 mt-1">Ubicaciones y campus
                                                    universitarios</p>
                                            </div>
                                        </a>

                                        <a href="/universidad/politicas" class="mega-dropdown-link {{ request()->is('universidad/politicas') ? 'bg-[#ed145b]/5 border-l-4 border-[#ed145b]' : '' }}">
                                            <div
                                                class="flex items-center justify-center w-10 h-10 rounded-full bg-[#ed145b]/10 flex-shrink-0">
                                                <svg class="w-5 h-5 text-[#ed145b]" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div>
                                                <span class="font-semibold {{ request()->is('universidad/politicas') ? 'text-[#ed145b]' : 'text-gray-800' }}">Política Institucional</span>
                                                <p class="text-xs text-gray-600 mt-1">Normativas, reglamentos y
                                                    políticas universitarias</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Oficinas -->
                    <div class="relative group h-full">
                        <a href="#" class="nav-link flex items-center h-full {{ request()->is('oficinas*') ? 'text-[#ed145b] border-b-2 border-[#ed145b]' : '' }}">
                            Oficinas
                            <svg class="w-3 h-3 ml-1 transition-transform duration-200 group-hover:rotate-180"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </a>
                        <!-- Mega Dropdown Menu para Oficinas -->
                        <div class="mega-dropdown-menu-oficinas">
                            <div class="flex">
                                <!-- Imagen a la izquierda -->
                                <div class="w-80 flex-shrink-0">
                                    <div class="h-full relative rounded-l-lg overflow-hidden">
                                        <img src="{{ asset('img/header/universidad/logouniversidad.jpg') }}"
                                            alt="Oficinas UNAMAD" class="w-full h-full object-cover">
                                        <div class="absolute inset-0 bg-gradient-to-br from-[#ed145b]/80 to-[#a00340]/90 flex flex-col items-center justify-center p-8 text-white">
                                            <div class="text-center">
                                                <svg class="w-16 h-16 mb-4 opacity-90 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                                </svg>
                                                <h4 class="font-bold text-xl mb-2">Oficinas</h4>
                                                <p class="text-sm opacity-95 mb-2">Gestión Institucional</p>
                                                <p class="text-sm opacity-95">UNAMAD</p>
                                                <div class="w-16 h-0.5 bg-white/60 mx-auto mt-4"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Enlaces organizados -->
                                <div class="flex-1 p-8">
                                    <h3 class="text-xl font-bold text-gray-800 mb-6 pb-2 border-b border-gray-200">Organización Administrativa</h3>
                                    
                                    <div class="grid grid-cols-2 gap-x-8 gap-y-4">
                                        <!-- Columna 1: Órganos de Gobierno -->
                                        <div>
                                            <h5 class="font-semibold text-gray-800 mb-3 text-sm uppercase tracking-wide text-[#ed145b]">Órganos de Gobierno</h5>
                                            <div class="space-y-2">
                                                <a href="/oficinas/asamblea" class="oficinas-dropdown-link {{ request()->is('oficinas/asamblea') ? 'bg-[#ed145b]/5 border-l-4 border-[#ed145b]' : '' }}">
                                                    <div class="flex items-center justify-center w-8 h-8 rounded-full bg-[#ed145b]/10 flex-shrink-0">
                                                        <svg class="w-4 h-4 text-[#ed145b]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                                        </svg>
                                                    </div>
                                                    <span class="font-medium {{ request()->is('oficinas/asamblea') ? 'text-[#ed145b]' : 'text-gray-800' }} text-sm">Asamblea Universitaria</span>
                                                </a>
                                                <a href="/oficinas/consejo" class="oficinas-dropdown-link {{ request()->is('oficinas/consejo') ? 'bg-[#ed145b]/5 border-l-4 border-[#ed145b]' : '' }}">
                                                    <div class="flex items-center justify-center w-8 h-8 rounded-full bg-[#ed145b]/10 flex-shrink-0">
                                                        <svg class="w-4 h-4 text-[#ed145b]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                                        </svg>
                                                    </div>
                                                    <span class="font-medium {{ request()->is('oficinas/consejo') ? 'text-[#ed145b]' : 'text-gray-800' }} text-sm">Consejo Universitario</span>
                                                </a>
                                                <a href="/oficinas/decanatura" class="oficinas-dropdown-link {{ request()->is('oficinas/decanatura') ? 'bg-[#ed145b]/5 border-l-4 border-[#ed145b]' : '' }}">
                                                    <div class="flex items-center justify-center w-8 h-8 rounded-full bg-[#ed145b]/10 flex-shrink-0">
                                                        <svg class="w-4 h-4 text-[#ed145b]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                                        </svg>
                                                    </div>
                                                    <span class="font-medium {{ request()->is('oficinas/decanatura') ? 'text-[#ed145b]' : 'text-gray-800' }} text-sm">Decanatura</span>
                                                </a>
                                            </div>
                                            
                                            <h5 class="font-semibold text-gray-800 mb-3 text-sm uppercase tracking-wide text-[#ed145b] mt-6">Vicerrectorados</h5>
                                            <div class="space-y-2">
                                                <div class="relative group-vicerrectorado">
                                                    <a href="#" class="oficinas-dropdown-link" style="cursor: default;">
                                                        <div class="flex items-center justify-center w-8 h-8 rounded-full bg-[#ed145b]/10 flex-shrink-0">
                                                            <svg class="w-4 h-4 text-[#ed145b]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                                            </svg>
                                                        </div>
                                                        <span class="font-medium text-gray-800 text-sm">Vicerrectorado Académico</span>
                                                        <svg class="w-3 h-3 text-[#ed145b] ml-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                                        </svg>
                                                    </a>
                                                    <!-- Sub-dropdown para Vicerrectorado Académico -->
                                                    <div class="sub-dropdown-menu-academico">
                                                        <div class="p-4">
                                                            <h6 class="font-bold text-gray-800 mb-3 text-sm border-b border-gray-200 pb-2">Vicerrectorado Académico</h6>
                                                            <div class="space-y-2">
                                                                <a href="/oficinas/admision" class="sub-dropdown-link">
                                                                    <svg class="w-3 h-3 text-[#ed145b]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                                                                    </svg>
                                                                    Dirección de Admisión
                                                                </a>
                                                                <a href="/oficinas/biblioteca" class="sub-dropdown-link">
                                                                    <svg class="w-3 h-3 text-[#ed145b]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                                                    </svg>
                                                                    Biblioteca Central
                                                                </a>
                                                                <a href="/oficinas/academicos" class="sub-dropdown-link">
                                                                    <svg class="w-3 h-3 text-[#ed145b]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v6a2 2 0 002 2h2m0 0h2m-2 0v2a2 2 0 002 2h2a2 2 0 002-2v-2m-2 0h2a2 2 0 002-2V7a2 2 0 00-2-2h-2m0 0V5a2 2 0 10-4 0v0zm0 0a2 2 0 014 0v0"></path>
                                                                    </svg>
                                                                    Asuntos Académicos
                                                                </a>
                                                                <a href="https://proyeccionsocial.unamad.edu.pe/" target="_blank" class="sub-dropdown-link">
                                                                    <svg class="w-3 h-3 text-[#ed145b]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                                                    </svg>
                                                                    Proyección Social y Extensión Cultural
                                                                </a>
                                                                <a href="/oficinas/bienestar" class="sub-dropdown-link">
                                                                    <svg class="w-3 h-3 text-[#ed145b]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                                                    </svg>
                                                                    Bienestar Universitario
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="relative group-vicerrectorado">
                                                    <a href="#" class="oficinas-dropdown-link" style="cursor: default;">
                                                        <div class="flex items-center justify-center w-8 h-8 rounded-full bg-[#ed145b]/10 flex-shrink-0">
                                                            <svg class="w-4 h-4 text-[#ed145b]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                                                            </svg>
                                                        </div>
                                                        <span class="font-medium text-gray-800 text-sm">Vicerrectorado de Investigación</span>
                                                        <svg class="w-3 h-3 text-[#ed145b] ml-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                                        </svg>
                                                    </a>
                                                    <!-- Sub-dropdown para Vicerrectorado de Investigación -->
                                                    <div class="sub-dropdown-menu-investigacion">
                                                        <div class="p-4">
                                                            <h6 class="font-bold text-gray-800 mb-3 text-sm border-b border-gray-200 pb-2">Vicerrectorado de Investigación</h6>
                                                            <div class="space-y-2">
                                                                <a href="/oficinas/incubadora" class="sub-dropdown-link">
                                                                    <svg class="w-3 h-3 text-[#ed145b]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                                                    </svg>
                                                                    Incubadora de Empresas
                                                                </a>
                                                                <a href="/oficinas/innovacion" class="sub-dropdown-link">
                                                                    <svg class="w-3 h-3 text-[#ed145b]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                                                                    </svg>
                                                                    Innovación y Transferencia Tecnológica
                                                                </a>
                                                                <a href="/oficinas/investigacion" class="sub-dropdown-link">
                                                                    <svg class="w-3 h-3 text-[#ed145b]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2H9z"></path>
                                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5a2 2 0 012 2v6a2 2 0 01-2 2H9a2 2 0 01-2-2V7a2 2 0 012-2h4z"></path>
                                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                                    </svg>
                                                                    Instituto de Investigación
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- Columna 2: Oficinas Administrativas -->
                                        <div>
                                            <h5 class="font-semibold text-gray-800 mb-3 text-sm uppercase tracking-wide text-[#ed145b]">Oficinas Centrales</h5>
                                            <div class="space-y-2">
                                                <a href="/oficinas/secretaria" class="oficinas-dropdown-link {{ request()->is('oficinas/secretaria') ? 'bg-[#ed145b]/5 border-l-4 border-[#ed145b]' : '' }}">
                                                    <div class="flex items-center justify-center w-8 h-8 rounded-full bg-[#ed145b]/10 flex-shrink-0">
                                                        <svg class="w-4 h-4 text-[#ed145b]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                                        </svg>
                                                    </div>
                                                    <span class="font-medium {{ request()->is('oficinas/secretaria') ? 'text-[#ed145b]' : 'text-gray-800' }} text-sm">Secretaría General</span>
                                                </a>
                                                <a href="/oficinas/calidad" class="oficinas-dropdown-link {{ request()->is('oficinas/calidad') ? 'bg-[#ed145b]/5 border-l-4 border-[#ed145b]' : '' }}">
                                                    <div class="flex items-center justify-center w-8 h-8 rounded-full bg-[#ed145b]/10 flex-shrink-0">
                                                        <svg class="w-4 h-4 text-[#ed145b]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                                                        </svg>
                                                    </div>
                                                    <span class="font-medium {{ request()->is('oficinas/calidad') ? 'text-[#ed145b]' : 'text-gray-800' }} text-sm">Gestión de la Calidad</span>
                                                </a>
                                                <a href="/oficinas/cooperacion" class="oficinas-dropdown-link">
                                                    <div class="flex items-center justify-center w-8 h-8 rounded-full bg-[#ed145b]/10 flex-shrink-0">
                                                        <svg class="w-4 h-4 text-[#ed145b]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                        </svg>
                                                    </div>
                                                    <span class="font-medium text-gray-800 text-sm">Cooperación y Relaciones Internacionales</span>
                                                </a>
                                                <a href="/oficinas/ambiental" class="oficinas-dropdown-link {{ request()->is('oficinas/ambiental*') ? 'bg-[#ed145b]/5 border-l-4 border-[#ed145b]' : '' }}">
                                                    <div class="flex items-center justify-center w-8 h-8 rounded-full bg-[#ed145b]/10 flex-shrink-0">
                                                        <svg class="w-4 h-4 text-[#ed145b]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                        </svg>
                                                    </div>
                                                    <span class="font-medium {{ request()->is('oficinas/ambiental*') ? 'text-[#ed145b]' : 'text-gray-800' }} text-sm">Gestión Ambiental</span>
                                                </a>
                                                <a href="/oficinas/administracion" class="oficinas-dropdown-link {{ request()->is('oficinas/administracion*') ? 'bg-[#ed145b]/5 border-l-4 border-[#ed145b]' : '' }}">
                                                    <div class="flex items-center justify-center w-8 h-8 rounded-full bg-[#ed145b]/10 flex-shrink-0">
                                                        <svg class="w-4 h-4 text-[#ed145b]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                                        </svg>
                                                    </div>
                                                    <span class="font-medium {{ request()->is('oficinas/administracion*') ? 'text-[#ed145b]' : 'text-gray-800' }} text-sm">Dirección de Administración</span>
                                                </a>
                                                <a href="/oficinas/oti" class="oficinas-dropdown-link {{ request()->is('oficinas/oti*') ? 'bg-[#ed145b]/5 border-l-4 border-[#ed145b]' : '' }}">
                                                    <div class="flex items-center justify-center w-8 h-8 rounded-full bg-[#ed145b]/10 flex-shrink-0">
                                                        <svg class="w-4 h-4 text-[#ed145b]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                                        </svg>
                                                    </div>
                                                    <span class="font-medium {{ request()->is('oficinas/oti*') ? 'text-[#ed145b]' : 'text-gray-800' }} text-sm">Tecnologías de Información</span>
                                                </a>
                                                <a href="/oficinas/planeamiento" class="oficinas-dropdown-link {{ request()->is('oficinas/planeamiento*') ? 'bg-[#ed145b]/5 border-l-4 border-[#ed145b]' : '' }}">
                                                    <div class="flex items-center justify-center w-8 h-8 rounded-full bg-[#ed145b]/10 flex-shrink-0">
                                                        <svg class="w-4 h-4 text-[#ed145b]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                                        </svg>
                                                    </div>
                                                    <span class="font-medium {{ request()->is('oficinas/planeamiento*') ? 'text-[#ed145b]' : 'text-gray-800' }} text-sm">Planeamiento y Presupuesto</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Facultades -->
                    <div class="relative group h-full">
                        <a href="#" class="nav-link flex items-center h-full {{ request()->is('facultades*') ? 'text-[#ed145b] border-b-2 border-[#ed145b]' : '' }}">
                            Facultades
                            <svg class="w-3 h-3 ml-1 transition-transform duration-200 group-hover:rotate-180"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </a>
                        <!-- Mega Dropdown Menu para Facultades -->
                        <div class="mega-dropdown-menu-facultades">
                            <div class="flex h-full">
                                <!-- Imagen a la izquierda -->
                                <div class="w-80 flex-shrink-0 h-full">
                                    <div class="h-full relative rounded-l-lg overflow-hidden">
                                        <img src="{{ asset('img/header/universidad/logouniversidad.jpg') }}"
                                            alt="Facultades UNAMAD" class="w-full h-full object-cover">
                                        <div class="absolute inset-0 bg-gradient-to-br from-[#ed145b]/80 to-[#a00340]/90 flex flex-col items-center justify-center p-8 text-white">
                                            <div class="text-center">
                                                <svg class="w-16 h-16 mb-4 opacity-90 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 14l9-5-9-5-9 5 9 5z"></path>
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 14v7"></path>
                                                </svg>
                                                <h4 class="font-bold text-xl mb-2">Facultades</h4>
                                                <p class="text-sm opacity-95 mb-2">Formación Académica</p>
                                                <p class="text-sm opacity-95">de Excelencia</p>
                                                <div class="w-16 h-0.5 bg-white/60 mx-auto mt-4"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Enlaces organizados por facultad -->
                                <div class="flex-1 p-8">
                                    <h3 class="text-xl font-bold text-gray-800 mb-6 pb-2 border-b border-gray-200">Nuestras Facultades y Escuelas Profesionales</h3>
                                    
                                    <div class="grid grid-cols-3 gap-x-8 gap-y-6">
                                        <!-- Facultad de Ingeniería -->
                                        <div>
                                            <h5 class="font-semibold text-gray-800 mb-3 text-sm uppercase tracking-wide text-[#ed145b]">Facultad de Ingeniería</h5>
                                            <div class="space-y-2">
                                                <a href="/facultades/agroindustrial" class="facultades-dropdown-link {{ request()->is('facultades/agroindustrial*') ? 'bg-[#ed145b]/5 border-l-4 border-[#ed145b]' : '' }}">
                                                    <div class="flex items-center justify-center w-8 h-8 rounded-full bg-[#ed145b]/10 flex-shrink-0">
                                                        <svg class="w-4 h-4 text-[#ed145b]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                                                        </svg>
                                                    </div>
                                                    <span class="font-medium {{ request()->is('facultades/agroindustrial*') ? 'text-[#ed145b]' : 'text-gray-800' }} text-sm">Ingeniería Agroindustrial</span>
                                                </a>
                                                <a href="/facultades/forestal" class="facultades-dropdown-link {{ request()->is('facultades/forestal*') ? 'bg-green-500/5 border-l-4 border-green-500' : '' }}">
                                                    <div class="flex items-center justify-center w-8 h-8 rounded-full bg-green-500/10 flex-shrink-0">
                                                        <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                                                        </svg>
                                                    </div>
                                                    <span class="font-medium {{ request()->is('facultades/forestal*') ? 'text-green-600' : 'text-gray-800' }} text-sm">Ingeniería Forestal y Medio Ambiente</span>
                                                </a>
                                                <a href="/facultades/sistemas" class="facultades-dropdown-link {{ request()->is('facultades/sistemas*') ? 'bg-blue-500/5 border-l-4 border-blue-500' : '' }}">
                                                    <div class="flex items-center justify-center w-8 h-8 rounded-full bg-blue-500/10 flex-shrink-0">
                                                        <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                                        </svg>
                                                    </div>
                                                    <span class="font-medium {{ request()->is('facultades/sistemas*') ? 'text-blue-600' : 'text-gray-800' }} text-sm">Ingeniería de Sistemas e Informática</span>
                                                </a>
                                                <a href="/facultades/veterinaria" class="facultades-dropdown-link {{ request()->is('facultades/veterinaria*') ? 'bg-emerald-500/5 border-l-4 border-emerald-500' : '' }}">
                                                    <div class="flex items-center justify-center w-8 h-8 rounded-full bg-emerald-500/10 flex-shrink-0">
                                                        <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                                        </svg>
                                                    </div>
                                                    <span class="font-medium {{ request()->is('facultades/veterinaria*') ? 'text-emerald-600' : 'text-gray-800' }} text-sm">Medicina Veterinaria y Zootecnia</span>
                                                </a>
                                            </div>
                                        </div>
                                        
                                        <!-- Facultad de Educación -->
                                        <div>
                                            <h5 class="font-semibold text-gray-800 mb-3 text-sm uppercase tracking-wide text-[#ed145b]">Facultad de Educación</h5>
                                            <div class="space-y-2">
                                                <a href="/facultades/matematica" class="facultades-dropdown-link {{ request()->is('facultades/matematica*') ? 'bg-violet-500/5 border-l-4 border-violet-500' : '' }}">
                                                    <div class="flex items-center justify-center w-8 h-8 rounded-full bg-violet-500/10 flex-shrink-0">
                                                        <svg class="w-4 h-4 text-violet-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                                        </svg>
                                                    </div>
                                                    <span class="font-medium {{ request()->is('facultades/matematica*') ? 'text-violet-600' : 'text-gray-800' }} text-sm">Educación Matemática y Computación</span>
                                                </a>
                                                <a href="/facultades/derecho" class="facultades-dropdown-link {{ request()->is('facultades/derecho*') ? 'bg-amber-500/5 border-l-4 border-amber-500' : '' }}">
                                                    <div class="flex items-center justify-center w-8 h-8 rounded-full bg-amber-500/10 flex-shrink-0">
                                                        <svg class="w-4 h-4 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16l3-3m-3 3l-3-3"></path>
                                                        </svg>
                                                    </div>
                                                    <span class="font-medium {{ request()->is('facultades/derecho*') ? 'text-amber-600' : 'text-gray-800' }} text-sm">Derecho y Ciencias Políticas</span>
                                                </a>
                                                <a href="/facultades/enfermeria" class="facultades-dropdown-link {{ request()->is('facultades/enfermeria*') ? 'bg-pink-500/5 border-l-4 border-pink-500' : '' }}">
                                                    <div class="flex items-center justify-center w-8 h-8 rounded-full bg-pink-500/10 flex-shrink-0">
                                                        <svg class="w-4 h-4 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                                        </svg>
                                                    </div>
                                                    <span class="font-medium {{ request()->is('facultades/enfermeria*') ? 'text-pink-600' : 'text-gray-800' }} text-sm">Enfermería</span>
                                                </a>
                                            </div>
                                        </div>
                                        
                                        <!-- Facultad de Ecoturismo -->
                                        <div>
                                            <h5 class="font-semibold text-gray-800 mb-3 text-sm uppercase tracking-wide text-[#ed145b]">Facultad de Ecoturismo</h5>
                                            <div class="space-y-2">
                                                <a href="/facultades/ecoturismo" class="facultades-dropdown-link {{ request()->is('facultades/ecoturismo*') ? 'bg-teal-500/5 border-l-4 border-teal-500' : '' }}">
                                                    <div class="flex items-center justify-center w-8 h-8 rounded-full bg-teal-500/10 flex-shrink-0">
                                                        <svg class="w-4 h-4 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                        </svg>
                                                    </div>
                                                    <span class="font-medium {{ request()->is('facultades/ecoturismo*') ? 'text-teal-600' : 'text-gray-800' }} text-sm">Ecoturismo</span>
                                                </a>
                                                <a href="/facultades/administracion" class="facultades-dropdown-link {{ request()->is('facultades/administracion*') ? 'bg-indigo-500/5 border-l-4 border-indigo-500' : '' }}">
                                                    <div class="flex items-center justify-center w-8 h-8 rounded-full bg-indigo-500/10 flex-shrink-0">
                                                        <svg class="w-4 h-4 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                                        </svg>
                                                    </div>
                                                    <span class="font-medium {{ request()->is('facultades/administracion*') ? 'text-indigo-600' : 'text-gray-800' }} text-sm">Administración y Negocios Internacionales</span>
                                                </a>
                                                <a href="/facultades/contabilidad" class="facultades-dropdown-link {{ request()->is('facultades/contabilidad*') ? 'bg-slate-500/5 border-l-4 border-slate-500' : '' }}">
                                                    <div class="flex items-center justify-center w-8 h-8 rounded-full bg-slate-500/10 flex-shrink-0">
                                                        <svg class="w-4 h-4 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                                        </svg>
                                                    </div>
                                                    <span class="font-medium {{ request()->is('facultades/contabilidad*') ? 'text-slate-600' : 'text-gray-800' }} text-sm">Contabilidad y Finanzas</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Programas -->
                    <div class="relative group h-full">
                        <a href="#" class="nav-link flex items-center h-full {{ request()->is('programas*') || request()->is('posgrado*') || request()->is('cepre*') || request()->is('ceinfo*') || request()->is('cidiomas*') ? 'text-[#ed145b] border-b-2 border-[#ed145b]' : '' }}">
                            Programas
                            <svg class="w-3 h-3 ml-1 transition-transform duration-200 group-hover:rotate-180"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </a>
                        <!-- Mega Dropdown Menu para Programas -->
                        <div class="mega-dropdown-menu-programas">
                            <div class="flex h-full">
                                <!-- Imagen a la izquierda -->
                                <div class="w-80 flex-shrink-0 h-full">
                                    <div class="h-full relative rounded-l-lg overflow-hidden">
                                        <img src="{{ asset('img/header/universidad/logouniversidad.jpg') }}"
                                            alt="Programas UNAMAD" class="w-full h-full object-cover">
                                        <div class="absolute inset-0 bg-gradient-to-br from-[#ed145b]/80 to-[#a00340]/90 flex flex-col items-center justify-center p-8 text-white">
                                            <div class="text-center">
                                                <svg class="w-16 h-16 mb-4 opacity-90 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                                </svg>
                                                <h4 class="font-bold text-xl mb-2">Programas</h4>
                                                <p class="text-sm opacity-95 mb-2">Formación Integral</p>
                                                <p class="text-sm opacity-95">y Especializada</p>
                                                <div class="w-16 h-0.5 bg-white/60 mx-auto mt-4"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Enlaces organizados -->
                                <div class="flex-1 p-8">
                                    <h3 class="text-xl font-bold text-gray-800 mb-6 pb-2 border-b border-gray-200">Programas Académicos y Servicios Educativos</h3>
                                    
                                    <div class="grid grid-cols-1 gap-y-4">
                                        <a href="https://ceinfo.unamad.edu.pe/" target="_blank" rel="noopener noreferrer" class="programas-dropdown-link">
                                            <div class="flex items-center justify-center w-10 h-10 rounded-full bg-[#ed145b]/10 flex-shrink-0">
                                                <svg class="w-5 h-5 text-[#ed145b]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                                </svg>
                                            </div>
                                            <div>
                                                <span class="font-semibold text-gray-800">Centro de Informática</span>
                                                <p class="text-xs text-gray-600 mt-1">Servicios tecnológicos y capacitación en TIC para la comunidad universitaria</p>
                                            </div>
                                        </a>
                                        
                                        <a href="https://cidiomas.unamad.edu.pe/" target="_blank" rel="noopener noreferrer" class="programas-dropdown-link">
                                            <div class="flex items-center justify-center w-10 h-10 rounded-full bg-[#ed145b]/10 flex-shrink-0">
                                                <svg class="w-5 h-5 text-[#ed145b]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129"></path>
                                                </svg>
                                            </div>
                                            <div>
                                                <span class="font-semibold text-gray-800">Centro de Idiomas</span>
                                                <p class="text-xs text-gray-600 mt-1">Enseñanza de lenguas extranjeras y certificaciones internacionales</p>
                                            </div>
                                        </a>
                                        
                                        <a href="https://cepre.unamad.edu.pe/" target="_blank" rel="noopener noreferrer" class="programas-dropdown-link">
                                            <div class="flex items-center justify-center w-10 h-10 rounded-full bg-[#ed145b]/10 flex-shrink-0">
                                                <svg class="w-5 h-5 text-[#ed145b]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                                </svg>
                                            </div>
                                            <div>
                                                <span class="font-semibold text-gray-800">Centro Preuniversitario</span>
                                                <p class="text-xs text-gray-600 mt-1">Preparación integral para el ingreso a la universidad</p>
                                            </div>
                                        </a>
                                        
                                        <a href="/posgrado" class="programas-dropdown-link">
                                            <div class="flex items-center justify-center w-10 h-10 rounded-full bg-[#ed145b]/10 flex-shrink-0">
                                                <svg class="w-5 h-5 text-[#ed145b]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path>
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                                                </svg>
                                            </div>
                                            <div>
                                                <span class="font-semibold text-gray-800">Escuela de Posgrado</span>
                                                <p class="text-xs text-gray-600 mt-1">Maestrías, doctorados y programas de especialización profesional</p>
                                            </div>
                                        </a>
                                        
                                        <a href="https://posgrado-educacion.unamad.edu.pe/" target="_blank" rel="noopener noreferrer" class="programas-dropdown-link">
                                            <div class="flex items-center justify-center w-10 h-10 rounded-full bg-[#ed145b]/10 flex-shrink-0">
                                                <svg class="w-5 h-5 text-[#ed145b]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path>
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14v7"></path>
                                                </svg>
                                            </div>
                                            <div>
                                                <span class="font-semibold text-gray-800">Posgrado Educación</span>
                                                <p class="text-xs text-gray-600 mt-1">Programas especializados en ciencias de la educación</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Proyectos -->
                    <div class="relative group h-full">
                        <a href="#" class="nav-link flex items-center h-full {{ request()->is('proyectos*') ? 'text-[#ed145b] border-b-2 border-[#ed145b]' : '' }}">
                            Proyectos
                            <svg class="w-3 h-3 ml-1 transition-transform duration-200 group-hover:rotate-180"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </a>
                        <!-- Mega Dropdown Menu para Proyectos -->
                        <div class="mega-dropdown-menu-proyectos">
                            <div class="flex h-full">
                                <!-- Imagen a la izquierda -->
                                <div class="w-80 flex-shrink-0 h-full">
                                    <div class="h-full relative rounded-l-lg overflow-hidden">
                                        <img src="{{ asset('img/header/universidad/logouniversidad.jpg') }}"
                                            alt="Proyectos UNAMAD" class="w-full h-full object-cover">
                                        <div class="absolute inset-0 bg-gradient-to-br from-[#ed145b]/80 to-[#a00340]/90 flex flex-col items-center justify-center p-8 text-white">
                                            <div class="text-center">
                                                <svg class="w-16 h-16 mb-4 opacity-90 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                                </svg>
                                                <h4 class="font-bold text-xl mb-2">Proyectos</h4>
                                                <p class="text-sm opacity-95 mb-2">Infraestructura</p>
                                                <p class="text-sm opacity-95">y Desarrollo</p>
                                                <div class="w-16 h-0.5 bg-white/60 mx-auto mt-4"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Enlaces organizados en 2 columnas -->
                                <div class="flex-1 p-8">
                                    <h3 class="text-xl font-bold text-gray-800 mb-6 pb-2 border-b border-gray-200">Proyectos e Infraestructura Universitaria</h3>
                                    
                                    <div class="grid grid-cols-2 gap-x-8 gap-y-4">
                                        <!-- Columna 1 -->
                                        <a href="/proyectos/jardin" class="proyectos-dropdown-link">
                                            <div class="flex items-center justify-center w-10 h-10 rounded-full bg-[#ed145b]/10 flex-shrink-0">
                                                <svg class="w-5 h-5 text-[#ed145b]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                                </svg>
                                            </div>
                                            <div>
                                                <span class="font-semibold text-gray-800">Cuna Jardín</span>
                                                <p class="text-xs text-gray-600 mt-1">Educación inicial para hijos de estudiantes y trabajadores</p>
                                            </div>
                                        </a>
                                        
                                        <a href="/proyectos/panificadora" class="proyectos-dropdown-link">
                                            <div class="flex items-center justify-center w-10 h-10 rounded-full bg-[#ed145b]/10 flex-shrink-0">
                                                <svg class="w-5 h-5 text-[#ed145b]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 15.546c-.523 0-1.046.151-1.5.454a2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.701 2.701 0 00-1.5-.454M9 6v2m3-2v2m3-2v2M9 3h.01M12 3h.01M15 3h.01M21 21v-7a2 2 0 00-2-2H5a2 2 0 00-2 2v7h18zM3 9h18v10a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path>
                                                </svg>
                                            </div>
                                            <div>
                                                <span class="font-semibold text-gray-800">Panificadora UNAMAD</span>
                                                <p class="text-xs text-gray-600 mt-1">Centro de investigación, capacitación y producción de panadería</p>
                                            </div>
                                        </a>
                                        
                                        <a href="/proyectos/bus" class="proyectos-dropdown-link">
                                            <div class="flex items-center justify-center w-10 h-10 rounded-full bg-[#ed145b]/10 flex-shrink-0">
                                                <svg class="w-5 h-5 text-[#ed145b]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path>
                                                </svg>
                                            </div>
                                            <div>
                                                <span class="font-semibold text-gray-800">Bus Universitario</span>
                                                <p class="text-xs text-gray-600 mt-1">Servicio de transporte gratuito para estudiantes</p>
                                            </div>
                                        </a>
                                        
                                        <a href="/proyectos/herbario" class="proyectos-dropdown-link">
                                            <div class="flex items-center justify-center w-10 h-10 rounded-full bg-[#ed145b]/10 flex-shrink-0">
                                                <svg class="w-5 h-5 text-[#ed145b]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                                                </svg>
                                            </div>
                                            <div>
                                                <span class="font-semibold text-gray-800">Herbario</span>
                                                <p class="text-xs text-gray-600 mt-1">Colección científica de flora amazónica</p>
                                            </div>
                                        </a>
                                        
                                        <!-- Columna 2 -->
                                        <a href="/proyectos/estacion" class="proyectos-dropdown-link">
                                            <div class="flex items-center justify-center w-10 h-10 rounded-full bg-[#ed145b]/10 flex-shrink-0">
                                                <svg class="w-5 h-5 text-[#ed145b]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                </svg>
                                            </div>
                                            <div>
                                                <span class="font-semibold text-gray-800">Estación Geológica</span>
                                                <p class="text-xs text-gray-600 mt-1">Centro de investigación en ciencias de la tierra</p>
                                            </div>
                                        </a>
                                        
                                        <a href="/proyectos/aldea" class="proyectos-dropdown-link">
                                            <div class="flex items-center justify-center w-10 h-10 rounded-full bg-[#ed145b]/10 flex-shrink-0">
                                                <svg class="w-5 h-5 text-[#ed145b]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                                                </svg>
                                            </div>
                                            <div>
                                                <span class="font-semibold text-gray-800">Aldea Científica</span>
                                                <p class="text-xs text-gray-600 mt-1">Espacio de investigación y desarrollo tecnológico</p>
                                            </div>
                                        </a>
                                        
                                        <a href="/proyectos/km16" class="proyectos-dropdown-link">
                                            <div class="flex items-center justify-center w-10 h-10 rounded-full bg-[#ed145b]/10 flex-shrink-0">
                                                <svg class="w-5 h-5 text-[#ed145b]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                                </svg>
                                            </div>
                                            <div>
                                                <span class="font-semibold text-gray-800">Campus Km. 16</span>
                                                <p class="text-xs text-gray-600 mt-1">Nueva sede universitaria en desarrollo</p>
                                            </div>
                                        </a>
                                        
                                        <a href="/proyectos/km18" class="proyectos-dropdown-link">
                                            <div class="flex items-center justify-center w-10 h-10 rounded-full bg-[#ed145b]/10 flex-shrink-0">
                                                <svg class="w-5 h-5 text-[#ed145b]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                </svg>
                                            </div>
                                            <div>
                                                <span class="font-semibold text-gray-800">Complejo Polideportivo Km. 18</span>
                                                <p class="text-xs text-gray-600 mt-1">Instalaciones deportivas y recreativas</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Transparencia -->
                    <div class="relative group h-full">
                        <a href="#" class="nav-link flex items-center h-full {{ request()->is('transparencia*') ? 'text-[#ed145b] border-b-2 border-[#ed145b]' : '' }}">
                            Transparencia
                            <svg class="w-3 h-3 ml-1 transition-transform duration-200 group-hover:rotate-180"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </a>
                        <!-- Mega Dropdown Menu para Transparencia -->
                        <div class="mega-dropdown-menu-transparencia">
                            <div class="flex h-full">
                                <!-- Imagen a la izquierda -->
                                <div class="w-80 flex-shrink-0 h-full">
                                    <div class="h-full relative rounded-l-lg overflow-hidden">
                                        <img src="{{ asset('img/header/universidad/logouniversidad.jpg') }}"
                                            alt="Transparencia UNAMAD" class="w-full h-full object-cover">
                                        <div class="absolute inset-0 bg-gradient-to-br from-[#ed145b]/80 to-[#a00340]/90 flex flex-col items-center justify-center p-8 text-white">
                                            <div class="text-center">
                                                <svg class="w-16 h-16 mb-4 opacity-90 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                                </svg>
                                                <h4 class="font-bold text-xl mb-2">Transparencia</h4>
                                                <p class="text-sm opacity-95 mb-2">Acceso a la</p>
                                                <p class="text-sm opacity-95">Información Pública</p>
                                                <div class="w-16 h-0.5 bg-white/60 mx-auto mt-4"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Enlaces organizados -->
                                <div class="flex-1 p-8">
                                    <h3 class="text-xl font-bold text-gray-800 mb-6 pb-2 border-b border-gray-200">Portal de Transparencia Institucional</h3>
                                    
                                    <div class="grid grid-cols-1 gap-y-4">
                                        <a href="/transparencia/indicador-55" class="transparencia-dropdown-link">
                                            <div class="flex items-center justify-center w-10 h-10 rounded-full bg-[#ed145b]/10 flex-shrink-0">
                                                <svg class="w-5 h-5 text-[#ed145b]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                                </svg>
                                            </div>
                                            <div>
                                                <span class="font-semibold text-gray-800">Indicador 55</span>
                                                <p class="text-xs text-gray-600 mt-1">Indicadores de cumplimiento y gestión transparente</p>
                                            </div>
                                        </a>
                                        
                                        <a href="/transparencia/articulo-11" class="transparencia-dropdown-link">
                                            <div class="flex items-center justify-center w-10 h-10 rounded-full bg-[#ed145b]/10 flex-shrink-0">
                                                <svg class="w-5 h-5 text-[#ed145b]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                                </svg>
                                            </div>
                                            <div>
                                                <span class="font-semibold text-gray-800">Artículo 11</span>
                                                <p class="text-xs text-gray-600 mt-1">Información según la Ley de Transparencia y Acceso a la Información Pública</p>
                                            </div>
                                        </a>
                                        
                                        <div class="transparencia-section">
                                            <div class="flex items-center mb-3">
                                                <div class="flex items-center justify-center w-10 h-10 rounded-full bg-[#ed145b]/10 flex-shrink-0">
                                                    <svg class="w-5 h-5 text-[#ed145b]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V2"></path>
                                                    </svg>
                                                </div>
                                                <div class="ml-3">
                                                    <span class="font-semibold text-gray-800">Acceso a Información Pública</span>
                                                    <p class="text-xs text-gray-600 mt-1">Solicita información de manera virtual o presencial</p>
                                                </div>
                                            </div>
                                            <div class="ml-14 space-y-2">
                                                <a href="https://facilita.gob.pe/t/3371" target="_blank" rel="noopener noreferrer" class="transparencia-sub-link">
                                                    <svg class="w-4 h-4 text-[#ed145b]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                                    </svg>
                                                    <span>Formulario Virtual</span>
                                                </a>
                                                <a href="https://drive.google.com/file/d/1tStD8HiMChMZO8QmnepBPU3evR920xGz/view" target="_blank" rel="noopener noreferrer" class="transparencia-sub-link">
                                                    <svg class="w-4 h-4 text-[#ed145b]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                                    </svg>
                                                    <span>Descargar Formato</span>
                                                </a>
                                            </div>
                                        </div>
                                        
                                        <a href="/transparencia/documentos" class="transparencia-dropdown-link">
                                            <div class="flex items-center justify-center w-10 h-10 rounded-full bg-[#ed145b]/10 flex-shrink-0">
                                                <svg class="w-5 h-5 text-[#ed145b]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v1a1 1 0 001 1h4a1 1 0 001-1v-1m3-2V10a2 2 0 00-2-2H8a2 2 0 00-2 2v4h12zM5 21h14a2 2 0 002-2v-5a2 2 0 00-2-2H5a2 2 0 00-2 2v5a2 2 0 002 2z"></path>
                                                </svg>
                                            </div>
                                            <div>
                                                <span class="font-semibold text-gray-800">Documentos Normativos y de Gestión</span>
                                                <p class="text-xs text-gray-600 mt-1">Reglamentos, directivas, manuales y documentos institucionales</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>

                <!-- Logos institucionales al extremo derecho -->
                <div class="hidden lg:flex items-center space-x-3">
                    <a href="https://www.transparencia.gob.pe/enlaces/pte_transparencia_enlaces.aspx?id_entidad=13136#.YvEV03ZByUk" target="_blank" class="opacity-80 hover:opacity-100 transition-opacity">
                        <img src="{{ asset('img/header/logo_portal_transparencia.png') }}"
                            alt="Portal de Transparencia" class="h-8">
                    </a>
                    <a href="https://www.gob.pe/unamad" target="_blank"
                        class="opacity-80 hover:opacity-100 transition-opacity">
                        <img src="{{ asset('img/header/logo_gobpe.png') }}" alt="GOB.PE" class="h-8">
                    </a>
                </div>

                <!-- Menú móvil -->
                <button class="lg:hidden text-gray-700 hover:text-[#ed145b] transition-colors"
                    onclick="toggleMobileMenu()">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Menú móvil desplegable -->
        <div id="mobileMenu" class="hidden lg:hidden border-t bg-white shadow-lg">
            <nav class="px-6 py-6 flex flex-col space-y-2">
                <a href="/" class="mobile-link {{ request()->is('/') ? 'text-[#ed145b] border-l-4 border-[#ed145b] pl-3' : '' }}">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>
                    Inicio
                </a>
                
                <!-- Universidad -->
                <div class="mobile-dropdown">
                    <button onclick="toggleMobileSubmenu('universidad')" class="mobile-link w-full text-left justify-between {{ request()->is('universidad*') ? 'text-[#ed145b] bg-[#ed145b]/5' : '' }}">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                            </svg>
                            Universidad
                        </div>
                        <svg class="w-4 h-4 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div id="universidad" class="mobile-submenu hidden pl-8 mt-2 space-y-2">
                        <a href="/universidad/presentacion" class="mobile-sublink {{ request()->is('universidad/presentacion') ? 'text-[#ed145b] bg-[#ed145b]/10 border-l-4 border-[#ed145b]' : '' }}">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Presentación
                        </a>
                        <a href="/universidad/autoridades" class="mobile-sublink {{ request()->is('universidad/autoridades') ? 'text-[#ed145b] bg-[#ed145b]/10 border-l-4 border-[#ed145b]' : '' }}">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                            Autoridades
                        </a>
                        <a href="/universidad/historia" class="mobile-sublink {{ request()->is('universidad/historia') ? 'text-[#ed145b] bg-[#ed145b]/10 border-l-4 border-[#ed145b]' : '' }}">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                            </svg>
                            Historia
                        </a>
                        <a href="#" class="mobile-sublink">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            Sedes
                        </a>
                        <a href="#" class="mobile-sublink">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                            Política Institucional
                        </a>
                    </div>
                </div>

                <!-- Oficinas -->
                <div class="mobile-dropdown">
                    <button onclick="toggleMobileSubmenu('oficinas')" class="mobile-link w-full text-left justify-between {{ request()->is('oficinas*') ? 'text-[#ed145b] bg-[#ed145b]/5' : '' }}">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                            </svg>
                            Oficinas
                        </div>
                        <svg class="w-4 h-4 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div id="oficinas" class="mobile-submenu hidden pl-8 mt-2 space-y-2">
                        <div class="mb-3">
                            <h6 class="text-xs font-semibold text-gray-500 uppercase mb-2">Órganos de Gobierno</h6>
                            <div class="space-y-2">
                                <a href="/oficinas/asamblea" class="mobile-sublink">Asamblea Universitaria</a>
                                <a href="/oficinas/consejo" class="mobile-sublink">Consejo Universitario</a>
                                <a href="/oficinas/decanatura" class="mobile-sublink">Decanatura</a>
                            </div>
                        </div>
                        <div class="mb-3">
                            <h6 class="text-xs font-semibold text-gray-500 uppercase mb-2">Vicerrectorados</h6>
                            <div class="space-y-2">
                                <!-- Vicerrectorado Académico con sub-oficinas -->
                                <div class="mobile-sub-dropdown">
                                    <button onclick="toggleMobileSubSubmenu('vicerrectorado-academico')" class="mobile-sublink w-full text-left justify-between">
                                        <span>Vicerrectorado Académico</span>
                                        <svg class="w-3 h-3 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                        </svg>
                                    </button>
                                    <div id="vicerrectorado-academico" class="mobile-sub-submenu hidden pl-6 mt-1 space-y-1">
                                        <a href="/oficinas/admision" class="mobile-sub-sublink">Dirección de Admisión</a>
                                        <a href="/oficinas/biblioteca" class="mobile-sub-sublink">Biblioteca Central</a>
                                        <a href="/oficinas/academicos" class="mobile-sub-sublink">Asuntos Académicos</a>
                                        <a href="https://proyeccionsocial.unamad.edu.pe/" target="_blank" class="mobile-sub-sublink">Proyección Social y Extensión Cultural</a>
                                        <a href="/oficinas/bienestar" class="mobile-sub-sublink">Bienestar Universitario</a>
                                    </div>
                                </div>
                                
                                <!-- Vicerrectorado de Investigación con sub-oficinas -->
                                <div class="mobile-sub-dropdown">
                                    <button onclick="toggleMobileSubSubmenu('vicerrectorado-investigacion')" class="mobile-sublink w-full text-left justify-between">
                                        <span>Vicerrectorado de Investigación</span>
                                        <svg class="w-3 h-3 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                        </svg>
                                    </button>
                                    <div id="vicerrectorado-investigacion" class="mobile-sub-submenu hidden pl-6 mt-1 space-y-1">
                                        <a href="/oficinas/incubadora" class="mobile-sub-sublink">Incubadora de Empresas</a>
                                        <a href="/oficinas/innovacion" class="mobile-sub-sublink">Innovación y Transferencia Tecnológica</a>
                                        <a href="/oficinas/investigacion" class="mobile-sub-sublink">Instituto de Investigación</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <h6 class="text-xs font-semibold text-gray-500 uppercase mb-2">Oficinas Centrales</h6>
                            <div class="space-y-2">
                                <a href="/oficinas/secretaria" class="mobile-sublink">Secretaría General</a>
                                <a href="/oficinas/calidad" class="mobile-sublink">Gestión de la Calidad</a>
                                <a href="/oficinas/cooperacion" class="mobile-sublink">Cooperación y Relaciones Internacionales</a>
                                <a href="/oficinas/gestion-ambiental" class="mobile-sublink">Gestión Ambiental</a>
                                <a href="/oficinas/administracion" class="mobile-sublink">Dirección de Administración</a>
                                <a href="/oficinas/tecnologias-informacion" class="mobile-sublink">Tecnologías de Información</a>
                                <a href="/oficinas/planeamiento" class="mobile-sublink">Planeamiento y Presupuesto</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Facultades -->
                <div class="mobile-dropdown">
                    <button onclick="toggleMobileSubmenu('facultades')" class="mobile-link w-full text-left justify-between {{ request()->is('facultades*') ? 'text-[#ed145b] bg-[#ed145b]/5' : '' }}">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14v7"></path>
                            </svg>
                            Facultades
                        </div>
                        <svg class="w-4 h-4 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div id="facultades" class="mobile-submenu hidden pl-8 mt-2 space-y-2">
                        <div class="mb-3">
                            <h6 class="text-xs font-semibold text-gray-500 uppercase mb-2">Facultad de Ingeniería</h6>
                            <div class="space-y-2">
                                <a href="/facultades/agroindustrial" class="mobile-sublink">Ingeniería Agroindustrial</a>
                                <a href="/facultades/forestal" class="mobile-sublink">Ingeniería Forestal y Medio Ambiente</a>
                                <a href="/facultades/sistemas" class="mobile-sublink">Ingeniería de Sistemas e Informática</a>
                                <a href="/facultades/veterinaria" class="mobile-sublink">Medicina Veterinaria y Zootecnia</a>
                            </div>
                        </div>
                        <div class="mb-3">
                            <h6 class="text-xs font-semibold text-gray-500 uppercase mb-2">Facultad de Educación</h6>
                            <div class="space-y-2">
                                <a href="/facultades/matematica" class="mobile-sublink">Educación Matemática y Computación</a>
                                <a href="/facultades/derecho" class="mobile-sublink">Derecho y Ciencias Políticas</a>
                                <a href="/facultades/enfermeria" class="mobile-sublink">Enfermería</a>
                            </div>
                        </div>
                        <div class="mb-3">
                            <h6 class="text-xs font-semibold text-gray-500 uppercase mb-2">Facultad de Ecoturismo</h6>
                            <div class="space-y-2">
                                <a href="/facultades/ecoturismo" class="mobile-sublink">Ecoturismo</a>
                                <a href="/facultades/administracion" class="mobile-sublink">Administración y Negocios Internacionales</a>
                                <a href="/facultades/contabilidad" class="mobile-sublink">Contabilidad y Finanzas</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Programas -->
                <div class="mobile-dropdown">
                    <button onclick="toggleMobileSubmenu('programas')" class="mobile-link w-full text-left justify-between {{ request()->is('programas*') || request()->is('posgrado*') || request()->is('cepre*') || request()->is('ceinfo*') || request()->is('cidiomas*') ? 'text-[#ed145b] bg-[#ed145b]/5' : '' }}">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                            </svg>
                            Programas
                        </div>
                        <svg class="w-4 h-4 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div id="programas" class="mobile-submenu hidden pl-8 mt-2 space-y-2">
                        <a href="https://ceinfo.unamad.edu.pe/" target="_blank" rel="noopener noreferrer" class="mobile-sublink">Centro de Informática</a>
                        <a href="https://cidiomas.unamad.edu.pe/" target="_blank" rel="noopener noreferrer" class="mobile-sublink">Centro de Idiomas</a>
                        <a href="https://cepre.unamad.edu.pe/" target="_blank" rel="noopener noreferrer" class="mobile-sublink">Centro Preuniversitario</a>
                        <a href="/posgrado" class="mobile-sublink">Escuela de Posgrado</a>
                        <a href="https://posgrado-educacion.unamad.edu.pe/" target="_blank" rel="noopener noreferrer" class="mobile-sublink">Posgrado Educación</a>
                    </div>
                </div>

                <!-- Proyectos -->
                <div class="mobile-dropdown">
                    <button onclick="toggleMobileSubmenu('proyectos')" class="mobile-link w-full text-left justify-between {{ request()->is('proyectos*') ? 'text-[#ed145b] bg-[#ed145b]/5' : '' }}">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                            </svg>
                            Proyectos
                        </div>
                        <svg class="w-4 h-4 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div id="proyectos" class="mobile-submenu hidden pl-8 mt-2 space-y-2">
                        <a href="/proyectos/jardin" class="mobile-sublink">Cuna Jardín</a>
                        <a href="/proyectos/panificadora" class="mobile-sublink">Panificadora UNAMAD</a>
                        <a href="/proyectos/bus" class="mobile-sublink">Bus Universitario</a>
                        <a href="/proyectos/herbario" class="mobile-sublink">Herbario</a>
                        <a href="/proyectos/estacion" class="mobile-sublink">Estación Geológica</a>
                        <a href="/proyectos/aldea" class="mobile-sublink">Aldea Científica</a>
                        <a href="/proyectos/km16" class="mobile-sublink">Campus Km. 16</a>
                        <a href="/proyectos/km18" class="mobile-sublink">Complejo Polideportivo Km. 18</a>
                    </div>
                </div>

                <!-- Transparencia -->
                <div class="mobile-dropdown">
                    <button onclick="toggleMobileSubmenu('transparencia')" class="mobile-link w-full text-left justify-between {{ request()->is('transparencia*') ? 'text-[#ed145b] bg-[#ed145b]/5' : '' }}">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                            Transparencia
                        </div>
                        <svg class="w-4 h-4 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div id="transparencia" class="mobile-submenu hidden pl-8 mt-2 space-y-2">
                        <a href="/transparencia/indicador-55" class="mobile-sublink">Indicador 55</a>
                        <a href="/transparencia/articulo-11" class="mobile-sublink">Artículo 11</a>
                        <div class="mb-2">
                            <span class="text-xs font-semibold text-gray-600 block mb-2">Acceso a Información Pública:</span>
                            <div class="pl-4 space-y-1">
                                <a href="https://facilita.gob.pe/t/3371" target="_blank" rel="noopener noreferrer" class="mobile-sublink text-sm">Formulario Virtual</a>
                                <a href="https://drive.google.com/file/d/1tStD8HiMChMZO8QmnepBPU3evR920xGz/view" target="_blank" rel="noopener noreferrer" class="mobile-sublink text-sm">Descargar Formato</a>
                            </div>
                        </div>
                        <a href="/transparencia/documentos" class="mobile-sublink">Documentos Normativos y de Gestión</a>
                    </div>
                </div>
            </nav>
        </div>

        <style>
            .nav-link {
                display: flex;
                align-items: center;
                height: 100%;
                color: #374151;
                font-weight: 500;
                font-size: 0.95rem;
                transition: color 0.3s ease;
            }

            .nav-link:hover,
            .nav-link.active {
                color: #ed145b;
            }

            .dropdown-menu {
                position: absolute;
                top: 100%;
                left: 0;
                margin-top: 0;
                width: 14rem;
                background: white;
                border-radius: 0.5rem;
                box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
                border: 1px solid #e5e7eb;
                opacity: 0;
                visibility: hidden;
                transform: translateY(-0.25rem);
                transition: all 0.3s ease;
                z-index: 50;
            }

            .group:hover .dropdown-menu {
                opacity: 1;
                visibility: visible;
                transform: translateY(0);
            }

            .dropdown-link {
                display: flex;
                align-items: center;
                height: 100%;
                padding: 0.75rem 1rem;
                font-size: 0.875rem;
                color: #374151;
                transition: all 0.2s ease;
                border-radius: 0.375rem;
                margin: 0.125rem;
            }

            .dropdown-link:hover {
                background-color: #f3f4f6;
                color: #ed145b;
            }

            /* Ajustar el grupo para ocupar el alto completo */
            .group {
                height: 100%;
                display: flex;
                align-items: center;
            }

            /* Ajustar el contenedor de navegación principal */
            nav.lg\:flex.items-center.space-x-8 {
                height: 100%;
            }

            /* Mega Dropdown para Universidad */
            .mega-dropdown-menu {
                position: absolute;
                top: 100%;
                left: -100%;
                margin-top: 0;
                width: 42rem;
                min-height: 24rem;
                background: white;
                border-radius: 1rem;
                box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.15), 0 10px 15px -3px rgba(0, 0, 0, 0.1);
                border: 1px solid #e5e7eb;
                opacity: 0;
                visibility: hidden;
                transform: translateY(-0.5rem) scale(0.95);
                transition: all 0.4s ease;
                z-index: 50;
                overflow: hidden;
            }

            .group:hover .mega-dropdown-menu {
                opacity: 1;
                visibility: visible;
                transform: translateY(0) scale(1);
            }

            .mega-dropdown-link {
                display: flex;
                align-items: flex-start;
                padding: 1rem 0;
                font-size: 0.875rem;
                color: #374151;
                transition: all 0.3s ease;
                font-weight: 500;
                gap: 1rem;
                border-radius: 0.5rem;
            }

            .mega-dropdown-link:hover {
                color: #ed145b;
                transform: translateX(0.5rem);
                background-color: #f9fafb;
            }

            .mega-dropdown-link:hover .w-10 {
                background-color: #ed145b;
                transform: scale(1.05);
            }

            .mega-dropdown-link:hover .w-10 svg {
                color: white;
                transform: scale(1.1);
            }

            .mega-dropdown-link div:last-child span {
                transition: all 0.3s ease;
            }

            .mega-dropdown-link:hover div:last-child span {
                color: #ed145b;
            }

            /* Mega Dropdown para Oficinas */
            .mega-dropdown-menu-oficinas {
                position: absolute;
                top: 100%;
                left: -200%;
                margin-top: 0;
                width: 70rem;
                min-height: 32rem;
                background: white;
                border-radius: 1rem;
                box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.15), 0 10px 15px -3px rgba(0, 0, 0, 0.1);
                border: 1px solid #e5e7eb;
                opacity: 0;
                visibility: hidden;
                transform: translateY(-0.5rem) scale(0.95);
                transition: all 0.4s ease;
                z-index: 50;
                overflow: visible;
            }

            .group:hover .mega-dropdown-menu-oficinas {
                opacity: 1;
                visibility: visible;
                transform: translateY(0) scale(1);
            }

            .oficinas-dropdown-link {
                display: flex;
                align-items: center;
                padding: 0.5rem 0;
                font-size: 0.875rem;
                color: #374151;
                transition: all 0.3s ease;
                font-weight: 500;
                gap: 0.75rem;
                border-radius: 0.375rem;
            }

            .oficinas-dropdown-link:hover {
                color: #ed145b;
                transform: translateX(0.25rem);
            }

            .oficinas-dropdown-link:hover .w-8 {
                background-color: #ed145b;
                transform: scale(1.05);
            }

            .oficinas-dropdown-link:hover .w-8 svg {
                color: white;
                transform: scale(1.1);
            }

            .oficinas-dropdown-link:hover span {
                color: #ed145b;
            }

            /* Sub-dropdowns para Vicerrectorados */
            .sub-dropdown-menu-academico,
            .sub-dropdown-menu-investigacion {
                position: absolute;
                left: 100%;
                top: 0;
                margin-left: 0;
                width: 22rem;
                min-height: 14rem;
                background: white;
                border-radius: 0.75rem;
                box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
                border: 1px solid #e5e7eb;
                opacity: 0;
                visibility: hidden;
                transform: translateX(-0.25rem) scale(0.95);
                transition: all 0.3s ease;
                z-index: 60;
                overflow: hidden;
            }

            /* Crear un puente invisible para evitar que se cierre */
            .sub-dropdown-menu-academico::before,
            .sub-dropdown-menu-investigacion::before {
                content: '';
                position: absolute;
                left: -0.75rem;
                top: 0;
                width: 0.75rem;
                height: 100%;
                background: transparent;
                z-index: -1;
            }

            .group-vicerrectorado:hover .sub-dropdown-menu-academico,
            .group-vicerrectorado:hover .sub-dropdown-menu-investigacion {
                opacity: 1;
                visibility: visible;
                transform: translateX(0) scale(1);
            }

            /* Extender el área de hover del grupo vicerrectorado */
            .group-vicerrectorado {
                position: relative;
            }

            .group-vicerrectorado::after {
                content: '';
                position: absolute;
                left: 100%;
                top: 0;
                width: 1rem;
                height: 100%;
                background: transparent;
                z-index: 59;
            }

            .sub-dropdown-link {
                display: flex;
                align-items: center;
                padding: 0.5rem 0;
                font-size: 0.8rem;
                color: #374151;
                transition: all 0.3s ease;
                font-weight: 500;
                gap: 0.5rem;
                border-radius: 0.25rem;
            }

            .sub-dropdown-link:hover {
                color: #ed145b;
                transform: translateX(0.25rem);
                background-color: rgba(219, 4, 85, 0.05);
                padding-left: 0.5rem;
                margin-left: -0.5rem;
                margin-right: -0.5rem;
            }

            .sub-dropdown-link:hover svg {
                color: #ed145b;
                transform: scale(1.1);
            }

            /* Mega Dropdown para Facultades */
            .mega-dropdown-menu-facultades {
                position: absolute;
                top: 100%;
                left: -150%;
                margin-top: 0;
                width: 65rem;
                height: 28rem;
                background: white;
                border-radius: 1rem;
                box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.15), 0 10px 15px -3px rgba(0, 0, 0, 0.1);
                border: 1px solid #e5e7eb;
                opacity: 0;
                visibility: hidden;
                transform: translateY(-0.5rem) scale(0.95);
                transition: all 0.4s ease;
                z-index: 50;
                overflow: hidden;
            }

            .group:hover .mega-dropdown-menu-facultades {
                opacity: 1;
                visibility: visible;
                transform: translateY(0) scale(1);
            }

            .facultades-dropdown-link {
                display: flex;
                align-items: center;
                padding: 0.5rem 0;
                font-size: 0.875rem;
                color: #374151;
                transition: all 0.3s ease;
                font-weight: 500;
                gap: 0.75rem;
                border-radius: 0.375rem;
            }

            .facultades-dropdown-link:hover {
                color: #ed145b;
                transform: translateX(0.25rem);
            }

            .facultades-dropdown-link:hover .w-8 {
                background-color: #ed145b;
                transform: scale(1.05);
            }

            .facultades-dropdown-link:hover .w-8 svg {
                color: white;
                transform: scale(1.1);
            }

            .facultades-dropdown-link:hover span {
                color: #ed145b;
            }

            /* Mega Dropdown para Programas */
            .mega-dropdown-menu-programas {
                position: absolute;
                top: 100%;
                left: -100%;
                margin-top: 0;
                width: 45rem;
                height: 42rem;
                background: white;
                border-radius: 1rem;
                box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.15), 0 10px 15px -3px rgba(0, 0, 0, 0.1);
                border: 1px solid #e5e7eb;
                opacity: 0;
                visibility: hidden;
                transform: translateY(-0.5rem) scale(0.95);
                transition: all 0.4s ease;
                z-index: 50;
                overflow: hidden;
            }

            .group:hover .mega-dropdown-menu-programas {
                opacity: 1;
                visibility: visible;
                transform: translateY(0) scale(1);
            }

            .programas-dropdown-link {
                display: flex;
                align-items: flex-start;
                padding: 1rem 0;
                font-size: 0.875rem;
                color: #374151;
                transition: all 0.3s ease;
                font-weight: 500;
                gap: 1rem;
                border-radius: 0.5rem;
            }

            .programas-dropdown-link:hover {
                color: #ed145b;
                transform: translateX(0.5rem);
                background-color: #f9fafb;
            }

            .programas-dropdown-link:hover .w-10 {
                background-color: #ed145b;
                transform: scale(1.05);
            }

            .programas-dropdown-link:hover .w-10 svg {
                color: white;
                transform: scale(1.1);
            }

            /* Mega Dropdown para Proyectos */
            .mega-dropdown-menu-proyectos {
                position: absolute;
                top: 100%;
                left: -200%;
                margin-top: 0;
                width: 58rem;
                height: 34rem;
                background: white;
                border-radius: 1rem;
                box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.15), 0 10px 15px -3px rgba(0, 0, 0, 0.1);
                border: 1px solid #e5e7eb;
                opacity: 0;
                visibility: hidden;
                transform: translateY(-0.5rem) scale(0.95);
                transition: all 0.4s ease;
                z-index: 50;
                overflow: hidden;
            }

            .group:hover .mega-dropdown-menu-proyectos {
                opacity: 1;
                visibility: visible;
                transform: translateY(0) scale(1);
            }

            .proyectos-dropdown-link {
                display: flex;
                align-items: flex-start;
                padding: 0.75rem 0;
                font-size: 0.875rem;
                color: #374151;
                transition: all 0.3s ease;
                font-weight: 500;
                gap: 0.75rem;
                border-radius: 0.5rem;
            }

            .proyectos-dropdown-link:hover {
                color: #ed145b;
                transform: translateX(0.5rem);
                background-color: #f9fafb;
            }

            .proyectos-dropdown-link:hover .w-10 {
                background-color: #ed145b;
                transform: scale(1.05);
            }

            .proyectos-dropdown-link:hover .w-10 svg {
                color: white;
                transform: scale(1.1);
            }

            /* Mega Dropdown para Transparencia */
            .mega-dropdown-menu-transparencia {
                position: absolute;
                top: 100%;
                right: 0;
                margin-top: 0;
                width: 45rem;
                height: 40rem;
                background: white;
                border-radius: 1rem;
                box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.15), 0 10px 15px -3px rgba(0, 0, 0, 0.1);
                border: 1px solid #e5e7eb;
                opacity: 0;
                visibility: hidden;
                transform: translateY(-0.5rem) scale(0.95);
                transition: all 0.4s ease;
                z-index: 50;
                overflow: hidden;
            }

            .group:hover .mega-dropdown-menu-transparencia {
                opacity: 1;
                visibility: visible;
                transform: translateY(0) scale(1);
            }

            .transparencia-dropdown-link {
                display: flex;
                align-items: flex-start;
                padding: 1rem 0;
                font-size: 0.875rem;
                color: #374151;
                transition: all 0.3s ease;
                font-weight: 500;
                gap: 1rem;
                border-radius: 0.5rem;
            }

            .transparencia-dropdown-link:hover {
                color: #ed145b;
                transform: translateX(0.5rem);
                background-color: #f9fafb;
            }

            .transparencia-dropdown-link:hover .w-10 {
                background-color: #ed145b;
                transform: scale(1.05);
            }

            .transparencia-dropdown-link:hover .w-10 svg {
                color: white;
                transform: scale(1.1);
            }

            .transparencia-section {
                padding: 1rem 0;
                border-radius: 0.5rem;
            }

            .transparencia-sub-link {
                display: flex;
                align-items: center;
                padding: 0.5rem 0.75rem;
                font-size: 0.8rem;
                color: #374151;
                transition: all 0.3s ease;
                font-weight: 500;
                gap: 0.5rem;
                border-radius: 0.25rem;
                background-color: #f9fafb;
            }

            .transparencia-sub-link:hover {
                color: #ed145b;
                background-color: rgba(219, 4, 85, 0.1);
                transform: translateX(0.25rem);
            }

            .transparencia-sub-link:hover svg {
                color: #ed145b;
                transform: scale(1.1);
            }

            /* Mobile Menu Styles */
            .mobile-link {
                display: flex;
                align-items: center;
                padding: 0.75rem 1rem;
                color: #374151;
                text-decoration: none;
                font-size: 0.95rem;
                font-weight: 500;
                border-radius: 0.5rem;
                transition: all 0.3s ease;
                border-left: 4px solid transparent;
            }

            .mobile-link:hover {
                background-color: #f3f4f6;
                color: #ed145b;
                border-left-color: #ed145b;
                padding-left: 1.25rem;
                transform: translateX(0.25rem);
            }

            .mobile-link svg {
                transition: all 0.3s ease;
            }

            .mobile-link:hover svg {
                color: #ed145b;
                transform: scale(1.1);
            }

            /* Mobile Submenu Styles */
            .mobile-submenu {
                transition: all 0.3s ease;
                max-height: 0;
                overflow: hidden;
            }

            .mobile-submenu.show {
                max-height: 500px;
                display: block !important;
            }

            .mobile-sublink {
                display: flex;
                align-items: center;
                padding: 0.5rem 0.75rem;
                color: #6b7280;
                text-decoration: none;
                font-size: 0.875rem;
                font-weight: 400;
                border-radius: 0.375rem;
                transition: all 0.3s ease;
                margin: 0.125rem 0;
            }

            .mobile-sublink:hover {
                background-color: #f9fafb;
                color: #ed145b;
                padding-left: 1rem;
                transform: translateX(0.125rem);
            }

            .mobile-sublink svg {
                transition: all 0.3s ease;
            }

            .mobile-sublink:hover svg {
                color: #ed145b;
                transform: scale(1.05);
            }

            /* Arrow rotation for mobile dropdown */
            .mobile-dropdown button[aria-expanded="true"] svg:last-child {
                transform: rotate(180deg);
            }

            /* Mobile Sub-Sub Menu Styles */
            .mobile-sub-submenu {
                transition: all 0.3s ease;
                max-height: 0;
                overflow: hidden;
            }

            .mobile-sub-submenu.show {
                max-height: 300px;
                display: block !important;
            }

            .mobile-sub-sublink {
                display: block;
                padding: 0.375rem 0.5rem;
                color: #9ca3af;
                text-decoration: none;
                font-size: 0.8125rem;
                font-weight: 400;
                border-radius: 0.25rem;
                transition: all 0.3s ease;
                margin: 0.0625rem 0;
            }

            .mobile-sub-sublink:hover {
                background-color: #f3f4f6;
                color: #ed145b;
                padding-left: 0.75rem;
                transform: translateX(0.125rem);
            }

            /* Arrow rotation for sub-dropdown */
            .mobile-sub-dropdown button[aria-expanded="true"] svg {
                transform: rotate(180deg);
            }

            /* Hero Slider Styles */
            .hero-slider {
                height: 70vh;
                background: #000;
                position: relative;
                overflow: hidden;
            }

            .slider-container {
                height: 70vh;
            }

            .slide {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                opacity: 0;
                transition: opacity 1s ease-in-out;
                z-index: 1;
            }

            .slide.active {
                opacity: 1;
                z-index: 2;
            }

            .slide img {
                width: 100%;
                height: 100vh;
                object-fit: cover;
                display: block;
            }

            /* Slider Controls */
            .slider-nav {
                position: absolute;
                top: 50%;
                transform: translateY(-50%);
                background: rgba(0, 0, 0, 0.5);
                color: white;
                border: none;
                padding: 1rem;
                cursor: pointer;
                transition: all 0.3s ease;
                z-index: 10;
            }

            .slider-nav:hover {
                background: rgba(0, 0, 0, 0.8);
            }

            .slider-nav.prev {
                left: 1rem;
            }

            .slider-nav.next {
                right: 1rem;
            }

            /* Slider Indicators */
            .slider-indicators {
                position: absolute;
                bottom: 2rem;
                left: 50%;
                transform: translateX(-50%);
                display: flex;
                gap: 0.5rem;
                z-index: 10;
            }

            .indicator {
                width: 12px;
                height: 12px;
                border-radius: 50%;
                background: rgba(255, 255, 255, 0.5);
                cursor: pointer;
                transition: all 0.3s ease;
            }

            .indicator.active {
                background: white;
            }

            /* Content overlay styles */
            .hero-slider .absolute.inset-0 {
                z-index: 10;
            }

            .hero-slider .slide {
                z-index: 1;
            }

            .hero-slider .slide.active {
                z-index: 2;
            }

            /* Navigation buttons */
            .hero-slider button {
                z-index: 15;
            }

            /* Slider indicators */
            .hero-slider .slider-indicators {
                z-index: 15;
            }

            /* Responsive height adjustments */
            @media (max-width: 768px) {
                .hero-slider,
                .slider-container {
                    height: 50vh;
                }
            }

            @media (max-width: 640px) {
                .hero-slider,
                .slider-container {
                    height: 40vh;
                }
            }
        </style>
    </header>


    <!-- Contenido adicional de la página (si se necesita) -->
    <main class="min-h-screen">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="relative text-gray-800 py-12 overflow-hidden bg-white">
        <!-- Background Image -->
        <div class="absolute inset-0 bg-repeat bg-center z-0" style="background-image: url('/img/footer/backgroundfooter.png');">
        </div>

        <div class="relative z-10 container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Universidad Info -->
                <div class="space-y-4">
                    <div class="flex items-center space-x-3 mb-4">
                        <div class="w-12 h-12 bg-[#ed145b] rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-[#ed145b]">UNAMAD</h3>
                            <p class="text-sm text-gray-600">Universidad Nacional Amazónica de Madre de Dios</p>
                        </div>
                    </div>
                    
                    <div class="space-y-3">
                        <div class="flex items-start space-x-3">
                            <div class="w-5 h-5 mt-1">
                                <svg class="w-full h-full text-[#ed145b]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm text-gray-700">Av. Jorge Chávez N° 1160</p>
                                <p class="text-sm text-gray-700">Puerto Maldonado, Madre de Dios</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center space-x-3">
                            <div class="w-5 h-5">
                                <svg class="w-full h-full text-[#ed145b]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                            </div>
                            <p class="text-sm text-gray-700">+51 975842679</p>
                        </div>
                        
                        <div class="flex items-center space-x-3">
                            <div class="w-5 h-5">
                                <svg class="w-full h-full text-[#ed145b]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 012 2z"/>
                                </svg>
                            </div>
                            <p class="text-sm text-gray-700">tramite-documentario@unamad.edu.pe</p>
                        </div>
                        
                        <div class="flex items-center space-x-3">
                            <div class="w-5 h-5">
                                <svg class="w-full h-full text-[#ed145b]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm text-gray-700">Lunes - Viernes</p>
                                <p class="text-sm text-gray-600">07:00am - 16:00pm</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Enlaces Rápidos -->
                <div>
                    <h4 class="text-lg font-bold mb-4 text-[#ed145b] flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"/>
                        </svg>
                        Enlaces Rápidos
                    </h4>
                    <ul class="space-y-2">
                        <li>
                            <a href="https://admision.unamad.edu.pe/" target="_blank" class="text-sm text-gray-700 hover:text-[#ed145b] transition-colors duration-300 flex items-center group">
                                <span class="w-1 h-1 bg-[#ed145b] rounded-full mr-2 group-hover:w-2 transition-all duration-300"></span>
                                Admisión 2025
                            </a>
                        </li>
                        <li>
                            <a href="https://elibro.net/es/lc/unamad/login_usuario/" target="_blank" class="text-sm text-gray-700 hover:text-[#ed145b] transition-colors duration-300 flex items-center group">
                                <span class="w-1 h-1 bg-[#ed145b] rounded-full mr-2 group-hover:w-2 transition-all duration-300"></span>
                                Biblioteca Virtual
                            </a>
                        </li>
                        <li>
                            <a href="https://sgd.unamad.edu.pe/mesa-de-partes" target="_blank" class="text-sm text-gray-700 hover:text-[#ed145b] transition-colors duration-300 flex items-center group">
                                <span class="w-1 h-1 bg-[#ed145b] rounded-full mr-2 group-hover:w-2 transition-all duration-300"></span>
                                Mesa de Partes Virtual
                            </a>
                        </li>
                        <li>
                            <a href="mailto:tramite-documentario@unamad.edu.pe" class="text-sm text-gray-700 hover:text-[#ed145b] transition-colors duration-300 flex items-center group">
                                <span class="w-1 h-1 bg-[#ed145b] rounded-full mr-2 group-hover:w-2 transition-all duration-300"></span>
                                Correo Institucional
                            </a>
                        </li>
                        <li>
                            <a href="https://www.transparencia.gob.pe/enlaces/pte_transparencia_enlaces.aspx?id_entidad=13136#.YvEV03ZByUk" target="_blank" class="text-sm text-gray-700 hover:text-[#ed145b] transition-colors duration-300 flex items-center group">
                                <span class="w-1 h-1 bg-[#ed145b] rounded-full mr-2 group-hover:w-2 transition-all duration-300"></span>
                                Portal de Transparencia
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Síguenos -->
                <div>
                    <h4 class="text-lg font-bold mb-4 text-[#ed145b] flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4V2a1 1 0 011-1h8a1 1 0 011 1v2m-9 3v10a2 2 0 002 2h6a2 2 0 002-2V7H7z"/>
                        </svg>
                        Síguenos
                    </h4>
                    
                    <div class="grid grid-cols-2 gap-3">
                        <a href="https://www.facebook.com/unamad.oficial/" target="_blank" 
                           class="bg-gray-200 hover:bg-[#ed145b] p-3 rounded-lg transition-all duration-300 group text-center">
                            <svg class="w-6 h-6 mx-auto mb-1 text-blue-500 group-hover:text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                            <span class="text-xs text-gray-600 group-hover:text-white">Facebook</span>
                        </a>
                        
                        <a href="https://www.youtube.com/channel/UCUNGgRNunGECIxEd_-qv_oA" target="_blank" 
                           class="bg-gray-200 hover:bg-[#ed145b] p-3 rounded-lg transition-all duration-300 group text-center">
                            <svg class="w-6 h-6 mx-auto mb-1 text-red-500 group-hover:text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.30 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                            </svg>
                            <span class="text-xs text-gray-600 group-hover:text-white">YouTube</span>
                        </a>
                        
                        <a href="https://www.instagram.com/unamad.oficial" target="_blank" 
                           class="bg-gray-200 hover:bg-[#ed145b] p-3 rounded-lg transition-all duration-300 group text-center">
                            <svg class="w-6 h-6 mx-auto mb-1 text-pink-500 group-hover:text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zM5.838 12a6.162 6.162 0 1112.324 0 6.162 6.162 0 01-12.324 0zM12 16a4 4 0 110-8 4 4 0 010 8zm4.965-10.405a1.44 1.44 0 112.881.001 1.44 1.44 0 01-2.881-.001z"/>
                            </svg>
                            <span class="text-xs text-gray-600 group-hover:text-white">Instagram</span>
                        </a>
                        
                        <a href="https://twitter.com/unamad_oficial" target="_blank" 
                           class="bg-gray-200 hover:bg-[#ed145b] p-3 rounded-lg transition-all duration-300 group text-center">
                            <svg class="w-6 h-6 mx-auto mb-1 text-blue-400 group-hover:text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                            </svg>
                            <span class="text-xs text-gray-600 group-hover:text-white">Twitter</span>
                        </a>
                    </div>
                </div>

                <!-- Mapa y Ubicación -->
                <div>
                    <h4 class="text-lg font-bold mb-4 text-[#ed145b] flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"/>
                        </svg>
                        Ubicación
                    </h4>
                    
                    <div class="bg-gray-800 rounded-lg overflow-hidden">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d993.147204059806!2d-69.21035157047508!3d-12.588351515889855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x917b49441850fe49%3A0x2881b0658744e313!2sUniversidad%20Nacional%20Amaz%C3%B3nica%20de%20Madre%20de%20Dios!5e0!3m2!1ses!2spe!4v1725958800000!5m2!1ses!2spe"
                            width="100%" 
                            height="120" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy">
                        </iframe>
                    </div>
                    
                    <div class="mt-3 text-center">
                        <a href="https://www.google.com/maps/place/Universidad+Nacional+Amaz%C3%B3nica+de+Madre+de+Dios,+Puerto+Maldonado+17001/@-12.5883515,-69.2096578,393m/data=!3m2!1e3!4b1!4m6!3m5!1s0x917b49441850fe49:0x2881b0658744e313!8m2!3d-12.5885658!4d-69.2095274!16s%2Fg%2F11hy9l896x?hl=es&entry=ttu&g_ep=EgoyMDI1MDkwNy4wIKXMDSoASAFQAw%3D%3D" 
                           target="_blank"
                           class="inline-flex items-center text-sm text-gray-700 hover:text-[#ed145b] transition-colors duration-300">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                            </svg>
                            Ver en Google Maps
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Footer Bottom -->
            <div class="border-t border-gray-700 mt-8 pt-6">
                <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
                    <div class="flex items-center space-x-4">
                        <div class="w-8 h-8 bg-[#ed145b] rounded-full flex items-center justify-center">
                            <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm text-gray-700">© 2024 Universidad Nacional Amazónica de Madre de Dios</p>
                            <p class="text-xs text-gray-600">Todos los derechos reservados</p>
                        </div>
                    </div>
                    
                    <div class="flex items-center space-x-6 text-xs text-gray-600">
                        <a href="#" class="hover:text-[#ed145b] transition-colors">Política de Privacidad</a>
                        <a href="#" class="hover:text-[#ed145b] transition-colors">Términos de Uso</a>
                        <a href="#" class="hover:text-[#ed145b] transition-colors">Contacto</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script>
        function toggleMobileMenu() {
            const menu = document.getElementById('mobileMenu');
            menu.classList.toggle('hidden');
        }

        function toggleMobileSubmenu(submenuId) {
            const submenu = document.getElementById(submenuId);
            const button = event.currentTarget;
            const arrow = button.querySelector('svg:last-child');
            
            // Close other open submenus
            const allSubmenus = document.querySelectorAll('.mobile-submenu');
            const allButtons = document.querySelectorAll('.mobile-dropdown button');
            
            allSubmenus.forEach(menu => {
                if (menu.id !== submenuId) {
                    menu.classList.remove('show');
                    menu.classList.add('hidden');
                }
            });
            
            allButtons.forEach(btn => {
                if (btn !== button) {
                    btn.setAttribute('aria-expanded', 'false');
                }
            });
            
            // Toggle current submenu
            if (submenu.classList.contains('hidden')) {
                submenu.classList.remove('hidden');
                submenu.classList.add('show');
                button.setAttribute('aria-expanded', 'true');
            } else {
                submenu.classList.add('hidden');
                submenu.classList.remove('show');
                button.setAttribute('aria-expanded', 'false');
            }
        }

        function toggleMobileSubSubmenu(submenuId) {
            const submenu = document.getElementById(submenuId);
            const button = event.currentTarget;
            
            // Close other open sub-submenus at the same level
            const parentContainer = button.closest('.space-y-2');
            const allSubSubmenus = parentContainer.querySelectorAll('.mobile-sub-submenu');
            const allSubButtons = parentContainer.querySelectorAll('.mobile-sub-dropdown button');
            
            allSubSubmenus.forEach(menu => {
                if (menu.id !== submenuId) {
                    menu.classList.remove('show');
                    menu.classList.add('hidden');
                }
            });
            
            allSubButtons.forEach(btn => {
                if (btn !== button) {
                    btn.setAttribute('aria-expanded', 'false');
                }
            });
            
            // Toggle current sub-submenu
            if (submenu.classList.contains('hidden')) {
                submenu.classList.remove('hidden');
                submenu.classList.add('show');
                button.setAttribute('aria-expanded', 'true');
            } else {
                submenu.classList.add('hidden');
                submenu.classList.remove('show');
                button.setAttribute('aria-expanded', 'false');
            }
        }

        // Initialize mobile submenu buttons
        document.addEventListener('DOMContentLoaded', function() {
            const mobileButtons = document.querySelectorAll('.mobile-dropdown button');
            mobileButtons.forEach(button => {
                button.setAttribute('aria-expanded', 'false');
            });
            
            const mobileSubButtons = document.querySelectorAll('.mobile-sub-dropdown button');
            mobileSubButtons.forEach(button => {
                button.setAttribute('aria-expanded', 'false');
            });

        });

        // Hide loading screen when page is fully loaded
        window.addEventListener('load', function() {
            const loadingScreen = document.getElementById('loading-screen');
            if (loadingScreen) {
                // Check if we're on the home page
                const isHomePage = window.location.pathname === '/' || window.location.pathname === '';
                const delay = isHomePage ? 2000 : 0; // 2 seconds for home page, instant for others

                setTimeout(() => {
                    loadingScreen.style.transition = 'opacity 0.5s ease-out';
                    loadingScreen.style.opacity = '0';
                    setTimeout(() => {
                        loadingScreen.style.display = 'none';
                    }, 500);
                }, delay);
            }
        });

    </script>
    @stack('scripts')
</body>

</html>
