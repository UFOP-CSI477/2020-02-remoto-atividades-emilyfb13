<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\EstadoController;
use App\Http\Controllers\CidadeController;
use App\Http\Controllers\PessoaController;
use App\Http\Controllers\CompraController;
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
    return view('principal');
})->name('home');

Route::resource('/produto', ProdutoController::class)->middleware('auth');
Route::resource('/estado', EstadoController::class)->middleware('auth');
Route::resource('/cidade', CidadeController::class)->middleware('auth');
Route::resource('/pessoa', PessoaController::class);
Route::resource('/compra', CompraController::class)->middleware('auth');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
