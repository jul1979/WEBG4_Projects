<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;
use App\Models\Student;
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
    return view('welcome')->name('accueil');
});

Route::get('/etudiants', [StudentController::class, 'studentAll'])->name('student.list');

Route::get('/cours', [CourseController::class, 'coursAll'])->name('cours.list');

Route::get('/inscrits', [CourseController::class, 'coursInscrits'])->name('inscrits.list');

Route::get('/inscrits/{id}', [CourseController::class, 'groupe'])->name('groupeCours.list');
