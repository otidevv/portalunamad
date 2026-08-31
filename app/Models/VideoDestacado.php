<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoDestacado extends Model
{
    use HasFactory;

    protected $table = 'videos_destacados';

    protected $fillable = [
        'titulo',
        'descripcion',
        'url',
        'autoplay',
        'mostrar_una_vez',
        'retardo',
        'orden',
        'activo',
    ];

    protected $casts = [
        'autoplay' => 'boolean',
        'mostrar_una_vez' => 'boolean',
        'retardo' => 'integer',
        'orden' => 'integer',
        'activo' => 'boolean',
    ];

    /**
     * Solo videos activos (visibles en el portal público).
     */
    public function scopeActivos($query)
    {
        return $query->where('activo', true);
    }

    /**
     * Orden de visualización definido en el admin.
     */
    public function scopeOrdenado($query)
    {
        return $query->orderBy('orden')->orderBy('id');
    }

    /**
     * Tipo de video detectado a partir de la URL pegada en el admin:
     * youtube | drive | archivo | desconocido
     */
    public function getTipoAttribute()
    {
        $url = trim((string) $this->url);

        if ($url === '') {
            return 'desconocido';
        }

        if ($this->extraerIdYoutube($url)) {
            return 'youtube';
        }

        if ($this->extraerIdDrive($url)) {
            return 'drive';
        }

        if (preg_match('/\.(mp4|webm|ogg|ogv|mov|m4v)(\?.*)?$/i', $url)) {
            return 'archivo';
        }

        return 'desconocido';
    }

    /**
     * URL lista para usarse: en <iframe> para YouTube/Drive, en <video> para archivos.
     *
     * El área de imagen puede pegar el enlace tal como lo copia de Drive o YouTube;
     * aquí se normaliza al formato que sí permite incrustar.
     */
    public function getEmbedUrlAttribute()
    {
        $url = trim((string) $this->url);

        if ($id = $this->extraerIdYoutube($url)) {
            $params = [
                'rel' => 0,
                'modestbranding' => 1,
                'playsinline' => 1,
            ];

            // El autoplay solo lo permiten los navegadores si el video va silenciado.
            if ($this->autoplay) {
                $params['autoplay'] = 1;
                $params['mute'] = 1;
            }

            return 'https://www.youtube.com/embed/'.$id.'?'.http_build_query($params);
        }

        if ($id = $this->extraerIdDrive($url)) {
            // Drive no admite autoplay ni loop: siempre se muestra con su botón de play.
            return 'https://drive.google.com/file/d/'.$id.'/preview';
        }

        return $url;
    }

    /**
     * Indica si la URL pudo interpretarse (se usa para avisar en el admin).
     */
    public function getEsValidoAttribute()
    {
        return $this->tipo !== 'desconocido';
    }

    /**
     * Etiqueta legible del tipo, para el listado del admin.
     */
    public function getTipoEtiquetaAttribute()
    {
        return [
            'youtube' => 'YouTube',
            'drive' => 'Google Drive',
            'archivo' => 'Archivo de video',
            'desconocido' => 'No reconocido',
        ][$this->tipo];
    }

    /**
     * Extrae el ID de un enlace de YouTube en cualquiera de sus formatos.
     */
    protected function extraerIdYoutube($url)
    {
        $patrones = [
            '#youtube\.com/watch\?(?:.*&)?v=([A-Za-z0-9_-]{11})#i',
            '#youtu\.be/([A-Za-z0-9_-]{11})#i',
            '#youtube\.com/embed/([A-Za-z0-9_-]{11})#i',
            '#youtube\.com/shorts/([A-Za-z0-9_-]{11})#i',
            '#youtube\.com/live/([A-Za-z0-9_-]{11})#i',
            '#youtube\.com/v/([A-Za-z0-9_-]{11})#i',
        ];

        foreach ($patrones as $patron) {
            if (preg_match($patron, $url, $coincidencias)) {
                return $coincidencias[1];
            }
        }

        return null;
    }

    /**
     * Extrae el ID de un enlace de Google Drive en cualquiera de sus formatos
     * (/file/d/ID/view, open?id=ID, uc?id=ID...).
     */
    protected function extraerIdDrive($url)
    {
        if (! preg_match('#drive\.google\.com#i', $url)) {
            return null;
        }

        if (preg_match('#/file/d/([A-Za-z0-9_-]{10,})#i', $url, $coincidencias)) {
            return $coincidencias[1];
        }

        if (preg_match('#[?&]id=([A-Za-z0-9_-]{10,})#i', $url, $coincidencias)) {
            return $coincidencias[1];
        }

        return null;
    }
}
