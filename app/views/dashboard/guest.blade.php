@extends('layouts.main')
@section('content')
    <!--search ends-->
    <div id="wrapper">
    <div id="content">
       
       <div class="slider">
         <div id="sliderFrame">
        <div id="slider">
            <a href="#">
            {{HTML::image('assets/images/slide1.png', 'Welcome to Zameen Jayedad');}}
                <!--<img src="assets/images/slide1.png" alt="Welcome to Zameen Jayedad" />-->
            </a>

            <a href="#">
                 {{HTML::image('assets/images/slide2.png', 'Welcome to Zameen Jayedad');}}
            </a>
            
             <a href="#">
                {{HTML::image('assets/images/slide3.png', 'Welcome to Zameen Jayedad');}}
            </a>
        </div>
    </div>
       


       </div>
      
		<div class="live">
        <h3>Just Listed <span> <em>Live</em> </span></h3>

        <div class="section">

        
            <!--<div class="post">
                <img class="img" src="assets/images/thumb.png" width="60px" height="47px">  
                <h5>4602 Windsor Street, Vancouver</h5>
                  <p>$1,398,000  - 2,485 sqft, 4 Beds, 3 Baths </p>
                  <p><span>10 min ago</span></p>
            </div>-->
            
                  
                  <div class="recordshow">
    	<ul>
         <marquee direction="up" behavior="scroll" height="285" scrollamount="1" onmouseover="this.stop();" onmouseout="this.start();">
            @foreach($users as $user)
    		<li>
           
            {{Form::image('uploads/photos/'.$user->photo, '', array('class'=>'imagewidth'));}}
             <!-- <img src="/assets/images/thumb_2599676370.jpg " width="100px" height="78px"> -->
                 
                 <h2> {{$user->property_type}} in {{$user->city}}</h2>
                 <span> {{$user->budget}}RS</span><br />
               <!--  <p>{{$user->Description}} </p>-->
                 <span>{{$user->bedroom}} bedrooms | {{$user->bathroom}} bathrooms | {{$user-> l_area}}</span>
                
                
    		 </li>
             <hr style="clear:both;">
             &nbsp;
             @endforeach
              </marquee>
    	</ul>
    	
    </div>

		

      </div><!--section ends-->
      </div><!--live-->   
		
        <div class="list">
       	<h1>Listings</h1>
       	<h3>Rawalpindi / Islamabad</h3>
       	<ul class="l1">
           @foreach($users as $user)
       		<!-- <li><a href="dashboard/listing/{{$user->id}}">{{$user->property_type}} {{$user->city}} </a></li>-->
       		  @endforeach
              <li><a href="#">Bahria town Phase 1</a></li>
               <li><a href="#">Bahria town Phase 2</a></li>
                <li><a href="#">Bahria town Phase 3</a></li>
                 <li><a href="#">Bahria town Phase 4</a></li>
                  <li><a href="#">Bahria town Phase 5</a></li>
                   <li><a href="#">Bahria town Phase 6</a></li>
                   
       	</ul>   
        
        <ul class="l2">
           @foreach($users as $user)
       		<!-- <li><a href="dashboard/listing/{{$user->id}}">{{$user->property_type}} {{$user->city}} </a></li>-->
       		  @endforeach
              <li><a href="#">Bahria town Phase 7</a></li>
               <li><a href="#">Bahria town Phase 8</a></li>
                <li><a href="#">DHA 1</a></li>
                 <li><a href="#">DHA 2</a></li>
                 
                   
       	</ul>     

       </div>  

    <div class="sec-2">

                <h3>Listings</h3>
               

      <div class="eco">
				 {{HTML::image('assets/images/260333193.jpg');}}
                  {{HTML::image('assets/images/260528737.jpg');}}
                   {{HTML::image('assets/images/260570453.jpg');}}
                    {{HTML::image('assets/images/260592693.jpg');}}
              
             
              </div>

    
    
    </div><!--sec-2 ends-->
    
    </div>

  </div><!--content ends-->

@stop