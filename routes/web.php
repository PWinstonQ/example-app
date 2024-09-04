<?php

use App\Http\Controllers\PrimerController;
use Illuminate\Support\Facades\Route;

Route::get('/mi-primer-controller/{texto}', [PrimerController::class, 'mostrarTexto']);
Route::get('/', function () {
    return view('welcome');
});

