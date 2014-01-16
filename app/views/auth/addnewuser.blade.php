@extends('layouts.login')
@section('content')
 
<div id="wrapper">
<div id="form-wrapper">

{{ Form::open(array('url' => 'dashboard/agencies/view/addnewuser','files' => true)) }}

 <h1>Agency Staff </h1>
<p class="erorclas"> {{ Session::get('errors') }}</p>
    <ul>
     <h2>User Details</h2>
        <li>
            {{ Form::label('email', 'Email') }}
            {{ Form::text('email') }}
        </li>


        <li>
            {{ Form::label('password', 'Password') }}
            {{ Form::Password('password', array('class' => 'youpasswd')) }}
        </li>
        
        <li>
            {{ Form::label('password', 'Confirm Password') }}
            {{ Form::password('password') }}

        </li>

        <li>
            {{ Form::label('name', 'Name') }}
            {{ Form::text('name' )}}
        </li>
        <li>
            {{ Form::label('photo', 'Photo') }}
            {{ Form::file('photo')}}
        </li>
        <li>
            {{ Form::label('agency_name', ' Please Select Agency') }}
            {{ Form::select('agency_name', $allTeamsMember)}}
        </li>
       
        <li>
            {{ Form::label('phone', 'Phone') }}
            {{ Form::text('phone') }}
           
        </li>
        <li>
            {{ Form::label('cell', 'Cell/mobile') }}
            {{ Form::text('cell') }}
        </li>
        <li>
            {{ Form::label('fax', 'Fax') }}
            {{ Form::text('fax') }}
        </li>
        <li>
            {{ Form::label('address', 'Address') }}
            {{ Form::text('address') }}
        </li>
        <li>
            {{ Form::label('zip', 'Zipcode') }}
            {{ Form::text('zip') }}
        </li>   
        <li>
            {{ Form::label('country', 'Country') }}
            {{ Form::select('country', $countries);}}
            
        </li>
		<br />
         <li><h2>Assign Listing Quota</h2></li>
        <li>
            {{ Form::label('listing_quota', 'Listing Quota') }}
            {{ Form::text('listing_quota') }}
        </li> 

         <li>
            {{ Form::label('hot_quota', 'Hot Quota') }}
            {{ Form::text('hot_quota') }}
        </li>  

            <li>{{ Form::submit('Create User', array('class' => 'btn')) }}
        </li>
        <li>{{ HTML::link('dashboard/agencies/view','Back',array('class'=>'editbtn'))}}</li> 
        
    </ul>
</div>
{{ Form::close() }}

</div>

@stop