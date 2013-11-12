@extends('layouts.main')
@section('content')
</div>
<div id="search">

   </div> 
 {{  Session::get('errors') }}
<div id="wrapper">
<div id="form-wrapper">

{{ Form::open(array('url' => 'profolio')) }}

 <h1>Post New Listings</h1>

    <ul>
        <h2>Type and Purpose</h2>
        <li>
            {{ Form::label('Property_Type', 'Property Type') }}
            {{ Form::select('Property_Type', $property_Type )}}
        </li>
        
        <li>
            {{ Form::label('Type_of_Homes', 'Type of Homes') }}
            {{ Form::select('Type_of_Homes', $Type_of_Homes  )}}
        </li>

        <li>
            {{ Form::label('Purpose', 'Purpose') }}
            {{ Form::select('Purpose', $Purpose  )}}
        </li>

        
        <li>
            {{ Form::label('Construction_Status', 'Construction Status') }}
            {{ Form::select('Construction_Status', $Construction_Status  )}}
        </li>

        <li>
            {{ Form::label('Wanted_For', 'Wanted For') }}
            {{ Form::select('Wanted_For', $Wanted_For  )}}
        </li>

        <h2>Address and Location</h2>

        <li>
            {{ Form::label('city', 'City ') }}
            {{ Form::select('city' , $cities )}}
        </li>

        <li>
            {{ Form::label('Please Select Location', 'Please Select Location') }}
            {{ Form::text(' Please Select Location') }} <br><br>OR
        </li>


        <li>
            {{ Form::label('Location', 'Choose Location') }}
            {{ Form::select('Location', $Location ) }}
        </li>
         <h2>Wanted Details</h2>
        <li>
            {{ Form::label('Wanted Title', 'Wanted Title') }}
            {{ Form::text('Wanted Title') }}
           
        </li>

        <li>
            {{ Form::label('Property Title Urdu', 'Property Title Urdu') }}
            {{ Form::text('Property Title Urdu') }}
           
        </li>
       
        <li>
            {{ Form::label('Description', 'Description') }}
            {{Form::textarea('Description')}}

        </li>

        <li>
            {{ Form::label('Description_urdu', 'Description urdu') }}
            {{Form::textarea('Description_urdu')}}

        </li>
        <li>
            {{ Form::label('Budget', 'Budget: (PKR)') }}
            {{ Form::text('Budget') }}
        </li>
        <li>
            {{ Form::label('Land Area', 'Land Area') }}
            {{ Form::text('Land Area') }}
        </li>
        <li>
            {{ Form::label('unit', 'Unit') }}
            {{ Form::select('unit', $unit) }}
        </li>

         <li>
            {{ Form::label('Bedrooms', 'Bedrooms') }}
            {{ Form::select('Bedrooms', $Bedrooms ) }}
        </li>

         <li>
            {{ Form::label('Bathrooms', 'Bathrooms') }}
            {{ Form::select('Bathrooms', $Bathrooms ) }}
        </li>

         <li>
            {{ Form::label('Expires After', 'Expires After') }}
            {{ Form::select('Expires After', $Expires ) }}
        </li>
        <h2>Contact Details</h2>
        <li>
            {{ Form::label('Contact Person', 'Contact Person') }}
            {{ Form::text('Contact Person') }}
        </li>   
        


        <li>
            {{ Form::label('Phone', 'Phone') }}
            {{Form::text('Phone')}}
            
        </li>
        
        <li>
            {{ Form::label('Cell', 'Cell') }}
            {{Form::text('Cell')}}
            
        </li>
         <li>
            {{ Form::label('Fax', 'Fax') }}
            {{Form::text('Fax')}}

        </li>

         <li>
            {{ Form::label('E-mail', 'E-mail') }}
            {{Form::text('E-mail')}}

        </li>

         <li>
            {{ Form::label('Website', 'Website') }}
            {{Form::text('Website')}}

        </li>

           <li>
            {{ Form::submit('Submit', array('class' => 'btn')) }}
        </li>
        
    </ul>

</div>
{{ Form::close() }}

@stop
