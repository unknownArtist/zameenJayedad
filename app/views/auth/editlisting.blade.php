@extends('layouts.login')
@section('content')
<script>
    $(document).ready(function(){

        $('#Property_Type').change(function(){

            if($('#Property_Type').val() == "Plot")
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
         $('#myAddress').blur(function() {
                $("#tlat").val(($('#lat').html()));
                $("#tlng").val(($('#lng').html()));
                showAddress($(this).val());

            });
         $('#map').click(function(){

              $("#tlat").val(($('#lat').html()));
              $("#tlng").val(($('#lng').html()));
           });

    });
    
    $(window).load(function() {
      if (GBrowserIsCompatible()) {
        var map = new GMap2(document.getElementById("map"));
        map.addControl(new GSmallMapControl());
        map.addControl(new GMapTypeControl());
         <?php foreach($records as $record)
    {
      ?>
        var center =new GLatLng(<?php echo "$record->latitude";?>,      <?php echo "$record->longitude";?>);
         <?php }?>
        map.setCenter(center, 15);
        geocoder = new GClientGeocoder();
        var marker = new GMarker(center, {draggable: true});  
        map.addOverlay(marker);
        document.getElementById("lat").innerHTML = center.lat().toFixed(5);
        document.getElementById("lng").innerHTML = center.lng().toFixed(5);

      GEvent.addListener(marker, "dragend", function() {
       var point = marker.getPoint();
          map.panTo(point);
       document.getElementById("lat").innerHTML = point.lat().toFixed(5);
       document.getElementById("lng").innerHTML = point.lng().toFixed(5);

        });


     GEvent.addListener(map, "moveend", function() {
          map.clearOverlays();
    var center = map.getCenter();
          var marker = new GMarker(center, {draggable: true});
          map.addOverlay(marker);
          document.getElementById("lat").innerHTML = center.lat().toFixed(5);
       document.getElementById("lng").innerHTML = center.lng().toFixed(5);


     GEvent.addListener(marker, "dragend", function() {
      var point =marker.getPoint();
         map.panTo(point);
      document.getElementById("lat").innerHTML = point.lat().toFixed(5);
         document.getElementById("lng").innerHTML = point.lng().toFixed(5);

        });
 
        });

      }
       
        });

</script>
<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=AIzaSyCDpZbZilDNDvg7bJAGtT8426dDMZ3L30A"
      type="text/javascript"></script>
 

<div id="wrapper">
<div id="content">
<div id="form-wrapper">

@foreach($records as $record)

{{ Form::open(array('url' => 'profolio/listing/'.$record->id.'/edit','files' => true,'id'=>'result')) }}

 <h1>Post New Listings</h1>
<p class="erorclas"> {{ Session::get('errors') }}</p>
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
        <h2>Address and Location</h2>
        <li>  
        {{Form::text('address', $record->location,array('id'=>'myAddress'))}}     

 <p align="left">
 
 <table  bgcolor="#FFFFCC" width="300" style="display:none;" >
  <tr>
    <td><b>Latitude</b></td>
    <td><b>Longitude</b></td>
  </tr>
  <tr>

    <td id="lat"></td>
    <td id="lng"></td>

  </tr>
</table>
 </p>
</li>
           <div align="center" id="map" style="width: 500px; margin-top:15px; height: 400px"><br/></div>

           <li>
            {{ Form::hidden('lat','',array('id'=>'tlat'))}}
            {{ Form::hidden('long','',array('id'=>'tlng'))}}
            {{ Form::submit('Modify', array('class' => 'btn')) }}
        </li>

        
    </ul>


</div>
{{ Form::close() }}
@endforeach
</div>
</div>
<script type="text/javascript">
 function showAddress(address) {

       var map = new GMap2(document.getElementById("map"));
       map.addControl(new GSmallMapControl());
       map.addControl(new GMapTypeControl());
       if (geocoder) {
        geocoder.getLatLng(
          address,
          function(point) {
            if (!point) {
              alert(address + " not found");
            } else {
          document.getElementById("lat").innerHTML = point.lat().toFixed(5);
       document.getElementById("lng").innerHTML = point.lng().toFixed(5);
         map.clearOverlays()
            map.setCenter(point, 14);
   var marker = new GMarker(point, {draggable: true});  
         map.addOverlay(marker);

        GEvent.addListener(marker, "dragend", function() {
      var pt = marker.getPoint();
         map.panTo(pt);
      document.getElementById("lat").innerHTML = pt.lat().toFixed(5);
         document.getElementById("lng").innerHTML = pt.lng().toFixed(5);
        });


     GEvent.addListener(map, "moveend", function() {
          map.clearOverlays();
    var center = map.getCenter();
          var marker = new GMarker(center, {draggable: true});
          map.addOverlay(marker);
          document.getElementById("lat").innerHTML = center.lat().toFixed(5);
       document.getElementById("lng").innerHTML = center.lng().toFixed(5);

     GEvent.addListener(marker, "dragend", function() {
     var pt = marker.getPoint();
        map.panTo(pt);
    document.getElementById("lat").innerHTML = pt.lat().toFixed(5);
       document.getElementById("lng").innerHTML = pt.lng().toFixed(5);
        });
 
        });

            }
          }
        );
      }
    }
</script>

@stop
