<!doctype HTML>
<html>
<head>
	<title>Zameen Jayedad</title>
	{{ HTML::style('assets/css/style.css')}}
	{{ HTML::style('assets/css/generic.css')}}
	{{ HTML::style('assets/js/js-image-slider.css'); }}
	{{ HTML::script('assets/js/js-image-slider.js'); }}
	{{ HTML::script('assets/js/mcVideoPlugin.js'); }}

    
    <script type="text/javascript">
function GetCurrentPageName() { 
//method to get Current page name from url. 
var PageURL = document.location.href; 
var PageName = PageURL.substring(PageURL.lastIndexOf('/') + 1); 
 
return PageName.toLowerCase() ;
}
 
$(document).ready(function(){
var CurrPage = GetCurrentPageName();
 
switch(CurrPage){
case 'dashboard':
 $('#li_home').addClass('active') ;
 break;
case 'agencystaff':
 $('#li_agency').addClass('active') ;
 break;
case 'profile':
 $('#li_profile').addClass('active') ;
 break;
 case 'reports':
 $('#li_reports').addClass('active') ;
 break;
 case 'property':
 $('#li_property').addClass('active') ;
 break;


}

});

</script> 



</head>
<body>


	<div id="wrapper">
  

		<div id="header">
			<div class="logo">
			<img  src="/assets/images/eri_logo_02.png">
			
			</div><!--logo-img ends-->
			<div class="contact">
			
		    <a href="#"> contact@zameenjayedad.com   </a>
		    <p>+923225050989</p>
		    </div>
			
			
   
		</div><!--header ends-->
	</div>
    
    <div id="search">
   
   <div id="wrapper">
    <div id="sea">	
    	<!--<h2>Search Listing</h2>
    	{{ Form::text('search','',array('class'=>'span6','placeholder'=>'search by city')) }}
    	
       {{ Form::submit('Search', array('class' => 'button')) }}-->
       <div id='cssmenu'>
       <ul>
       <li id="li_home"><a href="{{URL::to('dashboard')}}">Dashboard</a></li>
       <li id="li_agency"><a href="{{URL::to('dashboard/agencystaff')}}">Agency Staff</a></li>
       <li id="li_profile"><a href="{{URL::to('profile')}}">My Accounts & Profile</a></li>
       <li id="li_reports"><a href="{{URL::to('dashboard/reports')}}">Reports</a></li>
       <li id="li_property"><a href="{{URL::to('profolio')}}">Property Management</a></li>
       </ul>
       </div>

    	
    </div><!--sea-->
    </div>
    </div>
	
	@yield('content')
</div>
    	<div id="footer">
			<p class="foot">Copyright &copy; 2013 zameen jayedad inc | Office F-1 Rauf Tower DHA phase 2, Gate1, Islamabad</p>
  		</div>

</body>
</html>