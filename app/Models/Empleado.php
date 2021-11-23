<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;


    public function cargo()
	{
        return $this->BelongsTo('App\Models\Cargo', 'cargo_id');
	}
	
	public function estadocivil()
	{
        return $this->BelongsTo('App\Models\EstadoCivil', 'estado_civil_id');
	}
	
	public function tipodocumento()
	{
        return $this->BelongsTo('App\Models\TipoDocumento', 'tipo_documento_id');
	}


	public function genero()
	{
        return $this->BelongsTo('App\Models\Genero', 'genero_id');
	}






	 /*
    |
    | ** Accesors model **
    |
    */

     public function getDisplayNameAttribute()
     {
         return trim(str_replace( '  ', ' ',  "{$this->name} {$this->lastname}")) ;
     }


      public function getDisplayStatusAttribute()
    {
        return $this->status == 1 ? 'Activo' : 'Denegado';
    }
}
