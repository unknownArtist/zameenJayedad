@extends('layouts.login')
@section('content')

<div id="wrapper">
    <div id="content">
    <div id="form-wrapper" style="width:100%;">
<h1> All Users </h1>

<div class="bahriaupdate2">

<div class="recordshow">
                 
        <ul>
         
            @foreach($record as $records)
            <li>
           
            {{Form::image('uploads/photos/'.$records->photo, '', array('class'=>'imagewidth', 'style'=>'width:200px; height:150px;'));}}
             
                <a href="{{URL::to('dashboard/alluser/'.$records->id)}}"> <h2> {{$records->name}}</h2></a><br />

               <h4> {{$records->getEmail($records->user_id)}}</h4><br />
                 <hr style="clear:both;">
                
             </li>
            
             &nbsp;
             @endforeach
              
        </ul>
        
    </div>

</div>  
    
    </div>
    </div>
    </div>

@stop