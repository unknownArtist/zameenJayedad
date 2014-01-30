@extends('layouts.admin')
@section('content')

<div id="wrapper">
<div id="content">

<div id="form-wrapper">
  @foreach($latestnews as $latestnews) 
   {{ Form::open(array('url'=>'dashboard/admin/latestnews/'.$latestnews->id.'/edit','POST','files'=>true))}}
   <p class="erorclas"> {{ Session::get('errors') }}</p>
 
    <div class="col-xs-12 margin-top15">
  	{{ Form::label('title', 'Title') }}
    <div class="controls">
  	{{Form::text('title', $latestnews->title, array('class'=>''));}}
    </div>
  </div>	
   

<div class="col-xs-12">
	{{ Form::label('msg', 'Description') }}
   	{{ Form::textarea('description',$latestnews->description,array('class'=>'form-control textareaheight')) }}

	<div class="btnfloat">
   	
   
                {{ Form::submit('Update',array('class'=>'editbtn submtbtn'))}}
                </div>
                {{ Form::close() }}
                           
                  </div>
              </div>
              </div>
              </div>
              @endforeach
              
@stop