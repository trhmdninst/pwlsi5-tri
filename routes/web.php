<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('about', function () {
    return view('about');
});

Route::get('mahasiswa', function () {
    $npm = [123, 124, 125, 126];
    $nama = ['Risa', 'Riski', 'Dita', 'Andin'];
    $jumlah = count($npm);
    return view('mahasiswa', compact('npm', 'jumlah', 'nama'));
});

Route::get('profile', function () {
    return view('profile');
});
