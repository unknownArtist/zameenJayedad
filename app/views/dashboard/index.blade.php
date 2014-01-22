@extends('layouts.login')
@section('content')
	<p class="erorclas" style="position:relative; top:166px; right:163px;">{{ Session::get('error') }}</p>
    <!--search ends-->
    <div id="wrapper">
    <div id="content">
       
       <div class="slider">
         <div id="sliderFrame">
        <div id="slider">
            <a href="{{URL::to('dashboard/featuredlisting')}}">
                <img src="assets/images/slide-1.png" alt="Welcome to Zameen Jayedad" />
            </a>

            <a href="{{URL::to('dashboard/featuredlisting')}}">
                <img src="assets/images/slide-2.png" alt="Market Your Property with Zameen Jayedad Team" />
            </a>
            
             <a href="{{URL::to('dashboard/featuredlisting')}}">
                <img src="assets/images/slide-3.png" alt="Market Your Property with Zameen Jayedad Team" />
            </a>
             <a href="{{URL::to('dashboard/featuredlisting')}}">
                <img src="assets/images/slide-4.png" alt="Market Your Property with Zameen Jayedad Team" />
            </a>

            <a href="{{URL::to('dashboard/featuredlisting')}}">
                <img src="assets/images/slide-5.png" alt="" />
            </a>
            
             <a href="{{URL::to('dashboard/featuredlisting')}}">
                <img src="assets/images/slide-6.png" alt="Market Your Property with Zameen Jayedad Team" />
            </a>
             <a href="{{URL::to('dashboard/featuredlisting')}}">
                <img src="assets/images/slide-7.png" alt="Market Your Property with Zameen Jayedad Team" />
            </a>

            <a href="{{URL::to('dashboard/featuredlisting')}}">
                <img src="assets/images/slide-8.png" alt="Market Your Property with Zameen Jayedad Team" />
            </a>
            
             
        </div>
    </div>
       


       </div>     
		   
		
        <div class="list">
       	<h1>Listings</h1>
       	<h3>Rawalpindi / Islamabad</h3>
        <div class="image-row">
                
			<div class="image-set">
       	<ul class="l1">
           @foreach($users as $user)
       		<!-- <li><a href="dashboard/listing/{{$user->id}}">{{$user->property_type}} {{$user->city}} </a></li>-->
       		  @endforeach
              
             
           <li>	<a href="{{URL::to('dashboard/BahriatownPhase1')}}">Bahria town Phase 1</a></li>
                
             
                <li>  <a href="{{URL::to('dashboard/BahriatownPhase2')}}">Bahria town Phase 2</a></li>
                <li>  <a href="{{URL::to('dashboard/BahriatownPhase3')}}">Bahria town Phase 3</a></li>
                 <li>  <a href="{{URL::to('dashboard/BahriatownPhase4')}}">Bahria town Phase 4</a></li>
                  <li>  <a href="{{URL::to('dashboard/BahriatownPhase5')}}">Bahria town Phase 5</a></li>
                   <li>  <a href="{{URL::to('dashboard/BahriatownPhase6')}}">Bahria town Phase 6</a></li>

              <li>  <a href="{{URL::to('dashboard/BahriatownPhase7')}}">Bahria town Phase 7</a></li>
                   
       	</ul>   
        
        <ul class="l2">
           @foreach($users as $user)
       		<!-- <li><a href="dashboard/listing/{{$user->id}}">{{$user->property_type}} {{$user->city}} </a></li>-->
       		  @endforeach
              
             
               <li class="sectorshow"><a>Bahria Town Phase 8 (Sectors)</a>
                <ul class="sectors">
                
                <li><a class="example-image-link" href="/assets/images/Phase_8_Sector_A.jpg" data-lightbox="example-set" title="Bahria Town, offer a totally unique chance to own an impressive luxurious residence at a few 
