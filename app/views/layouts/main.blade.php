<!doctype HTML>
<html>
<head>
	<title>Zameen Jayedad</title>

	{{ HTML::style('assets/css/style.css')}}
	{{ HTML::style('assets/css/generic.css')}}
	{{ HTML::style('assets/js/js-image-slider.css') }}
	{{ HTML::script('assets/js/js-image-slider.js') }}
	{{ HTML::script('assets/js/jquery.js') }}
	{{ HTML::script('assets/js/mcVideoPlugin.js'); }}
	{{ HTML::script('assets/js/Chart.min.js'); }}

    


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
			{{ HTML::link('login','LOGIN',array('class'=>'log'))}}
			{{ HTML::link('user/register','REGISTER',array('class'=>'log'))}}
		    <a href="#"> contact@zameenjayedad.com   </a>
		    <p>+923225050989</p>
		    </div>
   
		</div><!--header ends-->
	</div>
    
    <div id="search">
   
   <div id="wrapperheader">
    <div id="sealog">	
    	{{ Form::open(array('url' => 'dashboard/search')) }}
    	<h2>Search Listings:</h2>
    	{{ Form::text('search','',array('class'=>'span6','id'=>'searchtxt','placeholder'=>'Search By City, Property-Type')) }}
    	
       {{ Form::submit('Search', array('class' => 'button','id'=>'searchbtn','style'=>'margin-top:29px !important; height:27px !important;')) }}
   
    {{ Form::close() }}<br/>
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

</body>
</html>