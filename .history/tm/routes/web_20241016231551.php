<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/Register', [Controller::class, 'register'])->name('register');

Route::post('/Login', [Controller::class, 'login'])->name('login');
