<?php

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\InitController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[InitController::class,'init'])->name('inicio');
Route::get('/alumnos',[AlumnoController::class,'show'])->name('alumnos.show');
Route::get('/alumnos/details/{id}',[AlumnoController::class,'details'])->name('alumno.details');
Route::get('/alumnos/createform',[AlumnoController::class,'createform'])->name('alumno.createform');
Route::get('/alumnos/create',[AlumnoController::class,'create'])->name('alumnos.create');
