@extends('layouts.main')
@section('content')
</div>

<div id="search">

   </div> 
</div>
 {{  Session::get('errors') }}
 <div id="wrapper" class="clearfix">

 	<div id="alerts">
 		<div id="section">
    
     
 		
       <p class="total">Total Alerts : {{count($records)}}</p>
        <h3 class="alerts">Alerts Description</h3>
        @foreach ($records as $record)  
        <div class="post-1">
        	<h4 >Properties For Rent in {{$record->location }} </h4>
        	<p>Price:{{$record->price }}; Beds: {{$record->beds }};</p>
        </div>
     
        {{ HTML::link('user/email/alert/'.$record->id,'Edit') }}
        @endforeach
        <div class="post-2">
        	<h4>Properties For Sale</h4>
        	<p>Estate Agents: AGP PAKISTAN;</p>
        </div>
        <div class="post-1">
        	<h4>Properties For Sale</h4>
        	<p>Price: PKR 50000 to 100000; Beds: 4;</p>
        </div>

        <div class="post-2">
        <h4>Properties For Sale in Khyber Pakhtunkhwa, Abbottabad</h4>
        <p>Price: PKR 200000 to 500000; Area: 225 to 1125 Sq ft;Beds: 2; Baths: 1; Finance Available: yes; Occupancy Status: Occupied; Ownership Status: Freehold</p>
          
        </div>
   </div>
    
   <div class="control">

   	<h3>Controls</h3>
    <ul >
   		<li> <a href="#">Edit</a> </li>
   		<li> <a href="#">Pause</a> </li>
   		<li> <a href="#"> Delete</a></li>

   	</ul>
   	

   	<ul>
   		<li> <a href="#">Edit</a> </li>
   		<li> <a href="#">Pause</a> </li>
   		<li> <a href="#"> Delete</a></li>

   	</ul>

   	<ul >
   		<li> <a href="#">Edit</a> </li>
   		<li> <a href="#">Pause</a> </li>
   		<li> <a href="#"> Delete</a></li>

   	</ul>

   	<ul class="last">
   		<li> <a href="#">Edit</a> </li>
   		<li> <a href="#">Pause</a> </li>
   		<li> <a href="#"> Delete</a></li>

   	</ul>

   </div>




 	</div>
 

{{ Form::open(array('url' => 'report')) }}
</div>
</div>
{{ Form::close() }}

@stop