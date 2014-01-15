<?php

class DashboardController extends BaseController {



	public function getIndex()
	{

		$users = DB::table('property')
                    ->orderBy('id', 'desc')
                    ->take(10)
          			->get();
		
		return View::make('dashboard.index')
		->with('users', $users);
				   
	}
	public function getGuest()
	{
		$users = DB::table('property')
                    ->orderBy('id', 'desc')
                    ->take(10)
          			->get();
		return View::make('dashboard.guest')
		->with('users', $users);	
		
	}
	public function postIndex()
	{
		return "Post function";
	}

	public function getListing($id)
	
	{
		$record = DB::table('property')->where('id',$id)
                 	->get();
        PropertyHits::insert(array(
        	'property_id'	=> $id,
        	'hits_on'		=> date('Y-m-d')
        	));

		return View::make('dashboard.single')

		->with('record', $record);
	}
	
	public function getListingguest($id)
	
	{
		$record = DB::table('property')->where('id',$id)
                 	->get();
        PropertyHits::insert(array(
        	'property_id'	=> $id,
        	'hits_on'		=> date('Y-m-d')
        	));

		return View::make('dashboard.singleguest')

		->with('record', $record);
	}
	
	public function getTeam()
	{
		return View::make('dashboard.team');	
	}
	
	public function getOurteam()
	{
		return View::make('dashboard.ourteam');	
	}
	
	public function getBahriaupdates()
	{
		return View::make('dashboard.bahriaupdates');	
	}
	
	public function getFaq()
	{
		return View::make('dashboard.faq');	
	}
	
	public function getCareers()
	{
		return View::make('dashboard.careers');	
	}
	
