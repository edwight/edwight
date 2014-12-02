@extends('layouts.master')
@section('detalles')
<section class="principal">
				<article class="articulo">
					<div class="contenido">
						<div class="izquierda">
							<figure class="imagen">
								<img src="img/angular.jpg" >
							</figure>
							<div class="titulo">Siendo realistas, no vamos a colonizar a Marte por ahora [FW Opinión]</div>

							<div class="author"><span class="icon-user"></span>por 
								<strong>edwight delgado</strong>
							</div>
							<div class="categoria">Ciencias Ciencias</div>
							<div class="social"></div>
							<div class="post">
								<p>Hace algunos soles viví cerca de la zona de lanzamiento espacial de Cabo Cañaveral y, en ese entonces como estudiante de física, fui parte de infinidad de eventos relacionados con esta cultura. Hubo sinfín de lanzamientos del Shuttle o satélites a propulsión por múltiples cohetes que, aun cuando no estuvieras ahí para verlos, podías apreciarlos desde la distancia.</p>

								<p>Mi actividad favorita de entonces era ir a la NASA y platicar con los astronautas que prestaran su tiempo de comida para las visitas al centro espacial. Como muchos, desde niña soñaba con ir al espacio y actividades como éstas alimentaban ese deseo. Sin embargo, falta mucho, si no es que todo, para que ir "de viaje al espacio" sea factible. Gente: el salto de mandar bien lejos un robot espacial y a un humano al espacio es un asunto que requiere décadas de trabajo.</p>
							</div>
						</div>
						
						<div class="derecha">
							<div class="tags">
								<a href="#" class="tag">
									Python
								</a>
								<a href="#" class="tag">
									html
								</a>
								<a href="#" class="tag">
									laravel 
								</a>
								<a href="#" class="tag">
									node.js 
								</a>
								<a href="#" class="tag">
									estadisticas
								</a>
								<a href="#" class="tag">
									git
								</a>
								<a href="#" class="tag">
									youtube 
								</a>
								<a href="#" class="tag">
									etiqueta muy larga
								</a>
							</div>
							<div class="relacionado">
								<article class="articulo">
									<figure class="imagen">
										<img src="img/angular.jpg" >
									</figure>
									<div class="contenido">
										<div class="author"><span class="icon-user"></span>edwight delgado</div>
										<div class="titulo">Crumbles transforma texto en alta resolusion video con Homero Simpson y otros personajes</div>
										<div class="datos">
											<div class="fecha"><span class="icon-calendar"></span>hace 35 minutos</div>
											<div class="comentarios">
												<span class="icon-bubble"></span><strong>35</strong>
											</div>
										</div>
									</div>
									<div class="tagss">laravel</div>
								</article>
							</div>
						</div>
					</div><!-- end contenido -->
				</article>
		</section>

<p>{{ $post->id }}</p>
<p>{{ $post->titulo }}</p>
<p>{{ $post->contenido }}</p>

<p>{{ $post->created_at}}</p>


<p><strong>{{ HTML::link( 'admin/'.$post->id.'/edit') }}</strong></p>

@stop