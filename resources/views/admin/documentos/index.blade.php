@extends('admin.layouts.app')

@section('content')
<div class="p-6">
    <!-- Header -->
    <div class="flex justify-between items-center mb-6">
        <div>
            <h1 class="text-2xl font-bold text-gray-800">📁 Gestión de Documentos</h1>
            <p class="text-gray-600 text-sm mt-1">Administra documentos y carpetas del portal</p>
        </div>
        <div class="flex space-x-3">
            <button onclick="openModal('carpeta')" 
                    class="flex items-center space-x-2 px-4 py-2 bg-gradient-to-r from-blue-500 to-blue-600 text-white rounded-lg hover:shadow-lg transform hover:scale-[1.02] transition-all duration-200">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
                <span>Nueva Carpeta</span>
            </button>
            @if($carpetaActual)
            <button onclick="openModal('documento')" 
                    class="flex items-center space-x-2 px-4 py-2 bg-gradient-to-r from-[#db0455] to-[#a00340] text-white rounded-lg hover:shadow-lg transform hover:scale-[1.02] transition-all duration-200">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                </svg>
                <span>Nuevo Documento</span>
            </button>
            @endif
        </div>
    </div>

    <!-- Breadcrumb -->
    @if($breadcrumb->count() > 0)
    <div class="bg-white rounded-lg shadow-sm p-4 mb-6">
        <div class="flex items-center space-x-2 text-sm">
            <a href="{{ route('admin.documentos.index') }}" class="text-gray-500 hover:text-[#db0455] transition-colors">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5a2 2 0 012-2h0a2 2 0 012 2v0H8v0z"></path>
                </svg>
            </a>
            <span class="text-gray-400">/</span>
            @foreach($breadcrumb as $carpeta)
                @if($loop->last)
                    <span class="text-[#db0455] font-medium">{{ $carpeta->icono_completo }} {{ $carpeta->nombre }}</span>
                @else
                    <a href="{{ route('admin.documentos.index', ['carpeta_id' => $carpeta->id]) }}" 
                       class="text-gray-500 hover:text-[#db0455] transition-colors">
                        {{ $carpeta->icono_completo }} {{ $carpeta->nombre }}
                    </a>
                    <span class="text-gray-400">/</span>
                @endif
            @endforeach
        </div>
    </div>
    @endif

    <!-- Mensajes -->
    @if(session('success'))
        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded-lg">
            <div class="flex items-center">
                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                </svg>
                {{ session('success') }}
            </div>
        </div>
    @endif

    @if(session('error'))
        <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6 rounded-lg">
            <div class="flex items-center">
                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                </svg>
                {{ session('error') }}
            </div>
        </div>
    @endif

    <!-- Explorador de Archivos -->
    <div class="bg-white rounded-lg shadow-sm overflow-hidden">
        @if($carpetas->count() > 0 || $documentos->count() > 0)
            <div class="divide-y divide-gray-200">
                <!-- Carpetas -->
                @foreach($carpetas as $carpeta)
                <div class="group hover:bg-gray-50 transition-colors">
                    <div class="p-4 flex items-center justify-between">
                        <div class="flex items-center space-x-4 flex-1">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 rounded-lg flex items-center justify-center text-2xl" 
                                     style="background-color: {{ $carpeta->color }}20; color: {{ $carpeta->color }}">
                                    {{ $carpeta->icono_completo }}
                                </div>
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="flex items-center space-x-2">
                                    <h3 class="text-sm font-medium text-gray-900 truncate">
                                        <a href="{{ route('admin.documentos.index', ['carpeta_id' => $carpeta->id]) }}" 
                                           class="hover:text-[#db0455] transition-colors">
                                            {{ $carpeta->nombre }}
                                        </a>
                                    </h3>
                                    <span class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                                        {{ $carpeta->total_documentos }} elemento{{ $carpeta->total_documentos != 1 ? 's' : '' }}
                                    </span>
                                </div>
                                @if($carpeta->descripcion)
                                <p class="text-sm text-gray-500 mt-1">{{ Str::limit($carpeta->descripcion, 60) }}</p>
                                @endif
                                <p class="text-xs text-gray-400 mt-1">
                                    Creado por {{ $carpeta->user->name }} • {{ $carpeta->created_at->format('d/m/Y H:i') }}
                                </p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-2 opacity-0 group-hover:opacity-100 transition-opacity">
                            <!-- Controles de Orden -->
                            <div class="flex flex-col">
                                <button onclick="cambiarOrden('carpeta', {{ $carpeta->id }}, 'up')" 
                                        class="text-gray-400 hover:text-green-600 transition-colors p-1" title="Subir">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path>
                                    </svg>
                                </button>
                                <button onclick="cambiarOrden('carpeta', {{ $carpeta->id }}, 'down')" 
                                        class="text-gray-400 hover:text-orange-600 transition-colors p-1" title="Bajar">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </button>
                            </div>
                            
                            <!-- Orden Actual -->
                            <span class="text-xs text-gray-500 bg-gray-100 px-2 py-1 rounded-full" title="Orden actual">
                                #{{ $carpeta->orden ?? 0 }}
                            </span>
                            
                            <button onclick="editCarpeta({{ $carpeta->id }})" 
                                    class="text-gray-400 hover:text-blue-600 transition-colors" title="Editar">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                </svg>
                            </button>
                            <form action="{{ route('admin.documentos.carpeta.destroy', $carpeta) }}" 
                                  method="POST" 
                                  class="inline-block"
                                  onsubmit="return confirm('¿Está seguro de eliminar esta carpeta?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-gray-400 hover:text-red-600 transition-colors" title="Eliminar">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach

                <!-- Documentos -->
                @foreach($documentos as $documento)
                <div class="group hover:bg-gray-50 transition-colors">
                    <div class="p-4 flex items-center justify-between">
                        <div class="flex items-center space-x-4 flex-1">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 bg-gray-100 rounded-lg flex items-center justify-center text-2xl">
                                    {{ $documento->icono_completo }}
                                </div>
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="flex items-center space-x-2">
                                    <h3 class="text-sm font-medium text-gray-900 truncate">
                                        <a href="{{ route('admin.documentos.acceder', $documento) }}" 
                                           class="hover:text-[#db0455] transition-colors" target="_blank">
                                            {{ $documento->titulo }}
                                        </a>
                                    </h3>
                                    <span class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium 
                                           {{ $documento->color_estado === 'green' ? 'bg-green-100 text-green-800' : 
                                              ($documento->color_estado === 'yellow' ? 'bg-yellow-100 text-yellow-800' : 
                                               ($documento->color_estado === 'red' ? 'bg-red-100 text-red-800' : 'bg-gray-100 text-gray-800')) }}">
                                        {{ $documento->texto_estado }}
                                    </span>
                                    @if($documento->destacado)
                                    <span class="text-yellow-500" title="Destacado">⭐</span>
                                    @endif
                                </div>
                                @if($documento->descripcion)
                                <p class="text-sm text-gray-500 mt-1">{{ Str::limit($documento->descripcion, 60) }}</p>
                                @endif
                                <div class="flex items-center space-x-4 text-xs text-gray-400 mt-1">
                                    <span>{{ $documento->user->name }}</span>
                                    <span>{{ $documento->created_at->format('d/m/Y') }}</span>
                                    @if($documento->tamaño_formateado)
                                    <span>{{ $documento->tamaño_formateado }}</span>
                                    @endif
                                    <span>👁️ {{ $documento->vistas }}</span>
                                    @if($documento->descargas > 0)
                                    <span>⬇️ {{ $documento->descargas }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center space-x-2 opacity-0 group-hover:opacity-100 transition-opacity">
                            <a href="{{ route('admin.documentos.show', $documento) }}" 
                               class="text-gray-400 hover:text-gray-600 transition-colors" title="Ver">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                </svg>
                            </a>
                            <button onclick="editDocumento({{ $documento->id }})" 
                                    class="text-gray-400 hover:text-blue-600 transition-colors" title="Editar">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                </svg>
                            </button>
                            <button onclick="toggleEstado({{ $documento->id }})" 
                                    class="text-gray-400 hover:text-green-600 transition-colors" title="Cambiar estado">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </button>
                            <form action="{{ route('admin.documentos.destroy', $documento) }}" 
                                  method="POST" 
                                  class="inline-block"
                                  onsubmit="return confirm('¿Está seguro de eliminar este documento?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-gray-400 hover:text-red-600 transition-colors" title="Eliminar">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        @else
            <!-- Estado vacío -->
            <div class="text-center py-12">
                <div class="w-24 h-24 mx-auto mb-4 text-gray-400">
                    @if($carpetaActual)
                        📂
                    @else
                        🗂️
                    @endif
                </div>
                <h3 class="text-lg font-medium text-gray-900 mb-2">
                    @if($carpetaActual)
                        La carpeta está vacía
                    @else
                        No hay carpetas creadas
                    @endif
                </h3>
                <p class="text-gray-500 mb-6">
                    @if($carpetaActual)
                        Agrega documentos a esta carpeta
                    @else
                        Crea tu primera carpeta para organizar los documentos
                    @endif
                </p>
                <button onclick="openModal('{{ $carpetaActual ? 'documento' : 'carpeta' }}')" 
                        class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-[#db0455] to-[#a00340] text-white rounded-lg hover:shadow-lg transition-all">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                    {{ $carpetaActual ? 'Agregar Documento' : 'Crear Carpeta' }}
                </button>
            </div>
        @endif
    </div>

    <!-- Modal Universal -->
    <div id="universalModal" class="fixed inset-0 z-50 overflow-y-auto hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-2xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                <!-- Modal Content será insertado aquí dinámicamente -->
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
let currentModalType = '';

// Abrir modal
function openModal(type) {
    currentModalType = type;
    const modal = document.getElementById('universalModal');
    const modalContent = modal.querySelector('.inline-block');
    
    if (type === 'carpeta') {
        modalContent.innerHTML = getCarpetaModalHTML();
    } else if (type === 'documento') {
        modalContent.innerHTML = getDocumentoModalHTML();
    }
    
    modal.classList.remove('hidden');
    
    // Focus en el primer input
    setTimeout(() => {
        const firstInput = modal.querySelector('input[type="text"]');
        if (firstInput) firstInput.focus();
    }, 100);
}

// Cerrar modal
function closeModal() {
    document.getElementById('universalModal').classList.add('hidden');
    currentModalType = '';
}

// HTML del modal de carpeta
function getCarpetaModalHTML() {
    return `
        <div class="bg-gradient-to-r from-blue-500 to-blue-600 px-6 py-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                    </div>
                    <div class="ml-3">
                        <h3 class="text-lg leading-6 font-medium text-white">
                            Nueva Carpeta
                        </h3>
                        <p class="text-sm text-blue-100">
                            Crea una nueva carpeta para organizar documentos
                        </p>
                    </div>
                </div>
                <button onclick="closeModal()" class="text-white hover:text-blue-200 transition-colors">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>
        
        <form onsubmit="submitForm(event)" class="p-6 space-y-4">
            <input type="hidden" name="tipo" value="carpeta">
            <input type="hidden" name="carpeta_id" value="{{ $carpetaActual?->id }}">
            
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Nombre *</label>
                <input type="text" name="nombre" required
                       class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                       placeholder="Ej: Documentos Académicos">
                <div class="text-red-600 text-sm mt-1" id="error-nombre"></div>
            </div>
            
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Descripción</label>
                <textarea name="descripcion_carpeta" rows="3"
                          class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                          placeholder="Descripción opcional de la carpeta"></textarea>
            </div>
            
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Orden *</label>
                <input type="number" name="orden" required min="1" value="1"
                       class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                       placeholder="Ej: 1, 2, 3...">
                <div class="text-red-600 text-sm mt-1" id="error-orden"></div>
                <p class="text-sm text-gray-500 mt-1">Define la posición donde aparecerá esta carpeta</p>
            </div>
            
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Icono</label>
                    <select name="icono" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        <option value="folder">📁 Carpeta</option>
                        <option value="archive">🗃️ Archivo</option>
                        <option value="briefcase">💼 Portafolio</option>
                        <option value="book">📚 Libro</option>
                        <option value="library">🏛️ Biblioteca</option>
                    </select>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Color</label>
                    <select name="color" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        <option value="#3B82F6">🔵 Azul</option>
                        <option value="#EF4444">🔴 Rojo</option>
                        <option value="#10B981">🟢 Verde</option>
                        <option value="#F59E0B">🟡 Amarillo</option>
                        <option value="#8B5CF6">🟣 Morado</option>
                        <option value="#6B7280">⚫ Gris</option>
                    </select>
                </div>
            </div>
            
            <div class="flex justify-end space-x-3 pt-4">
                <button type="button" onclick="closeModal()"
                        class="px-4 py-2 border border-gray-300 rounded-lg text-gray-700 hover:text-gray-500 transition-colors">
                    Cancelar
                </button>
                <button type="submit" id="submitBtn"
                        class="px-4 py-2 bg-gradient-to-r from-blue-500 to-blue-600 text-white rounded-lg hover:shadow-lg transition-all">
                    <span id="submitText">Crear Carpeta</span>
                    <span id="loadingText" class="hidden">Creando...</span>
                </button>
            </div>
        </form>
    `;
}

// HTML del modal de documento
function getDocumentoModalHTML() {
    return `
        <div class="bg-gradient-to-r from-[#db0455] to-[#a00340] px-6 py-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                    </div>
                    <div class="ml-3">
                        <h3 class="text-lg leading-6 font-medium text-white">
                            Nuevo Documento
                        </h3>
                        <p class="text-sm text-pink-100">
                            Agrega un nuevo documento a la carpeta
                        </p>
                    </div>
                </div>
                <button onclick="closeModal()" class="text-white hover:text-pink-200 transition-colors">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>
        
        <form onsubmit="submitForm(event)" class="p-6 space-y-4">
            <input type="hidden" name="tipo" value="documento">
            <input type="hidden" name="carpeta_id" value="{{ $carpetaActual?->id }}">
            
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Título *</label>
                <input type="text" name="titulo" required
                       class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-pink-500"
                       placeholder="Ej: Manual de Usuario 2024">
                <div class="text-red-600 text-sm mt-1" id="error-titulo"></div>
            </div>
            
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Enlace *</label>
                <input type="url" name="enlace" required
                       class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-pink-500"
                       placeholder="https://ejemplo.com/documento.pdf">
                <div class="text-red-600 text-sm mt-1" id="error-enlace"></div>
            </div>
            
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Descripción</label>
                <textarea name="descripcion" rows="3"
                          class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-pink-500"
                          placeholder="Descripción opcional del documento"></textarea>
            </div>
            
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Orden *</label>
                <input type="number" name="orden" required min="1" value="1"
                       class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-pink-500"
                       placeholder="Ej: 1, 2, 3...">
                <div class="text-red-600 text-sm mt-1" id="error-orden"></div>
                <p class="text-sm text-gray-500 mt-1">Define la posición donde aparecerá este documento</p>
            </div>
            
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Tipo de Enlace</label>
                    <select name="tipo_enlace" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-pink-500">
                        <option value="url">🔗 URL Externa</option>
                        <option value="archivo">📎 Archivo Local</option>
                        <option value="interno">🏠 Enlace Interno</option>
                    </select>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Tipo de Documento</label>
                    <select name="tipo_documento" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-pink-500">
                        <option value="pdf">📄 PDF</option>
                        <option value="doc">📝 Word</option>
                        <option value="xls">📊 Excel</option>
                        <option value="ppt">📋 PowerPoint</option>
                        <option value="txt">📃 Texto</option>
                        <option value="zip">🗜️ Comprimido</option>
                        <option value="url">🔗 Enlace Web</option>
                    </select>
                </div>
            </div>
            
            <div>
                <div class="flex items-center">
                    <input type="checkbox" name="destacado" id="destacado" value="1"
                           class="rounded border-gray-300 text-pink-600 shadow-sm focus:border-pink-300 focus:ring focus:ring-pink-200 focus:ring-opacity-50">
                    <label for="destacado" class="ml-2 block text-sm text-gray-700">
                        ⭐ Marcar como destacado
                    </label>
                </div>
            </div>
            
            <div class="flex justify-end space-x-3 pt-4">
                <button type="button" onclick="closeModal()"
                        class="px-4 py-2 border border-gray-300 rounded-lg text-gray-700 hover:text-gray-500 transition-colors">
                    Cancelar
                </button>
                <button type="submit" id="submitBtn"
                        class="px-4 py-2 bg-gradient-to-r from-[#db0455] to-[#a00340] text-white rounded-lg hover:shadow-lg transition-all">
                    <span id="submitText">Crear Documento</span>
                    <span id="loadingText" class="hidden">Creando...</span>
                </button>
            </div>
        </form>
    `;
}

// HTML del modal de edición de carpeta
function getEditCarpetaModalHTML(carpeta) {
    return `
        <div class="bg-gradient-to-r from-blue-500 to-blue-600 px-6 py-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                        </svg>
                    </div>
                    <div class="ml-3">
                        <h3 class="text-lg leading-6 font-medium text-white">
                            Editar Carpeta
                        </h3>
                        <p class="text-sm text-blue-100">
                            Modifica los datos de la carpeta
                        </p>
                    </div>
                </div>
                <button onclick="closeModal()" class="text-white hover:text-blue-200 transition-colors">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>
        
        <form onsubmit="submitEditForm(event)" class="p-6 space-y-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Nombre *</label>
                <input type="text" name="nombre" required value="${carpeta.nombre}"
                       class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                       placeholder="Ej: Documentos Académicos">
                <div class="text-red-600 text-sm mt-1" id="error-nombre"></div>
            </div>
            
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Descripción</label>
                <textarea name="descripcion" rows="3"
                          class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                          placeholder="Descripción opcional de la carpeta">${carpeta.descripcion || ''}</textarea>
            </div>
            
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Orden *</label>
                <input type="number" name="orden" required min="1" value="${carpeta.orden}"
                       class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                       placeholder="Ej: 1, 2, 3...">
                <div class="text-red-600 text-sm mt-1" id="error-orden"></div>
                <p class="text-sm text-gray-500 mt-1">Define la posición donde aparecerá esta carpeta</p>
            </div>
            
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Icono</label>
                    <select name="icono" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        <option value="folder" ${carpeta.icono === 'folder' ? 'selected' : ''}>📁 Carpeta</option>
                        <option value="archive" ${carpeta.icono === 'archive' ? 'selected' : ''}>🗃️ Archivo</option>
                        <option value="briefcase" ${carpeta.icono === 'briefcase' ? 'selected' : ''}>💼 Portafolio</option>
                        <option value="book" ${carpeta.icono === 'book' ? 'selected' : ''}>📚 Libro</option>
                        <option value="library" ${carpeta.icono === 'library' ? 'selected' : ''}>🏛️ Biblioteca</option>
                    </select>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Color</label>
                    <select name="color" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        <option value="#3B82F6" ${carpeta.color === '#3B82F6' ? 'selected' : ''}>🔵 Azul</option>
                        <option value="#EF4444" ${carpeta.color === '#EF4444' ? 'selected' : ''}>🔴 Rojo</option>
                        <option value="#10B981" ${carpeta.color === '#10B981' ? 'selected' : ''}>🟢 Verde</option>
                        <option value="#F59E0B" ${carpeta.color === '#F59E0B' ? 'selected' : ''}>🟡 Amarillo</option>
                        <option value="#8B5CF6" ${carpeta.color === '#8B5CF6' ? 'selected' : ''}>🟣 Morado</option>
                        <option value="#6B7280" ${carpeta.color === '#6B7280' ? 'selected' : ''}>⚫ Gris</option>
                    </select>
                </div>
            </div>
            
            <div class="flex justify-end space-x-3 pt-4">
                <button type="button" onclick="closeModal()"
                        class="px-4 py-2 border border-gray-300 rounded-lg text-gray-700 hover:text-gray-500 transition-colors">
                    Cancelar
                </button>
                <button type="submit" id="submitBtn"
                        class="px-4 py-2 bg-gradient-to-r from-blue-500 to-blue-600 text-white rounded-lg hover:shadow-lg transition-all">
                    <span id="submitText">Actualizar Carpeta</span>
                    <span id="loadingText" class="hidden">Actualizando...</span>
                </button>
            </div>
        </form>
    `;
}

// HTML del modal de edición de documento
function getEditDocumentoModalHTML(documento) {
    return `
        <div class="bg-gradient-to-r from-[#db0455] to-[#a00340] px-6 py-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                        </svg>
                    </div>
                    <div class="ml-3">
                        <h3 class="text-lg leading-6 font-medium text-white">
                            Editar Documento
                        </h3>
                        <p class="text-sm text-pink-100">
                            Modifica los datos del documento
                        </p>
                    </div>
                </div>
                <button onclick="closeModal()" class="text-white hover:text-pink-200 transition-colors">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>
        
        <form onsubmit="submitEditForm(event)" class="p-6 space-y-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Título *</label>
                <input type="text" name="titulo" required value="${documento.titulo}"
                       class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-pink-500"
                       placeholder="Ej: Manual de Usuario 2024">
                <div class="text-red-600 text-sm mt-1" id="error-titulo"></div>
            </div>
            
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Enlace *</label>
                <input type="url" name="enlace" required value="${documento.enlace}"
                       class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-pink-500"
                       placeholder="https://ejemplo.com/documento.pdf">
                <div class="text-red-600 text-sm mt-1" id="error-enlace"></div>
            </div>
            
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Descripción</label>
                <textarea name="descripcion" rows="3"
                          class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-pink-500"
                          placeholder="Descripción opcional del documento">${documento.descripcion || ''}</textarea>
            </div>
            
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Orden *</label>
                <input type="number" name="orden" required min="1" value="${documento.orden}"
                       class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-pink-500"
                       placeholder="Ej: 1, 2, 3...">
                <div class="text-red-600 text-sm mt-1" id="error-orden"></div>
                <p class="text-sm text-gray-500 mt-1">Define la posición donde aparecerá este documento</p>
            </div>
            
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Tipo de Enlace</label>
                    <select name="tipo_enlace" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-pink-500">
                        <option value="url" ${documento.tipo_enlace === 'url' ? 'selected' : ''}>🔗 URL Externa</option>
                        <option value="archivo" ${documento.tipo_enlace === 'archivo' ? 'selected' : ''}>📎 Archivo Local</option>
                        <option value="interno" ${documento.tipo_enlace === 'interno' ? 'selected' : ''}>🏠 Enlace Interno</option>
                    </select>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Tipo de Documento</label>
                    <select name="tipo_documento" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-pink-500">
                        <option value="pdf" ${documento.tipo_documento === 'pdf' ? 'selected' : ''}>📄 PDF</option>
                        <option value="doc" ${documento.tipo_documento === 'doc' ? 'selected' : ''}>📝 Word</option>
                        <option value="xls" ${documento.tipo_documento === 'xls' ? 'selected' : ''}>📊 Excel</option>
                        <option value="ppt" ${documento.tipo_documento === 'ppt' ? 'selected' : ''}>📋 PowerPoint</option>
                        <option value="txt" ${documento.tipo_documento === 'txt' ? 'selected' : ''}>📃 Texto</option>
                        <option value="zip" ${documento.tipo_documento === 'zip' ? 'selected' : ''}>🗜️ Comprimido</option>
                        <option value="url" ${documento.tipo_documento === 'url' ? 'selected' : ''}>🔗 Enlace Web</option>
                    </select>
                </div>
            </div>
            
            <div>
                <div class="flex items-center">
                    <input type="checkbox" name="destacado" id="destacado" value="1" ${documento.destacado ? 'checked' : ''}
                           class="rounded border-gray-300 text-pink-600 shadow-sm focus:border-pink-300 focus:ring focus:ring-pink-200 focus:ring-opacity-50">
                    <label for="destacado" class="ml-2 block text-sm text-gray-700">
                        ⭐ Marcar como destacado
                    </label>
                </div>
            </div>
            
            <div class="flex justify-end space-x-3 pt-4">
                <button type="button" onclick="closeModal()"
                        class="px-4 py-2 border border-gray-300 rounded-lg text-gray-700 hover:text-gray-500 transition-colors">
                    Cancelar
                </button>
                <button type="submit" id="submitBtn"
                        class="px-4 py-2 bg-gradient-to-r from-[#db0455] to-[#a00340] text-white rounded-lg hover:shadow-lg transition-all">
                    <span id="submitText">Actualizar Documento</span>
                    <span id="loadingText" class="hidden">Actualizando...</span>
                </button>
            </div>
        </form>
    `;
}

// Enviar formulario
function submitForm(event) {
    event.preventDefault();
    
    const form = event.target;
    const submitBtn = document.getElementById('submitBtn');
    const submitText = document.getElementById('submitText');
    const loadingText = document.getElementById('loadingText');
    
    // Estado de carga
    submitBtn.disabled = true;
    submitText.classList.add('hidden');
    loadingText.classList.remove('hidden');
    
    // Limpiar errores
    clearErrors();
    
    const formData = new FormData(form);
    
    fetch('{{ route("admin.documentos.store") }}', {
        method: 'POST',
        body: formData,
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            'Accept': 'application/json'
        }
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            toastr.success(data.message);
            closeModal();
            setTimeout(() => {
                window.location.reload();
            }, 1500);
        } else if (data.errors) {
            toastr.error('Por favor, corrija los errores en el formulario');
            showErrors(data.errors);
            resetButton();
        } else {
            toastr.error(data.message || 'Error al crear');
            resetButton();
        }
    })
    .catch(error => {
        console.error('Error:', error);
        toastr.error('Error al procesar la solicitud');
        resetButton();
    });
    
    function resetButton() {
        submitBtn.disabled = false;
        submitText.classList.remove('hidden');
        loadingText.classList.add('hidden');
    }
}

