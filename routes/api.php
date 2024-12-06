<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
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

    // product 

    Route::controller(ProductController::class)->group(function () {
        Route::post('/addProduct',  'addProduct');
        Route::get('/getProducts',  'getProducts');
        Route::match(['get', 'post'], '/deleteProduct/{product_id}',  'deleteProduct');
        Route::post('/updateProduct/{product_id}',  'updateProduct');
        // Variations
        Route::post('/addVariation', 'addVariation');
        Route::get('/getVariation/{product_id?}', 'getVariations');
        Route::match(['get', 'post'], '/deleteVariation/{variation_id}',  'deleteVariation');
        Route::post('/updateVariation/{variation_id}', 'updateVariation');
    });
    Route::controller(CustomerController::class)->group(function () {
        Route::get('/getCustomers', 'getCustomers');
        Route::post('/addCustomer', 'addCustomer');
        Route::post('/updateCustomer/{customer_id}', 'updateCustomer');
        Route::match(['get', 'post'], '/deleteCustomer/{customer_id}', 'deleteCustomer');
    });

    Route::controller(OrderController::class)->group(function () {
        Route::get('/getOrders', 'getOrders');
        Route::post('/addOrder', 'addOrder');
        Route::match(['get', 'post'], '/saleReport', 'saleReport');
        Route::match(['get', 'post'], '/dashboardData', 'dashboardData');

    });

});
Route::get('/getMarkets', [ApiController::class, 'getMarkets']);
Route::post('/getMarketRates', [ApiController::class, 'getMarketRates']);
Route::get('/getMedia/{type?}', [ApiController::class, 'getMedia']);
Route::post('/register', [ApiController::class, 'register']);
Route::post('/login', [ApiController::class, 'login']);
Route::get('/getFAQs', [ApiController::class, 'getFAQs']);





Route::controller(CompanyController::class)->group(function () {
    Route::post('/addCompany', 'addCompany');
});
