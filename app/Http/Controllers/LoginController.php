<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    /**
     * Mostrar el formulario de inicio de sesión.
     */
    public function index()
    {
        return view('auth.login'); // Aquí se muestra el formulario de login
    }

    /**
     * Procesar el inicio de sesión.
     */
    public function login(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'txtemaillog' => 'required|email',
            'txtpasswordlog' => 'required|min:6',
        ]);

        // Buscar al usuario por correo
        $usuario = Usuario::where('correo', $request->input('txtemaillog'))->first();

        // Verificar si el usuario existe y la contraseña es correcta
        if ($usuario && Hash::check($request->input('txtpasswordlog'), $usuario->password)) {
            // Almacenar datos del usuario en la sesión
            session([
                'usuario_id' => $usuario->id,
                'usuario_nombre' => $usuario->nombre,
                'usuario_apellido' => $usuario->apellido,
                'usuario_correo' => $usuario->correo,
                'usuario_rol' => $usuario->rol,
            ]);
           /*  dd(session()->all()); */ //muestra la informacion guardada en la session y antes de reenviar a la pagina de incio


            // Redirigir al dashboard o a la página de inicio
            return redirect('/')->with('exito', '¡Bienvenido de nuevo!');
        } else {
            // Si las credenciales no coinciden, devolver el error
            return back()->withErrors([
                'txtemaillog' => 'Las credenciales no coinciden con nuestros registros.',
            ]);
        }
    }

    /**
     * Cerrar sesión.
     */
    public function logout()
    {
        // Eliminar los datos de la sesión
        session()->forget(['usuario_id', 'usuario_nombre', 'usuario_apellido', 'usuario_correo', 'usuario_rol']);
    
        // Redirigir a la página de inicio de sesión
        return redirect()->route('login');
    }
}
