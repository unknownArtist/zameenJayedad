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
case 'main':
 $('#li_home').addClass('active') ;
 break;
case 'alljobs':
 $('#li_message').addClass('active') ;
 break;
case 'latestnews':
 $('#li_profile').addClass('active') ;
 break;


}

});

</script> 


</head>
<body>


	<div id="wrapperheader">
  

		<div id="header">
			<div class="logo">
			<a href="{{URL::to('dashboard/guest')}}"><img  src="/assets/images/eri_logo_02.png"></a>
			
			</div><!--logo-img ends-->
            
            <div class="threeimages" style="float:right;">
            <img src="/assets/images/banner_photos_2.png">
            </div>
			
			
   
		</div><!--header ends-->
	</div>
    
    <div id="search">
   
    <div id="wrapperheader">
    <div id="sea">  
      <!--<h2>Search Listing</h2>
      {{ Form::text('search','',array('class'=>'span6','placeholder'=>'search by city')) }}
      
       {{ Form::submit('Search', array('class' => 'button')) }}-->

       <div id='cssmenu' class="srchinmenu">
       <ul>
       <li id="li_home"><a href="{{URL::to('dashboard/admin/main')}}">Dashboard</a></li>
     
       <li id="li_profile"><a href="{{URL::to('dashboard/admin/latestnews')}}">News</a>
       
         
                
        <li id="li_message"><a href="{{URL::to('dashboard/admin/alljobs')}}">jobs</a></li>
       
      
       
       </ul>
       </div>
     
    </div>
    </div>
  
    </div>
	
	@yield('content')

    	 <div id="footer">
        <div id="wrapper">
        
        
        
        
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