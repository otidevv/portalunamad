<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EnlaceNormativo;
use Illuminate\Http\Request;

class EnlaceNormativoController extends Controller
{
    public function index()
    {
        $enlaces = EnlaceNormativo::ordenado()->get();

        return view('admin.enlaces-normativos.index', compact('enlaces'));
    }

    public function create()
    {
        return view('admin.enlaces-normativos.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'titulo' => 'required|string|max:255',
            'url' => 'required|url|max:2000',
            'orden' => 'nullable|integer|min:0',
        ], [
            'titulo.required' => 'El título es obligatorio.',
            'url.required' => 'El enlace es obligatorio.',
            'url.url' => 'El enlace debe ser una URL válida (ej: https://...).',
        ]);

        $validated['orden'] = $request->input('orden', 0);
        $validated['activo'] = $request->boolean('activo');

        EnlaceNormativo::create($validated);

        return redirect()->route('admin.enlaces-normativos.index')
            ->with('success', 'Enlace creado exitosamente.');
    }

    public function edit(EnlaceNormativo $enlace)
    {
        return view('admin.enlaces-normativos.edit', compact('enlace'));
    }

    public function update(Request $request, EnlaceNormativo $enlace)
    {
        $validated = $request->validate([
            'titulo' => 'required|string|max:255',
            'url' => 'required|url|max:2000',
            'orden' => 'nullable|integer|min:0',
        ], [
            'titulo.required' => 'El título es obligatorio.',
            'url.required' => 'El enlace es obligatorio.',
            'url.url' => 'El enlace debe ser una URL válida (ej: https://...).',
        ]);

        $validated['orden'] = $request->input('orden', 0);
        $validated['activo'] = $request->boolean('activo');

        $enlace->update($validated);

        return redirect()->route('admin.enlaces-normativos.index')
            ->with('success', 'Enlace actualizado exitosamente.');
    }

    public function destroy(EnlaceNormativo $enlace)
    {
        $enlace->delete();

        return redirect()->route('admin.enlaces-normativos.index')
            ->with('success', 'Enlace eliminado exitosamente.');
    }

    public function toggleEstado(EnlaceNormativo $enlace)
    {
        $enlace->activo = ! $enlace->activo;
        $enlace->save();

        return response()->json([
            'success' => true,
            'estado' => $enlace->activo,
            'message' => $enlace->activo ? 'Enlace activado.' : 'Enlace desactivado.',
        ]);
    }
}
