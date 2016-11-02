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

    Route::get('/register/verify/{token}', [ 'uses' => 'Auth\AuthController@validateToken' ]);

    Route::get('/login', [
        'uses' => 'Auth\AuthController@getLogin',
        'as' => 'auth.login',
        'middleware' => ['guest']
    ]);

    Route::post('/login', [
        'uses' => 'Auth\AuthController@postLogin',
        'middleware' => ['guest']
    ]);

    Route::get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
    Route::post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
    Route::post('password/reset', 'Auth\PasswordController@reset');

    Route::post('/', [
        'uses' => 'Auth\AuthController@postLogin',
        'middleware' => ['auth']
    ]);


});

/*Route::get('/home', 'HomeController@index');*/
