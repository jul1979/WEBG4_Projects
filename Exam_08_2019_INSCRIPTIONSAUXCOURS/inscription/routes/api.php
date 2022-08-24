<?php

use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------

| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/pae/cours/{id}/inscrits', [StudentController::class, 'index'])->name('api.inscrits');
Route::get('/pae/cours/{id}/noninscrits', [StudentController::class, 'show'])->name('api.noninscrits');

Route::post('/pae/cours/{id}/student/{matricule}', [StudentController::class, 'store'])->name('student.course.store');
