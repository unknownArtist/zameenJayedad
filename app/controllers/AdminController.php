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

		 	return View::make('admin.main');
		 		
	}
	public function getactivation($id)
	{
			
		 	DB::table('users')
				->where('id','=',$id)
				->update(
    		array(
    			'activated' =>1,
    		));
			$records = User::where('id',$id)->get();
		 		 foreach ($records as $record)
		 	{
		 		$email= $record->email;

		 	}	
		 	
		 	$URL ="Your Account is Activated";
			 $this->sendTo($email,array('activationCode'=>$URL));
			return Redirect::to('dashboard/admin/main');
		 		
	}
	public function getdeactivation($id)
	{

		 	
		 	DB::table('users')
				->where('id','=',$id)
				->update(
    		array(
    			'activated' =>0,
    		));
			return Redirect::to('dashboard/admin/main');
		 		
	}
	public function getNews()
	{

		 	return View::make('admin.new');
		 		
	}
	public function postNews()
	{
		
		 	$fields = array(
		            'title'        => Input::get('title'),
		            'description' 	       => Input::get('description')
			       );
   

	       
		        $rules = array(
		            
		            'title'    => 'required',
		             'description'    => 'required'
		      	 );
		        $v = Validator::make($fields, $rules);
			        if ($v->fails()) 
			        {
			        	return Redirect::to('dashboard/admin/news')->with('errors',$v);
			        }
			        	
			 		 	DB::table('News')->insert($fields);
			           

			        return Redirect::to('dashboard/admin/news')->with('errors','successfully Added');
					
	}
	public function getlatestnews()
	{

		 	return View::make('admin.Allnews');
		 		
	}
	public function getedit($id)
	{
			$latestnews =  Slide::Where('id', $id)
                    
          			->get(); 
		 	return View::make('admin.editnew')
		 	->with('latestnews',$latestnews);
		 		
	}
	public function postedit($id)
	{
		$fields = array(
			'title' => Input::get('title'),
		   'description' => Input::get('description')
		   
		   );

		 DB::table('News')
            ->where('id','=',$id)
            ->update($fields);
            return Redirect::to('dashboard/admin/latestnews');
		 		
	}
	public function getdelete($id)

	{
		$profile = Slide::find($id);
		 $profile->delete();
		 return Redirect::to('dashboard/admin/latestnews');
	}
	public function getJobs()
	{

		 	return View::make('admin.job');
		 		
	}
	public function postJobs()
	{
		
		 	$fields = array(
		            'title'        => Input::get('title'),
		            'jobsname' 	    => Input::get('jobsname'),
		            'jobsname1'     => Input::get('jobsname1'),
		            'jobsname2' 	    => Input::get('jobsname2'),
		            'jobsname3'     => Input::get('jobsname3'),
		            'jobsname4' 	    => Input::get('jobsname4'),
		            'jobsname5'     => Input::get('jobsname5'),
		            'jobsname6' 	    => Input::get('jobsname6'),
		            'jobsname7'     => Input::get('jobsname7'),
		             'jobsname8'     => Input::get('jobsname8'),
		            'jobsname9' 	    => Input::get('jobsname9'),
		            'jobsname10'     => Input::get('jobsname10'),
			       );
   

	       
		        $rules = array(
		            
		            'title'    => 'required',
		             'jobsname'    => 'required'
		      	 );
		        $v = Validator::make($fields, $rules);
			        if ($v->fails()) 
			        {
			        	return Redirect::to('dashboard/admin/jobs')->with('errors',$v);
			        }
			        	
			 		 	DB::table('Jobs')->insert($fields);
			           

			        return Redirect::to('dashboard/admin/jobs')->with('errors','successfully Added');
					
	}
	public function getAlljobs()
	{

		 	return View::make('admin.alljobs');
		 		
	}
	public function geteditjobs($id)
	{
			$latestnews =  Career::Where('id', $id)
                    
          			->get(); 
		 	return View::make('admin.editjobs')
		 	->with('latestnews',$latestnews);
		 		
	}
	public function posteditjobs($id)
	{
		$fields = array(
			'title' => Input::get('title'),
		   'jobsname' 	    => Input::get('jobsname'),
		    'jobsname1'     => Input::get('jobsname1'),
		    'jobsname2' 	    => Input::get('jobsname2'),
		    'jobsname3'     => Input::get('jobsname3'),
		    'jobsname4' 	    => Input::get('jobsname4'),
		    'jobsname5'     => Input::get('jobsname5'),
		    'jobsname6' 	    => Input::get('jobsname6'),
		    'jobsname7'     => Input::get('jobsname7'),
		     'jobsname8'     => Input::get('jobsname8'),
		    'jobsname9' 	    => Input::get('jobsname9'),
		    'jobsname10'     => Input::get('jobsname10'),
		   
		   );

		 DB::table('Jobs')
            ->where('id','=',$id)
            ->update($fields);
            return Redirect::to('dashboard/admin/alljobs');
		 		
	}
	public function getdeletejobs($id)

	{
		$profile = Career::find($id);
		 $profile->delete();
		 return Redirect::to('dashboard/admin/alljobs');
	}
	public function getlisting()

	{
	$records = DB::table('property')->orderBy('id', 'desc')->get();
					$users = DB::table('property')->count();
					return View::make('admin.listing', compact('records','users'));
	}
		 		
	}

