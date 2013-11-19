<?php

class EmailController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		return View::make('emails.index');
	}

	public function getEmailAlert()

	{
					return View::make('emails.emailalert')
					->with('alert', Config::get('listconfig.alert'))
					->with('price', Config::get('listconfig.price'))
					->with('beds', Config::get('listconfig.beds'))
					->with('area', Config::get('listconfig.area'))
					->with('baths', Config::get('listconfig.baths'))
					->with('Finance', Config::get('listconfig.Finance'))
					->with('Occupancy', Config::get('listconfig.Occupancy'))
					->with('Ownership', Config::get('listconfig.Ownership'));
					
				
					
	}



	public function postEmailAlert()

	{
			$fields = array(
			            'receive_alert'    => Input::get('receive_alert_on'),
			            'Property_Type' 	  => Input::get('houses'),
			            						 Input::get('flats'),
			            						 Input::get('upper_p'),
			            						 Input::get('lower_p'),
			            						 Input::get('f_house'),
			            						 Input::get('rooms'),
			            						 Input::get('residential'),
			            						 Input::get('agricultural_land'),
			            						 Input::get('commercial'),
			            						 Input::get('offices'),
			            						 Input::get('shops'),
			            						 Input::get('warehouses'),
			            						 Input::get('factories'),
			            						 Input::get('buildings'),
			            						Input::get('others'),

			            'purpose' 		      => Input::get('purpose'),
			            'price' 		      => Input::get('price'),
			            'beds' 			      => Input::get('beds'),
			            'location' 			  => Input::get('location'),
			            'keyword' 		      => Input::get('keyword'),
			            'covered_area' 		  => Input::get('covered_area'),
			            'baths' 		      => Input::get('baths'),
			            'estate_agent'        => Input::get('estate_agent'),
			            'finance_available'   => Input::get('finance_available'),
			            'occupanc_status'     => Input::get('occupanc_status'),
			            'ownership_status'    => Input::get('ownership_status')
			            );
            
			$rules = array(
		            'receive_alert'        => 'required',
		            'Property_Type'           => 'required',
		            'purpose' 	              => 'required',
		            'beds'                    => 'required',
		            'location'                => 'required',
		            'keyword'                 => 'required',
		            'covered_area' 	          => 'required',
		            'baths'                   => 'required',
		            'estate_agent'            => 'required',
		            'finance_available'       => 'required',
		            'occupanc_status'         => 'required',
		            'ownership_status'        => 'required',
		           
		        );

		    $v = Validator::make($fields, $rules);
			        if ($v->fails()) 
			        {
			        	return Redirect::to('emailalert')->with('errors',$v);
			        }
			        $user_id=Sentry::getUser()->id;
			        print_r($user_id);
			        die();
			        
						$Emails = new Emails();
			            $Emails->receive_alert      = $fields['receive_alert'];
			            $Emails->Property_Type         = $fields['Property_Type'];
			            $Emails->purpose               = $fields['purpose'];
			            $Emails->beds                  = $fields['beds'];
			            $Emails->location              = $fields['location'];
			            $Emails->keyword               = $fields['keyword'];
			            $Emails->covered_area          = $fields['covered_area'];
			            $Emails->baths                 = $fields['baths'];
			            $Emails->estate_agent          = $fields['estate_agent'];
			            $Emails->finance_available     = $fields['finance_available'];
			            $Emails->occupanc_status       = $fields['occupanc_status'];
			            $Emails->ownership_status      = $fields['ownership_status'];
			            $Emails->save();

			            return Redirect::to('emailalert')->with('errors','successfully Added');        		
	}	


	public function geteditemailalert()
	{
					return View::make('emails.editemailalert')
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