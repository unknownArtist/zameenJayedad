@extends('layouts.main')
@section('content')

<div id="wrapper">
    <div id="content">
    <div id="form-wrapper" style="width:100%;">
<h1>Home Finder</h1>

<div class="bahriaupdate">
<h3>Find Your New Home with Zameenjayedad and  - Email Notification System</h3>
<p></p>
 <p>Fill in the form at the bottom of the page to receive <b>notifications of New Listings</b> 48 hours. When we find new properties for sale that meet your criteria we email you the information immediately!</p>
 
 <h3>Questions to consider: </h3>
 <ol>
 <li>Do you need to sell a home before you can buy? </li>
 <li>Have you met with a lender? </li>
 <li>Are you committed to another Agent? </li>
 <li>How soon do you want to be in your new home?</li>
 </ol>
 <p>We understand that you may be in the information gathering stage. If you are not comfortable providing all your contact information just enter your email address and we will send you the material you requested.</p>
 </div>
<div id="form-wrapper">
{{ Form::open(array('url' => 'dashboard/homefinder')) }}

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
        
       
        
        <hr style="margin-top:15px;">
        
         <li>
            {{ Form::label('mortage', 'Are you pre-qualified for a mortgage?', array('style'=>'padding-top:0;')) }}
             <div class="radiobtn2">
             {{ Form::radio('deadline1') }}
            {{ Form::label('Yes', '', array('class'=>'')) }}
           
            </div>
             <div class="radiobtn2">
            
            {{ Form::radio('deadline1') }}
            {{ Form::label('No', '', array('class'=>'')) }}
            </div>
        </li>
        
        <li>
            {{ Form::label('deadline', 'Do you have a deadline for moving?', array('style'=>'padding-top:0;')) }}
            <div class="radiobtn2">
             {{ Form::radio('deadline') }}
            {{ Form::label('Yes', '', array('class'=>'')) }}
           
            </div>
             <div class="radiobtn2">
            
            {{ Form::radio('deadline1') }}
            {{ Form::label('No', '', array('class'=>'')) }}
            </div>
        </li>
        <hr >
        
        <li>
            {{ Form::label('area', 'Which area are you looking for?') }}
            {{ Form::text('area') }}
        </li>
        
         <li>
            {{ Form::label('home_type', 'Home Type') }}
            {{ Form::select('home_type',$Type_of_Homes)}}
        </li>
        
         <li>
            {{ Form::label('price', 'Price') }}
            {{ Form::text('price') }}
        </li>
        
		
         <li>
            {{ Form::label('bedrooms', 'No of Bedrooms') }}
            {{ Form::text('bedrooms') }}
        </li>
        
        <li>
            {{ Form::label('bathrooms', 'No of Bathrooms') }}
            {{ Form::text('bathrooms') }}
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