@extends('layouts.app')

@section('content')
<div class="bg-gray-50 min-h-screen">
    <!-- Hero Section -->
    <div class="relative text-white py-20" style="background-image: url('{{ asset('img/presentacion/presentacionbackground.jpg') }}'); background-size: cover; background-position: center; background-attachment: fixed;">
        <div class="absolute inset-0 bg-gradient-to-r from-[#db0455]/80 to-[#ed145b]/70"></div>
        <div class="relative z-10 container mx-auto px-4">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4 drop-shadow-lg">Presentación</h1>
                <p class="text-xl md:text-2xl opacity-90 drop-shadow-md">Universidad Nacional Amazónica de Madre de Dios</p>
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
                            <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2">Universidad</span>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="ml-1 text-sm font-medium text-[#db0455] md:ml-2">Presentación</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-12">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            <!-- Content Column -->
            <div class="lg:col-span-2">
                <!-- Presentación Section -->
                <div class="bg-white rounded-lg shadow-md p-8 mb-8">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-[#db0455] rounded-lg flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                            </svg>
                        </div>
                        <h2 class="text-3xl font-bold text-gray-800">Presentación</h2>
                    </div>
                    
                    <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed space-y-4">
                        <p>La Universidad Nacional Amazónica de Madre de Dios (UNAMAD) es la primera casa de estudios y líder en la región de Madre de Dios; es una universidad pública de alto crecimiento de esta última década, nuestro impacto en las personas, en nuestra región y en el Perú es profundo, pues hemos sido desafiantes, caracterizándonos por el impulso a la innovación y el desarrollo.</p>
                        
                        <p>La investigación en la Universidad ha abierto nuevos caminos, impulsado los límites del conocimiento, hecho que ha generado un impacto en las vidas de las personas.</p>
                        
                        <p>Hoy, nuestros estudiantes y profesores trabajan conjuntamente para convertir las ideas en el impacto y en el proceso de transformar vidas y por qué no, nuestro mundo; convirtiéndonos en una comunidad académica vibrante y diversa, centrada en la enseñanza y el aprendizaje, el descubrimiento de nuevos conocimientos y el servicio a la región Madre de Dios y mucho más allá.</p>
                        
                        <p>Asumimos un nuevo reto y esperamos no defraudarlos, los invitamos a hacer un recorrido por nuestro portal a fin de que conozcan nuestros logros y sean parte de la UNAMAD.</p>
                    </div>
                </div>

                <!-- Misión, Visión y Objetivos Section -->
                <div class="bg-white rounded-lg shadow-md p-8">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-[#db0455] rounded-lg flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                            </svg>
                        </div>
                        <h2 class="text-3xl font-bold text-gray-800">Misión, Visión y Objetivos</h2>
                    </div>

                    <!-- Política Institucional -->
                    <div class="mb-8">
                        <h3 class="text-xl font-bold text-[#db0455] mb-4 uppercase tracking-wide">Política Institucional</h3>
                        <p class="text-gray-700 leading-relaxed mb-4">El compromiso de la Universidad Nacional Amazónica de Madre de Dios – UNAMAD es la formación de profesionales que sean capaces de realizar propuestas de desarrollo y generar cambios en la sociedad los cuales coadyuven al bienestar de la población, promoviendo el uso de la investigación e innovación tecnológica.</p>
                        
                        <p class="text-gray-700 leading-relaxed mb-4">La Universidad Nacional Amazónica de Madre de Dios es una comunidad académica que trabaja desde diferentes esferas como la académica con el cumplimiento de las condiciones básicas de calidad, desde la gestión administrativa, promoviendo la investigación I+d+i, la responsabilidad social o extensión universitaria y proyección social así como la esfera de la cooperación nacional e internacional; con la perspectiva de la generación de conocimiento a través de la formación profesional y de la investigación integral, humanista, científica y tecnológica, mediante el ejercicio de la docencia; y tendiente al desarrollo de la región y del país.</p>
                        
                        <p class="text-gray-700 leading-relaxed">La Universidad Nacional Amazónica de Madre de Dios posee autonomía y la ejerce de manera responsable en estricto respeto a la Constitución y el marco legal vigente.</p>
                    </div>

                    <!-- Visión -->
                    <div class="mb-8 bg-gradient-to-r from-blue-50 to-indigo-50 p-6 rounded-lg border-l-4 border-blue-500">
                        <h3 class="text-xl font-bold text-blue-700 mb-4 flex items-center">
                            <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                            </svg>
                            VISIÓN
                        </h3>
                        <p class="text-gray-800 leading-relaxed italic">"Universidad innovadora líder en investigación y emprendimiento, con excelencia académica acreditada internacionalmente, que respeta y preserva el conocimiento de los pueblos originarios amazónicos para la conservación y uso de la biodiversidad natural y cultural".</p>
                    </div>

                    <!-- Misión -->
                    <div class="bg-gradient-to-r from-green-50 to-emerald-50 p-6 rounded-lg border-l-4 border-green-500">
                        <h3 class="text-xl font-bold text-green-700 mb-4 flex items-center">
                            <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            MISIÓN
                        </h3>
                        <p class="text-gray-800 leading-relaxed italic">"Formar profesionales líderes, investigadores e innovadores con orientación humanística, científica y tecnológica, que contribuyan al desarrollo sostenible de la Amazonía y competitividad del país con identidad cultural, espíritu emprendedor y responsabilidad social".</p>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="lg:col-span-1">
                <!-- Rector Section -->
                <div class="bg-white rounded-lg shadow-lg p-8 mb-8 border-t-4 border-[#db0455]">
                    <div class="text-center">
                        <div class="relative mb-6">
                            <div class="w-48 h-48 mx-auto rounded-full overflow-hidden border-4 border-[#db0455] shadow-xl">
                                <img src="{{ asset('img/presentacion/rector.jpeg') }}" alt="Dr. Joab Maquera Ramírez" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                            </div>
                            <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 bg-[#db0455] text-white px-4 py-1 rounded-full text-xs font-semibold shadow-lg">
                                RECTOR
                            </div>
                        </div>
                        
                        <div class="space-y-3">
                            <h3 class="text-2xl font-bold text-gray-800 mb-2">Dr. Joab Maquera Ramírez</h3>
                            <div class="inline-block bg-gray-100 px-3 py-1 rounded-full text-sm text-gray-600 font-medium">
                                Rector (E)
                            </div>
                            
                            <div class="border-t border-gray-200 pt-4 mt-4">
                                <p class="text-sm text-gray-700 font-medium mb-2">Universidad Nacional Amazónica de Madre de Dios</p>
                                
                                <div class="bg-gray-50 rounded-lg p-4 mt-4">
                                    <div class="flex items-center justify-center mb-2">
                                        <svg class="w-4 h-4 mr-2 text-[#db0455]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 012 2z"/>
                                        </svg>
                                        <a href="mailto:jmaquera@unamad.edu.pe" class="text-sm text-[#db0455] hover:text-[#ed145b] transition-colors font-medium">
                                            jmaquera@unamad.edu.pe
                                        </a>
                                    </div>
                                </div>
                                
                                <p class="text-xs text-gray-500 italic mt-4 leading-relaxed">
                                    "Líder comprometido con la excelencia académica, la investigación científica y el desarrollo sostenible de la región amazónica de Madre de Dios."
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Enlaces Relacionados -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Enlaces Relacionados</h3>
                    <div class="space-y-3">
                        <a href="#" class="block p-3 bg-gray-50 rounded-lg hover:bg-[#db0455] hover:text-white transition-colors duration-300 group">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-3 text-[#db0455] group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                </svg>
                                <span class="font-medium">Historia</span>
                            </div>
                        </a>
                        <a href="#" class="block p-3 bg-gray-50 rounded-lg hover:bg-[#db0455] hover:text-white transition-colors duration-300 group">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-3 text-[#db0455] group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                                <span class="font-medium">Autoridades</span>
                            </div>
                        </a>
                        <a href="#" class="block p-3 bg-gray-50 rounded-lg hover:bg-[#db0455] hover:text-white transition-colors duration-300 group">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-3 text-[#db0455] group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2H9z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5a2 2 0 012 2v6a2 2 0 01-2 2H9a2 2 0 01-2-2V7a2 2 0 012-2h4z"></path>
                                </svg>
                                <span class="font-medium">Estatuto</span>
                            </div>
                        </a>
                        <a href="#" class="block p-3 bg-gray-50 rounded-lg hover:bg-[#db0455] hover:text-white transition-colors duration-300 group">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-3 text-[#db0455] group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                </svg>
                                <span class="font-medium">Plan Estratégico</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection