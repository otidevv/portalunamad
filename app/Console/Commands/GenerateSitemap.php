<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use Carbon\Carbon;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';
    protected $description = 'Genera el sitemap del portal UNAMAD';

    public function handle()
    {
        $sitemap = Sitemap::create();

        // PÁGINA PRINCIPAL
        $sitemap->add(
            Url::create('/')
                ->setLastModificationDate(Carbon::now())
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
                ->setPriority(1.0)
        );

        // UNIVERSIDAD
        $universidadUrls = [
            '/universidad/presentacion',
            '/universidad/autoridades',
            '/universidad/historia',
            '/universidad/sedes',
            '/universidad/politicas',
        ];
        foreach ($universidadUrls as $url) {
            $sitemap->add(
                Url::create($url)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
                    ->setPriority(0.9)
            );
        }

        // OFICINAS
        $oficinasUrls = [
            '/oficinas/asamblea',
            '/oficinas/consejo',
            '/oficinas/decanatura',
            '/oficinas/secretaria',
            '/oficinas/calidad',
            '/oficinas/cooperacion',
            '/oficinas/cooperacion/mision-vision',
            '/oficinas/cooperacion/estructura-organica',
            '/oficinas/cooperacion/personal-administrativo',
            '/oficinas/cooperacion/directorio',
            '/oficinas/cooperacion/servicios',
            '/oficinas/cooperacion/convenios',
            '/oficinas/ambiental',
            '/oficinas/ambiental/actividades',
            '/oficinas/administracion',
            '/oficinas/oti',
            '/oficinas/planeamiento',
            '/oficinas/admision',
            '/oficinas/biblioteca',
            '/oficinas/academicos',
            '/oficinas/bienestar',
            '/oficinas/bienestar/actividades',
            '/oficinas/incubadora',
            '/oficinas/innovacion',
            '/oficinas/investigacion',
        ];
        foreach ($oficinasUrls as $url) {
            $sitemap->add(
                Url::create($url)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
                    ->setPriority(0.8)
            );
        }

        // FACULTADES
        $facultadesUrls = [
            '/facultades/agroindustrial',
            '/facultades/agroindustrial/resena-historica',
            '/facultades/agroindustrial/vision-mision',
            '/facultades/agroindustrial/perfil-profesional',
            '/facultades/agroindustrial/campo-ocupacional',
            '/facultades/agroindustrial/objetivos-academicos',
            '/facultades/forestal',
            '/facultades/sistemas',
            '/facultades/veterinaria',
            '/facultades/matematica',
            '/facultades/derecho',
            '/facultades/enfermeria',
            '/facultades/ecoturismo',
            '/facultades/administracion',
            '/facultades/contabilidad',
        ];
        foreach ($facultadesUrls as $url) {
            $sitemap->add(
                Url::create($url)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
                    ->setPriority(0.9)
            );
        }

        // POSGRADO
        $sitemap->add(
            Url::create('/posgrado')
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
                ->setPriority(0.8)
        );

        // PROYECTOS
        $proyectosUrls = [
            '/proyectos/jardin',
            '/proyectos/panificadora',
            '/proyectos/bus',
            '/proyectos/herbario',
            '/proyectos/estacion',
            '/proyectos/aldea',
            '/proyectos/km16',
            '/proyectos/km18',
        ];
        foreach ($proyectosUrls as $url) {
            $sitemap->add(
                Url::create($url)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
                    ->setPriority(0.7)
            );
        }

        // TRANSPARENCIA
        $transparenciaUrls = [
            '/transparencia/documentos',
            '/transparencia/indicador-55',
            '/transparencia/indicador-55/mv1',
            '/transparencia/indicador-55/mv2',
            '/transparencia/indicador-55/mv3',
            '/transparencia/indicador-55/mv4',
            '/transparencia/indicador-55/mv5',
            '/transparencia/indicador-55/mv6',
            '/transparencia/indicador-55/mv7',
            '/transparencia/indicador-55/mv8',
            '/transparencia/indicador-55/mv9',
            '/transparencia/indicador-55/mv10',
            '/transparencia/indicador-55/mv11',
            '/transparencia/indicador-55/mv12',
            '/transparencia/articulo-11',
        ];
        foreach ($transparenciaUrls as $url) {
            $sitemap->add(
                Url::create($url)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
                    ->setPriority(0.8)
            );
        }

        // COMUNICADOS (página de índice)
        $sitemap->add(
            Url::create('/comunicados')
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                ->setPriority(0.7)
        );

        // CONTENIDO DINÁMICO

        // Anuncios
        if (class_exists(\App\Models\Anuncio::class)) {
            \App\Models\Anuncio::publicado()
                ->get()
                ->each(function ($anuncio) use ($sitemap) {
                    $sitemap->add(
                        Url::create("/anuncio/{$anuncio->id}")
                            ->setLastModificationDate($anuncio->updated_at)
                            ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                            ->setPriority(0.6)
                    );
                });
        }

        // Comunicados
        if (class_exists(\App\Models\Comunicado::class)) {
            \App\Models\Comunicado::activos()
                ->vigentes()
                ->get()
                ->each(function ($comunicado) use ($sitemap) {
                    $sitemap->add(
                        Url::create("/comunicado/{$comunicado->id}")
                            ->setLastModificationDate($comunicado->updated_at)
                            ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                            ->setPriority(0.6)
                    );
                });
        }

        // GUARDAR EL SITEMAP
        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('✅ Sitemap generado exitosamente en: ' . public_path('sitemap.xml'));
        $this->info('📊 Total de URLs: ' . count($sitemap->getTags()));

        return Command::SUCCESS;
    }
}
