<?php

use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/pae/students',[StudentController::class,'studentsAll'])->name('students');
Route::get('/pae/students/{id}',[StudentController::class, 'coursesByStudentId'])->name('aStudent_api');
Route::delete('/pae/students/{studentId}/{courseId}',[StudentController::class, 'deleteCourse'])->name('deleteCourse');
