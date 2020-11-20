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

Route::get('layout', function() {
    return view('welcome layout');
});

Route::get('helloworld', function() {
    return view('welcome layout');
});

Route::resource('/helloworld', 'Materias/controllerMaterias@index');

Route::get('/miprimerarray','Materias\controllerMaterias@getAlumnos')->name('alumnos');

Route::group(['prefix'=>'api'], function(){
    Route::apiResource('materias', 'Materias\MateriasController');
    Route::apiResource('alumno', 'controllerAlumno@store');
});

Route::get('formulario', function () {
    return view('formulario');
});

Route::post('/', 'PracticaController@store')->name('registro');