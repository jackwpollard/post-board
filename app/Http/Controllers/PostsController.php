<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Post;

use Illuminate\Http\Request;

class PostsController extends Controller {

	/**
	 * Display a listing of all posts.
	 *
	 * @return Response
	 */
	public function index()
	{
		$posts = Post::latest()->with('comments')->get();
		return view('posts.all', ['posts' => $posts]);
	}

	/**
	 * Store a newly created post in the database.
	 *
	 * @return Response
	 */
	public function store(\Illuminate\Http\Request $request)
	{
		Post::create($request->except('_token'));
		return redirect('/');
	}

}
