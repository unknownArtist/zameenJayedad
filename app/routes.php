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
	Route::get('changepass',array('uses'=>'AuthController@getchangepass'));
	Route::post('newpassword',array('uses'=>'AuthController@postnewpassword'));
	Route::get('newpassword',array('uses'=>'AuthController@getnewpassword'));
	Route::get("user/resetCode",array('uses'=>'AuthController@postforget'));
	Route::get('forget',array('uses'=>'AuthController@getforget'));
	Route::post('forget',array('uses'=>'AuthController@postforget'));
	Route::get("user/activation",array('uses'=>'AuthController@getActivateUser'));
	Route::get('user/register',array('uses'=>'AuthController@getRegister'));
	Route::post('user/register',array('uses'=>'AuthController@postRegister'));
	Route::get('login',array('uses'=>'AuthController@getlogin'));
	Route::post('login',array('uses'=>'AuthController@postlogin'));
	

/*------------------End of Auth Routes------------------------------*/


	Route::get('dashboard/search',array('uses'=>'DashboardController@getSearch'));
	Route::post('dashboard',array('uses'=>'DashboardController@postIndex'));
	Route::get('dashboard',array('uses'=>'DashboardController@getIndex'));