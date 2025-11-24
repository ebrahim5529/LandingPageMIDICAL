<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('website.index');
});

// Welcome Page
Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');
