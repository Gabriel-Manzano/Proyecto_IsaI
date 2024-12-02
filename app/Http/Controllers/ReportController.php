<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Exports\HotelesExport;

class ReportController extends Controller
{
    // Generar reporte PDF
    public function generarPDF()
    {
        $hoteles = Hotel::all();
        $pdf = Pdf::loadView('hoteles-pdf', compact('hoteles'));
        return $pdf->download('reporte_hoteles.pdf');
    }

    // Generar reporte Excel
    public function generarExcel()
    {
        return Excel::download(new HotelesExport, 'reporte_hoteles.xlsx');
    }
}