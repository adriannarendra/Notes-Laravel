<?php

use App\Http\Controllers\NoteController;
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

Route::get('/home', [NoteController::class, 'index']);
Route::get('/add', [NoteController::class, 'add']);
Route::post('/store', [NoteController::class, 'store']);
Route::get('/{id}/edit', [NoteController::class, 'edit']);
Route::put('/update/{id}', [NoteController::class, 'update']);
Route::delete('/update/{id}', [NoteController::class, 'destroy']);
