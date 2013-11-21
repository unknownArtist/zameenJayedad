@extends('layouts.main')
@section('content')
</div>
<div id="search">

   </div> 
   {{dd($records);}}
 {{  Session::get('errors') }}
<div id="wrapper">
<div id="form-wrapper">

{{ Form::open(array('url' => 'user/register')) }}

 <h1>My Profile</h1>
    <ul>

         <li>
            {{ Form::label('email', 'Email') }}
            {{ Form::text('email') }}
        </li>

        <li>
            {{ Form::label('name', 'Name') }}
            {{ Form::text('name' )}}
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


        <li>
            {{ Form::submit('Modify', array('class' => 'btn')) }}
        </li>
        
    </ul>
</div>
{{ Form::close() }}

@stop
