@extends('layouts.login')
@section('content') 
 
<div id="wrapper">
<div id="content">
<div id="form-wrapper">

{{ Form::open(array('url' =>'profile/update','files' => true)) }}

 <h1>Edit Profile</h1>
<p class="erorclas"> {{ Session::get('errors') }}</p>
    <ul>
 <li>
           @foreach ($users as $user )
            {{ Form::label('email', 'Email') }}
            {{ Form::text('email',$user->email) }}
       @endforeach
        </li>

 @foreach ($records as $record)
        <li>
            {{ Form::label('name', 'Name') }}
            {{ Form::text('name',$record->name )}}
        </li>
        <li>
            {{ Form::label('photo', 'Photo') }}
            {{ Form::file('photo')}}
        </li>

         <li>
            {{ Form::label('phone', 'Phone') }}
            {{ Form::text('phone',$record->phone) }}
           
        </li>


        <li>
            {{ Form::label('cell', 'Cell / Mobile') }}
            {{ Form::text('cell',$record->cell) }}
        </li>


         <li>
            {{ Form::label('fax', 'Fax') }}
            {{ Form::text('fax', $record->fax) }}
        </li>

         <li>
            {{ Form::label('address', 'Address') }}
            {{ Form::text('address', $record->address ) }}
        </li>

          <li>
            {{ Form::label('zip', 'Zipcode') }}
            {{ Form::text('zip', $record->zip) }}
        </li> 

        <li>
            {{ Form::label('country', 'Country') }}
            {{ Form::select('country', $countries,$record->country)}}
		</li>
@endforeach
        <li>
            {{ Form::submit('Modify', array('class' => 'btn')) }}
        </li>
        
    </ul>
</div>
{{ Form::close() }}

</div>

</div>


@stop
