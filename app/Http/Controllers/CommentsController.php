<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Comment;

use Illuminate\Http\Request;

class CommentsController extends Controller {

	/**
	 * Store a newly created comment in the database.
	 *
	 * @return Response
	 */
	public function store(\Illuminate\Http\Request $request)
	{
		Comment::create($request->except('_token'));
		return redirect('/');
	}

}
