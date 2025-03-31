<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('app');
});

Route::get('/suporte', function () {
    return view('suporte');
})->name('suporte');
