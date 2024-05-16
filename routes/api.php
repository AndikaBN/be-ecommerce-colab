<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransactionController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// login api
Route::post('/login', [App\Http\Controllers\Api\AuthController::class, 'login']);

// register api
Route::post('/register', [App\Http\Controllers\Api\AuthController::class, 'register']);

// logout api
Route::post('/logout', [App\Http\Controllers\Api\AuthController::class, 'logout'])->middleware('auth:sanctum');

// products api
Route::apiResource('/api-products', App\Http\Controllers\Api\ProductController::class)->middleware('auth:sanctum');

// categories api
Route::apiResource('/api-categories', App\Http\Controllers\Api\CategoryController::class)->middleware('auth:sanctum');

// orders api
Route::post('/save-order', [App\Http\Controllers\Api\OrderController::class, 'saveOrder'])->middleware('auth:sanctum');

// discounts api
Route::get('/api-discounts', [App\Http\Controllers\Api\DiscountController::class, 'index'])->middleware('auth:sanctum');
Route::post('/api-discounts', [App\Http\Controllers\Api\DiscountController::class, 'store'])->middleware('auth:sanctum');

// transactions api
Route::middleware('auth:sanctum')->group(function () {
    Route::get('transactions', [TransactionController::class, 'index']);
    Route::get('transactions/{id}', [TransactionController::class, 'show']);
    Route::post('transactions', [TransactionController::class, 'store']);
    Route::put('transactions/{id}', [TransactionController::class, 'update']);
    Route::delete('transactions/{id}', [TransactionController::class, 'delete']);
});

// histories api
Route::middleware('auth:sanctum')->group(function () {
    Route::get('histories', [App\Http\Controllers\HistoryController::class, 'index']);
    Route::get('histories/{id}', [App\Http\Controllers\HistoryController::class, 'show']);
    Route::post('histories', [App\Http\Controllers\HistoryController::class, 'store']);
    Route::put('histories/{id}', [App\Http\Controllers\HistoryController::class, 'update']);
    Route::delete('histories/{id}', [App\Http\Controllers\HistoryController::class, 'delete']);
});
