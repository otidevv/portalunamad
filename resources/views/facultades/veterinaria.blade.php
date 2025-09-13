@extends('layouts.app')

@section('content')
<div class="bg-gray-50 min-h-screen">
    <!-- Hero Section -->
    <div class="relative text-white py-20" style="background-image: url('{{ asset('img/presentacion/presentacionbackground.jpg') }}'); background-size: cover; background-position: center; background-attachment: fixed;">
        <div class="absolute inset-0 bg-gradient-to-r from-[#db0455]/80 to-[#ed145b]/70"></div>
        <div class="relative z-10 container mx-auto px-4">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4 drop-shadow-lg">Medicina Veterinaria - Zootecnia</h1>
                <p class="text-xl md:text-2xl opacity-90 drop-shadow-md">UNAMAD</p>
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
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="ml-1 text-sm font-medium text-[#db0455] md:ml-2">Medicina Veterinaria</span>
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
                @include('facultades.veterinaria.partials.navigation')
            </div>

            <!-- Main Content -->
            <div class="lg:col-span-2">
                <div class="bg-white rounded-lg shadow-lg p-8 border-t-4 border-[#db0455]">
                    <div class="flex items-start space-x-4 mb-8">
                        <div class="bg-gradient-to-r from-emerald-500 to-teal-600 p-4 rounded-full">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-3xl font-bold text-gray-800 mb-4">Medicina Veterinaria - Zootecnia</h2>
                            <div class="w-20 h-1 bg-gradient-to-r from-emerald-500 to-teal-600"></div>
                        </div>
                    </div>

                    <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed">
                        <p class="text-lg mb-8">
                            La Carrera Profesional de <strong>Medicina Veterinaria - Zootecnia</strong> en el marco de su mejora continua de la calidad, y de acuerdo a las nuevas directivas de la Nueva Ley N˚ 30220 y el Estatuto de la UNAMAD, busca formar Médicos Veterinarios Zootecnistas de excelencia.
                        </p>

                        <!-- Formación Profesional -->
                        <div class="bg-gradient-to-r from-emerald-50 to-teal-50 rounded-lg p-6 border-l-4 border-emerald-500 mb-8">
                            <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                                <svg class="w-6 h-6 mr-2 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                </svg>
                                Proceso de Formación Integral
                            </h3>
                            <p class="text-gray-700 leading-relaxed mb-4">
                                Mediante un proceso de <strong>enseñanza-aprendizaje de calidad</strong> y el desarrollo de la investigación científica, programas de extensión universitaria y proyección social, destacando el papel:
                            </p>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <div class="text-center p-3">
                                    <div class="w-12 h-12 bg-emerald-500 rounded-full flex items-center justify-center mx-auto mb-2">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                        </svg>
                                    </div>
                                    <h4 class="font-semibold text-gray-800 text-sm">Salud</h4>
                                </div>
                                <div class="text-center p-3">
                                    <div class="w-12 h-12 bg-teal-500 rounded-full flex items-center justify-center mx-auto mb-2">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                                        </svg>
                                    </div>
                                    <h4 class="font-semibold text-gray-800 text-sm">Económico</h4>
                                </div>
                                <div class="text-center p-3">
                                    <div class="w-12 h-12 bg-emerald-600 rounded-full flex items-center justify-center mx-auto mb-2">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                        </svg>
                                    </div>
                                    <h4 class="font-semibold text-gray-800 text-sm">Social</h4>
                                </div>
                            </div>
                        </div>

                        <!-- Perfil Profesional Internacional -->
                        <div class="bg-gradient-to-r from-blue-50 to-cyan-50 rounded-lg p-6 border-l-4 border-blue-500 mb-8">
                            <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                                <svg class="w-6 h-6 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Perfil Profesional COPEVET
                            </h3>
                            <p class="text-gray-700 leading-relaxed">
                                El <strong>Consejo Panamericano de Educación de Ciencias Veterinarias (COPEVET)</strong> define el perfil profesional del Médico Veterinario para América Latina como un <em>"profesional que en función del mejoramiento de la calidad de vida y del desarrollo humano sustentable, tenga un espíritu ético, científico y humanístico"</em> capaz de resolver problemas sociocuturales relacionados con las especies animales y su relación con el ser humano.
                            </p>
                        </div>

                        <!-- Competencias Modernas -->
                        <div class="bg-gradient-to-r from-purple-50 to-indigo-50 rounded-lg p-6 border-l-4 border-purple-500 mb-8">
                            <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                                <svg class="w-6 h-6 mr-2 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                                </svg>
                                Nuevas Competencias Veterinarias - Visión 2030
                            </h3>
                            <p class="text-gray-700 leading-relaxed mb-4">
                                Basado en las conclusiones de la <strong>OIE (Organización Mundial de Sanidad Animal)</strong> y el Perfil del Veterinario en Latinoamérica, se incluyen nuevos conceptos en los programas de formación:
                            </p>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
                                <div class="space-y-2">
                                    <div class="flex items-center space-x-2">
                                        <div class="w-2 h-2 bg-purple-500 rounded-full"></div>
                                        <span class="text-gray-700">Sanidad animal y epidemiología veterinaria</span>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <div class="w-2 h-2 bg-purple-500 rounded-full"></div>
                                        <span class="text-gray-700">Salud pública (zoonosis, calentamiento global)</span>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <div class="w-2 h-2 bg-purple-500 rounded-full"></div>
                                        <span class="text-gray-700">Inocuidad alimentaria y trazabilidad</span>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <div class="w-2 h-2 bg-purple-500 rounded-full"></div>
                                        <span class="text-gray-700">Producción animal y economía</span>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <div class="w-2 h-2 bg-purple-500 rounded-full"></div>
                                        <span class="text-gray-700">Medicina en animales de compañía</span>
                                    </div>
                                </div>
                                <div class="space-y-2">
                                    <div class="flex items-center space-x-2">
                                        <div class="w-2 h-2 bg-indigo-500 rounded-full"></div>
                                        <span class="text-gray-700">Animales silvestres y acuáticos</span>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <div class="w-2 h-2 bg-indigo-500 rounded-full"></div>
                                        <span class="text-gray-700">Deportes y entrenamiento animal</span>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <div class="w-2 h-2 bg-indigo-500 rounded-full"></div>
                                        <span class="text-gray-700">Bienestar animal y biodiversidad</span>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <div class="w-2 h-2 bg-indigo-500 rounded-full"></div>
                                        <span class="text-gray-700">Normas sanitarias internacionales</span>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <div class="w-2 h-2 bg-indigo-500 rounded-full"></div>
                                        <span class="text-gray-700">Nuevas tecnologías informáticas (TICS)</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Contexto Nacional -->
                        <div class="bg-gradient-to-r from-orange-50 to-red-50 rounded-lg p-6 border-l-4 border-orange-500 mb-8">
                            <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                                <svg class="w-6 h-6 mr-2 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                </svg>
                                Contexto Nacional y Regional
                            </h3>
                            <p class="text-gray-700 leading-relaxed mb-4">
                                En el Perú existen <strong>19 universidades</strong> que forman Médicos Veterinarios y/o Médicos Veterinarios Zootecnistas:
                            </p>
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-center">
                                <div class="bg-white p-3 rounded-lg">
                                    <div class="text-2xl font-bold text-orange-600">11</div>
                                    <div class="text-xs text-gray-600">Públicas</div>
                                </div>
                                <div class="bg-white p-3 rounded-lg">
                                    <div class="text-2xl font-bold text-orange-600">8</div>
                                    <div class="text-xs text-gray-600">Privadas</div>
                                </div>
                                <div class="bg-white p-3 rounded-lg">
                                    <div class="text-2xl font-bold text-orange-600">13</div>
                                    <div class="text-xs text-gray-600">En provincias</div>
                                </div>
                                <div class="bg-white p-3 rounded-lg">
                                    <div class="text-2xl font-bold text-orange-600">6</div>
                                    <div class="text-xs text-gray-600">En Lima</div>
                                </div>
                            </div>
                        </div>

                        <!-- Propuesta Única UNAMAD -->
                        <div class="bg-gradient-to-r from-[#db0455]/5 to-[#ed145b]/5 rounded-lg p-6 border-l-4 border-[#db0455]">
                            <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                                <svg class="w-6 h-6 mr-2 text-[#db0455]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                                </svg>
                                Propuesta Pionera en Madre de Dios
                            </h3>
                            <p class="text-gray-700 leading-relaxed">
                                La carrera profesional de <strong>Medicina Veterinaria - Zootecnia</strong> es una moderna concepción que conjuga componentes cognitivos, actitudinales, procedimentales y psicomotrices multidisciplinarios. <strong>En la región de Madre de Dios ninguna universidad responde a esta denominación</strong>, destacando con esta propuesta la Universidad Nacional Amazónica de Madre de Dios, respondiendo de esta manera a las necesidades generales y demanda social del país, especialmente de esta región amazónica.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection