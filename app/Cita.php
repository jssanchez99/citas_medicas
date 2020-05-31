<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    /*

    public function articulo(){

        return $this->hasMany("App\Cita");

    }*/

    public $timestamps = false;

    protected $fillable = [
        'id', 'id_medico', 'id_paciente', 'fecha', 'hora', 
    ];
}
