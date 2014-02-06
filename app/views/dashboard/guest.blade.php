@extends('layouts.main')
@section('content')
    <p class="erorclas" style="width:282px; float:right; text-align:left; margin-top:-43px;">{{ Session::get('error') }}</p>
    <!--search ends-->
    <div id="wrapper">
    <div id="content">       
       
       <div class="newssec">
<marquee behavior="scroll" direction="left" scrollamount="3" onmouseover="this.stop();" onmouseout="this.start();">
   @if ($latestnews->isEmpty() & $latestjobs->isEmpty() )
   <a href="#">Welcome to zameenjayedad.com...</a>
   @else

@foreach($latestnews as $latestnews)

<a href="{{URL::to('dashboard/latestnews/'.$latestnews->id)}}">{{$latestnews->title}}</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
@endforeach
@foreach($latestjobs as $latestjobs)

<a href="{{URL::to('dashboard/careers/'.$latestjobs->id)}}">{{$latestjobs->title}}</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
@endforeach
@endif
</marquee>
</div>

       <div class="slider">
         <div id="sliderFrame">
        <div id="slider">
            <a href="{{URL::to('dashboard/featuredlistings')}}">
            {{HTML::image('assets/images/slide-1.png', 'Welcome to Zameen Jayedad');}}
                <!--<img src="assets/images/slide1.png" alt="Welcome to Zameen Jayedad" />-->
            </a>

            <a href="{{URL::to('dashboard/featuredlistings')}}">
                 {{HTML::image('assets/images/slide-2.png', 'Market Your Property with Zameen Jayedad Team');}}
            </a>
            
             <a href="{{URL::to('dashboard/featuredlistings')}}">
                {{HTML::image('assets/images/slide-3.png', 'Market Your Property with Zameen Jayedad Team');}}
            </a>
            
             <a href="{{URL::to('dashboard/featuredlistings')}}">
                 {{HTML::image('assets/images/slide-4.png', 'Market Your Property with Zameen Jayedad Team');}}
            </a>
            
            
            <a href="{{URL::to('dashboard/featuredlistings')}}">
                 {{HTML::image('assets/images/slide-5.png', '');}}
            </a>
            
             <a href="{{URL::to('dashboard/featuredlistings')}}">
                 {{HTML::image('assets/images/slide-6.png', 'Market Your Property with Zameen Jayedad Team');}}
            </a>
            
             <a href="{{URL::to('dashboard/featuredlistings')}}">
                 {{HTML::image('assets/images/slide-7.png', 'Market Your Property with Zameen Jayedad Team');}}
            </a>
            
             <a href="{{URL::to('dashboard/featuredlistings')}}">
                 {{HTML::image('assets/images/slide-8.png', 'Market Your Property with Zameen Jayedad Team');}}
            </a>
            
        </div>
    </div>
     



       </div> 

		
        <div class="list">
       	<h1>Listings</h1>
       	<h3>Rawalpindi / Islamabad</h3>
       
       	<ul class="l1">
           @foreach($users as $user)
       		<!-- <li><a href="dashboard/listing/{{$user->id}}">{{$user->property_type}} {{$user->city}} </a></li>-->
       		  @endforeach
              
             
           <li>	<a href="{{URL::to('dashboard/BahriatownPhase1/guest')}}">Bahria town Phase 1</a></li>
                
             
                <li>  <a href="{{URL::to('dashboard/BahriatownPhase2/guest')}}">Bahria town Phase 2</a></li>
                <li>  <a href="{{URL::to('dashboard/BahriatownPhase3/guest')}}">Bahria town Phase 3</a></li>
                 <li>  <a href="{{URL::to('dashboard/BahriatownPhase4/guest')}}">Bahria town Phase 4</a></li>
                  <li>  <a href="{{URL::to('dashboard/BahriatownPhase5/guest')}}">Bahria town Phase 5</a></li>
                   <li>  <a href="{{URL::to('dashboard/BahriatownPhase6/guest')}}">Bahria town Phase 6</a></li>

              <li>  <a href="{{URL::to('dashboard/BahriatownPhase7/guest')}}">Bahria town Phase 7</a></li>
                   
       	</ul>   
        
        <ul class="l2">
           @foreach($users as $user)
       		<!-- <li><a href="dashboard/listing/{{$user->id}}">{{$user->property_type}} {{$user->city}} </a></li>-->
       		  @endforeach
              
             
               <li class="sectorshow"><a href="{{URL::to('dashboard/BahriatownPhase8/guest')}}">Bahria Town Phase 8 (Sectors)</a>
                <ul class="sectors">
                
                <li><a class="example-image-link"href="{{URL::to('dashboard/Sector-A/guest')}}">Sector-A</a></li>
               
               <li><a class="example-image-link"href="{{URL::to('dashboard/Sector-B/guest')}}">Sector-B</a></li>
               <li><a class="example-image-link"href="{{URL::to('dashboard/Sector-C/guest')}}">Sector-C</a></li>
                  <li><a class="example-image-link"href="{{URL::to('dashboard/Sector-D/guest')}}">Sector-D</a></li>
                  <li><a class="example-image-link"href="{{URL::to('dashboard/Sector-E/guest')}}">Sector-E</a></li>
                   <li><a class="example-image-link"href="{{URL::to('dashboard/Sector-F/guest')}}">Sector-F</a></li>
                   <li><a class="example-image-link"href="{{URL::to('dashboard/Sector-G/guest')}}">Sector-G</a></li>
                  <li><a class="example-image-link"href="{{URL::to('dashboard/Sector-H/guest')}}">Sector-H</a></li>
                  <li><a class="example-image-link"href="{{URL::to('dashboard/Sector-I/guest')}}">Sector-I</a></li>
                   <li><a class="example-image-link"href="{{URL::to('dashboard/Sector-J/guest')}}">Sector-J</a></li>
                   <li><a class="example-image-link"href="{{URL::to('dashboard/Sector-K/guest')}}">Sector-K</a></li>
                   <li><a class="example-image-link"href="{{URL::to('dashboard/Sector-L/guest')}}">Sector-L</a></li>
                  <li><a class="example-image-link"href="{{URL::to('dashboard/Sector-M/guest')}}">Sector-M</a></li>
                  <li><a class="example-image-link"href="{{URL::to('dashboard/Sector-N/guest')}}">Sector-N</a></li>
                   <li><a class="example-image-link"href="{{URL::to('dashboard/Sector-P/guest')}}">Sector-P</a></li>
                   </ul>
                    </li>
                    
                    <li class="sectorshow"><a>Bahria Town Phase 8 (Blocks)</a>
                <ul class="sectors">
                
               <li><a class="example-image-link"href="{{URL::to('dashboard/Block-A/guest')}}">Block-A</a></li>

               
               <li><a class="example-image-link"href="{{URL::to('dashboard/Block-B/guest')}}">Block-B</a></li>
                <li><a class="example-image-link"href="{{URL::to('dashboard/Block-C/guest')}}">Block-C</a></li>
                  <li><a class="example-image-link"href="{{URL::to('dashboard/Block-D/guest')}}">Block-D</a></li>
                   <li><a class="example-image-link"href="{{URL::to('dashboard/Block-E/guest')}}">Block-E</a></li>
                    <li><a class="example-image-link"href="{{URL::to('dashboard/Block-F/guest')}}">Block-F</a></li>
                    <li><a class="example-image-link"href="{{URL::to('dashboard/Block-G/guest')}}">Block-G</a></li>
                    <li><a class="example-image-link"href="{{URL::to('dashboard/Block-H/guest')}}">Block-H</a></li>
                  <li><a class="example-image-link"href="{{URL::to('dashboard/Block-I/guest')}}">Block-I</a></li>
                   <li><a class="example-image-link"href="{{URL::to('dashboard/Block-J/guest')}}">Block-J</a></li>
                  <li><a class="example-image-link"href="{{URL::to('dashboard/Block-K/guest')}}">Block-K</a></li>
                  <li><a class="example-image-link"href="{{URL::to('dashboard/Block-L/guest')}}">Block-L</a></li>
                  <li><a class="example-image-link"href="{{URL::to('dashboard/Block-M/guest')}}">Block-M</a></li>
                  <li><a class="example-image-link"href="{{URL::to('dashboard/Block-N/guest')}}">Block-N</a></li>
                  <li><a class="example-image-link"href="{{URL::to('dashboard/Block-O/guest')}}">Block-O</a></li>
                   <li><a class="example-image-link"href="{{URL::to('dashboard/Block-P/guest')}}">Block-P</a></li>
                   </ul>
                    </li>
                    
                     <li class="sectorshow"><a class="example-image-link"href="{{URL::to('dashboard/Phase 8 Safari Valley/guest')}}">Phase 8 Safari Valley</a>
                    
                    <ul class="sectors" style="width:167px;">
                
                <li><a class="example-image-link"href="{{URL::to('dashboard/Abu Bakr Block/guest')}}">Abu Bakr Block</a></li>
                <li><a class="example-image-link"href="{{URL::to('dashboard/Umer Farooq Block/guest')}}">Umer Farooq Block</a></li>
                 <li><a class="example-image-link"href="{{URL::to('dashboard/Usman-e-Ghani Block/guest')}}">Usman-e-Ghani Block</a></li>
                   <li><a class="example-image-link"href="{{URL::to('dashboard/Ali Block/guest')}}">Ali Block</a></li>
                    </ul>
                    </li>
                    <li><a class="example-image-link"href="{{URL::to('dashboard/Rafi Block/guest')}}">Rafi Block</a></li>
                   <li><a class="example-image-link"href="{{URL::to('dashboard/Khalid Block/guest')}}">Khalid Block</a></li>
                    <li><a class="example-image-link"href="{{URL::to('dashboard/Bahria Overseas Enclave Islamabad/guest')}}">Bahria Overseas Enclave Islamabad</a></li>
                     <li><a class="example-image-link"href="{{URL::to('dashboard/DHA 1/guest')}}">DHA 1</a></li>
                     <li><a class="example-image-link"href="{{URL::to('dashboard/DHA 2/guest')}}">DHA 2</a></li>
                
                <!--<li><a href="#">DHA 1</a></li>
                 <li><a href="#">DHA 2</a></li>-->
        
                 
                   
       	</ul>     

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
                  <div id="example">
    	<ul class="listingspan">
         
            @foreach($users as $user)
    		<li style="height:auto !important;">
           
           <div class="listingimg">
            {{Form::image('uploads/photos/'.$user->photo, '', array('class'=>'imagewidth'));}}
             <!-- <img src="/assets/images/thumb_2599676370.jpg " width="100px" height="78px"> -->
             </div>
                 
                <a href="{{URL::to('dashboard/listing/guest/'.$user->id)}}"> <h2> {{$user->property_type}} in {{$user->location}}</h2></a>
                 <span> {{$user->budget}}RS</span><br />
               <!--  <p>{{$user->Description}} </p>-->
                 <span>{{$user->bedroom}} bedrooms | {{$user->bathroom}} bathrooms | {{$user-> l_area}}</span>
                 <hr style="clear:both;">
                
    		 </li>
            
             &nbsp;
             @endforeach
              
    	</ul>
    	</div>
    </div>

		

      </div><!--section ends-->
      </div><!--live-->
       

    <div class="sec-2">

                <h3>Video Tutorials</h3>
               

      <div class="eco">
				
         <!-- @foreach($users as $user)           
    <a href="{{URL::to('dashboard/listing/guest/'.$user->id)}}" title="{{$user->budget}}RS"> 
    {{HTML::image('uploads/photos/'.$user->photo, '', array('class'=>'imagewidthlist'));}}
    </a>             
             @endforeach  -->          
           
       
              
             <iframe frameborder="0" width="185" height="120" src="http://www.dailymotion.com/embed/video/x19zn0o" allowfullscreen></iframe>
             
             <iframe frameborder="0" width="480" height="270" src="http://www.dailymotion.com/embed/video/x19zvsf" allowfullscreen></iframe>
             
             <iframe frameborder="0" width="480" height="270" src="http://www.dailymotion.com/embed/video/x19zsxj" allowfullscreen></iframe>

    </div>
    
    </div><!--sec-2 ends-->
    
    </div>

  </div><!--content ends-->

@stop