<?php

use App\Http\Controllers\HalamanController;
use Illuminate\Support\Facades\Route;

Route::get('/hal1', function () {
    return view('halaman_pertama');
});

Route::get('/hal2', function () {
    return view('halaman_kedua');
});
