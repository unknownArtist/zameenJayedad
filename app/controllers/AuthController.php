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
		$agent=Input::get('agent');
		if($agent == 1)
		{

		try
		{ 
	         $Users = Sentry::getUserProvider()->create(array(
	        'email'    => Input::get('email'),
	        'password' => Input::get('password'),
	        'group'    => 1,
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
			$URL ="New Agent Register To Zameen.jayedad.com.pk";
			 $this->sendTo('registation@zameenjayedad.com.pk',array('activationCode'=>$URL));
			    	
			    	}

			$agency_id = DB::table('agent')->insertGetId(
			array('agent_id' =>$user->id,
			    	 'city' => Input::get('cities'),
			    	 'agency_name' => Input::get('agency'),
			    	 'description' => Input::get('services'),
			    	 'company_phone' => Input::get('company_phone'),
			    	 'company_mobile' => Input::get('company_mobile'),
			    	 'company_address' => Input::get('company_address'),
			    	 'company_email' => Input::get('company_email')
			    	 )
			);
			
			$fields = array(
 			'staff_id'	 =>	$Users->id,
 			'owner_id'   => $Users->id,
 			'agency_id'  => $agency_id,
 			'email'      => Input::get('email'),
 			'name'       => Input::get('name'),
 			'phone'      =>  Input::get('phone'),
 			'cell'       => Input::get('cell'),
 			
 			'address'   =>  Input::get('address'),
 			
 			'country' => Input::get('country'),
 				);

 		DB::table('Agencystaff')->insert($fields);
 		$fields = array(
		  	'user_id' 		 => $user->id,
            'phone' 		 => Input::get('phone'),
            'cell' 			 => Input::get('cell'),
            'name' 			 => Input::get('name'),
            'address' 		 => Input::get('address'),
            'photo'			=>	Input::file('photo'),
            'country' 		 => Input::get('country'),
            'roles' 		 => Input::get('roles'),
            'city' 		     => Input::get('cities'),
            'agent'			 => Input::get('agent'),
            'agency_name'    => Input::get('agency'),
            'description'    => Input::get('services'),
            'company_phone'  => Input::get('company_phone'),
            'company_mobile' => Input::get('company_mobile'),
            'company_address'=> Input::get('company_address'),
            'company_email'  => Input::get('company_email')
        );

        $rules = array(
            'phone' 	=> 'required',
            'cell'      => 'required',
            'address' 	=> 'required',
            'photo'     => 'required',
           
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
            $members->country = $fields['country'];
            $members->roles = $fields['roles'];
            $members->user_id = $fields['user_id'];
            $members->name = $fields['name'];
             $members->photo = $this->ImageCrop('photo','photos','200','200','');
            $members->save();
            

       return Redirect::to('login')->with('errors','Email has been sent to representative for your Authentication');

			}
			else
			{		
				try
		{ 
	         $Users = Sentry::getUserProvider()->create(array(
	        'email'    => Input::get('email'),
	        'password' => Input::get('password'),
	        'group'    => 0,
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
			}

		
		
			    
		  $fields = array(
		  	'user_id' 		 => $user->id,
            'phone' 		 => Input::get('phone'),
            'cell' 			 => Input::get('cell'),
            'name' 			 => Input::get('name'),
            'address' 		 => Input::get('address'),
            'photo'			=>	Input::file('photo'),
            'country' 		 => Input::get('country'),
            'roles' 		 => Input::get('roles'),
            'city' 		     => Input::get('cities'),
            'agent'			 => Input::get('agent'),
            'agency_name'    => Input::get('agency'),
            'description'    => Input::get('services'),
            'company_phone'  => Input::get('company_phone'),
            'company_mobile' => Input::get('company_mobile'),
            'company_address'=> Input::get('company_address'),
            'company_email'  => Input::get('company_email')
        );

        $rules = array(
            'phone' 	=> 'required',
            'cell'      => 'required',
            'address' 	=> 'required',
            'photo'     => 'required',
           
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
            $members->country = $fields['country'];
            $members->roles = $fields['roles'];
            $members->user_id = $fields['user_id'];
            $members->name = $fields['name'];
             $members->photo = $this->ImageCrop('photo','photos','200','200','');
            $members->save();
            

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

				 
			
			$v = Validator::make(Input::all(), Emails::$rules);
		        
			        if ($v->fails()) 
			        {
			        	return Redirect::to('profolio')->withErrors($v);
			        }
			       $id = DB::table('property')->insertGetId(
   					 array(
   					 	'agent_id' => Sentry::getUser()->id,
   					 	'property_type' =>Input::get('Property_Type'),
   					 	'home_type' =>Input::get('home_type'),
   					 	'purpose' => Input::get('Purpose'),
   					 	'Construction_status' =>Input::get('Construction_Status'),
   					 	
   					 	'city' =>Input::get('home_type'),
   					 	'purpose' => Input::get('city'),
   					 	'location' =>Input::get('address'),
   					 	'budget' =>Input::get('Budget'),
   					 	'l_area' =>Input::get('Land_Area'),
   					 	'bedroom' => Input::get('Bedrooms'),
   					 	'bathroom' =>Input::get('Bathrooms'),
   					 	'expires' =>Input::get('Expires_After'),
   					 	'contact_p' =>Input::get('Contact_Person'),
   					 	'phone' => Input::get('Phone'),
   					 	'cell' =>  Input::get('Cell'),
   					 	'Description' =>  Input::get('Description'),
   					 	'fax' =>Input::get('Fax'),
   					 	'email' => Input::get('E-mail'),
   					 	'website' =>Input::get('Website'),
   					 	'time_at' =>date("H:i:s"),
   					 	'latitude' =>Input::get('lat'),
   					 	'longitude' => Input::get('long'),
   					 	'date_at' =>date("Y-m-d")
   					 	));
			$proimg=Input::file('photo');
				if($proimg)
	            {
	          $fieldsimg= array(
				'photo'=>$this->ImageCrop('photo','photos','200','200',''),
				
			   	);
	          DB::table('property')
	            ->where('id','=',$id)
	            ->update($fieldsimg);
	        }
	        $proimg1 = Input::file('photo1');
	        if($proimg1)
	            {
	          $fieldsimg1= array(
				'photo1'=>$this->ImageCrop('photo1','photos','200','200',''),
				'ph1title' =>Input::get('title1')
			   	);
	          DB::table('property')
	            ->where('id','=',$id)
	            ->update($fieldsimg1);
	        }
	        $proimg2 = Input::file('photo2');
	        if($proimg2)
	            {
	          $fieldsimg2= array(
				'photo2'=>$this->ImageCrop('photo1','photos','200','200',''),
				'ph2title' =>Input::get('title2')
			   	);
	          DB::table('property')
	            ->where('id','=',$id)
	            ->update($fieldsimg2);
	        }
	        $proimg3 = Input::file('photo3');
	        if($proimg3)
	            {
	          $fieldsimg3= array(
				'photo3'=>$this->ImageCrop('photo3','photos','200','200',''),
				'ph3title' =>Input::get('title3')
			   	);
	          DB::table('property')
	            ->where('id','=',$id)
	            ->update($fieldsimg3);
	        }
	         $proimg4 = Input::file('photo4');
	        if($proimg4)
	            {
	          $fieldsimg4= array(
				'photo4'=>$this->ImageCrop('photo4','photos','200','200',''),
				'ph4title' =>Input::get('title4')
			   	);
	          DB::table('property')
	            ->where('id','=',$id)
	            ->update($fieldsimg4);
	        }
	        $proimg5 = Input::file('photo5');
	        if($proimg5)
	            {
	          $fieldsimg5= array(
				'photo5'=>$this->ImageCrop('photo5','photos','200','200',''),
				'ph5title' =>Input::get('title5')
			   	);
	          DB::table('property')
	            ->where('id','=',$id)
	            ->update($fieldsimg5);
	        }

	         $proimg6 = Input::file('photo6');
	        if($proimg6)
	            {
	          $fieldsimg6= array(
				'photo6'=>$this->ImageCrop('photo6','photos','200','200',''),
				'ph6title' =>Input::get('title6')
			   	);
	          DB::table('property')
	            ->where('id','=',$id)
	            ->update($fieldsimg6);
	        }
	        $proimg7 = Input::file('photo7');
	        if($proimg7)
	            {
	          $fieldsimg7= array(
				'photo7'=>$this->ImageCrop('photo7','photos','200','200',''),
				'ph7title' =>Input::get('title7')
			   	);
	          DB::table('property')
	            ->where('id','=',$id)
	            ->update($fieldsimg7);
	        }
	        $proimg8 = Input::file('photo8');
	        if($proimg8)
	            {
	          $fieldsimg8= array(
				'photo8'=>$this->ImageCrop('photo8','photos','200','200',''),
				'ph8title' =>Input::get('title8')
			   	);
	          DB::table('property')
	            ->where('id','=',$id)
	            ->update($fieldsimg8);
	        }
	         $proimg9 = Input::file('photo9');
	        if($proimg9)
	            {
	          $fieldsimg9= array(
				'photo9'=>$this->ImageCrop('photo9','photos','200','200',''),
				'ph9title' =>Input::get('title9')
			   	);
	          DB::table('property')
	            ->where('id','=',$id)
	            ->update($fieldsimg9);
	        }
	        $proimg10 = Input::file('photo10');
	        if($proimg10)
	            {
	          $fieldsimg10= array(
				'photo10'=>$this->ImageCrop('photo10','photos','200','200',''),
				'ph10title' =>Input::get('title10')
			   	);
	          DB::table('property')
	            ->where('id','=',$id)
	            ->update($fieldsimg10);
	        }

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
	
	public function getViewProfile()

	{
		
					$user_id = Sentry::getUser()->id;
					$records = Members::where('user_id', $user_id)->get();
					$users = DB::table('users')->where('id', $user_id)->get();
					return View::make('auth.viewprofile', compact('records','users'))
					->with('countries', Config::get('listconfig.countries'));

	}	
	
	public function postProfile()

	{

		$fields = array(
			'name' => Input::get('name'),
		   'phone' => Input::get('phone'),
		   'cell' => Input::get('cell'),
		   'address' => Input::get('address'),
		   'country' => Input::get('country')
		   );

		$id = Sentry::getUser()->id;


		  DB::table('registration')
            ->where('user_id','=',$id)
            ->update($fields);

            $proimg=Input::file('photo');
			if($proimg)
	            {
	          $fieldsimg= array(
				'photo'=>$this->ImageCrop('photo','photos','200','200','')
			   	);
	          DB::table('registration')
	            ->where('user_id','=',$id)
	            ->update($fieldsimg);
	        }
         $fieldsname = array(
            	       'email' => Input::get('email')
		                );
            DB::table('users')
            ->where('id','=',Sentry::getUser()->id)
            ->update($fieldsname);

            $fieldsstaff = array(
            'email' => Input::get('email'),
			'name' => Input::get('name'),
		   'phone' => Input::get('phone'),
		   'cell' => Input::get('cell'),
		   'address' => Input::get('address'),
		   'country' => Input::get('country')
		   );
            Agency::where('staff_id','=',Sentry::getUser()->id)
            ->update($fieldsstaff);
            return Redirect::to('viewprofile');
	}

	public function getlisting()

	{
		$user_id = Sentry::getUser()->id;
		
					$records = DB::table('property')->where('agent_id', $user_id)->orderBy('id', 'desc')->get();
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
		   'city' => Input::get('city'),
		   'location' => Input::get('address'),
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
	       'website' => Input::get('Website'),
	       'latitude'  => Input::get('lat'),
			'longitude' => Input::get('long')
		   );
	DB::table('property')
            ->where('id','=',$id)
            ->update($fields);
            $proimg=Input::file('photo');
				if($proimg)
	            {
	          $fieldsimg= array(
				'photo'=>$this->ImageCrop('photo','photos','200','200',''),
				
			   	);
	          DB::table('property')
	            ->where('id','=',$id)
	            ->update($fieldsimg);
	        }
           

            $proimg1 = Input::file('photo1');
	        if($proimg1)
	            {
	          $fieldsimg1= array(
				'photo1'=>$this->ImageCrop('photo1','photos','200','200',''),
				'ph1title' =>Input::get('title1')
			   	);
	          DB::table('property')
	            ->where('id','=',$id)
	            ->update($fieldsimg1);
	        }
	        $proimg2 = Input::file('photo2');
	        if($proimg2)
	            {
	          $fieldsimg2= array(
				'photo2'=>$this->ImageCrop('photo1','photos','200','200',''),
				'ph2title' =>Input::get('title2')
			   	);
	          DB::table('property')
	            ->where('id','=',$id)
	            ->update($fieldsimg2);
	        }
	        $proimg3 = Input::file('photo3');
	        if($proimg3)
	            {
	          $fieldsimg3= array(
				'photo3'=>$this->ImageCrop('photo3','photos','200','200',''),
				'ph3title' =>Input::get('title3')
			   	);
	          DB::table('property')
	            ->where('id','=',$id)
	            ->update($fieldsimg3);
	        }
	         $proimg4 = Input::file('photo4');
	        if($proimg4)
	            {
	          $fieldsimg4= array(
				'photo4'=>$this->ImageCrop('photo4','photos','200','200',''),
				'ph4title' =>Input::get('title4')
			   	);
	          DB::table('property')
	            ->where('id','=',$id)
	            ->update($fieldsimg4);
	        }
	        $proimg5 = Input::file('photo5');
	        if($proimg5)
	            {
	          $fieldsimg5= array(
				'photo5'=>$this->ImageCrop('photo5','photos','200','200',''),
				'ph5title' =>Input::get('title5')
			   	);
	          DB::table('property')
	            ->where('id','=',$id)
	            ->update($fieldsimg5);
	        }

	         $proimg6 = Input::file('photo6');
	        if($proimg6)
	            {
	          $fieldsimg6= array(
				'photo6'=>$this->ImageCrop('photo6','photos','200','200',''),
				'ph6title' =>Input::get('title6')
			   	);
	          DB::table('property')
	            ->where('id','=',$id)
	            ->update($fieldsimg6);
	        }
	        $proimg7 = Input::file('photo7');
	        if($proimg7)
	            {
	          $fieldsimg7= array(
				'photo7'=>$this->ImageCrop('photo7','photos','200','200',''),
				'ph7title' =>Input::get('title7')
			   	);
	          DB::table('property')
	            ->where('id','=',$id)
	            ->update($fieldsimg7);
	        }
	        $proimg8 = Input::file('photo8');
	        if($proimg8)
	            {
	          $fieldsimg8= array(
				'photo8'=>$this->ImageCrop('photo8','photos','200','200',''),
				'ph8title' =>Input::get('title8')
			   	);
	          DB::table('property')
	            ->where('id','=',$id)
	            ->update($fieldsimg8);
	        }
	         $proimg9 = Input::file('photo9');
	        if($proimg9)
	            {
	          $fieldsimg9= array(
				'photo9'=>$this->ImageCrop('photo9','photos','200','200',''),
				'ph9title' =>Input::get('title9')
			   	);
	          DB::table('property')
	            ->where('id','=',$id)
	            ->update($fieldsimg9);
	        }
	        $proimg10 = Input::file('photo10');
	        
	        if($proimg10)
	            {
	          $fieldsimg10= array(
				'photo10'=>$this->ImageCrop('photo10','photos','200','200',''),
				'ph10title' =>Input::get('title10')
			   	);
	          DB::table('property')
	            ->where('id','=',$id)
	            ->update($fieldsimg10);
	        }
	         return Redirect::to('profolio/listing');

		}

		public function getdeletelisting($id)

	{
		$profile = Profolio::find($id);
		 $profile->delete();
		 return Redirect::to('profolio/listing');
	}

	
	public function getAlluser()

	{
		$records = Members::all();

		return View::make('auth.alluser')
		
					->with('record',$records);

	}
	public function getAlluserprofile($id)

	{

		$records = Members::where('id', $id)->get();

		return View::make('auth.alluserprofile')
		
					->with('records',$records);

	}
	public function getSendmessage($id)

	{


		$records = Members::where('user_id', $id)->get();

		return View::make('auth.sendmessage')
		
					->with('records',$records);

	}
	 public  function postSendmessage()
  {	 
 		$fields = array(
 			'from_user'	 =>	Sentry::getUser()->id,
 			'to_user'		 =>	Input::get('to'),
 			'subject'		 =>	Input::get('subject'),
 			'body'			 =>	Input::get('body'),
      		'created_at' => date("Y-m-d H:i:s"),
 		);

 		DB::table('inbox')->insert($fields);

    
 	return Redirect::to('dashboard/alluser');
  }

}

