<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VuelosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insertar registros con los datos correspondientes a las nuevas columnas
        DB::table('vuelos')->insert([
            [
                'numero_vuelo' => 'IB1234',
                'aerolinea' => 'Iberia',
                'precio' => 150.50,
                'has_stopovers' => false,
                'departure_time' => '2024-12-01 08:00:00',
                'arrival_time' => '2024-12-01 10:30:00',
                'duracion_vuelo' => 150,
                'escalas' => 0,
                'origen' => 'Madrid',
                'destino' => 'Barcelona',
                'pasajeros' => '60'
            ],
            [
                'numero_vuelo' => 'VY2345',
                'aerolinea' => 'Vueling',
                'precio' => 120.75,
                'has_stopovers' => true,
                'departure_time' => '2024-12-02 10:30:00',
                'arrival_time' => '2024-12-02 14:00:00',
                'duracion_vuelo' => 150,
                'escalas' => 1,
                'origen' => 'Barcelona',
                'destino' => 'Paris',
                'pasajeros' => '800'
            ],
            [
                'numero_vuelo' => 'UX3456',
                'aerolinea' => 'Air Europa',
                'precio' => 200.00,
                'has_stopovers' => false,
                'departure_time' => '2024-12-03 12:00:00',
                'arrival_time' => '2024-12-03 14:15:00',
                'duracion_vuelo' => 135,
                'escalas' => 0,
                'origen' => 'Madrid',
                'destino' => 'Roma',
                'pasajeros' => '600'
            ],
            [
                'numero_vuelo' => 'IB4567',
                'aerolinea' => 'Iberia',
                'precio' => 220.00,
                'has_stopovers' => true,
                'departure_time' => '2024-12-04 16:00:00',
                'arrival_time' => '2024-12-04 20:00:00',
                'duracion_vuelo' => 240,
                'escalas' => 1,
                'origen' => 'Madrid',
                'destino' => 'Londres',
                'pasajeros' => '750'
            ],
            [
                'numero_vuelo' => 'VY5678',
                'aerolinea' => 'Vueling',
                'precio' => 180.90,
                'has_stopovers' => false,
                'departure_time' => '2024-12-05 09:30:00',
                'arrival_time' => '2024-12-05 12:00:00',
                'duracion_vuelo' => 150,
                'escalas' => 0,
                'origen' => 'Barcelona',
                'destino' => 'Londres',
                'pasajeros' => '150'
            ]
        ]);
    }
}
