<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $table = 'usuarios';

    // Campos asignables masivamente
    protected $fillable = [
        'nombre',
        'apellido',
        'correo',
        'telefono',
        'password',
        'rol',
    ];

    protected $hidden = [
        'password',
    ];

    public $timestamps = true;

    protected $casts = [
        'correo' => 'string',
        'telefono' => 'string',
        'rol' => 'string',
    ];
}

