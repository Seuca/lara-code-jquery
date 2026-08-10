<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('categorias', CategoriaController::class)->except('show');
Route::resource('productos', ProductoController::class)->except('show');
Route::resource('clientes', ClienteController::class)->except('show');

require __DIR__.'/auth.php';
