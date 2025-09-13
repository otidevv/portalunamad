@extends('layouts.app')

@section('title', 'Contabilidad y Finanzas - UNAMAD')

@section('content')
    <!-- Hero Section -->
    <div class="relative h-64 sm:h-80 lg:h-96 overflow-hidden bg-gradient-to-r from-slate-600 via-gray-500 to-zinc-600">
        <div class="absolute inset-0 bg-black/20"></div>
        <img src="{{ asset('img/presentacion/presentacionbackground.jpg') }}" 
             alt="Facultad de Contabilidad y Finanzas" 
             class="absolute inset-0 w-full h-full object-cover mix-blend-overlay opacity-30">
        <div class="relative h-full flex items-center justify-center px-6">
            <div class="text-center text-white max-w-4xl mx-auto">
                <div class="w-20 h-20 bg-white/10 backdrop-blur-sm rounded-full flex items-center justify-center mx-auto mb-4 border border-white/20">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold mb-4 drop-shadow-lg">
                    Contabilidad y Finanzas
                </h1>
                <p class="text-lg sm:text-xl opacity-90 max-w-2xl mx-auto leading-relaxed">
                    Formando profesionales íntegros en ciencias contables y financieras
                </p>
            </div>
        </div>
    </div>

    <!-- Breadcrumb -->
    <div class="bg-gradient-to-r from-gray-50 to-gray-100 border-b">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
            <nav class="flex items-center space-x-2 text-sm">
                <a href="/" class="text-gray-600 hover:text-slate-600 transition-colors font-medium">Inicio</a>
                <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                </svg>
                <a href="/facultades" class="text-gray-600 hover:text-slate-600 transition-colors font-medium">Facultades</a>
                <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                </svg>
                <span class="text-slate-600 font-semibold">Contabilidad y Finanzas</span>
            </nav>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Main Content Area -->
            <div class="lg:col-span-2">
                <!-- Presentación -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden border-t-4 border-slate-500 mb-8">
                    <div class="p-8">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-gradient-to-r from-slate-500 to-gray-500 rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-800">Carrera Profesional de Contabilidad y Finanzas</h2>
                        </div>

                        <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed space-y-6">
                            <p>
                                La Universidad Nacional Amazónica de Madre de Dios, asume a inicios de este nuevo milenio el gran reto de fortalecer la preparación de los futuros profesionales de la Carrera Profesional de Contabilidad y Finanzas, mediante el desarrollo del currículo acorde con los avances de las técnicas financieras, aplicando nuevas formas contables y preparación en los niveles que plantea el proceso financiero para alcanzar una educación contable de calidad en la Región de Madre de Dios.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Mecanismo Institucional -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden border-t-4 border-gray-500 mb-8">
                    <div class="p-8">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-gradient-to-r from-gray-500 to-zinc-500 rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                </svg>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-800">Entidad Educativa Fundamental</h2>
                        </div>

                        <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed space-y-6">
                            <p>
                                Para tal índole la Universidad Nacional Amazónica de Madre de Dios se constituye como entidad educativa fundamental del mecanismo económico mediante el cual se cristalizará los objetivos y lineamientos de la política de la Institución.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Proyecto Curricular -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden border-t-4 border-zinc-500 mb-8">
                    <div class="p-8">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-gradient-to-r from-zinc-500 to-slate-600 rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                </svg>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-800">Proyecto Curricular y Marco Normativo</h2>
                        </div>

                        <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed space-y-6">
                            <p>
                                El Proyecto de la carrera de Contabilidad y Finanzas está cimentado en leyes contables de los últimos tiempos, cuenta con ejes transversales acorde a lo que en los últimos años está promoviendo el Gobierno y la Región en función al área contable y económica que la Superintendencia Nacional de Educación Superior Universitaria (SUNEDU), requiere sobre la preparación profesional por competencias y la vinculación de la contabilidad con la economía.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Formación Integral -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden border-t-4 border-slate-600">
                    <div class="p-8">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-gradient-to-r from-slate-600 to-gray-600 rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                                </svg>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-800">Profesional Íntegro de Calidad</h2>
                        </div>

                        <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed space-y-6">
                            <p>
                                De igual manera se ha tomado en consideración los aspectos positivos de las ciencias financieras en el horizonte contable-económico de las experiencias universitarias que tienen vigencia preponderante a nivel nacional e internacional en el campo de la Contabilidad.
                            </p>
                            
                            <p>
                                Cada uno de los criterios establecidos en este proyecto luego de una ardua investigación se materializó con el objetivo de contribuir a formar un profesional Íntegro de Calidad.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="lg:col-span-1">
                @include('facultades.contabilidad.partials.navigation')
            </div>
        </div>
    </div>
@endsection