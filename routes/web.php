<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IncidenteController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\TecnicoController;

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
    return view('Home.home');
})->name('home');

Route::get('/Dashboard', function () {
    return view('Dashboard.index');
})->name('dashboard');


// Listar todos os incidentes
Route::get('/incidentes', [IncidenteController::class, 'index'])->name('incidentes.index');

// Mostrar o formulário para criar um novo incidente
Route::get('/incidentes/create', [IncidenteController::class, 'create'])->name('incidentes.create');

// Salvar o novo incidente
Route::post('/incidentes', [IncidenteController::class, 'store'])->name('incidentes.store');

// Mostrar detalhes de um incidente específico
Route::get('/incidentes/{incidente}', [IncidenteController::class, 'show'])->name('incidentes.show');

// Mostrar o formulário para editar um incidente
Route::get('/incidentes/{incidente}/edit', [IncidenteController::class, 'edit'])->name('incidentes.edit');

// Atualizar um incidente específico
Route::put('/incidentes/{incidente}', [IncidenteController::class, 'update'])->name('incidentes.update');

// Excluir um incidente específico
Route::delete('/incidentes/{incidente}', [IncidenteController::class, 'destroy'])->name('incidentes.destroy');

Route::get('/incidentes/search', [IncidenteController::class, 'search'])->name('search.incidentes');







Route::get('/departamentos', [DepartamentoController::class, 'index'])->name('departamentos.index');
Route::get('/departamentos/create', [DepartamentoController::class, 'create'])->name('departamentos.create');
Route::post('/departamentos', [DepartamentoController::class, 'store'])->name('departamentos.store');
Route::get('/departamentos/{departamento}', [DepartamentoController::class, 'show'])->name('departamentos.show');
Route::get('/departamentos/{departamento}/edit', [DepartamentoController::class, 'edit'])->name('departamentos.edit');
Route::put('/departamentos/{departamento}', [DepartamentoController::class, 'update'])->name('departamentos.update');
Route::delete('/departamentos/{departamento}', [DepartamentoController::class, 'destroy'])->name('departamentos.destroy');







Route::get('/tecnicos', [TecnicoController::class, 'index'])->name('tecnicos.index');
Route::get('/tecnicos/create', [TecnicoController::class, 'create'])->name('tecnicos.create');
Route::post('/tecnicos', [TecnicoController::class, 'store'])->name('tecnicos.store');
Route::get('/tecnicos/{tecnico}', [TecnicoController::class, 'show'])->name('tecnicos.show');
Route::get('/tecnicos/{tecnico}/edit', [TecnicoController::class, 'edit'])->name('tecnicos.edit');
Route::put('/tecnicos/{tecnico}', [TecnicoController::class, 'update'])->name('tecnicos.update');
Route::delete('/tecnicos/{tecnico}', [TecnicoController::class, 'destroy'])->name('tecnicos.destroy');
