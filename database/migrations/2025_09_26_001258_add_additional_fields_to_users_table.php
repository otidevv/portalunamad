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
        Schema::table('users', function (Blueprint $table) {
            $table->enum('tipo_documento', ['dni', 'carnet_extranjeria', 'pasaporte', 'cedula'])->nullable()->after('email');
            $table->string('numero_documento', 20)->nullable()->unique()->after('tipo_documento');
            $table->enum('rol', ['admin', 'editor', 'usuario', 'moderador'])->default('usuario')->after('password');
            $table->boolean('estado')->default(true)->after('rol');
            $table->string('avatar')->nullable()->after('estado');

            // Add indexes for better performance
            $table->index(['rol', 'estado']);
            $table->index('estado');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropIndex(['rol', 'estado']);
            $table->dropIndex(['estado']);
            $table->dropColumn([
                'tipo_documento',
                'numero_documento',
                'rol',
                'estado',
                'avatar'
            ]);
        });
    }
};