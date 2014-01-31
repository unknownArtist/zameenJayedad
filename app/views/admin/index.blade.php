@extends('layouts.adminlogin')
@section('content')
   
    <div id="wrapper">
    <div id="content">    
    <div id="form-wrapper">
     
<h1>Login </h1>
{{ Form::open(array('url' => 'dashboard/admin')) }}
<p class="erorclas"> {{ Session::get('errors') }}</p>
    <ul>
        <li>
            {{ Form::label('email', 'User Name:') }}
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
</div>

       
@stop