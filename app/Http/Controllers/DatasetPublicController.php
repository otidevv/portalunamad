<?php

namespace App\Http\Controllers;

use App\Models\Dataset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class DatasetPublicController extends Controller
{
    /**
     * Página pública con el gráfico de un dataset.
     */
    public function show(Dataset $dataset)
    {
        abort_unless($dataset->activo, 404);

        return view('datasets.show', compact('dataset'));
    }

    /**
     * Serie agregada (JSON) que consume el gráfico del portal.
     * Se cachea por dataset + parámetros para no reprocesar todas las filas en cada visita;
     * la clave incluye updated_at, así que se invalida sola al editar el dataset.
     */
    public function datos(Request $request, Dataset $dataset)
    {
        abort_unless($dataset->activo, 404);

        $x = $request->query('x');
        $y = $request->query('y');
        $agg = $request->query('agg', 'sum');

        $clave = sprintf(
            'dataset_serie:%d:%d:%s',
            $dataset->id,
            optional($dataset->updated_at)->getTimestamp() ?? 0,
            md5(($x ?? '').'|'.($y ?? '').'|'.$agg)
        );

        $serie = Cache::remember($clave, now()->addMinutes(10), fn () => $dataset->serie($x, $y, $agg));

        return response()->json($serie);
    }
}
