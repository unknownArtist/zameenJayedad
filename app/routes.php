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
Route::get('dashboard/search',array('uses'=>'DashboardController@getSearch'));
Route::post('dashboard',array('uses'=>'DashboardController@postIndex'));
Route::get('dashboard',array('uses'=>'DashboardController@getIndex'));