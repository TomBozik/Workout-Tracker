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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', 'RoutineController@index')->name('home');

Route::resource('routines', 'RoutineController');
Route::resource('sets', 'SetController');
Route::get('/exercises', 'ExerciseController@index')->name('exercises.index');
Route::post('/routine-exercise/{routine}/{exercise}', 'PivotController@store')->name('pivot.store');



// Route::get('/routine', 'RoutineController@index')->name('routine.index'); //get list of routines
// Route::get('/routine/create', 'RoutineController@create')->name('routine.create'); //get creation page
// Route::post('/routine', 'RoutineController@store')->name('routine.store'); //post new routine
// Route::get('/routine/{routine}', 'RoutineController@show')->name('routine.show'); //get one routine
// Route::get('/routine/{routine}/edit', 'RoutineController@edit')->name('routine.edit'); //get update page
// Route::patch('/routine/{routine}', 'RoutineController@update')->name('routine.update'); //update routine
// Route::delete('/routine/{routine}', 'RoutineController@destroy')->name('routine.destroy'); //delete routine