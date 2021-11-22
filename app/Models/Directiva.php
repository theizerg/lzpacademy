<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Directiva extends Model
{
    use HasFactory;




    public function cargo(){

        return $this->BelongsTo('App\Models\Cargo', 'cargo_id');

    }

    public function tipodirectiva(){

        return $this->BelongsTo('App\Models\TipoDirectiva', 'tipo_directiva_id');

    }

}
