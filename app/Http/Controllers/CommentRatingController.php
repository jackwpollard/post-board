<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\CommentRating;

use Illuminate\Http\Request;

class CommentRatingController extends Controller {

	/**
	 * Store a newly created comment rating in the database.
	 *
	 * @return void
	 */
	public function store(\Illuminate\Http\Request $request)
	{
		CommentRating::create($request->all());
	}

}
