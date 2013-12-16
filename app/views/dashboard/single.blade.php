@extends('layouts.login')
@section('content')

<div class="wrapper">
<div class="content">

    <!--result-->
    

    <div class="detail">
      <ul>
            @foreach($record as $records)
        <li>{{Form::image('uploads/photos/'.$records->photo, '', array('class'=>'imagewidth'));}}
             <!-- <img src="/assets/images/thumb_2599676370.jpg " width="100px" height="78px"> -->
                 <h2> {{$records->property_type}}</h2>
                 <p>{{$records->Description}} </p>
                 <span>{{$records->bedroom}} bedrooms | {{$records->bathroom}} bathrooms | {{$records-> l_area}}</span>

                 <span>budget {{$records->budget}}  | city {{$records->city}} </span> 
                 <span> Construction_status {{$records->Construction_status}}</span>
                 <span> Contact No {{$records->cell}}</span></br>
                <span> Fax {{$records->fax}}</span></br>
                <span> Email {{$records->email}}</span>
         </li>

         </li>
         </li>
             <hr>
             @endforeach
      </ul>
      
    </div><!--detail ends-->



    <div id="featured">
      <h2>Featured</h2>
      <div class="featured-bottom">
        <h4>205-4125 Main Street, Vancouver</h4>
        <img src="/assets/images/thumb_2604672690.png">
        <span>$899,900</span>
        <p>2 beds | 2 baths1,389 sq ftEco Realty Inc.</p>
      </div><!--featured bottom ends-->
    </div><!--featured ends-->
    
    </div>
    </div>
@stop