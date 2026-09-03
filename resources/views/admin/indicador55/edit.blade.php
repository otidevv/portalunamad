@extends('admin.layouts.app')

@section('content')
<div class="p-6">
    <!-- Header -->
    <div class="flex justify-between items-center mb-6">
        <div>
            <div class="flex items-center mb-2">
                <a href="{{ route('admin.indicador55.index') }}" aria-label="Volver al listado del Indicador 55" class="text-gray-500 hover:text-gray-700 mr-3">
                    <svg aria-hidden="true" focusable="false" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                </a>
                <h1 class="text-2xl font-bold text-gray-800">Editar: {{ $indicador55->titulo_completo }}</h1>
            </div>
            <p class="text-gray-600 text-sm">Modifica el contenido y documentos de esta variable</p>
        </div>
        <a href="/transparencia/indicador-55/{{ $indicador55->codigo }}" target="_blank"
           class="flex items-center space-x-2 px-4 py-2 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 transition-colors">
            <svg aria-hidden="true" focusable="false" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
                        <svg aria-hidden="true" focusable="false" class="w-5 h-5 mr-2 text-[#db0455]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
                        <svg aria-hidden="true" focusable="false" class="w-5 h-5 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
                        <svg aria-hidden="true" focusable="false" class="w-5 h-5 mr-2 text-[#db0455]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        Contenido Principal (HTML)
                    </h2>
                    <textarea name="contenido" rows="10"
                              class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:border-[#db0455] focus:ring-1 focus:ring-[#db0455] font-mono text-sm">{{ old('contenido', $indicador55->contenido) }}</textarea>
                    <p class="text-xs text-gray-500 mt-2">Puedes usar HTML para formatear el contenido principal de la página.</p>
                </div>
                @endif

                <!-- Documentos -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                    <div class="flex items-center justify-between mb-4">
                        <h2 class="text-lg font-semibold text-gray-800 flex items-center">
                            <svg aria-hidden="true" focusable="false" class="w-5 h-5 mr-2 text-[#db0455]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                            </svg>
                            Documentos
                        </h2>
                        <div class="flex items-center space-x-2">
                            <button type="button" id="toggle-json-mode" onclick="toggleJsonMode()" class="text-xs px-3 py-1 border border-gray-300 rounded-lg hover:bg-gray-50 transition-colors">
                                <span id="toggle-json-text">Ver JSON</span>
                            </button>
                        </div>
                    </div>

                    <!-- Editor Visual de Documentos -->
                    <div id="visual-editor">
                        @php
                            $mvType = $indicador55->codigo;
                            $isSimpleType = in_array($mvType, ['mv2', 'mv3', 'mv4', 'mv5', 'mv6', 'mv9']);
                            $isSectionType = in_array($mvType, ['mv7', 'mv8', 'mv10']);
                            $isMV11 = $mvType === 'mv11';
                            $isMV12 = $mvType === 'mv12';
                            $isComplexType = false; // Ya no hay tipos complejos sin editor visual
                        @endphp

                        @if($isSimpleType)
                        <!-- Editor para tipos simples (año, título, url) -->
                        <div id="documents-container" class="space-y-3">
                            <!-- Los documentos se cargarán dinámicamente con JavaScript -->
                        </div>
                        <button type="button" onclick="addSimpleDocument()" class="mt-4 flex items-center px-4 py-2 bg-green-50 text-green-700 rounded-lg hover:bg-green-100 transition-colors border border-green-200">
                            <svg aria-hidden="true" focusable="false" class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                            Agregar Documento
                        </button>
                        @elseif($isSectionType)
                        <!-- Editor para tipos con secciones -->
                        <div id="sections-container" class="space-y-6">
                            <!-- Las secciones se cargarán dinámicamente con JavaScript -->
                        </div>
                        <button type="button" onclick="addSection()" class="mt-4 flex items-center px-4 py-2 bg-blue-50 text-blue-700 rounded-lg hover:bg-blue-100 transition-colors border border-blue-200">
                            <svg aria-hidden="true" focusable="false" class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                            Agregar Sección
                        </button>
                        @elseif($isMV11)
                        <!-- Editor para MV11: Estructura mixta por años (documentos simples + departamentos con items) -->
                        <div class="bg-indigo-50 border border-indigo-200 rounded-lg p-3 mb-4">
                            <p class="text-sm text-indigo-800">
                                <strong>MV11 - Plana Docente:</strong> Cada documento tiene un año asociado. Puede ser un documento simple o un departamento con múltiples documentos.
                            </p>
                        </div>
                        <div id="mv11-container" class="space-y-6">
                            <!-- Los documentos se cargarán dinámicamente con JavaScript -->
                        </div>
                        <div class="flex space-x-2 mt-4">
                            <button type="button" onclick="addMV11SimpleDoc(new Date().getFullYear().toString())" class="flex items-center px-4 py-2 bg-indigo-50 text-indigo-700 rounded-lg hover:bg-indigo-100 transition-colors border border-indigo-200">
                                <svg aria-hidden="true" focusable="false" class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                                Documento Simple
                            </button>
                            <button type="button" onclick="addMV11Department(new Date().getFullYear().toString())" class="flex items-center px-4 py-2 bg-amber-50 text-amber-700 rounded-lg hover:bg-amber-100 transition-colors border border-amber-200">
                                <svg aria-hidden="true" focusable="false" class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                </svg>
                                Departamento
                            </button>
                        </div>
                        @elseif($isMV12)
                        <!-- Editor para MV12: Estructura con año, sección e items -->
                        <div class="bg-purple-50 border border-purple-200 rounded-lg p-3 mb-4">
                            <p class="text-sm text-purple-800">
                                <strong>MV12 - Diseño Curricular:</strong> Cada entrada tiene un año, nombre de sección y lista de documentos.
                            </p>
                        </div>
                        <div id="mv12-container" class="space-y-6">
                            <!-- Las secciones se cargarán dinámicamente con JavaScript -->
                        </div>
                        <button type="button" onclick="addMV12Section()" class="mt-4 flex items-center px-4 py-2 bg-purple-50 text-purple-700 rounded-lg hover:bg-purple-100 transition-colors border border-purple-200">
                            <svg aria-hidden="true" focusable="false" class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                            Agregar Sección
                        </button>
                        @endif

                        <p class="text-xs text-gray-500 mt-4">
                            <span class="font-medium">Tip:</span> Los cambios se guardan automáticamente al enviar el formulario.
                        </p>
                    </div>

                    <!-- Editor JSON (oculto por defecto) -->
                    <div id="json-editor" class="hidden">
                        <textarea name="documentos" rows="15" id="documentos-json"
                                  class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:border-[#db0455] focus:ring-1 focus:ring-[#db0455] font-mono text-sm">{{ old('documentos', is_array($indicador55->documentos) ? json_encode($indicador55->documentos, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) : $indicador55->documentos) }}</textarea>
                        <div class="flex items-center justify-between mt-2">
                            <p class="text-xs text-gray-500">Array JSON con los documentos y enlaces.</p>
                            <button type="button" onclick="formatJSON()" class="text-xs text-[#db0455] hover:underline">Formatear JSON</button>
                        </div>
                    </div>

                    <!-- Campo oculto para enviar JSON desde el editor visual -->
                    <input type="hidden" name="documentos_visual" id="documentos-visual-input">
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
                                <svg aria-hidden="true" focusable="false" class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
                        <svg role="img" aria-label="Vista previa del icono" focusable="false" class="w-16 h-16 text-gray-600" fill="currentColor" viewBox="0 0 24 24">
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
// Variables globales
let documentsData = [];
let sectionsData = [];
let mv11Data = {};  // Estructura: { "2024": [...docs], "2023": [...docs] }
let mv12Data = [];  // Estructura: [{ anio, seccion, items: [] }]
let isJsonMode = false;
const mvType = '{{ $indicador55->codigo }}';
const isSimpleType = {{ $isSimpleType ? 'true' : 'false' }};
const isSectionType = {{ $isSectionType ? 'true' : 'false' }};
const isMV11 = {{ $isMV11 ? 'true' : 'false' }};
const isMV12 = {{ $isMV12 ? 'true' : 'false' }};

// Inicializar al cargar la página
document.addEventListener('DOMContentLoaded', function() {
    initializeEditor();
});

function initializeEditor() {
    try {
        const jsonTextarea = document.getElementById('documentos-json');
        const data = JSON.parse(jsonTextarea.value || '[]');

        if (isSimpleType) {
            documentsData = Array.isArray(data) ? data : [];
            renderSimpleDocuments();
        } else if (isSectionType) {
            sectionsData = Array.isArray(data) ? data : [];
            renderSections();
        } else if (isMV11) {
            // MV11 tiene estructura: [{ anio, titulo, url }, { anio, departamento, items }]
            mv11Data = Array.isArray(data) ? data : [];
            renderMV11();
        } else if (isMV12) {
            // MV12 tiene estructura: [{ anio, seccion, items: [] }]
            mv12Data = Array.isArray(data) ? data : [];
            renderMV12();
        }
    } catch (e) {
        console.error('Error parsing JSON:', e);
        documentsData = [];
        sectionsData = [];
        mv11Data = {};
        mv12Data = [];
    }
}

// ========================
// TOGGLE JSON/VISUAL MODE
// ========================
function toggleJsonMode() {
    const visualEditor = document.getElementById('visual-editor');
    const jsonEditor = document.getElementById('json-editor');
    const toggleText = document.getElementById('toggle-json-text');

    isJsonMode = !isJsonMode;

    if (isJsonMode) {
        // Actualizar JSON desde el editor visual antes de mostrar
        updateJsonFromVisual();
        visualEditor.classList.add('hidden');
        jsonEditor.classList.remove('hidden');
        toggleText.textContent = 'Editor Visual';
    } else {
        // Actualizar visual desde JSON antes de mostrar
        try {
            const jsonTextarea = document.getElementById('documentos-json');
            const data = JSON.parse(jsonTextarea.value || '[]');
            if (isSimpleType) {
                documentsData = data;
                renderSimpleDocuments();
            } else if (isSectionType) {
                sectionsData = data;
                renderSections();
            } else if (isMV11) {
                mv11Data = Array.isArray(data) ? data : [];
                renderMV11();
            } else if (isMV12) {
                mv12Data = Array.isArray(data) ? data : [];
                renderMV12();
            }
        } catch (e) {
            alert('Error: El JSON no es válido. Corrige el JSON antes de cambiar al editor visual.');
            isJsonMode = true;
            return;
        }
        visualEditor.classList.remove('hidden');
        jsonEditor.classList.add('hidden');
        toggleText.textContent = 'Ver JSON';
    }
}

// ========================
// DOCUMENTOS SIMPLES (MV2-MV6, MV9)
// ========================
function renderSimpleDocuments() {
    const container = document.getElementById('documents-container');
    if (!container) return;

    container.innerHTML = '';

    if (documentsData.length === 0) {
        container.innerHTML = `
            <div class="text-center py-8 text-gray-500 border-2 border-dashed border-gray-200 rounded-lg">
                <svg aria-hidden="true" focusable="false" class="w-12 h-12 mx-auto text-gray-300 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                </svg>
                <p>No hay documentos agregados</p>
                <p class="text-sm">Haz clic en "Agregar Documento" para comenzar</p>
            </div>
        `;
        return;
    }

    documentsData.forEach((doc, index) => {
        const card = createSimpleDocumentCard(doc, index);
        container.appendChild(card);
    });

    updateJsonFromVisual();
}

function createSimpleDocumentCard(doc, index) {
    const div = document.createElement('div');
    div.className = 'bg-gray-50 border border-gray-200 rounded-lg p-4 relative group';
    div.innerHTML = `
        <button type="button" onclick="removeSimpleDocument(${index})" aria-label="Eliminar documento ${index + 1}"
                class="absolute top-2 right-2 p-1 text-gray-400 hover:text-red-500 hover:bg-red-50 rounded transition-colors opacity-0 group-hover:opacity-100">
            <svg aria-hidden="true" focusable="false" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
            </svg>
        </button>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-3">
            <div>
                <label class="block text-xs font-medium text-gray-600 mb-1">Año</label>
                <input type="text" value="${doc.anio || ''}"
                       onchange="updateSimpleDocument(${index}, 'anio', this.value)"
                       class="w-full px-3 py-2 text-sm rounded-lg border border-gray-300 focus:border-[#db0455] focus:ring-1 focus:ring-[#db0455]"
                       placeholder="2024">
            </div>
            <div class="md:col-span-2">
                <label class="block text-xs font-medium text-gray-600 mb-1">Título del documento</label>
                <input type="text" value="${escapeHtml(doc.titulo || '')}"
                       onchange="updateSimpleDocument(${index}, 'titulo', this.value)"
                       class="w-full px-3 py-2 text-sm rounded-lg border border-gray-300 focus:border-[#db0455] focus:ring-1 focus:ring-[#db0455]"
                       placeholder="Nombre del documento">
            </div>
            <div>
                <label class="block text-xs font-medium text-gray-600 mb-1">URL</label>
                <input type="text" value="${escapeHtml(doc.url || '')}"
                       onchange="updateSimpleDocument(${index}, 'url', this.value)"
                       class="w-full px-3 py-2 text-sm rounded-lg border border-gray-300 focus:border-[#db0455] focus:ring-1 focus:ring-[#db0455]"
                       placeholder="/storage/docs/...">
            </div>
        </div>
    `;
    return div;
}

function addSimpleDocument() {
    documentsData.push({
        anio: new Date().getFullYear().toString(),
        titulo: '',
        url: ''
    });
    renderSimpleDocuments();

    // Scroll al nuevo documento
    const container = document.getElementById('documents-container');
    container.lastElementChild?.scrollIntoView({ behavior: 'smooth', block: 'center' });
}

function removeSimpleDocument(index) {
    if (confirm('¿Estás seguro de eliminar este documento?')) {
        documentsData.splice(index, 1);
        renderSimpleDocuments();
    }
}

function updateSimpleDocument(index, field, value) {
    if (documentsData[index]) {
        documentsData[index][field] = value;
        updateJsonFromVisual();
    }
}

// ========================
// SECCIONES (MV7, MV8, MV10)
// ========================
function renderSections() {
    const container = document.getElementById('sections-container');
    if (!container) return;

    container.innerHTML = '';

    if (sectionsData.length === 0) {
        container.innerHTML = `
            <div class="text-center py-8 text-gray-500 border-2 border-dashed border-gray-200 rounded-lg">
                <svg aria-hidden="true" focusable="false" class="w-12 h-12 mx-auto text-gray-300 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                </svg>
                <p>No hay secciones agregadas</p>
                <p class="text-sm">Haz clic en "Agregar Sección" para comenzar</p>
            </div>
        `;
        return;
    }

    sectionsData.forEach((section, index) => {
        const card = createSectionCard(section, index);
        container.appendChild(card);
    });

    updateJsonFromVisual();
}

function createSectionCard(section, sectionIndex) {
    const div = document.createElement('div');
    div.className = 'bg-blue-50 border border-blue-200 rounded-lg p-4';

    const items = section.items || [];
    let itemsHtml = '';

    items.forEach((item, itemIndex) => {
        itemsHtml += `
            <div class="bg-white border border-gray-200 rounded-lg p-3 relative group">
                <button type="button" onclick="removeSectionItem(${sectionIndex}, ${itemIndex})" aria-label="Eliminar item ${itemIndex + 1} de la sección ${sectionIndex + 1}"
                        class="absolute top-2 right-2 p-1 text-gray-400 hover:text-red-500 hover:bg-red-50 rounded transition-colors opacity-0 group-hover:opacity-100">
                    <svg aria-hidden="true" focusable="false" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-2 pr-8">
                    <div>
                        <label class="block text-xs font-medium text-gray-600 mb-1">Título</label>
                        <input type="text" value="${escapeHtml(item.titulo || '')}"
                               onchange="updateSectionItem(${sectionIndex}, ${itemIndex}, 'titulo', this.value)"
                               class="w-full px-2 py-1.5 text-sm rounded border border-gray-300 focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                    </div>
                    <div>
                        <label class="block text-xs font-medium text-gray-600 mb-1">URL</label>
                        <input type="text" value="${escapeHtml(item.url || '')}"
                               onchange="updateSectionItem(${sectionIndex}, ${itemIndex}, 'url', this.value)"
                               class="w-full px-2 py-1.5 text-sm rounded border border-gray-300 focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                    </div>
                </div>
            </div>
        `;
    });

    div.innerHTML = `
        <div class="flex items-center justify-between mb-3">
            <div class="flex-1 mr-4">
                <label class="block text-xs font-medium text-blue-700 mb-1">Nombre de la Sección</label>
                <input type="text" value="${escapeHtml(section.seccion || '')}"
                       onchange="updateSection(${sectionIndex}, 'seccion', this.value)"
                       class="w-full px-3 py-2 text-sm rounded-lg border border-blue-300 focus:border-blue-500 focus:ring-1 focus:ring-blue-500 bg-white"
                       placeholder="Nombre de la sección">
            </div>
            <button type="button" onclick="removeSection(${sectionIndex})" aria-label="Eliminar sección ${sectionIndex + 1}"
                    class="p-2 text-red-500 hover:bg-red-50 rounded-lg transition-colors">
                <svg aria-hidden="true" focusable="false" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                </svg>
            </button>
        </div>
        <div class="mb-3">
            <label class="block text-xs font-medium text-blue-700 mb-1">Descripción (opcional)</label>
            <input type="text" value="${escapeHtml(section.descripcion || '')}"
                   onchange="updateSection(${sectionIndex}, 'descripcion', this.value)"
                   class="w-full px-3 py-2 text-sm rounded-lg border border-blue-300 focus:border-blue-500 focus:ring-1 focus:ring-blue-500 bg-white"
                   placeholder="Descripción de la sección">
        </div>
        <div class="space-y-2" id="section-${sectionIndex}-items">
            ${itemsHtml}
        </div>
        <button type="button" onclick="addSectionItem(${sectionIndex})"
                class="mt-3 flex items-center px-3 py-1.5 text-sm bg-white text-blue-600 rounded border border-blue-300 hover:bg-blue-50 transition-colors">
            <svg aria-hidden="true" focusable="false" class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
            </svg>
            Agregar Item
        </button>
    `;
    return div;
}

function addSection() {
    sectionsData.push({
        seccion: '',
        descripcion: '',
        items: []
    });
    renderSections();

    const container = document.getElementById('sections-container');
    container.lastElementChild?.scrollIntoView({ behavior: 'smooth', block: 'center' });
}

function removeSection(index) {
    if (confirm('¿Estás seguro de eliminar esta sección y todos sus items?')) {
        sectionsData.splice(index, 1);
        renderSections();
    }
}

function updateSection(index, field, value) {
    if (sectionsData[index]) {
        sectionsData[index][field] = value;
        updateJsonFromVisual();
    }
}

function addSectionItem(sectionIndex) {
    if (sectionsData[sectionIndex]) {
        if (!sectionsData[sectionIndex].items) {
            sectionsData[sectionIndex].items = [];
        }
        sectionsData[sectionIndex].items.push({
            titulo: '',
            url: ''
        });
        renderSections();
    }
}

function removeSectionItem(sectionIndex, itemIndex) {
    if (sectionsData[sectionIndex]?.items) {
        sectionsData[sectionIndex].items.splice(itemIndex, 1);
        renderSections();
    }
}

function updateSectionItem(sectionIndex, itemIndex, field, value) {
    if (sectionsData[sectionIndex]?.items?.[itemIndex]) {
        sectionsData[sectionIndex].items[itemIndex][field] = value;
        updateJsonFromVisual();
    }
}

// ========================
// MV11: Plana Docente (estructura array con anio en cada documento)
// Estructura: [{ anio, titulo, url }, { anio, departamento, items: [{titulo, url}] }]
// Cada doc puede ser: { anio, titulo, url } o { anio, departamento, items: [{titulo, url}] }
// ========================
function renderMV11() {
    const container = document.getElementById('mv11-container');
    if (!container) return;

    container.innerHTML = '';

    // Agrupar documentos por año para mostrar (la data es un array)
    const docsByYear = {};
    mv11Data.forEach((doc, index) => {
        const year = doc.anio || 'Sin año';
        if (!docsByYear[year]) docsByYear[year] = [];
        docsByYear[year].push({ ...doc, _index: index }); // Guardar índice original
    });

    const years = Object.keys(docsByYear).sort((a, b) => b.localeCompare(a)); // Ordenar años descendente

    if (years.length === 0) {
        container.innerHTML = `
            <div class="text-center py-8 text-gray-500 border-2 border-dashed border-gray-200 rounded-lg">
                <svg aria-hidden="true" focusable="false" class="w-12 h-12 mx-auto text-gray-300 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                </svg>
                <p>No hay documentos agregados</p>
                <p class="text-sm">Haz clic en "Agregar Documento" para comenzar</p>
            </div>
        `;
        return;
    }

    years.forEach(year => {
        const yearCard = createMV11YearCard(year, docsByYear[year]);
        container.appendChild(yearCard);
    });

    updateJsonFromVisual();
}

function createMV11YearCard(year, docs) {
    const div = document.createElement('div');
    div.className = 'bg-indigo-50 border border-indigo-200 rounded-lg p-4';

    let docsHtml = '';
    (docs || []).forEach((doc) => {
        const docIndex = doc._index; // Usar índice original del array
        if (doc.items || doc.departamento) {
            // Documento tipo departamento con items
            docsHtml += createMV11DepartmentHtml(docIndex, doc);
        } else {
            // Documento simple
            docsHtml += createMV11SimpleDocHtml(docIndex, doc);
        }
    });

    div.innerHTML = `
        <div class="flex items-center justify-between mb-4">
            <div class="flex items-center">
                <span class="bg-indigo-600 text-white px-3 py-1 rounded-lg font-bold text-lg mr-3">${year}</span>
                <span class="text-sm text-indigo-700">${(docs || []).length} documento(s)</span>
            </div>
        </div>
        <div class="space-y-3" id="mv11-year-${year}-docs">
            ${docsHtml}
        </div>
        <div class="flex space-x-2 mt-4">
            <button type="button" onclick="addMV11SimpleDoc('${year}')"
                    class="flex items-center px-3 py-1.5 text-sm bg-white text-indigo-600 rounded border border-indigo-300 hover:bg-indigo-50 transition-colors">
                <svg aria-hidden="true" focusable="false" class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
                Documento Simple
            </button>
            <button type="button" onclick="addMV11Department('${year}')"
                    class="flex items-center px-3 py-1.5 text-sm bg-white text-amber-600 rounded border border-amber-300 hover:bg-amber-50 transition-colors">
                <svg aria-hidden="true" focusable="false" class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                </svg>
                Departamento
            </button>
        </div>
    `;
    return div;
}

function createMV11SimpleDocHtml(docIndex, doc) {
    return `
        <div class="bg-white border border-gray-200 rounded-lg p-3 relative group">
            <button type="button" onclick="removeMV11Doc(${docIndex})" aria-label="Eliminar documento simple ${docIndex + 1}"
                    class="absolute top-2 right-2 p-1 text-gray-400 hover:text-red-500 hover:bg-red-50 rounded transition-colors opacity-0 group-hover:opacity-100">
                <svg aria-hidden="true" focusable="false" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
            <div class="flex items-center mb-2">
                <span class="text-xs bg-gray-100 text-gray-600 px-2 py-0.5 rounded">Documento Simple</span>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-2 pr-8">
                <div>
                    <label class="block text-xs font-medium text-gray-600 mb-1">Año</label>
                    <input type="text" value="${escapeHtml(doc.anio || '')}"
                           onchange="updateMV11Doc(${docIndex}, 'anio', this.value)"
                           class="w-full px-2 py-1.5 text-sm rounded border border-gray-300 focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500">
                </div>
                <div>
                    <label class="block text-xs font-medium text-gray-600 mb-1">Título</label>
                    <input type="text" value="${escapeHtml(doc.titulo || '')}"
                           onchange="updateMV11Doc(${docIndex}, 'titulo', this.value)"
                           class="w-full px-2 py-1.5 text-sm rounded border border-gray-300 focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500">
                </div>
                <div>
                    <label class="block text-xs font-medium text-gray-600 mb-1">URL</label>
                    <input type="text" value="${escapeHtml(doc.url || '')}"
                           onchange="updateMV11Doc(${docIndex}, 'url', this.value)"
                           class="w-full px-2 py-1.5 text-sm rounded border border-gray-300 focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500">
                </div>
            </div>
        </div>
    `;
}

function createMV11DepartmentHtml(docIndex, doc) {
    let itemsHtml = '';
    (doc.items || []).forEach((item, itemIndex) => {
        itemsHtml += `
            <div class="bg-gray-50 border border-gray-200 rounded p-2 relative group/item">
                <button type="button" onclick="removeMV11DeptItem(${docIndex}, ${itemIndex})" aria-label="Eliminar item ${itemIndex + 1} del departamento"
                        class="absolute top-1 right-1 p-0.5 text-gray-400 hover:text-red-500 rounded transition-colors opacity-0 group-hover/item:opacity-100">
                    <svg aria-hidden="true" focusable="false" class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
                <div class="grid grid-cols-2 gap-2 pr-6">
                    <input type="text" value="${escapeHtml(item.titulo || '')}"
                           onchange="updateMV11DeptItem(${docIndex}, ${itemIndex}, 'titulo', this.value)"
                           class="w-full px-2 py-1 text-xs rounded border border-gray-300 focus:border-amber-500"
                           placeholder="Título">
                    <input type="text" value="${escapeHtml(item.url || '')}"
                           onchange="updateMV11DeptItem(${docIndex}, ${itemIndex}, 'url', this.value)"
                           class="w-full px-2 py-1 text-xs rounded border border-gray-300 focus:border-amber-500"
                           placeholder="URL">
                </div>
            </div>
        `;
    });

    return `
        <div class="bg-amber-50 border border-amber-200 rounded-lg p-3 relative group">
            <button type="button" onclick="removeMV11Doc(${docIndex})" aria-label="Eliminar departamento ${docIndex + 1}"
                    class="absolute top-2 right-2 p-1 text-gray-400 hover:text-red-500 hover:bg-red-50 rounded transition-colors opacity-0 group-hover:opacity-100">
                <svg aria-hidden="true" focusable="false" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
            <div class="flex items-center mb-2">
                <span class="text-xs bg-amber-200 text-amber-800 px-2 py-0.5 rounded">Departamento</span>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-2 mb-3 pr-8">
                <div>
                    <label class="block text-xs font-medium text-amber-700 mb-1">Año</label>
                    <input type="text" value="${escapeHtml(doc.anio || '')}"
                           onchange="updateMV11Doc(${docIndex}, 'anio', this.value)"
                           class="w-full px-2 py-1.5 text-sm rounded border border-amber-300 focus:border-amber-500 focus:ring-1 focus:ring-amber-500 bg-white">
                </div>
                <div>
                    <label class="block text-xs font-medium text-amber-700 mb-1">Nombre del Departamento</label>
                    <input type="text" value="${escapeHtml(doc.departamento || '')}"
                           onchange="updateMV11Doc(${docIndex}, 'departamento', this.value)"
                           class="w-full px-2 py-1.5 text-sm rounded border border-amber-300 focus:border-amber-500 focus:ring-1 focus:ring-amber-500 bg-white">
                </div>
            </div>
            <div class="space-y-2">
                ${itemsHtml}
            </div>
            <button type="button" onclick="addMV11DeptItem(${docIndex})"
                    class="mt-2 flex items-center px-2 py-1 text-xs bg-white text-amber-600 rounded border border-amber-300 hover:bg-amber-50 transition-colors">
                <svg aria-hidden="true" focusable="false" class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
                Agregar Item
            </button>
        </div>
    `;
}

function addMV11SimpleDoc(year) {
    mv11Data.push({ anio: year, titulo: '', url: '' });
    renderMV11();
}

function addMV11Department(year) {
    mv11Data.push({ anio: year, departamento: '', items: [] });
    renderMV11();
}

function removeMV11Doc(docIndex) {
    if (confirm('¿Estás seguro de eliminar este documento?')) {
        mv11Data.splice(docIndex, 1);
        renderMV11();
    }
}

function updateMV11Doc(docIndex, field, value) {
    if (mv11Data[docIndex]) {
        mv11Data[docIndex][field] = value;
        updateJsonFromVisual();
        // Si se cambió el año, re-renderizar para reorganizar
        if (field === 'anio') {
            renderMV11();
        }
    }
}

function addMV11DeptItem(docIndex) {
    if (mv11Data[docIndex]) {
        if (!mv11Data[docIndex].items) {
            mv11Data[docIndex].items = [];
        }
        mv11Data[docIndex].items.push({ titulo: '', url: '' });
        renderMV11();
    }
}

function removeMV11DeptItem(docIndex, itemIndex) {
    if (mv11Data[docIndex]?.items) {
        mv11Data[docIndex].items.splice(itemIndex, 1);
        renderMV11();
    }
}

function updateMV11DeptItem(docIndex, itemIndex, field, value) {
    if (mv11Data[docIndex]?.items?.[itemIndex]) {
        mv11Data[docIndex].items[itemIndex][field] = value;
        updateJsonFromVisual();
    }
}

// ========================
// MV12: Diseño Curricular (estructura con año, sección e items)
// Estructura: [{ anio, seccion, items: [{titulo, url}] }]
// ========================
function renderMV12() {
    const container = document.getElementById('mv12-container');
    if (!container) return;

    container.innerHTML = '';

    if (mv12Data.length === 0) {
        container.innerHTML = `
            <div class="text-center py-8 text-gray-500 border-2 border-dashed border-gray-200 rounded-lg">
                <svg aria-hidden="true" focusable="false" class="w-12 h-12 mx-auto text-gray-300 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                </svg>
                <p>No hay secciones agregadas</p>
                <p class="text-sm">Haz clic en "Agregar Sección" para comenzar</p>
            </div>
        `;
        return;
    }

    mv12Data.forEach((section, index) => {
        const card = createMV12SectionCard(section, index);
        container.appendChild(card);
    });

    updateJsonFromVisual();
}

function createMV12SectionCard(section, sectionIndex) {
    const div = document.createElement('div');
    div.className = 'bg-purple-50 border border-purple-200 rounded-lg p-4';

    let itemsHtml = '';
    (section.items || []).forEach((item, itemIndex) => {
        itemsHtml += `
            <div class="bg-white border border-gray-200 rounded-lg p-3 relative group">
                <button type="button" onclick="removeMV12Item(${sectionIndex}, ${itemIndex})" aria-label="Eliminar documento ${itemIndex + 1} de la sección ${sectionIndex + 1}"
                        class="absolute top-2 right-2 p-1 text-gray-400 hover:text-red-500 hover:bg-red-50 rounded transition-colors opacity-0 group-hover:opacity-100">
                    <svg aria-hidden="true" focusable="false" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-2 pr-8">
                    <div>
                        <label class="block text-xs font-medium text-gray-600 mb-1">Título</label>
                        <input type="text" value="${escapeHtml(item.titulo || '')}"
                               onchange="updateMV12Item(${sectionIndex}, ${itemIndex}, 'titulo', this.value)"
                               class="w-full px-2 py-1.5 text-sm rounded border border-gray-300 focus:border-purple-500 focus:ring-1 focus:ring-purple-500">
                    </div>
                    <div>
                        <label class="block text-xs font-medium text-gray-600 mb-1">URL</label>
                        <input type="text" value="${escapeHtml(item.url || '')}"
                               onchange="updateMV12Item(${sectionIndex}, ${itemIndex}, 'url', this.value)"
                               class="w-full px-2 py-1.5 text-sm rounded border border-gray-300 focus:border-purple-500 focus:ring-1 focus:ring-purple-500">
                    </div>
                </div>
            </div>
        `;
    });

    div.innerHTML = `
        <div class="flex items-center justify-between mb-4">
            <div class="flex items-center space-x-3">
                <span class="bg-purple-600 text-white px-3 py-1 rounded-lg font-bold">${section.anio || '----'}</span>
            </div>
            <button type="button" onclick="removeMV12Section(${sectionIndex})" aria-label="Eliminar sección ${sectionIndex + 1}"
                    class="p-2 text-red-500 hover:bg-red-50 rounded-lg transition-colors">
                <svg aria-hidden="true" focusable="false" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                </svg>
            </button>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-3 mb-4">
            <div>
                <label class="block text-xs font-medium text-purple-700 mb-1">Año</label>
                <input type="text" value="${section.anio || ''}"
                       onchange="updateMV12Section(${sectionIndex}, 'anio', this.value)"
                       class="w-full px-3 py-2 text-sm rounded-lg border border-purple-300 focus:border-purple-500 focus:ring-1 focus:ring-purple-500 bg-white"
                       placeholder="2024">
            </div>
            <div>
                <label class="block text-xs font-medium text-purple-700 mb-1">Nombre de la Sección</label>
                <input type="text" value="${escapeHtml(section.seccion || '')}"
                       onchange="updateMV12Section(${sectionIndex}, 'seccion', this.value)"
                       class="w-full px-3 py-2 text-sm rounded-lg border border-purple-300 focus:border-purple-500 focus:ring-1 focus:ring-purple-500 bg-white"
                       placeholder="Diseño Curricular 2024">
            </div>
        </div>
        <div class="space-y-2">
            ${itemsHtml}
        </div>
        <button type="button" onclick="addMV12Item(${sectionIndex})"
                class="mt-3 flex items-center px-3 py-1.5 text-sm bg-white text-purple-600 rounded border border-purple-300 hover:bg-purple-50 transition-colors">
            <svg aria-hidden="true" focusable="false" class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
            </svg>
            Agregar Documento
        </button>
    `;
    return div;
}

function addMV12Section() {
    mv12Data.push({
        anio: new Date().getFullYear().toString(),
        seccion: '',
        items: []
    });
    renderMV12();

    const container = document.getElementById('mv12-container');
    container.lastElementChild?.scrollIntoView({ behavior: 'smooth', block: 'center' });
}

function removeMV12Section(index) {
    if (confirm('¿Estás seguro de eliminar esta sección y todos sus documentos?')) {
        mv12Data.splice(index, 1);
        renderMV12();
    }
}

function updateMV12Section(index, field, value) {
    if (mv12Data[index]) {
        mv12Data[index][field] = value;
        updateJsonFromVisual();
    }
}

function addMV12Item(sectionIndex) {
    if (mv12Data[sectionIndex]) {
        if (!mv12Data[sectionIndex].items) {
            mv12Data[sectionIndex].items = [];
        }
        mv12Data[sectionIndex].items.push({ titulo: '', url: '' });
        renderMV12();
    }
}

function removeMV12Item(sectionIndex, itemIndex) {
    if (mv12Data[sectionIndex]?.items) {
        mv12Data[sectionIndex].items.splice(itemIndex, 1);
        renderMV12();
    }
}

function updateMV12Item(sectionIndex, itemIndex, field, value) {
    if (mv12Data[sectionIndex]?.items?.[itemIndex]) {
        mv12Data[sectionIndex].items[itemIndex][field] = value;
        updateJsonFromVisual();
    }
}

// ========================
// UTILIDADES
// ========================
function updateJsonFromVisual() {
    const jsonTextarea = document.getElementById('documentos-json');
    const visualInput = document.getElementById('documentos-visual-input');

    let data;
    if (isSimpleType) {
        data = documentsData;
    } else if (isSectionType) {
        data = sectionsData;
    } else if (isMV11) {
        data = mv11Data;
    } else if (isMV12) {
        data = mv12Data;
    } else {
        return;
    }

    const jsonString = JSON.stringify(data, null, 2);
    jsonTextarea.value = jsonString;
    visualInput.value = jsonString;
}

function formatJSON() {
    const textarea = document.getElementById('documentos-json');
    try {
        const json = JSON.parse(textarea.value);
        textarea.value = JSON.stringify(json, null, 2);
    } catch (e) {
        alert('Error: El JSON no es válido. Por favor, revisa la sintaxis.');
    }
}

function escapeHtml(text) {
    if (!text) return '';
    const div = document.createElement('div');
    div.textContent = text;
    return div.innerHTML.replace(/"/g, '&quot;');
}

// Antes de enviar el formulario, asegurar que el JSON está actualizado
document.querySelector('form').addEventListener('submit', function(e) {
    if (!isJsonMode) {
        updateJsonFromVisual();
    }
});
</script>
@endpush
@endsection
