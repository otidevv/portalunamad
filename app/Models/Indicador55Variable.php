<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Indicador55Variable extends Model
{
    use HasFactory;

    protected $table = 'indicador55_variables';

    protected $fillable = [
        'codigo',
        'titulo',
        'titulo_completo',
        'descripcion',
        'texto_mision',
        'texto_vision',
        'contenido',
        'documentos',
        'icono',
        'color_primario',
        'color_secundario',
        'gradiente_from',
        'gradiente_to',
        'bg_light',
        'orden',
        'activo',
        'updated_by',
    ];

    protected $casts = [
        'documentos' => 'array',
        'activo' => 'boolean',
        'orden' => 'integer',
    ];

    /**
     * Usuario que actualizó el registro
     */
    public function updatedByUser(): BelongsTo
    {
        return $this->belongsTo(User::class, 'updated_by');
    }

    /**
     * Scope para variables activas
     */
    public function scopeActivas($query)
    {
        return $query->where('activo', true);
    }

    /**
     * Scope para ordenar por orden
     */
    public function scopeOrdenadas($query)
    {
        return $query->orderBy('orden');
    }

    /**
     * Obtener variable por código
     */
    public static function porCodigo(string $codigo)
    {
        return static::where('codigo', $codigo)->first();
    }

    /**
     * Obtener el número de la variable (1-12)
     */
    public function getNumeroAttribute(): int
    {
        return (int) str_replace('mv', '', $this->codigo);
    }

    /**
     * Obtener la ruta pública
     */
    public function getRutaPublicaAttribute(): string
    {
        return "/transparencia/indicador-55/{$this->codigo}";
    }
}
