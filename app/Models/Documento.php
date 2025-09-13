<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'descripcion',
        'enlace',
        'tipo_enlace',
        'icono',
        'tipo_documento',
        'tamaño',
        'descargas',
        'vistas',
        'orden',
        'activo',
        'destacado',
        'fecha_vencimiento',
        'carpeta_id',
        'user_id'
    ];

    protected $casts = [
        'activo' => 'boolean',
        'destacado' => 'boolean',
        'orden' => 'integer',
        'descargas' => 'integer',
        'vistas' => 'integer',
        'tamaño' => 'integer',
        'fecha_vencimiento' => 'date'
    ];

    // Relación con carpeta
    public function carpeta()
    {
        return $this->belongsTo(DocumentoCarpeta::class, 'carpeta_id');
    }

    // Relación con usuario creador
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Scopes
    public function scopeActivos($query)
    {
        return $query->where('activo', true);
    }

    public function scopeDestacados($query)
    {
        return $query->where('destacado', true);
    }

    public function scopeVigentes($query)
    {
        return $query->where(function($q) {
            $q->whereNull('fecha_vencimiento')
              ->orWhere('fecha_vencimiento', '>', now());
        });
    }

    public function scopeOrdenados($query)
    {
        return $query->orderBy('orden')->orderBy('titulo');
    }

    // Métodos de utilidad
    public function estaVencido()
    {
        return $this->fecha_vencimiento && $this->fecha_vencimiento <= now();
    }

    public function incrementarVistas()
    {
        $this->increment('vistas');
    }

    public function incrementarDescargas()
    {
        $this->increment('descargas');
    }

    // Obtener icono basado en tipo de documento
    public function getIconoCompletoAttribute()
    {
        $iconos = [
            'pdf' => '📄',
            'doc' => '📝',
            'docx' => '📝',
            'xls' => '📊',
            'xlsx' => '📊',
            'ppt' => '📋',
            'pptx' => '📋',
            'txt' => '📃',
            'zip' => '🗜️',
            'rar' => '🗜️',
            'jpg' => '🖼️',
            'jpeg' => '🖼️',
            'png' => '🖼️',
            'gif' => '🖼️',
            'mp4' => '🎥',
            'mp3' => '🎵',
            'wav' => '🎵',
            'url' => '🔗',
            'link' => '🔗'
        ];

        return $iconos[$this->tipo_documento] ?? '📄';
    }

    // Formatear tamaño de archivo
    public function getTamañoFormateadoAttribute()
    {
        if (!$this->tamaño) return null;

        $bytes = $this->tamaño * 1024; // Convertir KB a bytes
        $units = ['B', 'KB', 'MB', 'GB'];
        $unitIndex = 0;

        while ($bytes >= 1024 && $unitIndex < count($units) - 1) {
            $bytes /= 1024;
            $unitIndex++;
        }

        return round($bytes, 2) . ' ' . $units[$unitIndex];
    }

    // Obtener URL del enlace
    public function getUrlCompletoAttribute()
    {
        switch ($this->tipo_enlace) {
            case 'archivo':
                return asset('storage/' . $this->enlace);
            case 'interno':
                return url($this->enlace);
            case 'url':
            default:
                return $this->enlace;
        }
    }

    // Obtener ruta completa de la carpeta
    public function getRutaCompletaAttribute()
    {
        return $this->carpeta ? $this->carpeta->getRutaCompleta() : collect();
    }

    // Verificar si es un enlace externo
    public function esEnlaceExterno()
    {
        return $this->tipo_enlace === 'url' && 
               (str_starts_with($this->enlace, 'http://') || str_starts_with($this->enlace, 'https://'));
    }

    // Obtener color de etiqueta según estado
    public function getColorEstadoAttribute()
    {
        if (!$this->activo) return 'gray';
        if ($this->estaVencido()) return 'red';
        if ($this->destacado) return 'yellow';
        return 'green';
    }

    // Obtener texto de estado
    public function getTextoEstadoAttribute()
    {
        if (!$this->activo) return 'Inactivo';
        if ($this->estaVencido()) return 'Vencido';
        if ($this->destacado) return 'Destacado';
        return 'Activo';
    }
}