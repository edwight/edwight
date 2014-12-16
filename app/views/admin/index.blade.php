@extends('layouts.master')
@section('index')
<section class="section">	

@foreach($post as $posts)
	<article class="articulo">
		<figure class="imagen">
			@if($posts->img)
				{{ HTML::image('imgs/post/'.$posts->img->imagen, "Imagen no encontrada")}}
			@endif
		</figure>
		<div class="contenido">
			<div class="author"><span class="icon-user"></span>edwight delgado</div>
			<div class="titulo">{{ HTML::link( 'admin/'.$posts->id , $posts->titulo )}}</div>
			<div class="datos">
				<div class="fecha"><span class="icon-calendar"></span>{{$posts->create_at}}</div>
				<div class="comentarios">
					<span class="icon-bubble"></span><strong>35</strong>
				</div>
			</div>
		</div>
		<div class="tags">laravel</div>
	</article>

@endforeach
</section>
				@foreach($post as $posts)
					<p>{{ HTML::link( 'admin/'.$posts->id , 'detalles') }}</p>
		 				<br>
						<p>{{ $posts->titulo}}</p>
					<p>{{ $posts->contenido}}</p>
 					<p>{{$posts->user->email}}</p>	
 					@foreach ($posts->tags as $tags)
						<p><h3>Tags:</h3>{{$tags->name}}</p>
					@endforeach
 					{{ Form::open(['route' => ['admin.destroy', $posts->id], 'method' => 'delete']) }}
						<button type="submit">Delete</button>
					{{ Form::close() }}
				@endforeach
			</div>
		</div>
</div>
@stop