<?php
class MessageCentreController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		return View::make('message.index');

		$user = Sentry::getUser();
		
		$inbox = Inbox::where('to_user','=',$user->id)
	                  ->where('read_status','=',1)
	                  ->orderBy('id','DESC')
                      ->get();

            
     if ($inbox->isEmpty() )
		{
			
			return Redirect::to('user/message/create');
		}
        
            
         
          foreach($inbox as $inboxs)
		 {     $tem=$inboxs->from_user;

		 	}
		 	
		$emails=Profile::where('user_id','=',$tem)
               ->get();
               
            foreach($emails as $email)
		 	{    
		 	 $name=$email->name;

		 		$plid=$email->id;
				}

		 	$plimg=ProfileImage::where('player_profile_id','=',$plid)
               ->get();
               
              if($plimg->isEmpty())
              {
              	$pic='download.jpg';
              }
              else
              {
                foreach($plimg as $plimgs)
		 	{     

		 	$pic=$plimgs->player_profile_videos;

			 }
			 }
		 	$notification = Inbox::where('to_user','=',$user->id)
	                  ->where('notification','=',1)
	                  ->orderBy('id','DESC')
                      ->count();
                      return View::make('message.index')
					->with('inboxs',$inbox)
					->with('email',$name)
					->with('events',$events)
					->with('pic',$pic)
					->with('notifications',$notification);
			
	}

	public function getmessagecompose()
	{

		$nam = Sentry::getUser()->id;
		 	
		 
		$teams_id = Agency::where('agency_id','=',$nam)->get();
		 
		foreach ($teams_id as $team_id)
		 	{
		 		$my_teamid= $team_id->agency_id;
		 		
		 	
	}
		 	
		 
$profiles = AgencyName::where('id','=',$my_teamid)->get();
print_r($profiles);
die();

		$allTeamsMember = array();
		foreach($profiles as $profile)
		{
			if($profile->user_id != Sentry::getUser()->id)
			{
				$allTeamsMember[$profile->user_id] = $profile->agency_name;
				
			}
			print_r($allTeamsMember) ;
			die();

				
		}
        return View::make('message.messagecompose')->with('teams',$allTeamsMember);
	}

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
 	return Redirect::to('user/messages');
  }
 
  public function  getReadmessage($id)
  {	
  	$inbox = Inbox::where('id','=',$id)
	                	->get();
						$events = Calender::all(); 

	DB::table('inbox')
            ->where('to_user', Sentry::getUser()->id)
            ->where('id', $id)
            ->update(array('notification' => 0));
  	 return View::make('message.readmessage')
	 				->with('events',$events)
  	 				->with('inboxs',$inbox);
  }
  public function getReply()
  { 
    $id = Request::segment(3);
    $inbox_id=Request::segment(4);
    

    $profiles = Profile::where('user_id','=',$id)
               ->get();
			   $events = Calender::all(); 
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

		
 		return View::make('message.reply')->with('teams',$allTeamsMember)->with('events',$events);
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
   return Redirect::to('user/messages');
  }
  public function getDelete()
	{
		 $id = Request::segment(3);
		 $inbox = Inbox::find($id);
		 $inbox->delete();
			//DB::table('rinks')->where('id','=',Request::segment(3))->delete();
		return Redirect::to('user/messages')->with('message','Record deleted successfully');
	}
	public function getmessagecreate()

	{
		$events = Calender::all(); 
	return View::make('message.create')->with('events',$events);
	}

	public static function getUnreadMessages()
	{
		return  Inbox::where('to_user','=',Sentry::getUser()->id)
	                  ->where('notification','=',1)
	                  ->orderBy('id','DESC')
                      ->count();
	}





}
