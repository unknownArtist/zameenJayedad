<?php

class DashboardController extends BaseController {



	public function getIndex()
	{
		$user = "Rameez Riaz";
		return View::make('dashboard.index')
				   ->with('user',$user);
	}
	public function postIndex()
	{
		return "Post function";
	}

	public function getSearch()
	{
		return View::make('dashboard.search');
	}

}