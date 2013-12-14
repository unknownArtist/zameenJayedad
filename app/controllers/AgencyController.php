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
	$total= DB::table('Agencystaff')
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
			'email'=>Input::get('email'),
		   'name' => Input::get('name'),
		   'phone' => Input::get('phone'),
		   'cell' => Input::get('cell'),
		   'fax' => Input::get('fax'),
		   'address' => Input::get('address'),
		   'zip' => Input::get('zip'),
		   'country' => Input::get('country'),
		   'listing_quota' => Input::get('listing_quota'),
		   'hot_quota' => Input::get('hot_quota')
		   );

		  DB::table('agencystaff')
            ->where('id','=',$id)
            ->update($fields);
		
		return Redirect::to('dashboard/agencystaff');
	}

	public function getDelete($id)
	{
	$agencystaff = Agency::find($id);
		$agencystaff->delete();
		return Redirect::to('dashboard/agencystaff');
	}

}