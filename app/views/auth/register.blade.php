@extends('layouts.main')
@section('content')
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.js" type="text/javascript"></script>
<script>
$(document).ready(function() {

$('#agentshow').click(function() {
    if( $(this).is(':checked')) {
        $("#agent").show();
    } else {
        $("#agent").hide();
    }
}); 


  });
</script>
<div id="search">

   </div> 
 {{  Session::get('errors') }}
<div id="wrapper">
<div id="form-wrapper">

{{ Form::open(array('url' => 'user/register')) }}

 <h1>Registration</h1>
    <ul>
        <li>
            {{ Form::label('name', 'Name') }}
            {{ Form::text('name')}}
        </li>


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
            {{ Form::select('country', $countries)}}
            
        </li>

        <li>
            {{ Form::label('roles', 'User Roles') }}
            {{Form::select('roles', $roles)}}
            
        </li>

        <li>
            {{ Form::label('agent', 'Are you an Agent?') }}
            <input type="checkbox" id="agentshow" name="check"/>
             
            
        </li>

        <div class="agent" id ="agent" style="display:none;">

        <h3>Agency Information</h3>
        <li>
        {{ Form::label('cities', 'Select Cities You Deal In*') }}
        {{Form::select('cities', $cities);}}
        </li>
        
        <li>
            {{ Form::label('agency', 'Agency Name*') }}
            {{Form::text('agency')}}
            
        </li>

        

        
        <li>
            {{ Form::label('services', 'Description of Servicess*') }}
            {{Form::textarea('services')}}

        </li>

        <h3>Company Phone</h3>
        
         <li>
            {{ Form::label('company_phone ', 'Company Phone') }}
            {{ Form::text('company_phone') }}
           
        </li>

         <li>
            {{ Form::label('company_mobile', 'Company Mobile') }}
            {{ Form::text('company_mobile') }}
           
        </li>

         <li>
            {{ Form::label('company_fax', 'Company Fax') }}
            {{ Form::text('company_fax') }}
           
        </li>

         <li>
            {{ Form::label('company_address', 'Company Address') }}
            {{ Form::text('company_address') }}
           
        </li>

         <li>
            {{ Form::label('company_email', 'Company Email') }}
            {{ Form::text('company_email') }}
           
        </li>

    </div><!--agent ends-->
 
        <li>
            {{ Form::submit('Register', array('class' => 'btn')) }}
        </li>
        
    </ul>
</div>
{{ Form::close() }}

@stop
