<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $fillable = [
        'nombre',
        'apellido',
        'estado',
        'fechaNac',
        'DNI',
        'telefono',
        'direccion'
    ];
}
