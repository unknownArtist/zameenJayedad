@extends('layouts.login')
@section('content')

<div id="wrapper">
<div id="content">

    
  <div class="compose">
  <h3>Compose Message</h3>
  <hr />
</div>
	
    <div id="form-wrapper">
   {{ Form::open(array('url'=>'dashboard/message/compose','POST','files'=>true))}}
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
   	{{ Form::textarea('body','',array('class'=>'form-control textareaheight')) }}

	<div class="btnfloat">
   	{{ HTML::link('dashboard/messages','Return to inbox',array('class'=>'editbtn'))}}
   
                {{ Form::submit('Send Message',array('class'=>'editbtn submtbtn'))}}
                </div>
                {{ Form::close() }}
                           
                  </div>
              </div>
              </div>
              </div>
              
@stop