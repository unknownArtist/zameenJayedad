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
Route::get('dashboard/admin/listing',array('uses'=>'AdminController@getlisting'));
Route::get('dashboard/admin/alljobs/{id}/delete',array('uses'=>'AdminController@getdeletejobs'));
Route::post('dashboard/admin/alljobs/{id}/edit',array('uses'=>'AdminController@posteditjobs'));
Route::get('dashboard/admin/alljobs/{id}/edit',array('uses'=>'AdminController@geteditjobs'));
Route::get('dashboard/admin/alljobs',array('uses'=>'AdminController@getAlljobs'));
Route::post('dashboard/admin/jobs',array('uses'=>'AdminController@postJobs'));
Route::get('dashboard/admin/jobs',array('uses'=>'AdminController@getJobs'));
Route::get('dashboard/admin/latestnews/{id}/delete',array('uses'=>'AdminController@getdelete'));
Route::post('dashboard/admin/latestnews/{id}/edit',array('uses'=>'AdminController@postedit'));
Route::get('dashboard/admin/latestnews/{id}/edit',array('uses'=>'AdminController@getedit'));
Route::get('dashboard/admin/latestnews',array('uses'=>'AdminController@getlatestnews'));
Route::post('dashboard/admin/news',array('uses'=>'AdminController@postNews'));
Route::get('dashboard/admin/news',array('uses'=>'AdminController@getNews'));
Route::get('dashboard/admin/main/{id}/deactivation',array('uses'=>'AdminController@getdeactivation'));
Route::get('dashboard/admin/main/{id}/activation',array('uses'=>'AdminController@getactivation'));
Route::get('dashboard/admin/main',array('uses'=>'AdminController@getMain'));
Route::post('dashboard/admin',array('uses'=>'AdminController@PostAdmin'));
Route::get('dashboard/admin',array('uses'=>'AdminController@getIndex'));
/*------------------------------------------------*/
/*------------------Message Routes---------------------------*/
Route::get('dashboard/message/{id}/readmsg', array('before'=>'auth','uses'=>'MessageCentreController@getReadmessage'));
Route::get('dashboard/message/create', array('before'=>'auth','uses'=>'MessageCentreController@getmessagecreate'));
Route::get('dashboard/message/{id}/delete', array('before'=>'auth','uses'=>'MessageCentreController@getDelete'));
Route::post('dashboard/message/{id}/reply', array('before'=>'auth','uses'=>'MessageCentreController@postReply'));
Route::get('dashboard/message/{id}/{inbox_id}/reply', array('before'=>'auth','uses'=>'MessageCentreController@getReply'));
Route::post('dashboard/message/compose', array('before'=>'auth','uses'=>'MessageCentreController@postsendMessage'));
Route::get('dashboard/message/compose', array('before'=>'auth','uses'=>'MessageCentreController@getmessagecompose'));
Route::get('dashboard/messages', array('before'=>'auth','uses'=>'MessageCentreController@getIndex')); 

/*------------------AGENCIES routes-----------------------------*/
Route::post('dashboard/agencies/addnew',array('before'=>'auth','uses'=>'AgenciesController@postaddnew'));
Route::get('dashboard/agencies/addnew',array('before'=>'auth','uses'=>'AgenciesController@getaddnew'));
Route::get('dashboard/agencies/{id}/delete',array('before'=>'auth','uses'=>'AgenciesController@getDelete'));
Route::post('dashboard/agencies/{id}/edit',array('before'=>'auth','uses'=>'AgenciesController@postEdit'));
Route::get('dashboard/agencies/{id}/edit',array('before'=>'auth','uses'=>'AgenciesController@getEdit'));
Route::get('dashboard/agencies',array('before'=>'auth','uses'=>'AgenciesController@getIndex'));
/*------------------Search routes-----------------------------*/
	// Route::get('dashboard/search',array('uses'=>'SearchController@getSearch'));
