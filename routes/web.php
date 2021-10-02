<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [App\Http\Controllers\Auth\AuthController::class, 'index']);
Route::group(['prefix' => 'auth'], function () {
    Route::get('login', [App\Http\Controllers\Auth\AuthController::class, 'login']);
    Route::get('register', [App\Http\Controllers\Auth\AuthController::class, 'register']);
});
Route::group(['prefix' => 'client'], function () {
    Route::get('index', [App\Http\Controllers\ClientController::class, 'index']);
    Route::post('create', [App\Http\Controllers\ClientController::class, 'create']);    Route::post('create', [App\Http\Controllers\ClientController::class, 'create']);
    Route::get('show/{id}', [App\Http\Controllers\ClientController::class, 'show']);
});
Route::group(['prefix' => 'driver'], function () {
    Route::get('index', [App\Http\Controllers\DriverController::class, 'index']);
    Route::post('create', [App\Http\Controllers\DriverController::class, 'create']);
    Route::get('show/{id}', [App\Http\Controllers\DriverController::class, 'show']);
});
Route::group(['prefix' => 'shipment'], function () {
    Route::get('index', [App\Http\Controllers\ShipmentsController::class, 'index']);
    Route::post('create', [App\Http\Controllers\ShipmentsController::class, 'create']);
    Route::get('show/{id}', [App\Http\Controllers\ShipmentsController::class, 'show']);
});


