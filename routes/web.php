<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\ControladorVistas;
use App\Http\Controllers\ModalController;
use App\Http\Controllers\VueloControlador;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CarritoController;

//Rutas varias

Route::get('/', [ControladorVistas::class, 'inicio'])->name('inicio');
Route::get('/preguntas-frecuentes', [ControladorVistas::class, 'faqs'])->name('faqs');
Route::get('/comparativa-hoteles', [ControladorVistas::class, 'comparar'])->name('comparar');

//Perfil

Route::get('/perfil', [ControladorVistas::class, 'perfil'])->name('perfil');
Route::post('/enviarPerfil', [controladorVistas::class, 'procesarPerfil'])->name('rutaenviarperfil');

//Cambio de contraseña

Route::get('/password', [ControladorVistas::class, 'password'])->name('password');

//Reservaciones

Route::post('/reservar', [ModalController::class, 'reservar'])->name('reservar');

//Búsqueda Avanzada

Route::get('/busquedaAvanzada', [ControladorVistas::class, 'busquedaAvanzada'])->name('busquedaAvanzada');

//Login

Route::get('/login', [ControladorVistas::class, 'login'])->name('login');
Route::post('/enviarLogin', [LoginController::class, 'login'])->name('rutaenviar');
Route::get('/auth/password', [ControladorVistas::class, 'passwordAuth'])->name('auth.password');
Route::post('/enviarPassword', [controladorVistas::class, 'procesarPassword'])->name('rutaenviarpassword');

//Registro

Route::get('/register', [RegistroController::class, 'index'])->name('rutaRegistro');
Route::post('/register', [RegistroController::class, 'store'])->name('enviarRegistro');
Route::get('/register/create', [RegistroController::class, 'create'])->name('rutaCrearRegistro');

//Administradores (Usuarios)

Route::get('/Administrador', [AdminUserController::class, 'index'])->name('rutaAdministrador');
Route::post('/Administrador', [AdminUserController::class, 'store'])->name('enviarUsuarioAdm');
Route::get('/Administrador/create', [AdminUserController::class, 'create'])->name('rutaCrearUsuarioAdm');
Route::delete('/Administrador/{id}', [AdminUserController::class, 'destroy'])->name('rutaeliminarUsuarioAdm');

//Hoteles

Route::get('/hotel/{id}', [HotelController::class, 'show'])->name('hotel.show');
Route::post('/enviarHotel1', [controladorVistas::class, 'procesarHotel1'])->name('rutaenviarhotel1');
Route::post('/enviarHotel2', [controladorVistas::class, 'procesarHotel2'])->name('rutaenviarhotel2');
Route::post('/enviarHotel3', [controladorVistas::class, 'procesarHotel3'])->name('rutaenviarhotel3');
Route::get('/hotels', [HotelController::class, 'index'])->name('busqueda');

//Vuelos

Route::get('/vuelos', [VueloControlador::class, 'index'])->name('busqueda_vuelos');

//carrito

Route::post('/carrito/agregar', [CarritoController::class, 'agregar'])->name('carrito.agregar');
Route::get('/carrito', [CarritoController::class, 'ver'])->name('carrito.ver');
Route::delete('/carrito/eliminar/{id}', [CarritoController::class, 'eliminar'])->name('carrito.eliminar');


