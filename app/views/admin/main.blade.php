@extends('layouts.admin')
@section('content')
   
    <div id="wrapper">
    <div id="content">    
    <div id="form-wrapper">
     

           <table cellpadding="0" cellspacing="0" border="0" class="table table-hover table-bordered margin-top15" id="companies" style="margin-bottom:15px;">
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

    	$users = AgentUser::all();
		 foreach ($users as $user)
		 	{
		 		$id=$user->agent_id;
		 		

		 		$records = User::where('id',$id)->get();
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
                    <a href="{{URL::to('dashboard/admin/main/'.$record->id.'/activation')}}" class="log" style="margin-top:0px; margin-left:15px;">
                      Activate
                    </a>

                    <a href="{{URL::to('dashboard/admin/main/'.$record->id.'/deactivation')}}" class="log" style="margin-top:0px; margin-left:15px;">
                         Deactivate
                    </a>
                </div>
            </td>
					 </tr>   
		 		<?php	}
		 	}

    	 ?>
     
    
    </tbody>
    </table>  
    

    </div>
   </div> 
{{ Form::close() }}
</div>

       
@stop