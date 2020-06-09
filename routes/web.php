<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/', 'RoutineController@index')->name('home');

Route::resource('routines', 'RoutineController')->only(['index', 'edit', 'create', 'store', 'update', 'destroy']);

Route::resource('sets', 'SetController')->only(['index', 'edit', 'store', 'update', 'destroy']);
Route::get('/sets/create/{exerciseId}', 'SetController@create')->name('sets.create');

Route::get('/exercises', 'ExerciseController@index')->name('exercises.index');
Route::get('/exercises/create', 'ExerciseController@create')->name('exercises.create');
Route::post('/exercises', 'ExerciseController@store')->name('exercises.store');
Route::delete('/exercises/{exercise}', 'ExerciseController@destroy')->name('exercises.destroy');

// Route::get('/routine', 'RoutineController@index')->name('routine.index'); //get list of routines
// Route::get('/routine/create', 'RoutineController@create')->name('routine.create'); //get creation page
// Route::post('/routine', 'RoutineController@store')->name('routine.store'); //post new routine
// Route::get('/routine/{routine}', 'RoutineController@show')->name('routine.show'); //get one routine
// Route::get('/routine/{routine}/edit', 'RoutineController@edit')->name('routine.edit'); //get update page
// Route::patch('/routine/{routine}', 'RoutineController@update')->name('routine.update'); //update routine
// Route::delete('/routine/{routine}', 'RoutineController@destroy')->name('routine.destroy'); //delete routine