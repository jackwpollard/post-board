@extends('app')

@section('content')

<div class="row">
	<div class="col-md-7">
	@foreach($posts as $post)
		<article class="post-container">
			@include('partials.post')
			<div class="row comments-container">
				<div class="col-sm-12">
				@include('partials.form-new-comment', array('post' => $post))
				</div>
				@foreach ($post->comments as $comment)
					@include('partials.comment', array('comment' => $comment))
				@endforeach
			</div>
		</article>
	@endforeach
	</div>

	<div class="col-md-4 col-md-offset-1 post-container new-post">
		<h1>New post</h1>
		<hr/>
		@include('partials.form-new-post')
	</div>
</div>

@stop