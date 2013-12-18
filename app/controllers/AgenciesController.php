<?php

class AgenciesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	
	public function getIndex()
	{
	
$records = AgencyName::all();
	$total= DB::table('agencies')
          			->count();
		
	return View::make('agencies.index')
					->with('record',$records)
					->with('total',$total);
					
	}
	public function getaddnew()
	{
	
		
	return View::make('agencies.create');
					
	}
	public function postaddnew()
	{
	
		
			
			$fields = array(
		            'agency_owner'        => Input::get('agency_owner'),
		            'agency_name' 	       => Input::get('agency_name')
			       );
   

	       
		        $rules = array(
		            'agency_owner' => 'required',
		            'agency_name'    => 'required'
		      	 );
		        $v = Validator::make($fields, $rules);
			        if ($v->fails()) 
			        {
			        	return Redirect::to('dashboard/agencies/addnew')->with('errors',$v);
			        }
			        	
			 		 	$agency = new AgencyName ();
			 		 	$agency->user_id	=Sentry::getUser()->id;
			            $agency->agency_owner   = $fields['agency_owner'];
			            $agency->agency_name     = $fields['agency_name'];
			            $agency->save();
			           

			        return Redirect::to('dashboard/agencies')->with('errors','successfully Added');
					
	}

	public function getEdit($id)
	{
		$records = AgencyName::where('id',$id)->get();

	return View::make('agencies.edit')
					->with('record',$records);

	}
	public function postEdit($id)
	{

	$fields = array(
			'agency_owner'=>Input::get('agency_owner'),
		   'agency_name' => Input::get('agency_name')
		    );

		  DB::table('agencies')
            ->where('id','=',$id)
            ->update($fields);
		
		return Redirect::to('dashboard/agencies');
	}

	public function getDelete($id)
	{
	$agencystaff = AgencyName::find($id);
		$agencystaff->delete();
		return Redirect::to('dashboard/agencies');
	}

}