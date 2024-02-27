<?php

use App\Models\Tipoasiento;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TipoasientoController;
use App\Http\Controllers\VuelosasientosController;
use App\Http\Controllers\VuelosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/aerolinea',function () {
    return view('inicio');
});

Route::get('/aerolinea/tipoAsiento', [TipoasientoController::class,'index'])->name('tipoasientos.mostrar');

Route::get('/aerolinea/tipoAsiento/nuevoAsiento', [TipoasientoController::class,'add'])->name('tipoasientos.agregar');

Route::put('/aerolinea/tipoAsiento/guardarAsiento', [TipoasientoController::class,'save'])->name('tipoasientos.guardar');

Route::get('/aerolinea/vuelos', [VuelosController::class,'index'])->name('vuelos.mostrar');


