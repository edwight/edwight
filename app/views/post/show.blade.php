@extends('layouts.master')
@section('show')
   <article class="article-detalles--col1">
			<section class="imagen-detalles">
				<figure class="fimg">
					@if($post->img)
					{{ HTML::image('imgs/post/'.$post->img->imagen, "Imagen no encontrada")}}
					@else
						<img ng-src="http://static.betazeta.com/www.fayerwayer.com/up/2014/12/terminator-genysis-1-320x210.jpg" src="http://static.betazeta.com/www.fayerwayer.com/up/2014/12/terminator-genysis-1-320x210.jpg">
					@endif
				</figure>
			</section>
			<div class="atras"></div>
			<div class="contenido-detalles">
				<section class="categoria">
					<a href="."><p>Politica</p></a>
				</section>
				<section class="body-text">
					<h2 class="titulo">{{$post->titulo}}</h2>
				</section>

				<section class="body-text">
					{{$post->contenido}}
				
				</section>
				<section class="author-detalles">
				
					<figure class="img-detalles">
						<a href=""><img ng-src="http://static.betazeta.com/www.fayerwayer.com/up/2014/12/terminator-genysis-1-320x210.jpg" src="http://static.betazeta.com/www.fayerwayer.com/up/2014/12/terminator-genysis-1-320x210.jpg">
						</a>
					</figure>
					<div class="contenido-detalles">
						<span>por</span><a href=""> Daniel Villalobos</a>
					</div>
				</section>
				<ul class="tags">
				@foreach ($post->tags as $tags)
				<li>
					<a href="/tag/privacidad/" class="ng-binding">{{$tags->name}}</a>
				</li>
				@endforeach
					
			</div>
			<div class="comentarios"></div>
		</article>
		<aside class="aside-detalles--col2">
			<ul class="list">
				<li class="item">
					<article class="article"><!--  si -->
						<figure class="fimg">
							<img ng-src="http://static.betazeta.com/www.fayerwayer.com/up/2014/12/terminator-genysis-1-320x210.jpg" src="http://static.betazeta.com/www.fayerwayer.com/up/2014/12/terminator-genysis-1-320x210.jpg">
						</figure>
						<div class="author">
							<a href="/author/daniel-villalobos/">Daniel Villalobos</a>
						</div>
						<div class="contenido">
							<a ng-href="/2014/12/conoce-el-primer-trailer-oficial-de-terminator-genisys/"  class="toPost" href="/2014/12/conoce-el-primer-trailer-oficial-de-terminator-genisys/" rel="">
								<h2 class="title">Conoce el primer tráiler oficial de Terminator: Genisys
								 Conoce el primer tráiler oficial de Terminator: Genisys</h2>
							</a>
						</div>
						<div class="actions">
							<ul>
								<li><a class="ng-binding">hace una hora</a></li>
								<li><a class="ng-binding icon-export">456</a></li>
							</ul>
						</div>
					</article>
				</li>
			</ul>
		</aside>
		<footer class="footer-main">
			
		</footer>     
@stop