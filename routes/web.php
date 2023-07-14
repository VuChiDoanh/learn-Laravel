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

Route::match(['GET', 'POST'], '/students-add', [App\Http\Controllers\StudentController::class, 'add']);

Route::match(['GET', 'POST'], '/custommer-add', [App\Http\Controllers\CustommerController::class, 'add']);
