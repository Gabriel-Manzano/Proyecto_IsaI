<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Usuario;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Exports\UsuariosExport;

class UserReportController extends Controller
{
    // Generar reporte PDF
    public function generarPDF()
    {
        $consultaUsuarios = Usuario::all();
        $pdf = Pdf::loadView('usuarios-pdf', compact('consultaUsuarios'));
        return $pdf->download('reporte_usuarios.pdf');
    }

    // Generar reporte Excel
    public function generarExcel()
    {
        return Excel::download(new UsuariosExport, 'reporte_usuarios.xlsx');
    }
}

