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
	public function postIndex()
	{
		return "Post function";
	}

	public function getListing($id)
	
	{
		$record = DB::table('property')->where('id',$id)
                 	->get();


		return View::make('dashboard.single')

		->with('record', $record);
	}

}