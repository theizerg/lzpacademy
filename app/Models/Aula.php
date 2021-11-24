<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{
    use HasFactory;




      public function estructura(){

        return $this->BelongsTo('App\Models\Estructura', 'estructura_id');

    }
}
