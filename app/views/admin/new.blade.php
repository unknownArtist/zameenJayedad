@extends('layouts.admin')
@section('content')

<div id="wrapper">
<div id="content">

<div id="form-wrapper">

   {{ Form::open(array('url'=>'dashboard/admin/news','POST','files'=>true))}}
   <p class="erorclas"> {{ Session::get('errors') }}</p>
    <div class="col-xs-12 margin-top15">
  	{{ Form::label('title', 'Title') }}
    <div class="controls">
  	{{Form::text('title', '', array('class'=>''));}}
    </div>
  </div>	
   

<div class="col-xs-12">
	{{ Form::label('msg', 'Description') }}
   	{{ Form::textarea('description','',array('class'=>'form-control textareaheight')) }}

	<div class="btnfloat">
   	
   
                {{ Form::submit('Upload',array('class'=>'editbtn submtbtn'))}}
                </div>
                {{ Form::close() }}
                           
                  </div>
              </div>
              </div>
              </div>
              
@stop