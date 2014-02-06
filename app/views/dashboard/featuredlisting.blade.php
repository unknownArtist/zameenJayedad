@extends('layouts.login')
@section('content')

<div id="wrapper">
    <div id="content">
    <div id="form-wrapper" style="width:100%;">
<h1>Featured Listings</h1>

<div class="bahriaupdate2">

<div class="recordshow">
                 
    	<ul>
         
            @foreach($users as $user)
    		<li>
           
            {{Form::image('uploads/photos/'.$user->photo, '', array('class'=>'imagewidth', 'style'=>'width:200px; height:150px;'));}}
             <!-- <img src="/assets/images/thumb_2599676370.jpg " width="100px" height="78px"> -->
                 
                <a href="{{URL::to('dashboard/listing/'.$user->id)}}"> <h2> {{$user->property_type}} in {{$user->location}}</h2></a>
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
    
    </div>
    </div>
    </div>

@stop