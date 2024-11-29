<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Hotel;

class HotelsTableSeeder extends Seeder
{
    public function run()
    {
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

        foreach ($hotels as $hotel) {
            Hotel::create($hotel);
        }
    }
}
