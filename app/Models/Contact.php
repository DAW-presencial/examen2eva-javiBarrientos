<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'empresa',
        'documento',
        'dni',
        'nombre',
        'primer_apellido',
        'segundo_apellido',
        'pais',
        'provincia',
        'municipio',
        'estado',
        'telefono',
        'email',
    ];
}
