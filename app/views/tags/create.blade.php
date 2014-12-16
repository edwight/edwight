

{{ Form::open(array('action' => 'TagsController@store' ))}}
    {{ Form::label('tags', 'Tags')}}
    {{ Form::text('tags', '')}}
    {{ Form::label('slugTags', 'slugTags')}}
    {{ Form::text('slugTags', '')}}
    {{ Form::submit('Save', ['name' => 'submit']) }}
{{ Form::close() }}