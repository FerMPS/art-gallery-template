<?php

use Illuminate\Support\Facades\Route;

// Ruta Home
Route::get('/', function () {
    return view('home');
})->name('home');

// Ruta Acerca de Mi
Route::get('/about', function () {
    return view('about');
})->name('about');

// Ruta Colecciones (Obras)
Route::get('/collections', function () {
    return view('collections');
})->name('collections');

// Ruta Galerías (Exposiciones/Museos)
Route::get('/galleries', function () {
    return view('galleries');
})->name('galleries');