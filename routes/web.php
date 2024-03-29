<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/gaji', function () {
    return view('gaji');
});

Route::get('/jabatan', function () {
    return view('jabatan');
});

Route::get('/presensi', function () {
    return view('presensi');
});