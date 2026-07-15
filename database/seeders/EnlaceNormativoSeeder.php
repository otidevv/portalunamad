<?php

namespace Database\Seeders;

use App\Models\EnlaceNormativo;
use Illuminate\Database\Seeder;

class EnlaceNormativoSeeder extends Seeder
{
    /**
     * Enlaces normativos que originalmente estaban fijos en la página de inicio.
     * Se cargan una sola vez; a partir de aquí se gestionan desde el admin.
     */
    public function run(): void
    {
        $enlaces = [
            ['titulo' => 'Resoluciones Rectorales', 'url' => 'https://www.gob.pe/institucion/unamad/colecciones/70121-resolucion-rectoral'],
            ['titulo' => 'Resoluciones de Consejo Universitario', 'url' => 'https://www.gob.pe/institucion/unamad/colecciones/10080-resolucion-de-consejo-universitario'],
            ['titulo' => 'Resoluciones de Vicerectorado Académico', 'url' => 'https://www.gob.pe/institucion/unamad/colecciones/10013-resolucion-de-vicerrectorado-academico'],
            ['titulo' => 'Resoluciones de Vicerectorado de Investigación', 'url' => 'https://www.gob.pe/institucion/unamad/colecciones/10418-resolucion-de-vicerrectorado-de-investigacion'],
            ['titulo' => 'Reglamentos', 'url' => 'https://www.gob.pe/institucion/unamad/informes-publicaciones/tipos/168-reglamento'],
            ['titulo' => 'Directivas', 'url' => 'https://www.gob.pe/institucion/unamad/normas-legales/tipos/28-directiva'],
            ['titulo' => 'Convenios Institucionales', 'url' => 'https://www.gob.pe/institucion/unamad/colecciones/16884-convenios-institucionales'],
            ['titulo' => 'Resolución de Tribunal de Honor Universitario', 'url' => 'https://www.gob.pe/institucion/unamad/informes-publicaciones/4990906-resolucion-de-tribunal-de-honor'],
            ['titulo' => 'Comité Electoral', 'url' => 'https://www.gob.pe/institucion/unamad/colecciones/10084-resolucion-de-comite-electoral-universitario'],
        ];

        foreach ($enlaces as $index => $enlace) {
            EnlaceNormativo::firstOrCreate(
                ['titulo' => $enlace['titulo']],
                ['url' => $enlace['url'], 'orden' => $index + 1, 'activo' => true]
            );
        }
    }
}
