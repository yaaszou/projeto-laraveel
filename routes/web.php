<?php

use App\Http\Controllers\CalculadoraController;
use Illuminate\Support\Facades\Route;


Route::get('/', [CalculadoraController::class, 'index']);
Route::post('/calcular', [CalculadoraController::class, 'calcular']);
