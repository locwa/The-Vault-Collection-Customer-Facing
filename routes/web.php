<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventoryController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('about', function () {
    return view('about');
})->name('about');

Route::get('contact', function () {
    return view('contact');
})->name('contact');

Route::get('inventory', [InventoryController::class, 'viewAll'])->name('inventory');

Route::get('view-car/{id}', [InventoryController::class, 'viewCar'])->name('view-car');

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

Route::get('services/sales', function () {
    return view('services.sales');
})->name('sales');

Route::get('services/collection-management', function () {
    return view('services.collection-management');
})->name('collection-management');
