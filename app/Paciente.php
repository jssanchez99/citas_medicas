<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    

    public $timestamps = false;

    protected $fillable = [
        'id', 'primer_nombre', 'segundo_nombre', 'primer_apellido', 'segundo_apellido', 'documento', 'correo', 'telefono',
    ];
}
