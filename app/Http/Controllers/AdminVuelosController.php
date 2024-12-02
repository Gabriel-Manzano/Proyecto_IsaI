<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Http\Requests\validadorAdminVuelos;

class AdminVuelosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consultaVuelos = DB::table('vuelos')->get();
        return view('administradorVuelos', compact('consultaVuelos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('AdministradorVuelos');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(validadorAdminVuelos $request)
    {
        DB::table('vuelos')->insert([
            'numero_vuelo' => $request->input('numero_vuelo'),
            'aerolinea' => $request->input('aerolinea'),
            'precio' => $request->input('precio'),
            'has_stopovers' => $request->input('has_stopovers'),
            'departure_time' => $request->input('departure_time'),
            'arrival_time' => $request->input('arrival_time'),
            'duracion_vuelo' => $request->input('duracion_vuelo'),
            'escalas' => $request->input('escalas') ?? 0,
            'origen' => $request->input('origen'),
            'destino' => $request->input('destino'),
            'pasajeros' => $request->input('pasajeros'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        session()->flash('exito');
        return to_route('rutaAdministradorVuelo');
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
        $Vuelo = DB::table('vuelos')->where('id', $id)->first();
        if (!$Vuelo) {
            return redirect()->route('rutaAdministradorVuelo')->with('error', 'Vuelo no encontrado');
        }
        return view('AdministradorVuelosUpdate', compact('Vuelo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(validadorAdminVuelos $request, string $id)
    {
        DB::table('vuelos')->where('id', $id)->update([
            'numero_vuelo' => $request->input('numero_vuelo'),
            'aerolinea' => $request->input('aerolinea'),
            'precio' => $request->input('precio'),
            'has_stopovers' => $request->input('has_stopovers'),
            'departure_time' => $request->input('departure_time'),
            'arrival_time' => $request->input('arrival_time'),
            'duracion_vuelo' => $request->input('duracion_vuelo'),
            'escalas' => $request->input('escalas') ?? 0,
            'origen' => $request->input('origen'),
            'destino' => $request->input('destino'),
            'pasajeros' => $request->input('pasajeros'),
            'updated_at' => Carbon::now(),
        ]);

        session()->flash('exito');
        return to_route('rutaAdministradorVuelo');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('vuelos')->where('id', $id)->delete();

        session()->Flash('exito');
        return to_route('rutaAdministradorVuelo');
    }
}
