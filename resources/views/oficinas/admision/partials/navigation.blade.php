<!-- Sidebar Navigation -->
<div class="bg-white rounded-lg shadow-lg p-6 border-t-4 border-blue-500">
    <div class="text-center mb-6">
        <div class="w-16 h-16 bg-gradient-to-r from-blue-500 to-indigo-600 rounded-full flex items-center justify-center mx-auto mb-3">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
            </svg>
        </div>
        <h3 class="text-lg font-bold text-gray-800">Dirección de Admisión</h3>
        <p class="text-sm text-gray-600">Vicerrectorado Académico</p>
    </div>

    <nav class="space-y-1">
        <a href="/oficinas/admision"
           class="flex items-center px-3 py-2 text-sm font-medium rounded-md transition-colors duration-200 {{ Request::is('oficinas/admision') ? 'bg-blue-100 text-blue-800 border-r-2 border-blue-500' : 'text-gray-700 hover:bg-gray-100 hover:text-blue-600' }}">
            <svg class="w-4 h-4 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z"></path>
            </svg>
            Inicio
        </a>
    </nav>

    <div class="mt-8 p-4 bg-blue-50 rounded-lg border border-blue-200">
        <div class="flex items-center mb-2">
            <svg class="w-5 h-5 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
            </svg>
            <h4 class="text-sm font-semibold text-blue-800">Acceso a la Universidad</h4>
        </div>
        <p class="text-xs text-blue-700">
            Gestión integral de procesos de admisión e ingreso universitario
        </p>
    </div>

    <!-- Datos de Contacto -->
    <div class="mt-6 p-4 bg-blue-50 rounded-lg border border-blue-200">
        <div class="flex items-center mb-3">
            <svg class="w-5 h-5 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
            </svg>
            <h4 class="text-sm font-semibold text-blue-800">Contacto</h4>
        </div>

        <div class="space-y-3">
            <!-- Correo - Comentado -->
            <!-- <div class="flex items-start space-x-2">
                <svg class="w-4 h-4 text-blue-600 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
                <div>
                    <p class="text-xs font-semibold text-gray-800">Correo</p>
                    <p class="text-xs text-blue-700">-</p>
                </div>
            </div> -->

            <!-- Dirección -->
            <div class="flex items-start space-x-2">
                <svg class="w-4 h-4 text-blue-600 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
                <div>
                    <p class="text-xs font-semibold text-gray-800">Dirección</p>
                    <p class="text-xs text-blue-700">Ciudad Universitaria - Tambopata</p>
                </div>
            </div>

            <!-- Portal Web -->
            <div class="flex items-start space-x-2">
                <svg class="w-4 h-4 text-blue-600 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9v-9m0-9v9m0 9c-5 0-9-4-9-9s4-9 9-9"></path>
                </svg>
                <div>
                    <p class="text-xs font-semibold text-gray-800">Portal de Admisión</p>
                    <a href="https://admision.unamad.edu.pe/" target="_blank" class="text-xs text-blue-600 hover:text-blue-700 transition-colors">admision.unamad.edu.pe</a>
                </div>
            </div>
        </div>
    </div>
</div>