<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\MarketController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\UserController;
use App\Models\Media;
use Illuminate\Support\Facades\Route;


Route::middleware(['custom_auth'])->group(function () {

    Route::get('/', function () {
        return view('dashboard');
    });
    Route::get('/notification', [NotificationController::class, 'getNotification']);
    Route::post('/addNotification', [NotificationController::class, 'addNotification']);

    Route::post('/updateUserDetails', [UserController::class, 'updateUserDetails']);
    Route::post('/updateUserPassword', [UserController::class, 'updateUserPassword']);

    Route::get('/setting', [UserController::class, 'settings']);

    Route::middleware(['check_privileges'])->group(function () {

        Route::get('/modules', [ModuleController::class, 'getModules']);
        Route::post('/saveModule', [ModuleController::class, 'addModule']);
        Route::post('/deleteModule', [ModuleController::class, 'deleteModule']);

        Route::get('/operators/{id?}', [UserController::class, 'getUser']);
        Route::post('/addPrivileges', [UserController::class, 'addUserPrivileges']);
        Route::post('/updateUserStatus', [UserController::class, 'updateUserStatus']);

        Route::get('/subscription', function () {
            return view('subscription');
        });
        Route::get('/queries', function () {
            return view('queries');
        });
        Route::get('/Logout', [UserController::class, 'logout']);
        Route::get('/priveleges/{id}', [UserController::class, 'getPriveleges']);
        Route::get('/Cities', [CityController::class, 'getCities']);
        Route::post('/saveCities', [CityController::class, 'addCities']);
        Route::post('/deleteCities', [CityController::class, 'deleteCities']);

        Route::get('/markets', [MarketController::class, 'getMarkets']);
        Route::post('/saveMarket', [MarketController::class, 'addMarket']);
        Route::get('/marketupdates', [MarketController::class, 'getMarketUpdates']);
        Route::post('/updateMarketRates', [MarketController::class, 'marketRates']);

        Route::get('/media/{type?}', [MediaController::class, 'getMedia']);
        Route::post('/saveMedia', [MediaController::class, 'addMedia']);
        Route::post('/deleteMedia', [MediaController::class, 'deleteMedia']);

        Route::get('/categories/{type?}', [CategoryController::class, 'getCategory']);
        Route::post('/deleteCategory', [CategoryController::class, 'deleteCategory']);
        Route::post('/saveCategory', [CategoryController::class, 'addCategory']);
        Route::post('/register', [UserController::class, 'RequestForService']);
    });
});
Route::get('/login', [ModuleController::class, 'loginData']);
Route::post('/Login', [UserController::class, 'login']);

Route::match(['get', 'post'], '/logout', [UserController::class, 'logout']);
Route::get('/landingpage', function () {
    return view('landingpage');
});
