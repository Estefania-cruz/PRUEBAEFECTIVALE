<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MensajeController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/',[MensajeController::class,'index']);
Route::post('/guardar-mensaje', [MensajeController::class, 'guardar']);
Route::get('/registros', [MensajeController::class, 'registros']);