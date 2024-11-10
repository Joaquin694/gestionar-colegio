<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Curso
 *
 * @property $id
 * @property $nombre
 * @property $descripcion
 * @property $fecha_inicio
 * @property $fecha_fin
 * @property $estado
 * @property $docente_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Docente $docente
 * @property Asistencia[] $asistencias
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Curso extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre', 'descripcion', 'fecha_inicio', 'fecha_fin', 'estado', 'docente_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function docente()
    {
        return $this->belongsTo(\App\Models\Docente::class, 'docente_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function asistencias()
    {
        return $this->hasMany(\App\Models\Asistencia::class, 'id', 'curso_id');
    }
    
}
