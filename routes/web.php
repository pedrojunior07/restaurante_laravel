<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestauranteController;
use App\Http\Controllers\MenuItemController;
use App\Http\Controllers\ClienteController;

Route::get('/', [ClienteController::class, 'index'])->name('indexCliente');

// Route::get('/',function () {
//     return view('indexAdmin');
// });
Route::get('add-restaurant', function () {
    return view('addRestaurant');
});

Route::post('restaurants/store', [RestauranteController::class, 'store'])->name('restaurants.store');

Route::get('list-restaurantes', [RestauranteController::class, 'index'])->name('restaurants.index');



Route::get('listar-pedidos', function () {
    return view('listarPedidos');
});


Route::get('addMenuItem/{restauranteId}', function ($restauranteId) {
    return view('addMenuItem', ['restauranteId' => $restauranteId]);
})->name('menu-items.create');

Route::post('menu-items/store', [MenuItemController::class, 'store'])->name('menu-items.store');
Route::get('/restaurantes', [RestauranteController::class, 'index'])->name('restaurantes');
Route::post('/like', [RestauranteController::class, 'like'])->name('like.restaurant');
Route::post('/favorite', [RestauranteController::class, 'favorite'])->name('favorite.restaurant');
Route::post('/unfavorite', [RestauranteController::class, 'unfavorite'])->name('unfavorite.restaurant');
Route::get('/menu-items', [MenuItemController::class, 'getMenuItems'])->name('menu.items');
Route::get('/favorites', [ClienteController::class, 'getFavorites'])->name('favorites');

Route::get('/menu-items/{restaurantId}', [MenuItemController::class, 'getMenuItems'])->name('menu-items');
Route::get('register', [ClienteController::class, 'create'])->name('clientes.create');
Route::post('clientes/store', [ClienteController::class, 'store'])->name('clientes.store');