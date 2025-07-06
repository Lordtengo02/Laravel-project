<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('lastOne');
});

Route::get('/bienvenidos', function () {
    echo "Esto es una ruta de bienvenida";
    return view('welcome');
});


// Route::get('/contacto/formulario', function () { return view('contacto');
// }) ->name('contacto');

Route::get('/contacto/formulario',[App\Http\Controllers\ProductController::class,'index'])->name('contacto');

