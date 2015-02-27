<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentRatingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comment_ratings', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('comment_id')->unsigned();
			$table->foreign('comment_id')->references('id')->on('comments')->onDelete('cascade');
			$table->tinyInteger('value');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('comment_ratings');
	}

}