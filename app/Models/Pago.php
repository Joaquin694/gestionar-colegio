<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pago
 *
 * @property $id
 * @property $estudiante_id
 * @property $monto
 * @property $fecha_pago
 * @property $concepto
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @property Estudiante $estudiante
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pago extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['estudiante_id', 'monto', 'fecha_pago', 'concepto', 'estado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function estudiante()
    {
        return $this->belongsTo(\App\Models\Estudiante::class, 'estudiante_id', 'id');
    }
    
}
