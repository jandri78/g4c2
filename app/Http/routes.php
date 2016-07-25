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

//Route::get('/', function () {
  ///  return view('layout/master');
//});
Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);
Route::get('login', ['as' => 'login', 'uses' => 'HomeController@login']);
Route::get('campaigns', ['as' => 'campaigns', 'uses' => 'HomeController@campaigns']);
