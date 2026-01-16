<?php

namespace App\Http\Controllers;

use App\Models\Indicador55Variable;

class TransparenciaController extends Controller
{
    /**
     * Mostrar página principal del Indicador 55
     */
    public function indicador55Index()
    {
        $variables = Indicador55Variable::activas()->ordenadas()->get();

        return view('transparencia.indicador-55', compact('variables'));
    }

    /**
     * Mostrar una variable específica (mv1, mv2, ... mv12)
     * Usa la vista original de cada MV pero con datos de la BD
     */
    public function indicador55Show(string $codigo)
    {
        $variable = Indicador55Variable::where('codigo', $codigo)
            ->where('activo', true)
            ->firstOrFail();

        // Decodificar documentos si es string
        $documentos = $variable->documentos;
        if (is_string($documentos)) {
            $documentos = json_decode($documentos, true) ?? [];
        }

        // Obtener todas las variables para la navegación lateral
        $variables = Indicador55Variable::activas()->ordenadas()->get();

        return view('transparencia.indicador-55.' . $codigo, compact('variable', 'documentos', 'variables'));
    }
}
