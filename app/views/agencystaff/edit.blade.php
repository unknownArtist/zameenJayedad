@extends('layouts.main')
@section('content')
</div>
<div id="search">

   </div> 
 {{ Session::get('errors') }}
<div id="wrapper">
<div id="form-wrapper">
@foreach($record as $records)
{{ Form::open(array('url' =>'dashboard/agencystaff/'.$records->id.'/edit','POST')) }}

 <h1>Agency Staff </h1>
 
    <ul>
     <h2>User Details</h2>
        <li>
            {{ Form::label('email', 'Email') }}
            {{ Form::text('email',$records->email) }}
        </li>



        <li>
            {{ Form::label('name', 'Name') }}
            {{ Form::text('name',$records->name )}}
        </li>
       
        <li>
            {{ Form::label('phone', 'Phone') }}
            {{ Form::text('phone',$records->phone) }}
           
        </li>
        <li>
            {{ Form::label('cell', 'Cell/mobile') }}
            {{ Form::text('cell',$records->cell) }}
        </li>
        <li>
            {{ Form::label('fax', 'Fax') }}
            {{ Form::text('fax',$records->fax) }}
        </li>
        <li>
            {{ Form::label('address', 'Address') }}
            {{ Form::text('address',$records->address) }}
        </li>
        <li>
            {{ Form::label('zip', 'Zipcode') }}
            {{ Form::text('zip',$records->zip) }}
        </li>   
        <li>
            {{ Form::label('country', 'Country') }}
            {{ Form::select('country', $countries,$records->country);}}
        <li>

         <h2>Assign Listing Quota</h2>
        <li>
            {{ Form::label('listing_quota', 'Listing Quota') }}
            {{ Form::text('listing_quota',$records->listing_quota) }}
        </li> 

         <li>
            {{ Form::label('hot_quota', 'Hot Quota') }}
            {{ Form::text('hot_quota',$records->hot_quota) }}
        </li>  

            {{ Form::submit('Modify User', array('class' => 'btn')) }}
        </li>
        
    </ul>
    @endforeach
</div>
{{ Form::close() }}

@stop