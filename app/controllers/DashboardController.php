<?php

class DashboardController extends BaseController {



	public function getIndex()
	{
		
		$users = DB::table('property')
                    ->orderBy('id', 'desc')
          			->get();
		
		return View::make('dashboard.index')
		->with('users', $users);
				   
	}
	public function postIndex()
	{
		return "Post function";
	}

	

}