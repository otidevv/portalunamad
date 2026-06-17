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
        Schema::create('dataset_records', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dataset_id')->constrained()->cascadeOnDelete();
            $table->unsignedInteger('fila');          // índice/orden de la fila dentro del dataset
            $table->json('datos');                    // {"anio":"2016","entidad":"PCM","monto":"12345.6"}

            // Sin timestamps: es una tabla de almacenamiento masivo de filas, no una entidad de contenido.
            $table->index(['dataset_id', 'fila']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dataset_records');
    }
};
