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

<hr />

<div class="">
<div class="userchatinbox">

@foreach($inboxs as $inbox)


<div class="col-sm-1 col-md-1 emailname">
  
    
    <h6></h6>

    
  </div>
  
  <div class="col-sm-9 comingmessageview">
  <div class="col-sm-2">
  <p>Subject:</p>
  </div>
  <div class="col-sm-10">
    @if($inbox->notification == 0)
    
    <p>{{HTML::link('dashboard/message/'.$inbox->id.'/readmsg',$inbox->subject)}}</p>
    
     @else
     <div class="unreadmessage">
     <p style="font-weight:bold; color:green;">{{HTML::link('dashboard/message/'.$inbox->id.'/readmsg',$inbox->subject)}}</p>
     </div>
     @endif
     
     </div>
  
  </div> 
  
  <div class="col-sm-2 comingmessageview">
  {{ HTML::link('dashboard/message/'.$inbox->from_user.'/'.$inbox->id.'/reply','Reply',array('class'=>'','style'=>'margin-left:26px;'))}} /
   {{ HTML::link('dashboard/message/'.$inbox->id.'/delete','Delete',array('class'=>'','style'=>'margin-top:;'))}}
  </div> 
 
  <hr class="userchathr" />
    @endforeach
    
    
</div>

<hr class="hrheight hrpadding" />

</div>
</div>
</div>
@stop