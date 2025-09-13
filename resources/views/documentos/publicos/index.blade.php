@extends('layouts.app')

@section('title', 'Documentos Normativos y de Gestión - UNAMAD')

@section('content')
<div class="min-h-screen bg-gray-50">
    <!-- Header compacto -->
    <div class="bg-gradient-to-r from-[#db0455] to-[#a00340] text-white py-8">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <div class="flex items-center justify-between">
                    <div>
                        <h1 class="text-2xl md:text-3xl font-bold mb-2">
                            Documentos Normativos y de Gestión
                        </h1>
                        <p class="text-white/90">
                            Portal de transparencia institucional
                        </p>
                    </div>
                    <div class="hidden md:flex items-center bg-white/10 rounded-lg p-3">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-6xl mx-auto">
            
            <!-- Barra de búsqueda -->
            <div class="bg-white rounded-lg shadow-sm border border-gray-200 mb-6">
                <div class="p-6">
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                        <input type="text" 
                               id="searchInput" 
                               placeholder="Buscar documentos, reglamentos, manuales..." 
                               class="block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#db0455] focus:border-transparent text-sm">
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                            <div id="searchLoader" class="hidden">
                                <svg class="animate-spin h-5 w-5 text-[#db0455]" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Resultados de búsqueda -->
                    <div id="searchResults" class="hidden mt-4 border-t border-gray-200 pt-4">
                        <div class="flex items-center justify-between mb-3">
                            <h3 class="text-sm font-medium text-gray-700">Resultados de búsqueda</h3>
                            <button onclick="clearSearch()" class="text-xs text-[#db0455] hover:text-[#a00340]">Limpiar</button>
                        </div>
                        <div id="searchResultsContent" class="space-y-2 max-h-96 overflow-y-auto"></div>
                    </div>
                </div>
            </div>

            <!-- Vista del explorador -->
            <div id="explorerView" class="bg-white rounded-lg shadow-sm border border-gray-200">
                
                <!-- Header del explorador -->
                <div class="border-b border-gray-200 px-6 py-4">
                    <div class="flex items-center justify-between">
                        <h2 class="text-lg font-semibold text-gray-900">Explorador de Documentos</h2>
                        <div class="text-sm text-gray-500">
                            <span id="itemCount">{{ $carpetas->count() + $documentos->count() }} elementos</span>
                        </div>
                    </div>
                </div>

                <!-- Contenido del explorador -->
                <div class="divide-y divide-gray-100">
                    
                    <!-- Carpetas -->
                    @foreach($carpetas as $carpeta)
                    <div class="folder-item" data-folder-id="{{ $carpeta->id }}">
                        <div class="flex items-center p-4 hover:bg-gray-50 cursor-pointer transition-colors" 
                             onclick="toggleFolder({{ $carpeta->id }})">
                            <div class="flex items-center flex-1">
                                <!-- Botón expandir/colapsar -->
                                <div class="expand-btn w-6 h-6 rounded-full bg-gray-100 hover:bg-gray-200 flex items-center justify-center mr-3 transition-colors">
                                    <svg class="w-4 h-4 text-gray-600 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                    </svg>
                                </div>

                                <!-- Icono de carpeta -->
                                <div class="w-8 h-8 flex items-center justify-center mr-3" 
                                     style="color: {{ $carpeta->color }};">
                                    @if($carpeta->icono === 'folder') 📁
                                    @elseif($carpeta->icono === 'archive') 🗃️
                                    @elseif($carpeta->icono === 'briefcase') 💼
                                    @elseif($carpeta->icono === 'book') 📚
                                    @elseif($carpeta->icono === 'library') 🏛️
                                    @else 📁
                                    @endif
                                </div>

                                <!-- Información de la carpeta -->
                                <div class="flex-1 min-w-0">
                                    <div class="flex items-center">
                                        <h3 class="text-sm font-medium text-gray-900 truncate">{{ $carpeta->nombre }}</h3>
                                        <span class="ml-2 text-xs text-gray-500">
                                            ({{ ($carpeta->hijos_count ?? 0) + ($carpeta->documentos_count ?? 0) }} elementos)
                                        </span>
                                    </div>
                                    @if($carpeta->descripcion)
                                        <p class="text-xs text-gray-600 mt-1 truncate">{{ $carpeta->descripcion }}</p>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <!-- Contenido expandible de la carpeta -->
                        <div class="folder-content hidden ml-12 border-l-2 border-gray-100">
                            <div class="loading-content p-4 text-center text-gray-500 text-sm">
                                <svg class="animate-spin h-5 w-5 mx-auto mb-2" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                </svg>
                                Cargando contenido...
                            </div>
                        </div>
                    </div>
                    @endforeach

                    <!-- Documentos -->
                    @foreach($documentos as $documento)
                    <div class="document-item flex items-center p-4 hover:bg-gray-50 transition-colors">
                        <div class="w-6 h-6 mr-3"></div> <!-- Espaciado para alineación -->
                        
                        <!-- Icono del documento -->
                        <div class="w-8 h-8 rounded bg-gray-100 flex items-center justify-center mr-3 text-sm">
                            {{ $documento->icono_completo }}
                        </div>

                        <!-- Información del documento -->
                        <div class="flex-1 min-w-0">
                            <div class="flex items-center mb-1">
                                <h3 class="text-sm font-medium text-gray-900 truncate">{{ $documento->titulo }}</h3>
                                @if($documento->destacado)
                                    <span class="ml-2 inline-flex items-center px-1.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                        ⭐
                                    </span>
                                @endif
                                @if($documento->esEnlaceExterno())
                                    <span class="ml-2 inline-flex items-center px-1.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                        🔗
                                    </span>
                                @endif
                            </div>
                            
                            @if($documento->descripcion)
                                <p class="text-xs text-gray-600 mb-1 line-clamp-1">{{ $documento->descripcion }}</p>
                            @endif
                            
                            <div class="flex items-center space-x-3 text-xs text-gray-500">
                                <span>{{ $documento->vistas ?? 0 }} vistas</span>
                                @if($documento->descargas > 0)
                                    <span>{{ $documento->descargas }} descargas</span>
                                @endif
                            </div>
                        </div>

                        <!-- Botón de acción -->
                        <div class="ml-4">
                            <a href="{{ route('documentos.publicos.acceder', $documento) }}" 
                               target="{{ $documento->esEnlaceExterno() ? '_blank' : '_self' }}"
                               class="inline-flex items-center px-3 py-1.5 bg-[#db0455] text-white text-xs font-medium rounded hover:bg-[#a00340] transition-colors">
                                {{ $documento->tipo_enlace === 'archivo' ? 'Descargar' : 'Acceder' }}
                            </a>
                        </div>
                    </div>
                    @endforeach

                    <!-- Estado vacío -->
                    @if($carpetas->count() === 0 && $documentos->count() === 0)
                    <div class="text-center py-12">
                        <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-5l-2-2H5a2 2 0 00-2 2z"></path>
                        </svg>
                        <h3 class="mt-2 text-sm font-medium text-gray-900">No hay documentos disponibles</h3>
                        <p class="mt-1 text-sm text-gray-500">
                            No hay carpetas o documentos disponibles en este momento.
                        </p>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<script>
