<?php

class AdminController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$post = Post::all();
		//mostrar la lista de post
		$tags = Tag::all();
		return View::make('admin.index', array('post'=>$post, 'tags'=>$tags));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//crear el post 
		$user = User::find(1);
		return View::make('admin.create')->with('user', $user);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//validacion 
		$reglas =  array
		(
	        'titulo'  => 'required', 
	        'slug'  => 'required', 
	        'categorys'  => 'required',
	            // validamos que el nombre sea un campo obligatorio 
	        'contenido' => array('required', 'min:8'), 
	            // validamos que el usuario sea un campo obligatorio y de mínimo 8 caracteres
	        'imagen'  => array('unique:imgs'),
	            // validemos que el correo sea un campo obligatorio y con formato de email
    	);
    	$messages = array(
            'required' => 'El campo :attribute es obligatorio.',
            'min' => 'El campo :attribute no puede tener menos de :min carácteres.',
            'email' => 'El campo :attribute debe ser un email válido.',
            'max' => 'El campo :attribute no puede tener más de :max carácteres.',
            'unique' => 'El email ingresado ya existe en la base de datos'
        );
        $nuevo = array(
        	'categorys' => Input::get('categorys'),
        	'titulo' => Input::get('titulo'),
        	'slug' => Input::get('slug'),
        	'contenido' => Input::get('contenido'),
        	'imagen' => Input::file("photo")
        	);

        $validation = Validator::make($nuevo, $reglas, $messages);
		if ( $validation->fails())
		{
        // en caso de que la validación falle vamos a retornar al formulario 
        // pero vamos a enviar los errores que devolvió Validator
        // y también los datos que el usuario escribió 
        	return Redirect::to('admin/create')
                // Aquí se esta devolviendo a la vista los errores 
                ->withErrors($validation)
                // Aquí se esta devolviendo a la vista todos los datos del formulario
                ->withInput();
    	}
    	else
    	{

        	//'Datos Validos!';
        	$titulo = Input::get('titulo');
        	$category = Input::get('categorys');
			$user = Sentry::getUser();
			$userId = $user->id;
			//insertar Post
			$users = User::find($userId);
			$post = new Post;
			$post->titulo = $titulo;
			$post->slugPost = str_replace(' ','-',$titulo);
			$post->contenido = Input::get('contenido');
			//$post->slug = Input::get('url');
			$users->post()->save($post);
			//insertar categoria
			/*if (isset($category)) {
				
					$categorys = Category::find($category);
					$post->categorys()->save($categorys);
				
			} */
			//insertar tags
			$tag=Input::get('tags');
			if (isset($tag)) {
				foreach ($tag as $tagId) {
					$tags = Tag::find($tagId);
					$post->tags()->attach($tags);
				}
			}
			//$post->slug = Input::get('url');

			$date = date('Y-m-d');
			//insertar image
			$file = Input::file("photo");
		
			if (!empty($file))
			{
				//return "definida";
				$filename = $date.'__'.$file->getClientOriginalName();
				//return $fileSize = $filename->getClientSize();
				//$start_day = date("d-m-Y", strtotime($start_day_old));
				//$filename = $file->getClientOriginalName();
				$file->move('public/imgs/post', $filename);

				$Imgfile   =   new Img;
				$Imgfile->imagen = $filename;
				$post->img()->save($Imgfile);	
			}
		
			return Redirect::to('admin');
    	}
    	/*
		$categorys = Input::get('categorys');
		$user = Sentry::getUser();
		$userId = $user->id;
		//return $id = Input::get('user');
			//return $user = User::find($id);
		
		//insertar Post
		$users = user::find($userId);
		$post = new Post;
		$post->titulo = Input::get('titulo');
		$post->contenido = Input::get('contenido');
		//$post->slug = Input::get('url');
		$users->post()->save($post);
		//insertar tags
		$tag=Input::get('tags');
		if (isset($tag)) {
				foreach ($tag as $tagId) {
					$tags = Tag::find($tagId);
					$post->tags()->attach($tags);
				}
			}
		//$post->slug = Input::get('url');

		$date = date('Y-m-d');
		//insertar tags
		$file = Input::file("photo");
		if (!empty($file))
		{
			return "definida";
			/*
			$filename = $date.'__'.$file->getClientOriginalName();
			//return $fileSize = $filename->getClientSize();
			//$start_day = date("d-m-Y", strtotime($start_day_old));
			//$filename = $file->getClientOriginalName();
			$file->move('public/imgs/post', $filename);

			$Imgfile   =   new Img;
			$Imgfile->imagen = $filename;
			$post->img()->save($Imgfile);
			
			
		}
			//$Imgfile->retina = 
		return Redirect::to('admin');
		*/
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//admin/1
		$post = Post::find($id);
		return View::make('admin.show', array('post'=>$post));
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//editar un post /admin/1/edit
		$post = Post::find($id);
		return View::make('admin.edit')->with('post', $post);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//procesar el post 
		$categorys = Input::get('categorys');
		$user = Sentry::getUser();
		$userId = $user->id;
		//return $id = Input::get('user');
			//return $user = User::find($id);
		
		//insertar Post
		$users = user::find($userId);
		$post = Post::find($id);
		$post->titulo = Input::get('titulo');
		$post->contenido = Input::get('contenido');
		//$post->slug = Input::get('url');
		$users->post()->save($post);
		//insertar categoria
		$category = new Category;
		$category->name = $categorys;
		$post->categories()->save($category);
		//$post->slug = Input::get('url');
		return "punto";
		$file = Input::file("photo");
		return $fecha = new DateTime('today');

		//return date_format($fecha, 'Y-m-d H:i:s');		
		//return var_dump($fecha);
		$filename = date_format($fecha, 'D-m-y ').' , '.$file->getClientOriginalName();
		//$start_day = date("d-m-Y", strtotime($start_day_old));
		//$filename = $file->getClientOriginalName();
		$file->move('public/imgs/post', $filename);
		//$file->getClientOriginalName();
		//return 'store '.$id.' '.Input::get('titulo').' '.$user;
		$post = new Post;
		$post->titulo = Input::get('titulo');
		$post->contenido = Input::get('contenido');
		//$post->slug = Input::get('url');
		$user->post()->save($post);
		$tag=Input::get('tags');

		if (isset($tag)) {
				foreach ($tag as $tagId) {
					$tags = Tag::find($tagId);
					$post->tags()->attach($tags);
				}
			}
		
		return Redirect::to('admin');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//eliminar un post 
		$post = Post::find($id);
		$post->delete();
		Session::flash('message', 'Successfully deleted the nerd!');
        return Redirect::to('admin');
	}


}
