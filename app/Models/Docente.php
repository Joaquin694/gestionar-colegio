<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Docente
 *
 * @property $id
 * @property $nombre
 * @property $apellido
 * @property $email
 * @property $telefono
 * @property $departamento
 * @property $fecha_contratacion
 * @property $estado_empleo
 * @property $created_at
 * @property $updated_at
 *
 * @property Asistencia[] $asistencias
 * @property Curso[] $cursos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Docente extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre', 'apellido', 'email', 'telefono', 'departamento', 'fecha_contratacion', 'estado_empleo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function asistencias()
    {
        return $this->hasMany(\App\Models\Asistencia::class, 'id', 'docente_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cursos()
    {
        return $this->hasMany(\App\Models\Curso::class, 'id', 'docente_id');
    }
    
}
