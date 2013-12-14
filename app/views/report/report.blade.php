@extends('layouts.login')
@section('content')
<div id="wrapper">
 <div id="content">
 
 {{  Session::get('errors') }}
 
 <div id="report">
 	<h2>Your performance in 30 days <span>(14 Oct, 2013 to 12 Nov, 2013)</span></h2>
    
    <div class="reportview">
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
     </div>
 	
	<div class="reportview">
 	<h3>Traffic Report <span> (14 Oct, 2013 to 12 Nov, 2013)</span></h3>

 	<canvas id="daily-reports" width="600" height="300"></canvas>
    </div>
    
    <div class="reportview">

 	<h4 class="span-1">Traffic by Location</h4>
 	<p class="box">Sorry, no data received within your selected date range.</p>

	</div>
    
    <div class="reportview">
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
    </div>
    
    <div class="reportview">

 	<h4 class="span-1">Leads by Location</h4>
 	<p class="box">Sorry, no data received within your selected date range.</p>
    </div>
    
    <div class="reportview">
    
 	<h4>Phone Views by Country</h4>
 	<p class="box">Sorry, no data received within your selected date range.</p>
	</div>
    
    <div class="reportview">
 	<h4>Email Leads by Country</h4>
 	<p class="box">Sorry, no data received within your selected date range.</p>
	</div>
{{ Form::open(array('url' => 'report')) }}
</div>
</div>
{{ Form::close() }}
</div>
</div>

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

