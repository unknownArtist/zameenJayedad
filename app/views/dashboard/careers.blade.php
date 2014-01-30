@extends('layouts.main')
@section('content')

<div id="wrapper">
    <div id="content">
    <div id="form-wrapper" style="width:100%;">
<h1>Careers</h1>

<div class="bahriaupdate" style="width:80%; margin:0 auto;">

<img src="/assets/images/CareerOpportunity.png" style="float:right;">

<h4>Zameen Jayedad is looking for talent</h4>
<h5>See what jobs are available at Zameen Jayedad Head Office<br>in Phase 7 Mini Commercial Bahria Town Islamabad</h5>

<h3>Job Opportunities:</h3>
@foreach($latestnews as $latestnews)
	 {{$latestnews->jobsname}}<br/>
     {{$latestnews->jobsname1}}<br/>
     {{$latestnews->jobsname2}}<br/>
     {{$latestnews->jobsname3}}<br/>
     {{$latestnews->jobsname4}}<br/>
     {{$latestnews->jobsname5}}<br/>
     {{$latestnews->jobsname6}}<br/>
     {{$latestnews->jobsname7}}<br/>
     {{$latestnews->jobsname8}}<br/>
     {{$latestnews->jobsname9}}<br/>
     {{$latestnews->jobsname10}}<br/>
    @endforeach


<p>Send your resume at <span>'contact@zameenjayedad.com.pk'</span></p>   

</div>  
    
    </div>
    </div>
    </div>

@stop