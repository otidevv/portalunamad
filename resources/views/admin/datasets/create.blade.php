@extends('admin.layouts.app')

@section('title', 'Nuevo Dataset')
@section('header', 'Nuevo Dataset')

@section('content')
@php($AREAS = \App\Models\Dataset::AREAS)
@php($CATEGORIAS = \App\Models\Dataset::CATEGORIAS)
@php($FRECUENCIAS = \App\Models\Dataset::FRECUENCIAS)
@php($LICENCIAS = \App\Models\Dataset::LICENCIAS)
@php($ESTADOS = \App\Models\Dataset::ESTADOS_PUBLICACION)
<div class="p-6">
    <!-- Header -->
    <div class="flex justify-between items-center mb-6">
        <div>
            <h1 class="text-2xl font-bold text-gray-800">Nuevo Dataset</h1>
            <p class="text-gray-600 text-sm mt-1">Registra un dataset del Plan de Apertura de Datos. El CSV es opcional: puedes registrar el plan ahora y subir los datos después.</p>
        </div>
        <a href="{{ route('admin.datasets.index') }}"
           class="flex items-center space-x-2 px-4 py-2 bg-gray-600 text-white rounded-lg hover:bg-gray-700 transition-colors">
            <svg aria-hidden="true" focusable="false" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
            </svg>
            <span>Volver</span>
        </a>
    </div>

    @if($errors->any())
        <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6 rounded-lg">
            <p class="font-medium">Revisa los siguientes campos:</p>
            <ul class="list-disc list-inside text-sm mt-1">
                @foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.datasets.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf

        <!-- Identificación -->
        <div class="bg-white rounded-lg shadow-sm p-6">
            <h2 class="text-sm font-semibold text-gray-800 uppercase tracking-wide mb-4">Identificación</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                <div>
                    <label for="nombre" class="block text-sm font-medium text-gray-700 mb-1">Nombre del Dataset *</label>
                    <input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}"
                           class="w-full rounded-lg border-gray-300 focus:border-[#db0455] focus:ring-[#db0455] shadow-sm @error('nombre') border-red-300 @enderror"
                           placeholder="Ej: Padrón de alumnos de pregrado" required>
                    @error('nombre')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
                </div>
                <div>
                    <label for="slug" class="block text-sm font-medium text-gray-700 mb-1">Identificador (slug, opcional)</label>
                    <input type="text" name="slug" id="slug" value="{{ old('slug') }}"
                           class="w-full rounded-lg border-gray-300 focus:border-[#db0455] focus:ring-[#db0455] shadow-sm @error('slug') border-red-300 @enderror"
                           placeholder="padron_alumnos_pregrado">
                    <p class="text-xs text-gray-500 mt-1">Nombre técnico para el PNDA. Si lo dejas vacío se genera del nombre.</p>
                    @error('slug')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
                </div>
                <div class="md:col-span-2">
                    <label for="descripcion" class="block text-sm font-medium text-gray-700 mb-1">Descripción</label>
                    <textarea name="descripcion" id="descripcion" rows="2"
                              class="w-full rounded-lg border-gray-300 focus:border-[#db0455] focus:ring-[#db0455] shadow-sm"
                              placeholder="Breve descripción del conjunto de datos">{{ old('descripcion') }}</textarea>
                </div>
            </div>
        </div>

        <!-- Plan de Apertura (PNDA) -->
        <div class="bg-white rounded-lg shadow-sm p-6">
            <h2 class="text-sm font-semibold text-gray-800 uppercase tracking-wide mb-4">Plan de Apertura de Datos (PNDA)</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                <div>
                    <label for="area_responsable" class="block text-sm font-medium text-gray-700 mb-1">Área responsable</label>
                    <input list="lista-areas" name="area_responsable" id="area_responsable" value="{{ old('area_responsable') }}"
                           class="w-full rounded-lg border-gray-300 focus:border-[#db0455] focus:ring-[#db0455] shadow-sm"
                           placeholder="Selecciona o escribe el área">
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
                            <option value="{{ $cat }}" {{ old('categoria') === $cat ? 'selected' : '' }}>{{ $cat }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="fecha_corte" class="block text-sm font-medium text-gray-700 mb-1">Fecha de corte</label>
                    <input type="date" name="fecha_corte" id="fecha_corte" value="{{ old('fecha_corte') }}"
                           class="w-full rounded-lg border-gray-300 focus:border-[#db0455] focus:ring-[#db0455] shadow-sm">
                </div>
                <div>
                    <label for="fecha_publicacion" class="block text-sm font-medium text-gray-700 mb-1">Fecha de publicación (PNDA)</label>
                    <input type="date" name="fecha_publicacion" id="fecha_publicacion" value="{{ old('fecha_publicacion') }}"
                           class="w-full rounded-lg border-gray-300 focus:border-[#db0455] focus:ring-[#db0455] shadow-sm">
                </div>
                <div>
                    <label for="frecuencia_actualizacion" class="block text-sm font-medium text-gray-700 mb-1">Frecuencia de actualización</label>
                    <select name="frecuencia_actualizacion" id="frecuencia_actualizacion"
                            class="w-full rounded-lg border-gray-300 focus:border-[#db0455] focus:ring-[#db0455] shadow-sm">
                        <option value="">— No definida —</option>
                        @foreach($FRECUENCIAS as $f)
                            <option value="{{ $f }}" {{ old('frecuencia_actualizacion') === $f ? 'selected' : '' }}>{{ $f }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="estado_publicacion" class="block text-sm font-medium text-gray-700 mb-1">Estado en el plan</label>
                    <select name="estado_publicacion" id="estado_publicacion"
                            class="w-full rounded-lg border-gray-300 focus:border-[#db0455] focus:ring-[#db0455] shadow-sm">
                        @foreach($ESTADOS as $val => $label)
                            <option value="{{ $val }}" {{ old('estado_publicacion', 'planificado') === $val ? 'selected' : '' }}>{{ $label }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="licencia" class="block text-sm font-medium text-gray-700 mb-1">Licencia</label>
                    <input list="lista-licencias" name="licencia" id="licencia" value="{{ old('licencia', 'CC BY 4.0') }}"
                           class="w-full rounded-lg border-gray-300 focus:border-[#db0455] focus:ring-[#db0455] shadow-sm">
                    <datalist id="lista-licencias">
                        @foreach($LICENCIAS as $lic)<option value="{{ $lic }}">@endforeach
                    </datalist>
                </div>
                <div>
                    <label for="fuente_url" class="block text-sm font-medium text-gray-700 mb-1">Fuente / enlace al PNDA (opcional)</label>
                    <input type="url" name="fuente_url" id="fuente_url" value="{{ old('fuente_url') }}"
                           class="w-full rounded-lg border-gray-300 focus:border-[#db0455] focus:ring-[#db0455] shadow-sm @error('fuente_url') border-red-300 @enderror"
                           placeholder="https://www.datosabiertos.gob.pe/...">
                    @error('fuente_url')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
                </div>
                <div class="md:col-span-2">
                    <label for="observaciones" class="block text-sm font-medium text-gray-700 mb-1">Observaciones · Protección de datos (Ley N° 29733)</label>
                    <textarea name="observaciones" id="observaciones" rows="2"
                              class="w-full rounded-lg border-gray-300 focus:border-[#db0455] focus:ring-[#db0455] shadow-sm"
                              placeholder="Ej: CODIGO anonimizado. No incluir DNI ni datos personales.">{{ old('observaciones') }}</textarea>
                </div>
            </div>
        </div>

        <!-- Datos (opcional) -->
        <div class="bg-white rounded-lg shadow-sm p-6">
            <h2 class="text-sm font-semibold text-gray-800 uppercase tracking-wide mb-1">Datos (opcional)</h2>
            <p class="text-xs text-gray-500 mb-4">Si ya tienes el archivo, súbelo para generar el gráfico y detectar las columnas. Si no, déjalo vacío y súbelo más adelante desde «Editar».</p>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                <div>
                    <label for="archivo" class="block text-sm font-medium text-gray-700 mb-1">Archivo CSV</label>
                    <input type="file" name="archivo" id="archivo" accept=".csv,.txt"
                           class="w-full text-sm text-gray-700 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-medium file:bg-[#db0455] file:text-white hover:file:bg-[#a00340] @error('archivo') border border-red-300 rounded-lg @enderror">
                    <p class="text-xs text-gray-500 mt-1">Máximo 50 MB. Formato .csv o .txt, con cabecera en la primera fila.</p>
                    @error('archivo')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
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
                    <p class="text-xs text-gray-500 mt-1">Los CSV exportados desde Excel en español suelen usar punto y coma ( ; ).</p>
                </div>
            </div>

            <div class="mt-5 flex items-center">
                <input type="hidden" name="activo" value="0">
                <input type="checkbox" name="activo" id="activo" value="1" {{ old('activo') ? 'checked' : '' }}
                       class="rounded border-gray-300 text-[#db0455] shadow-sm focus:border-[#db0455] focus:ring-[#db0455]">
                <label for="activo" class="ml-2 block text-sm text-gray-700">Visible en el portal público</label>
            </div>
            <p class="text-xs text-gray-500 mt-1">Solo los datasets activos y con datos se muestran como gráfico en el portal.</p>
        </div>

        <div class="flex justify-end space-x-3">
            <a href="{{ route('admin.datasets.index') }}"
               class="px-4 py-2 border border-gray-300 rounded-lg text-sm font-medium text-gray-700 hover:text-gray-500 transition">Cancelar</a>
            <button type="submit"
                    class="inline-flex items-center px-4 py-2 border border-transparent rounded-lg text-sm font-medium text-white bg-gradient-to-r from-[#db0455] to-[#a00340] hover:shadow-lg transform hover:scale-[1.02] transition-all duration-200">
                <svg aria-hidden="true" focusable="false" class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                Guardar dataset
            </button>
        </div>
    </form>
</div>
@endsection
