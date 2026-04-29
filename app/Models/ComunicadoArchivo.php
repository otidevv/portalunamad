<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class ComunicadoArchivo extends Model
{
    protected $table = 'comunicado_archivos';

    protected $fillable = [
        'comunicado_id',
        'ruta',
        'nombre_original',
        'extension',
        'orden',
    ];

    protected $appends = ['url'];

    public function comunicado()
    {
        return $this->belongsTo(Comunicado::class);
    }

    public function getUrlAttribute()
    {
        if (!$this->ruta) {
            return null;
        }

        if (str_starts_with($this->ruta, 'http://') || str_starts_with($this->ruta, 'https://')) {
            return $this->ruta;
        }

        return Storage::url($this->ruta);
    }
}
