<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('about', function () {
    return view('about');
})->name('about');

// Services Routes
Route::get('services', function () {
    return view('services.main');
})->name('services');

Route::get('services/storage', function () {
    return view('services.storage');
})->name('storage');

Route::get('services/restoration-service', function () {
    return view('services.restoration-service');
})->name('restoration-service');
