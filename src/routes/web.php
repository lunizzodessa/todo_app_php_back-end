<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\TodoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/", function () {
    return view("welcome");
});

Route::controller(TodoController::class)->group(function () {
    Route::get('/todo', 'show');
    Route::post('/todo/create', 'create');
    Route::get('/todo/delete/{id}', 'delete');
    Route::get('/todo/complete/{id}', 'complete');
});
