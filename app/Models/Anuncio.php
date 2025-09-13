<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Anuncio extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'descripcion',
        'imagen_principal',
        'imagenes_adicionales',
        'enlaces',
        'categoria',
        'estado',
        'destacado',
        'fecha_publicacion',
        'fecha_expiracion',
        'vistas',
        'user_id'
    ];

    protected $casts = [
        'imagenes_adicionales' => 'array',
        'enlaces' => 'array',
        'destacado' => 'boolean',
        'fecha_publicacion' => 'date',
        'fecha_expiracion' => 'date',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /**
     * Relación con el usuario que creó el anuncio
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Scope para anuncios publicados
     */
    public function scopePublicado($query)
    {
        return $query->where('estado', 'publicado')
                    ->where(function($q) {
                        $q->whereNull('fecha_publicacion')
                          ->orWhere('fecha_publicacion', '<=', now());
                    })
                    ->where(function($q) {
                        $q->whereNull('fecha_expiracion')
                          ->orWhere('fecha_expiracion', '>=', now());
                    });
    }

    /**
     * Scope para anuncios destacados
     */
    public function scopeDestacado($query)
    {
        return $query->where('destacado', true);
    }

    /**
     * Scope por categoría
     */
    public function scopeCategoria($query, $categoria)
    {
        return $query->where('categoria', $categoria);
    }

    /**
     * Obtener URL de la imagen principal
     */
    public function getImagenPrincipalUrlAttribute()
    {
        if ($this->imagen_principal) {
            return Storage::url($this->imagen_principal);
        }
        return asset('img/default-anuncio.jpg');
    }

    /**
     * Obtener URLs de imágenes adicionales
     */
    public function getImagenesAdicionalesUrlsAttribute()
    {
        if ($this->imagenes_adicionales) {
            return collect($this->imagenes_adicionales)->map(function ($imagen) {
                return Storage::url($imagen);
            })->toArray();
        }
        return [];
    }

    /**
     * Incrementar contador de vistas
     */
    public function incrementarVistas()
    {
        $this->increment('vistas');
    }

    /**
     * Verificar si el anuncio está activo
     */
    public function getEstaActivoAttribute()
    {
        if ($this->estado !== 'publicado') {
            return false;
        }

        if ($this->fecha_publicacion && $this->fecha_publicacion > now()) {
            return false;
        }

        if ($this->fecha_expiracion && $this->fecha_expiracion < now()) {
            return false;
        }

        return true;
    }
}