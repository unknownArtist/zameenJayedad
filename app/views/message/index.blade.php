@extends('layouts.main')
@section('content')
<div id="main-content" class="container-fluid">

<div id="page-content" class="page-content">
<div class="row-fluid margin-top20">
<div class="col-xs-9 grider">
<div class="widget widget-simple">



<div class="col-xs-12">

<div class="col-xs-4 comingmessages padding-bottom15">  

<h4>Messages</h4>
</div>

<div class="col-xs-8 padding-bottom15">

 
{{ HTML::link('user/message/compose','Create new',array('class'=>'btn btn-success pull-right'))}}

</div>

<hr class="hrheight" />

<div class="">
<div class="userchatinbox">

@foreach($inboxs as $inbox)


<div class="col-sm-1 col-md-1 emailname">
  
    <a href="#" class="">
 {{Form::image('uploads/profiles_images/'.$pic,'',array('class'=>'memberimage'));}}

      <!-- <img data-src="holder.js/100%x180" alt="..."> -->
    </a>
    
    <h6>{{$email}}</h6>

    
  </div>
  
  <div class="col-sm-9 comingmessageview">
  <div class="col-sm-2">
  <p>Subject:</p>
  </div>
  <div class="col-sm-10">
    @if($inbox->notification == 0)
    
    <p>{{HTML::link('user/messages/'.$inbox->id.'/readmsg',$inbox->subject)}}</p>
    
     @else
     <div class="unreadmessage">
     <p style="font-weight:bold; color:green;">{{HTML::link('user/messages/'.$inbox->id.'/readmsg',$inbox->subject)}}</p>
     </div>
     @endif
     
     </div>
  
  </div> 
  
  <div class="col-sm-2 comingmessageview">
  {{ HTML::link('user/messages/'.$inbox->from_user.'/'.$inbox->id.'/reply','Reply',array('class'=>'','style'=>'margin-left:26px;'))}} /
   {{ HTML::link('user/messages/'.$inbox->id.'/delete','Delete',array('class'=>'','style'=>'margin-top:;'))}}
  </div> 
 
  <hr class="userchathr" />
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