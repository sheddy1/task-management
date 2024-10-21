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

Route::get('/Main', [Controller::class, 'main'])->name('main');

Route::get('/Task', [Controller::class, 'task'])->name('task');

Route::get('/History', [Controller::class, 'history'])->name('history');

Route::post('/Create Project', [Controller::class, 'create_project'])->name('create_project');

Route::post('/Create Task', [Controller::class, 'create_task'])->name('create_task');

Route::post('/Edit Task', [Controller::class, 'task_edit'])->name('task_edit');

