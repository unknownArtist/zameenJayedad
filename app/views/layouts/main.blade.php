<!doctype HTML>
<html>
<head>
	<title>Zameen Jayedad</title>

	{{ HTML::style('assets/css/style.css')}}
	{{ HTML::style('assets/css/generic.css')}}
	{{ HTML::style('assets/js/js-image-slider.css') }}
    {{ HTML::style('assets/css/lightbox.css') }}
	{{ HTML::script('assets/js/js-image-slider.js') }}
	{{ HTML::script('assets/js/jquery.js') }}
	{{ HTML::script('assets/js/mcVideoPlugin.js'); }}
	{{ HTML::script('assets/js/Chart.min.js'); }}
   
    {{ HTML::script('assets/js/modernizr.custom.js') }}
    
   
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Karla:400,700">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js"></script>
    
    {{ HTML::script('assets/js/vticker.js'); }}

    <script type="text/javascript">

jQuery(function(){
        $("#searchbtn").click(function(){
			
        $(".errormain").hide();
        var hasError = false;
        var searchReg = /^[a-zA-Z0-9- -]+$/;
        var searchVal = $("#searchtxt").val();
        if(searchVal == '') {
            $("#searchtxt").after('<span class="errormain">Please enter a search term.</span>');
            hasError = true;
        } else if(!searchReg.test(searchVal)) {
            $("#searchtxt").after('<span class="errormain">Enter valid text.</span>');
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
			<a href="{{URL::to('dashboard/guest')}}"><img  src="/assets/images/eri_logo_03.png"></a>
			
			</div><!--logo-img ends-->
            
            <div class="threeimages">
            <img src="/assets/images/banner_photos_2.png">
            </div>
			
			<div class="contact">
			{{ HTML::link('login','LOGIN',array('class'=>'log'))}}
			{{ HTML::link('user/register','REGISTER',array('class'=>'log'))}}
		    <a href="#"> contact@zameenjayedad.com   </a>
		    <p>03225050989</p>
            <p>03355257555</p>
		    </div>
   
		</div><!--header ends-->
	</div>
    
    <div id="search">
   
   <div id="wrapperheader">
    <div id="sealog">	
    	{{ Form::open(array('url' => 'dashboard/searchguest')) }}
    	<h2>Search Listings:</h2>
    	{{ Form::text('search','',array('class'=>'span6','id'=>'searchtxt','placeholder'=>'Search By City, Property-Type', 'onfocus'=>'this.placeholder = ""', 'onBlur'=>'this.placeholder = "Search By City, Property-Type"')) }}
    	
       {{ Form::submit('Search', array('class' => 'button','id'=>'searchbtn','style'=>'margin-top:29px !important; height:27px !important;')) }}
   
    {{ Form::close() }}

    {{ Form::open(array('url'=>'dashboard/search/map'))}}
            {{ Form::hidden('query','',array('id'=>'mapbtn','style'=>'background:#666; color:#fff;'))}}
            {{ Form::submit('Map',array('class' => 'button','id'=>'searchbtn','style'=>'margin-top:29px!important; height:27px !important;'))}}
        {{ Form::close() }}
<br/>

    <p>e.g Islamabad, Homes, etc</p>

        
   
    	</div>
    </div>
    </div>
	
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
        
        <li><a class="example-image-link" href="/assets/images/bahria phase 1.jpg" data-lightbox="example-set4" title="Maps">Maps</a></li>
        <div style="display:none">
               <li><a class="example-image-link" href="/assets/images/Phase_2.jpg" data-lightbox="example-set4" title="Being the earliest projects, Phases 1-7 have benefited from all the following developments of
Bahria Town. With every new idea in landscaping, every new monument design and creation of 
possibilities with the import of most modern machinery, Phases 1-7 have been value added with 
awe-inspiring landscaped islands, pagodas, village scenes and thoughtful monuments.
Phases 1-7 offer the most lucrative transaction benefits due to the increased momentum
in house building and private construction activities....

Plot Price '10 Marla 55 Lac'. '20 Marla 95 Lac'"></a></li>
                <li><a class="example-image-link" href="/assets/images/Phase_3.jpg" data-lightbox="example-set4" title="Being the earliest projects, Phases 1-7 have benefited from all the following developments of
Bahria Town. With every new idea in landscaping, every new monument design and creation of 
possibilities with the import of most modern machinery, Phases 1-7 have been value added with 
awe-inspiring landscaped islands, pagodas, village scenes and thoughtful monuments.
Phases 1-7 offer the most lucrative transaction benefits due to the increased momentum
in house building and private construction activities....

Plot Price '10 Marla 55 Lac'. '20 Marla 95 Lac'"></a></li>
                 <li><a class="example-image-link" href="/assets/images/Phase_4.jpg" data-lightbox="example-set4" title="Being the earliest projects, Phases 1-7 have benefited from all the following developments of
Bahria Town. With every new idea in landscaping, every new monument design and creation of 
possibilities with the import of most modern machinery, Phases 1-7 have been value added with 
awe-inspiring landscaped islands, pagodas, village scenes and thoughtful monuments.
Phases 1-7 offer the most lucrative transaction benefits due to the increased momentum
in house building and private construction activities....

Plot Price '10 Marla 55 Lac'. '20 Marla 95 Lac'"></a></li>
                  <li><a class="example-image-link" href="/assets/images/Phase_5.jpg" data-lightbox="example-set4" title="Being the earliest projects, Phases 1-7 have benefited from all the following developments of
Bahria Town. With every new idea in landscaping, every new monument design and creation of 
possibilities with the import of most modern machinery, Phases 1-7 have been value added with 
awe-inspiring landscaped islands, pagodas, village scenes and thoughtful monuments.
Phases 1-7 offer the most lucrative transaction benefits due to the increased momentum
in house building and private construction activities....

Plot Price '10 Marla 55 Lac'. '20 Marla 95 Lac'"></a></li>
                   <li><a class="example-image-link" href="/assets/images/Phase_6.jpg" data-lightbox="example-set4" title="Being the earliest projects, Phases 1-7 have benefited from all the following developments of
Bahria Town. With every new idea in landscaping, every new monument design and creation of 
possibilities with the import of most modern machinery, Phases 1-7 have been value added with 
awe-inspiring landscaped islands, pagodas, village scenes and thoughtful monuments.
Phases 1-7 offer the most lucrative transaction benefits due to the increased momentum
in house building and private construction activities....

Plot Price '10 Marla 55 Lac'. '20 Marla 95 Lac'"></a></li>

<li><a class="example-image-link" href="/assets/images/Phase_7.jpg" data-lightbox="example-set4" title="Being the earliest projects, Phases 1-7 have benefited from all the following developments of
Bahria Town. With every new idea in landscaping, every new monument design and creation of 
possibilities with the import of most modern machinery, Phases 1-7 have been value added with 
awe-inspiring landscaped islands, pagodas, village scenes and thoughtful monuments.
Phases 1-7 offer the most lucrative transaction benefits due to the increased momentum
in house building and private construction activities....

Plot Price '10 Marla 55 Lac'. '20 Marla 95 Lac'"></a></li>
                   
       	
        
      
              
             
              
                
                <li><a class="example-image-link" href="/assets/images/Phase_8_Sector_A.jpg" data-lightbox="example-set4" title="Bahria Town, offer a totally unique chance to own an impressive luxurious residence at a few 
minutes' drive from GT Road Rawalpindi and located besides DHA Phase III. Bahria Homes
are available in two different sizes of 5 and 8 Marla to suit the requirements of both small and 
large families. They are especially designed on grid frame structure which makes them seismic
proof. The villa is lavishly furnished with ceramic tiles, imported fixtures and fitted kitchen with 
designer cabinetry. Add to this, the Villa is fully air conditioned for your convenience.....

Bahria Home, '8 Marla double story Price 1 crore 20 Lakh' and '5 Marla single story Price 60 Lakh'"></a></li>
               
                <li><a class="example-image-link" href="/assets/images/Phase_8_Sector_B.jpg" data-lightbox="example-set4" title="Bahria Town, offer a totally unique chance to own an impressive luxurious residence at a few 
minutes' drive from GT Road Rawalpindi and located besides DHA Phase III. Bahria Homes
are available in two different sizes of 5 and 8 Marla to suit the requirements of both small and 
large families. They are especially designed on grid frame structure which makes them seismic
proof. The villa is lavishly furnished with ceramic tiles, imported fixtures and fitted kitchen with 
designer cabinetry. Add to this, the Villa is fully air conditioned for your convenience.....

Bahria Home, '8 Marla double story Price 1 crore 20 Lakh' and '5 Marla single story Price 60 Lakh'"></a></li>
                <li><a class="example-image-link" href="/assets/images/Phase_8_Sector_C.jpg" data-lightbox="example-set4" title="Bahria Town, offer a totally unique chance to own an impressive luxurious residence at a few 
minutes' drive from GT Road Rawalpindi and located besides DHA Phase III. Bahria Homes
are available in two different sizes of 5 and 8 Marla to suit the requirements of both small and 
large families. They are especially designed on grid frame structure which makes them seismic
proof. The villa is lavishly furnished with ceramic tiles, imported fixtures and fitted kitchen with 
designer cabinetry. Add to this, the Villa is fully air conditioned for your convenience.....

Bahria Home, '8 Marla double story Price 1 crore 20 Lakh' and '5 Marla single story Price 60 Lakh'"></a></li>
                 <li><a class="example-image-link" href="/assets/images/Phase_8_Sector_D.jpg" data-lightbox="example-set4" title="Bahria Town, offer a totally unique chance to own an impressive luxurious residence at a few 
minutes' drive from GT Road Rawalpindi and located besides DHA Phase III. Bahria Homes
are available in two different sizes of 5 and 8 Marla to suit the requirements of both small and 
large families. They are especially designed on grid frame structure which makes them seismic
proof. The villa is lavishly furnished with ceramic tiles, imported fixtures and fitted kitchen with 
designer cabinetry. Add to this, the Villa is fully air conditioned for your convenience.....

Bahria Home, '8 Marla double story Price 1 crore 20 Lakh' and '5 Marla single story Price 60 Lakh'"></a></li>
                  <li><a class="example-image-link" href="/assets/images/Phase_8_Sector_E.jpg" data-lightbox="example-set4" title="Bahria Town, offer a totally unique chance to own an impressive luxurious residence at a few 
minutes' drive from GT Road Rawalpindi and located besides DHA Phase III. Bahria Homes
are available in two different sizes of 5 and 8 Marla to suit the requirements of both small and 
large families. They are especially designed on grid frame structure which makes them seismic
proof. The villa is lavishly furnished with ceramic tiles, imported fixtures and fitted kitchen with 
designer cabinetry. Add to this, the Villa is fully air conditioned for your convenience.....

Bahria Home, '8 Marla double story Price 1 crore 20 Lakh' and '5 Marla single story Price 60 Lakh'"></a></li>
                   <li><a class="example-image-link" href="/assets/images/Phase_8_Sector_F.jpg" data-lightbox="example-set4" title="Bahria Town, offer a totally unique chance to own an impressive luxurious residence at a few 
minutes' drive from GT Road Rawalpindi and located besides DHA Phase III. Bahria Homes
are available in two different sizes of 5 and 8 Marla to suit the requirements of both small and 
large families. They are especially designed on grid frame structure which makes them seismic
proof. The villa is lavishly furnished with ceramic tiles, imported fixtures and fitted kitchen with 
designer cabinetry. Add to this, the Villa is fully air conditioned for your convenience.....

Bahria Home, '8 Marla double story Price 1 crore 20 Lakh' and '5 Marla single story Price 60 Lakh'"></a></li>
                   <li> <a class="example-image-link" href="/assets/images/Phase_8_Sector_G.jpg" data-lightbox="example-set4" title="Bahria Town, offer a totally unique chance to own an impressive luxurious residence at a few 
minutes' drive from GT Road Rawalpindi and located besides DHA Phase III. Bahria Homes
are available in two different sizes of 5 and 8 Marla to suit the requirements of both small and 
large families. They are especially designed on grid frame structure which makes them seismic
proof. The villa is lavishly furnished with ceramic tiles, imported fixtures and fitted kitchen with 
designer cabinetry. Add to this, the Villa is fully air conditioned for your convenience.....

Bahria Home, '8 Marla double story Price 1 crore 20 Lakh' and '5 Marla single story Price 60 Lakh'"></a></li>
                   <li> <a class="example-image-link" href="/assets/images/Phase_8_Sector_H.jpg" data-lightbox="example-set4" title="Bahria Town, offer a totally unique chance to own an impressive luxurious residence at a few 
minutes' drive from GT Road Rawalpindi and located besides DHA Phase III. Bahria Homes
are available in two different sizes of 5 and 8 Marla to suit the requirements of both small and 
large families. They are especially designed on grid frame structure which makes them seismic
proof. The villa is lavishly furnished with ceramic tiles, imported fixtures and fitted kitchen with 
designer cabinetry. Add to this, the Villa is fully air conditioned for your convenience.....

Bahria Home, '8 Marla double story Price 1 crore 20 Lakh' and '5 Marla single story Price 60 Lakh'"></a></li>
                  <li> <a class="example-image-link" href="/assets/images/Phase_8_Sector_I.jpg" data-lightbox="example-set4" title="Bahria Town, offer a totally unique chance to own an impressive luxurious residence at a few 
minutes' drive from GT Road Rawalpindi and located besides DHA Phase III. Bahria Homes
are available in two different sizes of 5 and 8 Marla to suit the requirements of both small and 
large families. They are especially designed on grid frame structure which makes them seismic
proof. The villa is lavishly furnished with ceramic tiles, imported fixtures and fitted kitchen with 
designer cabinetry. Add to this, the Villa is fully air conditioned for your convenience.....

Bahria Home, '8 Marla double story Price 1 crore 20 Lakh' and '5 Marla single story Price 60 Lakh'"></a></li>
                   <li> <a class="example-image-link" href="/assets/images/Phase_8_Sector_J.jpg" data-lightbox="example-set4" title="Bahria Town, offer a totally unique chance to own an impressive luxurious residence at a few 
minutes' drive from GT Road Rawalpindi and located besides DHA Phase III. Bahria Homes
are available in two different sizes of 5 and 8 Marla to suit the requirements of both small and 
large families. They are especially designed on grid frame structure which makes them seismic
proof. The villa is lavishly furnished with ceramic tiles, imported fixtures and fitted kitchen with 
designer cabinetry. Add to this, the Villa is fully air conditioned for your convenience.....

Bahria Home, '8 Marla double story Price 1 crore 20 Lakh' and '5 Marla single story Price 60 Lakh'"></a></li>
                   <li> <a class="example-image-link" href="/assets/images/Phase_8_Sector_K.jpg" data-lightbox="example-set4" title="Bahria Town, offer a totally unique chance to own an impressive luxurious residence at a few 
minutes' drive from GT Road Rawalpindi and located besides DHA Phase III. Bahria Homes
are available in two different sizes of 5 and 8 Marla to suit the requirements of both small and 
large families. They are especially designed on grid frame structure which makes them seismic
proof. The villa is lavishly furnished with ceramic tiles, imported fixtures and fitted kitchen with 
designer cabinetry. Add to this, the Villa is fully air conditioned for your convenience.....

Bahria Home, '8 Marla double story Price 1 crore 20 Lakh' and '5 Marla single story Price 60 Lakh'"></a></li>
                   <li> <a class="example-image-link" href="/assets/images/Phase_8_Sector_L.jpg" data-lightbox="example-set4" title="Bahria Town, offer a totally unique chance to own an impressive luxurious residence at a few 
minutes' drive from GT Road Rawalpindi and located besides DHA Phase III. Bahria Homes
are available in two different sizes of 5 and 8 Marla to suit the requirements of both small and 
large families. They are especially designed on grid frame structure which makes them seismic
proof. The villa is lavishly furnished with ceramic tiles, imported fixtures and fitted kitchen with 
designer cabinetry. Add to this, the Villa is fully air conditioned for your convenience.....

Bahria Home, '8 Marla double story Price 1 crore 20 Lakh' and '5 Marla single story Price 60 Lakh'"></a></li>
                   <li> <a class="example-image-link" href="/assets/images/Phase_8_Sector_M.jpg" data-lightbox="example-set4" title="Bahria Town, offer a totally unique chance to own an impressive luxurious residence at a few 
minutes' drive from GT Road Rawalpindi and located besides DHA Phase III. Bahria Homes
are available in two different sizes of 5 and 8 Marla to suit the requirements of both small and 
large families. They are especially designed on grid frame structure which makes them seismic
proof. The villa is lavishly furnished with ceramic tiles, imported fixtures and fitted kitchen with 
designer cabinetry. Add to this, the Villa is fully air conditioned for your convenience.....

Bahria Home, '8 Marla double story Price 1 crore 20 Lakh' and '5 Marla single story Price 60 Lakh'"></a></li>
                   <li> <a class="example-image-link" href="/assets/images/Phase_8_Sector_N.jpg" data-lightbox="example-set4" title="Bahria Town, offer a totally unique chance to own an impressive luxurious residence at a few 
minutes' drive from GT Road Rawalpindi and located besides DHA Phase III. Bahria Homes
are available in two different sizes of 5 and 8 Marla to suit the requirements of both small and 
large families. They are especially designed on grid frame structure which makes them seismic
proof. The villa is lavishly furnished with ceramic tiles, imported fixtures and fitted kitchen with 
designer cabinetry. Add to this, the Villa is fully air conditioned for your convenience.....

Bahria Home, '8 Marla double story Price 1 crore 20 Lakh' and '5 Marla single story Price 60 Lakh'"></a></li>
                   <li> <a class="example-image-link" href="/assets/images/Phase_8_Sector_P.jpg" data-lightbox="example-set4" title="Bahria Town, offer a totally unique chance to own an impressive luxurious residence at a few 
minutes' drive from GT Road Rawalpindi and located besides DHA Phase III. Bahria Homes
are available in two different sizes of 5 and 8 Marla to suit the requirements of both small and 
large families. They are especially designed on grid frame structure which makes them seismic
proof. The villa is lavishly furnished with ceramic tiles, imported fixtures and fitted kitchen with 
designer cabinetry. Add to this, the Villa is fully air conditioned for your convenience.....

Bahria Home, '8 Marla double story Price 1 crore 20 Lakh' and '5 Marla single story Price 60 Lakh'"></a></li>
                   
                    <li class="sectorshow"> <a class="example-image-link" href="/assets/images/safari valley.jpg" data-lightbox="example-set4" title="Bahria 8 Safari Valley"></a></li>
        </div>
        <li><a href="{{URL::to('dashboard/projectupdates')}}">Project Updates</a></li>
        <li><a href="{{URL::to('dashboard/featuredlistings')}}">Featured Listings</a></li>
        <li><a href="{{URL::to('dashboard/contactus')}}">Contact Zameen Jayedad</a></li>
        <li><a href="{{URL::to('dashboard/team')}}">The Team</a></li>
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
        <li><a href="http://www.youtube.com/channel/UCL_iUoWOo_4DtvHFjD_V6qw"><img src="/assets/images/youtube.png"></a></li>
        </ul>
        
        </div>
        
        <hr style="clear:both;">
			<p class="foot">Copyright &copy; 2013 Zameen Jayedad Inc. All Rights Reserved</p>
  		</div>
        </div>
        
    {{ HTML::script('assets/js/jquery-1.10.2.min.js') }}
    {{ HTML::script('assets/js/lightbox-2.6.min.js') }}

	<script>
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-2196019-1']);
	_gaq.push(['_trackPageview']);

	(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();
	</script>
    
    <!-- mibew button -->
  <!-- <a href="/public/support/client.php?locale=en" style="position:fixed; bottom:0;" target="_blank" onClick="if(navigator.userAgent.toLowerCase().indexOf('opera') != -1 &amp;&amp;
     window.event.preventDefault) window.event.preventDefault();this.newWindow = window.open(&#039;/public/support/client.php?locale=en&amp;url=&#039;+escape(document.location.href)+&#039;&amp;referrer=&#039;+escape(document.referrer),
      'Zameen Jayedad', 'toolbar=0,scrollbars=0,location=0,status=1,menubar=0,width=640,height=480,resizable=1');this.newWindow.focus();this.newWindow.opener=window;return false;">
      <img src="/public/support/b.php?i=mibew&amp;lang=en" border="0" width="163" height="61" style="position:fixed; bottom:5px; right:5px;" alt=""/></a><!-- / mibew button -->

<!--Add the following script at the bottom of the web page-->
<script type="text/javascript" src="https://mylivechat.com/chatinline.aspx?hccid=28988909"></script>




</body>
</html>