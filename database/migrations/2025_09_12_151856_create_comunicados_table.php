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
        Schema::create('comunicados', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('comunicado_categoria_id');
            $table->string('titulo');
            $table->string('imagen');
            $table->longText('contenido')->nullable();
            $table->integer('duracion')->nullable();
            $table->dateTime('fecha_fin')->nullable();
            $table->tinyInteger('estado')->default(1);
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->foreign('comunicado_categoria_id')->references('id')->on('comunicado_categorias');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comunicados');
    }
};