<?php

use App\Http\Controllers\ClientesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarrosController;
use App\Http\Controllers\AlugueisController;

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


Route::get('/app', [CarrosController::class, 'index']);

Route::get('/carros', [CarrosController::class,'index'])->name('carros.index');
Route::get('/carros/create', [CarrosController::class, 'create'])->name('carros.create');
Route::post('/carros', [CarrosController::class, 'store'])->name('carros.store');
Route::get('/carros/{carro}/edit', [CarrosController::class, 'edit'])->name('carros.edit');
Route::put('/carros/{carro}', [CarrosController::class, 'update'])->name('carros.update');
Route::delete('/carros/{carro}', [CarrosController::class, 'destroy'])->name('carros.destroy');

Route::get('/clientes', [ClientesController::class, 'index'])->name('clientes.index');
Route::get('/clientes/create', [ClientesController::class, 'create'])->name('clientes.create');
Route::post('/clientes', [ClientesController::class, 'store'])->name('clientes.store');
Route::get('/clientes/{cliente}/edit', [ClientesController::class, 'edit'])->name('clientes.edit');
Route::put('/clientes/{cliente}', [ClientesController::class, 'update'])->name('clientes.update');
Route::delete('/clientes/{cliente}', [ClientesController::class, 'destroy'])->name('clientes.destroy');

Route::get('/alugueis', [AlugueisController::class, 'index'])->name('alugueis.index');
Route::get('/alugueis/create', [AlugueisController::class, 'create'])->name('alugueis.create');
Route::post('/alugueis', [AlugueisController::class, 'store'])->name('alugueis.store');
Route::get('/alugueis/{aluguel}/edit', [AlugueisController::class, 'edit'])->name('alugueis.edit');
Route::put('/alugueis/{aluguel}', [AlugueisController::class, 'update'])->name('alugueis.update');
Route::delete('/alugueis/{aluguel}', [AlugueisController::class, 'destroy'])->name('alugueis.destroy');