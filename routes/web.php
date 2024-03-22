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

// Management Users
Route::get('/management_users/dataTable',[UserController::class,'dataTable'])->name('data_user');
Route::resource('/management_users',UserController::class);
Route::Get('/management_users/detail', [UserController::class, 'show'])->name('detail_data_user');
Route::delete('/management_users/delete', [EmployeeController::class, 'destroy'])->name('delete_data_user');
//Route::Get('/management_users', [UserController::class, 'index']);
//Route::post('/management_users', [UserController::class, 'store'])->name('store_data_user');

