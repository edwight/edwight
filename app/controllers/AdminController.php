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
		return Input::all();
		//procesar el post 
		$id = Input::get('user');
		$user = User::find($id);
		$file = Input::file("photo");
		$fecha = new DateTime('today');
		//return date_format($fecha, 'Y-m-d H:i:s');		
		//return var_dump($fecha);
		return $filename = date_format($fecha, 'D-m-y ').' , '.$file->getClientOriginalName();
		//$start_day = date("d-m-Y", strtotime($start_day_old));
		$file->move('public/imgs/post', $filename);
		return $file->getClientOriginalName();
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
		return $user = Sentry::getUser();
		return $id = Input::get('user');
		return $user = User::find($id);
		$file = Input::file("photo");
		$fecha = new DateTime('today');

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
