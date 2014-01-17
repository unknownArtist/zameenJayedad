@extends('layouts.login')
@section('content') 
 
<div id="wrapper">
<div id="content">

<div id="form-wrapper" style="width:100%;">
<h1>My Profile</h1>

<div style="width:90%; margin:0 auto;">
@foreach ($records as $record )
<div class="profileview">
<div class="companylogo">
<!-- <h3>Company Logo</h3> -->
<h4>{{  $record->name }}</h4>
<h5>{{$record->getImage($record->user_id) }}</h5>
<h5> {{  $record->address }}<br>{{  $record->zip }}<br>{{  $record->country }}</h5>
</div>
{{Form::image('uploads/photos/'.$record->photo,'',array('style'=>'width:150px; height:150px;'))}}
<!-- <img src="//styles.anu.edu.au/_anu/4/images/placeholders/person.png" alt="no photo available" class="" width="150" height="150" /> -->

</div>

<div class="profilecontact">

<div class="companycontact">
<h3>Office Phone</h3>
<h5>Main:<span>111-222-3333</span></h5>
<h5>Fax:&nbsp;&nbsp;&nbsp;<span>111-222-3333</span></h5>

<h3>Personal Phone</h3>
<h5>Direct:&nbsp;<span>{{ $record->phone }}</span></h5>
<h5>Mobile:<span>{{ $record->cell }}</span></h5>
<h5>Fax:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>{{ $record->fax }}</span></h5>

<h3>Email</h3>
  @foreach ($users as $user )
<h5>{{ $user->email }} </h5>
@endforeach

</div>
</div>

@endforeach
</div>
</div>

</div>
</div>

@stop