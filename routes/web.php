<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnosController;

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
//Put actualizar
//get 

Route::get('/', function () {
    return view('welcome');
});
//Index
Route::get('/alumnos', [AlumnosController::class, 'index'])
    ->name('alumnos.index');

Route::get('/alumnos/create', [AlumnosController::class, 'create'])
    ->name('alumnos.create');

Route::post('/alumnos', [AlumnosController::class, 'store'])
    ->name('alumnos.store');

//Edit - Formulario de ediciòn
//localhost:8000/alumnos/5/edit
Route::get('/alumnos/{id}/edit', [AlumnosController::class, 'edit'])
    ->name('alumnos.edit');    

//actualizar editar
Route::put('/alumnos/{id}', [AlumnosController::class, 'update'])
    ->name('alumnos.update');  

//COnfirmacion para borrar
Route::get('/alumnos/{id}/delete', [AlumnosController::class, 'delete'])
    ->name('alumnos.delete'); 
//Eliminar
Route::delete('/alumnos/{id}', [AlumnosController::class, 'destroy'])
    ->name('alumnos.destroy'); 