minutes' drive from GT Road Rawalpindi and located besides DHA Phase III. Bahria Homes
are available in two different sizes of 5 and 8 Marla to suit the requirements of both small and 
large families. They are especially designed on grid frame structure which makes them seismic
proof. The villa is lavishly furnished with ceramic tiles, imported fixtures and fitted kitchen with 
designer cabinetry. Add to this, the Villa is fully air conditioned for your convenience.....

Bahria Home, '8 Marla double story Price 1 crore 20 Lakh' and '5 Marla single story Price 60 Lakh'">Sector-A</a></li>
               
                <li><a class="example-image-link" href="/assets/images/Phase_8_Sector_B.jpg" data-lightbox="example-set" title="Bahria Town, offer a totally unique chance to own an impressive luxurious residence at a few 
minutes' drive from GT Road Rawalpindi and located besides DHA Phase III. Bahria Homes
are available in two different sizes of 5 and 8 Marla to suit the requirements of both small and 
large families. They are especially designed on grid frame structure which makes them seismic
proof. The villa is lavishly furnished with ceramic tiles, imported fixtures and fitted kitchen with 
designer cabinetry. Add to this, the Villa is fully air conditioned for your convenience.....

Bahria Home, '8 Marla double story Price 1 crore 20 Lakh' and '5 Marla single story Price 60 Lakh'">Sector-B</a></li>
                <li><a class="example-image-link" href="/assets/images/Phase_8_Sector_C.jpg" data-lightbox="example-set" title="Bahria Town, offer a totally unique chance to own an impressive luxurious residence at a few 
minutes' drive from GT Road Rawalpindi and located besides DHA Phase III. Bahria Homes
are available in two different sizes of 5 and 8 Marla to suit the requirements of both small and 
large families. They are especially designed on grid frame structure which makes them seismic
proof. The villa is lavishly furnished with ceramic tiles, imported fixtures and fitted kitchen with 
designer cabinetry. Add to this, the Villa is fully air conditioned for your convenience.....

Bahria Home, '8 Marla double story Price 1 crore 20 Lakh' and '5 Marla single story Price 60 Lakh'">Sector-C</a></li>
                 <li><a class="example-image-link" href="/assets/images/Phase_8_Sector_D.jpg" data-lightbox="example-set" title="Bahria Town, offer a totally unique chance to own an impressive luxurious residence at a few 
minutes' drive from GT Road Rawalpindi and located besides DHA Phase III. Bahria Homes
are available in two different sizes of 5 and 8 Marla to suit the requirements of both small and 
large families. They are especially designed on grid frame structure which makes them seismic
proof. The villa is lavishly furnished with ceramic tiles, imported fixtures and fitted kitchen with 
designer cabinetry. Add to this, the Villa is fully air conditioned for your convenience.....

Bahria Home, '8 Marla double story Price 1 crore 20 Lakh' and '5 Marla single story Price 60 Lakh'">Sector-D</a></li>
                  <li><a class="example-image-link" href="/assets/images/Phase_8_Sector_E.jpg" data-lightbox="example-set" title="Bahria Town, offer a totally unique chance to own an impressive luxurious residence at a few 
minutes' drive from GT Road Rawalpindi and located besides DHA Phase III. Bahria Homes
are available in two different sizes of 5 and 8 Marla to suit the requirements of both small and 
large families. They are especially designed on grid frame structure which makes them seismic
proof. The villa is lavishly furnished with ceramic tiles, imported fixtures and fitted kitchen with 
designer cabinetry. Add to this, the Villa is fully air conditioned for your convenience.....

Bahria Home, '8 Marla double story Price 1 crore 20 Lakh' and '5 Marla single story Price 60 Lakh'">Sector-E</a></li>
                   <li><a class="example-image-link" href="/assets/images/Phase_8_Sector_F.jpg" data-lightbox="example-set" title="Bahria Town, offer a totally unique chance to own an impressive luxurious residence at a few 
minutes' drive from GT Road Rawalpindi and located besides DHA Phase III. Bahria Homes
are available in two different sizes of 5 and 8 Marla to suit the requirements of both small and 
large families. They are especially designed on grid frame structure which makes them seismic
proof. The villa is lavishly furnished with ceramic tiles, imported fixtures and fitted kitchen with 
designer cabinetry. Add to this, the Villa is fully air conditioned for your convenience.....

