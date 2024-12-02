<?php

namespace App\Exports;

use App\Models\Hotel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class HotelesExport implements FromCollection, WithHeadings
{
    // Datos a exportar
    public function collection()
    {
        return Hotel::select('id', 'name', 'location', 'price', 'stars', 'disponibilidad')->get();
    }

    // Encabezados de las columnas
    public function headings(): array
    {
        return ['ID', 'Nombre', 'Ubicación', 'Precio', 'Estrellas', 'Disponibilidad'];
    }
}

