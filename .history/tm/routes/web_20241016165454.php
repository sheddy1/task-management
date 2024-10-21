<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('Register', 'Controller@register')->name('register');

Route::get('/register', [UserController::class, 'register'])->name('register');
