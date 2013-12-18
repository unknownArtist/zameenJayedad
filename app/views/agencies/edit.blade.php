@extends('layouts.login')
@section('content')

<div id="wrapper">
<div id="content">
<div id="form-wrapper">


 {{ Session::get('errors') }}

@foreach($record as $records)
{{ Form::open(array('url' =>'dashboard/agencies/'.$records->id.'/edit','POST')) }}

 <h1> Add Agency</h1>
    <ul>
     <h2>User Details</h2>
        <li>
            {{ Form::label('agency_owner', 'Owner Name') }}
            {{ Form::text('agency_owner',$records->agency_owner) }}
        </li>


        <li>
            {{ Form::label('agency_name', 'Agency Name') }}
            {{ Form::text('agency_name', $records->agency_name,array('class' => 'youpasswd')) }}
        </li>
        
       
            {{ Form::submit('Create Agency', array('class' => 'btn')) }}
        </li>
        
    </ul>
   
    @endforeach
</div>
{{ Form::close() }}
</div>
</div>



@stop