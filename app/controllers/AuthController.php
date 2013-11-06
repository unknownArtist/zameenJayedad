<?php

class AuthController extends BaseController {

				/**
				 * Display a listing of the resource.
				 *
				 * @return Response
				 */
				public function getRegister()
				{
					return View::make('auth.register');
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
			    echo 'Login field is required.';
			}
			catch (Cartalyst\Sentry\Users\PasswordRequiredException $e)
			{
			    echo 'Password field is required.';
			}
			catch (Cartalyst\Sentry\Users\UserExistsException $e)
			{
			    echo 'User with this login already exists.';
			}



		  $fields = array(
            'phone' => Input::get('phone'),
            'cell' => Input::get('cell'),
            'fax' => Input::get('fax'),
            'address' => Input::get('address'),
            'zip' => Input::get('zip')
            // 'country' => Input::get('country'),
            // 'roles' => Input::get('roles'),
            // 'terms' => Input::get('terms'),
            // 'newsletters' => Input::get('newsletters')
        );
		 // print_r($fields);
		 // die();
        $rules = array(
            'phone' 	=> 'required',
            'cell'      => 'required',
            'address' 	=> 'required'
           
        );
        $v = Validator::make($fields, $rules);
        if ($v->fails()) {
            return "try again";
            }
 		 // Members::create($fields);
            $members = new Members();
            $members->phone = $fields['phone'];
            $members->cell = $fields['cell'];
            $members->address = $fields['address'];
            $members->zip = $fields['zip'];

            $members->save();

        return "completed";

}

		public function getlogin()
				{
					return View::make('auth.login');
				}

		public function postlogin()
				{
				try
{
      // Find the user using the user id
    $user = Sentry::findUserById(1);

    print_r($user);
    die();

    // Log the user in
    Sentry::login($user, false);
}
catch (Cartalyst\Sentry\Users\LoginRequiredException $e)
{
    echo 'Login field is required.';
}
catch (Cartalyst\Sentry\Users\UserNotActivatedException $e)
{
    echo 'User not activated.';
}
catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
{
    echo 'User not found.';
}

// Following is only needed if throttle is enabled
catch (Cartalyst\Sentry\Throttling\UserSuspendedException $e)
{
    $time = $throttle->getSuspensionTime();

    echo "User is suspended for [$time] minutes.";
}
catch (Cartalyst\Sentry\Throttling\UserBannedException $e)
{
    echo 'User is banned.';
}
				}		
}