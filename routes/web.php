<?php

use App\Http\Controllers\MarkController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',[MarkController::class,'home']);
Route::get('/add',[MarkController::class,'addpage']);
Route::post('/add',[MarkController::class,'adddata']);
Route::get('update/{id}',[MarkController::class,'updatepage']);
Route::post('update',[MarkController::class,'updatedata']);
Route::get('delete/{id}',[MarkController::class,'deletedata']);
Route::get('view/{id}',[MarkController::class,'viewdata']);
