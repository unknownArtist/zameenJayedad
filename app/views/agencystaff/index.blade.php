@extends('layouts.login')
@section('content')

<style>
th
{
	background:#50b1a8;
	color:#f6f6f6;
}

td
{
	text-align:center;
	color:#50b1a8;
	font-size:15px;
	border-bottom:1px solid #50b1a8;
}
tr:nth-child(even) {
    background-color: #f0f0f0;
}


</style>

<script type="text/javascript">
$(document).ready(function()
{
  $("tr:even").css("background-color", "#f0f0f0;");
});

</script>
<div id="wrapper">
<div id="content">

<div id="">

<div class="agencynew">
<a href="{{URL::to('dashboard/agencies/view/addnewuser')}}">Add New</a>
</div>

    <h2 style="color:#50b1a8;">Total Users&nbsp;({{$total}}) </h2>
    
<table width="100%" cellpadding="10" cellspacing="0" border="0" class="table table-hover table-bordered margin-top15" id="companies" style="margin-bottom:15px;">
    <thead>

        <tr>
        	<th>Contact Person</th>
            <th>E-mail</th>
            <th> Listings </th>
            <th>Controls</th>
        </tr>
    </thead>
    <tbody>
   
        <tr class="odd gradeX">
        @foreach($record as $records)
           
            <td>{{ $records->name}}</td>
            <td>{{ $records->email }}</td>
            <td>{{ $records->listing_quota }}</td>
            <td>
               

                <div class="btn-group">
                    <a href="{{ URL::to('dashboard/agencystaff/'.$records->id.'/edit') }}" class="editbtn" alt="Edit">
                
                        <i class="icon-edit"></i> Edit 
                    </a> 
                 &nbsp;
                    <a href="{{URL::to('dashboard/agencystaff/'.$records->id.'/delete')}}" class="editbtn" alt="Delete" onclick="return confirm('Are you sure?')">
                        <i class="icon-remove"></i> Delete
                    </a>
                </div>
            </td>
        </tr>               
        
    @endforeach
    
    </tbody>
    </table>  
    {{ HTML::link('dashboard/agencies','Back',array('class'=>'editbtn'))}}
    </div>
</div>
</div>

    @stop