Bahria Home, '8 Marla double story Price 1 crore 20 Lakh' and '5 Marla single story Price 60 Lakh'">Sector-F</a></li>
                   <li> <a class="example-image-link" href="/assets/images/Phase_8_Sector_G.jpg" data-lightbox="example-set" title="Bahria Town, offer a totally unique chance to own an impressive luxurious residence at a few 
minutes' drive from GT Road Rawalpindi and located besides DHA Phase III. Bahria Homes
are available in two different sizes of 5 and 8 Marla to suit the requirements of both small and 
large families. They are especially designed on grid frame structure which makes them seismic
proof. The villa is lavishly furnished with ceramic tiles, imported fixtures and fitted kitchen with 
designer cabinetry. Add to this, the Villa is fully air conditioned for your convenience.....

Bahria Home, '8 Marla double story Price 1 crore 20 Lakh' and '5 Marla single story Price 60 Lakh'">Sector-G</a></li>
                   <li> <a class="example-image-link" href="/assets/images/Phase_8_Sector_H.jpg" data-lightbox="example-set" title="Bahria Town, offer a totally unique chance to own an impressive luxurious residence at a few 
minutes' drive from GT Road Rawalpindi and located besides DHA Phase III. Bahria Homes
are available in two different sizes of 5 and 8 Marla to suit the requirements of both small and 
large families. They are especially designed on grid frame structure which makes them seismic
proof. The villa is lavishly furnished with ceramic tiles, imported fixtures and fitted kitchen with 
designer cabinetry. Add to this, the Villa is fully air conditioned for your convenience.....

Bahria Home, '8 Marla double story Price 1 crore 20 Lakh' and '5 Marla single story Price 60 Lakh'">Sector-H</a></li>
                  <li> <a class="example-image-link" href="/assets/images/Phase_8_Sector_I.jpg" data-lightbox="example-set" title="Bahria Town, offer a totally unique chance to own an impressive luxurious residence at a few 
minutes' drive from GT Road Rawalpindi and located besides DHA Phase III. Bahria Homes
are available in two different sizes of 5 and 8 Marla to suit the requirements of both small and 
large families. They are especially designed on grid frame structure which makes them seismic
proof. The villa is lavishly furnished with ceramic tiles, imported fixtures and fitted kitchen with 
designer cabinetry. Add to this, the Villa is fully air conditioned for your convenience.....

Bahria Home, '8 Marla double story Price 1 crore 20 Lakh' and '5 Marla single story Price 60 Lakh'">Sector-I</a></li>
                   <li> <a class="example-image-link" href="/assets/images/Phase_8_Sector_J.jpg" data-lightbox="example-set" title="Bahria Town, offer a totally unique chance to own an impressive luxurious residence at a few 
minutes' drive from GT Road Rawalpindi and located besides DHA Phase III. Bahria Homes
are available in two different sizes of 5 and 8 Marla to suit the requirements of both small and 
large families. They are especially designed on grid frame structure which makes them seismic
proof. The villa is lavishly furnished with ceramic tiles, imported fixtures and fitted kitchen with 
designer cabinetry. Add to this, the Villa is fully air conditioned for your convenience.....

Bahria Home, '8 Marla double story Price 1 crore 20 Lakh' and '5 Marla single story Price 60 Lakh'">Sector-J</a></li>
                   <li> <a class="example-image-link" href="/assets/images/Phase_8_Sector_K.jpg" data-lightbox="example-set" title="Bahria Town, offer a totally unique chance to own an impressive luxurious residence at a few 
minutes' drive from GT Road Rawalpindi and located besides DHA Phase III. Bahria Homes
are available in two different sizes of 5 and 8 Marla to suit the requirements of both small and 
large families. They are especially designed on grid frame structure which makes them seismic
proof. The villa is lavishly furnished with ceramic tiles, imported fixtures and fitted kitchen with 
designer cabinetry. Add to this, the Villa is fully air conditioned for your convenience.....

