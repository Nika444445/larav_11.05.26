<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\MyAdminController;
use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return 'Привет!';
// });

// Route::get('/user', [UserController::class, 'index']);

// Route::get('/person', [UserController::class, 'person']);

// Route::get('/',[MainController::class,'index']);

// Route::get('/myadmin',[MyAdminControler::class,'index']);


Route::get('/', [MainController::class, 'index'])->name('index');

Route::get('/user', [UserController::class, 'index'])->name('user');

Route::get('/person', [UserController::class, 'person'])->name('person');

Route::get('/myadmin',[MyAdminController::class,'index'])->name('myadmin');

