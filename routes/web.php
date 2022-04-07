<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
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

Route::delete('/categories/delete/{id}', [CategoryController::class, 'destroy'])->name('categories.delete')->middleware('auth','isAdmin');
Route::get('/categories/edit/{id}', [CategoryController::class, 'edit'])->name('categories.edit')->middleware('auth','isAdmin');
Route::patch('/categories/update/{id}', [CategoryController::class, 'update'])->name('categories.update')->middleware('auth','isAdmin');
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create')->middleware('auth','isAdmin');
Route::post('/categories/store', [CategoryController::class, 'store'])->name('categories.store')->middleware('auth','isAdmin');

Route::get('/categories/show/{id}', [CategoryController::class, 'show'])->name('categories.show');

