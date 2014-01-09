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
        {{ HTML::link('user/logout','Logout')}}
    </div>

          <h2 style="color:#50b1a8; margin-bottom:10px; margin-left:0; padding-left:0;">Total Agents </h2>

    
    
<table width="100%" cellpadding="5" cellspacing="0" border="0" class="table table-hover table-bordered margin-top15" id="companies" style="margin-bottom:15px;">
    <thead>

        <tr>
        	<th>Name</th>
            <th>Email</th>
            <th>Contact</th>
            <th>Adress</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    	<?php

    	
    $records  = User::where('group', '=', 1)->orderBy('id', 'desc')->paginate(10);
            
            foreach ($records as $record)
		 	{
		 		?>
		 		<tr class="odd gradeX">
		 		<td>{{ ($record->getname($record->id)); }}</td>
		 	    <td>{{ $record->email }}</td>
		 	    <td>{{ ($record->getcell($record->id)); }}</td>
		 	    <td>{{ ($record->getAdress($record->id)); }}</td>
		 	    <td>
                <div class="btn-group">
                    <a href="{{URL::to('dashboard/admin/main/'.$record->id.'/activation')}}" class="editbtn" style="margin-top:0px; margin-left:15px;">
                      Activate
                    </a>
                    <br/><br/>
                    <a href="{{URL::to('dashboard/admin/main/'.$record->id.'/deactivation')}}" class="editbtn" style="margin-top:0px; margin-left:15px;">
                         Deactivate
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