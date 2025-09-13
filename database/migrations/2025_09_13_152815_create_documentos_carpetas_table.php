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
        Schema::create('documentos_carpetas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->text('descripcion')->nullable();
            $table->unsignedBigInteger('carpeta_padre_id')->nullable();
            $table->string('icono')->default('folder');
            $table->string('color')->default('#3B82F6');
            $table->integer('orden')->default(0);
            $table->boolean('activo')->default(true);
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->timestamps();
            
            // Índices
            $table->index(['carpeta_padre_id', 'activo']);
            $table->index('orden');
            
            // Relación jerárquica
            $table->foreign('carpeta_padre_id')
                  ->references('id')
                  ->on('documentos_carpetas')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documentos_carpetas');
    }
};
