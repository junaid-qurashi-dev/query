<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [UserController::class, 'ShowUser']);
Route::get('/user/{id}', [UserController::class, 'SingleUser'])->name('user.view');
