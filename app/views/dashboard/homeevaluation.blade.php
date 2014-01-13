@extends('layouts.main')
@section('content')

<div id="wrapper">
    <div id="content">
    <div id="form-wrapper" style="width:100%;">
<h1>Home Evaluation</h1>

<div class="bahriaupdate">
<p></p>
 <p>Looking for a stress-free way to sell your home? Let our team of experts take the worry out of selling your home. Simply complete the form below and one of our Brokers will find the most qualified real estate professional in your area to help you with all your real estate needs. It's that easy.</p>
 <p>We will compare your property with similar Listings, Sales and Expired Listings to ensure that you receive the most for your property. We have personally viewed many of the comparisons and have a great understanding of your property's real value. We may already have someone to buy it!</p>
<p>For your property evaluation, complete the form below.</p>
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
            {{ Form::label('email', 'Email') }}
            {{ Form::text('email') }}
        </li>
       
        <li>
            {{ Form::label('phone', 'Phone') }}
            {{ Form::text('phone') }}
            <p><b>Note:</b>&nbsp;ZameenJayedad Agent will contact you at this number.<br>
Calls may be recorded for quality control.</p>
           
        </li>
        <li>
            {{ Form::label('city', 'City') }}
            {{ Form::text('city') }}
        </li>
        <li>
            {{ Form::label('sqfoot', 'What is your sq footage? ') }}
            {{ Form::text('sqfoot') }}
        </li>
        
         <li>
            {{ Form::label('age', 'Age') }}
            {{ Form::text('age') }}
        </li>
		
         <li>
            {{ Form::label('bedrooms', 'Bedrooms') }}
            {{ Form::text('bedrooms') }}
        </li>
        
        <li>
            {{ Form::label('bathrooms', 'Bathrooms') }}
            {{ Form::text('bathrooms') }}
        </li>
        
         <li>
            {{ Form::label('home_type', 'Home Type') }}
            {{ Form::select('home_type' )}}
        </li>
        
        <li>
            {{ Form::label('garage', 'Garage') }}
            {{ Form::text('garage') }}
        </li>
        
        <hr style="margin-top:15px;">
        <li>
            {{ Form::label('deadline', 'Do you have a deadline for moving?', array('style'=>'padding-top:0;')) }}
            <div class="radiobtn2">
             {{ Form::radio('deadline') }}
            {{ Form::label('Yes', '', array('class'=>'')) }}
           
            </div>
             <div class="radiobtn2">
            
            {{ Form::radio('deadline') }}
            {{ Form::label('No', '', array('class'=>'')) }}
            </div>
        </li>
        <hr >
        
        <li>
            {{ Form::label('comments', 'Comments') }}
            {{Form::textarea('comments')}}

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