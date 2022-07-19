<?php

use App\Http\Controllers\GarnitureController;
use App\Http\Controllers\PizzaController;
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
Route::get('/pizzas',[PizzaController::class,'index'])->name('nosPizzas');
Route::get('/commander',[GarnitureController::class,'index'])->name('commande');
Route::get('/test',[GarnitureController::class, 'ingredientsData'])->name('test');
