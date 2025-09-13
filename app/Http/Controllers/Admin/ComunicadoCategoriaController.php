<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ComunicadoCategoria;
use Illuminate\Http\Request;

class ComunicadoCategoriaController extends Controller
{
    public function index()
    {
        $categorias = ComunicadoCategoria::withCount('comunicados')
            ->orderBy('nombre')
            ->paginate(10);
            
        return view('admin.comunicado-categorias.index', compact('categorias'));
    }

    public function create()
    {
        return view('admin.comunicado-categorias.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255|unique:comunicado_categorias,nombre',
            'descripcion' => 'nullable|string',
            'estado' => 'boolean'
        ], [
            'nombre.required' => 'El nombre es obligatorio.',
            'nombre.unique' => 'Ya existe una categoría con este nombre.',
        ]);

        ComunicadoCategoria::create($validated);

        return redirect()->route('admin.comunicado-categorias.index')
            ->with('success', 'Categoría creada exitosamente.');
    }

    public function show(ComunicadoCategoria $comunicadoCategoria)
    {
        $comunicadoCategoria->load(['comunicados' => function($query) {
            $query->with('user')->orderBy('created_at', 'desc');
        }]);
        
        return view('admin.comunicado-categorias.show', compact('comunicadoCategoria'));
    }

    public function edit(ComunicadoCategoria $comunicadoCategoria)
    {
        return view('admin.comunicado-categorias.edit', compact('comunicadoCategoria'));
    }

    public function update(Request $request, ComunicadoCategoria $comunicadoCategoria)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255|unique:comunicado_categorias,nombre,' . $comunicadoCategoria->id,
            'descripcion' => 'nullable|string',
            'estado' => 'boolean'
        ], [
            'nombre.required' => 'El nombre es obligatorio.',
            'nombre.unique' => 'Ya existe una categoría con este nombre.',
        ]);

        $comunicadoCategoria->update($validated);

        return redirect()->route('admin.comunicado-categorias.index')
            ->with('success', 'Categoría actualizada exitosamente.');
    }

    public function destroy(ComunicadoCategoria $comunicadoCategoria)
    {
        // Verificar si tiene comunicados asociados
        if ($comunicadoCategoria->comunicados()->count() > 0) {
            return redirect()->route('admin.comunicado-categorias.index')
                ->with('error', 'No se puede eliminar la categoría porque tiene comunicados asociados.');
        }

        $comunicadoCategoria->delete();

        return redirect()->route('admin.comunicado-categorias.index')
            ->with('success', 'Categoría eliminada exitosamente.');
    }

    public function toggleEstado(ComunicadoCategoria $comunicadoCategoria)
    {
        $comunicadoCategoria->estado = !$comunicadoCategoria->estado;
        $comunicadoCategoria->save();

        return response()->json([
            'success' => true,
            'estado' => $comunicadoCategoria->estado,
            'message' => $comunicadoCategoria->estado ? 'Categoría activada.' : 'Categoría desactivada.'
        ]);
    }
}