@extends('layouts.login')
@section('content')

 
<div id="wrapper">
<div id="content">
<div id="form-wrapper">

{{ Form::open(array('url' => 'user/email/alert/{emailAlertId}/edit')) }}



 <h1> Create Email Alert </h1>
<p class="erorclas"> {{ Session::get('errors') }}</p>
    <ul>
        <h2>Basic Alert Criteria</h2>
        @foreach ($records as $record)
           
        <li>
            {{ Form::label('receive_alert_on', 'Receive alert on') }}
            {{ Form::select('receive_alert_on', $alert,$record->receive_alert )}}
        </li>
        
        <div class="check"> 
            
         <li>
            
            {{ Form::label('Property_Type', 'Property Type:', array('class' => 'lab')) }}
        </li>   
        
            <li>{{ Form::label('houses', 'Houses') }}
          
             {{ Form::checkbox('Property_Type[]','houses','checked')}}
    
            {{ Form::checkbox('Property_Type[]','houses')}}</li>

            <li> 
             {{ Form::label('flats', 'Flats') }}
        
            {{ Form::checkbox('Property_Type[]','flats','checked')}}
       
        {{ Form::checkbox('Property_Type[]','flats')}}
     
        </li>

        <li>  {{ Form::label('upper_p', 'Upper Portions') }}
            {{ Form::checkbox('Property_Type[]','upper_p')}}
        </li>

        <li>  {{ Form::label('lower_p', 'Lower Portions') }}
            {{ Form::checkbox('Property_Type[]','lower_p')}}
        </li>

        <li>  {{ Form::label('f_house', 'Farm Houses') }}
            {{ Form::checkbox('Property_Type[]','f_house')}}
        </li>

        <li>  {{ Form::label('rooms', 'rooms') }}
            {{ Form::checkbox('Property_Type[]','rooms')}}
        </li>

        <li>  {{ Form::label('residential', 'Residential') }}
            {{ Form::checkbox('Property_Type[]','residential')}}
        </li>

        <li>  {{ Form::label('agricultural_land', 'Agricultural Land') }}
            {{ Form::checkbox('Property_Type[]','agricultural_land')}}
        </li>

        <li>  {{ Form::label('commercial', ' Commercial') }}
            {{ Form::checkbox(' Property_Type[]','commercial')}}
        </li>

        <li>  {{ Form::label('offices', 'Offices') }}
            {{ Form::checkbox('Property_Type[]','offices')}}
        </li>

        <li>  {{ Form::label('shops', 'Shops') }}
            {{ Form::checkbox('Property_Type[]','shops')}}
        </li>

        <li>  {{ Form::label('warehouses', 'Warehouses') }}
            {{ Form::checkbox('Property_Type[]','warehouses')}}
        </li>

        <li>  {{ Form::label('factories', 'Factories') }}
            {{ Form::checkbox('Property_Type[]','factories')}}
        </li>

        <li>  {{ Form::label('buildings', 'Buildings') }}
            {{ Form::checkbox('Property_Type[]','buildings')}}
        </li>

        <li>  {{ Form::label('others', 'Others') }}
            {{ Form::checkbox('Property_Type[]','others')}}
        </li>

        </div>
    <div id="radio">
       
        <li>
            {{ Form::label('Purpose', 'Purpose:', array('class' => 'lab')) }} <br>
        </li>
        <li>

         {{ Form::label('purpose', 'Forsale') }}
        
            @if($record->purpose=='forsale')           
           {{  Form::radio('purpose','forsale','checked' )  }}
           @else
            {{  Form::radio('purpose','forsale' )  }}
            @endif
         </li>
        <li>    
            {{ Form::label('purpose', 'For rent') }}
            @if($record->purpose=='for rent')
            {{ Form::radio('purpose' ,'for rent','checked')}}
            @else
            {{  Form::radio('purpose','for rent' )  }}
            @endif
        </li>
        <li>    
            {{ Form::label('purpose', 'Wanted') }}
             @if($record->purpose=='wanted')
            {{ Form::radio('purpose','wanted','checked') }}
            @else
            {{  Form::radio('purpose','wanted' )  }}
            @endif

        </li>    
       

        </div>


        <li class="price">
            {{ Form::label('price', 'Price' , array('class' => 'lab')) }}
            {{ Form::select('price',$price,$record->price)}}
        </li>

        <li>
            {{ Form::label('beds', 'Beds') }}
            {{ Form::select('beds',$beds,$record->beds)}}
        </li>

        <h2>Location Preferences</h2>

        <li>
            {{ Form::label('location', 'Location' ) }}
            {{ Form::text('location', $record->location)}}
       
        </li>

         <h2>Other Specifications</h2>
        <li>
            {{ Form::label('keyword', 'Keyword') }}
            {{ Form::text('keyword',$record->keyword) }}
           
        </li>

        <li>
            {{ Form::label('covered_area', 'Covered Area') }}
            {{ Form::select('covered_area',$area, $record->covered_area) }}
           
        </li>
       
        <li>
            {{ Form::label('baths', 'Baths') }}
            {{Form::select('baths',$baths,$record->baths )}}

        </li>

        <li>
            {{ Form::label('estate_agent', 'Estate Agent') }}
            {{Form::text('estate_agent', $record->estate_agent)}}

        </li>
        <li>
            {{ Form::label('finance_available', 'Finance Available') }}
            {{ Form::select('finance_available',$Finance ,$record->finance_available)}}
        </li>
        <li>
            {{ Form::label('occupancy_status', 'Occupancy Status') }}
            {{ Form::select('occupanc_status',$Occupancy ,$record->occupanc_status) }}
        </li>
        <li>
            {{ Form::label('ownership_status', 'Ownership Status') }}
            {{ Form::select('ownership_status',$Ownership ,$record->ownership_status) }}
        </li>

        <li>
            {{ Form::submit('Add Alert', array('class' => 'btn')) }}
        </li>
        @endforeach
        
    </ul>

</div>
{{ Form::close() }}
</div>
</div>

@stop
