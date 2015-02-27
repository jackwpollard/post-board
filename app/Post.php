<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Post extends Model {

	/**
	 * Allow mass assignment of these fields for a new post
	 * @var array
	 */	
	protected $fillable = ['title', 'content'];

	/**
	 * Post comments
	 *
	 * @return mixed
	 */
	public function comments()
	{
		return $this->hasMany('App\Comment');
	}


	/**
	 * Post ratings (likes/dislikes)
	 *
	 * @return mixed
	 */
	public function ratings()
	{
		return $this->hasMany('App\PostRating');
	}

	/**
	 * Calculate the number of 'likes' for this post
	 *
	 * @return integer
	 */
	public function likesCount()
	{
		return $this->ratings()->where('value', 1)->count();
	}

	/**
	 * Calculate the number of 'dislikes' for this post
	 *
	 * @return integer
	 */
	public function dislikesCount()
	{
		return $this->ratings()->where('value', -1)->count();
	}

}
