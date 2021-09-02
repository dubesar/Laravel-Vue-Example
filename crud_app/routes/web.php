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

Route::get('current_tasks', [TaskController::class, 'index']);
Route::get('archived_tasks', [TaskController::class, 'archived']);
Route::post('create_task', [TaskController::class, 'store']);
Route::post('delete_task/{id}', [TaskController::class, 'destroy']);
Route::post('archive_task/{id}', [TaskController::class, 'archive']);
Route::post('edit_task/{id}', [TaskController::class, 'edit']);