Route::post('dashboard/agencies/view/addnewuser',array('before'=>'auth','uses'=>'AgencyController@postAddNewUser'));
Route::get('dashboard/agencies/view/addnewuser',array('before'=>'auth','uses'=>'AgencyController@getAddNewUser'));
Route::get('dashboard/agencystaff/{id}/delete',array('before'=>'auth','uses'=>'AgencyController@getDelete'));
Route::post('dashboard/agencystaff/{id}/edit/{staf_id}',array('before'=>'auth','uses'=>'AgencyController@postEdit'));
Route::get('dashboard/agencystaff/{id}/edit',array('before'=>'auth','uses'=>'AgencyController@getEdit'));
Route::get('dashboard/agencies/view/{id}',array('before'=>'auth','uses'=>'AgencyController@getIndex'));
Route::post('dashboard/search/map',array('uses'=>'SearchController@Postmap'));
Route::post('dashboard/searchmap',array('before'=>'auth','uses'=>'SearchController@Postsearchmap'));
Route::post('dashboard/search',array('before'=>'auth','uses'=>'SearchController@postIndex'));
Route::post('dashboard/searchguest',array('uses'=>'SearchController@postGuestsearch'));
Route::get('dashboard/BahriatownPhase1',array('uses'=>'SearchController@getBahriatownPhase1'));
Route::get('dashboard/BahriatownPhase2',array('uses'=>'SearchController@getBahriatownPhase2'));
Route::get('dashboard/BahriatownPhase3',array('uses'=>'SearchController@getBahriatownPhase3'));
Route::get('dashboard/BahriatownPhase4',array('uses'=>'SearchController@getBahriatownPhase4'));
Route::get('dashboard/BahriatownPhase5',array('uses'=>'SearchController@getBahriatownPhase5'));
Route::get('dashboard/BahriatownPhase6',array('uses'=>'SearchController@getBahriatownPhase6'));
Route::get('dashboard/BahriatownPhase7',array('uses'=>'SearchController@getBahriatownPhase7'));

