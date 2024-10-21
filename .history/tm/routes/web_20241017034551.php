<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

//Route::get('/', function () {
    //return view('welcome');
//})->name('welcome');

Route::get('/', [Controller::class, 'welcome'])->name('welcome');

Route::post('/Register', [Controller::class, 'register'])->name('register');

Route::get('/Login', [Controller::class, 'login'])->name('login');

Route::post('/Check', [Controller::class, 'check'])->name('check');

Route::post('/Main', [Controller::class, 'main'])->name('main');
