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
        Schema::create('anuncios', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->text('descripcion');
            $table->string('imagen_principal')->nullable();
            $table->json('imagenes_adicionales')->nullable(); // Array de imágenes adicionales
            $table->json('enlaces')->nullable(); // Array de enlaces relacionados
            $table->enum('categoria', ['noticia', 'evento', 'comunicado', 'convocatoria', 'otro'])->default('noticia');
            $table->enum('estado', ['borrador', 'publicado', 'archivado'])->default('borrador');
            $table->boolean('destacado')->default(false);
            $table->date('fecha_publicacion')->nullable();
            $table->date('fecha_expiracion')->nullable();
            $table->integer('vistas')->default(0);
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->timestamps();
            
            // Índices para mejorar búsquedas
            $table->index('estado');
            $table->index('categoria');
            $table->index('destacado');
            $table->index('fecha_publicacion');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anuncios');
    }
};