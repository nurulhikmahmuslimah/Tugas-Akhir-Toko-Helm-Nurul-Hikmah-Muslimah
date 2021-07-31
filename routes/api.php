<?php

use App\Http\Controllers\Api\cobaController;
use App\Http\Controllers\Api\suppliersController;
use App\Http\Controllers\Api\ordersController;
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

Route::get('',[cobaController::class, 'index']);
Route::resources([
    'databarangs' => cobaController::class,
    'suppliers' => suppliersController::class,
    'orders' => ordersController::class,
]);