<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/projects', [\App\Http\Controllers\ProjectController::class, 'index'])->name('projects.index');//->middleware('guest');
Route::get('/projects/{id}', [\App\Http\Controllers\ProjectController::class, 'show'])->name('projects.show');//->middleware('guest');
Route::post('/projects', [\App\Http\Controllers\ProjectController::class, 'create'])->name('projects.create');//->middleware('guest');
Route::get('/projects', [\App\Http\Controllers\ProjectController::class, 'index'])->name('projects.index');//->middleware('guest');
