<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', [SessionController::class, 'showSession']);

Route::get('/registrarse', [SessionController::class, 'showRegister']);

Route::get('/home', [HomeController::class, 'showHome']);

Route::get('/agregar', [HomeController::class, 'showLibros']);

Route::get('/descripcion-libro', [HomeController::class, 'showDescripcion']);

Route::get('carrito', [HomeController::class, 'showCarrito'] );

Route::get('inventario', [HomeController::class, 'showInventario']);