<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vuelo;

class VueloControlador extends Controller
{
    public function index(Request $request)
    {
        $query = Vuelo::query();

        // Filtros
        if ($request->filled('origin')) {
            $query->where('origen', 'like', '%' . $request->origin . '%');
        }
        if ($request->filled('destination')) {
            $query->where('destino', 'like', '%' . $request->destination . '%');
        }
        if ($request->filled('min_price')) {
            $query->where('precio', '>=', $request->min_price);
        }
        if ($request->filled('max_price')) {
            $query->where('precio', '<=', $request->max_price);
        }
        if ($request->filled('departure_time')) {
            $departureTime = \Carbon\Carbon::parse($request->departure_time);
            $query->where('departure_time', '>=', $departureTime);
        }
        if ($request->filled('arrival_time')) {
            $arrivalTime = \Carbon\Carbon::parse($request->arrival_time);
            $query->where('arrival_time', '<=', $arrivalTime);
        }
        if ($request->filled('stops')) {
            $query->where('escalas', $request->stops);
        }
        // Filtro por Aerolínea
        if ($request->filled('aerolinea')) {
            $query->where('aerolinea', $request->aerolinea);
        }

        // Obtener los vuelos filtrados
        $flights = $query->get();

        return view('busquedaVuelos', compact('flights'));
    }
}
