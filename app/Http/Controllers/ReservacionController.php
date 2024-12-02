<?php

namespace App\Http\Controllers;

use App\Models\Reservacion;
use Illuminate\Http\Request;

class ReservacionController extends Controller
{
    public function index()
    {
        // Obtener todas las reservaciones con las relaciones de hotel y vuelo
        $reservaciones = Reservacion::with(['hotel', 'vuelo'])->get();
    
        // Pasar la variable 'reservaciones' a la vista
        return view('perfil', compact('reservaciones'));
    }
    
}
