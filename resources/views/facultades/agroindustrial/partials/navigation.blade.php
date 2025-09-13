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
            <a href="/facultades/agroindustrial" class="agroindustrial-nav-link group {{ Request::is('facultades/agroindustrial') ? 'active' : '' }}">
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
            <a href="/facultades/agroindustrial/resena-historica" class="agroindustrial-nav-link group {{ Request::is('facultades/agroindustrial/resena-historica') ? 'active' : '' }}">
                <div class="flex items-center space-x-3">
                    <svg class="w-4 h-4 text-gray-600 group-hover:text-[#db0455]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span>Reseña Histórica</span>
                </div>
                <svg class="w-3 h-3 text-gray-400 group-hover:text-[#db0455] flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
            <a href="/facultades/agroindustrial/vision-mision" class="agroindustrial-nav-link group {{ Request::is('facultades/agroindustrial/vision-mision') ? 'active' : '' }}">
                <div class="flex items-center space-x-3">
                    <svg class="w-4 h-4 text-gray-600 group-hover:text-[#db0455]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                    </svg>
                    <span>Visión y Misión</span>
                </div>
                <svg class="w-3 h-3 text-gray-400 group-hover:text-[#db0455] flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
            <a href="/facultades/agroindustrial/perfil-profesional" class="agroindustrial-nav-link group {{ Request::is('facultades/agroindustrial/perfil-profesional') ? 'active' : '' }}">
                <div class="flex items-center space-x-3">
                    <svg class="w-4 h-4 text-gray-600 group-hover:text-[#db0455]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                    <span>Perfil Profesional</span>
                </div>
                <svg class="w-3 h-3 text-gray-400 group-hover:text-[#db0455] flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
            <a href="/facultades/agroindustrial/campo-ocupacional" class="agroindustrial-nav-link group {{ Request::is('facultades/agroindustrial/campo-ocupacional') ? 'active' : '' }}">
                <div class="flex items-center space-x-3">
                    <svg class="w-4 h-4 text-gray-600 group-hover:text-[#db0455]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0H8m8 0v2a2 2 0 01-2 2H10a2 2 0 01-2-2V6m8 0H8"></path>
                    </svg>
                    <span>Campo Ocupacional</span>
                </div>
                <svg class="w-3 h-3 text-gray-400 group-hover:text-[#db0455] flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
            <a href="/facultades/agroindustrial/objetivos-academicos" class="agroindustrial-nav-link group {{ Request::is('facultades/agroindustrial/objetivos-academicos') ? 'active' : '' }}">
                <div class="flex items-center space-x-3">
                    <svg class="w-4 h-4 text-gray-600 group-hover:text-[#db0455]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                    </svg>
                    <span>Objetivos Académicos</span>
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
            <span>Facultad de Ingeniería - Ciudad Universitaria UNAMAD</span>
        </div>
        <!-- 
        <div class="flex items-center space-x-2">
            <svg class="w-4 h-4 text-[#db0455] flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
            </svg>
            <span>+51 (082) 573-2131</span>
        </div>
        <div class="flex items-center space-x-2">
            <svg class="w-4 h-4 text-[#db0455] flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
            </svg>
            <span>agroindustrial@unamad.edu.pe</span>
        </div>
        -->
    </div>
</div>

<style>
    .agroindustrial-nav-link {
        @apply flex items-center justify-between px-4 py-3 text-gray-700 rounded-lg border border-transparent hover:bg-gray-50 hover:border-gray-200 transition-all duration-200 ease-in-out transform hover:translate-x-1;
    }
    
    .agroindustrial-nav-link.active {
        @apply bg-white text-[#db0455] border-[#db0455] shadow-lg translate-x-1;
    }
    
    .agroindustrial-nav-link.active svg {
        color: #db0455 !important;
    }
    
    .agroindustrial-nav-link.active span {
        color: #db0455 !important;
    }
    
    .agroindustrial-nav-link:hover .group-hover\:text-\[\#db0455\] {
        @apply text-[#db0455];
    }
    
    .agroindustrial-nav-link:hover svg:last-child {
        @apply transform translate-x-1;
    }
</style>