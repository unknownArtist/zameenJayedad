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
  
    <div id="wrapper">
    <div id="content">    
    
      <div class="agencynew" style="margin-top:25px;">
        {{ HTML::link('dashboard/admin/jobs','Add New')}}
    </div>

          <h2 style="color:#50b1a8; margin-bottom:10px; margin-left:0; padding-left:0;">Total News </h2>

    
    
<table width="100%" cellpadding="5" cellspacing="0" border="0" class="table table-hover table-bordered margin-top15" id="companies" style="margin-bottom:15px;">
    <thead>

        <tr>
        	<th>Title</th>
            <th>jobs</th>
             <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    	<?php

    	
    $records  = Career::orderBy('id', 'desc')->paginate(5);
            
            foreach ($records as $record)
		 	{
		 		?>
		 		<tr class="odd gradeX">
		 	    <td>{{ $record->title}}</td>
		 	    <td>{{ $record->jobsname }}<br/>{{ $record->jobsname1 }}<br/>{{ $record->jobsname2 }}<br/>{{ $record->jobsname3 }}<br/>{{ $record->jobsname4 }}<br/>{{ $record->jobsname5 }}<br/>{{ $record->jobsname6 }}<br/>{{ $record->jobsname7 }}<br/>{{ $record->jobsname8 }}<br/>{{ $record->jobsname9 }}<br/>{{ $record->jobsname10 }}</td>
		 	  
		 	    <td>
                <div class="btn-group">
                    <a href="{{URL::to('dashboard/admin/alljobs/'.$record->id.'/edit')}}" class="editbtn" style="margin-top:0px; margin-left:15px;">
                      Edit
                    </a>
                    <br/><br/>
                    <a href="{{URL::to('dashboard/admin/alljobs/'.$record->id.'/delete')}}" class="editbtn" style="margin-top:0px; margin-left:15px;">
                         Delete
                    </a>
                </div>
            </td>
					 </tr>  
                   
		 		<?php	
		 	}

    	 ?>
     
    
    </tbody>
    </table>  
    

  <?php echo $records->links(); ?>
   </div> 
{{ Form::close() }}
</div>

       
@stop