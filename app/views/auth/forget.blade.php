@extends('layouts.main')
@section('content')

   
   <div id="wrapper">
<div id="content">    
<div id="form-wrapper">
<h1>Send Password </h1>
{{ Form::open(array('url' => 'forget')) }}
<p class="erorclas"> {{ Session::get('errors') }}</p>
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
@stop