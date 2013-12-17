<?php

Class Agency extends Eloquent {

	        /**
         * The database table used by the model.
         *
         * @var string
         */
        protected $table ='Agencystaff';


        public function getAgencyName($id)
    {  


        $record = AgencyName::where('user_id','=',$id)->get();
         foreach($record as $records )
        {
          
          return $records->agency_name;

        }
    }
         
          public function getName($id)
        {  
        $record = AgencyName::where('user_id','=',$id)->get();
         foreach($record as $records )
        {
          
          return $records->name;

        }
    }
        
}