@extends('layouts.app')

@section('title', $dataset->nombre . ' - Datos UNAMAD')
@section('description', Str::limit($dataset->descripcion ?: ('Datos abiertos de la UNAMAD: ' . $dataset->nombre), 160))

@section('content')
<div class="bg-gray-50 min-h-screen">
    <div class="container mx-auto px-4 py-10">
        <!-- Encabezado -->
        <div class="mb-8">
            <nav class="text-sm text-gray-500 mb-3" aria-label="Migas de pan">
                <ol class="flex flex-wrap items-center list-none m-0 p-0">
                    <li><a href="/" class="hover:text-[#db0455]">Inicio</a></li>
                    <li><span class="mx-2" aria-hidden="true">/</span>Datos</li>
                    <li><span class="mx-2" aria-hidden="true">/</span><span class="text-gray-700" aria-current="page">{{ Str::limit($dataset->nombre, 60) }}</span></li>
                </ol>
            </nav>
            <h1 class="text-3xl font-bold text-gray-800">{{ $dataset->nombre }}</h1>
            @if($dataset->descripcion)
                <p class="text-gray-600 mt-2 max-w-3xl">{{ $dataset->descripcion }}</p>
            @endif
            <div class="flex flex-wrap items-center gap-x-4 gap-y-2 mt-3 text-sm text-gray-500">
                <span>{{ number_format($dataset->total_filas) }} registros</span>
                @if($dataset->area_responsable)
                    <span class="inline-flex items-center px-2 py-0.5 rounded-full bg-gray-100 text-gray-600 text-xs">{{ $dataset->area_responsable }}</span>
                @endif
                @if($dataset->categoria)
                    <span class="inline-flex items-center px-2 py-0.5 rounded-full bg-[#db0455]/10 text-[#db0455] text-xs">{{ $dataset->categoria }}</span>
                @endif
                @if($dataset->fuente_url)
                    <a href="{{ $dataset->fuente_url }}" target="_blank" rel="noopener noreferrer" class="text-[#db0455] hover:underline inline-flex items-center gap-1">
                        Fuente de datos
                        <svg aria-hidden="true" focusable="false" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                        </svg>
                    </a>
                @endif
                @if($dataset->ultima_sincronizacion)
                    <span>Actualizado el {{ $dataset->ultima_sincronizacion->format('d/m/Y') }}</span>
                @endif
            </div>

            <!-- Ficha de metadatos -->
            <dl class="grid grid-cols-2 md:grid-cols-4 gap-x-6 gap-y-3 mt-5 text-sm bg-white rounded-xl shadow-sm p-5">
                <div>
                    <dt class="text-xs text-gray-600 uppercase">Fecha de corte</dt>
                    <dd class="text-gray-700">{{ $dataset->fecha_corte ? $dataset->fecha_corte->format('d/m/Y') : '—' }}</dd>
                </div>
                <div>
                    <dt class="text-xs text-gray-600 uppercase">Frecuencia</dt>
                    <dd class="text-gray-700">{{ $dataset->frecuencia_actualizacion ?: '—' }}</dd>
                </div>
                <div>
                    <dt class="text-xs text-gray-600 uppercase">Licencia</dt>
                    <dd class="text-gray-700">{{ $dataset->licencia ?: '—' }}</dd>
                </div>
                <div>
                    <dt class="text-xs text-gray-600 uppercase">Campos</dt>
                    <dd class="text-gray-700">{{ count($dataset->columnas ?? []) }}</dd>
                </div>
            </dl>
        </div>

        <!-- Controles + Gráfico -->
        <div class="bg-white rounded-xl shadow-sm p-6">
            <h2 class="text-lg font-semibold text-gray-800 mb-4">Visualización de los datos</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-3 mb-6">
                <div>
                    <label for="sel-x" class="block text-xs text-gray-500 mb-1">Categoría (eje X)</label>
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
            <p id="grafico-aviso" class="text-xs text-amber-800 mb-2 hidden" role="status" aria-live="polite"></p>
            <div class="relative" style="height: 460px;">
                <canvas id="grafico-dataset" role="img" aria-label="Gráfico de datos del conjunto {{ $dataset->nombre }}"></canvas>
            </div>
            <div class="mt-3">
                <button type="button" id="toggle-tabla-grafico" aria-expanded="false" aria-controls="grafico-tabla"
                    class="text-sm text-[#db0455] font-medium hover:underline">Ver los datos del gráfico en una tabla</button>
                <div id="grafico-tabla" class="sr-only"></div>
            </div>
        </div>

        <!-- Diccionario de datos -->
        @if(!empty($dataset->columnas))
            <div class="bg-white rounded-xl shadow-sm overflow-hidden mt-8">
                <h2 class="m-0">
                <button type="button" id="toggle-diccionario" class="w-full flex items-center justify-between px-6 py-4 text-left">
                    <span class="text-lg font-semibold text-gray-800">Diccionario de datos</span>
                    <svg aria-hidden="true" focusable="false" class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                </h2>
                <div id="contenido-diccionario" class="overflow-x-auto border-t border-gray-100">
                    <table class="w-full text-sm">
                        <caption class="sr-only">Diccionario de datos de {{ $dataset->nombre }}: campos, tipo, descripción y ejemplo</caption>
                        <thead class="bg-gray-50 text-xs text-gray-500 uppercase">
                            <tr>
                                <th scope="col" class="px-4 py-2 text-left">Campo</th>
                                <th scope="col" class="px-4 py-2 text-left">Tipo</th>
                                <th scope="col" class="px-4 py-2 text-left">Descripción</th>
                                <th scope="col" class="px-4 py-2 text-left">Ejemplo</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            @foreach($dataset->columnas as $col)
                                <tr>
                                    <th scope="row" class="px-4 py-2 font-mono font-normal text-left text-gray-800 whitespace-nowrap">{{ data_get($col, 'label') }}</th>
                                    <td class="px-4 py-2 text-gray-600">{{ \App\Models\Dataset::TIPOS_COLUMNA[data_get($col, 'tipo')] ?? data_get($col, 'tipo') }}</td>
                                    <td class="px-4 py-2 text-gray-600">{{ data_get($col, 'descripcion') ?: '—' }}</td>
                                    <td class="px-4 py-2 text-gray-500">{{ data_get($col, 'ejemplo') ?: '—' }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endif

        {{-- Nota de protección de datos: texto legal fijo. Las observaciones internas (anonimización, k-anonimato, etc.) NO se publican. --}}
        <p class="text-xs text-gray-500 mt-6 max-w-3xl">
            <span class="font-medium">Protección de datos:</span> este conjunto de datos se publica de forma anonimizada y agregada, conforme a la Ley N° 29733 de Protección de Datos Personales.
        </p>
    </div>
</div>
@endsection

@push('scripts')
<script src="{{ asset('js/chart.umd.min.js') }}"></script>
<script>
    window.DATASET_CONFIG = {
        columnas: @json($dataset->columnas ?? []),
        endpoint: "{{ route('datasets.publico.json', $dataset->slug) }}"
    };
</script>
<script src="{{ asset('js/dataset-chart.js') }}"></script>
<script>
    (function () {
        var btn = document.getElementById('toggle-diccionario');
        var cont = document.getElementById('contenido-diccionario');
        if (btn && cont) {
            btn.addEventListener('click', function () {
                cont.classList.toggle('hidden');
            });
        }
    })();
</script>
@endpush
