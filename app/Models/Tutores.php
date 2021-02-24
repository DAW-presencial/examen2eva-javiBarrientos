<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tutores extends Model
{
    public $timestamps = false;
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
