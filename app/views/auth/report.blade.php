@extends('layouts.main')
@section('content')
</div>
<div id="search">

   </div> 
</div>
 {{  Session::get('errors') }}
 <div id="wrapper" class="clearfix">
 <div id="report">
 	<h2>Your performance in 30 days <span>(14 Oct, 2013 to 12 Nov, 2013)</span></h2>
 	<h3>Current Number of Listings</h3>
 	<ul class="list">
 		<li>For Sale</li>
 		<li>To Rent</li>
 		<li>Total</li>
 	</ul>

 	<ul class="list">
 		<li>0</li>
 		<li>0</li>
 		<li>0</li>
 	</ul>
  
 	<p class="span-1">Number of Listings by Location</p>
 	

 	<h3>Traffic Report <span> (14 Oct, 2013 to 12 Nov, 2013)</span></h3>


 	<ul class="list">
 		<li>Property Views</li>
 		<li>Property Visits</li>
 	</ul>

 	<ul class="list">
 		<li>0</li>
 		<li>0</li>
 	</ul>

 	<h4 class="span-1">Trafic by Location</h4>
 	<p class="box">Sorry, no data received within your selected date range.</p>


 	<h3 >Leads Report<span> (14 Oct, 2013 to 12 Nov, 2013)</span></h3>

 	<ul class="list">
 		<li>Phone Views</li>
 		<li>Email Leads</li>
 		<li>Total Leads</li>
 	</ul>

 	<ul class="list">
 		<li>0</li>
 		<li>0</li>
 		<li>0</li>
 	</ul>

 	<h4 class="span-1">Leads by Location</h4>
 	<p class="box">Sorry, no data received within your selected date range.</p>
    
 	<h4>Phone Views by Country</h4>
 	<p class="box">Sorry, no data received within your selected date range.</p>

 	<h4>Email Leads by Country</h4>
 	<p class="box">Sorry, no data received within your selected date range.</p>

{{ Form::open(array('url' => 'report')) }}
</div>
</div>
{{ Form::close() }}

@stop