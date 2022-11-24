<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
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

/**Auth Routes */

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('authenticate');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


/** My account */
Route::resource('/product' , ProductController::class)->middleware('auth');
Route::resource('/user' , UserController::class)->middleware('auth');
Route::resource('/category' , CategoryController::class)->middleware('auth');
Route::resource('/feature' , FeatureController::class)->middleware('auth');

/**Profile */

Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index')->middleware('auth');




Route::get('/', function () {
    return view('index');
});
