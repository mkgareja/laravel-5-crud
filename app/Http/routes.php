<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/view','Crud@view');
Route::get('/','Crud@index');

Route::post('/save-Student','Crud@saveStudent');
Route::post('/update-Student','Crud@updateStudent');
Route::get('/delete/{id}','Crud@delete');
Route::get('/edit/{id}','Crud@edit');
		