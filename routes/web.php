<?php

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

Route::get('/', [\App\Http\Controllers\SiteController::class, 'home'])->name('home');

Route::get('/dashboard', [\App\Http\Controllers\DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');
Route::post('/dashboard', [\App\Http\Controllers\DashboardController::class, 'storeUser'])->middleware(['auth'])->name('store-user');

Route::post('/save', [\App\Http\Controllers\StudentController::class, 'store'])->name('save_student');
Route::get('/edit', [\App\Http\Controllers\StudentController::class, 'edit'])->name('edit_student');
require __DIR__.'/auth.php';