// Funciones de utilidad
function clearErrors() {
    document.querySelectorAll('[id^="error-"]').forEach(el => {
        el.textContent = '';
    });
}

function showErrors(errors) {
    for (const [field, messages] of Object.entries(errors)) {
        const errorElement = document.getElementById(`error-${field}`);
        if (errorElement) {
            errorElement.textContent = messages[0];
        }
    }
}

// Enviar formulario de edición
function submitEditForm(event) {
    event.preventDefault();
    
    const form = event.target;
    const submitBtn = document.getElementById('submitBtn');
    const submitText = document.getElementById('submitText');
    const loadingText = document.getElementById('loadingText');
    
    // Estado de carga
    submitBtn.disabled = true;
    submitText.classList.add('hidden');
    loadingText.classList.remove('hidden');
    
    // Limpiar errores
    clearErrors();
    
    const formData = new FormData(form);
    
    let url, method;
    if (currentModalType === 'editCarpeta') {
        url = `/admin/documentos/carpeta/${currentEditId}`;
        method = 'PUT';
        formData.append('_method', 'PUT');
    } else if (currentModalType === 'editDocumento') {
        url = `/admin/documentos/${currentEditId}`;
        method = 'PUT';
        formData.append('_method', 'PUT');
    }
    
    fetch(url, {
        method: 'POST',
        body: formData,
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            'Accept': 'application/json'
        }
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            toastr.success(data.message);
            closeModal();
            setTimeout(() => {
                window.location.reload();
            }, 1500);
        } else if (data.errors) {
            toastr.error('Por favor, corrija los errores en el formulario');
            showErrors(data.errors);
            resetEditButton();
        } else {
            toastr.error(data.message || 'Error al actualizar');
            resetEditButton();
        }
    })
    .catch(error => {
        console.error('Error:', error);
        toastr.error('Error al procesar la solicitud');
        resetEditButton();
    });
    
    function resetEditButton() {
        submitBtn.disabled = false;
        submitText.classList.remove('hidden');
        loadingText.classList.add('hidden');
    }
}

