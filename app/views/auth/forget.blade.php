@extends('layouts.main')
@section('content')
</div>
<div id="search">
   </div> 
    {{  Session::get('errors') }}
   <div id="wrapper">
<div id="height">    
<div id="form-wrapper">
<h1>Enter Email </h1>
{{ Form::open(array('url' => 'forget')) }}
    <ul>
        <li>
            {{ Form::label('email', 'Email:') }}
            {{ Form::text('email') }}
        </li>
    
       
        <li>
            {{ Form::submit('Send', array('class' => 'btn')) }}
        </li>
       
        
    </ul>
    </div>
   </div> 
{{ Form::close() }}
</div>
   </div> 
{{ Form::close() }}

       
@stop