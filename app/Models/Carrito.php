<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'correo',
        'telefono',
        'documento',
        'fecha_llegada',
        'fecha_salida',
        'num_personas',
        'num_adultos',
        'num_ninos',
        'tipo_habitacion',
        'preferencia_cama',
        'necesidades_especiales',
        'servicios_especiales',
        'preferencia_ubicacion',
    ];
}
