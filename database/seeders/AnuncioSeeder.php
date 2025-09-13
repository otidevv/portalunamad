<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Anuncio;
use App\Models\User;

class AnuncioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::first();

        // Anuncios destacados
        $anunciosDestacados = [
            [
                'titulo' => 'Proceso de Admisión 2025 - Inscripciones Abiertas',
                'descripcion' => 'La Universidad Nacional Amazónica de Madre de Dios informa que están abiertas las inscripciones para el Proceso de Admisión 2025. Las postulaciones se realizarán del 15 de enero al 28 de febrero de 2025.',
                'categoria' => 'convocatoria',
                'estado' => 'publicado',
                'destacado' => true,
                'enlaces' => [
                    ['titulo' => 'Cronograma de Admisión 2025', 'url' => 'https://unamad.edu.pe/admision'],
                    ['titulo' => 'Guía del Postulante', 'url' => 'https://unamad.edu.pe/guia-postulante']
                ],
                'user_id' => $admin->id,
                'vistas' => 245
            ],
            [
                'titulo' => 'Convocatoria: II Congreso Internacional de Investigación Amazónica',
                'descripcion' => 'Se convoca a investigadores, docentes y estudiantes a participar en el II Congreso Internacional de Investigación Amazónica que se realizará del 20 al 22 de marzo de 2025 en las instalaciones de la UNAMAD.',
                'categoria' => 'evento',
                'estado' => 'publicado',
                'destacado' => true,
                'enlaces' => [
                    ['titulo' => 'Bases del Congreso', 'url' => 'https://unamad.edu.pe/congreso-amazonia'],
                    ['titulo' => 'Formulario de Inscripción', 'url' => 'https://forms.unamad.edu.pe/congreso']
                ],
                'user_id' => $admin->id,
                'vistas' => 189
            ],
            [
                'titulo' => 'Nueva Biblioteca Digital UNAMAD - Acceso 24/7',
                'descripcion' => 'La universidad presenta su nueva plataforma de biblioteca digital con más de 50,000 títulos disponibles. Los estudiantes y docentes pueden acceder las 24 horas con sus credenciales institucionales.',
                'categoria' => 'noticia',
                'estado' => 'publicado',
                'destacado' => true,
                'enlaces' => [
                    ['titulo' => 'Acceder a Biblioteca Digital', 'url' => 'https://biblioteca.unamad.edu.pe'],
                    ['titulo' => 'Manual de Usuario', 'url' => 'https://unamad.edu.pe/manual-biblioteca']
                ],
                'user_id' => $admin->id,
                'vistas' => 312
            ]
        ];

        // Anuncios recientes
        $anunciosRecientes = [
            [
                'titulo' => 'Resultados del Proceso de Ratificación Docente 2025',
                'descripcion' => 'Se publican los resultados del proceso de evaluación para la ratificación de docentes ordinarios correspondiente al año 2025.',
                'categoria' => 'comunicado',
                'estado' => 'publicado',
                'destacado' => false,
                'user_id' => $admin->id,
                'vistas' => 156
            ],
            [
                'titulo' => 'Taller: Inteligencia Artificial en la Educación Superior',
                'descripcion' => 'La Facultad de Ingeniería invita al taller sobre integración de herramientas de IA en procesos educativos. Dirigido a docentes y estudiantes.',
                'categoria' => 'evento',
                'estado' => 'publicado',
                'destacado' => false,
                'enlaces' => [
                    ['titulo' => 'Inscribirse al Taller', 'url' => 'https://ingenieria.unamad.edu.pe/taller-ia']
                ],
                'user_id' => $admin->id,
                'vistas' => 89
            ],
            [
                'titulo' => 'Nuevo Convenio con Universidad de Brasilia',
                'descripcion' => 'UNAMAD firma convenio de cooperación académica e investigación con la Universidad de Brasilia, fortaleciendo lazos internacionales.',
                'categoria' => 'noticia',
                'estado' => 'publicado',
                'destacado' => false,
                'user_id' => $admin->id,
                'vistas' => 134
            ],
            [
                'titulo' => 'Convocatoria: Fondo de Apoyo a Tesis de Pregrado',
                'descripcion' => 'El Vicerrectorado de Investigación abre la convocatoria para el fondo concursable de apoyo económico a tesis de pregrado modalidad 2025.',
                'categoria' => 'convocatoria',
                'estado' => 'publicado',
                'destacado' => false,
                'enlaces' => [
                    ['titulo' => 'Bases de la Convocatoria', 'url' => 'https://vri.unamad.edu.pe/convocatoria-tesis'],
                    ['titulo' => 'Formulario de Postulación', 'url' => 'https://forms.unamad.edu.pe/tesis-fondo']
                ],
                'user_id' => $admin->id,
                'vistas' => 201
            ],
            [
                'titulo' => 'Actualización del Sistema de Gestión Académica',
                'descripcion' => 'Se informa sobre la actualización del sistema de gestión académica que estará disponible a partir del 15 de enero de 2025.',
                'categoria' => 'comunicado',
                'estado' => 'publicado',
                'destacado' => false,
                'user_id' => $admin->id,
                'vistas' => 278
            ],
            [
                'titulo' => 'Semana de la Biodiversidad Amazónica 2025',
                'descripcion' => 'Del 10 al 14 de febrero se realizará la Semana de la Biodiversidad Amazónica con actividades académicas, culturales y de conservación.',
                'categoria' => 'evento',
                'estado' => 'publicado',
                'destacado' => false,
                'enlaces' => [
                    ['titulo' => 'Programa de Actividades', 'url' => 'https://unamad.edu.pe/biodiversidad-2025']
                ],
                'user_id' => $admin->id,
                'vistas' => 167
            ]
        ];

        // Crear anuncios destacados
        foreach ($anunciosDestacados as $anuncio) {
            Anuncio::create($anuncio);
        }

        // Crear anuncios recientes
        foreach ($anunciosRecientes as $anuncio) {
            Anuncio::create($anuncio);
        }
    }
}