// Variables globales
let searchTimeout;
let expandedFolders = new Set();

// Función de búsqueda
document.getElementById('searchInput').addEventListener('input', function(e) {
    const query = e.target.value.trim();
    
    clearTimeout(searchTimeout);
    
    if (query.length === 0) {
        hideSearchResults();
        return;
    }
    
    if (query.length < 2) return;
    
    searchTimeout = setTimeout(() => {
        performSearch(query);
    }, 300);
});

function performSearch(query) {
    const loader = document.getElementById('searchLoader');
    const results = document.getElementById('searchResults');
    
    loader.classList.remove('hidden');
    
    fetch(`{{ route('documentos.publicos') }}?search=${encodeURIComponent(query)}`, {
        headers: {
            'Accept': 'application/json',
            'X-Requested-With': 'XMLHttpRequest'
        }
    })
    .then(response => response.json())
    .then(data => {
        loader.classList.add('hidden');
        displaySearchResults(data.results || []);
    })
    .catch(error => {
        loader.classList.add('hidden');
        console.error('Error en búsqueda:', error);
    });
}

function displaySearchResults(results) {
    const resultsContainer = document.getElementById('searchResultsContent');
    const searchResults = document.getElementById('searchResults');
    
    if (results.length === 0) {
        resultsContainer.innerHTML = '<p class="text-sm text-gray-500 py-2">No se encontraron documentos</p>';
    } else {
        resultsContainer.innerHTML = results.map(doc => `
            <div class="flex items-center p-3 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors">
                <div class="w-8 h-8 rounded bg-white flex items-center justify-center mr-3 text-sm">
                    ${doc.icono}
                </div>
                <div class="flex-1 min-w-0">
                    <h4 class="text-sm font-medium text-gray-900 truncate">${doc.titulo}</h4>
                    <p class="text-xs text-gray-600 truncate">${doc.ruta}</p>
                </div>
                <a href="${doc.url}" 
                   target="${doc.externo ? '_blank' : '_self'}"
                   class="ml-3 inline-flex items-center px-2 py-1 bg-[#db0455] text-white text-xs rounded hover:bg-[#a00340] transition-colors">
                    ${doc.tipo_enlace === 'archivo' ? 'Descargar' : 'Acceder'}
                </a>
            </div>
        `).join('');
    }
    
    searchResults.classList.remove('hidden');
}

