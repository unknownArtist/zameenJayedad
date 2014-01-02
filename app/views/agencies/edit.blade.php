@extends('layouts.login')
@section('content')

<div id="wrapper">
<div id="content">
<div id="form-wrapper">

@foreach($record as $records)
{{ Form::open(array('url' =>'dashboard/agencies/'.$records->id.'/edit','POST')) }}

 <h1> Add Agency</h1>
 <p class="erorclas"> {{ Session::get('errors') }}</p>
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
        <li>{{ HTML::link('dashboard/agencies','Back',array('class'=>'editbtn'))}}</li> 
    </ul>
   
    @endforeach
</div>
{{ Form::close() }}
</div>
</div>



@stop