<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function showHome(){
        return view('home');
    }

    public function showLibros(){
        return view('libros');
    }

    public function showDescripcion(){
        return view('descripcion');
    }

    public function showCarrito(){
        return view('carrito');
    }

    public function showInventario(){
        return view('inventario');
    }
}
