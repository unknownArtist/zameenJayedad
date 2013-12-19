@extends('layouts.login')
@section('content')
<div id="wrapper">
<div id="content">

<div class="messageswidth">

<div class="comingmessages">  

<h3>Messages</h3>
</div>

<div class="createnewbtn">

 
({{ MessageCentreController::getUnreadMessages() }}) {{ HTML::link('dashboard/message/compose','Create new',array('class'=>'editbtn'))}}

</div>

</div>

<hr class="userchathr" />

<div class="userchatinbox">

@foreach($inboxs as $inbox)


<!--<div class="col-sm-1 col-md-1 emailname">
  
    
    <h6></h6>

    
  </div>-->
  
  <div class="comingmessageview">
  <div class="subjectwidth">
  <p>Subject:</p>
  </div>
  <div class="inboxwidth">
  
  <div class="readmsg">
    @if($inbox->notification == 0)
    
    <p>{{HTML::link('dashboard/message/'.$inbox->id.'/readmsg',$inbox->subject)}}</p>
    </div>
    
     @else
     <div class="unreadmessage">
     <p>{{HTML::link('dashboard/message/'.$inbox->id.'/readmsg',$inbox->subject)}}</p>
     </div>
     @endif
     
     </div>
  
 
  
  <div class="mesgbtns">
  {{ HTML::link('dashboard/message/'.$inbox->from_user.'/'.$inbox->id.'/reply','Reply',array('class'=>'editbtn','style'=>''))}}
   {{ HTML::link('dashboard/message/'.$inbox->id.'/delete','Delete',array('class'=>'editbtn','style'=>''))}}
  </div> 
   </div> 
 
  <hr class="" />
    @endforeach
    
    
</div>

<hr class="userchathr" />

</div>
</div>
@stop