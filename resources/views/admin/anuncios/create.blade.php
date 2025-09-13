@extends('admin.layouts.app')

@section('header', 'Crear Nuevo Anuncio')

@section('content')
<div class="p-6">
    <!-- Breadcrumb -->
    <nav class="mb-6 text-sm">
        <ol class="flex items-center space-x-2">
            <li><a href="{{ route('admin.dashboard') }}" class="text-gray-500 hover:text-gray-700">Dashboard</a></li>
            <li><span class="text-gray-400">/</span></li>
            <li><a href="{{ route('admin.anuncios.index') }}" class="text-gray-500 hover:text-gray-700">Anuncios</a></li>
            <li><span class="text-gray-400">/</span></li>
            <li class="text-gray-700 font-medium">Crear Nuevo</li>
        </ol>
    </nav>

    <form action="{{ route('admin.anuncios.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf
        
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Columna Principal -->
            <div class="lg:col-span-2 space-y-6">
                <!-- Información Básica -->
                <div class="bg-white rounded-lg shadow-sm p-6">
                    <h2 class="text-lg font-semibold text-gray-800 mb-4">Información Básica</h2>
                    
                    <div class="space-y-4">
                        <!-- Título -->
                        <div>
                            <label for="titulo" class="block text-sm font-medium text-gray-700 mb-1">
                                Título <span class="text-red-500">*</span>
                            </label>
                            <input type="text" 
                                   name="titulo" 
                                   id="titulo" 
                                   value="{{ old('titulo') }}"
                                   class="w-full rounded-lg border-gray-300 focus:border-[#db0455] focus:ring-[#db0455] @error('titulo') border-red-500 @enderror"
                                   placeholder="Ingrese el título del anuncio"
                                   required>
                            @error('titulo')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Descripción -->
                        <div>
                            <label for="descripcion" class="block text-sm font-medium text-gray-700 mb-1">
                                Descripción <span class="text-red-500">*</span>
                            </label>
                            <textarea name="descripcion" 
                                      id="descripcion" 
                                      rows="6"
                                      class="w-full rounded-lg border-gray-300 focus:border-[#db0455] focus:ring-[#db0455] @error('descripcion') border-red-500 @enderror"
                                      placeholder="Escriba la descripción completa del anuncio"
                                      required>{{ old('descripcion') }}</textarea>
                            @error('descripcion')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Categoría y Estado -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="categoria" class="block text-sm font-medium text-gray-700 mb-1">
                                    Categoría <span class="text-red-500">*</span>
                                </label>
                                <select name="categoria" 
                                        id="categoria" 
                                        class="w-full rounded-lg border-gray-300 focus:border-[#db0455] focus:ring-[#db0455] @error('categoria') border-red-500 @enderror"
                                        required>
                                    <option value="">Seleccione una categoría</option>
                                    <option value="noticia" {{ old('categoria') == 'noticia' ? 'selected' : '' }}>Noticia</option>
                                    <option value="evento" {{ old('categoria') == 'evento' ? 'selected' : '' }}>Evento</option>
                                    <option value="comunicado" {{ old('categoria') == 'comunicado' ? 'selected' : '' }}>Comunicado</option>
                                    <option value="convocatoria" {{ old('categoria') == 'convocatoria' ? 'selected' : '' }}>Convocatoria</option>
                                    <option value="otro" {{ old('categoria') == 'otro' ? 'selected' : '' }}>Otro</option>
                                </select>
                                @error('categoria')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="estado" class="block text-sm font-medium text-gray-700 mb-1">
                                    Estado <span class="text-red-500">*</span>
                                </label>
                                <select name="estado" 
                                        id="estado" 
                                        class="w-full rounded-lg border-gray-300 focus:border-[#db0455] focus:ring-[#db0455] @error('estado') border-red-500 @enderror"
                                        required>
                                    <option value="borrador" {{ old('estado', 'borrador') == 'borrador' ? 'selected' : '' }}>Borrador</option>
                                    <option value="publicado" {{ old('estado') == 'publicado' ? 'selected' : '' }}>Publicado</option>
                                    <option value="archivado" {{ old('estado') == 'archivado' ? 'selected' : '' }}>Archivado</option>
                                </select>
                                @error('estado')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Imágenes -->
                <div class="bg-white rounded-lg shadow-sm p-6">
                    <h2 class="text-lg font-semibold text-gray-800 mb-4">Imágenes</h2>
                    
                    <div class="space-y-4">
                        <!-- Imagen Principal -->
                        <div>
                            <label for="imagen_principal" class="block text-sm font-medium text-gray-700 mb-1">
                                Imagen Principal
                            </label>
                            <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-lg hover:border-[#db0455] transition-colors">
                                <div class="space-y-1 text-center">
                                    <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48">
                                        <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <div class="flex text-sm text-gray-600">
                                        <label for="imagen_principal" class="relative cursor-pointer bg-white rounded-md font-medium text-[#db0455] hover:text-[#a00340] focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-[#db0455]">
                                            <span>Subir imagen</span>
                                            <input id="imagen_principal" name="imagen_principal" type="file" class="sr-only" accept="image/*" onchange="previewImage(this, 'preview-principal')">
                                        </label>
                                        <p class="pl-1">o arrastrar aquí</p>
                                    </div>
                                    <p class="text-xs text-gray-500">PNG, JPG, GIF hasta 5MB</p>
                                </div>
                            </div>
                            <div id="preview-principal" class="mt-2"></div>
                            @error('imagen_principal')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Imágenes Adicionales -->
                        <div>
                            <label for="imagenes_adicionales" class="block text-sm font-medium text-gray-700 mb-1">
                                Imágenes Adicionales
                            </label>
                            <input type="file" 
                                   name="imagenes_adicionales[]" 
                                   id="imagenes_adicionales" 
                                   multiple
                                   accept="image/*"
                                   class="w-full rounded-lg border-gray-300 focus:border-[#db0455] focus:ring-[#db0455]"
                                   onchange="previewMultipleImages(this, 'preview-adicionales')">
                            <p class="text-xs text-gray-500 mt-1">Puede seleccionar múltiples imágenes</p>
                            <div id="preview-adicionales" class="mt-2 grid grid-cols-4 gap-2"></div>
                            @error('imagenes_adicionales.*')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Enlaces Relacionados -->
                <div class="bg-white rounded-lg shadow-sm p-6">
                    <h2 class="text-lg font-semibold text-gray-800 mb-4">Enlaces Relacionados</h2>
                    
                    <div id="enlaces-container" class="space-y-3">
                        <div class="enlace-item grid grid-cols-1 md:grid-cols-2 gap-3">
                            <input type="text" 
                                   name="enlaces[0][titulo]" 
                                   placeholder="Título del enlace"
                                   class="rounded-lg border-gray-300 focus:border-[#db0455] focus:ring-[#db0455]">
                            <input type="url" 
                                   name="enlaces[0][url]" 
                                   placeholder="https://ejemplo.com"
                                   class="rounded-lg border-gray-300 focus:border-[#db0455] focus:ring-[#db0455]">
                        </div>
                    </div>
                    
                    <button type="button" 
                            onclick="agregarEnlace()" 
                            class="mt-3 text-sm text-[#db0455] hover:text-[#a00340] font-medium">
                        + Agregar otro enlace
                    </button>
                </div>
            </div>

            <!-- Columna Lateral -->
            <div class="space-y-6">
                <!-- Opciones de Publicación -->
                <div class="bg-white rounded-lg shadow-sm p-6">
                    <h2 class="text-lg font-semibold text-gray-800 mb-4">Opciones de Publicación</h2>
                    
                    <div class="space-y-4">
                        <!-- Destacado -->
                        <div class="flex items-center">
                            <input type="hidden" name="destacado" value="0">
                            <input type="checkbox" 
                                   name="destacado" 
                                   id="destacado" 
                                   value="1"
                                   {{ old('destacado') ? 'checked' : '' }}
                                   class="rounded border-gray-300 text-[#db0455] focus:ring-[#db0455]">
                            <label for="destacado" class="ml-2 text-sm text-gray-700">
                                Marcar como destacado
                            </label>
                        </div>

                        <!-- Fecha de Publicación -->
                        <div>
                            <label for="fecha_publicacion" class="block text-sm font-medium text-gray-700 mb-1">
                                Fecha de Publicación
                            </label>
                            <input type="datetime-local" 
                                   name="fecha_publicacion" 
                                   id="fecha_publicacion"
                                   value="{{ old('fecha_publicacion') }}"
                                   class="w-full rounded-lg border-gray-300 focus:border-[#db0455] focus:ring-[#db0455]">
                            <p class="text-xs text-gray-500 mt-1">Dejar vacío para publicar inmediatamente</p>
                            @error('fecha_publicacion')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Fecha de Expiración -->
                        <div>
                            <label for="fecha_expiracion" class="block text-sm font-medium text-gray-700 mb-1">
                                Fecha de Expiración
                            </label>
                            <input type="datetime-local" 
                                   name="fecha_expiracion" 
                                   id="fecha_expiracion"
                                   value="{{ old('fecha_expiracion') }}"
                                   class="w-full rounded-lg border-gray-300 focus:border-[#db0455] focus:ring-[#db0455]">
                            <p class="text-xs text-gray-500 mt-1">Dejar vacío para no expirar</p>
                            @error('fecha_expiracion')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Acciones -->
                <div class="bg-white rounded-lg shadow-sm p-6">
                    <div class="space-y-3">
                        <button type="submit" 
                                class="w-full px-4 py-2 bg-gradient-to-r from-[#db0455] to-[#a00340] text-white rounded-lg hover:shadow-lg transform hover:scale-[1.02] transition-all duration-200">
                            Crear Anuncio
                        </button>
                        
                        <a href="{{ route('admin.anuncios.index') }}" 
                           class="block w-full px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 text-center transition-colors">
                            Cancelar
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

@push('scripts')
<script>
let enlaceIndex = 1;

function agregarEnlace() {
    const container = document.getElementById('enlaces-container');
    const nuevoEnlace = document.createElement('div');
    nuevoEnlace.className = 'enlace-item grid grid-cols-1 md:grid-cols-2 gap-3 relative';
    nuevoEnlace.innerHTML = `
        <input type="text" 
               name="enlaces[${enlaceIndex}][titulo]" 
               placeholder="Título del enlace"
               class="rounded-lg border-gray-300 focus:border-[#db0455] focus:ring-[#db0455]">
        <div class="relative">
            <input type="url" 
                   name="enlaces[${enlaceIndex}][url]" 
                   placeholder="https://ejemplo.com"
                   class="rounded-lg border-gray-300 focus:border-[#db0455] focus:ring-[#db0455] pr-10">
            <button type="button" 
                    onclick="this.closest('.enlace-item').remove()" 
                    class="absolute right-2 top-1/2 -translate-y-1/2 text-red-500 hover:text-red-700">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
    `;
    container.appendChild(nuevoEnlace);
    enlaceIndex++;
}

function previewImage(input, previewId) {
    const preview = document.getElementById(previewId);
    preview.innerHTML = '';
    
    if (input.files && input.files[0]) {
        const reader = new FileReader();
        reader.onload = function(e) {
            preview.innerHTML = `
                <img src="${e.target.result}" class="mt-2 h-32 w-auto rounded-lg shadow-md">
            `;
        }
        reader.readAsDataURL(input.files[0]);
    }
}

function previewMultipleImages(input, previewId) {
    const preview = document.getElementById(previewId);
    preview.innerHTML = '';
    
    if (input.files) {
        Array.from(input.files).forEach(file => {
            const reader = new FileReader();
            reader.onload = function(e) {
                const img = document.createElement('img');
                img.src = e.target.result;
                img.className = 'h-20 w-20 object-cover rounded-lg shadow-md';
                preview.appendChild(img);
            }
            reader.readAsDataURL(file);
        });
    }
}
</script>
@endpush
@endsection