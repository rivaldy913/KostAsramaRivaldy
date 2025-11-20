<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index'); // Memanggil resources/views/index.blade.php
})->name('home');