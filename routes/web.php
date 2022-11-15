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

Route::get('generate', function () {
    Artisan::call('migrate:fresh --seed');
    return 'seeding success!';
});
// All values
Route::get('api', [ApiController::class, 'index']);

// Show details
Route::get('api/unames', [ApiController::class, 'index_uname']);
Route::get('api/classes', [ApiController::class, 'index_classes']);
Route::get('api/talents', [ApiController::class, 'index_talents']);
Route::get('api/pelayanan', [ApiController::class, 'index_pelayanan']);

// Find by id
Route::get('api/uname/{id}', [ApiController::class, 'show_uname']);
Route::get('api/talent/{id}', [ApiController::class, 'show_talent']);
Route::get('api/pelayanan/{id}', [ApiController::class, 'show_pelayanan']);
Route::get('api/class/{id}', [ApiController::class, 'show_class']);

// Store
Route::post('api/uname/add', [ApiController::class, 'store_uname']);
Route::post('api/talent/add', [ApiController::class, 'store_talent']);
Route::post('api/pelayanan/add', [ApiController::class, 'store_pelayanan']);
Route::post('api/class/add', [ApiController::class, 'store_class']);

// Update
Route::put('api/uname/update/{uname}', [ApiController::class, 'update_uname']);
Route::put('api/class/update/{class}', [ApiController::class, 'update_class']);
Route::put('api/pelayanan/update/{pelayanan}', [ApiController::class, 'update_pelayanan']);
Route::put('api/talent/update/{talent}', [ApiController::class, 'update_talent']);

// Delete
Route::delete('api/uname/delete/{uname}', [ApiController::class, 'destroy_uname']);
Route::delete('api/pelayanan/delete/{pelayanan}', [ApiController::class, 'destroy_pelayanan']);
Route::delete('api/talent/delete/{talent}', [ApiController::class, 'destroy_talent']);
Route::delete('api/class/delete/{class}', [ApiController::class, 'destroy_class']);