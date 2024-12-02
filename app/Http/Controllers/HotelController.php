<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;

class HotelController extends Controller
{
    public function show($id)
    {
        // Simulando la obtención de datos del hotel, puedes reemplazarlo con consultas a la base de datos
        $hotels = [
            1 => [
                'name' => 'Cheval Blanc París',
                'location' => 'París, Francia.',
                'stars' => 5,
                'description' => 'Este hotel de cinco estrellas fue diseñado para ofrecer un ambiente que evoca un hogar sofisticado.',
                'images' => ['hotel-1.jpeg', 'hotel-1-2.jpeg', 'hotel-1-3.jpeg'],
                'amenities' => ['Buffet', 'Bar', 'Piscina', 'Spa', 'Actividades al aire libre'],
                'activities' => ['Yoga', 'Excursiones', 'Deportes acuáticos'],
                'comments' => [
                    ['user' => 'Carlos', 'comment' => 'Excelente servicio y hermosas vistas.', 'rating' => 5],
                    ['user' => 'Ana', 'comment' => 'Un lugar perfecto para relajarse.', 'rating' => 4],
                ]
            ],
            2 => [
                'name' => 'Hotel Playa',
                'location' => 'Cancún, México',
                'stars' => 4,
                'description' => 'Un hotel frente al mar con actividades acuáticas.',
                'images' => ['hotel-1.jpg', 'hotel-2.jpg', 'hotel-3.jpg'],
                'amenities' => ['Restaurante', 'Gimnasio', 'Bar', 'Piscina'],
                'activities' => ['Snorkel', 'Buceo', 'Tours'],
                'comments' => [
                    ['user' => 'Luis', 'comment' => 'Muy buen hotel y excelente atención.', 'rating' => 4],
                    ['user' => 'Sofía', 'comment' => 'Las playas son hermosas.', 'rating' => 5],
                ]
            ],
            3 => [
                'name' => 'Hotel Playa',
                'location' => 'Cancún, México',
                'stars' => 4,
                'description' => 'Un hotel frente al mar con actividades acuáticas.',
                'images' => ['hotel-1.jpg', 'hotel-2.jpg', 'hotel-3.jpg'],
                'amenities' => ['Restaurante', 'Gimnasio', 'Bar', 'Piscina'],
                'activities' => ['Snorkel', 'Buceo', 'Tours'],
                'comments' => [
                    ['user' => 'Luis', 'comment' => 'Muy buen hotel y excelente atención.', 'rating' => 4],
                    ['user' => 'Sofía', 'comment' => 'Las playas son hermosas.', 'rating' => 5],
                ]
            ],
            // Agrega más hoteles aquí
        ];

        // Verifica si el hotel existe
        if (!array_key_exists($id, $hotels)) {
            abort(404); // O maneja el error como desees
        }

        $hotel = $hotels[$id]; // Obtiene los datos del hotel correspondiente

        // Retorna la vista desde la carpeta 'hoteles'
        return view('hoteles.hotel' . $id, compact('hotel'));
    }



 public function index(Request $request)
{
    // Captura los parámetros de búsqueda del formulario
    $location = $request->input('location');
    $minPrice = $request->input('min_price');
    $maxPrice = $request->input('max_price');
    $stars = $request->input('stars');
    $type = $request->input('type');
    $amenities = $request->input('amenities');
    $habitaciones = $request->input('habitaciones');
    $huespedes = $request->input('huespedes');
    $distancia = $request->input('distancia');

    // Inicia la consulta base
    $query = Hotel::query();

    // Aplica filtros según los parámetros
    if ($location) {
        $query->where('location', 'LIKE', '%' . $location . '%');
    }

    if ($minPrice) {
        $query->where('price', '>=', $minPrice);
    }

    if ($maxPrice) {
        $query->where('price', '<=', $maxPrice);
    }

    if ($stars) {
        $query->where('stars', $stars);
    }

    if ($type) {
        $query->where('type', 'LIKE', '%' . $type . '%');
    }

    if ($amenities) {
        foreach ($amenities as $amenity) {
            $query->whereJsonContains('amenities', $amenity); // Filtrado por campo JSON
        }
    }
    if ($habitaciones) {
        $query->where('habitaciones', $habitaciones);
    }
    if ($huespedes) {
        $query->where('huespedes', $huespedes);
    }
    if ($distancia) {
        $query->where('distancia', $distancia);
    }

    // Ejecuta la consulta y obtiene los resultados
    $hotels = $query->get();

    // Retorna la vista con los datos filtrados
    return view('busquedaAvanzada', ['hotels' => $hotels]);
}
}
