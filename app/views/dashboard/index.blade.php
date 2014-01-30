@extends('layouts.login')
@section('content')
	
    <!--search ends-->
    <div id="wrapper">
    <div id="content">
    
     <div class="newssec">
<marquee behavior="scroll" direction="left" scrollamount="3" onmouseover="this.stop();" onmouseout="this.start();">

<a href="#">Welcome to zameenjayedad.com...</a>

</marquee>
</div>
       <p class="erorclas" style="">{{ Session::get('error') }}</p>
       <div class="slider">
         <div id="sliderFrame">
        <div id="slider">
            <a href="{{URL::to('dashboard/featuredlisting')}}">
                <img src="assets/images/slide-1.png" alt="Welcome to Zameen Jayedad" />
            </a>

            <a href="{{URL::to('dashboard/featuredlisting')}}">
                <img src="assets/images/slide-2.png" alt="Market Your Property with Zameen Jayedad Team" />
            </a>
            
             <a href="{{URL::to('dashboard/featuredlisting')}}">
                <img src="assets/images/slide-3.png" alt="Market Your Property with Zameen Jayedad Team" />
            </a>
             <a href="{{URL::to('dashboard/featuredlisting')}}">
                <img src="assets/images/slide-4.png" alt="Market Your Property with Zameen Jayedad Team" />
            </a>

            <a href="{{URL::to('dashboard/featuredlisting')}}">
                <img src="assets/images/slide-5.png" alt="" />
            </a>
            
             <a href="{{URL::to('dashboard/featuredlisting')}}">
                <img src="assets/images/slide-6.png" alt="Market Your Property with Zameen Jayedad Team" />
            </a>
             <a href="{{URL::to('dashboard/featuredlisting')}}">
                <img src="assets/images/slide-7.png" alt="Market Your Property with Zameen Jayedad Team" />
            </a>

            <a href="{{URL::to('dashboard/featuredlisting')}}">
                <img src="assets/images/slide-8.png" alt="Market Your Property with Zameen Jayedad Team" />
            </a>
            
             
        </div>
    </div>
       


       </div>     
		   
		
        <div class="list">
       	<h1>Listings</h1>
       	<h3>Rawalpindi / Islamabad</h3>
        <div class="image-row">
                
			<div class="image-set">
       	<ul class="l1">
           @foreach($users as $user)
       		<!-- <li><a href="dashboard/listing/{{$user->id}}">{{$user->property_type}} {{$user->city}} </a></li>-->
       		  @endforeach
              
             
           <li>	<a href="{{URL::to('dashboard/BahriatownPhase1')}}">Bahria town Phase 1</a></li>
                
             
                <li>  <a href="{{URL::to('dashboard/BahriatownPhase2')}}">Bahria town Phase 2</a></li>
                <li>  <a href="{{URL::to('dashboard/BahriatownPhase3')}}">Bahria town Phase 3</a></li>
                 <li>  <a href="{{URL::to('dashboard/BahriatownPhase4')}}">Bahria town Phase 4</a></li>
                  <li>  <a href="{{URL::to('dashboard/BahriatownPhase5')}}">Bahria town Phase 5</a></li>
                   <li>  <a href="{{URL::to('dashboard/BahriatownPhase6')}}">Bahria town Phase 6</a></li>

              <li>  <a href="{{URL::to('dashboard/BahriatownPhase7')}}">Bahria town Phase 7</a></li>
                   
       	</ul>   
        
        <ul class="l2">
           @foreach($users as $user)
       		<!-- <li><a href="dashboard/listing/{{$user->id}}">{{$user->property_type}} {{$user->city}} </a></li>-->
       		  @endforeach
              
             
               <li class="sectorshow"><a href="{{URL::to('dashboard/BahriatownPhase8')}}">Bahria Town Phase 8 (Sectors)</a>
                <ul class="sectors">
                
                <li><a class="example-image-link"href="{{URL::to('dashboard/Sector-A')}}">Sector-A</a></li>
               
               <li><a class="example-image-link"href="{{URL::to('dashboard/Sector-B')}}">Sector-B</a></li>
               <li><a class="example-image-link"href="{{URL::to('dashboard/Sector-C')}}">Sector-C</a></li>
                  <li><a class="example-image-link"href="{{URL::to('dashboard/Sector-D')}}">Sector-D</a></li>
                  <li><a class="example-image-link"href="{{URL::to('dashboard/Sector-E')}}">Sector-E</a></li>
                   <li><a class="example-image-link"href="{{URL::to('dashboard/Sector-F')}}">Sector-F</a></li>
                   <li><a class="example-image-link"href="{{URL::to('dashboard/Sector-G')}}">Sector-G</a></li>
                  <li><a class="example-image-link"href="{{URL::to('dashboard/Sector-H')}}">Sector-H</a></li>
                  <li><a class="example-image-link"href="{{URL::to('dashboard/Sector-I')}}">Sector-I</a></li>
                   <li><a class="example-image-link"href="{{URL::to('dashboard/Sector-J')}}">Sector-J</a></li>
                   <li><a class="example-image-link"href="{{URL::to('dashboard/Sector-K')}}">Sector-K</a></li>
                   <li><a class="example-image-link"href="{{URL::to('dashboard/Sector-L')}}">Sector-L</a></li>
                  <li><a class="example-image-link"href="{{URL::to('dashboard/Sector-M')}}">Sector-M</a></li>
                  <li><a class="example-image-link"href="{{URL::to('dashboard/Sector-N')}}">Sector-N</a></li>
                   <li><a class="example-image-link"href="{{URL::to('dashboard/Sector-P')}}">Sector-P</a></li>
                   </ul>
                    </li>
                    
                    <li class="sectorshow"><a>Bahria Town Phase 8 (Blocks)</a>
                <ul class="sectors">
                
               <li><a class="example-image-link"href="{{URL::to('dashboard/Block-A')}}">Block-A</a></li>

               
               <li><a class="example-image-link"href="{{URL::to('dashboard/Block-B')}}">Block-B</a></li>
                <li><a class="example-image-link"href="{{URL::to('dashboard/Block-C')}}">Block-C</a></li>
                  <li><a class="example-image-link"href="{{URL::to('dashboard/Block-D')}}">Block-D</a></li>
                   <li><a class="example-image-link"href="{{URL::to('dashboard/Block-E')}}">Block-E</a></li>
                    <li><a class="example-image-link"href="{{URL::to('dashboard/Block-F')}}">Block-F</a></li>
                    <li><a class="example-image-link"href="{{URL::to('dashboard/Block-G')}}">Block-G</a></li>
                    <li><a class="example-image-link"href="{{URL::to('dashboard/Block-H')}}">Block-H</a></li>
                  <li><a class="example-image-link"href="{{URL::to('dashboard/Block-I')}}">Block-I</a></li>
                   <li><a class="example-image-link"href="{{URL::to('dashboard/Block-J')}}">Block-J</a></li>
                  <li><a class="example-image-link"href="{{URL::to('dashboard/Block-K')}}">Block-K</a></li>
                  <li><a class="example-image-link"href="{{URL::to('dashboard/Block-L')}}">Block-L</a></li>
                  <li><a class="example-image-link"href="{{URL::to('dashboard/Block-M')}}">Block-M</a></li>
                  <li><a class="example-image-link"href="{{URL::to('dashboard/Block-N')}}">Block-N</a></li>
                  <li><a class="example-image-link"href="{{URL::to('dashboard/Block-O')}}">Block-O</a></li>
                   <li><a class="example-image-link"href="{{URL::to('dashboard/Block-P')}}">Block-P</a></li>
                   </ul>
                    </li>
                    
                     <li class="sectorshow"><a class="example-image-link"href="{{URL::to('dashboard/Phase 8 Safari Valley')}}">Phase 8 Safari Valley</a>
                    
                    <ul class="sectors" style="width:167px;">
                
                <li><a class="example-image-link"href="{{URL::to('dashboard/Abu Bakr Block')}}">Abu Bakr Block</a></li>
                <li><a class="example-image-link"href="{{URL::to('dashboard/Umer Farooq Block')}}">Umer Farooq Block</a></li>
                 <li><a class="example-image-link"href="{{URL::to('dashboard/Usman-e-Ghani Block')}}">Usman-e-Ghani Block</a></li>
                   <li><a class="example-image-link"href="{{URL::to('dashboard/Ali Block')}}">Ali Block</a></li>
                    </ul>
                    </li>
                    <li><a class="example-image-link"href="{{URL::to('dashboard/Rafi Block')}}">Rafi Block</a></li>
                   <li><a class="example-image-link"href="{{URL::to('dashboard/Khalid Block')}}">Khalid Block</a></li>
                    <li><a class="example-image-link"href="{{URL::to('dashboard/Bahria Overseas Enclave Islamabad')}}">Bahria Overseas Enclave Islamabad</a></li>
                     <li><a class="example-image-link"href="{{URL::to('dashboard/DHA 1')}}">DHA 1</a></li>
                     <li><a class="example-image-link"href="{{URL::to('dashboard/DHA 2')}}">DHA 2</a></li>
                
                <!--<li><a href="#">DHA 1</a></li>
                 <li><a href="#">DHA 2</a></li>-->
        
                 
                   
       	</ul>   
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
                  <div id="example">
    	<ul>        
            @foreach($users as $user)
    		<li>           
            {{Form::image('uploads/photos/'.$user->photo, '', array('class'=>'imagewidth'));}}
             <!-- <img src="/assets/images/thumb_2599676370.jpg " width="100px" height="78px"> -->
                 
                 <a href="{{URL::to('dashboard/listing/'.$user->id)}}"> <h2> {{$user->property_type}} in {{$user->city}}</h2></a>
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