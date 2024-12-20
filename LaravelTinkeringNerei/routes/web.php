<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeliculaController;
use App\Http\Controllers\BasketballerController;

Route::get('/', function () {
    return view('welcome');
});

// Rutas para Peliculas
Route::get('/pelicula', [PeliculaController::class, 'index'])->name('pelicula.index');
Route::get('/pelicula/create', [PeliculaController::class, 'create'])->name('pelicula.create');
Route::post('/pelicula/store', [PeliculaController::class, 'store'])->name('pelicula.store');
Route::get('/pelicula/edit/{id}', [PeliculaController::class, 'edit'])->name('pelicula.edit');
Route::post('/pelicula/update', [PeliculaController::class, 'update'])->name('pelicula.update');
Route::get('/pelicula/delete/{id}', [PeliculaController::class, 'destroy'])->name('pelicula.destroy');
Route::get('/pelicula/show/{id}', [PeliculaController::class, 'show'])->name('pelicula.show');

// Rutas para Basketballers
Route::get('/basketballers', [BasketballerController::class, 'index'])->name('basketballer.index');
Route::get('/basketballers/create', [BasketballerController::class, 'create'])->name('basketballer.create');
Route::post('/basketballers/store', [BasketballerController::class, 'store'])->name('basketballer.store');
Route::get('/basketballers/edit/{id}', [BasketballerController::class, 'edit'])->name('basketballer.edit');
Route::put('/basketballers/update/{id}', [BasketballerController::class, 'update'])->name('basketballer.update');
Route::get('/basketballers/delete/{id}', [BasketballerController::class, 'destroy'])->name('basketballer.destroy');
Route::get('/basketballers/show/{id}', [BasketballerController::class, 'show'])->name('basketballer.show');
