<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Http\Requests\validadorAdminCondicion;

class AdminCondicionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $condiciones = DB::table('condiciones')->get();
        return view('AdministradorCondiciones', compact('condiciones'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('AdministradorCondiciones');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        $Condicion = DB::table('condiciones')->where('id', $id)->first();
        if (!$Condicion) {
            return redirect()->route('rutaAdministradorVuelo')->with('error', 'Condición no encontrada');
        }
        return view('AdministradorCondicionesUpdate', compact('Condicion'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(validadorAdminCondicion $request, string $id)
    {
        DB::table('condiciones')->where('id', $id)->update([
            'condiciones' => $request->input('condiciones'),
            'updated_at' => Carbon::now(),
        ]);

        session()->flash('exito');
        return to_route('rutaAdministradorCondicion');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
