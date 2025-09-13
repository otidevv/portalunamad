@extends('admin.layouts.app')

@section('content')
<div class="p-6">
    <!-- Header -->
    <div class="flex justify-between items-center mb-6">
        <div>
            <h1 class="text-2xl font-bold text-gray-800">Nueva Categoría de Comunicado</h1>
            <p class="text-gray-600 text-sm mt-1">Complete el formulario para crear una nueva categoría</p>
        </div>
        <a href="{{ route('admin.comunicado-categorias.index') }}" 
           class="flex items-center space-x-2 px-4 py-2 bg-gray-600 text-white rounded-lg hover:bg-gray-700 transition-colors">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                      d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
            </svg>
            <span>Volver</span>
        </a>
    </div>

    <!-- Formulario -->
    <div class="bg-white rounded-lg shadow-sm p-6">
        <form action="{{ route('admin.comunicado-categorias.store') }}" method="POST">
            @csrf
            
            <div class="space-y-6">
                <!-- Nombre -->
                <div>
                    <label for="nombre" class="block text-sm font-medium text-gray-700 mb-1">
                        Nombre de la Categoría *
                    </label>
                    <input type="text" 
                           name="nombre" 
                           id="nombre" 
                           value="{{ old('nombre') }}"
                           class="w-full rounded-lg border-gray-300 focus:border-[#db0455] focus:ring-[#db0455] shadow-sm @error('nombre') border-red-300 @enderror"
                           placeholder="Ej: Académicos, Administrativos, Eventos"
                           required>
                    @error('nombre')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Descripción -->
                <div>
                    <label for="descripcion" class="block text-sm font-medium text-gray-700 mb-1">
                        Descripción
                    </label>
                    <textarea name="descripcion" 
                              id="descripcion" 
                              rows="4"
                              class="w-full rounded-lg border-gray-300 focus:border-[#db0455] focus:ring-[#db0455] shadow-sm @error('descripcion') border-red-300 @enderror"
                              placeholder="Descripción opcional de la categoría">{{ old('descripcion') }}</textarea>
                    @error('descripcion')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Estado -->
                <div>
                    <div class="flex items-center">
                        <input type="hidden" name="estado" value="0">
                        <input type="checkbox" 
                               name="estado" 
                               id="estado" 
                               value="1" 
                               {{ old('estado', '1') ? 'checked' : '' }}
                               class="rounded border-gray-300 text-[#db0455] shadow-sm focus:border-[#db0455] focus:ring focus:ring-[#db0455] focus:ring-opacity-50">
                        <label for="estado" class="ml-2 block text-sm text-gray-700">
                            Categoría activa
                        </label>
                    </div>
                    <p class="text-xs text-gray-500 mt-1">Las categorías inactivas no aparecerán en los formularios</p>
                </div>
            </div>

            <!-- Botones -->
            <div class="flex justify-end space-x-3 mt-8 pt-6 border-t border-gray-200">
                <a href="{{ route('admin.comunicado-categorias.index') }}"
                   class="px-4 py-2 border border-gray-300 rounded-lg text-sm font-medium text-gray-700 hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800 transition duration-150 ease-in-out">
                    Cancelar
                </a>
                <button type="submit"
                        class="inline-flex items-center px-4 py-2 border border-transparent rounded-lg text-sm font-medium text-white bg-gradient-to-r from-[#db0455] to-[#a00340] hover:shadow-lg transform hover:scale-[1.02] transition-all duration-200 focus:outline-none focus:shadow-outline">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    Crear Categoría
                </button>
            </div>
        </form>
    </div>
</div>
@endsection