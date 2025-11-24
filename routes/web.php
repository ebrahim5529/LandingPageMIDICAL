<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Landing Page (Website)
Route::get('/welcome', function () {
    return view('website.index');
})->name('welcome');
