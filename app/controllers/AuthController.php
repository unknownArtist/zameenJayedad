<?php

class AuthController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getRegister()
	{
		return View::make('auth.register')
					->with('roles', Config::get('listconfig.roles')) 
					->with('cities', Config::get('listconfig.cities')) 
					->with('countries', Config::get('listconfig.countries'));

	}
	public function postRegister()

	{
		try
		{ 
	         $Users = Sentry::getUserProvider()->create(array(
	        'email'    => Input::get('email'),
	        'password' => Input::get('password'),
	        'first_name' => Input::get('first_name'),
	        'last_name' => Input::get('last_name')
	        
	        ));	
	     	 
		}


		catch (Cartalyst\Sentry\Users\LoginRequiredException $e)
		{
			    
			return Redirect::to('user/register')->with('errors','email field is required');
		}
		catch (Cartalyst\Sentry\Users\PasswordRequiredException $e)
		{
		    return Redirect::to('user/register')->with('errors','Password field is required');
		}
		catch (Cartalyst\Sentry\Users\UserExistsException $e)
		{
		   return Redirect::to('user/register')->withInput()->with('errors','User with this login already exists');
		}
		$user = Sentry::findUserByLogin(Input::get('email')); 
		$activationCode = $Users->getActivationCode();

		if($activationCode)
			    {
			    	$URL = 'http://'.$_SERVER['HTTP_HOST']."/user/activation?code=".$activationCode."&email=".Input::get('email');
			    	$this->sendTo(Input::get('email'),array('activationCode'=>$URL));
			    	// return Redirect::to('user/register')->with('success','Email has been sent to you');
			    }
			    
		  $fields = array(
		  	'user_id' 		 => $user->id,
            'phone' 		 => Input::get('phone'),
            'cell' 			 => Input::get('cell'),
            'fax' 			 => Input::get('fax'),
            'address' 		 => Input::get('address'),
            'zip' 			 => Input::get('zip'),
            'country' 		 => Input::get('country'),
            'roles' 		 => Input::get('roles'),
            'city' 		     => Input::get('cities'),
            'agency_name'    => Input::get('agency'),
            'description'    => Input::get('services'),
            'company_phone'  => Input::get('company_phone'),
            'company_mobile' => Input::get('company_mobile'),
            'company_fax'    => Input::get('company_fax'),
            'company_address'=> Input::get('company_address'),
            'company_email'  => Input::get('company_email')
        );

        $rules = array(
            'phone' 	=> 'required',
            'cell'      => 'required',
            'address' 	=> 'required'
           
        );
        $v = Validator::make($fields, $rules);
        if ($v->fails()) 
        {
        	return Redirect::to('user/register')->with('errors',$v);
        }

 		 	$members = new Members();
            $members->phone = $fields['phone'];
            $members->cell = $fields['cell'];
            $members->address = $fields['address'];
            $members->zip = $fields['zip'];
            $members->country = $fields['country'];
            $members->roles = $fields['roles'];
            $members->user_id = $fields['user_id'];
            $members->save();
            DB::table('agent')->insert(
			array('agent_id' => $fields['user_id'], 
			    	 'city' => $fields['city'], 
			    	 'agency_name' => $fields['city'],
			    	 'description' => $fields['description'],
			    	 'company_phone' => $fields['company_phone'],
			    	 'company_mobile' => $fields['company_mobile'],
			    	 'company_fax' => $fields['company_fax'],
			    	 'company_address' => $fields['company_address'],
			    	 'company_email' => $fields['company_email'],
			    	 )
			);

       return Redirect::to('login')->with('errors','please check your mail for activation');

	}
	public function getlogin()
	{
		return View::make('auth.login');
	}

	public function postlogin()
	{
		try
		{
			$credentials = array(
			'email'		=>		Input::get('email'),
			'password'	=>		Input::get('password')
			);

			$user = Sentry::authenticate($credentials, false);
			if($user)
			return Redirect::to('dashboard');
			{
				
			 }
		}
		catch (Cartalyst\Sentry\Users\LoginRequiredException $e)
		{
		return Redirect::to('login')->with('errors','Login field is required');
		}
	    catch (Cartalyst\Sentry\Users\PasswordRequiredException $e)
		{
		return Redirect::to('login')->with('errors','Password field is required');
		}
		catch (Cartalyst\Sentry\Users\WrongPasswordException $e)
		{
		return Redirect::to('login')->with('errors','Wrong password, try again');

		}
		catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
		{
		return Redirect::to('login')->with('errors','User was not found');
		}
		catch (Cartalyst\Sentry\Users\UserNotActivatedException $e)
		{
		return Redirect::to('login')->with('errors','User is not activated');
		}
		// The following is only required if throttle is enabled
		catch (Cartalyst\Sentry\Throttling\UserSuspendedException $e)
		{
		return Redirect::to('login')->with('errors','User is suspended');
		}
		catch (Cartalyst\Sentry\Throttling\UserBannedException $e)
		{
		return Redirect::to('login')->with('errors','User is banned');
		}
	}
	public function getActivateUser()
	{
		try
		{
		    // Find the user using the user id
		    $user = Sentry::findUserByLogin(Input::get('email'));

		    // Attempt to activate the user
		    if ($user->attemptActivation(Input::get('code')))
		    {
				return Redirect::to('login')->with('success','User Activated Successfully');
		    }
		    else
		    {
		        return Redirect::to('login')->with('errors','User cannot activated');
		    }
		}
		catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
		{
			return Redirect::to('user/register')->with('errors','User was not found');
		}
		catch (Cartalyst\Sentry\Users\UserAlreadyActivatedException $e)
		{
			return Redirect::to('user/register')->with('errors','User is already activated');
		}
	}

	public function getLogout()
	{
		if(Sentry::logout())
		{
			return Redirect::to('login')->with('success',"You are successfully logout");
		}
		
	}

	public function getforget()

	{
	return View::make('auth.forget');
	}	

	public function postforget()

	{
		
		$email = Input::get('email');

	try
		{
		    // Find the user using the user email address
		    $user = Sentry::findUserByLogin(Input::get('email'));


		    // Get the password reset code
		    $resetCode = $user->getResetPasswordCode();

		    if($resetCode)
			    {
			    	$URL = 'http://'.$_SERVER['HTTP_HOST']."/user/resetCode?code=".$resetCode."&email=".Input::get('email');
			    	$this->sendTo(Input::get('email'),array('activationCode'=>$URL));
			    	return Redirect::to('newpassword')->with('errors','Please check your mail for password reset');
			    }
		}
		catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
		{
		    echo 'User was not found.';
		}
 
	}

	public function getnewpassword()

	{
	return View::make('auth.newpassword');
	}	

	public function postnewpassword()

	{
		$user = Sentry::findUserByLogin(Input::get('email'));
		$userid= $user->id;

			try
		{
		    // Find the user using the user id
		    $user = Sentry::findUserById($userid);
		   
		    // Check if the reset password code is valid
		    if ($user->checkResetPasswordCode($user->reset_password_code))
		    {
		        // Attempt to reset the user password
		        if ($user->attemptResetPassword($user->reset_password_code, Input::get('password')))
		        {
		            return Redirect::to('login')->with('errors','Password reset successfully');
		        }
		        else
		        {
		         return Redirect::to('newpassword')->with('errors','Password not set');
		        }
		    }
		    else
		    {
		        // The provided password reset code is Invalid
		    }
		}
		catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
		{
		    echo 'User was not found.';
		}
	}

	public function getchangepass()

	{
	return View::make('auth.changepass');
	}

	public function postchangepass()
	{
		 $user = Sentry::findUserByLogin(Input::get('email'));
			$userid= $user->id;

			$user = Sentry::getUserProvider()->findById($userid);
			
		        if( $user->checkPassword( Input::get( 'old_password' ) ) )
			    {
			        $user->password = Input::get('new_password');
						        
						         $user->save();
					return Redirect::to('login')->with('errors','Password change successfully');
				}
				else
				{
					return Redirect::to('changepass')->with('errors','Password not change');
				}
								

}
		public function getprofolio()

			{
					return View::make('auth.profolio')
					->with('property_Type', Config::get('listconfig.property_Type')) 
					->with('Type_of_Homes', Config::get('listconfig.Type_of_Homes'))
					->with('Purpose', Config::get('listconfig.Purpose'))
					->with('Construction_Status', Config::get('listconfig.Construction_Status')) 
					->with('Wanted_For', Config::get('listconfig.Wanted_For')) 
					->with('cities', Config::get('listconfig.cities'))
					->with('Location', Config::get('listconfig.Location'))
					->with('unit', Config::get('listconfig.unit'))
					->with('Bedrooms', Config::get('listconfig.Bedrooms')) 
					->with('Bathrooms', Config::get('listconfig.Bathrooms')) 
					->with('Expires', Config::get('listconfig.Expires'));
			
			}
		public function postprofolio()

			{
				$fields = array(
		            'property_type'        => Input::get('Property_Type'),
		            'home_type' 	       => Input::get('home_type'),
		            'purpose' 		       => Input::get('Purpose'),
		            'Construction_status'  => Input::get('Construction_Status'),
		            'wanted' 			   => Input::get('Wanted_For'),
		            'city' 			       => Input::get('city'),
		            'location' 		       => Input::get('Location'),
		            'w_title' 		       => Input::get('Wanted_Title'),
		            'p_title' 		       => Input::get('Property_Title'),
		            'Description'          => Input::get('Description'),
		            'budget'               => Input::get('Budget'),
		            'l_area'               => Input::get('Land_Area'),
		            'unit'				   => Input::get('unit'),
		            'bedroom'              => Input::get('Bedrooms'),
		            'bathroom'             => Input::get('Bathrooms'),
		            'expires'              => Input::get('Expires_After'),
		            'contact_p'            => Input::get('Contact_Person'),
		            'phone'                 => Input::get('Phone'),
		            'cell'                 => Input::get('Cell'),
		            'fax'                  => Input::get('Fax'),
		            'email'				   => Input::get('E-mail'),
		            'website'              => Input::get('Website')
		       
	       		 	);
   

	       
		        $rules = array(
		            'property_type' => 'required',
		            'home_type'     => 'required',
		            'w_title' 	    => 'required'
		           
		        );
		        $v = Validator::make($fields, $rules);
			        if ($v->fails()) 
			        {
			        	return Redirect::to('profolio')->with('errors',$v);
			        }

			 		 	$Profolio = new Profolio();
			            $Profolio->property_type       = $fields['property_type'];
			            $Profolio->home_type           = $fields['home_type'];
			            $Profolio->purpose             = $fields['purpose'];
			            $Profolio->Construction_status = $fields['Construction_status'];
			            $Profolio->wanted              = $fields['wanted'];
			            $Profolio->city                = $fields['city'];
			            $Profolio->location            = $fields['location'];
			            $Profolio->w_title             = $fields['w_title'];
			            $Profolio->p_title             = $fields['p_title'];
			            $Profolio->Description         = $fields['Description'];
			            $Profolio->budget              = $fields['budget'];
			            $Profolio->l_area              = $fields['l_area'];
			            $Profolio->unit                = $fields['unit'];
			            $Profolio->bedroom             = $fields['bedroom'];
			            $Profolio->bathroom            = $fields['bathroom'];
			            $Profolio->expires             = $fields['expires'];
			            $Profolio->contact_p           = $fields['contact_p'];
			            $Profolio->phone               = $fields['phone'];
			            $Profolio->cell                = $fields['cell'];
			            $Profolio->fax                 = $fields['fax'];
			            $Profolio->email               = $fields['email'];
			            $Profolio->website             = $fields['website'];
			            $Profolio->save();

			        return Redirect::to('profolio')->with('errors','successfully Added');


			}



		public function getaddnewuser()

	{
					return View::make('auth.addnewuser')
					->with('countries', Config::get('listconfig.countries'));
	}	
		public function postaddnewuser()

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
						$Agency = new Agency();
			            $Agency->email              = $fields['email'];
			            $Agency->password           = $fields['password'];
			            $Agency->name               = $fields['name'];
			            $Agency->phone              = $fields['phone'];
			            $Agency->cell               = $fields['cell'];
			            $Agency->address            = $fields['address'];
			            $Agency->country            = $fields['country'];
			            $Agency->zip                = $fields['zip'];
			            $Agency->fax                = $fields['fax'];
			            $Agency->listing_quota      = $fields['listing_quota'];
			            $Agency->hot_quota          = $fields['hot_quota'];
			            $Agency->save();

			            return Redirect::to('addnewuser')->with('errors','successfully Added');        		
	}
		public function getemailalert()

	{
					return View::make('auth.emailalert')
					->with('alert', Config::get('listconfig.alert'))
					->with('price', Config::get('listconfig.price'))
					->with('beds', Config::get('listconfig.beds'))
					->with('area', Config::get('listconfig.area'))
					->with('baths', Config::get('listconfig.baths'))
					->with('Finance', Config::get('listconfig.Finance'))
					->with('Occupancy', Config::get('listconfig.Occupancy'))
					->with('Ownership', Config::get('listconfig.Ownership'));
					
				
					
	}


		public function postemailalert()

	{
			$fields = array(
			            'receive_alert_on'    => Input::get('receive_alert_on'),
			            'Property_Type' 	  => Input::get('houses'),
			            						 Input::get('flats'),
			            						 Input::get('upper_p'),
			            						 Input::get('lower_p'),
			            						 Input::get('f_house'),
			            						 Input::get('rooms'),
			            						 Input::get('residential'),
			            						 Input::get('agricultural_land'),
			            						 Input::get('commercial'),
			            						 Input::get('offices'),
			            						 Input::get('shops'),
			            						 Input::get('warehouses'),
			            						 Input::get('factories'),
			            						 Input::get('buildings'),
			            						Input::get('others'),

			            'purpose' 		      => Input::get('purpose'),
			            'price' 		      => Input::get('price'),
			            'beds' 			      => Input::get('beds'),
			            'location' 			  => Input::get('location'),
			            'keyword' 		      => Input::get('keyword'),
			            'covered_area' 		  => Input::get('covered_area'),
			            'baths' 		      => Input::get('baths'),
			            'estate_agent'        => Input::get('estate_agent'),
			            'finance_available'   => Input::get('finance_available'),
			            'occupanc_status'     => Input::get('occupanc_status'),
			            'ownership_status'    => Input::get('ownership_status')
			            );
			$rules = array(
		            'receive_alert_on'        => 'required',
		            'Property_Type'           => 'required',
		            'purpose' 	              => 'required',
		            'beds'                    => 'required',
		            'location'                => 'required',
		            'keyword'                 => 'required',
		            'covered_area' 	          => 'required',
		            'baths'                   => 'required',
		            'estate_agent'            => 'required',
		            'finance_available'       => 'required',
		            'occupanc_status'         => 'required',
		            'ownership_status'        => 'required',
		           
		        );
			print_r($fields);
			die();
		        
		    $v = Validator::make($fields, $rules);
			        if ($v->fails()) 
			        {
			        	return Redirect::to('emailalert')->with('errors',$v);
			        }
						$Emails = new Agency();
			            $Emails->receive_alert_on      = $fields['receive_alert_on'];
			            $Emails->Property_Type         = $fields['Property_Type'];
			            $Emails->purpose               = $fields['purpose'];
			            $Emails->beds                  = $fields['beds'];
			            $Emails->location              = $fields['location'];
			            $Emails->keyword               = $fields['keyword'];
			            $Emails->covered_area          = $fields['covered_area'];
			            $Emails->baths                 = $fields['baths'];
			            $Emails->estate_agent          = $fields['estate_agent'];
			            $Emails->finance_available     = $fields['finance_available'];
			            $Emails->occupanc_status       = $fields['occupanc_status'];
			            $Emails->ownership_status      = $fields['ownership_status'];
			            $Emails->save();

			            return Redirect::to('emailalert')->with('errors','successfully Added');        		
	}	


		public function getreport()

	{
					return View::make('auth.report');

	}						



}

