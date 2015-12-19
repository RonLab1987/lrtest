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

//Route::get('test', ['uses' =>  "TestController@index", 'as' => 'test.index'] );

$router->resource('test','TestController');
Route::get('test-top4', ['uses' =>  "TestController@topClient", 'as' => 'test.topclient'] );
