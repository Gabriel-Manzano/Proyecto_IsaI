<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('usuarios')->insert([
            [
                'nombre' => 'Jinx',
                'apellido' => 'Powder',
                'correo' => 'jinx@gmail.com',
                'telefono' => '1234567891',
                'password' => 'qwer1234!"$#',
                'rol' => 'Usuario',
            ],
            [
                'nombre' => 'Violet',
                'apellido' => 'VII',
                'correo' => 'vi@gmail.com',
                'telefono' => '1234567892',
                'password' => 'qwer1234!"$#',
                'rol' => 'Usuario',
            ],
            [
                'nombre' => 'Caitlyn',
                'apellido' => 'Kiraman',
                'correo' => 'cait@gmail.com',
                'telefono' => '1234567893',
                'password' => 'qwer1234!"$#',
                'rol' => 'Administrador',
            ],
            [
                'nombre' => 'Ekko',
                'apellido' => 'Time',
                'correo' => 'ekko@gmail.com',
                'telefono' => '1234567894',
                'password' => 'qwer1234!"$#',
                'rol' => 'Usuario',
            ],
            [
                'nombre' => 'Jhin',
                'apellido' => 'Khada',
                'correo' => 'jhin@gamil.com',
                'telefono' => '4444444444',
                'password' => 'qwer1234!"$#',
                'rol' => 'Administrador',
            ]
        ]);
    }
}