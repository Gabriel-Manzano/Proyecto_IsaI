<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Hotel;

class HotelsTableSeeder extends Seeder
{
    public function run()
    {
        $hotels = [
            ['name' => 'Cheval Blanc París', 'location' => 'Francia', 'price' => 1050.00, 'stars' => 5, 'type' => 'Hotel Urbano', 'amenities' => ['Piscina', 'WiFi', 'Spa'], 'habitaciones' => 1, 'huespedes' => 1, 'distancia' => 1500, 'politicas' => 'Cancelación gratuita', 'disponibilidad' => 'Disponible'],
            ['name' => 'Nihi Sumba', 'location' => 'Indonesia', 'price' => 500.00, 'stars' => 4, 'type' => 'Hotel Playa', 'amenities' => ['WiFi', 'Gimnasio'], 'habitaciones' => 2, 'huespedes' => 4, 'distancia' => 10500, 'politicas' => 'No reembolso', 'disponibilidad' => 'Disponible'],
            ['name' => 'Raffles Hotel', 'location' => 'Singlapur', 'price' => 150.00, 'stars' => 3, 'type' => 'Hotel Urbano', 'amenities' => ['Piscina', 'WiFi', 'Spa'], 'habitaciones' => 3, 'huespedes' => 3, 'distancia' => 150, 'politicas' => 'Parcialmente reembolsable', 'disponibilidad' => 'No disponible'],
            ['name' => 'Hotel Playa Bonita', 'location' => 'Cancún', 'price' => 150.00, 'stars' => 5, 'type' => 'Hotel Playa', 'amenities' => ['Piscina', 'WiFi', 'Spa'], 'habitaciones' => 500, 'huespedes' => 80, 'distancia' => 1500, 'politicas' => 'Parcialmente reembolsable', 'disponibilidad' => 'Disponible'],
            ['name' => 'Montaña Resort', 'location' => 'Valle Nevado', 'price' => 200.00, 'stars' => 4, 'type' => 'Resort', 'amenities' => ['Piscina', 'Gimnasio'], 'habitaciones' => 1500, 'huespedes' => 9000, 'distancia' => 500, 'politicas' => 'Cancelación gratuita', 'disponibilidad' => 'No disponible'],
            ['name' => 'Eco Lodge', 'location' => 'Amazonas', 'price' => 120.00, 'stars' => 3, 'type' => 'Cabaña', 'amenities' => ['WiFi'], 'habitaciones' => 2000, 'huespedes' => 2800, 'distancia' => 2000, 'politicas' => 'Cancelación gratuita', 'disponibilidad' => 'No disponible'],
            ['name' => 'City Inn', 'location' => 'Nueva York', 'price' => 180.00, 'stars' => 4, 'type' => 'Hotel Urbano', 'amenities' => ['WiFi', 'Gimnasio'], 'habitaciones' => 5000, 'huespedes' => 8000, 'distancia' => 200, 'politicas' => 'Parcialmente reembolsable', 'disponibilidad' => 'Disponible'],
            ['name' => 'Hotel Pacífico', 'location' => 'San Francisco', 'price' => 250.00, 'stars' => 5, 'type' => 'Hotel Playa', 'amenities' => ['Spa', 'Piscina'], 'habitaciones' => 500, 'huespedes' => 500, 'distancia' => 300, 'politicas' => 'No reembolso', 'disponibilidad' => 'Disponible'],
            ['name' => 'Desert Oasis', 'location' => 'Dubai', 'price' => 300.00, 'stars' => 5, 'type' => 'Resort', 'amenities' => ['Piscina', 'Spa', 'WiFi'], 'habitaciones' => 1500, 'huespedes' => 2000, 'distancia' => 350, 'politicas' => 'No reembolso', 'disponibilidad' => 'Disponible'],
            ['name' => 'Mountain Lodge', 'location' => 'Suiza', 'price' => 220.00, 'stars' => 4, 'type' => 'Cabaña', 'amenities' => ['WiFi', 'Gimnasio'], 'habitaciones' => 50, 'huespedes' => 150, 'distancia' => 2000, 'politicas' => 'Parcialmente reembolsable', 'disponibilidad' => 'No disponible'],
            ['name' => 'Beachside Hostel', 'location' => 'Miami', 'price' => 100.00, 'stars' => 3, 'type' => 'Hotel Playa', 'amenities' => ['WiFi'], 'habitaciones' => 600, 'huespedes' => 700, 'distancia' => 15000, 'politicas' => 'No reembolso', 'disponibilidad' => 'No disponible'],
            ['name' => 'Downtown Hotel', 'location' => 'Londres', 'price' => 160.00, 'stars' => 4, 'type' => 'Hotel Urbano', 'amenities' => ['Piscina', 'Spa'], 'habitaciones' => 800, 'huespedes' => 800, 'distancia' => 6000, 'politicas' => 'Parcialmente reembolsable', 'disponibilidad' => 'Disponible'],
            ['name' => 'Forest Retreat', 'location' => 'Alpes', 'price' => 140.00, 'stars' => 3, 'type' => 'Cabaña', 'amenities' => ['WiFi', 'Spa'], 'habitaciones' => 100, 'huespedes' => 200, 'distancia' => 5000, 'politicas' => 'Cancelación gratuita', 'disponibilidad' => 'No disponible'],
        ];

        foreach ($hotels as $hotel) {
            Hotel::create($hotel);
        }
    }
}
