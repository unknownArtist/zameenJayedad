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
			<a href="{{URL::to('dashboard/guest')}}"><img  src="/assets/images/eri_logo_02.png"></a>
			
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
        <ul>
        <li><a href="#">Full Customer and Technical Support</a></li>
        <li><a href="#">No Fake properties or Fake Agents</a></li>
        <li><a href="#">Property confirmation before getting Live</a></li>
        <li><a href="#">Property Updates</a></li>
        <li><a href="#">Featured Listings</a></li>
        <li><a href="#">Contact Zameen Jayedad</a></li>
        <li><a href="{{URL::to('dashboard/team')}}">The Team</a></li>
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

</body>
</html>