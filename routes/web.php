<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\GuideController;
use App\Http\Controllers\TypeController;
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

Route::get('/voyage',[VoyageController::class, 'index']);
Route::post('/voyage',[VoyageController::class, 'store'])->name('addVoyage');

Route::get('/voyages',[VoyageController::class, 'getVoyages']);
Route::put('/voyages/{id}',[VoyageController::class, 'updateVoyage'])->name('update.voyage');
Route::delete('/voyages/{id}',[VoyageController::class, 'destroyVoyage'])->name('delete.voyage');
Route::get('/detailsVoyage/{id}',[VoyageController::class,'getVoyage'])->name('voyage.details');

Route::get('/guide',[GuideController::class,'index']);
Route::post('/guide',[GuideController::class, 'store'])->name('addGuide');

Route::get('guides',[GuideController::class,'getAllGuides']);
Route::put('guides/{id}',[GuideController::class,'update'])->name('update.guide');
Route::delete('guides/{id}',[GuideController::class,'destroy'])->name('delete.guide');

Route::get('/about',[GuideController::class, 'affichage']);




Route::get('/contact', [ContactController::class,'showForm'])->name('contact.form');
Route::post('/contact', [ContactController::class,'submitForm'])->name('contact.submit');


Route::get('/types',[TypeController::class,'showTypes']);
Route::post('/types',[TypeController::class,'addType'])->name('add.type');
Route::put('/types/{id}',[TypeController::class,'updateType'])->name('update.type');
Route::delete('/types/{id}',[TypeController::class,'deleteType'])->name('delete.type');


Route::get('/destinations',[DestinationController::class,'showDestinations']);
Route::post('/destinations',[DestinationController::class,'addDestination'])->name('add.destination');
Route::put('/destinations/{id}',[DestinationController::class,'updateDestination'])->name('update.destination');
Route::delete('/destinations/{id}',[DestinationController::class,'deleteDestination'])->name('delete.destination');

Route::get('/categories',[CategoryController::class,'showCategories']);
Route::post('/categories',[CategoryController::class,'addCategory'])->name('add.category');
Route::put('/categories/{id}',[CategoryController::class,'updateCategory'])->name('update.category');
Route::delete('/categories/{id}',[CategoryController::class,'deleteCategory'])->name('delete.category');