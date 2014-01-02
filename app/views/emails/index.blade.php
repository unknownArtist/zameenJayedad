@extends('layouts.login')
@section('content')
 
 <div id="wrapper" class="clearfix">
 <div id="content">
    

 	<div id="alerts">
 		<div class="agencynew">
<a href="{{URL::to('user/email/alert/create')}}">Add New</a>
</div>
    
     <p class="erorclas"> {{ Session::get('errors') }}</p>
 		
       <h3 class="totalalert">Total Alerts : {{count($records)}}</h3>
        <h3 class="alerts">Alerts Description</h3>
        @foreach ($records as $record)  
        <div class="post-1">
        	<h4 >Properties For Rent in {{$record->location }} </h4>
        	<p>Price:{{$record->price }}; Beds: {{$record->beds }};</p>
        </div>
     <div style="float:right;">
        {{ HTML::link('user/email/'.$record->id.'/alert/','Edit', array('class'=>"editbtn" )) }}
        {{ HTML::link('user/email/'.$record->id.'/alert/delete','Delete', array('class'=>"editbtn" )) }}</div>
        @endforeach 

{{ Form::open(array('url' => 'report')) }}
</div>
</div>
{{ Form::close() }}
</div>

@stop