@extends('layouts.login')
@section('content')
</div>

<div id="search">

   </div> 
 {{  Session::get('errors') }}
<div id="wrapper">
<div id="form-wrapper">

{{ Form::open(array('url' =>'profile')) }}

 <h1>My Profile</h1>
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
            {{ Form::label('phone', 'Phone') }}
            {{ Form::text('phone',$record->phone) }}
           
        </li>


        <li>
            {{ Form::label('cell', 'Cell/mobile') }}
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

@endforeach
        <li>
            {{ Form::submit('Modify', array('class' => 'btn')) }}
        </li>
        
    </ul>
</div>
{{ Form::close() }}

@stop
