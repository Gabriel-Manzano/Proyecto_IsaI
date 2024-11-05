<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\ControladorVistas;

Route::get('/', [ControladorVistas::class, 'inicio'])->name('inicio');
Route::get('/preguntas-frecuentes', [ControladorVistas::class, 'faqs'])->name('faqs');
Route::get('/comparativa-hoteles', [ControladorVistas::class, 'comparar'])->name('comparar');
Route::get('/perfil', [ControladorVistas::class, 'perfil'])->name('perfil');
Route::post('/enviarPerfil',[controladorVistas::class,'procesarPerfil'])->name('rutaenviarperfil');
Route::get('/password', [ControladorVistas::class, 'password'])->name('password');

Route::get('/login', [ControladorVistas::class, 'login'])->name('login');
Route::post('/enviarLogin',[controladorVistas::class,'procesarCliente'])->name('rutaenviar');
Route::get('/auth/password', [ControladorVistas::class, 'passwordAuth'])->name('auth.password');
Route::post('/enviarPassword',[controladorVistas::class,'procesarPassword'])->name('rutaenviarpassword');

Route::get('/register', [ControladorVistas::class, 'register'])->name('register');
Route::post('/enviarRegistro', [ControladorVistas::class, 'procesarRegistro'])->name('rutaenviarregistro');

Route::get('/busquedaAvanzada', [ControladorVistas::class, 'busquedaAvanzada'])->name('busquedaAvanzada');

Route::get('/hotel/{id}', [HotelController::class, 'show'])->name('hotel.show');
Route::post('/enviarHotel',[controladorVistas::class,'procesarHotel'])->name('rutaenviarhotel');
Route::get('/hotels', [HotelController::class, 'index'])->name('busqueda');
