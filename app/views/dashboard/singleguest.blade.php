@extends('layouts.main')
@section('content')

<div id="wrapper">
<div id="content">

    <!--result-->
    

    <div class="detail">
      <ul>
            @foreach($record as $records)
            
        <li>
        
        <div class="deatilimg">
        {{HTML::image('uploads/photos/'.$records->photo, '', array('class'=>''));}}
             <!-- <img src="/assets/images/thumb_2599676370.jpg " width="100px" height="78px"> -->
             </div>
             <div class="propername">
             <h2> {{$records->property_type}} in </h2>
                 <h3>{{$records->city}}</h3>
                 <span class="otherinfo">Bedrooms:&nbsp;{{$records->bedroom}} | Bathrooms:&nbsp;{{$records->bathroom}} |
                  Land Area:&nbsp;{{$records-> l_area}}&nbsp;{{$records-> unit}}</span><br />
                  <span style="font-weight:bold;">Price: {{$records->budget}}RS </span> 
             </div>
             <div class="deatillist">                 
                 
                 <h2 style="margin-top:20px;">Description:</h2>
                 <p>{{$records->Description}} </p>
                 
                 <!--<div class="otherinfo">
                 
                 <h2 style="margin-top:20px;">Other Info</h2>
                 <p>No of Bedrooms:&nbsp;&nbsp;{{$records->bedroom}} </p>
                 <p>No of Bathrooms:&nbsp;&nbsp;{{$records->bathroom}}</p> 
                 <p>Area Covered:&nbsp;&nbsp;{{$records-> l_area}}&nbsp;{{$records-> unit}} </p>

                 <p style="font-weight:bold">Price:&nbsp;&nbsp;&nbsp;&nbsp; {{$records->budget}}RS </p> 
               <!--  <p> Construction_status {{$records->Construction_status}}</p>-->
                <!-- </div>-->
                 
                 
                 <h2 style="margin-top:20px">Contact Info:</h2>
                 <p> Cell:&nbsp;&nbsp; {{$records->cell}}</p>
                <p> Fax: &nbsp;&nbsp; {{$records->fax}}</p>
                <p> Email: &nbsp; {{$records->email}}</p>
                
                <div class="image-row">
                
			<div class="image-set">
           		<h2 style="margin-top:20px;">More Pictures:</h2>
                <a class="example-image-link" href="/assets/images/home1.jpg" data-lightbox="example-set" title="Outer View">
                {{HTML::image('assets/images/home1.jpg','', array('style'=>'width:150px; height:150px;'));}}</a>
				<a class="example-image-link" href="/assets/images/kitchen2.jpg" data-lightbox="example-set" title="Kicthen View">
                {{HTML::image('assets/images/kitchen2.jpg','', array('style'=>'width:150px; height:150px;'));}}</a>
				<a class="example-image-link" href="/assets/images/slide3.png" data-lightbox="example-set" title="Bedroom">
                {{HTML::image('assets/images/slide3.png','', array('style'=>'width:150px; height:150px;'));}}</a>
				
			</div>
		</div>
               
                </div>              
                
         </li>
           
             @endforeach
      </ul>
      
     
      
    </div><!--detail ends-->

    <div id="featured">
      <h2>Featured</h2>
      <div class="featured-bottom">
        <h4>205-4125 Main Street, Vancouver</h4>
        <img src="/assets/images/thumb_2604672690.png">
        <span>$899,900</span>
        <p>2 beds | 2 baths<br />1,389 sq ft<br />Zameen Jayedad Inc.</p>
      </div><!--featured bottom ends-->
    </div><!--featured ends-->
    

    
    </div>
    </div>
@stop