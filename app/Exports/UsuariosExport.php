<?php

namespace App\Exports;

use App\Models\Usuario;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UsuariosExport implements FromCollection, WithHeadings
{
    // Datos a exportar
    public function collection()
    {
        return Usuario::select('id', 'nombre', 'apellido', 'correo', 'telefono', 'rol')->get();
    }

    // Encabezados de las columnas
    public function headings(): array
    {
        return ['ID', 'Nombre', 'Apellido', 'Correo', 'Teléfono', 'Rol'];
    }
}