Route::get('dashboard/BahriatownPhase8',array('uses'=>'SearchController@getBahriatownPhase8'));
Route::get('dashboard/Sector-A',array('uses'=>'SearchController@getSectorA'));
Route::get('dashboard/Sector-B',array('uses'=>'SearchController@getSectorB'));
Route::get('dashboard/Sector-C',array('uses'=>'SearchController@getSectorC'));
Route::get('dashboard/Sector-D',array('uses'=>'SearchController@getSectorD'));
Route::get('dashboard/Sector-E',array('uses'=>'SearchController@getSectorE'));
Route::get('dashboard/Sector-F',array('uses'=>'SearchController@getSectorF'));
Route::get('dashboard/Sector-G',array('uses'=>'SearchController@getSectorG'));
Route::get('dashboard/Sector-H',array('uses'=>'SearchController@getSectorH'));
Route::get('dashboard/Sector-I',array('uses'=>'SearchController@getSectorI'));
Route::get('dashboard/Sector-J',array('uses'=>'SearchController@getSectorJ'));
Route::get('dashboard/Sector-K',array('uses'=>'SearchController@getSectorK'));
Route::get('dashboard/Sector-L',array('uses'=>'SearchController@getSectorL'));
Route::get('dashboard/Sector-M',array('uses'=>'SearchController@getSectorM'));
Route::get('dashboard/Sector-N',array('uses'=>'SearchController@getSectorN'));
Route::get('dashboard/Sector-P',array('uses'=>'SearchController@getSectorP'));
Route::get('dashboard/Block-A',array('uses'=>'SearchController@getBlockA'));
Route::get('dashboard/Block-B',array('uses'=>'SearchController@getBlockB'));
Route::get('dashboard/Block-C',array('uses'=>'SearchController@getBlockC'));
Route::get('dashboard/Block-D',array('uses'=>'SearchController@getBlockD'));
Route::get('dashboard/Block-E',array('uses'=>'SearchController@getBlockE'));
Route::get('dashboard/Block-F',array('uses'=>'SearchController@getBlockF'));
Route::get('dashboard/Block-G',array('uses'=>'SearchController@getBlockG'));
Route::get('dashboard/Block-H',array('uses'=>'SearchController@getBlockH'));
Route::get('dashboard/Block-I',array('uses'=>'SearchController@getBlockI'));
Route::get('dashboard/Block-J',array('uses'=>'SearchController@getBlockJ'));
Route::get('dashboard/Block-K',array('uses'=>'SearchController@getBlockK'));
Route::get('dashboard/Block-L',array('uses'=>'SearchController@getBlockL'));
Route::get('dashboard/Block-M',array('uses'=>'SearchController@getBlockM'));
Route::get('dashboard/Block-N',array('uses'=>'SearchController@getBlockN'));
Route::get('dashboard/Block-O',array('uses'=>'SearchController@getBlockO'));
Route::get('dashboard/Block-P',array('uses'=>'SearchController@getBlockP'));
Route::get('dashboard/Phase 8 Safari Valley',array('uses'=>'SearchController@getPhase8Safari'));
Route::get('dashboard/Abu Bakr Block',array('uses'=>'SearchController@getAbuBakrBlock'));
Route::get('dashboard/Umer Farooq Block',array('uses'=>'SearchController@getUmerFarooqBlock'));
Route::get('dashboard/Usman-e-Ghani Block',array('uses'=>'SearchController@getUsmanGhaniBlock'));
Route::get('dashboard/Ali Block',array('uses'=>'SearchController@getAliBlock'));
Route::get('dashboard/Rafi Block',array('uses'=>'SearchController@getRafiBlock'));
Route::get('dashboard/Khalid Block',array('uses'=>'SearchController@getKhalidBlock'));
Route::get('dashboard/Bahria Overseas Enclave Islamabad',array('uses'=>'SearchController@getBahriaOverseas'));
Route::get('dashboard/DHA 1',array('uses'=>'SearchController@getDHA1'));
Route::get('dashboard/DHA 2',array('uses'=>'SearchController@getDHA2'));
/*------------------End of Search routes-----------------------------*/
/***....................guest.........................................********/
Route::get('dashboard/BahriatownPhase1/guest',array('uses'=>'SearchController@getBahriatownPhase1guest'));
Route::get('dashboard/BahriatownPhase2/guest',array('uses'=>'SearchController@getBahriatownPhase2guest'));
Route::get('dashboard/BahriatownPhase3/guest',array('uses'=>'SearchController@getBahriatownPhase3guest'));
Route::get('dashboard/BahriatownPhase4/guest',array('uses'=>'SearchController@getBahriatownPhase4guest'));
Route::get('dashboard/BahriatownPhase5/guest',array('uses'=>'SearchController@getBahriatownPhase5guest'));
Route::get('dashboard/BahriatownPhase6/guest',array('uses'=>'SearchController@getBahriatownPhase6guest'));
Route::get('dashboard/BahriatownPhase7/guest',array('uses'=>'SearchController@getBahriatownPhase7guest'));
Route::get('dashboard/BahriatownPhase8/guest',array('uses'=>'SearchController@getBahriatownPhase8guest'));
Route::get('dashboard/Sector-A/guest',array('uses'=>'SearchController@getSectorAguest'));
Route::get('dashboard/Sector-B/guest',array('uses'=>'SearchController@getSectorBguest'));
Route::get('dashboard/Sector-C/guest',array('uses'=>'SearchController@getSectorCguest'));
Route::get('dashboard/Sector-D/guest',array('uses'=>'SearchController@getSectorDguest'));
Route::get('dashboard/Sector-E/guest',array('uses'=>'SearchController@getSectorEguest'));
Route::get('dashboard/Sector-F/guest',array('uses'=>'SearchController@getSectorFguest'));
Route::get('dashboard/Sector-G/guest',array('uses'=>'SearchController@getSectorGguest'));
Route::get('dashboard/Sector-H/guest',array('uses'=>'SearchController@getSectorHguest'));
Route::get('dashboard/Sector-I/guest',array('uses'=>'SearchController@getSectorIguest'));
Route::get('dashboard/Sector-J/guest',array('uses'=>'SearchController@getSectorJguest'));
Route::get('dashboard/Sector-K/guest',array('uses'=>'SearchController@getSectorKguest'));
Route::get('dashboard/Sector-L/guest',array('uses'=>'SearchController@getSectorLguest'));
Route::get('dashboard/Sector-M/guest',array('uses'=>'SearchController@getSectorMguest'));
Route::get('dashboard/Sector-N/guest',array('uses'=>'SearchController@getSectorNguest'));
Route::get('dashboard/Sector-P/guest',array('uses'=>'SearchController@getSectorPguest'));

