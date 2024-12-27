<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    view()->share('title', "Ana Sayfa - Bulut Yazılım Çözümleri");
    return view('home.index');
});
Route::get('/about', function () {
    view()->share('title', "Hakkımızda - Bulut Yazılım Çözümleri");

    return view('about.index');
});
Route::get('/services', function () {
    view()->share('title', "Hizmetlerimiz - Bulut Yazılım Çözümleri");

    return view('services.index');
});
Route::get('/contact', function () {
    view()->share('title', "İletişim - Bulut Yazılım Çözümleri");

    return view('contact.index');
});
Route::get('/products', function () {
    view()->share('title', "Ürünlerimiz - Bulut Yazılım Çözümleri");

    return view('products.index');
});
