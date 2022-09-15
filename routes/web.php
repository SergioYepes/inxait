<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ConcursantesController;
use App\Http\Controllers\GanadorController;
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

Route::resource("concursantes",ConcursantesController::class);
Auth::routes();
Route::resource('ganador-sorteos', GanadorController::class);


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
