<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', [UserController::class, 'index']);

Route::get('/login', [UserController::class, 'login']);

Route::get('/create', [UserController::class, 'create']);

Route::get('/listUser', [UserController::class, 'listUser']);

Route::get('/detailUser', [UserController::class, 'detailUser']);

Route::get('/updateUser', [UserController::class, 'updateUser']);