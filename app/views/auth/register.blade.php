@extends('layouts.main')
@section('content')
</div>
<div id="search">
   </div> 
<div id="wrapper">
<div id="form">

{{ Form::open(array('url' => 'user/register')) }}

 <h1>Registration</h1>
    <ul>
        <li>
            {{ Form::label('first_name', 'First Name:') }}
            {{ Form::text('first_name') }}
        </li>

        <li>
            {{ Form::label('last_name', 'Last Name:') }}
            {{ Form::text('last_name') }}
        </li>

        <li>
            {{ Form::label('email', 'Email:') }}
            {{ Form::text('email') }}
        </li>

        <li>
            {{ Form::label('password', 'Password:') }}
            {{ Form::Password('password') }}
        </li>
        <li>
            {{ Form::label('password', 'Confirm Password:') }}
            {{ Form::Password('password') }}
        </li>
       
        <li>
            {{ Form::label('phone', 'Phone:') }}
            {{ Form::text('phone') }}
           
        </li>
        <li>
            {{ Form::label('cell', 'Cell/mobile:') }}
            {{ Form::text('cell') }}
        </li>
        <li>
            {{ Form::label('fax', 'Fax:') }}
            {{ Form::text('fax') }}
        </li>
        <li>
            {{ Form::label('address', 'Address:') }}
            {{ Form::text('address') }}
        </li>
        <li>
            {{ Form::label('zip', 'Zipcode:') }}
            {{ Form::text('zip') }}
        </li>   
        <li>
            {{ Form::label('country', 'Country:') }}
            {{ Form::select('country', $countries)}}
            
        </li>

        <li>
            {{ Form::label('roles', 'User Roles:') }}
            {{Form::select('roles', $roles);}}
            
        </li>

        <li>
            {{ Form::label('agent', 'Are you an Agent?') }}
            {{Form::checkbox('agent')}}
            
        </li>

        <h3>Agency Information</h3>
        <li>
        {{ Form::label('cities', 'Select Cities You Deal In:*') }}
        {{Form::select('cities', $cities);}}
        </li>
        
        <li>
            {{ Form::label('agency', 'Agency Name:*') }}
            {{Form::text('agency')}}
            
        </li>

        

        
        <li>
            {{ Form::label('services', 'Description of Servicess:*') }}
            {{Form::textarea('agency')}}

        </li>

        <h3>Company Phone</h3>
        
         <li>
            {{ Form::label('Company Phone ', 'Company Phone:') }}
            {{ Form::text('Company Phone ') }}
           
        </li>

         <li>
            {{ Form::label('Company Mobile', 'Company Mobile:') }}
            {{ Form::text('Company Mobile') }}
           
        </li>

         <li>
            {{ Form::label('Company Fax', 'Company Fax:') }}
            {{ Form::text('Company Fax') }}
           
        </li>

         <li>
            {{ Form::label('Company Address', 'Company Address:') }}
            {{ Form::text('Company Address') }}
           
        </li>

         <li>
            {{ Form::label('Company Email', 'Company Email:') }}
            {{ Form::text('Company Email') }}
           
        </li>


        
        
        
        <li>
            {{ Form::submit('Register', array('class' => 'btn')) }}
        </li>
        
    </ul>
</div>
{{ Form::close() }}

@stop