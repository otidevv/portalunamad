<!-- Sidebar Navigation -->
<div class="bg-white rounded-lg shadow-lg p-6 border-t-4 border-lime-500">
    <div class="text-center mb-6">
        <div class="w-16 h-16 bg-gradient-to-r from-lime-500 to-green-500 rounded-full flex items-center justify-center mx-auto mb-3">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
            </svg>
        </div>
        <h3 class="text-lg font-bold text-gray-800">Cuna Jardín</h3>
        <p class="text-sm text-gray-600">Educación Inicial</p>
    </div>
    
    <nav class="space-y-1">
        <a href="/proyectos/jardin" 
           class="flex items-center px-3 py-2 text-sm font-medium rounded-md transition-colors duration-200 {{ Request::is('proyectos/jardin') ? 'bg-lime-100 text-lime-800 border-r-2 border-lime-500' : 'text-gray-700 hover:bg-gray-100 hover:text-lime-600' }}">
            <svg class="w-4 h-4 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z"></path>
            </svg>
            Inicio
        </a>
    </nav>
    
    <div class="mt-8 p-4 bg-lime-50 rounded-lg border border-lime-200">
        <div class="flex items-center mb-2">
            <svg class="w-5 h-5 text-lime-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
            </svg>
            <h4 class="text-sm font-semibold text-lime-800">Primera Infancia</h4>
        </div>
        <p class="text-xs text-lime-700">
            Desarrollo integral para niños y niñas en sus primeros años
        </p>
    </div>

    <!-- Información del Proyecto -->
    <div class="mt-6 p-4 bg-lime-50 rounded-lg border border-lime-200">
        <div class="flex items-center mb-3">
            <svg class="w-5 h-5 text-lime-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            <h4 class="text-sm font-semibold text-lime-800">Información</h4>
        </div>
        
        <div class="space-y-3">
            <!-- Nivel Educativo -->
            <div class="flex items-start space-x-2">
                <svg class="w-4 h-4 text-lime-600 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                </svg>
                <div>
                    <p class="text-xs font-semibold text-gray-800">Nivel</p>
                    <p class="text-xs text-lime-700">Educación Inicial</p>
                </div>
            </div>

            <!-- Edades -->
            <div class="flex items-start space-x-2">
                <svg class="w-4 h-4 text-lime-600 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <div>
                    <p class="text-xs font-semibold text-gray-800">Edades</p>
                    <p class="text-xs text-lime-700">0 a 5 años</p>
                </div>
            </div>

            <!-- Ubicación -->
            <div class="flex items-start space-x-2">
                <svg class="w-4 h-4 text-lime-600 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
                <div>
                    <p class="text-xs font-semibold text-gray-800">Ubicación</p>
                    <p class="text-xs text-lime-700">Campus UNAMAD</p>
                </div>
            </div>
        </div>
    </div>
</div>