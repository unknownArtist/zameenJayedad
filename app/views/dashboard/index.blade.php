@extends('layouts.main')
@section('content')
    <div id="search">
    
    <div id="sea">	
    	<h2>Search Listing</h2>
    	<input type="text" placeholder="">
    	<a href="#">Search</a>
    	
    </div><!--sea-->
    </div><!--search ends-->

    <div id="content">
       
       <div class="slider">
         <div id="sliderFrame">
        <div id="slider">
            <a href="#">
                <img src="assets/images/slide1.png" alt="Welcome to Zameen Jayedad" />
            </a>

            <a href="#">
                <img src="assets/images/slide2.png" alt="Welcome to Zameen Jayedad" />
            </a>
            
             <a href="#">
                <img src="assets/images/slide3.png" alt="Welcome to Zameen Jayedad" />
            </a>
        </div>
    </div>
       


       </div>

       <div class="list">
       	<h1>Listings</h1>
       	<h3>Greater Vancouver - by Region</h3>
       	<ul class="l1">
       		 <li><a href="#">Vancouver West</a></li>
       		 <li><a href="#">Vancouver East</a></li>
       		 <li><a href="#">Downtown Vancouver</a></li>
       		 <li><a href="#">North Vancouver</a></li>
       		 <li><a href="#">West Vancouver</a></li>
       		 <li><a href="#">Burnaby</a></li>
       		 <li><a href="#">New Westminster</a></li>
       		 <li><a href="#">Coquitlam</a></li>
       	</ul>

       	<ul class="l2">
         		<li><a href="#">Port Moody</a></li>
         		<li><a href="#">Port Coquitlam</a></li>
         		<li><a href="#">Pitt Meadows</a></li>
         		<li><a href="#">Maple Ridge</a></li>
         		<li><a href="#">Mission</a></li>
         		<li><a href="#">Abbotsford</a></li>
         		<li><a href="#">Chilliwack</a></li>
         		<li><a href="#">Langley</a></li>
       	</ul>

       	<ul class="l3">
         		<li><a href="#">Surrey</a></li>
         		<li><a href="#">White Rock</a></li>
         		<li><a href="#">Delta</a></li>
         		<li><a href="#">Richmond</a></li>
         		<li><a href="#">Tsawwassen</a></li>
         		<li><a href="#">Sunshine Coast</a></li>
         		<li><a href="#">Whistler</a></li>
         		<li><a href="#">Squamish</a></li>
       	</ul>

       </div>

    </div><!--content ends-->

    <div id="con">

    <div id="content-2">
      <div class="live">
        <h3>Just Listed <span> <em>Live</em> </span></h3>

        <a class="pause"href="#">pause</a>

        </div><!--live-->

        <div class="section">

        
            <div class="post">
                <img class="img" src="assets/images/thumb.png" width="60px" height="47px">  
                <h5>4602 Windsor Street, Vancouver</h5>
                  <p>$1,398,000  - 2,485 sqft, 4 Beds, 3 Baths </p>
                  <p><span>10 min ago</span></p>
            </div>
             <div class="post">      
                <img class="img" src="assets/images/thumb.png" width="60px" height="47px">
                <h5>40033 Plateau Drive, Squamish</h5>
                  <p>$430,000 - 0 Beds, 0 Baths</p>
                  <p><span>50 min ago</span></p>
             </div>
             <div class="post">
                <img class="img" src="assets/images/thumb.png" width="60px" height="47px">
                <h5>1-7433 16th Street, Burnaby</h5>
                  <p>$499,800 - 1,450 sqft, 3 Beds, 2 Baths</p>
                  <p><span>1 hour ago</span></p>
             </div>
             <div class="post">
                <img class="img" src="assets/images/thumb.png" width="60px" height="47px">
                <h5>4602 Windsor Street, Vancouver</h5>
                  <p>$1,398,000 - 2,485 sqft, 4 Beds, 3 Baths</p>
                  <p><span>2 hour ago</span></p>

            </div>


      </div><!--section ends-->

            
      
    </div><!--content-2 ends-->

    <div class="sec-2">

                <h3>Listings</h3>
               

      <div class="eco">

              <img src="assets/images/260333193.jpg">
              <img src="assets/images/260528737.jpg">
              <img src="assets/images/260570453.jpg">
              <img src="assets/images/260592693.jpg">

      </div>    
    
    </div><!--sec-2 ends-->


    <div class="sec-3">

                
    
    </div><!--sec-3 ends-->



  </div><!--con ends--> 

@stop