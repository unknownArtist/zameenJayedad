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
{{ Form::open(array('url' => 'changepass')) }}
    <ul>
        <li>
            {{ Form::label('email', 'Email:') }}
            {{ Form::text('email') }}
        </li>
        <li>
            {{ Form::label('old_password', 'Old Password:') }}
            {{ Form::Password('old_password') }}
        </li>


        <li>
            {{ Form::label('new_password', 'New Password:') }}
            {{ Form::Password('new_password') }}
        </li>
        <li>
            {{ Form::submit('Change Password', array('class' => 'btn')) }}
        </li>
        
    </ul>
    </div>
   </div> 
{{ Form::close() }}
</div>
   </div> 
{{ Form::close() }}

       
@stop