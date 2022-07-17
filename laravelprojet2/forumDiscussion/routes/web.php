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

Route::get('/', function () {
    return view('template');
});
Route::get('/users',[\App\Http\Controllers\UserController::class,'index'])->name('userindex');
Route::get('/messages',[\App\Http\Controllers\MessageController::class,'index'])->name('messageindex');
Route::get('/threads',[\App\Http\Controllers\ThreadController::class,'index'])->name('threadindex');
Route::get('/users/{id}/messages',[\App\Http\Controllers\UserController::class,'show'])->name('usershow');
Route::get('/login',[\App\Http\Controllers\UserController::class,'loginForm'])->name('login');
Route::post('/logged',[\App\Http\Controllers\UserController::class,'loginProcessor'])->name('loginprocess');
