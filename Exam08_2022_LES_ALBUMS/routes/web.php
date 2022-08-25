<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\MusicianController;
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
    return view('accueil');
})->name('accueil');



Route::get('/albums', [AlbumController::class, 'albumWithArtists'])->name('album.list');
Route::get('/musicians', [MusicianController::class, 'getMusicians'])->name('musicians');
