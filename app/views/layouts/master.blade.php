<!DOCTYPE html>
<html lang="es">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=yes">
		{{ HTML::style('css/style.css') }}
	</head>
	<body>
		 @yield('index')
		 @yield('show')
		<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>


        <script>window.jQuery || document.write('<script src="js/jquery-1.7.2.min.js"><\/script>')</script>
          <script type="text/javascript">
      $("document").ready(function(){
 		
      	$(".navmain .showhide").click(todo);
        $(".navmain .category").hover(category);
        $(".navmain .search").hover(search);
        
          function search(){
            $(".navmain .search .menu-form").toggle();
          }
          function category(){
            $(".navmain ul.dropdown").toggle();
          }
           function todo(){
           	$(".navmain>.category").toggle();
            $(".navmain>.search").toggle();
          }
      });
    </script>
    @yield('index_js')
     <script src="js/plugins.js"></script>
     <script src="js/main.js"></script>
	</body>
</html>