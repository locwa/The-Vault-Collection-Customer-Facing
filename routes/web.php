<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('about', function () {
    return view('about');
})->name('about');

Route::get('services', function () {
    return view('services.main');
})->name('services');
