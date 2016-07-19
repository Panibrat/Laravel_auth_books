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

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/auth/{provider}', 'Auth\AuthController@redirectToProvider');
Route::get('/auth/{provider}/callback', 'Auth\AuthController@handleProviderCallback');


//Route::get('/home', 'HomeController@index');

Route::get('/home', [
	'middleware' => 'auth',
	'uses' => 'HomeController@index',
	]);
// Route::get('/users', 'UserController@index');



// Route::put('books/{id}/users/{id_user}', 'BookController@returnbook');
 Route::resource('users', 'UserController');
 Route::resource('books', 'BookController');