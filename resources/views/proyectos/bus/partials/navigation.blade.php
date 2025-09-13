<!-- Sidebar Navigation -->
<div class="bg-white rounded-lg shadow-lg p-6 border-t-4 border-blue-500">
    <div class="text-center mb-6">
        <div class="w-16 h-16 bg-gradient-to-r from-blue-500 to-indigo-500 rounded-full flex items-center justify-center mx-auto mb-3">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2"></path>
            </svg>
        </div>
        <h3 class="text-lg font-bold text-gray-800">Bus Universitario</h3>
        <p class="text-sm text-gray-600">Transporte Universitario</p>
    </div>
    
    <nav class="space-y-1">
        <a href="/proyectos/bus" 
           class="flex items-center px-3 py-2 text-sm font-medium rounded-md transition-colors duration-200 {{ Request::is('proyectos/bus') ? 'bg-blue-100 text-blue-800 border-r-2 border-blue-500' : 'text-gray-700 hover:bg-gray-100 hover:text-blue-600' }}">
            <svg class="w-4 h-4 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z"></path>
            </svg>
            Inicio
        </a>
    </nav>
    
    <div class="mt-8 p-4 bg-blue-50 rounded-lg border border-blue-200">
        <div class="flex items-center mb-2">
            <svg class="w-5 h-5 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
            </svg>
            <h4 class="text-sm font-semibold text-blue-800">En Desarrollo</h4>
        </div>
        <p class="text-xs text-blue-700">
            Proyecto en construcción para la comunidad universitaria
        </p>
    </div>

    <!-- Estado del Proyecto -->
    <div class="mt-6 p-4 bg-blue-50 rounded-lg border border-blue-200">
        <div class="flex items-center mb-3">
            <svg class="w-5 h-5 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            <h4 class="text-sm font-semibold text-blue-800">Estado</h4>
        </div>
        
        <div class="space-y-2">
            <div class="flex items-center space-x-2">
                <div class="w-2 h-2 bg-yellow-400 rounded-full animate-pulse"></div>
                <span class="text-xs text-gray-700">En desarrollo</span>
            </div>
            <div class="text-xs text-blue-700">
                Información próximamente disponible
            </div>
        </div>
    </div>
</div>