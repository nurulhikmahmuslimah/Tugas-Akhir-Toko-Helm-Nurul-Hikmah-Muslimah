<?php
use App\Http\Controllers\suppliersController;
use App\Http\Controllers\cobaController;
use App\Http\Controllers\ordersController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('',[cobaController::class, 'index']);
//Route::get('/suppliers', [cobaController::class, 'index']);
//Route::get('/suppliers/create', [cobaController::class, 'create']);
//Route::post('/suppliers', [cobaController::class, 'store']);
//Route::get('/suppliers/{id}', [cobaController::class,'show']);
//Route::get('/suppliers/{id}/edit', [cobaController::class,'edit']);
//Route::put('/suppliers/{id}', [cobaController::class,'update']);
//Route::delete('/suppliers/{id}', [cobaController::class,'destroy']);

Route::resources([
    'databarangs' => cobaController::class,
    'suppliers' => suppliersController::class,
    'orders' => ordersController::class,
]);
Route::get('/suppliers/addmember/{supplier}', [suppliersController::class,'addmember']);
Route::put('/suppliers/addmember/{supplier}', [suppliersController::class,'updateaddmember']);
Route::put('/suppliers/deleteaddmember/{supplier}', [suppliersController::class,'deleteaddmember']);