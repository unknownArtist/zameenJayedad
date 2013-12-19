@extends('layouts.login')
@section('content')

<div id="wrapper">
<div id="content">
<div id="form-wrapper">


 {{ Session::get('errors') }}

@foreach($record as $records)
{{ Form::open(array('url' =>'dashboard/agencystaff/'.$records->agency_id.'/edit','POST')) }}

 <h1>Agency Staff </h1>
 
    <ul>
    
     <h2>User Details</h2>
        <li>
            {{ Form::label('email', 'Email') }}
            {{ Form::text('email',$records->email) }}
        </li>



        <li>
            {{ Form::label('name', 'Name') }}
            {{ Form::text('name', $records->name)}}
        </li>
        <!-- <li>
            {{ Form::label('agency_name', ' Agency Name') }}
            {{ Form::text('agency_name' )}}
        </li> -->
       
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
            </li>
        <li>

         <h2>Assign Listing Quota</h2>
         </li>
         
        <li>
            {{ Form::label('listing_quota', 'Listing Quota') }}
            {{ Form::text('listing_quota',$records->listing_quota) }}
        </li> 
		
         <li>
            {{ Form::label('hot_quota', 'Hot Quota') }}
            {{ Form::text('hot_quota',$records->hot_quota) }}
        </li>  
        
        <li>

            {{ Form::submit('Modify User', array('class' => 'btn')) }}
        </li>
        <li>{{ HTML::link('dashboard/agencies/view','Back',array('class'=>'editbtn'))}}</li> 
        
    </ul>
    
   
    @endforeach
</div>
{{ Form::close() }}
</div>
</div>



@stop