@extends('layouts.main')
@section('content')

<div id="wrapper">
    <div id="content">
    <div id="form-wrapper" style="width:100%;">
<h1>Recent Sale Prices of Properties</h1>


<div id="form-wrapper">
<div class="bahriaupdate">
<p></p>
 <p>Complete this form to find out how much properties in your desired area are selling for. </p>
</div>
{{ Form::open(array('url' => 'user/register')) }}

 <p class="erorclas"> {{ Session::get('errors') }}</p>
    <ul>
        <li>
            {{ Form::label('fname', 'First Name') }}
            {{ Form::text('fname')}}
        </li>


        <li>
            {{ Form::label('lname', 'Last Name') }}
            {{ Form::text('lname') }}
        </li>


        <li>
            {{ Form::label('email', 'Email Address') }}
            {{ Form::text('email') }}
        </li>
       
        <li>
            {{ Form::label('phone', 'Phone Number') }}
            {{ Form::text('phone') }}
            <p><b>Note:</b>&nbsp;ZameenJayedad Agent will contact you at this number.<br>
Calls may be recorded for quality control.</p>
           
        </li>
         <li>
            {{ Form::label('staddr', 'Street Address') }}
            {{ Form::text('staddr') }}
        </li>
        
        <li>
            {{ Form::label('comments', 'Comments') }}
            {{ Form::textarea('comments') }}
        </li>
        
        <li>
            {{ Form::submit('Submit', array('class' => 'btn')) }}
        </li>
        </ul>
        {{ Form::close() }}

</div>  
    
    </div>
    </div>
    </div>

@stop