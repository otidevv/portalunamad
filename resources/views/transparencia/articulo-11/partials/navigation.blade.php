<div class="bg-white rounded-lg shadow-md p-6">
    <h3 class="text-lg font-semibold text-gray-800 mb-4 flex items-center">
        <svg class="w-5 h-5 mr-2 text-blue-600" fill="currentColor" viewBox="0 0 24 24">
            <path d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z"/>
        </svg>
        Navegación Artículo 11
    </h3>
    
    <nav class="space-y-2">
        <a href="/transparencia/articulo-11" 
           class="flex items-center px-3 py-2 text-sm font-medium text-gray-700 rounded-md hover:bg-blue-50 hover:text-blue-700 transition-colors {{ request()->is('transparencia/articulo-11') ? 'bg-blue-50 text-blue-700 border-r-2 border-blue-700' : '' }}">
            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24">
                <path d="M10,20V14H14V20H19V12H22L12,3L2,12H5V20H10Z"/>
            </svg>
            Inicio
        </a>
    </nav>

    <div class="mt-6 p-4 bg-blue-50 rounded-lg">
        <h4 class="text-sm font-medium text-blue-800 mb-2">Transparencia Universitaria</h4>
        <p class="text-xs text-blue-700">
            Información pública de acuerdo al Artículo 11 de la Ley Universitaria N° 30220.
        </p>
    </div>
</div>