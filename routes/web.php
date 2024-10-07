<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::middleware(['custom_auth'])->group(function () {

    Route::get('/', function () {
        return view('layouts.layout');
    });
    
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::post('/Login', [UserController::class, 'login']);