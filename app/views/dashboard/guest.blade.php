@extends('layouts.main')
@section('content')
    <!--search ends-->
    <p class="erorclas" style="position: relative;
width: 175px;
float: right;
top: -57px;
right: 105px;">{{ Session::get('error') }}</p>
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
		
        <div class="list">
       	<h1>Listings</h1>
       	<h3>Rawalpindi / Islamabad</h3>
       	<ul class="l1">
           @foreach($users as $user)
       		<!-- <li><a href="dashboard/listing/{{$user->id}}">{{$user->property_type}} {{$user->city}} </a></li>-->
       		  @endforeach
              
           	
                
              <li><a class="example-image-link" href="/assets/images/bahria phase 1.jpg" data-lightbox="example-set" title="Bahria Town Phase 1">Bahria town Phase 1</a></li>
               <li><a class="example-image-link" href="/assets/images/Phase_2.jpg" data-lightbox="example-set" title="Bahria Town Phase 2">Bahria town Phase 2</a></li>
                <li><a class="example-image-link" href="/assets/images/Phase_3.jpg" data-lightbox="example-set" title="Bahria Town Phase 3">Bahria town Phase 3</a></li>
                 <li><a class="example-image-link" href="/assets/images/Phase_4.jpg" data-lightbox="example-set" title="Bahria Town Phase 4">Bahria town Phase 4</a></li>
                  <li><a class="example-image-link" href="/assets/images/Phase_5.jpg" data-lightbox="example-set" title="Bahria Town Phase 5">Bahria town Phase 5</a></li>
                   <li><a class="example-image-link" href="/assets/images/Phase_6.jpg" data-lightbox="example-set" title="Bahria Town Phase 6">Bahria town Phase 6</a></li>
                   
       	</ul>   
        
        <ul class="l2">
           @foreach($users as $user)
       		<!-- <li><a href="dashboard/listing/{{$user->id}}">{{$user->property_type}} {{$user->city}} </a></li>-->
       		  @endforeach
              <li><a class="example-image-link" href="/assets/images/Phase_7.jpg" data-lightbox="example-set" title="Bahria Town Phase 7">Bahria town Phase 7</a></li>
               <li><a class="example-image-link" href="/assets/images/Phase_8_Sector_A.jpg" data-lightbox="example-set" title="Bahria Town Phase 8, Sector A">Bahria town Phase 8</a></li>
                <a class="example-image-link" href="/assets/images/Phase_8_Sector_B.jpg" data-lightbox="example-set" title="Bahria Town Phase 8, Sector B"></a>
                <a class="example-image-link" href="/assets/images/Phase_8_Sector_C.jpg" data-lightbox="example-set" title="Bahria Town Phase 8, Sector C"></a>
                 <a class="example-image-link" href="/assets/images/Phase_8_Sector_D.jpg" data-lightbox="example-set" title="Bahria Town Phase 8, Sector D"></a>
                  <a class="example-image-link" href="/assets/images/Phase_8_Sector_E.jpg" data-lightbox="example-set" title="Bahria Town Phase 8, Sector E"></a>
                   <a class="example-image-link" href="/assets/images/Phase_8_Sector_F.jpg" data-lightbox="example-set" title="Bahria Town Phase 8, Sector F"></a>
                    <a class="example-image-link" href="/assets/images/Phase_8_Sector_G.jpg" data-lightbox="example-set" title="Bahria Town Phase 8, Sector G"></a>
                    <a class="example-image-link" href="/assets/images/Phase_8_Sector_H.jpg" data-lightbox="example-set" title="Bahria Town Phase 8, Sector H"></a>
                    <a class="example-image-link" href="/assets/images/Phase_8_Sector_I.jpg" data-lightbox="example-set" title="Bahria Town Phase 8, Sector I"></a>
                    <a class="example-image-link" href="/assets/images/Phase_8_Sector_J.jpg" data-lightbox="example-set" title="Bahria Town Phase 8, Sector J"></a>
                    <a class="example-image-link" href="/assets/images/Phase_8_Sector_K.jpg" data-lightbox="example-set" title="Bahria Town Phase 8, Sector K"></a>
                    <a class="example-image-link" href="/assets/images/Phase_8_Sector_L.jpg" data-lightbox="example-set" title="Bahria Town Phase 8, Sector L"></a>
                    <a class="example-image-link" href="/assets/images/Phase_8_Sector_M.jpg" data-lightbox="example-set" title="Bahria Town Phase 8, Sector M"></a>
                    <a class="example-image-link" href="/assets/images/Phase_8_Sector_N.jpg" data-lightbox="example-set" title="Bahria Town Phase 8, Sector N"></a>
                    <a class="example-image-link" href="/assets/images/Phase_8_Sector_P.jpg" data-lightbox="example-set" title="Bahria Town Phase 8, Sector P"></a>
                    
                
                <!--<li><a href="#">DHA 1</a></li>
                 <li><a href="#">DHA 2</a></li>-->
                 
                   
       	</ul>     

       </div>  

    <div class="sec-2">

                <h3>Listings</h3>
               

      <div class="eco">
				 <!--{{HTML::image('assets/images/260333193.jpg');}}
                  {{HTML::image('assets/images/260528737.jpg');}}
                   {{HTML::image('assets/images/260570453.jpg');}}
                    {{HTML::image('assets/images/260592693.jpg');}}-->
          @foreach($users as $user)           
    <a href="{{URL::to('dashboard/listing/'.$user->id)}}" title="{{$user->budget}}RS"> 
    {{HTML::image('uploads/photos/'.$user->photo, '', array('class'=>'imagewidthlist'));}}
    </a>             
             @endforeach  
              </div>

    
    
    </div><!--sec-2 ends-->
    
    </div>

  </div><!--content ends-->

@stop