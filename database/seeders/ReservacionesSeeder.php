<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Reservacion;
use App\Models\User;
use App\Models\Hotel;
use App\Models\Vuelo;


class ReservacionesSeeder extends Seeder
{
    public function run()
    {
        Reservacion::create([
            'usuario_id' => 1,
            'hotel_id' => 3,
            'vuelo_id' => 2,
            'fecha_reserva' => '2024-11-15',
            'estado' => 'confirmada',
        ]);

        Reservacion::create([
            'usuario_id' => 2,
            'hotel_id' => 5,
            'vuelo_id' => 1,
            'fecha_reserva' => '2024-12-01',
            'estado' => 'confirmada',
        ]);

        Reservacion::create([
            'usuario_id' => 3,
            'hotel_id' => 4,
            'vuelo_id' => 3,
            'fecha_reserva' => '2024-12-10',
            'estado' => 'pendiente',
        ]);

        Reservacion::create([
            'usuario_id' => 4,
            'hotel_id' => 7,
            'vuelo_id' => 2,
            'fecha_reserva' => '2024-12-20',
            'estado' => 'cancelada',
        ]);

        Reservacion::create([
            'usuario_id' => 5,
            'hotel_id' => 1,
            'vuelo_id' => 4,
            'fecha_reserva' => '2024-12-05',
            'estado' => 'confirmada',
        ]);

        Reservacion::create([
            'usuario_id' => 6,
            'hotel_id' => 6,
            'vuelo_id' => 5,
            'fecha_reserva' => '2024-11-25',
            'estado' => 'confirmada',
        ]);

        Reservacion::create([
            'usuario_id' => 6,
            'hotel_id' => 2,
            'vuelo_id' => 3,
            'fecha_reserva' => '2024-11-27',
            'estado' => 'pendiente',
        ]);

        Reservacion::create([
            'usuario_id' => 6,
            'hotel_id' => 8,
            'vuelo_id' => 1,
            'fecha_reserva' => '2024-12-15',
            'estado' => 'cancelada',
        ]);

        Reservacion::create([
            'usuario_id' => 1,
            'hotel_id' => 9,
            'vuelo_id' => 2,
            'fecha_reserva' => '2024-12-10',
            'estado' => 'confirmada',
        ]);

        Reservacion::create([
            'usuario_id' => 2,
            'hotel_id' => 11,
            'vuelo_id' => 5,
            'fecha_reserva' => '2024-12-18',
            'estado' => 'confirmada',
        ]);
    }
}
