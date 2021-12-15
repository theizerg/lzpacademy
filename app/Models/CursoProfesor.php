<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CursoProfesor extends Model
{
    use HasFactory; 


     public function curso()
    {
        return $this->BelongsTo('App\Models\Curso', 'curso_id');
    }


    public function nivel()
    {
        return $this->BelongsTo('App\Models\Nivel', 'nivel_id');
    }

    public function profesor()
    {
        return $this->BelongsTo('App\Models\Profesores', 'profesor_id');
    }


     public function calendario()
    {
        return $this->BelongsTo('App\Models\Calendario', 'calendario_id');
    }

}

