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
     public function getBahriatownPhase8()
	{	
        $q ='Bahria town Phase 8';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.search')
					->with('name',$q)
					->with('record',$records);
        } 
       
         public function  getSectorA()
	{	
        $q ='Sector-A';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.search')
					->with('name',$q)
					->with('record',$records);
        }
         public function  getSectorB()
	{	
        $q ='Sector-B';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.search')
					->with('name',$q)
					->with('record',$records);
        }
    public function  getSectorC()
	{	
        $q ='Sector-C';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.search')
					->with('name',$q)
					->with('record',$records);
        }
         public function  getSectorD()
	{	
        $q ='Sector-D';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.search')
					->with('name',$q)
					->with('record',$records);
        }
           public function  getSectorE()
	{	
        $q ='Sector-E';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.search')
					->with('name',$q)
					->with('record',$records);
        }
         public function  getSectorF()
	{	
        $q ='Sector-F';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.search')
					->with('name',$q)
					->with('record',$records);
        }
         public function  getSectorG()
	{	
        $q ='Sector-G';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.search')
					->with('name',$q)
					->with('record',$records);
        }
         public function  getSectorH()
	{	
        $q ='Sector-H';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.search')
					->with('name',$q)
					->with('record',$records);
        }
         public function  getSectorI()
	{	
        $q ='Sector-I';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.search')
					->with('name',$q)
					->with('record',$records);
        }
         public function  getSectorJ()
	{	
        $q ='Sector-J';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.search')
					->with('name',$q)
					->with('record',$records);
        }
         public function  getSectorK()
	{	
        $q ='Sector-K';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.search')
					->with('name',$q)
					->with('record',$records);
        }
         public function  getSectorL()
	{	
        $q ='Sector-L';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.search')
					->with('name',$q)
					->with('record',$records);
        }
          public function  getSectorM()
	{	
        $q ='Sector-M';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.search')
					->with('name',$q)
					->with('record',$records);
        }
          public function  getSectorN()
	{	
        $q ='Sector-N';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.search')
					->with('name',$q)
					->with('record',$records);
        }
          public function  getSectorP()
	{	
        $q ='Sector-P';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.search')
					->with('name',$q)
					->with('record',$records);
        }
     public function  getBlockA()
	{	
        $q ='Block-A';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.search')
					->with('name',$q)
					->with('record',$records);
        }
            public function  getBlockB()
	{	
        $q ='Block-B';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.search')
					->with('name',$q)
					->with('record',$records);
        }
     public function  getBlockC()
	{	
        $q ='Block-C';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.search')
					->with('name',$q)
					->with('record',$records);
        }
     public function  getBlockD()
	{	
        $q ='Block-D';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.search')
					->with('name',$q)
					->with('record',$records);
        }
     public function  getBlockE()
	{	
        $q ='Block-E';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.search')
					->with('name',$q)
					->with('record',$records);
        } 
     public function  getBlockF()
	{	
        $q ='Block-F';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.search')
					->with('name',$q)
					->with('record',$records);
        }  
     public function  getBlockG()
	{	
        $q ='Block-G';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.search')
					->with('name',$q)
					->with('record',$records);
        } 
     public function  getBlockH()
	{	
        $q ='Block-H';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.search')
					->with('name',$q)
					->with('record',$records);
        }

     public function  getBlockI()
	{	
        $q ='Block-I';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.search')
					->with('name',$q)
					->with('record',$records);
        }
      public function  getBlockJ()
	{	
        $q ='Block-J';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.search')
					->with('name',$q)
					->with('record',$records);
        }
      public function  getBlockK()
	{	
        $q ='Block-K';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.search')
					->with('name',$q)
					->with('record',$records);
        }
      public function  getBlockL()
	{	
        $q ='Block-L';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.search')
					->with('name',$q)
					->with('record',$records);
        }

      public function  getBlockM()
	{	
        $q ='Block-M';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.search')
					->with('name',$q)
					->with('record',$records);
        }
      public function  getBlockN()
	{	
        $q ='Block-N';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.search')
					->with('name',$q)
					->with('record',$records);
        }
      public function  getBlockO()
	{	
        $q ='Block-O';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.search')
					->with('name',$q)
					->with('record',$records);
        }  
      public function  getBlockP()
	{	
        $q ='Block-P';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.search')
					->with('name',$q)
					->with('record',$records);
        }  
    public function  getPhase8Safari()
	{	
        $q ='Phase 8 Safari Valley';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.search')
					->with('name',$q)
					->with('record',$records);
        } 

   	 public function  getAbuBakrBlock()
	{	
        $q ='Abu Bakr Block';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.search')
					->with('name',$q)
					->with('record',$records);
        } 
     public function  getUmerFarooqBlock()
	{	
        $q ='Umer Farooq Block';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.search')
					->with('name',$q)
					->with('record',$records);
        }
     public function  getUsmanGhaniBlock()
	{	
        $q ='Usman-e-Ghani Block';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.search')
					->with('name',$q)
					->with('record',$records);
        }
    public function  getAliBlock()
	{	
        $q ='Ali Block';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.search')
					->with('name',$q)
					->with('record',$records);
        }
    public function  getRafiBlock()
	{	
        $q ='Rafi Block';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.search')
					->with('name',$q)
					->with('record',$records);
        }
    public function  getKhalidBlock()
	{	
        $q ='Khalid Block';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.search')
					->with('name',$q)
					->with('record',$records);
        }
    public function  getBahriaOverseas()
	{	
        $q ='Bahria Overseas Enclave Islamabad';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.search')
					->with('name',$q)
					->with('record',$records);
        }
    public function  getDHA1()
	{	
        $q ='DHA 1';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.search')
					->with('name',$q)
					->with('record',$records);
        }

     public function  getDHA2()
	{	
        $q ='DHA 2';

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
	public function getBahriatownPhase1guest()
	{	
        $q ='Bahria town Phase 1';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.searchguest')
					->with('name',$q)
					->with('record',$records);
        }
       
   public function getBahriatownPhase2guest()
	{	
        $q ='Bahria town Phase 2';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.searchguest')
					->with('name',$q)
					->with('record',$records);
        }         
	
public function getBahriatownPhase3guest()
	{	
        $q ='Bahria town Phase 3';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.searchguest')
					->with('name',$q)
					->with('record',$records);
        }         
	public function getBahriatownPhase4guest()
	{	
        $q ='Bahria town Phase 4';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.searchguest')
					->with('name',$q)
					->with('record',$records);
        } 
        
        public function getBahriatownPhase5guest()
	{	
        $q ='Bahria town Phase 5';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.searchguest')
					->with('name',$q)
					->with('record',$records);
        }    
        public function getBahriatownPhase6guest()
	{	
        $q ='Bahria town Phase 6';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.searchguest')
					->with('name',$q)
					->with('record',$records);
        }
        public function getBahriatownPhase7guest()
	{	
        $q ='Bahria town Phase 7';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.searchguest')
					->with('name',$q)
					->with('record',$records);
        } 
      public function getBahriatownPhase8guest()
	{	
        $q ='Bahria town Phase 8';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.searchguest')
					->with('name',$q)
					->with('record',$records);
        } 
       
         public function  getSectorAguest()
	{	
        $q ='Sector-A';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.searchguest')
					->with('name',$q)
					->with('record',$records);
        }
         public function  getSectorBguest()
	{	
        $q ='Sector-B';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.searchguest')
					->with('name',$q)
					->with('record',$records);
        }
    public function  getSectorCguest()
	{	
        $q ='Sector-C';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.searchguest')
					->with('name',$q)
					->with('record',$records);
        }
         public function  getSectorDguest()
	{	
        $q ='Sector-D';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.searchguest')
					->with('name',$q)
					->with('record',$records);
        }
           public function  getSectorEguest()
	{	
        $q ='Sector-E';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.searchguest')
					->with('name',$q)
					->with('record',$records);
        }
         public function  getSectorFguest()
	{	
        $q ='Sector-F';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.searchguest')
					->with('name',$q)
					->with('record',$records);
        }
         public function  getSectorGguest()
	{	
        $q ='Sector-G';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.searchguest')
					->with('name',$q)
					->with('record',$records);
        }
         public function  getSectorHguest()
	{	
        $q ='Sector-H';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.searchguest')
					->with('name',$q)
					->with('record',$records);
        }
         public function  getSectorIguest()
	{	
        $q ='Sector-I';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.searchguest')
					->with('name',$q)
					->with('record',$records);
        }
         public function  getSectorJguest()
	{	
        $q ='Sector-J';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.searchguest')
					->with('name',$q)
					->with('record',$records);
        }
         public function  getSectorKguest()
	{	
        $q ='Sector-K';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.searchguest')
					->with('name',$q)
					->with('record',$records);
        }
         public function  getSectorLguest()
	{	
        $q ='Sector-L';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.searchguest')
					->with('name',$q)
					->with('record',$records);
        }
          public function  getSectorMguest()
	{	
        $q ='Sector-M';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.searchguest')
					->with('name',$q)
					->with('record',$records);
        }
          public function  getSectorNguest()
	{	
        $q ='Sector-N';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.searchguest')
					->with('name',$q)
					->with('record',$records);
        }
          public function  getSectorPguest()
	{	
        $q ='Sector-P';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.searchguest')
					->with('name',$q)
					->with('record',$records);
        } 
      public function  getBlockAguest()
	{	
        $q ='Block-A';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.searchguest')
					->with('name',$q)
					->with('record',$records);
        }
            public function  getBlockBguest()
	{	
        $q ='Block-B';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.searchguest')
					->with('name',$q)
					->with('record',$records);
        }
     public function  getBlockCguest()
	{	
        $q ='Block-C';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.searchguest')
					->with('name',$q)
					->with('record',$records);
        }
     public function  getBlockDguest()
	{	
        $q ='Block-D';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.searchguest')
					->with('name',$q)
					->with('record',$records);
        }
     public function  getBlockEguest()
	{	
        $q ='Block-E';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.searchguest')
					->with('name',$q)
					->with('record',$records);
        } 
     public function  getBlockFguest()
	{	
        $q ='Block-F';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.searchguest')
					->with('name',$q)
					->with('record',$records);
        }  
     public function  getBlockGguest()
	{	
        $q ='Block-G';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.searchguest')
					->with('name',$q)
					->with('record',$records);
        } 
     public function  getBlockHguest()
	{	
        $q ='Block-H';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.searchguest')
					->with('name',$q)
					->with('record',$records);
        }

     public function  getBlockIguest()
	{	
        $q ='Block-I';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.searchguest')
					->with('name',$q)
					->with('record',$records);
        }
      public function  getBlockJguest()
	{	
        $q ='Block-J';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.searchguest')
					->with('name',$q)
					->with('record',$records);
        }
      public function  getBlockKguest()
	{	
        $q ='Block-K';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.searchguest')
					->with('name',$q)
					->with('record',$records);
        }
      public function  getBlockLguest()
	{	
        $q ='Block-L';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.searchguest')
					->with('name',$q)
					->with('record',$records);
        }

      public function  getBlockMguest()
	{	
        $q ='Block-M';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.searchguest')
					->with('name',$q)
					->with('record',$records);
        }
      public function  getBlockNguest()
	{	
        $q ='Block-N';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.searchguest')
					->with('name',$q)
					->with('record',$records);
        }
      public function  getBlockOguest()
	{	
        $q ='Block-O';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.searchguest')
					->with('name',$q)
					->with('record',$records);
        }  
      public function  getBlockPguest()
	{	
        $q ='Block-P';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.searchguest')
					->with('name',$q)
					->with('record',$records);
        }
    public function  getPhase8Safariguest()
	{	
        $q ='Phase 8 Safari Valley';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.searchguest')
					->with('name',$q)
					->with('record',$records);
        } 

   	 public function  getAbuBakrBlockguest()
	{	
        $q ='Abu Bakr Block';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.searchguest')
					->with('name',$q)
					->with('record',$records);
        } 
     public function  getUmerFarooqBlockguest()
	{	
        $q ='Umer Farooq Block';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.searchguest')
					->with('name',$q)
					->with('record',$records);
        }
     public function  getUsmanGhaniBlockguest()
	{	
        $q ='Usman-e-Ghani Block';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.searchguest')
					->with('name',$q)
					->with('record',$records);
        }
    public function  getAliBlockguest()
	{	
        $q ='Ali Block';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.searchguest')
					->with('name',$q)
					->with('record',$records);
        }  
     public function  getRafiBlockguest()
	{	
        $q ='Rafi Block';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.searchguest')
					->with('name',$q)
					->with('record',$records);
        }
    public function  getKhalidBlockguest()
	{	
        $q ='Khalid Block';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.searchguest')
					->with('name',$q)
					->with('record',$records);
        }
    public function  getBahriaOverseasguest()
	{	
        $q ='Bahria Overseas Enclave Islamabad';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.searchguest')
					->with('name',$q)
					->with('record',$records);
        }
    public function  getDHA1guest()
	{	
        $q ='DHA 1';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
					   ->get();
	return View::make('dashboard.searchguest')
					->with('name',$q)
					->with('record',$records);
        }

     public function  getDHA2guest()
	{	
        $q ='DHA 2';

	$records = Profolio::where('location', 'LIKE', '%'.$q.'%')
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