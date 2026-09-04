@extends('admin.layouts.app')

@section('title', 'Editar Dataset')
@section('header', 'Editar Dataset')

@section('content')
@php($AREAS = \App\Models\Dataset::AREAS)
@php($CATEGORIAS = \App\Models\Dataset::CATEGORIAS)
@php($FRECUENCIAS = \App\Models\Dataset::FRECUENCIAS)
@php($LICENCIAS = \App\Models\Dataset::LICENCIAS)
@php($ESTADOS = \App\Models\Dataset::ESTADOS_PUBLICACION)
@php($TIPOS = \App\Models\Dataset::TIPOS_COLUMNA)
@php($columnasActuales = old('columnas', $dataset->columnas ?? []))
<div class="p-6">
    <!-- Header -->
    <div class="flex justify-between items-center mb-6">
        <div>
            <h2 class="text-2xl font-bold text-gray-800">Editar Dataset</h2>
            <p class="text-gray-600 text-sm mt-1">Modifica los metadatos y el diccionario. Sube un CSV nuevo solo si quieres reemplazar las filas.</p>
        </div>
        <div class="flex space-x-3">
            <a href="{{ route('admin.datasets.show', $dataset) }}"
               class="flex items-center space-x-2 px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                <svg aria-hidden="true" focusable="false" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                </svg>
                <span>Ver</span>
            </a>
            <a href="{{ route('admin.datasets.index') }}"
               class="flex items-center space-x-2 px-4 py-2 bg-gray-600 text-white rounded-lg hover:bg-gray-700 transition-colors">
                <svg aria-hidden="true" focusable="false" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                <span>Volver</span>
            </a>
        </div>
    </div>

    @if($errors->any())
        <div id="resumen-errores" role="alert" tabindex="-1" class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6 rounded-lg">
            <p class="font-medium">Revisa los siguientes campos:</p>
            <ul class="list-disc list-inside text-sm mt-1">
                @foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach
            </ul>
        </div>
    @endif

    <!-- Resumen actual -->
    <div class="mb-6 p-4 rounded-lg bg-gray-50 border border-gray-200 text-sm text-gray-700">
        <span class="font-medium">{{ number_format($dataset->total_filas) }}</span> filas ·
        <span class="font-medium">{{ count($dataset->columnas ?? []) }}</span> columnas
        @if($dataset->ultima_sincronizacion)
            · datos actualizados el {{ $dataset->ultima_sincronizacion->format('d/m/Y H:i') }}
        @else
            · <span class="text-amber-600">aún sin datos cargados</span>
        @endif
    </div>

    <form action="{{ route('admin.datasets.update', $dataset) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf
        @method('PUT')
        <p class="text-sm text-gray-600">Los campos marcados con asterisco (<span aria-hidden="true">*</span>) son obligatorios.</p>

        <!-- Identificación -->
        <div class="bg-white rounded-lg shadow-sm p-6">
            <h2 class="text-sm font-semibold text-gray-800 uppercase tracking-wide mb-4">Identificación</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                <div>
                    <label for="nombre" class="block text-sm font-medium text-gray-700 mb-1">Nombre del Dataset <span aria-hidden="true">*</span></label>
                    <input type="text" name="nombre" id="nombre" value="{{ old('nombre', $dataset->nombre) }}"
                           class="w-full rounded-lg border-gray-300 focus:border-[#db0455] focus:ring-[#db0455] shadow-sm @error('nombre') border-red-300 @enderror" required aria-required="true" @error('nombre') aria-invalid="true" aria-describedby="nombre-error" @enderror>
                    @error('nombre')<p id="nombre-error" class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
                </div>
                <div>
                    <label for="slug" class="block text-sm font-medium text-gray-700 mb-1">Identificador (slug)</label>
                    <input type="text" id="slug" value="{{ $dataset->slug }}" disabled aria-describedby="slug-help"
                           class="w-full rounded-lg border-gray-200 bg-gray-100 text-gray-500 shadow-sm">
                    <p id="slug-help" class="text-xs text-gray-500 mt-1">El identificador no se modifica para no romper los enlaces publicados.</p>
                </div>
                <div class="md:col-span-2">
                    <label for="descripcion" class="block text-sm font-medium text-gray-700 mb-1">Descripción</label>
                    <textarea name="descripcion" id="descripcion" rows="2"
                              class="w-full rounded-lg border-gray-300 focus:border-[#db0455] focus:ring-[#db0455] shadow-sm">{{ old('descripcion', $dataset->descripcion) }}</textarea>
                </div>
            </div>
        </div>

        <!-- Plan de Apertura (PNDA) -->
        <div class="bg-white rounded-lg shadow-sm p-6">
            <h2 class="text-sm font-semibold text-gray-800 uppercase tracking-wide mb-4">Plan de Apertura de Datos (PNDA)</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                <div>
                    <label for="area_responsable" class="block text-sm font-medium text-gray-700 mb-1">Área responsable</label>
                    <input list="lista-areas" name="area_responsable" id="area_responsable" value="{{ old('area_responsable', $dataset->area_responsable) }}"
                           class="w-full rounded-lg border-gray-300 focus:border-[#db0455] focus:ring-[#db0455] shadow-sm">
                    <datalist id="lista-areas">
                        @foreach($AREAS as $area)<option value="{{ $area }}">@endforeach
                    </datalist>
                </div>
                <div>
                    <label for="categoria" class="block text-sm font-medium text-gray-700 mb-1">Categoría temática</label>
                    <select name="categoria" id="categoria"
                            class="w-full rounded-lg border-gray-300 focus:border-[#db0455] focus:ring-[#db0455] shadow-sm">
                        <option value="">— Sin categoría —</option>
                        @foreach($CATEGORIAS as $cat)
                            <option value="{{ $cat }}" {{ old('categoria', $dataset->categoria) === $cat ? 'selected' : '' }}>{{ $cat }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="fecha_corte" class="block text-sm font-medium text-gray-700 mb-1">Fecha de corte</label>
                    <input type="date" name="fecha_corte" id="fecha_corte"
                           value="{{ old('fecha_corte', optional($dataset->fecha_corte)->format('Y-m-d')) }}"
                           class="w-full rounded-lg border-gray-300 focus:border-[#db0455] focus:ring-[#db0455] shadow-sm">
                </div>
                <div>
                    <label for="fecha_publicacion" class="block text-sm font-medium text-gray-700 mb-1">Fecha de publicación (PNDA)</label>
                    <input type="date" name="fecha_publicacion" id="fecha_publicacion"
                           value="{{ old('fecha_publicacion', optional($dataset->fecha_publicacion)->format('Y-m-d')) }}"
                           class="w-full rounded-lg border-gray-300 focus:border-[#db0455] focus:ring-[#db0455] shadow-sm">
                </div>
                <div>
                    <label for="frecuencia_actualizacion" class="block text-sm font-medium text-gray-700 mb-1">Frecuencia de actualización</label>
                    <select name="frecuencia_actualizacion" id="frecuencia_actualizacion"
                            class="w-full rounded-lg border-gray-300 focus:border-[#db0455] focus:ring-[#db0455] shadow-sm">
                        <option value="">— No definida —</option>
                        @foreach($FRECUENCIAS as $f)
                            <option value="{{ $f }}" {{ old('frecuencia_actualizacion', $dataset->frecuencia_actualizacion) === $f ? 'selected' : '' }}>{{ $f }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="estado_publicacion" class="block text-sm font-medium text-gray-700 mb-1">Estado en el plan</label>
                    <select name="estado_publicacion" id="estado_publicacion"
                            class="w-full rounded-lg border-gray-300 focus:border-[#db0455] focus:ring-[#db0455] shadow-sm">
                        @foreach($ESTADOS as $val => $label)
                            <option value="{{ $val }}" {{ old('estado_publicacion', $dataset->estado_publicacion) === $val ? 'selected' : '' }}>{{ $label }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="licencia" class="block text-sm font-medium text-gray-700 mb-1">Licencia</label>
                    <input list="lista-licencias" name="licencia" id="licencia" value="{{ old('licencia', $dataset->licencia) }}"
                           class="w-full rounded-lg border-gray-300 focus:border-[#db0455] focus:ring-[#db0455] shadow-sm">
                    <datalist id="lista-licencias">
                        @foreach($LICENCIAS as $lic)<option value="{{ $lic }}">@endforeach
                    </datalist>
                </div>
                <div>
                    <label for="fuente_url" class="block text-sm font-medium text-gray-700 mb-1">Fuente / enlace al PNDA (opcional)</label>
                    <input type="url" name="fuente_url" id="fuente_url" value="{{ old('fuente_url', $dataset->fuente_url) }}"
                           class="w-full rounded-lg border-gray-300 focus:border-[#db0455] focus:ring-[#db0455] shadow-sm @error('fuente_url') border-red-300 @enderror"
                           placeholder="https://www.datosabiertos.gob.pe/..." @error('fuente_url') aria-invalid="true" aria-describedby="fuente_url-error" @enderror>
                    @error('fuente_url')<p id="fuente_url-error" class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
                </div>
                <div class="md:col-span-2">
                    <label for="observaciones" class="block text-sm font-medium text-gray-700 mb-1">Observaciones · Protección de datos (Ley N° 29733)</label>
                    <textarea name="observaciones" id="observaciones" rows="2"
                              class="w-full rounded-lg border-gray-300 focus:border-[#db0455] focus:ring-[#db0455] shadow-sm">{{ old('observaciones', $dataset->observaciones) }}</textarea>
                </div>
            </div>
        </div>

        <!-- Diccionario de datos -->
        <div class="bg-white rounded-lg shadow-sm p-6">
            <div class="flex items-center justify-between mb-1">
                <h2 class="text-sm font-semibold text-gray-800 uppercase tracking-wide">Diccionario de datos</h2>
                <button type="button" id="btn-agregar-campo"
                        class="inline-flex items-center gap-1 text-sm text-[#db0455] hover:text-[#a00340] font-medium">
                    <svg aria-hidden="true" focusable="false" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                    Agregar campo
                </button>
            </div>
            <p class="text-xs text-gray-500 mb-4">Define o ajusta los campos del dataset. Estos metadatos alimentan la plantilla CSV y la ficha pública. <span class="text-amber-600">Si subes un CSV nuevo abajo, el diccionario se regenera a partir del archivo.</span></p>

            <div class="overflow-x-auto">
                <table class="w-full text-sm" id="tabla-diccionario">
                    <thead class="bg-gray-50 text-gray-500 uppercase text-xs">
                        <tr>
                            <th class="px-2 py-2 text-left">Campo</th>
                            <th class="px-2 py-2 text-left">Tipo</th>
                            <th class="px-2 py-2 text-left">Formato</th>
                            <th class="px-2 py-2 text-left">Descripción</th>
                            <th class="px-2 py-2 text-left">Ejemplo</th>
                            <th class="px-2 py-2"></th>
                        </tr>
                    </thead>
                    <tbody id="cuerpo-diccionario" class="divide-y divide-gray-100">
                        @foreach($columnasActuales as $col)
                            <tr class="fila-campo">
                                <td class="px-2 py-2">
                                    <input type="hidden" name="columnas[{{ $loop->index }}][key]" value="{{ data_get($col, 'key') }}">
                                    <input type="text" name="columnas[{{ $loop->index }}][label]" value="{{ data_get($col, 'label') }}" aria-label="Nombre del campo, fila {{ $loop->iteration }}"
                                           class="w-40 rounded border-gray-300 text-sm focus:border-[#db0455] focus:ring-[#db0455]" placeholder="NOMBRE_CAMPO">
                                </td>
                                <td class="px-2 py-2">
                                    <select name="columnas[{{ $loop->index }}][tipo]" aria-label="Tipo, fila {{ $loop->iteration }}" class="w-28 rounded border-gray-300 text-sm focus:border-[#db0455] focus:ring-[#db0455]">
                                        @foreach($TIPOS as $tval => $tlabel)
                                            <option value="{{ $tval }}" {{ data_get($col, 'tipo') === $tval ? 'selected' : '' }}>{{ $tlabel }}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td class="px-2 py-2">
                                    <input type="text" name="columnas[{{ $loop->index }}][formato]" value="{{ data_get($col, 'formato') }}" aria-label="Formato, fila {{ $loop->iteration }}"
                                           class="w-28 rounded border-gray-300 text-sm focus:border-[#db0455] focus:ring-[#db0455]" placeholder="YYYYMMDD">
                                </td>
                                <td class="px-2 py-2">
                                    <input type="text" name="columnas[{{ $loop->index }}][descripcion]" value="{{ data_get($col, 'descripcion') }}" aria-label="Descripción, fila {{ $loop->iteration }}"
                                           class="w-56 rounded border-gray-300 text-sm focus:border-[#db0455] focus:ring-[#db0455]" placeholder="Descripción del campo">
                                </td>
                                <td class="px-2 py-2">
                                    <input type="text" name="columnas[{{ $loop->index }}][ejemplo]" value="{{ data_get($col, 'ejemplo') }}" aria-label="Ejemplo, fila {{ $loop->iteration }}"
                                           class="w-32 rounded border-gray-300 text-sm focus:border-[#db0455] focus:ring-[#db0455]" placeholder="Ej: 2025-I">
                                </td>
                                <td class="px-2 py-2 text-right">
                                    <button type="button" class="btn-quitar-campo text-red-500 hover:text-red-700" title="Quitar" aria-label="Quitar campo {{ data_get($col, 'label') ?: 'de la fila ' . $loop->iteration }}">
                                        <svg aria-hidden="true" focusable="false" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <p id="diccionario-vacio" role="status" aria-live="polite" class="text-sm text-gray-400 py-4 {{ count($columnasActuales) ? 'hidden' : '' }}">
                    Sin campos definidos. Usa «Agregar campo» o sube un CSV para detectarlos automáticamente.
                </p>
            </div>
        </div>

        <!-- Reemplazar datos -->
        <div class="bg-white rounded-lg shadow-sm p-6">
            <h2 class="text-sm font-semibold text-gray-800 uppercase tracking-wide mb-4">Reemplazar datos (opcional)</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                <div>
                    <label for="archivo" class="block text-sm font-medium text-gray-700 mb-1">Archivo CSV</label>
                    <input type="file" name="archivo" id="archivo" accept=".csv,.txt"
                           class="w-full text-sm text-gray-700 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-medium file:bg-[#db0455] file:text-white hover:file:bg-[#a00340] @error('archivo') border border-red-300 rounded-lg @enderror" aria-describedby="aviso-csv @error('archivo') archivo-error @enderror" @error('archivo') aria-invalid="true" @enderror>
                    <p id="aviso-csv" class="text-xs text-amber-600 mt-1"><span aria-hidden="true">⚠️</span> Al subir un CSV nuevo se eliminan todas las filas actuales y se regenera el diccionario.</p>
                    @error('archivo')<p id="archivo-error" class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
                </div>
                <div>
                    <label for="separador" class="block text-sm font-medium text-gray-700 mb-1">Separador de columnas</label>
                    <select name="separador" id="separador"
                            class="w-full rounded-lg border-gray-300 focus:border-[#db0455] focus:ring-[#db0455] shadow-sm">
                        <option value="auto" {{ old('separador', 'auto') === 'auto' ? 'selected' : '' }}>Detectar automáticamente</option>
                        <option value="coma" {{ old('separador') === 'coma' ? 'selected' : '' }}>Coma ( , )</option>
                        <option value="puntoycoma" {{ old('separador') === 'puntoycoma' ? 'selected' : '' }}>Punto y coma ( ; )</option>
                        <option value="tab" {{ old('separador') === 'tab' ? 'selected' : '' }}>Tabulación</option>
                    </select>
                </div>
            </div>

            <div class="mt-5 flex items-center">
                <input type="hidden" name="activo" value="0">
                <input type="checkbox" name="activo" id="activo" value="1" {{ old('activo', $dataset->activo) ? 'checked' : '' }}
                       class="rounded border-gray-300 text-[#db0455] shadow-sm focus:border-[#db0455] focus:ring-[#db0455]">
                <label for="activo" class="ml-2 block text-sm text-gray-700">Visible en el portal público</label>
            </div>
        </div>

        <div class="flex justify-end space-x-3">
            <a href="{{ route('admin.datasets.show', $dataset) }}"
               class="px-4 py-2 border border-gray-300 rounded-lg text-sm font-medium text-gray-700 hover:text-gray-500 transition">Cancelar</a>
            <button type="submit"
                    class="inline-flex items-center px-4 py-2 border border-transparent rounded-lg text-sm font-medium text-white bg-gradient-to-r from-[#db0455] to-[#a00340] hover:shadow-lg transform hover:scale-[1.02] transition-all duration-200">
                <svg aria-hidden="true" focusable="false" class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                Actualizar
            </button>
        </div>
    </form>
</div>

<!-- Plantilla de fila para el editor de diccionario -->
<template id="plantilla-campo">
    <tr class="fila-campo">
        <td class="px-2 py-2">
            <input type="hidden" name="columnas[__I__][key]" value="">
            <input type="text" name="columnas[__I__][label]" value="" aria-label="Nombre del campo, fila __N__"
                   class="w-40 rounded border-gray-300 text-sm focus:border-[#db0455] focus:ring-[#db0455]" placeholder="NOMBRE_CAMPO">
        </td>
        <td class="px-2 py-2">
            <select name="columnas[__I__][tipo]" aria-label="Tipo, fila __N__" class="w-28 rounded border-gray-300 text-sm focus:border-[#db0455] focus:ring-[#db0455]">
                @foreach($TIPOS as $tval => $tlabel)
                    <option value="{{ $tval }}">{{ $tlabel }}</option>
                @endforeach
            </select>
        </td>
        <td class="px-2 py-2">
            <input type="text" name="columnas[__I__][formato]" value="" aria-label="Formato, fila __N__"
                   class="w-28 rounded border-gray-300 text-sm focus:border-[#db0455] focus:ring-[#db0455]" placeholder="YYYYMMDD">
        </td>
        <td class="px-2 py-2">
            <input type="text" name="columnas[__I__][descripcion]" value="" aria-label="Descripción, fila __N__"
                   class="w-56 rounded border-gray-300 text-sm focus:border-[#db0455] focus:ring-[#db0455]" placeholder="Descripción del campo">
        </td>
        <td class="px-2 py-2">
            <input type="text" name="columnas[__I__][ejemplo]" value="" aria-label="Ejemplo, fila __N__"
                   class="w-32 rounded border-gray-300 text-sm focus:border-[#db0455] focus:ring-[#db0455]" placeholder="Ej: 2025-I">
        </td>
        <td class="px-2 py-2 text-right">
            <button type="button" class="btn-quitar-campo text-red-500 hover:text-red-700" title="Quitar" aria-label="Quitar este campo">
                <svg aria-hidden="true" focusable="false" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>
        </td>
    </tr>
</template>

@push('scripts')
<script>
(function () {
    var cuerpo = document.getElementById('cuerpo-diccionario');
    var plantilla = document.getElementById('plantilla-campo');
    var vacio = document.getElementById('diccionario-vacio');
    var btnAgregar = document.getElementById('btn-agregar-campo');
    var indice = {{ count($columnasActuales) }};

    function refrescarVacio() {
        if (!vacio) return;
        var hay = cuerpo.querySelectorAll('.fila-campo').length > 0;
        vacio.classList.toggle('hidden', hay);
    }

    btnAgregar.addEventListener('click', function () {
        var html = plantilla.innerHTML.replace(/__I__/g, indice).replace(/__N__/g, indice + 1);
        indice++;
        var tmp = document.createElement('tbody');
        tmp.innerHTML = html.trim();
        var fila = tmp.firstElementChild;
        cuerpo.appendChild(fila);
        refrescarVacio();
        var primero = fila.querySelector('input[type="text"]');
        if (primero) primero.focus();
    });

    cuerpo.addEventListener('click', function (e) {
        var btn = e.target.closest('.btn-quitar-campo');
        if (!btn) return;
        var fila = btn.closest('.fila-campo');
        if (fila) fila.remove();
        refrescarVacio();
        btnAgregar.focus();
    });
    var resumen = document.getElementById('resumen-errores');
    if (resumen) resumen.focus();
})();
</script>
@endpush
@endsection
