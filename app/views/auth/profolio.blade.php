@extends('layouts.login')
@section('content')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js"></script>

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
@if ($errors->any())
  
     {{ implode('', $errors->all('<p class="erorclas">:message</p>')) }}
   
   @endif
    <ul>
        <h2>Type and Purpose</h2>
        <li>
            {{ Form::label('Property_Type', 'Property Type') }}
            {{ Form::select('Property_Type', $property_Type )}}
        </li>
        <li>
            {{ Form::label('photo', 'Photos') }}
            {{ Form::file('photo')}}
             <div class="addanother">
            <a id="serviceshow">Add another</a>
            </div>
            
            <div id="services">
            {{ Form::label('photo', 'Title') }}
             {{ Form::text('title1','',array('id'=>'headshowa')) }}
               <p class="addanotherp">e.g Kicthen View, Bedroom, etc</p>
            <input type="file" name="photo1" />
          
            
             <div class="addanother">
            <a id="serviceshow1">Add another</a>
            </div>
            </div>
            
           <div id="services1">
            {{ Form::label('photo', 'Title') }}
             {{ Form::text('title2','',array('id'=>'headshowb')) }}
              <p class="addanotherp">e.g Kicthen View, Bedroom, etc</p>
            <input type="file" name="photo2" />
           
            
             <div class="addanother">
            <a id="serviceshow2">Add another</a>
            </div>
            </div>
            
           <div id="services2">
            {{ Form::label('photo', 'Title') }}
             {{ Form::text('title3','',array('id'=>'headshowc')) }}
              <p class="addanotherp">e.g Kicthen View, Bedroom, etc</p>
            <input type="file" name="photo3" />
           
            
             <div class="addanother">
            <a id="serviceshow3">Add another</a>
            </div>
            </div>
           <div id="services3">
            {{ Form::label('photo', 'Title') }}
             {{ Form::text('title4','',array('id'=>'headshowd')) }}
             <p class="addanotherp">e.g Kicthen View, Bedroom, etc</p>
            <input type="file" name="photo4" />
            
            
             <div class="addanother">
            <a id="serviceshow4">Add another</a>
            </div>
            </div>
            <div id="services4">
             {{ Form::label('photo', 'Title') }}
             {{ Form::text('title5','',array('id'=>'headshowe')) }}
               <p class="addanotherp">e.g Kicthen View, Bedroom, etc</p>
            <input type="file" name="photo5" />
            <div class="addanother">
            <a id="serviceshow5">Add another</a>
            </div>
           
            </div>

             <div id="services5">
            {{ Form::label('photo', 'Title') }}
             {{ Form::text('title6','',array('id'=>'headshowf')) }}
               <p class="addanotherp">e.g Kicthen View, Bedroom, etc</p>
            <input type="file" name="photo6" />
          
            
             <div class="addanother">
            <a id="serviceshow6">Add another</a>
            </div>
            </div>
            
           <div id="services6">
            {{ Form::label('photo', 'Title') }}
             {{ Form::text('title7','',array('id'=>'headshowg')) }}
              <p class="addanotherp">e.g Kicthen View, Bedroom, etc</p>
            <input type="file" name="photo7" />
           
            
             <div class="addanother">
            <a id="serviceshow7">Add another</a>
            </div>
            </div>
            
           <div id="services7">
            {{ Form::label('photo', 'Title') }}
             {{ Form::text('title8','',array('id'=>'headshowh')) }}
              <p class="addanotherp">e.g Kicthen View, Bedroom, etc</p>
            <input type="file" name="photo8" />
           
            
             <div class="addanother">
            <a id="serviceshow8">Add another</a>
            </div>
            </div>
           <div id="services8">
            {{ Form::label('photo', 'Title') }}
             {{ Form::text('title9','',array('id'=>'headshowi')) }}
             <p class="addanotherp">e.g Kicthen View, Bedroom, etc</p>
            <input type="file" name="photo9" />
            
            
             <div class="addanother">
            <a id="serviceshow9">Add another</a>
            </div>
            </div>
            <div id="services9">
             {{ Form::label('photo', 'Title') }}
             {{ Form::text('title10','',array('id'=>'headshowj')) }}
               <p class="addanotherp">e.g Kicthen View, Bedroom, etc</p>
            <input type="file" name="photo10" />
            
           
            </div>
            
            
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

       <!--  <li>
            {{ Form::label('Wanted_For', 'Wanted For') }}
            {{ Form::select('Wanted_For', $Wanted_For  )}}
        </li> -->

       <li>
            {{ Form::label('city', 'City ') }}
            {{ Form::select('city' , $cities )}}
        </li>
        <br />
        <!--  <h2>Wanted Details</h2>
        <li>
            {{ Form::label('Wanted_Title', 'Wanted Title') }}
            {{ Form::text('Wanted_Title') }}
           
        </li>
        <li>
            {{ Form::label('Property_Title ', 'Property Title ') }}
            {{ Form::text('Property_Title') }}
        </li>
       
        <li>
            {{ Form::label('Description', 'Description') }}
            {{Form::textarea('Description')}}

        </li> -->

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
        <br />
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
  <p>
  <div align="center" id="map" style="width: 400px; height: 400px; margin:0 auto"><br/></div>
   </p>
  
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
{{ Form::close() }}
</div>

