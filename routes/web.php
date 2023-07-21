<?php

use App\Http\Controllers\StudentController;
use Database\Seeders\StudentSeeder;
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

Route::get('/', [App\Http\Controllers\CustommerController::class, 'index']);
Route::get('/custommer', [App\Http\Controllers\CustommerController::class, 'index']);
Route::post('/custommer', [App\Http\Controllers\CustommerController::class, 'index'])->name('search');

Route::match(['GET', 'POST'], '/students-add', [App\Http\Controllers\StudentController::class, 'add']);

Route::get('/custommer-add', [App\Http\Controllers\CustommerController::class, 'add']);

Route::post('/custommer-add', [App\Http\Controllers\CustommerController::class, 'store'])->name('store');
Route::get('/custommer-update/{$id}', [App\Http\Controllers\CustommerController::class, 'store']);

Route::post('/custommer-update/{$id}', [App\Http\Controllers\CustommerController::class, 'store'])->name('put');
