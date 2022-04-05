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

/* Route::get('/', function () {
    return view('home');
}); */

Auth::routes();

Route::get('/', [CategoryController::class, 'index'])->name('home');

// CRUD Categories 
// Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
// Route::post('/categories/store', [CategoryController::class, 'store'])->name('categories.store');

Route::delete('/categories/delete/{category}', [CategoryController::class, 'destroy'])->name('categories.delete');
Route::get('/categories/edit/{category}', [CategoryController::class, 'edit'])->name('categories.edit');
Route::put('/categories/update/{category}', [CategoryController::class, 'update'])->name('categories.update');