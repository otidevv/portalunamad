<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('comunicado_archivos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('comunicado_id')->constrained('comunicados')->cascadeOnDelete();
            $table->string('ruta');
            $table->string('nombre_original')->nullable();
            $table->string('extension', 10)->nullable();
            $table->unsignedInteger('orden')->default(0);
            $table->timestamps();
        });

        // Migrar el archivo único existente (si lo hay) a la nueva tabla
        if (Schema::hasColumn('comunicados', 'archivo')) {
            $rows = DB::table('comunicados')->whereNotNull('archivo')->get();
            foreach ($rows as $row) {
                DB::table('comunicado_archivos')->insert([
                    'comunicado_id'   => $row->id,
                    'ruta'            => $row->archivo,
                    'nombre_original' => $row->archivo_nombre ?? null,
                    'extension'       => strtolower(pathinfo($row->archivo, PATHINFO_EXTENSION)),
                    'orden'           => 0,
                    'created_at'      => now(),
                    'updated_at'      => now(),
                ]);
            }

            Schema::table('comunicados', function (Blueprint $table) {
                $table->dropColumn(['archivo', 'archivo_nombre']);
            });
        }
    }

    public function down(): void
    {
        Schema::table('comunicados', function (Blueprint $table) {
            $table->string('archivo')->nullable()->after('imagen');
            $table->string('archivo_nombre')->nullable()->after('archivo');
        });

        // Restaurar el primer archivo de cada comunicado al campo único
        $first = DB::table('comunicado_archivos')
            ->orderBy('comunicado_id')
            ->orderBy('orden')
            ->get()
            ->groupBy('comunicado_id');

        foreach ($first as $comunicadoId => $archivos) {
            $a = $archivos->first();
            DB::table('comunicados')->where('id', $comunicadoId)->update([
                'archivo'        => $a->ruta,
                'archivo_nombre' => $a->nombre_original,
            ]);
        }

        Schema::dropIfExists('comunicado_archivos');
    }
};
