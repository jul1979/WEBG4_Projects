<?php

use App\Http\Controllers\MessageController;
use App\Http\Controllers\ThreadController;
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
Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/',[ThreadController::class,'index'])->name('home');
Route::get('detail/{id}',[MessageController::class,'index'])->name('detail');

