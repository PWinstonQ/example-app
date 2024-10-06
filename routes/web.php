<?php

use App\Http\Controllers\ContactoController;
use Illuminate\Support\Facades\Route;

// Ruta para la página de productos (índice)
Route::get('/', function () {
    return view('my-views.productos');
});

// Ruta para el producto 1 (Valhalla)
Route::get('/producto/1', function () {
    return view('my-views.producto1');
});

// Ruta para el producto 2 (Valkyrie)
Route::get('/producto/2', function () {
    return view('my-views.producto2');


});

Route::get('/contacto', [ContactoController::class, 'index']);
Route::post('/contacto', [ContactoController::class, 'send']);
Route::get('/contactado', [ContactoController::class, 'contacted'])->name('contactado');
Route::get('/ver-contactos', [ContactoController::class, 'verContactos']);

