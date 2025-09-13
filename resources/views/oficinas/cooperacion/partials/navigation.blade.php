<!-- Enhanced Navigation Card -->
<div class="bg-white rounded-lg shadow-xl mb-8 overflow-hidden border-t-4 border-[#db0455]">
    <div class="bg-gradient-to-r from-[#db0455] to-[#ed145b] text-white p-6">
        <div class="flex items-center space-x-3">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
            <h3 class="text-xl font-bold">Navegación</h3>
        </div>
    </div>
    <div class="p-6">
        <nav class="space-y-1">
            <a href="/oficinas/cooperacion" class="cooperacion-nav-link group {{ Request::is('oficinas/cooperacion') ? 'active' : '' }}">
                <div class="flex items-center space-x-3">
                    <svg class="w-4 h-4 text-gray-600 group-hover:text-[#db0455]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>
                    <span>Inicio</span>
                </div>
                <svg class="w-3 h-3 text-gray-400 group-hover:text-[#db0455] flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
            <a href="/oficinas/cooperacion/mision-vision" class="cooperacion-nav-link group {{ Request::is('oficinas/cooperacion/mision-vision') ? 'active' : '' }}">
                <div class="flex items-center space-x-3">
                    <svg class="w-4 h-4 text-gray-600 group-hover:text-[#db0455]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                    </svg>
                    <span>Misión Vision Objetivos</span>
                </div>
                <svg class="w-3 h-3 text-gray-400 group-hover:text-[#db0455] flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
            <a href="/oficinas/cooperacion/estructura-organica" class="cooperacion-nav-link group {{ Request::is('oficinas/cooperacion/estructura-organica') ? 'active' : '' }}">
                <div class="flex items-center space-x-3">
                    <svg class="w-4 h-4 text-gray-600 group-hover:text-[#db0455]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                    </svg>
                    <span>Estructura Orgánica</span>
                </div>
                <svg class="w-3 h-3 text-gray-400 group-hover:text-[#db0455] flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
            <a href="/oficinas/cooperacion/personal-administrativo" class="cooperacion-nav-link group {{ Request::is('oficinas/cooperacion/personal-administrativo') ? 'active' : '' }}">
                <div class="flex items-center space-x-3">
                    <svg class="w-4 h-4 text-gray-600 group-hover:text-[#db0455]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                    <span>Personal Administrativo</span>
                </div>
                <svg class="w-3 h-3 text-gray-400 group-hover:text-[#db0455] flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
            <a href="/oficinas/cooperacion/directorio" class="cooperacion-nav-link group {{ Request::is('oficinas/cooperacion/directorio') ? 'active' : '' }}">
                <div class="flex items-center space-x-3">
                    <svg class="w-4 h-4 text-gray-600 group-hover:text-[#db0455]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                    <span>Directorio</span>
                </div>
                <svg class="w-3 h-3 text-gray-400 group-hover:text-[#db0455] flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
            <a href="/oficinas/cooperacion/servicios" class="cooperacion-nav-link group {{ Request::is('oficinas/cooperacion/servicios') ? 'active' : '' }}">
                <div class="flex items-center space-x-3">
                    <svg class="w-4 h-4 text-gray-600 group-hover:text-[#db0455]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0H8m8 0v2a2 2 0 01-2 2H10a2 2 0 01-2-2V6m8 0H8"></path>
                    </svg>
                    <span>Servicios</span>
                </div>
                <svg class="w-3 h-3 text-gray-400 group-hover:text-[#db0455] flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
            <a href="/oficinas/cooperacion/convenios" class="cooperacion-nav-link group {{ Request::is('oficinas/cooperacion/convenios') ? 'active' : '' }}">
                <div class="flex items-center space-x-3">
                    <svg class="w-4 h-4 text-gray-600 group-hover:text-[#db0455]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                    <span>Convenios</span>
                </div>
                <svg class="w-3 h-3 text-gray-400 group-hover:text-[#db0455] flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </nav>
    </div>
</div>

<!-- Contact Card -->
<div class="bg-white rounded-lg shadow-lg p-6 border-t-4 border-[#db0455]">
    <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center">
        <svg class="w-5 h-5 mr-2 text-[#db0455]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
        </svg>
        Contacto
    </h3>
    <div class="space-y-3 text-sm text-gray-600">
        <div class="flex items-start space-x-2">
            <svg class="w-4 h-4 mt-1 text-[#db0455] flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 616 0z"></path>
            </svg>
            <span>Av. Jorge Chávez N°1160 - 2do piso, Biblioteca Central de la Ciudad Universitaria</span>
        </div>
        <div class="flex items-center space-x-2">
            <svg class="w-4 h-4 text-[#db0455] flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
            </svg>
            <span>+51 975 845 006</span>
        </div>
        <div class="flex items-center space-x-2">
            <svg class="w-4 h-4 text-[#db0455] flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
            </svg>
            <span>ocri@unamad.edu.pe</span>
        </div>
    </div>
</div>

<style>
    .cooperacion-nav-link {
        @apply flex items-center justify-between px-4 py-3 text-gray-700 rounded-lg border border-transparent hover:bg-gray-50 hover:border-gray-200 transition-all duration-200 ease-in-out transform hover:translate-x-1;
    }
    
    .cooperacion-nav-link.active {
        @apply bg-white text-[#db0455] border-[#db0455] shadow-lg translate-x-1;
    }
    
    .cooperacion-nav-link.active svg {
        color: #db0455 !important;
    }
    
    .cooperacion-nav-link.active span {
        color: #db0455 !important;
    }
    
    .cooperacion-nav-link-disabled {
        @apply flex items-center justify-between px-4 py-3 text-gray-400 rounded-lg border border-transparent cursor-not-allowed opacity-60;
    }
    
    .cooperacion-nav-link:hover .group-hover\:text-\[\#db0455\] {
        @apply text-[#db0455];
    }
    
    .cooperacion-nav-link:hover svg:last-child {
        @apply transform translate-x-1;
    }
</style>