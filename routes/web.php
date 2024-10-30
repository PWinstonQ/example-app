<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/insert-sample-data', function () {
    DB::table('products')->insert([
        ['name' => 'Producto A', 'price' => 100.00],
        ['name' => 'Producto B', 'price' => 150.00],
    ]);

    DB::table('users')->insert([
        ['name' => 'Usuario 1', 'email' => 'usuario1@example.com', 'password' => bcrypt('password')],
    ]);

    DB::table('cart')->insert([
        ['user_id' => 1, 'created_at' => now(), 'updated_at' => now()],
    ]);

    DB::table('cart_items')->insert([
        ['cart_id' => 1, 'product_id' => 1, 'quantity' => 2],
        ['cart_id' => 1, 'product_id' => 2, 'quantity' => 1],
    ]);

    return "Datos insertados correctamente.";
});


Route::get('/cart/{userId}', function ($userId) {
    $cart = DB::table('cart')
        ->join('cart_items', 'cart.id', '=', 'cart_items.cart_id')
        ->join('products', 'cart_items.product_id', '=', 'products.id')
        ->where('cart.user_id', $userId)
        ->select('products.name', 'products.price', 'cart_items.quantity',
                 DB::raw('products.price * cart_items.quantity AS total_price'))
        ->get();

    $total = $cart->sum('total_price');

    return response()->json([
        'cart_items' => $cart,
        'total' => $total
    ]);
});
