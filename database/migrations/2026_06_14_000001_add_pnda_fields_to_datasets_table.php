<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Metadatos del Plan Nacional de Datos Abiertos (PNDA) para cada dataset.
 *
 * El módulo nació como "subir CSV → graficar". La UNAMAD lo usa además como
 * catálogo de su Plan de Apertura de Datos: cada dataset pertenece a un área
 * responsable, tiene fecha de corte, fecha de publicación comprometida ante el
 * PNDA y notas de protección de datos (Ley N° 29733). Esta migración agrega
 * esos campos sin tocar los datos ya cargados.
 */
return new class extends Migration
{
    public function up(): void
    {
        Schema::table('datasets', function (Blueprint $table) {
            $table->string('area_responsable')->nullable()->after('descripcion');
            $table->string('categoria', 100)->nullable()->after('area_responsable');
            $table->string('frecuencia_actualizacion', 50)->nullable()->after('categoria');
            $table->string('licencia', 100)->nullable()->default('CC BY 4.0')->after('frecuencia_actualizacion');

            $table->date('fecha_corte')->nullable()->after('licencia');
            $table->date('fecha_publicacion')->nullable()->after('fecha_corte');

            // Ciclo de vida dentro del plan: planificado → en_preparacion → publicado (o desfasado).
            $table->string('estado_publicacion', 30)->default('planificado')->after('fecha_publicacion');

            // Notas de anonimización / Ley N° 29733 (qué no publicar, k-anonimato, etc.).
            $table->text('observaciones')->nullable()->after('estado_publicacion');

            $table->index('area_responsable');
            $table->index('estado_publicacion');
            $table->index('fecha_publicacion');
        });
    }

    public function down(): void
    {
        Schema::table('datasets', function (Blueprint $table) {
            $table->dropIndex(['area_responsable']);
            $table->dropIndex(['estado_publicacion']);
            $table->dropIndex(['fecha_publicacion']);

            $table->dropColumn([
                'area_responsable',
                'categoria',
                'frecuencia_actualizacion',
                'licencia',
                'fecha_corte',
                'fecha_publicacion',
                'estado_publicacion',
                'observaciones',
            ]);
        });
    }
};
