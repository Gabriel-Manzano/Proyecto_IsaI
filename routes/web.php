<?php

use App\Http\Controllers\HotelController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\PerfilController;

Route::get('/preguntas-frecuentes', function () {
    return view('faqs');
});


Route::get('/comparativa-hoteles', function () {
    return view('comparar');
});


Route::get('/perfil', [PerfilController::class, 'index'])->name('perfil');


Route::get('/hotel/{id}', [HotelController::class, 'show'])->name('hotel.show');
Route::get('/hotels', [HotelController::class, 'index'])->name('busqueda');



Route::get('/', function () {
    return view('Inicio');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/password', function () {
    return view('/auth/password'); // Asumiendo que tu vista se llama "password.blade.php"
})->name('password');
