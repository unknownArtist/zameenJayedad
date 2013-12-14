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


	<div id="wrapper">
  

		<div id="header">
			<div class="logo">
			<img  src="/assets/images/eri_logo_02.png">
			
			</div><!--logo-img ends-->
			
			<div class="contact">
			{{ HTML::link('login','LOGIN',array('class'=>'log'))}}
			{{ HTML::link('user/register','REGISTER',array('class'=>'log'))}}
		    <a href="#"> contact@zameenjayedad.com   </a>
		    <p>+923225050989</p>
		    </div>
   
		</div><!--header ends-->
	</div>
	
	@yield('content')
</div>
    	<div id="footer">
			<p class="foot">Copyright &copy; 2013 zameen jayedad inc | Office F-1 Rauf Tower DHA phase 2, Gate1, Islamabad</p>
  		</div>

</body>
</html>