<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});
// registration form
Route::get('/users/register', [UserController::class, 'create']);
// create user
Route::post('/users', [UserController::class, 'store']);
// logout
Route::post('/logout', [UserController::class, 'logout']);
// login form
Route::get('/login', [UserController::class, 'login']);
// login
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

