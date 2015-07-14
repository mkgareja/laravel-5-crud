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
Route::get('/edit/{id}','Crud@edit');
//test hello word 
Route::any('/test/{id}/{name}',function(){
	return 'hello to you id and name';
})->where(['id' => '[0-9]+','name'=>'[a-z]+']);

Route::any('/test/{id}',function(){
	return 'hello to you id';
})->where(['id' => '[0-9]+']);

Route::any('/test/{name}',function(){
	return 'hellow to you any name';
})->where(['name'=>'[a-z]+']);

Route::get('/helloword',function(){
	return 'Hello World';
});

Route::any('/test/{name}/{id}',function(){
	return 'hello to you id and name';
})->where(['id' => '[0-9]+','name'=>'[a-z]+']);

Route::any('/test/{name}/{id}',function($id,$name){
	return 'hello to you id and name<br> Your user :'.$id.'<br> Your name is:'.$name;
})->where(['id' => '[0-9]+','name'=>'[a-z]+']);

Route::any('/test/{name}/testpage/{id}',function($id,$name){
	return 'hello to you id and name<br> Your user :'.$id.'<br> Your name is:'.$name;
})->where(['id' => '[0-9]+','name'=>'[a-z]+']);

Route::get('user/{name?}', function ($name = null) {
    return $name;
});

Route::get('/abort','Crud@abort');
Route::get('/jsonresponce',function(){
	return redirect()->action('HomeController@index');
});
Route::get('/jsonresponce',function(){
	return redirect()->action('Crud@index');
});
Route::get('/jsonresponce',function(){
	return view('login');
});