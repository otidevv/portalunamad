<div class="space-y-6">
    <!-- Título -->
    <div>
        <label for="titulo" class="block text-sm font-medium text-gray-700 mb-1">
            Título *
        </label>
        <input type="text"
               name="titulo"
               id="titulo"
               value="{{ old('titulo', $enlace->titulo ?? '') }}"
               class="w-full rounded-lg border-gray-300 focus:border-[#db0455] focus:ring-[#db0455] shadow-sm @error('titulo') border-red-300 @enderror"
               placeholder="Ej: Resoluciones Rectorales"
               required>
        @error('titulo')
            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    <!-- URL -->
    <div>
        <label for="url" class="block text-sm font-medium text-gray-700 mb-1">
            Enlace (URL) *
        </label>
        <input type="url"
               name="url"
               id="url"
               value="{{ old('url', $enlace->url ?? '') }}"
               class="w-full rounded-lg border-gray-300 focus:border-[#db0455] focus:ring-[#db0455] shadow-sm @error('url') border-red-300 @enderror"
               placeholder="https://www.gob.pe/institucion/unamad/..."
               required>
        @error('url')
            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
        @enderror
        <p class="text-xs text-gray-500 mt-1">Pega aquí la nueva dirección del documento (ej. de gob.pe). Se abrirá en una nueva pestaña.</p>
    </div>

    <!-- Orden -->
    <div>
        <label for="orden" class="block text-sm font-medium text-gray-700 mb-1">
            Orden
        </label>
        <input type="number"
               name="orden"
               id="orden"
               min="0"
               value="{{ old('orden', $enlace->orden ?? 0) }}"
               class="w-full md:w-40 rounded-lg border-gray-300 focus:border-[#db0455] focus:ring-[#db0455] shadow-sm @error('orden') border-red-300 @enderror">
        @error('orden')
            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
        @enderror
        <p class="text-xs text-gray-500 mt-1">Define la posición en la lista (menor número aparece primero).</p>
    </div>

    <!-- Estado -->
    <div>
        <div class="flex items-center">
            <input type="hidden" name="activo" value="0">
            <input type="checkbox"
                   name="activo"
                   id="activo"
                   value="1"
                   {{ old('activo', ($enlace->activo ?? true)) ? 'checked' : '' }}
                   class="rounded border-gray-300 text-[#db0455] shadow-sm focus:border-[#db0455] focus:ring focus:ring-[#db0455] focus:ring-opacity-50">
            <label for="activo" class="ml-2 block text-sm text-gray-700">
                Enlace activo (visible en la página de inicio)
            </label>
        </div>
    </div>
</div>

<!-- Botones -->
<div class="flex justify-end space-x-3 mt-8 pt-6 border-t border-gray-200">
    <a href="{{ route('admin.enlaces-normativos.index') }}"
       class="px-4 py-2 border border-gray-300 rounded-lg text-sm font-medium text-gray-700 hover:text-gray-500 transition duration-150 ease-in-out">
        Cancelar
    </a>
    <button type="submit"
            class="inline-flex items-center px-4 py-2 border border-transparent rounded-lg text-sm font-medium text-white bg-gradient-to-r from-[#db0455] to-[#a00340] hover:shadow-lg transform hover:scale-[1.02] transition-all duration-200">
        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
        </svg>
        {{ $submitLabel ?? 'Guardar' }}
    </button>
</div>
