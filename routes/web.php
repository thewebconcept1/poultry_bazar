<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::middleware(['custom_auth'])->group(function () {

    Route::get('/', function () {
        return view('dashboard');
    });

    Route::get('/modules', [ModuleController::class, 'getModules']);
    Route::post('/saveModule', [ModuleController::class, 'addModule']);
    Route::post('/deleteModule', [ModuleController::class, 'deleteModule']);

    Route::get('/operators/{id?}', [UserController::class, 'getUser']);
    Route::post('/addPrivileges', [UserController::class, 'addUserPrivileges']);

    Route::get('/subscription', function () {
        return view('subscription');
    });
    Route::get('/queries', function () {
        return view('queries');
    });
    Route::get('/Logout', [UserController::class, 'logout']);
    Route::get('/priveleges', function () {
        return view('priveleges');
    });
    Route::get('/Cities', [CityController::class, 'getCities']);
    Route::post('/saveCities', [CityController::class, 'addCities']);
    Route::post('/deleteCities', [CityController::class, 'deleteCities']);

    Route::get('/markets', function () {
        return view('markets');
    });
    Route::get('/marketupdates', function () {
        return view('marketupdates');
    });
    Route::get('/blogs', function () {
        return view('blogs');
    });
    Route::get('/diseases', function () {
        return view('diseases');
    });
    Route::get('/consultancyvideos', function () {
        return view('consultancyvideos');
    });

    Route::get('/categories/{type?}', [CategoryController::class, 'getCategory']);
    Route::post('/', [CategoryController::class, 'deleteCategory']);
    Route::post('/saveCategory', [CategoryController::class, 'addCategory']);

    Route::get('/setting', function () {
        return view('setting');
    });
    Route::get('/notification', function () {
        return view('notification');
    });
});

Route::post('/register', [UserController::class, 'RequestForService']);

Route::get('/login', [ModuleController::class, 'loginData']);

Route::post('/Login', [UserController::class, 'login']);

Route::match(['get', 'post'], '/logout', [UserController::class, 'logout']);
