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
    return view('auth/login');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/registrar','LineasController@addevent');
Route::get('/actividades','ActivitiesController@showActivities');
Route::get('/miactividad/{id}','eventosController@updateEvent');
Route::POST('/completar/actividades','eventosController@update');
