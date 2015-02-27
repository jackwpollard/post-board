<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class CommentRating extends Model {

	/**
	 * Table has been set as comment_ratings in migration
	 * Instead of Laravel default 'commentratings'
	 * @var string
	 */		
	protected $table = "comment_ratings";

	/**
	 * Allow mass assignment of these fields for a new comment rating
	 * @var array
	 */	
	protected $fillable = ['comment_id', 'value'];

	/**
	 * Comment to which comment rating belongs
	 *
	 * @return mixed
	 */
	public function comment()
	{
		return $this->belongsTo('App\Comment');
	}

}
