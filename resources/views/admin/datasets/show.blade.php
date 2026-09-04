@extends('admin.layouts.app')

@section('title', $dataset->nombre)
@section('header', $dataset->nombre)

@section('content')
<div class="p-6">
    <!-- Header -->
    <div class="flex justify-between items-start mb-6">
        <div>
            <div class="flex items-center gap-3">
                <h2 class="text-2xl font-bold text-gray-800">{{ $dataset->nombre }}</h2>
                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium {{ $dataset->estado_publicacion_color }}">
                    {{ $dataset->estado_publicacion_label }}
                </span>
            </div>
            <p class="text-gray-500 text-xs font-mono mt-1">{{ $dataset->slug }}</p>
            <p class="text-gray-600 text-sm mt-1">{{ $dataset->descripcion ?: 'Sin descripción' }}</p>
        </div>
        <div class="flex flex-wrap gap-2 justify-end">
            @if(!empty($dataset->columnas))
                <a href="{{ route('admin.datasets.plantilla', $dataset) }}"
                   class="flex items-center space-x-2 px-3 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition-colors text-sm">
                    <svg aria-hidden="true" focusable="false" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                    </svg>
                    <span>Plantilla CSV</span>
                </a>
            @endif
            @if($dataset->activo && $dataset->tieneDatos())
                <a href="{{ route('datasets.publico', $dataset->slug) }}" target="_blank"
                   class="flex items-center space-x-2 px-3 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition-colors text-sm">
                    <svg aria-hidden="true" focusable="false" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                    </svg>
                    <span>Portal</span>
                </a>
            @endif
            <a href="{{ route('admin.datasets.edit', $dataset) }}"
               class="flex items-center space-x-2 px-3 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors text-sm">
                <svg aria-hidden="true" focusable="false" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                </svg>
                <span>Editar</span>
            </a>
            <a href="{{ route('admin.datasets.index') }}"
               class="flex items-center space-x-2 px-3 py-2 bg-gray-600 text-white rounded-lg hover:bg-gray-700 transition-colors text-sm">
                <svg aria-hidden="true" focusable="false" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                <span>Volver</span>
            </a>
        </div>
    </div>

    @if(session('success'))
        <div role="status" class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded-lg">{{ session('success') }}</div>
    @endif

    @if($dataset->observaciones)
        <div class="bg-amber-50 border-l-4 border-amber-400 text-amber-800 p-4 mb-6 rounded-lg">
            <div class="flex items-start gap-2">
                <svg aria-hidden="true" focusable="false" class="w-5 h-5 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                </svg>
                <div>
                    <p class="font-medium">Protección de datos · Ley N° 29733</p>
                    <p class="text-sm mt-0.5">{{ $dataset->observaciones }}</p>
                </div>
            </div>
        </div>
    @endif

    <!-- Metadatos del plan -->
    <div class="bg-white rounded-lg shadow-sm p-5 mb-6">
        <h2 class="sr-only">Metadatos del plan de apertura</h2>
        <dl class="grid grid-cols-2 md:grid-cols-4 gap-x-6 gap-y-4 text-sm">
            <div>
                <dt class="text-xs text-gray-500 uppercase">Área responsable</dt>
                <dd class="font-medium text-gray-800">{{ $dataset->area_responsable ?: '—' }}</dd>
            </div>
            <div>
                <dt class="text-xs text-gray-500 uppercase">Categoría</dt>
                <dd class="font-medium text-gray-800">{{ $dataset->categoria ?: '—' }}</dd>
            </div>
            <div>
                <dt class="text-xs text-gray-500 uppercase">Frecuencia</dt>
                <dd class="font-medium text-gray-800">{{ $dataset->frecuencia_actualizacion ?: '—' }}</dd>
            </div>
            <div>
                <dt class="text-xs text-gray-500 uppercase">Licencia</dt>
                <dd class="font-medium text-gray-800">{{ $dataset->licencia ?: '—' }}</dd>
            </div>
            <div>
                <dt class="text-xs text-gray-500 uppercase">Fecha de corte</dt>
                <dd class="font-medium text-gray-800">{{ $dataset->fecha_corte ? $dataset->fecha_corte->format('d/m/Y') : '—' }}</dd>
            </div>
            <div>
                <dt class="text-xs text-gray-500 uppercase">Publicación PNDA</dt>
                <dd class="font-medium {{ $dataset->estaDesfasado() ? 'text-red-600' : 'text-gray-800' }}">
                    {{ $dataset->fecha_publicacion ? $dataset->fecha_publicacion->format('d/m/Y') : '—' }}
                    @if($dataset->estaDesfasado())<span class="text-xs">(vencida)</span>@endif
                </dd>
            </div>
            <div>
                <dt class="text-xs text-gray-500 uppercase">Filas / Columnas</dt>
                <dd class="font-medium text-gray-800">{{ number_format($dataset->total_filas) }} · {{ count($dataset->columnas ?? []) }}</dd>
            </div>
            <div>
                <dt class="text-xs text-gray-500 uppercase">Fuente</dt>
                <dd>
                @if($dataset->fuente_url)
                    <a href="{{ $dataset->fuente_url }}" target="_blank" class="font-medium text-[#db0455] hover:underline break-all">Ver origen</a>
                @else
                    <span class="font-medium text-gray-400">—</span>
                @endif
                </dd>
            </div>
        </dl>
    </div>

    <!-- Diccionario de datos -->
    <div class="bg-white rounded-lg shadow-sm overflow-hidden mb-6">
        <div class="px-6 py-4 border-b border-gray-200 flex items-center justify-between">
            <h2 class="text-lg font-semibold text-gray-800">Diccionario de datos</h2>
            <span class="text-sm text-gray-500">{{ count($dataset->columnas ?? []) }} campos</span>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-sm">
                <thead class="bg-gray-50 border-b border-gray-200 text-xs text-gray-500 uppercase">
                    <tr>
                        <th class="px-4 py-2 text-left">#</th>
                        <th class="px-4 py-2 text-left">Campo</th>
                        <th class="px-4 py-2 text-left">Tipo</th>
                        <th class="px-4 py-2 text-left">Formato</th>
                        <th class="px-4 py-2 text-left">Descripción</th>
                        <th class="px-4 py-2 text-left">Ejemplo</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @forelse($dataset->columnas ?? [] as $i => $col)
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 py-2 text-gray-400">{{ data_get($col, 'numero', $i + 1) }}</td>
                            <td class="px-4 py-2 font-mono text-gray-800 whitespace-nowrap">{{ data_get($col, 'label') }}</td>
                            <td class="px-4 py-2">
                                <span class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium
                                    {{ data_get($col, 'tipo') === 'numero' ? 'bg-blue-100 text-blue-800' : (data_get($col, 'tipo') === 'fecha' ? 'bg-purple-100 text-purple-800' : 'bg-gray-100 text-gray-700') }}">
                                    {{ \App\Models\Dataset::TIPOS_COLUMNA[data_get($col, 'tipo')] ?? data_get($col, 'tipo') }}
                                </span>
                            </td>
                            <td class="px-4 py-2 text-gray-600 whitespace-nowrap">{{ data_get($col, 'formato') ?: '—' }}</td>
                            <td class="px-4 py-2 text-gray-600">{{ data_get($col, 'descripcion') ?: '—' }}</td>
                            <td class="px-4 py-2 text-gray-500">{{ data_get($col, 'ejemplo') ?: '—' }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-4 py-8 text-center text-gray-500">
                                Aún no hay diccionario. Defínelo en «Editar» o súbelo con un CSV.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    @if($dataset->tieneDatos())
        <!-- Gráfico -->
        <div class="bg-white rounded-lg shadow-sm p-6 mb-6">
            <h2 class="text-lg font-semibold text-gray-800 mb-4">Vista previa del gráfico</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-3 mb-4">
                <div>
                    <label for="sel-x" class="block text-xs text-gray-500 mb-1">Eje X (categoría)</label>
                    <select id="sel-x" class="w-full text-sm rounded-lg border-gray-300 focus:border-[#db0455] focus:ring-[#db0455]"></select>
                </div>
                <div>
                    <label for="sel-y" class="block text-xs text-gray-500 mb-1">Valor (eje Y)</label>
                    <select id="sel-y" class="w-full text-sm rounded-lg border-gray-300 focus:border-[#db0455] focus:ring-[#db0455]"></select>
                </div>
                <div>
                    <label for="sel-agg" class="block text-xs text-gray-500 mb-1">Agregación</label>
                    <select id="sel-agg" class="w-full text-sm rounded-lg border-gray-300 focus:border-[#db0455] focus:ring-[#db0455]">
                        <option value="sum">Suma</option>
                        <option value="avg">Promedio</option>
                        <option value="count">Conteo</option>
                    </select>
                </div>
                <div>
                    <label for="sel-tipo" class="block text-xs text-gray-500 mb-1">Tipo de gráfico</label>
                    <select id="sel-tipo" class="w-full text-sm rounded-lg border-gray-300 focus:border-[#db0455] focus:ring-[#db0455]">
                        <option value="bar">Barras</option>
                        <option value="line">Líneas</option>
                        <option value="pie">Circular</option>
                        <option value="doughnut">Dona</option>
                    </select>
                </div>
            </div>
            <p id="grafico-aviso" role="status" aria-live="polite" class="text-xs text-amber-600 mb-2 hidden"></p>
            <div class="relative" style="height: 420px;">
                <canvas id="grafico-dataset" role="img" aria-label="Gráfico del dataset {{ $dataset->nombre }}. Los datos de origen se muestran en la tabla de filas de esta página.">
                    Gráfico del dataset {{ $dataset->nombre }}. Los datos de origen se muestran en la tabla de filas de esta página.
                </canvas>
            </div>
        </div>

        <!-- Previsualización de datos -->
        <div class="bg-white rounded-lg shadow-sm overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-200">
                <h2 class="text-lg font-semibold text-gray-800">Primeras {{ $muestra->count() }} filas</h2>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-sm">
                    <thead class="bg-gray-50 border-b border-gray-200">
                        <tr>
                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">#</th>
                            @foreach($dataset->columnas ?? [] as $col)
                                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase whitespace-nowrap">{{ data_get($col, 'label') }}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @foreach($muestra as $registro)
                            <tr class="hover:bg-gray-50">
                                <td class="px-4 py-2 text-gray-400">{{ $registro->fila + 1 }}</td>
                                @foreach($dataset->columnas ?? [] as $col)
                                    <td class="px-4 py-2 text-gray-700 whitespace-nowrap">{{ data_get($registro->datos, data_get($col, 'key')) }}</td>
                                @endforeach
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @else
        <!-- Sin datos: dataset planificado -->
        <div class="bg-white rounded-lg shadow-sm p-10 text-center">
            <svg aria-hidden="true" focusable="false" class="w-12 h-12 mx-auto mb-4 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
            </svg>
            <p class="text-gray-600 font-medium">Este dataset aún no tiene datos cargados</p>
            <p class="text-gray-500 text-sm mt-1">Descarga la plantilla, complétala con la información del área y súbela desde «Editar» para generar el gráfico.</p>
            <a href="{{ route('admin.datasets.edit', $dataset) }}" class="inline-flex items-center gap-2 mt-4 px-4 py-2 bg-[#db0455] text-white rounded-lg hover:bg-[#a00340] transition-colors text-sm">
                Subir datos
            </a>
        </div>
    @endif
</div>

@if($dataset->tieneDatos())
@push('scripts')
<script src="{{ asset('js/chart.umd.min.js') }}"></script>
<script>
    window.DATASET_CONFIG = {
        columnas: @json($dataset->columnas ?? []),
        endpoint: "{{ route('admin.datasets.datos', $dataset) }}"
    };
</script>
<script src="{{ asset('js/dataset-chart.js') }}"></script>
@endpush
@endif
@endsection
