@extends('layouts.main')
@section('content')
</div>
<div id="search">
   </div> 
    {{  Session::get('errors') }}
   <div id="wrapper">
<div id="height">    
<div id="form-wrapper">
<h1>Reset Password </h1>
{{ Form::open(array('url' => 'newpassword')) }}
    <ul>
        <li>
            {{ Form::label('email', 'Email:') }}
            {{ Form::text('email') }}
        </li>


        <li>
            {{ Form::label('password', 'New Password:') }}
            {{ Form::Password('password') }}
        </li>
        <li>
            {{ Form::submit('Reset', array('class' => 'btn')) }}
        </li>
        
    </ul>
    </div>
   </div> 
{{ Form::close() }}
</div>
   </div> 
{{ Form::close() }}

       
@stop