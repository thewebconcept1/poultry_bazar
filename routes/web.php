<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::middleware(['custom_auth'])->group(function () {

    Route::get('/', function () {
        return view('dashboard');
    });
    Route::get('/operators', function () {
        return view('operators');
    });
    Route::get('/queries', function () {
        return view('queries');
    });
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::post('/Login', [UserController::class, 'login']);

Route::match(['get', 'post'], '/logout', [UserController::class, 'logout']);
