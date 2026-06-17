<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('datasets', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('slug')->unique();
            $table->text('descripcion')->nullable();

            // Origen del dataset: cargado a mano (CSV) o importado de un portal de datos abiertos.
            $table->enum('origen', ['manual', 'ckan'])->default('manual');
            $table->string('fuente_url', 500)->nullable();   // enlace a la fuente (ej. datosabiertos.gob.pe)

            // Campos preparados para una futura importación automática (DKAN/CKAN).
            $table->string('ckan_package_id')->nullable();
            $table->string('ckan_resource_id')->nullable();

            // Esquema de columnas: [{"key":"anio","label":"Año","tipo":"numero|texto|fecha"}]
            $table->json('columnas')->nullable();
            $table->unsignedInteger('total_filas')->default(0);

            $table->dateTime('ultima_sincronizacion')->nullable();
            $table->enum('estado_sync', ['pendiente', 'en_proceso', 'completado', 'error'])->default('completado');
            $table->text('mensaje_sync')->nullable();

            $table->boolean('activo')->default(true);
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->timestamps();

            $table->index('activo');
            $table->index('origen');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datasets');
    }
};
