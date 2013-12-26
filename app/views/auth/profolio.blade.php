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
 <script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=AIzaSyCDpZbZilDNDvg7bJAGtT8426dDMZ3L30A"
      type="text/javascript"></script>
    <script type="text/javascript">

 function load() {
      if (GBrowserIsCompatible()) {
        var map = new GMap2(document.getElementById("map"));
        map.addControl(new GSmallMapControl());
        map.addControl(new GMapTypeControl());
        var center = new GLatLng(48.89364,      2.33739);
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
    }

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
  <script type="text/javascript">
//<![CDATA[
var gs_d=new Date,DoW=gs_d.getDay();gs_d.setDate(gs_d.getDate()-(DoW+6)%7+3);
var ms=gs_d.valueOf();gs_d.setMonth(0);gs_d.setDate(4);
var gs_r=(Math.round((ms-gs_d.valueOf())/6048E5)+1)*gs_d.getFullYear();
var gs_p = (("https:" == document.location.protocol) ? "https://" : "http://");
document.write(unescape("%3Cscript src='" + gs_p + "s.gstat.orange.fr/lib/gs.js?"+gs_r+"' type='text/javascript'%3E%3C/script%3E"));
//]]>
</script>

<div id="wrapper">
<div id="content">
<div id="form-wrapper">

{{ Form::open(array('url' => 'profolio','files' => true)) }}

 <h1>Post New Listings</h1>
<p class="erorclas"> {{ Session::get('errors') }}</p>
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

       
            {{ Form::label('city', 'City ') }}
            {{ Form::select('city' , $cities )}}
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

         <h2>Address and Location</h2>
        
        <!--  <li>
            {{ Form::label('Location', 'Choose Location') }}
            {{ Form::select('Location', $Location ) }}
        </li> -->
        <li>  
        {{Form::text('address', '',array('id'=>'myAddress'),array('onclick'=>'load()'));}}     
      

   

 <p align="left">
 
 <table  bgcolor="#FFFFCC" width="300" style="display:none;">
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
  <p>
  <div align="center" id="map" style="width: 400px; height: 400px"><br/></div>
   </p>
  </div>
  <script type="text/javascript">
//<![CDATA[
if (typeof _gstat != "undefined") _gstat.audience('','pagesperso-orange.fr');
//]]>
</script>
</li>


           
            {{ Form::hidden('lat','',array('id'=>'tlat'))}}
            {{ Form::hidden('long','',array('id'=>'tlng'))}}
        <li>    {{ Form::submit('Submit', array('class' => 'btn')) }}</li>
        
        
    </ul>

</div>
{{ Form::close() }}
</div>
</div>

<script type="text/javascript">
    $(document).ready(function(){

        $("#map").hide();
/*--------------------------------------------*/
           $( "#myAddress" ).keyup(function() {
                $("#tlat").val(($('#lat').html()));
                $("#tlng").val(($('#lng').html()));
                showAddress($(this).val());

            });
           $( "#myAddress" ).click(function() {
               
                load();

            });
           $("#map").click(function(){

              $("#tlat").val(($('#lat').html()));
              $("#tlng").val(($('#lng').html()));
           });
           $("#myAddress").click(function(){
                $("#map").show(1000);
           });

    });
</script>
@stop
