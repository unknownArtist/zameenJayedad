<!doctype HTML>
<html>
<head>
	<title>Zameen Jayedad</title>
	{{ HTML::style('assets/css/style.css')}}
	{{ HTML::style('assets/css/generic.css')}}
	{{ HTML::style('assets/js/js-image-slider.css'); }}
	{{ HTML::script('assets/js/js-image-slider.js'); }}
	{{ HTML::script('assets/js/mcVideoPlugin.js'); }}
    


</head>
<body>


	<div id="wrapper">
  

		<div id="header">
			<img class="logo" src="/assets/images/eri_logo_02.png">
			<!-- {{ HTML::image("assets/images/eri_logo_02.png",'',array('class'=>'logo'))}} -->
			<!--<img class="ban"src="/assets/images/banner_photos.png">-->
			<div class="contact">
		    <a href="#"> contact@zameenjayedad.com   </a>
		    <p>+923225050989</p>
		    </div>
   
		</div><!--header ends-->
	</div>
	@yield('content')

    	<div id="footer">
			<p class="foot">Copyright &copy; 2013 zameen jayedad inc | Office F-1 Rauf Tower DHA phase 2, Gate1, Islamabad</p>
  		</div>

</body>
</html>