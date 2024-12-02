<?php

namespace App\Http\Controllers;

use App\Models\Carrito;
use Illuminate\Http\Request;

class CarritoController extends Controller
{
    public function agregar(Request $request)
    {
        // Validar los datos recibidos
        $request->validate([
            'nombre' => 'required|string|max:255',
            'correo' => 'required|email|max:255',
            'telefono' => 'required|string|max:20',
            'documento' => 'required|string|max:50',
            'fecha_llegada' => 'required|date',
            'fecha_salida' => 'required|date',
            'num_personas' => 'required|integer|min:1',
            'num_adultos' => 'required|integer|min:1',
            'num_ninos' => 'nullable|integer|min:0',
            'tipo_habitacion' => 'required|string',
            'preferencia_cama' => 'nullable|string',
            'necesidades_especiales' => 'nullable|string',
            'servicios_especiales' => 'nullable|string',
            'preferencia_ubicacion' => 'nullable|string',
        ]);

        // Crear el objeto de carrito con los datos del formulario
        $carrito = new Carrito();
        $carrito->nombre = $request->nombre;
        $carrito->correo = $request->correo;
        $carrito->telefono = $request->telefono;
        $carrito->documento = $request->documento;
        $carrito->fecha_llegada = $request->fecha_llegada;
        $carrito->fecha_salida = $request->fecha_salida;
        $carrito->num_personas = $request->num_personas;
        $carrito->num_adultos = $request->num_adultos;
        $carrito->num_ninos = $request->num_ninos ?? 0;
        $carrito->tipo_habitacion = $request->tipo_habitacion;
        $carrito->preferencia_cama = $request->preferencia_cama;
        $carrito->necesidades_especiales = $request->necesidades_especiales;
        $carrito->servicios_especiales = $request->servicios_especiales;
        $carrito->preferencia_ubicacion = $request->preferencia_ubicacion;

        // Guardar en la base de datos
        $carrito->save();

        // Redirigir al carrito con mensaje de éxito
        return redirect()->route('carrito.ver')->with('success', 'Reserva agregada al carrito correctamente.');
    }

    public function ver()
    {
        // Obtener todos los artículos del carrito
        $carrito = Carrito::all();

        return view('carrito.ver', compact('carrito'));
    }

    public function eliminar($id)
    {
        $carrito = Carrito::findOrFail($id);
        $carrito->delete();
    
        return redirect()->route('carrito.ver')->with('success', 'Artículo eliminado del carrito.');
    }    
}
