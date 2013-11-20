<?php

class EmailController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		$user_id =Sentry::getUser()->id;

		$records = DB::table('email_alert')->where('user_id', $user_id)->get();


        return View::make('emails.index', compact('records'));

		
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

			// $properyType = Input::get('Property_Type');
			// foreach($properyType as $key=>$value)
			// {
			// 	DB::table('emailAlert_property_type')->insert(
			// 		array(
			// 			'email_alert_id'	=>   $id,
			// 			'pt'	=> $value
			// 			)
			// 		);
			// }
			// echo $pt;
			// die();
			$fields = array(
			            'receive_alert'    => Input::get('receive_alert_on'),
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
		            'purpose' 	             => 'required',
		            'beds'                    => 'required',
		            'price'                   => 'required',
		            'location'                => 'required',
		            'keyword'                 => 'required',
		            'covered_area' 	          => 'required',
		            'baths'                   => 'required',
		            'estate_agent'            => 'required',
		            'finance_available'       => 'required',
		            'occupanc_status'         => 'required',
		            'ownership_status'        => 'required',
		           
		        );
			
			// $properyType = Input::get('Property_Type');
			// foreach($properyType as $key=>$value)
			// {
			// 	echo $value."<br>"; 
			// }
		    $v = Validator::make($fields, $rules);
			        if ($v->fails()) 
			        {
<<<<<<< HEAD
			        	return Redirect::to('user/email/alert/create')->withErrors($v);
=======
			        	return Redirect::to('user/email/alert/create')->withErrors('errors',$v);
>>>>>>> 85d1ecc24048f6c839a98dac0708397df8d932cf
			        }
			        $user_id = Sentry::getUser()->id;
			         	$id = DB::table('email_alert')->insertGetId(array('user_id'=>$user_id,
			         													'receive_alert' => $fields['receive_alert'],
			         		                   							'purpose'=>$fields['purpose'],
			         		                   							'beds'=>$fields['beds'],
			         		                   							'location'=>$fields['location'],
			         		                   							'keyword'=>$fields['keyword'],
			         		                   							'covered_area'=>$fields['covered_area'],
			         		                   							'finance_available'=>$fields['finance_available'],
			         		                   							'occupanc_status'=>$fields['occupanc_status'],
			         		                   							'ownership_status'=>$fields['ownership_status'],
			         		                   							'finance_available'=>$fields['finance_available'],
			         		                   							'occupanc_status'=>$fields['occupanc_status']
			         		                   							));
<<<<<<< HEAD
			         	  return Redirect::to('user/email/alert/create')->with('message','successfully Added');
=======
			         	
>>>>>>> 85d1ecc24048f6c839a98dac0708397df8d932cf
	
						// $Emails = new Emails();
						// $Emails->user_id               = $user_id;
			   //          $Emails->receive_alert         = $fields['receive_alert'];
			   //          $Emails->Property_Type         = $fields['Property_Type'];
			   //          $Emails->purpose               = $fields['purpose'];
			   //          $Emails->beds                  = $fields['beds'];
			   //          $Emails->location              = $fields['location'];
			   //          $Emails->keyword               = $fields['keyword'];
			   //          $Emails->covered_area          = $fields['covered_area'];
			   //          $Emails->baths                 = $fields['baths'];
			   //          $Emails->estate_agent          = $fields['estate_agent'];
			   //          $Emails->finance_available     = $fields['finance_available'];
			   //          $Emails->occupanc_status       = $fields['occupanc_status'];
			   //          $Emails->ownership_status      = $fields['ownership_status'];
			   //          $Emails->save();

<<<<<<< HEAD
			                    		
=======
			            return Redirect::to('user/email/alert/create')->with('message','successfully Added');        		
>>>>>>> 85d1ecc24048f6c839a98dac0708397df8d932cf
	}	


	public function getEditEmailAlert($id)
	{

					return View::make('emails.editemailalert')
					->with('alert', Config::get('listconfig.alert'))
					->with('price', Config::get('listconfig.price'))
					->with('beds', Config::get('listconfig.beds'));

                $records = DB::table('email_alert')->where('id', $id)->get();
                
                    return View::make('emails.editemailalert', compact('records'))
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