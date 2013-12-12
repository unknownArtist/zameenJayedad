<?php

class SearchController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function postIndex()
	{
	$name=Input::get('search');
	$records = Profolio::where('city', 'LIKE', Input::get('search'))->orWhere('property_type', 'LIKE',Input::get('search'))->get();
	return View::make('dashboard.search')
					->with('name',$name)
					->with('record',$records);
	}


	

}