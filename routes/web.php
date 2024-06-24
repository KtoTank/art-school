<?php

use App\Http\Controllers\RequestController;
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

//Route::get('/', function () {
//    return view('layout.home');
//});

Route::get('/', [RequestController::class, 'getData'])->name('home');

// Отправление заявки
Route::post('/submit-record', [RequestController::class, 'submitRecord'])->name('submit-record');

// Отправление вопроса
Route::post('/submit-question', [RequestController::class, 'submitQuestion'])->name('submit-question');
