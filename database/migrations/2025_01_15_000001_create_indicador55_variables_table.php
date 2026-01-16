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
        Schema::create('indicador55_variables', function (Blueprint $table) {
            $table->id();
            $table->string('codigo', 10)->unique(); // mv1, mv2, ... mv12
            $table->string('titulo'); // Ej: "Misión y Visión"
            $table->string('titulo_completo'); // Ej: "MV1: Misión y Visión"
            $table->text('descripcion')->nullable(); // Descripción corta
            $table->longText('contenido')->nullable(); // Contenido HTML principal
            $table->json('documentos')->nullable(); // Array de documentos/enlaces
            $table->text('icono')->nullable(); // SVG path del icono
            $table->string('color_primario')->default('#3B82F6'); // Color principal (hex)
            $table->string('color_secundario')->default('#60A5FA'); // Color secundario (hex)
            $table->string('gradiente_from')->default('blue-600'); // Clase Tailwind from
            $table->string('gradiente_to')->default('indigo-600'); // Clase Tailwind to
            $table->string('bg_light')->default('blue-50'); // Fondo claro
            $table->integer('orden')->default(0);
            $table->boolean('activo')->default(true);
            $table->foreignId('updated_by')->nullable()->constrained('users')->nullOnDelete();
            $table->timestamps();

            $table->index(['codigo', 'activo']);
            $table->index('orden');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('indicador55_variables');
    }
};