Bahria Home, '8 Marla double story Price 1 crore 20 Lakh' and '5 Marla single story Price 60 Lakh'">Sector-K</a></li>
                   <li> <a class="example-image-link" href="/assets/images/Phase_8_Sector_L.jpg" data-lightbox="example-set" title="Bahria Town, offer a totally unique chance to own an impressive luxurious residence at a few 
minutes' drive from GT Road Rawalpindi and located besides DHA Phase III. Bahria Homes
are available in two different sizes of 5 and 8 Marla to suit the requirements of both small and 
large families. They are especially designed on grid frame structure which makes them seismic
proof. The villa is lavishly furnished with ceramic tiles, imported fixtures and fitted kitchen with 
designer cabinetry. Add to this, the Villa is fully air conditioned for your convenience.....

Bahria Home, '8 Marla double story Price 1 crore 20 Lakh' and '5 Marla single story Price 60 Lakh'">Sector-L</a></li>
                   <li> <a class="example-image-link" href="/assets/images/Phase_8_Sector_M.jpg" data-lightbox="example-set" title="Bahria Town, offer a totally unique chance to own an impressive luxurious residence at a few 
minutes' drive from GT Road Rawalpindi and located besides DHA Phase III. Bahria Homes
are available in two different sizes of 5 and 8 Marla to suit the requirements of both small and 
large families. They are especially designed on grid frame structure which makes them seismic
proof. The villa is lavishly furnished with ceramic tiles, imported fixtures and fitted kitchen with 
designer cabinetry. Add to this, the Villa is fully air conditioned for your convenience.....

Bahria Home, '8 Marla double story Price 1 crore 20 Lakh' and '5 Marla single story Price 60 Lakh'">Sector-M</a></li>
                   <li> <a class="example-image-link" href="/assets/images/Phase_8_Sector_N.jpg" data-lightbox="example-set" title="Bahria Town, offer a totally unique chance to own an impressive luxurious residence at a few 
minutes' drive from GT Road Rawalpindi and located besides DHA Phase III. Bahria Homes
are available in two different sizes of 5 and 8 Marla to suit the requirements of both small and 
large families. They are especially designed on grid frame structure which makes them seismic
proof. The villa is lavishly furnished with ceramic tiles, imported fixtures and fitted kitchen with 
designer cabinetry. Add to this, the Villa is fully air conditioned for your convenience.....

Bahria Home, '8 Marla double story Price 1 crore 20 Lakh' and '5 Marla single story Price 60 Lakh'">Sector-N</a></li>
                   <li> <a class="example-image-link" href="/assets/images/Phase_8_Sector_P.jpg" data-lightbox="example-set" title="Bahria Town, offer a totally unique chance to own an impressive luxurious residence at a few 
minutes' drive from GT Road Rawalpindi and located besides DHA Phase III. Bahria Homes
are available in two different sizes of 5 and 8 Marla to suit the requirements of both small and 
large families. They are especially designed on grid frame structure which makes them seismic
proof. The villa is lavishly furnished with ceramic tiles, imported fixtures and fitted kitchen with 
designer cabinetry. Add to this, the Villa is fully air conditioned for your convenience.....

Bahria Home, '8 Marla double story Price 1 crore 20 Lakh' and '5 Marla single story Price 60 Lakh'">Sector-P</a></li>
                   </ul>
                    </li>
                    
                    <li class="sectorshow"><a>Bahria Town Phase 8 (Blocks)</a>
                <ul class="sectors">
                
                <li><a class="example-image-link" href="/assets/images/Phase_8_Sector_A.jpg" data-lightbox="example-set" title="Bahria Town, offer a totally unique chance to own an impressive luxurious residence at a few 
minutes' drive from GT Road Rawalpindi and located besides DHA Phase III. Bahria Homes
are available in two different sizes of 5 and 8 Marla to suit the requirements of both small and 
large families. They are especially designed on grid frame structure which makes them seismic
proof. The villa is lavishly furnished with ceramic tiles, imported fixtures and fitted kitchen with 
designer cabinetry. Add to this, the Villa is fully air conditioned for your convenience.....

