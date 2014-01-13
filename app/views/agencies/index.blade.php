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
<div id="wrapper">
<div id="content">

<div id="">

<div class="agencynew">
<a href="{{URL::to('dashboard/agencies/addnew')}}">Add New</a>
</div>

    <h2 style="color:#50b1a8;">Total Users&nbsp;({{$total}}) </h2>
    
<table width="100%" cellpadding="10" cellspacing="0" border="0" class="table table-hover table-bordered margin-top15" id="companies" style="margin-bottom:15px;">
    <thead>

        <tr>
        	<th>Agency Owner</th>
            <th>Agency Name</th>
            <th>Controls</th>
        </tr>
    </thead>
    <tbody>
   
        <tr class="odd gradeX">
        @foreach($record as $records)
           
            <td> {{$records->getName($records->agent_id)}}</td>
            <td>{{ $records->agency_name}}</td>
         
            <td>

                <div class="btn-group">

                    <a href="{{URL::to('dashboard/agencies/view/'.$records->agent_id)}}" class="editbtn" alt="View">
                        <i class="icon-remove"></i> view
                    </a>
                    &nbsp;
                    <a href="{{URL::to('dashboard/agencies/'.$records->id.'/edit')}}" class="editbtn" alt="Edit">
                        <i class="icon-edit"></i> Edit 
                    </a> 
                 &nbsp;
                    <a href="{{URL::to('dashboard/agencies/'.$records->id.'/delete')}}" class="editbtn" alt="Delete" onclick="return confirm('Are you sure?')">
                        <i class="icon-remove"></i> Delete
                    </a>
                   
                </div>
            </td>
        </tr>               
        
    @endforeach
    
    </tbody>
    </table>  
    </div>
</div>
</div>

    @stop