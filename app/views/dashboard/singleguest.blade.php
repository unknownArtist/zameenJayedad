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
        {{HTML::image('uploads/photos/'.$records->photo, '', array('style'=>'width:200px; height:150px;'));}}
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
                 <p>Zameen Jayedad Team
                 <p> Cell: <span style="padding-left:35px;">03225050989</span></p>
                 <p style="padding-left:83px; margin-top:-8px;">  03355257555</p>
                <p> Landline: <span style="padding-left:6px;">051-5172562</span></p>
                <p style="padding-left:83px; margin-top:-8px;">  051-5172563</p>
                <p> Email:   &nbsp;&nbsp;<span>contact@zameenjayedad.com</span></p>
                
                <div class="image-row">
                
			<div class="image-set">
           		<h2 style="margin-top:20px;">More Pictures:</h2>
                <a class="example-image-link" href="/assets/images/home1.jpg" data-lightbox="example-set1" rel="gallery2" title="Outer View">
                {{HTML::image('assets/images/home1.jpg','', array('style'=>'width:150px; height:150px;'));}}</a>
				<a class="example-image-link" href="/assets/images/kitchen2.jpg" data-lightbox="example-set1" rel="gallery2" title="Kicthen View">
                {{HTML::image('assets/images/kitchen2.jpg','', array('style'=>'width:150px; height:150px;'));}}</a>
				<a class="example-image-link" href="/assets/images/slide3.png" data-lightbox="example-set1" rel="gallery2" title="Bedroom">
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