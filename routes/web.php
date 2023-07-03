<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pageController;
use App\Http\Controllers\productsController;
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

Route::get('/',[pageController::class,'index']);

Route::get('/create',[productsController::class,'create']);

Route::post('/create',[productsController::class,'store']);

Route::get('/add/{id}',[pageController::class,'add']);

Route::get('/cart',[pageController::class,'cart']);
