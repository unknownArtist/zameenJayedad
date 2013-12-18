<?php

class AgencyController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getAddNewuser()

	{			
					return View::make('auth.addnewuser')
					->with('countries', Config::get('listconfig.countries'));
	}	
		public function postAddnewUser()

	{
			$fields = array(
			            'email'          => Input::get('email'),
			            'password' 	     => Input::get('password'),
			            'name' 		     => Input::get('name'),
			            'phone' 		 => Input::get('phone'),
			            'cell' 			 => Input::get('cell'),
			            'fax' 			 => Input::get('fax'),
			            'address' 		 => Input::get('address'),
			            'zip' 		     => Input::get('zip'),
			            'country' 		 => Input::get('country'),
			            'listing_quota'  => Input::get('listing_quota'),
			            'hot_quota'      => Input::get('hot_quota')
			            );
			$rules = array(
		            'email'         => 'required',
		            'password'      => 'required|min:6',
		            'name' 	        => 'required',
		            'cell'          => 'required',
		            'address'       => 'required',
		            'country'       => 'required',
		            'zip' 	        => 'required',
		            'fax'           => 'required',
		            'listing_quota' => 'required',
		            'hot_quota'     => 'required'
		           
		        );
		        
		    $v = Validator::make($fields, $rules);
			        if ($v->fails()) 
			        {
			        	return Redirect::to('addnewuser')->with('errors',$v);
			        }

			        DB::table('Agencystaff')->insertGetId(array(
											'agency_id' => Sentry::getUser()->id,
											'email'     => Input::get('email'),
											'name'		=> Input::get('name'),
											'password'  => Input::get('password'),  // it was $id i changed it to $userId.
											'phone'     =>  Input::get('phone'),
											'cell'      => Input::get('cell'),
											'fax'       => Input::get('fax'),
											'address'   => Input::get('address'),
											'zip'       => Input::get('zip'),
											'country'   => Input::get('country'),
											'listing_quota' => Input::get('listing_quota'),
											'hot_quota' => Input::get('hot_quota')));


			            return Redirect::to('dashboard/agencies/view')->with('success','successfully Added');        		
	}




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

		  DB::table('Agencystaff')
            ->where('id','=',$id)
            ->update($fields);
		
		return Redirect::to('dashboard/agencies/'.$id.'/view');
	}

	public function getDelete($id)
	{
	$agencystaff = Agency::find($id);
		$agencystaff->delete();
		return Redirect::to('dashboard/agencies');
	}

}