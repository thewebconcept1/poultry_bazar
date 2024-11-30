<?php

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::middleware(['auth:sanctum'])->group(function () {

    Route::post('/addQuery', [ApiController::class, 'addQuery']);

    Route::get('/getUser', [ApiController::class, 'getUser']);
    Route::post('/updateUser', [ApiController::class, 'updateUser']);
    
});
Route::get('/getMarkets', [ApiController::class, 'getMarkets']);
Route::post('/getMarketRates', [ApiController::class, 'getMarketRates']);
Route::get('/getMedia/{type?}', [ApiController::class, 'getMedia']);
Route::post('/register', [ApiController::class, 'register']);
Route::post('/login', [ApiController::class, 'login']);
Route::get('/getFAQs', [ApiController::class, 'getFAQs']);