Bahria Home, '8 Marla double story Price 1 crore 20 Lakh' and '5 Marla single story Price 60 Lakh'">Block-A</a></li>
               
                <li><a class="example-image-link" href="/assets/images/Phase_8_Sector_B.jpg" data-lightbox="example-set" title="Bahria Town, offer a totally unique chance to own an impressive luxurious residence at a few 
minutes' drive from GT Road Rawalpindi and located besides DHA Phase III. Bahria Homes
are available in two different sizes of 5 and 8 Marla to suit the requirements of both small and 
large families. They are especially designed on grid frame structure which makes them seismic
proof. The villa is lavishly furnished with ceramic tiles, imported fixtures and fitted kitchen with 
designer cabinetry. Add to this, the Villa is fully air conditioned for your convenience.....

Bahria Home, '8 Marla double story Price 1 crore 20 Lakh' and '5 Marla single story Price 60 Lakh'">Block-B</a></li>
                <li><a class="example-image-link" href="/assets/images/Phase_8_Sector_C.jpg" data-lightbox="example-set" title="Bahria Town, offer a totally unique chance to own an impressive luxurious residence at a few 
minutes' drive from GT Road Rawalpindi and located besides DHA Phase III. Bahria Homes
are available in two different sizes of 5 and 8 Marla to suit the requirements of both small and 
large families. They are especially designed on grid frame structure which makes them seismic
proof. The villa is lavishly furnished with ceramic tiles, imported fixtures and fitted kitchen with 
designer cabinetry. Add to this, the Villa is fully air conditioned for your convenience.....

Bahria Home, '8 Marla double story Price 1 crore 20 Lakh' and '5 Marla single story Price 60 Lakh'">Block-C</a></li>
                 <li><a class="example-image-link" href="/assets/images/Phase_8_Sector_D.jpg" data-lightbox="example-set" title="Bahria Town, offer a totally unique chance to own an impressive luxurious residence at a few 
minutes' drive from GT Road Rawalpindi and located besides DHA Phase III. Bahria Homes
are available in two different sizes of 5 and 8 Marla to suit the requirements of both small and 
large families. They are especially designed on grid frame structure which makes them seismic
proof. The villa is lavishly furnished with ceramic tiles, imported fixtures and fitted kitchen with 
designer cabinetry. Add to this, the Villa is fully air conditioned for your convenience.....

Bahria Home, '8 Marla double story Price 1 crore 20 Lakh' and '5 Marla single story Price 60 Lakh'">Block-D</a></li>
                  <li><a class="example-image-link" href="/assets/images/Phase_8_Sector_E.jpg" data-lightbox="example-set" title="Bahria Town, offer a totally unique chance to own an impressive luxurious residence at a few 
minutes' drive from GT Road Rawalpindi and located besides DHA Phase III. Bahria Homes
are available in two different sizes of 5 and 8 Marla to suit the requirements of both small and 
large families. They are especially designed on grid frame structure which makes them seismic
proof. The villa is lavishly furnished with ceramic tiles, imported fixtures and fitted kitchen with 
designer cabinetry. Add to this, the Villa is fully air conditioned for your convenience.....

Bahria Home, '8 Marla double story Price 1 crore 20 Lakh' and '5 Marla single story Price 60 Lakh'">Block-E</a></li>
                   <li><a class="example-image-link" href="/assets/images/Phase_8_Sector_F.jpg" data-lightbox="example-set" title="Bahria Town, offer a totally unique chance to own an impressive luxurious residence at a few 
minutes' drive from GT Road Rawalpindi and located besides DHA Phase III. Bahria Homes
are available in two different sizes of 5 and 8 Marla to suit the requirements of both small and 
large families. They are especially designed on grid frame structure which makes them seismic
proof. The villa is lavishly furnished with ceramic tiles, imported fixtures and fitted kitchen with 
designer cabinetry. Add to this, the Villa is fully air conditioned for your convenience.....

