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
        Schema::create('documentos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->text('descripcion')->nullable();
            $table->string('enlace');
            $table->string('tipo_enlace')->default('url'); // url, archivo, interno
            $table->string('icono')->default('file-text');
            $table->string('tipo_documento')->default('pdf'); // pdf, doc, xls, ppt, etc
            $table->integer('tamaño')->nullable(); // en KB
            $table->integer('descargas')->default(0);
            $table->integer('vistas')->default(0);
            $table->integer('orden')->default(0);
            $table->boolean('activo')->default(true);
            $table->boolean('destacado')->default(false);
            $table->date('fecha_vencimiento')->nullable();
            $table->foreignId('carpeta_id')->constrained('documentos_carpetas')->onDelete('cascade');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->timestamps();
            
            // Índices
            $table->index(['carpeta_id', 'activo']);
            $table->index(['destacado', 'activo']);
            $table->index('orden');
            $table->index('tipo_documento');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documentos');
    }
};
