@extends('layouts.main')
@section('content')

<div id="wrapper">
    <div id="content">
    <div id="form-wrapper" style="width:100%;">
<h1>Distressed Property Finder:</h1>

<div class="bahriaupdate">
<h3>Receive information on distressed properties: </h3>
 <p>Complete the form below and we will keep you posted on the foreclosures in your area! </p>
</div>

<div id="form-wrapper">

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
            {{ Form::label('phone', 'Phone Number') }}
            {{ Form::text('phone') }}
            <p><b>Note:</b>&nbsp;ZameenJayedad Agent will contact you at this number.<br>
Calls may be recorded for quality control.</p>
           
        </li>
         <li>
            {{ Form::label('interest', 'Area of Interest') }}
            {{ Form::text('interest') }}
        </li>
        
        <li>
            {{ Form::label('comments', 'Additional Information') }}
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