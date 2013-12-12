@extends('layouts.login')
@section('content')

    {{ Form::open(array('url' => 'user/email/search')) }}
    <div id="search">
   
    <div id="sea">  
        <h2>Search Listing</h2>
        {{ Form::text('search','',array('class'=>'span6','placeholder'=>'search here')) }}
        
       {{ Form::submit('Search', array('class' => 'button')) }}

        
    </div><!--sea-->
    </div>
    {{ Form::close() }}
    </div><!--search ends-->

    <!--result-->
    

    <div class="detail">
      <ul>
            @foreach($record as $records)
        <li>{{Form::image('uploads/photos/'.$records->photo, '', array('class'=>'imagewidth'));}}
             <!-- <img src="/assets/images/thumb_2599676370.jpg " width="100px" height="78px"> -->
                 <h2> {{$records->budget}} - {{$records->location}}</h2>
                 <p>{{$records->Description}} </p>
                 <span>{{$records->bedroom}} bedrooms | {{$records->bathroom}} bathrooms | {{$records-> l_area}}</span>
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
@stop