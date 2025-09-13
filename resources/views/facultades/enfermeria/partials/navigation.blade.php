<!-- Sidebar Navigation -->
<div class="bg-white rounded-lg shadow-lg p-6 border-t-4 border-pink-500">
    <div class="text-center mb-6">
        <div class="w-16 h-16 bg-gradient-to-r from-pink-500 to-rose-500 rounded-full flex items-center justify-center mx-auto mb-3">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
            </svg>
        </div>
        <h3 class="text-lg font-bold text-gray-800">Enfermería</h3>
        <p class="text-sm text-gray-600">Ciencias de la Salud</p>
    </div>
    
    <nav class="space-y-1">
        <a href="/facultades/enfermeria" 
           class="flex items-center px-3 py-2 text-sm font-medium rounded-md transition-colors duration-200 {{ Request::is('facultades/enfermeria') ? 'bg-pink-100 text-pink-800 border-r-2 border-pink-500' : 'text-gray-700 hover:bg-gray-100 hover:text-pink-600' }}">
            <svg class="w-4 h-4 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z"></path>
            </svg>
            Inicio
        </a>
    </nav>
    
    <div class="mt-8 p-4 bg-pink-50 rounded-lg border border-pink-200">
        <div class="flex items-center mb-2">
            <svg class="w-5 h-5 text-pink-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
            </svg>
            <h4 class="text-sm font-semibold text-pink-800">Ciencias de la Salud</h4>
        </div>
        <p class="text-xs text-pink-700">
            Formando profesionales de enfermería desde 2009
        </p>
    </div>

    <!-- Datos de Contacto -->
    <div class="mt-6 p-4 bg-pink-50 rounded-lg border border-pink-200">
        <div class="flex items-center mb-3">
            <svg class="w-5 h-5 text-pink-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
            </svg>
            <h4 class="text-sm font-semibold text-pink-800">Contacto</h4>
        </div>
        
        <div class="space-y-3">
            <!-- Teléfono - Comentado -->
            <!-- <div class="flex items-start space-x-2">
                <svg class="w-4 h-4 text-pink-600 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                </svg>
                <div>
                    <p class="text-xs font-semibold text-gray-800">Teléfono</p>
                    <p class="text-xs text-pink-700">-</p>
                </div>
            </div> -->

            <!-- Correo -->
            <div class="flex items-start space-x-2">
                <svg class="w-4 h-4 text-pink-600 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
                <div>
                    <p class="text-xs font-semibold text-gray-800">Correo</p>
                    <a href="mailto:epenfer@unamad.edu.pe" class="text-xs text-pink-600 hover:text-pink-700 transition-colors break-all">epenfer@unamad.edu.pe</a>
                </div>
            </div>

            <!-- Dirección -->
            <div class="flex items-start space-x-2">
                <svg class="w-4 h-4 text-pink-600 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
                <div>
                    <p class="text-xs font-semibold text-gray-800">Dirección</p>
                    <p class="text-xs text-pink-700">AV. Jorge Chávez N° 1160</p>
                </div>
            </div>

            <!-- Web - Comentado -->
            <!-- <div class="flex items-start space-x-2">
                <svg class="w-4 h-4 text-pink-600 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9v-9m0-9v9m0 9c-5 0-9-4-9-9s4-9 9-9"></path>
                </svg>
                <div>
                    <p class="text-xs font-semibold text-gray-800">Web</p>
                    <p class="text-xs text-pink-700">-</p>
                </div>
            </div> -->
        </div>
    </div>
</div>