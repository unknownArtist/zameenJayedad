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
			         		                   	'occupanc_status'=>$fields['occupanc_status'],
			         		                   	'created_at' => date("Y-m-d H:i:s")
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
	
	public function getTestAlert()
	{
		$date = date("Y-m-d");
		
			         		                  

		 $records = Emails::all();

		foreach ($records as $record)
		 	{
		 		$receive_alert = $record->receive_alert;
		 	}
		 	if($receive_alert = 'Daily')
		 	{
		 	$records = Emails::where('receive_alert', $receive_alert)->get();
		 	foreach ($records as $record)
		 	{
		 		$id = $record->user_id;
		 		
		 		
		 		
		 	
		 	$emls =User::where('id', $id)->get();
		 	foreach ($emls as $eml)
		 	{
		 		$adr = $eml->email;
		 	
		 		
		 	}
		 	
			if($date=$date) 
			{ 
				$property = Profolio::where('date_at', $date)->get();
				if ($property->isEmpty() )
		{
			
			echo "no property added";
		}
			else
			{
				$to =$adr;
				$subject = 'New property Add on zameen jayedad';
				$message = null;
				foreach ($property as $propertys)
				{
		 			$message .=  '<html>
			
			<body>
			<table width="740px;" class="MsoTableLightShadingAccent1" border="1"  cellspacing="0" cellpadding="0" style="color:#333; border-collapse:collapse;border:none; font-family: Helvetica, Arial, sans-serif; text-align: center; width=740px;">
           
			<tr>
			<td align="center" width="250px;" style="border: 1px solid #333; width=150px; transition: all 0.3s; background: #FAFAFA; text-align: center; " ><b> App Type </b></td>
			<td align="center" style="border: 1px solid #333; width=370px; transition: all 0.3s; background: #FAFAFA; text-align: center; " >' . $propertys->property_type .'</td>
			</tr>

			<tr>
			<td align="center" width="250px;" style="border: 1px solid #333; width=150px; transition: all 0.3s; background: #FAFAFA; text-align: center; " ><b> purpose </b></td>
			<td align="center" style="border: 1px solid #333; width=370px; transition: all 0.3s; background: #FAFAFA; text-align: center; " >' .$propertys->purpose .'</td>
			</tr>
			<tr>
			<td align="center" width="250px;" style="border: 1px solid #333; width=150px; transition: all 0.3s; background: #FAFAFA; text-align: center; " ><b> Address </b></td>
			<td align="center" style="border: 1px solid #333; width=370px; transition: all 0.3s; background: #FAFAFA; text-align: center; " >' .$propertys->location.'</td>
			</tr>
			<tr>
			<td align="center" width="250px;" style="border: 1px solid #333; width=150px; transition: all 0.3s; background: #FAFAFA; text-align: center; " ><b> photo </b></td>
			<td align="center" style="border: 1px solid #333; width=370px; transition: all 0.3s; background: #FAFAFA; text-align: center; " ><img width="200" height="150" src="http://zameenjayedad.com.pk/uploads/photos/'.$propertys->photo.'"</td>
			</tr>
			<tr>
			<td align="center" width="250px;" style="border: 1px solid #333; width=150px; transition: all 0.3s; background: #FAFAFA; text-align: center; " ><b> App Logo </b></td>
			<td align="center" style="border: 1px solid #333; width=370px; transition: all 0.3s; background: #FAFAFA; text-align: center; " > <a href="http://zameenjayedad.com.pk/dashboard/listing/guest/'.$propertys->id.'">Detail</a></td>
			</tr>
          
			
			
			</table>
			</body>
			</html> <br/>';

		}

		 					

		 // $URL ='Property type :'.$propertys->property_type.'<br/>'.'purpose :'.$propertys->purpose.'<br/>'.'location :'.$propertys->location.'<br/>'
			//                 .'budget :'.$propertys->budget.'Area :'.$propertys->l_area.'<br/>'.'Contact Person :'.$propertys->contact_p.'<br/>'
			//                 .'Cell Num :'.$propertys->cell.'<br/>'.'Email :'.$propertys->email;

			//  $this->sendTo($adr,array('activationCode'=>$URL));
		 			   
		 			   $headers = "From: " . strip_tags('zameenjayedad.com') . "\r\n";
						$headers .= "Reply-To: ". strip_tags('zameenjayedad.com') . "\r\n";
						$headers .= "MIME-Version: 1.0\r\n";
						$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
						mail($to, $subject, $message, $headers);
		 			    	
					}

		 		       }
		 		   }
		 		   }
		 		}
				
				

	public function getWeekly()

	{
		
		$records = Emails::all();

		foreach ($records as $record)
		 	{
		 		$receive_alert = $record->receive_alert;
		 	}
		 	if($receive_alert = 'Weekly')
		 	{
		 	$records = Emails::where('receive_alert', $receive_alert)->get();
		 	foreach ($records as $record)
		 	{
		 		$id = $record->user_id;
		 		
		 		
		 		
		 	
		 	$emls =User::where('id', $id)->get();
		 	foreach ($emls as $eml)
		 	{
		 		$adr = $eml->email;
		 	
		 		
		 	}
		 	$date = date("Y-m-d");
		$lastWeek = date("Y-m-d", strtotime("-7 days"));
	
		 	$property = Profolio::whereBetween('date_at', array($lastWeek, $date))->get();
		 	if ($property->isEmpty() )
		{
			
			echo "no property added";
		}
			else
			{
		 	$to =$adr;
				$subject = 'New property Add on zameen jayedad';
				$message = null;
				foreach ($property as $propertys)
				{
		 			$message .=  '<html>
			
			<body>
			<table width="740px;" class="MsoTableLightShadingAccent1" border="1"  cellspacing="0" cellpadding="0" style="color:#333; border-collapse:collapse;border:none; font-family: Helvetica, Arial, sans-serif; text-align: center; width=740px;">
           
			<tr>
			<td align="center" width="250px;" style="border: 1px solid #333; width=150px; transition: all 0.3s; background: #FAFAFA; text-align: center; " ><b> App Type </b></td>
			<td align="center" style="border: 1px solid #333; width=370px; transition: all 0.3s; background: #FAFAFA; text-align: center; " >' . $propertys->property_type .'</td>
			</tr>

			<tr>
			<td align="center" width="250px;" style="border: 1px solid #333; width=150px; transition: all 0.3s; background: #FAFAFA; text-align: center; " ><b> purpose </b></td>
			<td align="center" style="border: 1px solid #333; width=370px; transition: all 0.3s; background: #FAFAFA; text-align: center; " >' .$propertys->purpose .'</td>
			</tr>
			<tr>
			<td align="center" width="250px;" style="border: 1px solid #333; width=150px; transition: all 0.3s; background: #FAFAFA; text-align: center; " ><b> Address </b></td>
			<td align="center" style="border: 1px solid #333; width=370px; transition: all 0.3s; background: #FAFAFA; text-align: center; " >' .$propertys->location.'</td>
			</tr>
			<tr>
			<td align="center" width="250px;" style="border: 1px solid #333; width=150px; transition: all 0.3s; background: #FAFAFA; text-align: center; " ><b> photo </b></td>
			<td align="center" style="border: 1px solid #333; width=370px; transition: all 0.3s; background: #FAFAFA; text-align: center; " ><img width="200" height="150" src="http://zameenjayedad.com.pk/uploads/photos/'.$propertys->photo.'"</td>
			</tr>
			<tr>
			<td align="center" width="250px;" style="border: 1px solid #333; width=150px; transition: all 0.3s; background: #FAFAFA; text-align: center; " ><b> App Logo </b></td>
			<td align="center" style="border: 1px solid #333; width=370px; transition: all 0.3s; background: #FAFAFA; text-align: center; " > <a href="http://zameenjayedad.com.pk/dashboard/listing/guest/'.$propertys->id.'">Detail</a></td>
			</tr>
          
			
			
			</table>
			</body>
			</html> <br/>';

		}
		
		 					

		 // $URL ='Property type :'.$propertys->property_type.'<br/>'.'purpose :'.$propertys->purpose.'<br/>'.'location :'.$propertys->location.'<br/>'
			//                 .'budget :'.$propertys->budget.'Area :'.$propertys->l_area.'<br/>'.'Contact Person :'.$propertys->contact_p.'<br/>'
			//                 .'Cell Num :'.$propertys->cell.'<br/>'.'Email :'.$propertys->email;

			//  $this->sendTo($adr,array('activationCode'=>$URL));
		 			   
		 			   $headers = "From: " . strip_tags('zameenjayedad.com') . "\r\n";
						$headers .= "Reply-To: ". strip_tags('zameenjayedad.com') . "\r\n";
						$headers .= "MIME-Version: 1.0\r\n";
						$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
						mail($to, $subject, $message, $headers);
		 			    	
		}
		 }
		 }

		


	}
	
	public function getMonthly()

	
	{
		
		$records = Emails::all();

		foreach ($records as $record)
		 	{
		 		$receive_alert = $record->receive_alert;
		 	}
		 	if($receive_alert = 'Monthly')
		 	{
		 	$records = Emails::where('receive_alert', $receive_alert)->get();
		 	foreach ($records as $record)
		 	{
		 		$id = $record->user_id;
		 		
		 		
		 		
		 	
		 	$emls =User::where('id', $id)->get();
		 	foreach ($emls as $eml)
		 	{
		 		$adr = $eml->email;
		 	
		 		
		 	}
		 	$date = date("Y-m-d");
		$lastWeek = date("Y-m-d", strtotime("-30 days"));
	
		 	$property = Profolio::whereBetween('date_at', array($lastWeek, $date))->get();
		 	if ($property->isEmpty() )
		{
			
			echo "no property added";
		}
			else
			{
		 	
		 			$to =$adr;
				$subject = 'New property Add on zameen jayedad';
				$message = null;
				foreach ($property as $propertys)
				{
		 			$message .=  '<html>
			
			<body>
			<table width="740px;" class="MsoTableLightShadingAccent1" border="1"  cellspacing="0" cellpadding="0" style="color:#333; border-collapse:collapse;border:none; font-family: Helvetica, Arial, sans-serif; text-align: center; width=740px;">
           
			<tr>
			<td align="center" width="250px;" style="border: 1px solid #333; width=150px; transition: all 0.3s; background: #FAFAFA; text-align: center; " ><b> App Type </b></td>
			<td align="center" style="border: 1px solid #333; width=370px; transition: all 0.3s; background: #FAFAFA; text-align: center; " >' . $propertys->property_type .'</td>
			</tr>

			<tr>
			<td align="center" width="250px;" style="border: 1px solid #333; width=150px; transition: all 0.3s; background: #FAFAFA; text-align: center; " ><b> purpose </b></td>
			<td align="center" style="border: 1px solid #333; width=370px; transition: all 0.3s; background: #FAFAFA; text-align: center; " >' .$propertys->purpose .'</td>
			</tr>
			<tr>
			<td align="center" width="250px;" style="border: 1px solid #333; width=150px; transition: all 0.3s; background: #FAFAFA; text-align: center; " ><b> Address </b></td>
			<td align="center" style="border: 1px solid #333; width=370px; transition: all 0.3s; background: #FAFAFA; text-align: center; " >' .$propertys->location.'</td>
			</tr>
			<tr>
			<td align="center" width="250px;" style="border: 1px solid #333; width=150px; transition: all 0.3s; background: #FAFAFA; text-align: center; " ><b> photo </b></td>
			<td align="center" style="border: 1px solid #333; width=370px; transition: all 0.3s; background: #FAFAFA; text-align: center; " ><img width="200" height="150" src="http://zameenjayedad.com.pk/uploads/photos/'.$propertys->photo.'"</td>
			</tr>
			<tr>
			<td align="center" width="250px;" style="border: 1px solid #333; width=150px; transition: all 0.3s; background: #FAFAFA; text-align: center; " ><b> App Logo </b></td>
			<td align="center" style="border: 1px solid #333; width=370px; transition: all 0.3s; background: #FAFAFA; text-align: center; " > <a href="http://zameenjayedad.com.pk/dashboard/listing/guest/'.$propertys->id.'">Detail</a></td>
			</tr>
          
			
			
			</table>
			</body>
			</html> <br/>';

		}

		 					

		 // $URL ='Property type :'.$propertys->property_type.'<br/>'.'purpose :'.$propertys->purpose.'<br/>'.'location :'.$propertys->location.'<br/>'
			//                 .'budget :'.$propertys->budget.'Area :'.$propertys->l_area.'<br/>'.'Contact Person :'.$propertys->contact_p.'<br/>'
			//                 .'Cell Num :'.$propertys->cell.'<br/>'.'Email :'.$propertys->email;

			//  $this->sendTo($adr,array('activationCode'=>$URL));
		 			   
		 			   $headers = "From: " . strip_tags('zameenjayedad.com') . "\r\n";
						$headers .= "Reply-To: ". strip_tags('zameenjayedad.com') . "\r\n";
						$headers .= "MIME-Version: 1.0\r\n";
						$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
						mail($to, $subject, $message, $headers);
		 			    	
		}
		 }
		 }

		


	}

	public function getAsap()

	
	{
		
		$records = Emails::all();

		foreach ($records as $record)
		 	{
		 		$receive_alert = $record->receive_alert;
		 	}
		 	if($receive_alert = 'ASAP')
		 	{
		 	$records = Emails::where('receive_alert', $receive_alert)->get();
		 	foreach ($records as $record)
		 	{
		 		$id = $record->user_id;
		 		
			$emls =User::where('id', $id)->get();
		 	foreach ($emls as $eml)
		 	{
		 		$adr = $eml->email;
		 	
		 		
		 	}
		 	
		 	$property = Profolio::where('asap', 1)->get();
		 	if ($property->isEmpty() )
		{
			
			echo "no property added";
		}
			else
			{
		 	
		 			$to =$adr;
				$subject = 'New property Add on zameen jayedad';
				$message = null;
				foreach ($property as $propertys)
				{
		 			$message .=  '<html>
			
			<body>
			<table width="740px;" class="MsoTableLightShadingAccent1" border="1"  cellspacing="0" cellpadding="0" style="color:#333; border-collapse:collapse;border:none; font-family: Helvetica, Arial, sans-serif; text-align: center; width=740px;">
           
			<tr>
			<td align="center" width="250px;" style="border: 1px solid #333; width=150px; transition: all 0.3s; background: #FAFAFA; text-align: center; " ><b> App Type </b></td>
			<td align="center" style="border: 1px solid #333; width=370px; transition: all 0.3s; background: #FAFAFA; text-align: center; " >' . $propertys->property_type .'</td>
			</tr>

			<tr>
			<td align="center" width="250px;" style="border: 1px solid #333; width=150px; transition: all 0.3s; background: #FAFAFA; text-align: center; " ><b> purpose </b></td>
			<td align="center" style="border: 1px solid #333; width=370px; transition: all 0.3s; background: #FAFAFA; text-align: center; " >' .$propertys->purpose .'</td>
			</tr>
			<tr>
			<td align="center" width="250px;" style="border: 1px solid #333; width=150px; transition: all 0.3s; background: #FAFAFA; text-align: center; " ><b> Address </b></td>
			<td align="center" style="border: 1px solid #333; width=370px; transition: all 0.3s; background: #FAFAFA; text-align: center; " >' .$propertys->location.'</td>
			</tr>
			<tr>
			<td align="center" width="250px;" style="border: 1px solid #333; width=150px; transition: all 0.3s; background: #FAFAFA; text-align: center; " ><b> photo </b></td>
			<td align="center" style="border: 1px solid #333; width=370px; transition: all 0.3s; background: #FAFAFA; text-align: center; " ><img width="200" height="150" src="http://zameenjayedad.com.pk/uploads/photos/'.$propertys->photo.'"</td>
			</tr>
			<tr>
			<td align="center" width="250px;" style="border: 1px solid #333; width=150px; transition: all 0.3s; background: #FAFAFA; text-align: center; " ><b> App Logo </b></td>
			<td align="center" style="border: 1px solid #333; width=370px; transition: all 0.3s; background: #FAFAFA; text-align: center; " > <a href="http://zameenjayedad.com.pk/dashboard/listing/guest/'.$propertys->id.'">Detail</a></td>
			</tr>
          
			
			
			</table>
			</body>
			</html> <br/>';

		}



		 // $URL ='Property type :'.$propertys->property_type.'<br/>'.'purpose :'.$propertys->purpose.'<br/>'.'location :'.$propertys->location.'<br/>'
			//                 .'budget :'.$propertys->budget.'Area :'.$propertys->l_area.'<br/>'.'Contact Person :'.$propertys->contact_p.'<br/>'
			//                 .'Cell Num :'.$propertys->cell.'<br/>'.'Email :'.$propertys->email;

			//  $this->sendTo($adr,array('activationCode'=>$URL));
		 			   
		 			   $headers = "From: " . strip_tags('zameenjayedad.com') . "\r\n";
						$headers .= "Reply-To: ". strip_tags('zameenjayedad.com') . "\r\n";
						$headers .= "MIME-Version: 1.0\r\n";
						$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
						mail($to, $subject, $message, $headers);

						DB::table('property')
			            ->where('asap', 1)
			            ->update(array('asap' => 0));
		 			    	
		}
		 }
		 }

		


	}
	
}