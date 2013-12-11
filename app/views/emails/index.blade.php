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
     
        {{ HTML::link('user/email/'.$record->id.'/alert/','Edit') }}
        {{ HTML::link('user/email/'.$record->id.'/alert/delete','Delete') }}
        @endforeach
        



 	</div>
 

{{ Form::open(array('url' => 'report')) }}
</div>
</div>
{{ Form::close() }}

@stop