<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TournamentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/', [CategoryController::class, 'index'])->name('home');
Route::get('/profile/show/{id}', [UserController::class, 'show'])->name('users.show');

Route::delete('/categories/delete/{id}', [CategoryController::class, 'destroy'])->name('categories.delete')->middleware('auth','isAdmin');
Route::get('/categories/edit/{id}', [CategoryController::class, 'edit'])->name('categories.edit')->middleware('auth','isAdmin');
Route::patch('/categories/update/{id}', [CategoryController::class, 'update'])->name('categories.update')->middleware('auth','isAdmin');
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create')->middleware('auth','isAdmin');
Route::post('/categories/store', [CategoryController::class, 'store'])->name('categories.store')->middleware('auth','isAdmin');

Route::get('/categories/show/{id}', [CategoryController::class, 'show'])->name('categories.show');
Route::get('/tournaments/show/{id}', [TournamentController::class, 'show'])->name('tournaments.show');

Route::delete('/tournaments/delete/{id}', [TournamentController::class, 'destroy'])->name('tournaments.delete')->middleware('auth','isAdmin');
Route::get('/tournaments/edit/{id}', [TournamentController::class, 'edit'])->name('tournaments.edit')->middleware('auth','isAdmin');
Route::patch('/tournaments/update/{id}', [TournamentController::class, 'update'])->name('tournaments.update')->middleware('auth','isAdmin');
Route::get('/tournaments/create', [TournamentController::class, 'create'])->name('tournaments.create')->middleware('auth','isAdmin');
Route::post('/tournaments/store', [TournamentController::class, 'store'])->name('tournaments.store')->middleware('auth','isAdmin');

Route::patch('/tournaments/join/{id}', [TournamentController::class, 'join'])->name('tournaments.join')->middleware('auth');
Route::delete('/tournaments/leave/{id}', [TournamentController::class, 'leave'])->name('tournaments.leave')->middleware('auth');