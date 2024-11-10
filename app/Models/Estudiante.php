<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Estudiante
 *
 * @property $id
 * @property $nombre
 * @property $apellido
 * @property $fecha_nacimiento
 * @property $direccion
 * @property $telefono
 * @property $email
 * @property $fecha_matricula
 * @property $estado_matricula
 * @property $created_at
 * @property $updated_at
 *
 * @property Asistencia[] $asistencias
 * @property Matricula[] $matriculas
 * @property Pago[] $pagos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Estudiante extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre', 'apellido', 'fecha_nacimiento', 'direccion', 'telefono', 'email', 'fecha_matricula', 'estado_matricula'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function asistencias()
    {
        return $this->hasMany(\App\Models\Asistencia::class, 'id', 'estudiante_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function matriculas()
    {
        return $this->hasMany(\App\Models\Matricula::class, 'id', 'estudiante_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pagos()
    {
        return $this->hasMany(\App\Models\Pago::class, 'id', 'estudiante_id');
    }
    
}
