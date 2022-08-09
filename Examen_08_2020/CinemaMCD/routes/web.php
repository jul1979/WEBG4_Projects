<?php

use App\Http\Controllers\MovieController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\ShowController;
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
    return view('welcome');
})->name('accueil');



Route::resource('shows', ShowController::class);
Route::resource('movies', MovieController::class);
Route::resource('rooms', RoomController::class);
Route::post('/movies/{idMovie}/liker',[MovieController::class,'likerUnFilm'])->name('liker');
