<!-- Sidebar Navigation -->
<div class="bg-white rounded-lg shadow-lg p-6 border-t-4 border-amber-500">
    <div class="text-center mb-6">
        <div class="w-16 h-16 bg-gradient-to-r from-amber-500 to-orange-500 rounded-full flex items-center justify-center mx-auto mb-3">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16l3-3m-3 3l-3-3"></path>
            </svg>
        </div>
        <h3 class="text-lg font-bold text-gray-800">Derecho y Ciencias Políticas</h3>
        <p class="text-sm text-gray-600">Justicia y Desarrollo Social</p>
    </div>
    
    <nav class="space-y-1">
        <a href="/facultades/derecho" 
           class="flex items-center px-3 py-2 text-sm font-medium rounded-md transition-colors duration-200 {{ Request::is('facultades/derecho') ? 'bg-amber-100 text-amber-800 border-r-2 border-amber-500' : 'text-gray-700 hover:bg-gray-100 hover:text-amber-600' }}">
            <svg class="w-4 h-4 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z"></path>
            </svg>
            Inicio
        </a>
    </nav>
    
    <div class="mt-8 p-4 bg-amber-50 rounded-lg border border-amber-200">
        <div class="flex items-center mb-2">
            <svg class="w-5 h-5 text-amber-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
            </svg>
            <h4 class="text-sm font-semibold text-amber-800">Formación Jurídica</h4>
        </div>
        <p class="text-xs text-amber-700">
            Formando profesionales en ciencias jurídicas y políticas desde 2009
        </p>
    </div>

    <!-- Datos de Contacto -->
    <div class="mt-6 p-4 bg-amber-50 rounded-lg border border-amber-200">
        <div class="flex items-center mb-3">
            <svg class="w-5 h-5 text-amber-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
            </svg>
            <h4 class="text-sm font-semibold text-amber-800">Contacto</h4>
        </div>
        
        <div class="space-y-3">
            <!-- Teléfono - Comentado -->
            <!-- <div class="flex items-start space-x-2">
                <svg class="w-4 h-4 text-amber-600 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                </svg>
                <div>
                    <p class="text-xs font-semibold text-gray-800">Teléfono</p>
                    <p class="text-xs text-amber-700">-</p>
                </div>
            </div> -->

            <!-- Correo -->
            <div class="flex items-start space-x-2">
                <svg class="w-4 h-4 text-amber-600 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
                <div>
                    <p class="text-xs font-semibold text-gray-800">Correo</p>
                    <a href="mailto:dir_epd@unamad.edu.pe" class="text-xs text-amber-600 hover:text-amber-700 transition-colors break-all">dir_epd@unamad.edu.pe</a>
                </div>
            </div>

            <!-- Dirección -->
            <div class="flex items-start space-x-2">
                <svg class="w-4 h-4 text-amber-600 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
                <div>
                    <p class="text-xs font-semibold text-gray-800">Dirección</p>
                    <p class="text-xs text-amber-700">AV. Jorge Chávez N° 1160</p>
                </div>
            </div>

            <!-- Web - Comentado -->
            <!-- <div class="flex items-start space-x-2">
                <svg class="w-4 h-4 text-amber-600 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9v-9m0-9v9m0 9c-5 0-9-4-9-9s4-9 9-9"></path>
                </svg>
                <div>
                    <p class="text-xs font-semibold text-gray-800">Web</p>
                    <p class="text-xs text-amber-700">-</p>
                </div>
            </div> -->
        </div>
    </div>
</div>