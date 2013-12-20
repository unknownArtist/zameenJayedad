@extends('layouts.login')
@section('content')
</div>

 <div id="wrapper">
 <div id="content">
<div id="form-wrapper">

{{ Form::open(array('url' => 'dashboard/agencies/addnew')) }}

 <h1> Add Agency</h1>
 <p class="erorclas">{{ Session::get('errors') }}</p>

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
        
       
           <li> {{ Form::submit('Create Agency', array('class' => 'btn')) }}

        </li>
        <li>{{ HTML::link('dashboard/agencies','Back',array('class'=>'editbtn'))}}</li>        
    </ul>
</div>
{{ Form::close() }}
</div>
</div>

@stop