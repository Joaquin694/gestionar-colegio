<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    use HasFactory;

    protected $fillable = [
        'estudiante_id', 'fecha', 'tipo', 'monto', 'estado'
    ];

    // Relación de una matrícula con un estudiante
    public function estudiante()
    {
        return $this->belongsTo(Estudiante::class);
    }

    // Relación de una matrícula con un curso
    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }
}