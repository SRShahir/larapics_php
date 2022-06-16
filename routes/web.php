<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;

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

Route::get('/', [ImageController::class, 'index'])->name('images.index');

Route::get('/images/{image}', [ImageController::class, 'show'])->name('images.show');

Route::get('/images', [ImageController::class, 'create'])->name('images.create');

Route::post('/images', [ImageController::class, 'store'])->name('images.store');
