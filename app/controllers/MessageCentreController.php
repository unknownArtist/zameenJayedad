<?php
class MessageCentreController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		

		$user = Sentry::getUser();

		
		$inbox = Inbox::where('to_user','=',$user->id)
	                  ->where('read_status','=',1)
	                  ->orderBy('id','DESC')
                      ->get();

            
    
                      return View::make('message.index')
					->with('inboxs',$inbox);
					
			
	}

	public function getmessagecompose()
	{

		// $user_id = Sentry::getUser()->id;
		// $agencies_id = Agency::where('staff_id','=',$user_id)->get();
		
		// if ($agencies_id->isEmpty() )
		// {
			
		// 	return Redirect::to('dashboard/messages')
		// 	->with('errors','Kindly create an Agency First');
		// }
		// else
		// {

		//  foreach ($agencies_id as $agency_id)
		//  	{
		//  		$my_agencyid= $agency_id->agency_id;
		//  		$owner_id= $agency_id->owner_id;

		 		
		//  	}
		 	
				$profiles = Members::join('users','users.id','=','registration.user_id')
		 					  ->get();;
		 			$allTeamsMember = array();
		foreach($profiles as $profile)
		{
			if($profile->user_id != Sentry::getUser()->id)
			{
				$allTeamsMember[$profile->user_id] = $profile->email;
				
			
		
			}

			}

			
			  
	return View::make('message.messagecompose')->with('teams',$allTeamsMember);	


		 	
		 	
		 	// $profiles = Agency::where('agency_id','=',$my_agencyid)->get();

		 // $profiles = DB::table('agent')->where('agent_id',$owner_id)
		 // 					  ->join('Agencystaff','agent.agent_id','=','Agencystaff.owner_id')
		 // 					  ->get();

		

      
    }
	// }

	 public  function postsendMessage()
  {	 
 		$fields = array(
 			'from_user'	 =>	Sentry::getUser()->id,
 			'to_user'		 =>	Input::get('to'),
 			'subject'		 =>	Input::get('subject'),
 			'body'			 =>	Input::get('body'),
      		'created_at' => date("Y-m-d H:i:s"),
 		);

 		DB::table('inbox')->insert($fields);

    if(Input::get('detail'))
    {
      return Redirect::to('user/messages/'.$fields['from_user'].'/detail/'.Input::get('id'));
    }
 	return Redirect::to('dashboard/messages');
  }
 
  public function  getReadmessage($id)
  {	
  	$inbox = Inbox::where('id','=',$id)
	                	->get();
						

	DB::table('inbox')
            ->where('to_user', Sentry::getUser()->id)
            ->where('id', $id)
            ->update(array('notification' => 0));
  	 return View::make('message.readmessage')
	 				->with('inboxs',$inbox);
  }
  public function getReply()
  { 
    $id = Request::segment(3);
    $inbox_id=Request::segment(4);
    

    $profiles = Agency::where('staff_id','=',$id)
               ->get();
		$allTeamsMember = array();
		foreach($profiles as $profile)
		{
			if($profile->user_id != Sentry::getUser()->id)
			{
				$allTeamsMember[$profile->user_id] = $profile->name;
		
			}
		}
		// DB::table('inbox')
  //           ->where('to_user', Sentry::getUser()->id)
  //           ->where('id', $inbox_id)
  //           ->update(array('notification' => 0));

		
 		return View::make('message.reply')->with('teams',$allTeamsMember);
  }
   public function postReply()
  { 
   $fields = array(
 			'from_user'	 =>	Sentry::getUser()->id,
 			'to_user'		 =>	Input::get('to'),
 			'body'			 =>	Input::get('body'),
 			'subject'        =>Input::get('subject'),
			'created_at' => date("Y-m-d H:i:s"),
 		);

   DB::table('inbox')->insert($fields);
   return Redirect::to('dashboard/messages');
  }
  public function getDelete()
	{
		 $id = Request::segment(3);
		 $inbox = Inbox::find($id);
		 $inbox->delete();
			//DB::table('rinks')->where('id','=',Request::segment(3))->delete();
		return Redirect::to('dashboard/messages')->with('message','Record deleted successfully');
	}
	// public function getmessagecreate()

	// {
	// 	$events = Calender::all(); 
	// return View::make('message.create')->with('events',$events);
	// }

	public static function getUnreadMessages()
	{
		return  Inbox::where('to_user','=',Sentry::getUser()->id)
	                  ->where('notification','=',1)
	                  ->orderBy('id','DESC')
                      ->count();
	}





}
