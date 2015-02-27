<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class PostRating extends Model {

	/**
	 * Table has been set as post_ratings in migration
	 * Instead of Laravel default 'postratings'
	 * @var string
	 */	
	protected $table = "post_ratings";

	/**
	 * Allow mass assignment of these fields for a new post rating
	 * @var array
	 */	
	protected $fillable = ['post_id', 'value'];

	/**
	 * Calculate the number of 'likes' for this post
	 *
	 * @return mixed
	 */
	public function post()
	{
		return $this->belongsTo('App\Post');
	}

}
