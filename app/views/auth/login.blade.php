@extends('layouts.main')
@section('content')
</div>
<div id="search">
   </div> 
   <div id="wrapper">
<div id="height">    
<div id="form-wrapper">
<h1>Login </h1>
{{ Form::open(array('url' => 'user/login')) }}
    <ul>
        <li>
            {{ Form::label('email', 'Email:') }}
            {{ Form::text('email') }}
        </li>


        <li>
            {{ Form::label('password', 'Password:') }}
            {{ Form::Password('password') }}
        </li>
        <li>
            {{ Form::submit('Login', array('class' => 'btn')) }}
        </li>
        
    </ul>
    </div>
   </div> 
{{ Form::close() }}
@stop