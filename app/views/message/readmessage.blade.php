@extends('layouts.login')
@section('content')

<div id="wrapper">
<div id="content">

<div class="messageswidth">

<div class="comingmessages">  

<h3>Message</h3>
</div>

<div class="createnewbtn">
 

{{ HTML::link('dashboard/messages','Return to Inbox',array('class'=>'editbtn'))}}
</div>

</div>

<hr class="userchathr" />


<div class="">
<div class="userchatinbox">

@foreach($inboxs as $inbox)

<div class="">
  {{ HTML::link('dashboard/message/'.$inbox->from_user.'/'.$inbox->id.'/reply','Reply',array('class'=>'editbtn msgreadbtna'))}}
   {{ HTML::link('dashboard/message/'.$inbox->id.'/delete','Delete',array('class'=>'editbtn msgreadbtn'))}}
  </div> 

<hr class="hrpad" />



<div class="readmsgheight">
    
    <p>{{$inbox->body}}</p>
     </div> 
  
  
 
  
    @endforeach
    
    
</div>

<hr class="userchathr" />

</div>

</div>
</div>


@stop