<?php

namespace Database\Seeders;

use App\Models\Dataset;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

/**
 * Carga el catálogo del Plan de Apertura de Datos (PNDA) de la UNAMAD:
 * los 9 datasets solicitados a cada área, con su diccionario de datos.
 *
 * Origen: "datasets_solicitadas.xlsx" (OTI / UNAMAD). Cada dataset queda como
 * «planificado» y sin filas; cada área subirá su CSV cuando los datos estén listos.
 *
 * Idempotente: si el slug ya existe NO se toca (para no pisar datos ya cargados).
 */
class DatasetSeeder extends Seeder
{
    public function run(): void
    {
        $userId = User::query()->orderBy('id')->value('id');
        if ($userId === null) {
            $this->command?->warn('No hay usuarios; ejecuta primero UserSeeder. DatasetSeeder omitido.');

            return;
        }

        foreach ($this->catalogo() as $d) {
            if (Dataset::where('slug', $d['slug'])->exists()) {
                $this->command?->line("  - {$d['slug']} ya existe, se conserva.");

                continue;
            }

            Dataset::create([
                'nombre' => $d['nombre'],
                'slug' => $d['slug'],
                'descripcion' => $d['descripcion'],
                'area_responsable' => $d['area'],
                'categoria' => $d['categoria'],
                'frecuencia_actualizacion' => $d['frecuencia'],
                'licencia' => 'CC BY 4.0',
                'fecha_corte' => $d['corte'],
                'fecha_publicacion' => $d['publicacion'],
                'estado_publicacion' => 'planificado',
                'observaciones' => $d['observaciones'],
                'origen' => 'manual',
                'estado_sync' => 'pendiente',
                'columnas' => $this->columnas($d['campos']),
                'total_filas' => 0,
                'activo' => false,
                'user_id' => $userId,
            ]);

            $this->command?->info("  ✓ {$d['slug']} ({$d['area']})");
        }
    }

    /**
     * Convierte las tuplas [CAMPO, TIPO, FORMATO, DESCRIPCIÓN, EJEMPLO] del diccionario
     * en el esquema `columnas` que usa el módulo.
     *
     * @param  array<int,array{0:string,1:string,2:string,3:string,4:string}>  $campos
     */
    private function columnas(array $campos): array
    {
        $tipoMap = [
            'Numérico' => 'numero',
            'Numerico' => 'numero',
            'Decimal' => 'numero',
            'Entero' => 'numero',
            'Fecha' => 'fecha',
            'Texto' => 'texto',
        ];

        $columnas = [];
        foreach ($campos as $i => [$campo, $tipo, $formato, $descripcion, $ejemplo]) {
            $columnas[] = [
                'numero' => $i + 1,
                'key' => Str::slug($campo, '_'),
                'label' => $campo,
                'tipo' => $tipoMap[$tipo] ?? 'texto',
                'formato' => $formato ?: null,
                'descripcion' => $descripcion ?: null,
                'ejemplo' => $ejemplo ?: null,
            ];
        }

        return $columnas;
    }

