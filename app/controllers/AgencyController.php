<?php

class AgencyController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getAddNewuser()

	{	

		$staffs = AgentUser::all();	
			$allTeamsMember = array();
					foreach($staffs as $staff)
					{

							
					$allTeamsMember[$staff->id] = $staff->agency_name;
						
							
						}	
						
					return View::make('auth.addnewuser')
					->with('countries', Config::get('listconfig.countries'))
					->with('allTeamsMember',$allTeamsMember);
	}	
		public function postAddnewUser()

	{	
		

		try
		{ 
	         $Users = Sentry::getUserProvider()->create(array(
	        'email'    => Input::get('email'),
	        'password' => Input::get('password'),
	        'activated'=> 1,
	        'staff'=> 1,

	        
	        ));	
	         $staff_id=$Users->id;

	     	 
		}


		catch (Cartalyst\Sentry\Users\LoginRequiredException $e)
		{
			    
			return Redirect::to('dashboard/agencies/view/addnewuser')->with('errors','email field is required');
		}
		catch (Cartalyst\Sentry\Users\PasswordRequiredException $e)
		{
		    return Redirect::to('dashboard/agencies/view/addnewuser')->with('errors','Password field is required');
		}
		catch (Cartalyst\Sentry\Users\UserExistsException $e)
		{
		   return Redirect::to('dashboard/agencies/view/addnewuser')->withInput()->with('errors','User with this login already exists');
		}

		$URL = 'Email:'.' '.Input::get('email').'<br/><br/>'.'Password:'.' '.Input::get('password').'<br/><br/>'.'Link:'.' '.'http://'.$_SERVER['HTTP_HOST'];
			    	$this->sendTo(Input::get('email'),array('activationCode'=>$URL));
		
			
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
					 						'agency_id' =>Input::get('agency_name'),
											'staff_id'  =>$staff_id,
											'email'     => Input::get('email'),
											'name'		=> Input::get('name'),
											'phone'     =>  Input::get('phone'),
											'cell'      => Input::get('cell'),
											'fax'       => Input::get('fax'),
											'address'   => Input::get('address'),
											'zip'       => Input::get('zip'),
											'country'   => Input::get('country'),
											'listing_quota' => Input::get('listing_quota'),
											'hot_quota' => Input::get('hot_quota')));


			            return Redirect::to('dashboard/agencies')->with('success','successfully Added');        		
	}




	public function getIndex($id)
	{
		
		$records = AgentUser::where('id',$id)->get();
		foreach($records as $record)
					{

							
				$agency_id = $record->id;
						
							
						}	


	$records = Agency::where('agency_id',$agency_id)->get();
	$total= DB::table('Agencystaff')->where('agency_id',$agency_id)
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
		$staff_id = Request::segment(5);
		


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

		  Agency::where('agency_id','=',$id)
            ->update($fields);

            $fields1 = array(
			'email'=>Input::get('email'),
		   
		   );
            DB::table('users')
            ->where('id','=',$staff_id)
            ->update($fields1);
            

		return Redirect::to('dashboard/agencies');

	}

	public function getDelete($id)
	{
		$users = Agency::where('id','=',$id)->get();
		foreach ($users as $user)
			{
				$user_id = $user->staff_id;

			}
		$userdelete = User::find($user_id);
		$userdelete->delete();
		$agencystaff = Agency::find($id);
		$agencystaff->delete();

		return Redirect::to('dashboard/agencies');


	}

}