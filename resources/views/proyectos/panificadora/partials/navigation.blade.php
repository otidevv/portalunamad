<!-- Sidebar Navigation -->
<div class="bg-white rounded-lg shadow-lg p-6 border-t-4 border-yellow-500">
    <div class="text-center mb-6">
        <div class="w-16 h-16 bg-gradient-to-r from-yellow-500 to-orange-500 rounded-full flex items-center justify-center mx-auto mb-3">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 15.546c-.523 0-1.046.151-1.5.454a2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.701 2.701 0 00-1.5-.454M9 6v2m3-2v2m3-2v2M9 3h.01M12 3h.01M15 3h.01M21 21v-7a2 2 0 00-2-2H5a2 2 0 00-2 2v7h18zM3 9h18v10a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path>
            </svg>
        </div>
        <h3 class="text-lg font-bold text-gray-800">Panificadora UNAMAD</h3>
        <p class="text-sm text-gray-600">Investigación y Producción</p>
    </div>
    
    <nav class="space-y-1">
        <a href="/proyectos/panificadora" 
           class="flex items-center px-3 py-2 text-sm font-medium rounded-md transition-colors duration-200 {{ Request::is('proyectos/panificadora') ? 'bg-yellow-100 text-yellow-800 border-r-2 border-yellow-500' : 'text-gray-700 hover:bg-gray-100 hover:text-yellow-600' }}">
            <svg class="w-4 h-4 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z"></path>
            </svg>
            Inicio
        </a>
    </nav>
    
    <div class="mt-8 p-4 bg-yellow-50 rounded-lg border border-yellow-200">
        <div class="flex items-center mb-2">
            <svg class="w-5 h-5 text-yellow-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 15.546c-.523 0-1.046.151-1.5.454a2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.701 2.701 0 00-1.5-.454M9 6v2m3-2v2m3-2v2M9 3h.01M12 3h.01M15 3h.01M21 21v-7a2 2 0 00-2-2H5a2 2 0 00-2 2v7h18zM3 9h18v10a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path>
            </svg>
            <h4 class="text-sm font-semibold text-yellow-800">Panadería y Pastelería</h4>
        </div>
        <p class="text-xs text-yellow-700">
            Centro especializado en investigación, capacitación y producción
        </p>
    </div>

    <!-- Información del Proyecto -->
    <div class="mt-6 p-4 bg-yellow-50 rounded-lg border border-yellow-200">
        <div class="flex items-center mb-3">
            <svg class="w-5 h-5 text-yellow-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            <h4 class="text-sm font-semibold text-yellow-800">Servicios</h4>
        </div>
        
        <div class="space-y-3">
            <!-- Investigación -->
            <div class="flex items-start space-x-2">
                <svg class="w-4 h-4 text-yellow-600 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                </svg>
                <div>
                    <p class="text-xs font-semibold text-gray-800">Investigación</p>
                    <p class="text-xs text-yellow-700">Desarrollo de productos</p>
                </div>
            </div>

            <!-- Capacitación -->
            <div class="flex items-start space-x-2">
                <svg class="w-4 h-4 text-yellow-600 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                </svg>
                <div>
                    <p class="text-xs font-semibold text-gray-800">Capacitación</p>
                    <p class="text-xs text-yellow-700">Cursos especializados</p>
                </div>
            </div>

            <!-- Producción -->
            <div class="flex items-start space-x-2">
                <svg class="w-4 h-4 text-yellow-600 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                </svg>
                <div>
                    <p class="text-xs font-semibold text-gray-800">Producción</p>
                    <p class="text-xs text-yellow-700">Productos de calidad</p>
                </div>
            </div>

            <!-- Asesoría -->
            <div class="flex items-start space-x-2">
                <svg class="w-4 h-4 text-yellow-600 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                </svg>
                <div>
                    <p class="text-xs font-semibold text-gray-800">Asesoría Técnica</p>
                    <p class="text-xs text-yellow-700">Consultoría especializada</p>
                </div>
            </div>
        </div>
    </div>
</div>