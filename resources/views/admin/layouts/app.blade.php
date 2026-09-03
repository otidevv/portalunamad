<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Panel de administración') - UNAMAD</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <style>
        /* Accesibilidad: foco visible reforzado (WCAG 2.4.7) y respeto a movimiento reducido (2.3.3) */
        *:focus-visible { outline: 3px solid #db0455; outline-offset: 2px; }
        @media (prefers-reduced-motion: reduce) {
            *, *::before, *::after { animation-duration: 0.01ms !important; transition-duration: 0.01ms !important; }
        }
    </style>
    <script>
        (function () { try { var p = JSON.parse(localStorage.getItem("unamad_a11y") || "{}"); var c = []; if (p.texto) c.push("a11y-texto-" + p.texto); if (p.contraste) c.push("a11y-contraste"); if (p.grises) c.push("a11y-grises"); if (p.enlaces) c.push("a11y-enlaces"); if (p.dislexia) c.push("a11y-dislexia"); if (p.sinAnimacion) c.push("a11y-sin-animacion"); if (c.length) document.documentElement.className += " " + c.join(" "); } catch (e) {} })();
    </script>
    @stack('styles')
</head>
<body class="bg-gray-50">
    <a href="#contenido-admin" class="sr-only focus:not-sr-only focus:absolute focus:top-2 focus:left-2 focus:z-[10000] focus:bg-[#db0455] focus:text-white focus:px-4 focus:py-2 focus:rounded-lg focus:text-sm focus:font-semibold">
        Ir al contenido principal
    </a>
    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside id="sidebar" class="w-64 bg-gradient-to-b from-gray-900 to-gray-800 text-white flex-shrink-0 transition-all duration-300 fixed inset-y-0 left-0 z-40 -translate-x-full lg:static lg:translate-x-0 overflow-y-auto" aria-label="Barra lateral de administración">
            <div class="p-6">
                <!-- Logo -->
                <div class="flex items-center justify-center mb-8">
                    <div class="bg-white rounded-lg p-3">
                        <img src="{{ asset('img/header/logounamad.png') }}" alt="Logotipo de la UNAMAD" class="h-10">
                    </div>
                </div>
                
                <!-- User Info -->
                <div class="mb-8 text-center">
                    <div class="w-20 h-20 mx-auto mb-3 bg-gradient-to-br from-[#db0455] to-[#a00340] rounded-full flex items-center justify-center">
                        <span class="text-2xl font-bold" aria-hidden="true">{{ strtoupper(substr(Auth::user()->name ?? 'A', 0, 1)) }}</span>
                    </div>
                    <p class="font-semibold">{{ Auth::user()->name ?? 'Administrador' }}</p>
                    <p class="text-gray-400 text-sm">{{ Auth::user()->email ?? 'admin@unamad.edu.pe' }}</p>
                </div>
                
                <!-- Navigation -->
                <nav class="space-y-2" aria-label="Menú de administración">
                    <a href="{{ route('admin.dashboard') }}" 
                       class="flex items-center space-x-3 p-3 rounded-lg {{ request()->routeIs('admin.dashboard') ? 'bg-[#db0455] text-white' : 'hover:bg-gray-700' }} transition-all duration-200">
                        <svg class="w-5 h-5" aria-hidden="true" focusable="false" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                  d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                        <span>Panel</span>
                    </a>
                    
                    <a href="{{ route('admin.anuncios.index') }}" 
                       class="flex items-center space-x-3 p-3 rounded-lg {{ request()->routeIs('admin.anuncios.*') ? 'bg-[#db0455] text-white' : 'hover:bg-gray-700' }} transition-all duration-200">
                        <svg class="w-5 h-5" aria-hidden="true" focusable="false" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                  d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                        </svg>
                        <span>Anuncios</span>
                    </a>
                    
                    <a href="{{ route('admin.comunicados.index') }}" 
                       class="flex items-center space-x-3 p-3 rounded-lg {{ request()->routeIs('admin.comunicados.*') ? 'bg-[#db0455] text-white' : 'hover:bg-gray-700' }} transition-all duration-200">
                        <svg class="w-5 h-5" aria-hidden="true" focusable="false" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                  d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"></path>
                        </svg>
                        <span>Comunicados</span>
                    </a>
                    
                    <a href="{{ route('admin.comunicado-categorias.index') }}" 
                       class="flex items-center space-x-3 p-3 rounded-lg {{ request()->routeIs('admin.comunicado-categorias.*') ? 'bg-[#db0455] text-white' : 'hover:bg-gray-700' }} transition-all duration-200">
                        <svg class="w-5 h-5" aria-hidden="true" focusable="false" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                  d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                        </svg>
                        <span>Categorías</span>
                    </a>
                    
                    <a href="#" aria-disabled="true" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-gray-700 transition-all duration-200">
                        <svg class="w-5 h-5" aria-hidden="true" focusable="false" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                  d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        <span>Eventos <span class="sr-only">(próximamente)</span></span>
                    </a>
                    
                    <a href="{{ route('admin.users.index') }}"
                       class="flex items-center space-x-3 p-3 rounded-lg {{ request()->routeIs('admin.users.*') ? 'bg-[#db0455] text-white' : 'hover:bg-gray-700' }} transition-all duration-200">
                        <svg class="w-5 h-5" aria-hidden="true" focusable="false" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                        </svg>
                        <span>Usuarios</span>
                    </a>
                    
                    <a href="{{ route('admin.documentos.index') }}"
                       class="flex items-center space-x-3 p-3 rounded-lg {{ request()->routeIs('admin.documentos.*') ? 'bg-[#db0455] text-white' : 'hover:bg-gray-700' }} transition-all duration-200">
                        <svg class="w-5 h-5" aria-hidden="true" focusable="false" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        <span>Documentos</span>
                    </a>

                    <a href="{{ route('admin.enlaces-normativos.index') }}"
                       class="flex items-center space-x-3 p-3 rounded-lg {{ request()->routeIs('admin.enlaces-normativos.*') ? 'bg-[#db0455] text-white' : 'hover:bg-gray-700' }} transition-all duration-200">
                        <svg class="w-5 h-5" aria-hidden="true" focusable="false" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path>
                        </svg>
                        <span>Enlaces Normativos</span>
                    </a>

                    <a href="{{ route('admin.videos-destacados.index') }}"
                       class="flex items-center space-x-3 p-3 rounded-lg {{ request()->routeIs('admin.videos-destacados.*') ? 'bg-[#db0455] text-white' : 'hover:bg-gray-700' }} transition-all duration-200">
                        <svg class="w-5 h-5" aria-hidden="true" focusable="false" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                        </svg>
                        <span>Videos Destacados</span>
                    </a>

                    <a href="{{ route('admin.indicador55.index') }}"
                       class="flex items-center space-x-3 p-3 rounded-lg {{ request()->routeIs('admin.indicador55.*') ? 'bg-[#db0455] text-white' : 'hover:bg-gray-700' }} transition-all duration-200">
                        <svg class="w-5 h-5" aria-hidden="true" focusable="false" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                        </svg>
                        <span>Indicador 55</span>
                    </a>

                    <a href="{{ route('admin.datasets.index') }}"
                       class="flex items-center space-x-3 p-3 rounded-lg {{ request()->routeIs('admin.datasets.*') ? 'bg-[#db0455] text-white' : 'hover:bg-gray-700' }} transition-all duration-200">
                        <svg class="w-5 h-5" aria-hidden="true" focusable="false" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                        </svg>
                        <span>Datasets</span>
                    </a>

                    <a href="#" aria-disabled="true" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-gray-700 transition-all duration-200">
                        <svg class="w-5 h-5" aria-hidden="true" focusable="false" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        <span>Galería <span class="sr-only">(próximamente)</span></span>
                    </a>
                    
                    <a href="#" aria-disabled="true" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-gray-700 transition-all duration-200">
                        <svg class="w-5 h-5" aria-hidden="true" focusable="false" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                  d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                  d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span>Configuración <span class="sr-only">(próximamente)</span></span>
                    </a>
                </nav>
            </div>
            
            <!-- Logout Button -->
            <div class="p-6 border-t border-gray-700">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" 
                            class="w-full flex items-center justify-center space-x-2 p-3 rounded-lg bg-red-600 hover:bg-red-700 transition-all duration-200">
                        <svg class="w-5 h-5" aria-hidden="true" focusable="false" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                  d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                        </svg>
                        <span>Cerrar Sesión</span>
                    </button>
                </form>
            </div>
        </aside>
        
        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Top Header -->
            <header class="bg-white shadow-sm z-10">
                <div class="flex items-center justify-between p-6">
                    <div class="flex items-center space-x-4">
                        <!-- Toggle Sidebar Button -->
                        <button type="button" onclick="toggleSidebar()" aria-label="Mostrar u ocultar el menú lateral" aria-expanded="false" aria-controls="sidebar"
                                class="p-2 rounded-lg hover:bg-gray-100 transition-colors lg:hidden">
                            <svg class="w-6 h-6" aria-hidden="true" focusable="false" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                      d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                        </button>
                        
                        <h1 class="text-2xl font-bold text-gray-800">@yield('header', 'Panel de Administración')</h1>
                    </div>
                    
                    <div class="flex items-center space-x-4">
                        <!-- Notifications -->
                        <button type="button" class="relative p-2 rounded-lg hover:bg-gray-100 transition-colors" aria-label="Notificaciones">
                            <svg class="w-6 h-6 text-gray-600" aria-hidden="true" focusable="false" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                      d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                            </svg>
                            <span class="absolute top-0 right-0 h-2 w-2 bg-red-500 rounded-full" aria-hidden="true"></span>
                        </button>
                        
                        <!-- Profile Dropdown -->
                        <div class="relative">
                            <button type="button" onclick="toggleProfileDropdown()" aria-label="Menú de usuario" aria-expanded="false" aria-controls="profileDropdown"
                                    class="flex items-center space-x-3 p-2 rounded-lg hover:bg-gray-100 transition-colors">
                                <div class="w-8 h-8 bg-gradient-to-br from-[#db0455] to-[#a00340] rounded-full flex items-center justify-center">
                                    <span class="text-white font-semibold" aria-hidden="true">{{ strtoupper(substr(Auth::user()->name ?? 'A', 0, 1)) }}</span>
                                </div>
                                <svg class="w-4 h-4 text-gray-600" aria-hidden="true" focusable="false" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            
                            <!-- Dropdown Menu -->
                            <div id="profileDropdown" class="hidden absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg py-2 z-50">
                                <a href="#" aria-disabled="true" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Mi perfil <span class="sr-only">(próximamente)</span></a>
                                <a href="#" aria-disabled="true" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Configuración <span class="sr-only">(próximamente)</span></a>
                                <hr class="my-2">
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="w-full text-left px-4 py-2 text-red-600 hover:bg-gray-100">
                                        Cerrar Sesión
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            
            <!-- Main Content Area -->
            <main id="contenido-admin" class="flex-1 overflow-y-auto">
                @yield('content')
            </main>
        </div>
    </div>
    
    @include('partials.barra-accesibilidad')

    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById("sidebar");
            const btn = document.querySelector("button[aria-controls=sidebar]");
            sidebar.classList.toggle("-translate-x-full");
            const abierto = !sidebar.classList.contains("-translate-x-full");
            if (btn) btn.setAttribute("aria-expanded", String(abierto));
            if (abierto) {
                const primero = sidebar.querySelector("a, button");
                if (primero) primero.focus();
            }
        }

        function toggleProfileDropdown() {
            const dropdown = document.getElementById("profileDropdown");
            const btn = document.querySelector("button[aria-controls=profileDropdown]");
            dropdown.classList.toggle("hidden");
            const abierto = !dropdown.classList.contains("hidden");
            if (btn) btn.setAttribute("aria-expanded", String(abierto));
            if (abierto) {
                const primero = dropdown.querySelector("a, button");
                if (primero) primero.focus();
            }
        }

        function cerrarProfileDropdown(devolverFoco) {
            const dropdown = document.getElementById("profileDropdown");
            const btn = document.querySelector("button[aria-controls=profileDropdown]");
            if (dropdown.classList.contains("hidden")) return;
            dropdown.classList.add("hidden");
            if (btn) {
                btn.setAttribute("aria-expanded", "false");
                if (devolverFoco) btn.focus();
            }
        }

        // Cerrar el menú de usuario al hacer clic fuera o con Escape
        document.addEventListener("click", function (event) {
            const dropdown = document.getElementById("profileDropdown");
            const button = event.target.closest("button[aria-controls=profileDropdown]");
            if (!button && !dropdown.contains(event.target)) cerrarProfileDropdown(false);
        });
        document.addEventListener("keydown", function (event) {
            if (event.key !== "Escape") return;
            cerrarProfileDropdown(true);
            const sidebar = document.getElementById("sidebar");
            if (window.innerWidth < 1024 && !sidebar.classList.contains("-translate-x-full")) {
                toggleSidebar();
                const btn = document.querySelector("button[aria-controls=sidebar]");
                if (btn) btn.focus();
            }
        });

        // Marcar la página actual en el menú lateral (WCAG 4.1.2)
        document.querySelectorAll("nav[aria-label=\"Menú de administración\"] a[href]").forEach(function (a) {
            if (a.className.indexOf("bg-[#db0455]") !== -1) a.setAttribute("aria-current", "page");
        });
    </script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        toastr.options = {
            "closeButton": true,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "8000",
            "extendedTimeOut": "4000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };
    </script>
    @stack('scripts')
</body>
</html>
