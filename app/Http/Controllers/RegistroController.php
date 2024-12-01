<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Http\Requests\validadorRegistro;

class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consultaRegistro = DB::table('usuarios')->get();
        return view('register', compact('consultaRegistro'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(validadorRegistro $request)
    {
        DB::table('usuarios')->insert([
            "nombre" => $request->input('txtnamereg'),
            "apellido" => $request->input('txtapellidoreg'),
            "correo" => $request->input('txtemailreg'),
            "telefono" => $request->input('txttelreg'),
            "password" => $request->input('txtpasswordreg'),
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);

        $usuario = $request->input('txtnamereg');

        session()->Flash('exito', 'Se guardó el usuario ' . $usuario);
        return to_route('login');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
