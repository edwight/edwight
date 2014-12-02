<h1> Editar Post: {{ $post->titulo }}</h1>

{{ HTML::ul($errors->all()) }}

    {{ Form::open(array('action' => array('AdminController@update', $post->id ),'files'=>true, 'method' => 'PUT'))}}
    {{ Form::label('titulo', 'Titulo') }}
    {{ Form::text('titulo', Input::old('titulo')) }}
    {{ Form::label('contenido', 'Contenido') }}
    {{ Form::text('contenido', $post->contenido )}}
    {{ Form::label('url', 'Url') }}
    {{ Form::text('url', Input::old('url')) }}
    {{ Form::label('file','File',array('id'=>'file')) }}
  	{{ Form::file('photo','',array('class'=>'photo')) }}
  	{{ Form::label('tags', 'Tags') }}
            <select name="tags[]" id="tags" size="6" class="form-control" multiple>
                @foreach (Tag::all() as $tag)
                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
               	   @endforeach
            </select>
    {{-- More fields... --}}
    {{ Form::submit('Save', ['name' => 'submit']) }}
{{ Form::close() }}