	public function getHomeevaluation()
	{
		return View::make('dashboard.homeevaluation')
		->with('Type_of_Homes', Config::get('listconfig.Type_of_Homes'));	
	}
	public function postHomeevaluation()
	{

		$message =  '<html>
			<h1> Home Evaluation</h1>
			<body>
			<table width="740px;" class="MsoTableLightShadingAccent1" border="1"  cellspacing="0" cellpadding="0" style="color:#333; border-collapse:collapse;border:none; font-family: Helvetica, Arial, sans-serif; text-align: center; width=740px;">
           
			<tr>
			<td align="center" width="250px;" style="border: 1px solid #333; width=150px; transition: all 0.3s; background: #FAFAFA; text-align: center; " ><b> Name </b></td>
			<td align="center" style="border: 1px solid #333; width=370px; transition: all 0.3s; background: #FAFAFA; text-align: center; " >' .Input::get('fname').Input::get('lname') .'</td>
			</tr>
			<tr>
			<td align="center" width="250px;" style="border: 1px solid #333; width=150px; transition: all 0.3s; background: #FAFAFA; text-align: center; " ><b> Email </b></td>
			<td align="center" style="border: 1px solid #333; width=370px; transition: all 0.3s; background: #FAFAFA; text-align: center; " >' .Input::get('email').'</td>
			</tr>
			<tr>
			<td align="center" width="250px;" style="border: 1px solid #333; width=150px; transition: all 0.3s; background: #FAFAFA; text-align: center; " ><b> Phone </b></td>
			<td align="center" style="border: 1px solid #333; width=370px; transition: all 0.3s; background: #FAFAFA; text-align: center; " >' .Input::get('phone').'</td>
			</tr>
			<tr>
			<td align="center" width="250px;" style="border: 1px solid #333; width=150px; transition: all 0.3s; background: #FAFAFA; text-align: center; " ><b> City </b></td>
			<td align="center" style="border: 1px solid #333; width=370px; transition: all 0.3s; background: #FAFAFA; text-align: center; " >' .Input::get('city').'</td>
			</tr>
			<tr>
			<td align="center" width="250px;" style="border: 1px solid #333; width=150px; transition: all 0.3s; background: #FAFAFA; text-align: center; " ><b>  sq footage </b></td>
			<td align="center" style="border: 1px solid #333; width=370px; transition: all 0.3s; background: #FAFAFA; text-align: center; " >' .Input::get('sqfoot').'</td>
			</tr>
			<tr>
			<td align="center" width="250px;" style="border: 1px solid #333; width=150px; transition: all 0.3s; background: #FAFAFA; text-align: center; " ><b>  Age </b></td>
			<td align="center" style="border: 1px solid #333; width=370px; transition: all 0.3s; background: #FAFAFA; text-align: center; " >' .Input::get('age').'</td>
			</tr>
			<tr>
			<td align="center" width="250px;" style="border: 1px solid #333; width=150px; transition: all 0.3s; background: #FAFAFA; text-align: center; " ><b>  Bedrooms </b></td>
			<td align="center" style="border: 1px solid #333; width=370px; transition: all 0.3s; background: #FAFAFA; text-align: center; " >' .Input::get('bedrooms').'</td>
			</tr>
			<tr>
			<td align="center" width="250px;" style="border: 1px solid #333; width=150px; transition: all 0.3s; background: #FAFAFA; text-align: center; " ><b>  Bathrooms </b></td>
			<td align="center" style="border: 1px solid #333; width=370px; transition: all 0.3s; background: #FAFAFA; text-align: center; " >' .Input::get('bathrooms').'</td>
			</tr>
			<tr>
			<td align="center" width="250px;" style="border: 1px solid #333; width=150px; transition: all 0.3s; background: #FAFAFA; text-align: center; " ><b>  Home Type </b></td>
			<td align="center" style="border: 1px solid #333; width=370px; transition: all 0.3s; background: #FAFAFA; text-align: center; " >' .Input::get('home_type').'</td>
			</tr>
			<tr>
			<td align="center" width="250px;" style="border: 1px solid #333; width=150px; transition: all 0.3s; background: #FAFAFA; text-align: center; " ><b>  Garage </b></td>
			<td align="center" style="border: 1px solid #333; width=370px; transition: all 0.3s; background: #FAFAFA; text-align: center; " >' .Input::get('garage').'</td>
			</tr>
			<tr>
			<td align="center" width="250px;" style="border: 1px solid #333; width=150px; transition: all 0.3s; background: #FAFAFA; text-align: center; " ><b>  Do you have a deadline for moving? </b></td>
			<td align="center" style="border: 1px solid #333; width=370px; transition: all 0.3s; background: #FAFAFA; text-align: center; " >' .Input::get('deadline').'</td>
			</tr>
			<tr>
			<td align="center" width="250px;" style="border: 1px solid #333; width=150px; transition: all 0.3s; background: #FAFAFA; text-align: center; " ><b>  Comments</b></td>
			<td align="center" style="border: 1px solid #333; width=370px; transition: all 0.3s; background: #FAFAFA; text-align: center; " >' .Input::get('comments').'</td>
			</tr>
			</table>
			</body>
			</html>';


		$URL =$message;
			 $this->sendTo('registation@zameenjayedad.com.pk',array('activationCode'=>$URL));
			 return Redirect::to('dashboard');
	}
	
