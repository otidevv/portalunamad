@extends('admin.layouts.app')

@section('header', 'Panel de Administración')

@section('content')
<div class="p-6">
    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <!-- Card 1 -->
        <div class="bg-white rounded-xl shadow-sm p-6 border-l-4 border-blue-500">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500 text-sm">Total Usuarios</p>
                    <p class="text-2xl font-bold text-gray-800">1,284</p>
                    <p class="text-green-500 text-sm mt-1">+12% este mes</p>
                </div>
                <div class="bg-blue-100 rounded-full p-3">
                    <svg class="w-8 h-8 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                              d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                    </svg>
                </div>
            </div>
        </div>
        
        <!-- Card 2 -->
        <div class="bg-white rounded-xl shadow-sm p-6 border-l-4 border-green-500">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500 text-sm">Anuncios Publicados</p>
                    <p class="text-2xl font-bold text-gray-800">{{ \App\Models\Anuncio::where('estado', 'publicado')->count() }}</p>
                    <p class="text-green-500 text-sm mt-1">{{ \App\Models\Anuncio::whereDate('created_at', today())->count() }} hoy</p>
                </div>
                <div class="bg-green-100 rounded-full p-3">
                    <svg class="w-8 h-8 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                              d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                    </svg>
                </div>
            </div>
        </div>
        
        <!-- Card 3 -->
        <div class="bg-white rounded-xl shadow-sm p-6 border-l-4 border-purple-500">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500 text-sm">Anuncios Destacados</p>
                    <p class="text-2xl font-bold text-gray-800">{{ \App\Models\Anuncio::where('destacado', true)->where('estado', 'publicado')->count() }}</p>
                    <p class="text-purple-500 text-sm mt-1">Activos</p>
                </div>
                <div class="bg-purple-100 rounded-full p-3">
                    <svg class="w-8 h-8 text-purple-500" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                </div>
            </div>
        </div>
        
        <!-- Card 4 -->
        <div class="bg-white rounded-xl shadow-sm p-6 border-l-4 border-orange-500">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500 text-sm">Total Vistas</p>
                    <p class="text-2xl font-bold text-gray-800">{{ number_format(\App\Models\Anuncio::sum('vistas')) }}</p>
                    <p class="text-orange-500 text-sm mt-1">Todos los anuncios</p>
                </div>
                <div class="bg-orange-100 rounded-full p-3">
                    <svg class="w-8 h-8 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                              d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                              d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Recent Activity & Quick Actions -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Recent Activity -->
        <div class="lg:col-span-2 bg-white rounded-xl shadow-sm p-6">
            <h2 class="text-lg font-semibold text-gray-800 mb-4">Anuncios Recientes</h2>
            <div class="space-y-4">
                @php
                    $anunciosRecientes = \App\Models\Anuncio::with('user')->latest()->take(5)->get();
                @endphp
                
                @forelse($anunciosRecientes as $anuncio)
                    <div class="flex items-start space-x-3 p-3 hover:bg-gray-50 rounded-lg transition-colors">
                        <div class="flex-shrink-0 w-2 h-2 
                            @if($anuncio->estado === 'publicado') bg-green-500
                            @elseif($anuncio->estado === 'borrador') bg-gray-500
                            @else bg-red-500
                            @endif
                            rounded-full mt-2"></div>
                        <div class="flex-1">
                            <p class="text-sm text-gray-800">{{ $anuncio->titulo }}</p>
                            <p class="text-xs text-gray-500">
                                Por: {{ $anuncio->user->name }} • {{ $anuncio->created_at->diffForHumans() }}
                                @if($anuncio->destacado)
                                    <span class="ml-2 text-yellow-600">⭐ Destacado</span>
                                @endif
                            </p>
                        </div>
                        <div class="flex items-center space-x-2">
                            <span class="text-xs text-gray-500">{{ $anuncio->vistas }} vistas</span>
                            <a href="{{ route('admin.anuncios.edit', $anuncio) }}" 
                               class="text-blue-600 hover:text-blue-800">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                          d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                @empty
                    <div class="text-center text-gray-500 py-8">
                        <svg class="w-12 h-12 mx-auto mb-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                  d="M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        No hay anuncios registrados
                    </div>
                @endforelse
            </div>
        </div>
        
        <!-- Quick Actions -->
        <div class="bg-white rounded-xl shadow-sm p-6">
            <h2 class="text-lg font-semibold text-gray-800 mb-4">Acciones Rápidas</h2>
            <div class="space-y-3">
                <a href="{{ route('admin.anuncios.create') }}"
                   class="w-full flex items-center space-x-3 p-3 bg-gradient-to-r from-[#db0455] to-[#a00340] text-white rounded-lg hover:shadow-lg transform hover:scale-[1.02] transition-all duration-200">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                    </svg>
                    <span>Nuevo Anuncio</span>
                </a>
                
                <a href="{{ route('admin.anuncios.index') }}"
                   class="w-full flex items-center space-x-3 p-3 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                              d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                    </svg>
                    <span>Ver Anuncios</span>
                </a>
                
                <button class="w-full flex items-center space-x-3 p-3 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                              d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                    <span>Crear Evento</span>
                </button>
                
                <button class="w-full flex items-center space-x-3 p-3 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                              d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
                    </svg>
                    <span>Agregar Usuario</span>
                </button>
            </div>
        </div>
    </div>
</div>
@endsection