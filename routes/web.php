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