<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
/*------------------Authentication Routes---------------------------*/
	Route::get('user/register',array('uses'=>'AuthController@getRegister'));
	Route::post('user/register',array('uses'=>'AuthController@postRegister'));
	Route::get('user/login',array('uses'=>'AuthController@getlogin'));
	Route::post('user/login',array('uses'=>'AuthController@postlogin'));

/*------------------End of Auth Routes------------------------------*/


	Route::get('dashboard/search',array('uses'=>'DashboardController@getSearch'));
	Route::post('dashboard',array('uses'=>'DashboardController@postIndex'));
	Route::get('dashboard',array('uses'=>'DashboardController@getIndex'));