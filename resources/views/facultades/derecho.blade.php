@extends('layouts.app')

@section('title', 'Derecho y Ciencias Políticas - UNAMAD')

@section('content')
    <!-- Hero Section -->
    <div class="relative h-64 sm:h-80 lg:h-96 overflow-hidden bg-gradient-to-r from-amber-600 via-yellow-500 to-orange-500">
        <div class="absolute inset-0 bg-black/20"></div>
        <img src="{{ asset('img/presentacion/presentacionbackground.jpg') }}" 
             alt="Facultad de Derecho y Ciencias Políticas" 
             class="absolute inset-0 w-full h-full object-cover mix-blend-overlay opacity-30">
        <div class="relative h-full flex items-center justify-center px-6">
            <div class="text-center text-white max-w-4xl mx-auto">
                <div class="w-20 h-20 bg-white/10 backdrop-blur-sm rounded-full flex items-center justify-center mx-auto mb-4 border border-white/20">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16l3-3m-3 3l-3-3"></path>
                    </svg>
                </div>
                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold mb-4 drop-shadow-lg">
                    Derecho y Ciencias Políticas
                </h1>
                <p class="text-lg sm:text-xl opacity-90 max-w-2xl mx-auto leading-relaxed">
                    Formando profesionales en ciencias jurídicas y políticas para la justicia y el desarrollo social
                </p>
            </div>
        </div>
    </div>

    <!-- Breadcrumb -->
    <div class="bg-gradient-to-r from-gray-50 to-gray-100 border-b">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
            <nav class="flex items-center space-x-2 text-sm">
                <a href="/" class="text-gray-600 hover:text-amber-600 transition-colors font-medium">Inicio</a>
                <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                </svg>
                <a href="/facultades" class="text-gray-600 hover:text-amber-600 transition-colors font-medium">Facultades</a>
                <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                </svg>
                <span class="text-amber-600 font-semibold">Derecho y Ciencias Políticas</span>
            </nav>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Main Content Area -->
            <div class="lg:col-span-2">
                <!-- Presentación -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden border-t-4 border-amber-500 mb-8">
                    <div class="p-8">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-gradient-to-r from-amber-500 to-orange-500 rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16l3-3m-3 3l-3-3"></path>
                                </svg>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-800">Carrera Profesional de Derecho y Ciencias Políticas</h2>
                        </div>

                        <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed space-y-6">
                            <p>
                                La Universidad Nacional Amazónica de Madre de Dios, fue creada por ley N° 27297 de fecha 05 de julio del 2000 y la Carrera Profesional de Derecho y Ciencias Políticas se creó mediante la Ley N° 29371 de fecha 02 de junio del 2009, ley que modifica el Art. 3 de la Ley 27297 ampliando las Carreras Profesionales, entre ellas la Carrera Profesional de Derecho y Ciencias Políticas.
                            </p>
                            
                            <p>
                                La Carrera Profesional de Derecho y Ciencias Políticas de la Universidad Nacional de Madre de Dios, se complementa mediante Resolución de Asamblea Universitaria N° 003-2009-AU, de fecha 07 de diciembre de 2009, y posteriormente por Resolución de Asamblea Nacional de Rectores N° 1137-2013-ANR de fecha 05 de agosto de 2013.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Propósito y Enfoque -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden border-t-4 border-yellow-500 mb-8">
                    <div class="p-8">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-gradient-to-r from-yellow-500 to-amber-500 rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-800">Propósito y Enfoque Educativo</h2>
                        </div>

                        <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed space-y-6">
                            <p>
                                El propósito de la Universidad Nacional Amazónica de Madre de Dios es asegurar una debida sólida formación al estudiante de pregrado de derecho acorde a la globalización y al avance de la ciencia y la tecnología, como también tener un profundo conocimiento de las normas constitucionales y todo el ordenamiento jurídico de la nación frente a las normas internacionales, nacionales, regionales y locales.
                            </p>
                            
                            <p>
                                Como es de conocimiento en el País se dio la Ley N° 30220 el 9 de julio del 2014 señalando que la Universidad es una comunidad académica orientada a la investigación y a la docencia, que brinda una orientación humanista científica y tecnológica con una clara conciencia de nuestro País como realidad multicultural, adoptando que el concepto de educación como derecho fundamental y servicio público esencial. En ese sentido claro debe ser la instrucción en la carrera de derecho y ciencias políticas.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Compromiso Institucional -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden border-t-4 border-orange-500">
                    <div class="p-8">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-gradient-to-r from-orange-500 to-red-500 rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                                </svg>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-800">Compromiso con la Calidad Educativa</h2>
                        </div>

                        <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed space-y-6">
                            <p>
                                En ese entender la UNAMAD tiene que dar respuesta adecuándose a la nueva ley, y procurar su Licenciamiento conforme normas de SUNEDU, por tanto la Universidad viene a ser una pieza fundamental en formar profesionales a las necesidades de la demanda del mercado internacional, nacional y local.
                            </p>
                            
                            <p>
                                Los documentos e ideas vertidas en el presente documento se inspiran dentro de las exigencias de la nueva ley universitaria N° 30220, de SUNEDU, de la modernización del Estado Peruano, de los lineamientos de MINEDU y de los principios de la función jurisdiccional y de los sistemas alternativos de solución de conflictos. De igual manera se ha tomado en cuenta las experiencias de otras universidades preferentemente de aquellas que ya se han licenciado.
                            </p>
                            
                            <p>
                                No es el propósito comparar modelos educativos anteriores con el actual sin embargo es necesario precisar que el modelo propuesto responde a los desafíos de los cambios políticos, sociales y demográficos.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="lg:col-span-1">
                @include('facultades.derecho.partials.navigation')
            </div>
        </div>
    </div>
@endsection