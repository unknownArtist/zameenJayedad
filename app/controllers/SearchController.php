<?php

class SearchController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function postIndex()
	{	$fields = array(
			            'search'    => Input::get('search'),
			             );
           
			$rules = array(
		            'search'        => 'required',
		            );
		    $v = Validator::make($fields, $rules);
			        if ($v->fails()) 
			        {

			        	

			        	return 'please type for search';

			        }

	$name=Input::get('search');
	$records = Profolio::where('city', 'LIKE', '%'. $fields['search'].'%')
					->orWhere('property_type', 'LIKE', $fields['search'])->get();
	return View::make('dashboard.search')
					->with('name',$name)
					->with('record',$records);
	}


	

}