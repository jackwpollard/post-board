<?php

Route::get('/', 'PostsController@index');

Route::resource('posts', 'PostsController', ['only' => ['store']]);
Route::resource('comments', 'CommentsController', ['only' => ['store']]);
Route::resource('post_rating', 'PostRatingController', ['only' => ['store']]);
Route::resource('comment_rating', 'CommentRatingController', ['only' => ['store']]);