</div>
</div>

<script type="text/javascript">
    $(document).ready(function(){

        $("#map").hide();
/*--------------------------------------------*/
           $( "#myAddress" ).blur(function() {
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
           /*--------------------------------*/

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
		
		$('#services').hide(); //Initially form wil be hidden.

  $('#serviceshow').click(function() {
   $('#services').show();//Form shows on button click
   $('#serviceshow').hide();
   $('#headshowa').focus();
   
     });
	 
	 $('#services1').hide(); //Initially form wil be hidden.

  $('#serviceshow1').click(function() {
   $('#services1').show();//Form shows on button click
   $('#serviceshow1').hide();
    $('#headshowb').focus();
     });
	 
	 $('#services2').hide(); //Initially form wil be hidden.

  $('#serviceshow2').click(function() {
   $('#services2').show();//Form shows on button click
   $('#serviceshow2').hide();
    $('#headshowc').focus();
     });
	 
	 $('#services3').hide(); //Initially form wil be hidden.

  $('#serviceshow3').click(function() {
   $('#services3').show();//Form shows on button click
   $('#serviceshow3').hide();
    $('#headshowd').focus();
     });
	 
	 $('#services4').hide(); //Initially form wil be hidden.

  $('#serviceshow4').click(function() {
   $('#services4').show();//Form shows on button click
   $('#serviceshow4').hide();
    $('#headshowe').focus();
     });

  $('#services5').hide(); //Initially form wil be hidden.

  $('#serviceshow5').click(function() {
   $('#services5').show();//Form shows on button click
   $('#serviceshow5').hide();
   $('#headshowf').focus();
   
     });
   
   $('#services6').hide(); //Initially form wil be hidden.

  $('#serviceshow6').click(function() {
   $('#services6').show();//Form shows on button click
   $('#serviceshow6').hide();
    $('#headshowg').focus();
     });
   
   $('#services7').hide(); //Initially form wil be hidden.

  $('#serviceshow7').click(function() {
   $('#services7').show();//Form shows on button click
   $('#serviceshow7').hide();
    $('#headshowh').focus();
     });
   
   $('#services8').hide(); //Initially form wil be hidden.

  $('#serviceshow8').click(function() {
   $('#services8').show();//Form shows on button click
   $('#serviceshow8').hide();
    $('#headshowi').focus();
     });
   
   $('#services9').hide(); //Initially form wil be hidden.

  $('#serviceshow9').click(function() {
   $('#services9').show();//Form shows on button click
   $('#serviceshow9').hide();
    $('#headshowj').focus();
     });

    }); 

</script>
@stop
