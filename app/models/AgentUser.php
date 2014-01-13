<?php

Class AgentUser extends Eloquent {

	        /**
         * The database table used by the model.
         *
         * @var string
         */
        protected $table ='agent';

        public function getName($id)
    { 
    	
        $team = Members::where('user_id','=',$id)->get();
        foreach($team as $teams)
        {
            
          return $teams->name;

        }
        }
}