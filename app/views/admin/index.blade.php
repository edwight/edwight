@extends('layouts.master')

@section('index')
<div class="contenedor">
	<section class="section-main--col1">
	@foreach($post as $posts)
	<article id="box"class="article"><!--  si -->
		<figure class="fimg">
			<img ng-src="http://static.betazeta.com/www.fayerwayer.com/up/2014/12/terminator-genysis-1-320x210.jpg" src="http://static.betazeta.com/www.fayerwayer.com/up/2014/12/terminator-genysis-1-320x210.jpg">
		</figure>
		<div class="author">
			<a href="/author/daniel-villalobos/"></a>
		</div>
		<div class="contenido">
			<a ng-href="/2014/12/conoce-el-primer-trailer-oficial-de-terminator-genisys/"  class="toPost" href="/2014/12/conoce-el-primer-trailer-oficial-de-terminator-genisys/" rel="">
				<h2 class="title">Conoce el primer tráiler oficial de Terminator: Genisys
				 Conoce el primer tráiler oficial de Terminator: Genisys</h2>
			</a>
		</div>
		<div class="actions">
			<ul>
				<li><a class="time">hace una hora</a></li>
				<li><a class="category">456</a></li>
			</ul>
		</div>
	</article>	
	@endforeach
	</section>

	<section class="section-main--col2">
	@foreach($post as $posts)
		@if($posts->descripcion && $posts->img && $posts->subtitulo)
			<article id="box2" class="article--first"><!--  si -->
				<figure class="fimg--first">
					{{ HTML::image('imgs/post/'.$posts->img->imagen, "Imagen no encontrada")}}
				</figure>
				<div class="author">
					<a href="/author/daniel-villalobos/">{{$posts->user->first_name}}</a>
				</div>
				<div class="contenido">
					<a class="toPost" href="{{'admin/'.$posts->id }}" rel="">
						<h2 class="title">{{$posts->titulo}}</h2>
						<p class="excerpt ng-binding">"Podemos evitar el día del juicio final".</p>
					</a>
				</div>
				<div class="actions">
					<ul>
						<li><a class="time">hace una hora</a></li>
						<li><a class="category">456</a></li>
					</ul>
				</div>
			</article>
		@elseif($posts->img)
		<article id="box2" class="article"><!--  si -->
			<figure class="fimg">
				{{ HTML::image('imgs/post/'.$posts->img->imagen, "Imagen no encontrada")}}
			</figure>
			<div class="author">
				<a href="/author/daniel-villalobos/">{{$posts->user->first_name}}</a>
			</div>
			<div class="contenido">
				<a class="toPost" href="{{'admin/'.$posts->id }}" rel="">
					<h2 class="title">{{$posts->titulo}} </h2>
				</a>
			</div>
			<div class="actions">
				<ul>
					<li><a class="time">{{$posts->created_at}}</a></li>
					<li><a class="category">456</a></li>
				</ul>
			</div>
		</article>
		@else
			<article id="box2" class="article--no"><!--  si -->
				<figure class="fimg--no">
					{{ HTML::image('imgs/post/angular.jpg', "Imagen no encontrada")}}
				</figure>
				<div class="author--no">
					<a href="/author/daniel-villalobos/">{{$posts->user->first_name}}</a>
				</div>
				<div class="contenido">
					<a class="toPost" href="{{'admin/'.$posts->id }}" rel="">
						<h2 class="title">{{$posts->titulo}}</h2>
					</a>
				</div>
				<div class="actions">
					<ul>
						<li><a class="time">{{$posts->created_at}}</a></li>
						<li><a class="category">456</a></li>
					</ul>
				</div>
			</article>
		@endif
	@endforeach	
	</section>
	<aside class="aside-main--col3">
		<section class="list--col1"><a href=""><img ng-src="http://static.betazeta.com/www.fayerwayer.com/up/2014/12/terminator-genysis-1-320x210.jpg" src="http://static.betazeta.com/www.fayerwayer.com/up/2014/12/terminator-genysis-1-320x210.jpg"></a></section>
		<section class="list--col2">avances</section>
		<section class="list--col3">twitter</section>
	</aside>
</div><!-- end contenedor -->
<div class="col-span-12">
            <div class="paginate text-center">
                {{ $post->links() }}
            </div>
        </div>
    </div>
        
 
@stop

@section('index_js')
	{{ HTML::script('infinite-scroll/test/debug.js') }}
    {{ HTML::script('infinite-scroll/jquery.infinitescroll.js') }}
    {{ HTML::script('infinite-scroll/behaviors/manual-trigger.js') }}
    <script>
       $('.section-main--col1').infinitescroll({
            navSelector     : ".paginate",
            nextSelector    : ".pagination li a:last",
            itemSelector    : "#box",
            debug           : false,
            dataType        : 'html',
            maxPage			: 4,
            path: function(index) {
                return "?page=" + index;
            }
            }, function(newElements, data, url){
            var $newElems = $( newElements );
            $('.section-main--col1').masonry( 'appended', $newElems, true);
        });
    </script>
    <script>
    $('.section-main--col2').infinitescroll({
            navSelector     : ".paginate",
            nextSelector    : ".pagination li a:last",
            itemSelector    : "#box2",
            debug           : false,
            dataType        : 'html',
            path: function(index) {
                return "?page=" + index;
            }
            }, function(newElements, data, url){
            var $newElems = $( newElements );
            $('.section-main--col2').masonry( 'appended', $newElems, true);
        });
    </script>

@stop