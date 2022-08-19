<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\StudentController;
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
})->name("accueil");

Route::resources([
    'students' => StudentController::class,
    'courses' => CourseController::class,
    'programs' => ProgramController::class,
]);
Route::get('/pae/students',[StudentController::class,'students'])->name('studentsProgram');
//Route::get('/detail/{id}',[StudentController::class,''])->name('detail');
