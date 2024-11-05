<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorVistas extends Controller
{
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

    public function procesarLogin(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Si las credenciales son correctas, redirige al usuario al inicio o a otra ruta deseada
            return redirect()->intended(route('inicio'));
        }

        // Si las credenciales son incorrectas, redirige de nuevo con un mensaje de error
        return redirect()->route('login')->withErrors(['email' => 'Las credenciales no coinciden']);
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

    // Muestra la vista de registro
    public function register()
    {
        return view('auth.register');
    }

    // Procesa el formulario de registro
    public function procesarRegistro(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Registra al usuario
        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
        ]);

        Auth::login($user);

        // Redirige a la página de verificación
        return redirect()->route('verification.notice');
    }

    // Reenvía el correo de verificación
    public function resendVerification()
    {
        Auth::user()->sendEmailVerificationNotification();
        return back()->with('resent', true);
    }
}
