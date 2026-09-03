@extends('admin.layouts.app')

@section('title', 'Editar video: ' . $video->titulo)
@section('header', 'Editar Video Destacado')
@section('content')
<div class="p-6">
    <!-- Header -->
    <div class="flex justify-between items-center mb-6">
        <div>
            <h2 class="text-2xl font-bold text-gray-800">Editar Video Destacado</h2>
            <p class="text-gray-600 text-sm mt-1">Actualice los datos del video</p>
        </div>
        <a href="{{ route('admin.videos-destacados.index') }}"
           class="flex items-center space-x-2 px-4 py-2 bg-gray-600 text-white rounded-lg hover:bg-gray-700 transition-colors">
            <svg aria-hidden="true" focusable="false" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
            </svg>
            <span>Volver</span>
        </a>
    </div>

    <!-- Vista previa -->
    @if($video->es_valido)
        <div class="bg-white rounded-lg shadow-sm p-6 mb-6">
            <h2 class="text-sm font-semibold text-gray-800 mb-3">
                Vista previa
                <span class="ml-2 inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-700">
                    {{ $video->tipo_etiqueta }}
                </span>
            </h2>
            <div class="max-w-2xl aspect-video bg-black rounded-lg overflow-hidden">
                @if($video->tipo === 'archivo')
                    <video src="{{ $video->embed_url }}" controls class="w-full h-full"></video>
                @else
                    <iframe src="{{ $video->embed_url }}"
                            class="w-full h-full"
                            frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                @endif
            </div>
        </div>
    @endif

    <!-- Formulario -->
    <div class="bg-white rounded-lg shadow-sm p-6">
        <form action="{{ route('admin.videos-destacados.update', $video) }}" method="POST">
            @csrf
            @method('PUT')
            @include('admin.videos-destacados._form', ['video' => $video, 'submitLabel' => 'Actualizar Video'])
        </form>
    </div>
</div>
@endsection