function hideSearchResults() {
    document.getElementById('searchResults').classList.add('hidden');
}

function clearSearch() {
    document.getElementById('searchInput').value = '';
    hideSearchResults();
}

// Función para expandir/colapsar carpetas
function toggleFolder(folderId) {
    const folderItem = document.querySelector(`[data-folder-id="${folderId}"]`);
    const content = folderItem.querySelector('.folder-content');
    const expandBtn = folderItem.querySelector('.expand-btn svg');
    
    if (expandedFolders.has(folderId)) {
        // Colapsar
        content.classList.add('hidden');
        expandBtn.style.transform = 'rotate(0deg)';
        expandedFolders.delete(folderId);
    } else {
        // Expandir
        content.classList.remove('hidden');
        expandBtn.style.transform = 'rotate(45deg)';
        expandedFolders.add(folderId);
        
        // Cargar contenido si no está cargado
        loadFolderContent(folderId);
    }
}

function loadFolderContent(folderId) {
    const folderItem = document.querySelector(`[data-folder-id="${folderId}"]`);
    const content = folderItem.querySelector('.folder-content');
    
    // Si ya tiene contenido cargado, no volver a cargar
    if (content.dataset.loaded === 'true') return;
    
    fetch(`{{ route('documentos.publicos') }}?carpeta_id=${folderId}`, {
        headers: {
            'Accept': 'application/json',
            'X-Requested-With': 'XMLHttpRequest'
        }
    })
    .then(response => response.json())
    .then(data => {
        content.innerHTML = generateFolderContent(data.carpetas || [], data.documentos || []);
        content.dataset.loaded = 'true';
    })
    .catch(error => {
        content.innerHTML = '<div class="p-4 text-center text-red-500 text-sm">Error al cargar contenido</div>';
        console.error('Error:', error);
    });
}

function generateFolderContent(carpetas, documentos) {
    let html = '';
    
    // Agregar subcarpetas
    carpetas.forEach(carpeta => {
        html += `
            <div class="folder-item" data-folder-id="${carpeta.id}">
                <div class="flex items-center p-3 hover:bg-gray-50 cursor-pointer transition-colors" 
                     onclick="toggleFolder(${carpeta.id})">
                    <div class="expand-btn w-5 h-5 rounded-full bg-gray-100 hover:bg-gray-200 flex items-center justify-center mr-2">
                        <svg class="w-3 h-3 text-gray-600 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                    </div>
                    <div class="w-6 h-6 flex items-center justify-center mr-2 text-sm" style="color: ${carpeta.color};">
                        ${getIcono(carpeta.icono)}
                    </div>
                    <div class="flex-1">
                        <h4 class="text-sm font-medium text-gray-900">${carpeta.nombre}</h4>
                        <span class="text-xs text-gray-500">(${carpeta.elementos_count || 0} elementos)</span>
                    </div>
                </div>
                <div class="folder-content hidden ml-8 border-l border-gray-100">
                    <div class="loading-content p-3 text-center text-gray-500 text-xs">
                        <svg class="animate-spin h-4 w-4 mx-auto mb-1" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                        Cargando...
                    </div>
                </div>
            </div>
        `;
    });
    
    // Agregar documentos
    documentos.forEach(documento => {
        html += `
            <div class="flex items-center p-3 hover:bg-gray-50 transition-colors">
                <div class="w-5 h-5 mr-2"></div>
                <div class="w-6 h-6 rounded bg-gray-100 flex items-center justify-center mr-2 text-xs">
                    ${documento.icono}
                </div>
                <div class="flex-1 min-w-0">
                    <h4 class="text-sm font-medium text-gray-900 truncate">${documento.titulo}</h4>
                </div>
                <a href="${documento.url}" 
                   target="${documento.externo ? '_blank' : '_self'}"
                   class="ml-2 inline-flex items-center px-2 py-1 bg-[#db0455] text-white text-xs rounded hover:bg-[#a00340] transition-colors">
                    ${documento.tipo_enlace === 'archivo' ? 'Descargar' : 'Acceder'}
                </a>
            </div>
        `;
    });
    
    if (html === '') {
        html = '<div class="p-3 text-center text-gray-500 text-xs">Carpeta vacía</div>';
    }
    
    return html;
}

function getIcono(tipo) {
    const iconos = {
        'folder': '📁',
        'archive': '🗃️',
        'briefcase': '💼',
        'book': '📚',
        'library': '🏛️'
    };
    return iconos[tipo] || '📁';
}
</script>
@endsection