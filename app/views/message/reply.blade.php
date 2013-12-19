@extends('layouts.login')
@section('content')

<div id="main-content" class="container-fluid">

<div id="page-content" class="page-content">
<div class="row-fluid margin-top20">
<div class="col-xs-9 grider">
<div class="widget widget-simple padding-bottom15">

<div class="col-xs-12 widget-header">
  <h4>Reply Message</h4>
</div>

   {{ Form::open(array('url'=>'dashboard/message/{id}/reply','POST','files'=>true))}}
   
  	
  	{{ Form::hidden('to',Request::segment(3))}}
    <div class="col-xs-12 padding-top15">
    {{ Form::label('m_subject', 'Message Subject') }}
    {{ Form::text('subject','',array('class'=>'form-control txtheight')) }}
   </div>

<div class="col-xs-12 padding-top15">
	{{ Form::label('msg', 'Message') }}
   	{{ Form::textarea('body','',array('class'=>'form-control txtareaheight2')) }}


   	{{ HTML::link('user/messages','Return to inbox',array('class'=>'btn btn-success '))}}
                {{ Form::submit('Send Message',array('class'=>'btn btn-primary pull-right'))}}
                {{ Form::close() }}
                  </div>
              </div>
              </div>
@stop