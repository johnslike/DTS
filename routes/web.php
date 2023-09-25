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

Route::controller(UserController::class)->group(function(){
    Route::get('/register', 'register');
    Route::get('/login', 'login')->name('login')->middleware('guest');
    Route::post('/login/process', 'process');
    Route::post('/logout', 'logout');
    Route::post('/store', 'store');
});

Route::controller(DocumentsController::class)->group(function(){
    Route::get('/', 'index')->middleware('auth');
    Route::get('/add/document', 'create');
    Route::post('/add/document', 'store');
    Route::get('/document/{id}', 'show');
    Route::put('/document/{document}', 'update');
    Route::delete('/document/{document}', 'destroy');
});
