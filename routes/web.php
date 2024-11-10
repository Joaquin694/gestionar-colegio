<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\AsistenciaController;
use App\Http\Controllers\MatriculaController;
use App\Http\Controllers\PagoController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('docentes', DocenteController::class);
Route::resource('cursos', CursoController::class);
Route::resource('estudiantes', EstudianteController::class);
Route::resource('asistencias', AsistenciaController::class);
Route::resource('matriculas', MatriculaController::class);
Route::resource('pagos', PagoController::class);