// Toggle estado de documento
function toggleEstado(documentoId) {
    fetch(`/admin/documentos/${documentoId}/estado`, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            toastr.success(data.message);
            setTimeout(() => {
                window.location.reload();
            }, 1000);
        } else {
            toastr.error('Error al cambiar el estado');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        toastr.error('Error al procesar la solicitud');
    });
}

// Funciones de ordenamiento
function cambiarOrdenCarpeta(carpetaId, direccion) {
    const action = direccion === 'subir' ? 'subir-orden' : 'bajar-orden';
    
    fetch(`/admin/documentos/carpeta/${carpetaId}/${action}`, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            toastr.success('Orden actualizado correctamente');
            setTimeout(() => {
                window.location.reload();
            }, 800);
        } else {
            toastr.error('Error al actualizar el orden');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        toastr.error('Error al procesar la solicitud');
    });
}

function cambiarOrdenDocumento(documentoId, direccion) {
    const action = direccion === 'subir' ? 'subir-orden' : 'bajar-orden';
    
    fetch(`/admin/documentos/${documentoId}/${action}`, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            toastr.success('Orden actualizado correctamente');
            setTimeout(() => {
                window.location.reload();
            }, 800);
        } else {
            toastr.error('Error al actualizar el orden');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        toastr.error('Error al procesar la solicitud');
    });
}

