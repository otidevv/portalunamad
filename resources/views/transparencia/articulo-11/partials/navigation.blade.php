<div class="bg-white rounded-lg shadow-md p-6">
    <h3 id="nav-articulo-11-titulo" class="text-lg font-semibold text-gray-800 mb-4 flex items-center">
        <svg aria-hidden="true" focusable="false" class="w-5 h-5 mr-2 text-blue-600" fill="currentColor" viewBox="0 0 24 24">
            <path d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z"/>
        </svg>
        Navegación Artículo 11
    </h3>
    
    <nav aria-labelledby="nav-articulo-11-titulo">
        <ul role="list" class="space-y-2">
        <li>
        <a href="/transparencia/articulo-11" @if(request()->is('transparencia/articulo-11')) aria-current="page" @endif
           class="flex items-center px-3 py-2 text-sm text-gray-700 rounded-md hover:bg-blue-50 hover:text-blue-700 transition-colors {{ request()->is('transparencia/articulo-11') ? 'bg-blue-50 text-blue-700 border-r-2 border-blue-700 font-semibold' : 'font-medium' }}">
            <svg aria-hidden="true" focusable="false" class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24">
                <path d="M10,20V14H14V20H19V12H22L12,3L2,12H5V20H10Z"/>
            </svg>
            Inicio
        </a>
        </li>
        </ul>
    </nav>

    <div class="mt-6 p-4 bg-blue-50 rounded-lg">
        <h4 class="text-sm font-medium text-blue-800 mb-2">Transparencia Universitaria</h4>
        <p class="text-xs text-blue-700">
            Información pública de acuerdo al Artículo 11 de la Ley Universitaria N° 30220.
        </p>
    </div>
</div>