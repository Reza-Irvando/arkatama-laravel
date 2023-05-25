<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RoleController;

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

Route::get('/', [LandingController::class, 'index']);

Route::get('/login', [UserController::class, 'login']);

Route::get('/create', [UserController::class, 'create']);

Route::get('/user', [UserController::class, 'index']);

Route::get('/role', [RoleController::class, 'index']);

Route::get('/detailUser', [UserController::class, 'detailUser']);

Route::get('/updateUser', [UserController::class, 'updateUser']);

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/category', [CategoryController::class, 'index']);

Route::get('/product', [ProductController::class, 'index']);