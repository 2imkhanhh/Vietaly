<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/gioi-thieu', function () {
    return view('about');
});
