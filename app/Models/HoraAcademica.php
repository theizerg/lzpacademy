<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HoraAcademica extends Model
{
    use HasFactory;




     protected $hidden     = [
                            'created_at',
	 	 	 	 	 	 	'updated_at'
                            ];

    protected $casts = [
        'hh_inicio'  => 'datetime:H:i',
        'hh_fin' => 'datetime:H:i',
    ];
        
    public function scopeActivo($query)
    {
        return $query->where('id_status', 1);
	}

	public function scopeComboData($query)
    {
        return $query->addSelect('id', 'nb_hora_academica');
    }
  
                           

    public function nivel()
    {
        return $this->BelongsTo('App\Models\Nivel', 'nivel_id');
    }

    public function cargaHoraria()
    {
        return $this->hasMany('App\Models\CargaHoraria', 'hora_academica_id');
    }

    public function horario()
    {
        return $this->hasMany('App\Models\Horario', 'hora_academica_id');
    }
}
