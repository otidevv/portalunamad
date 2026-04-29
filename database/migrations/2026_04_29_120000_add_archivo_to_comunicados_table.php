<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('comunicados', function (Blueprint $table) {
            $table->string('archivo')->nullable()->after('imagen');
            $table->string('archivo_nombre')->nullable()->after('archivo');
        });
    }

    public function down(): void
    {
        Schema::table('comunicados', function (Blueprint $table) {
            $table->dropColumn(['archivo', 'archivo_nombre']);
        });
    }
};
