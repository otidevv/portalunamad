@extends('layouts.app')

@section('title', 'Campo Ocupacional - Medicina Humana - UNAMAD')

@section('content')
<div class="bg-gray-50 min-h-screen">
    <!-- Hero Section -->
    <div class="relative text-white py-20" style="background-image: url('{{ asset('img/presentacion/presentacionbackground.jpg') }}'); background-size: cover; background-position: center; background-attachment: fixed;">
        <div class="absolute inset-0 bg-gradient-to-r from-[#db0455]/80 to-[#ed145b]/70"></div>
        <div class="relative z-10 container mx-auto px-4">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4 drop-shadow-lg">Campo Ocupacional</h1>
                <p class="text-xl md:text-2xl opacity-90 drop-shadow-md">Escuela Profesional de Medicina Humana - UNAMAD</p>
            </div>
        </div>
    </div>

    <!-- Navigation Breadcrumb -->
    <div class="bg-white border-b border-gray-200">
        <div class="container mx-auto px-4 py-4">
            <nav class="flex" aria-label="Migas de pan">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="/" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-[#db0455]">
                            <svg aria-hidden="true" focusable="false" class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                            </svg>
                            Inicio
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg aria-hidden="true" focusable="false" class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2">Facultades</span>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg aria-hidden="true" focusable="false" class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2">Medicina Humana</span>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg aria-hidden="true" focusable="false" class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="ml-1 text-sm font-medium text-[#db0455] md:ml-2">Campo Ocupacional</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Main Content -->
            <div class="lg:col-span-2">
                <div class="bg-white rounded-lg shadow-lg p-8 border-t-4 border-[#db0455]">
                    <div class="flex items-start space-x-4 mb-8">
                        <div class="bg-gradient-to-r from-blue-500 to-cyan-600 p-4 rounded-full">
                            <svg aria-hidden="true" focusable="false" class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m8 0H8m8 0v2a2 2 0 01-2 2H10a2 2 0 01-2-2V6m8 0H8"></path>
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-3xl font-bold text-gray-800 mb-4">Campo Ocupacional y Ámbitos de Desempeño</h2>
                            <div class="w-20 h-1 bg-gradient-to-r from-blue-500 to-cyan-600"></div>
                        </div>
                    </div>

                    <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed">
                        <p class="text-lg mb-8">
                            El <strong>médico cirujano</strong> egresado de la UNAMAD encuentra oportunidades de desempeño en diversos campos del desarrollo regional y nacional, aplicando una formación que integra las ciencias básicas, clínicas, quirúrgicas, de salud pública, investigación científica y gestión sanitaria.
                        </p>

                        <!-- Campos de Contribución -->
                        <div class="space-y-6 mb-8">
                            <!-- Atención Integral -->
                            <div class="bg-gradient-to-r from-blue-50 to-cyan-50 rounded-lg p-6 border-l-4 border-blue-500">
                                <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                                    <svg aria-hidden="true" focusable="false" class="w-6 h-6 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                    </svg>
                                    Atención de la Salud
                                </h3>
                                <ul class="space-y-2">
                                    <li class="flex items-start space-x-2">
                                        <svg aria-hidden="true" focusable="false" class="w-4 h-4 text-blue-600 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                        <span class="text-sm"><strong>Atención integral de la salud:</strong> en establecimientos del primer, segundo y tercer nivel de atención.</span>
                                    </li>
                                    <li class="flex items-start space-x-2">
                                        <svg aria-hidden="true" focusable="false" class="w-4 h-4 text-blue-600 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                        <span class="text-sm"><strong>Promoción y prevención:</strong> promoción de estilos de vida saludables y prevención de enfermedades transmisibles y no transmisibles.</span>
                                    </li>
                                    <li class="flex items-start space-x-2">
                                        <svg aria-hidden="true" focusable="false" class="w-4 h-4 text-blue-600 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                        <span class="text-sm"><strong>Salud intercultural:</strong> fortalecimiento mediante el reconocimiento y respeto de la diversidad cultural de los pueblos amazónicos.</span>
                                    </li>
                                </ul>
                            </div>

                            <!-- Gestión y Salud Pública -->
                            <div class="bg-gradient-to-r from-cyan-50 to-sky-50 rounded-lg p-6 border-l-4 border-cyan-500">
                                <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                                    <svg aria-hidden="true" focusable="false" class="w-6 h-6 mr-2 text-cyan-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                    </svg>
                                    Gestión y Salud Pública
                                </h3>
                                <ul class="space-y-2">
                                    <li class="flex items-start space-x-2">
                                        <svg aria-hidden="true" focusable="false" class="w-4 h-4 text-cyan-600 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                        <span class="text-sm"><strong>Gestión de servicios de salud:</strong> gestión, planificación y evaluación de servicios y programas de salud.</span>
                                    </li>
                                    <li class="flex items-start space-x-2">
                                        <svg aria-hidden="true" focusable="false" class="w-4 h-4 text-cyan-600 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                        <span class="text-sm"><strong>Emergencias sanitarias:</strong> respuesta ante desastres naturales y problemas de salud pública.</span>
                                    </li>
                                    <li class="flex items-start space-x-2">
                                        <svg aria-hidden="true" focusable="false" class="w-4 h-4 text-cyan-600 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                        <span class="text-sm"><strong>Problemas de salud prioritarios:</strong> atención de enfermedades tropicales, zoonóticas y aquellas asociadas a determinantes sociales y ambientales de la Amazonía.</span>
                                    </li>
                                </ul>
                            </div>

                            <!-- Investigación Biomédica -->
                            <div class="bg-gradient-to-r from-sky-50 to-indigo-50 rounded-lg p-6 border-l-4 border-sky-500">
                                <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                                    <svg aria-hidden="true" focusable="false" class="w-6 h-6 mr-2 text-sky-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                    </svg>
                                    Investigación y Generación de Conocimiento
                                </h3>
                                <ul class="space-y-2">
                                    <li class="flex items-start space-x-2">
                                        <svg aria-hidden="true" focusable="false" class="w-4 h-4 text-sky-600 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                        <span class="text-sm"><strong>Investigación biomédica y clínica:</strong> investigación epidemiológica y en salud pública para la generación de conocimiento científico.</span>
                                    </li>
                                    <li class="flex items-start space-x-2">
                                        <svg aria-hidden="true" focusable="false" class="w-4 h-4 text-sky-600 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                        <span class="text-sm"><strong>Docencia universitaria:</strong> formación de nuevas generaciones de profesionales de la salud.</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Perfil Docente e Investigador -->
                        <div class="bg-gradient-to-r from-gray-50 to-gray-100 rounded-lg p-8 border border-gray-200 mb-8">
                            <h3 class="text-2xl font-bold text-gray-800 mb-6 text-center">Ámbitos de Docencia e Investigación</h3>
                            <ul class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <li class="bg-white rounded-lg p-6 border border-gray-200">
                                    <h4 class="font-bold text-gray-800 mb-3 flex items-center">
                                        <svg aria-hidden="true" focusable="false" class="w-5 h-5 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path></svg>
                                        Docencia
                                    </h4>
                                    <p class="text-gray-600 text-sm">Gestiona el proceso de enseñanza-aprendizaje bajo el enfoque por competencias: planifica sílabos y sesiones, aplica estrategias didácticas con TICs, evalúa y retroalimenta a los estudiantes, y desarrolla acciones de tutoría e investigación formativa.</p>
                                </li>
                                <li class="bg-white rounded-lg p-6 border border-gray-200">
                                    <h4 class="font-bold text-gray-800 mb-3 flex items-center">
                                        <svg aria-hidden="true" focusable="false" class="w-5 h-5 mr-2 text-cyan-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                                        Investigación
                                    </h4>
                                    <p class="text-gray-600 text-sm">Genera y difunde producción científica con integridad: diseña proyectos disciplinares e interdisciplinares, participa en congresos, publica en revistas indexadas nacionales e internacionales y registra o patenta productos científicos ante INDECOPI y otros organismos.</p>
                                </li>
                            </ul>
                        </div>

                        <!-- Relevancia Regional -->
                        <div class="bg-gradient-to-r from-blue-50 to-cyan-50 rounded-lg p-6 border-l-4 border-blue-500">
                            <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                                <svg aria-hidden="true" focusable="false" class="w-6 h-6 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                Relevancia en Madre de Dios
                            </h3>
                            <p class="text-gray-700 leading-relaxed">
                                La carrera responde a la necesidad de formar médicos en la región y garantizar una atención de salud oportuna, integral y de calidad. Esta necesidad se sustenta en las <strong>características geográficas</strong> de la región, la dispersión de sus comunidades, el crecimiento demográfico y la persistencia de problemas sanitarios que requieren personal médico capacitado. De esta manera, se fortalece la capacidad resolutiva del sistema regional de salud y se contribuye a mejorar los indicadores de salud, promover el bienestar de la población y apoyar el desarrollo sostenible de Madre de Dios y del país.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar: visualmente primero (order-first); en el DOM va tras el contenido para mantener la jerarquía de encabezados -->
            <div class="lg:col-span-1 order-first">
                @include('facultades.medicina-humana.partials.navigation')
            </div>
        </div>
    </div>
</div>
@endsection