    /**
     * Catálogo de los 9 datasets solicitados y sus diccionarios de datos.
     */
    private function catalogo(): array
    {
        return [
            [
                'slug' => 'padron_alumnos_pregrado',
                'nombre' => 'Padrón de alumnos de pregrado',
                'descripcion' => 'Alumnos matriculados por facultad y escuela profesional.',
                'area' => 'Dirección de Asuntos Académicos',
                'categoria' => 'Educación',
                'frecuencia' => 'Semestral',
                'corte' => '2026-03-15',
                'publicacion' => '2026-03-20',
                'observaciones' => 'CODIGO anonimizado. No incluir DNI. (Ley N° 29733)',
                'campos' => [
                    ['FECHA_CORTE', 'Numérico', 'YYYYMMDD', 'Fecha de corte del reporte', '20251231'],
                    ['CODIGO', 'Numérico', '8 car.', 'Código de matrícula anonimizado (no es DNI)', '20221002'],
                    ['NIVEL_ACADEMICO', 'Texto', 'Max 30 car.', 'Nivel del programa', 'PREGRADO'],
                    ['FACULTAD', 'Texto', 'Max 100 car.', 'Nombre oficial de la facultad', 'FACULTAD DE INGENIERÍA'],
                    ['ESCUELA_PROFESIONAL', 'Texto', 'Max 100 car.', 'Nombre de la escuela o carrera', 'INGENIERÍA INFORMÁTICA Y DE SISTEMAS'],
                    ['CICLO_ACADEMICO', 'Numérico', 'Entero', 'Ciclo en que está matriculado', '5'],
                    ['SEMESTRE', 'Texto', 'YYYY-S', 'Semestre académico de matrícula', '2025-I'],
                    ['MODALIDAD', 'Texto', 'Max 20 car.', 'Modalidad de estudios', 'PRESENCIAL'],
                    ['SEXO', 'Texto', '1 car.', 'Sexo biológico', 'M / F'],
                    ['CONDICION_MATRICULA', 'Texto', 'Max 30 car.', 'Estado de la matrícula', 'REGULAR / IRREGULAR / REINGRESANTE'],
                    ['UBIGEO', 'Texto', '6 dígitos', 'UBIGEO del domicilio del alumno', '170101'],
                    ['DEPARTAMENTO', 'Texto', 'Max 50 car.', 'Departamento de procedencia', 'MADRE DE DIOS'],
                    ['PROVINCIA', 'Texto', 'Max 50 car.', 'Provincia de procedencia', 'TAMBOPATA'],
                    ['DISTRITO', 'Texto', 'Max 50 car.', 'Distrito de procedencia', 'TAMBOPATA'],
                    ['PERIODO_ACADEMICO', 'Texto', 'YYYY-S', 'Período académico reportado', '2025-I'],
                ],
            ],
            [
                'slug' => 'docentes_unamad_2026',
                'nombre' => 'Padrón de docentes UNAMAD 2026',
                'descripcion' => 'Padrón de docentes activos por categoría y dedicación.',
                'area' => 'Oficina de Recursos Humanos',
                'categoria' => 'Educación',
                'frecuencia' => 'Anual',
                'corte' => '2026-04-15',
                'publicacion' => '2026-04-22',
                'observaciones' => 'No incluir nombres, DNI ni remuneración. Solo datos estadísticos anonimizados. (Ley N° 29733)',
                'campos' => [
                    ['FECHA_CORTE', 'Numérico', 'YYYYMMDD', 'Fecha de corte del reporte', '20260101'],
                    ['CODIGO_DOCENTE', 'Numérico', '8 car.', 'Identificador único anonimizado', '19980045'],
                    ['FACULTAD', 'Texto', 'Max 100 car.', 'Facultad a la que pertenece', 'FACULTAD DE INGENIERÍA'],
                    ['ESCUELA_PROFESIONAL', 'Texto', 'Max 100 car.', 'Escuela o departamento académico', 'INGENIERÍA INFORMÁTICA Y DE SISTEMAS'],
                    ['CATEGORIA', 'Texto', 'Max 30 car.', 'Categoría docente', 'PRINCIPAL / ASOCIADO / AUXILIAR'],
                    ['DEDICACION', 'Texto', 'Max 30 car.', 'Régimen de dedicación', 'TIEMPO COMPLETO / TIEMPO PARCIAL / DED. EXCLUSIVA'],
                    ['CONDICION', 'Texto', 'Max 20 car.', 'Condición laboral', 'NOMBRADO / CONTRATADO'],
                    ['GRADO_ACADEMICO', 'Texto', 'Max 30 car.', 'Máximo grado obtenido', 'DOCTOR / MAGISTER / LICENCIADO'],
                    ['SEXO', 'Texto', '1 car.', 'Sexo biológico', 'M / F'],
                    ['ANIO_INGRESO', 'Numérico', 'YYYY', 'Año de ingreso a la docencia UNAMAD', '2010'],
                    ['REGIMEN', 'Texto', 'Max 20 car.', 'Régimen normativo', 'Ley 30220 / Ley 24029'],
                ],
            ],
            [
                'slug' => 'ingresantes_examen_2025',
                'nombre' => 'Ingresantes por examen de admisión 2025',
                'descripcion' => 'Postulantes, ingresantes y puntajes por modalidad y carrera.',
                'area' => 'Dirección de Admisión',
                'categoria' => 'Educación',
                'frecuencia' => 'Anual',
                'corte' => '2026-05-31',
                'publicacion' => '2026-05-05',
                'observaciones' => 'CODIGO debe ser anonimizado. No publicar identidad del postulante. (Ley N° 29733)',
                'campos' => [
                    ['FECHA_CORTE', 'Numérico', 'YYYYMMDD', 'Fecha de corte', '20251231'],
                    ['ANIO_PROCESO', 'Numérico', 'YYYY', 'Año del proceso de admisión', '2025'],
                    ['CONVOCATORIA', 'Texto', 'YYYY-S', 'Convocatoria o serie del examen', '2025-I'],
                    ['FACULTAD', 'Texto', 'Max 100 car.', 'Facultad a la que postula', 'FACULTAD DE INGENIERÍA'],
                    ['ESCUELA_PROFESIONAL', 'Texto', 'Max 100 car.', 'Carrera postulada', 'INGENIERÍA INFORMÁTICA Y DE SISTEMAS'],
                    ['MODALIDAD_INGRESO', 'Texto', 'Max 50 car.', 'Modalidad de admisión', 'EXAMEN ORDINARIO / TRASLADO / CEPRE'],
                    ['CONDICION', 'Texto', 'Max 20 car.', 'Resultado del proceso', 'POSTULANTE / INGRESANTE'],
                    ['PUNTAJE', 'Decimal', '##.##', 'Puntaje obtenido en el examen', '14.75'],
                    ['SEXO', 'Texto', '1 car.', 'Sexo biológico', 'M / F'],
                    ['UBIGEO', 'Texto', '6 dígitos', 'UBIGEO del domicilio', '170101'],
                    ['DEPARTAMENTO', 'Texto', 'Max 50 car.', 'Departamento de procedencia', 'MADRE DE DIOS'],
                    ['PROVINCIA', 'Texto', 'Max 50 car.', 'Provincia de procedencia', 'TAMBOPATA'],
                    ['DISTRITO', 'Texto', 'Max 50 car.', 'Distrito de procedencia', 'TAMBOPATA'],
                ],
            ],
            [
                'slug' => 'proyectos_invest_vigentes',
                'nombre' => 'Proyectos de investigación vigentes',
                'descripcion' => 'Proyectos de investigación financiados y en ejecución por facultad.',
                'area' => 'Vicerrectorado de Investigación',
                'categoria' => 'Ciencia y Tecnología',
                'frecuencia' => 'Anual',
                'corte' => '2026-06-15',
                'publicacion' => '2026-06-25',
                'observaciones' => 'Sin datos personales. Dataset institucional.',
                'campos' => [
                    ['FECHA_CORTE', 'Numérico', 'YYYYMMDD', 'Fecha de corte', '20250430'],
                    ['CODIGO_PROYECTO', 'Texto', 'Max 20 car.', 'Código interno del proyecto', 'INV-2024-012'],
                    ['TITULO_PROYECTO', 'Texto', 'Max 300 car.', 'Título oficial del proyecto', 'Biodiversidad de mariposas en MDD'],
                    ['FACULTAD', 'Texto', 'Max 100 car.', 'Facultad responsable', 'FACULTAD DE ECOLOGÍA'],
                    ['TIPO_INVESTIGACION', 'Texto', 'Max 50 car.', 'Clasificación del tipo de investigación', 'BÁSICA / APLICADA'],
                    ['ESTADO', 'Texto', 'Max 30 car.', 'Estado de ejecución', 'EN EJECUCIÓN / CONCLUIDO / SUSPENDIDO'],
                    ['FUENTE_FINANCIAMIENTO', 'Texto', 'Max 100 car.', 'Origen del financiamiento', 'CANON MINERO / FONDECYT / RECURSOS PROPIOS'],
                    ['MONTO_APROBADO', 'Decimal', '##.##', 'Monto total aprobado en soles', '25000.00'],
                    ['ANIO_INICIO', 'Numérico', 'YYYY', 'Año de inicio del proyecto', '2024'],
                    ['ANIO_FIN', 'Numérico', 'YYYY', 'Año de término previsto', '2025'],
                    ['PERIODO_ACADEMICO', 'Texto', 'YYYY-S', 'Período de reporte', '2025-I'],
                ],
            ],
            [
                'slug' => 'ordenes_compra_servicio',
                'nombre' => 'Órdenes de compra y servicio',
                'descripcion' => 'Adquisiciones de bienes y servicios contratados por la UNAMAD.',
                'area' => 'Dir. de Administración (Abastecimiento)',
                'categoria' => 'Economía y Finanzas',
                'frecuencia' => 'Mensual',
                'corte' => '2026-07-15',
                'publicacion' => '2026-07-28',
                'observaciones' => 'No incluir RUC ni razón social si el proveedor es persona natural. (Ley N° 29733, Art. 2 inc. 4)',
                'campos' => [
                    ['FECHA_CORTE', 'Numérico', 'YYYYMMDD', 'Fecha de corte', '20250430'],
                    ['NUMERO_ORDEN', 'Texto', 'Max 20 car.', 'Número de orden de compra o servicio', 'OC-2025-0134'],
                    ['TIPO_ORDEN', 'Texto', 'Max 20 car.', 'Tipo de adquisición', 'ORDEN DE COMPRA / ORDEN DE SERVICIO'],
                    ['DESCRIPCION', 'Texto', 'Max 300 car.', 'Descripción del bien o servicio', 'Adquisición de equipos informáticos'],
                    ['UNIDAD_ORGANICA', 'Texto', 'Max 100 car.', 'Unidad que solicita', 'OFICINA DE TECNOLOGÍAS DE LA INFORMACIÓN'],
                    ['MODALIDAD_CONTRATACION', 'Texto', 'Max 50 car.', 'Tipo de proceso de contratación', 'COMPRA DIRECTA / CAS / LICITACIÓN'],
                    ['PROVEEDOR_TIPO', 'Texto', 'Max 20 car.', 'Tipo de proveedor (sin razón social)', 'PERSONA JURÍDICA / PERSONA NATURAL'],
                    ['MONTO_SOLES', 'Decimal', '##.##', 'Monto contratado en soles', '4500.00'],
                    ['FECHA_EMISION', 'Fecha', 'DD/MM/YYYY', 'Fecha de emisión de la orden', '15/03/2025'],
                    ['ESTADO', 'Texto', 'Max 30 car.', 'Estado de la orden', 'PAGADO / PENDIENTE / ANULADO'],
                    ['CLASIFICADOR_GASTO', 'Texto', 'Max 10 car.', 'Clasificador presupuestal', '2.3.1.99'],
                ],
            ],
            [
                'slug' => 'padron_trabajadores_adm',
                'nombre' => 'Padrón de trabajadores administrativos',
                'descripcion' => 'Personal administrativo por régimen, grupo ocupacional y unidad orgánica.',
                'area' => 'Oficina de Recursos Humanos',
                'categoria' => 'Gobernabilidad',
                'frecuencia' => 'Anual',
                'corte' => '2026-08-30',
                'publicacion' => '2026-08-05',
                'observaciones' => 'No incluir nombre, DNI ni remuneración exacta individual. (Ley N° 29733, Art. 2 inc. 4)',
                'campos' => [
                    ['FECHA_CORTE', 'Numérico', 'YYYYMMDD', 'Fecha de corte', '20260101'],
                    ['CODIGO_TRABAJADOR', 'Numérico', '8 car.', 'Identificador único anonimizado', '00000123'],
                    ['UNIDAD_ORGANICA', 'Texto', 'Max 100 car.', 'Unidad o área de adscripción', 'OFICINA DE TECNOLOGÍAS DE LA INFORMACIÓN'],
                    ['REGIMEN_LABORAL', 'Texto', 'Max 30 car.', 'Régimen contractual', 'D. Leg. 276 / CAS / LOCACIÓN'],
                    ['GRUPO_OCUPACIONAL', 'Texto', 'Max 50 car.', 'Clasificación del puesto', 'PROFESIONAL / TÉCNICO / AUXILIAR'],
                    ['CONDICION', 'Texto', 'Max 20 car.', 'Condición laboral', 'NOMBRADO / CONTRATADO'],
                    ['SEXO', 'Texto', '1 car.', 'Sexo biológico', 'M / F'],
                    ['ANIO_INGRESO', 'Numérico', 'YYYY', 'Año de ingreso a la institución', '2015'],
                    ['NIVEL_REMUNERATIVO', 'Texto', 'Max 20 car.', 'Nivel o escala remunerativa', 'STD / STA / STB / SP-ES'],
                ],
            ],
            [
                'slug' => 'infraestructura_aulas_reg',
                'nombre' => 'Inventario de infraestructura y aulas',
                'descripcion' => 'Inventario de aulas, laboratorios y espacios físicos de la sede central.',
                'area' => 'Servicios Generales (Comisión Ambientes)',
                'categoria' => 'Infraestructura',
                'frecuencia' => 'Anual',
                'corte' => '2026-09-10',
                'publicacion' => '2026-09-15',
                'observaciones' => 'Sin datos personales. Dataset de infraestructura.',
                'campos' => [
                    ['FECHA_CORTE', 'Numérico', 'YYYYMMDD', 'Fecha de corte', '20251231'],
                    ['CODIGO_AMBIENTE', 'Texto', 'Max 20 car.', 'Código interno del ambiente', 'AUL-A101'],
                    ['TIPO_AMBIENTE', 'Texto', 'Max 50 car.', 'Clasificación del espacio', 'AULA / LABORATORIO / SALA DE CÓMPUTO / BIBLIOTECA'],
                    ['EDIFICIO_PABELLON', 'Texto', 'Max 50 car.', 'Nombre del pabellón o edificio', 'PABELLÓN A'],
                    ['FACULTAD_USO', 'Texto', 'Max 100 car.', 'Facultad o unidad que lo usa', 'USO COMÚN / FACULTAD DE INGENIERÍA'],
                    ['CAPACIDAD', 'Numérico', 'Entero', 'Aforo máximo del ambiente', '40'],
                    ['AREA_M2', 'Decimal', '##.##', 'Área del ambiente en m²', '72.50'],
                    ['ESTADO_CONSERVACION', 'Texto', 'Max 20 car.', 'Estado físico', 'BUENO / REGULAR / MALO'],
                    ['SEDE', 'Texto', 'Max 50 car.', 'Sede o filial', 'PUERTO MALDONADO'],
                    ['UBIGEO', 'Texto', '6 dígitos', 'UBIGEO de la sede', '170101'],
                    ['SEMESTRE', 'Texto', 'YYYY-S', 'Semestre de referencia del inventario', '2025-I'],
                ],
            ],
            [
                'slug' => 'becas_beneficios_2025',
                'nombre' => 'Becas y beneficios sociales 2025',
                'descripcion' => 'Alumnos beneficiados con comedor y programas de ayuda social.',
                'area' => 'Dirección de Bienestar Universitario',
                'categoria' => 'Población',
                'frecuencia' => 'Semestral',
                'corte' => '2026-09-16',
                'publicacion' => '2026-09-25',
                'observaciones' => 'CODIGO debe ser ID artificial generado por OTI (no DNI ni código de matrícula). Suprimir grupos con menos de 5 registros por combinación ESCUELA+DISTRITO antes de publicar. (Ley N° 29733)',
                'campos' => [
                    ['FECHA_CORTE', 'Numérico', 'YYYYMMDD', 'Fecha de corte del reporte sin separadores', '20250414'],
                    ['CODIGO', 'Numérico', 'Max 60 car.', 'Identificador único anonimizado (no es DNI)', '20221002'],
                    ['SERVICIO', 'Texto', 'Max 30 car.', 'Tipo de servicio de alimentación al que accede', 'SOLO DESAYUNO / SOLO ALMUERZO / DESAYUNO Y ALMUERZO / SOLO CENA'],
                    ['FACULTAD', 'Texto', 'Max 100 car.', 'Nombre oficial de la facultad del beneficiario', 'INGENIERIA'],
                    ['ESCUELA_PROFESIONAL', 'Texto', 'Max 100 car.', 'Nombre de la escuela o carrera según SUNEDU', 'INGENIERÍA INFORMÁTICA Y DE SISTEMAS'],
                    ['DEPARTAMENTO', 'Texto', 'Max 50 car.', 'Departamento del domicilio declarado', 'MADRE DE DIOS'],
                    ['PROVINCIA', 'Texto', 'Max 50 car.', 'Provincia del domicilio declarado', 'TAMBOPATA'],
                    ['DISTRITO', 'Texto', 'Max 50 car.', 'Distrito del domicilio declarado', 'TAMBOPATA'],
                    ['UBIGEO', 'Texto', '6 dígitos', 'Código UBIGEO INEI del domicilio (Dpto+Prov+Dist)', '170101'],
                    ['PERIODO_ACADEMICO', 'Texto', 'YYYY-S', 'Período académico en que recibe el beneficio', '2025-I / 2025-II'],
                ],
            ],
            [
                'slug' => 'egresados_unamad_inicio',
                'nombre' => 'Egresados UNAMAD desde sus inicios',
                'descripcion' => 'Alumnos egresados desde los inicios de la universidad.',
                'area' => 'Dirección de Asuntos Académicos',
                'categoria' => 'Educación',
                'frecuencia' => 'Anual',
                'corte' => '2026-11-16',
                'publicacion' => '2026-11-30',
                'observaciones' => 'No publicar FECHA_EGRESO con día exacto. PROMEDIO_FINAL: suprimir si la cohorte por FACULTAD+SEMESTRE_EGRESO < 5 registros (k-anonimato). (Ley N° 29733)',
                'campos' => [
                    ['FECHA_CORTE', 'Numérico', 'YYYYMMDD', 'Fecha de corte del reporte', '20251231'],
                    ['CODIGO', 'Numérico', '8 car.', 'Identificador único anonimizado (no es DNI ni código real)', '20221002'],
                    ['NIVEL_ACADEMICO', 'Texto', 'Max 30 car.', 'Nivel de estudio del programa', 'PREGRADO / POSGRADO'],
                    ['FACULTAD', 'Texto', 'Max 100 car.', 'Nombre oficial de la facultad o escuela', 'FACULTAD DE INGENIERÍA'],
                    ['PROGRAMA_ESTUDIOS', 'Texto', 'Max 100 car.', 'Nombre completo del programa o carrera', 'INGENIERÍA INFORMÁTICA Y DE SISTEMAS'],
                    ['SITUACION_ALUMNO', 'Texto', 'Max 20 car.', 'Estado académico al momento del corte', 'EGRESADO / BACHILLER / TITULADO'],
                    ['MODALIDAD', 'Texto', 'Max 20 car.', 'Modalidad de estudios', 'PRESENCIAL / SEMIPRESENCIAL / VIRTUAL'],
                    ['SEDE', 'Texto', 'Max 50 car.', 'Nombre de la sede o filial donde estudió', 'PUERTO MALDONADO'],
                    ['SEXO', 'Texto', '1 car.', 'Sexo biológico del egresado', 'M = Masculino / F = Femenino'],
                    ['ANNIO_EGRESO', 'Numérico', 'YYYY', 'Año en que completó los créditos del plan de estudios', '2024'],
                    ['SEMESTRE_EGRESO', 'Texto', 'YYYY-S', 'Semestre académico de egreso', '2024-1 / 2024-2'],
                    ['PROMEDIO_FINAL', 'Decimal', '##.##', 'Promedio ponderado acumulado al egreso (ver nota)', '15.75'],
                    ['CREDITOS_ACUMULADOS', 'Numérico', 'Entero', 'Total de créditos aprobados al egreso', '220'],
                    ['ANNIO_MATRICULA1', 'Numérico', 'YYYY', 'Año de primera matrícula en la universidad', '2018'],
                    ['ANNIO_SOLICITUD_TRAMITE', 'Numérico', 'YYYY', 'Año en que inició el trámite de egreso/grado/título', '2024'],
                    ['DETALLE_TIPO_ESTUDIO', 'Texto', 'Max 20 car.', 'Tipo de estudio según régimen de ingreso', 'REGULAR / ITINERANTE / TRASLADO'],
                ],
            ],
        ];
    }
}
