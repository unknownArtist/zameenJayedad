<?php

class SearchController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function postIndex()
	{
		
	$records = Profolio::where('city', 'LIKE', Input::get('search'))->get();
	return View::make('dashboard.search')
					->with('record',$records);
	}


	

}