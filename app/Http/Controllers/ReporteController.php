<?php

namespace App\Http\Controllers;

use App\Models\Vuelo;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\VuelosExport;

class ReporteController extends Controller
{
    public function generarReporteVuelosPDF()
    {
        $vuelos = Vuelo::all();

        $pdf = Pdf::loadView('vuelos', compact('vuelos'));
        return $pdf->download('reporte_vuelos.pdf');
    }

    public function generarReporteVuelosExcel()
    {
        return Excel::download(new VuelosExport, 'reporte_vuelos.xlsx');
    }
}
