@extends('layouts.login')
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
               <?php  $photo1=$records->photo1;?>
                @if ($photo1 == '')
                @else

        
                <a class="example-image-link" href="/uploads/photos/<?php echo $records->photo1; ?>" data-lightbox="example-set2" rel="gallery1" title="<?php echo $records->ph1title;?> ">
                {{HTML::image('uploads/photos/'.$records->photo1,'', array('style'=>'width:150px; height:150px;'));}}</a>
                @endif
				<?php  $photo2=$records->photo2;?>
                @if ($photo2 == '')
                @else

        
                <a class="example-image-link" href="/uploads/photos/<?php echo $records->photo2; ?>" data-lightbox="example-set2" rel="gallery1" title="<?php echo $records->ph2title;?>">
                {{HTML::image('uploads/photos/'.$records->photo2,'', array('style'=>'width:150px; height:150px;'));}}</a>
                @endif
				<?php  $photo3=$records->photo3;?>
                @if ($photo3 == '')
                @else

        
                <a class="example-image-link" href="/uploads/photos/<?php echo $records->photo3; ?>" data-lightbox="example-set2" rel="gallery1" title="<?php echo $records->ph3title;?>">
                {{HTML::image('uploads/photos/'.$records->photo3,'', array('style'=>'width:150px; height:150px;'));}}</a>
                @endif
                <?php  $photo4=$records->photo4;?>
                @if ($photo4 == '')
                @else

        
                <a class="example-image-link" href="/uploads/photos/<?php echo $records->photo4; ?>" data-lightbox="example-set2" rel="gallery1" title="<?php echo $records->ph4title;?>">
                {{HTML::image('uploads/photos/'.$records->photo4,'', array('style'=>'width:150px; height:150px;'));}}</a>
                @endif
                <?php  $photo5=$records->photo5;?>
                @if ($photo5 == '')
                @else

        
                <a class="example-image-link" href="/uploads/photos/<?php echo $records->photo5; ?>" data-lightbox="example-set2" rel="gallery1" title="<?php echo $records->ph5title;?>">
                {{HTML::image('uploads/photos/'.$records->photo5,'', array('style'=>'width:150px; height:150px;'));}}</a>
                @endif
				<?php  $photo6=$records->photo6;?>
                @if ($photo6 == '')
                @else

        
                <a class="example-image-link" href="/uploads/photos/<?php echo $records->photo6; ?>" data-lightbox="example-set2" rel="gallery1" title="<?php echo $records->ph6title;?>">
                {{HTML::image('uploads/photos/'.$records->photo6,'', array('style'=>'width:150px; height:150px;'));}}</a>
                @endif
                <?php  $photo7=$records->photo7;?>
                @if ($photo7 == '')
                @else

        
                <a class="example-image-link" href="/uploads/photos/<?php echo $records->photo7; ?>" data-lightbox="example-set2" rel="gallery1" title="<?php echo $records->ph7title;?>">
                {{HTML::image('uploads/photos/'.$records->photo7,'', array('style'=>'width:150px; height:150px;'));}}</a>
                @endif
                <?php  $photo8=$records->photo8;?>
                @if ($photo8 == '')
                @else

        
                <a class="example-image-link" href="/uploads/photos/<?php echo $records->photo8; ?>" data-lightbox="example-set2" rel="gallery1" title="<?php echo $records->ph8title;?>">
                {{HTML::image('uploads/photos/'.$records->photo8,'', array('style'=>'width:150px; height:150px;'));}}</a>
                @endif
                <?php  $photo9=$records->photo9;?>
                @if ($photo9 == '')
                @else

        
                <a class="example-image-link" href="/uploads/photos/<?php echo $records->photo9; ?>" data-lightbox="example-set2" rel="gallery1" title="<?php echo $records->ph9title;?>">
                {{HTML::image('uploads/photos/'.$records->photo9,'', array('style'=>'width:150px; height:150px;'));}}</a>
                @endif
                <?php  $photo10=$records->photo10;?>
                @if ($photo10 == '')
                @else

        
                <a class="example-image-link" href="/uploads/photos/<?php echo $records->photo10; ?>" data-lightbox="example-set2" rel="gallery1" title="<?php echo $records->ph10title;?>">
                {{HTML::image('uploads/photos/'.$records->photo10,'', array('style'=>'width:150px; height:150px;'));}}</a>
                @endif
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