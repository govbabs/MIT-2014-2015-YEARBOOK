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

Route::group(['middleware' => 'web'], function () {

  Route::get('/{matricNo}', [
      'uses' => 'UserController@getUserByMatricNumber',
      'as' => 'userProfile',
      'middleware' => ['guest']
  ])->where('matricNo', '[0-9]+');
    Route::get('/register', [
        'uses' => 'Auth\AuthController@getRegister',
        'as' => 'auth.register',
        'middleware' => ['guest']
    ]);

    Route::post('/register', [
        'uses' => 'Auth\AuthController@postRegister',
        'middleware' => ['guest']
    ]);

    Route::get('/', [
        'uses' => 'Auth\AuthController@getLogin',
        'as' => 'auth.login',
        'middleware' => ['guest']
    ]);
});
/*Route::get('/', function () {
    return view('auth.login');
});

Route::get('/home', 'HomeController@index');*/
