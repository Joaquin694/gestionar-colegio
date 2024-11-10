<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Asistencia
 *
 * @property $id
 * @property $estudiante_id
 * @property $docente_id
 * @property $curso_id
 * @property $fecha
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @property Curso $curso
 * @property Docente $docente
 * @property Estudiante $estudiante
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Asistencia extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['estudiante_id', 'docente_id', 'curso_id', 'fecha', 'estado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function curso()
    {
        return $this->belongsTo(\App\Models\Curso::class, 'curso_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function docente()
    {
        return $this->belongsTo(\App\Models\Docente::class, 'docente_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function estudiante()
    {
        return $this->belongsTo(\App\Models\Estudiante::class, 'estudiante_id', 'id');
    }
    
}
