<div class="post-like-dislike">
	<a class="data-remote" data-type="post" data-type-id="{{$post->id}}" data-type-value="1">
		<i class="icon-thumbs-up"></i>
	</a>
	<span>{{ $post->likesCount() }}</span>
	<a class="data-remote" data-type="post" data-type-id="{{$post->id}}" data-type-value="-1">
		<i class="icon-thumbs-down"></i>
	</a>			
	<span>{{ $post->dislikesCount() }}</span>
</div>
<div style="overflow: hidden;">
	<h1>{{ $post->title }}</h1>
	<h4>{{ $post->created_at->toFormattedDateString() }}</h4>
</div>
<hr/>
<div class="post-content">{{ $post->content }}</div>