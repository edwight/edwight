<p>Bienbenido </p><strong>detalles</strong>
<div class="menu">
	<li><p>{{ HTML::link( 'lista' , 'lista usuario') }}</p></li>
</div>
<p>{{ HTML::link( 'logout' , 'salir') }}</p>

{{ Form::open(array('action' => array('UserController@update'), 'files' => true)) }}
            {{Form::label('primer nombre', 'Primer nombre')}}
            {{Form::text('first_name', $user->first_name )}}
            {{Form::label('segundo nombre', 'Segundo Nombre')}}
            {{Form::text('last_name', $user->last_name)}}

            {{Form::label('email', 'Email')}}
            {{Form::text('email', $user->email)}}

            {{Form::label('password', 'Password')}}
            {{Form::password('password')}}

            {{Form::submit('Guardar')}}
  {{ Form::close() }}