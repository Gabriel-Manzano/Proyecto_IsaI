<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Http\Requests\validadorAdminHotel;

class AdminHotelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consultaHoteles = DB::table('hotels')->get();
        return view('administradorHoteles', compact('consultaHoteles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('AdministradorHoteles');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(validadorAdminHotel $request)
    {

        DB::table('hotels')->insert([
            'name' => $request->input('txtnameadmhot'),
            'location' => $request->input('txtubicacionadmhot'),
            'price' => $request->input('txtprecioadmhot'),
            'stars' => $request->input('txtestrellasadmhot'),
            'type' => $request->input('txttipoadmhot'),
            'habitaciones' => $request->input('txthabitacionesadmhot'),
            'huespedes' => $request->input('txthuespedesadmhot'),
            'distancia' => $request->input('txtdistanciaadmhot'),
            'politicas' => $request->input('txtpoliticasadmhot'),
            'disponibilidad' => $request->input('disponibilidad'),
            'amenities' => json_encode(['Piscina', 'WiFi', 'Spa']),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        session()->flash('exito');
        return to_route('rutaAdministradorHotel');
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
        $Hotel = DB::table('hotels')->where('id', $id)->first();
        if (!$Hotel) {
            return redirect()->route('rutaAdministradorHotel')->with('error', 'Hotel no encontrado');
        }
        return view('AdministradorHotelesUpdate', compact('Hotel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(validadorAdminHotel $request, string $id)
    {
        DB::table('hotels')->where('id', $id)->update([
            'name' => $request->input('txtnameadmhot'),
            'location' => $request->input('txtubicacionadmhot'),
            'price' => $request->input('txtprecioadmhot'),
            'stars' => $request->input('txtestrellasadmhot'),
            'type' => $request->input('txttipoadmhot'),
            'habitaciones' => $request->input('txthabitacionesadmhot'),
            'huespedes' => $request->input('txthuespedesadmhot'),
            'distancia' => $request->input('txtdistanciaadmhot'),
            'politicas' => $request->input('txtpoliticasadmhot'),
            'disponibilidad' => $request->input('disponibilidad'),
            'amenities' => json_encode(['Piscina', 'WiFi', 'Spa']),
            'updated_at' => Carbon::now(),
        ]);

        session()->flash('exito');
        return to_route('rutaAdministradorHotel');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('hotels')->where('id', $id)->delete();

        session()->Flash('exito');
        return to_route('rutaAdministradorHotel');
    }
}
