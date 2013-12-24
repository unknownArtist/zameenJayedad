@extends('layouts.login')
@section('content')

    <div id="wrapper">
    <div id="content">    
    <div id="form-wrapper">
        <h1>Change Password </h1>
        {{ Form::open(array('url' => 'changepass')) }}
        <p class="erorclas"> {{ Session::get('errors') }}</p>
    <ul>
       
      
        <li>
            {{ Form::label('old_password', 'Old Password:') }}
            {{ Form::Password('old_password') }}
        </li>


        <li>
            {{ Form::label('new_password', 'New Password:') }}
            {{ Form::Password('new_password') }}
        </li>
          <li>
            {{ Form::label('confirmpass', 'Confirm Password:') }}
            {{ Form::password('confirmpass') }}
        </li>
        <li>
            {{ Form::submit('Change Password', array('class' => 'btn')) }}
        </li>
        
    </ul>
   
{{ Form::close() }}
 </div>
   </div> 
</div>
       
@stop