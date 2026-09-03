@extends('admin.layouts.app')

@section('content')
<div class="p-6">
    <!-- Header -->
    <div class="flex justify-between items-center mb-6">
        <div>
            <h1 class="text-2xl font-bold text-gray-800">Indicador 55 - Transparencia</h1>
            <p class="text-gray-600 text-sm mt-1">Gestiona las 12 variables del Indicador de Transparencia Universitaria</p>
        </div>
        <a href="/transparencia/indicador-55" target="_blank"
           class="flex items-center space-x-2 px-4 py-2 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 transition-colors">
            <svg aria-hidden="true" focusable="false" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
            </svg>
            <span>Ver en sitio</span>
        </a>
    </div>

    <!-- Mensajes de éxito/error -->
    @if(session('success'))
        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded-lg">
            <div class="flex items-center">
                <svg aria-hidden="true" focusable="false" class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                </svg>
                {{ session('success') }}
            </div>
        </div>
    @endif

    @if(session('error'))
        <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6 rounded-lg">
            <div class="flex items-center">
                <svg aria-hidden="true" focusable="false" class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                </svg>
                {{ session('error') }}
            </div>
        </div>
    @endif

    <!-- Grid de Variables -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($variables as $variable)
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden hover:shadow-md transition-shadow">
                <!-- Header con gradiente -->
                <div class="bg-gradient-to-r from-{{ $variable->gradiente_from }} to-{{ $variable->gradiente_to }} p-4">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <div class="w-10 h-10 bg-white/20 rounded-lg flex items-center justify-center mr-3">
                                <svg aria-hidden="true" focusable="false" class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="{{ $variable->icono }}"/>
                                </svg>
                            </div>
                            <div>
                                <span class="text-white/80 text-xs font-medium uppercase">{{ strtoupper($variable->codigo) }}</span>
                                <h3 class="text-white font-semibold text-sm">{{ $variable->titulo }}</h3>
                            </div>
                        </div>
                        <form action="{{ route('admin.indicador55.toggle-estado', $variable) }}" method="POST" class="inline">
                            @csrf
                            <button type="submit" class="px-2 py-1 rounded-full text-xs font-medium {{ $variable->activo ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                {{ $variable->activo ? 'Activo' : 'Inactivo' }}
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Contenido -->
                <div class="p-4">
                    <p class="text-gray-600 text-sm mb-4 line-clamp-2">
                        {{ $variable->descripcion ?: 'Sin descripción' }}
                    </p>

                    <!-- Info de documentos -->
                    @php
                        $docs = is_string($variable->documentos) ? json_decode($variable->documentos, true) : $variable->documentos;
                        $docCount = is_array($docs) ? count($docs) : 0;
                    @endphp
                    <div class="flex items-center justify-between text-xs text-gray-500 mb-4">
                        <span class="flex items-center">
                            <svg aria-hidden="true" focusable="false" class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                            {{ $docCount }} documento(s)
                        </span>
                        <span>Actualizado: {{ $variable->updated_at->format('d/m/Y') }}</span>
                    </div>

                    <!-- Acciones -->
                    <div class="flex items-center justify-between">
                        <a href="{{ route('admin.indicador55.edit', $variable) }}"
                           class="flex items-center px-3 py-2 bg-gradient-to-r from-[#db0455] to-[#a00340] text-white text-sm rounded-lg hover:shadow-md transition-all">
                            <svg aria-hidden="true" focusable="false" class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                            </svg>
                            Editar
                        </a>
                        <a href="/transparencia/indicador-55/{{ $variable->codigo }}" target="_blank"
                           class="flex items-center px-3 py-2 text-gray-600 hover:text-gray-900 text-sm">
                            <svg aria-hidden="true" focusable="false" class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                            </svg>
                            Ver
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Información adicional -->
    <div class="mt-8 bg-blue-50 rounded-lg p-6 border border-blue-200">
        <h3 class="text-lg font-semibold text-blue-800 mb-3 flex items-center">
            <svg aria-hidden="true" focusable="false" class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                <path d="M13,9H11V7H13M13,17H11V11H13M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"/>
            </svg>
            Acerca del Indicador 55
        </h3>
        <p class="text-blue-700 text-sm">
            El Indicador 55 establece los requisitos de transparencia universitaria que deben cumplir las instituciones
            de educación superior. Cada variable (MV1 a MV12) representa un aspecto específico de información que
            debe estar disponible públicamente.
        </p>
    </div>
</div>
@endsection
