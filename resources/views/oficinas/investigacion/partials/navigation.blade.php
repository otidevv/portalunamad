<!-- Sidebar Navigation -->
<div class="bg-white rounded-lg shadow-lg p-6 border-t-4 border-indigo-500">
    <div class="text-center mb-6">
        <div class="w-16 h-16 bg-gradient-to-r from-indigo-500 to-purple-600 rounded-full flex items-center justify-center mx-auto mb-3">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2H9z"></path>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5a2 2 0 012 2v6a2 2 0 01-2 2H9a2 2 0 01-2-2V7a2 2 0 012-2h4z"></path>
            </svg>
        </div>
        <h3 class="text-lg font-bold text-gray-800">Instituto de Investigación</h3>
        <p class="text-sm text-gray-600">Vicerrectorado de Investigación</p>
    </div>

    <nav class="space-y-1">
        <a href="/oficinas/investigacion"
           class="flex items-center px-3 py-2 text-sm font-medium rounded-md transition-colors duration-200 {{ Request::is('oficinas/investigacion') ? 'bg-indigo-100 text-indigo-800 border-r-2 border-indigo-500' : 'text-gray-700 hover:bg-gray-100 hover:text-indigo-600' }}">
            <svg class="w-4 h-4 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z"></path>
            </svg>
            Inicio
        </a>
    </nav>

    <div class="mt-8 p-4 bg-indigo-50 rounded-lg border border-indigo-200">
        <div class="flex items-center mb-2">
            <svg class="w-5 h-5 text-indigo-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2H9z"></path>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5a2 2 0 012 2v6a2 2 0 01-2 2H9a2 2 0 01-2-2V7a2 2 0 012-2h4z"></path>
            </svg>
            <h4 class="text-sm font-semibold text-indigo-800">Investigación y Desarrollo</h4>
        </div>
        <p class="text-xs text-indigo-700">
            Gestión integral de actividades de investigación científica y desarrollo tecnológico
        </p>
    </div>

    <!-- Datos de Contacto -->
    <div class="mt-6 p-4 bg-indigo-50 rounded-lg border border-indigo-200">
        <div class="flex items-center mb-3">
            <svg class="w-5 h-5 text-indigo-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
            </svg>
            <h4 class="text-sm font-semibold text-indigo-800">Contacto</h4>
        </div>

        <div class="space-y-3">
            <!-- Correo - Comentado -->
            <!-- <div class="flex items-start space-x-2">
                <svg class="w-4 h-4 text-indigo-600 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
                <div>
                    <p class="text-xs font-semibold text-gray-800">Correo</p>
                    <p class="text-xs text-indigo-700">-</p>
                </div>
            </div> -->

            <!-- Dirección -->
            <div class="flex items-start space-x-2">
                <svg class="w-4 h-4 text-indigo-600 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
                <div>
                    <p class="text-xs font-semibold text-gray-800">Dirección</p>
                    <p class="text-xs text-indigo-700">Ciudad Universitaria - Tambopata</p>
                </div>
            </div>
        </div>
    </div>
</div>