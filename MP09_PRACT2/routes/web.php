<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/',[UserController::class,'index']);
Route::get('/users',[UserController::class,'index']);
Route::get('/contact',[UserController::class,'contact']);
Route::get('/about',[UserController::class,'about']);
Route::get('/tasks',[\App\Http\Controllers\TaskController::class,'tasks']);