Route::get('dashboard/Block-A/guest',array('uses'=>'SearchController@getBlockAguest'));
Route::get('dashboard/Block-B/guest',array('uses'=>'SearchController@getBlockBguest'));
Route::get('dashboard/Block-C/guest',array('uses'=>'SearchController@getBlockCguest'));
Route::get('dashboard/Block-D/guest',array('uses'=>'SearchController@getBlockDguest'));
Route::get('dashboard/Block-E/guest',array('uses'=>'SearchController@getBlockEguest'));
Route::get('dashboard/Block-F/guest',array('uses'=>'SearchController@getBlockFguest'));
Route::get('dashboard/Block-G/guest',array('uses'=>'SearchController@getBlockGguest'));
Route::get('dashboard/Block-H/guest',array('uses'=>'SearchController@getBlockHguest'));
Route::get('dashboard/Block-I/guest',array('uses'=>'SearchController@getBlockIguest'));
Route::get('dashboard/Block-J/guest',array('uses'=>'SearchController@getBlockJguest'));
Route::get('dashboard/Block-K/guest',array('uses'=>'SearchController@getBlockKguest'));
Route::get('dashboard/Block-L/guest',array('uses'=>'SearchController@getBlockLguest'));
Route::get('dashboard/Block-M/guest',array('uses'=>'SearchController@getBlockMguest'));
Route::get('dashboard/Block-N/guest',array('uses'=>'SearchController@getBlockNguest'));
Route::get('dashboard/Block-O/guest',array('uses'=>'SearchController@getBlockOguest'));
Route::get('dashboard/Block-P/guest',array('uses'=>'SearchController@getBlockPguest'));

Route::get('dashboard/Phase 8 Safari Valley/guest',array('uses'=>'SearchController@getPhase8Safariguest'));
Route::get('dashboard/Abu Bakr Block/guest',array('uses'=>'SearchController@getAbuBakrBlockguest'));
Route::get('dashboard/Umer Farooq Block/guest',array('uses'=>'SearchController@getUmerFarooqBlockguest'));
Route::get('dashboard/Usman-e-Ghani Block/guest',array('uses'=>'SearchController@getUsmanGhaniBlockguest'));
Route::get('dashboard/Ali Block/guest',array('uses'=>'SearchController@getAliBlockguest'));

Route::get('dashboard/Rafi Block/guest',array('uses'=>'SearchController@getRafiBlockguest'));
Route::get('dashboard/Khalid Block/guest',array('uses'=>'SearchController@getKhalidBlockguest'));
Route::get('dashboard/Bahria Overseas Enclave Islamabad/guest',array('uses'=>'SearchController@getBahriaOverseasguest'));
Route::get('dashboard/DHA 1/guest',array('uses'=>'SearchController@getDHA1guest'));
Route::get('dashboard/DHA 2/guest',array('uses'=>'SearchController@getDHA2guest'));

