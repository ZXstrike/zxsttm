<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('porto');
});



Route::get('/welcome', function () {
    return view('welcome');
});
