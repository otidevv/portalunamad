<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentoCarpeta extends Model
{
    use HasFactory;

    protected $table = 'documentos_carpetas';

    protected $fillable = [
        'nombre',
        'descripcion',
        'carpeta_padre_id',
        'icono',
        'color',
        'orden',
        'activo',
        'user_id'
    ];

    protected $casts = [
        'activo' => 'boolean',
        'orden' => 'integer'
    ];

    // Relación con carpeta padre (self-referencing)
    public function carpetaPadre()
    {
        return $this->belongsTo(DocumentoCarpeta::class, 'carpeta_padre_id');
    }

    // Relación con carpetas hijas
    public function carpetasHijas()
    {
        return $this->hasMany(DocumentoCarpeta::class, 'carpeta_padre_id')
                    ->where('activo', true)
                    ->orderBy('orden')
                    ->orderBy('nombre');
    }

    // Alias para carpetas hijas (para compatibilidad)
    public function hijos()
    {
        return $this->carpetasHijas();
    }

    // Relación con todos los descendientes (recursiva)
    public function descendientes()
    {
        return $this->carpetasHijas()->with('descendientes');
    }

    // Relación con documentos
    public function documentos()
    {
        return $this->hasMany(Documento::class, 'carpeta_id')
                    ->where('activo', true)
                    ->orderBy('orden')
                    ->orderBy('titulo');
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

    public function scopeRaiz($query)
    {
        return $query->whereNull('carpeta_padre_id');
    }

    public function scopeOrdenados($query)
    {
        return $query->orderBy('orden')->orderBy('nombre');
    }

    // Métodos de utilidad
    public function esRaiz()
    {
        return is_null($this->carpeta_padre_id);
    }

    public function tieneHijos()
    {
        return $this->carpetasHijas()->count() > 0 || $this->documentos()->count() > 0;
    }

    // Obtener la ruta completa (breadcrumb)
    public function getRutaCompleta()
    {
        $ruta = collect([$this]);
        $carpeta = $this->carpetaPadre;

        while ($carpeta) {
            $ruta->prepend($carpeta);
            $carpeta = $carpeta->carpetaPadre;
        }

        return $ruta;
    }

    // Contar total de documentos (incluyendo subcarpetas)
    public function getTotalDocumentosAttribute()
    {
        $total = $this->documentos()->count();
        
        foreach ($this->carpetasHijas as $subcarpeta) {
            $total += $subcarpeta->total_documentos;
        }
        
        return $total;
    }

    // Nivel de profundidad
    public function getNivelAttribute()
    {
        $nivel = 0;
        $carpeta = $this->carpetaPadre;

        while ($carpeta) {
            $nivel++;
            $carpeta = $carpeta->carpetaPadre;
        }

        return $nivel;
    }

    // Obtener icono con fallback
    public function getIconoCompletoAttribute()
    {
        $iconos = [
            'folder' => '📁',
            'folder-open' => '📂', 
            'archive' => '🗃️',
            'briefcase' => '💼',
            'book' => '📚',
            'library' => '🏛️'
        ];

        return $iconos[$this->icono] ?? '📁';
    }
}