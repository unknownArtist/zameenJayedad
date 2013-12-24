<!doctype HTML>
<html>
<head>
	<title>Zameen Jayedad</title>

  <STYLE TYPE="text/css">
  .innermenu
  {
    display: none;
   /* position: relative;
    top: -24px;*/
   margin-left: 11px ! important;
   margin-bottom: 0px ! important;
   
   background: #68beb6;

  }
  .innermenu li{
    background: #68beb6;
   margin-top: -16px !important;
    clear: both;
    margin-left: 16px ! important;
  }

  #li_profile:hover ul.innermenu
  {
    display: block;

  }

  </STYLE>

	{{ HTML::style('assets/css/style.css')}}
	{{ HTML::style('assets/css/generic.css')}}
	{{ HTML::style('assets/js/js-image-slider.css'); }}
    
    
    {{ HTML::style('assets/css/lightbox.css')}}
    
    
	{{ HTML::script('assets/js/js-image-slider.js'); }}
	{{ HTML::script('assets/js/mcVideoPlugin.js'); }}

	{{ HTML::script('assets/js/Chart.min.js'); }}    
   
    {{ HTML::script('assets/js/modernizr.custom.js'); }}

	
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Karla:400,700">

    
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
 case 'changepass':
 $('#li_profile').addClass('active') ;
 break;
 case 'reports':
 $('#li_reports').addClass('active') ;
 break;
 case 'listing':
 $('#li_property').addClass('active') ;
 break;
 case 'messages':
 $('#li_message').addClass('active') ;
 break;
  case 'alerts':
 $('#li_email').addClass('active') ;
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
            <div class="threeimages">
            <img src="/assets/images/banner_photos_2.png">
            </div>
            
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
       <li id="li_profile"><a href="">My Account</a>
        <ul class="innermenu" style="">
         <li id="li_changepass"><a href="{{URL::to('profile')}}">Profile</a></li>
        <li id="li_changepass"><a href="{{URL::to('changepass')}}">Change Password</a></li>        
        </ul>
        </li>
       <li id="li_reports"><a href="{{URL::to('dashboard/reports')}}">Reports</a></li>
       <li id="li_property"><a href="{{URL::to('profolio/listing')}}">Property Management</a></li>
       <li id="li_message"><a href="{{URL::to('dashboard/messages')}}">Message Center</a></li>
       <li id="li_email"><a href="{{URL::to('user/email/alerts')}}">Email Alerts</a></li>
       </ul>
       </div>
     
    </div>
    </div>
	
    <div class="searchlist">
     {{ Form::open(array('url' => 'dashboard/search')) }}
   
   
    
       <!-- <h2>Search Listing</h2>-->
        {{ Form::text('search','',array('class'=>'span6','id'=>'searchtxt','placeholder'=>'City, Property-type...')) }}
        
       {{ Form::submit('Search', array('class' => 'button','id'=>'searchbtn')) }}

   
    {{ Form::close() }}
   
    	</div>
    </div><!--search-->
    
	@yield('content')
		
        
    	<div id="footer">
        <div id="wrapper">
        <div class="footerlist1">
        <h2>Zameen Jayedad Team</h2>
        <hr/>
        <ul>
        <li><a href="#">Full Customer and Technical Support</a></li>
        <li><a href="#">No Fake properties or Fake Agents</a></li>
        <li><a href="#">Property confirmation before getting Live</a></li>
        <li><a href="#">Property Updates</a></li>
        <li><a href="#">Featured Listings</a></li>
        <li><a href="#">Contact Zameen Jayedad</a></li>
        <li><a href="#">The Team</a></li>
 		</ul>
                
        </div>
        
        <div class="footerlist1 footermargin">
        <h2>News and Articles</h2>
        <hr/>
        <ul>
        <li><a href="#">Buying a Home</a></li>
        <li><a href="#">Selling Your Home</a></li>
        <li><a href="#">New Developments</a></li>
        <li><a href="#">Bahria Town & DHA Updates</a></li>
        <li><a href="#">FAQ</a></li>
        <li><a href="#">Bahria town and DHA Statistics</a></li>
        <li><a href="#">Why Choosing US?</a></li>
 		</ul>
                
        </div>
        
        <div class="footerlist1 footermargin">
        <h2>Tools</h2>
        <hr/>
        <ul>
        <li><a href="#">Distressed Property Finder</a></li>
        <li><a href="#">Home Evaluation</a></li>
        <li><a href="#">Home Finder</a></li>
        <li><a href="#">Recent Sale Prices</a></li>
        <li><a href="#">Quotes to Build your House</a></li>
        <li><a href="#">Interior Designing Office / House</a></li>
        <li><a href="#">Virtual Tour of the Properties</a></li>
 		</ul>
                
        </div>
        
			<p class="foot">Copyright &copy; 2013 Zameen Jayedad Inc. All Rights Reserved</p>
  		</div>
        </div>
       
        
        {{ HTML::script('assets/js/jquery-1.10.2.min.js'); }}  
        {{ HTML::script('assets/js/lightbox-2.6.min.js'); }}      

	<script type="text/javascript">
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-2196019-1']);
	_gaq.push(['_trackPageview']);

	(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();
	</script>

</body>
</html>