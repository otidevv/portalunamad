<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnlaceNormativo extends Model
{
    use HasFactory;

    protected $table = 'enlaces_normativos';

    protected $fillable = [
        'titulo',
        'url',
        'orden',
        'activo',
    ];

    protected $casts = [
        'activo' => 'boolean',
        'orden' => 'integer',
    ];

    /**
     * Solo enlaces activos (visibles en el portal público).
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
}
