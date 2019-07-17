<?php

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
    return view('welcome');
});


Route::get('estudiante/create', 'EstudianteController@create')->name('estudiante.create');

Route::get('materia/create', 'MateriaController@create')->name('materia.create');

Route::get('estudiante_materias/{estudiante}', 'EstudianteMateriasController@show')->name('estudiante_materias.show');