/*------------------Email alerts routes-----------------------------*/
	Route::get('/user/email/{id}/alert/delete',array('before'=>'auth','uses'=>'EmailController@getDeleteEmailAlert'));
	Route::post('/user/email/{id}/alert',array('before'=>'auth','uses'=>'EmailController@postEditEmailAlert'));
    Route::get('/user/email/{id}/alert',array('before'=>'auth','uses'=>'EmailController@getEditEmailAlert'));
	Route::get('user/email/alerts',array('before'=>'auth','uses'=>'EmailController@getIndex'));
	Route::get('user/email/alert/create',array('before'=>'auth','uses'=>'EmailController@getEmailAlert'));
	Route::post('user/email/alert/emailalert',array('before'=>'auth','uses'=>'EmailController@postEmailAlert'));
/*------------------End of email alert routes-----------------------*/
	Route::post('profile/update',array('before'=>'auth','uses'=>'AuthController@postProfile'));
	Route::get('profile',array('before'=>'auth','uses'=>'AuthController@getProfile'));
	Route::get('viewprofile',array('uses'=>'AuthController@getViewProfile'));
    Route::get('dashboard/reports',array('before'=>'auth','uses'=>'ReportController@getReport'));
  	Route::get('profolio/listing/{id}/delete',array('before'=>'auth','uses'=>'AuthController@getdeletelisting'));
    Route::post('profolio/listing/{id}/edit',array('before'=>'auth','uses'=>'AuthController@posteditlisting'));
    Route::get('profolio/listing/{id}/edit',array('before'=>'auth','uses'=>'AuthController@geteditlisting'));
    Route::get('profolio/listing',array('before'=>'auth','uses'=>'AuthController@getlisting'));
    Route::post('profolio',array('before'=>'auth','uses'=>'AuthController@postProfolio'));
    Route::get('profolio',array('before'=>'auth','uses'=>'AuthController@getProfolio'));
	Route::post('changepass',array('before'=>'auth','uses'=>'AuthController@postChangePass'));
	Route::get('changepass',array('before'=>'auth','uses'=>'AuthController@getChangePass'));
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
	Route::get('dashboard/latestnews/{id}',array('uses'=>'DashboardController@getLatestnews'));
	Route::post('dashboard/sendmessage/compose',array('before'=>'auth','uses'=>'AuthController@postSendmessage'));
	Route::get('dashboard/sendmessage/{id}',array('before'=>'auth','uses'=>'AuthController@getSendmessage'));
	Route::get('dashboard/alluser/{id}',array('before'=>'auth','uses'=>'AuthController@getAlluserprofile'));
	Route::get('dashboard/alluser',array('before'=>'auth', 'uses'=>'AuthController@getAlluser'));
	Route::get('dashboard/listing/{id}',array('before'=>'auth','uses'=>'DashboardController@getListing'));
	Route::get('dashboard/listing/guest/{id}',array('uses'=>'DashboardController@getListingguest'));
	Route::post('dashboard',array('before'=>'auth','uses'=>'DashboardController@postIndex'));
	Route::get('dashboard',array('before'=>'auth','uses'=>'DashboardController@getIndex'));
	Route::get('dashboard/guest',array('uses'=>'DashboardController@getGuest'));
	Route::get('dashboard/team',array('uses'=>'DashboardController@getTeam'));
	Route::get('dashboard/ourteam',array('before'=>'auth','uses'=>'DashboardController@getOurteam'));
	Route::get('dashboard/bahriaupdates',array('uses'=>'DashboardController@getBahriaupdates'));
	Route::get('dashboard/sellinghome',array('uses'=>'DashboardController@getSellinghome'));
	Route::get('dashboard/faq',array('uses'=>'DashboardController@getFaq'));
	Route::get('dashboard/featuredlistings',array('uses'=>'DashboardController@getFeaturedlistings'));
	Route::get('dashboard/featuredlisting',array('before'=>'auth','uses'=>'DashboardController@getFeaturedlisting'));
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
	Route::get('dashboard/careers/{id}',array('uses'=>'DashboardController@getCareers'));
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