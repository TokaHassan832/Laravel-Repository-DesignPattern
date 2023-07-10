<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [\App\Http\Controllers\CustomerController::class,'index']);
Route::get('/customers/{customerId}', [\App\Http\Controllers\CustomerController::class,'show']);
Route::get('/customers/{customerId}/update', [\App\Http\Controllers\CustomerController::class,'update']);
Route::get('/customers/{customerId}/delete', [\App\Http\Controllers\CustomerController::class,'destroy']);

