<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\ControladorVistas;

Auth::routes();

// Rutas para vistas estáticas manejadas por ControladorVistas
Route::get('/', [ControladorVistas::class, 'inicio'])->name('inicio');
Route::get('/preguntas-frecuentes', [ControladorVistas::class, 'faqs'])->name('faqs');
Route::get('/comparativa-hoteles', [ControladorVistas::class, 'comparar'])->name('comparar');
Route::get('/perfil', [ControladorVistas::class, 'perfil'])->name('perfil');
Route::get('/password', [ControladorVistas::class, 'password'])->name('password');

// Nuevas rutas para /auth
Route::get('/login', [ControladorVistas::class, 'login'])->name('login');
Route::post('/login', [ControladorVistas::class, 'procesarLogin'])->name('login.post');
Route::get('/auth/password', [ControladorVistas::class, 'passwordAuth'])->name('auth.password');

// Ruta para el formulario de registro (GET) y envío de datos de registro (POST)
Route::get('/register', [ControladorVistas::class, 'register'])->name('register');
Route::post('/register', [ControladorVistas::class, 'procesarRegistro'])->name('register.post');

// Nuevas rutas para la carpeta raíz
Route::get('/busquedaAvanzada', [ControladorVistas::class, 'busquedaAvanzada'])->name('busquedaAvanzada');

// Rutas que requieren controladores específicos
Route::get('/hotel/{id}', [HotelController::class, 'show'])->name('hotel.show');
Route::get('/hotels', [HotelController::class, 'index'])->name('busqueda');