	public function getHomefinder()
	{
		return View::make('dashboard.homefinder')
		->with('Type_of_Homes', Config::get('listconfig.Type_of_Homes'));	
	}
	public function postHomefinder()
	{

		$message =  '<html>
			<h1> Home Finder</h1>
			<body>
			<table width="740px;" class="MsoTableLightShadingAccent1" border="1"  cellspacing="0" cellpadding="0" style="color:#333; border-collapse:collapse;border:none; font-family: Helvetica, Arial, sans-serif; text-align: center; width=740px;">
           
			<tr>
			<td align="center" width="250px;" style="border: 1px solid #333; width=150px; transition: all 0.3s; background: #FAFAFA; text-align: center; " ><b> Name </b></td>
			<td align="center" style="border: 1px solid #333; width=370px; transition: all 0.3s; background: #FAFAFA; text-align: center; " >' .Input::get('fname').Input::get('lname') .'</td>
			</tr>
			<tr>
			<td align="center" width="250px;" style="border: 1px solid #333; width=150px; transition: all 0.3s; background: #FAFAFA; text-align: center; " ><b> Email </b></td>
			<td align="center" style="border: 1px solid #333; width=370px; transition: all 0.3s; background: #FAFAFA; text-align: center; " >' .Input::get('email').'</td>
			</tr>
			<tr>
			<td align="center" width="250px;" style="border: 1px solid #333; width=150px; transition: all 0.3s; background: #FAFAFA; text-align: center; " ><b> Phone </b></td>
			<td align="center" style="border: 1px solid #333; width=370px; transition: all 0.3s; background: #FAFAFA; text-align: center; " >' .Input::get('phone').'</td>
			</tr>
			<tr>
			<td align="center" width="250px;" style="border: 1px solid #333; width=150px; transition: all 0.3s; background: #FAFAFA; text-align: center; " ><b> Which area are you looking for? </b></td>
			<td align="center" style="border: 1px solid #333; width=370px; transition: all 0.3s; background: #FAFAFA; text-align: center; " >' .Input::get('area').'</td>
			</tr>
			<tr>
			<td align="center" width="250px;" style="border: 1px solid #333; width=150px; transition: all 0.3s; background: #FAFAFA; text-align: center; " ><b>  Are you pre-qualified for a mortgage? </b></td>
			<td align="center" style="border: 1px solid #333; width=370px; transition: all 0.3s; background: #FAFAFA; text-align: center; " >' .Input::get('deadline1').'</td>
			</tr>
			<tr>
			<td align="center" width="250px;" style="border: 1px solid #333; width=150px; transition: all 0.3s; background: #FAFAFA; text-align: center; " ><b>  Price </b></td>
			<td align="center" style="border: 1px solid #333; width=370px; transition: all 0.3s; background: #FAFAFA; text-align: center; " >' .Input::get('price').'</td>
			</tr>
			<tr>
			<td align="center" width="250px;" style="border: 1px solid #333; width=150px; transition: all 0.3s; background: #FAFAFA; text-align: center; " ><b>  No of Bedrooms </b></td>
			<td align="center" style="border: 1px solid #333; width=370px; transition: all 0.3s; background: #FAFAFA; text-align: center; " >' .Input::get('bedrooms').'</td>
			</tr>
			<tr>
			<td align="center" width="250px;" style="border: 1px solid #333; width=150px; transition: all 0.3s; background: #FAFAFA; text-align: center; " ><b>  No of Bathrooms </b></td>
			<td align="center" style="border: 1px solid #333; width=370px; transition: all 0.3s; background: #FAFAFA; text-align: center; " >' .Input::get('bathrooms').'</td>
			</tr>
			<tr>
			<td align="center" width="250px;" style="border: 1px solid #333; width=150px; transition: all 0.3s; background: #FAFAFA; text-align: center; " ><b>  Home Type </b></td>
			<td align="center" style="border: 1px solid #333; width=370px; transition: all 0.3s; background: #FAFAFA; text-align: center; " >' .Input::get('home_type').'</td>
			</tr>
			
			<tr>
			<td align="center" width="250px;" style="border: 1px solid #333; width=150px; transition: all 0.3s; background: #FAFAFA; text-align: center; " ><b>  Do you have a deadline for moving? </b></td>
			<td align="center" style="border: 1px solid #333; width=370px; transition: all 0.3s; background: #FAFAFA; text-align: center; " >' .Input::get('deadline').'</td>
			</tr>
			<tr>
			<td align="center" width="250px;" style="border: 1px solid #333; width=150px; transition: all 0.3s; background: #FAFAFA; text-align: center; " ><b>  Comments</b></td>
			<td align="center" style="border: 1px solid #333; width=370px; transition: all 0.3s; background: #FAFAFA; text-align: center; " >' .Input::get('comments').'</td>
			</tr>
			</table>
			</body>
			</html>';


		$URL =$message;
			 $this->sendTo('registation@zameenjayedad.com.pk',array('activationCode'=>$URL));
			 return Redirect::to('dashboard');
	}
	
