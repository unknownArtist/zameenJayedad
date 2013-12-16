@extends('layouts.login')
@section('content')
<div id="wrapper">
<div id="content">

<div id="form-wrapper">

<div class="agencynew">
<a href="{{URL::to('addnewuser')}}">Add New</a>
</div>

    <h2>Total User({{$total}}) </h2>
    
<table cellpadding="5" cellspacing="10" border="1" class="table table-hover table-bordered margin-top15" id="companies" style="margin-bottom:15px;">
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
           
            <td>{{ $records->name }}</td>
            <td>{{ $records->email }}</td>
            <td>{{ $records->listing_quota }}</td>
            <td>

                <div class="btn-group">
                    <a href="{{URL::to('dashboard/agencystaff/'.$records->id.'/edit')}}" class="" alt="Edit">
                        <i class="icon-edit"></i> Edit
                    </a>                    

                    <a href="{{URL::to('dashboard/agencystaff/'.$records->id.'/delete')}}" class="" alt="Delete" onclick="return confirm('Are you sure?')">
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