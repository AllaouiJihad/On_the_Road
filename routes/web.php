<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\VoyageController;
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

Route::get('/',[VoyageController::class,'listVoyage'])->name('home');

Route::get('/signup', [UserController::class, 'showRegister']);
Route::get('/signin', [UserController::class, 'showLogin']);

Route::post('/signup', [UserController::class,'register'])->name('register');
Route::post('/signin', [UserController::class,'signin'])->name('signin');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/dash',[VoyageController::class, 'index']);

Route::post('/dash',[VoyageController::class, 'store'])->name('addVoyage');
