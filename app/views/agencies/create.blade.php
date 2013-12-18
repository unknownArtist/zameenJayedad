@extends('layouts.main')
@section('content')
</div>
<div id="search">

   </div> 
 {{ Session::get('errors') }}
<div id="wrapper">
<div id="form-wrapper">

{{ Form::open(array('url' => 'dashboard/agencies/addnew')) }}

 <h1> Add Agency</h1>
    <ul>
     <h2>User Details</h2>
        <li>
            {{ Form::label('agency_owner', 'Owner Name') }}
            {{ Form::text('agency_owner') }}
        </li>


        <li>
            {{ Form::label('agency_name', 'Agency Name') }}
            {{ Form::text('agency_name', '',array('class' => 'youpasswd')) }}
        </li>
        
       
            {{ Form::submit('Create Agency', array('class' => 'btn')) }}
        </li>
        
    </ul>
</div>
{{ Form::close() }}

@stop