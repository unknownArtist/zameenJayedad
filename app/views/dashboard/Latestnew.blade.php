@extends('layouts.main')
@section('content')

<div id="wrapper">
    <div id="content">
    <div id="form-wrapper" style="width:100%;">
@foreach($latestnews as $latestnews)    	
<h1>{{$latestnews->title}}</h1>

<div class="bahriaupdate">

<h3>Description</h3>
<p>{{$latestnews->description}}</p>


@endforeach
</div>  
    
    </div>
    </div>
    </div>

@stop