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
    $nilai_awal = 1;
    while ($nilai_awal <= 10) {
        echo 'Hello Word' . $nilai_awal . '<br>';
        $nilai_awal++;
    }
});
