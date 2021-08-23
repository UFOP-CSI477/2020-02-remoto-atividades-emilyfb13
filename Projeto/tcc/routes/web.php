<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DadoController;
use App\Http\Controllers\TarefaController;
use App\Http\Controllers\TarefaPublicoController;
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
    return view('inicio');
})->name('inicio');

Route::get('/instrucao', function () {
    return view('instrucao');
})->name('instrucao');

Route::resource('/consulta', DadoController::class);
Route::resource('/tarefas', TarefaPublicoController::class);
Route::resource('/tarefa', TarefaController::class)->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');