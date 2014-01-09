@extends('layouts.login')
@section('content') 
 
<div id="wrapper">
<div id="content">

<div id="form-wrapper" style="width:100%;">
<h1>My Profile</h1>
@foreach ($records as $record )
<div class="profileview">
<div class="companylogo">
<h3>Company Logo</h3>
<h4>{{  $record->name }}</h4>
<h5> Company Name</h5>
<h5> {{  $record->address }}<br>{{  $record->zip }}<br>{{  $record->country }}</h5>
</div>

<img src="//styles.anu.edu.au/_anu/4/images/placeholders/person.png" alt="no photo available" class="" width="150" height="150" />

</div>

<div class="profilecontact">

<div class="companycontact">
<h3>Office Phone</h3>

</div>
</div>

@endforeach
</div>

</div>
</div>

@stop