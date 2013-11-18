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
/*------------------Email alerts routes-----------------------------*/
    Route::get('user/email/alert/{emailAlertId}/edit',array('uses'=>'EmailController@geteditemailalert'));
	Route::get('user/email/alerts',array('uses'=>'EmailController@getIndex'));
	Route::get('user/email/alert/create',array('uses'=>'AuthController@getEmailAlert'));
	Route::post('emailalert',array('uses'=>'AuthController@postemailalert'));
/*------------------End of email alert routes-----------------------*/
	
    Route::get('report',array('uses'=>'AuthController@getReport'));
    Route::post('addnewuser',array('uses'=>'AuthController@postAddNewUser'));
    Route::get('addnewuser',array('uses'=>'AuthController@getAddNewUser'));
    Route::post('profolio',array('uses'=>'AuthController@postProfolio'));
    Route::get('profolio',array('uses'=>'AuthController@getProfolio'));
	Route::post('changepass',array('uses'=>'AuthController@postChangePass'));
	Route::get('changepass',array('uses'=>'AuthController@getChangePass'));
	Route::post('newpassword',array('uses'=>'AuthController@postNewPassword'));
	Route::get('newpassword',array('uses'=>'AuthController@getNewPassword'));
	Route::get("user/resetCode",array('uses'=>'AuthController@postForget'));
	Route::get('forget',array('uses'=>'AuthController@getForget'));
	Route::post('forget',array('uses'=>'AuthController@postForget'));
	Route::get("user/activation",array('uses'=>'AuthController@getActivateUser'));
	Route::get('user/register',array('uses'=>'AuthController@getRegister'));
	Route::post('user/register',array('uses'=>'AuthController@postRegister'));
	Route::get('login',array('uses'=>'AuthController@getLogin'));
	Route::post('login',array('uses'=>'AuthController@postLogin'));
	

/*------------------End of Auth Routes------------------------------*/


	Route::get('dashboard/search',array('uses'=>'DashboardController@getSearch'));
	Route::post('dashboard',array('uses'=>'DashboardController@postIndex'));
	Route::get('dashboard',array('uses'=>'DashboardController@getIndex'));