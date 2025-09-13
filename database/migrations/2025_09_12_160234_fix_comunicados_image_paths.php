<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Corregir rutas de imágenes que tienen el prefijo 'storage/' incorrecto
        DB::table('comunicados')
            ->where('imagen', 'like', 'storage/%')
            ->update([
                'imagen' => DB::raw("REPLACE(imagen, 'storage/', 'comunicados/')")
            ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Revertir los cambios
        DB::table('comunicados')
            ->where('imagen', 'like', 'comunicados/%')
            ->update([
                'imagen' => DB::raw("REPLACE(imagen, 'comunicados/', 'storage/')")
            ]);
    }
};