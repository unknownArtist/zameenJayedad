<h1>Registration</h1>

{{ Form::open(array('url' => 'user/register')) }}
    <ul>
        <li>
            {{ Form::label('email', 'Email:') }}
            {{ Form::text('email') }}
        </li>


        <li>
            {{ Form::label('password', 'Password:') }}
            {{ Form::Password('password') }}
        </li>
         <li>
            {{ Form::label('first_name', 'First Name:') }}
            {{ Form::text('first_name') }}
        </li>
         <li>
            {{ Form::label('last_name', 'Last Name:') }}
            {{ Form::text('last_name') }}
        </li>
        <li>
            {{ Form::label('password', 'Confirm Password:') }}
            {{ Form::Password('password') }}
        </li>
         <li>
            {{ Form::label('name', 'Name:') }}
            {{ Form::text('name') }}
        </li>
        <li>
            {{ Form::label('phone', 'Phone:') }}
            {{ Form::text('phone') }}
        </li>
          <li>
            {{ Form::label('cell', 'Cell/mobile:') }}
            {{ Form::text('cell') }}
        </li>
         <li>
            {{ Form::label('fax', 'Fax:') }}
            {{ Form::text('fax') }}
        </li>
        <li>
            {{ Form::label('address', 'Address:') }}
            {{ Form::text('address') }}
        </li>
          <li>
            {{ Form::label('zip', 'Zipcode:') }}
            {{ Form::text('zip') }}
        </li>
         <li>
            {{ Form::label('country', 'Fax:') }}
            {{ Form::text('fax') }}
        </li>
        <li>
            {{ Form::submit('Submit', array('class' => 'btn')) }}
        </li>
        
    </ul>
{{ Form::close() }}