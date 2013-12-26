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
            'name' 			 => Input::get('name'),
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
            $members->fax = $fields['fax'];
            $members->name = $fields['name'];
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
	public function getLogin()
	{
		return View::make('auth.login');
	}

	public function postLogin()
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

	public function getForget()

	{
	return View::make('auth.forget');
	}	

	public function postForget()

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
			    	$URL = 'http://'.$_SERVER['HTTP_HOST']."/newpassword/resetCode?code=".$resetCode."&email=".Input::get('email');
			    	$this->sendTo(Input::get('email'),array('activationCode'=>$URL));
			    	return Redirect::to('login')->with('errors','Please check your mail for password reset');
			    }
		}
		catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
		{
		    echo 'User was not found.';
		}
 
	}

	public function getNewPassword()

	{
		$email=Input::get('email');
		
	return View::make('auth.newpassword')->with('email',$email);
	}	

	public function postNewPassword()

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

	public function getChangePass()

	{
	return View::make('auth.changepass');
	}

	public function postChangePass()
	{
		 // $user = Sentry::findUserByLogin(Input::get('email'));
		$user = Sentry::getUser();
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
		public function getProfolio()

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
		public function postProfolio()

			{
			
			$fields = array(
		            'property_type'        => Input::get('Property_Type'),
		            'home_type' 	       => Input::get('home_type'),
		            'purpose' 		       => Input::get('Purpose'),
		            'Construction_status'  => Input::get('Construction_Status'),
		            'wanted' 			   => Input::get('Wanted_For'),
		            'city' 			       => Input::get('city'),
		            'location' 		       => Input::get('address'),
		            'photo'				   => $this->ImageCrop('photo','photos','200','200',''),
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
		            'website'              => Input::get('Website'),
		           	'latitude'			   => Input::get('lat'),
		            'longitude'            => Input::get('long'),
		       
	       		 	);
$rules = array(
		            'property_type' => 'required',
		            'home_type'     => 'required',
		            'photo'         => 'required',
		            'w_title' 	    => 'required'
		           
		        );
		        $v = Validator::make($fields, $rules);
			        if ($v->fails()) 
			        {
			        	return Redirect::to('profolio')->with('errors',$v);
			        }
			        	
			 		 	$Profolio = new Profolio();
			 		 	$Profolio->agent_id				=Sentry::getUser()->id;
			            $Profolio->property_type       = $fields['property_type'];
			            $Profolio->home_type           = $fields['home_type'];
			            $Profolio->purpose             = $fields['purpose'];
			            $Profolio->Construction_status = $fields['Construction_status'];
			            $Profolio->wanted              = $fields['wanted'];
			            $Profolio->city                = $fields['city'];
			            $Profolio->location            = $fields['location'];
			            $Profolio->photo            = $fields['photo'];
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
			            $Profolio->latitude               = $fields['latitude'];
			            $Profolio->longitude             = $fields['longitude'];
			            $Profolio->save();

			        return Redirect::to('profolio/listing')->with('errors','successfully Added');


			}


public function getProfile()

	{
					$user_id = Sentry::getUser()->id;
					$records = DB::table('registration')->where('user_id', $user_id)->get();
					$users = DB::table('users')->where('id', $user_id)->get();
					return View::make('auth.profile', compact('records','users'))
					->with('countries', Config::get('listconfig.countries'));

	}	
	public function postProfile()

	{
		$fields = array(
			
		   'name' => Input::get('name'),
		   'phone' => Input::get('phone'),
		   'cell' => Input::get('cell'),
		   'fax' => Input::get('fax'),
		   'address' => Input::get('address'),
		   'zip' => Input::get('zip'),
		   'country' => Input::get('country')
		   );

		  DB::table('registration')
            ->where('id','=',Sentry::getUser()->id)
            ->update($fields);
         $fieldsname = array(
            	       'email' => Input::get('email')
		                );
            DB::table('users')
            ->where('id','=',Sentry::getUser()->id)
            ->update($fieldsname);
            return Redirect::to('profile');
	}

	public function getlisting()

	{
		$user_id = Sentry::getUser()->id;
					$records = DB::table('property')->where('agent_id', $user_id)->get();
					$users = DB::table('property')->where('agent_id', $user_id)->count();
					return View::make('auth.listing', compact('records','users'));
	}

	public function geteditlisting($id)

	{
		$records = DB::table('property')->where('id', $id)->get();
		return View::make('auth.editlisting')
					->with('records',$records)
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
public function posteditlisting($id)

	{
		$fields = array(
			'property_type'=>Input::get('Property_Type'),
		   'home_type' => Input::get('home_type'),
		   'purpose' => Input::get('Purpose'),
		   'Construction_status' => Input::get('Construction_Status'),
		   'wanted' => Input::get('Wanted_For'),
		   'city' => Input::get('city'),
		   'location' => Input::get('Location'),
		   'w_title' => Input::get('Wanted_Title'),
		   'Description' => Input::get('Description'),
	       'budget' => Input::get('Budget'),
		   'l_area' => Input::get('Land_Area'),
		   'unit' => Input::get('unit'),
		   'bedroom' => Input::get('Bedrooms'),
		    'bathroom' => Input::get('Bathrooms'),
	       'expires' => Input::get('Expires_After'),
		   'contact_p' => Input::get('Contact_Person'),
		   'phone' => Input::get('Phone'),
		   'cell' => Input::get('Cell'),
		   'fax' => Input::get('Fax'),
		    'email' => Input::get('E-mail'),
	       'website' => Input::get('Website')
		   );

		  DB::table('property')
            ->where('id','=',$id)
            ->update($fields);
            return Redirect::to('profolio/listing');

		}

		public function getdeletelisting($id)

	{
		$profile = Profolio::find($id);
		 $profile->delete();
		 return Redirect::to('profolio/listing');
	}

}

