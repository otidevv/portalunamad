@extends('admin.layouts.app')

@section('title', 'Datasets')
@section('header', 'Datasets')

@section('content')
<div class="p-6">
    <!-- Header -->
    <div class="flex justify-between items-center mb-6">
        <div>
            <h2 class="text-2xl font-bold text-gray-800">Datasets</h2>
            <p class="text-gray-600 text-sm mt-1">Catálogo del Plan de Apertura de Datos (PNDA) de la UNAMAD</p>
        </div>
        <a href="{{ route('admin.datasets.create') }}"
           class="flex items-center space-x-2 px-4 py-2 bg-gradient-to-r from-[#db0455] to-[#a00340] text-white rounded-lg hover:shadow-lg transform hover:scale-[1.02] transition-all duration-200">
            <svg aria-hidden="true" focusable="false" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
            </svg>
            <span>Nuevo Dataset</span>
        </a>
    </div>

    @if(session('success'))
        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded-lg">{{ session('success') }}</div>
    @endif
    @if(session('error'))
        <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6 rounded-lg">{{ session('error') }}</div>
    @endif

    <!-- Resumen del plan -->
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-6">
        <div class="bg-white rounded-lg shadow-sm p-4">
            <p class="text-xs text-gray-500 uppercase">Total en el plan</p>
            <p class="text-2xl font-bold text-gray-800">{{ number_format($stats['total']) }}</p>
        </div>
        <div class="bg-white rounded-lg shadow-sm p-4">
            <p class="text-xs text-gray-500 uppercase">Por publicar</p>
            <p class="text-2xl font-bold text-amber-600">{{ number_format($stats['en_plan']) }}</p>
        </div>
        <div class="bg-white rounded-lg shadow-sm p-4">
            <p class="text-xs text-gray-500 uppercase">Publicados</p>
            <p class="text-2xl font-bold text-green-600">{{ number_format($stats['publicados']) }}</p>
        </div>
        <div class="bg-white rounded-lg shadow-sm p-4">
            <p class="text-xs text-gray-500 uppercase">Fecha vencida</p>
            <p class="text-2xl font-bold {{ $stats['desfasados'] ? 'text-red-600' : 'text-gray-800' }}">{{ number_format($stats['desfasados']) }}</p>
        </div>
    </div>

    <!-- Filtros -->
    <form method="GET" action="{{ route('admin.datasets.index') }}" class="bg-white rounded-lg shadow-sm p-4 mb-6 flex flex-wrap items-end gap-4">
        <div class="flex-1 min-w-[200px]">
            <label class="block text-xs text-gray-500 mb-1">Área responsable</label>
            <select name="area" onchange="this.form.submit()"
                    class="w-full text-sm rounded-lg border-gray-300 focus:border-[#db0455] focus:ring-[#db0455]">
                <option value="">Todas las áreas</option>
                @foreach($areas as $area)
                    <option value="{{ $area }}" {{ $filtroArea === $area ? 'selected' : '' }}>{{ $area }}</option>
                @endforeach
            </select>
        </div>
        <div class="min-w-[180px]">
            <label class="block text-xs text-gray-500 mb-1">Estado en el plan</label>
            <select name="estado" onchange="this.form.submit()"
                    class="w-full text-sm rounded-lg border-gray-300 focus:border-[#db0455] focus:ring-[#db0455]">
                <option value="">Todos los estados</option>
                @foreach($estados as $val => $label)
                    <option value="{{ $val }}" {{ $filtroEstado === $val ? 'selected' : '' }}>{{ $label }}</option>
                @endforeach
            </select>
        </div>
        @if($filtroArea || $filtroEstado)
            <a href="{{ route('admin.datasets.index') }}" class="text-sm text-gray-500 hover:text-[#db0455] underline pb-2">Limpiar filtros</a>
        @endif
    </form>

    <!-- Tabla de datasets -->
    <div class="bg-white rounded-lg shadow-sm overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50 border-b border-gray-200">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Dataset</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Área</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Estado / Publicación</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Filas</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Portal</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Acciones</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse($datasets as $dataset)
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-4">
                                <div class="font-medium text-gray-900">{{ $dataset->nombre }}</div>
                                <div class="text-xs text-gray-400 font-mono">{{ $dataset->slug }}</div>
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-600">
                                {{ $dataset->area_responsable ?: '—' }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium {{ $dataset->estado_publicacion_color }}">
                                    {{ $dataset->estado_publicacion_label }}
                                </span>
                                @if($dataset->fecha_publicacion)
                                    <div class="text-xs mt-1 {{ $dataset->estaDesfasado() ? 'text-red-600 font-medium' : 'text-gray-500' }}">
                                        {{ $dataset->estaDesfasado() ? 'Venció' : 'Publica' }} {{ $dataset->fecha_publicacion->format('d/m/Y') }}
                                    </div>
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                @if($dataset->tieneDatos())
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                        {{ number_format($dataset->total_filas) }}
                                    </span>
                                @else
                                    <span class="text-xs text-gray-400">Sin datos</span>
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <button onclick="toggleEstado('{{ $dataset->id }}')"
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium {{ $dataset->activo ? 'bg-green-100 text-green-800' : 'bg-gray-100 text-gray-600' }}">
                                    {{ $dataset->activo ? 'Visible' : 'Oculto' }}
                                </button>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <div class="flex items-center space-x-2">
                                    <a href="{{ route('admin.datasets.show', $dataset) }}" class="text-gray-600 hover:text-gray-900" title="Ver ficha" aria-label="Ver ficha de {{ $dataset->nombre }}">
                                        <svg aria-hidden="true" focusable="false" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                        </svg>
                                    </a>
                                    @if(!empty($dataset->columnas))
                                        <a href="{{ route('admin.datasets.plantilla', $dataset) }}" class="text-indigo-600 hover:text-indigo-900" title="Descargar plantilla CSV" aria-label="Descargar plantilla CSV de {{ $dataset->nombre }}">
                                            <svg aria-hidden="true" focusable="false" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                                            </svg>
                                        </a>
                                    @endif
                                    @if($dataset->activo && $dataset->tieneDatos())
                                        <a href="{{ route('datasets.publico', $dataset->slug) }}" target="_blank" class="text-green-600 hover:text-green-900" title="Ver en el portal" aria-label="Ver {{ $dataset->nombre }} en el portal (se abre en una ventana nueva)">
                                            <svg aria-hidden="true" focusable="false" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                            </svg>
                                        </a>
                                    @endif
                                    <a href="{{ route('admin.datasets.edit', $dataset) }}" class="text-blue-600 hover:text-blue-900" title="Editar" aria-label="Editar {{ $dataset->nombre }}">
                                        <svg aria-hidden="true" focusable="false" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                        </svg>
                                    </a>
                                    <form action="{{ route('admin.datasets.destroy', $dataset) }}" method="POST" class="inline-block"
                                          onsubmit="return confirm('¿Eliminar este dataset y todas sus filas?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-900" title="Eliminar" aria-label="Eliminar {{ $dataset->nombre }}">
                                            <svg aria-hidden="true" focusable="false" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-6 py-12 text-center text-gray-500">
                                <svg aria-hidden="true" focusable="false" class="w-12 h-12 mx-auto mb-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                </svg>
                                {{ ($filtroArea || $filtroEstado) ? 'No hay datasets con esos filtros.' : 'Aún no hay datasets. Crea el primero con «Nuevo Dataset».' }}
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if($datasets->hasPages())
            <div class="px-6 py-4 border-t border-gray-200">
                {{ $datasets->links() }}
            </div>
        @endif
    </div>
</div>

@push('scripts')
<script>
function toggleEstado(datasetId) {
    fetch(`/admin/datasets/${datasetId}/estado`, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            toastr.success(data.message);
            setTimeout(() => window.location.reload(), 800);
        } else {
            toastr.error('Error al cambiar el estado');
        }
    })
    .catch(() => toastr.error('Error al procesar la solicitud'));
}
</script>
@endpush
@endsection
