<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function show($id)
    {
        // Simulando la obtención de datos del hotel, puedes reemplazarlo con consultas a la base de datos
        $hotels = [
            1 => [
                'name' => 'Hotel Santorini',
                'location' => 'Santorini, Greece',
                'stars' => 5,
                'description' => 'Un hotel de lujo con vista al mar.',
                'images' => ['hotel-1.jpg', 'hotel-2.jpg', 'hotel-3.jpg'],
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
        // Simulación de datos de hoteles
        $hotels = [
            ['name' => 'Hotel Playa Bonita', 'location' => 'Cancún', 'price' => 150.00, 'stars' => 5, 'type' => 'Hotel Playa', 'amenities' => ['Piscina', 'WiFi', 'Spa']],
            ['name' => 'Montaña Resort', 'location' => 'Valle Nevado', 'price' => 200.00, 'stars' => 4, 'type' => 'Resort', 'amenities' => ['Piscina', 'Gimnasio']],
            ['name' => 'Eco Lodge', 'location' => 'Amazonas', 'price' => 120.00, 'stars' => 3, 'type' => 'Cabaña', 'amenities' => ['WiFi']],
            ['name' => 'City Inn', 'location' => 'Nueva York', 'price' => 180.00, 'stars' => 4, 'type' => 'Hotel Urbano', 'amenities' => ['WiFi', 'Gimnasio']],
            ['name' => 'Hotel Pacífico', 'location' => 'San Francisco', 'price' => 250.00, 'stars' => 5, 'type' => 'Hotel Playa', 'amenities' => ['Spa', 'Piscina']],
            ['name' => 'Desert Oasis', 'location' => 'Dubai', 'price' => 300.00, 'stars' => 5, 'type' => 'Resort', 'amenities' => ['Piscina', 'Spa', 'WiFi']],
            ['name' => 'Mountain Lodge', 'location' => 'Suiza', 'price' => 220.00, 'stars' => 4, 'type' => 'Cabaña', 'amenities' => ['WiFi', 'Gimnasio']],
            ['name' => 'Beachside Hostel', 'location' => 'Miami', 'price' => 100.00, 'stars' => 3, 'type' => 'Hotel Playa', 'amenities' => ['WiFi']],
            ['name' => 'Downtown Hotel', 'location' => 'Londres', 'price' => 160.00, 'stars' => 4, 'type' => 'Hotel Urbano', 'amenities' => ['Piscina', 'Spa']],
            ['name' => 'Forest Retreat', 'location' => 'Alpes', 'price' => 140.00, 'stars' => 3, 'type' => 'Cabaña', 'amenities' => ['WiFi', 'Spa']],
        ];

        // Captura los parámetros de búsqueda del formulario
        $location = $request->input('location');
        $minPrice = $request->input('min_price');
        $maxPrice = $request->input('max_price');
        $stars = $request->input('stars');
        $type = $request->input('type');
        $amenities = $request->input('amenities');

        // Filtrado de los datos según los parámetros ingresados
        $filteredHotels = collect($hotels)->filter(function ($hotel) use ($location, $minPrice, $maxPrice, $stars, $type, $amenities) {
            if ($location && stripos($hotel['location'], $location) === false) {
                return false;
            }
            if ($minPrice && $hotel['price'] < $minPrice) {
                return false;
            }
            if ($maxPrice && $hotel['price'] > $maxPrice) {
                return false;
            }
            if ($stars && $hotel['stars'] != $stars) {
                return false;
            }
            if ($type && $hotel['type'] != $type) {
                return false;
            }
            if ($amenities) {
                foreach ($amenities as $amenity) {
                    if (!in_array($amenity, $hotel['amenities'])) {
                        return false;
                    }
                }
            }
            return true;
        });

        // Retornar la vista con los datos filtrados
        return view('busquedaAvanzada', ['hotels' => $filteredHotels]);
    }
}
