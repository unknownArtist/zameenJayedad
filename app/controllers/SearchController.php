<?php

class SearchController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function postIndex()
	{	
        $q =Input::get('search');

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->orWhere('property_type', 'LIKE','%'.$q.'%')
					   ->orWhere('purpose','LIKE', '%'.$q.'%')
					   ->orWhere('wanted','LIKE', '%'.$q.'%')
					   ->orWhere('location','LIKE', '%'.$q.'%')
					   ->orWhere('p_title','LIKE', '%'.$q.'%')
					   ->orWhere('unit','LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.search')
					->with('name',$q)
					->with('record',$records);
        }
 public function getBahriatownPhase1()
	{	
        $q ='Bahria town Phase 1';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.search')
					->with('name',$q)
					->with('record',$records);
        }
       
   public function getBahriatownPhase2()
	{	
        $q ='Bahria town Phase 2';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.search')
					->with('name',$q)
					->with('record',$records);
        }         
	
public function getBahriatownPhase3()
	{	
        $q ='Bahria town Phase 3';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.search')
					->with('name',$q)
					->with('record',$records);
        }         
	public function getBahriatownPhase4()
	{	
        $q ='Bahria town Phase 4';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.search')
					->with('name',$q)
					->with('record',$records);
        } 
        public function getBahriatownPhase5()
	{	
        $q ='Bahria town Phase 5';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.search')
					->with('name',$q)
					->with('record',$records);
        }    
        public function getBahriatownPhase6()
	{	
        $q ='Bahria town Phase 6';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.search')
					->with('name',$q)
					->with('record',$records);
        }
        public function getBahriatownPhase7()
	{	
        $q ='Bahria town Phase 7';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.search')
					->with('name',$q)
					->with('record',$records);
        }  
       
	public function postGuestsearch()
	{	
           
	$q =Input::get('search');

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->orWhere('property_type', 'LIKE','%'.$q.'%')
					   ->orWhere('purpose','LIKE', '%'.$q.'%')
					   ->orWhere('wanted','LIKE', '%'.$q.'%')
					   ->orWhere('location','LIKE', '%'.$q.'%')
					   ->orWhere('p_title','LIKE', '%'.$q.'%')
					   ->orWhere('unit','LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.searchguest')
					->with('name',$q)
					->with('record',$records);
	}
	

	public function Postsearchmap()
	{	
		$q =Input::get('query');
		$q =Input::get('query');
		if (!$q)
		{
			
			return Redirect::to('dashboard')-> with('error','Please enter a search term.');
		}
		
	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->orWhere('property_type', 'LIKE','%'.$q.'%')
					   ->orWhere('purpose','LIKE', '%'.$q.'%')
					   ->orWhere('wanted','LIKE', '%'.$q.'%')
					   ->orWhere('location','LIKE', '%'.$q.'%')
					   ->orWhere('p_title','LIKE', '%'.$q.'%')
					   ->orWhere('unit','LIKE', '%'.$q.'%')
					   ->get();
		return View::make('dashboard.searchmap')-> with('records',$records);
	}
	public function Postmap()
	{	
		$q =Input::get('query');
		if (!$q)
		{
			
			return Redirect::to('dashboard/guest')-> with('error','Please enter a search term.');
		}


	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->orWhere('property_type', 'LIKE','%'.$q.'%')
					   ->orWhere('purpose','LIKE', '%'.$q.'%')
					   ->orWhere('wanted','LIKE', '%'.$q.'%')
					   ->orWhere('location','LIKE', '%'.$q.'%')
					   ->orWhere('p_title','LIKE', '%'.$q.'%')
					   ->orWhere('unit','LIKE', '%'.$q.'%')
					   ->get();
		return View::make('dashboard.map')-> with('records',$records);
	}


}