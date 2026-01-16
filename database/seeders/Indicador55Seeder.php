<?php

namespace Database\Seeders;

use App\Models\Indicador55Variable;
use Illuminate\Database\Seeder;

class Indicador55Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $variables = [
            // MV1 - Misión y Visión
            [
                'codigo' => 'mv1',
                'titulo' => 'Misión y Visión',
                'titulo_completo' => 'MV1: Misión y Visión',
                'descripcion' => 'Declaración institucional de misión, visión y valores de UNAMAD',
                'contenido' => '<div class="mb-8">
                    <h3 class="text-xl font-semibold text-blue-800 mb-4">MISIÓN</h3>
                    <p class="text-gray-700 mb-6 text-lg leading-relaxed">
                        Somos una Universidad Pública de la Amazonía sur del Perú que brinda formación académica integral,
                        humanística, científica, tecnológica, con calidad y responsabilidad social; desarrollamos investigación
                        e innovación, contribuyendo a la conservación del ambiente y al desarrollo sostenible.
                    </p>
                </div>
                <div class="mb-8">
                    <h3 class="text-xl font-semibold text-indigo-800 mb-4">VISIÓN</h3>
                    <p class="text-gray-700 mb-6 text-lg leading-relaxed">
                        Al 2030 ser una universidad licenciada, líder en formación profesional competente con valores;
                        reconocida por la calidad de investigación e innovación, con responsabilidad social y ambiental,
                        que contribuye al desarrollo sostenible de la región amazónica y el país.
                    </p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                    <div class="bg-blue-50 rounded-lg p-4 border border-blue-200">
                        <h4 class="font-semibold text-blue-800 mb-2">Excelencia Académica</h4>
                        <p class="text-sm text-gray-600">Formación integral de profesionales competentes</p>
                    </div>
                    <div class="bg-indigo-50 rounded-lg p-4 border border-indigo-200">
                        <h4 class="font-semibold text-indigo-800 mb-2">Investigación</h4>
                        <p class="text-sm text-gray-600">Generación de conocimiento e innovación</p>
                    </div>
                    <div class="bg-green-50 rounded-lg p-4 border border-green-200">
                        <h4 class="font-semibold text-green-800 mb-2">Responsabilidad Ambiental</h4>
                        <p class="text-sm text-gray-600">Compromiso con el desarrollo sostenible amazónico</p>
                    </div>
                </div>',
                'documentos' => json_encode([
                    [
                        'titulo' => 'Resolución N° 001-2024-UNAMAD-AU',
                        'descripcion' => 'Aprobación de Misión y Visión institucional',
                        'url' => 'https://www.gob.pe/institucion/unamad/normas-legales/5144717-001-2024-unamad-au',
                        'tipo' => 'resolucion'
                    ]
                ]),
                'icono' => 'M12 2L13.09 8.26L22 9L17 14L18.18 22L12 19L5.82 22L7 14L2 9L10.91 8.26L12 2Z',
                'gradiente_from' => 'blue-600',
                'gradiente_to' => 'indigo-600',
                'bg_light' => 'blue-50',
                'color_primario' => '#2563EB',
                'color_secundario' => '#4F46E5',
                'orden' => 1,
                'activo' => true,
            ],

            // MV2 - Reglamento de Admisión
            [
                'codigo' => 'mv2',
                'titulo' => 'Reglamento y Calendario de Admisión',
                'titulo_completo' => 'MV2: Reglamento y Calendario de Admisión',
                'descripcion' => 'Normativas y cronogramas del proceso de admisión universitaria',
                'contenido' => '<p class="text-gray-700 mb-6">
                    La Universidad Nacional Amazónica de Madre de Dios presenta los reglamentos y calendarios
                    de admisión vigentes, organizados por año académico para facilitar el acceso a información
                    sobre los procesos de admisión universitaria.
                </p>',
                'documentos' => json_encode([
                    // 2024
                    ['anio' => '2024', 'titulo' => 'Reglamento de Admisión 2024', 'url' => 'https://sinc.unamad.edu.pe:8000/media/pdf/REGLAMENTO_DE_ADMISION_2024.pdf', 'tipo' => 'pdf'],
                    ['anio' => '2024', 'titulo' => 'Calendario de Admisión 2024', 'url' => 'https://sinc.unamad.edu.pe:8000/media/pdf/CALENDARIO_DE_ADMISION_2024.pdf', 'tipo' => 'pdf'],
                    ['anio' => '2024', 'titulo' => 'Resolución 309-2023-UNAMAD-CU', 'url' => 'https://www.gob.pe/institucion/unamad/normas-legales/4713119-309-2023-unamad-cu', 'tipo' => 'resolucion'],
                    // 2023
                    ['anio' => '2023', 'titulo' => 'Reglamento de Admisión 2023', 'url' => 'https://sinc.unamad.edu.pe:8000/media/pdf/Reglamento_de_admision_2023_vGvDZEK.pdf', 'tipo' => 'pdf'],
                    ['anio' => '2023', 'titulo' => 'Calendario de Admisión 2023', 'url' => 'https://sinc.unamad.edu.pe:8000/media/pdf/CALENDARIO_2023.pdf', 'tipo' => 'pdf'],
                    ['anio' => '2023', 'titulo' => 'Resolución 330-2022-UNAMAD-CU', 'url' => 'https://www.gob.pe/institucion/unamad/normas-legales/3488626-330-2022-unamad-cu', 'tipo' => 'resolucion'],
                    // 2022
                    ['anio' => '2022', 'titulo' => 'Reglamento de Admisión 2022', 'url' => 'https://sinc.unamad.edu.pe:8000/media/pdf/REGLAMENTO_ADMISION_2022.pdf', 'tipo' => 'pdf'],
                    ['anio' => '2022', 'titulo' => 'Calendario de Admisión 2022', 'url' => 'https://sinc.unamad.edu.pe:8000/media/pdf/CALENDARIO_ADMISION_2022.pdf', 'tipo' => 'pdf'],
                    ['anio' => '2022', 'titulo' => 'Resolución 327-2021-UNAMAD-CU', 'url' => 'https://www.gob.pe/institucion/unamad/normas-legales/2435789-327-2021-unamad-cu', 'tipo' => 'resolucion'],
                    // 2021
                    ['anio' => '2021', 'titulo' => 'Reglamento de Admisión 2021', 'url' => 'https://sinc.unamad.edu.pe:8000/media/pdf/REGLAMENTO_ADMISION_2021.pdf', 'tipo' => 'pdf'],
                    ['anio' => '2021', 'titulo' => 'Calendario de Admisión 2021', 'url' => 'https://sinc.unamad.edu.pe:8000/media/pdf/CALENDARIO_2021.pdf', 'tipo' => 'pdf'],
                    ['anio' => '2021', 'titulo' => 'Resolución 419-2020-UNAMAD-CU', 'url' => 'https://www.gob.pe/institucion/unamad/normas-legales/1427523-419-2020-unamad-cu', 'tipo' => 'resolucion'],
                    // 2020
                    ['anio' => '2020', 'titulo' => 'Reglamento de Admisión 2020', 'url' => 'https://sinc.unamad.edu.pe:8000/media/pdf/REGLAMENTO_ADMISION_2020.pdf', 'tipo' => 'pdf'],
                    ['anio' => '2020', 'titulo' => 'Calendario de Admisión 2020', 'url' => 'https://sinc.unamad.edu.pe:8000/media/pdf/CALENDARIO_2020.pdf', 'tipo' => 'pdf'],
                    ['anio' => '2020', 'titulo' => 'Resolución 300-2019-UNAMAD-CU', 'url' => 'https://www.gob.pe/institucion/unamad/normas-legales/301890-300-2019-unamad-cu', 'tipo' => 'resolucion'],
                    // 2019
                    ['anio' => '2019', 'titulo' => 'Reglamento de Admisión 2019', 'url' => 'https://sinc.unamad.edu.pe:8000/media/pdf/REGLAMENTO_ADMISION_2019.pdf', 'tipo' => 'pdf'],
                    ['anio' => '2019', 'titulo' => 'Calendario de Admisión 2019', 'url' => 'https://sinc.unamad.edu.pe:8000/media/pdf/CALENDARIO_2019.pdf', 'tipo' => 'pdf'],
                ]),
                'icono' => 'M19,3H5C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3M19,19H5V5H19V19M17,12H7V10H17V12M17,16H7V14H17V16M17,8H7V6H17V8Z',
                'gradiente_from' => 'cyan-600',
                'gradiente_to' => 'blue-600',
                'bg_light' => 'cyan-50',
                'color_primario' => '#0891B2',
                'color_secundario' => '#2563EB',
                'orden' => 2,
                'activo' => true,
            ],

            // MV3 - Temarios de Examen
            [
                'codigo' => 'mv3',
                'titulo' => 'Temarios de Examen de Admisión',
                'titulo_completo' => 'MV3: Temarios de Examen de Admisión',
                'descripcion' => 'Contenidos temáticos para los exámenes de admisión por modalidad',
                'contenido' => '<p class="text-gray-700 mb-6">
                    La Universidad Nacional Amazónica de Madre de Dios presenta los temarios oficiales para los
                    exámenes de admisión, organizados por modalidad y año académico.
                </p>',
                'documentos' => json_encode([
                    ['anio' => '2024', 'titulo' => 'Temario Ordinario 2024-II', 'url' => 'https://sinc.unamad.edu.pe:8000/media/pdf/TEMARIO_ORDINARIO_2024-II.pdf', 'tipo' => 'pdf'],
                    ['anio' => '2024', 'titulo' => 'Temario Extraordinario 2024-II', 'url' => 'https://sinc.unamad.edu.pe:8000/media/pdf/TEMARIO_EXTRAORDINARIO_2024-II.pdf', 'tipo' => 'pdf'],
                    ['anio' => '2024', 'titulo' => 'Temario Primera Oportunidad 2024-II', 'url' => 'https://sinc.unamad.edu.pe:8000/media/pdf/TEMARIO_PRIMERA_OPORTUNIDAD_2024-II.pdf', 'tipo' => 'pdf'],
                    ['anio' => '2024', 'titulo' => 'Temario CEPRE 2024-II', 'url' => 'https://sinc.unamad.edu.pe:8000/media/pdf/TEMARIO_CEPRE_2024-II.pdf', 'tipo' => 'pdf'],
                    ['anio' => '2023', 'titulo' => 'Temario Ordinario 2023', 'url' => 'https://sinc.unamad.edu.pe:8000/media/pdf/TEMARIO_ORDINARIO_2023.pdf', 'tipo' => 'pdf'],
                    ['anio' => '2023', 'titulo' => 'Temario Extraordinario 2023', 'url' => 'https://sinc.unamad.edu.pe:8000/media/pdf/TEMARIO_EXTRAORDINARIO_2023.pdf', 'tipo' => 'pdf'],
                    ['anio' => '2022', 'titulo' => 'Temario General 2022', 'url' => 'https://sinc.unamad.edu.pe:8000/media/pdf/TEMARIO_2022.pdf', 'tipo' => 'pdf'],
                    ['anio' => '2021', 'titulo' => 'Temario General 2021', 'url' => 'https://sinc.unamad.edu.pe:8000/media/pdf/TEMARIO_2021.pdf', 'tipo' => 'pdf'],
                    ['anio' => '2020', 'titulo' => 'Temario General 2020', 'url' => 'https://sinc.unamad.edu.pe:8000/media/pdf/TEMARIO_2020.pdf', 'tipo' => 'pdf'],
                    ['anio' => '2019', 'titulo' => 'Temario General 2019', 'url' => 'https://sinc.unamad.edu.pe:8000/media/pdf/TEMARIO_2019.pdf', 'tipo' => 'pdf'],
                ]),
                'icono' => 'M17.5,4.5C19.43,4.5 21,6.07 21,8C21,9.93 19.43,11.5 17.5,11.5C15.57,11.5 14,9.93 14,8C14,6.07 15.57,4.5 17.5,4.5M17.5,6.5A1.5,1.5 0 0,0 16,8A1.5,1.5 0 0,0 17.5,9.5A1.5,1.5 0 0,0 19,8A1.5,1.5 0 0,0 17.5,6.5M6.5,6.5A1.5,1.5 0 0,0 5,8A1.5,1.5 0 0,0 6.5,9.5A1.5,1.5 0 0,0 8,8A1.5,1.5 0 0,0 6.5,6.5M6.5,4.5C8.43,4.5 10,6.07 10,8C10,9.93 8.43,11.5 6.5,11.5C4.57,11.5 3,9.93 3,8C3,6.07 4.57,4.5 6.5,4.5M12,13C8.69,13 2,14.67 2,18V20H22V18C22,14.67 15.31,13 12,13Z',
                'gradiente_from' => 'emerald-600',
                'gradiente_to' => 'teal-600',
                'bg_light' => 'emerald-50',
                'color_primario' => '#059669',
                'color_secundario' => '#0D9488',
                'orden' => 3,
                'activo' => true,
            ],

            // MV4 - Postulantes e Ingresantes
            [
                'codigo' => 'mv4',
                'titulo' => 'Postulantes e Ingresantes',
                'titulo_completo' => 'MV4: Postulantes e Ingresantes',
                'descripcion' => 'Número de postulantes e ingresantes por año y modalidad de ingreso',
                'contenido' => '<p class="text-gray-700 mb-6">
                    La Universidad Nacional Amazónica de Madre de Dios presenta las estadísticas de postulantes e ingresantes
                    por año académico y modalidad de ingreso, garantizando la transparencia en los procesos de admisión.
                </p>',
                'documentos' => json_encode([
                    ['anio' => '2024', 'titulo' => 'Postulantes e Ingresantes 2024', 'url' => 'https://sinc.unamad.edu.pe:8000/media/pdf/NUMERO_DE_POSTULANTES_E_INGRESANTES_2024.pdf', 'tipo' => 'pdf'],
                    ['anio' => '2023', 'titulo' => 'Postulantes e Ingresantes 2023', 'url' => 'https://sinc.unamad.edu.pe:8000/media/pdf/NUMERO_DE_POSTULANTES_E_INGRESANTES_2023.pdf', 'tipo' => 'pdf'],
                    ['anio' => '2022', 'titulo' => 'Postulantes e Ingresantes 2022', 'url' => 'https://sinc.unamad.edu.pe:8000/media/pdf/NUMERO_DE_POSTULANTES_E_INGRESANTES_2022.pdf', 'tipo' => 'pdf'],
                    ['anio' => '2021', 'titulo' => 'Postulantes e Ingresantes 2021', 'url' => 'https://sinc.unamad.edu.pe:8000/media/pdf/NUMERO_DE_POSTULANTES_E_INGRESANTES_2021.pdf', 'tipo' => 'pdf'],
                    ['anio' => '2020', 'titulo' => 'Postulantes e Ingresantes 2020', 'url' => 'https://sinc.unamad.edu.pe:8000/media/pdf/NUMERO_DE_POSTULANTES_E_INGRESANTES_2020.pdf', 'tipo' => 'pdf'],
                    ['anio' => '2019', 'titulo' => 'Postulantes e Ingresantes 2019', 'url' => 'https://sinc.unamad.edu.pe:8000/media/pdf/NUMERO_DE_POSTULANTES_E_INGRESANTES_2019.pdf', 'tipo' => 'pdf'],
                ]),
                'icono' => 'M16,13C15.71,13 15.38,13 15.03,13.05C16.19,13.89 17,15 17,16.5V19H23V16.5C23,14.17 18.33,13 16,13M8,13C5.67,13 1,14.17 1,16.5V19H15V16.5C15,14.17 10.33,13 8,13M8,11A3,3 0 0,0 11,8A3,3 0 0,0 8,5A3,3 0 0,0 5,8A3,3 0 0,0 8,11M16,11A3,3 0 0,0 19,8A3,3 0 0,0 16,5A3,3 0 0,0 13,8A3,3 0 0,0 16,11Z',
                'gradiente_from' => 'amber-600',
                'gradiente_to' => 'orange-600',
                'bg_light' => 'amber-50',
                'color_primario' => '#D97706',
                'color_secundario' => '#EA580C',
                'orden' => 4,
                'activo' => true,
            ],

            // MV5 - Concursos Docentes
            [
                'codigo' => 'mv5',
                'titulo' => 'Concursos Públicos para Docentes',
                'titulo_completo' => 'MV5: Concursos Públicos para Docentes',
                'descripcion' => 'Convocatorias y resultados de concursos públicos para plazas docentes',
                'contenido' => '<p class="text-gray-700 mb-6">
                    La Universidad Nacional Amazónica de Madre de Dios presenta las convocatorias y resultados de los
                    concursos públicos para plazas docentes ordinarias y contratadas, garantizando la transparencia
                    en los procesos de selección de personal académico.
                </p>',
                'documentos' => json_encode([
                    ['anio' => '2024', 'titulo' => 'Concurso Docentes Ordinarios 2024', 'url' => 'https://sinc.unamad.edu.pe:8000/media/pdf/CONCURSO_DOCENTES_ORDINARIOS_2024.pdf', 'tipo' => 'pdf'],
                    ['anio' => '2024', 'titulo' => 'Concurso Docentes Contratados 2024', 'url' => 'https://sinc.unamad.edu.pe:8000/media/pdf/CONCURSO_DOCENTES_CONTRATADOS_2024.pdf', 'tipo' => 'pdf'],
                    ['anio' => '2023', 'titulo' => 'Concurso Docentes Ordinarios 2023', 'url' => 'https://sinc.unamad.edu.pe:8000/media/pdf/CONCURSO_DOCENTES_ORDINARIOS_2023.pdf', 'tipo' => 'pdf'],
                    ['anio' => '2023', 'titulo' => 'Concurso Docentes Contratados 2023', 'url' => 'https://sinc.unamad.edu.pe:8000/media/pdf/CONCURSO_DOCENTES_CONTRATADOS_2023.pdf', 'tipo' => 'pdf'],
                    ['anio' => '2022', 'titulo' => 'Concurso Docentes 2022', 'url' => 'https://sinc.unamad.edu.pe:8000/media/pdf/CONCURSO_DOCENTES_2022.pdf', 'tipo' => 'pdf'],
                    ['anio' => '2021', 'titulo' => 'Concurso Docentes 2021', 'url' => 'https://sinc.unamad.edu.pe:8000/media/pdf/CONCURSO_DOCENTES_2021.pdf', 'tipo' => 'pdf'],
                    ['anio' => '2020', 'titulo' => 'Concurso Docentes 2020', 'url' => 'https://sinc.unamad.edu.pe:8000/media/pdf/CONCURSO_DOCENTES_2020.pdf', 'tipo' => 'pdf'],
                    ['anio' => '2019', 'titulo' => 'Concurso Docentes 2019', 'url' => 'https://sinc.unamad.edu.pe:8000/media/pdf/CONCURSO_DOCENTES_2019.pdf', 'tipo' => 'pdf'],
                ]),
                'icono' => 'M12,4A4,4 0 0,1 16,8A4,4 0 0,1 12,12A4,4 0 0,1 8,8A4,4 0 0,1 12,4M12,14C16.42,14 20,15.79 20,18V20H4V18C4,15.79 7.58,14 12,14Z',
                'gradiente_from' => 'rose-600',
                'gradiente_to' => 'pink-600',
                'bg_light' => 'rose-50',
                'color_primario' => '#E11D48',
                'color_secundario' => '#DB2777',
                'orden' => 5,
                'activo' => true,
            ],

            // MV6 - Estudiantes por Facultades
            [
                'codigo' => 'mv6',
                'titulo' => 'Número de Estudiantes por Facultades',
                'titulo_completo' => 'MV6: Número de Estudiantes por Facultades',
                'descripcion' => 'Estadísticas de matrícula estudiantil por facultades y programas de estudio',
                'contenido' => '<p class="text-gray-700 mb-6">
                    La Universidad Nacional Amazónica de Madre de Dios presenta de manera transparente las estadísticas
                    de matrícula estudiantil por facultades y programas de estudio, organizadas por períodos académicos.
                </p>',
                'documentos' => json_encode([
                    ['anio' => '2024', 'titulo' => '2024 (Período I)', 'descripcion' => 'Estadísticas de matrícula - Primer semestre', 'url' => 'https://sinc.unamad.edu.pe:8000/media/pdf/NUMERO_DE_ESTUDIANTES_POR_FACULTADES_Y_PROGRAMAS_DE_ESTUDIO_2024-1.pdf', 'tipo' => 'pdf'],
                    ['anio' => '2023', 'titulo' => '2023 (Períodos I y II)', 'descripcion' => 'Estadísticas de matrícula - Ambos semestres', 'url' => 'https://sinc.unamad.edu.pe:8000/media/pdf/NUMERO_DE_ESTUDIANTES_POR_FACULTADES_Y_PROGRAMAS_DE_ESTUDIO_2023.pdf', 'tipo' => 'pdf'],
                    ['anio' => '2022', 'titulo' => '2022 (Períodos I y II)', 'descripcion' => 'Estadísticas de matrícula - Ambos semestres', 'url' => 'https://sinc.unamad.edu.pe:8000/media/pdf/NUMERO_DE_ESTUDIANTES_POR_FACULTADES_Y_PROGRAMAS_DE_ESTUDIO_2022.pdf', 'tipo' => 'pdf'],
                    ['anio' => '2021', 'titulo' => '2021 (Períodos I y II)', 'descripcion' => 'Estadísticas de matrícula - Ambos semestres', 'url' => 'https://sinc.unamad.edu.pe:8000/media/pdf/NUMERO_DE_ESTUDIANTES_POR_FACULTADES_Y_PROGRAMAS_DE_ESTUDIO_2021.pdf', 'tipo' => 'pdf'],
                    ['anio' => '2020', 'titulo' => '2020 (Períodos I y II)', 'descripcion' => 'Estadísticas de matrícula - Ambos semestres', 'url' => 'https://sinc.unamad.edu.pe:8000/media/pdf/NUMERO_DE_ESTUDIANTES_POR_FACULTADES_Y_PROGRAMAS_DE_ESTUDIO_2020.pdf', 'tipo' => 'pdf'],
                    ['anio' => '2019', 'titulo' => '2019 (Períodos I y II)', 'descripcion' => 'Estadísticas de matrícula - Ambos semestres', 'url' => 'https://sinc.unamad.edu.pe:8000/media/pdf/NUMERO_DE_ESTUDIANTES_POR_FACULTADES_Y_PROGRAMAS_DE_ESTUDIO_2019.pdf', 'tipo' => 'pdf'],
                ]),
                'icono' => 'M12 14l9-5-9-5-9 5 9 5z M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z',
                'gradiente_from' => 'green-600',
                'gradiente_to' => 'teal-600',
                'bg_light' => 'green-50',
                'color_primario' => '#16A34A',
                'color_secundario' => '#0D9488',
                'orden' => 6,
                'activo' => true,
            ],

            // MV7 - Reglamento de Estudiantes
            [
                'codigo' => 'mv7',
                'titulo' => 'Reglamento de Estudiantes',
                'titulo_completo' => 'MV7: Reglamento de Estudiantes',
                'descripcion' => 'Marco normativo académico que regula la vida estudiantil en UNAMAD',
                'contenido' => '<p class="text-gray-700 mb-6">
                    La Universidad Nacional Amazónica de Madre de Dios presenta el marco normativo académico
                    que establece los derechos, deberes y procedimientos que rigen la vida estudiantil universitaria.
                </p>',
                'documentos' => json_encode([
                    ['seccion' => 'Reglamento Académico General v3.0 (Febrero 2023)', 'descripcion' => 'Versión actualizada del reglamento académico que incorpora las últimas disposiciones y mejoras en los procesos académicos universitarios.', 'items' => [
                        ['titulo' => 'Reglamento Académico General v3.0', 'descripcion' => 'Documento completo del reglamento', 'url' => 'https://sinc.unamad.edu.pe:8000/media/pdf/Reglamento_acad%C3%A9mico_general_VERSI%C3%93N_3.0_u6ppaDu.pdf', 'tipo' => 'pdf'],
                        ['titulo' => 'Resolución N° 100-2023-UNAMAD-CU', 'descripcion' => 'Resolución de aprobación oficial', 'url' => 'https://www.gob.pe/institucion/unamad/normas-legales/4286387-100-2023-unamad-cu', 'tipo' => 'resolucion'],
                    ]],
                    ['seccion' => 'Reglamento Académico General v1.0 (Octubre 2017)', 'descripcion' => 'Primera versión del reglamento académico general de UNAMAD, estableciendo las bases normativas para la gestión académica universitaria.', 'items' => [
                        ['titulo' => 'Resolución N° 503-2017-UNAMAD-CU', 'descripcion' => 'Resolución de aprobación original', 'url' => 'https://www.gob.pe/institucion/unamad/normas-legales/3476296-503-2017-unamad-cu', 'tipo' => 'resolucion'],
                    ]],
                ]),
                'icono' => 'M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z',
                'gradiente_from' => 'purple-600',
                'gradiente_to' => 'violet-600',
                'bg_light' => 'purple-50',
                'color_primario' => '#9333EA',
                'color_secundario' => '#8B5CF6',
                'orden' => 7,
                'activo' => true,
            ],

            // MV8 - Espacios y Servicios
            [
                'codigo' => 'mv8',
                'titulo' => 'Espacios y Servicios',
                'titulo_completo' => 'MV8: Espacios y Servicios',
                'descripcion' => 'Ambientes y espacios destinados a brindar servicios sociales, deportivos y culturales',
                'contenido' => '<p class="text-gray-700 mb-6">
                    La Universidad Nacional Amazónica de Madre de Dios cuenta con diversos espacios e instalaciones
                    para el desarrollo de actividades sociales, deportivas y culturales de la comunidad universitaria.
                </p>',
                'documentos' => json_encode([
                    ['seccion' => 'Unidad de Asistencia Social, Alimentaria y Deporte', 'descripcion' => 'Espacios especializados para el desarrollo de actividades deportivas y recreativas de la comunidad universitaria.', 'items' => [
                        ['titulo' => 'Espacios Destinados a Servicios Deportivos', 'descripcion' => 'Listado de instalaciones deportivas disponibles', 'url' => 'https://sinc.unamad.edu.pe:8000/media/pdf/AMBIENTES_O_ESPACIOS_DESTINADOS_A_BRINDAR_SERVICIOS_DEPORTIVOS_GBhdEAL.pdf', 'tipo' => 'pdf'],
                    ]],
                    ['seccion' => 'Dirección de Proyección Social y Extensión Cultural', 'descripcion' => 'Espacios dedicados a actividades de proyección social y desarrollo cultural de la universidad hacia la comunidad.', 'items' => [
                        ['titulo' => 'Lista de Espacios 2024 - II', 'descripcion' => 'Inventario actualizado de espacios culturales y sociales', 'url' => 'https://sinc.unamad.edu.pe:8000/media/pdf/2024-II_5bqTdZ8.pdf', 'tipo' => 'pdf'],
                    ]],
                ]),
                'icono' => 'M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2M12,8A4,4 0 0,0 8,12A4,4 0 0,0 12,16A4,4 0 0,0 16,12A4,4 0 0,0 12,8Z',
                'gradiente_from' => 'sky-600',
                'gradiente_to' => 'blue-600',
                'bg_light' => 'sky-50',
                'color_primario' => '#0284C7',
                'color_secundario' => '#2563EB',
                'orden' => 8,
                'activo' => true,
            ],

            // MV9 - Proyectos de Investigación
            [
                'codigo' => 'mv9',
                'titulo' => 'Proyectos de Investigación',
                'titulo_completo' => 'MV9: Proyectos de Investigación',
                'descripcion' => 'Títulos de proyectos de investigación actualizados por semestre académico',
                'contenido' => '<p class="text-gray-700 mb-6">
                    La Universidad Nacional Amazónica de Madre de Dios presenta los títulos de proyectos
                    de investigación desarrollados por la comunidad académica, actualizados al último semestre académico.
                </p>',
                'documentos' => json_encode([
                    ['anio' => '2024', 'titulo' => 'Proyectos de Investigación 2024', 'descripcion' => 'Títulos actualizados al último semestre académico', 'url' => 'https://sinc.unamad.edu.pe:8000/media/pdf/55_-_2024.pdf', 'tipo' => 'pdf'],
                    ['anio' => '2023', 'titulo' => 'Proyectos de Investigación 2023', 'descripcion' => 'Compendio de títulos de investigaciones del año', 'url' => 'https://sinc.unamad.edu.pe:8000/media/pdf/55_-_2023_lfPzjAE.pdf', 'tipo' => 'pdf'],
                    ['anio' => '2022', 'titulo' => 'Proyectos de Investigación 2022', 'descripcion' => 'Registro de investigaciones desarrolladas', 'url' => 'https://sinc.unamad.edu.pe:8000/media/pdf/55_-_2022_3sRgbUe.pdf', 'tipo' => 'pdf'],
                    ['anio' => '2021', 'titulo' => 'Proyectos de Investigación 2021', 'descripcion' => 'Listado de títulos de proyectos académicos', 'url' => 'https://sinc.unamad.edu.pe:8000/media/pdf/55_-_2021_w2ck8Wk.pdf', 'tipo' => 'pdf'],
                    ['anio' => '2020', 'titulo' => 'Proyectos de Investigación 2020', 'descripcion' => 'Investigaciones desarrolladas durante el año', 'url' => 'https://sinc.unamad.edu.pe:8000/media/pdf/55_-2020_OcatDDB.pdf', 'tipo' => 'pdf'],
                    ['anio' => '2019', 'titulo' => 'Proyectos de Investigación 2019', 'descripcion' => 'Compendio de títulos de investigaciones', 'url' => 'https://sinc.unamad.edu.pe:8000/media/pdf/55_-_2019_1gfGjhf.pdf', 'tipo' => 'pdf'],
                ]),
                'icono' => 'M9.5,3A6.5,6.5 0 0,1 16,9.5C16,11.11 15.41,12.59 14.44,13.73L14.71,14H15.5L20.5,19L19,20.5L14,15.5V14.71L13.73,14.44C12.59,15.41 11.11,16 9.5,16A6.5,6.5 0 0,1 3,9.5A6.5,6.5 0 0,1 9.5,3M9.5,5C7,5 5,7 5,9.5C5,12 7,14 9.5,14C12,14 14,12 14,9.5C14,7 12,5 9.5,5Z',
                'gradiente_from' => 'teal-600',
                'gradiente_to' => 'emerald-600',
                'bg_light' => 'teal-50',
                'color_primario' => '#0D9488',
                'color_secundario' => '#059669',
                'orden' => 9,
                'activo' => true,
            ],

            // MV10 - Tarifas de Servicios
            [
                'codigo' => 'mv10',
                'titulo' => 'Tarifas de Servicios',
                'titulo_completo' => 'MV10: Tarifas de Servicios',
                'descripcion' => 'Tarifas de servicios prestados: matrículas, pensiones, constancias, certificados y otros',
                'contenido' => '<p class="text-gray-700 mb-6">
                    La Universidad Nacional Amazónica de Madre de Dios presenta el Texto Único de Procedimientos
                    Administrativos (TUPA) que establece las tarifas oficiales para todos los servicios universitarios.
                </p>',
                'documentos' => json_encode([
                    ['seccion' => 'TUPA 2022 (Modificado - 2024) - VIGENTE', 'descripcion' => 'Versión actualizada y vigente del TUPA con las tarifas de servicios administrativos y académicos más recientes de la universidad.', 'vigente' => true, 'items' => [
                        ['titulo' => 'TUPA 2022 Digital Actualizado', 'descripcion' => 'Documento con tarifas vigentes - 2024', 'url' => 'https://sinc.unamad.edu.pe:8000/media/pdf/5707962-tupa-2022-digital-actualizado-vigente.pdf', 'tipo' => 'pdf'],
                        ['titulo' => 'Resolución N° 107-2024-UNAMAD-R', 'descripcion' => 'Resolución de aprobación - 2024', 'url' => 'https://www.gob.pe/institucion/unamad/normas-legales/5707962-107-2024-unamad-r', 'tipo' => 'resolucion'],
                    ]],
                    ['seccion' => 'TUPA 2022 (Modificado - 2023)', 'descripcion' => 'Versión modificada del TUPA 2022 con actualizaciones realizadas durante el año 2023.', 'items' => [
                        ['titulo' => 'TUPA 2022 Digital', 'descripcion' => 'Documento modificado - 2023', 'url' => 'https://sinc.unamad.edu.pe:8000/media/pdf/5522593-tupa-2022-digital.pdf', 'tipo' => 'pdf'],
                        ['titulo' => 'Resolución N° 281-2023-UNAMAD-R', 'descripcion' => 'Resolución de modificación - 2023', 'url' => 'https://www.gob.pe/institucion/unamad/normas-legales/5522593-281-2023-unamad-r', 'tipo' => 'resolucion'],
                    ]],
                    ['seccion' => 'TUPA 2022 (Versiones Adicionales)', 'descripcion' => 'Versión adicional del TUPA 2022 con complementos y especificaciones particulares.', 'items' => [
                        ['titulo' => 'TUPA 2022 I', 'descripcion' => 'Versión complementaria del TUPA', 'url' => 'https://sinc.unamad.edu.pe:8000/media/pdf/TUPA_2022_I.pdf', 'tipo' => 'pdf'],
                        ['titulo' => 'Resolución N° 149-2023-UNAMAD-R', 'descripcion' => 'Resolución de aprobación', 'url' => 'https://www.gob.pe/institucion/unamad/normas-legales/4193283-149-2023-unamad-r', 'tipo' => 'resolucion'],
                    ]],
                    ['seccion' => 'TUPA 2022', 'descripcion' => 'Versión original del TUPA 2022 que estableció las nuevas tarifas y procedimientos administrativos.', 'items' => [
                        ['titulo' => 'TUPA 2022', 'descripcion' => 'Documento original TUPA', 'url' => 'https://sinc.unamad.edu.pe:8000/media/pdf/TUPA_2022.pdf.pdf', 'tipo' => 'pdf'],
                        ['titulo' => 'Resolución N° 625-2022-UNAMAD-CU', 'descripcion' => 'Resolución de aprobación original', 'url' => 'https://www.gob.pe/institucion/unamad/normas-legales/3664816-625-2022-unamad-cu', 'tipo' => 'resolucion'],
                    ]],
                    ['seccion' => 'TUPA 2018', 'descripcion' => 'Primera versión del TUPA que estableció las bases del sistema de tarifas universitarias en UNAMAD.', 'items' => [
                        ['titulo' => 'TUPA UNAMAD 2018', 'descripcion' => 'Documento fundacional del TUPA', 'url' => 'https://sinc.unamad.edu.pe:8000/media/pdf/TUPA_UNAMAD.pdf', 'tipo' => 'pdf'],
                        ['titulo' => 'Resolución N° 005-2018-UNAMAD-CU', 'descripcion' => 'Resolución de creación del TUPA', 'url' => 'https://www.gob.pe/institucion/unamad/normas-legales/3469083-005-2018-unamad-cu', 'tipo' => 'resolucion'],
                    ]],
                ]),
                'icono' => 'M7,15H9C9,16.08 10.37,17 12,17C13.63,17 15,16.08 15,15C15,13.9 13.96,13.5 11.76,12.97C9.64,12.44 7,11.78 7,9C7,7.21 8.47,5.69 10.5,5.18V3H13.5V5.18C15.53,5.69 17,7.21 17,9H15C15,7.92 13.63,7 12,7C10.37,7 9,7.92 9,9C9,10.1 10.04,10.5 12.24,11.03C14.36,11.56 17,12.22 17,15C17,16.79 15.53,18.31 13.5,18.82V21H10.5V18.82C8.47,18.31 7,16.79 7,15Z',
                'gradiente_from' => 'orange-600',
                'gradiente_to' => 'amber-600',
                'bg_light' => 'orange-50',
                'color_primario' => '#EA580C',
                'color_secundario' => '#D97706',
                'orden' => 10,
                'activo' => true,
            ],

            // MV11 - Plana Docente
            [
                'codigo' => 'mv11',
                'titulo' => 'Plana Docente',
                'titulo_completo' => 'MV11: Plana Docente',
                'descripcion' => 'Plana docente y docentes investigadores por departamentos académicos',
                'contenido' => '<p class="text-gray-700 mb-6">
                    La Universidad Nacional Amazónica de Madre de Dios presenta la relación completa de su plana docente
                    y docentes investigadores, organizados por departamentos académicos y años.
                </p>',
                'documentos' => json_encode([
                    ['anio' => '2024', 'titulo' => 'Docentes Investigadores 2024', 'descripcion' => 'Registro de docentes con actividad investigativa', 'url' => 'https://sinc.unamad.edu.pe:8000/media/pdf/55_-_2024_-_MV_11.pdf', 'tipo' => 'pdf'],
                    ['anio' => '2024', 'departamento' => 'D.A. Administración y Contabilidad', 'items' => [
                        ['titulo' => 'Docentes Nombrados y Contratados', 'url' => 'https://sinc.unamad.edu.pe:8000/media/pdf/RELACION_DE_DOCENTES_NOMBRADOS_Y_CONTRATADOS_2024.pdf', 'tipo' => 'pdf'],
                        ['titulo' => 'Excel', 'url' => 'https://sinc.unamad.edu.pe:8000/media/pdf/RELACION_DOCENTES_NOMBRADOS_Y_CONTRATADOS_2024.xlsx', 'tipo' => 'excel'],
                    ]],
                    ['anio' => '2024', 'departamento' => 'D.A. Ciencias Básicas', 'items' => [
                        ['titulo' => 'Docentes Ordinarios', 'url' => 'https://sinc.unamad.edu.pe:8000/media/pdf/RELACION_DE_DOCENTES_ORDINARIOS_2024.pdf', 'tipo' => 'pdf'],
                        ['titulo' => 'Docentes Contratados', 'url' => 'https://sinc.unamad.edu.pe:8000/media/pdf/RELACI%C3%93N_DE_DOCENTES_CONTRATADOS_2024.pdf', 'tipo' => 'pdf'],
                    ]],
                    ['anio' => '2024', 'departamento' => 'D.A. Derecho y Ciencias Políticas', 'items' => [
                        ['titulo' => 'Relación de Docentes', 'url' => 'https://sinc.unamad.edu.pe:8000/media/pdf/RELACION_DE_DOCENTES_2024.pdf', 'tipo' => 'pdf'],
                        ['titulo' => 'Resolución 282-2024', 'url' => 'https://www.gob.pe/institucion/unamad/normas-legales/5628265-282-2024-unamad-cu', 'tipo' => 'resolucion'],
                    ]],
                    ['anio' => '2024', 'departamento' => 'D.A. Ecoturismo', 'items' => [
                        ['titulo' => 'Plana Docente', 'url' => 'https://sinc.unamad.edu.pe:8000/media/pdf/PLANA_DE_DOCENTES_2024_-_DDA_ECOT.pdf', 'tipo' => 'pdf'],
                        ['titulo' => 'Excel', 'url' => 'https://sinc.unamad.edu.pe:8000/media/pdf/PLANA_DE_DOCENTES_2024_-_DDA_ECOT_gXN32jP.xlsx', 'tipo' => 'excel'],
                        ['titulo' => 'Resolución 143-2024', 'url' => 'https://www.gob.pe/institucion/unamad/normas-legales/5389432-143-2024-unamad-cu', 'tipo' => 'resolucion'],
                    ]],
                    ['anio' => '2024', 'departamento' => 'D.A. Educación y Humanidades', 'items' => [
                        ['titulo' => 'Relación de Docentes', 'url' => 'https://sinc.unamad.edu.pe:8000/media/pdf/RELACION_DE_DOCENTES_DEL_DPTO_DE_EDUCACION_Y_HUMANIDADES_2024.pdf', 'tipo' => 'pdf'],
                    ]],
                    ['anio' => '2024', 'departamento' => 'D.A. Enfermería', 'items' => [
                        ['titulo' => 'Plana Docente', 'url' => 'https://sinc.unamad.edu.pe:8000/media/pdf/PLANA_DOCENTE_2024.pdf', 'tipo' => 'pdf'],
                    ]],
                    ['anio' => '2023', 'titulo' => 'Plana Docente General 2023', 'url' => 'https://sinc.unamad.edu.pe:8000/media/pdf/PLANA_DOCENTE_2023.pdf', 'tipo' => 'pdf'],
                    ['anio' => '2022', 'titulo' => 'Plana Docente General 2022', 'url' => 'https://sinc.unamad.edu.pe:8000/media/pdf/PLANA_DOCENTE_2022.pdf', 'tipo' => 'pdf'],
                    ['anio' => '2021', 'titulo' => 'Plana Docente General 2021', 'url' => 'https://sinc.unamad.edu.pe:8000/media/pdf/PLANA_DOCENTE_2021.pdf', 'tipo' => 'pdf'],
                ]),
                'icono' => 'M16,8C16,10.21 14.21,12 12,12C9.79,12 8,10.21 8,8L8.11,7.06L5.5,5.5L3.77,8.71C2.73,8.3 2,7.25 2,6A2,2 0 0,1 4,4H6L7.5,2L8.5,3L9.44,2.06C9.92,2.03 10.42,2 10.92,2C12.11,2 13.27,2.16 14.37,2.44L18.5,3.5L21,5V7L19.04,6.24L18.5,7.5L17.5,6.5L16.5,7.5L15.41,6.41C15.78,7.03 16,7.76 16,8M12,14C16.42,14 20,15.79 20,18V20H4V18C4,15.79 7.58,14 12,14Z',
                'gradiente_from' => 'indigo-600',
                'gradiente_to' => 'blue-600',
                'bg_light' => 'indigo-50',
                'color_primario' => '#4F46E5',
                'color_secundario' => '#2563EB',
                'orden' => 11,
                'activo' => true,
            ],

            // MV12 - Malla Curricular
            [
                'codigo' => 'mv12',
                'titulo' => 'Malla Curricular',
                'titulo_completo' => 'MV12: Malla Curricular',
                'descripcion' => 'Diseños curriculares de todos los programas de estudios de la universidad',
                'contenido' => '<p class="text-gray-700 mb-6">
                    La Universidad Nacional Amazónica de Madre de Dios presenta los diseños curriculares
                    actualizados de todos los programas de estudios, organizados por año académico para facilitar
                    el acceso a la información curricular.
                </p>',
                'documentos' => json_encode([
                    ['anio' => '2024', 'seccion' => 'Diseño Curricular 2024', 'items' => [
                        ['titulo' => 'Administración y Negocios Internacionales', 'url' => 'https://sinc.unamad.edu.pe:8000/media/pdf/DISE%C3%91O_CURRICULAR_DE_ADMINISTRACION_Y_NEGOCIOS_INTERNACIONALES.pdf', 'tipo' => 'pdf'],
                        ['titulo' => 'Contabilidad y Finanzas', 'url' => 'https://sinc.unamad.edu.pe:8000/media/pdf/DISE%C3%91O_CURRICULAR_DE_CONTABILIDAD_Y_FINANZAS__UNAMAD_...pdf', 'tipo' => 'pdf'],
                        ['titulo' => 'Ecoturismo', 'url' => 'https://sinc.unamad.edu.pe:8000/media/pdf/DISE%C3%91O_CURRICULAR_DE_ECOTURISMO.pdf', 'tipo' => 'pdf'],
                        ['titulo' => 'Derecho y Ciencias Políticas', 'url' => 'https://sinc.unamad.edu.pe:8000/media/pdf/DISE%C3%91O_CURRICULAR_DE_DERECHO_Y_CIENCIAS_POLITICAS.pdf', 'tipo' => 'pdf'],
                        ['titulo' => 'Enfermería', 'url' => 'https://sinc.unamad.edu.pe:8000/media/pdf/DISE%C3%91O_CURRICULAR_DE_ENFERMERIA.pdf', 'tipo' => 'pdf'],
                        ['titulo' => 'Educación: Especialidad Inicial y Especial', 'url' => 'https://sinc.unamad.edu.pe:8000/media/pdf/DISE%C3%91O_CURRICULAR_DE_EDUCACION_ESPECIALIDAD_INICIAL_Y_ESPECIAL_baXj1V7.pdf', 'tipo' => 'pdf'],
                        ['titulo' => 'Educación: Especialidad Matemática y Computación', 'url' => 'https://sinc.unamad.edu.pe:8000/media/pdf/DISE%C3%91O_CURRICULAR_DE_EDUCACION_ESPECIALIDAD_MATEMATICA_Y_COMPUTACION.pdf', 'tipo' => 'pdf'],
                        ['titulo' => 'Educación: Especialidad Primaria e Informática', 'url' => 'https://sinc.unamad.edu.pe:8000/media/pdf/DISE%C3%91O_CURRICULAR_CARRERA_PROFESIONAL_DE_EDUCACI%C3%93N_ESPECIALIDAD_PRIMARIA_E_INFORM%C3%81TICA.pdf', 'tipo' => 'pdf'],
                        ['titulo' => 'Ingeniería Agroindustrial', 'url' => 'https://sinc.unamad.edu.pe:8000/media/pdf/DISE%C3%91O_CURRICULAR_DE_INGENIERIA_AGROINDUSTRIAL.pdf', 'tipo' => 'pdf'],
                        ['titulo' => 'Ingeniería Forestal y Medio Ambiente', 'url' => 'https://sinc.unamad.edu.pe:8000/media/pdf/DISE%C3%91O_CURRICULAR_DE_INGENIERIA_FORESTAL_Y_MEDIO_AMBIENTE.pdf', 'tipo' => 'pdf'],
                        ['titulo' => 'Ingeniería de Sistemas e Informática', 'url' => 'https://sinc.unamad.edu.pe:8000/media/pdf/DISE%C3%91O_CURRICULAR_INGENIERIA_DE_SISTEMAS_E_INFORMATICA_L9cRoLi.pdf', 'tipo' => 'pdf'],
                        ['titulo' => 'Medicina Veterinaria Zootecnia', 'url' => 'https://sinc.unamad.edu.pe:8000/media/pdf/DISE%C3%91O_CURRICULAR_DE_MEDICINA_VETERINARIA-ZOOTECNIA.pdf', 'tipo' => 'pdf'],
                    ]],
                    ['anio' => '2023', 'seccion' => 'Malla Curricular 2023', 'items' => [
                        ['titulo' => 'Administración y Negocios Internacionales', 'url' => 'https://sinc.unamad.edu.pe:8000/media/pdf/DISE%C3%91O_CURRICULAR_DE_ADMINISTRACION_Y_NEGOCIOS_INTERNACIONALES.pdf', 'tipo' => 'pdf'],
                        ['titulo' => 'Contabilidad y Finanzas', 'url' => 'https://sinc.unamad.edu.pe:8000/media/pdf/DISE%C3%91O_CURRICULAR_DE_CONTABILIDAD_Y_FINANZAS__UNAMAD_...pdf', 'tipo' => 'pdf'],
                        ['titulo' => 'Ecoturismo', 'url' => 'https://sinc.unamad.edu.pe:8000/media/pdf/DISE%C3%91O_CURRICULAR_DE_ECOTURISMO.pdf', 'tipo' => 'pdf'],
                        ['titulo' => 'Derecho y Ciencias Políticas', 'url' => 'https://sinc.unamad.edu.pe:8000/media/pdf/DISE%C3%91O_CURRICULAR_DE_DERECHO_Y_CIENCIAS_POLITICAS.pdf', 'tipo' => 'pdf'],
                        ['titulo' => 'Enfermería', 'url' => 'https://sinc.unamad.edu.pe:8000/media/pdf/DISE%C3%91O_CURRICULAR_DE_ENFERMERIA.pdf', 'tipo' => 'pdf'],
                        ['titulo' => 'Educación: Especialidad Inicial y Especial', 'url' => 'https://sinc.unamad.edu.pe:8000/media/pdf/DISE%C3%91O_CURRICULAR_DE_EDUCACION_ESPECIALIDAD_INICIAL_Y_ESPECIAL_baXj1V7.pdf', 'tipo' => 'pdf'],
                        ['titulo' => 'Educación: Especialidad Matemática y Computación', 'url' => 'https://sinc.unamad.edu.pe:8000/media/pdf/DISE%C3%91O_CURRICULAR_DE_EDUCACION_ESPECIALIDAD_MATEMATICA_Y_COMPUTACION.pdf', 'tipo' => 'pdf'],
                        ['titulo' => 'Educación: Especialidad Primaria e Informática', 'url' => 'https://sinc.unamad.edu.pe:8000/media/pdf/DISE%C3%91O_CURRICULAR_CARRERA_PROFESIONAL_DE_EDUCACI%C3%93N_ESPECIALIDAD_PRIMARIA_E_INFORM%C3%81TICA.pdf', 'tipo' => 'pdf'],
                        ['titulo' => 'Ingeniería Agroindustrial', 'url' => 'https://sinc.unamad.edu.pe:8000/media/pdf/DISE%C3%91O_CURRICULAR_DE_INGENIERIA_AGROINDUSTRIAL.pdf', 'tipo' => 'pdf'],
                        ['titulo' => 'Ingeniería Forestal y Medio Ambiente', 'url' => 'https://sinc.unamad.edu.pe:8000/media/pdf/DISE%C3%91O_CURRICULAR_DE_INGENIERIA_FORESTAL_Y_MEDIO_AMBIENTE.pdf', 'tipo' => 'pdf'],
                        ['titulo' => 'Ingeniería de Sistemas e Informática', 'url' => 'https://sinc.unamad.edu.pe:8000/media/pdf/DISE%C3%91O_CURRICULAR_INGENIERIA_DE_SISTEMAS_E_INFORMATICA_L9cRoLi.pdf', 'tipo' => 'pdf'],
                        ['titulo' => 'Medicina Veterinaria Zootecnia', 'url' => 'https://sinc.unamad.edu.pe:8000/media/pdf/DISE%C3%91O_CURRICULAR_DE_MEDICINA_VETERINARIA-ZOOTECNIA.pdf', 'tipo' => 'pdf'],
                    ]],
                ]),
                'icono' => 'M19,3H5C3.89,3 3,3.89 3,5V19A3,3 0 0,0 6,22H18A3,3 0 0,0 21,19V5C21,3.89 20.1,3 19,3M19,5V19A1,1 0 0,1 18,20H6A1,1 0 0,1 5,19V5H19M7,7V9H17V7H7M7,11V13H17V11H7M7,15V17H17V15H7Z',
                'gradiente_from' => 'teal-600',
                'gradiente_to' => 'emerald-600',
                'bg_light' => 'teal-50',
                'color_primario' => '#0D9488',
                'color_secundario' => '#059669',
                'orden' => 12,
                'activo' => true,
            ],
        ];

        foreach ($variables as $variable) {
            Indicador55Variable::updateOrCreate(
                ['codigo' => $variable['codigo']],
                $variable
            );
        }
    }
}
