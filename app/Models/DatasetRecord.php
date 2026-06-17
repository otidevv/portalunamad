<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DatasetRecord extends Model
{
    use HasFactory;

    /**
     * Las filas de datos no llevan created_at/updated_at (tabla de almacenamiento masivo).
     */
    public $timestamps = false;

    protected $fillable = [
        'dataset_id',
        'fila',
        'datos',
    ];

    protected $casts = [
        'datos' => 'array',
        'fila' => 'integer',
    ];

    public function dataset(): BelongsTo
    {
        return $this->belongsTo(Dataset::class);
    }
}
