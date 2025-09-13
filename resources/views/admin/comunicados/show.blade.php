@extends('admin.layouts.app')

@section('content')
<div class="p-6">
    <!-- Header -->
    <div class="flex justify-between items-center mb-6">
        <div>
            <h1 class="text-2xl font-bold text-gray-800">Detalle del Comunicado</h1>
            <p class="text-gray-600 text-sm mt-1">Vista completa del comunicado #{{ $comunicado->id }}</p>
        </div>
        <div class="flex space-x-3">
            <a href="{{ route('admin.comunicados.edit', $comunicado) }}" 
               class="flex items-center space-x-2 px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                          d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                </svg>
                <span>Editar</span>
            </a>
            <a href="{{ route('admin.comunicados.index') }}" 
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
                <h2 class="text-xl font-bold text-gray-800 mb-4">{{ $comunicado->titulo }}</h2>
                
                @if($comunicado->imagen)
                    <img src="{{ $comunicado->imagen_url }}" 
                         alt="{{ $comunicado->titulo }}"
                         class="w-full rounded-lg mb-4">
                @endif
                
                @if($comunicado->contenido)
                    <div class="prose max-w-none comunicado-content">
                        <div class="text-gray-700">{!! $comunicado->contenido !!}</div>
                    </div>
                @else
                    <p class="text-gray-500 italic">Sin contenido adicional</p>
                @endif
            </div>
        </div>

        <!-- Sidebar -->
        <div class="space-y-6">
            <!-- Status Card -->
            <div class="bg-white rounded-lg shadow-sm p-6">
                <h3 class="text-lg font-semibold text-gray-800 mb-4">Estado y Configuración</h3>
                
                <div class="space-y-3">
                    <!-- Estado -->
                    <div>
                        <span class="text-sm text-gray-600">Estado:</span>
                        <span class="ml-2 px-2 py-1 text-xs font-medium rounded-full {{ $comunicado->estado ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                            {{ $comunicado->estado_texto }}
                        </span>
                    </div>

                    <!-- Categoría -->
                    <div>
                        <span class="text-sm text-gray-600">Categoría:</span>
                        <span class="ml-2 px-2 py-1 text-xs font-medium rounded-full bg-blue-100 text-blue-800">
                            {{ $comunicado->categoria->nombre ?? 'Sin categoría' }}
                        </span>
                    </div>

                    <!-- Vigencia -->
                    <div>
                        <span class="text-sm text-gray-600">Vigencia:</span>
                        @if($comunicado->fecha_fin && $comunicado->fecha_fin <= now())
                            <span class="ml-2 px-2 py-1 text-xs font-medium rounded-full bg-red-100 text-red-800">
                                Vencido
                            </span>
                        @else
                            <span class="ml-2 px-2 py-1 text-xs font-medium rounded-full bg-green-100 text-green-800">
                                Vigente
                            </span>
                        @endif
                    </div>

                    <!-- Duración -->
                    @if($comunicado->duracion)
                        <div class="flex items-center">
                            <span class="text-sm text-gray-600">Duración:</span>
                            <span class="ml-2 font-semibold">{{ $comunicado->duracion }} días</span>
                        </div>
                    @endif
                </div>
            </div>

            <!-- Time Card -->
            <div class="bg-white rounded-lg shadow-sm p-6">
                <h3 class="text-lg font-semibold text-gray-800 mb-4">Fechas Importantes</h3>
                
                <div class="space-y-3">
                    <div>
                        <span class="text-sm text-gray-600">Creado:</span>
                        <p class="font-medium">{{ $comunicado->created_at->format('d/m/Y H:i') }}</p>
                    </div>
                    
                    <div>
                        <span class="text-sm text-gray-600">Última actualización:</span>
                        <p class="font-medium">{{ $comunicado->updated_at->format('d/m/Y H:i') }}</p>
                    </div>
                    
                    @if($comunicado->fecha_fin)
                        <div>
                            <span class="text-sm text-gray-600">Fecha de expiración:</span>
                            <p class="font-medium">{{ $comunicado->fecha_fin->format('d/m/Y H:i') }}</p>
                            @if($comunicado->fecha_fin > now())
                                <p class="text-xs text-green-600">
                                    Expira en {{ $comunicado->fecha_fin->diffForHumans() }}
                                </p>
                            @else
                                <p class="text-xs text-red-600">
                                    Expiró {{ $comunicado->fecha_fin->diffForHumans() }}
                                </p>
                            @endif
                        </div>
                    @endif
                </div>
            </div>

            <!-- Category Details -->
            @if($comunicado->categoria)
                <div class="bg-white rounded-lg shadow-sm p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Detalles de Categoría</h3>
                    
                    <div class="space-y-3">
                        <div>
                            <span class="text-sm text-gray-600">Nombre:</span>
                            <p class="font-medium">{{ $comunicado->categoria->nombre }}</p>
                        </div>
                        
                        @if($comunicado->categoria->descripcion)
                            <div>
                                <span class="text-sm text-gray-600">Descripción:</span>
                                <p class="text-sm text-gray-700">{{ $comunicado->categoria->descripcion }}</p>
                            </div>
                        @endif
                    </div>
                </div>
            @endif

            <!-- Author Card -->
            <div class="bg-white rounded-lg shadow-sm p-6">
                <h3 class="text-lg font-semibold text-gray-800 mb-4">Autor</h3>
                <p class="text-gray-700">{{ $comunicado->user->name ?? 'Usuario desconocido' }}</p>
                <p class="text-sm text-gray-500">{{ $comunicado->user->email ?? '' }}</p>
            </div>

            <!-- Actions -->
            <div class="bg-white rounded-lg shadow-sm p-6">
                <h3 class="text-lg font-semibold text-gray-800 mb-4">Acciones Rápidas</h3>
                
                <div class="space-y-3">
                    <button onclick="toggleEstado()" 
                            class="w-full px-4 py-2 text-sm font-medium rounded-lg {{ $comunicado->estado ? 'bg-red-100 text-red-700 hover:bg-red-200' : 'bg-green-100 text-green-700 hover:bg-green-200' }} transition-colors">
                        {{ $comunicado->estado ? 'Desactivar Comunicado' : 'Activar Comunicado' }}
                    </button>
                    
                    <form action="{{ route('admin.comunicados.destroy', $comunicado) }}" 
                          method="POST" 
                          onsubmit="return confirm('¿Está seguro de eliminar este comunicado? Esta acción no se puede deshacer.');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" 
                                class="w-full px-4 py-2 text-sm font-medium text-red-700 bg-red-50 hover:bg-red-100 rounded-lg transition-colors">
                            Eliminar Comunicado
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@push('styles')
<style>
.comunicado-content p {
    margin-bottom: 1rem;
    line-height: 1.6;
}
.comunicado-content a {
    color: #db0455;
    text-decoration: underline;
}
.comunicado-content a:hover {
    color: #a00340;
}
.comunicado-content ul, .comunicado-content ol {
    margin: 1rem 0;
    padding-left: 2rem;
}
.comunicado-content li {
    margin-bottom: 0.5rem;
}
.comunicado-content strong {
    font-weight: 600;
}
.comunicado-content em {
    font-style: italic;
}
.comunicado-content h1, .comunicado-content h2, .comunicado-content h3, 
.comunicado-content h4, .comunicado-content h5, .comunicado-content h6 {
    font-weight: 600;
    margin: 1.5rem 0 1rem 0;
    color: #374151;
}
</style>
@endpush

@push('scripts')
<script>
function toggleEstado() {
    fetch(`/admin/comunicados/{{ $comunicado->id }}/estado`, {
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