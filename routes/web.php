<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return 'Привет!';
// });

// Route::get('/user', [UserController::class, 'index']);

// Route::get('/person', [UserController::class, 'person']);

Route::get('/',[MainController::class,'index']);


// Route::get('/admin',[MyAdminControler::class,'index']);