@extends('layouts.login')
@section('content')
<script>
    $(document).ready(function(){
        $('#Property_Type').change(function(){

            if($('#Property_Type').val() == "Plots")
            {
                $('#homeType').hide();
                $('#bedRooms').hide();
                $('#bathRooms').hide();

            }else
            {
                $('#homeType').show();
                $('#bedRooms').show();
                $('#bathRooms').show();
            }
        });
    });

</script>

<div id="wrapper">
<div id="content">
<div id="form-wrapper">

 {{  Session::get('errors') }}


{{ Form::open(array('url' => 'profolio','files' => true)) }}

 <h1>Post New Listings</h1>

    <ul>
        <h2>Type and Purpose</h2>
        <li>
            {{ Form::label('Property_Type', 'Property Type') }}
            {{ Form::select('Property_Type', $property_Type )}}
        </li>
        <li>
            {{ Form::label('photo', 'Photo') }}
            {{ Form::file('photo')}}
        </li>
        
        <li id="homeType">
            {{ Form::label('home_type', 'Type of Homes') }}
            {{ Form::select('home_type', $Type_of_Homes  )}}
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
            {{ Form::label('Location', 'Choose Location') }}
            {{ Form::select('Location', $Location ) }}
        </li>
         <h2>Wanted Details</h2>
        <li>
            {{ Form::label('Wanted_Title', 'Wanted Title') }}
            {{ Form::text('Wanted_Title') }}
           
        </li>
        <li>
            {{ Form::label('Property_Title ', 'Property Title ') }}
            {{ Form::text('Property_Title') }}

            {{ Form::label('Property Title ', 'Property Title ') }}
            {{ Form::text('Property Title ') }}

        </li>
       
        <li>
            {{ Form::label('Description', 'Description') }}
            {{Form::textarea('Description')}}

        </li>

        <li>
            {{ Form::label('Budget', 'Budget: (PKR)') }}
            {{ Form::text('Budget') }}
        </li>
        <li>
            {{ Form::label('Land_Area', 'Land Area') }}
            {{ Form::text('Land_Area') }}
        </li>
        <li>
            {{ Form::label('unit', 'Unit') }}
            {{ Form::select('unit', $unit) }}
        </li>

         <li id="bedRooms">
            {{ Form::label('Bedrooms', 'Bedrooms') }}
            {{ Form::select('Bedrooms', $Bedrooms ) }}
        </li>

         <li id="bathRooms">
            {{ Form::label('Bathrooms', 'Bathrooms') }}
            {{ Form::select('Bathrooms', $Bathrooms ) }}
        </li>

         <li>
            {{ Form::label('Expires_After', 'Expires After') }}
            {{ Form::select('Expires_After', $Expires ) }}
        </li>
        <h2>Contact Details</h2>
        <li>
            {{ Form::label('Contact_Person', 'Contact Person') }}
            {{ Form::text('Contact_Person') }}
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
</div>
</div>


@stop
