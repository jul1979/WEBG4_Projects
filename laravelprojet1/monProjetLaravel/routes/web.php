<?php

use App\Http\Controllers\HelloCtrl;
use App\Http\Controllers\ProjectCtrl;
use App\Http\Controllers\RestTaskController;
use App\Http\Controllers\TodoCtrl;
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
    //return view('welcome');
    return view('bidon');
});
Route::get('/hello/{name}',[HelloCtrl::class,'index']);
Route::get('/todo',[TodoCtrl::class,'index'])->name('todolist');
Route::get('/todo/{id}',[TodoCtrl::class,'detail'])->name('todo.detail');
Route::post('/todo',[TodoCtrl::class,'store']);
Route::post('/api/projects',[ProjectCtrl::class,'index']);
Route::get('api/tasks/{id?}',[RestTaskController::class,'tasks']);
Route::get('/detail/{id}',[TodoCtrl::class,'projectDetail']);
