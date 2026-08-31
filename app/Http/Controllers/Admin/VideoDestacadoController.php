<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\VideoDestacado;
use Illuminate\Http\Request;

class VideoDestacadoController extends Controller
{
    public function index()
    {
        $videos = VideoDestacado::ordenado()->get();

        return view('admin.videos-destacados.index', compact('videos'));
    }

    public function create()
    {
        return view('admin.videos-destacados.create');
    }

    public function store(Request $request)
    {
        $validated = $this->validar($request);

        VideoDestacado::create($validated);

        return redirect()->route('admin.videos-destacados.index')
            ->with('success', 'Video creado exitosamente.');
    }

    public function edit(VideoDestacado $video)
    {
        return view('admin.videos-destacados.edit', compact('video'));
    }

    public function update(Request $request, VideoDestacado $video)
    {
        $validated = $this->validar($request);

        $video->update($validated);

        return redirect()->route('admin.videos-destacados.index')
            ->with('success', 'Video actualizado exitosamente.');
    }

    public function destroy(VideoDestacado $video)
    {
        $video->delete();

        return redirect()->route('admin.videos-destacados.index')
            ->with('success', 'Video eliminado exitosamente.');
    }

    public function toggleEstado(VideoDestacado $video)
    {
        $video->activo = ! $video->activo;
        $video->save();

        return response()->json([
            'success' => true,
            'estado' => $video->activo,
            'message' => $video->activo ? 'Video activado.' : 'Video desactivado.',
        ]);
    }

    /**
     * Reglas comunes a crear y actualizar.
     */
    protected function validar(Request $request)
    {
        $validated = $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'nullable|string|max:1000',
            'url' => [
                'required',
                'url',
                'max:2000',
                function ($atributo, $valor, $fallar) {
                    $tipo = (new VideoDestacado(['url' => $valor]))->tipo;

                    if ($tipo === 'desconocido') {
                        $fallar('No se reconoce el enlace. Debe ser de YouTube, de Google Drive, o la dirección directa de un archivo .mp4 / .webm.');
                    }
                },
            ],
            'retardo' => 'nullable|integer|min:0|max:60000',
            'orden' => 'nullable|integer|min:0',
        ], [
            'titulo.required' => 'El título es obligatorio.',
            'url.required' => 'El enlace del video es obligatorio.',
            'url.url' => 'El enlace debe ser una URL válida (ej: https://...).',
        ]);

        $validated['descripcion'] = $request->input('descripcion');
        $validated['retardo'] = $request->input('retardo', 1500);
        $validated['orden'] = $request->input('orden', 0);
        $validated['autoplay'] = $request->boolean('autoplay');
        $validated['mostrar_una_vez'] = $request->boolean('mostrar_una_vez');
        $validated['activo'] = $request->boolean('activo');

        return $validated;
    }
}
