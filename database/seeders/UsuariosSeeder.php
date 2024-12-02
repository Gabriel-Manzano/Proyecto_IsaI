<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash; // Importa Hash

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $hashedPassword = Hash::make('qwer1234!"#$');
        DB::table('usuarios')->insert([
            [
                'nombre' => 'Jinx',
                'apellido' => 'Powder',
                'correo' => 'jinx@gmail.com',
                'telefono' => '1234567891',
                'password' => $hashedPassword,
                'rol' => 'Usuario',
            ],
            [
                'nombre' => 'Violet',
                'apellido' => 'VII',
                'correo' => 'vi@gmail.com',
                'telefono' => '1234567892',
                'password' => $hashedPassword,
                'rol' => 'Usuario',
            ],
            [
                'nombre' => 'Caitlyn',
                'apellido' => 'Kiraman',
                'correo' => 'cait@gmail.com',
                'telefono' => '1234567893',
                'password' => $hashedPassword,
                'rol' => 'Administrador',
            ],
            [
                'nombre' => 'Ekko',
                'apellido' => 'Time',
                'correo' => 'ekko@gmail.com',
                'telefono' => '1234567894',
                'password' => $hashedPassword,
                'rol' => 'Usuario',
            ],
            [
                'nombre' => 'Jhin',
                'apellido' => 'Khada',
                'correo' => 'jhin@gamil.com',
                'telefono' => '4444444444',
                'password' => $hashedPassword,
                'rol' => 'Administrador',
            ]
        ]);
    }
}