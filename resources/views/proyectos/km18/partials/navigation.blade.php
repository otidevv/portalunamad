<!-- Sidebar Navigation -->
<div class="bg-white rounded-lg shadow-lg p-6 border-t-4 border-red-600">
    <div class="text-center mb-6">
        <div class="w-16 h-16 bg-gradient-to-r from-red-600 to-rose-600 rounded-full flex items-center justify-center mx-auto mb-3">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
            </svg>
        </div>
        <h3 class="text-lg font-bold text-gray-800">Polideportivo Km. 18</h3>
        <p class="text-sm text-gray-600">Centro Deportivo</p>
    </div>
    
    <nav class="space-y-1">
        <a href="/proyectos/km18" 
           class="flex items-center px-3 py-2 text-sm font-medium rounded-md transition-colors duration-200 {{ Request::is('proyectos/km18') ? 'bg-red-100 text-red-800 border-r-2 border-red-500' : 'text-gray-700 hover:bg-gray-100 hover:text-red-600' }}">
            <svg class="w-4 h-4 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z"></path>
            </svg>
            Inicio
        </a>
    </nav>
    
    <div class="mt-8 p-4 bg-red-50 rounded-lg border border-red-200">
        <div class="flex items-center mb-2">
            <svg class="w-5 h-5 text-red-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
            </svg>
            <h4 class="text-sm font-semibold text-red-800">En Desarrollo</h4>
        </div>
        <p class="text-xs text-red-700">
            Complejo deportivo universitario en construcción
        </p>
    </div>

    <!-- Estado del Proyecto -->
    <div class="mt-6 p-4 bg-red-50 rounded-lg border border-red-200">
        <div class="flex items-center mb-3">
            <svg class="w-5 h-5 text-red-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            <h4 class="text-sm font-semibold text-red-800">Estado</h4>
        </div>
        
        <div class="space-y-2">
            <div class="flex items-center space-x-2">
                <div class="w-2 h-2 bg-yellow-400 rounded-full animate-pulse"></div>
                <span class="text-xs text-gray-700">En desarrollo</span>
            </div>
            <div class="text-xs text-red-700">
                Información próximamente disponible
            </div>
        </div>
    </div>

    <!-- Características Futuras -->
    <div class="mt-6 p-4 bg-red-50 rounded-lg border border-red-200">
        <div class="flex items-center mb-3">
            <svg class="w-5 h-5 text-red-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
            </svg>
            <h4 class="text-sm font-semibold text-red-800">Polideportivo</h4>
        </div>
        
        <div class="space-y-3">
            <!-- Ubicación -->
            <div class="flex items-start space-x-2">
                <svg class="w-4 h-4 text-red-600 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
                <div>
                    <p class="text-xs font-semibold text-gray-800">Ubicación</p>
                    <p class="text-xs text-red-700">Kilómetro 18</p>
                </div>
            </div>

            <!-- Deportes -->
            <div class="flex items-start space-x-2">
                <svg class="w-4 h-4 text-red-600 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                </svg>
                <div>
                    <p class="text-xs font-semibold text-gray-800">Deportes</p>
                    <p class="text-xs text-red-700">Múltiples disciplinas</p>
                </div>
            </div>

            <!-- Bienestar -->
            <div class="flex items-start space-x-2">
                <svg class="w-4 h-4 text-red-600 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                </svg>
                <div>
                    <p class="text-xs font-semibold text-gray-800">Bienestar</p>
                    <p class="text-xs text-red-700">Comunidad universitaria</p>
                </div>
            </div>

            <!-- Recreación -->
            <div class="flex items-start space-x-2">
                <svg class="w-4 h-4 text-red-600 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h1.01M15 10h1.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <div>
                    <p class="text-xs font-semibold text-gray-800">Recreación</p>
                    <p class="text-xs text-red-700">Actividades de esparcimiento</p>
                </div>
            </div>
        </div>
    </div>
</div>