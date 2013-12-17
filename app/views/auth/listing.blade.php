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
 text-align: center;
color: #50b1a8;
font-size: 15px;
padding-top: 10px;
padding-bottom: 10px;
border-bottom: 1px solid #50b1a8;
}


</style>
<div id="wrapper">
<div id="content">

<div id="">

<div class="agencynew">
<a href="{{URL::to('profolio')}}">Add New</a>
</div>

    <h2 style="color:#50b1a8;">Total Users&nbsp;({{$users}}) </h2>
    
<table width="100%" cellpadding="5" cellspacing="0" border="0" class="table table-hover table-bordered margin-top15" id="companies" style="margin-bottom:15px;">
    <thead>

        <tr>
        	<th>property_type</th>
            <th>purpose</th>
            <th> wanted </th>
            <th>city</th>
            <th>budget</th>
            <th>l_area</th>
             <th>bedroom</th>
            <th>bathroom</th>
            <th>contact_p</th>
            <th>cell</th>
            <th> email </th>
             <th> controls </th>
        </tr>
    </thead>
    <tbody>
   
        <tr class="odd gradeX">
        @foreach($records as $record)
           
            <td>{{ $record->property_type }}</td>
            <td>{{ $record->purpose }}</td>
            <td>{{ $record->wanted }}</td>
            <td>{{ $record->city }}</td>
            <td>{{ $record->budget }}</td>
            <td>{{ $record->l_area }}</td>
            <td>{{ $record->bedroom }}</td>
            <td>{{ $record->bathroom }}</td>
            <td>{{ $record->contact_p }}</td>
            <td>{{ $record->cell }}</td>
            <td>{{ $record->email }}</td>
            <td>

                <div class="btn-group">
                    <a href="{{URL::to('dashboard/agencystaff/'.$record->id.'/edit')}}" class="editbtn" alt="Edit">
                        <i class="icon-edit"></i> Edit 
                    </a> 
                  <br />
                  <br />            
                   
                    <a href="{{URL::to('dashboard/agencystaff/'.$record->id.'/delete')}}" class="editbtn" alt="Delete" onclick="return confirm('Are you sure?')">
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