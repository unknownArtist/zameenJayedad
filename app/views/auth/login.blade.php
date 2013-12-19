@extends('layouts.main')
@section('content')
</div>
   
    <div id="wrapper">
    <div id="height">    
    <div id="form-wrapper">
     {{  Session::get('errors') }}
<h1>Login </h1>
{{ Form::open(array('url' => 'login')) }}
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
        <li class="link">
            {{ HTML::link('forget','Forget Password') }}
        </li>
        <li class="link">
            {{ HTML::link('changepass','Change Password') }}
        </li>
        
    </ul>
    </div>
   </div> 
{{ Form::close() }}

       
@stop