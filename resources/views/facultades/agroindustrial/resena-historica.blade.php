@extends('layouts.app')

@section('content')
<div class="bg-gray-50 min-h-screen">
    <!-- Hero Section -->
    <div class="relative text-white py-20" style="background-image: url('{{ asset('img/presentacion/presentacionbackground.jpg') }}'); background-size: cover; background-position: center; background-attachment: fixed;">
        <div class="absolute inset-0 bg-gradient-to-r from-[#db0455]/80 to-[#ed145b]/70"></div>
        <div class="relative z-10 container mx-auto px-4">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4 drop-shadow-lg">Reseña Histórica</h1>
                <p class="text-xl md:text-2xl opacity-90 drop-shadow-md">Ingeniería Agroindustrial - UNAMAD</p>
            </div>
        </div>
    </div>

    <!-- Navigation Breadcrumb -->
    <div class="bg-white border-b border-gray-200">
        <div class="container mx-auto px-4 py-4">
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="/" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-[#db0455]">
                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                            </svg>
                            Inicio
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2">Facultades</span>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2">Ingeniería Agroindustrial</span>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="ml-1 text-sm font-medium text-[#db0455] md:ml-2">Reseña Histórica</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Sidebar -->
            <div class="lg:col-span-1">
                @include('facultades.agroindustrial.partials.navigation')
            </div>

            <!-- Main Content -->
            <div class="lg:col-span-2">
                <div class="bg-white rounded-lg shadow-lg p-8 border-t-4 border-[#db0455]">
                    <div class="flex items-start space-x-4 mb-8">
                        <div class="bg-gradient-to-r from-[#db0455] to-[#ed145b] p-4 rounded-full">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-3xl font-bold text-gray-800 mb-4">Reseña Histórica</h2>
                            <div class="w-20 h-1 bg-gradient-to-r from-[#db0455] to-[#ed145b]"></div>
                        </div>
                    </div>

                    <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed">
                        <!-- Origen y Propósito -->
                        <div class="bg-gradient-to-r from-[#db0455]/5 to-[#ed145b]/5 rounded-lg p-6 mb-8 border-l-4 border-[#db0455]">
                            <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                                <svg class="w-6 h-6 mr-2 text-[#db0455]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                </svg>
                                Origen y Fundamentos de la Carrera
                            </h3>
                            <p class="text-gray-700 leading-relaxed mb-4">
                                La <strong>Carrera Profesional de Ingeniería Agroindustrial (IA)</strong> de la Universidad Nacional Amazónica de Madre de Dios (UNAMAD), nace como una unidad académica y de investigación que contribuye a la sociedad formando profesionales de calidad en Ciencia, Tecnología e Ingeniería Agroindustrial.
                            </p>
                            <p class="text-gray-700 leading-relaxed">
                                A través de la aplicación de sólidos conocimientos científicos, tecnológicos e innovación, la carrera busca resolver problemas relacionados con la producción agroindustrial, la seguridad agroalimentaria y el desarrollo agroindustrial de los diversos sectores que engloba esta actividad.
                            </p>
                        </div>

                        <!-- Sectores de Aplicación -->
                        <div class="mb-8">
                            <h3 class="text-xl font-bold text-gray-800 mb-6 flex items-center">
                                <svg class="w-6 h-6 mr-2 text-[#db0455]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                                </svg>
                                Sectores de Aplicación
                            </h3>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="bg-white rounded-lg p-6 border border-gray-200 hover:shadow-lg transition-shadow">
                                    <div class="flex items-start space-x-4">
                                        <div class="bg-gradient-to-r from-green-500 to-green-600 p-3 rounded-full flex-shrink-0">
                                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold text-gray-800 mb-2">Sector Agrícola</h4>
                                            <p class="text-gray-600 text-sm">Transformación de productos agrícolas primarios</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="bg-white rounded-lg p-6 border border-gray-200 hover:shadow-lg transition-shadow">
                                    <div class="flex items-start space-x-4">
                                        <div class="bg-gradient-to-r from-orange-500 to-orange-600 p-3 rounded-full flex-shrink-0">
                                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold text-gray-800 mb-2">Sector Pecuario</h4>
                                            <p class="text-gray-600 text-sm">Procesamiento de productos ganaderos</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="bg-white rounded-lg p-6 border border-gray-200 hover:shadow-lg transition-shadow">
                                    <div class="flex items-start space-x-4">
                                        <div class="bg-gradient-to-r from-blue-500 to-blue-600 p-3 rounded-full flex-shrink-0">
                                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-1.447-.894L15 9m0 8V9m0 0V7"></path>
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold text-gray-800 mb-2">Sector Hidrobiológico</h4>
                                            <p class="text-gray-600 text-sm">Aprovechamiento de recursos acuáticos</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="bg-white rounded-lg p-6 border border-gray-200 hover:shadow-lg transition-shadow">
                                    <div class="flex items-start space-x-4">
                                        <div class="bg-gradient-to-r from-green-600 to-green-700 p-3 rounded-full flex-shrink-0">
                                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold text-gray-800 mb-2">Sector Forestal</h4>
                                            <p class="text-gray-600 text-sm">Industrialización de recursos forestales</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Contexto Regional -->
                        <div class="bg-white rounded-lg p-6 border border-gray-200 mb-8">
                            <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                                <svg class="w-6 h-6 mr-2 text-[#db0455]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                </svg>
                                Contexto Regional y Nacional
                            </h3>
                            <p class="text-gray-700 leading-relaxed mb-4">
                                El sector agroindustrial en la <strong>Región Madre de Dios</strong> y sobre todo en el País, se ha convertido en uno de los sectores más dinámicos y estratégicos de la economía nacional, principalmente por las actividades a que este sector está orientado:
                            </p>
                            
                            <div class="space-y-3">
                                <div class="flex items-start space-x-3">
                                    <div class="bg-gradient-to-r from-[#db0455] to-[#ed145b] p-1 rounded-full mt-1 flex-shrink-0">
                                        <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <p class="text-gray-700">La manipulación, adecuación y conservación de la materia prima proveniente del campo (tanto de origen alimentario como no alimentario)</p>
                                </div>
                                <div class="flex items-start space-x-3">
                                    <div class="bg-gradient-to-r from-[#db0455] to-[#ed145b] p-1 rounded-full mt-1 flex-shrink-0">
                                        <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <p class="text-gray-700">Su procesamiento, conservación y comercialización en productos terminados</p>
                                </div>
                                <div class="flex items-start space-x-3">
                                    <div class="bg-gradient-to-r from-[#db0455] to-[#ed145b] p-1 rounded-full mt-1 flex-shrink-0">
                                        <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <p class="text-gray-700">Destinados al consumo de los hogares y empresas</p>
                                </div>
                            </div>
                        </div>

                        <!-- Marco Legal y Proyección -->
                        <div class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-lg p-6 border-l-4 border-blue-500">
                            <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                                <svg class="w-6 h-6 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                </svg>
                                Proyección hacia el Bicentenario
                            </h3>
                            <p class="text-gray-700 leading-relaxed">
                                De acuerdo a la <strong>Nueva Ley Universitaria (Ley 30220)</strong> y en función del Plan Estratégico que marca la Política de Aseguramiento de la Calidad de la Educación Superior Universitaria (Decreto Supremo N° 016-2015-MINEDU), hacia el bicentenario debemos contar con docentes fortalecidos en sus capacidades de investigación y enseñanza. Esta proyección debe manifestarse con la generación de investigación y estudios en la especialidad que le competen, donde los estudiantes y egresados serán los principales artífices de buscar el desarrollo sostenible de la comunidad madrediocense, nacional y global.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection