<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;



Route::get('/', [PageController::class, 'index']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/services', [PageController::class, 'services']);
Route::get('/contact', [PageController::class, 'contact']);
Route::get('/products', [PageController::class, 'products']);
Route::get('/kvkk', [PageController::class, 'kvkk'])->name('kvkk');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');


