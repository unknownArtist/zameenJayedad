@extends('layouts.main')
@section('content')
   
    <div id="wrapper">
    <div id="content">    
    <div id="form-wrapper">
     
<h1>Login </h1>
{{ Form::open(array('url' => 'login')) }}
<p class="erorclas"> {{ Session::get('errors') }}</p>
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
        <br />
        <li class="link">
            {{ HTML::link('forget','Forgot Password',array('style'=>'')) }}
        </li>
        
    </ul>
    </div>
   </div> 
{{ Form::close() }}
</div>

       
@stop