<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\ProductosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.principal');
});
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/usuario', [UsuariosController::class, 'index'])->name('usuario.index');
Route::get('/producto', [ProductosController::class, 'index'])->name('producto.index');
Route::post('/producto', [ProductosController::class, 'store'])->name('producto.store');
Route::delete('/productos/{id}', [ProductosController::class, 'destroy'])->name('producto.destroy');
Route::get('/productos/{id}/edit', [ProductosController::class, 'edit'])->name('producto.edit');
Route::put('/productos/{id}', [ProductosController::class, 'update'])->name('producto.update');