	public function getRecentsale()
	{
		return View::make('dashboard.recentsale');	
	}
	public function postRecentsale()
	{

		$message =  '<html>
			<h1>Recent Sale</h1>
			<body>
			<table width="740px;" class="MsoTableLightShadingAccent1" border="1"  cellspacing="0" cellpadding="0" style="color:#333; border-collapse:collapse;border:none; font-family: Helvetica, Arial, sans-serif; text-align: center; width=740px;">
           
			<tr>
			<td align="center" width="250px;" style="border: 1px solid #333; width=150px; transition: all 0.3s; background: #FAFAFA; text-align: center; " ><b> Name </b></td>
			<td align="center" style="border: 1px solid #333; width=370px; transition: all 0.3s; background: #FAFAFA; text-align: center; " >' .Input::get('fname').Input::get('lname') .'</td>
			</tr>
			<tr>
			<td align="center" width="250px;" style="border: 1px solid #333; width=150px; transition: all 0.3s; background: #FAFAFA; text-align: center; " ><b> Email Address </b></td>
			<td align="center" style="border: 1px solid #333; width=370px; transition: all 0.3s; background: #FAFAFA; text-align: center; " >' .Input::get('email').'</td>
			</tr>
			<tr>
			<td align="center" width="250px;" style="border: 1px solid #333; width=150px; transition: all 0.3s; background: #FAFAFA; text-align: center; " ><b> Phone Number </b></td>
			<td align="center" style="border: 1px solid #333; width=370px; transition: all 0.3s; background: #FAFAFA; text-align: center; " >' .Input::get('phone').'</td>
			</tr>
			<tr>
			<td align="center" width="250px;" style="border: 1px solid #333; width=150px; transition: all 0.3s; background: #FAFAFA; text-align: center; " ><b> Street Address </b></td>
			<td align="center" style="border: 1px solid #333; width=370px; transition: all 0.3s; background: #FAFAFA; text-align: center; " >' .Input::get('staddr').'</td>
			</tr>
			<tr>
			<td align="center" width="250px;" style="border: 1px solid #333; width=150px; transition: all 0.3s; background: #FAFAFA; text-align: center; " ><b>  Comments </b></td>
			<td align="center" style="border: 1px solid #333; width=370px; transition: all 0.3s; background: #FAFAFA; text-align: center; " >' .Input::get('comments').'</td>
			</tr>
			
			</table>
			</body>
			</html>';


		$URL =$message;
			 $this->sendTo('registation@zameenjayedad.com.pk',array('activationCode'=>$URL));
			 return Redirect::to('dashboard');
	}
	
	public function getPropertyfinder()
	{
		return View::make('dashboard.propertyfinder');	
	}
	public function postPropertyfinder()
	{

		$message =  '<html>
			<h1> Property finder</h1>
			<body>
			<table width="740px;" class="MsoTableLightShadingAccent1" border="1"  cellspacing="0" cellpadding="0" style="color:#333; border-collapse:collapse;border:none; font-family: Helvetica, Arial, sans-serif; text-align: center; width=740px;">
           
			<tr>
			<td align="center" width="250px;" style="border: 1px solid #333; width=150px; transition: all 0.3s; background: #FAFAFA; text-align: center; " ><b> Name </b></td>
			<td align="center" style="border: 1px solid #333; width=370px; transition: all 0.3s; background: #FAFAFA; text-align: center; " >' .Input::get('fname').Input::get('lname') .'</td>
			</tr>
			<tr>
			<td align="center" width="250px;" style="border: 1px solid #333; width=150px; transition: all 0.3s; background: #FAFAFA; text-align: center; " ><b> Contact Num </b></td>
			<td align="center" style="border: 1px solid #333; width=370px; transition: all 0.3s; background: #FAFAFA; text-align: center; " >' .Input::get('phone').'</td>
			</tr>
			<tr>
			<td align="center" width="250px;" style="border: 1px solid #333; width=150px; transition: all 0.3s; background: #FAFAFA; text-align: center; " ><b> Area of Interest </b></td>
			<td align="center" style="border: 1px solid #333; width=370px; transition: all 0.3s; background: #FAFAFA; text-align: center; " >' .Input::get('interest').'</td>
			</tr>
			
			<tr>
			<td align="center" width="250px;" style="border: 1px solid #333; width=150px; transition: all 0.3s; background: #FAFAFA; text-align: center; " ><b> Additional Information </b></td>
			<td align="center" style="border: 1px solid #333; width=370px; transition: all 0.3s; background: #FAFAFA; text-align: center; " >' .Input::get('comments').'</td>
			</tr>
			</table>
			</body>
			</html>';


		$URL =$message;
			 $this->sendTo('registation@zameenjayedad.com.pk',array('activationCode'=>$URL));
			 return Redirect::to('dashboard');
	}
	
