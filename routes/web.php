<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SellingController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'index']);

Route::prefix('category')->group(function () {
    Route::get('/',[ProductsController::class, 'index']);
    Route::get('/foodBaverage',[ProductsController::class, 'cat1']);
    Route::get('/beautyHealth',[ProductsController::class, 'cat2']);
    Route::get('/homeCare',[ProductsController::class, 'cat3']);
    Route::get('/babyKid',[ProductsController::class, 'cat4']);
});

Route::get('/penjualan', [SellingController::class, 'index']);

Route::get('/user/{name}/id/{id}', [UserController::class, 'index']);
