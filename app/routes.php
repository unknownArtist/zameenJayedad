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
/*---------------------admin-------------------------*/
Route::get('dashboard/admin/main/{id}/deactivation',array('uses'=>'AdminController@getdeactivation'));
Route::get('dashboard/admin/main/{id}/activation',array('uses'=>'AdminController@getactivation'));
Route::get('dashboard/admin/main',array('uses'=>'AdminController@getMain'));
Route::post('dashboard/admin',array('uses'=>'AdminController@PostAdmin'));
Route::get('dashboard/admin',array('uses'=>'AdminController@getIndex'));
/*------------------------------------------------*/
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
Route::post('dashboard/agencystaff/{id}/edit/{staf_id}',array('uses'=>'AgencyController@postEdit'));
Route::get('dashboard/agencystaff/{id}/edit',array('uses'=>'AgencyController@getEdit'));
Route::get('dashboard/agencies/view/{id}',array('uses'=>'AgencyController@getIndex'));
Route::post('dashboard/search/map',array('uses'=>'SearchController@Postmap'));
Route::post('dashboard/searchmap',array('uses'=>'SearchController@Postsearchmap'));
Route::post('dashboard/search',array('uses'=>'SearchController@postIndex'));
Route::post('dashboard/searchguest',array('uses'=>'SearchController@postGuestsearch'));
Route::get('dashboard/BahriatownPhase1',array('uses'=>'SearchController@getBahriatownPhase1'));
Route::get('dashboard/BahriatownPhase2',array('uses'=>'SearchController@getBahriatownPhase2'));
Route::get('dashboard/BahriatownPhase3',array('uses'=>'SearchController@getBahriatownPhase3'));
Route::get('dashboard/BahriatownPhase4',array('uses'=>'SearchController@getBahriatownPhase4'));
Route::get('dashboard/BahriatownPhase5',array('uses'=>'SearchController@getBahriatownPhase5'));
Route::get('dashboard/BahriatownPhase6',array('uses'=>'SearchController@getBahriatownPhase6'));
Route::get('dashboard/BahriatownPhase7',array('uses'=>'SearchController@getBahriatownPhase7'));
Route::get('dashboard/BahriatownPhase8',array('uses'=>'SearchController@getBahriatownPhase8'));
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
	Route::get('viewprofile',array('uses'=>'AuthController@getViewProfile'));
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
	Route::get('dashboard/listing/guest/{id}',array('uses'=>'DashboardController@getListingguest'));
	Route::post('dashboard',array('uses'=>'DashboardController@postIndex'));
	Route::get('dashboard',array('uses'=>'DashboardController@getIndex'));
	Route::get('dashboard/guest',array('uses'=>'DashboardController@getGuest'));
	Route::get('dashboard/team',array('uses'=>'DashboardController@getTeam'));
	Route::get('dashboard/ourteam',array('uses'=>'DashboardController@getOurteam'));
	Route::get('dashboard/bahriaupdates',array('uses'=>'DashboardController@getBahriaupdates'));
	Route::get('dashboard/sellinghome',array('uses'=>'DashboardController@getSellinghome'));
	Route::get('dashboard/faq',array('uses'=>'DashboardController@getFaq'));
	Route::get('dashboard/featuredlistings',array('uses'=>'DashboardController@getFeaturedlistings'));
	Route::get('dashboard/featuredlisting',array('uses'=>'DashboardController@getFeaturedlisting'));
	Route::get('dashboard/buyinghome',array('uses'=>'DashboardController@getBuyinghome'));
	Route::get('dashboard/projectupdates',array('uses'=>'DashboardController@getProjectupdates'));
	Route::post('dashboard/buildhouse',array('uses'=>'DashboardController@postBuildhouse'));
	Route::get('dashboard/buildhouse',array('uses'=>'DashboardController@getBuildhouse'));
	Route::post('dashboard/designing',array('uses'=>'DashboardController@postDesigning'));
	Route::get('dashboard/designing',array('uses'=>'DashboardController@getDesigning'));
	Route::get('dashboard/customerservices',array('uses'=>'DashboardController@getCustomerservices'));
	Route::get('dashboard/contactus',array('uses'=>'DashboardController@getContactus'));
	Route::post('dashboard/propertyfinder',array('uses'=>'DashboardController@postPropertyfinder'));
	Route::get('dashboard/propertyfinder',array('uses'=>'DashboardController@getPropertyfinder'));
	Route::post('dashboard/recentsale',array('uses'=>'DashboardController@postRecentsale'));
	Route::get('dashboard/recentsale',array('uses'=>'DashboardController@getRecentsale'));
	Route::post('dashboard/homefinder',array('uses'=>'DashboardController@postHomefinder'));
	Route::get('dashboard/homefinder',array('uses'=>'DashboardController@getHomefinder'));
	Route::post('dashboard/homeevaluation',array('uses'=>'DashboardController@postHomeevaluation'));
	Route::get('dashboard/homeevaluation',array('uses'=>'DashboardController@getHomeevaluation'));
	Route::get('dashboard/careers',array('uses'=>'DashboardController@getCareers'));
	Route::get('dashboard/newdevelopments',array('uses'=>'DashboardController@getNewdevelopments'));
	Route::get('dashboard/chooseus',array('uses'=>'DashboardController@getChooseus'));
	Route::get('dashboard/alert/test',array('uses'=>'EmailController@getTestAlert'));
	Route::get('dashboard/alert/weekly',array('uses'=>'EmailController@getWeekly'));
	Route::get('dashboard/alert/monthly',array('uses'=>'EmailController@getMonthly'));
	Route::get('dashboard/alert/asap',array('uses'=>'EmailController@getAsap'));
	Route::get('user/logout',function(){

		Sentry::logout();
		return Redirect::to('dashboard/guest');
	});
	Route::get('admin/logout',function(){

		Sentry::logout();
		return Redirect::to('dashboard/guest');
	});