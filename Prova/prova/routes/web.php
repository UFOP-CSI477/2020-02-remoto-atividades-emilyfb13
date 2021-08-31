<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PessoaController;
use App\Http\Controllers\UnidadeController;
use App\Http\Controllers\VacinaController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\GeralController;
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
    return view('home');
})->name('home');

Route::get('/administrativo', function () {
    return view('administrativohome');
})->name('administrativo')->middleware('auth');

Route::resource('/pessoas', PessoaController::class);
Route::resource('/unidades', UnidadeController::class);
Route::resource('/vacinas', VacinaController::class);
Route::resource('/registros', RegistroController::class);
Route::resource('/geral', GeralController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
