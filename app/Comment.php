<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model {

	/**
	 * Allow mass assignment of these fields for a new comment
	 * @var array
	 */	
	protected $fillable = ['content', 'post_id'];

	/**
	 * Post for which comment has been made
	 *
	 * @return mixed
	 */
	public function post()
	{
		return $this->belongsTo('App\Post');
	}

	/**
	 * Comment ratings (likes/dislikes)
	 *
	 * @return mixed
	 */
	public function ratings()
	{
		return $this->hasMany('App\CommentRating');
	}

	/**
	 * Calculate the number of 'likes' for this comment
	 *
	 * @return integer
	 */
	public function likesCount()
	{
		return $this->ratings()->where('value', 1)->count();
	}

	/**
	 * Calculate the number of 'dislikes' for this comment
	 *
	 * @return integer
	 */
	public function dislikesCount()
	{
		return $this->ratings()->where('value', -1)->count();
	}

}
