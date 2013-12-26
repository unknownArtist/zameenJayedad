<?php

class DashboardController extends BaseController {



	public function getIndex()
	{

		$users = DB::table('property')
                    ->orderBy('id', 'desc')
                    ->take(10)
          			->get();
		
		return View::make('dashboard.index')
		->with('users', $users);
				   
	}
	public function getGuest()
	{
		$users = DB::table('property')
                    ->orderBy('id', 'desc')
                    ->take(10)
          			->get();
		return View::make('dashboard.guest')
		->with('users', $users);	
		
	}
	public function postIndex()
	{
		return "Post function";
	}

	public function getListing($id)
	
	{
		$record = DB::table('property')->where('id',$id)
                 	->get();
        PropertyHits::insert(array(
        	'property_id'	=> $id,
        	'hits_on'		=> date('Y-m-d')
        	));

		return View::make('dashboard.single')

		->with('record', $record);
	}
	
	public function getListingguest($id)
	
	{
		$record = DB::table('property')->where('id',$id)
                 	->get();
        PropertyHits::insert(array(
        	'property_id'	=> $id,
        	'hits_on'		=> date('Y-m-d')
        	));

		return View::make('dashboard.singleguest')

		->with('record', $record);
	}

}