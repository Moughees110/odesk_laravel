<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('users', [UserController::class, 'getAllUsers']);
Route::get('user/{id}', [UserController::class, 'getUser']);
