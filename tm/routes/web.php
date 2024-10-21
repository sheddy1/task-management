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

Route::post('/Edit Project', [Controller::class, 'project_edit'])->name('project_edit');

Route::post('/Edit Project1', [Controller::class, 'project_edit1'])->name('project_edit1');

Route::post('/Delete Task', [Controller::class, 'delete_task'])->name('delete_task');

Route::post('/Delete Project', [Controller::class, 'delete_Project'])->name('delete_Project');

Route::post('/Checked Task', [Controller::class, 'check_task'])->name('check_task');

Route::get('/Identify Task', [Controller::class, 'task_identify'])->name('task_identify');

Route::get('/Identify History', [Controller::class, 'history_identify'])->name('history_identify');

Route::post('/Project Folder Change', [Controller::class, 'project_folder_change'])->name('project_folder_change');

Route::get('/Logout', [Controller::class, 'logout'])->name('logout');

