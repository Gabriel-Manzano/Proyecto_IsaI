<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Http\Requests\ValidadorUsuarios;
use Illuminate\Support\Facades\Hash;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consultaUsuarios = DB::table('usuarios')->get();
        return view('administrador', compact('consultaUsuarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Administrador');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(validadorUsuarios $request)
    
    {

        $hashedPassword = Hash::make($request->input('txtpasswordadm'));

        DB::table('usuarios')->insert([
            "nombre" => $request->input('txtnombreadm'),
            "apellido" => $request->input('txtapellidoadm'),
            "correo" => $request->input('txtemailadm'),
            "telefono" => $request->input('txttelefonoadm'),
            "password" => $hashedPassword,
            "rol" => $request->input('rol'),
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);

        session()->Flash('exito');
        return to_route('rutaAdministrador');
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
        DB::table('usuarios')->where('id', $id)->delete();

        session()->Flash('exito');
        return to_route('rutaAdministrador');
    }
}
