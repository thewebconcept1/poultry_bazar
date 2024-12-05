<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\ProductController;
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

// product 

Route::post('/addProduct', [ProductController::class, 'addProduct']);
Route::get('/getProducts', [ProductController::class, 'getProducts']);
Route::match(['get', 'post'], '/deleteProduct/{product_id}', [ProductController::class, 'deleteProduct']);
Route::post('/updateProduct/{product_id}', [ProductController::class, 'updateProduct']);



Route::post('/addVariation', [ProductController::class, 'addVariation']);
Route::match(['get', 'post'], '/deleteVariation/{variation_id}', [ProductController::class, 'deleteVariation']);
Route::post('/updateVariation/{variation_id}', [ProductController::class, 'updateVariation']);