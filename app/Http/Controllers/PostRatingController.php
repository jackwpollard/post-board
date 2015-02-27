<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\PostRating;

use Illuminate\Http\Request;

class PostRatingController extends Controller {

	/**
	 * Store a newly created post rating in the database.
	 *
	 * @return void
	 */
	public function store(\Illuminate\Http\Request $request)
	{
		PostRating::create($request->all());
	}

}
