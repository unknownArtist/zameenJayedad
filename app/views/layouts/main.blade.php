<!doctype HTML>
<html>
<head>
	<title>Real estate listing</title>
	{{ HTML::style('assets/css/style.css')}}

</head>
<body>


	<div id="wrapper">
  

	<div id="header">
		<img class="logo" src="assets/images/eri_logo_02.png">
		<!-- {{ HTML::image("assets/images/eri_logo_02.png",'',array('class'=>'logo'))}} -->
		<img class="ban"src="assets/images/banner_photos.png">
	    <a href="#">info@example.com  &nbsp;|&nbsp;</a>
	    <p>604-251-5900</p>
   
	</div><!--header ends-->

	@yield('content')

    	<div id="footer">
			<p class="foot">Copyright &copy; 2013 eCo Realty Inc. All rights reserved.</p>
  		</div>
	</div>
</body>
</html>