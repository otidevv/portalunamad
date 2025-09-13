<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\DocumentoCarpeta;
use App\Models\Documento;

return new class extends Migration
{
    public function up(): void
    {
        // Actualizar orden para carpetas existentes que no tienen orden
        $carpetasSinOrden = DocumentoCarpeta::whereNull('orden')->get();
        
        // Agrupar por carpeta padre
        $carpetasPorPadre = $carpetasSinOrden->groupBy('carpeta_padre_id');
        
        foreach ($carpetasPorPadre as $carpetaPadreId => $carpetas) {
            $orden = 1;
            foreach ($carpetas as $carpeta) {
                $carpeta->update(['orden' => $orden]);
                $orden++;
            }
        }

        // Actualizar orden para documentos existentes que no tienen orden
        $documentosSinOrden = Documento::whereNull('orden')->get();
        
        // Agrupar por carpeta
        $documentosPorCarpeta = $documentosSinOrden->groupBy('carpeta_id');
        
        foreach ($documentosPorCarpeta as $carpetaId => $documentos) {
            $orden = 1;
            foreach ($documentos as $documento) {
                $documento->update(['orden' => $orden]);
                $orden++;
            }
        }
    }

    public function down(): void
    {
        // No es necesario revertir, ya que solo estamos asignando valores
    }
};