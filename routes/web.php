<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('welcome2');
});

Route::get('/home', [PageController::class, 'index'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

Route::get('hello', function () {
    return 'Hello, World!';
});

Route::get('/belajar', function () {
    echo '<h1>Selamat Datang</h1>';
    echo '<p>Ini adalah halaman belajar Laravel</p>';   
});