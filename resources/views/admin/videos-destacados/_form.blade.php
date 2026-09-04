<div class="space-y-6">
    <p class="text-sm text-gray-600">Los campos marcados con asterisco (<span aria-hidden="true">*</span>) son obligatorios.</p>
    <!-- Título -->
    <div>
        <label for="titulo" class="block text-sm font-medium text-gray-700 mb-1">
            Título <span aria-hidden="true">*</span>
        </label>
        <input type="text"
               name="titulo"
               id="titulo"
               value="{{ old('titulo', $video->titulo ?? '') }}"
               class="w-full rounded-lg border-gray-300 focus:border-[#db0455] focus:ring-[#db0455] shadow-sm @error('titulo') border-red-300 @enderror"
               placeholder="Ej: Aniversario UNAMAD 2026"
               required aria-required="true" aria-describedby="titulo-help @error('titulo') titulo-error @enderror" @error('titulo') aria-invalid="true" @enderror>
        @error('titulo')
            <p id="titulo-error" class="text-red-600 text-sm mt-1">{{ $message }}</p>
        @enderror
        <p id="titulo-help" class="text-xs text-gray-500 mt-1">Se muestra como encabezado de la ventana emergente.</p>
    </div>

    <!-- Descripción -->
    <div>
        <label for="descripcion" class="block text-sm font-medium text-gray-700 mb-1">
            Descripción
        </label>
        <textarea name="descripcion"
                  id="descripcion"
                  rows="2"
                  class="w-full rounded-lg border-gray-300 focus:border-[#db0455] focus:ring-[#db0455] shadow-sm @error('descripcion') border-red-300 @enderror"
                  placeholder="Texto breve que acompaña al video (opcional)" @error('descripcion') aria-invalid="true" aria-describedby="descripcion-error" @enderror>{{ old('descripcion', $video->descripcion ?? '') }}</textarea>
        @error('descripcion')
            <p id="descripcion-error" class="text-red-600 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    <!-- URL -->
    <div>
        <label for="url" class="block text-sm font-medium text-gray-700 mb-1">
            Enlace del video <span aria-hidden="true">*</span>
        </label>
        <input type="url"
               name="url"
               id="url"
               value="{{ old('url', $video->url ?? '') }}"
               class="w-full rounded-lg border-gray-300 focus:border-[#db0455] focus:ring-[#db0455] shadow-sm @error('url') border-red-300 @enderror"
               placeholder="https://drive.google.com/file/d/.../view?usp=sharing"
               required aria-required="true" aria-describedby="url-ayuda @error('url') url-error @enderror" @error('url') aria-invalid="true" @enderror>
        @error('url')
            <p id="url-error" class="text-red-600 text-sm mt-1">{{ $message }}</p>
        @enderror

        <div id="url-ayuda" class="mt-3 bg-blue-50 border-l-4 border-blue-400 text-blue-800 text-xs rounded-r-lg p-3 space-y-1">
            <p class="font-semibold">Pega el enlace tal como lo copias. El sistema lo convierte solo.</p>
            <p><strong>Google Drive:</strong> el archivo debe estar compartido como <strong>&quot;Cualquier persona con el enlace&quot;</strong>, si no los visitantes verán una pantalla de inicio de sesión. Drive no permite reproducción automática y tiene límite de tráfico diario.</p>
            <p><strong>YouTube:</strong> recomendado. Funciona el arranque automático y no tiene límite de visitas. Puede subirse como video &quot;no listado&quot; para que no aparezca en búsquedas.</p>
            <p><strong>Archivo directo:</strong> una dirección que termine en <code>.mp4</code> o <code>.webm</code>.</p>
        </div>
    </div>

    <!-- Opciones de la ventana emergente -->
    <div class="border-t border-gray-200 pt-6">
        <h3 class="text-sm font-semibold text-gray-800 mb-4">Comportamiento de la ventana emergente</h3>

        <div class="space-y-4">
            <!-- Retardo -->
            <div>
                <label for="retardo" class="block text-sm font-medium text-gray-700 mb-1">
                    Retardo de aparición (milisegundos)
                </label>
                <input type="number"
                       name="retardo"
                       id="retardo"
                       min="0"
                       max="60000"
                       step="500"
                       value="{{ old('retardo', $video->retardo ?? 1500) }}"
                       class="w-full md:w-40 rounded-lg border-gray-300 focus:border-[#db0455] focus:ring-[#db0455] shadow-sm @error('retardo') border-red-300 @enderror" aria-describedby="retardo-help @error('retardo') retardo-error @enderror" @error('retardo') aria-invalid="true" @enderror>
                @error('retardo')
                    <p id="retardo-error" class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
                <p id="retardo-help" class="text-xs text-gray-500 mt-1">Tiempo de espera antes de que salte el video al abrir la página de inicio. 1500 = 1.5 segundos.</p>
            </div>

            <!-- Autoplay -->
            <div class="flex items-start">
                <input type="hidden" name="autoplay" value="0">
                <input type="checkbox"
                       name="autoplay"
                       id="autoplay"
                       value="1"
                       {{ old('autoplay', ($video->autoplay ?? true)) ? 'checked' : '' }}
                       class="mt-1 rounded border-gray-300 text-[#db0455] shadow-sm focus:border-[#db0455] focus:ring focus:ring-[#db0455] focus:ring-opacity-50">
                <label for="autoplay" class="ml-2 block text-sm text-gray-700">
                    Reproducir automáticamente (silenciado)
                    <span class="block text-xs text-gray-500">Los navegadores solo permiten el arranque automático si el video inicia sin sonido; el visitante puede activarlo. No aplica a videos de Google Drive.</span>
                </label>
            </div>

            <!-- Mostrar una vez -->
            <div class="flex items-start">
                <input type="hidden" name="mostrar_una_vez" value="0">
                <input type="checkbox"
                       name="mostrar_una_vez"
                       id="mostrar_una_vez"
                       value="1"
                       {{ old('mostrar_una_vez', ($video->mostrar_una_vez ?? true)) ? 'checked' : '' }}
                       class="mt-1 rounded border-gray-300 text-[#db0455] shadow-sm focus:border-[#db0455] focus:ring focus:ring-[#db0455] focus:ring-opacity-50">
                <label for="mostrar_una_vez" class="ml-2 block text-sm text-gray-700">
                    Mostrar solo una vez por visita
                    <span class="block text-xs text-gray-500">Si se desmarca, el video salta cada vez que el visitante vuelva a la página de inicio, lo que puede resultar molesto.</span>
                </label>
            </div>
        </div>
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
               value="{{ old('orden', $video->orden ?? 0) }}"
               class="w-full md:w-40 rounded-lg border-gray-300 focus:border-[#db0455] focus:ring-[#db0455] shadow-sm @error('orden') border-red-300 @enderror" aria-describedby="orden-help @error('orden') orden-error @enderror" @error('orden') aria-invalid="true" @enderror>
        @error('orden')
            <p id="orden-error" class="text-red-600 text-sm mt-1">{{ $message }}</p>
        @enderror
        <p id="orden-help" class="text-xs text-gray-500 mt-1">En la página de inicio se muestra el video activo con el número más bajo.</p>
    </div>

    <!-- Estado -->
    <div>
        <div class="flex items-center">
            <input type="hidden" name="activo" value="0">
            <input type="checkbox"
                   name="activo"
                   id="activo"
                   value="1"
                   {{ old('activo', ($video->activo ?? true)) ? 'checked' : '' }}
                   class="rounded border-gray-300 text-[#db0455] shadow-sm focus:border-[#db0455] focus:ring focus:ring-[#db0455] focus:ring-opacity-50">
            <label for="activo" class="ml-2 block text-sm text-gray-700">
                Video activo (se muestra en la página de inicio)
            </label>
        </div>
    </div>
</div>

<!-- Botones -->
<div class="flex justify-end space-x-3 mt-8 pt-6 border-t border-gray-200">
    <a href="{{ route('admin.videos-destacados.index') }}"
       class="px-4 py-2 border border-gray-300 rounded-lg text-sm font-medium text-gray-700 hover:text-gray-500 transition duration-150 ease-in-out">
        Cancelar
    </a>
    <button type="submit"
            class="inline-flex items-center px-4 py-2 border border-transparent rounded-lg text-sm font-medium text-white bg-gradient-to-r from-[#db0455] to-[#a00340] hover:shadow-lg transform hover:scale-[1.02] transition-all duration-200">
        <svg aria-hidden="true" focusable="false" class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
        </svg>
        {{ $submitLabel ?? 'Guardar' }}
    </button>
</div>
