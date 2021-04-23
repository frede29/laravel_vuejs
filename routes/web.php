<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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
});


Route::get('/tasklist/{q?}',[TaskController::class, 'index']);
Route::post('tasklist',[TaskController::class, 'store']);
Route::get('tasks/edit/{id}',[TaskController::class, 'edit']);
Route::patch('tasks/edit/{id}',[TaskController::class, 'update']);
Route::delete('tasks/{id}',[TaskController::class, 'destroy']);



