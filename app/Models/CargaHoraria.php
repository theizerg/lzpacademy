<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CargaHoraria extends Model
{
    use HasFactory;




     protected $casts      = [
                            'hh_inicio'  => 'datetime:H:i',
                            'hh_fin'     => 'datetime:H:i',
                            ];

   

    public function scopeActivo($query)
    {
        return $query->where('id_status', 1);
	}

	public function scopeComboData($query)
    {
        return $query->addSelect('id', 'nb_carga_horaria');
    }

  
                         

    public function turno()
    {
        return $this->BelongsTo('App\Models\Turno', 'turno_id');
    }

    public function horaAcademica()
    {
        return $this->BelongsTo('App\Models\HoraAcademica', 'hora_academica_id');
    }

    /* public function actividad(){

        return $this->belongsToMany('App\Models\Actividad', 'actividad_carga_horaria', 'id_carga_horaria', 'id_actividad');

    }
 

    public function actividad(){

        return $this->HasMany('App\Models\Actividad', 'id_carga_horaria' );

    }*/

    public function detalleHorario(){

        return $this->HasMany('App\Models\DetalleHorario', 'carga_horaria_id' );

    }
}
