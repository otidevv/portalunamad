@extends('admin.layouts.app')

@section('content')
<div class="p-6">
    <!-- Header -->
    <div class="flex justify-between items-center mb-6">
        <div>
            <h1 class="text-2xl font-bold text-gray-800">Editar Comunicado</h1>
            <p class="text-gray-600 text-sm mt-1">Modifique los datos del comunicado</p>
        </div>
        <div class="flex space-x-3">
            <a href="{{ route('admin.comunicados.show', $comunicado) }}" 
               class="flex items-center space-x-2 px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                          d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                          d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                </svg>
                <span>Ver</span>
            </a>
            <a href="{{ route('admin.comunicados.index') }}" 
               class="flex items-center space-x-2 px-4 py-2 bg-gray-600 text-white rounded-lg hover:bg-gray-700 transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                          d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                <span>Volver</span>
            </a>
        </div>
    </div>

    <!-- Formulario -->
    <div class="bg-white rounded-lg shadow-sm p-6">
        <form action="{{ route('admin.comunicados.update', $comunicado) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div class="space-y-6">
                <!-- Información básica -->
                <div class="bg-gray-50 rounded-lg p-4">
                    <h4 class="text-sm font-medium text-gray-900 mb-3 flex items-center">
                        <svg class="w-4 h-4 mr-2 text-[#db0455]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                  d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Información Básica
                    </h4>
                    
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                        <!-- Título -->
                        <div class="lg:col-span-2">
                            <label for="titulo" class="block text-sm font-medium text-gray-700 mb-1">
                                Título del Comunicado *
                            </label>
                            <input type="text" 
                                   name="titulo" 
                                   id="titulo" 
                                   value="{{ old('titulo', $comunicado->titulo) }}"
                                   class="w-full rounded-lg border-gray-300 focus:border-[#db0455] focus:ring-[#db0455] shadow-sm @error('titulo') border-red-300 @enderror"
                                   placeholder="Ingrese el título del comunicado"
                                   required>
                            @error('titulo')
                                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Categoría -->
                        <div>
                            <label for="comunicado_categoria_id" class="block text-sm font-medium text-gray-700 mb-1">
                                Categoría *
                            </label>
                            <select name="comunicado_categoria_id" 
                                    id="comunicado_categoria_id" 
                                    class="w-full rounded-lg border-gray-300 focus:border-[#db0455] focus:ring-[#db0455] shadow-sm @error('comunicado_categoria_id') border-red-300 @enderror" 
                                    required>
                                <option value="">Seleccionar categoría</option>
                                @foreach($categorias as $categoria)
                                    <option value="{{ $categoria->id }}" {{ old('comunicado_categoria_id', $comunicado->comunicado_categoria_id) == $categoria->id ? 'selected' : '' }}>
                                        {{ $categoria->nombre }}
                                    </option>
                                @endforeach
                            </select>
                            @error('comunicado_categoria_id')
                                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Estado -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">
                                Estado
                            </label>
                            <div class="flex items-center">
                                <input type="hidden" name="estado" value="0">
                                <input type="checkbox" 
                                       name="estado" 
                                       id="estado" 
                                       value="1" 
                                       {{ old('estado', $comunicado->estado) ? 'checked' : '' }}
                                       class="rounded border-gray-300 text-[#db0455] shadow-sm focus:border-[#db0455] focus:ring focus:ring-[#db0455] focus:ring-opacity-50">
                                <label for="estado" class="ml-2 block text-sm text-gray-700">
                                    Comunicado activo
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Imagen -->
                <div class="bg-gray-50 rounded-lg p-4">
                    <h4 class="text-sm font-medium text-gray-900 mb-3 flex items-center">
                        <svg class="w-4 h-4 mr-2 text-[#db0455]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                  d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        Imagen del Comunicado
                    </h4>
                    
                    @if($comunicado->imagen)
                        <div class="mb-4">
                            <p class="text-sm text-gray-700 mb-2">Imagen actual:</p>
                            <img src="{{ $comunicado->imagen_url }}" 
                                 alt="{{ $comunicado->titulo }}"
                                 class="w-32 h-32 object-cover rounded-lg">
                            <div class="mt-2">
                                <label class="flex items-center">
                                    <input type="checkbox" name="eliminar_imagen" value="1" class="rounded border-gray-300 text-red-600 shadow-sm focus:border-red-300 focus:ring focus:ring-red-200 focus:ring-opacity-50">
                                    <span class="ml-2 text-sm text-red-600">Eliminar imagen actual</span>
                                </label>
                            </div>
                        </div>
                    @endif
                    
                    <div>
                        <label for="imagen" class="block text-sm font-medium text-gray-700 mb-1">
                            {{ $comunicado->imagen ? 'Cambiar Imagen' : 'Seleccionar Imagen *' }}
                        </label>
                        <input type="file" 
                               name="imagen" 
                               id="imagen" 
                               accept="image/*"
                               class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-[#db0455] file:text-white hover:file:bg-[#a00340] file:cursor-pointer @error('imagen') border-red-300 @enderror"
                               {{ !$comunicado->imagen ? 'required' : '' }}>
                        @error('imagen')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                        <p class="text-xs text-gray-500 mt-1">Máximo 5MB. Formatos: JPG, PNG, GIF</p>
                    </div>
                </div>

                <!-- Contenido -->
                <div class="bg-gray-50 rounded-lg p-4">
                    <h4 class="text-sm font-medium text-gray-900 mb-3 flex items-center">
                        <svg class="w-4 h-4 mr-2 text-[#db0455]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                  d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        Contenido
                    </h4>
                    
                    <div>
                        <label for="contenido" class="block text-sm font-medium text-gray-700 mb-1">
                            Descripción del Comunicado
                        </label>
                        <textarea name="contenido" 
                                  id="contenido" 
                                  rows="6"
                                  class="tinymce-editor @error('contenido') border-red-300 @enderror"
                                  placeholder="Ingrese el contenido detallado del comunicado (opcional)">{{ old('contenido', $comunicado->contenido) }}</textarea>
                        @error('contenido')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                        <p class="text-xs text-gray-500 mt-1">Use el editor para dar formato al texto, agregar enlaces, etc.</p>
                    </div>
                </div>

                <!-- Configuración de tiempo -->
                <div class="bg-gray-50 rounded-lg p-4">
                    <h4 class="text-sm font-medium text-gray-900 mb-3 flex items-center">
                        <svg class="w-4 h-4 mr-2 text-[#db0455]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                  d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Configuración de Tiempo
                    </h4>
                    
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                        <!-- Duración en días -->
                        <div>
                            <label for="duracion" class="block text-sm font-medium text-gray-700 mb-1">
                                Duración (días)
                            </label>
                            <input type="number" 
                                   name="duracion" 
                                   id="duracion" 
                                   value="{{ old('duracion', $comunicado->duracion) }}"
                                   min="1"
                                   class="w-full rounded-lg border-gray-300 focus:border-[#db0455] focus:ring-[#db0455] shadow-sm @error('duracion') border-red-300 @enderror"
                                   placeholder="Ej: 30">
                            @error('duracion')
                                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                            @enderror
                            <p class="text-xs text-gray-500 mt-1">Número de días que estará visible el comunicado</p>
                        </div>

                        <!-- Fecha de fin -->
                        <div>
                            <label for="fecha_fin" class="block text-sm font-medium text-gray-700 mb-1">
                                Fecha de Expiración
                            </label>
                            <input type="datetime-local" 
                                   name="fecha_fin" 
                                   id="fecha_fin" 
                                   value="{{ old('fecha_fin', $comunicado->fecha_fin ? $comunicado->fecha_fin->format('Y-m-d\TH:i') : '') }}"
                                   class="w-full rounded-lg border-gray-300 focus:border-[#db0455] focus:ring-[#db0455] shadow-sm @error('fecha_fin') border-red-300 @enderror">
                            @error('fecha_fin')
                                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                            @enderror
                            <p class="text-xs text-gray-500 mt-1">Fecha y hora específica de expiración</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Botones -->
            <div class="flex justify-end space-x-3 mt-8 pt-6 border-t border-gray-200">
                <a href="{{ route('admin.comunicados.show', $comunicado) }}"
                   class="px-4 py-2 border border-gray-300 rounded-lg text-sm font-medium text-gray-700 hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800 transition duration-150 ease-in-out">
                    Cancelar
                </a>
                <button type="submit"
                        class="inline-flex items-center px-4 py-2 border border-transparent rounded-lg text-sm font-medium text-white bg-gradient-to-r from-[#db0455] to-[#a00340] hover:shadow-lg transform hover:scale-[1.02] transition-all duration-200 focus:outline-none focus:shadow-outline">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    Actualizar Comunicado
                </button>
            </div>
        </form>
    </div>
</div>

@push('scripts')
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    tinymce.init({
        selector: '.tinymce-editor',
        height: 300,
        menubar: false,
        plugins: [
            'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',
            'anchor', 'searchreplace', 'visualblocks', 'code', 'fullscreen',
            'insertdatetime', 'media', 'table', 'help', 'wordcount'
        ],
        toolbar: 'undo redo | blocks | ' +
            'bold italic forecolor | alignleft aligncenter ' +
            'alignright alignjustify | bullist numlist outdent indent | ' +
            'removeformat | link | help',
        content_style: 'body { font-family: -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif; font-size: 14px; }',
        branding: false,
        promotion: false,
        link_title: false,
        link_assume_external_targets: true,
        setup: function (editor) {
            editor.on('change', function () {
                editor.save();
            });
        }
    });
});
</script>
@endpush
@endsection