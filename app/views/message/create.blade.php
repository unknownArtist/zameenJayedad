@extends('layouts.login')
@section('content')

<div id="wrapper">
<div id="content">

<div class="col-xs-12 widget-header">

<div class="col-xs-4 comingmessages">

<h3>Message Box Empty</h3>
</div>
<div class="col-xs-8">

 
{{ HTML::link('user/message/compose','Create new',array('class'=>'btn btn-success pull-right'))}}

</div>
</div>
</div>

<div class="col-xs-3 statistic-box widget widget-simple padding-left10 padding-right10">
  
 <div class="widget-header col-xs-12 margin-bottom15">
 <h4 style="text-align:center; float:none;">Upcoming Events</h4>
 
 </div>
 
@foreach($events as $event)

@endforeach
 
 </div>
 </div>

@stop
