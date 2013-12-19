<!doctype HTML>
<html>
<head>
	<title>Zameen Jayedad</title>
	{{ HTML::style('assets/css/style.css')}}
	{{ HTML::style('assets/css/generic.css')}}
	{{ HTML::style('assets/js/js-image-slider.css'); }}
	{{ HTML::script('assets/js/js-image-slider.js'); }}
	{{ HTML::script('assets/js/mcVideoPlugin.js'); }}

	{{ HTML::script('assets/js/Chart.min.js'); }}

    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js"></script>


    
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
case 'agencies':
 $('#li_agency').addClass('active') ;
 break;
case 'profile':
 $('#li_profile').addClass('active') ;
 break;
 case 'reports':
 $('#li_reports').addClass('active') ;
 break;
 case 'listing':
 $('#li_property').addClass('active') ;
 break;


}

});

</script> 

<script type="text/javascript">

jQuery(function(){
        $("#searchbtn").click(function(){
        $(".error").hide();
        var hasError = false;
        var searchReg = /^[a-zA-Z0-9-]+$/;
        var searchVal = $("#searchtxt").val();
        if(searchVal == '') {
            $("#searchtxt").after('<span class="error">Please enter a search term.</span>');
            hasError = true;
        } else if(!searchReg.test(searchVal)) {
            $("#searchtxt").after('<span class="error">Enter valid text.</span>');
            hasError = true;
        }
        if(hasError == true) {return false;}
    });
});


</script>



</head>
<body>


	<div id="wrapperheader">
  

		<div id="header">
			<div class="logo">
			<img  src="/assets/images/eri_logo_02.png">
			
			</div><!--logo-img ends-->
			<div class="contact">
    
      {{ HTML::link('user/logout','Logout',array('class'=>'log'))}}
    
        <a href="#"> contact@zameenjayedad.com   </a>
        <p>+923225050989</p>
        </div>
			
			
   
		</div><!--header ends-->
	</div>
    
    <div id="search">
   
   <div id="wrapperheader">
    <div id="sea">	
    	<!--<h2>Search Listing</h2>
    	{{ Form::text('search','',array('class'=>'span6','placeholder'=>'search by city')) }}
    	
       {{ Form::submit('Search', array('class' => 'button')) }}-->
    
       <div id='cssmenu'>
       <ul>
       <li id="li_home"><a href="{{URL::to('dashboard')}}">Dashboard</a></li>
       <li id="li_agency"><a href="{{URL::to('dashboard/agencies')}}">Agency</a></li>
       <li id="li_profile"><a href="{{URL::to('profile')}}">My Accounts & Profile</a></li>
       <li id="li_reports"><a href="{{URL::to('dashboard/reports')}}">Reports</a></li>
       <li id="li_property"><a href="{{URL::to('profolio/listing')}}">Property Management</a></li>
       <li id="li_message"><a href="{{URL::to('dashboard/messages')}}">Messages Center</a></li>
       </ul>
       </div>
     
    </div>
    </div>
	
    <div class="searchlist">
     {{ Form::open(array('url' => 'dashboard/search')) }}
   
   
    
       <!-- <h2>Search Listing</h2>-->
        {{ Form::text('search','',array('class'=>'span6','id'=>'searchtxt','placeholder'=>'Search Listings...')) }}
        
       {{ Form::submit('Search', array('class' => 'button','id'=>'searchbtn')) }}

   
    {{ Form::close() }}
   
    	</div>
    </div><!--search-->
    
	@yield('content')
		
        <div class="footerheight">
    	<div id="footer">
			<p class="foot">Copyright &copy; 2013 zameen jayedad inc | Office F-1 Rauf Tower DHA phase 2, Gate1, Islamabad</p>
  		</div>
        </div>

</body>
</html>