<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComunicadoCategoria extends Model
{
    use HasFactory;

    protected $table = 'comunicado_categorias';

    protected $fillable = [
        'nombre',
        'descripcion',
        'estado'
    ];

    protected $casts = [
        'estado' => 'boolean',
    ];

    public function comunicados()
    {
        return $this->hasMany(Comunicado::class, 'comunicado_categoria_id');
    }

    public function scopeActivos($query)
    {
        return $query->where('estado', 1);
    }
}