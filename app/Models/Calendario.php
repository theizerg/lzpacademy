<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calendario extends Model
{
    use HasFactory;





     public function colegio()
    {
        return $this->hasOne('App\Models\Colegio', 'calendario_id');
    }

    public function periodo()
    {
        return $this->hasMany('App\Models\Periodo', 'calendario_id');
    }

    public function periodoActivo()
    {
        return $this->hasOne('App\Models\Periodo', 'calendario_id')->where('status', 1);
    }                  
}
