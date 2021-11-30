<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;
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

Route::get('/', [RoomController::class, 'getAllRooms']);

Route::get('/login', [UserController::class, 'login']);
Route::post('/login', [UserController::class, 'doLogin']) -> name('doLogin');
Route::get('/logout', [UserController::class, 'logout']);

Route::get('/api/v1/rooms/edit/{id}', [RoomController::class, 'editRoom']);
Route::put('/api/v1/rooms/edit/{id}', [RoomController::class, 'updateRoom']);