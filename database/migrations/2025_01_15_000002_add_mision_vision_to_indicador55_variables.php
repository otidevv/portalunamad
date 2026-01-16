<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('indicador55_variables', function (Blueprint $table) {
            $table->text('texto_mision')->nullable()->after('descripcion');
            $table->text('texto_vision')->nullable()->after('texto_mision');
        });
    }

    public function down(): void
    {
        Schema::table('indicador55_variables', function (Blueprint $table) {
            $table->dropColumn(['texto_mision', 'texto_vision']);
        });
    }
};
