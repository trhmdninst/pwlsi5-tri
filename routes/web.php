<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('about', function () {
    return view('about');
});

Route::get('mahasiswa', function () {
    return view('mahasiswa');
});

Route::get('profile', function () {
    return view('profile');
});

Route::get('array', function () {
    for ($i = 1; $i <= 10; $i++) {
        echo 'Hello Word ' . $i . '<br>';
    }
});
