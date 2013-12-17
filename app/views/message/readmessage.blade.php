@extends('layouts.main')
@section('content')

<div id="main-content" class="container-fluid">

<div id="page-content" class="page-content">
<div class="row-fluid margin-top20">
<div class="col-xs-9 grider">
<div class="widget widget-simple">

<div class="col-xs-12">

<div class="col-xs-4 comingmessages padding-bottom15">  

<h4>Message</h4>
</div>
<div class="col-xs-8 padding-bottom15">

 
{{ HTML::link('user/messages','Return to Inbox',array('class'=>'btn btn-success pull-right'))}}

</div>

<hr class="hrheight" />


<div class="">
<div class="userchatinbox">

@foreach($inboxs as $inbox)

<div class="col-sm-12">
  {{ HTML::link('user/messages/'.$inbox->from_user.'/'.$inbox->id.'/reply','Reply',array('class'=>'pull-right padding-bottom15'))}}
   {{ HTML::link('user/messages/'.$inbox->id.'/delete','Delete',array('class'=>'padding-bottom15'))}}
  </div> 

<hr class="userchathr" />



<div class="col-sm-12">
    
    <p>{{$inbox->body}}</p>
     </div> 
  
  
 
  
    @endforeach
    
    
</div>

<hr class="hrheight hrpadding" />

</div>

</div>

</div>
</div>

<div class="col-xs-3 statistic-box widget widget-simple padding-left10 padding-right10">
  
 <div class="widget-header col-xs-12 margin-bottom15">
 <h4 style="text-align:center; float:none;">Upcoming Events</h4>
 
 </div>
 <div id='calendar' class="well well-black"></div>
@foreach($events as $event)

@endforeach
 
 </div>

</div>
</div>
</div>

<script>

	$(document).ready(function() {
	
		var date = new Date();
		var d = date.getDate();
		var m = date.getMonth();
		var y = date.getFullYear();
		
		$('#calendar').fullCalendar({
			editable: true,
			events: [

			<?php foreach($events as $event): ?>

				{
					
				title:'<?php echo " ".$event->ev_name." "."at"." ".$event->ev_place ?>',
					start: '<?php echo $event->ev_time  ?>',
					
					allDay: false
					
					
				},

			<?php endforeach; ?>
				
			]
		});
		
	});

</script>
@stop