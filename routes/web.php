<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UrlController;
use App\Http\Controllers\GenController;
use App\Http\Controllers\RediController;
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
Route::get('/', [GenController::class, 'show']);

Route::get('/stats/{url}', [UrlController::class, 'show']);

Route::get('/{url}', [RediController::class, 'show']);