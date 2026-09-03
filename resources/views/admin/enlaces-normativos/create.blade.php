@extends('admin.layouts.app')

@section('content')
<div class="p-6">
    <!-- Header -->
    <div class="flex justify-between items-center mb-6">
        <div>
            <h1 class="text-2xl font-bold text-gray-800">Nuevo Enlace Normativo</h1>
            <p class="text-gray-600 text-sm mt-1">Complete el formulario para agregar un enlace a la página de inicio</p>
        </div>
        <a href="{{ route('admin.enlaces-normativos.index') }}"
           class="flex items-center space-x-2 px-4 py-2 bg-gray-600 text-white rounded-lg hover:bg-gray-700 transition-colors">
            <svg aria-hidden="true" focusable="false" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
            </svg>
            <span>Volver</span>
        </a>
    </div>

    <!-- Formulario -->
    <div class="bg-white rounded-lg shadow-sm p-6">
        <form action="{{ route('admin.enlaces-normativos.store') }}" method="POST">
            @csrf
            @include('admin.enlaces-normativos._form', ['enlace' => null, 'submitLabel' => 'Crear Enlace'])
        </form>
    </div>
</div>
@endsection
