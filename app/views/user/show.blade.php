<p>Bienbenido </p><strong>detalles</strong>
<div class="menu">
	<li><p>{{ HTML::link( 'lista' , 'lista usuario') }}</p></li>
	<li><p>{{ HTML::link( 'users/'.$user->id.'/edit', 'editar') }}</p></li>
	
</div>
<p>{{ HTML::link( 'logout' , 'salir') }}</p>

	  <p>{{ $user->first_name}}</p>
	    <p>{{ $user->last_name}}</p>
	     <p>{{$user->email}}</p>
	     <p>ultima<strong> sesion</strong></p>
	     <p/>{{$user->last_login}}</p>

	     <h2>post de: <strong>{{$user->email}}</strong></h2>
	      @foreach($user->post as $posts)
		<p>{{ HTML::link( 'admin/'.$posts->id , 'detalles') }}</p>
	   		 <br>
	  <p>{{ $posts->titulo}}</p>
	    
	@endforeach


	    