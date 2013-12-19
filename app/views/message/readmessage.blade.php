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

 
{{ HTML::link('dashboard/messages','Return to Inbox',array('class'=>'btn btn-success pull-right'))}}

</div>

<hr class="hrheight" />


<div class="">
<div class="userchatinbox">

@foreach($inboxs as $inbox)

<div class="col-sm-12">
  {{ HTML::link('dashboard/message/'.$inbox->from_user.'/'.$inbox->id.'/reply','Reply',array('class'=>'pull-right padding-bottom15'))}}
   {{ HTML::link('dashboard/message/'.$inbox->id.'/delete','Delete',array('class'=>'padding-bottom15'))}}
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
@stop