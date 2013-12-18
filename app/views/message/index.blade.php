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

 
{{ HTML::link('dashboard/message/compose','Create new',array('class'=>'btn btn-success pull-right'))}}

</div>

<hr class="hrheight" />

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
</div>
@stop