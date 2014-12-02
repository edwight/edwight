@extends('layouts.master')

@section('editor_style')	
{{ HTML::script('editor/plusone.js') }}
{{ HTML::script('editor/widgets.js') }}
{{ HTML::script('editor/jquery-1.9.1.min.js') }}
<link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.1/css/bootstrap.min.css" rel="stylesheet">
{{ HTML::script('editor/bootstrap.min.js') }}
<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
  <!-- include (codemirror.css, codemirror.js, xml.js, formatting.js) -->
{{ HTML::style('editor/codemirror.min.css') }}
{{ HTML::style('editor/monokai.min.css') }}
{{ HTML::script('editor/codemirror.min.js') }}
{{ HTML::script('editor/xml.min.js') }}
{{ HTML::script('editor/formatting.min.js') }}
<!-- add summernote -->
<link href="http://hackerwins.github.io/summernote/summernote-dist/summernote.css" rel="stylesheet">
{{ HTML::script('editor/summernote.min.js') }}
<!-- add user custom -->
<link href="http://hackerwins.github.io/summernote/page.css" rel="stylesheet">
@stop



@section('editor')	
<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Form Elements</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal">
						  <fieldset>
							<legend>Datepicker, Autocomplete, WYSIWYG</legend>
								<div class="control-group">
								  <label class="control-label" for="typeahead">Titulo </label>
								  <div class="controls">
									<input type="text" class="span6 typeahead" id="typeahead"  data-provide="typeahead" >
								  </div>
								</div>
								<div class="control-group">
								  <label class="control-label" for="date01">Date input</label>
								  <div class="controls">
									<input type="text" class="input-xlarge datepicker" id="date01" value="02/16/12">
								  </div>
								</div>
								<div class="control-group">
								  <label class="control-label" for="fileInput">File input</label>
								  <div class="controls">
									<input class="input-file uniform_on" id="fileInput" type="file">
								  </div>
								</div>          
								<div class="control-group">
								  <label class="control-label" for="textarea2">descripcion</label>
								  <div class="controls">
									<textarea class="cleditor" id="textarea2" rows="3"></textarea>
								  </div>
								</div>
								  <div class="summernote container">
								    <div id="summernote" class="span12" style="display: none;">
								 	</div>
								</div>
							</fieldset>

							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Save changes</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>

						</form>   
					</div>
				</div><!--/span-->

</div><!--/row-->



 <script type="text/javascript">
$(document).ready(function() {
  $('#summernote').summernote({height: 300, codemirror: {
    theme: 'monokai'}
  });
});
</script>




<iframe id="rufous-sandbox" scrolling="no" frameborder="0" allowtransparency="true" style="display: none;"></iframe></body></html>
@stop