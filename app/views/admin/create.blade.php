

{{ HTML::ul($errors->all()) }}

    {{ Form::open(array('action' => array('AdminController@store' ),'files'=>true, 'method' => 'POST'))}}
    {{ Form::label('titulo', 'Titulo') }}
    {{ Form::text('titulo', '') }}
    {{ Form::label('contenido', 'Contenido') }}
    {{ Form::text('contenido', '' )}}
    {{ Form::label('slug', 'Slug') }}
    {{ Form::text('slug', '') }}
    {{ Form::label('file','File',array('id'=>'file')) }}
  	{{ Form::file('photo','',array('class'=>'photo')) }}
  	{{ Form::label('tags', 'Tags') }}
            <select name="tags[]" id="tags" size="6" class="form-control" multiple>
                @foreach (Tag::all() as $tag)
                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
               	   @endforeach
            </select>
    {{-- More fields... --}}
    {{ Form::label('category', 'Category') }}
            <select name="categorys" id="categorys" size="6" class="form-control">
                @foreach (Category::all() as $categorys)
                    <option value="{{ $categorys->name }}">{{ $categorys->name }}</option>
                @endforeach
            </select>
    {{ Form::submit('Save', ['name' => 'submit']) }}
{{ Form::close() }}