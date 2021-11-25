<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periodo extends Model
{
    use HasFactory;



     public function scopeActivo($query)
    {
        return $query->where('status', 1);
    }

    public function scopeComboData($query)
    {
        return $query->addSelect('id', 'nb_periodo', 'id_calendario');
    }
    
                           

    public function calendario()
    {
        return $this->BelongsTo('App\Models\Calendario', 'calendario_id');
    }

    public function planEvaluacion()
    {
        return $this->hasMany('App\Models\PlanEvaluacion', 'periodo_id');
    }
}
