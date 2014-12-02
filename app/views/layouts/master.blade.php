<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=yes">
	 {{ HTML::style('css/prueba.css') }}
</head>
<body>
	<div class="contenedor" >
		<header class="header">
			<div class="menu_bar">
				<a href="#" class="bt-menu"><span class="icon-menu"></span></a>
			</div>	
		</header>
		<nav class="nav">
			<div class="info"><p>DOSIS DIARIAS DE TECNOLOGÍA EN ESPAÑOL ™</p></div>
			<ul class="nav-list">
			    <li><a href="#"><span class="icon-"></span>Home</a></li>
			    <li><a href="#"><span class="icon-"></span>About</a></li>
			    <li><a href="#"><span class="icon-"></span>Services</a></li>
			    <li><a href="#"><span class="icon-"></span>Portfolio</a></li>
			    <li><a href="#"><span class="icon-"></span>Testimonials</a></li>
			    <li><a href="#"><span class="icon-"></span>Contact</a></li>
			    <li><a href="#"><span class="icon-"></span>Contact</a></li>
			    <li><a href="#"><span class="icon-"></span>Contact</a></li>
			</ul>
			<ul class="nav-menu">
			    <li><a href="#"><span class="icon-github"></span>Github</a></li>
			    <li><a href="#"><span class="icon-googleplus"></span>Google Plus</a></li>
			    <li><a href="#"><span class="icon-facebook"></span>Facebook</a></li>
			    <li><a href="#"><span class="icon-twitter"></span>Twitter</a></li>
			    <li><a href="#"><span class="icon-pen"></span>Editar</a></li>
			    <li><a href="#"><span class="icon-user"></span>Usuarios</a></li>
			    <li><a href="#"><span class="icon-stats"></span>Estadisticas </a></li>
			</ul>
			<div class="acerca">
				<p>Betazeta</p>
				<p>Contacto Editorial:  <strong>fayerwayer@betazeta.com</strong>
				Contacto Comercial:  <strong>hola@betazeta.com</strong></p>
				<p>
				   Chile   +(56 2) 2 583 0077   España   +(34) 647 944 922   México   +(52 1 55) 1098 1750
				 </p>
				FayerWayer es una marca registrada de Betazeta Networks S.A.
				by-nc-sa (cc) 2014. Algunos derechos reservados. El contenido de este sitio está licenciado bajo CreativeCommons.
				Semos 1.2.1 Neil deGrasse Tyson</p>
			</div>
		</nav>
		
		
			@yield('index')	

			@yield('detalles')	
		
			<footer class="pie"></footer>
	</div><!-- end contenedor -->
	
	 <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>


        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
          <script type="text/javascript">
			$("document").ready(function(){
 
    			$(".menu_bar .bt-menu").click(alerta);

    			function alerta(){
    				$(".nav").toggle();
    				$(".section").toggle();
    				if($('.nav').css('display') == 'block')
    				{
    					$(".header .menu_bar a ").css("color","#fff");
					}
					
				}
			
			});
 		</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
</body>
</html>