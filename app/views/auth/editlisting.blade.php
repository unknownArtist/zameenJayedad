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
@foreach($records as $record)

{{ Form::open(array('url' => 'profolio/listing/'.$record->id.'/edit','files' => true)) }}

 <h1>Post New Listings</h1>

    <ul>
        <h2>Type and Purpose</h2>
        <li>
            {{ Form::label('Property_Type', 'Property Type') }}
            {{ Form::select('Property_Type', $property_Type ,$record->property_type)}}
        </li>

        
        <li id="homeType">
            {{ Form::label('home_type', 'Type of Homes') }}
            {{ Form::select('home_type', $Type_of_Homes ,$record->home_type)}}
        </li>

        <li>
            {{ Form::label('Purpose', 'Purpose') }}
            {{ Form::select('Purpose', $Purpose , $record->purpose )}}
        </li>

        
        <li>
            {{ Form::label('Construction_Status', 'Construction Status') }}
            {{ Form::select('Construction_Status', $Construction_Status ,$record->Construction_status )}}
        </li>

        <li>
            {{ Form::label('Wanted_For', 'Wanted For') }}
            {{ Form::select('Wanted_For', $Wanted_For ,$record->wanted   )}}
        </li>

        <h2>Address and Location</h2>

        <li>
            {{ Form::label('city', 'City ') }}
            {{ Form::select('city' , $cities ,$record->city )}}
        </li>

        


        <li>
            {{ Form::label('Location', 'Choose Location') }}
            {{ Form::select('Location', $Location ,$record->location ) }}
        </li>
         <h2>Wanted Details</h2>
        <li>
            {{ Form::label('Wanted_Title', 'Wanted Title') }}
            {{ Form::text('Wanted_Title',$record->w_title) }}
           
        </li>
      
       
        <li>
            {{ Form::label('Description', 'Description') }}
            {{Form::textarea('Description',$record->Description)}}

        </li>

        <li>
            {{ Form::label('Budget', 'Budget: (PKR)') }}
            {{ Form::text('Budget' ,$record->budget) }}
        </li>
        <li>
            {{ Form::label('Land_Area', 'Land Area') }}
            {{ Form::text('Land_Area',$record->l_area) }}
        </li>
        <li>
            {{ Form::label('unit', 'Unit') }}
            {{ Form::select('unit', $unit,$record->unit) }}
        </li>

         <li id="bedRooms">
            {{ Form::label('Bedrooms', 'Bedrooms') }}
            {{ Form::select('Bedrooms', $Bedrooms,$record->bedroom ) }}
        </li>

         <li id="bathRooms">
            {{ Form::label('Bathrooms', 'Bathrooms') }}
            {{ Form::select('Bathrooms', $Bathrooms ,$record->bathroom) }}
        </li>

         <li>
            {{ Form::label('Expires_After', 'Expires After') }}
            {{ Form::select('Expires_After', $Expires ,$record->expires) }}
        </li>
        <h2>Contact Details</h2>
        <li>
            {{ Form::label('Contact_Person', 'Contact Person') }}
            {{ Form::text('Contact_Person',$record->contact_p) }}
        </li>   
        


        <li>
            {{ Form::label('Phone', 'Phone') }}
            {{Form::text('Phone',$record->phone)}}
            
        </li>
        
        <li>
            {{ Form::label('Cell', 'Cell') }}
            {{Form::text('Cell',$record->cell)}}
            
        </li>
         <li>
            {{ Form::label('Fax', 'Fax') }}
            {{Form::text('Fax',$record->fax)}}

        </li>

         <li>
            {{ Form::label('E-mail', 'E-mail') }}
            {{Form::text('E-mail',$record->email)}}

        </li>

         <li>
            {{ Form::label('Website', 'Website') }}
            {{Form::text('Website',$record->website)}}

        </li>

           <li>
            {{ Form::submit('Modify', array('class' => 'btn')) }}
        </li>
        
    </ul>

</div>
{{ Form::close() }}
@endforeach
</div>
</div>


@stop
