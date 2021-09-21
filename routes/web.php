<?php

use App\Http\Controllers\LivroController;
use GuzzleHttp\Middleware;
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

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::resource('livros', LivroController::class);
});

Route::get('/clima', [App\Http\Controllers\ClimaController::class, 'index'])->name('clima.index');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
