@extends('layouts.login')
@section('content')

<div id="wrapper">
<div id="content">


<div class="compose">
  <h3>Reply Message</h3>
  <hr />
</div>
	<div id="form-wrapper">

   {{ Form::open(array('url'=>'dashboard/message/{id}/reply','POST','files'=>true))}}
   
  	
  	{{ Form::hidden('to',Request::segment(3))}}
    <div class="col-xs-12 padding-top15">
    {{ Form::label('m_subject', 'Message Subject') }}
    {{ Form::text('subject','',array('class'=>'form-control txtheight')) }}
   </div>

<div class="col-xs-12 padding-top15">
	{{ Form::label('msg', 'Message') }}
   	{{ Form::textarea('body','',array('class'=>'form-control textareaheight')) }}

	<div class="btnfloat">
   	{{ HTML::link('user/messages','Return to inbox',array('class'=>'editbtn '))}}
                {{ Form::submit('Send Message',array('class'=>'editbtn submtbtn'))}}
                </div>
                {{ Form::close() }}
                  </div>
              </div>
              </div>
              </div>
              
@stop