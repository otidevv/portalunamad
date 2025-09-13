<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Comunicado extends Model
{
    use HasFactory;

    protected $fillable = [
        'comunicado_categoria_id',
        'titulo',
        'oficina',
        'imagen',
        'contenido',
        'duracion',
        'fecha_fin',
        'estado',
        'user_id'
    ];

    protected $casts = [
        'fecha_fin' => 'datetime',
        'estado' => 'boolean',
        'duracion' => 'integer'
    ];

    public function categoria()
    {
        return $this->belongsTo(ComunicadoCategoria::class, 'comunicado_categoria_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeActivos($query)
    {
        return $query->where('estado', 1);
    }

    public function scopeVigentes($query)
    {
        return $query->where(function($q) {
            $q->whereNull('fecha_fin')
              ->orWhere('fecha_fin', '>', now());
        });
    }

    public function getImagenUrlAttribute()
    {
        if (!$this->imagen) {
            return null;
        }
        
        // Si la ruta ya incluye 'storage/', solo agregamos el dominio
        if (str_starts_with($this->imagen, 'storage/')) {
            return asset($this->imagen);
        }
        
        // Si la imagen comienza con http:// o https://, es una URL completa
        if (str_starts_with($this->imagen, 'http://') || str_starts_with($this->imagen, 'https://')) {
            return $this->imagen;
        }
        
        // La imagen está guardada en storage/app/public/comunicados/
        // Storage::url() agregará /storage/ al principio
        return Storage::url($this->imagen);
    }

    public function getEstadoTextoAttribute()
    {
        return $this->estado ? 'Activo' : 'Inactivo';
    }
}