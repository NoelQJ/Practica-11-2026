<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\ProductosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.principal');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/usuarios', [UsuariosController::class, 'index'])->name('usuario.index');

Route::get('/productos', [ProductosController::class, 'index'])->name('producto.index');
Route::get('/productos/obtenerProductos', [ProductosController::class, 'getProduct'])->name('producto.obtenerProductos');
Route::post('/productos', [ProductosController::class, 'store'])->name('producto.store');
Route::put('/productos/{id}', [ProductosController::class, 'update'])->name('producto.update');
Route::delete('/productos/{id}', [ProductosController::class, 'destroy'])->name('producto.destroy');