Bahria Home, '8 Marla double story Price 1 crore 20 Lakh' and '5 Marla single story Price 60 Lakh'">Block-F</a></li>
                   <li> <a class="example-image-link" href="/assets/images/Phase_8_Sector_G.jpg" data-lightbox="example-set" title="Bahria Town, offer a totally unique chance to own an impressive luxurious residence at a few 
minutes' drive from GT Road Rawalpindi and located besides DHA Phase III. Bahria Homes
are available in two different sizes of 5 and 8 Marla to suit the requirements of both small and 
large families. They are especially designed on grid frame structure which makes them seismic
proof. The villa is lavishly furnished with ceramic tiles, imported fixtures and fitted kitchen with 
designer cabinetry. Add to this, the Villa is fully air conditioned for your convenience.....

Bahria Home, '8 Marla double story Price 1 crore 20 Lakh' and '5 Marla single story Price 60 Lakh'">Block-G</a></li>
                   <li> <a class="example-image-link" href="/assets/images/Phase_8_Sector_H.jpg" data-lightbox="example-set" title="Bahria Town, offer a totally unique chance to own an impressive luxurious residence at a few 
minutes' drive from GT Road Rawalpindi and located besides DHA Phase III. Bahria Homes
are available in two different sizes of 5 and 8 Marla to suit the requirements of both small and 
large families. They are especially designed on grid frame structure which makes them seismic
proof. The villa is lavishly furnished with ceramic tiles, imported fixtures and fitted kitchen with 
designer cabinetry. Add to this, the Villa is fully air conditioned for your convenience.....

Bahria Home, '8 Marla double story Price 1 crore 20 Lakh' and '5 Marla single story Price 60 Lakh'">Block-H</a></li>
                  <li> <a class="example-image-link" href="/assets/images/Phase_8_Sector_I.jpg" data-lightbox="example-set" title="Bahria Town, offer a totally unique chance to own an impressive luxurious residence at a few 
minutes' drive from GT Road Rawalpindi and located besides DHA Phase III. Bahria Homes
are available in two different sizes of 5 and 8 Marla to suit the requirements of both small and 
large families. They are especially designed on grid frame structure which makes them seismic
proof. The villa is lavishly furnished with ceramic tiles, imported fixtures and fitted kitchen with 
designer cabinetry. Add to this, the Villa is fully air conditioned for your convenience.....

Bahria Home, '8 Marla double story Price 1 crore 20 Lakh' and '5 Marla single story Price 60 Lakh'">Block-I</a></li>
                   <li> <a class="example-image-link" href="/assets/images/Phase_8_Sector_J.jpg" data-lightbox="example-set" title="Bahria Town, offer a totally unique chance to own an impressive luxurious residence at a few 
minutes' drive from GT Road Rawalpindi and located besides DHA Phase III. Bahria Homes
are available in two different sizes of 5 and 8 Marla to suit the requirements of both small and 
large families. They are especially designed on grid frame structure which makes them seismic
proof. The villa is lavishly furnished with ceramic tiles, imported fixtures and fitted kitchen with 
designer cabinetry. Add to this, the Villa is fully air conditioned for your convenience.....

Bahria Home, '8 Marla double story Price 1 crore 20 Lakh' and '5 Marla single story Price 60 Lakh'">Block-J</a></li>
                   <li> <a class="example-image-link" href="/assets/images/Phase_8_Sector_K.jpg" data-lightbox="example-set" title="Bahria Town, offer a totally unique chance to own an impressive luxurious residence at a few 
minutes' drive from GT Road Rawalpindi and located besides DHA Phase III. Bahria Homes
are available in two different sizes of 5 and 8 Marla to suit the requirements of both small and 
large families. They are especially designed on grid frame structure which makes them seismic
proof. The villa is lavishly furnished with ceramic tiles, imported fixtures and fitted kitchen with 
designer cabinetry. Add to this, the Villa is fully air conditioned for your convenience.....

