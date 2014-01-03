<?php

class AdminController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function getIndex()
	{
		return View::make('admin.index');
	}
	public function PostAdmin()
	{
		// Set login credentials
	    $credentials = array(
	        'email'    => Input::get('email'),
	        'password' 	  => Input::get('password'),
	    );

	    $rules = array(
	    	'email'		=> 'required',
	    	'password'	=> 'required'
	    );

	    $v = Validator::make($credentials, $rules);
	    	if($v->fails())
	    	{  
	    		return Redirect::to('admin/login')->withErrors($v);
	    	}
	   	$login = DB::table('admin_login')->where('email','=',$credentials['email'])
	   			 		   ->where('password','=',md5($credentials['password']))
	   			  		   ->get();
	   			  		 
	    if($login)
	    {
	    	 return Redirect::to('dashboard/admin/main');
	    }else
	    	{
	    		return Redirect::to('dashboard/admin')->with('errors',"Email or Password is wrong");
	    	}

	}
	public function getMain()
	{
		 // $users = AgentUser::all();
		 // foreach ($users as $user)
		 // 	{
		 // 		$id=$user->agent_id;

		 // 		$records = User::where('id',$id)->get();
		 // 		print_r($records);
		 		
		 // 	}
		 
		return View::make('admin.main');
	}

}