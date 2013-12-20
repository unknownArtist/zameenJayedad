@extends('layouts.main')
@section('content')
   
   <div id="wrapper">
<div id="content">    
<div id="form-wrapper">
<h1>Reset Password </h1>
{{ Form::open(array('url' => 'newpassword')) }}
<p class="erorclas"> {{ Session::get('errors') }}</p>
    <ul>
        <li>
           
            {{ Form::hidden('email',$email) }}
        </li>


        <li>
            {{ Form::label('password', 'New Password:') }}
            {{ Form::Password('password') }}
        </li>
        <li>
            {{ Form::label('password', 'Confirm Password') }}
            {{ Form::password('password') }}

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