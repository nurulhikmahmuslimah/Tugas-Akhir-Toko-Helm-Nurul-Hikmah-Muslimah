<?php

use App\Http\Controllers\cobaController;

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

Route::get('', [cobaController::class, 'index']);
Route::get('/folders', [cobaController::class, 'index']);
Route::get('/folders/create', [cobaController::class, 'create']);
Route::post('/folders', [cobaController::class, 'store']);
Route::get('/folders/{id}', [cobaController::class, 'show']);
Route::get('/folders/{id}/edit', [cobaController::class, 'edit']);
Route::put('/folders/{id}', [cobaController::class, 'update']);
Route::delete('/folders/{id}', [cobaController::class, 'destroy']);



