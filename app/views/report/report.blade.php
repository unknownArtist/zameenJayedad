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
 	<ul class="list-1">
 		<li>For Sale: {{ $forSale }} </li>
 		
 		<li>To Rent: {{ $forRent }}</li>
 		<li>Total: {{ $total }} </li>
 	</ul>

 	<ul class="list-1">
 		<li>0</li>
 		<li>0</li>
 		<li>0</li>
 	</ul>
  
 	<p class="span-1">Number of Listings by Location</p>
 	

 	<h3>Traffic Report <span> (14 Oct, 2013 to 12 Nov, 2013)</span></h3>

 	<canvas id="daily-reports" width="600" height="300"></canvas>

 	<h4 class="span-1">Trafic by Location</h4>
 	<p class="box">Sorry, no data received within your selected date range.</p>


 	<h3 >Leads Report<span> (14 Oct, 2013 to 12 Nov, 2013)</span></h3>

 	<ul class="list-1">
 		<li>Phone Views</li>
 		<li>Email Leads</li>
 		<li>Total Leads</li>
 	</ul>

 	<ul class="list-1">
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

<script>
(function(){
	var ctx = document.getElementById('daily-reports').getContext('2d');

	var chart = {

		labels: <?php echo json_encode($date) ?>,
		datasets:[{
			data: <?php echo $totalHits ?>,
			strokeColor : "rgba(151,187,205,1)",
		}],


	};
	new Chart(ctx).Line(chart);
})();
	
</script>

@stop

