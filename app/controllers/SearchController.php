<?php

class SearchController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function postIndex()
	{	
           
	$q =Input::get('search');

	$records = Profolio::where('city', 'LIKE', '%'.$q.'%')
					   ->orWhere('property_type', 'LIKE','%'.$q.'%')
					   ->orWhere('purpose','LIKE', '%'.$q.'%')
					   ->orWhere('wanted','LIKE', '%'.$q.'%')
					   ->orWhere('location','LIKE', '%'.$q.'%')
					   ->orWhere('p_title','LIKE', '%'.$q.'%')
					   ->orWhere('unit','LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.search')
					->with('name',$q)
					->with('record',$records);
	}


	

}