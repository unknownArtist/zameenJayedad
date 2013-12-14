<?php

class AgencyController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
	
	$records = Agency::all();
	$total= DB::table('agencystaff')
          			->count();
		
	return View::make('agencystaff.index')
					->with('record',$records)
					->with('total',$total);
	}
	public function getEdit($id)
	{
		$records = Agency::where('id',$id)->get();
	return View::make('agencystaff.edit')
					->with('record',$records)
					->with('countries', Config::get('listconfig.countries'));

	}
	public function postEdit($id)
	{
		$fields = array(
			'email'=>Input::get('team'),
		   'name' => Input::get('name'),
		   'phone' => Input::get('player_nickname'),
		   'cell' => Input::get('age'),
		   'fax' => Input::get('weight'),
		   'address' => Input::get('height'),
		   'zip' => Input::get('position'),
		   'country' => Input::get('shoots'),
		   'statistic' => Input::get('statistic'),
		   'hot_quota' => Input::get('achievements')
		   );

		  DB::table('player_profile')
            ->where('id','=',Request::segment(2))
            ->update($fields);
		
	
	}

	

}