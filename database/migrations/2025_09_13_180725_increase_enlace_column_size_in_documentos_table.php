<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('documentos', function (Blueprint $table) {
            // Cambiar la columna enlace de VARCHAR(255) a TEXT para URLs largas
            $table->text('enlace')->change();
        });
    }

    public function down(): void
    {
        Schema::table('documentos', function (Blueprint $table) {
            // Revertir a VARCHAR(255) si es necesario
            $table->string('enlace', 255)->change();
        });
    }
};