// Funciones de edición
function editCarpeta(carpetaId) {
    fetch(`/admin/documentos/carpeta/${carpetaId}/edit`, {
        method: 'GET',
        headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json',
            'X-Requested-With': 'XMLHttpRequest',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            openEditCarpetaModal(data.carpeta);
        } else {
            toastr.error('Error al cargar los datos de la carpeta');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        toastr.error('Error al procesar la solicitud: ' + error.message);
    });
}

function editDocumento(documentoId) {
    fetch(`/admin/documentos/${documentoId}/edit`, {
        method: 'GET',
        headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json',
            'X-Requested-With': 'XMLHttpRequest',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            openEditDocumentoModal(data.documento);
        } else {
            toastr.error('Error al cargar los datos del documento');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        toastr.error('Error al procesar la solicitud: ' + error.message);
    });
}

function openEditCarpetaModal(carpeta) {
    const modal = document.getElementById('universalModal');
    const modalContent = modal.querySelector('.inline-block');
    
    currentModalType = 'editCarpeta';
    currentEditId = carpeta.id;
    
    modalContent.innerHTML = getEditCarpetaModalHTML(carpeta);
    modal.classList.remove('hidden');
    
    // Focus en el primer input
    setTimeout(() => {
        const firstInput = modal.querySelector('input[type="text"]');
        if (firstInput) firstInput.focus();
    }, 100);
}

function openEditDocumentoModal(documento) {
    const modal = document.getElementById('universalModal');
    const modalContent = modal.querySelector('.inline-block');
    
    currentModalType = 'editDocumento';
    currentEditId = documento.id;
    
    modalContent.innerHTML = getEditDocumentoModalHTML(documento);
    modal.classList.remove('hidden');
    
    // Focus en el primer input
    setTimeout(() => {
        const firstInput = modal.querySelector('input[type="text"]');
        if (firstInput) firstInput.focus();
    }, 100);
}

// Variable global para edición
let currentEditId = null;

// Cerrar modal con ESC
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closeModal();
    }
});
</script>
@endpush
@endsection