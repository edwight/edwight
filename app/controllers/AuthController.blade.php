<?php

class LoginController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function login()
	{
		//login
		return View::make('auth.login');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function postLogin()
	{
		//
		 $credentials = array(
 		'email' => Input::get('email'),
 		'password' => Input::get('password')
 		);
 
		try
	 	{
		 	$user = Sentry::authenticate($credentials, false);
		 	if ($user)
			 {
			 	return Redirect::route('index');
			 }
	 	}
	 	catch(\Exception $e)
	 	{
		 	return Redirect::route('auth.login')
		 	->withErrors(array('login' => $e->getMessage()));
		}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//procesar el post 
		$id = Input::get('user');
		$user = User::find($id);
		//return 'store '.$id.' '.Input::get('titulo').' '.$user;
		$post = new Post;
		$post->titulo = Input::get('titulo');
		$post->contenido = Input::get('contenido');
		$user->post()->save($post);
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
		//validacion 
		// store /admin/1
        $post = Post::find($id);
        $post->titulo = Input::get('titulo');
        $post->contenido = Input::get('contenido');
        $post->save();

        // redirect
        Session::flash('message', 'Successfully updated!');
        //si validacion es incorrecta
        //return Redirect::route('admin.edit', $id)->withInput();
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
