<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

Route::get('/', function () {
    return view('welcome');
});

/* Route::get('/', [ProductoController::class, 'index']);
Route::post('productos/enviar', [ProductoController::class, 'store']); */
/* Route::put('productos/{producto}', [ProductoController::class, 'update']);
Route::delete('productos/{producto}', [ProductoController::class, 'destroy']); */