Bahria Home, '8 Marla double story Price 1 crore 20 Lakh' and '5 Marla single story Price 60 Lakh'">Block-K</a></li>
                   <li> <a class="example-image-link" href="/assets/images/Phase_8_Sector_L.jpg" data-lightbox="example-set" title="Bahria Town, offer a totally unique chance to own an impressive luxurious residence at a few 
minutes' drive from GT Road Rawalpindi and located besides DHA Phase III. Bahria Homes
are available in two different sizes of 5 and 8 Marla to suit the requirements of both small and 
large families. They are especially designed on grid frame structure which makes them seismic
proof. The villa is lavishly furnished with ceramic tiles, imported fixtures and fitted kitchen with 
designer cabinetry. Add to this, the Villa is fully air conditioned for your convenience.....

Bahria Home, '8 Marla double story Price 1 crore 20 Lakh' and '5 Marla single story Price 60 Lakh'">Block-L</a></li>
                   <li> <a class="example-image-link" href="/assets/images/Phase_8_Sector_M.jpg" data-lightbox="example-set" title="Bahria Town, offer a totally unique chance to own an impressive luxurious residence at a few 
minutes' drive from GT Road Rawalpindi and located besides DHA Phase III. Bahria Homes
are available in two different sizes of 5 and 8 Marla to suit the requirements of both small and 
large families. They are especially designed on grid frame structure which makes them seismic
proof. The villa is lavishly furnished with ceramic tiles, imported fixtures and fitted kitchen with 
designer cabinetry. Add to this, the Villa is fully air conditioned for your convenience.....

Bahria Home, '8 Marla double story Price 1 crore 20 Lakh' and '5 Marla single story Price 60 Lakh'">Block-M</a></li>
                   <li> <a class="example-image-link" href="/assets/images/Phase_8_Sector_N.jpg" data-lightbox="example-set" title="Bahria Town, offer a totally unique chance to own an impressive luxurious residence at a few 
minutes' drive from GT Road Rawalpindi and located besides DHA Phase III. Bahria Homes
are available in two different sizes of 5 and 8 Marla to suit the requirements of both small and 
large families. They are especially designed on grid frame structure which makes them seismic
proof. The villa is lavishly furnished with ceramic tiles, imported fixtures and fitted kitchen with 
designer cabinetry. Add to this, the Villa is fully air conditioned for your convenience.....

Bahria Home, '8 Marla double story Price 1 crore 20 Lakh' and '5 Marla single story Price 60 Lakh'">Block-N</a></li>
<li> <a class="example-image-link" href="/assets/images/Phase_8_Sector_P.jpg" data-lightbox="example-set" title="Bahria Town, offer a totally unique chance to own an impressive luxurious residence at a few 
minutes' drive from GT Road Rawalpindi and located besides DHA Phase III. Bahria Homes
are available in two different sizes of 5 and 8 Marla to suit the requirements of both small and 
large families. They are especially designed on grid frame structure which makes them seismic
proof. The villa is lavishly furnished with ceramic tiles, imported fixtures and fitted kitchen with 
designer cabinetry. Add to this, the Villa is fully air conditioned for your convenience.....

Bahria Home, '8 Marla double story Price 1 crore 20 Lakh' and '5 Marla single story Price 60 Lakh'">Block-O</a></li>
                   <li> <a class="example-image-link" href="/assets/images/Phase_8_Sector_P.jpg" data-lightbox="example-set" title="Bahria Town, offer a totally unique chance to own an impressive luxurious residence at a few 
minutes' drive from GT Road Rawalpindi and located besides DHA Phase III. Bahria Homes
are available in two different sizes of 5 and 8 Marla to suit the requirements of both small and 
large families. They are especially designed on grid frame structure which makes them seismic
proof. The villa is lavishly furnished with ceramic tiles, imported fixtures and fitted kitchen with 
designer cabinetry. Add to this, the Villa is fully air conditioned for your convenience.....

