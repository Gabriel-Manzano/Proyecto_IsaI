<?php

namespace App\Http\Controllers;
use App\Http\Requests\validadorHotel;
use App\Http\Requests\validadorLogin;
use App\Http\Requests\validadorPassword;
use App\Http\Requests\validadorPerfil;
use App\Http\Requests\validadorRegistro;
use Illuminate\Http\Request;

class ControladorVistas extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('inicio','login');
    }
    public function inicio()
    {
        return view('Inicio');
    }

    public function faqs()
    {
        return view('faqs');
    }

    public function comparar()
    {
        return view('comparar');
    }

    public function perfil()
    {
        return view('perfil');
    }

    public function password()
    {
        return view('auth.password');
    }

    // Nuevas vistas en /auth/passwords
    public function confirm()
    {
        return view('auth.passwords.confirm');
    }

    public function email()
    {
        return view('auth.passwords.email');
    }

    public function reset()
    {
        return view('auth.passwords.reset');
    }

    public function login()
    {
        return view('auth.login'); // Carga la vista de login
    }

    public function procesarCliente(validadorLogin $peticionValidada)
    {
        session()->Flash('exito');
        return to_route('inicio');
    }

    public function passwordAuth()
    {
        return view('auth.password');
    }
    
    // Nuevas vistas en la carpeta raíz
    public function busquedaAvanzada()
    {
        return view('busquedaAvanzada');
    }

    // Reenvía el correo de verificación
    public function resendVerification()
    {
        Auth::user()->sendEmailVerificationNotification();
        return back()->with('resent', true);
    }

    public function procesarHotel1(validadorHotel $peticionValidada)
    {
        session()->Flash('exito');
        return to_route('hotel.show', ['id' => 1]);
    }

    public function procesarHotel2(validadorHotel $peticionValidada)
    {
        session()->Flash('exito');
        return to_route('hotel.show', ['id' => 2]);
    }

    public function procesarHotel3(validadorHotel $peticionValidada)
    {
        session()->Flash('exito');
        return to_route('hotel.show', ['id' => 3]);
    }

    public function procesarPerfil(validadorPerfil $peticionValidada)
    {
        $usuario = $peticionValidada->input('txtnameper');
        session()->Flash('exito', 'Se actualizaron los datos del usuario ' . $usuario);
        return to_route('perfil');
    }

    public function procesarPassword(validadorPassword $peticionValidada)
    {
        session()->Flash('exito');
        return to_route('password');
    }


}

