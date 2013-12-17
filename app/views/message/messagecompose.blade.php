@extends('layouts.main')
@section('content')

<div id="main-content" class="container-fluid">

<div id="page-content" class="page-content">
<div class="row-fluid margin-top20">
<div class="col-xs-9 grider">
<div class="widget widget-simple padding-bottom15">

    
  <div class="col-xs-12 widget-header">
  <h4>Compose Message</h4>
</div>
   {{ Form::open(array('url'=>'user/message/compose','POST','files'=>true))}}
    <div class="col-xs-12 margin-top15">
  	{{ Form::label('send_to', 'Send To') }}
    <div class="controls">
  	{{Form::select('to', $teams,'', array('class'=>''));}}
    </div>
  </div>	
    <div class="col-xs-12">
   	{{ Form::label('m_subject', 'Message Subject') }}
   	{{ Form::text('subject','',array('class'=>'form-control txtboxheight')) }}
   </div>	

<div class="col-xs-12">
	{{ Form::label('msg', 'Message') }}
   	{{ Form::textarea('body','',array('class'=>'form-control')) }}


   	{{ HTML::link('dashboard/messages','Return to inbox',array('class'=>'btn btn-success '))}}
                {{ Form::submit('Send Message',array('class'=>'btn btn-primary pull-right'))}}
                {{ Form::close() }}
                  </div>
              </div>
              </div>
              
            
              </div>
              </div>
@stop