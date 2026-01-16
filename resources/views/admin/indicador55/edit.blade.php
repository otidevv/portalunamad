@extends('admin.layouts.app')

@section('content')
<div class="p-6">
    <!-- Header -->
    <div class="flex justify-between items-center mb-6">
        <div>
            <div class="flex items-center mb-2">
                <a href="{{ route('admin.indicador55.index') }}" class="text-gray-500 hover:text-gray-700 mr-3">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                </a>
                <h1 class="text-2xl font-bold text-gray-800">Editar: {{ $indicador55->titulo_completo }}</h1>
            </div>
            <p class="text-gray-600 text-sm">Modifica el contenido y documentos de esta variable</p>
        </div>
        <a href="/transparencia/indicador-55/{{ $indicador55->codigo }}" target="_blank"
           class="flex items-center space-x-2 px-4 py-2 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 transition-colors">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
            </svg>
            <span>Vista previa</span>
        </a>
    </div>

    <!-- Mensajes de error -->
    @if($errors->any())
        <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6 rounded-lg">
            <ul class="list-disc list-inside">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.indicador55.update', $indicador55) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Columna Principal -->
            <div class="lg:col-span-2 space-y-6">
                <!-- Información Básica -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                    <h2 class="text-lg font-semibold text-gray-800 mb-4 flex items-center">
                        <svg class="w-5 h-5 mr-2 text-[#db0455]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Información Básica
                    </h2>

                    <div class="space-y-4">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Código</label>
                                <input type="text" value="{{ strtoupper($indicador55->codigo) }}" disabled
                                       class="w-full px-4 py-2 rounded-lg border border-gray-300 bg-gray-100 text-gray-500">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Orden</label>
                                <input type="text" value="{{ $indicador55->orden }}" disabled
                                       class="w-full px-4 py-2 rounded-lg border border-gray-300 bg-gray-100 text-gray-500">
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Título <span class="text-red-500">*</span></label>
                            <input type="text" name="titulo" value="{{ old('titulo', $indicador55->titulo) }}" required
                                   class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:border-[#db0455] focus:ring-1 focus:ring-[#db0455]">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Título Completo <span class="text-red-500">*</span></label>
                            <input type="text" name="titulo_completo" value="{{ old('titulo_completo', $indicador55->titulo_completo) }}" required
                                   class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:border-[#db0455] focus:ring-1 focus:ring-[#db0455]">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Descripción</label>
                            <textarea name="descripcion" rows="3"
                                      class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:border-[#db0455] focus:ring-1 focus:ring-[#db0455]">{{ old('descripcion', $indicador55->descripcion) }}</textarea>
                        </div>
                    </div>
                </div>

                @if($indicador55->codigo === 'mv1')
                <!-- Campos específicos para MV1: Misión y Visión -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                    <h2 class="text-lg font-semibold text-gray-800 mb-4 flex items-center">
                        <svg class="w-5 h-5 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                        </svg>
                        Textos de Misión y Visión
                    </h2>
                    <p class="text-sm text-gray-500 mb-4">Estos textos aparecen en las tarjetas de Misión y Visión de la página pública.</p>

                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">
                                <span class="inline-flex items-center">
                                    <span class="w-3 h-3 bg-blue-600 rounded-full mr-2"></span>
                                    Texto de MISIÓN
                                </span>
                            </label>
                            <textarea name="texto_mision" rows="4"
                                      class="w-full px-4 py-2 rounded-lg border border-blue-300 focus:border-blue-500 focus:ring-1 focus:ring-blue-500"
                                      placeholder="Ej: Formar Profesionales líderes, investigadores e innovadores...">{{ old('texto_mision', $indicador55->texto_mision) }}</textarea>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">
                                <span class="inline-flex items-center">
                                    <span class="w-3 h-3 bg-emerald-600 rounded-full mr-2"></span>
                                    Texto de VISIÓN
                                </span>
                            </label>
                            <textarea name="texto_vision" rows="4"
                                      class="w-full px-4 py-2 rounded-lg border border-emerald-300 focus:border-emerald-500 focus:ring-1 focus:ring-emerald-500"
                                      placeholder="Ej: Ser la Universidad líder en la Región Amazónica...">{{ old('texto_vision', $indicador55->texto_vision) }}</textarea>
                        </div>
                    </div>
                </div>
                @endif

                @if($indicador55->codigo !== 'mv1')
                <!-- Contenido HTML -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                    <h2 class="text-lg font-semibold text-gray-800 mb-4 flex items-center">
                        <svg class="w-5 h-5 mr-2 text-[#db0455]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        Contenido Principal (HTML)
                    </h2>
                    <textarea name="contenido" rows="10"
                              class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:border-[#db0455] focus:ring-1 focus:ring-[#db0455] font-mono text-sm">{{ old('contenido', $indicador55->contenido) }}</textarea>
                    <p class="text-xs text-gray-500 mt-2">Puedes usar HTML para formatear el contenido principal de la página.</p>
                </div>
                @endif

                <!-- Documentos JSON -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                    <h2 class="text-lg font-semibold text-gray-800 mb-4 flex items-center">
                        <svg class="w-5 h-5 mr-2 text-[#db0455]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                        </svg>
                        Documentos (JSON)
                    </h2>
                    <textarea name="documentos" rows="15" id="documentos-json"
                              class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:border-[#db0455] focus:ring-1 focus:ring-[#db0455] font-mono text-sm">{{ old('documentos', is_array($indicador55->documentos) ? json_encode($indicador55->documentos, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) : $indicador55->documentos) }}</textarea>
                    <div class="flex items-center justify-between mt-2">
                        <p class="text-xs text-gray-500">Array JSON con los documentos y enlaces de esta variable.</p>
                        <button type="button" onclick="formatJSON()" class="text-xs text-[#db0455] hover:underline">Formatear JSON</button>
                    </div>
                </div>
            </div>

            <!-- Columna Lateral -->
            <div class="space-y-6">
                <!-- Estado y Acciones -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                    <h2 class="text-lg font-semibold text-gray-800 mb-4">Publicación</h2>

                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-gray-700">Estado</span>
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input type="checkbox" name="activo" value="1" {{ $indicador55->activo ? 'checked' : '' }}
                                       class="sr-only peer">
                                <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-[#db0455]/20 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-[#db0455]"></div>
                                <span class="ml-2 text-sm font-medium text-gray-700">{{ $indicador55->activo ? 'Activo' : 'Inactivo' }}</span>
                            </label>
                        </div>

                        <div class="pt-4 border-t border-gray-200">
                            <button type="submit"
                                    class="w-full flex items-center justify-center px-4 py-3 bg-gradient-to-r from-[#db0455] to-[#a00340] text-white rounded-lg hover:shadow-lg transition-all">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Guardar Cambios
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Personalización Visual -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                    <h2 class="text-lg font-semibold text-gray-800 mb-4">Personalización</h2>

                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Color Primario</label>
                            <div class="flex items-center space-x-2">
                                <input type="color" name="color_primario" value="{{ $indicador55->color_primario }}"
                                       class="w-10 h-10 rounded border border-gray-300 cursor-pointer">
                                <input type="text" value="{{ $indicador55->color_primario }}" disabled
                                       class="flex-1 px-3 py-2 rounded-lg border border-gray-300 bg-gray-50 text-sm">
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Gradiente From (Tailwind)</label>
                            <input type="text" name="gradiente_from" value="{{ old('gradiente_from', $indicador55->gradiente_from) }}"
                                   class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:border-[#db0455] focus:ring-1 focus:ring-[#db0455] text-sm"
                                   placeholder="ej: blue-600">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Gradiente To (Tailwind)</label>
                            <input type="text" name="gradiente_to" value="{{ old('gradiente_to', $indicador55->gradiente_to) }}"
                                   class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:border-[#db0455] focus:ring-1 focus:ring-[#db0455] text-sm"
                                   placeholder="ej: indigo-600">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Fondo Claro (Tailwind)</label>
                            <input type="text" name="bg_light" value="{{ old('bg_light', $indicador55->bg_light) }}"
                                   class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:border-[#db0455] focus:ring-1 focus:ring-[#db0455] text-sm"
                                   placeholder="ej: blue-50">
                        </div>
                    </div>
                </div>

                <!-- Icono SVG -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                    <h2 class="text-lg font-semibold text-gray-800 mb-4">Icono SVG</h2>

                    <div class="flex items-center justify-center mb-4 p-4 bg-gray-100 rounded-lg">
                        <svg class="w-16 h-16 text-gray-600" fill="currentColor" viewBox="0 0 24 24">
                            <path d="{{ $indicador55->icono }}"/>
                        </svg>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Path del SVG</label>
                        <textarea name="icono" rows="3"
                                  class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:border-[#db0455] focus:ring-1 focus:ring-[#db0455] font-mono text-xs">{{ old('icono', $indicador55->icono) }}</textarea>
                    </div>
                </div>

                <!-- Info de auditoría -->
                <div class="bg-gray-50 rounded-xl p-4 text-sm text-gray-600">
                    <p><strong>Creado:</strong> {{ $indicador55->created_at->format('d/m/Y H:i') }}</p>
                    <p><strong>Actualizado:</strong> {{ $indicador55->updated_at->format('d/m/Y H:i') }}</p>
                    @if($indicador55->updatedByUser)
                        <p><strong>Por:</strong> {{ $indicador55->updatedByUser->name }}</p>
                    @endif
                </div>
            </div>
        </div>
    </form>
</div>

@push('scripts')
<script>
function formatJSON() {
    const textarea = document.getElementById('documentos-json');
    try {
        const json = JSON.parse(textarea.value);
        textarea.value = JSON.stringify(json, null, 2);
    } catch (e) {
        alert('Error: El JSON no es válido. Por favor, revisa la sintaxis.');
    }
}
</script>
@endpush
@endsection
