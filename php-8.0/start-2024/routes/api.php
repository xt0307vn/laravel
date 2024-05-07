<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('/user')->group(function() {
    Route::get('/list', [UserController::class, 'getAll']);
});



Route::prefix('/role')->group(function() {
    Route::get('/list', [RoleController::class, 'getAll']);
    Route::get('/list-with-user', [RoleController::class, 'getAllWithUser']);
    Route::get('/list-select', [RoleController::class, 'getWithSelect']);
});
