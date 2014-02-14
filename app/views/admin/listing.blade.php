@extends('layouts.admin')
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


<?php  $users = DB::table('property')->count(); ?>
    <h2 style="color:#50b1a8;">Total Properties&nbsp;({{$users}}) </h2>
    
<table width="100%" cellpadding="5" cellspacing="0" border="0" class="table table-hover table-bordered margin-top15" id="companies" style="margin-bottom:15px;">
    <thead>

        <tr>
        	<th>Property Type</th>
            <th>Purpose</th>
            <th>Wanted </th>
            <th>City</th>
            <th>Budget</th>
            <th>Area</th>
             <th>Bedrooms</th>
            <th>Bathrooms</th>
            <th>Contact</th>
            <th>Cell</th>
            <th> Email </th>
             <!-- <th> Controls </th> -->
        </tr>
    </thead>
    <tbody>
        <?php $records = DB::table('property')->orderBy('id', 'desc')->paginate(10);
                   
                     ?>
   
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
           <!--  <td>

                <div class="btn-group">
                    <a href="{{URL::to('profolio/listing/'.$record->id.'/edit')}}" class="editbtn" alt="Edit">
                        <i class="icon-edit"></i> Edit 
                    </a> 
					<br />
                    <br />
                    <a href="{{URL::to('profolio/listing/'.$record->id.'/delete')}}" class="editbtn" alt="Delete" onclick="return confirm('Are you sure?')">

                        <i class="icon-remove"></i> Delete
                    </a>
                </div>
            </td> -->
        </tr>               
        
    @endforeach
    
    </tbody>
    </table> 
     <?php echo $records->links(); ?> 
    </div>
</div>
</div>

    @stop