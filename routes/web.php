<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
});

Route::get('/delivery', function () {
    return view('delivery');
});

Route::get('/about-us', function () {
    return view('about-us');
});
