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

        <li>
            {{ Form::label('Purpose', 'Purpose') }}
            {{ Form::select('Purpose', $Purpose , $record->purpose )}}
        </li>

        
        <li>
            {{ Form::label('Construction_Status', 'Construction Status') }}
            {{ Form::select('Construction_Status', $Construction_Status ,$record->Construction_status )}}
        </li>

        <!-- <li>
            {{ Form::label('Wanted_For', 'Wanted For') }}
            {{ Form::select('Wanted_For', $Wanted_For ,$record->wanted   )}}
        </li> -->

        <h2>Address and Location</h2>

        <li>
            {{ Form::label('city', 'City ') }}
            {{ Form::select('city' , $cities ,$record->city )}}
        </li>

        


        <li>
            {{ Form::label('Location', 'Choose Location') }}
            {{ Form::select('Location', $Location ,$record->location ) }}
        </li>
        <!--  <h2>Wanted Details</h2>
        <li>
            {{ Form::label('Wanted_Title', 'Wanted Title') }}
            {{ Form::text('Wanted_Title',$record->w_title) }}
           
        </li>
      
       
        <li> -->
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
<script type="text/javascript">
    $(document).ready(function(){
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
