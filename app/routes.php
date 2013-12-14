<?php


Route::get('/',array('uses'=>'DashboardController@getIndex'));
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

/*------------------Search routes-----------------------------*/
	// Route::get('dashboard/search',array('uses'=>'SearchController@getSearch'));
Route::post('dashboard/agencystaff/{id}/edit',array('uses'=>'AgencyController@postEdit'));
Route::get('dashboard/agencystaff/{id}/edit',array('uses'=>'AgencyController@getEdit'));
 Route::get('dashboard/agencystaff',array('uses'=>'AgencyController@getIndex'));
   Route::post('dashboard/search',array('uses'=>'SearchController@postIndex'));
/*------------------End of Search routes-----------------------------*/

/*------------------Email alerts routes-----------------------------*/
	Route::get('/user/email/{id}/alert/delete',array('uses'=>'EmailController@getDeleteEmailAlert'));
	Route::post('/user/email/{id}/alert',array('uses'=>'EmailController@postEditEmailAlert'));
    Route::get('/user/email/{id}/alert',array('uses'=>'EmailController@getEditEmailAlert'));
	Route::get('user/email/alerts',array('uses'=>'EmailController@getIndex'));
	Route::get('user/email/alert/create',array('uses'=>'EmailController@getEmailAlert'));
	Route::post('user/email/alert/emailalert',array('uses'=>'EmailController@postEmailAlert'));
/*------------------End of email alert routes-----------------------*/

	Route::get('profile',array('uses'=>'AuthController@getProfile'));
    Route::get('dashboard/reports',array('uses'=>'ReportController@getReport'));
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


	Route::get('dashboard/listing/{id}',array('uses'=>'DashboardController@getListing'));
	Route::post('dashboard',array('uses'=>'DashboardController@postIndex'));
	Route::get('dashboard',array('uses'=>'DashboardController@getIndex'));