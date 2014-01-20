<?php

Class Members extends Eloquent {

	        /**
         * The database table used by the model.
         *
         * @var string
         */
        protected $table ='registration';

    public function getImage($id)
    { 
    	
        $team = AgentUser::where('agent_id','=',$id)->get();
        foreach($team as $teams)
        {
            
          return $teams->agency_name;

        }
        }

    public function getEmail($id)
    { 
        
        $team = User::where('id','=',$id)->get();
        foreach($team as $teams)
        {
            
          return $teams->email;

        }
        }
   
        
}