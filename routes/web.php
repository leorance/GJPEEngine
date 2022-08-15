<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassesController;
use App\Http\Controllers\PelayananController;
use App\Http\Controllers\TalentsController;
use App\Http\Controllers\UsersController;

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
Route::apiResource('api/classes', ClassesController::class);
Route::apiResource('api/pelayanan', PelayananController::class);
Route::apiResource('api/talents', TalentsController::class);
Route::apiResource('api/users', UsersController::class);