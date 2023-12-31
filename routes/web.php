<?php

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\InitController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfesorController;
use App\Http\Controllers\CursoController;

// -------------------------------Alumno-------------------------------------------------
Route::get('/',[InitController::class,'init'])->name('inicio');
Route::get('/alumnos',[AlumnoController::class,'show'])->name('alumnos.show');
Route::get('/alumnos/details/{id}',[AlumnoController::class,'details'])->name('alumno.details');
Route::get('/alumnos/createform',[AlumnoController::class,'createform'])->name('alumno.createform');
Route::post('/alumnos/create',[AlumnoController::class,'create'])->name('alumnos.create');
Route::get('/alumnos/alumno_confirm_delete/{id}',[AlumnoController::class,'confirm'])->name('alumno.confirm_delete');
Route::get('/alumnos/alumnos_show/{id}',[AlumnoController::class,'delete'])->name('alumno.delete');
Route::get('/alumnos/alumno_editInform/{id}',[AlumnoController::class,'editform'])->name('alumno.editInform');
Route::put('/alumnos/alumno_edit/{alumno}',[AlumnoController::class,'edit'])->name('alumno.edit');

// -------------------------------profesor------------------------------------------------
Route::get('/profesores_show',[ProfesorController::class,'profesor_show'])->name('profesores.show');

// -------------------------------Cursos-------------------------------------------------
Route::get('/cursos_show',[CursoController::class,'cursos_show'])->name('cursos.show');
