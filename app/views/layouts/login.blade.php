<!doctype HTML>
<html>
<head>
	<title>Zameen Jayedad</title>

  <STYLE TYPE="text/css">
  

  </STYLE>

	{{ HTML::style('assets/css/style.css')}}
	{{ HTML::style('assets/css/generic.css')}}
	{{ HTML::style('assets/js/js-image-slider.css'); }}    
    
    {{ HTML::style('assets/css/lightbox.css')}}   
    {{ HTML::script('assets/js/jquery.js') }}  

	{{ HTML::script('assets/js/js-image-slider.js'); }}
	{{ HTML::script('assets/js/mcVideoPlugin.js'); }}

	{{ HTML::script('assets/js/Chart.min.js'); }}    
   
    {{ HTML::script('assets/js/modernizr.custom.js'); }}

	
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Karla:400,700">
	 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js"></script>
    

    
    {{ HTML::script('assets/js/vticker.js'); }}  


    
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
 case 'viewprofile':
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

jQuery(function($){
        $("#searchbtn").click(function(){
        $(".error").hide();
        var hasError = false;
        var searchReg = /^[a-zA-Z0-9- -]+$/;
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
    $("#searchtxt").blur(function(){

              $("#mapbtn").val(($('#searchtxt').val()));
           });    
});


</script>

<script type="text/javascript">
var $j = jQuery.noConflict();
$j(function() {
  $j('#example').vTicker();
});
</script>


</head>
<body>


	<div id="wrapperheader">
  

		<div id="header">
			<div class="logo">
			 <a href="{{URL::to('dashboard')}}"><img  src="/assets/images/eri_logo_02.png"></a>
			
			</div><!--logo-img ends-->
            <div class="threeimages">
           <img src="/assets/images/banner_photos_2.png">
            </div>
            
			<div class="contact">
    
      {{ HTML::link('user/logout','Logout',array('class'=>'log'))}}
    
        <a href="#"> contact@zameenjayedad.com   </a>
        <p>03225050989</p>
            <p>03355257555</p>
        </div>
			
			
   
		</div><!--header ends-->
	</div>
    
    <div id="search">
    <?php 

        $group= Sentry::getUser()->group;
        $staff = Sentry::getUser()->staff;

    ?>
    @if($staff == 1)

   <div id="wrapperheader">
    <div id="sea">  
      <!--<h2>Search Listing</h2>
      {{ Form::text('search','',array('class'=>'span6','placeholder'=>'search by city')) }}
      
       {{ Form::submit('Search', array('class' => 'button')) }}-->

       <div id='cssmenu'>
       <ul>
       <li id="li_home"><a href="{{URL::to('dashboard')}}">Dashboard</a></li>
     
       <li id="li_profile"><a href="{{URL::to('viewprofile')}}">My Account</a>
        <ul class="innermenu" style="">
         <li id="li_changepass"><a href="{{URL::to('profile')}}">Edit Profile</a></li>
        <li id="li_changepass"><a href="{{URL::to('changepass')}}">Change Password</a></li>        
        </ul>
        </li>
       
       <li id="li_message"><a href="{{URL::to('dashboard/messages')}}">Message Center</a></li>
       
       </ul>
       </div>
     
    </div>
    </div>
  
    <div class="searchlist">
     {{ Form::open(array('url' => 'dashboard/search','search')) }}
   
   
    
       <!-- <h2>Search Listing</h2>-->
        {{ Form::text('search','',array('class'=>'span6','id'=>'searchtxt','placeholder'=>'City, Property-type...', 'onfocus'=>'this.placeholder = ""', 'onBlur'=>'this.placeholder = "City, Property-type..."')) }}
        
       {{ Form::submit('Search', array('class' => 'button','id'=>'searchbtn')) }}

   
    {{ Form::close() }}

    {{ Form::open(array('url'=>'dashboard/searchmap'))}}
            {{ Form::hidden('query','',array('id'=>'mapbtn','style'=>'background:#666; color:#fff;'))}}
            {{ Form::submit('Map',array('class' => 'button','id'=>'searchbtnasd'))}}
        {{ Form::close() }}
   
      </div>
      @endif


    @if($group == 1)

   <div id="wrapperheader">
    <div id="sea">	
    	<!--<h2>Search Listing</h2>
    	{{ Form::text('search','',array('class'=>'span6','placeholder'=>'search by city')) }}
    	
       {{ Form::submit('Search', array('class' => 'button')) }}-->

       <div id='cssmenu'>
       <ul>
       <li id="li_home"><a href="{{URL::to('dashboard')}}">Dashboard</a></li>
       <li id="li_agency"><a href="{{URL::to('dashboard/agencies')}}">Agency</a></li>
       <li id="li_profile"><a href="{{URL::to('viewprofile')}}">My Account</a>
        <ul class="innermenu" style="">
         <li id="li_changepass"><a href="{{URL::to('profile')}}">Edit Profile</a></li>
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
     {{ Form::open(array('url' => 'dashboard/search','search')) }}
   
   
    
       <!-- <h2>Search Listing</h2>-->
        {{ Form::text('search','',array('class'=>'span6','id'=>'searchtxt','placeholder'=>'City, Property-type...', 'onfocus'=>'this.placeholder = ""', 'onBlur'=>'this.placeholder = "City, Property-type..."')) }}
        
       {{ Form::submit('Search', array('class' => 'button','id'=>'searchbtn')) }}

   
    {{ Form::close() }}

    {{ Form::open(array('url'=>'dashboard/searchmap'))}}
            {{ Form::hidden('query','',array('id'=>'mapbtn','style'=>'background:#666; color:#fff;'))}}
            {{ Form::submit('Map',array('class' => 'button','id'=>'searchbtnasd'))}}
        {{ Form::close() }}
   
    	</div>
      @endif
      @if($group == 0 & $staff == 0)
        <div id="wrapperheader">
    <div id="sealog"> 
      {{ Form::open(array('url' => 'dashboard/search')) }}
      <h2>Search Listings:</h2>
      {{ Form::text('search','',array('class'=>'span6','id'=>'searchtxt','placeholder'=>'Search By City, Property-Type', 'onfocus'=>'this.placeholder = ""', 'onBlur'=>'this.placeholder = "Search By City, Property-Type"')) }}
      
       {{ Form::submit('Search', array('class' => 'button','id'=>'searchbtn','style'=>'margin-top:29px !important; height:27px !important;')) }}
   
    {{ Form::close() }}

    {{ Form::open(array('url'=>'dashboard/searchmap'))}}
            {{ Form::hidden('query','',array('id'=>'mapbtn','style'=>'background:#666; color:#fff;'))}}
            {{ Form::submit('Map',array('class' => 'button','id'=>'searchbtn','style'=>'margin-top:29px!important; height:27px !important;'))}}
        {{ Form::close() }}
<br/>

    <p>e.g Islamabad, Homes, etc</p>

        
   
      </div>
    </div>
      @endif
    </div><!--search-->
    
	@yield('content')
		
        
    	<div id="footer">
        <div id="wrapper">
        <div class="footerlist1">
        <h2>Zameen Jayedad Team</h2>
        <hr/>
        <div class="image-row">
                
			<div class="image-set">
        <ul style="margin-top:7px;">
        <li><a href="{{URL::to('dashboard/customerservices')}}">Full Customer and Technical Support</a></li>
       
        <li><a class="example-image-link" href="/assets/images/bahria phase 1.jpg" data-lightbox="example-set3" title="Maps">Maps</a></li>
        <div style="display:none">
               <li><a class="example-image-link" href="/assets/images/Phase_2.jpg" data-lightbox="example-set3" title="Being the earliest projects, Phases 1-7 have benefited from all the following developments of
Bahria Town. With every new idea in landscaping, every new monument design and creation of 
possibilities with the import of most modern machinery, Phases 1-7 have been value added with 
awe-inspiring landscaped islands, pagodas, village scenes and thoughtful monuments.
Phases 1-7 offer the most lucrative transaction benefits due to the increased momentum
in house building and private construction activities....

Plot Price '10 Marla 55 Lac'. '20 Marla 95 Lac'"></a></li>
                <li><a class="example-image-link" href="/assets/images/Phase_3.jpg" data-lightbox="example-set3" title="Being the earliest projects, Phases 1-7 have benefited from all the following developments of
Bahria Town. With every new idea in landscaping, every new monument design and creation of 
possibilities with the import of most modern machinery, Phases 1-7 have been value added with 
awe-inspiring landscaped islands, pagodas, village scenes and thoughtful monuments.
Phases 1-7 offer the most lucrative transaction benefits due to the increased momentum
in house building and private construction activities....

Plot Price '10 Marla 55 Lac'. '20 Marla 95 Lac'"></a></li>
                 <li><a class="example-image-link" href="/assets/images/Phase_4.jpg" data-lightbox="example-set3" title="Being the earliest projects, Phases 1-7 have benefited from all the following developments of
Bahria Town. With every new idea in landscaping, every new monument design and creation of 
possibilities with the import of most modern machinery, Phases 1-7 have been value added with 
awe-inspiring landscaped islands, pagodas, village scenes and thoughtful monuments.
Phases 1-7 offer the most lucrative transaction benefits due to the increased momentum
in house building and private construction activities....

Plot Price '10 Marla 55 Lac'. '20 Marla 95 Lac'"></a></li>
                  <li><a class="example-image-link" href="/assets/images/Phase_5.jpg" data-lightbox="example-set3" title="Being the earliest projects, Phases 1-7 have benefited from all the following developments of
Bahria Town. With every new idea in landscaping, every new monument design and creation of 
possibilities with the import of most modern machinery, Phases 1-7 have been value added with 
awe-inspiring landscaped islands, pagodas, village scenes and thoughtful monuments.
Phases 1-7 offer the most lucrative transaction benefits due to the increased momentum
in house building and private construction activities....

Plot Price '10 Marla 55 Lac'. '20 Marla 95 Lac'"></a></li>
                   <li><a class="example-image-link" href="/assets/images/Phase_6.jpg" data-lightbox="example-set3" title="Being the earliest projects, Phases 1-7 have benefited from all the following developments of
Bahria Town. With every new idea in landscaping, every new monument design and creation of 
possibilities with the import of most modern machinery, Phases 1-7 have been value added with 
awe-inspiring landscaped islands, pagodas, village scenes and thoughtful monuments.
Phases 1-7 offer the most lucrative transaction benefits due to the increased momentum
in house building and private construction activities....

Plot Price '10 Marla 55 Lac'. '20 Marla 95 Lac'"></a></li>

<li><a class="example-image-link" href="/assets/images/Phase_7.jpg" data-lightbox="example-set3" title="Being the earliest projects, Phases 1-7 have benefited from all the following developments of
Bahria Town. With every new idea in landscaping, every new monument design and creation of 
possibilities with the import of most modern machinery, Phases 1-7 have been value added with 
awe-inspiring landscaped islands, pagodas, village scenes and thoughtful monuments.
Phases 1-7 offer the most lucrative transaction benefits due to the increased momentum
in house building and private construction activities....

Plot Price '10 Marla 55 Lac'. '20 Marla 95 Lac'"></a></li>
                   
       	
        
      
              
             
              
                
                <li><a class="example-image-link" href="/assets/images/Phase_8_Sector_A.jpg" data-lightbox="example-set3" title="Bahria Town, offer a totally unique chance to own an impressive luxurious residence at a few 
minutes' drive from GT Road Rawalpindi and located besides DHA Phase III. Bahria Homes
are available in two different sizes of 5 and 8 Marla to suit the requirements of both small and 
large families. They are especially designed on grid frame structure which makes them seismic
proof. The villa is lavishly furnished with ceramic tiles, imported fixtures and fitted kitchen with 
designer cabinetry. Add to this, the Villa is fully air conditioned for your convenience.....

Bahria Home, '8 Marla double story Price 1 crore 20 Lakh' and '5 Marla single story Price 60 Lakh'"></a></li>
               
                <li><a class="example-image-link" href="/assets/images/Phase_8_Sector_B.jpg" data-lightbox="example-set3" title="Bahria Town, offer a totally unique chance to own an impressive luxurious residence at a few 
minutes' drive from GT Road Rawalpindi and located besides DHA Phase III. Bahria Homes
are available in two different sizes of 5 and 8 Marla to suit the requirements of both small and 
large families. They are especially designed on grid frame structure which makes them seismic
proof. The villa is lavishly furnished with ceramic tiles, imported fixtures and fitted kitchen with 
designer cabinetry. Add to this, the Villa is fully air conditioned for your convenience.....

Bahria Home, '8 Marla double story Price 1 crore 20 Lakh' and '5 Marla single story Price 60 Lakh'"></a></li>
                <li><a class="example-image-link" href="/assets/images/Phase_8_Sector_C.jpg" data-lightbox="example-set3" title="Bahria Town, offer a totally unique chance to own an impressive luxurious residence at a few 
minutes' drive from GT Road Rawalpindi and located besides DHA Phase III. Bahria Homes
are available in two different sizes of 5 and 8 Marla to suit the requirements of both small and 
large families. They are especially designed on grid frame structure which makes them seismic
proof. The villa is lavishly furnished with ceramic tiles, imported fixtures and fitted kitchen with 
designer cabinetry. Add to this, the Villa is fully air conditioned for your convenience.....

Bahria Home, '8 Marla double story Price 1 crore 20 Lakh' and '5 Marla single story Price 60 Lakh'"></a></li>
                 <li><a class="example-image-link" href="/assets/images/Phase_8_Sector_D.jpg" data-lightbox="example-set3" title="Bahria Town, offer a totally unique chance to own an impressive luxurious residence at a few 
minutes' drive from GT Road Rawalpindi and located besides DHA Phase III. Bahria Homes
are available in two different sizes of 5 and 8 Marla to suit the requirements of both small and 
large families. They are especially designed on grid frame structure which makes them seismic
proof. The villa is lavishly furnished with ceramic tiles, imported fixtures and fitted kitchen with 
designer cabinetry. Add to this, the Villa is fully air conditioned for your convenience.....

Bahria Home, '8 Marla double story Price 1 crore 20 Lakh' and '5 Marla single story Price 60 Lakh'"></a></li>
                  <li><a class="example-image-link" href="/assets/images/Phase_8_Sector_E.jpg" data-lightbox="example-set3" title="Bahria Town, offer a totally unique chance to own an impressive luxurious residence at a few 
minutes' drive from GT Road Rawalpindi and located besides DHA Phase III. Bahria Homes
are available in two different sizes of 5 and 8 Marla to suit the requirements of both small and 
large families. They are especially designed on grid frame structure which makes them seismic
proof. The villa is lavishly furnished with ceramic tiles, imported fixtures and fitted kitchen with 
designer cabinetry. Add to this, the Villa is fully air conditioned for your convenience.....

Bahria Home, '8 Marla double story Price 1 crore 20 Lakh' and '5 Marla single story Price 60 Lakh'"></a></li>
                   <li><a class="example-image-link" href="/assets/images/Phase_8_Sector_F.jpg" data-lightbox="example-set3" title="Bahria Town, offer a totally unique chance to own an impressive luxurious residence at a few 
minutes' drive from GT Road Rawalpindi and located besides DHA Phase III. Bahria Homes
are available in two different sizes of 5 and 8 Marla to suit the requirements of both small and 
large families. They are especially designed on grid frame structure which makes them seismic
proof. The villa is lavishly furnished with ceramic tiles, imported fixtures and fitted kitchen with 
designer cabinetry. Add to this, the Villa is fully air conditioned for your convenience.....

Bahria Home, '8 Marla double story Price 1 crore 20 Lakh' and '5 Marla single story Price 60 Lakh'"></a></li>
                   <li> <a class="example-image-link" href="/assets/images/Phase_8_Sector_G.jpg" data-lightbox="example-set3" title="Bahria Town, offer a totally unique chance to own an impressive luxurious residence at a few 
minutes' drive from GT Road Rawalpindi and located besides DHA Phase III. Bahria Homes
are available in two different sizes of 5 and 8 Marla to suit the requirements of both small and 
large families. They are especially designed on grid frame structure which makes them seismic
proof. The villa is lavishly furnished with ceramic tiles, imported fixtures and fitted kitchen with 
designer cabinetry. Add to this, the Villa is fully air conditioned for your convenience.....

Bahria Home, '8 Marla double story Price 1 crore 20 Lakh' and '5 Marla single story Price 60 Lakh'"></a></li>
                   <li> <a class="example-image-link" href="/assets/images/Phase_8_Sector_H.jpg" data-lightbox="example-set3" title="Bahria Town, offer a totally unique chance to own an impressive luxurious residence at a few 
minutes' drive from GT Road Rawalpindi and located besides DHA Phase III. Bahria Homes
are available in two different sizes of 5 and 8 Marla to suit the requirements of both small and 
large families. They are especially designed on grid frame structure which makes them seismic
proof. The villa is lavishly furnished with ceramic tiles, imported fixtures and fitted kitchen with 
designer cabinetry. Add to this, the Villa is fully air conditioned for your convenience.....

Bahria Home, '8 Marla double story Price 1 crore 20 Lakh' and '5 Marla single story Price 60 Lakh'"></a></li>
                  <li> <a class="example-image-link" href="/assets/images/Phase_8_Sector_I.jpg" data-lightbox="example-set3" title="Bahria Town, offer a totally unique chance to own an impressive luxurious residence at a few 
minutes' drive from GT Road Rawalpindi and located besides DHA Phase III. Bahria Homes
are available in two different sizes of 5 and 8 Marla to suit the requirements of both small and 
large families. They are especially designed on grid frame structure which makes them seismic
proof. The villa is lavishly furnished with ceramic tiles, imported fixtures and fitted kitchen with 
designer cabinetry. Add to this, the Villa is fully air conditioned for your convenience.....

Bahria Home, '8 Marla double story Price 1 crore 20 Lakh' and '5 Marla single story Price 60 Lakh'"></a></li>
                   <li> <a class="example-image-link" href="/assets/images/Phase_8_Sector_J.jpg" data-lightbox="example-set3" title="Bahria Town, offer a totally unique chance to own an impressive luxurious residence at a few 
minutes' drive from GT Road Rawalpindi and located besides DHA Phase III. Bahria Homes
are available in two different sizes of 5 and 8 Marla to suit the requirements of both small and 
large families. They are especially designed on grid frame structure which makes them seismic
proof. The villa is lavishly furnished with ceramic tiles, imported fixtures and fitted kitchen with 
designer cabinetry. Add to this, the Villa is fully air conditioned for your convenience.....

Bahria Home, '8 Marla double story Price 1 crore 20 Lakh' and '5 Marla single story Price 60 Lakh'"></a></li>
                   <li> <a class="example-image-link" href="/assets/images/Phase_8_Sector_K.jpg" data-lightbox="example-set3" title="Bahria Town, offer a totally unique chance to own an impressive luxurious residence at a few 
minutes' drive from GT Road Rawalpindi and located besides DHA Phase III. Bahria Homes
are available in two different sizes of 5 and 8 Marla to suit the requirements of both small and 
large families. They are especially designed on grid frame structure which makes them seismic
proof. The villa is lavishly furnished with ceramic tiles, imported fixtures and fitted kitchen with 
designer cabinetry. Add to this, the Villa is fully air conditioned for your convenience.....

Bahria Home, '8 Marla double story Price 1 crore 20 Lakh' and '5 Marla single story Price 60 Lakh'"></a></li>
                   <li> <a class="example-image-link" href="/assets/images/Phase_8_Sector_L.jpg" data-lightbox="example-set3" title="Bahria Town, offer a totally unique chance to own an impressive luxurious residence at a few 
minutes' drive from GT Road Rawalpindi and located besides DHA Phase III. Bahria Homes
are available in two different sizes of 5 and 8 Marla to suit the requirements of both small and 
large families. They are especially designed on grid frame structure which makes them seismic
proof. The villa is lavishly furnished with ceramic tiles, imported fixtures and fitted kitchen with 
designer cabinetry. Add to this, the Villa is fully air conditioned for your convenience.....

Bahria Home, '8 Marla double story Price 1 crore 20 Lakh' and '5 Marla single story Price 60 Lakh'"></a></li>
                   <li> <a class="example-image-link" href="/assets/images/Phase_8_Sector_M.jpg" data-lightbox="example-set3" title="Bahria Town, offer a totally unique chance to own an impressive luxurious residence at a few 
minutes' drive from GT Road Rawalpindi and located besides DHA Phase III. Bahria Homes
are available in two different sizes of 5 and 8 Marla to suit the requirements of both small and 
large families. They are especially designed on grid frame structure which makes them seismic
proof. The villa is lavishly furnished with ceramic tiles, imported fixtures and fitted kitchen with 
designer cabinetry. Add to this, the Villa is fully air conditioned for your convenience.....

Bahria Home, '8 Marla double story Price 1 crore 20 Lakh' and '5 Marla single story Price 60 Lakh'"></a></li>
                   <li> <a class="example-image-link" href="/assets/images/Phase_8_Sector_N.jpg" data-lightbox="example-set3" title="Bahria Town, offer a totally unique chance to own an impressive luxurious residence at a few 
minutes' drive from GT Road Rawalpindi and located besides DHA Phase III. Bahria Homes
are available in two different sizes of 5 and 8 Marla to suit the requirements of both small and 
large families. They are especially designed on grid frame structure which makes them seismic
proof. The villa is lavishly furnished with ceramic tiles, imported fixtures and fitted kitchen with 
designer cabinetry. Add to this, the Villa is fully air conditioned for your convenience.....

Bahria Home, '8 Marla double story Price 1 crore 20 Lakh' and '5 Marla single story Price 60 Lakh'"></a></li>
                   <li> <a class="example-image-link" href="/assets/images/Phase_8_Sector_P.jpg" data-lightbox="example-set3" title="Bahria Town, offer a totally unique chance to own an impressive luxurious residence at a few 
minutes' drive from GT Road Rawalpindi and located besides DHA Phase III. Bahria Homes
are available in two different sizes of 5 and 8 Marla to suit the requirements of both small and 
large families. They are especially designed on grid frame structure which makes them seismic
proof. The villa is lavishly furnished with ceramic tiles, imported fixtures and fitted kitchen with 
designer cabinetry. Add to this, the Villa is fully air conditioned for your convenience.....

Bahria Home, '8 Marla double story Price 1 crore 20 Lakh' and '5 Marla single story Price 60 Lakh'"></a></li>
                   
                    <li class="sectorshow"> <a class="example-image-link" href="/assets/images/safari valley.jpg" data-lightbox="example-set3" title="Bahria 8 Safari Valley"></a></li>
        </div>
        <li><a href="{{URL::to('dashboard/projectupdates')}}">Project Updates</a></li>
        <li><a href="{{URL::to('dashboard/featuredlistings')}}">Featured Listings</a></li>
        <li><a href="{{URL::to('dashboard/contactus')}}">Contact Zameen Jayedad</a></li>
        <li><a href="{{URL::to('dashboard/ourteam')}}">The Team</a></li>
 		</ul>
        </div>
        </div>
                
        </div>
        
        <div class="footerlist1 footermargin">
        <h2>News and Articles</h2>
        <hr/>
        <ul>
        <li><a href="{{URL::to('dashboard/buyinghome')}}">Buying a Home</a></li>
        <li><a href="{{URL::to('dashboard/sellinghome')}}">Selling Your Home</a></li>
        <li><a href="{{URL::to('dashboard/newdevelopments')}}">New Developments</a></li>
        <li><a href="{{URL::to('dashboard/bahriaupdates')}}">Bahria Town & DHA Updates</a></li>
        <li><a href="{{URL::to('dashboard/faq')}}">FAQ</a></li>
        <li><a href="{{URL::to('dashboard/careers')}}">Career Opportunities</a></li>
        <li><a href="{{URL::to('dashboard/chooseus')}}">Why Choosing US?</a></li>
 		</ul>
                
        </div>
        
        <div class="footerlist1 footermargin">
        <h2>Tools</h2>
        <hr/>
        <ul>
        <li><a href="{{URL::to('dashboard/propertyfinder')}}">Distressed Property Finder</a></li>
        <li><a href="{{URL::to('dashboard/homeevaluation')}}">Home Evaluation</a></li>
        <li><a href="{{URL::to('dashboard/homefinder')}}">Home Finder</a></li>
        <li><a href="{{URL::to('dashboard/recentsale')}}">Recent Sale Prices</a></li>
        <li><a href="{{URL::to('dashboard/buildhouse')}}">Quotes to Build your House</a></li>
        <li><a href="{{URL::to('dashboard/designing')}}">Interior Designing Office / House</a></li>
      
 		</ul>
                
        </div>
        
         <div class="socials">
        <ul>
        <li><a href="https://www.facebook.com/zameenjayedadteam"><img src="/assets/images/facebook.png"></a></li>
        <li><a href="https://pk.linkedin.com/pub/zameen-jayedad/89/333/43b/"><img src="/assets/images/linkedin.png"></a></li>
        <li><a href="https://twitter.com/mohsinmajeed91"><img src="/assets/images/twitter.png"></a></li>
        </ul>
        
        </div>
        
        <hr style="clear:both;">
        
			<p class="foot">Copyright &copy; 2013 Zameen Jayedad Inc. All Rights Reserved</p>
  		</div>
        </div>
        
   	{{ HTML::script('assets/js/jquery-1.10.2.min.js') }}     
	 {{ HTML::script('assets/js/lightbox-2.6.min.js') }}
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