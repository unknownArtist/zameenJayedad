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
		  	'user_id' 		=> $user->id,
            'phone' 		=> Input::get('phone'),
            'cell' 			=> Input::get('cell'),
            'fax' 			=> Input::get('fax'),
            'address' 		=> Input::get('address'),
            'zip' 			=> Input::get('zip'),
            'country' 		=> Input::get('country'),
            'roles' 		=> Input::get('roles')
            // 'terms' 		=> Input::get('terms'),
            // 'newsletters'  => Input::get('newsletters')
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

       return Redirect::to('login')->with('errors','please check your mail for activation');;

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

		public function getaddnewuser()

	{
					return View::make('auth.addnewuser')
					->with('countries', Config::get('listconfig.countries'));
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


}

