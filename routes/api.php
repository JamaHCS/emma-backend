<?php

use App\Http\Controllers\CheckController;
use App\Http\Controllers\ProductsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('v1/products', [ProductsController::class, 'index']);

Route::get('v1/checks', [CheckController::class, 'index']);
Route::get('v1/checks/{check}', [CheckController::class, 'show']);
Route::post('v1/checks/check', [CheckController::class, 'check']);
