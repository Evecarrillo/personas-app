<?php

use App\Http\Controllers\comunacontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaisController;
use App\Http\Controllers\MunicipioController; 
use App\Http\Controllers\DepartamentoController;



Route::get('/', function () {
    return view('welcome');
});

//rua comunas
Route::get('/comunas', [comunacontroller::class, 'index']) -> name('comunas.index');  
Route::post('/comunas', [comunacontroller::class, 'store'])-> name('comunas.store');  
Route::get('/comunas/create', [comunacontroller::class, 'create'])-> name('comunas.create');  
Route::delete('/comunas/{comuna}', [comunacontroller::class, 'destroy'])-> name('comunas.destroy');  
Route::put('/comunas/{comuna}', [comunacontroller::class, 'update'])-> name('comunas.update');  
Route::get('/comunas/{comuna}/edit', [comunacontroller::class, 'edit'])-> name('comunas.edit');  

//rua pais
Route::get('/paises', [PaisController::class, 'index'])->name('paises.index');
Route::post('/paises', [PaisController::class, 'store'])->name('paises.store');
Route::get('/paises/create', [PaisController::class, 'create'])->name('paises.create');
Route::delete('/paises/{pais}', [PaisController::class, 'destroy'])->name('paises.destroy');
Route::get('/paises/{pais}/edit', [PaisController::class, 'edit'])->name('paises.edit');
Route::put('/paises/{pais}', [PaisController::class, 'update'])->name('paises.update');

//rua municipio
Route::get('/municipios', [MunicipioController::class, 'index'])->name('municipios.index'); 
Route::post('/municipios', [MunicipioController::class, 'store'])->name('municipios.store'); 
Route::get('/municipios/create', [MunicipioController::class, 'create'])->name('municipios.create');
Route::delete('municipio/{municipio}', [MunicipioController::class, 'destroy'])->name('municipios.destroy');
Route::put('municipio/{municipio}', [MunicipioController::class, 'update'])->name('municipios.update');
Route::get('municipio/{municipio}/edit', [MunicipioController::class, 'edit'])->name('municipios.edit');

//rua departamento
Route::get('/departamentos', [DepartamentoController::class, 'index'])->name('departamentos.index');
Route::post('/departamentos', [DepartamentoController::class, 'store'])->name('departamentos.store');
Route::get('/departamentos/create', [DepartamentoController::class, 'create'])->name('departamentos.create');