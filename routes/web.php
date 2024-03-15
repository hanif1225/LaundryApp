<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TestingUserController;

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
    return view('testing');
});

Route::Get('/index', [UserController::class, 'index']);
Route::Get('/index2', [UserController::class, 'index2']);

//Route::resource('/management_users',UserController::class);

Route::post('/management_users', [UserController::class, 'store'])->name('store');
Route::post('/store_data', [UserController::class, 'store'])->name('store_data');
