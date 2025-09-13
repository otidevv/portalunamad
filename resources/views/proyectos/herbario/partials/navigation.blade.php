<!-- Sidebar Navigation -->
<div class="bg-white rounded-lg shadow-lg p-6 border-t-4 border-green-600">
    <div class="text-center mb-6">
        <div class="w-16 h-16 bg-gradient-to-r from-green-600 to-emerald-600 rounded-full flex items-center justify-center mx-auto mb-3">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"></path>
            </svg>
        </div>
        <h3 class="text-lg font-bold text-gray-800">Herbario</h3>
        <p class="text-sm text-gray-600">Biodiversidad Amazónica</p>
    </div>
    
    <nav class="space-y-1">
        <a href="/proyectos/herbario" 
           class="flex items-center px-3 py-2 text-sm font-medium rounded-md transition-colors duration-200 {{ Request::is('proyectos/herbario') ? 'bg-green-100 text-green-800 border-r-2 border-green-500' : 'text-gray-700 hover:bg-gray-100 hover:text-green-600' }}">
            <svg class="w-4 h-4 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z"></path>
            </svg>
            Inicio
        </a>
    </nav>
    
    <div class="mt-8 p-4 bg-green-50 rounded-lg border border-green-200">
        <div class="flex items-center mb-2">
            <svg class="w-5 h-5 text-green-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"></path>
            </svg>
            <h4 class="text-sm font-semibold text-green-800">Tesoro de Biodiversidad</h4>
        </div>
        <p class="text-xs text-green-700">
            Conservación y estudio de la flora amazónica de Madre de Dios
        </p>
    </div>

    <!-- Funciones del Herbario -->
    <div class="mt-6 p-4 bg-green-50 rounded-lg border border-green-200">
        <div class="flex items-center mb-3">
            <svg class="w-5 h-5 text-green-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
            </svg>
            <h4 class="text-sm font-semibold text-green-800">Funciones</h4>
        </div>
        
        <div class="space-y-3">
            <!-- Docencia -->
            <div class="flex items-start space-x-2">
                <svg class="w-4 h-4 text-green-600 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                </svg>
                <div>
                    <p class="text-xs font-semibold text-gray-800">Apoyo Docente</p>
                    <p class="text-xs text-green-700">Trabajos de grado y máster</p>
                </div>
            </div>

            <!-- Investigación -->
            <div class="flex items-start space-x-2">
                <svg class="w-4 h-4 text-green-600 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                </svg>
                <div>
                    <p class="text-xs font-semibold text-gray-800">Investigación</p>
                    <p class="text-xs text-green-700">Proyectos científicos</p>
                </div>
            </div>

            <!-- Referencia -->
            <div class="flex items-start space-x-2">
                <svg class="w-4 h-4 text-green-600 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                </svg>
                <div>
                    <p class="text-xs font-semibold text-gray-800">Referencia</p>
                    <p class="text-xs text-green-700">Patrón botánico</p>
                </div>
            </div>

            <!-- Conservación -->
            <div class="flex items-start space-x-2">
                <svg class="w-4 h-4 text-green-600 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                </svg>
                <div>
                    <p class="text-xs font-semibold text-gray-800">Conservación</p>
                    <p class="text-xs text-green-700">Flora regional</p>
                </div>
            </div>
        </div>
    </div>
</div>