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

Route::get('/','BaseController@viewJudul');
Route::get('/crud','Crudcontroller@tampil');
Route::post('/submitdata','Crudcontroller@tambahdata');
Route::get('/read','Crudcontroller@lihatdata');
Route::get('/erase/{id}','Crudcontroller@erase');
Route::get('/edit/{id}','Crudcontroller@edit');
Route::post('/dataprocess','Crudcontroller@editprocess');
Route::get('/toni2','BaseController@toni');
 Route::get('package', function(){
      echo Form::open();
      echo Form::close();
  });
  
Route::get('/cobacoba', function () {
return view('coba', ['name' => 'Holy', 'age' => 19]);
});

Route::get('coba3/{id}', 'BaseController@profile');

Route::get('tes', function () {
	return 'Hello World';
});

Route::get('tes/{param}', function ($param) {
return 'Param : ' . $param;
});

Route::group(['middleware' => 'auth'], function () {
Route::get('tes2', function () {
	// Uses Auth Middleware
	});
	
Route::get('/users', function () {
	// Uses show users
	});
});
Route::get('user/profile', ['as' => 'profile', function () {
	
// Generating URLs...
$url = route('profile');
// Generating Redirects...
return redirect()->route('profile');
//
}]);

Route::resource('article', 'ArticleController');
// Route::resource('users', 'UsersController');//
Route::resource('pegawai', 'PegawaiController');