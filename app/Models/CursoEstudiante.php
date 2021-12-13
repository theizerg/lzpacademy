<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CursoEstudiante extends Model
{
    use HasFactory;



    public function estudiante()
    {
        return $this->belongsTo(Estudiante::class, 'alumno_id');
    }

    public function curso()
    {
        return $this->belongsTo(Curso::class, 'curso_alumno_id');
    }
}
