<?php

use App\Http\Controllers\DocumentsController;
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

//Common routes naming
//index - Show all data
//show - Show a single data or student
//create - Show a single data or student
//store - Store a data
//edit - show form to a data
//update - Update data
//destroy - delete data

Route::get('/', [DocumentsController::class, 'index'])->middleware('auth');
Route::get('/register', [UserController::class, 'register']);
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login/process', [UserController::class, 'process']);
Route::post('/logout', [UserController::class, 'logout']);

Route::post('/store', [UserController::class, 'store']);