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
	
	public function getTeam()
	{
		return View::make('dashboard.team');	
	}
	
	public function getOurteam()
	{
		return View::make('dashboard.ourteam');	
	}
	
	public function getBahriaupdates()
	{
		return View::make('dashboard.bahriaupdates');	
	}
	
	public function getFaq()
	{
		return View::make('dashboard.faq');	
	}
	
	public function getCareers()
	{
		return View::make('dashboard.careers');	
	}
	
	public function getHomeevaluation()
	{
		return View::make('dashboard.homeevaluation');	
	}
	
	public function getHomefinder()
	{
		return View::make('dashboard.homefinder');	
	}
	
	public function getRecentsale()
	{
		return View::make('dashboard.recentsale');	
	}
	
	public function getPropertyfinder()
	{
		return View::make('dashboard.propertyfinder');	
	}
	
	public function getChooseus()
	{
		return View::make('dashboard.chooseus');	
	}
	
	public function getContactus()
	{
		return View::make('dashboard.contactus');	
	}
	
	public function getCustomerservices()
	{
		return View::make('dashboard.customerservices');	
	}
	
	public function getDesigning()
	{
		return View::make('dashboard.designing');	
	}
	
	public function getBuildhouse()
	{
		return View::make('dashboard.buildhouse');	
	}
	
	public function getProjectupdates()
	{
		return View::make('dashboard.projectupdates');	
	}
	
	public function getBuyinghome()
	{
		return View::make('dashboard.buyinghome');	
	}
	
	public function getSellinghome()
	{
		return View::make('dashboard.sellinghome');	
	}
	
	public function getFeaturedlistings()
	{
		$users = DB::table('property')
                    ->orderBy('id', 'desc')
                    ->take(10)
          			->get();
		return View::make('dashboard.featuredlistings')
		->with('users', $users);
	}
	
	public function getFeaturedlisting()
	{
		$users = DB::table('property')
                    ->orderBy('id', 'desc')
                    ->take(10)
          			->get();
		return View::make('dashboard.featuredlisting')
		->with('users', $users);
	}
	
	public function getNewdevelopments()
	{
		return View::make('dashboard.newdevelopments');	
	}
	

}