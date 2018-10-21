<?php

use Illuminate\Http\Request;


Route::group([

//    'middleware' => 'api',
//    'prefix' => 'auth'

], function () {

    Route::post('login', 'AuthController@login');
    Route::post('register', 'AuthController@register');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');


    Route::post('articles', 'ArticleController@index');

});
