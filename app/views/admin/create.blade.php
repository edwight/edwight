

{{ HTML::ul($errors->all()) }}


<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    {{ HTML::style('css/lib/editor/font-awesome.min.css') }}
    {{ HTML::style('css/lib/editor/froala_editor.min.css') }}
    {{ HTML::style('css/lib/editor/froala_style.min.css') }}
    <!--    multiples Select css-->
    {{ HTML::style('select/docsupport/style.css') }}
    {{ HTML::style('select/docsupport/prism.css') }}
    {{ HTML::style('select/chosen.css') }}


    <style>
        body {
            text-align: center;
        }

        section, .side-by-side{
            width: 80%;
            margin: auto;
            text-align: left;
        }
        .columna1--admin{
            width: 30%;
            border: 1px solid #ccc;
        }
    </style>
</head>

<body>

{{ Form::open(array('action' => array('AdminController@store' ),'files'=>true, 'method' => 'POST'))}}
    
    {{ Form::label('titulo', 'Titulo') }}
    {{ Form::text('titulo', '') }}
     <textarea id="edit" name="contenido"></textarea>
    <section id="editor">
        <div name="contenido" id='edit' style="margin-top: 30px;">
        <h1>Click and edit</h1>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec facilisis diam in odio iaculis blandit. Nunc eu mauris sit amet purus viverra gravida ut a dui. Vivamus nec rutrum augue, pharetra faucibus purus. Maecenas non orci sagittis, vehicula lorem et, dignissim nunc. Suspendisse suscipit, diam non varius facilisis, enim libero tincidunt magna, sit amet iaculis eros libero sit amet eros. Vestibulum a rhoncus felis. Nam lacus nulla, consequat ac lacus sit amet, accumsan pellentesque risus. Aenean viverra mi at urna mattis fermentum. Curabitur porta metus in tortor elementum, in semper nulla ullamcorper. Vestibulum mattis tempor tortor quis gravida. In rhoncus risus nibh. Nullam condimentum dapibus massa vel fringilla. Sed hendrerit sed est quis facilisis. Ut sit amet nibh sem. Pellentesque imperdiet mollis libero.</p>

        <p><a href="http://google.com" title="Aenean sed hendrerit">Aenean sed hendrerit</a> velit. Nullam eu mi dolor. Maecenas et erat risus. Nulla ac auctor diam, non aliquet ante. Fusce ullamcorper, ipsum id tempor lacinia, sem tellus malesuada libero, quis ornare sem massa in orci. Sed dictum dictum tristique. Proin eros turpis, ultricies eu sapien eget, ornare rutrum ipsum. Pellentesque eros nisl, ornare nec ipsum sed, aliquet sollicitudin erat. Nulla tincidunt porta vehicula.</p>

        <p>Nullam laoreet imperdiet orci ac euismod. Curabitur vel lectus nisi. Phasellus accumsan aliquet augue, eu rutrum tellus iaculis in. Nunc viverra ultrices mollis. Curabitur malesuada nunc massa, ut imperdiet arcu lobortis sed. Cras ac arcu mauris. Maecenas id lectus nisl. Donec consectetur scelerisque quam at ultricies. Nam quis magna iaculis, condimentum metus ut, elementum metus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus id tempus nisi.</p>
          </div>
    </section>
    <div class="side-by-side clearfix">
        <div class="columna1--admin">
              <select data-placeholder="Selecione un Editor..." class="chosen-select" style="width:350px;" tabindex="2">
                <option value=""></option>
                <option value="United States">United States</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="Afghanistan">Afghanistan</option>
                <option value="Aland Islands">Aland Islands</option>
                <option value="Albania">Albania</option>
                <option value="Algeria">Algeria</option>
                <option value="American Samoa">American Samoa</option>
                <option value="Andorra">Andorra</option>
              </select>
            <select data-placeholder="Seleciones las Etiquetas..." class="chosen-select" name="tags[]" multiple style="width:350px;" tabindex="4" id="tags">
                <option value=""></option>
                    @foreach (Tag::all() as $tag)
                        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                    @endforeach
            </select>
            <select data-placeholder="Selecione una Categoria..." name="categorys" class="chosen-select" style="width:350px;" tabindex="2" id="categorys">
                    <option value=""></option>
                    @foreach (Category::all() as $categorys)
                        <option value="{{ $categorys->id }}">{{ $categorys->name }}</option>
                    @endforeach
            </select>
        </div>
        <div class="columna1--admin">
            {{ Form::label('file','File',array('id'=>'file')) }}
            {{ Form::file('photo','',array('class'=>'photo')) }}
    
        </div>
    </div>
    
    
    {{-- More fields... --}}
    
    {{ Form::submit('Save', ['name' => 'submit']) }}


    
    
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js" type="text/javascript"></script>
 {{ HTML::script('select/chosen.jquery.js') }}
 {{ HTML::script('select/docsupport/prism.js') }}
  <script type="text/javascript">
    var config = {
      '.chosen-select'           : {},
      '.chosen-select-deselect'  : {allow_single_deselect:true},
      '.chosen-select-no-single' : {disable_search_threshold:10},
      '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
      '.chosen-select-width'     : {width:"95%"}
    }
    for (var selector in config) {
      $(selector).chosen(config[selector]);
    }
  </script>
{{ Form::close() }}

 {{ HTML::script('js/lib/editor/libs/jquery-1.11.1.min.js') }}
  {{ HTML::script('js/lib/editor/froala_editor.min.js') }}
  <!--[if lt IE 9]>
    <script src="js/lib/editor/froala_editor_ie8.min.js"></script>
  <![endif]-->
    {{ HTML::script('js/lib/editor/plugins/tables.min.js') }}
    {{ HTML::script('js/lib/editor/plugins/lists.min.js') }}
    {{ HTML::script('js/lib/editor/plugins/colors.min.js') }}
    {{ HTML::script('js/lib/editor/plugins/font_family.min.js') }}
    {{ HTML::script('js/lib/editor/plugins/font_size.min.js') }}
    {{ HTML::script('js/lib/editor/plugins/block_styles.min.js') }}
    {{ HTML::script('js/lib/editor/plugins/media_manager.min.js') }}
    {{ HTML::script('js/lib/editor/plugins/video.min.js') }}
    {{ HTML::script('js/lib/editor/plugins/char_counter.min.js') }}

  <script>
      $(function(){
        $('#edit').editable({inlineMode: false})
      });
  </script>
  
</body>
</html>
