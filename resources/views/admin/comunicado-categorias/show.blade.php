@extends('admin.layouts.app')

@section('content')
<div class="p-6">
    <!-- Header -->
    <div class="flex justify-between items-center mb-6">
        <div>
            <h1 class="text-2xl font-bold text-gray-800">Detalle de Categoría</h1>
            <p class="text-gray-600 text-sm mt-1">Vista completa de la categoría "{{ $comunicadoCategoria->nombre }}"</p>
        </div>
        <div class="flex space-x-3">
            <a href="{{ route('admin.comunicado-categorias.edit', $comunicadoCategoria) }}" 
               class="flex items-center space-x-2 px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                          d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                </svg>
                <span>Editar</span>
            </a>
            <a href="{{ route('admin.comunicado-categorias.index') }}" 
               class="flex items-center space-x-2 px-4 py-2 bg-gray-600 text-white rounded-lg hover:bg-gray-700 transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                          d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                <span>Volver</span>
            </a>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Main Content -->
        <div class="lg:col-span-2 space-y-6">
            <!-- Basic Info Card -->
            <div class="bg-white rounded-lg shadow-sm p-6">
                <div class="flex justify-between items-start mb-4">
                    <h2 class="text-xl font-bold text-gray-800">{{ $comunicadoCategoria->nombre }}</h2>
                    <span class="px-3 py-1 text-sm font-medium rounded-full {{ $comunicadoCategoria->estado ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                        {{ $comunicadoCategoria->estado ? 'Activa' : 'Inactiva' }}
                    </span>
                </div>
                
                @if($comunicadoCategoria->descripcion)
                    <div class="text-gray-700">
                        {{ $comunicadoCategoria->descripcion }}
                    </div>
                @else
                    <p class="text-gray-500 italic">Sin descripción</p>
                @endif
            </div>

            <!-- Comunicados List -->
            <div class="bg-white rounded-lg shadow-sm">
                <div class="px-6 py-4 border-b border-gray-200">
                    <h3 class="text-lg font-semibold text-gray-800 flex items-center">
                        <svg class="w-5 h-5 mr-2 text-[#db0455]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                  d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"></path>
                        </svg>
                        Comunicados ({{ $comunicadoCategoria->comunicados->count() }})
                    </h3>
                </div>
                
                @if($comunicadoCategoria->comunicados->count() > 0)
                    <div class="divide-y divide-gray-200">
                        @foreach($comunicadoCategoria->comunicados as $comunicado)
                            <div class="px-6 py-4 hover:bg-gray-50 transition-colors">
                                <div class="flex items-start justify-between">
                                    <div class="flex-1">
                                        <h4 class="font-medium text-gray-900">{{ $comunicado->titulo }}</h4>
                                        <div class="mt-1 text-sm text-gray-500">
                                            <span>Por: {{ $comunicado->user->name ?? 'N/A' }}</span>
                                            <span class="mx-2">•</span>
                                            <span>{{ $comunicado->created_at->format('d/m/Y H:i') }}</span>
                                            @if($comunicado->fecha_fin)
                                                <span class="mx-2">•</span>
                                                <span class="{{ $comunicado->fecha_fin <= now() ? 'text-red-600' : 'text-green-600' }}">
                                                    {{ $comunicado->fecha_fin <= now() ? 'Vencido' : 'Vigente' }}
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="flex items-center space-x-2 ml-4">
                                        <span class="px-2 py-1 text-xs font-medium rounded-full {{ $comunicado->estado ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                            {{ $comunicado->estado ? 'Activo' : 'Inactivo' }}
                                        </span>
                                        <a href="{{ route('admin.comunicados.show', $comunicado) }}" 
                                           class="text-blue-600 hover:text-blue-900" title="Ver comunicado">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                                      d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                                      d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="px-6 py-12 text-center text-gray-500">
                        <svg class="w-12 h-12 mx-auto mb-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                  d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"></path>
                        </svg>
                        <p>Esta categoría no tiene comunicados asignados</p>
                        <a href="{{ route('admin.comunicados.create', ['categoria' => $comunicadoCategoria->id]) }}" 
                           class="inline-flex items-center mt-4 px-4 py-2 text-sm font-medium text-white bg-[#db0455] rounded-lg hover:bg-[#a00340] transition-colors">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                            </svg>
                            Crear primer comunicado
                        </a>
                    </div>
                @endif
            </div>
        </div>

        <!-- Sidebar -->
        <div class="space-y-6">
            <!-- Estadísticas -->
            <div class="bg-white rounded-lg shadow-sm p-6">
                <h3 class="text-lg font-semibold text-gray-800 mb-4">Estadísticas</h3>
                
                <div class="space-y-4">
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-gray-600">Total de comunicados:</span>
                        <span class="font-semibold text-lg">{{ $comunicadoCategoria->comunicados->count() }}</span>
                    </div>
                    
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-gray-600">Comunicados activos:</span>
                        <span class="font-semibold text-green-600">{{ $comunicadoCategoria->comunicados->where('estado', 1)->count() }}</span>
                    </div>
                    
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-gray-600">Comunicados inactivos:</span>
                        <span class="font-semibold text-red-600">{{ $comunicadoCategoria->comunicados->where('estado', 0)->count() }}</span>
                    </div>
                    
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-gray-600">Comunicados vigentes:</span>
                        <span class="font-semibold text-blue-600">
                            {{ $comunicadoCategoria->comunicados->filter(function($c) { return !$c->fecha_fin || $c->fecha_fin > now(); })->count() }}
                        </span>
                    </div>
                </div>
            </div>

            <!-- Información -->
            <div class="bg-white rounded-lg shadow-sm p-6">
                <h3 class="text-lg font-semibold text-gray-800 mb-4">Información</h3>
                
                <div class="space-y-3">
                    <div>
                        <span class="text-sm text-gray-600">Estado:</span>
                        <p class="font-medium">{{ $comunicadoCategoria->estado ? 'Activa' : 'Inactiva' }}</p>
                    </div>
                    
                    <div>
                        <span class="text-sm text-gray-600">Creada:</span>
                        <p class="font-medium">{{ $comunicadoCategoria->created_at->format('d/m/Y H:i') }}</p>
                    </div>
                    
                    <div>
                        <span class="text-sm text-gray-600">Última actualización:</span>
                        <p class="font-medium">{{ $comunicadoCategoria->updated_at->format('d/m/Y H:i') }}</p>
                    </div>
                </div>
            </div>

            <!-- Acciones -->
            <div class="bg-white rounded-lg shadow-sm p-6">
                <h3 class="text-lg font-semibold text-gray-800 mb-4">Acciones Rápidas</h3>
                
                <div class="space-y-3">
                    <button onclick="toggleEstado()" 
                            class="w-full px-4 py-2 text-sm font-medium rounded-lg {{ $comunicadoCategoria->estado ? 'bg-red-100 text-red-700 hover:bg-red-200' : 'bg-green-100 text-green-700 hover:bg-green-200' }} transition-colors">
                        {{ $comunicadoCategoria->estado ? 'Desactivar Categoría' : 'Activar Categoría' }}
                    </button>
                    
                    <a href="{{ route('admin.comunicados.create', ['categoria' => $comunicadoCategoria->id]) }}" 
                       class="w-full inline-flex justify-center items-center px-4 py-2 text-sm font-medium text-white bg-[#db0455] hover:bg-[#a00340] rounded-lg transition-colors">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                        </svg>
                        Nuevo Comunicado
                    </a>
                    
                    @if($comunicadoCategoria->comunicados->count() == 0)
                        <form action="{{ route('admin.comunicado-categorias.destroy', $comunicadoCategoria) }}" 
                              method="POST" 
                              onsubmit="return confirm('¿Está seguro de eliminar esta categoría? Esta acción no se puede deshacer.');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" 
                                    class="w-full px-4 py-2 text-sm font-medium text-red-700 bg-red-50 hover:bg-red-100 rounded-lg transition-colors">
                                Eliminar Categoría
                            </button>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
function toggleEstado() {
    fetch(`/admin/comunicado-categorias/{{ $comunicadoCategoria->id }}/estado`, {
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
            setTimeout(() => {
                window.location.reload();
            }, 1500);
        } else {
            toastr.error('Error al cambiar el estado');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        toastr.error('Error al procesar la solicitud');
    });
}
</script>
@endpush
@endsection