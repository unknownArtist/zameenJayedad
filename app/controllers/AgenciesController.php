<?php

class AgenciesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	
	public function getIndex()
	{
	$user_id = Sentry::getUser()->id;
$records = AgentUser::where('agent_id','=',$user_id)->get();
	$total= DB::table('agent')->where('agent_id','=',$user_id)
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
		            
		            'agency_name'    => 'required'
		      	 );
		        $v = Validator::make($fields, $rules);
			        if ($v->fails()) 
			        {
			        	return Redirect::to('dashboard/agencies/addnew')->with('errors',$v);
			        }
			        	
			 		 	$agency = new AgentUser ();
			 		 	$agency->agent_id	=Sentry::getUser()->id;
			            $agency->agency_name     = $fields['agency_name'];
			            $agency->save();
			           

			        return Redirect::to('dashboard/agencies')->with('errors','successfully Added');
					
	}

	public function getEdit($id)
	{
		$records = AgentUser::where('id',$id)->get();

	return View::make('agencies.edit')
					->with('record',$records);

	}
	public function postEdit($id)
	{

		
	$fields = array(
			
		   'agency_name' => Input::get('agency_name')
		    );

		  DB::table('agent')
            ->where('id','=',$id)
            ->update($fields);
		
		return Redirect::to('dashboard/agencies');
	}

	public function getDelete($id)
	{
	$agencystaff = AgentUser::find($id);
		$agencystaff->delete();
		return Redirect::to('dashboard/agencies');
	}

}