<?php


Route::get('/',function(){
	return Redirect::to('dashboard/guest');
	});
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
/*------------------Message Routes---------------------------*/
Route::get('dashboard/message/{id}/readmsg', array('uses'=>'MessageCentreController@getReadmessage'));
Route::get('dashboard/message/create', array('uses'=>'MessageCentreController@getmessagecreate'));
Route::get('dashboard/message/{id}/delete', array('uses'=>'MessageCentreController@getDelete'));
Route::post('dashboard/message/{id}/reply', array('uses'=>'MessageCentreController@postReply'));
Route::get('dashboard/message/{id}/{inbox_id}/reply', array('uses'=>'MessageCentreController@getReply'));
Route::post('dashboard/message/compose', array('uses'=>'MessageCentreController@postsendMessage'));
Route::get('dashboard/message/compose', array('uses'=>'MessageCentreController@getmessagecompose'));
Route::get('dashboard/messages', array('uses'=>'MessageCentreController@getIndex')); 
/*------------------AGENCIES routes-----------------------------*/
Route::post('dashboard/agencies/addnew',array('uses'=>'AgenciesController@postaddnew'));
Route::get('dashboard/agencies/addnew',array('uses'=>'AgenciesController@getaddnew'));
Route::get('dashboard/agencies/{id}/delete',array('uses'=>'AgenciesController@getDelete'));
Route::post('dashboard/agencies/{id}/edit',array('uses'=>'AgenciesController@postEdit'));
Route::get('dashboard/agencies/{id}/edit',array('uses'=>'AgenciesController@getEdit'));
Route::get('dashboard/agencies',array('uses'=>'AgenciesController@getIndex'));
/*------------------Search routes-----------------------------*/
	// Route::get('dashboard/search',array('uses'=>'SearchController@getSearch'));
Route::post('dashboard/agencies/view/addnewuser',array('uses'=>'AgencyController@postAddNewUser'));
Route::get('dashboard/agencies/view/addnewuser',array('uses'=>'AgencyController@getAddNewUser'));
Route::get('dashboard/agencystaff/{id}/delete',array('uses'=>'AgencyController@getDelete'));
Route::post('dashboard/agencystaff/{id}/edit',array('uses'=>'AgencyController@postEdit'));
Route::get('dashboard/agencystaff/{id}/edit',array('uses'=>'AgencyController@getEdit'));
Route::get('dashboard/agencies/view',array('uses'=>'AgencyController@getIndex'));
Route::post('dashboard/search',array('uses'=>'SearchController@postIndex'));
Route::post('dashboard/searchguest',array('uses'=>'SearchController@postGuestsearch'));

/*------------------End of Search routes-----------------------------*/

/*------------------Email alerts routes-----------------------------*/
	Route::get('/user/email/{id}/alert/delete',array('uses'=>'EmailController@getDeleteEmailAlert'));
	Route::post('/user/email/{id}/alert',array('uses'=>'EmailController@postEditEmailAlert'));
    Route::get('/user/email/{id}/alert',array('uses'=>'EmailController@getEditEmailAlert'));
	Route::get('user/email/alerts',array('uses'=>'EmailController@getIndex'));
	Route::get('user/email/alert/create',array('uses'=>'EmailController@getEmailAlert'));
	Route::post('user/email/alert/emailalert',array('uses'=>'EmailController@postEmailAlert'));
/*------------------End of email alert routes-----------------------*/
	Route::post('profile/update',array('uses'=>'AuthController@postProfile'));
	Route::get('profile',array('uses'=>'AuthController@getProfile'));
    Route::get('dashboard/reports',array('uses'=>'ReportController@getReport'));
  	Route::get('profolio/listing/{id}/delete',array('uses'=>'AuthController@getdeletelisting'));
    Route::post('profolio/listing/{id}/edit',array('uses'=>'AuthController@posteditlisting'));
    Route::get('profolio/listing/{id}/edit',array('uses'=>'AuthController@geteditlisting'));
    Route::get('profolio/listing',array('uses'=>'AuthController@getlisting'));
    Route::post('profolio',array('uses'=>'AuthController@postProfolio'));
    Route::get('profolio',array('uses'=>'AuthController@getProfolio'));
	Route::post('changepass',array('uses'=>'AuthController@postChangePass'));
	Route::get('changepass',array('uses'=>'AuthController@getChangePass'));
	Route::post('newpassword',array('uses'=>'AuthController@postNewPassword'));
	Route::get('newpassword/resetCode',array('uses'=>'AuthController@getNewPassword'));
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
	Route::get('dashboard/listing/{id}',array('uses'=>'DashboardController@getListingguest'));
	Route::post('dashboard',array('uses'=>'DashboardController@postIndex'));
	Route::get('dashboard',array('uses'=>'DashboardController@getIndex'));
	Route::get('dashboard/guest',array('uses'=>'DashboardController@getGuest'));
	Route::get('user/logout',function(){

		Sentry::logout();
		return Redirect::to('dashboard/guest');
	});