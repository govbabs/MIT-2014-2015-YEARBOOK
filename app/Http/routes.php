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

    /**
     *
     * Uncle matthew routes(Administrator Routes)
     */
        Route::get('/admin', [
            'uses' => 'AdminController@index',
            'as' => 'adminProfile'
        ])->where('matricNo', '[0-9]+');


        Route::get('/students', [
            'uses' => 'AdminController@getAllStudents',
            'as' => 'admin.students'
        ])->where('matricNo', '[0-9]+');
    /**
     * End of Administrator route
     */

      Route::get('/{matricNo}', [
          'uses' => 'UserController@getUserByMatricNumber',
          'as' => 'userProfile',
          'middleware' => ['guest']
      ])->where('matricNo', '[0-9]+');

      Route::get('/edit/{id}', [
          'uses' => 'UserController@edit',
          'as' => 'student.edit'
      ]);

    /**
     * iamraphson's route (Don't touch..thanks)
     */
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

    /**
     * End of iamraphson's routes
     */
});
