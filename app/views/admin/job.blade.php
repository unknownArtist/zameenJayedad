@extends('layouts.admin')
@section('content')

<div id="wrapper">
<div id="content">

<div id="form-wrapper">

   {{ Form::open(array('url'=>'dashboard/admin/jobs','POST','files'=>true))}}
   <p class="erorclas"> {{ Session::get('errors') }}</p>
    <div class="col-xs-12 margin-top15">
  	{{ Form::label('title', 'Title') }}
    <div class="controls">
  	{{Form::text('title', '', array('class'=>''));}}
    </div>
  </div>	
   

<div class="col-xs-12">
	{{ Form::label('msg', 'Job Name') }}
   	{{ Form::text('jobsname','',array('class'=>'')) }}
    <div class="addanother">
            <a id="serviceshow">Add another</a>
            </div>
            
            <div id="services">
            {{ Form::label('photo', 'Job Name') }}
             {{ Form::text('jobsname1','',array('id'=>'headshowa')) }}
             
          
            
             <div class="addanother">
            <a id="serviceshow1">Add another</a>
            </div>
            </div>
            
           <div id="services1">
            {{ Form::label('photo', 'Job Name') }}
             {{ Form::text('jobsname2','',array('id'=>'headshowb')) }}
            
           
            
             <div class="addanother">
            <a id="serviceshow2">Add another</a>
            </div>
            </div>
            
           <div id="services2">
            {{ Form::label('photo', 'Job Name') }}
             {{ Form::text('jobsname3','',array('id'=>'headshowc')) }}
              
           
            
             <div class="addanother">
            <a id="serviceshow3">Add another</a>
            </div>
            </div>
           <div id="services3">
            {{ Form::label('photo', 'Job Name') }}
             {{ Form::text('jobsname4','',array('id'=>'headshowd')) }}
            
            
            
             <div class="addanother">
            <a id="serviceshow4">Add another</a>
            </div>
            </div>
            <div id="services4">
             {{ Form::label('photo', 'Job Name') }}
             {{ Form::text('jobsname5','',array('id'=>'headshowe')) }}
              
            <div class="addanother">
            <a id="serviceshow5">Add another</a>
            </div>
           
            </div>

             <div id="services5">
            {{ Form::label('photo', 'Job Name') }}
             {{ Form::text('jobsname6','',array('id'=>'headshowf')) }}
               
          
            
             <div class="addanother">
            <a id="serviceshow6">Add another</a>
            </div>
            </div>
            
           <div id="services6">
            {{ Form::label('photo', 'Job Name') }}
             {{ Form::text('jobsname7','',array('id'=>'headshowg')) }}
              
           
            
             <div class="addanother">
            <a id="serviceshow7">Add another</a>
            </div>
            </div>
            
           <div id="services7">
            {{ Form::label('photo', 'Job Name') }}
             {{ Form::text('jobsname8','',array('id'=>'headshowh')) }}
              
           
            
             <div class="addanother">
            <a id="serviceshow8">Add another</a>
            </div>
            </div>
           <div id="services8">
            {{ Form::label('photo', 'Job Name') }}
             {{ Form::text('jobsname9','',array('id'=>'headshowi')) }}
            
            
             <div class="addanother">
            <a id="serviceshow9">Add another</a>
            </div>
            </div>
            <div id="services9">
             {{ Form::label('photo', 'Job Name') }}
             {{ Form::text('jobsname10','',array('id'=>'headshowj')) }}
               
            
           
            </div>

	<div class="btnfloat" style="clear:both;">
   	
   
                {{ Form::submit('Upload',array('class'=>'editbtn submtbtn'))}}
                </div>
                {{ Form::close() }}
                           
                  </div>
              </div>
              </div>
              </div>
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