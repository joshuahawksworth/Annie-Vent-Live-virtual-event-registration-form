<?php

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
    return view('welcome');
});

Route::get('/email', [App\Http\Controllers\EmailController::class, 'create']);
Route::get('/', [App\Http\Controllers\GuestController::class, 'index']);

Route::post('/email', [App\Http\Controllers\EmailController::class, 'sendEmail'])->name('send.email');
Route::post('/', [App\Http\Controllers\GuestController::class, 'index'])->name('index');