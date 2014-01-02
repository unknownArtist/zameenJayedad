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
			//  foreach($properyType as $key=>$value)
			//  {
			// 	echo $value; 
				
			// }
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
		            'purpose' 	           => 'required',
		            'beds'                 => 'required',
		            'price'                => 'required',
		            'location'             => 'required',
		            'keyword'                => 'required',
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

			        return Redirect::to('user/email/alert/create')->withErrors($v);
			        }
			        $user_id = Sentry::getUser()->id;
			      $id = DB::table('email_alert')->insertGetId(array('user_id'=>$user_id,
			         							'receive_alert' => $fields['receive_alert'],
			         		                   	'purpose'=>$fields['purpose'],
			         		                   	'beds'=>$fields['beds'],
			         		                   	'baths'=>$fields['baths'],
			         		                   	'estate_agent'=>$fields['estate_agent'],
			         		                   	'location'=>$fields['location'],
			         		                   	'price'=>$fields['price'],
			         		                   	'keyword'=>$fields['keyword'],
			         		                   	'covered_area'=>$fields['covered_area'],
			         		                   	'finance_available'=>$fields['finance_available'],
			         		                   	'occupanc_status'=>$fields['occupanc_status'],
			         		                   	'ownership_status'=>$fields['ownership_status'],
			         		                   	'finance_available'=>$fields['finance_available'],
			         		                   	'occupanc_status'=>$fields['occupanc_status']
			         		                   	));


					 $properyType = Input::get('Property_Type');
					
					  foreach($properyType as $key=>$value)
					  {
					  	
						$ptr=DB::table('Emailalert_pt')->insert(
								array(
									'email_alert_id'	=>   $id,
										'Emailalert_pt'	=> $value)
							 		);
							 }
						

			         	  return Redirect::to('user/email/alerts')->with('message','successfully Added');

	}	


	public function getEditEmailAlert($id)
	{

                $records = DB::table('email_alert')->where('id', $id)->get();
               
                
              
                return View::make('emails.editemailalert', compact('records'))
                    ->with('alert', Config::get('listconfig.alert'))
					->with('price', Config::get('listconfig.price'))
				    ->with('beds', Config::get('listconfig.beds'))

					->with('area', Config::get('listconfig.area'))
					->with('baths', Config::get('listconfig.baths'))
					->with('Finance', Config::get('listconfig.Finance'))
					->with('Occupancy', Config::get('listconfig.Occupancy'))
					->with('property_type',Emailpt::where('email_alert_id',$id)->get())
					->with('Ownership', Config::get('listconfig.Ownership'));
	}
	public function postEditEmailAlert($id)
	{
		echo $id;
		die();
	}
	public function getDeleteEmailAlert($id)
	{
		$emailalert = Emails::find($id);
		$emailalert->delete();
		return Redirect::to('user/email/alerts');
	}
}