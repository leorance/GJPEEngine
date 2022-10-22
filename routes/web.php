<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

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

// All values
Route::get('/', [ApiController::class, 'index']);

// Show details
Route::get('users', [ApiController::class, 'index_users']);
Route::get('classes', [ApiController::class, 'index_classes']);
Route::get('talents', [ApiController::class, 'index_talents']);
Route::get('pelayanan', [ApiController::class, 'index_pelayanan']);

// Find by id
Route::get('user/{id}', [ApiController::class, 'show_user']);
Route::get('talent/{id}', [ApiController::class, 'show_talent']);
Route::get('pelayanan/{id}', [ApiController::class, 'show_pelayanan']);
Route::get('class/{id}', [ApiController::class, 'show_class']);

// Store
Route::post('api/user/add', [ApiController::class, 'store_user']);
Route::post('api/talent/add', [ApiController::class, 'store_talent']);
Route::post('api/pelayanan/add', [ApiController::class, 'store_pelayanan']);
Route::post('api/class/add', [ApiController::class, 'store_class']);

// Update
Route::put('api/user/update/{user}', [ApiController::class, 'update_user']);
Route::put('api/class/update/{class}', [ApiController::class, 'update_class']);
Route::put('api/pelayanan/update/{pelayanan}', [ApiController::class, 'update_pelayanan']);
Route::put('api/talent/update/{talent}', [ApiController::class, 'update_talent']);

// Delete
Route::delete('api/user/delete/{user}', [ApiController::class, 'destroy_user']);
Route::delete('api/pelayanan/delete/{pelayanan}', [ApiController::class, 'destroy_pelayanan']);
Route::delete('api/talent/delete/{talent}', [ApiController::class, 'destroy_talent']);
Route::delete('api/class/delete/{class}', [ApiController::class, 'destroy_class']);