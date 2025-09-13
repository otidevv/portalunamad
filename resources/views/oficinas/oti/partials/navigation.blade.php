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
            <a href="/oficinas/oti" class="oti-nav-link group {{ Request::is('oficinas/oti') ? 'active' : '' }}">
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
            <span>Ciudad Universitaria - UNAMAD</span>
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
            <span>oti@unamad.edu.pe</span>
        </div>
        -->
    </div>
</div>

<style>
    .oti-nav-link {
        @apply flex items-center justify-between px-4 py-3 text-gray-700 rounded-lg border border-transparent hover:bg-gray-50 hover:border-gray-200 transition-all duration-200 ease-in-out transform hover:translate-x-1;
    }
    
    .oti-nav-link.active {
        @apply bg-white text-[#db0455] border-[#db0455] shadow-lg translate-x-1;
    }
    
    .oti-nav-link.active svg {
        color: #db0455 !important;
    }
    
    .oti-nav-link.active span {
        color: #db0455 !important;
    }
    
    .oti-nav-link:hover .group-hover\:text-\[\#db0455\] {
        @apply text-[#db0455];
    }
    
    .oti-nav-link:hover svg:last-child {
        @apply transform translate-x-1;
    }
</style>