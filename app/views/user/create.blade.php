

{{ Form::open(array('action' => array('UserController@store'), 'files' => true)) }}
            {{Form::label('primer nombre', 'Primer Nombre')}}
            {{Form::text('first_name', Input::old('first_name'))}}

            {{Form::label('segundo nombre', 'Segundo Nombre')}}
            {{Form::text('last_name', Input::old('last_name'))}}

            {{Form::label('email', 'Email')}}
            {{Form::email('email', Input::old('email'))}}
            {{Form::label('password', 'Password')}}
            {{Form::password('password', Input::old('password'))}}

            {{Form::label('admin', 'Admin')}}
            {{ Form::checkbox('admin', '1') }}

            {{Form::label('editor', 'Editor')}}
            {{ Form::checkbox('editor', '1') }}

            {{Form::label('user', 'User')}}
            {{ Form::checkbox('user', '1', true) }}

            {{ Form::label('photo', 'Foto') }}
                
                <!--así se crea un campo file en laravel-->
            {{ Form::file('photo') }}

            {{Form::submit('Guardar')}}
  {{ Form::close() }}