Bahria Home, '8 Marla double story Price 1 crore 20 Lakh' and '5 Marla single story Price 60 Lakh'">Block-P</a></li>
                   </ul>
                    </li>
                    
                    <li class="sectorshow"> <a class="example-image-link" href="/assets/images/safari valley.jpg" data-lightbox="example-set" title="Bahria 8 Safari Valley">Phase 8 Safari Valley</a>
                    
                    <ul class="sectors" style="width:167px;">
                
                <li><a class="example-image-link" href="" data-lightbox="example-set" title="">Abu Bakr Block</a></li>
                 <li><a class="example-image-link" href="" data-lightbox="example-set" title="">Umer Farooq Block</a></li>
                  <li><a class="example-image-link" href="" data-lightbox="example-set" title="">Usman-e-Ghani Block</a></li>
                   <li><a class="example-image-link" href="" data-lightbox="example-set" title="">Ali Block</a></li>
                    </ul>
                    </li>
                    <li> <a class="example-image-link" href="" data-lightbox="example-set" title="">Rafi Block</a></li>
                    <li> <a class="example-image-link" href="" data-lightbox="example-set" title="">Khalid Block</a></li>
                    <li> <a class="example-image-link" href="/assets/images/Bahria_Overseas_Enclave_Islamabad.jpg" data-lightbox="example-set" title="Bahria Overseas Enclave Islamabad">Bahria Overseas Enclave Islamabad</a></li>
                     <li> <a class="example-image-link" href="" data-lightbox="example-set" title="">DHA 1</a></li>
                     <li> <a class="example-image-link" href="" data-lightbox="example-set" title="">DHA 2</a></li>
                
                <!--<li><a href="#">DHA 1</a></li>
                 <li><a href="#">DHA 2</a></li>-->
        
                 
                   
       	</ul>   
        </div>
        </div>  

       </div>  
       
       <div class="live">
        <h3>Just Listed <span> <em>Live</em> </span></h3>

        <div class="section">

        
            <!--<div class="post">
                <img class="img" src="assets/images/thumb.png" width="60px" height="47px">  
                <h5>4602 Windsor Street, Vancouver</h5>
                  <p>$1,398,000  - 2,485 sqft, 4 Beds, 3 Baths </p>
                  <p><span>10 min ago</span></p>
            </div>-->
            
                  
                  <div class="recordshow">
                  <div id="example">
    	<ul>        
            @foreach($users as $user)
    		<li>           
            {{Form::image('uploads/photos/'.$user->photo, '', array('class'=>'imagewidth'));}}
             <!-- <img src="/assets/images/thumb_2599676370.jpg " width="100px" height="78px"> -->
                 
                 <a href="{{URL::to('dashboard/listing/'.$user->id)}}"> <h2> {{$user->property_type}} in {{$user->city}}</h2></a>
                 <span> {{$user->budget}}RS</span><br />
               <!--  <p>{{$user->Description}} </p>-->
                 <span>{{$user->bedroom}} bedrooms | {{$user->bathroom}} bathrooms | {{$user-> l_area}}</span>
                 <hr style="clear:both;">
                
    		 </li>
            
             &nbsp;
             @endforeach
              
    	</ul>
    	</div>
    </div>

		

      </div><!--section ends-->
      </div><!--live-->

    <div class="sec-2">

                <h3>Video Tutorials</h3>
               

      <div class="eco">
				
         <!-- @foreach($users as $user)           
    <a href="{{URL::to('dashboard/listing/guest/'.$user->id)}}" title="{{$user->budget}}RS"> 
    {{HTML::image('uploads/photos/'.$user->photo, '', array('class'=>'imagewidthlist'));}}
    </a>             
             @endforeach  -->          
           
       
              
             <iframe frameborder="0" width="185" height="120" src="http://www.dailymotion.com/embed/video/x19zn0o" allowfullscreen></iframe>
             
             <iframe frameborder="0" width="480" height="270" src="http://www.dailymotion.com/embed/video/x19zvsf" allowfullscreen></iframe>
             
             <iframe frameborder="0" width="480" height="270" src="http://www.dailymotion.com/embed/video/x19zsxj" allowfullscreen></iframe>

    </div>

    
    
    </div><!--sec-2 ends-->
    
    </div>

  </div><!--content ends-->
  
  

@stop