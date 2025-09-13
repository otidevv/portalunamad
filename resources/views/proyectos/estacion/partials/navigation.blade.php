<!-- Sidebar Navigation -->
<div class="bg-white rounded-lg shadow-lg p-6 border-t-4 border-orange-600">
    <div class="text-center mb-6">
        <div class="w-16 h-16 bg-gradient-to-r from-orange-600 to-amber-600 rounded-full flex items-center justify-center mx-auto mb-3">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
        </div>
        <h3 class="text-lg font-bold text-gray-800">Estación Geológica</h3>
        <p class="text-sm text-gray-600">Ciencias de la Tierra</p>
    </div>
    
    <nav class="space-y-1">
        <a href="/proyectos/estacion" 
           class="flex items-center px-3 py-2 text-sm font-medium rounded-md transition-colors duration-200 {{ Request::is('proyectos/estacion') ? 'bg-orange-100 text-orange-800 border-r-2 border-orange-500' : 'text-gray-700 hover:bg-gray-100 hover:text-orange-600' }}">
            <svg class="w-4 h-4 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z"></path>
            </svg>
            Inicio
        </a>
    </nav>
    
    <div class="mt-8 p-4 bg-orange-50 rounded-lg border border-orange-200">
        <div class="flex items-center mb-2">
            <svg class="w-5 h-5 text-orange-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            <h4 class="text-sm font-semibold text-orange-800">Ciencias de la Tierra</h4>
        </div>
        <p class="text-xs text-orange-700">
            Investigación geológica de la región amazónica de Madre de Dios
        </p>
    </div>

    <!-- Áreas de Estudio -->
    <div class="mt-6 p-4 bg-orange-50 rounded-lg border border-orange-200">
        <div class="flex items-center mb-3">
            <svg class="w-5 h-5 text-orange-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
            </svg>
            <h4 class="text-sm font-semibold text-orange-800">Áreas de Estudio</h4>
        </div>
        
        <div class="space-y-3">
            <!-- Composición -->
            <div class="flex items-start space-x-2">
                <svg class="w-4 h-4 text-orange-600 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <div>
                    <p class="text-xs font-semibold text-gray-800">Composición</p>
                    <p class="text-xs text-orange-700">Química, física y mineralogía</p>
                </div>
            </div>

            <!-- Dinámica -->
            <div class="flex items-start space-x-2">
                <svg class="w-4 h-4 text-orange-600 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                </svg>
                <div>
                    <p class="text-xs font-semibold text-gray-800">Dinámica</p>
                    <p class="text-xs text-orange-700">Procesos internos y externos</p>
                </div>
            </div>

            <!-- Recursos -->
            <div class="flex items-start space-x-2">
                <svg class="w-4 h-4 text-orange-600 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                </svg>
                <div>
                    <p class="text-xs font-semibold text-gray-800">Recursos</p>
                    <p class="text-xs text-orange-700">Minerales y energéticos</p>
                </div>
            </div>

            <!-- Investigación -->
            <div class="flex items-start space-x-2">
                <svg class="w-4 h-4 text-orange-600 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
                <div>
                    <p class="text-xs font-semibold text-gray-800">Investigación</p>
                    <p class="text-xs text-orange-700">Equipos analíticos avanzados</p>
                </div>
            </div>
        </div>
    </div>
</div>