	public function getChooseus()
	{
		return View::make('dashboard.chooseus');	
	}
	
	public function getContactus()
	{
		return View::make('dashboard.contactus');	
	}
	
	public function getCustomerservices()
	{
		return View::make('dashboard.customerservices');	
	}
	
	public function getDesigning()
	{
		return View::make('dashboard.designing');	
	}
	public function postDesigning()
	{

		$message =  '<html>
			<h1>Designing</h1>
			<body>
			<table width="740px;" class="MsoTableLightShadingAccent1" border="1"  cellspacing="0" cellpadding="0" style="color:#333; border-collapse:collapse;border:none; font-family: Helvetica, Arial, sans-serif; text-align: center; width=740px;">
           
			<tr>
			<td align="center" width="250px;" style="border: 1px solid #333; width=150px; transition: all 0.3s; background: #FAFAFA; text-align: center; " ><b> Name </b></td>
			<td align="center" style="border: 1px solid #333; width=370px; transition: all 0.3s; background: #FAFAFA; text-align: center; " >' .Input::get('fname').Input::get('lname') .'</td>
			</tr>
			<tr>
			<td align="center" width="250px;" style="border: 1px solid #333; width=150px; transition: all 0.3s; background: #FAFAFA; text-align: center; " ><b> Email Address </b></td>
			<td align="center" style="border: 1px solid #333; width=370px; transition: all 0.3s; background: #FAFAFA; text-align: center; " >' .Input::get('email').'</td>
			</tr>
			<tr>
			<td align="center" width="250px;" style="border: 1px solid #333; width=150px; transition: all 0.3s; background: #FAFAFA; text-align: center; " ><b> Phone Number </b></td>
			<td align="center" style="border: 1px solid #333; width=370px; transition: all 0.3s; background: #FAFAFA; text-align: center; " >' .Input::get('phone').'</td>
			</tr>
			
			<tr>
			<td align="center" width="250px;" style="border: 1px solid #333; width=150px; transition: all 0.3s; background: #FAFAFA; text-align: center; " ><b> Street Address </b></td>
			<td align="center" style="border: 1px solid #333; width=370px; transition: all 0.3s; background: #FAFAFA; text-align: center; " >' .Input::get('staddr').'</td>
			</tr>
			<tr>
			<td align="center" width="250px;" style="border: 1px solid #333; width=150px; transition: all 0.3s; background: #FAFAFA; text-align: center; " ><b> City </b></td>
			<td align="center" style="border: 1px solid #333; width=370px; transition: all 0.3s; background: #FAFAFA; text-align: center; " >' .Input::get('city').'</td>
			</tr>
			<tr>
			<td align="center" width="250px;" style="border: 1px solid #333; width=150px; transition: all 0.3s; background: #FAFAFA; text-align: center; " ><b> Comments </b></td>
			<td align="center" style="border: 1px solid #333; width=370px; transition: all 0.3s; background: #FAFAFA; text-align: center; " >' .Input::get('comments').'</td>
			</tr>
			</table>
			</body>
			</html>';


		$URL =$message;
			 $this->sendTo('registation@zameenjayedad.com.pk',array('activationCode'=>$URL));
			 return Redirect::to('dashboard');
	}
	
