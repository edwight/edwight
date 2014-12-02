@extends('layouts.master')
 
@section('index')
<section class="section">
@foreach($post as $posts)
	<article class="articulo">
		<figure class="imagen">
			 {{ HTML::image('imgs/post/angular.jpg', "Imagen no encontrada")}}
			<img src="img/angular.jpg" >
		</figure>
		<div class="contenido">
			<div class="author"><span class="icon-user"></span>edwight delgado</div>
			<div class="titulo">{{ $posts->titulo }}</div>
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

@foreach($post as $posts)
<div style="border:1px solid #ccc;">
	<p><h3>titulo:</h3>{{ $posts->titulo }}</p>
	<p><h3>descripcion:</h3>{{ $posts->descripcion }}</p>
	<p><h3>fecha: </h3>{{$posts->create_at}}</p>
	<p><h3>author: </h3>{{$posts->user->email}}</p>
	@foreach ($posts->tags as $tags)
		<p><h3>Tags:</h3>{{$tags->name}}</p>
	@endforeach
	</div>
@endforeach
</section>	
@stop

