<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerfilController extends Controller
{
    public function index()
    {
        // Aquí puedes agregar la lógica para obtener los datos del usuario
        // Por ejemplo, podrías recuperar las reservas y favoritos del usuario desde la base de datos.

        // De momento, simplemente retornar la vista del perfil
        return view('perfil'); // Asegúrate de que la vista se llame 'perfil.blade.php'
    }
}