	public function getBuildhouse()
	{
		return View::make('dashboard.buildhouse');	
	}
	public function postBuildhouse()
	{

		$message =  '<html>
			<h1> Build House</h1>
			<body>
			<table width="740px;" class="MsoTableLightShadingAccent1" border="1"  cellspacing="0" cellpadding="0" style="color:#333; border-collapse:collapse;border:none; font-family: Helvetica, Arial, sans-serif; text-align: center; width=740px;">
           
			<tr>
			<td align="center" width="250px;" style="border: 1px solid #333; width=150px; transition: all 0.3s; background: #FAFAFA; text-align: center; " ><b> Name </b></td>
			<td align="center" style="border: 1px solid #333; width=370px; transition: all 0.3s; background: #FAFAFA; text-align: center; " >' .Input::get('fname').Input::get('lname') .'</td>
			</tr>
			<tr>
			<td align="center" width="250px;" style="border: 1px solid #333; width=150px; transition: all 0.3s; background: #FAFAFA; text-align: center; " ><b> Email Address </b></td>
			<td align="center" style="border: 1px solid #333; width=370px; transition: all 0.3s; background: #FAFAFA; text-align: center; " >' .Input::get('email').'</td>
			</tr>
			<tr>
			<td align="center" width="250px;" style="border: 1px solid #333; width=150px; transition: all 0.3s; background: #FAFAFA; text-align: center; " ><b> Phone Number </b></td>
			<td align="center" style="border: 1px solid #333; width=370px; transition: all 0.3s; background: #FAFAFA; text-align: center; " >' .Input::get('phone').'</td>
			</tr>
			
			<tr>
			<td align="center" width="250px;" style="border: 1px solid #333; width=150px; transition: all 0.3s; background: #FAFAFA; text-align: center; " ><b> Street Address </b></td>
			<td align="center" style="border: 1px solid #333; width=370px; transition: all 0.3s; background: #FAFAFA; text-align: center; " >' .Input::get('staddr').'</td>
			</tr>
			<tr>
			<td align="center" width="250px;" style="border: 1px solid #333; width=150px; transition: all 0.3s; background: #FAFAFA; text-align: center; " ><b> City </b></td>
			<td align="center" style="border: 1px solid #333; width=370px; transition: all 0.3s; background: #FAFAFA; text-align: center; " >' .Input::get('city').'</td>
			</tr>
			<tr>
			<td align="center" width="250px;" style="border: 1px solid #333; width=150px; transition: all 0.3s; background: #FAFAFA; text-align: center; " ><b> Comments </b></td>
			<td align="center" style="border: 1px solid #333; width=370px; transition: all 0.3s; background: #FAFAFA; text-align: center; " >' .Input::get('comments').'</td>
			</tr>
			</table>
			</body>
			</html>';


		$URL =$message;
			 $this->sendTo('registation@zameenjayedad.com.pk',array('activationCode'=>$URL));
			 return Redirect::to('dashboard');
	}
	
	public function getProjectupdates()
	{
		return View::make('dashboard.projectupdates');	
	}
	
	public function getBuyinghome()
	{
		return View::make('dashboard.buyinghome');	
	}
	
	public function getSellinghome()
	{
		return View::make('dashboard.sellinghome');	
	}
	
	public function getFeaturedlistings()
	{
		$users = DB::table('property')
                    ->orderBy('id', 'desc')
                    ->take(10)
          			->get();
		return View::make('dashboard.featuredlistings')
		->with('users', $users);
	}
	
	public function getFeaturedlisting()
	{
		$users = DB::table('property')
                    ->orderBy('id', 'desc')
                    ->take(10)
          			->get();
		return View::make('dashboard.featuredlisting')
		->with('users', $users);
	}
	
	public function getNewdevelopments()
	{
		return View::make('dashboard.newdevelopments');	
	}
	

}