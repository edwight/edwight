<?php

class PostController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{	
		//lista de usuario
		//$post = Post::all();
		$post = Post::paginate(3);
		return View::make('post.index', array('post'=>$post));
	}


	public function show($id)
	{
		//detalles del usuario 
		$post = Post::find($id);
		return View::make('post.show')->with('post', $post);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function category($id)
	{

		//modificar usuario users/1/edit
		$user = User::find($id);
		return View::make('post.category')->with('user', $user);

	}




}
