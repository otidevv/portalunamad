<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Indicador55Variable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Indicador55Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $variables = Indicador55Variable::ordenadas()->get();

        return view('admin.indicador55.index', compact('variables'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Indicador55Variable $indicador55)
    {
        return view('admin.indicador55.edit', compact('indicador55'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Indicador55Variable $indicador55)
    {
        $validated = $request->validate([
            'titulo' => 'required|string|max:255',
            'titulo_completo' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'texto_mision' => 'nullable|string',
            'texto_vision' => 'nullable|string',
            'contenido' => 'nullable|string',
            'documentos' => 'nullable|string',
            'icono' => 'nullable|string',
            'color_primario' => 'nullable|string|max:20',
            'color_secundario' => 'nullable|string|max:20',
            'gradiente_from' => 'nullable|string|max:50',
            'gradiente_to' => 'nullable|string|max:50',
            'bg_light' => 'nullable|string|max:50',
            'activo' => 'boolean',
        ]);

        // Procesar documentos JSON
        if (isset($validated['documentos'])) {
            $documentos = json_decode($validated['documentos'], true);
            if (json_last_error() === JSON_ERROR_NONE) {
                $validated['documentos'] = $documentos;
            } else {
                return back()->withErrors(['documentos' => 'El formato JSON de documentos no es válido.'])->withInput();
            }
        }

        $validated['activo'] = $request->has('activo');
        $validated['updated_by'] = Auth::id();

        $indicador55->update($validated);

        return redirect()
            ->route('admin.indicador55.index')
            ->with('success', 'Variable del Indicador 55 actualizada correctamente.');
    }

    /**
     * Toggle the active status of the specified resource.
     */
    public function toggleEstado(Indicador55Variable $indicador55)
    {
        $indicador55->update([
            'activo' => !$indicador55->activo,
            'updated_by' => Auth::id(),
        ]);

        return back()->with('success', 'Estado actualizado correctamente.');
    }
}
