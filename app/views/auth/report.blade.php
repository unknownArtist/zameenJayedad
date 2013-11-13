@extends('layouts.main')
@section('content')
</div>
<div id="search">

   </div> 
</div>
 {{  Session::get('errors') }}
 <div id="wrapper">
 <div id="report">
 	<h2>Your performance in 30 days (14 Oct, 2013 to 12 Nov, 2013)</h2>

{{ Form::open(array('url' => 'report')) }}
</div>
</div>
{{ Form::close() }}

@stop